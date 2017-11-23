<?php

require 'include/ticket.php';
require 'include/Attachments.php';
require 'include/TicketSettings.php';

require 'include/functions.php';

// fix if php version < 5.5
if (!function_exists('array_column')) {

    function array_column($input = null, $columnKey = null, $indexKey = null)
    {
        // Using func_get_args() in order to check for proper number of
        // parameters and trigger errors exactly as the built-in array_column()
        // does in PHP 5.5.
        $argc = func_num_args();
        $params = func_get_args();
        if ($argc < 2) {
            trigger_error("array_column() expects at least 2 parameters, {$argc} given", E_USER_WARNING);
            return null;
        }
        if (!is_array($params[0])) {
            trigger_error(
                'array_column() expects parameter 1 to be array, ' . gettype($params[0]) . ' given',
                E_USER_WARNING
            );
            return null;
        }
        if (!is_int($params[1])
            && !is_float($params[1])
            && !is_string($params[1])
            && $params[1] !== null
            && !(is_object($params[1]) && method_exists($params[1], '__toString'))
        ) {
            trigger_error('array_column(): The column key should be either a string or an integer', E_USER_WARNING);
            return false;
        }
        if (isset($params[2])
            && !is_int($params[2])
            && !is_float($params[2])
            && !is_string($params[2])
            && !(is_object($params[2]) && method_exists($params[2], '__toString'))
        ) {
            trigger_error('array_column(): The index key should be either a string or an integer', E_USER_WARNING);
            return false;
        }
        $paramsInput = $params[0];
        $paramsColumnKey = ($params[1] !== null) ? (string) $params[1] : null;
        $paramsIndexKey = null;
        if (isset($params[2])) {
            if (is_float($params[2]) || is_int($params[2])) {
                $paramsIndexKey = (int) $params[2];
            } else {
                $paramsIndexKey = (string) $params[2];
            }
        }
        $resultArray = array();
        foreach ($paramsInput as $row) {
            $key = $value = null;
            $keySet = $valueSet = false;
            if ($paramsIndexKey !== null && array_key_exists($paramsIndexKey, $row)) {
                $keySet = true;
                $key = (string) $row[$paramsIndexKey];
            }
            if ($paramsColumnKey === null) {
                $valueSet = true;
                $value = $row;
            } elseif (is_array($row) && array_key_exists($paramsColumnKey, $row)) {
                $valueSet = true;
                $value = $row[$paramsColumnKey];
            }
            if ($valueSet) {
                if ($keySet) {
                    $resultArray[$key] = $value;
                } else {
                    $resultArray[] = $value;
                }
            }
        }
        return $resultArray;
    }
}
function exec_ogp_module()
{
    global $db, $view;

    $ticket = new Ticket($db);
    $TicketSettings = new TicketSettings($db);

    $isAdmin = $db->isAdmin($_SESSION['user_id']);
    $services = $ticket->getServices($_SESSION['user_id'], $isAdmin);

    $attachmentSettings = $TicketSettings->get(array('attachments_enabled', 'attachment_save_dir', 'attachment_limit', 'attachment_max_size', 'attachment_extensions'));
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $attachments = new Attachments(
            $db,
            $_FILES['ticket_file'],
            $attachmentSettings['attachment_save_dir'],
            $attachmentSettings['attachment_limit'],
            $attachmentSettings['attachment_max_size'],
            explode(', ', $attachmentSettings['attachment_extensions'])
        );
        
        $_POST = array_map('trim', $_POST);

        $_SESSION['ticket']['ticket_subject'] = strip_real_escape_string($_POST['ticket_subject']);
        $_SESSION['ticket']['ticket_service'] = $_POST['ticket_service'];
        $_SESSION['ticket']['ticket_message'] = strip_real_escape_string($_POST['ticket_message']);

        $errors     = array();
        $fileErrors = array();

        if (empty($_POST['ticket_subject'])) {
            $errors[] = get_lang('no_ticket_subject');
        } elseif (strlen($_POST['ticket_subject']) > 64 || strlen($_POST['ticket_subject']) < 4) {
            $errors[] = get_lang('invalid_ticket_subject_length');
        }

        if (array_search($_POST['ticket_service'], array_column($services, 'home_id')) === false) {
            $errors[] = get_lang('invalid_home_selected');
        }

        if (empty($_POST['ticket_message'])) {
            $errors[] = get_lang('no_ticket_message');
        } elseif (strlen($_POST['ticket_message']) < 4) {
            $errors[] = get_lang('invalid_ticket_message_length');
        }

        if ($attachments->checkPath() === false && $attachmentSettings['attachments_enabled']) {
            $fileErrors[] = get_lang('attachment_directory_not_writable');
        }

        if ($attachments->validAttachmentCount() === false && $attachmentSettings['attachments_enabled']) {
            $fileErrors[] = get_lang_f('attachment_invalid_file_count', $attachmentSettings['attachment_limit']);
        }

        if (empty($errors)) {
            $open = $ticket->open($_SESSION['user_id'], getClientIPAddress(), strip_real_escape_string($_POST['ticket_subject']), strip_real_escape_string($_POST['ticket_message']), $_POST['ticket_service'], $isAdmin);

            if (!$open) {
                echo ticketErrors(array(get_lang('failed_to_open')));
                $view->refresh("?m=tickets&p=submitticket", 60);
                return;
            }

            if (isset($_SESSION['ticket'])) {
                unset($_SESSION['ticket']);
            }

            if ($attachmentSettings['attachments_enabled']) {
                // Validate the uploaded files if specified path exists and is writable. and if the amount of files is valid.
                // if any files fail to validate, then only save/move the ones which validated successfully and show an error for the ones which didn't.
                if (empty($fileErrors)) {
                    $validator = $attachments->validate();
                    $fileErrors[] = $validator->getErrors();
                    $attachments->save($open['tid']);
                }

                setcookie('fileErrors', json_encode(array('uid' => $open['uid'], 'fileErrors' => $fileErrors)), time() + 86400, '/');
            }

            $view->refresh("?m=tickets&p=viewticket&tid=".$open['tid']."&uid=".$open['uid'], 0);
            return;
        } else {
            echo ticketErrors($errors);
            $view->refresh("?m=tickets&p=submitticket", 60);
            return;
        }
    }

    echo '<h2>'.get_lang('submit_ticket').'</h2>';

    echo '<div id="jsErrorBox">'. ticketErrors() .'</div>';

    echo '
    <form method="POST" enctype="multipart/form-data">
    <div class="ticket_elementDiv">
        <label>'.get_lang('ticket_subject').'</label>
        <input type="text" id="ticket_subject" name="ticket_subject" '. (isset($_SESSION['ticket']['ticket_subject']) ? 'value="'.$_SESSION['ticket']['ticket_subject'].'"' : '')  .' pattern=".{4,64}" required title="4 to 64 characters" autofocus>
    </div>
    <div class="ticket_elementDiv">
        <label>'.get_lang('ticket_service').'</label>
        <select name="ticket_service">';

    foreach ($services as $service) {
        echo '<option value="'.$service['home_id'].'" '.(isset($_SESSION['ticket']['ticket_service']) && $_SESSION['ticket']['ticket_service'] == $service['home_id'] ? 'selected' : '') .'>'.htmlentities($service['home_name']).'</option>';
    }
        
    echo '</select>
    </div>
    <div class="ticket_elementDiv">
        <label>'.get_lang('ticket_message').'</label>
        <textarea rows="12" id="ticket_message" name="ticket_message">'. (isset($_SESSION['ticket']['ticket_message']) ? $_SESSION['ticket']['ticket_message'] : '')  .'</textarea>
    </div>';

    if ($attachmentSettings['attachments_enabled']) {
        echo attachmentForm();
    }

    echo '<div class="ticket_buttonDiv">
        <input type="submit" id="submit" value="'.get_lang('submit_ticket').'" />
    </div>
</form>';

    require 'js/javascript_vars.php';
?>

<script src="modules/tickets/js/helpers.js"></script>
<script src="modules/tickets/js/ticket.js"></script>
<?php
}

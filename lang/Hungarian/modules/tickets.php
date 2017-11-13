<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2017 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define('support_tickets', "Support Tickets");
define('ticket_subject', "Tárgy");
define('ticket_status', "Státusz");
define('ticket_updated', "Utolsó frissítés");
define('ticket_options', "Opciók");
define('viewing_ticket', "Viewing Ticket");
define('ticket_not_found', "The given ticket parameters don't match an existing ticket.");
define('ticket_cant_read', "Insufficient permission to view ticket.");
define('cant_view_ticket', "Unable to retrieve the ticket information.");
define('ticket_id', "Ticket ID");
define('service_id', "Szolgáltatás azonosító");
define('ticket_submitted', "Ticket Submitted");
define('submitter_info', "Beküldő adatai");
define('name', "Név");
define('ip', "IP");
define('role', "User Role");
define('ticket_submit_response', "Válasz küldése");
define('ticket_close', "Bezárás");
define('no_ticket_replies', "No Ticket Replies");
define('no_tickets_submitted', "No Tickets have been submitted.");
define('submit_ticket', "Submit Ticket");
define('ticket_service', "Szolgáltatás");
define('ticket_message', "Üzenet");
define('ticket_errors_occured', "The following errors occured when submitting your ticket");
define('no_ticket_subject', "No Ticket Subject");
define('invalid_ticket_subject_length', "Invalid Subject Length (4 to 64 characters)");
define('invalid_home_selected', "Érvénytelen szerver kiválasztva");
define('no_ticket_message', "No Ticket Message Provided");
define('invalid_ticket_message_length', "Invalid Ticket Message Length (Minimum of 4 characters)");
define('ticket_no_service', "No service selected for this ticket.");
define('failed_to_open', "Failed to open the ticket.");
define('failed_to_reply', "Failed to create response to ticket.");
define('no_ticket_reply', "No Ticket Reply Provided");
define('invalid_ticket_reply_length', "Invalid Ticket Reply Length (Minimum of 4 characters)");
define('ticket_closed', "Ticket Closed");
define('ticket_open', "Ticket Open");
define('ticket_admin_response', "Adminisztrátor válasza");
define('ticket_customer_response', "Ügyfél válasza");
define('ticket_invalid_page_num', "You have attempted to view a page number with no tickets!");
define('ticket_is_closed', "This ticket is closed. You may reply to this ticket to reopen it.");
define('reply', "Reply");
define('invalid_rating', "The rating received is not valid.");
define('successfully_rated_response', "Successfully rated response.");
define('failed_rating_response', "Failed to rate the response.");
define('attachment_not_all_parameters_sent', "Not all parameters have been sent to download the file.");
define('requested_attachment_missing', "The requested attachment does not exist.");
define('requested_attachment_missing_db', "The requested attachment does not exist in the database.");
define('ratings_disabled', "Rating responses is not enabled.");
define('attachments', "Attachments");
define('add_file_attachment', "Add More");
define('attachment_size_info', "Each selected file may be a maximum of %s");
define('attachment_file_size_info', "A maximum of %s file(s) may be uploaded, %s each.");
define('attachment_allowed_extensions_info', "Allowed File Extensions: %s");
define('ticket_fix_before_submitting', "Please fix the following errors before submitting the ticket");
define('ticket_fix_before_replying', "Please fix the following errors before replying to the ticket");
define('ticket_problem_with_attachments', "There was a problem with the file(s) you attached");
define('ticket_attachment_invalid_extension', "%1 does not contain a permitted extension.");
define('ticket_attachment_invalid_size', "%1 is larger than the allowed file size: %2 bytes maximum!");
define('ticket_max_file_elements', "Only a maximum of %1 file elements may exist.");
define('ticket_attachment_multiple_files', "One or more file inputs have multiple files selected.");
define('attachment_err_ini_size', "%s (%s) exceeds the 'upload_max_filesize' setting.");
define('attachment_err_partial', "%s was only partially uploaded.");
define('attachment_err_no_tmp', "No tmp directory exists to save %s");
define('attachment_err_cant_write', "Unable to write %s to disk.");
define('attachment_err_extension', "An extension stopped the upload of %s. Review your logs.");
define('attachment_too_large', "%s (%s) is larger than the maximum allowed size of %s!");
define('attachment_forbidden_type', "The file type of %s may not be uploaded.");
define('attachment_directory_not_writable', "Unable to save the attached files. The specified save directory is not writable.");
define('attachment_invalid_file_count', "The amount of files sent to the server was invalid. Only a maximum of %s may be uploaded");
define('ticket_settings', "Ticket Settings");
define('ratings_enabled', "Ratings");
define('ratings_enabled_info', "Set if rating responses should be allowed.");
define('attachments_enabled', "Attachments");
define('attachments_enabled_info', "Set if the attachment system should be enabled.");
define('attachment_max_size', "Max File Size");
define('attachment_max_size_info', "Sets the max file size for attachments.");
define('attachment_limit', "Attachment Limit");
define('attachment_limit_info', "Sets how many files may be attached at once. 0 for no limit.");
define('attachment_save_dir', "Attachment Upload Location");
define('attachment_save_dir_info', "Sets where attachments should be uploaded. Ideally, outside of the public_html folder or direct access blocked.");
define('attachment_extensions', "Attachment Extensions");
define('attachment_extensions_info', "Sets the permitted extensions. Each extension should be separated by a comma.");
define('show_php_ini', "Show Estimated INI Settings");
define('settings_errors_occured', "The following errors occured when attempting to update the settings - not everything has been updated!");
define('invalid_max_size', "Invalid value for Max Size setting.");
define('invalid_unit', "Invalid unit type for Max Size setting. Expecting KB, MB, GB, TB, or PB.");
define('invalid_save_dir', "The specified save directory does not exist and can not be created.");
define('invalid_save_dir_not_writable', "The specified save directory exists but is not writable.");
define('invalid_extensions', "No attachment extensions have been specified.");
define('update_settings', "Update Settings");
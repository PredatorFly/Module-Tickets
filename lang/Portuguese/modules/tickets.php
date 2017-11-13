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

define('support_tickets', "Tickets de suporte");
define('ticket_subject', "Assunto");
define('ticket_status', "Estado");
define('ticket_updated', "Ultima actualização");
define('ticket_options', "Opções");
define('viewing_ticket', "Ver Ticket");
define('ticket_not_found', "Os parâmetros de ticket fornecidos não correspondem a um ticket existente.");
define('ticket_cant_read', "Permissão insuficiente para ver o ticket.");
define('cant_view_ticket', "Não é possível recuperar as informações do ticket.");
define('ticket_id', "Ticket ID");
define('service_id', "ID do serviço");
define('ticket_submitted', "Ticket Enviado");
define('submitter_info', "Informação do remetente");
define('name', "Nome");
define('ip', "IP");
define('role', "Regras do Usuário ");
define('ticket_submit_response', "Enviar resposta");
define('ticket_close', "Fechar");
define('no_ticket_replies', "Ticket sem resposta");
define('no_tickets_submitted', "Não foram enviados bilhetes.");
define('submit_ticket', "Enviar Ticket");
define('ticket_service', "Serviço");
define('ticket_message', "Messagem");
define('ticket_errors_occured', "Ocorreram os seguintes erros ao enviar o seu ticket");
define('no_ticket_subject', "Ticket  Sem Assunto");
define('invalid_ticket_subject_length', "Comprimento do campo assunto inválido (4 a 64 caracteres)");
define('invalid_home_selected', "Selecção de directório invalido");
define('no_ticket_message', "Nenhuma mensagem de Ticket  foi fornecida");
define('invalid_ticket_message_length', "Comprimento da mensagem do ticket inválido (mínimo 4 caracteres)");
define('ticket_no_service', "Nenhum serviço seleccionado para este ticket.");
define('failed_to_open', "Falha ao abrir o ticket.");
define('failed_to_reply', "Falha ao criar resposta ao ticket.");
define('no_ticket_reply', "Nenhuma resposta de ticket fornecida");
define('invalid_ticket_reply_length', "Comprimento de resposta de ticket inválido (mínimo de 4 caracteres)");
define('ticket_closed', "Ticket Fechado");
define('ticket_open', "Ticket Aberto");
define('ticket_admin_response', "Resposta de Administrador");
define('ticket_customer_response', "Resposta do Cliente");
define('ticket_invalid_page_num', "Você tentou ver um número de página sem bilhetes!");
define('ticket_is_closed', "Este ticket encontra-se fechado. Você pode responder ao mesmo para reabri-lo.");
define('reply', "Responder");
define('invalid_rating', "Desculpe, mas a classificação recebida não é válida.");
define('successfully_rated_response', "Resposta avaliada com sucesso.");
define('failed_rating_response', "Desculpe, mas ocorreu uma falha ao avaliar a resposta.");
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
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

define('support_tickets', "Boletos de soporte");
define('ticket_subject', "Asunto");
define('ticket_status', "Estado");
define('ticket_updated', "Ultima actualización");
define('ticket_options', "Opciones");
define('viewing_ticket', "Viendo Boleto");
define('ticket_not_found', "Los parámetros del boleto no coinciden con uno ya existente.");
define('ticket_cant_read', "Permisos insuficientes para ver el boleto");
define('cant_view_ticket', "No se puede recuperar la información del boleto");
define('ticket_id', "Boleto ID");
define('service_id', "Servicio ID");
define('ticket_submitted', "Boleto enviado");
define('submitter_info', "Información del remitente");
define('name', "Nombre");
define('ip', "IP");
define('role', "Rol de Usuario");
define('ticket_submit_response', "Enviar Respuesta");
define('ticket_close', "Cerrar");
define('no_ticket_replies', "No hay respuestas de Boleto");
define('no_tickets_submitted', "No se han enviado Boletos");
define('submit_ticket', "Enviar Boleto");
define('ticket_service', "Servicio");
define('ticket_message', "Mensaje");
define('ticket_errors_occured', "Los siguientes errores ocurrieron al enviar su boleto");
define('no_ticket_subject', "No hay asunto de Boleto");
define('invalid_ticket_subject_length', "Longitud de Asunto inválida (4 a 64 caracteres)");
define('invalid_home_selected', "Home Seleccionada Inválida");
define('no_ticket_message', "No Hay Mensaje proporcionado en el Boleto");
define('invalid_ticket_message_length', "Longitud de Mensaje inválida (Mínimo 4 caracteres)");
define('ticket_no_service', "No hay servicio seleccionado para este boleto.");
define('failed_to_open', "No se pudo abrir el boleto.");
define('failed_to_reply', "No se pudo crear la respuesta al boleto.");
define('no_ticket_reply', "No se proporciono respuesta al Boleto");
define('invalid_ticket_reply_length', "Longitud de Respuesta inválida (Mínimo 4 caracteres)");
define('ticket_closed', "Boleto Cerrado");
define('ticket_open', "Boleto Abierto");
define('ticket_admin_response', "Respuesta del Administrador");
define('ticket_customer_response', "Respuesta del Cliente");
define('ticket_invalid_page_num', "Haz intentado ver un número de página sin boletos!");
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
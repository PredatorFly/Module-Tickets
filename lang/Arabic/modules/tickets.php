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

define('support_tickets', "تذاكر الدعم");
define('ticket_subject', "الموضوع");
define('ticket_status', "الحالة");
define('ticket_updated', "آخر تحديث");
define('ticket_options', "الخيارات");
define('viewing_ticket', "عرض تذكرة");
define('ticket_not_found', "معلمات التذكرة لا تتطابق مع التذكرة الموجودة.");
define('ticket_cant_read', "عدم كفاية الإذن لعرض التذاكر.");
define('cant_view_ticket', "غير قادر على استرداد معلومات التذكرة.");
define('ticket_id', "اي دي التذكرة");
define('service_id', "اي دي الخدمة");
define('ticket_submitted', "تم إرسال التذكرة");
define('submitter_info', "معلومات المرسل");
define('name', "الاسم");
define('ip', "الأيبي");
define('role', "دور المستخدم");
define('ticket_submit_response', "إرسال الرد");
define('ticket_close', "أغلق");
define('no_ticket_replies', "لا توجد أية تعليقات");
define('no_tickets_submitted', "لم يتم تقديم تذاكر.");
define('submit_ticket', "قدم التذكرة");
define('ticket_service', "خدمة");
define('ticket_message', "رسالة");
define('ticket_errors_occured', "حدثت الأخطاء التالية عند إرسال التذكرة");
define('no_ticket_subject', "لا موضوع للتذكرة");
define('invalid_ticket_subject_length', "طول الموضوع غير صالح (4 إلى 64 حرفا)");
define('invalid_home_selected', "الصفحة المحددّة غير صالحة");
define('no_ticket_message', "لا رسالة تذكرة مقدمة");
define('invalid_ticket_message_length', "طول رسالة التذكرة غير صالح (بحد أدنى 4 أحرف)");
define('ticket_no_service', "لم يتم تحديد أي خدمة لهذه التذكرة.");
define('failed_to_open', "أخفق فتح التذكرة.");
define('failed_to_reply', "أخفقت في إنشاء استجابة للتذكرة.");
define('no_ticket_reply', "لا رد للتذكرة المقدّمة");
define('invalid_ticket_reply_length', "Invalid Ticket Reply Length (Minimum of 4 characters)");
define('ticket_closed', "تذكرة مغلقة");
define('ticket_open', "تذكرة مفتوحة");
define('ticket_admin_response', "رد المشرف");
define('ticket_customer_response', "استجابة العملاء");
define('ticket_invalid_page_num', "You have attempted to view a page number with no tickets!");
define('ticket_is_closed', "This ticket is closed. You may reply to this ticket to reopen it.");
define('reply', "الرد");
define('invalid_rating', "التقييم المستلم غير صالح.");
define('successfully_rated_response', "تم تقييم الاستجابة بنجاح.");
define('failed_rating_response', "أخفق تقييم الاستجابة.");
define('attachment_not_all_parameters_sent', "Not all parameters have been sent to download the file.");
define('requested_attachment_missing', "The requested attachment does not exist.");
define('requested_attachment_missing_db', "The requested attachment does not exist in the database.");
define('ratings_disabled', "Rating responses is not enabled.");
define('attachments', "Attachments");
define('add_file_attachment', "أضف المزيد");
define('attachment_size_info', "Each selected file may be a maximum of %s");
define('attachment_file_size_info', "A maximum of %s file(s) may be uploaded, %s each.");
define('attachment_allowed_extensions_info', "Allowed File Extensions: %s");
define('ticket_fix_before_submitting', "Please fix the following errors before submitting the ticket");
define('ticket_fix_before_replying', "Please fix the following errors before replying to the ticket");
define('ticket_problem_with_attachments', "There was a problem with the file(s) you attached");
define('ticket_attachment_invalid_extension', "%1 does not contain a permitted extension.");
define('ticket_attachment_invalid_size', "%1 is larger than the allowed file size. %2 maximum!");
define('ticket_max_file_elements', "Only a maximum of %1 file inputs may exist.");
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
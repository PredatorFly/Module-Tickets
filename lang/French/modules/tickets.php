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

define('support_tickets', "Tickets de Support");
define('ticket_subject', "Sujet");
define('ticket_status', "Statut");
define('ticket_updated', "Dernière mise à jour");
define('ticket_options', "Options");
define('viewing_ticket', "Voir le Ticket");
define('ticket_not_found', "Les paramètres du Ticket ne correspondent à aucun Ticket existant.");
define('ticket_cant_read', "Permissions insuffisantes pour voir le ticket.");
define('cant_view_ticket', "Impossible d'obtenir les informations du ticket.");
define('ticket_id', "ID du Ticket");
define('service_id', "ID du Service");
define('ticket_submitted', "Ticket soumis le");
define('submitter_info', "Envoyé par");
define('name', "Nom");
define('ip', "IP");
define('role', "Rôle de l'utilisateur");
define('ticket_submit_response', "Envoyer la Réponse");
define('ticket_close', "Fermer le Ticket");
define('no_ticket_replies', "Pas de Réponse au Ticket");
define('no_tickets_submitted', "Aucun Ticket n'a été envoyé.");
define('submit_ticket', "Ouvrir un Ticket");
define('ticket_service', "Service");
define('ticket_message', "Message");
define('ticket_errors_occured', "L'erreur suivante s'est produite lors de l'envoi du Ticket");
define('no_ticket_subject', "Pas de Sujet pour le Ticket");
define('invalid_ticket_subject_length', "Longueur du Sujet invalide (4 à 64 caractères)");
define('invalid_home_selected', "Service sélectionné invalide");
define('no_ticket_message', "Pas de Message pour le Ticket");
define('invalid_ticket_message_length', "Longueur du Message invalide pour le Ticket (minimum de 4 caractères)");
define('ticket_no_service', "Pas de Service sélectionné pour le Ticket.");
define('failed_to_open', "Impossible d'ouvrir le Ticket.");
define('failed_to_reply', "Impossible de créer la Réponse au Ticket.");
define('no_ticket_reply', "Pas de Réponse fournie pour le Ticket");
define('invalid_ticket_reply_length', "Longueur de la Réponse invalide pour le Ticket (minimum de 4 caractères)");
define('ticket_closed', "Ticket Fermé");
define('ticket_open', "Ticket Ouvert");
define('ticket_admin_response', "Réponse Admin");
define('ticket_customer_response', "Réponse Client");
define('ticket_invalid_page_num', "Vous avez tenté d'accéder à un numéro de page sans Ticket!");
define('ticket_is_closed', "Le Ticket est fermé. Vous pouvez répondre au Ticket pour le rouvrir.");
define('reply', "Répondre");
define('invalid_rating', "La note reçue n'est pas valide.");
define('successfully_rated_response', "Réponse correctement notée.");
define('failed_rating_response', "Erreur lors de l'évaluation de la réponse.");
define('attachment_not_all_parameters_sent', "Tous les paramètres n'ont pas étés envoyés pour télécharger le fichier.");
define('requested_attachment_missing', "La pièce jointe demandée n'existe pas.");
define('requested_attachment_missing_db', "La pièce jointe demandée n'existe pas dans la base de données.");
define('ratings_disabled', "Noter les réponses n'est pas activé.");
define('attachments', "Pièces Jointes");
define('add_file_attachment', "Ajouter Plus");
define('attachment_size_info', "Chaque fichier sélectionné ne doit pas dépasser %s");
define('attachment_file_size_info', "Un maximum de %s fichier(s) peut être envoyé, %s chacun.");
define('attachment_allowed_extensions_info', "Extensions de Fichier Autorisées: %s");
define('ticket_fix_before_submitting', "Veuillez corriger l'erreur suivante avant de soumettre le ticket");
define('ticket_fix_before_replying', "Veuillez corriger l'erreur suivante avant de répondre au ticket");
define('ticket_problem_with_attachments', "Une erreur est survenue avec le(s) fichier(s) que vous avez joint.");
define('ticket_attachment_invalid_extension', "%1 ne contient pas d'extension autorisée.");
define('ticket_attachment_invalid_size', "%1 est plus gros que la taille de fichier autorisée. %2 maximum!");
define('ticket_max_file_elements', "Seulement un maximum de %1 champs de fichiers peut exister.");
define('ticket_attachment_multiple_files', "Une ou plusieurs entrées de fichier ont plusieurs fichiers sélectionnés.");
define('attachment_err_ini_size', "%s (%s) dépasse le paramètre 'upload_max_filesize'.");
define('attachment_err_partial', "%s a été seulement partiellement envoyé.");
define('attachment_err_no_tmp', "Aucun répertoire temporaire de PHP n'existe pour sauvegarder %s");
define('attachment_err_cant_write', "Impossible d'écrire %s sur le disque");
define('attachment_err_extension', "Une extension a arrêté l'envoi de %s. Regardez vos logs.");
define('attachment_too_large', "%s (%s) est plus gros que la taille maximale autorisée de %s!");
define('attachment_forbidden_type', "Le type de fichier de %s ne peut pas être envoyé.");
define('attachment_directory_not_writable', "Impossible de sauvegarder la pièce jointe. Le dossier de destination n'est pas autorisé en écriture.");
define('attachment_invalid_file_count', "La quantité de fichiers envoyés au serveur est incorrecte. Seulement un maximum de %s peut être envoyé");
define('ticket_settings', "Paramètres des Tickets");
define('ratings_enabled', "Notes");
define('ratings_enabled_info', "Défini si les réponses d'évaluation doivent être autorisées.");
define('attachments_enabled', "Pièces Jointes");
define('attachments_enabled_info', "Défini si les pièces jointes doivent être activées.");
define('attachment_max_size', "Taille Maximum des Fichiers");
define('attachment_max_size_info', "Défini la taille maximale des fichiers joints.");
define('attachment_limit', "Limite des Pièces Jointes");
define('attachment_limit_info', "Défini combien de fichiers peuvent être attachés à la fois. Indiquer 0 pour aucune limite.");
define('attachment_save_dir', "Emplacement des Pièces Jointes");
define('attachment_save_dir_info', "Défini où les pièces jointes doivent être envoyées. Idéalement, en dehors du dossier public_html ou alors avec l'accès direct bloqué.");
define('attachment_extensions', "Extensions des Pièces Jointes");
define('attachment_extensions_info', "Défini les extensions autorisées. Chaque extension doit être séparée par une virgule.");
define('show_php_ini', "Voir une estimation de la config PHP");
define('settings_errors_occured', "Les erreurs suivantes sont survenues lors de la tentative de mise à jour des paramètres - tout n'a pas été mis à jour!");
define('invalid_max_size', "Valeur incorrecte pour le paramètre Taille Maximum des Fichiers");
define('invalid_unit', "Unité invalide  pour le paramètre Taille Maximum des Fichiers. Unité attendue: KB, MB, GB, TB, ou PB.");
define('invalid_save_dir', "Le dossier de sauvegarde spécifié n'existe pas et ne peut pas être créé.");
define('invalid_save_dir_not_writable', "Le dossier de sauvegarde spécifié existe mais n'est pas autorisé en écriture..");
define('invalid_extensions', "Aucune extension de pièce jointe n'a été spécifiée.");
define('update_settings', "Enregistrer les Paramètres");
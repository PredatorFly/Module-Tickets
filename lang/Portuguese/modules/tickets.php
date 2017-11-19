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
define('attachment_not_all_parameters_sent', "Nem todos os parâmetros foram enviados correctamente para baixar o arquivo.");
define('requested_attachment_missing', "O anexo solicitado não existe.");
define('requested_attachment_missing_db', "O anexo solicitado não existe na base de dados.");
define('ratings_disabled', "As respostas de avaliação não estão habilitadas.");
define('attachments', "Anexos");
define('add_file_attachment', "Adicione mais");
define('attachment_size_info', "Cada arquivo seleccionado pode conter o máximo de %s");
define('attachment_file_size_info', "O máximo de %s arquivo(s) podem ser carregados, %s a cada um.");
define('attachment_allowed_extensions_info', "Extensões de arquivo permitidas: %s");
define('ticket_fix_before_submitting', "Corrija os seguintes erros antes de enviar o ticket");
define('ticket_fix_before_replying', "Corrija os seguintes erros antes de responder ao ticket");
define('ticket_problem_with_attachments', "Ocorreu um problema com o(s) arquivo(s) que você anexou");
define('ticket_attachment_invalid_extension', "%1 não contém uma extensão permitida.");
define('ticket_attachment_invalid_size', "%1 é maior que o tamanho do arquivo permitido. %2 máximo!");
define('ticket_max_file_elements', "Somente um máximo de entradas de arquivo %1 podem existir.");
define('ticket_attachment_multiple_files', "Uma ou mais entradas de arquivos têm vários arquivos seleccionados.");
define('attachment_err_ini_size', "%s (%s) excede o 'upload_max_filesize' das configurações permitidas");
define('attachment_err_partial', "%s foi parcialmente carregado.");
define('attachment_err_no_tmp', "Não existe nenhum directório \"tmp\" para salvar %s");
define('attachment_err_cant_write', "Impossibilitado de escrever %s para o disco.");
define('attachment_err_extension', "Uma extensão interrompeu o upload de %s. Reveja os logs para perceber melhor o que aconteceu.");
define('attachment_too_large', "%s (%s) é maior que o tamanho máximo permitido de %s!");
define('attachment_forbidden_type', "O tipo de arquivo de %s não pode ser carregado.");
define('attachment_directory_not_writable', "Não foi possível salvar os arquivos anexados. O directório que permite guardar/salvar os seus arquivos especificados pode não conter as permissões correctas para salvar/guardar/modificar.");
define('attachment_invalid_file_count', "A quantidade de arquivos enviados para o servidor foi inválida. Apenas um máximo de %s pode ser carregado");
define('ticket_settings', "Configurações de Ticket");
define('ratings_enabled', "Classificações");
define('ratings_enabled_info', "Defina se as respostas de classificação devem ser permitidas.");
define('attachments_enabled', "Anexos");
define('attachments_enabled_info', "Defina se o sistema de anexos deve ser ativado.");
define('attachment_max_size', "Tamanho máximo do arquivos");
define('attachment_max_size_info', "Define o tamanho máximo do arquivo para anexos.");
define('attachment_limit', "Limite de Anexos");
define('attachment_limit_info', "Define quantos arquivos podem ser anexados ao mesmo tempo. 0 sem limite.");
define('attachment_save_dir', "Localização do upload do anexo");
define('attachment_save_dir_info', "Define onde os anexos devem ser carregados. Idealmente, fora da pasta public_html ou acesso directo bloqueado.");
define('attachment_extensions', "Extensões de anexos");
define('attachment_extensions_info', "Define as extensões permitidas. Cada extensão deve ser separada por uma vírgula \" , \".");
define('show_php_ini', "Mostrar configurações INI estimadas");
define('settings_errors_occured', "Ocorreram os seguintes erros ao tentar actualizar as configurações - nem tudo foi actualizado!");
define('invalid_max_size', "Valor inválido para configuração de tamanho máximo.");
define('invalid_unit', "Tipo de unidade inválido para as configurações de tamanho Máximo. Esperando KB, MB, GB, TB ou PB.");
define('invalid_save_dir', "O directório de salvação especificado não existe e não pode ser criado.");
define('invalid_save_dir_not_writable', "O directório de salvação especificado existe, mas não pode ser gravado.");
define('invalid_extensions', "Nenhuma extensão de anexo foi especificada.");
define('update_settings', "Actualizar configurações");
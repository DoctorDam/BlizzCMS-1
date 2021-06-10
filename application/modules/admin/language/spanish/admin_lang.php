<?php
/**
 * BlizzCMS
 *
 * @author  WoW-CMS
 * @copyright  Copyright (c) 2017 - 2021, WoW-CMS.
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    https://wow-cms.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['dashboard'] = 'Panel';
$lang['settings'] = 'Ajustes';
$lang['system'] = 'Sistema';
$lang['modules'] = 'Módulos';
$lang['realms'] = 'Reinos';
$lang['users'] = 'Usuarios';
$lang['all_users'] = 'Todos los usuarios';
$lang['banned_users'] = 'Banned Users';
$lang['sections'] = 'Sections';
$lang['pages'] = 'Páginas';
$lang['slides'] = 'Slides';

$lang['general'] = 'General';
$lang['captcha'] = 'Captcha';
$lang['email_preferences'] = 'Email Preferences';

$lang['recaptcha'] = 'reCaptcha';
$lang['hcaptcha'] = 'hCaptcha';
$lang['light'] = 'Light';
$lang['dark'] = 'Dark';
$lang['mail'] = 'Mail';
$lang['sendmail'] = 'Sendmail';
$lang['smtp'] = 'SMTP';

$lang['select_theme'] = 'Select a theme';

$lang['manage_account'] = 'Administrar Cuenta';
$lang['update_information'] = 'Actualizar Información de la Cuenta';
$lang['add_ban'] = 'Add Ban';
$lang['view_ban'] = 'View Ban';
$lang['create_menu'] = 'Crear Menú';
$lang['edit_menu'] = 'Editar Menú';
$lang['create_news'] = 'Crear Noticia';
$lang['edit_news'] = 'Editar Noticia';
$lang['create_page'] = 'Crear Página';
$lang['edit_page'] = 'Editar Página';
$lang['create_realm'] = 'Crear Reino';
$lang['edit_realm'] = 'Editar Reino';
$lang['create_slide'] = 'Crear Slide';
$lang['edit_slide'] = 'Editar Slide';

$lang['discord_server'] = 'Discord (Server ID)';
$lang['theme'] = 'Tema';
$lang['facebook_url'] = 'Facebook URL';
$lang['twitter_url'] = 'Twitter URL';
$lang['youtube_url'] = 'Youtube URL';
$lang['client_id'] = 'Client ID';
$lang['secret_password'] = 'Secret Password';
$lang['admin_access_level'] = 'GMLevel for administrator rank';
$lang['mod_access_level'] = 'GMLevel for moderator rank';
$lang['sender_email'] = 'Correo electrónico del remitente';
$lang['sender_name'] = 'Nombre del remitente';
$lang['public_key'] = 'Public key';
$lang['private_key'] = 'Private key';
$lang['empty_now'] = 'Empty now';
$lang['check_soap'] = 'Check SOAP';
$lang['view'] = 'View';
$lang['logs'] = 'Logs';
$lang['ban_date'] = 'Ban Date';
$lang['unban_date'] = 'Unban Date';
$lang['ban_by'] = 'Ban By';
$lang['reason'] = 'Reason';
$lang['unban_user'] = 'Unban User';

$lang['count_accounts_created'] = 'Cuentas Creadas';
$lang['count_accounts_banned'] = 'Cuentas Baneadas';
$lang['total_accounts_registered'] = 'Total cuentas registradas.';
$lang['total_accounts_banned'] = 'Total cuentas baneadas.';

$lang['optional_settings'] = 'Optional settings';
$lang['option_status'] = 'Option status';
$lang['social_configuration'] = 'Social networks configuration';
$lang['main_ranks_configuration'] = 'Main ranks configuration';
$lang['characters_database'] = 'Characters database';
$lang['soap_configuration'] = 'SOAP configuration';
$lang['check_realm_status'] = 'Check realm status';
$lang['captcha_on_pages'] = 'Captcha on pages';
$lang['enable_captcha_login'] = 'Enable captcha on login page?';
$lang['enable_captcha_register'] = 'Enable captcha on register page?';
$lang['enable_captcha_forgot'] = 'Enable captcha on forgot password page?';
$lang['register_validation'] = 'Register validation';
$lang['enable_register_validation'] = 'Enable register validation?';
$lang['cache'] = 'Cache';
$lang['cache_info'] = 'Clear all cache files related to this site.<br><span class="uk-text-bold uk-text-danger">Warning:</span> First loading of the website can be slow!';
$lang['sessions'] = 'Sessions';
$lang['sessions_info'] = 'Clear sessions data stored on the site.<br><span class="uk-text-bold uk-text-danger">Warning:</span> You will be disconnected after performing this action!';
$lang['enable_news_comments'] = 'Allow comments on the news?';
$lang['attach_zip_file'] = 'Attach a zip file by dropping them here or';
$lang['selecting_one'] = 'selecting one';

/**
 * Alerts
*/
$lang['settings_updated'] = 'Settings data has been updated';
$lang['cache_error'] = 'Unable to delete cache files, please check that you have the necessary permissions on the folder.';
$lang['cache_deleted'] = 'All cache files have been removed';
$lang['module_installed'] = 'The module <b>%1$s</b> has been installed';
$lang['module_uninstalled'] = 'The module <b>%1$s</b> has been uninstalled and its data deleted';
$lang['module_updated'] = 'The module <b>%1$s</b> has been updated';
$lang['module_deleted'] = 'The module folder <b>%1$s</b> has been deleted';
$lang['file_uploaded'] = 'The file has been uploaded and extracted';
$lang['file_name_match'] = 'The file extraction could not be completed because the file name matches the name of a folder in the directory';
$lang['user_updated'] = 'The user has been updated';
$lang['user_banned'] = 'The user has been banned';
$lang['user_unbanned'] = 'The user has been unbanned';
$lang['user_not_found'] = 'The user could not be found';
$lang['user_already_banned'] = 'The user is already banned';
$lang['realm_created'] = 'The new realm has been created';
$lang['realm_updated'] = 'The realm data has been updated';
$lang['realm_deleted'] = 'The realm has been deleted';
$lang['menu_created'] = 'The new menu item has been created';
$lang['menu_updated'] = 'The menu item data has been updated';
$lang['menu_deleted'] = 'The menu item has been deleted';
$lang['news_created'] = 'The new news has been created';
$lang['news_updated'] = 'The news data has been updated';
$lang['news_deleted'] = 'The news has been deleted';
$lang['page_created'] = 'The new page has been created';
$lang['page_updated'] = 'The page data has been updated';
$lang['page_deleted'] = 'The page has been deleted';
$lang['slide_created'] = 'The new slide has been created';
$lang['slide_updated'] = 'The slide data has been updated';
$lang['slide_deleted'] = 'The slide has been deleted';
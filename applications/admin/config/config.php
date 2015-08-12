<?php
// defined ('TATARUANG') or exit ( 'Forbidden Access' );

define ('APP_CONTROLLER', CODEKIR_ADMINPATH .'controller/');
define ('APP_VIEW', CODEKIR_ADMINPATH .'view/');
define ('APP_MODELS', CODEKIR_ADMINPATH . 'model/');

/* Konfigurasi APP */

$CONFIG['admin']['app_server'] = TRUE;
$CONFIG['admin']['smarty_enabled'] = false;
$CONFIG['admin']['app_status'] = 'Development';
$CONFIG['admin']['app_debug'] = TRUE;
$CONFIG['admin']['app_underdevelopment'] = FAlSE;
$CONFIG['admin']['smarty_enabled'] = true;
$CONFIG['admin']['php_ext'] = '.php';
$CONFIG['admin']['html_ext'] = '.html';
$CONFIG['admin']['default_view'] = 'home';
$CONFIG['admin']['login'] = 'login';


$CONFIG['admin']['app_url'] = 'http://localhost/codekir/v1.1/';
$CONFIG['admin']['base_url'] = 'http://localhost/codekir/v1.1/applications/admin/';
$CONFIG['admin']['root_path'] = $_SERVER['DOCUMENT_ROOT'].'/codekir/v1.1/applications/admin';

$CONFIG['admin']['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/codekir/v1.1/applications/public_assets/';

$CONFIG['admin']['max_filesize'] = 2097152;

$CONFIG['admin']['css'] = CODEKIR_ADMINPATH.'css/';
$CONFIG['admin']['images'] = CODEKIR_ADMINPATH.'images/';
$CONFIG['admin']['js'] = CODEKIR_ADMINPATH.'js/';

$basedomain = $CONFIG['admin']['base_url'];
$app_domain = $CONFIG['admin']['app_url'];

/* Konfigurasi DB */

$dbConfig[0]['host'] = 'host';
$dbConfig[0]['user'] = 'user';
$dbConfig[0]['pass'] = 'password';
$dbConfig[0]['name'] = 'db_name';
$dbConfig[0]['server'] = 'mysql';


?>

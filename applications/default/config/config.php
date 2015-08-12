<?php

/* Konfigurasi APP */

$CONFIG['default']['app_server'] = TRUE;
$CONFIG['default']['app_status'] = 'Development';
$CONFIG['default']['app_debug'] = TRUE;
$CONFIG['default']['app_underdevelopment'] = FAlSE;
$CONFIG['default']['php_ext'] = '.php';
$CONFIG['default']['html_ext'] = '.html';
$CONFIG['default']['default_view'] = 'home';
$CONFIG['default']['login'] = 'login';
$CONFIG['default']['admin'] = false;
$CONFIG['default']['salt'] = "";
$CONFIG['default']['hostname'] = "";

$CONFIG['default']['base_url'] = 'http://localhost/codekir/v1.1/';
$CONFIG['default']['root_path'] = $_SERVER['DOCUMENT_ROOT'].'/codekir/v1.1';

$CONFIG['default']['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/codekir/v1.1/tmp/';
$CONFIG['default']['max_filesize'] = 2097152;
$CONFIG['default']['upload_path_temporary'] = "/home/";
$CONFIG['default']['zip_foldername'] = "PUT_YOUR_ZIP_HERE";

$CONFIG['default']['css'] = CODEKIR_APPPATH.'css/';
$CONFIG['default']['images'] = CODEKIR_APPPATH.'images/';
$CONFIG['default']['js'] = CODEKIR_APPPATH.'js/';

$CONFIG['default']['zip_ext'] = array('application/zip', 'application/x-zip', 'application/x-zip-compressed',  'application/octet-stream', 'application/x-compress', 'application/x-compressed', 'multipart/x-zip');
$CONFIG['default']['image'] = array('image/jpeg', 'image/pjpeg');

$CONFIG['default']['unzip'] = 'zipArchive'; //s_linux or zipArchive

$basedomain = $CONFIG['default']['base_url'];

$CONFIG['uri']['short'] = false;
$CONFIG['uri']['friendly'] = true;
$CONFIG['uri']['extension'] = ".html";

$CONFIG['email']['EMAIL_FROM_DEFAULT'] = "";
$CONFIG['email']['EMAIL_SMTP_HOST'] = "";
$CONFIG['email']['EMAIL_SMTP_USER'] = "";
$CONFIG['email']['EMAIL_SMTP_PASSWORD'] = "";

?>

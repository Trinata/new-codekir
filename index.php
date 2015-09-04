<?php 
session_start();

define ('CODEKIR', 'Version 1.0');

define ('CODEKIR_ROOTPATH', '/home/erjoned/Data/xampp/htdocs/new-codekir/');
define ('CODEKIR_APPPATH', CODEKIR_ROOTPATH . 'applications/default/');

define ('CODEKIR_COREPATH', '/home/erjoned/Data/xampp/htdocs/new-codekir/loader/engine/');
define ('CODEKIR_LIBS', '/home/erjoned/Data/xampp/htdocs/new-codekir/loader/plugin/');
define ('CODEKIR_LOGS', '/home/erjoned/Data/xampp/htdocs/new-codekir/loader/logs/');
define ('CODEKIR_CACHE', '/home/erjoned/Data/xampp/htdocs/new-codekir/loader/cache/');
define ('CODEKIR_TMP', '/home/erjoned/Data/xampp/htdocs/new-codekir/loader/tmp/');

require_once (CODEKIR_APPPATH.'config/main.php');

?>

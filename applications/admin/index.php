<?php
session_start();

define ('CODEKIR_ROOTPATH', '/home/ovancop/Data/htdocs/codekir/v1.1/');
define ('CODEKIR_APPPATH', CODEKIR_ROOTPATH . 'applications/default/');
define ('CODEKIR_ADMINPATH', CODEKIR_ROOTPATH . 'applications/admin/');
define ('CODEKIR_COREPATH', '/home/ovancop/Data/htdocs/codekir/v1.1/loader/engine/');

define ('CODEKIR_LIBS', '/home/ovancop/Data/htdocs/codekir/v1.1/loader/plugin/');
define ('CODEKIR_LOGS', '/home/ovancop/Data/htdocs/codekir/v1.1/loader/logs/');
define ('CODEKIR_CACHE', '/home/ovancop/Data/htdocs/codekir/v1.1/loader/cache/');
define ('CODEKIR_TMP', '/home/ovancop/Data/htdocs/codekir/v1.1/loader/tmp/');

require_once (CODEKIR_COREPATH.'admin-system.php');


?>

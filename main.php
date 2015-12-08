<?php

/* SMARTY CONFIG */

$SMARTY[0]['template'] = CODEKIR_APPPATH.'view/';
$SMARTY[0]['cache'] = CODEKIR_LIBS.'smarty/cache';
$SMARTY[0]['config'] = CODEKIR_LIBS.'smarty/configs';
$SMARTY[0]['logs'] = CODEKIR_CACHE;

/* EXCEL CONFIG */

$EXCEL[0]['startrow'] = 2;
$EXCEL[0]['startcolumn'] = 1;
$EXCEL[0]['startindex'] = 0;
$EXCEL[0]['filetype'] = array('application/ms-excel', 'application/vnd.ms-excel','application/octet-stream');

require_once (CODEKIR_COREPATH.'system.php');

?>
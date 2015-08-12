<?php

/* EXCEL CONFIG */

$EXCEL[0]['startrow'] = 3;
$EXCEL[0]['startcolumn'] = 1;
$EXCEL[0]['startindex'] = 0;
$EXCEL[0]['filetype'] = array('application/ms-excel', 'application/vnd.ms-excel');

/* SMARTY CONFIG */

$SMARTY[0]['template'] = APPPATH. 'view/';
$SMARTY[0]['cache'] = APP.LIBS.'smarty/cache';
$SMARTY[0]['config'] = APP.LIBS.'smarty/configs';
$SMARTY[0]['logs'] = APP.LOGS;

// echo '<pre>';
// print_r($SMARTY);exit;
?>
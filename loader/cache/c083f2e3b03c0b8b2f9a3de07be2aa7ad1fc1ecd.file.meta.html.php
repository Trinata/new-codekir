<?php /* Smarty version Smarty-3.1.15, created on 2015-09-03 08:42:38
         compiled from "view/template/meta.html" */ ?>
<?php /*%%SmartyHeaderCode:138023177255d2daa38a8bb3-17372531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c083f2e3b03c0b8b2f9a3de07be2aa7ad1fc1ecd' => 
    array (
      0 => 'view/template/meta.html',
      1 => 1441244539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138023177255d2daa38a8bb3-17372531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d2daa39445c7_13881508',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d2daa39445c7_13881508')) {function content_55d2daa39445c7_13881508($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>Admin | CMS CODEKIR</title>



	<!--STYLESHEET-->
	<!--=================================================-->

	<!--Open Sans Font [ OPTIONAL ] -->
 	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
css/googlefonts.css" rel="stylesheet">


	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
css/bootstrap.min.css" rel="stylesheet">


	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
css/nifty.min.css" rel="stylesheet">

	
	<!--Nestable Stylesheet [ REQUIRED ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
css/nestable.css" rel="stylesheet">

	<!--Font Awesome [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


	<!--Switchery [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/switchery/switchery.min.css" rel="stylesheet">


	<!--Bootstrap Select [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

	<!--Bootstrap Table [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet">

	<!--Bootstrap Table [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">


	<!--X-editable [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/x-editable/css/bootstrap-editable.css" rel="stylesheet">

	<!--Bootstrap Tags Input [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">


	<!--Chosen [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/chosen/chosen.min.css" rel="stylesheet">


	<!--noUiSlider [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/noUiSlider/jquery.nouislider.min.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/noUiSlider/jquery.nouislider.pips.min.css" rel="stylesheet">


	<!--Bootstrap Timepicker [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">


	<!--Bootstrap Datepicker [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">


	<!--Dropzone [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/dropzone/dropzone.css" rel="stylesheet">


	<!--Summernote [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/summernote/summernote.min.css" rel="stylesheet">

	<!--Bootstrap Validator [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">

	<!--Morris.js [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/morris-js/morris.min.css" rel="stylesheet">

	<!--Bootstrap Validator [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">

	<!--Bootstrap UploadFile [ OPTIONAL ]-->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/fileupload/bootstrap-fileupload.css" type="text/css" />

	<!--Demo [ DEMONSTRATION ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
css/demo/nifty-demo.min.css" rel="stylesheet">




	<!--SCRIPT-->
	<!--=================================================-->

	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/pace/pace.min.css" rel="stylesheet">
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/pace/pace.min.js"></script>

	<!--jQuery [ REQUIRED ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
js/jquery-2.1.1.min.js"></script>

	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
js/bootstrap.min.js"></script>
		
	<!--Fast Click [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/fast-click/fastclick.min.js"></script>

	<!--Switchery [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/switchery/switchery.min.js"></script>


	<!--Bootstrap Select [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-select/bootstrap-select.min.js"></script>

	<!--DataTables [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/datatables/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/datatables/media/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

	<!--Bootstrap Tags Input [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>


	<!--Chosen [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/chosen/chosen.jquery.min.js"></script>


	<!--noUiSlider [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/noUiSlider/jquery.nouislider.all.min.js"></script>


	<!--Bootstrap Timepicker [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>


	<!--Bootstrap Datepicker [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>


	<!--Dropzone [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/dropzone/dropzone.min.js"></script>

	<!--Upload File [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/fileupload/bootstrap-fileupload.js"></script>


	<!--Summernote [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/summernote/summernote.min.js"></script>

	<!--Bootstrap Wizard [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

	<!--Bootstrap Validator [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-validator/bootstrapValidator.min.js"></script>

	<!--Masked Input [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/masked-input/jquery.maskedinput.min.js"></script>

	<!--Morris.js [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/morris-js/morris.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/morris-js/raphael-js/raphael.min.js"></script>

	<!--Bootbox Modals [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootbox/bootbox.min.js"></script>

	<!--Bootstrap Wizard [ ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>


	<!--Bootstrap Validator [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
	<!--nestable Validator [ OPTIONAL ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/bootstrap-validator/bootstrapValidator.min.js"></script>

	<!--Modals [ HELPER ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
js/demo/jshelper.js"></script>

	<!--Form Wizard [ SAMPLE ]-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
js/demo/form-wizard.js"></script>
	<script>
		
		$('.selectpicker').selectpicker();
		
	</script>
</head>
<?php }} ?>

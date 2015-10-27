<?php /* Smarty version Smarty-3.1.15, created on 2015-08-18 14:11:31
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:11649307055d2daa3849521-42125244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ee0b527400306b6f9ec3f3587b1b3d7a6b0e32' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/master_template.html',
      1 => 1439877610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11649307055d2daa3849521-42125244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'admin' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d2daa389dbf7_68250474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d2daa389dbf7_68250474')) {function content_55d2daa389dbf7_68250474($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("view/template/meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<body>
	<script>
		var basedomain = "<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
";
	</script>
	
	<?php if (($_smarty_tpl->tpl_vars['admin']->value)) {?>
	<div id="container" class="effect mainnav-lg">

		

			
			<?php echo $_smarty_tpl->getSubTemplate ("view/template/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

			<div class="boxed">

				<!--CONTENT CONTAINER-->
				<!--===================================================-->
				<div id="content-container">
					
					
					<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


				</div>
			<?php echo $_smarty_tpl->getSubTemplate ("view/template/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


			<?php echo $_smarty_tpl->getSubTemplate ("view/template/top-bar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("view/template/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("view/template/jsplugin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php echo $_smarty_tpl->getSubTemplate ("view/template/jsplugin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php }?>			

<?php }} ?>

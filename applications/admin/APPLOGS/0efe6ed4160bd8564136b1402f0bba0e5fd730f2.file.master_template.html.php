<?php /* Smarty version Smarty-3.1.15, created on 2015-08-12 13:22:53
         compiled from "/home/ovancop/Data/htdocs/codekir/v1.1/applications/admin/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:39243493555cae4e1b7a225-49834155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0efe6ed4160bd8564136b1402f0bba0e5fd730f2' => 
    array (
      0 => '/home/ovancop/Data/htdocs/codekir/v1.1/applications/admin/view/master_template.html',
      1 => 1439360423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39243493555cae4e1b7a225-49834155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55cae4e1b9c498_28896130',
  'variables' => 
  array (
    'basedomain' => 0,
    'admin' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cae4e1b9c498_28896130')) {function content_55cae4e1b9c498_28896130($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("view/meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<!-- RUNNING GLOBAL VAR -->
	<script>
		var basedomain = "<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
";
	</script>
	
	
	<div id="wrapper">
	<!-- HEADER -->
		
		<?php if (($_smarty_tpl->tpl_vars['admin']->value)) {?>

		<?php echo $_smarty_tpl->getSubTemplate ("view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php echo $_smarty_tpl->getSubTemplate ("view/jsplugin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php echo $_smarty_tpl->getSubTemplate ("view/top-bar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php echo $_smarty_tpl->getSubTemplate ("view/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		
		<div id="content">
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</div>

		
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


		<?php }?>
		
	
	</div>

</body> 
</html><?php }} ?>

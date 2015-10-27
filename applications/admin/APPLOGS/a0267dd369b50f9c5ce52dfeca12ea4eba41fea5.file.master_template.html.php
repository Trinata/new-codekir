<?php /* Smarty version Smarty-3.1.15, created on 2015-08-13 14:47:40
         compiled from "/home/erjoned/Data/xampp/htdocs/new-codekir/applications/admin/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:57765841955cc4b9c7cf866-04977481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0267dd369b50f9c5ce52dfeca12ea4eba41fea5' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/new-codekir/applications/admin/view/master_template.html',
      1 => 1439364296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57765841955cc4b9c7cf866-04977481',
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
  'unifunc' => 'content_55cc4b9c7fa6d1_06644133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cc4b9c7fa6d1_06644133')) {function content_55cc4b9c7fa6d1_06644133($_smarty_tpl) {?>
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

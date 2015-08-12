<?php /* Smarty version Smarty-3.1.15, created on 2015-08-12 11:48:11
         compiled from "/home/ovancop/Data/htdocs/codekir/v1.1/applications/default/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:9661456555cad00b5a0803-40499463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6d93f39a80648dcdc7ba8d288e42081030894bc' => 
    array (
      0 => '/home/ovancop/Data/htdocs/codekir/v1.1/applications/default/view/master_template.html',
      1 => 1406281429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9661456555cad00b5a0803-40499463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55cad00b5d1374_44764122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cad00b5d1374_44764122')) {function content_55cad00b5d1374_44764122($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>


	<?php if ($_smarty_tpl->tpl_vars['page']->value['page']!='login') {?>
    <div id="wrapper">
		
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page']!='setting'&&$_smarty_tpl->tpl_vars['page']->value['function']!='setCategory') {?> 

			<?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

    <?php }?>    
	
	
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		
		
	<?php if ($_smarty_tpl->tpl_vars['page']->value['page']!='login') {?>	
	</div>
	<?php }?> 


	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }} ?>

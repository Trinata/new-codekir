<?php /* Smarty version Smarty-3.1.15, created on 2015-08-12 14:31:29
         compiled from "/home/erjoned/Data/xampp/htdocs/new-codekir/applications/default/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:115597370955caf6518bb192-07967738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7488f8e7a5a3ad95185d10042d436c3d42b16f0' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/new-codekir/applications/default/view/master_template.html',
      1 => 1439364297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115597370955caf6518bb192-07967738',
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
  'unifunc' => 'content_55caf6519c1528_22140314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55caf6519c1528_22140314')) {function content_55caf6519c1528_22140314($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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

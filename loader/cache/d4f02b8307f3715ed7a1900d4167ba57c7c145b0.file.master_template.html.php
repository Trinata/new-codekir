<?php /* Smarty version Smarty-3.1.15, created on 2015-09-03 13:43:24
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/default/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:112218353555d27744cb3958-08374060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4f02b8307f3715ed7a1900d4167ba57c7c145b0' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/default/view/master_template.html',
      1 => 1441262603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112218353555d27744cb3958-08374060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d27744d3b3f5_82449272',
  'variables' => 
  array (
    'currentTheme' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d27744d3b3f5_82449272')) {function content_55d27744d3b3f5_82449272($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("theme/".((string)$_smarty_tpl->tpl_vars['currentTheme']->value['option_value'])."/meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("theme/".((string)$_smarty_tpl->tpl_vars['currentTheme']->value['option_value'])."/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		
		
<?php echo $_smarty_tpl->getSubTemplate ("theme/".((string)$_smarty_tpl->tpl_vars['currentTheme']->value['option_value'])."/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }} ?>

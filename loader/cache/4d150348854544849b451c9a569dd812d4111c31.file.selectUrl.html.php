<?php /* Smarty version Smarty-3.1.15, created on 2015-09-04 14:08:02
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/theme/selectUrl.html" */ ?>
<?php /*%%SmartyHeaderCode:197387300255e7b3065b1128-81878988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d150348854544849b451c9a569dd812d4111c31' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/theme/selectUrl.html',
      1 => 1441350455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197387300255e7b3065b1128-81878988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e7b3065dbc52_40737710',
  'variables' => 
  array (
    'getData' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e7b3065dbc52_40737710')) {function content_55e7b3065dbc52_40737710($_smarty_tpl) {?><select class="selectpicker" name="linkMenu" id="idRefresh">
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
<option value="page/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</option>
<?php } ?>
</select>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-09-03 14:19:38
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/theme/listTheme.html" */ ?>
<?php /*%%SmartyHeaderCode:40486309555e7c04e107812-05985948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e05cabdb7c30ddeb3934fa0d2c7bc9c9f31b55bd' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/theme/listTheme.html',
      1 => 1441264774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40486309555e7c04e107812-05985948',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e7c04e126a19_88987346',
  'variables' => 
  array (
    'basedomain' => 0,
    'themeCurrent' => 0,
    'urlTheme' => 0,
    'listTheme' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e7c04e126a19_88987346')) {function content_55e7c04e126a19_88987346($_smarty_tpl) {?>
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">Setting Theme</h1>
	
	<!--Searchbox-->
	<!-- <div class="searchbox">
		<div class="input-group custom-search-form">
			<input type="text" class="form-control" placeholder="Search..">
			<span class="input-group-btn">
				<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
			</span>
		</div>
	</div> -->
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End page title-->

<!--Breadcrumb-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<ol class="breadcrumb">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
">Home</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
">Theme</a></li>
	<li class="active">Setting Theme</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	<div class="row">
		<div class="col-lg-12">
			
							<!--Default Tabs (Left Aligned)-->
							<!--===================================================-->
							<div class="tab-base">
					
								<!--Nav Tabs-->
								<ul class="nav nav-tabs">
									<li class="active">
										<a data-toggle="tab" href="#demo-lft-tab-1">Manage Theme</a>
									</li>
									<li>
										<a data-toggle="tab" href="#demo-lft-tab-2">Install Theme</a>
									</li>
								</ul>
					
								<!--Tabs Content-->
								<div class="tab-content">
									<div id="demo-lft-tab-1" class="tab-pane fade active in">
										<div class="panel">
								
					
								<!--Horizontal Form-->
								<!--===================================================-->
								
									<div class="panel-body">
										
										<h4><?php echo $_smarty_tpl->tpl_vars['themeCurrent']->value['option_value'];?>
 (CURRENT THEME)</h4>
									<img src="<?php echo $_smarty_tpl->tpl_vars['urlTheme']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeCurrent']->value['option_value'];?>
/image.png" width="200px"/>
																
									</div>
								<!--===================================================-->
								<!--End Horizontal Form-->
					
							</div>
									</div>
									<div id="demo-lft-tab-2" class="tab-pane fade">
										<div class="panel">
								
					
								<!--Horizontal Form-->
								<!--===================================================-->
								<form class="form-horizontal">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-2 control-label" for="demo-hor-inputemail">Upload Theme</label>
											<div class="col-sm-9">
												<input type="file" placeholder="Name" id="demo-hor-inputemail" name="userfile" class="form-control">
											</div>
										</div>
									<div class="panel-footer text-right">
										<button class="btn btn-info" type="submit">Install Theme</button>
									</div>
										
										
								</form>
								<!--===================================================-->
								<!--End Horizontal Form-->
					
							</div>
									</div>
								</div>
							</div>
							<!--===================================================-->
							<!--End Default Tabs (Left Aligned)-->
					

		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listTheme']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['val']->value['nameFolder']!=$_smarty_tpl->tpl_vars['themeCurrent']->value['option_value']) {?>
			<div class="col-md-6 col-lg-3">
				<h4><?php echo $_smarty_tpl->tpl_vars['val']->value['nameFolder'];?>
</h4>
				<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
theme/changeTheme/?value=<?php echo $_smarty_tpl->tpl_vars['val']->value['nameFolder'];?>
">Active</a> | <a href="#">Uninstall</a>
			<img src="<?php echo $_smarty_tpl->tpl_vars['urlTheme']->value;?>
<?php echo $_smarty_tpl->tpl_vars['val']->value['nameFolder'];?>
/image.png" width="200px"/>
			</div>
			<?php }?>
			<?php } ?>
		</div>
	</div>
	
	
	
</div>
<!--===================================================-->
<!--End page content-->

<?php }} ?>

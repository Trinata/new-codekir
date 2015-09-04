<?php /* Smarty version Smarty-3.1.15, created on 2015-09-02 20:06:25
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/theme/menuEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:67425264155e6f02e046320-80353693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55292a971dbfa8d47fa94b1394ae87c6f62f129f' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/theme/menuEdit.html',
      1 => 1441199180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67425264155e6f02e046320-80353693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e6f02e0c4009_62436763',
  'variables' => 
  array (
    'basedomain' => 0,
    'menu' => 0,
    'val' => 0,
    'valSubmenu' => 0,
    'menuEdit' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e6f02e0c4009_62436763')) {function content_55e6f02e0c4009_62436763($_smarty_tpl) {?>
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">Setting Menu</h1>
	
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
">Menu</a></li>
	<li class="active">Setting Menu</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	<div class="row">
						<div class="col-sm-6">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Sort Order Menu</h3>
								</div>
					
								<!--Block Styled Form -->
								<!--===================================================-->
								<div class="cf nestable-lists">

							        <div class="dd" id="nestable">
							            <ol class="dd-list">
							            	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
							            	<?php if ($_smarty_tpl->tpl_vars['val']->value['parent_id']=='0') {?>
							               <li class="dd-item dd3-item" data-id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id_menu'];?>
">
							                    <div class="dd-handle dd3-handle">&nbsp;</div><div class="dd3-content"><?php echo $_smarty_tpl->tpl_vars['val']->value['title_menu'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
menu/edit/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id_menu'];?>
" style="float:right"><i class="fa fa-pencil-square-o "></i></a></div>
							                    <?php if ($_smarty_tpl->tpl_vars['val']->value['subMenu']) {?>
          									    <ol class="dd-list">
							            		<?php  $_smarty_tpl->tpl_vars['valSubmenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valSubmenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['subMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valSubmenu']->key => $_smarty_tpl->tpl_vars['valSubmenu']->value) {
$_smarty_tpl->tpl_vars['valSubmenu']->_loop = true;
?>
							            			 <li class="dd-item dd3-item" data-id="<?php echo $_smarty_tpl->tpl_vars['valSubmenu']->value['id_menu'];?>
"><div class="dd-handle dd3-handle">&nbsp;</div><div class="dd3-content"><?php echo $_smarty_tpl->tpl_vars['valSubmenu']->value['title_menu'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
menu/edit/?id=<?php echo $_smarty_tpl->tpl_vars['valSubmenu']->value['id_menu'];?>
" style="float:right"><i class="fa fa-pencil-square-o "></i></a></div></li>
							            		<?php } ?>
							            		</ol>
							            		<?php }?>

							                </li>
							                <?php }?>
							                <?php } ?>
							            </ol>
							        </div>

								    </div>
								    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
menu/updateSortMenu">
									    <textarea id="nestable-output" name="jsonMenu" style="display:none"></textarea>

										<div class="panel-footer text-right">
											<button class="btn btn-info" type="submit">Update</button>
										</div>
									</form>
								<!--===================================================-->
								<!--End Block Styled Form -->
					
							</div>
						</div>
						<div class="col-sm-6">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Form Menu</h3>
								</div>
					
								<!--Horizontal Form-->
								<!--===================================================-->
								<form class="form-horizontal">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputemail">Title Menu</label>
											<div class="col-sm-9">
												<input type="email" placeholder="Title Menu" id="demo-hor-inputemail" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['menuEdit']->value['title_menu'];?>
">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputemail">Parent Menu</label>
											<div class="col-sm-9">
												<select class="selectpicker">
													<option>Page</option>
													<option>Blog</option>
													<option>Category Product</option>
													<option>URL</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputemail">Link MENU</label>
											<div class="col-sm-9">
												<select class="selectpicker">
													<option>Page</option>
													<option>Blog</option>
													<option>Category Product</option>
													<option>URL</option>
												</select>
												<input type="email" placeholder="Link menu" id="demo-hor-inputemail" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputemail">Status</label>
											<div class="col-sm-9">
												<select class="selectpicker">
													<option>Publish</option>
													<option>Unpublish</option>
												</select>
											</div>
										</div>
									</div>
									<div class="panel-footer text-right">
										<button class="btn btn-info" type="submit">Save</button>
									</div>
								</form>
								<!--===================================================-->
								<!--End Horizontal Form-->
					
							</div>
						</div>
					</div>
	
	
	
</div>
<!--===================================================-->
<!--End page content-->

<?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-09-02 16:26:52
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/product/listCatProduct.html" */ ?>
<?php /*%%SmartyHeaderCode:37564068055d547a7324ed2-96391666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b11985ff5b95218a7e91907f2944a43ad0e58980' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/product/listCatProduct.html',
      1 => 1441185809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37564068055d547a7324ed2-96391666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d547a733b356_43679808',
  'variables' => 
  array (
    'basedomain' => 0,
    'catProduct' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d547a733b356_43679808')) {function content_55d547a733b356_43679808($_smarty_tpl) {?>
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">List Category Product</h1>
	
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
">Product</a></li>
	<li class="active">List Category Product</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel">
				<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product/formCatProduct/" class="btn btn-lg btn-success">add category</a>
						<div class="panel-body">
							<table data-toggle="table"
								   data-search="true"
								   data-show-refresh="true"
								   data-show-toggle="true"
								   data-show-columns="true"
								   data-sort-name="id"
								   data-page-list="[5, 10, 20]"
								   data-page-size="5"
								   data-pagination="true">
								<thead>
									<tr>
										<th data-field="id" data-sortable="true">ID</th>
										<th data-field="name" data-sortable="true">Name</th>
										<th data-field="parent" data-sortable="true" >Parent</th>
										<th data-field="status" data-align="center" data-sortable="true">Status</th>
										<th data-align="center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catProduct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['val']->value['category_id'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['val']->value['parent_id'];?>
</td>
										<td><span class="badge 
											<?php if ($_smarty_tpl->tpl_vars['val']->value['status']=='published') {?>
											badge-success
											<?php } else { ?>
											badge-warning
											<?php }?>
											"><?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
</span></td>
										<td data-align="center">
											<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product/formEditCatProduct/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['category_id'];?>
" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>
											<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product/deleteCatProduct/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['category_id'];?>
" onclick="return confirm('Anda akan menghapus kategori <?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
');" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					

		</div>
	</div>
	
	
	
</div>
<!--===================================================-->
<!--End page content-->

<?php }} ?>

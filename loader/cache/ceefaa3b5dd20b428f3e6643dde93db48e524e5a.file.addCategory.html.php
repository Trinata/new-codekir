<?php /* Smarty version Smarty-3.1.15, created on 2015-09-02 16:26:59
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/product/addCategory.html" */ ?>
<?php /*%%SmartyHeaderCode:60077707055e6c0e35b5370-81275711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceefaa3b5dd20b428f3e6643dde93db48e524e5a' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/product/addCategory.html',
      1 => 1441185809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60077707055e6c0e35b5370-81275711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'parents' => 0,
    'parent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e6c0e35efb61_17754839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e6c0e35efb61_17754839')) {function content_55e6c0e35efb61_17754839($_smarty_tpl) {?><script>
	$(document).ready(function() {
		// $('#brief').summernote({
		// 	height: 200
		// });
		$('#description').summernote({
			height : 200
		});
	})
</script>
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">Category Add</h1>

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
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
">Home</a>
	</li>
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
">Product</a>
	</li>
	<li class="active">
		Category Add
	</li>
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
						<a data-toggle="tab" href="#demo-lft-tab-1">Category Info</a>
					</li>
					<li>
						<a data-toggle="tab" href="#demo-lft-tab-2">Data</a>
					</li>
					<li>
						<a data-toggle="tab" href="#demo-lft-tab-3">Images</a>
					</li>
				</ul>

				<!--Tabs Content-->
				<form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product/addCatProduct" enctype="multipart/form-data">
				<div class="tab-content">

						<div id="demo-lft-tab-1" class="tab-pane fade active in">
							<div class="panel">

								<!--Horizontal Form-->
								<!--===================================================-->

								<div class="panel-body">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="parent">Parent</label>
										<div class="col-sm-9">
											<select id="parent" name="parent" class="form-control">
												<option value="0">None</option>
												<?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['parent']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value['name'];?>
</option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="name">Name</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Name" id="name" name="name" class="form-control" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="description">Description</label>
										<div class="col-sm-9">
											<textarea name="description" id="description" required>
											</textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="meta_description">Meta Description</label>
										<div class="col-sm-9">
											<textarea name="meta_description" id="meta_description" class="form-control" required></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="meta_keywords">Meta Keywords
											<br/>
											(separate with comma)</label>
										<div class="col-sm-9">
											<textarea name="meta_keywords" id="meta_keywords" class="form-control" required></textarea>
										</div>
									</div>
								</div>
								<div class="panel-footer text-right">
									<button class="btn btn-info" type="submit">
										Save Product
									</button>
								</div>
							</div>
						</div>
						<!--===================================================-->
						<!--End Default Tabs (Left Aligned)-->
						<div id="demo-lft-tab-2" class="tab-pane fade">
							<div class="panel-body">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="top">Top</label>
									<div class="col-sm-9">
										<input type="text" name="top" id="demo-hor-inputemail" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="column">Column</label>
									<div class="col-sm-9">
										<input type="text" name="column" id="demo-hor-inputpass" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="sort_order">Sort Order</label>
									<div class="col-sm-9">
										<input type="text" name="sort_order" id="demo-hor-inputpass" class="form-control" required> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="status">Status</label>
									<div class="col-sm-9">
										<select name="status" id="demo-hor-inputpass" class="form-control" required>
											<option value="1">publish</option>
											<option value="0">not publish</option>
										</select>
									</div>
								</div>

								<!--===================================================-->
								<!--End Horizontal Form-->

							</div>
						</div>
						<div id="demo-lft-tab-3" class="tab-pane fade">
							<div class="panel-body">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="image">Image</label>
									<div class="col-sm-9">
											<input type="file" name="gambar" id="gambar" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
					
				</div>
				</form>
			</div>

		</div>
		<!--===================================================-->
		<!--End page content-->
</div>
</div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-09-03 09:10:49
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/page/addPage.html" */ ?>
<?php /*%%SmartyHeaderCode:41236394155e7a848714ca7-53783979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060002b7d7271774a6e7f9cc4a3e56e64e9eb256' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/page/addPage.html',
      1 => 1441246136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41236394155e7a848714ca7-53783979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e7a84874fe24_92293416',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e7a84874fe24_92293416')) {function content_55e7a84874fe24_92293416($_smarty_tpl) {?><script>
$(document).ready(function() {
	// $('#brief').summernote({
	// 	height: 200
	// });
	$('#isi').summernote({
		height: 200
	});
})	
</script>
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">Page Add</h1>
	
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
">Page</a></li>
	<li class="active">Page Add</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	<div class="row">
		<div class="col-lg-12">
			
						<div class="panel">
								
					
								<!--Horizontal Form-->
								<?php echo pr($_smarty_tpl->tpl_vars['basedomain']->value);?>

								<!--===================================================-->
								<form class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
page/inputPage" enctype="multipart/form-data">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-2 control-label" for="demo-hor-inputemail">Title</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Name" id="demo-hor-inputemail" class="form-control" name="title">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="demo-hor-inputpass">Images</label>
											<div class="col-sm-9">
												<input type="file" placeholder="Password" id="demo-hor-inputpass" class="form-control"  name="userfile">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="demo-hor-inputpass">Description</label>
											<div class="col-sm-9">
												
												<textarea name="isi" id="isi"></textarea>
											</div>
										</div>
										
										
									</div>
									<div class="panel-footer text-right">
										<button class="btn btn-info" type="submit">Save Blog</button>
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

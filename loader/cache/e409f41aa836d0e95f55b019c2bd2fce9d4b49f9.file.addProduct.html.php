<?php /* Smarty version Smarty-3.1.15, created on 2015-08-20 11:47:20
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/product/addProduct.html" */ ?>
<?php /*%%SmartyHeaderCode:146955320455d454a2c53bc9-15222963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e409f41aa836d0e95f55b019c2bd2fce9d4b49f9' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/product/addProduct.html',
      1 => 1440046011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146955320455d454a2c53bc9-15222963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d454a2c91e46_59339051',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d454a2c91e46_59339051')) {function content_55d454a2c91e46_59339051($_smarty_tpl) {?><script>
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
	<h1 class="page-header text-overflow">Product Add</h1>
	
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
	<li class="active">Product Add</li>
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
										<a data-toggle="tab" href="#demo-lft-tab-1">Product Info</a>
									</li>
									<li>
										<a data-toggle="tab" href="#demo-lft-tab-2">Data</a>
									</li>
									<li>
										<a data-toggle="tab" href="#demo-lft-tab-3">Image</a>
									</li>
								</ul>
					
								<!--Tabs Content-->
								<div class="tab-content">
									<div id="demo-lft-tab-1" class="tab-pane fade active in">
										<div class="panel">
								
					
								<!--Horizontal Form-->
								<!--===================================================-->
								<form class="form-horizontal">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-2 control-label" for="demo-hor-inputemail">Name</label>
											<div class="col-sm-9">
												<input type="email" placeholder="Name" id="demo-hor-inputemail" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="demo-hor-inputpass">Price</label>
											<div class="col-sm-9">
												<input type="password" placeholder="Password" id="demo-hor-inputpass" class="form-control">
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
										<button class="btn btn-info" type="submit">Save Product</button>
									</div>
								</form>
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
											<label class="col-sm-2 control-label" for="demo-hor-inputemail">Model</label>
											<div class="col-sm-9">
												<input type="email" placeholder="Name" id="demo-hor-inputemail" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="demo-hor-inputpass">Quantity</label>
											<div class="col-sm-9">
												<input type="password" placeholder="Password" id="demo-hor-inputpass" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="demo-hor-inputpass">Sort Order</label>
											<div class="col-sm-9">
												<input type="password" placeholder="Password" id="demo-hor-inputpass" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-2 control-label" for="demo-hor-inputpass">Weight</label>
											<div class="col-sm-9">
												<input type="password" placeholder="Password" id="demo-hor-inputpass" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="demo-hor-inputpass">Weight</label>
											<div class="col-sm-9">
												<input type="password" placeholder="Password" id="demo-hor-inputpass" class="form-control">
											</div>
										</div>
										
										
								</form>
								<!--===================================================-->
								<!--End Horizontal Form-->
					
							</div>
									</div>
									<div id="demo-lft-tab-3" class="tab-pane fade">
										<h4 class="text-thin">Third Tab Content</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
									</div>
								</div>
							</div>
							<!--===================================================-->
							<!--End Default Tabs (Left Aligned)-->
					

		</div>
	</div>
	
	
	
</div>
<!--===================================================-->
<!--End page content-->

<?php }} ?>

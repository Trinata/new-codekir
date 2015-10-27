<?php /* Smarty version Smarty-3.1.15, created on 2015-08-20 10:21:24
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/product/listProduct.html" */ ?>
<?php /*%%SmartyHeaderCode:186248912855d45c2da4dd15-71539994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2a6cf5d178dc3d6b27eda89d72c508d83c80342' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/product/listProduct.html',
      1 => 1440040803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186248912855d45c2da4dd15-71539994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d45c2da7f637_22649221',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d45c2da7f637_22649221')) {function content_55d45c2da7f637_22649221($_smarty_tpl) {?>
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">List Product</h1>
	
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
	<li class="active">List Product</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel">
						<div class="panel-body">
							<table data-toggle="table"
								   data-url="data/bs-table.json"
								   data-search="true"
								   data-show-refresh="true"
								   data-show-toggle="true"
								   data-show-columns="true"
								   data-sort-name="id"
								   data-page-list="[5, 10, 20]"
								   data-page-size="5"
								   data-pagination="true" data-show-pagination-switch="true">
								<thead>
									<tr>
										<th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">ID</th>
										<th data-field="name" data-sortable="true">Name</th>
										<th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order date</th>
										<th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Balance</th>
										<th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Status</th>
										<th data-field="track" data-align="center" data-sortable="true" data-formatter="trackFormatter">Tracking Number</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
					

		</div>
	</div>
	
	
	
</div>
<!--===================================================-->
<!--End page content-->

<?php }} ?>

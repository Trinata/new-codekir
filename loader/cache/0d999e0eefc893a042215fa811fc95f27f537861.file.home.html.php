<?php /* Smarty version Smarty-3.1.15, created on 2015-09-02 16:25:48
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/home/home.html" */ ?>
<?php /*%%SmartyHeaderCode:84821142355d2daa382ef51-44953412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d999e0eefc893a042215fa811fc95f27f537861' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/home/home.html',
      1 => 1441185809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84821142355d2daa382ef51-44953412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d2daa383fa98_06244116',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d2daa383fa98_06244116')) {function content_55d2daa383fa98_06244116($_smarty_tpl) {?>
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">Dashboard</h1>
	
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
	<li class="active">Dashboard</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	
	<div class="row">
		<div class="col-sm-6 col-lg-3">
					
			<!--Registered User-->
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="panel media pad-all">
				<div class="media-left">
					<span class="icon-wrap icon-wrap-sm icon-circle bg-success">
					<i class="fa fa-user fa-2x"></i>
					</span>
				</div>
	
				<div class="media-body">
					<p class="text-2x mar-no text-thin">register			</p>
					<p class="text-muted mar-no">Registered User</p>
				</div>
			</div>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	
		</div>
		<div class="col-sm-6 col-lg-3">
					
			<!--Available Course-->
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="panel media pad-all">
				<div class="media-left">
					<span class="icon-wrap icon-wrap-sm icon-circle bg-info">
					<i class="fa fa-book fa-2x"></i>
					</span>
				</div>
	
				<div class="media-body">
					<p class="text-2x mar-no text-thin">course</p>
					<p class="text-muted mar-no">Available Course</p>
				</div>
			</div>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	
		</div>
		<div class="col-sm-6 col-lg-3">
	
			<!--Ebook-->
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="panel media pad-all">
				<div class="media-left">
					<span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
					<i class="fa fa-download fa-2x"></i>
					</span>
				</div>
	
				<div class="media-body">
					<p class="text-2x mar-no text-thin">download</p>
					<p class="text-muted mar-no">Ebook Downloaded</p>
				</div>
			</div>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	
		</div>
		<div class="col-sm-6 col-lg-3">
	
			<!--Online Users-->
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="panel media pad-all">
				<div class="media-left">
					<span class="icon-wrap icon-wrap-sm icon-circle bg-danger">
					<i class="fa fa-plane fa-2x"></i>
					</span>
				</div>
	
				<div class="media-body">
					<p class="text-2x mar-no text-thin">online</p>
					<p class="text-muted mar-no">Online users</p>
				</div>
			</div>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Visitor Chart</h3>
				</div>
				<div class="panel-body">
	
					<!--Morris Area Chart placeholder-->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<div id="demo-morris-area" style="height:212px"></div>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	
				</div>
			</div>
		</div>
	</div>
	
	
	
</div>
<!--===================================================-->
<!--End page content-->

<?php }} ?>

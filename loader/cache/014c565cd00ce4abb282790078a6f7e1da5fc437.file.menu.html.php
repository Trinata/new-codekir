<?php /* Smarty version Smarty-3.1.15, created on 2015-09-04 14:07:41
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/theme/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:188283232355e6c3add309f7-08766424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '014c565cd00ce4abb282790078a6f7e1da5fc437' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/admin/view/theme/menu.html',
      1 => 1441350446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188283232355e6c3add309f7-08766424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e6c3add66f60_75560895',
  'variables' => 
  array (
    'basedomain' => 0,
    'menu' => 0,
    'val' => 0,
    'valSubmenu' => 0,
    'menuIndex' => 0,
    'valIndex' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e6c3add66f60_75560895')) {function content_55e6c3add66f60_75560895($_smarty_tpl) {?>
	<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
plugins/nestable/jquery.nestable.js"></script>
<script>
		

$(document).ready(function()
{

    var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1
    })
    .on('change', updateOutput);

    // activate Nestable for list 2
    $('#nestable2').nestable({
        group: 1
    })
    .on('change', updateOutput);

    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));
    updateOutput($('#nestable2').data('output', $('#nestable2-output')));

    $('#nestable-menu').on('click', function(e)
    {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    $('#nestable3').nestable();

});

		
</script>
<script type="text/javascript">

$(document).on('change','#selectpicker',function(){
		var linkMenu = $(this).val();
		// alert(linkMenu);
		
		if(linkMenu=='0'){
		// alert(linkMenu);
				$('#linkMenu').html('<input type="text" placeholder="URL Menu" id="demo-hor-inputemail" class="form-control" name="linkMenu">');

		}else if(linkMenu=='1'){
		// alert(linkMenu);
			$.post(basedomain+"menu/getUrl", {linkMenu:linkMenu}, function(data){
				
				if (data.status==true) {

					$('#linkMenu').html(data.dataVal);
					$('#idRefresh').selectpicker('refresh');	

				}
			}, "JSON")
				
		}else if(linkMenu=='2'){
		// alert(linkMenu);
				$('#linkMenu').html('<input type="hidden" id="demo-hor-inputemail" class="form-control" name="linkMenu" value="blog">');	
		}else if(linkMenu=='3'){
		// alert(linkMenu);
				$('#linkMenu').html('');	
		}
	});

</script>
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
								<form class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
menu/inputMenu">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputemail">Title Menu</label>
											<div class="col-sm-9">
												<input type="text" placeholder="Title Menu" id="demo-hor-inputemail" name="title" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputemail">Parent Menu</label>
											<div class="col-sm-9">
												<select class="selectpicker" name="parent">
														<option value="0">-Index-</option>
													<?php  $_smarty_tpl->tpl_vars['valIndex'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valIndex']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuIndex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valIndex']->key => $_smarty_tpl->tpl_vars['valIndex']->value) {
$_smarty_tpl->tpl_vars['valIndex']->_loop = true;
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['valIndex']->value['id_menu'];?>
"><?php echo $_smarty_tpl->tpl_vars['valIndex']->value['title_menu'];?>
</option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputemail">Link MENU</label>
											<div class="col-sm-9">
												<select class="selectpicker" id="selectpicker">
													<option value="0">URL</option>
													<option value="1">Page</option>
													<option value="2">Blog</option>
													<option value="3">Category Product</option>
												</select>
												<div id="linkMenu">
												<input type="text" placeholder="URL Menu" id="demo-hor-inputemail" name="linkMenu" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputemail">Status</label>
											<div class="col-sm-9">
												<select class="selectpicker" name="status">
													<option value="0">Unpublish</option>
													<option value="1">Publish</option>
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

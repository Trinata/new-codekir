<?php /* Smarty version Smarty-3.1.15, created on 2015-09-04 11:37:01
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/default/view/theme/bigshope/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:156862922355e91c2131ed74-25974908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b8bc17e6314cae2b99101435ba3f26677491cf7' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/default/view/theme/bigshope/footer.html',
      1 => 1441341418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156862922355e91c2131ed74-25974908',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55e91c213442c4_06577272',
  'variables' => 
  array (
    'menuData' => 0,
    'valMenu' => 0,
    'basedomain' => 0,
    'valSubmenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e91c213442c4_06577272')) {function content_55e91c213442c4_06577272($_smarty_tpl) {?>	   <div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
		 <ul class="menu">
		 	<?php  $_smarty_tpl->tpl_vars['valMenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valMenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valMenu']->key => $_smarty_tpl->tpl_vars['valMenu']->value) {
$_smarty_tpl->tpl_vars['valMenu']->_loop = true;
?>
                     <?php if ($_smarty_tpl->tpl_vars['valMenu']->value['parent_id']=='0') {?>
						<li class="item1"><a href="#"><?php echo $_smarty_tpl->tpl_vars['valMenu']->value['title_menu'];?>

							 <?php if ($_smarty_tpl->tpl_vars['valMenu']->value['subMenu']) {?><img class="arrow-img" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/view/theme/bigshope/images/arrow1.png" alt=""/> <?php }?></a>
							 <?php if ($_smarty_tpl->tpl_vars['valMenu']->value['subMenu']) {?>
						<ul class="cute">
							 <?php  $_smarty_tpl->tpl_vars['valSubmenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valSubmenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['valMenu']->value['subMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valSubmenu']->key => $_smarty_tpl->tpl_vars['valSubmenu']->value) {
$_smarty_tpl->tpl_vars['valSubmenu']->_loop = true;
?>
							<li class="subitem1"><a href="product.html"><?php echo $_smarty_tpl->tpl_vars['valSubmenu']->value['title_menu'];?>
 </a></li>
							 <?php } ?>
							
						</ul>
						 <?php }?>
					</li>
					 <?php }?>
                    <?php } ?>
	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
		
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		
		</script>
					<div class=" chain-grid menu-chain">
	   		     		<a href="single.html"><img class="img-responsive chain" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/view/theme/bigshope/images/wat.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">300$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6><a href="single.html">Lorem ipsum dolor</a></h6>  		     			   		     										
	   		     		</div>
	   		     	</div>
	   		     	 <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a> 	
			</div>
	   		    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>NEWS-LETTER</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latter-right">
					<p>FOLLOW US</p>
					<ul class="face-in-to">
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span class="facebook-in"> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6>CATEGORIES</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>FEATURE PROJECTS</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>TOP BRANDS</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate cate-bottom">
					<h6>OUR ADDERSS</h6>
					<ul>
						<li>Aliquam metus  dui. </li>
						<li>orci, ornareidquet</li>
						<li> ut,DUI.</li>
						<li >nisi, dignissim</li>
						<li >gravida at.</li>
						<li class="phone">PH : 6985792466</li>
						<li class="temp"> <p class="footer-class">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html><?php }} ?>

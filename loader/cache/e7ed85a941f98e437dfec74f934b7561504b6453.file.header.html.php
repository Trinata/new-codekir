<?php /* Smarty version Smarty-3.1.15, created on 2015-09-03 15:01:12
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/default/view/theme/bonfire/header.html" */ ?>
<?php /*%%SmartyHeaderCode:77042594255d29461077783-65430282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7ed85a941f98e437dfec74f934b7561504b6453' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/default/view/theme/bonfire/header.html',
      1 => 1441267269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77042594255d29461077783-65430282',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d294610a5cd6_52456328',
  'variables' => 
  array (
    'basedomain' => 0,
    'menuData' => 0,
    'valMenu' => 0,
    'valSubmenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d294610a5cd6_52456328')) {function content_55d294610a5cd6_52456328($_smarty_tpl) {?><!--header-->
    <div class="header">
        <div class="header-top">
            <div class="container"> 
            <div class="header-top-in">         
                <div class="logo">
                    <a href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/assets/images/logo.png" alt=" " ></a>
                </div>
                <div class="header-in">
                    <ul class="icon1 sub-icon1">
                            <li  ><a href="wishlist.html">WISH LIST (0)</a> </li>
                            <li  ><a href="account.html">  MY ACCOUNT</a></li>
                            <li ><a href="#" > SHOPPING CART</a></li>
                            <li > <a href="checkout.html" >CHECKOUT</a> </li>   
                            <li><div class="cart">
                                    <a href="#" class="cart-in"> </a>
                                    <span> 0</span>
                                </div>
                                <ul class="sub-icon1 list">
                          <h3>Recently added items(2)</h3>
                          <div class="shopping_cart">
                              <div class="cart_box">
                                 <div class="message">
                                     <div class="alert-close"> </div> 
                                    <div class="list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/assets/images/14.jpg" class="img-responsive" alt=""></div>
                                    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
                                     $12.00</span></div>
                                      <div class="clearfix"></div>
                                  </div>
                                </div>
                                <div class="cart_box1">
                                  <div class="message1">
                                     <div class="alert-close1"> </div> 
                                    <div class="list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/assets/images/15.jpg" class="img-responsive" alt=""></div>
                                    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
                                     $12.00</span></div>
                                      <div class="clearfix"></div>
                                  </div>
                                </div>
                            </div>
                            <div class="total">
                                <div class="total_left">CartSubtotal : </div>
                                <div class="total_right">$250.00</div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="login_buttons">
                              <div class="check_button"><a href="checkout.html">Check out</a></div>
                              <div class="clearfix"></div>
                            </div>
                          <div class="clearfix"></div>
                        </ul>
                            </li>
                        </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            </div>
        </div>
        <div class="header-bottom">
        <div class="container">
            <div class="h_menu4">
                <a class="toggleMenu" href="#">Menu</a>
                <ul class="nav">
                    <?php  $_smarty_tpl->tpl_vars['valMenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valMenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valMenu']->key => $_smarty_tpl->tpl_vars['valMenu']->value) {
$_smarty_tpl->tpl_vars['valMenu']->_loop = true;
?>
                     <?php if ($_smarty_tpl->tpl_vars['valMenu']->value['parent_id']=='0') {?>
                         <li ><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['valMenu']->value['title_menu'];?>
</a>
                         <?php if ($_smarty_tpl->tpl_vars['valMenu']->value['subMenu']) {?>
                            
                           <ul class="drop">

                            <?php  $_smarty_tpl->tpl_vars['valSubmenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valSubmenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['valMenu']->value['subMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valSubmenu']->key => $_smarty_tpl->tpl_vars['valSubmenu']->value) {
$_smarty_tpl->tpl_vars['valSubmenu']->_loop = true;
?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['valSubmenu']->value['title_menu'];?>
</a></li>
                            <?php } ?>

                            </ul>
                         <?php }?>

                         </li>
                     <?php }?>
                    <?php } ?>
                  <!--   <li ><a href="#" >Laptops & Notebooks</a>
                        <ul class="drop">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product">Sony(2)</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product">Android(4)</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product">Apple(7)</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product">Acer(53)</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product">HP(78)</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product">Intel(5)</a></li>
                        </ul>
                        </li>                       
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product" >  Tablets</a></li>            
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product" >Components</a></li>                                         
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product" >Software</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product" >Phones & PDAs </a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
product" >  Cameras  </a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
contract" >Contact </a></li> -->
                    
                </ul>
                <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/assets/js/nav.js"></script>
            </div>
        </div>
        </div>
        <div class="header-bottom-in">
            <div class="container">
            <div class="header-bottom-on">
            <p class="wel"><a href="#">Welcome visitor you can login or create an account.</a></p>
            <div class="header-can">
                <ul class="social-in">
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i class="facebook"> </i></a></li>
                        <li><a href="#"><i class="twitter"> </i></a></li>                   
                        <li><a href="#"><i class="skype"> </i></a></li>
                    </ul>   
                    <div class="down-top">      
                            <select class="in-drop">
                              <option value="Dollars" class="in-of">Dollars</option>
                              <option value="Euro" class="in-of">Euro</option>
                              <option value="Yen" class="in-of">Yen</option>
                            </select>
                     </div>
                    <div class="search">
                        <form>
                            
                            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
                            <input type="submit" value="">
                            
                        </form>
                    </div>

                    <div class="clearfix"> </div>
            </div>
            <div class="clearfix"></div>
        </div>
        </div>
        </div>
    </div><?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-09-03 11:52:05
         compiled from "/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/default/view/theme/bonfire/meta.html" */ ?>
<?php /*%%SmartyHeaderCode:57897755955d2943496f178-80537282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98f7037d79dd26f826a54de0effaa4854ce0d2fa' => 
    array (
      0 => '/home/erjoned/Data/xampp/htdocs/codekir-cms/applications/default/view/theme/bonfire/meta.html',
      1 => 1441255913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57897755955d2943496f178-80537282',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d2943497a164_06682661',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d2943497a164_06682661')) {function content_55d2943497a164_06682661($_smarty_tpl) {?><!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Bonfire a Ecommerce Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/view/theme/bonfire/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/view/theme/bonfire/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/view/theme/bonfire/css/style.css" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bonfire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript">
 
 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
 
  </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/view/theme/bonfire/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/view/theme/bonfire/js/easing.js"></script>
                <script type="text/javascript">


                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });


                </script>
<!--slider-script-->
        <script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/view/theme/bonfire/js/responsiveslides.min.js"></script>
            <script>

                $(function () {
                  $("#slider1").responsiveSlides({
                    auto: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                  });
                });


            </script>
<!--//slider-script-->
<script>


$(document).ready(function(c) {
    $('.alert-close').on('click', function(c){
        $('.message').fadeOut('slow', function(c){
            $('.message').remove();
        });
    });   
});


</script>
<script>


$(document).ready(function(c) {
    $('.alert-close1').on('click', function(c){
        $('.message1').fadeOut('slow', function(c){
            $('.message1').remove();
        });
    });   
});


</script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/view/theme/bonfire/css/etalage.css">
<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
applications/default/view/theme/bonfire/js/jquery.etalage.min.js"></script>
        <script>

            jQuery(document).ready(function($){

                $('#etalage').etalage({
                    thumb_image_width: 300,
                    thumb_image_height: 400,
                    source_image_width: 900,
                    source_image_height: 1200,
                    show_hint: true,
                    click_callback: function(image_anchor, instance_id){
                        alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                    }
                });

            });

        </script>
</head>
<body><?php }} ?>

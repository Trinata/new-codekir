<?php /* Smarty version Smarty-3.1.15, created on 2015-08-12 11:48:11
         compiled from "/home/ovancop/Data/htdocs/codekir/v1.1/applications/default/view/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:172478537955cad00b61e3b8-62014359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12ca01a926b7aeebdabfbd2db3f2d7ca22e8a37e' => 
    array (
      0 => '/home/ovancop/Data/htdocs/codekir/v1.1/applications/default/view/footer.html',
      1 => 1406100943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172478537955cad00b61e3b8-62014359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55cad00b6495b8_34576150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cad00b6495b8_34576150')) {function content_55cad00b6495b8_34576150($_smarty_tpl) {?>

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/jquery-1.10.2.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/demo/dashboard-demo.js"></script>
	 <script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/jquery.imagesloaded.js"></script>
		  <script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/jquery.wookmark.js"></script>
		  <script type="text/javascript">
		    (function ($){
		      var $tiles = $('#tiles'),
		          $handler = $('li', $tiles),
		          $main = $('#main'),
		          $window = $(window),
		          $document = $(document),
		          options = {
		            autoResize: true, // This will auto-update the layout when the browser window is resized.
		            container: $main, // Optional, used for some extra CSS styling
		            offset: 20, // Optional, the distance between grid items
		            itemWidth:280 // Optional, the width of a grid item
		          };
		      /**
		       * Reinitializes the wookmark handler after all images have loaded
		       */
		      function applyLayout() {
		        $tiles.imagesLoaded(function() {
		          // Destroy the old handler
		          if ($handler.wookmarkInstance) {
		            $handler.wookmarkInstance.clear();
		          }
		
		          // Create a new layout handler.
		          $handler = $('li', $tiles);
		          $handler.wookmark(options);
		        });
		      }
		      /**
		       * When scrolled all the way to the bottom, add more tiles
		       */
		      function onScroll() {
		        // Check if we're within 100 pixels of the bottom edge of the broser window.
		        var winHeight = window.innerHeight ? window.innerHeight : $window.height(), // iphone fix
		            closeToBottom = ($window.scrollTop() + winHeight > $document.height() - 100);
		
		        if (closeToBottom) {
		          // Get the first then items from the grid, clone them, and add them to the bottom of the grid
		          var $items = $('li', $tiles),
		              $firstTen = $items.slice(0, 10);
		          $tiles.append($firstTen.clone());
		
		          applyLayout();
		        }
		      };
		
		      // Call the layout function for the first time
		      applyLayout();
		
		      // Capture scroll event.
		      $window.bind('scroll.wookmark', onScroll);
		    })(jQuery);
		  </script>
</body>

</html>
<?php }} ?>

<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:09:05
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70f9d16d99_26013646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1752055347,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e70f9d16d99_26013646 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/prestashop1.7/themes/shopnow/modules/ps_searchbar/ps_searchbar.tpl --><!-- Block search module TOP -->
<div id="search_widget" class="search-widget col-lg-4 col-md-5 col-sm-12" data-search-controller-url="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<span class="search_icon_toogle">
        <i class="material-icons-search"></i></span>
    <form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_string']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search...','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
		<button type="submit">
			<i class="material-icons">search</i>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<!-- end /var/www/html/prestashop1.7/themes/shopnow/modules/ps_searchbar/ps_searchbar.tpl --><?php }
}

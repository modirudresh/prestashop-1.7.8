<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:09:16
  from '/var/www/html/prestashop1.7/modules/ets_wishlist_pres17/views/templates/hook/list_button_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e710468ed51_70101645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d34da59da55e2afe76258e0eb4718f8d6067e82' => 
    array (
      0 => '/var/www/html/prestashop1.7/modules/ets_wishlist_pres17/views/templates/hook/list_button_list.tpl',
      1 => 1752040527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e710468ed51_70101645 (Smarty_Internal_Template $_smarty_tpl) {
?><button class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_WL_BACKGROUND_BORDER']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_WL_BUTTON_POSITION']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ets-wishlist-button-add<?php if ($_smarty_tpl->tpl_vars['customer_logged']->value) {
if ($_smarty_tpl->tpl_vars['added_to_wishlist']->value) {?> delete_wishlist<?php } else { ?> add_wishlist<?php }
} else { ?> login<?php }?> ets-wishlist-button-add_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product_attribute']->value), ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product_attribute']->value), ENT_QUOTES, 'UTF-8');?>
" data-id_wishlist="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['added_to_wishlist']->value), ENT_QUOTES, 'UTF-8');?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['url_wishlist']->value;?>
">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/>
    </svg>
</button><?php }
}

<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:08:48
  from '/var/www/html/prestashop1.7/themes/classic/templates/checkout/_partials/cart-summary-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70e8cfdeb6_60995781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58cb12c255e1a6c733968b996b9dd0c47773df54' => 
    array (
      0 => '/var/www/html/prestashop1.7/themes/classic/templates/checkout/_partials/cart-summary-top.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e70e8cfdeb6_60995781 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cart-summary-top js-cart-summary-top">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

</div>
<?php }
}

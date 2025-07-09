<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:08:43
  from '/var/www/html/prestashop1.7/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70e34e6b10_70725838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b511bf7e40a528a0f2d995809393708be1d15d' => 
    array (
      0 => '/var/www/html/prestashop1.7/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e70e34e6b10_70725838 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}

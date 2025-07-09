<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:09:16
  from 'module:psfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e7104661b63_52479845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:psfeaturedproductsviewste',
      1 => 1752055347,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_686e7104661b63_52479845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '828318839686e710465d7d0_39498792';
?>
<!-- begin /var/www/html/prestashop1.7/themes/shopnow/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><section class="featured-products clearfix home-block-section col-xs-12 col-sm-12">
  <h3 class="h1 products-section-title text-uppercase title-home">
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
  </h3>
  <div class="products product_list homefeatured">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  </section>
<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'ybcCustom1'),$_smarty_tpl ) );?>

<?php }?><!-- end /var/www/html/prestashop1.7/themes/shopnow/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><?php }
}

<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:14:05
  from '/var/www/html/prestashop1.7/modules/ph_viewedproducts/views/templates/hook/admin_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e7225cbbbb0_95320806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '248e4c22cbfc077107478b127ba97f4dbf1e61b3' => 
    array (
      0 => '/var/www/html/prestashop1.7/modules/ph_viewedproducts/views/templates/hook/admin_head.tpl',
      1 => 1751970613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e7225cbbbb0_95320806 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['jsAdmin']->value)) && $_smarty_tpl->tpl_vars['jsAdmin']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['jsAdmin']->value,'html','UTF-8' ));?>
" defer="defer"><?php echo '</script'; ?>
>
<?php }
}
}

<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:09:05
  from '/var/www/html/prestashop1.7/modules/ybc_productimagehover/views/templates/hook/renderJs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70f9bb31d1_02058845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85088d04cce39a0290e64e342eb3652d4e8ed22c' => 
    array (
      0 => '/var/www/html/prestashop1.7/modules/ybc_productimagehover/views/templates/hook/renderJs.tpl',
      1 => 1752055346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e70f9bb31d1_02058845 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
 var baseAjax ='<?php if ((isset($_smarty_tpl->tpl_vars['_PI_VER_17_']->value)) && $_smarty_tpl->tpl_vars['_PI_VER_17_']->value) {
echo $_smarty_tpl->tpl_vars['baseAjax']->value;
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseAjax']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>';
 var YBC_PI_TRANSITION_EFFECT = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_PI_TRANSITION_EFFECT']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
 var _PI_VER_17_ = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['_PI_VER_17_']->value), ENT_QUOTES, 'UTF-8');?>

 var _PI_VER_16_ = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['_PI_VER_16_']->value), ENT_QUOTES, 'UTF-8');?>

<?php echo '</script'; ?>
><?php }
}

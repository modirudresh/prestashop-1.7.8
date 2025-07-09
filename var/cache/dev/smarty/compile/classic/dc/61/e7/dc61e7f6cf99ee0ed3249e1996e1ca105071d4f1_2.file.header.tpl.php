<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:08:36
  from '/var/www/html/prestashop1.7/modules/pleasewait/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70dc2931d1_24171415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc61e7f6cf99ee0ed3249e1996e1ca105071d4f1' => 
    array (
      0 => '/var/www/html/prestashop1.7/modules/pleasewait/views/templates/hook/header.tpl',
      1 => 1752055346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e70dc2931d1_24171415 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['css']->value) {?>
<style><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</style>
<?php }
}
}

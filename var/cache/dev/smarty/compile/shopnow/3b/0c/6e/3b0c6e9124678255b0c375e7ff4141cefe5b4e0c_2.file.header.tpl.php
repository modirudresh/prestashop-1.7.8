<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:09:19
  from '/var/www/html/prestashop1.7/modules/pleasewait/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e7107147343_11234662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0c6e9124678255b0c375e7ff4141cefe5b4e0c' => 
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
function content_686e7107147343_11234662 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['css']->value) {?>
<style><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</style>
<?php }
}
}

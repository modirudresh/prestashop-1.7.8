<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:09:05
  from '/var/www/html/prestashop1.7/modules/ets_reviewticker/views/templates/hook/reviewticker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70f9ba6e63_66442000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0b45cee54cf7eb2648fd376f5227175d2d96bcd' => 
    array (
      0 => '/var/www/html/prestashop1.7/modules/ets_reviewticker/views/templates/hook/reviewticker.tpl',
      1 => 1752055346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e70f9ba6e63_66442000 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['assigns']->value)) && $_smarty_tpl->tpl_vars['assigns']->value) {
echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assigns']->value, 'val', false, 'id_key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
        var <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_key']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 = <?php if ($_smarty_tpl->tpl_vars['id_key']->value == 'ETS_RT_POSITION' || $_smarty_tpl->tpl_vars['id_key']->value == 'ETS_RT_URL_AJAX') {?>'<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'<?php } elseif ($_smarty_tpl->tpl_vars['id_key']->value == 'ETS_RT_LOOP_OUT') {
echo htmlspecialchars(floatval($_smarty_tpl->tpl_vars['val']->value), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['val']->value), ENT_QUOTES, 'UTF-8');
}?>;
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
}
}

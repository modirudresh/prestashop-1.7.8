<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:14:06
  from '/var/www/html/prestashop1.7/admin3316paect/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e72260a0fb5_12981685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a55e0aefa81eb616dc590fdb0944fcacca8657b' => 
    array (
      0 => '/var/www/html/prestashop1.7/admin3316paect/themes/default/template/content.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e72260a0fb5_12981685 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}

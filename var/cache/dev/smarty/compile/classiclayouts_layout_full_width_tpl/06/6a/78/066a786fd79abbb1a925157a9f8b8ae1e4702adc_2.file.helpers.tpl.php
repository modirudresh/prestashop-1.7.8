<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:08:36
  from '/var/www/html/prestashop1.7/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70dcaef336_33860959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '066a786fd79abbb1a925157a9f8b8ae1e4702adc' => 
    array (
      0 => '/var/www/html/prestashop1.7/themes/classic/templates/_partials/helpers.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e70dcaef336_33860959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/prestashop1.7/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/06/6a/78/066a786fd79abbb1a925157a9f8b8ae1e4702adc_2.file.helpers.tpl.php',
    'uid' => '066a786fd79abbb1a925157a9f8b8ae1e4702adc',
    'call_name' => 'smarty_template_function_renderLogo_984771298686e70dcaea788_04993529',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_984771298686e70dcaea788_04993529 */
if (!function_exists('smarty_template_function_renderLogo_984771298686e70dcaea788_04993529')) {
function smarty_template_function_renderLogo_984771298686e70dcaea788_04993529(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_984771298686e70dcaea788_04993529 */
}

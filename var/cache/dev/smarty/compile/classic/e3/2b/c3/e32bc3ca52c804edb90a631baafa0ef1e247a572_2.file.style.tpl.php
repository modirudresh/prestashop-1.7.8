<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:08:36
  from '/var/www/html/prestashop1.7/modules/ets_addtocart_fromlist/views/templates/hook/style.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70dc264b29_45845289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e32bc3ca52c804edb90a631baafa0ef1e247a572' => 
    array (
      0 => '/var/www/html/prestashop1.7/modules/ets_addtocart_fromlist/views/templates/hook/style.tpl',
      1 => 1751969406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e70dc264b29_45845289 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .add-to-cart-icon #ets_addToCart {
        position: absolute;
        width: <?php echo ($_smarty_tpl->tpl_vars['ETS_ATC_ICON_SIZE']->value+10);?>
px;
        height: <?php echo ($_smarty_tpl->tpl_vars['ETS_ATC_ICON_SIZE']->value+10);?>
px;
        z-index: 10;
        top: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ADJUST_ICON_TOP']->value;?>
px;
    <?php if ($_smarty_tpl->tpl_vars['ETS_ATC_ICON_POSITION']->value == 'icon-left') {?>
        left: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ADJUST_ICON_LEFT']->value;?>
px;
    <?php } else { ?>
        right: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ADJUST_ICON_RIGHT']->value;?>
px;
    <?php }?>
        padding-right: 10px;
        padding-left: 3px;
        padding-top: 5px;
    <?php if ($_smarty_tpl->tpl_vars['ETS_ATC_ICON_BACKGROUND_BORDER']->value == 'icon-rounded') {?>
        border-radius: 3px;
    <?php } elseif ($_smarty_tpl->tpl_vars['ETS_ATC_ICON_BACKGROUND_BORDER']->value == 'icon-circle') {?>
        border-radius: 50%;
    <?php } else { ?>
        border-radius:0;
    <?php }?>
        background-color: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ICON_BACKGROUND_COLOR']->value;?>
;
    }
    .add-to-cart-icon #ets_addToCart:hover {
        background-color: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ICON_BACKGROUND_COLOR_HOVER']->value;?>
;
    }
    .add-to-cart-icon #ets_addToCart svg {
        width: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ICON_SIZE']->value;?>
px;
        height: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ICON_SIZE']->value;?>
px;
        color: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ICON_COLOR']->value;?>
;
        fill: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ICON_COLOR']->value;?>
;
    }
    .add-to-cart-button #ets_addToCart {
        position: relative;
        z-index: 10;
        margin-left: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ADJUST_LEFT']->value;?>
px;
        margin-top: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ADJUST_TOP']->value;?>
px;
        margin-right: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ADJUST_RIGHT']->value;?>
px;
        margin-bottom: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_ADJUST_BOTTOM']->value;?>
px;
    <?php if ($_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_POSITION']->value == 'button-left') {?>
        float: left;
    <?php } elseif ($_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_POSITION']->value == 'button-right') {?>
        float: right;
    <?php } else { ?>
        width: calc(100% - <?php echo ($_smarty_tpl->tpl_vars['ETS_ATC_ADJUST_LEFT']->value+$_smarty_tpl->tpl_vars['ETS_ATC_ADJUST_RIGHT']->value);?>
px);
    <?php }?>
        background-color: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_BACKGROUND_COLOR']->value;?>
;
        border: 3px solid <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_BORDER_COLOR']->value;?>
;
        color: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_TEXT_COLOR']->value;?>
;
        <?php if ((isset($_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_BORDER_RADIUS']->value)) && $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_BORDER_RADIUS']->value) {?>
        border-radius: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_BORDER_RADIUS']->value;?>
px;
        <?php }?>
    }
    .add-to-cart-button #ets_addToCart:hover {
        background-color: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_BACKGROUND_HOVER_COLOR']->value;?>
;
        border: 3px solid <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_BORDER_HOVER_COLOR']->value;?>
;
        color: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_TEXT_HOVER_COLOR']->value;?>
;
        <?php if ((isset($_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_BORDER_RADIUS']->value)) && $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_BORDER_RADIUS']->value) {?>
            border-radius: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_BORDER_RADIUS']->value;?>
px;
        <?php }?>
    }
    .add-to-cart-button #ets_addToCart:hover {
        fill: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_TEXT_HOVER_COLOR']->value;?>
;
    }
    .add-to-cart-button svg {
        width: 21px;
        height: 21px;
        fill: <?php echo $_smarty_tpl->tpl_vars['ETS_ATC_BUTTON_TEXT_COLOR']->value;?>
;
        padding-top: 5px;
        margin-right: 5px;
    }

</style><?php }
}

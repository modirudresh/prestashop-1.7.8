<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:09:05
  from 'module:pscontactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70f9c57870_64528085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:pscontactinfonav.tpl',
      1 => 1752055347,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e70f9c57870_64528085 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/prestashop1.7/themes/shopnow/modules/ps_contactinfo/nav.tpl --><div id="_desktop_contact_link">
  <div id="contact-link">
    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_PHONE_CALL'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_PHONE_CALL']) {?>
      <div class="contact_link_item">
          <a href="tel:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_PHONE_CALL'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone: ','d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_PHONE_LABEL'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

          </a>
      </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['contact_infos']->value['email'])) && $_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
     <div class="contact_link_item">
          <a href="mailto:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contact_infos']->value['email'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email: ','d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contact_infos']->value['email'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

          </a>
      </div>
    <?php }?>
  </div>
</div>
<!-- end /var/www/html/prestashop1.7/themes/shopnow/modules/ps_contactinfo/nav.tpl --><?php }
}

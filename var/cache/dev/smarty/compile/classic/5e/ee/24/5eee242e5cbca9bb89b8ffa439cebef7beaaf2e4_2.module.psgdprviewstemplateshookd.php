<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:08:36
  from 'module:psgdprviewstemplateshookd' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70dcbdc8a5_73317911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5eee242e5cbca9bb89b8ffa439cebef7beaaf2e4' => 
    array (
      0 => 'module:psgdprviewstemplateshookd',
      1 => 1751864915,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686e70dcbdc8a5_73317911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /var/www/html/prestashop1.7/modules/psgdpr/views/templates/hook/displayGDPRConsent.tpl --><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_220929997686e70dcbd6a96_36054102', 'gdpr_checkbox');
?>


<?php echo '<script'; ?>
 type="text/javascript">
    var psgdpr_front_controller = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_front_controller']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    psgdpr_front_controller = psgdpr_front_controller.replace(/\amp;/g,'');
    var psgdpr_id_customer = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_id_customer']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var psgdpr_customer_token = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_customer_token']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var psgdpr_id_guest = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_id_guest']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var psgdpr_guest_token = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_guest_token']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";

    document.addEventListener('DOMContentLoaded', function() {
        let psgdpr_id_module = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_id_module']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
        let parentForm = $('.gdpr_module_' + psgdpr_id_module).closest('form');

        let toggleFormActive = function() {
            let parentForm = $('.gdpr_module_' + psgdpr_id_module).closest('form');
            let checkbox = $('#psgdpr_consent_checkbox_' + psgdpr_id_module);
            let element = $('.gdpr_module_' + psgdpr_id_module);
            let iLoopLimit = 0;

            // by default forms submit will be disabled, only will enable if agreement checkbox is checked
            if (element.prop('checked') != true) {
                element.closest('form').find('[type="submit"]').attr('disabled', 'disabled');
            }
            $(document).on("change" ,'.psgdpr_consent_checkboxes_' + psgdpr_id_module, function() {
                if ($(this).prop('checked') == true) {
                    $(this).closest('form').find('[type="submit"]').removeAttr('disabled');
                } else {
                    $(this).closest('form').find('[type="submit"]').attr('disabled', 'disabled');
                }

            });
        }

        // Triggered on page loading
        toggleFormActive();

        $(document).on('submit', parentForm, function(event) {
            $.ajax({
                type: 'POST',
                url: psgdpr_front_controller,
                data: {
                    ajax: true,
                    action: 'AddLog',
                    id_customer: psgdpr_id_customer,
                    customer_token: psgdpr_customer_token,
                    id_guest: psgdpr_id_guest,
                    guest_token: psgdpr_guest_token,
                    id_module: psgdpr_id_module,
                },
                error: function (err) {
                    console.log(err);
                }
            });
        });
    });
<?php echo '</script'; ?>
>

<!-- end /var/www/html/prestashop1.7/modules/psgdpr/views/templates/hook/displayGDPRConsent.tpl --><?php }
/* {block 'gdpr_checkbox'} */
class Block_220929997686e70dcbd6a96_36054102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'gdpr_checkbox' => 
  array (
    0 => 'Block_220929997686e70dcbd6a96_36054102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="gdpr_consent gdpr_module_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_id_module']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        <span class="custom-checkbox">
            <label class="psgdpr_consent_message">
                <input id="psgdpr_consent_checkbox_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_id_module']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" name="psgdpr_consent_checkbox" type="checkbox" value="1" class="psgdpr_consent_checkboxes_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_id_module']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <span><i class="material-icons rtl-no-flip checkbox-checked psgdpr_consent_icon"></i></span>
                <span><?php echo $_smarty_tpl->tpl_vars['psgdpr_consent_message']->value;?>
</span>            </label>
        </span>
    </div>
<?php
}
}
/* {/block 'gdpr_checkbox'} */
}

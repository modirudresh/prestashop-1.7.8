<?php
/* Smarty version 3.1.48, created on 2025-07-07 18:54:56
  from '/var/www/html/prestashop1.7/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686bcaa8e104e2_84340135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1758eeb3334b6faa688d63363686e8f70de8b04' => 
    array (
      0 => '/var/www/html/prestashop1.7/themes/classic/templates/index.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686bcaa8e104e2_84340135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_531296884686bcaa8e0dfa0_62270823', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_591263944686bcaa8e0e749_73769398 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1294102892686bcaa8e0f320_86166298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_405804261686bcaa8e0ef35_39597698 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1294102892686bcaa8e0f320_86166298', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_531296884686bcaa8e0dfa0_62270823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_531296884686bcaa8e0dfa0_62270823',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_591263944686bcaa8e0e749_73769398',
  ),
  'page_content' => 
  array (
    0 => 'Block_405804261686bcaa8e0ef35_39597698',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1294102892686bcaa8e0f320_86166298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_591263944686bcaa8e0e749_73769398', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_405804261686bcaa8e0ef35_39597698', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}

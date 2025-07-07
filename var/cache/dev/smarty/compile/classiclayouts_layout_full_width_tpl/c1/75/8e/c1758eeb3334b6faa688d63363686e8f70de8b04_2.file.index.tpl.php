<?php
/* Smarty version 3.1.48, created on 2025-07-07 17:16:42
  from '/var/www/html/prestashop1.7/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686bb3a2a05506_54877200',
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
function content_686bb3a2a05506_54877200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1939047269686bb3a2a03792_83689017', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1696540594686bb3a2a03bc4_88832244 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1511356251686bb3a2a04601_32018953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1814591415686bb3a2a041f6_21526526 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1511356251686bb3a2a04601_32018953', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1939047269686bb3a2a03792_83689017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1939047269686bb3a2a03792_83689017',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1696540594686bb3a2a03bc4_88832244',
  ),
  'page_content' => 
  array (
    0 => 'Block_1814591415686bb3a2a041f6_21526526',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1511356251686bb3a2a04601_32018953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1696540594686bb3a2a03bc4_88832244', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1814591415686bb3a2a041f6_21526526', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}

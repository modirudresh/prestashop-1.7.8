<?php
/* Smarty version 3.1.48, created on 2025-07-07 17:16:42
  from '/var/www/html/prestashop1.7/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686bb3a2a0c870_69563136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01e955b8cd0a1c5ead66dbc4cb95b079c5d5fe9f' => 
    array (
      0 => '/var/www/html/prestashop1.7/themes/classic/templates/page.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686bb3a2a0c870_69563136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1826248401686bb3a2a080d3_74230153', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1266296952686bb3a2a088a9_20929577 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_704855910686bb3a2a084f9_19006385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1266296952686bb3a2a088a9_20929577', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1185906511686bb3a2a0b2c4_42202490 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_616098231686bb3a2a0b712_57106656 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1780283195686bb3a2a0afa9_87556929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1185906511686bb3a2a0b2c4_42202490', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_616098231686bb3a2a0b712_57106656', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_108647361686bb3a2a0c039_99586163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1716452733686bb3a2a0bd81_05049455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108647361686bb3a2a0c039_99586163', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1826248401686bb3a2a080d3_74230153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1826248401686bb3a2a080d3_74230153',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_704855910686bb3a2a084f9_19006385',
  ),
  'page_title' => 
  array (
    0 => 'Block_1266296952686bb3a2a088a9_20929577',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1780283195686bb3a2a0afa9_87556929',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1185906511686bb3a2a0b2c4_42202490',
  ),
  'page_content' => 
  array (
    0 => 'Block_616098231686bb3a2a0b712_57106656',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1716452733686bb3a2a0bd81_05049455',
  ),
  'page_footer' => 
  array (
    0 => 'Block_108647361686bb3a2a0c039_99586163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_704855910686bb3a2a084f9_19006385', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1780283195686bb3a2a0afa9_87556929', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1716452733686bb3a2a0bd81_05049455', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

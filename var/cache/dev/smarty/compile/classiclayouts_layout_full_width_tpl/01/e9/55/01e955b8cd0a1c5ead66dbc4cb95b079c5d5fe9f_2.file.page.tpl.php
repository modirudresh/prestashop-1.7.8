<?php
/* Smarty version 3.1.48, created on 2025-07-07 18:54:56
  from '/var/www/html/prestashop1.7/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686bcaa8e17345_73632662',
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
function content_686bcaa8e17345_73632662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2092212089686bcaa8e13a25_04666206', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2069084122686bcaa8e14327_14880550 extends Smarty_Internal_Block
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
class Block_1864560747686bcaa8e13e37_22493827 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2069084122686bcaa8e14327_14880550', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_217084792686bcaa8e15793_02680455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_207556260686bcaa8e15d10_86542338 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_446287513686bcaa8e153b2_91618601 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_217084792686bcaa8e15793_02680455', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207556260686bcaa8e15d10_86542338', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1286496204686bcaa8e168d0_09424791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_344300274686bcaa8e16564_30054156 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1286496204686bcaa8e168d0_09424791', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2092212089686bcaa8e13a25_04666206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2092212089686bcaa8e13a25_04666206',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1864560747686bcaa8e13e37_22493827',
  ),
  'page_title' => 
  array (
    0 => 'Block_2069084122686bcaa8e14327_14880550',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_446287513686bcaa8e153b2_91618601',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_217084792686bcaa8e15793_02680455',
  ),
  'page_content' => 
  array (
    0 => 'Block_207556260686bcaa8e15d10_86542338',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_344300274686bcaa8e16564_30054156',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1286496204686bcaa8e168d0_09424791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1864560747686bcaa8e13e37_22493827', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_446287513686bcaa8e153b2_91618601', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_344300274686bcaa8e16564_30054156', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

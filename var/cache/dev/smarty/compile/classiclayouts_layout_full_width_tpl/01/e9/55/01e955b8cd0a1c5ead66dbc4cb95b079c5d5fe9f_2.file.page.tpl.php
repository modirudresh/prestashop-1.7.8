<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:08:36
  from '/var/www/html/prestashop1.7/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70dcad6ef9_94249222',
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
function content_686e70dcad6ef9_94249222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1629804039686e70dcad1d01_38886112', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_768829609686e70dcad2602_32850544 extends Smarty_Internal_Block
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
class Block_1607648504686e70dcad21b0_13798484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_768829609686e70dcad2602_32850544', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1725753371686e70dcad54c0_54504173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2020653555686e70dcad5a05_69573207 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_748965244686e70dcad4fb2_61711135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1725753371686e70dcad54c0_54504173', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2020653555686e70dcad5a05_69573207', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1928016652686e70dcad65e2_82663043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1634593395686e70dcad62b9_22025203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1928016652686e70dcad65e2_82663043', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1629804039686e70dcad1d01_38886112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1629804039686e70dcad1d01_38886112',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1607648504686e70dcad21b0_13798484',
  ),
  'page_title' => 
  array (
    0 => 'Block_768829609686e70dcad2602_32850544',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_748965244686e70dcad4fb2_61711135',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1725753371686e70dcad54c0_54504173',
  ),
  'page_content' => 
  array (
    0 => 'Block_2020653555686e70dcad5a05_69573207',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1634593395686e70dcad62b9_22025203',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1928016652686e70dcad65e2_82663043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1607648504686e70dcad21b0_13798484', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_748965244686e70dcad4fb2_61711135', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1634593395686e70dcad62b9_22025203', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

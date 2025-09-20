<?php
/* Smarty version 4.3.4, created on 2025-09-20 03:30:11
  from 'C:\xampp\htdocs\casual-vibes\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ce11b33c5b89_14928389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b9806ea15e4764bf829d24be71c8a74e6b98b48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casual-vibes\\themes\\classic\\templates\\page.tpl',
      1 => 1738226100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ce11b33c5b89_14928389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57536121068ce11b33c12d9_86690198', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_52673359768ce11b33c1b14_40968371 extends Smarty_Internal_Block
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
class Block_73577554268ce11b33c16b3_83696287 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52673359768ce11b33c1b14_40968371', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_17983487568ce11b33c41c8_26780748 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11484644568ce11b33c46c2_23412969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_211223426068ce11b33c3e34_92489046 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17983487568ce11b33c41c8_26780748', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11484644568ce11b33c46c2_23412969', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_58113903868ce11b33c51c2_00347324 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_164966409468ce11b33c4e90_61328631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58113903868ce11b33c51c2_00347324', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_57536121068ce11b33c12d9_86690198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_57536121068ce11b33c12d9_86690198',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_73577554268ce11b33c16b3_83696287',
  ),
  'page_title' => 
  array (
    0 => 'Block_52673359768ce11b33c1b14_40968371',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_211223426068ce11b33c3e34_92489046',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17983487568ce11b33c41c8_26780748',
  ),
  'page_content' => 
  array (
    0 => 'Block_11484644568ce11b33c46c2_23412969',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_164966409468ce11b33c4e90_61328631',
  ),
  'page_footer' => 
  array (
    0 => 'Block_58113903868ce11b33c51c2_00347324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73577554268ce11b33c16b3_83696287', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211223426068ce11b33c3e34_92489046', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164966409468ce11b33c4e90_61328631', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

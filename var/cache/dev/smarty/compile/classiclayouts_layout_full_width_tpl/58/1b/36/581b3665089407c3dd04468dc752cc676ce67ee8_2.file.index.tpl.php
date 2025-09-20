<?php
/* Smarty version 4.3.4, created on 2025-09-20 03:30:11
  from 'C:\xampp\htdocs\casual-vibes\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ce11b32443e7_11862034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '581b3665089407c3dd04468dc752cc676ce67ee8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casual-vibes\\themes\\classic\\templates\\index.tpl',
      1 => 1738226100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ce11b32443e7_11862034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210545416068ce11b3242545_94526397', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_32794807068ce11b3242a78_17769933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_142768249268ce11b32434e1_66836978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_22258861168ce11b3243188_87108064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142768249268ce11b32434e1_66836978', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_210545416068ce11b3242545_94526397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_210545416068ce11b3242545_94526397',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_32794807068ce11b3242a78_17769933',
  ),
  'page_content' => 
  array (
    0 => 'Block_22258861168ce11b3243188_87108064',
  ),
  'hook_home' => 
  array (
    0 => 'Block_142768249268ce11b32434e1_66836978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32794807068ce11b3242a78_17769933', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22258861168ce11b3243188_87108064', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}

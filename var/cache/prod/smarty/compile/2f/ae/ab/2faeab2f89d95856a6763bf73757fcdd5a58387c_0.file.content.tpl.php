<?php
/* Smarty version 4.3.4, created on 2025-09-20 03:31:03
  from 'C:\xampp\htdocs\casual-vibes\admin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ce11e7772018_91163996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2faeab2f89d95856a6763bf73757fcdd5a58387c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casual-vibes\\admin\\themes\\new-theme\\template\\content.tpl',
      1 => 1756996832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ce11e7772018_91163996 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

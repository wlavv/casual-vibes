<?php
/* Smarty version 4.3.4, created on 2025-09-20 03:25:12
  from 'C:\xampp\htdocs\casual-vibes\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ce1088ee26c1_64623867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f8800026864b970d7c8ef250bc07b0e911a852d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casual-vibes\\admin\\themes\\default\\template\\content.tpl',
      1 => 1756996832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ce1088ee26c1_64623867 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

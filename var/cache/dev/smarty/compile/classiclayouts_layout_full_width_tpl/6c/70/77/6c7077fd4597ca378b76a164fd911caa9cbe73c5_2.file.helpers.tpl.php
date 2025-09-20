<?php
/* Smarty version 4.3.4, created on 2025-09-20 03:30:11
  from 'C:\xampp\htdocs\casual-vibes\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ce11b3ddd0f3_97990343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c7077fd4597ca378b76a164fd911caa9cbe73c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casual-vibes\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1738226100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ce11b3ddd0f3_97990343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\casual-vibes\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\6c\\70\\77\\6c7077fd4597ca378b76a164fd911caa9cbe73c5_2.file.helpers.tpl.php',
    'uid' => '6c7077fd4597ca378b76a164fd911caa9cbe73c5',
    'call_name' => 'smarty_template_function_renderLogo_119424070568ce11b3dd5c49_29574979',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_119424070568ce11b3dd5c49_29574979 */
if (!function_exists('smarty_template_function_renderLogo_119424070568ce11b3dd5c49_29574979')) {
function smarty_template_function_renderLogo_119424070568ce11b3dd5c49_29574979(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_119424070568ce11b3dd5c49_29574979 */
}

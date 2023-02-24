<?php
/* Smarty version 4.2.1, created on 2023-02-18 17:36:54
  from '/home/bloodyclaw/projects/online_store/views/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f0e2869d4e31_24170834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd44eb29f209bbdd7c088a45cac3245be432bed30' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/index.tpl',
      1 => 1676730980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63f0e2869d4e31_24170834 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
 src="./views/default/js/app.js"><?php echo '</script'; ?>
> 
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <main>
        <?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>

        </main>
        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html> <?php }
}

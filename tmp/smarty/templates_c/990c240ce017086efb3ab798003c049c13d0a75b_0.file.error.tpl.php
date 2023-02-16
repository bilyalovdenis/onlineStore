<?php
/* Smarty version 4.2.1, created on 2023-02-16 12:13:35
  from '/home/bloodyclaw/projects/online_store/views/default/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63edf3bf1f08c6_57207377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '990c240ce017086efb3ab798003c049c13d0a75b' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/error.tpl',
      1 => 1676538176,
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
function content_63edf3bf1f08c6_57207377 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <font color="red"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</font>
        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html> <?php }
}

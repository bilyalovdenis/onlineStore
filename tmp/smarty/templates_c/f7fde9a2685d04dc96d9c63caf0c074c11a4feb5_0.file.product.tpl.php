<?php
/* Smarty version 4.2.1, created on 2023-02-18 20:22:13
  from '/home/bloodyclaw/projects/online_store/views/default/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f10945ca17e8_77917455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7fde9a2685d04dc96d9c63caf0c074c11a4feb5' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/product.tpl',
      1 => 1676740923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:product_main.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63f10945ca17e8_77917455 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:product_main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html> <?php }
}

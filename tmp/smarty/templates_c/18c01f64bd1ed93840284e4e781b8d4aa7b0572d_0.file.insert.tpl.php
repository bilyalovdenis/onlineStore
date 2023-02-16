<?php
/* Smarty version 4.2.1, created on 2023-02-16 16:19:24
  from '/home/bloodyclaw/projects/online_store/views/default/insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63ee2d5cf37de5_62712270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18c01f64bd1ed93840284e4e781b8d4aa7b0572d' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/insert.tpl',
      1 => 1676553562,
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
function content_63ee2d5cf37de5_62712270 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <main>
        <form  action="insert_product.php" method="POST">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
                <h2><?php echo $_smarty_tpl->tpl_vars['column']->value[0];?>
</h2>
                <?php if ($_smarty_tpl->tpl_vars['column']->value[0] == 'photo') {?>
                 <input name="<?php echo $_smarty_tpl->tpl_vars['column']->value[0];?>
" type="file">
                <?php } else { ?>
                <input name="<?php echo $_smarty_tpl->tpl_vars['column']->value[0];?>
" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['column']->value[0];?>
">
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <h2>Проверте данные перед отправкой</h2>
            <input type="submit" value="Отправить">
        </form>    
        </main> 
        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html> <?php }
}

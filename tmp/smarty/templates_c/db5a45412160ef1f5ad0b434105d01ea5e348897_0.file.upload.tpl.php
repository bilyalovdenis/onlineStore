<?php
/* Smarty version 4.2.1, created on 2023-02-26 12:52:42
  from '/home/bloodyclaw/projects/online_store/views/default/upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63fb2bea0822a4_99429392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db5a45412160ef1f5ad0b434105d01ea5e348897' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/upload.tpl',
      1 => 1677405056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fb2bea0822a4_99429392 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <li class="category-product_wrapper">
        <div class="category-product">
            <a class="category-product-a" href="/product.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value[0];?>
">
                <span class="category-product_photo-span">
                <img class="category-product_photo" src="<?php echo $_smarty_tpl->tpl_vars['product']->value[6];?>
"
                     alt="Фото товара отсутсвует"></img>
                </span>
                <h3 class="category-prosuct-h3"><?php echo $_smarty_tpl->tpl_vars['product']->value[1];?>
</h3>
                   <div class=category-product-price><?php echo $_smarty_tpl->tpl_vars['product']->value[3];?>
 руб.</div>
            </a>
        </div>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

<?php
/* Smarty version 4.2.1, created on 2023-02-16 16:39:36
  from '/home/bloodyclaw/projects/online_store/views/default/category_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63ee3218bad093_77040359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9355118d461e0fb1e9a71492e36c7877bb2f35f' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/category_main.tpl',
      1 => 1676554771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ee3218bad093_77040359 (Smarty_Internal_Template $_smarty_tpl) {
?><main>

<h2 class="category-h2"><?php echo $_smarty_tpl->tpl_vars['products']->value[0][4];?>
</h2>
<ul class="category-clearfix">
<?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

</main><?php }
}

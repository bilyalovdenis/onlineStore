<?php
/* Smarty version 4.2.1, created on 2023-02-26 12:27:22
  from '/home/bloodyclaw/projects/online_store/views/default/category_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63fb25fa501739_95730070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9355118d461e0fb1e9a71492e36c7877bb2f35f' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/category_main.tpl',
      1 => 1677403637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fb25fa501739_95730070 (Smarty_Internal_Template $_smarty_tpl) {
?><main>

<h2 class="category-h2"><?php echo $_smarty_tpl->tpl_vars['products']->value[0]['category'];?>
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
<?php echo '<script'; ?>
 src="./views/default/js/uploading_content.js"><?php echo '</script'; ?>
> 
<div id="showmore-triger" data-page="1" data-max="<?php echo $_smarty_tpl->tpl_vars['products']->value[0]['max_pages'];?>
">
	<img src="../images/load.gif" alt="">
</div>
</main><?php }
}

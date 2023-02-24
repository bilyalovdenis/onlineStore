<?php
/* Smarty version 4.2.1, created on 2023-02-21 13:38:41
  from '/home/bloodyclaw/projects/online_store/views/default/categories_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f49f31553640_00409664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad2064c9a66bd606417b61c15f5a5732dab476cc' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/categories_main.tpl',
      1 => 1676975917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f49f31553640_00409664 (Smarty_Internal_Template $_smarty_tpl) {
?><main>

<ul class="category-clearfix">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
    <li class="category-product_wrapper">
        <div class="category-product">
            <a class="category-product-a" href="/category.php?category=<?php echo $_smarty_tpl->tpl_vars['category']->value[0];?>
">
                <span class="category-product_photo-span">
                <img class="category-product_photo" src="<?php echo $_smarty_tpl->tpl_vars['category']->value[2];?>
"
                     alt="Фото товара отсутсвует"></img>
                </span>
                <h3 class="category-prosuct-h3"><?php echo $_smarty_tpl->tpl_vars['category']->value[1];?>
</h3>
            </a>
        </div>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

</main><?php }
}

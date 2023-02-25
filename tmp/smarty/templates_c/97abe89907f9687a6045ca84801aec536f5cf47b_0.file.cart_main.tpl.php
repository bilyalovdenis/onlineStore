<?php
/* Smarty version 4.2.1, created on 2023-02-25 12:55:01
  from '/home/bloodyclaw/projects/online_store/views/default/cart_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f9daf5abd956_29369154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97abe89907f9687a6045ca84801aec536f5cf47b' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/cart_main.tpl',
      1 => 1677318899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f9daf5abd956_29369154 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
    <h2>Корзина</h2>
    <div class="container_cart_items">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_items']->value, 'cart_item');
$_smarty_tpl->tpl_vars['cart_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart_item']->value) {
$_smarty_tpl->tpl_vars['cart_item']->do_else = false;
?>
   <div id="cart_item_<?php echo $_smarty_tpl->tpl_vars['cart_item']->value['id'];?>
" class="cart_item">
       <a class="cart_item_photo-a" href="/product.php?id=<?php echo $_smarty_tpl->tpl_vars['cart_item']->value['product_id'];?>
">
          <img class="cart_item_photo-img" src="<?php echo $_smarty_tpl->tpl_vars['cart_item']->value['photo'];?>
"
                alt="Фото товара отсутсвует"></img>
       </a>
       <div class="cart_item_product_name_price">
           <h3 class="cart_item_product_name"><?php echo $_smarty_tpl->tpl_vars['cart_item']->value['name'];?>
</h3>
           <p class="cart_item_product_description"><?php echo $_smarty_tpl->tpl_vars['cart_item']->value['description'];?>
</p>
           <a id="modify_cart_delete" class="delete_cart_item" onClick="deleteCartItem(<?php echo $_smarty_tpl->tpl_vars['cart_item']->value['product_id'];?>
) ;return false;">Удалить</a>
       </div>
       <div class="cart_item_modification_cart">
           <div id="modification_cart" class="modification_cart">
               <a id="modify_cart_remove" class="modify_cart_remove" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['cart_item']->value['product_id'];?>
); return false;"></a>
               <span id="count_cart_<?php echo $_smarty_tpl->tpl_vars['cart_item']->value['id'];?>
" class="count_cart">1</span>
               <a id="modify_cart_add" class="modify_cart_add" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['cart_item']->value['product_id'];?>
); return false;"></a>
           </div>
           Общая стоимость
           <span id="price_cart_<?php echo $_smarty_tpl->tpl_vars['cart_item']->value['id'];?>
" class="price_cart">1</span>
       </div>    
   </div>
    <hr id="hr_<?php echo $_smarty_tpl->tpl_vars['cart_item']->value['id'];?>
" class="cart_hr">
    <?php echo '<script'; ?>
>changeCartContainer(<?php echo $_smarty_tpl->tpl_vars['cart_item']->value['quantity'];?>
, <?php echo $_smarty_tpl->tpl_vars['cart_item']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['cart_item']->value['cost'];?>
);<?php echo '</script'; ?>
>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

</main>

<?php }
}

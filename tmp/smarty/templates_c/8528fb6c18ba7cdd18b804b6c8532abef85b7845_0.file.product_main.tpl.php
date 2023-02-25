<?php
/* Smarty version 4.2.1, created on 2023-02-25 12:23:23
  from '/home/bloodyclaw/projects/online_store/views/default/product_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f9d38b2761a7_62256582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8528fb6c18ba7cdd18b804b6c8532abef85b7845' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/product_main.tpl',
      1 => 1677316998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f9d38b2761a7_62256582 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <main>
            <div  class="container">
                <ul class="breadcrumps-list">
                    <li class="breadcrumps-item">
                        <a class="breadcrumps-link" href="/category.php?category=<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
">
                            <span property="name"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</span>
                        </a>
                    </li>
                </ul>
                <h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
                <div class="rating_star-block">
                    <span class="rating_star-span">
                        <svg class="rating_star-svg"></svg>
                    </span>
                </div>
                <div class="product_main_container">
                    <img class="main-product_photo" src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="Фото товара отсутсвует"></img>
                    <div class="main-product_description">
                        <h2 class="h2-description">Описание</h2>
                        <p class="main-p-product_description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
                    </div>
                    <div class="product_pay_container">
                        <form id="form" class="product_pay-form" action="add">
                            
                            <span class="price"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 руб.</span><br>
                                        
                            <div id="modification_cart" class="modification_cart">
                                 <a id="modify_cart_remove" class="modify_cart_remove" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;"></a>
                                 <span id="count_cart" class="count_cart">1</span>
                                 <a id="modify_cart_add" class="modify_cart_add" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;"></a>
                                 <a id="modify_cart_delete" class="modify_cart_delete" onClick="deleteCartItem(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
) ;return false;"></a>
                            </div>
                            <a id="addCart" href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;" class="pay-button">Добавить в корзину
        
                            </a><br>
                        </form>
                    </div>
                </div>
            </div>
        </main>          
<?php echo '<script'; ?>
>changeCartContainer(<?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
);<?php echo '</script'; ?>
>
<?php }
}

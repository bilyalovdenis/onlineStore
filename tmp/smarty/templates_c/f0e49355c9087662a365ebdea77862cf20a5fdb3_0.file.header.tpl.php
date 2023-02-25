<?php
/* Smarty version 4.2.1, created on 2023-02-24 21:51:10
  from '/home/bloodyclaw/projects/online_store/views/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f9071edbccc6_10340824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0e49355c9087662a365ebdea77862cf20a5fdb3' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/header.tpl',
      1 => 1677264670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f9071edbccc6_10340824 (Smarty_Internal_Template $_smarty_tpl) {
?> <header>
    <div class="main">
        <a class="logo" href="/"></a>
        <a class="contacts" href="/" title="Наши контакты">Контакты</a>
        <a class="payment" href="/"title="Варианты оплаты">Оплата</a>
        <hr class="hr">
        <ul class="nav">
            <li class="category-li">
                <a class="category" href="/categories.php" title="Категории">
                    Категории
                </a>
            </li>
            <li class="search-li">
                <form class="search-form" action="search">
                    <input class="search-input" type="search" placeholder="Поиск товаров">
                    <input class="search-button" type="submit" value="">
                </form>
            </li>
            <li class="cart-li">
                <a class="cart-a" href="/cart.php?cart=index" title="Корзина">
                    Корзина
                </a>
                <span></span>
            </li>
            <li class="login-li">
                <a class="login-a" href="/" title="Войти">
                    Войти
                </a>
            </li>
        </ul>
    </div>
</header>    <?php }
}

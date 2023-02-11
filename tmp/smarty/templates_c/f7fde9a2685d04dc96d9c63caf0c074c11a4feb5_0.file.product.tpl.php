<?php
/* Smarty version 4.2.1, created on 2023-02-09 16:31:14
  from '/home/bloodyclaw/projects/online_store/views/default/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e4f5a2e5ace1_00192000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7fde9a2685d04dc96d9c63caf0c074c11a4feb5' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/product.tpl',
      1 => 1675949454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e4f5a2e5ace1_00192000 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>StoreName</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <header>
            <div class="header-main">
                <a class="header-logo" href="/">
                    <img src="images/header-logo.png" alt="header logo">
                </a>
                <a class="header-contacts" href="/" title="Наши контакты">Контакты</a>
                <a class="header-payment" href="/"title="Варианты оплаты">Оплата</a>
                <hr class="header-hr">
                <nav>
                    <ul class="nav-ul">
                        <li class="nav-li-category">
                            <a class="nav-a-category" href="/" title="Оплата">
                                <span class="b-icon-category">
                                    <svg class="b-icon-category-svg"></svg>
                                </span>
                                <span>
                                    Категории
                                </span>
                            </a>
                        </li>
                        <li class="nav-li-search">
                        <form class="form-search" action="search">
                        
                                <input class="input-search" type="search" placeholder="Поиск товаров">
                                <input class="button-search" type="submit" value="">
                            
                        </form>
                        </li>
                        <li class="nav-li-cart">
                            <a class="nav-a-cart" href="/" title="Корзина">
                                <span class="b-icon-cart">
                                    <svg class="b-icon-cart-svg"></svg>
                                </span>
                                <span>
                                    Корзина
                                </span>
                            </a>
                        </li>
                        <li class="nav-li-login">
                            <a class="nav-a-login" href="/" title="Войти">
                                <span class="b-icon-login">
                                    <svg class="b-icon-login-svg"></svg>
                                </span>
                                <span>
                                    Войти
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <ul class="breadcrumps-list">
                <li class="breadcrumps-item">
                    <a class="breadcrumps-link" href="/" title="Товары для кошек">
                        <span property="name"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</span>
                    </a>
                    <a class="breadcrumps-link" href="/" title="Товары для кошек">
                        <span property="name">Корм</span>
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
                    <form class="product_pay-form" action="add">
                        <span class="price"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 </span>
                        <button class="pay-button">Добавить в корзину</button><br>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <ul class="footer-ul">
                <li class="footer-li-logo">
                    <a class="footer-a-logo" href="/" title="Корзина">
                        <span class="logo-icon">
                            <svg class="logo-icon-svg"></svg>
                        </span>
                    </a>
                </li>
                <li class="footer-li-contacts">Контакты
                    <a href="/">8-999-999-99-99</a>
                    <a href="/">mail@mail.mail</a>
                </li>
            </ul>
        </footer>
    </body>
</html> <?php }
}

<?php
/* Smarty version 4.2.1, created on 2023-02-26 10:39:50
  from '/home/bloodyclaw/projects/online_store/views/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63fb0cc663d685_46431952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0e49355c9087662a365ebdea77862cf20a5fdb3' => 
    array (
      0 => '/home/bloodyclaw/projects/online_store/views/default/header.tpl',
      1 => 1677397184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fb0cc663d685_46431952 (Smarty_Internal_Template $_smarty_tpl) {
?> <div id="form_wrapper" class="form_wrapper">
    <form class="registration">
        <div class="wrapper_head">
            <span class="wrapper_h">Регистрация</span>
            <a class="wrapper_close" onClick="closeLoginWrapper(); return false;" ></a>
        </div>
        <div class="column">
            <div>
                <label>Имя:</label>
                <input type="text" id="first_name"/>
            </div>
            <div>
                <label>Фамилия:</label>
                <input type="text" id="second_name"/>
            </div>
        </div>
        <div class="column">
            <div>
                <label>Email:</label>
                <input type="text" id="email"/>
                <span id="reg_email_error" class="error"></span>
            </div>
            <div>
                <label>Пароль:</label>
                <input type="password" id="password"/>
                <span id="reg_password_error" class="error"></span>
            </div>
            </div>
        <div class="bottom">
            <input type="submit" value="Регистрация" onClick="registerNewUser(); return false;">
            <a href="#" rel="login" class="linkform">Уже зарегистрированы? Войти</a>
            <div class="clear"></div>
        </div>
    </form>
    <form class="login active">
        <div class="wrapper_head">
            <span class="wrapper_h">Авторизация</span>
            <a class="wrapper_close" onClick="closeLoginWrapper(); return false;"></a>
        </div>
            <div>
                <label>Email:</label>
                <input type="text" id="login_email" /><br>
            </div>
            <div>
                <label>Пароль:</label>
                <input type="password" id="login_password"/><br>
                <span id="login_error" class="error"></span>
            </div>
            <div class="bottom">
                <input type="submit" value="Войти" onClick="loginUser(); return false;"></input>
                <a href="/web-developer/jquery/register.html" rel="registration" class="linkform">Нет аккаунта? Регистрация</a>
                <div class="clear"></div>
            </div>
    </form>
</div>   
<div class="wrapper_hider"></div>
<?php echo '<script'; ?>
 src="./views/default/js/authorization.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="./views/default/js/user.js"><?php echo '</script'; ?>
> 
 <header>
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
            <?php if ($_smarty_tpl->tpl_vars['session_user']->value == 'false') {?>
            <li class="login-li">
                <a index="login_btn" class="login-a" href="#" onClick="openLoginWrapper(); return false;" title="Войти">
                    Войти
                </a>
            </li>
            <?php } else { ?>
            <li class="login-li">
                <a index="logout_btn" class="logout-a" href="#" onClick="logout();return false;" title="Войти">
                    Выход_<?php echo $_smarty_tpl->tpl_vars['session_user']->value;?>

                </a>
            </li>
            <?php }?>
        </ul>
    </div>
</header> <?php }
}

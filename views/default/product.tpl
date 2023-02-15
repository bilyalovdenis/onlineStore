<!DOCTYPE html>
<html>
    <head>
        <title>Dom Businki</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
        <header>
            <div class="main">
                <a class="logo" href="/"></a>
                <a class="contacts" href="/" title="Наши контакты">Контакты</a>
                <a class="payment" href="/"title="Варианты оплаты">Оплата</a>
                <hr class="hr">
                <ul class="nav">
                    <li class="category-li">
                        <a class="category" href="/" title="Категории">
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
                        <a class="cart-a" href="/" title="Корзина">
                            Корзина
                        </a>
                    </li>
                    <li class="login-li">
                        <a class="login-a" href="/" title="Войти">
                            Войти
                        </a>
                    </li>
                </ul>
            </div>
        </header>    
        <main>
            <div class="container">
                <ul class="breadcrumps-list">
                    <li class="breadcrumps-item">
                        <a class="breadcrumps-link" href="/" title="Товары для кошек">
                            <span property="name">{$category}</span>
                        </a>
                        <a class="breadcrumps-link" href="/" title="Товары для кошек">
                            <span property="name">Корм</span>
                        </a>
                    </li>
                </ul>
                <h1>{$name}</h1>
                <div class="rating_star-block">
                    <span class="rating_star-span">
                        <svg class="rating_star-svg"></svg>
                    </span>
                </div>
                <div class="product_main_container">
                    <img class="main-product_photo" src="{$photo}" alt="Фото товара отсутсвует"></img>
                    <div class="main-product_description">
                        <h2 class="h2-description">Описание</h2>
                        <p class="main-p-product_description">{$description}</p>
                    </div>
                    <div class="product_pay_container">
                        <form class="product_pay-form" action="add">
                            <span class="price">{$price} </span><br>
                            <button class="pay-button">Добавить в корзину</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </main>          
        <footer>
           <div class="container">
               <a class="footer-a-logo" href="/" title="Главная"></a>
               <div class="contacts-container">
                   Контакты<br>
                   <a href="/">8-999-999-99-99</a><br>
                   <a href="/">mail@mail.mail</a>
               </div>
           </div>
        </footer> 
    </body>
</html> 

 <main>
            <div  class="container">
                <ul class="breadcrumps-list">
                    <li class="breadcrumps-item">
                        <a class="breadcrumps-link" href="/category.php?category={$category_id}">
                            <span property="name">{$category}</span>
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
                        <form id="form" class="product_pay-form" action="add">
                            
                            <span class="price">{$price} руб.</span><br>
                                        
                            <div id="modification_cart" class="modification_cart">
                        
                                 <a id="modify_cart_remove" class="modify_cart_remove" onClick="addToCart({$id}); return false;"></a>
                                 <span id="count_cart" class="count_cart">1</span>
                                 <a id="modify_cart_add" class="modify_cart_add" onClick="addToCart({$id}); return false;"></a>
                            </div>
                            <a id="addCart" href="#" onClick="addToCart({$id}); return false;" class="pay-button">Добавить в корзину
        
                            </a><br>
                        </form>
                    </div>
                </div>
            </div>
        </main>          
<script>changeCartContainer({$quantity});</script>

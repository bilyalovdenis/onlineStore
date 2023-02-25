<main>
    <h2>Корзина</h2>
    <div class="container_cart_items">
{foreach from=$cart_items item=cart_item}
   <div id="cart_item_{$cart_item['id']}" class="cart_item">
       <a class="cart_item_photo-a" href="/product.php?id={$cart_item['product_id']}">
          <img class="cart_item_photo-img" src="{$cart_item['photo']}"
                alt="Фото товара отсутсвует"></img>
       </a>
       <div class="cart_item_product_name_price">
           <h3 class="cart_item_product_name">{$cart_item['name']}</h3>
           <p class="cart_item_product_description">{$cart_item['description']}</p>
           <a id="modify_cart_delete" class="delete_cart_item" onClick="deleteCartItem({$cart_item['product_id']}) ;return false;">Удалить</a>
       </div>
       <div class="cart_item_modification_cart">
           <div id="modification_cart" class="modification_cart">
               <a id="modify_cart_remove" class="modify_cart_remove" onClick="removeFromCart({$cart_item['product_id']}); return false;"></a>
               <span id="count_cart_{$cart_item['id']}" class="count_cart">1</span>
               <a id="modify_cart_add" class="modify_cart_add" onClick="addToCart({$cart_item['product_id']}); return false;"></a>
           </div>
           Общая стоимость
           <span id="price_cart_{$cart_item['id']}" class="price_cart">1</span>
       </div>    
   </div>
    <hr id="hr_{$cart_item['id']}" class="cart_hr">
    <script>changeCartContainer({$cart_item['quantity']}, {$cart_item['id']}, {$cart_item['cost']});</script>
{/foreach}
    </div>

</main>


<main>
<h2 class="category-h2">{$products[0][4]}</h2>
<ul class="category-clearfix">
{foreach from=$products item=product}
    <li class="category-product_wrapper">
        <div class="category-product">
            <a class="category-product-a" href="/product.php?id={$product[0]}">
                <span class="category-product_photo-span">
                <img class="category-product_photo" src="{$product[6]}"
                     alt="Фото товара отсутсвует"></img>
                </span>
                <h3 class="category-prosuct-h3">{$product[1]}</h3>
                   <div class=category-product-price>{$product[3]} руб.</div>
            </a>
        </div>
    </li>
{/foreach}
</ul>

</main>
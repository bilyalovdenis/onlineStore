<main>

<ul class="category-clearfix">
{foreach from=$categories item=category}
    <li class="category-product_wrapper">
        <div class="category-product">
            <a class="category-product-a" href="/category.php?category={$category[0]}">
                <span class="category-product_photo-span">
                <img class="category-product_photo" src="{$category[2]}"
                     alt="Фото товара отсутсвует"></img>
                </span>
                <h3 class="category-prosuct-h3">{$category[1]}</h3>
            </a>
        </div>
    </li>
{/foreach}
</ul>

</main>
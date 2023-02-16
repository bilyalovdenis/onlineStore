<main>

<ul>
{foreach from=$categories item=category}
     <li>
        <a href="/category.php?category={$category[0]}">
            {$category[0]}
        </a><br>
        Количество товаров = {$category[1]} 
    </li>
{/foreach}
</ul>

</main>
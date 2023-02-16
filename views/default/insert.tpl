<!DOCTYPE html>
<html>
    {include file='head.tpl'}
    <body>
        {include file='header.tpl'}
        <main>
        <form  action="insert_product.php" method="POST">
            {foreach from=$columns item=column}
                <h2>{$column[0]}</h2>
                {if $column[0] eq 'photo'}
                 <input name="{$column[0]}" type="file">
                {else}
                <input name="{$column[0]}" type="text" placeholder="{$column[0]}">
                {/if}
            {/foreach}
            <h2>Проверте данные перед отправкой</h2>
            <input type="submit" value="Отправить">
        </form>    
        </main> 
        {include file='footer.tpl'}
    </body>
</html> 
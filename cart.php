<?php

include_once('config.php');
include_once('library/mainFunctions.php');

// if($_GET['cart']=='add'){
//     loadPage($smarty, 'Cart', 'addToCart');
// }
switch($_GET['cart']){
    case 'add':
        loadPage($smarty, 'Cart', 'addToCart');
        break;
    case 'remove':
        loadPage($smarty, 'Cart', 'removeFromCart');
        break;
    case 'delete':
        loadPage($smarty, 'Cart', 'deleteCartItem');
        break;
    case 'index':
        loadPage($smarty, 'Cart', 'index');
        break;
}


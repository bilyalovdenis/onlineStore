<?php

include_once('config.php');
include_once('library/mainFunctions.php');

if($_GET['cart']=='add'){
    loadPage($smarty, 'Cart', 'addToCart');
}


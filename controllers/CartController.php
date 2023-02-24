<?php

include_once('models/ProductModel.php');
include_once('models/ProductModel.php');
include_once('models/CartItemModel.php');
include_once('library/CookieManager.php');

function addToCartAction() {
    CookieManager::Instance()->verify_cookie();
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if(! $itemId) return false;

    
    addCartItem($itemId, $_COOKIE['shopping_session_id']);
    $resData = getCountCartItemBySession($itemId, $_COOKIE['shopping_session_id']);

    echo json_encode($resData['quantity']);
}
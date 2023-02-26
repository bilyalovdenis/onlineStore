<?php

include_once('models/ProductModel.php');
include_once('models/CartItemModel.php');
include_once('library/CookieManager.php');
include_once('library/SessionManager.php');

function indexAction($smarty){       
    CookieManager::Instance()->verify_cookie();
    $view = 'cart';
    if(isset($_SESSION['user'])){
        $smarty->assign('session_user', $_SESSION['user']);
    }else{
        $smarty->assign('session_user', 'false');
    }
    $res = getCartItemsBySession($_COOKIE['shopping_session_id']);
    foreach($res as &$elem){
        $product = getProductById($elem['product_id']);
        $product_id = $product['id'];
        $elem = array_merge($product, $elem);
        $elem['product_id']=$product_id;
        // d($elem);
    }
    $smarty->assign('cart_items',$res);
    loadTemplate($smarty, $view);
}
function addToCartAction() {
    CookieManager::Instance()->verify_cookie();
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if(! $itemId) return false;

    
    addCartItem($itemId, $_COOKIE['shopping_session_id']);
    // $resData['quantity'] = getCountCartItemBySession($itemId, $_COOKIE['shopping_session_id']);
    $resData = getCartItemByProductAndSession($itemId, $_COOKIE['shopping_session_id']);
    // d($resData,1);
    echo json_encode($resData);
}
function removeFromCartAction() {
    CookieManager::Instance()->verify_cookie();
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if(! $itemId) return false;
    $resData = getCartItemByProductAndSession($itemId, $_COOKIE['shopping_session_id']);
    removeCartItem($itemId, $_COOKIE['shopping_session_id']);
    $resData['quantity']--;
    echo json_encode($resData);
}
function deleteCartItemAction(){
    CookieManager::Instance()->verify_cookie();
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if(! $itemId) return false;
    $resData = getCartItemByProductAndSession($itemId, $_COOKIE['shopping_session_id']);
    deleteCartItem($itemId, $_COOKIE['shopping_session_id']);
    $resData['quantity'] = 0;
    echo json_encode($resData);
}
<?php

include_once('models/ProductModel');
include_once('models/DBModel');
include_once('library/CookieManager.php');
include_once('library/SessionManager.php');
function indexAction($smarty){
    CookieManager::Instance()->verify_cookie();
    if(isset($_SESSION['user'])){
        $smarty->assign('session_user', $_SESSION['user']);
    }else{
        $smarty->assign('session_user', 'false');
    }
    // $info = getTableColumnByName("product");
    $info = getTableColumnByName("cart_item");
    // $info = getTableColumnByName("shopping_session");
    if(!empty($_POST)){
        // d($_POST, 0);

    }
    array_shift($info);
    $smarty->assign("columns", $info);
    loadTemplate($smarty, 'insert');

    // $smarty->assign('categories', $info);
}
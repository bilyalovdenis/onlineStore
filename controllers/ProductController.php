<?php

include_once('models/ProductModel.php');
include_once('models/CategoriesModel.php');
include_once('models/CartItemModel.php');
include_once('library/CookieManager.php');
function testAction(){
    echo 'ProductController.php > testAction';
}
function indexAction($smarty){
    CookieManager::Instance()->verify_cookie();

    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($itemId == null){
        $smarty->assign('error', "ОШИБКА! Укажите ID товара");
        $view = 'error';
    }else{
        $info = getProductById($itemId);
        if ($info == ""){
            $smarty->assign('error', "ОШИБКА! Товар с указанным id отсутствует");
            $view = 'error';
        }else{
            $view = 'product';
            $categoryName = getCategoryNameById($info['category']);
            $quantity = getCartItemByProductAndSession($itemId, $_COOKIE['shopping_session_id']);
            $smarty->assign('id',"$info[id]");
            $smarty->assign('name',"$info[name]");
            $smarty->assign('description',"$info[description]");
            $smarty->assign('price',"$info[price]");
            $smarty->assign('category',$categoryName['name']);
            $smarty->assign('category_id',$info['category']);
            $smarty->assign('photo',"$info[photo]");
            $smarty->assign('quantity',"$quantity[quantity]");
        }
    }
  
    loadTemplate($smarty, $view);
}
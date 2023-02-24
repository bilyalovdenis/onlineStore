<?php

include_once('models/ProductModel.php');
include_once('models/CategoriesModel.php');
include_once('library/CookieManager.php');
function indexAction($smarty){ 
    CookieManager::Instance()->verify_cookie();

    $itemCategory = isset($_GET['category']) ? $_GET['category'] : null;
    if ($itemCategory == null){
        $smarty->assign('error', "ОШИБКА! Укажите категорию товара");
        $view = 'error';
    }else{
        $info = getProductByCategory($itemCategory);
        if (empty($info)){
            $smarty->assign('error', "ОШИБКА! Товар с указанной категорией не найден");
            $view = 'error';
        }else{
            $view = 'category';
            //TODO Переделать массив в ассоциативный для более визуально понятного доступа
            $categoryName = getCategoryNameById($itemCategory);
            $info[0]['category'] = $categoryName['name'];
            $smarty->assign('products',$info);
        }
    }
    loadTemplate($smarty, $view);
}
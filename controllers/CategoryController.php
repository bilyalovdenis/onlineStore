<?php

include_once('models/ProductModel.php');
function indexAction($smarty){             
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
            $smarty->assign('products',$info);
        }
    }
    // d($info[0],0);
    loadTemplate($smarty, $view);
}
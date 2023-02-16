<?php

include_once('models/ProductModel.php');
function testAction(){
    echo 'ProductController.php > testAction';
}
function indexAction($smarty){
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
            $smarty->assign('name',"$info[name]");
            $smarty->assign('description',"$info[description]");
            $smarty->assign('price',"$info[price]");
            $smarty->assign('category',"$info[category]");
            $smarty->assign('photo',"$info[photo]");
        }
    }
  
    loadTemplate($smarty, $view);
}
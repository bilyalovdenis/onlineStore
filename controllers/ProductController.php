<?php

include_once('/home/bloodyclaw/projects/online_store/models/ProductModel.php');
function testAction(){
    echo 'ProductController.php > testAction';
}
function indexAction($smarty){
    $info = getProductInformation();
    $smarty->assign('name',"$info[name]");
    $smarty->assign('description',"$info[description]");
    $smarty->assign('price',"$info[price]");
    $smarty->assign('category',"$info[category]");
    $smarty->assign('photo',"$info[photo]");

    loadTemplate($smarty, 'product');
}
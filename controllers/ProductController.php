<?php

include_once('models/ProductModel.php');
function testAction(){
    echo 'ProductController.php > testAction';
}
function indexAction($smarty){
    // $info = getProductInformation();
    // $smarty->assign('name',"$info[name]");
    // $smarty->assign('description',"$info[description]");
    // $smarty->assign('price',"$info[price]");
    // $smarty->assign('category',"$info[category]");
    // $smarty->assign('photo',"$info[photo]");
    //$info = getProductInformation();
    $smarty->assign('name',"ntestame]");
    $smarty->assign('description',"description]");
    $smarty->assign('price',"price]");
    $smarty->assign('category',"category]");
    $smarty->assign('photo',"photo]");
    loadTemplate($smarty, 'product');
}
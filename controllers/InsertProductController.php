<?php

include_once('models/ProductModel');
include_once('models/DBModel');
function indexAction($smarty){
    $info = getTableColumnByName("product");
    if(!empty($_POST)){
        // d($_POST, 0);

    }
    array_shift($info);
    $smarty->assign("columns", $info);
    loadTemplate($smarty, 'insert');

    // $smarty->assign('categories', $info);
}
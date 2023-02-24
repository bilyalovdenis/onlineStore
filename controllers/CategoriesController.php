<?php

include_once('models/CategoriesModel.php');
include_once('library/CookieManager.php');
function indexAction($smarty){       
    CookieManager::Instance()->verify_cookie();
    
    $info = getAllCategories();
    $view = 'categories';
    $smarty->assign('categories',$info);
    loadTemplate($smarty, $view);
}
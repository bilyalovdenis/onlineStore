<?php

include_once('models/CategoriesModel.php');
include_once('library/CookieManager.php');
include_once('library/SessionManager.php');
function indexAction($smarty){       
    CookieManager::Instance()->verify_cookie();
    if(isset($_SESSION['user'])){
        $smarty->assign('session_user', $_SESSION['user']);
    }else{
        $smarty->assign('session_user', 'false');
    }
    $info = getAllCategories();
    $view = 'categories';
    $smarty->assign('categories',$info);
    loadTemplate($smarty, $view);
}
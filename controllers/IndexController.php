<?php
include_once('library/CookieManager.php');
include_once('library/SessionManager.php');
function indexAction($smarty){
    CookieManager::Instance()->verify_cookie();
    if(isset($_SESSION['user'])){
        $smarty->assign('session_user', $_SESSION['user']);
    }else{
        $smarty->assign('session_user', 'false');
    }
    $smarty->assign('pageTitle', 'Вы находитесь на главной странице сайта. Нажмите
    на кнопку "Категории" для начала работы');
    loadTemplate($smarty, 'index');
}
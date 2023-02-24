<?php
include_once('library/CookieManager.php');
function indexAction($smarty){
    CookieManager::Instance()->verify_cookie();

    $smarty->assign('pageTitle', 'Вы находитесь на главной странице сайта. Нажмите
    на кнопку "Категории" для начала работы');
    loadTemplate($smarty, 'index');
}
<?php

include_once('models/ProductModel.php');
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
    $itemCategory = isset($_GET['category']) ? $_GET['category'] : null;
    if ($itemCategory == null){
        $smarty->assign('error', "ОШИБКА! Укажите категорию товара");
        $view = 'error';
    }else{
        $limit = 8;
        $info = getProductByCategory($itemCategory, $limit);
        $pages = getProductPagesByCategory($itemCategory, $limit);
        if (empty($info)){
            $smarty->assign('error', "ОШИБКА! Товар с указанной категорией не найден");
            $view = 'error';
        }else{
            $view = 'category';
            //TODO Переделать массив в ассоциативный для более визуально понятного доступа
            $categoryName = getCategoryNameById($itemCategory);
            $info[0]['category'] = $categoryName['name'];
            $info[0]['max_pages'] = $pages;
            $smarty->assign('products',$info);
        }
    }
    loadTemplate($smarty, $view);
}
function uploadAction($smarty){
$limit = 8;
$itemCategory = isset($_GET['category']) ? $_GET['category'] : null;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
sleep(1.5);  
// Получение записей для текущей страницы			
$start = ($page != 1) ? $page * $limit - $limit : 0;	
$info = getUploadProductByCategory($itemCategory, $start, $limit);	
$smarty-> assign('products', $info);
echo $smarty->fetch(TemplatePrefix.'upload'.TemplatePostfix);

}
<?php 
include_once('config.php');
include_once('library/mainFunctions.php');
include_once('library/CookieManager.php');


// CookieManager::Instance()->verify_cookie();
// d("rrr",0);
// $arr =[2][1];
// $json = json_encode($arr);
// setcookie('cart',json_encode($json), time()+3600) ;
// d(json_decode($_COOKIE['cart'], true),1);
loadPage($smarty, 'Index', 'index');

?>
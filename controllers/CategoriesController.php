<?php

include_once('models/ProductModel.php');
function indexAction($smarty){             
    $info = getAllCategories();
    $smarty->assign('categories', $info);
    loadTemplate($smarty, 'categories');
}
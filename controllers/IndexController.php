<?php
function indexAction($smarty){
    $smarty->assign('pageTitle', 'Вы находитесь на главной странице сайта. Нажмите
    на кнопку "Категории" для начала работы');
    loadTemplate($smarty, 'index');
}
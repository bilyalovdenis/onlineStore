<?php

//Константы для обращения к конструкторам
define('PathPrefix', './controllers/');
define('PathPostfix', 'Controller.php');

//Используемый шаблон
$template = 'default';

//Пути к файлам шаблонов ()*.tpl
define('TemplatePrefix', "views/$template/");
define('TemplatePostfix', '.tpl');

//пути к файлам шаблонов в вебпространстве
define('TemplateWebPath', "/template/$template/");

//Подключение Smarty
require('library/Smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('tmp/smarty/templates_c');
$smarty->setCacheDir('tmp/smarty/cache');
$smarty->setConfigDir('library/Smarty/lexer');

$smarty->assign('templateWebPath', TemplateWebPath);

// TODO Узнать, как сделать конфиги подключения к бд безопасным  

function get_db_congig(){
    return [
        "db_name" => "OnlineStore",
        "db_host" => "localhost",
        "db_user" => "root",
        "db_pass" => "L1t2y3b4c5!", 
    ];
}

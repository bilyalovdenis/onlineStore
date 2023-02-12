<?php
function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once(PathPrefix . $controllerName . PathPostfix);
    $function = $actionName . "Action";
    $function($smarty);
    }

function loadTemplate($smarty, $templateName){
    $smarty->display(TemplatePrefix.$templateName.TemplatePostfix);
}

function prepared_query($my_sql, $sql, $params, $types = ""){
    $types = $types ?: str_repeat("s", count($params));
    $stmt = $my_sql->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $stmt -> execute();
    return $stmt;
}

function d ($value = null, $die=1){
    echo 'Debug: <br /><pre>';
    print_r ($value);
    echo '</pre>';
    if ($die)
        die;
}
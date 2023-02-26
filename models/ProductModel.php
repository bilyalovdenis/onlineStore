<?php

function getProductById($itemId){
    $db_config = get_db_congig();
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);
    $sql = "SELECT * FROM product WHERE id =?";
    $res = prepared_query($connect, $sql, [$itemId])->get_result()->fetch_assoc();
    $connect->close();
    return $res;                     
}
function getProductByCategory($itemCategory, $limit){
    $db_config = get_db_congig();
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);
    $sql = "SELECT * FROM product WHERE category =? LIMIT ?";
    $res = prepared_query($connect, $sql, [$itemCategory, $limit])->get_result()->fetch_all();
    $connect->close();
    return $res;                     
}
function getUploadProductByCategory($itemCategory,$start, $limit){
    $db_config = get_db_congig();
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);
    $sql = "SELECT * FROM product WHERE category =? LIMIT ?, ?";
    $res = prepared_query($connect, $sql, [$itemCategory,$start, $limit])->get_result()->fetch_all();
    $connect->close();
    return $res;                     
}
function getProductPagesByCategory($itemCategory, $limit){
    $db_config = get_db_congig();
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);
    $sql = "SELECT COUNT(*) FROM product WHERE category =?";
    $res = prepared_query($connect, $sql, [$itemCategory])->get_result()->fetch_assoc();
    $res = ceil($res['COUNT(*)']/$limit);
    $connect->close();
    return $res;                     
}

function getProductPriceByID($itemId){
    $db_config = get_db_congig();
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);
    $sql = "SELECT price FROM product WHERE id =?";
    $res = prepared_query($connect, $sql, [$itemId])->get_result()->fetch_assoc();
    $connect->close();
    return $res['price'];                     
}
function setProduct(){
    
}
// Модель для работы с таблицей product
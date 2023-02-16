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
function getProductByCategory($itemCategory){
    $db_config = get_db_congig();
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);
    $sql = "SELECT * FROM product WHERE category =?";
    $res = prepared_query($connect, $sql, [$itemCategory])->get_result()->fetch_all();
    $connect->close();
    return $res;                     
}
function getAllCategories(){                  
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT category, COUNT(id) FROM product GROUP BY category";                    
    $res = prepared_query($connect, $sql, [])->get_result()->fetch_all();
    $connect->close();
    return $res;        
}
// Модель для работы с таблицей product
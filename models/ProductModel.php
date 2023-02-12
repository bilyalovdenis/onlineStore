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
// Модель для работы с таблицей product
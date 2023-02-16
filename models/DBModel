<?php

function getTableColumnByName($itemName){
    $db_config = get_db_congig();
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);
    $sql = "SELECT COLUMN_NAME FROM information_schema.columns WHERE table_name=? ORDER BY ORDINAL_POSITION";
    $res = prepared_query($connect, $sql, [$itemName])->get_result()->fetch_all();
    $connect->close();
    return $res;                     
}
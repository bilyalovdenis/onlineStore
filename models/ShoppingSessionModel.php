<?php

function shoppingSessionAvailable ($ItemId) : bool{
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT * FROM shopping_session WHERE id=?";                    
    $res = prepared_query($connect, $sql, [$ItemId])->get_result()->fetch_assoc();
    $connect->close();

    return empty($res);
}
function addShoppingSession($ItemId, $timestamp){
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "INSERT INTO shopping_session (id,created_at) values (?,?)";                   
    prepared_query($connect, $sql, [$ItemId, $timestamp]);
    $connect->close();
}
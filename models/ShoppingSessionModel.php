<?php

include_once('CartItemModel.php');

function shoppingSessionAvailable ($ItemId) : bool{
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT * FROM shopping_session WHERE id=?";                    
    $res = prepared_query($connect, $sql, [$ItemId])->get_result()->fetch_assoc();
    $connect->close();

    return empty($res);
}
function shoppingSessionHasUser ($Id) : bool{
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT user_id FROM shopping_session WHERE id=?";                    
    $res = prepared_query($connect, $sql, [$Id])->get_result()->fetch_assoc();
    $connect->close();

    return isset($res['user_id']);
}
function addShoppingSession($ItemId, $timestamp, $user_id=null){
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "INSERT INTO shopping_session (id,created_at,user_id) values (?,?,?)";                   
    prepared_query($connect, $sql, [$ItemId, $timestamp, $user_id]);
    $connect->close();
}
function getSessionByUserId($user_id){
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT id FROM shopping_session WHERE user_id=?";                    
    $res = prepared_query($connect, $sql, [$user_id])->get_result()->fetch_assoc();
    $connect->close();

    return $res['id'];
}
function deleteShoppingSessionById($id){
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "DELETE FROM shopping_session WHERE id=?";                    
    $res = prepared_query($connect, $sql, [$id]);
    $connect->close();

    return $res;
}
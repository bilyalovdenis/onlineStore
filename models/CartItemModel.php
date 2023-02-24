<?php

include_once('ProductModel.php');
function addCartItem($productId, $sessionId){
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT id FROM cart_item WHERE session_id=? AND product_id=?";                   
    $res = prepared_query($connect, $sql, [$sessionId, $productId])->get_result()->fetch_assoc();
    $cost = getProductPriceByID($productId);
    if (empty($cost)) return;
    if (empty($res)){
        $sql = "INSERT INTO cart_item ( session_id, product_id, quantity,cost) VALUES (?,?,?,?)";
        prepared_query($connect, $sql, [$sessionId, $productId, '1',$cost]);  
    }else{
        $sql = "UPDATE cart_item SET quantity = quantity + 1,cost = cost + ? 
        WHERE session_id=? AND product_id=?";
        prepared_query($connect, $sql, [$cost, $sessionId, $productId]); 
    }
    $connect->close();
}
function getCountCartItemBySession($productId, $sessionId){
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                  
    $sql = "SELECT quantity FROM cart_item WHERE session_id=? AND product_id=?";                    
    $res = prepared_query($connect, $sql, [$sessionId, $productId])->get_result()->fetch_assoc();
    $connect->close();
    return $res;  
}
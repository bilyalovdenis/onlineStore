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
//Возвпращает false-если был удален последний экземляр CartItem и запись о нем в таблице  
//true - если проиошел дикремент
function removeCartItem($productId, $sessionId){
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT id, quantity FROM cart_item WHERE session_id=? AND product_id=?";                   
    $res = prepared_query($connect, $sql, [$sessionId, $productId])->get_result()->fetch_assoc();
    $cost = getProductPriceByID($productId);
    if (empty($cost)||empty($res)){ 
        $connect->close();
        return;
    }else if($res['quantity']==1){
        $sql = "DELETE FROM cart_item WHERE id=?";
        prepared_query($connect, $sql, [$res['id']]);
        $connect->close();
        return false;
    }else{
        $sql = "UPDATE cart_item SET quantity = quantity - 1,cost = cost - ? 
        WHERE id=?";
        
        prepared_query($connect, $sql, [$cost,$res['id']]);
        $connect->close();
        return true; 
    }
}
function deleteCartItem ($productId, $sessionId){
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT id, quantity FROM cart_item WHERE session_id=? AND product_id=?";                       
    $res = prepared_query($connect, $sql, [$sessionId, $productId])->get_result()->fetch_assoc();
    if (empty($res)) return;
    $sql = "DELETE FROM cart_item WHERE id=?";
    prepared_query($connect, $sql, [$res['id']]);
    $connect->close();
}
function getCartItemsBySession($sessionId){
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                  
    $sql = "SELECT * FROM cart_item WHERE session_id=?";                    
    $res = prepared_query($connect, $sql, [$sessionId])->get_result()->fetch_all(MYSQLI_ASSOC);
    $connect->close();
    return $res;  
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
function getCartItemByProductAndSession($productId, $sessionId){
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                  
    $sql = "SELECT * FROM cart_item WHERE session_id=? AND product_id=?";                    
    $res = prepared_query($connect, $sql, [$sessionId, $productId])->get_result()->fetch_assoc();
    $connect->close();
    return $res;  
}
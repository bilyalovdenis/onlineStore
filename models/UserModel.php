<?php

function registerUser($first_name, $second_name, $email, $password){
    $db_config = get_db_congig();   
    $res = "accept";             
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "INSERT INTO user (first_name, second_name, permission, email, password) 
            VALUES (?,?,?,?,?) ";   
    try{
        prepared_query($connect, $sql, [$first_name, $second_name, 'CUSTM' ,$email, $password]);
    } catch(Exception $e){
        $res = $e->getCode();
    }                
    
    $connect->close();
    return $res;
}
function getUserIdByEmail($email){
    $db_config = get_db_congig();             
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT id FROM user WHERE email=?";   
    $res = prepared_query($connect, $sql, [$email])->get_result()->fetch_assoc();          
    $connect->close();
    return $res['id'];
}
function getUserById($id){
    $db_config = get_db_congig();             
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT * FROM user WHERE id=?";   
    $res = prepared_query($connect, $sql, [$id])->get_result()->fetch_assoc();          
    $connect->close();
    return $res;
}
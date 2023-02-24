<?php

function getAllCategories(){                  
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT * FROM categories";                    
    $res = prepared_query($connect, $sql, [])->get_result()->fetch_all();
    $connect->close();
    return $res;        
}
function getCategoryNameById($ItemId){                  
    $db_config = get_db_congig();                
    $connect = new mysqli($db_config["db_host"], $db_config["db_user"],
                          $db_config["db_pass"], $db_config["db_name"]);                    
    $sql = "SELECT name FROM categories WHERE id=?";                    
    $res = prepared_query($connect, $sql, [$ItemId])->get_result()->fetch_assoc();
    $connect->close();
    return $res;        
}
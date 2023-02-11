<?php

function getProductInformation(){
    $connect = new mysqli('localhost', 'root', 'L1t2y3b4c5!', 'OnlineStore');
    // $stmt = $connect->prepare ("SELECT * FROM product
    //                             WHERE id = 1");
    //                              $stmt->execute();
    //                              $stmt->bind_result($result);
    //                              $stmt->fetch();
    $sql = "SELECT * FROM product WHERE id = 1";
    $result = $connect->query($sql);
    $res = mysqli_fetch_assoc($result);
    $connect->close();
    return $res;                     
}
// Модель для работы с таблицей product
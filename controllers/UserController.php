<?php
include_once('models/UserModel.php');
include_once('models/CartItemModel.php');
include_once('models/ShoppingSessionModel.php');
include_once('library/CookieManager.php');


function registerNewUserAction(){
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $res = registerUser($_POST['first_name'], $_POST['second_name'], 
                 $_POST['email'], $pass);
    if($res=='accept'){
        session_unset();
        session_destroy();
        session_start();
        $_SESSION['user'] = getUserIdByEmail($_POST['email']);
        CookieManager::Instance()->createShoppingSessionForUser();
    }
    echo json_encode($res);
}
function loginUserAction(){
    $user_id =  getUserIdByEmail($_POST['email']);
    $user = getUserById($user_id);
    if(password_verify($_POST['password'], $user['password'])){
        session_unset();
        session_destroy();
        session_start();
        $_SESSION['user'] = $user['id'];
        echo json_encode("accept");
        return;
    }
    echo json_encode("error");
}
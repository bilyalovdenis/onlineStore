<?php

include_once('models/UserModel.php');
class SessionManager{
    private function __construct(){}
    private function _clone(){}
    private static $inst = null;
    // private function setShoppingSession()
    // {
    //     //Генерация уникального id
    //     do{
            
    //         $id = uniqid("", true);
    //     }while(!shoppingSessionAvailable($id));
    //     //Храним куки 2 недели
    //     setcookie('shopping_session_id', $id, time()+60*60*24*14);
    //     addShoppingSession($id ,date("Y-m-d H:i:s"));
    //     $_COOKIE['shopping_session_id'] = $id;
    // }
    public static function Instance()
    {
        if(self::$inst === null){
            self::$inst = new self();
        }
        return self::$inst;
    }
    public function userIsLogin(){
        //отсутвие cookie или отсутвие записи в БД с существующей cookie
        if(!isset($_SESSION['user']))
        {
            $res = getUserById($_SESSION['user']);
            if (isset($res)) return $res;
        }
        return false;
    }
}
<?php

include_once ("Orm.php");

class User extends Orm{

    public function __construct()
    {
        parent::__construct('users');
        if(!isset($_SESSION['id_user'])){
            $_SESSION['id_user']=1;
        }
    }
    public function login($username, $pass){
        foreach ($_SESSION[$this->model] as $user) {
            if($username == $user['username']){
                if($pass == $user['pass']){
                     return $user;
                     break;
                }
            }
        }
        return null;
    }

    
}



?>
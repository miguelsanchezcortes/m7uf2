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
    public function checkUser($username, $pass){
        $userModel = new User();
        $llista = $userModel->getAll();
        foreach ($llista as $key => $user) {
            if($username == $user['username']){
                if($pass == $user['pass']){
                     echo "Login correcte";
                     break;
                }
            }
        }
        echo "Login incorrecte";
    }

    
}



?>
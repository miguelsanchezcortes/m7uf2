<?php

class mainController extends Controller{

    public function index(){
        //hola
        $params = null;
        $this->render("home/index", $params, "site");
    }

    

}

?>
<?php
include_once("App/config.php");
include_once("App/Router.php");
include_once("App/Models/User.php");

if(!isset($_SESSION)){
    session_start();
}

include_once("App/Core/Controller.php");

$r = new Router();
$r->run();
?>
<?php

class AuthHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("Location: ".LOGIN);
            die();
        }
    }
    
    function isLoggedIn(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION["usuario"]);
    }

}

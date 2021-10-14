<?php
require_once './libs/Smarty.class.php';
require_once "./Helpers/AuthHelper.php";

class UsuarioView{

    private $smarty;
    private $authHelper;

    function __construct() {
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
    }

    function showLogin($error = ""){
        $this->smarty->assign('error', $error);      
        $this->smarty->assign('logout', $this->authHelper->isLoggedIn());
        $this->smarty->display('templates/formUser.tpl');
    }

    function showRegistrarse(){
        $this->smarty->assign('logout', $this->authHelper->isLoggedIn());
        $this->smarty->display('templates/formCrearUser.tpl');
    }

    function showHome(){
        header("Location: ".BASE_URL."home");
    }

}

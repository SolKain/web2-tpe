<?php

require_once './libs/Smarty.class.php';
require_once "./Helpers/AuthHelper.php";

class TipoMotoView{

    private $smarty;
    private $authHelper;

    function __construct(){
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();

    }

    function showSeccionTipos(){
        $this->smarty->assign('logout', $this->authHelper->isLoggedIn());
        $this->smarty->display('templates/tipoMoto.tpl');
    }

    function showTipoMotos($tiposMoto, $error){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('tipos', $tiposMoto);
        $this->smarty->assign('logout', $this->authHelper->isLoggedIn());
        $this->smarty->display('templates/tipoMoto.tpl');
    }

    function showFormularioEditTipo($idTipoMoto){
        $this->smarty->assign('idTipo', $idTipoMoto);
        $this->smarty->assign('logout', $this->authHelper->isLoggedIn());
        $this->smarty->display('templates/formEditarTipo.tpl');
    }

    function showLoginLocation(){
        header("Location: ".BASE_URL."home");
    }


}



?>
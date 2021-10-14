<?php

require_once './model/motoModel.php';
require_once './view/motoView.php';
require_once "./Helpers/AuthHelper.php";

class MotoController{

    private $view;
    private $model;
    private $authHelper;


    function __construct(){
        $this->view = new motoView();
        $this->model = new motoModel();
        $this->tipoModel = new tipoMotoModel();
        $this->authHelper = new AuthHelper();
    }

    
    function home(){
      //  $this->checkLogginIn();
        $this->view->showHome();
    }
    
    function getMotos(){
        $motos = $this -> model ->listMoto();
        $tipos = $this -> tipoModel ->listTipoMoto();

        $this->view->showMotos($motos, $tipos);
    }
    
    function filtrarMotos(){
        $idTipoFiltrar = $_POST['id_tipo_moto'];
        if ($idTipoFiltrar == 0){
            $this->getMotos();
        } else {
            $motos = $this -> model ->filtrarMoto($idTipoFiltrar);
            $tipos = $this -> tipoModel ->listTipoMoto();   
            $this->view->showMotos($motos, $tipos);
        }
    }

    function insertarMoto(){
        $this->authHelper->checkLoggedIn();
        $color = $_POST['color'];
        $cilindrada = $_POST['cilindrada'];
        $tanque = $_POST['tanque'];
        $idTipoMoto = $_POST['id_tipo_moto'];
        $this->model->postMoto($color, $cilindrada, $tanque, $idTipoMoto);
        $this->getMotos();
        }

    function deleteMoto($id){
        $this->authHelper->checkLoggedIn();
        $this->model->DeleteMotoPorID($id);
        header("Location: ". MOTOS);
        }

    function editMoto($idMoto){
        $this->authHelper->checkLoggedIn();
        
        $color = $_POST['color'];
        $cilindrada = $_POST['cilindrada'];
        $tanque = $_POST['tanque'];
        $idTipoMoto = $_POST['id_tipo_moto'];
        $this->model->editMotoPorId($idMoto, $color, $cilindrada, $tanque, $idTipoMoto);
        header("Location: ". MOTOS);
    }  

    function goToEditMoto($id){
        $tipos = $this -> tipoModel ->listTipoMoto();
        $this->authHelper->checkLoggedIn();
        $this->view->showFormularioEdit($id,$tipos);
    }
    
}
?>

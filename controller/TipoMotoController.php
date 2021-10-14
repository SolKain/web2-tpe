<?php
require_once './model/tipoMotoModel.php';
require_once './view/tipoMotoView.php';

class tipoMotoController
{

    private $view;
    private $model;
    private $authHelper;

    function getTiposMotos()
    {
        $tiposMotos = $this->model->listTipoMoto();
        $this->view->showTipoMotos($tiposMotos, "No se puede borrar");
    }

    function __construct()
    {
        $this->view = new tipoMotoView();
        $this->model = new tipoMotoModel();
        $this->authHelper = new AuthHelper();
    }


    function insertTipoMoto()
    {
        $this->authHelper->checkLoggedIn();
        $this->model->postTipoMoto( $_POST['terreno']);
        header("Location: ". TIPOS);
    }

    function editarTipoMoto($id)
    {
        $this->authHelper->checkLoggedIn();
        $terreno = $_POST['terreno'];
        $this->model->editTipoMoto($id, $terreno);
        header("Location: ". TIPOS);
    }

    function eliminarTipoMoto($id)
    {
        $this->authHelper->checkLoggedIn();
        try {
            $this->model->DeleteTipoMotoPorID($id);
        } catch(Exception $e){
            echo $e;
        }
        header("Location: ". TIPOS);
    }

      function goToEditTipo($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->view->showFormularioEditTipo($id);
    }
}

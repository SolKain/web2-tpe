<?php

require_once './model/usuarioModel.php';
require_once './view/usuarioView.php';

class usuarioController{


    private $model;
    private $view;

    function __construct()
    {
        $this->model = new usuarioModel();
        $this->view = new usuarioView();
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->showLogin("Te deslogueaste!");
    }

    function login(){
        $this->view->showLogin();
    }
    
    function showRegistrarse(){
        $this->view->showRegistrarse();
    }
    
    function registrar(){
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];
        $contraseniaSegura = password_hash($contrasenia, PASSWORD_BCRYPT);
        $this->model->crearUsuario($usuario,$contraseniaSegura);
        $this->view->showLogin();
    }

    function verifyLogin(){
        if (!empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
            $usuario = $_POST['usuario'];
            $contrasenia = $_POST['contrasenia'];
            $usuario = $this->model->getUsuario($usuario);
            var_dump($usuario->contrasenia);
            var_dump(password_hash($contrasenia, PASSWORD_BCRYPT));
            if ($usuario && password_verify($contrasenia, $usuario->contrasenia)) {
                session_start();
                $_SESSION['usuario'] = $usuario;
                //$_SESSION['LAST_ACTIVITY'] = time();
                $this->view->showHome();
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        } else {
            $this->view->showLogin("Complete usuario y contraseña");
        }

    }



}
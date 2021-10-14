<?php

class UsuarioModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe-web2;charset=utf8', 'root', '');
    }

    function getUsuario($usuario){
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $query->execute([$usuario]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    function crearUsuario($usuario, $contrasenia){
        $query = $this->db->prepare("INSERT INTO usuarios(usuario, contrasenia) VALUES (?,?)");
        $query->execute([$usuario, $contrasenia]);
    }


}

<?php
require_once './controller/MotoController.php';
require_once './controller/TipoMotoController.php';
require_once './controller/UsuarioController.php';




define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');
define("MOTOS", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/motos');
define("TIPOS", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/tipos');
define("REGISTRARSE", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/registrarse');
define("LOGIN", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/login');


$motoController = new MotoController();
$tipoMotoController = new TipoMotoController();
$usuarioController = new UsuarioController();


//lee la accion
if (!empty($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'home'; 
}
$verb = $_SERVER['REQUEST_METHOD'];
$params = explode('/', $action);
switch ($params[0]) {
  case 'home':
    $motoController->home();
    break;
  case 'motos':
    $motoController->getMotos();
    break;
  case 'filtrar':
    $motoController->filtrarMotos();
    break;
  case 'insert':
    $motoController->insertarMoto();
    break;
  case 'delete':
    $motoController->deleteMoto($params[1]);
    break;
  case 'edit':
    if ($verb == 'POST') {
      $motoController->editMoto($params[1]);
    } else {
      $motoController->goToEditMoto($params[1]);
    }
    break;
 
  case 'tipos':
    $tipoMotoController->getTiposMotos();
    break;
  case 'insertTipo':
    $tipoMotoController->insertTipoMoto();
    break;
  case 'deleteTipo':
    $tipoMotoController->eliminarTipoMoto($params[1]);
    break;
  case 'editTipo':
    if ($verb == 'POST') {
      $tipoMotoController->editarTipoMoto($params[1]);
    } else {
      $tipoMotoController->goToEditTipo($params[1]);
    }
    break;
    case 'login': 
      $usuarioController->login(); 
      break;
  case 'logout': 
      $usuarioController->logout(); 
      break;
  case 'verify': 
      $usuarioController->verifyLogin(); 
      break;
  case 'registrar': 
      $usuarioController->registrar(); 
      break;
  case 'registrarse': 
      $usuarioController->showRegistrarse(); 
      break;
    default:
    $motoController->home();
    break;
}



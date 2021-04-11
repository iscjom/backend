<?php
require_once 'Model/conexion.php';
$controller = 'productos';

//se crea el controlador para utilizar en el frontend
if(!isset($_REQUEST['c'])){
    require_once "Controller/productos.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();
} else {
    //se busca el controlador a cargar
    $controller = strtolower($_REQUEST ['c']);
    $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    //se instancia el controlador
    require_once "Controller/productos.controller.php";
    $controller = ucwords($controller) . "Controller";
    $controller = new $controller;
    //llamada a las acciones a ejecutar
    call_user_func(array($controller, $action));
}
?>
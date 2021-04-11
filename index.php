<?php
include_once 'Controller/productosControl.php';
include_once 'Config/conexion.php';
$controller = new ProductosControl();

//petición inicial al no haber nada
if(!isset($_REQUEST['c'])){
    $controller->index();
} else {
    //en caso de haber petición
    $action = $_REQUEST['c'];
    call_user_func(array($controller, $action));
}

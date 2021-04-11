<?php

include_once 'Model/mdlProductos.php';

class ProductosControl{
    public $model;

    public function __construct(){
        $this->model = new Productos();
    }

    public function index(){
        include_once 'View/vwProductos.php';

    }

    public function fisica(){
        include_once 'Controller/tfisicaControl.php';
        $tFisicaController = new TFisicaControl();
        $tFisicaController->index();
    }

    public function virtual(){
        include_once 'Controller/tvirtualControl.php';
        $tVirtualController = new TvirtualControl();
        $tVirtualController->index();
    }

    public function nuevo(){
        include_once 'View/vwNewProducto.php';
    }

    public function guardar(){
        $registro = new mdlProductos();
        $registro->existencias = $_POST['txtExistencias'];
        $registro->productos_id = $_POST['cmbProducto'];
        $registro->almacenes_id = $_POST['cmbAlmacen'];
        $this->model->registrar($registro);
        header("Location: index.php");
    }
}
<?php

include_once 'Model/Productos.php';

class ProductosControl{
    public $model;

    public function __construct(){
        $this->model = new Productos();
    }

    public function index(){
        include_once 'View/viewProductos.php';

    }

    public function fisica(){
        include_once 'Controller/tfisicaControl.php';
        $tienda_fisica = new TFisicaControl();
        $tienda_fisica->index();
    }

    public function virtual(){
        include_once 'Controller/tvirtualControl.php';
        $tienda_virtual = new TVirtualControl();
        $tienda_virtual->index();
    }

    public function nuevo(){
        include_once 'View/viewNewProducto.php';
    }


   public function guardar(){
        $registro = new Existencia();
        $registro->existencias = $_POST['txtExistencias'];
        $registro->productos_id = $_POST['cmbProducto'];
        $registro->almacenes_id = $_POST['cmbAlmacen'];
        $this->model = new Existencia();
        $this->model->insertar($registro);
        header("Location: index.php");
    }
}
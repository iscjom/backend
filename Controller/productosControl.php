<?php

include_once 'Model/productos.php';

class ProductosControl{
    public $model;

    public function __construct(){
        $this->model = new Productos();
    }

    public function index(){
        include_once 'View/productos.php';

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
}
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
        include_once 'View/fisica.php';
    }

    public function virtual(){
        include_once 'View/virtual.php;'
    }
}
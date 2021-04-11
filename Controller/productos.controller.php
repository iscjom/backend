<?php
require_once 'Model/productos.php';

class ProductosController{
    private $model;

    public function Index(){
        require_once 'View/header.php';
        require_once 'View/productos.php';
        require_once 'View/footer.php';
    }
}
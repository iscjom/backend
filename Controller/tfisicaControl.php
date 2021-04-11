<?php

include_once 'Model/VwFisica.php';

class TFisicaControl{
    public $model;

    public function __construct(){
        $this->model = new VwFisica();
    }

    public function index(){
        include_once 'View/viewFisica.php';
    }


}

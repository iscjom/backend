<?php

include_once 'Model/mdlFisica.php';

class TFisicaControl{
    public $model;

    public function __construct(){
        $this->model = new TFisica();
    }

    public function index(){
        include_once 'View/vwFisica.php';
    }
}

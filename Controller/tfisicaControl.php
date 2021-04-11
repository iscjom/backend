<?php

include_once 'Model/tfisica.php';

class TFisicaControl{
    public $model;

    public function __construct(){
        $this->model = new TFisica();
    }

    public function index(){
        include_once 'View/fisica.php';
    }
}

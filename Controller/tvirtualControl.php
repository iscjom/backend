<?php

include_once 'Model/VwVirtual.php';

class TVirtualControl{
    public $model;

    public function __construct(){
        $this->model = new VwVirtual();
    }

    public function index(){
        include_once 'View/viewVirtual.php';
    }
}
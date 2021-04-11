<?php

include_once 'Model/mdlVirtual.php';

class TVirtualControl{
    public $model;

    public function __construct(){
        $this->model = new TVirtual();
    }

    public function index(){
        include_once 'View/vwVirtual.php';
    }
}

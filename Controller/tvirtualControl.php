<?php

include_once 'Model/tvirtual.php';

class TVirtualControl{
    public $model;

    public function __construct(){
        $this->model = new TVirtual();
    }

    public function index(){
        include_once 'View/virtual.php';
    }
}

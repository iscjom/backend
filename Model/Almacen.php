<?php
class Almacen{
    public $cnx;

    public $id;
    public $nombre;
    public $localizacion;
    public $responsable;
    public $tipo;

    public function __construct(){
        try{
            $this->cnx=Conexion::conectar();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }



}
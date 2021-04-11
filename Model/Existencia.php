<?php
class Existencia{
    public $cnx;

    public $id;
    public $existencias;
    public $productos_id;
    public $almacenes_id;

    public function __construct(){
        try{
            $this->cnx=Conexion::conectar();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function insertar(Productos $data){
        try{
            $query = "insert into existencias(existencias, productos_id, almacenes_id) values(?, ?, ?)";
            $this->cnx->prepare($query)->execute(array($data->existencias, $data->productos_id, $data->almacenes_id));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function actualizar(Existencia $data){
        try{
            $query = "update existencias set existencias=?, productos_id=?, almacenes_id=? where id=?";
            $this->cnx->prepare($query)->execute(array($data->existencias, $data->productos_id, $data->almacenes_id, $data->id));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
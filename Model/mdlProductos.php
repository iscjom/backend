<?php
class Productos{
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

    public function listar(){
        try {
            $query = "SELECT * FROM vwproductos";
            $smt = $this->cnx->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listarProducto(){
        try {
            $query = "SELECT id, descripcion FROM productos";
            $smt = $this->cnx->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listarAlmacen(){
        try {
            $query = "SELECT id, nombre FROM almacenes";
            $smt = $this->cnx->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function registrar(Productos $data){
        try{
            $query = "insert into existencias(existencias, productos_id, almacenes_id) values(?, ?, ?)";
            echo $data;
            //$this->cnx->prepare($query)->execute(array($data->existencias, $data->productos_id, $data->almacenes_id));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}
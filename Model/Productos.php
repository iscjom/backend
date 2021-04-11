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
            $query = "SELECT * FROM almacenes order by id";
            $smt = $this->cnx->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }


}
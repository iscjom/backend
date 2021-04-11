<?php
class Almacen{
    public $cnx;
    public function __construct(){
        try{
            $this->cnx=Conexion::conectar();
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
<?php
class TFisica{
    public $cnx;
    public function __construct(){
        try{
            $this->cnx=Conexion::conectar();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listar(){
        try {
            $query = "SELECT * FROM vwfisico";
            $smt = $this->cnx->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}
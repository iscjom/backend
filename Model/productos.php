<?php
class Productos{
    //conector a la base de datos
    private $pdo;

    public $sku;
    public $descripcion;
    public $color;
    public $marca;

    public function __CONSTRUCT(){
        try {
            $this->pdo = Conexion::StartUp();
        } catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Listar(){
        try{
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM vwproductos");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}
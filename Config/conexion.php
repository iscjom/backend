<?php
class Conexion{
    public static function conectar(){
        $cnn = "mysql:host=localhost;dbname=backenddb;charset=utf8";
        $usr ="jolguin";
        $pwd = "Administrador2000";

        $servidor = new PDO($cnn,$usr,$pwd);
        $servidor->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $servidor;
    }
}
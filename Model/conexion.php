<?php
class Conexion{
    public static function StartUp(){
        $db = 'mysql:host=localhost;dbname=backenddb;charset=utf8';
        $usr = 'jolguin';
        $pwd = 'Administrador2000';

        $pdo = new PDO($db, $usr, $pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}
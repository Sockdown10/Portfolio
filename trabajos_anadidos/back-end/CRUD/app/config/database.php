<?php


class Database{
    private $hostname="localhost";
    private $database="restaurantcrud";
    private $username="mypjrwebbe";
    private $password="SdWH3M87";
    private $charset="utf8mb4";

    function conectar(){
        try{
            $conexion="mysql:host=".$this->hostname.";dbname=".$this->database.";charset=".$this->charset;
            $options=[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES=>false,
            ];
            $pdo= new PDO($conexion, $this->username,$this->password,$options);
            return $pdo;
        }catch(PDOException $e){
            echo "Error en la conexión: ".$e->getMessage();
            exit;
        }
    }
}
?>
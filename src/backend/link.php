<?php

$servername = "sql102.epizy.com";
$username = "epiz_26883339";
$password = "tzXyEHZIDQTDeW3";
$database = "epiz_26883339_jump";

class Connection
{
    public static function getDb()
    {
        $conn = new PDO(
            "mysql:host=67.205.138.239:3306;dbname=fseletro","dgsdev","@dgsjuh12");        
       
        if ($conn) {
            return $conn;
            
        } else {
            return "<h1>Erro ao realizar a conexão com o Banco de dados!</h1>";
        }
    }
}
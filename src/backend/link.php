<?php

class Connection
{
    public static function getDb()
    {
        $conn = new PDO(
            "mysql:host=localhost;dbname=fseletro;charset=utf8",
            "root",
            ""
        );

        if ($conn) {
            return $conn;
            
        } else {
            return "<h1>Erro ao realizar a conexão com o Banco de dados!</h1>";
        }
    }
}
<?php

class Connection
{
    public static function getDb()
    {
        $conn = new PDO(
            "mysql:host=sql102.epizy.com;dbname=epiz_26883339_projetorecode;charset=utf8",
            "epiz_26883339",
            "tzXyEHZIDQTDeW3"
        );

        if ($conn) {
            return $conn;
            
        } else {
            return "<h1>Erro ao realizar a conexão com o Banco de dados!</h1>";
        }
    }
}
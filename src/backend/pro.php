<?php

require "./Models/produtos.php";


$produtos = Produtos::getAll();

header("Access-Control-Allow-Origin:*"); // Permite que outras aplicações consumam a api
header("Content-type: application/json"); //Indicação de arquivo JSON

echo json_encode($produtos);
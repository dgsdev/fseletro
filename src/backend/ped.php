<?php

require "./Models/pedidos.php";

header("Access-Control-Allow-Origin:*");
header("Content-type: application/json");

$pedidos = Pedido::getAll();

echo json_encode($pedidos);
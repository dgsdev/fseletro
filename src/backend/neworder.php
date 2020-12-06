<?php

require "./Models/pedidos.php";


$pedidos = new Pedido;
$pedidos->cliente = $_POST['cliente'];
$pedidos->endereco = $_POST['end'];
$pedidos->telefone = $_POST['tel'];
$pedidos->produto = $_POST['prod'];
$pedidos->preco = $_POST['preco'];
$pedidos->quantidade = $_POST['qtd'];
$pedidos->preco_total = $_POST['total'];


$validate = $pedidos->register();

if ($validate) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}

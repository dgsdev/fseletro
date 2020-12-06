<?php

require "./Models/comentarios.php";

header("Access-Control-Allow-Origin:*");
header("Content-type: application/json");

$comentarios = Comentario::getAll();

echo json_encode($comentarios);
<?php

require_once '../php/database/conexao.php';
require_once '../php/src/Cliente.php';

$id = $_GET['id'];

$client = new Cliente($mysqli);
$client->deleteCliente($id);

?>
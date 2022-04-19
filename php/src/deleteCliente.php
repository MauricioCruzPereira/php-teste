<?php

require_once '../database/conexao.php';
require_once './Cliente.php';

$id = $_POST['id'];

$client = new Cliente($mysqli);
$client->deleteCliente($id);

header('Location: ../../view/clientes.php');

?>
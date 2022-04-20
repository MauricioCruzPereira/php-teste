<?php

require_once '../../../app/class/Cliente.php';
require_once '../../../app/database/conexao.php';
require_once '../../../app/function/verifyCamps.php';

$id = $_POST['id'];

(new Cliente($mysqli))->deleteCliente($id);

header('Location: ../clientes.php');

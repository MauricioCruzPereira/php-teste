<?php

require_once 'Cliente.php';
require_once '../database/conexao.php';
require_once '../function/verifyCamps.php';

if(analisaCamps()){
    echo 'certo';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $street = $_POST['street'];
    $num = $_POST['num'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $password = $_POST['password'];

$cliente = new Cliente($mysqli);
$cliente->createCliente($name,
$email,
$cep,
$street,
$num,
$district,
$city,
$state,
$password);

header('Location: ../../view/clientes.php');
}
else{
    echo 'n deu certo';
}




?>
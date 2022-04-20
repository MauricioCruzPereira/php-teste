<?php

require_once '../../../app/class/Cliente.php';
require_once '../../../app/database/conexao.php';
require_once '../../../app/function/verifyCamps.php';

if(analisaCamps()){
    echo 'certo';
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
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

header('Location: ../clientes.php');

}
else{
    echo 'n deu certo';
}

<?php

require_once '../../../app/class/Cliente.php';
require_once '../../../app/database/conexao.php';
require_once '../../../app/function/verifyCamps.php';

if(analisaCamps()){
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $cep = filter_input(INPUT_POST,'cep',FILTER_SANITIZE_STRING);
    $street = filter_input(INPUT_POST,'street',FILTER_SANITIZE_STRING);
    $num = filter_input(INPUT_POST,'num',FILTER_SANITIZE_INT);
    $district = filter_input(INPUT_POST,'district',FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST,'city',FILTER_SANITIZE_STRING);
    $state = filter_input(INPUT_POST,'state',FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);

(new Cliente($mysqli))->createCliente($name,
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

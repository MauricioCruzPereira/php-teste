<?php

require_once 'Cliente.php';
require_once '../database/conexao.php';

$name = $_POST['name'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$street = $_POST['street'];
$num = $_POST['num'];
$district = $_POST['district'];
$city = $_POST['city'];
$state = $_POST['state'];
$password = $_POST['password'];

echo $name;
echo $email;
echo $cep;
echo $street;
echo $num;
echo $district;
echo $city;
echo $state;
echo $password;

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


?>
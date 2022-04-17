<?php

require_once '../php/database/conexao.php';
require_once '../php/src/Cliente.php';
$id = $_POST['id'];

$cliente = new Cliente($mysqli);
$clientFind = $cliente->updateCliente($id);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <?php
        include './partials/cabecalho.php'
    ?>
    <form action="../php/src/createCliente.php" method="POST">
        <label for="">Nome</label>
        <input type="text" name="name" id="name" value="">
        <br>

        <label for="">Email</label>
        <input type="email" id="email" name="email" value="">
        <br>

        <label for="">CEP</label>
        <input type="text" name="cep" id="cep" value="">
        <br>

        <label for="">Rua</label>
        <input type="text" name="street" id="street" value="">
        <br>

        <label for="">Numero</label>
        <input type="number" name="num" id="num" min="0" value="">
        <br>

        <label for="">Bairro</label>
        <input type="text" name="district" id="district" value="">
        <br>

        <label for="">Cidade</label>
        <input type="text" name="city" id="city" value="">
        <br>

        <label for="">Estado</label>
        <input type="text" name="state" id="state" value="">
        <br>

        <label for="">Senha</label>
        <input type="password" name="password" id="password" value="">
        <br>

        <input type="submit" value="Atualizar">
    </form>

</body>

<script src="../js/index.js"></script>

</html>
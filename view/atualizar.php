<?php

require_once '../php/database/conexao.php';
require_once '../php/src/Cliente.php';
$id = $_POST['id'];

$cliente = new Cliente($mysqli);
$clientFind = $cliente->findById($id);

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
    <form action="../php/src/updateCliente.php" method="POST">
        <label for="">Nome</label>
        <input type="text" name="name" id="name" value="<?= $clientFind['name']?>">
        <br>

        <label for="">Email</label>
        <input type="email" id="email" name="email" value="<?= $clientFind['email']?>">
        <br>

        <label for="">CEP</label>
        <input type="text" name="cep" id="cep" value="<?= $clientFind['cep']?>">
        <br>

        <label for="">Rua</label>
        <input type="text" name="street" id="street" value="<?= $clientFind['street']?>">
        <br>

        <label for="">Numero</label>
        <input type="number" name="num" id="num" min="0" value="<?= $clientFind['num']?>">
        <br>

        <label for="">Bairro</label>
        <input type="text" name="district" id="district" value="<?= $clientFind['district']?>">
        <br>

        <label for="">Cidade</label>
        <input type="text" name="city" id="city" value="<?= $clientFind['city']?>">
        <br>

        <label for="">Estado</label>
        <input type="text" name="state" id="state" value="<?= $clientFind['state']?>">
        <br>

        <label for="">Senha</label>
        <input type="password" name="password" id="password" value="">
        <br>

        <input type="hidden" name="id" value="<?= $clientFind['id']?>">

        <input type="submit" value="Atualizar">
    </form>

</body>

<script src="../js/index.js"></script>

</html>
<?php

require_once 'Cliente.php';
require_once '../database/conexao.php';

$cliente = new Cliente($mysqli);
$client = $cliente->readClientes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include './partials/cabecalho.php'
    ?>

    <?php
    foreach($client as $cliente) : ?>
    <td><?= $cliente['name'];?></td>
        <?php endforeach
    
    ?>
    
</body>
</html>
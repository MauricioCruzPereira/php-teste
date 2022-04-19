<?php
require_once '../php/database/conexao.php';
require_once '../php/src/Cliente.php';

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
    
    <style>
        table, th, td {
  border: 1px solid black;
}
    </style>
</head>
<body>
<?php
        include './partials/cabecalho.php'
    ?>
    <table >
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>EMAIL</td>
            <td>CEP</td>
            <td>RUA</td>
            <td>NÚMERO</td>
            <td>BAIRRO</td>
            <td>CIDADE</td>
            <td>ESTADO</td>
            <td>DELETAR</td>
        </tr>

        
        <?php
        foreach($client as $cliente) : ?>
        <tr><td><?= $cliente['id'];?></td>
        <td><?= $cliente['name'];?></td>
        <td><?= $cliente['email'];?></td>
        <td><?= $cliente['cep'];?></td>
        <td><?= $cliente['street'];?></td>
        <td><?= $cliente['num'];?></td>
        <td><?= $cliente['district'];?></td>
        <td><?= $cliente['city'];?></td>
        <td><?= $cliente['state'];?></td>
        <td><form action="../php/src/deleteCliente.php" method="POST">
            <input type="hidden" name="id" value="<?= $cliente['id'];?>">
            <button>DELETAR</button>
        </form></td>
        <td><form action="./atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?= $cliente['id'];?>">
            <button>ALTERAR</button>
        </form></td>
        </tr>
            <?php endforeach?>
        
    </table>
    
    
</body>
</html>
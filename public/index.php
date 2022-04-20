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
        include 'view/partials/cabecalho.php'
    ?>
    <form action="view/post/createCliente.php" method="POST">
        <label for="">Nome</label>
        <input type="text" name="name" id="name">
        <br>

        <label for="">Email</label>
        <input type="email" id="email" name="email">
        <br>

        <label for="">CEP</label>
        <input type="text" name="cep" id="cep">
        <br>

        <label for="">Rua</label>
        <input type="text" name="street" id="street">
        <br>

        <label for="">Numero</label>
        <input type="number" name="num" id="num" min="0">
        <br>

        <label for="">Bairro</label>
        <input type="text" name="district" id="district">
        <br>

        <label for="">Cidade</label>
        <input type="text" name="city" id="city">
        <br>

        <label for="">Estado</label>
        <input type="text" name="state" id="state">
        <br>

        <label for="">Senha</label>
        <input type="password" name="password" id="password">
        <br>

        <input type="submit" value="Cadastrar">
    </form>

</body>

<script src="assets/js/index.js"></script>

</html>
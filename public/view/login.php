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
    <form action="../php/src/logar.php" method="POST">
    <input type="email" placeholders="Email" name="email" require>
    <input type="password" name="password" require>
   <button type="submit">Logar</button>
    </form>
    
</body>
</html>
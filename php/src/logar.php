<?php

if($_POST['email'] != "" && $_POST['password'] != ""){
    require_once '../database/conexao.php';
    require_once './Cliente.php';
    
    $cliente = new Cliente($mysqli);
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $clientFind = $cliente->findByEmail($email);
    
    if(password_verify($password,$clientFind['password'])){
        echo "Logado";
    }
    else{
        echo "Senha ou email incorreto(s)";
    }
}
else{
    header('Location: ../../html/login.php');
}



?>
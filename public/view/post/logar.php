<?php

if($_POST['email'] != "" && $_POST['password'] != ""){
    require_once '../../../app/class/Cliente.php';
    require_once '../../../app/database/conexao.php';
    require_once '../../../app/function/verifyCamps.php';
    
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
    header('Location: ../login.php');
}

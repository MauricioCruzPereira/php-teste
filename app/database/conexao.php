<?php

//onde esta localizado, quem esta roteando, senha e nome do banco
$mysqli = new mysqli("localhost", "root", "", "teste2");
$mysqli->set_charset("utf8");

if($mysqli == FALSE){
    echo  "Erro na conexão";
}
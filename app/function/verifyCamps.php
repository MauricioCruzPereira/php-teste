<?php

function analisaCamps(){
    if(
        $_POST['name'] != "" && isset($_POST['name']) 
    && $_POST['cep'] != "" && isset($_POST['cep'])
    && $_POST['street'] != "" && isset($_POST['street'])
    && $_POST['num'] != "" && isset($_POST['num'])
    && $_POST['district'] != "" && isset($_POST['district'])
    && $_POST['city'] != "" && isset($_POST['city'])
    && $_POST['state'] != "" && isset($_POST['state'])
    && $_POST['password'] != "" && isset($_POST['password'])
    ){
        return true;
    }
    else{
        return false;
    }


}
<?php

ini_set('display_errors', 0);
ini_set('display_startup_erros', 0);

$conexao = mysqli_connect("localhost", "root", "", "genialize");

if($conexao == false){
    die(mysqli_connect_error());
}

session_start();

?>
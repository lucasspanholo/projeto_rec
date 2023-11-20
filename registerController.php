<?php

session_start();
include_once("config.php");

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios
(nome, usuario, email, data_nasc, cpf, senha)
VALUES ('$nome','$usuario','$email','$data_nasc', '$cpf','$senha')";

if($cad = $con->query($sql)){
    echo"<script>alert('cadastrado com sucesso');
        location.href='login.php';
    </script>";
}else{
    echo "Erro ao cadastrar";
}
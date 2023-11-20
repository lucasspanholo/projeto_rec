<?php
include_once("config.php");

session_start();

if(empty($_POST["email"]) || empty($_POST["senha"])){
    print"
        <script> alert('Campo vazio');
        location.href='login.php';
        </script>";
}else{
    $email = $_POST["email"];
    $senha = $_POST["senha"];
}

if(isset($email, $senha)){
    $sql1 = "SELECT * FROM usuarios
        WHERE email = '$email'
        AND senha = '$senha'";
    $resultado = $con->query($sql1);
}else{
    print"<script>
        alert('Erro no login');
        location.href='login.php'
        </script>";
}


$row = $resultado->fetch_object();
$qtd = $resultado->num_rows;


if($qtd>0){
    $_SESSION["usuario"] = $usuario;
    $_SESSION["id"] = $row->id; 
    $_SESSION["nome"] = $row->nome;
    $_SESSION["email"] = $row->email;
    $_SESSION["cpf"] = $row->cpf;

    print"<script>location.href='dashboard.php'</script>";
}else{
    session_destroy();
    print"<script>
    alert('Usuario Invalido');
    location.href='login.php';
    </script>";
}

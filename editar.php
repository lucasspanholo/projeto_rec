<?php

include_once("config.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$id = $_POST['id'];

$sql2 = "UPDATE usuarios SET nome= '$nome',email= '$email' WHERE ID = $id";

if (mysqli_query($con, $sql2)) {
    echo '<script type="text/javascript">window.location.href = "acessos.php?id='.$id.'";alert("Sucesso");</script>';
  } else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
  }

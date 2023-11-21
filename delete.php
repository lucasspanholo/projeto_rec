<?php
include_once 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE ID= $id;";

if (mysqli_query($con, $sql)) {
 echo "Deletado com sucesso";
 echo '<script type="text/javascript">window.location.href = "acessos.php";alert("Sucesso");</script>'; 

} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
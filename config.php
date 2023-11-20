<?php

$host="localhost";
$port=3307;
$socket="";
$user="root";
$password="";
$dbname="weblogin";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Nao pode conectar' . mysqli_connect_error());
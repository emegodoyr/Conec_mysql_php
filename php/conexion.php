<?php

$host = "database";
$user ="root";
$password ="123";
$database = "test";
$port = 10000;

//$conexion = mysqli_connect($server,$usuario,$contraseña,$bd)

$conexion = mysqli_connect( $host, $user, $password, $database, $port ) or die ("error en la conexion");

?>
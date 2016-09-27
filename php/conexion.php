<?php

$host = "database";
$user ="root";
$password ="123";
$database = "test";
$port = 3306;

//$conexion = mysqli_connect($server,$usuario,$contraseña,$bd)

$db_link = mysqli_connect( $host, $user, $password, $database, $port ) or die ("error en la conexion");

?>
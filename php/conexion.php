<?php

$server = "127.0.0.1";
$usuario ="root";
$contraseña ="lentao1649_";
$bd = "prueba";

$conexion = mysqli_connect($server,$usuario,$contraseña,$bd)
			or die ("error en la conexion");


?>
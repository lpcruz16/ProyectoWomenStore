<?php

$host="localhost";
$port=3306;
$socket="";
$user="u991668360_women";
$password="Women123";
$dbname="u991668360_womenstore";

$conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('No se pudo conectar al servidor' . mysqli_connect_error());

$conexion->close();
?>
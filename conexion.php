<?php

$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="womenstore";

$conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('No se pudo conectar al servidor' . mysqli_connect_error());

$conexion->close();
?>
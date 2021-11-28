<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="womenstore";

$conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('No se pudo conectar al servidor'.mysqli_connect_error());

$nombre					=$_POST['nombre'];
$apellido 	    =$_POST['apellido'];
$correo					=$_POST['correo'];
$telefono 	    =$_POST['telefono'];
$mensaje 	      =$_POST['mensaje'];
$sql = "INSERT INTO mensaje VALUES ('$nombre','$apellido','$correo','$telefono','$mensaje')";

if ($conexion->query($sql)===TRUE){
print'Registro insertado correctamente';
}else{
	print 'Error: ' . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>

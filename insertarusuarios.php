<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="womenstore";

$conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('No se pudo conectar al servidor'.mysqli_connect_error());
$id_cliente     =$_POST['id_cliente']	;
$Doc_cliente    =$_POST['Doc'];
$Nombre					=$_POST['Nombre'];
$Apellido 	    =$_POST['Apellido'];
$Correo					=$_POST['Correo'];
$Telefono 	    =$_POST['Telefono'];
$usuario				=$_POST['usuario'];
$clave    		=$_POST['clave'];

$sql = "INSERT INTO clientes VALUES ('$Doc_cliente','$Nombre','$Apellido','$Correo','$Telefono','$usuario','$clave')";

if ($conexion->query($sql)===TRUE){
	echo "Registro insertado correctamente";
}else{
	echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
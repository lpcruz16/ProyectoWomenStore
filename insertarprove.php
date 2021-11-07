<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="womenstore";

$conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('No se pudo conectar al servidor'.mysqli_connect_error());
$id_Proveedor      =$_POST['id_Proveedor'];
$Nit              =$_POST['Nit'];
$NombreEmpresa		=$_POST['NombreEmpresa'];
$Nombrep	        =$_POST['Nombrep'];
$Doc_proveedor    =$_POST['Doc_proveedor'];
$Correop					=$_POST['Correop'];
$Telefonop 	      =$_POST['Telefonop'];
$Usuariop				  =$_POST['Usuariop'];
$Clavep           =$_POST['Clavep'];

$sql = "INSERT INTO proveedores VALUES ('$id_Proveedor','$Nit','$NombreEmpresa','$Nombrep','$Doc_proveedor','$Correop','$Telefonop','$Usuariop','$Clavep')";

if ($conexion->query($sql)===TRUE){
print'Registro insertado correctamente';
}else{
	print 'Error: ' . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>

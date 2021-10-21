<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="womenstore";

$conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('No se pudo conectar al servidor'.mysqli_connect_error());
	
$Doc_cliente    =$_POST['Doc'];
$Nombre					=$_POST['Nombre'];
$Apellido 	    =$_POST['Apellido'];
$Correo					=$_POST['Correo'];
$Telefono 	    =$_POST['Telefono'];
$Usuario				=$_POST['Usuario'];
$contraseña    		=$_POST['contraseña'];

$sql = "INSERT INTO clientes VALUES('$Doc_cliente','$Nombre','$Apellido','$Correo','$Telefono','$Usuario','$contraseña')";

if ($conexion->query($sql)===TRUE){
	echo "Registro insertado correctamente";
}else{
	echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
PHP
<?php
$db_host="localhost";
$db_user="nombre_de_usuario";
$db_password="contraseña";
$db_name="nombre_de_base_de_datos";
$db_table_name="nombre_de_tabla";
$db_connection = mysql_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$subs_name = utf8_decode($_POST['nombre']);
$subs_last = utf8_decode($_POST['apellido']);
$subs_email = utf8_decode($_POST['email']);

$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'", $db_connection);

if (mysql_num_rows($resultado)>0)
{

header('Location: Fail.html');

} else {
	
	$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Nombre` , `Apellido` , `Email`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '")';

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: Success.html');
}

mysql_close($db_connection);
		
?>
<?php
$db_host="localhost";
$db_user="nombre_de_usuario";
$db_password="contraseña";
$db_name="nombre_de_base_de_datos";
$db_table_name="nombre_de_tabla";
   $db_connection = mysql_connect($db_host, $db_user, $db_password);
 
if (!$db_connection) {
 die('No se ha podido conectar a la base de datos');
}
$subs_name = utf8_decode($_POST['nombre']);
$subs_last = utf8_decode($_POST['apellido']);
$subs_email = utf8_decode($_POST['email']);
 
$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'", $db_connection);
 
if (mysql_num_rows($resultado)>0)
{
 
header('Location: Fail.html');
 
} else {
 
 $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Nombre` , `Apellido` , `Email`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '")';
 
mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);
 
if (!$retry_value) {
   die('Error: ' . mysql_error());
}
 
header('Location: Success.html');
}
 
mysql_close($db_connection);
 
?>
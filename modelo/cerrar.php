<?php

if(isset($_POST['button'])){

    session_start();
    session_destroy();

    //echo"sesion cerrada";



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../proyecto/estiloscerrar.css">
</head>
<body> <center>
    
    <h1>SESION CERRADA</h1>
    <input  class="btn" type ='button' value = 'Iniciar Sesion' onclick="window.open('iniciars.php ');"/>
</center>
</body>
</html>
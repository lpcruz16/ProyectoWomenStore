<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../ProyectoWomenStore/estilos/registro.css">
  <title>login con sesion</title>
</head>
<body>
      <h1>INICIO DE SESION</h1>
  <center>
  
    <form class="formulario" action="controlador/loguear.php" method="POST">
    <h4>INICIO DE SESION</h4>
    Usuario :
   <input type="text" name="usuario" placeholder="&#128274Digite un usuario">
   <br><br>
   Contraseña :
   <input type="password" name="clave" placeholder="&#128273Digite su contraseña">
   <br>
   
   <input class="boton" type="submit" value="Ingresar">
   <p><a href="registro.html">Crear Cuenta?</a></p>
  </form>
  </center>
  <br>
  <a href="index.html">Pagina Inicio</a>
</body>
</html>
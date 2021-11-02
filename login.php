<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../ProyectoWomenStore/estilos/inicio.css">
  <title>login con sesion</title>
</head>
<body>
      <h1>INICIO DE SESION</h1>
  <center>
    <form action="controlador/loguear.php" method="POST">
      Usuario : <br>
   <input type="text" name="usuario" placeholder="&#128274Digite un usuario">
   <br><br>
   Contraseña: <br>
   <input type="password" name="clave" placeholder="&#128273Digite su contraseña">
   <br><br>
   <button type="submit">ENTRAR</button>
  </form>
  </center>
</body>
</html>
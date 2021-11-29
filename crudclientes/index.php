<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM clientes";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Edicion </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="crudclientes/estilocrud.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1> REGISTRE NUEVAMENTE SUS DATOS </h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_cliente" placeholder="Espacio En Blanco">
                                    <input type="text" class="form-control mb-3" name="Doc_cliente" placeholder="N° de Documento">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="Correo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="Telefono" placeholder="Celular">
                                    <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
                                    <input type="text" class="form-control mb-3" name="clave" placeholder="Contraseña">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th> Id_cliente </th>
                                        <th> Doc_cliente </th>
                                        <th> Nombres </th>
                                        <th> Apellidos </th>
                                        <th> Email </th>
                                        <th> N° Celular</th>
                                        <th> Usuario </th>
                                        <th> Contraseña </th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_cliente']?></th>
                                                <th><?php  echo $row['Doc_cliente']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellido']?></th>
                                                <th><?php  echo $row['Correo']?></th>
                                                <th><?php  echo $row['Telefono']?></th>  
                                                <th><?php  echo $row['usuario']?></th>
                                                <th><?php  echo $row['clave']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['id_cliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_cliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <a href="interfazindex.php"><b>Regresar</b> </a>
    </body>
</html>
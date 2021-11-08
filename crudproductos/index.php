<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM crud_product";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> n_n </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>  INGRESAR LOS DATOS: </h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_productos" placeholder="Id del Producto"> 
                                    <input type="text" class="form-control mb-3" name="id_categorias" placeholder="Id de la Categoria">
                                    <input type="text" class="form-control mb-3" name="nombrep" placeholder="Nombre del Producto"> 
                                    <input type="text" class="form-control mb-3" name="stock" placeholder="Stock"> 
                                    <input type="text" class="form-control mb-3" name="valorunitario" placeholder="Valor Unitario">                               
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>




                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id del Producto</th>
                                        <th>Id de la Categoria</th>
                                        <th>Nombre del Producto</th>
                                        <th> Stock </th>
                                        <th> $Valor Unitario </th>
                                        <th></th>
                                
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_productos']?></th>
                                                <th><?php  echo $row['id_categorias']?></th>
                                                <th><?php  echo $row['nombrep']?></th>
                                                <th><?php  echo $row['stock']?></th>
                                                <th><?php  echo $row['valorunitario']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id_productos'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_productos'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
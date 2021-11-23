<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM estudiante";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Registra a tus Estudiantes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>REGISTRO ESTUDIANTES</h1>
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="type_doc" placeholder="Tipo de Documento">
                                    <input type="text" class="form-control mb-3" name="id_doc" placeholder="Numero de Documento">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="genero" placeholder="¿Eres niño o niña?">
                                    <input type="text" class="form-control mb-3" name="grado" placeholder="¿En que grado estas?">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Tipo de documento</th>
                                        <th>Numero de documento</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Genero</th>
                                        <th>Grado</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_doc']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['genero']?></th> 
                                                <th><?php  echo $row['grado']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['id_doc'] ?>" class="btn btn-info">EDITAR</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_doc'] ?>" class="btn btn-danger">ELIMINAR</a></th>                                        
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
<?php include_once 'conexion.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>agregar usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
  
        <div class="row justify-content-center mt-5">
            
                <div class="card col-6 p-0  ">
                    <div class="card-header text-center">AGREGAR USUARIO</div>
                    <div class="card-body text-center">

                        <form action="agregar.php" method="POST">
                            <div class="row form-group">
                                <label for="nombre" class="col-md-3" >Nombre</label>
                                <input type="text" name="nombre" class="form-control col-md-7 ">
                            </div>

                            <div class="row form-group">
                                <label for="apellido" class="col-md-3" >Apellido</label>
                                <input type="text" name="apellido" class="form-control col-md-7 ">
                            </div>

                            <input type="submit" value="Agregar" class="btn btn-success col-4"/>
                        </form>
                    </div>


                </div>
        </div>
    </div>

    <?php
        if(isset($_POST['nombre']) && isset($_POST['apellido'])){
            include_once 'agregar.php';
        }

    ?>


    
</body>
</html>










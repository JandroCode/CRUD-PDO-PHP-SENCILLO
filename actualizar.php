<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de actualización</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<?php

    include_once 'conexion.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

$consulta = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");

$consulta->bindParam(':id' , $id);
$consulta->execute();

if($consulta->rowCount() >=1){
    while($fila = $consulta->fetch()){ ?>

    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="card col-6 p-0">
               
                    <div class="card-header text-center">MODIFICAR USUARIO</div>

                        <div class="card-body ">
                            <form action="actualizar.php" method="POST">
                              
                                <input type="hidden" name="id"  value="<?= $fila['id']; ?>">

                                <div class="row form-group">
                                    <label for="nombre" class="col-3">Nombre</label>
                                    <input class="form-control col-md-7" type="text" name="nombre" value="<?=$fila['nombre']; ?>"/>
                                </div>

                                <div class="row form-group">
                                    <label for="apellido" class="col-3">Apellido</label>
                                    <input class="form-control col-md-7" type="text" name="apellido" value="<?=$fila['apellido']; ?>"/>
                                </div>
                                <input type="submit" value="Modificar" class="btn btn-primary col-4 offset-4"/>
                        </div>
               

                </form>
            </div>
        </div>
    </div>
 
    <?php } 
}

if($_POST){

    $actualizar = $pdo->prepare("UPDATE usuarios SET nombre = :nombre, apellido = :apellido WHERE id = :id");
    $actualizar->bindParam(':nombre', $_POST['nombre']);
    $actualizar->bindParam(':apellido',  $_POST['apellido']);
    $actualizar->bindParam(':id', $_POST['id']);

    if($actualizar->execute()){
        header('Refresh:1;URL=listado.php');
        echo '<h3 class="alert alert-success">USUARIO MODIFICADO</h3>';
    }
    else{
        header('Refresh:1;URL=listado.php');
        echo '<h3>ERROR MODIFICANDO EL USUARIO</h3>';

    }
   

}


?>

    
</body>
</html>

<?php

include_once 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$consulta = $pdo->prepare("INSERT INTO usuarios(nombre,apellido)VALUES(:nombre,:apellido)");
$consulta->bindParam(':nombre', $nombre);
$consulta->bindParam(':apellido', $apellido);

if($consulta->execute()){
    header('Refresh:1; URL=listado.php');
    echo '<h2 style="color:red">DATOS INSERTADOS...</h2>';
}
else{
    header('Refresh:1; URL=listado.php');
    echo '<h2 style="color:red">ERROR EN EL INSERTADO DE DATOS...</h2>';
    
}





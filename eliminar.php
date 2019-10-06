<?php

include_once 'conexion.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$consulta = $pdo->prepare("DELETE FROM usuarios WHERE  id = :id");
$consulta->bindParam(':id', $id);

if($consulta->execute()){
    header('Refresh:1;URL=listado.php');
    echo '<h2 style="color:red">USUARIO ELIMINADO...</h2>';
}
else{
    header('Refresh:1;URL=listado.php');
    echo '<h2 style="color:red">ERROR AL ELIMIINAR AL USUARIO...</h2>';

}


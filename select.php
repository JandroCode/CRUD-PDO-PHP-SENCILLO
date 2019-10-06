<?php

include_once 'conexion.php';

$consulta = $pdo->prepare("SELECT * FROM usuarios");
$consulta->execute();

if($consulta->rowCount()>=1){
    while($fila = $consulta->fetch() ){ ?>
        <tr>
            <td><?=$fila['nombre'] ?></td>
            <td><?=$fila['apellido'] ?></td>
            <td>
                <?php echo "<a href='actualizar.php?id=".$fila['id']."'"?>>Actualizar  |</a>
                <?php echo "<a href='eliminar.php?id=".$fila['id']."'" ?> >Eliminar</a>
            </td>
        </tr>
     
    <?php }

}
else{
    echo 'No hay datos';
}


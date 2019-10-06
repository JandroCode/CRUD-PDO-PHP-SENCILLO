<?php

try{

$pdo = new PDO('mysql:host=localhost;dbname=pdocrud;charset=utf8;port=3310','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo 'Error de conexión<br>' . $e->getMessage();
}

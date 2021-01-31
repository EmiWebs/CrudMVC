<?php
    include ('conectar.php');
    $base= Conectar::conexion();

    $id = $_GET['id'];
    $conexion = $base->query("DELETE FROM pruebas.datos_usuarios WHERE id = '$id'"); // Aca ejecutamos la consulta con query
    header('location:../index.php');//Aca se usa ../ para salir de Modelo e ir al index

?>
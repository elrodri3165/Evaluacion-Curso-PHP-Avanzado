<?php

require 'conexion.php';

$unidad = $_POST['unidad'];

$fecha = $_POST['fecha'];

if (isset ($unidad, $fecha)){
    $query ="INSERT INTO `clases`(`id_clases`, `unidad`, `fecha`) VALUES (null, '$unidad', '$fecha')";
    $resultado= mysqli_query ($conexion, $query);
    if ($resultado==true){
        mysqli_close ($conexion);
        header ('location:../ver_clases.php');
    }
    else {
        echo 'algo salio mal';
        echo $query;
        echo mysql_error($conexion);
        mysqli_close ($conexion);
    }
}
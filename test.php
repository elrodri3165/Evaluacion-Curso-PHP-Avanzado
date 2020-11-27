<?php

$query = "SELECT *FROM compras";

include 'functions/conexion.php';

$consulta = mysqli_query($conexion, $query);

var_dump($consulta);

if ($consulta ->num_rows==0){
    echo 'ok';
}
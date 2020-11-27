<?php

$conexion= mysqli_connect("localhost","root","","curso_php_avanzado") ;

if ($conexion === false) {
die ("Error al conectar a la base de datos");
}
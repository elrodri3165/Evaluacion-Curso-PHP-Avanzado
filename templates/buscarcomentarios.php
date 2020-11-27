<?php
$archivo = "comentarios.txt";

//encontre en php.net que poniendo un @antes de la funcion fonpen evitamos el warning para cuando no ecuentra un arhivo.

if (@fopen($archivo, "r")==true){
    $abrirarchivo = fopen($archivo, "r");
    
    $vector = file($archivo);

    $cantidad = count($vector);

    foreach ($vector as $lineas){
            echo "<p>".$lineas."</p>";
            }
}
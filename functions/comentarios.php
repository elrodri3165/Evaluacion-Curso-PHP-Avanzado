<?php

$apellidoynombre = $_POST['apellidoynombre'];


$email = $_POST['email'];


$comentario = $_POST['comentario'];


$fecha = $_POST['fecha'];


if (isset ($_POST['apellidoynombre'], $_POST['email'], $_POST['comentario'], $_POST['fecha'])){
    $comentario_completo= $fecha." El usario: ".$apellidoynombre.", Email: ".$email."......".$comentario."."."\r\n";
    $archivo= fopen('../comentarios.txt','a+');
    fputs ($archivo, $comentario_completo);
    fclose ($archivo);
    header ("location: ../unidad3.php");
    //echo $comentario_completo;
}
else{
    header ("location: ../unidad3.php");
}
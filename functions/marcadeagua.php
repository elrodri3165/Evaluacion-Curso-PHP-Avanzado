<?php

$archivo = $_GET['archivo']; //setear la ruta del archivo
//al tomar el nombre del archivo por get puedo reutilizar el script para futuros casos.

$ruta= "../img/";

$foto = $ruta.$archivo;

$marcadeagua = "../img/marca.png"; //se configura la marca de agua
$imagen = imagecreatefrompng($marcadeagua);

//sacado de php.net
//dst_x
//Coordenada x del punto de destino.

//dst_y
//Coordenada y del punto de destino.

//src_x
//Coordenada x del punto de origen.

//src_y
//Coordenada y del punto de origen.

//src_w
//Ancho original.

//src_h
//Altura original.


$ancho = imagesx($imagen); //ancho imagen original
$alto = imagesy($imagen); //alto imagen original

$altoagua =       250; //para setear donde va la marca
$anchoagua =      250; //para setear donde va la marca
$altoorigen =     0; //de donde toma el origen
$anchoorigen =    0; //de donde toma el origen

$extension = substr($foto, -3);
$extensionjpeg= substr($foto, -4);

$extension = strtolower($extension); //saco la mayuscula aca para no sacarla 4 veces en cada if
$extensionjpeg = strtolower($extensionjpeg); //saco la mayuscula aca para no sacarla 4 veces en cada if


if(isset($_GET['archivo'])){
    if($extension=='jpg'){
        $imagen2 = imagecreatefromjpeg($foto);
    
        imagecopy($imagen2, $imagen, $anchoagua, $altoagua,$altoorigen,$anchoorigen, $ancho, $alto);

        header('Content-type: imange/jpeg');
        imagejpeg($imagen2);   
    }
    else if($extension=='gif'){
        $imagen2 = imagecreatefromgif($foto);
    
        imagecopy($imagen2, $imagen, $anchoagua, $altoagua,$altoorigen,$anchoorigen, $ancho, $alto);

        header('Content-type: imange/gif');
        imagegif($imagen2); 
    }else if($extension=='png'){
        $imagen2 = imagecreatefrompng($foto);
    
        imagecopy($imagen2, $imagen, $anchoagua, $altoagua,$altoorigen,$anchoorigen, $ancho, $alto);

        header('Content-type: imange/png');
        imagepng($imagen2); 
    }
    else if($extensionjpeg=='jpeg'){
        $imagen2 = imagecreatefromjpeg($foto);
    
        imagecopy($imagen2, $imagen, $anchoagua, $altoagua,$altoorigen,$anchoorigen, $ancho, $alto);

        header('Content-type: imange/jpeg');
        imagejpeg($imagen2); 
    }
    else{
        echo'Este script es compatible unicamente con extensiones GIF, PNG, JPG o JPEG';
    }
}

//agregue un cuarto if por si la extension es jpeg, he visto que algunos archivos la tienen asi.
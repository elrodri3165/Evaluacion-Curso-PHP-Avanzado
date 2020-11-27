<?php
session_start();
header("Content-type: image/jpeg");

$imagen= imagecreatetruecolor(80,40);

$fondo = imagecolorallocate ($imagen, 220, 220, 220);

$texto = imagecolorallocate ($imagen, 5, 250, 119);

imagestring ($imagen, 5, 25, 10, $_SESSION["captcha"], $texto); imagejpeg($imagen);
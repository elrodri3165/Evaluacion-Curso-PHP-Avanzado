<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

mb_internal_encoding('UTF-8');

mb_http_output('UTF-8');

setlocale(LC_TIME, 'es_ES.UTF8');

//encontre que las sentencias el medio nos ayudan a trabajar con utf tanto en el servidor como en el navegador
require 'constantes.php';
require 'clases/Conexion_poo.php';
require 'clases/Productodb.php';
require 'clases/Carrito.php';
<?php
require 'clases/Conexion_poo.php';
require 'clases/Productodb.php';
require 'clases/Carrito.php';
require 'constantes.php';

session_start();

if (isset ($_GET['codigo'])){
   $codigo = $_GET['codigo'];
   $resultado = $_SESSION['carrito']->Agregar_carrito($codigo);
   }

header ('Location: ../unidad7.php');
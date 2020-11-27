<?php

require'config.php';

if (isset ($_POST['dia'], $_POST['mes'], $_POST['anio'])){
    $fecha = $_POST['dia']."-".$_POST['mes']."-".$_POST['anio'];
    date($fecha);
    $timestamp= strtotime($fecha);
    
    $hoy =date("U");
                
    $diferencia= ($timestamp - $hoy)/86400;
    
    $diferencia =intval($diferencia);
    if ($diferencia>=1){
        header ("location:../unidad2.php?diferencia=$diferencia");
    }else{
        header ("location:../unidad2.php?error=");
    }          
    }
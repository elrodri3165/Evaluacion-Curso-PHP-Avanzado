<?php
session_start();

if (isset($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['consulta'],$_POST['captcha'])){
    
    $captcha = $_POST['captcha'];
    
    if ($captcha === $_SESSION['captcha']){
        
        require 'conexion.php';
        
        $nombre = $_POST['nombre'];
    
        $apellido = $_POST['apellido'];
    
        $email = $_POST['email'];
        
        $consulta = $_POST['consulta'];
        
        $query = "INSERT INTO consultas (apellido, nombre, email, consulta) VALUES ('$apellido', '$nombre', '$email', '$consulta')";
        
        mysqli_query ($conexion, $query);
        
        mysqli_close($conexion);
        
        header('Location: ../unidad5.php?ok');
        
    }
    else{
        header('Location: ../unidad5.php?eror');
    }
    
}
else{
    header('Location: ../unidad5.php');
}
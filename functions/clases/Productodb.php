<?php

class Productosdb{
    private $db;
    
    public $codigo;
    public $producto;
    public $precio;
    public $descripcion;
    
    
    public function __construct($base){
        $this->db = $base;
    }
    
    
    public function Cargarproducto($nombre, $descripcion, $precio){
        $respuesta = $this ->db ->enviarQuery("INSERT INTO productos(DEFAULT, '$nombre', '$descripcion', $precio)");
        
        if(!$respuesta){
            echo $this->db->error;
            return false;
        }else{
            return $respuesta;
        }
        
    } 
    
    public function Traerproducto($id){
        
        $respuesta = $this -> db ->enviarQuery("SELECT * FROM productos WHERE codigo=$id");    
        
        if(!$respuesta){
            echo $this->db->error;
            return false;
        }else{
            return $respuesta;
        }
    }
    
    
    public function Traerproductos(){
        
        $respuesta = $this -> db ->enviarQuery("SELECT * FROM productos");
        
        if(!$respuesta){
            echo $this->db->error;
            return false;
        }else{
            return $respuesta;
        }
    }
    
}
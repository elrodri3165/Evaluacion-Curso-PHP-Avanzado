<?php

class Carrito{
    
    private $cantidad;
    
    private $total;
    
    private $productos;
    
    
    public function __construct(){
        
            $this->cantidad=0;
        
            $this->total=0;
        
            $this->productos=array();
        }
        


    public function Agregar_carrito($codigo){
        
        $dbase = new Conexion(SERVIDOR, USUARIO, CLAVE, BASE);
        
        $producto = new Productosdb($dbase);
        
        $traertotal = $producto->Traerproducto($codigo);
        
        $this->cantidad= $this->cantidad+1;
        
        foreach ($traertotal as $traer){
            $codigo_nuevo = $traer['codigo'];
        
            array_push($this->productos, $codigo_nuevo);
        
            $this->total = $this->total + intval($traer['precio']);
        }
        
    }
    
    
    public function Mostrar_carrito(){
        
        echo 'Total de productos= '.$this->cantidad.'<br>';
        
        echo 'Total de la compra= $'.$this->total.'<br>';
        
        echo 'Productos:<br>';
            foreach ($this->productos as $oneproducto){
                echo $oneproducto.'<br>';
            }
        
    }
    
    
    
    
    
}
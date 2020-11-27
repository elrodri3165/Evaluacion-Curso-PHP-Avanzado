<?php

class usuarios{
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;
    
    public function __construct($nane, $surname, $date){
        $this->nombre=$nane;
        $this->apellido=$surname;
        $this->fecha_nacimiento=$date;
        $this->imprime_caracteristicas();
    }
    
    private function imprime_caracteristicas(){
        echo 'Nombre: '.$this->nombre.'<br>'; 
        echo 'Apellido: '.$this->apellido.'<br>';
        $this->calcularedad();
        //echo 'Fecha de nacimiento: '.$this->fecha_nacimiento.'<br>';
    }
    
    
    private function calcularedad(){
        $timestamp= strtotime($this->fecha_nacimiento);
        $hoy =date("U");    
        $diferencia= (($hoy - $timestamp)/86400)/365;
        $edad = intval($diferencia);
        echo "Su edad es: ".$edad."años.";
    }
}
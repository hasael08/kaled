<?php

class Persona{
    public $nombre; 
    public $apellido;
    public $edad; 
    public $profesion; 
    public $nacionalidad;  

    public function __construct($nombre, $apellido, $edad, $profesion, $nacionalidad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->profesion = $profesion;
        $this->nacionalidad = $nacionalidad;
    }
    
    function __get($propiedad){
        if(property_exists($this, $propiedad)){
            return $this->$propiedad; 
        } else {
            return "la propiedad '$propiedad' no existe en esta clase";
        }
    }
    
    function __set($propiedad, $valor){
        if(property_exists($this, $propiedad)){
            $this->$propiedad = $valor;
        } else {
            return "la propiedad '$propiedad' no existe en esta clase";
        }
    }
    
    function __toString() {
        return "el señor: $this->nombre de apellidos $this->apellido tiene $this->edad años y es de profesión $this->profesion y nacionalidad es $this->nacionalidad";
    }
}

$kaled = new Persona("Andre Kaled", "Adrianzen Cordova", 20, "Estudiante", "Peruano");
print $kaled;
?>

<?php

// Clase base "Vehiculo"
class Vehiculo {
    protected $marca;
    protected $modelo;
    protected $anioFabricacion;
    protected $color;
    protected $precio;

    // Constructor de la clase base
    public function __construct($marca, $modelo, $anioFabricacion, $color, $precio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anioFabricacion = $anioFabricacion;
        $this->color = $color;
        $this->precio = $precio;
    }

    // Método para mostrar información básica del vehículo
    public function mostrarInformacion() {
        echo "Marca: $this->marca, Modelo: $this->modelo, Año de Fabricación: $this->anioFabricacion, Color: $this->color, Precio: $this->precio<br>";
    }
}

// Clase derivada "Automovil" que hereda de "Vehiculo"
class Automovil extends Vehiculo {
    private $cilindrada;

    // Constructor de la clase derivada
    public function __construct($marca, $modelo, $anioFabricacion, $color, $precio, $cilindrada) {
        parent::__construct($marca, $modelo, $anioFabricacion, $color, $precio);
        $this->cilindrada = $cilindrada;
    }

    // Método específico para automóviles
    public function arrancar() {
        echo "El automóvil $this->marca $this->modelo ha arrancado.<br>";
    }

    // Método para mostrar información específica de automóviles
    public function mostrarInformacionAutomovil() {
        parent::mostrarInformacion(); // Llama al método de la clase base
        echo "Cilindrada: $this->cilindrada cc<br>";
    }
}

// Crear un objeto de la clase Automovil
$miAutomovil = new Automovil("Toyota", "Corolla", 2022, "Rojo", 25000, 1600);

// Acceder a métodos y atributos de la clase base
$miAutomovil->mostrarInformacion();

// Acceder a métodos y atributos específicos de la clase derivada
$miAutomovil->arrancar();
$miAutomovil->mostrarInformacionAutomovil();
?>

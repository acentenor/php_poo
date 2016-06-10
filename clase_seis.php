<?php
  //Clase 6 - Herencia
  class Vehiculo {
    //atributos
    public $motor = false;
    public $marca;
    public $color;

    //métodos
    public function estado() {
      if ($this->motor) {
        echo "El motor está encendido<br>";
      } else {
        echo "El motor está apagado<br>";
      }
    }

    public function encender() {
      if ($this->motor) {
        echo "Cuidado el motor ya está prendido<br>";
      } else {
        echo "El motor ahora está encendido<br>";
        $this->motor = true;
      }
    }
  }

  class Moto extends Vehiculo {

    public function estadoMoto() {
      $this->estado();
    }
  }

  class CuatriMoto extends Moto {

  }

  $vehiculo = new Vehiculo();
  $vehiculo->estado();
  $vehiculo->encender();
  $vehiculo->estado();

  $moto = new Moto();
  $moto->estadoMoto();

  $cmoto = new CuatriMoto();
  $cmoto->estado();
?>

<?php
  /*Clase 9 - Clases y métodos abstractos*/
  abstract class Molde {

    abstract public function ingresarNombre($nombre);
    abstract public function obtenerNombre();
  }

  class Persona extends Molde {
    //atributos
    private $mensaje = "Hola mundo";
    private $nombre;

    //métodos
    public function mostrar() {
      print $this->mensaje;
    }

    public function ingresarNombre($nombre, $username = "AC") {
      $this->nombre = $nombre . $username;
    }

    public function obtenerNombre() {
      print $this->nombre;
    }
  }

  $obj = new Persona();
  $obj->ingresarNombre("Alvaro");
  $obj->obtenerNombre();

?>

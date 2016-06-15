<?php
  //Clase once traits
  trait Persona2 {

    public $nombre;

    public function mostrarNombre() {
      echo $this->nombre;
    }

    abstract function asignarNombre($nombre);
  }

  trait Trabajador {
    protected function Hola() {
      echo "Hola del trabajador";
    }
  }

  class Persona {
    use Persona2, Trabajador;

    public function asignarNombre($nombre) {
      $this->nombre = $nombre;
    }

    public function Hola() {
      echo "Hola de la clase";
    }
  }

  $persona = new Persona();
  $persona->asignarNombre("Sin Nombre");
  $persona->mostrarNombre();
  $persona->Hola();

?>

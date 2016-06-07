<?php
  interface Auto {
      public function encender();
      public function apagar();
  }

  interface gasolina extends Auto {
    public function vaciarTanque();
    public function llenarTanque($cant);
  }

  class Deportivo implements gasolina {

    //atributos
    private $estado = false;
    private $tanque = 0;

    //métodos
    public function estado() {
      if ($this->estado) {
        print "El auto está encendido y tiene " . $this->tanque . " de litro en el tanque. <br>";
      } else {
        print "El auto está apagado <br>";
      }
    }

    public function encender() {
      if ($this->estado) {
        print "No puedes encender el auto dos veces <br>";
      } else {
        if ($this->tanque <= 0) {
          print "No puedes encender al auto porque el tanque está vacío <br>";
        } else {
            print "Auto encendido <br>";
            $this->estado = true;
        }
      }
    }

    public function apagar() {
      if ($this->estado) {
          print "Auto apagado <br>";
          $this->estado = false;
      } else {
          print "El auto ya está apagado <br>";
      }
    }

    public function vaciarTanque() {
      $this->tanque = 0;
    }

    public function llenarTanque($cant) {
      $this->tanque = $cant;
    }

    public function usar($km) {
      if ($this->estado) {
        $reducir = $km / 3;
        $this->tanque = $this->tanque - $reducir;
        if ($this->tanque <= 0) {
          $this->estado = false;
        }
      } else {
          print "El auto está apagado y no se puede usar hasta llenar tanque <br>";
      }
    }
  }

  $obj = new Deportivo();
  $obj->llenarTanque(100);
  $obj->encender();
  $obj->usar(20);
  $obj->estado();

?>

<?php
    class Persona {
        //atributos
        public $nombre = "Alvaro";
        //métodos
        public function hablar($mensaje) {
            echo $mensaje;
        }
    }

    $persona = new Persona();
    echo $persona->nombre;
    $persona->hablar("Hola mundo");
?>

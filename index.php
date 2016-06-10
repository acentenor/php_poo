<?php
    //(clase 1 es introducción) clase 2 - Clases y objetos 
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

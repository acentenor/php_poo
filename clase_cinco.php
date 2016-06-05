<?php
    
    class Facebook{
        
        //atributos
        public $nombre;
        public $edad;
        private $pass;
        
        //métodos
        public function __construct($nombre, $edad, $pass){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pass = $pass;
        }
        
        public function verInformacion(){
            echo "Nombre: " . $this->nombre . "<br>";
            echo "Edad: " . $this->edad . "<br>";
            $this->cambiarPass("4321");
            echo "Password: " . $this->pass;
        }
        
        private function cambiarPass($pass){
            $this->pass = $pass;
        }
    }

    $facebook = new Facebook("Alvaro", 34, "1234");
    $facebook->verInformacion();
    //error porque no se puede acceder a un atributo private
    //echo $facebook->pass;
    
    //error porque no se puede acceder a un método private
    //$facebook->cambiarPass("54321");
?>
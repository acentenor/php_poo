<?php
  //Clase 4 - Construct y destruct
    class Loteria{

        //atributos
        public $numero;
        public $intentos;
        public $resultado = false;

        //métodos
        public function __construct($numero, $intentos){
            $this->numero = $numero;
            $this->intentos = $intentos;
        }

        public function sortear(){
            $min = $this->numero / 2;
            $max = $this->numero * 2;
            for($i = 0; $i < $this->intentos; $i++){
                $num = rand($min,$max);
                self::intentos($num);
            }
        }

        public function intentos($num){
            if($num == $this->numero){
                echo "<b>" . $num . " == " . $this->numero . "</b><br>";
                $this->resultado = true;
            } else {
                echo $num . " != " . $this->numero . "<br>";
            }
        }

        public function __destruct(){
            if($this->resultado){
                echo "Felicidades, has ganado en " . $this->intentos . " intentos";
            } else{
                echo "No has ganado en " . $this->intentos . " intentos";
            }
        }
    }

    $loteria = new Loteria(18,20);
    $loteria->sortear();
?>

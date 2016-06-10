<?php
  //métodos y atributos estáticos
  class Pagina {
    //atributos
    public $nombre = "Código Facilito";
    public static $url = "www.codigofacilito.com";

    //métodos
    public function bienvenida() {
      echo "Bienvenidos a <b> " . $this->nombre . "</b> la página es <b> " . self::$url . "</b><br>";
    }

    public static function bienvenida2(){
      echo "Bienvenidos a " . self::$url . "<br>";
    }
  }

  class Web extends Pagina {

  }

  $pagina = new Pagina();
  $pagina->bienvenida();

  Pagina::bienvenida2();

  Web::bienvenida2();
?>

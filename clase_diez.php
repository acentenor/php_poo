<?php
  //clase diez uso de autoload
  
  function autoload($clase) {
    include "clases/" . $clase . ".php";
  }
  spl_autoload_register('autoload');

  Persona::mostrar("Hola Mundo");
  Auto::mostrar("Hola Mundo");

?>

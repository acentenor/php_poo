<?php
  //Clase doce namespaces (así funcionan los frameworks (mas o menos))

  spl_autoload_register(function($clase){

    $ruta = "api/" . str_replace("\\", "/", $clase) . ".php";

    if (is_readable($ruta)) {
      require_once $ruta;
    } else {
        echo "El archivo no existe";
      }

  });

  Models\Persona::hola();
  Controllers\PersonasControllers::hola();

?>

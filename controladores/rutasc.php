<?php

class rutascontrolador{
    
    public function plantilla(){

        include "vistas/plantilla.php";
    }

    public function rutas(){

        if (isset($_GET["ruta"])){
    
            $rutas = $_GET["ruta"];
        }else{
            $rutas = "index";
        }
    
        $respuesta = modelo::rutasmodelo($rutas);
    
        include $respuesta;
    }
}




?>
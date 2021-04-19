<?php

class modelo{

    static public function rutasmodelo($rutas){

        if($rutas == "ingreso" || $rutas == "registrar" || $rutas == "empleados" || $rutas == "editar" || $rutas == "salir"){

            $pagina = "vistas/modulos/".$rutas.".php";
            
        }else if($rutas == "index"){
                
                $pagina = "vistas/modulos/ingreso.php";
        }
        else{

                $pagina = "vistas/modulos/ingreso.php";
        }
        return $pagina;
    }

    
}

?>
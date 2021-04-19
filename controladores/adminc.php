<?php

class adminc{

    static public function ingresoc(){

        if(isset($_POST["usuarioI"])){

            $datosc = array("usuario"=>$_POST["usuarioI"], "clave"=>$_POST["claveI"]);

            $tablaBD = "administradores";

            $respuesta = adminm::ingresom($datosc, $tablaBD);

            if($respuesta["usuario"]==$_POST["usuarioI"] && $respuesta["clave"]==$_POST["claveI"]){

                session_start();

                $_SESSION["Ingreso"] = true;

                header("location:index.php?ruta=empleados");

            }else{
                echo "ERROR AL INGRESAR";
            }

        }
    }
}

?>
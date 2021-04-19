<?php

require_once "conexionBD.php";

class adminm extends conexionBD{

    static public function ingresom($datosc, $tablaBD){

        $pdo = conexionBD::cbd()->prepare("SELECT usuario, clave FROM $tablaBD WHERE usuario = :usuario");

        $pdo -> bindParam(":usuario", $datosc["usuario"], PDO::PARAM_STR);

        $pdo -> execute();
 
        return $pdo->fetch();

        $pdo->close();
    }
}

?>
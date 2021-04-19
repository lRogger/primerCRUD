<?php

    class conexionBD{

        static public function cbd(){

            $bd = new PDO("mysql:host=localhost;dbname=crud","root","");

            return $bd;
        }
    }

?>
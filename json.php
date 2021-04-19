<?php

header('Content-Type: application/json');

require_once "controladores/empleadosc.php";
require_once "modelos/empleadosm.php";
require_once "modelos/conexionBD.php";

$tablaBD = "empleados";
$pdo = conexionBD::cbd()-> prepare("SELECT * FROM $tablaBD");
$pdo -> execute();
$datos = $pdo->fetchALL();


echo json_encode($datos);



?>
<?php

require_once "controladores/rutasc.php";
require_once "controladores/adminc.php";
require_once "controladores/empleadosc.php";

require_once "modelos/rutasm.php";
require_once "modelos/adminm.php";
require_once "modelos/empleadosm.php";

$rutas = new rutascontrolador();
$rutas -> plantilla();

?>
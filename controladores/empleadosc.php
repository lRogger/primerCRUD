<?php

class EmpleadosC{

    //Registrar los empleados
    public function RegistrarEmpleadosC(){

        if(isset($_POST["nombreR"])){

            $datosC = array("nombre"=>$_POST["nombreR"], "apellido"=>$_POST["apellidoR"],
             "email"=>$_POST["emailR"], "puesto"=>$_POST["puestoR"], "salario"=>$_POST["salarioR"]);

            $tablaBD = "empleados";

            $respuesta = empleadosm::RegistrarEmpleadosM($datosC, $tablaBD);

            if($respuesta == "Bien"){

                header("location:index.php?ruta=empleados");

            }else{

                echo "error";
            }
        }
    }

    //Mostrar los empleados
    public function MostrarEmpleadosC(){

        $tablaBD = "empleados";
        $respuesta = empleadosm::MostrarEmpleadosM($tablaBD);

        foreach($respuesta as $key => $value){

            echo '<tr>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["apellido"].'</td>
                    <td>'.$value["email"].'</td>
                    <td>'.$value["puesto"].'</td>
                    <td>'.$value["salario"].'</td>
                    <td><a href="index.php?ruta=editar&id='.$value["id"].'"><button>Editar</button></a></td>


                    <td><a href="index.php?ruta=empleados&idB='.$value["id"].'"><button>Borrar</button></a></td>
                </tr>';
        }
    }



    //Editar Empleado
    public function EditarEmpleadoC(){

        $datosC = $_GET["id"];
        $tablaBD = "empleados";

        $respuesta  = empleadosm::EditarEmpleadoM($datosC, $tablaBD);

        echo '<input type="hidden" name="idE" value="'.$respuesta["id"].'">

            <input type="text" placeholder="Nombre" value="'.$respuesta["nombre"].'" name="nombreE" required>

            <input type="text" placeholder="Apellido" value="'.$respuesta["apellido"].'" name="apellidoE" required>

            <input type="email" placeholder="Email" value="'.$respuesta["email"].'" name="emailE" required>

            <input type="text" placeholder="Puesto" value="'.$respuesta["puesto"].'" name="puestoE" required>

            <input type="text" placeholder="Salario" value="'.$respuesta["salario"].'" name="salarioE" required>

            <input type="submit" value="Actualizar">';
    }

    //Actualizar empleado
    public function ActualizarEmpleadoC(){

        if(isset($_POST["nombreE"])){

            $datosC = array("id"=>$_POST["idE"],"nombre"=>$_POST["nombreE"], "apellido"=>$_POST["apellidoE"], "email"=>$_POST["emailE"],
            "puesto"=>$_POST["puestoE"], "salario"=>$_POST["salarioE"]);

            $tablaBD = "empleados";
            $respuesta = empleadosm::ActualizarEmpleadoM($datosC, $tablaBD);

            if($respuesta == "Bien"){

                header("location:index.php?ruta=empleados");

            }else{

                echo "error";
            }

        }
    }

    //Eliminar Empleado
    public function BorrarEmpleadoC(){

        if(isset($_GET["idB"])){

            $datosC = $_GET["idB"];

            $tablaBD = "empleados";
            $respuesta = empleadosm::BorrarEmpleadom($datosC, $tablaBD);
            
            if($respuesta == "Bien"){

                header("location:index.php?ruta=empleados");

            }else{

                echo "error";
            }
        }
    }
}

?>
<?php

    require_once "conexionBD.php";

    class empleadosm extends conexionBD{


        //Registrar empleados
        static public function RegistrarEmpleadosM($datosC, $tablaBD){

            
            $pdo = conexionBD::cbd()->prepare("INSERT INTO $tablaBD (nombre, apellido, email, puesto, salario) 
            VALUES (:nombre, :apellido, :email, :puesto, :salario)");

            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo -> bindParam(":email", $datosC["email"], PDO::PARAM_STR);
            $pdo -> bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);
            $pdo -> bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);
            

            if($pdo -> execute()){

                return "Bien";
            }else{

                return "Error";
            }
                
            

            
        }

        //Mostrar empleados
        static public function MostrarEmpleadosM($tablaBD){

            $pdo = conexionBD::cbd()-> prepare("SELECT * FROM $tablaBD");
            $pdo -> execute();
            return $pdo->fetchALL();
            $pdo -> close();

        }

        //Editar empleado
        static public function EditarEmpleadoM($datosC, $tablaBD){

            $pdo = conexionBD::cbd()->prepare("SELECT * FROM $tablaBD WHERE id = :id ");
            $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);
            $pdo -> execute();
            return $pdo -> fetch();
            $pdo -> close();
        }

        //Actualizar Empleado
        static public function ActualizarEmpleadoM($datosC, $tablaBD){

            $pdo = conexionBD::cbd()->prepare("UPDATE $tablaBD SET nombre = :nombre, apellido = :apellido, email = :email,
            puesto = :puesto, salario = :salario WHERE id = :id");

            $pdo ->bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo ->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo ->bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo ->bindParam(":email", $datosC["email"], PDO::PARAM_STR);
            $pdo ->bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);
            $pdo ->bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);

            if($pdo -> execute()){

                return "Bien";
            }else{

                return "Error";
            }

            $pdo -> close();

        }

        //Eliminar Empleado
        static public function BorrarEmpleadoM($datosC, $tablaBD){

            $pdo = conexionBD::cbd()->prepare("DELETE FROM $tablaBD WHERE id = :id");
            $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

            if($pdo -> execute()){

                return "Bien";
            }else{

                return "Error";
            }

            $pdo -> close();
        }
    }


?>
<?php
    require_once "conexion.php";


    function select_empleados(){
        
        $sql = "SELECT * FROM users";

        $query = mysqli_query( connect() , $sql);
        
        return $query;
    }

    function select_by_id($id){

        $sql = "SELECT * FROM users WHERE id = '$id'";
        
        $query = mysqli_query( connect(), $sql);
        
        $row = mysqli_fetch_assoc($query);

        return $row;
    }


    function nuevo_empleado($array){
        
        $sql = "INSERT INTO users VALUES ('' , '$array[0]' , '$array[1]' , '$array[2]' , '$array[3]' , '$array[4]' , '$array[5]' , 1 , '$array[6]')";
    
        if(mysqli_query( connect(), $sql)){
            Header("Location: ../Views/index.php");
        }else{
            echo "Error al insertar datos nuevos.";
        }
    }

    function update_empleado($array){
        
        $sql = "UPDATE users SET id='$array[0]', num_empleado='$array[1]', nombre='$array[2]', primer_apellido='$array[3]', segundo_apellido='$array[4]', departamento = '$array[5]', puesto = '$array[6]', estado = '$array[7]', nacimiento = '$array[8]' WHERE id = '$array[0]'";

        $result = mysqli_query(connect(), $sql);

        if ($result) {
            Header("Location: ../Views/index.php");
        }else{
            echo "Error al actualizar";
        }
    }

    function delete_empleado($id){
        
        $sql = "DELETE FROM users WHERE id='$id'";
        $query = mysqli_query(connect(), $sql);

        if($query){
            Header("Location: ../Views/index.php");
        }else{
            echo "No se pudo eliminar el registro."; 
        }
    }
   
?>
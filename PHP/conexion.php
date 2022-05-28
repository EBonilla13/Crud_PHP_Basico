<?php

    function connect(){

        $serve = "localhost";
        $database = "crud_php";
        $user = "root";
        $password = "";

        $conn = mysqli_connect($serve, $user, $password, $database);

        if(!$conn){
            die("Conexion fallida". mysqli_connect_error());
            
        }else{
            // mysqli_select_db($conn, $database);
            //  echo "Exito";
            return $conn;
        }
    }

?>
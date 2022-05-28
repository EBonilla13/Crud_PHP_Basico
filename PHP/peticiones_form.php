<?php
    require('acciones_db.php');
    
    if($_POST){
        
        switch ($_POST['accion']) {
            case 'nuevo':
                    // var_dump($_POST);

                    $data = array($_POST['num_empleado'], $_POST['nombre'], $_POST['primer_apellido'], $_POST['segundo_apellido'], $_POST['departamento'], $_POST['puesto'], $_POST['nacimiento'] );
                    
                    nuevo_empleado($data);
                break;

            case 'update':

                    $data = array($_POST['id'],$_POST['num_empleado'],$_POST['nombre'],$_POST['primer_apellido'],$_POST['segundo_apellido'],$_POST['departamento'],$_POST['puesto'],$_POST['estado'],$_POST['nacimiento']);

                    // print_r($data);

                    update_empleado($data);

                break;

            default:
                echo "Error de peticion POST";
                break;
        }
        
    }elseif ($_GET) {

        if($_GET['accion'] = 'delete'){
        
            $id = $_GET['id'];
            delete_empleado($id);
        }
    }
?>
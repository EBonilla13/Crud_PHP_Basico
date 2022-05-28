<?php
    require_once("../PHP/acciones_db.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilos.css">
    <title>CRUD BASICO DE PHP</title>
</head>

<body>
    <div class="cont-padre">
        <div class="cont-hijo-form">
            <section><h2>Formulario para empleado.</h2></section>
            <form action="../PHP/peticiones_form.php" method="POST">
                <div class="input-form">
                    <input type="text" name="accion" value="nuevo" hidden>
                    <label for="num_empleado">Numero de empleado</label>
                    <input type="number" name="num_empleado"  required>
                </div>
                <div class="input-form">
                    <label for="nombre">Nombre(s)</label>
                    <input type="text" name="nombre"  required>
                </div>
                <div class="input-form">
                    <label for="primer_apellido">Apellido paterno</label>
                    <input type="text" name="primer_apellido" required>
                </div>
                <div class="input-form">
                    <label for="segundo_apellido">Apellido materno</label>
                    <input type="text" name="segundo_apellido"  required>
                </div>
                <div class="input-form">
                    <label for="departamento">Departamento / Area</label>
                    <input type="text" name="departamento"  required>
                </div>
                <div class="input-form">
                    <label for="puesto">Puesto inicial</label>
                    <input type="text" name="puesto"  required>
                </div>
                <div class="input-form">
                    <label for="nacimiento">fecha de nacimiento</label>
                    <input type="date" name="nacimiento"  required>
                </div>
                <div>
                    <input type="submit" value="Agregar">
                </div>
            </form>
        </div>
        <div class="cont-hijo-table">
            <h2>Lista de empleados.</h2>

            <?php if(empty(select_empleados())){
                echo '<p>No hay datos que mostrar.</p>';
            }else{
            ?>
            <table class="table">
                <thead class="columna">
                    <tr>
                        <th>Num. Empleado</th>
                        <th>Nombre</th>
                        <th>Departamento / Area</th>
                        <th>Puesto</th>
                        <th>Estado</th>
                        <th>Fecha de Nacimiento</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = select_empleados();
                         while($row = mysqli_fetch_array($query)){ 
                    ?>
                    
                    <tr>
                        <th><?php echo $row['num_empleado'] ?></th>
                        <th> <a class="link-update" href="update_empleado.php?id=<?php echo $row['id']?>"><?php echo $row['nombre']." ".$row['primer_apellido']." ".$row['segundo_apellido']?></a></th>
                        <th><?php echo $row['departamento'] ?></th>
                        <th><?php echo $row['puesto'] ?></th>
                        <th><?php echo $row['estado']? 'Activo': 'Inactivo' ?></th>
                        <th><?php echo $row['nacimiento'] ?></th>
                        <th><a class="link-delete" href="../PHP/peticiones_form.php?id=<?php echo $row['id']?>&accion=delete"> Eliminar</a></th>
                    </tr>
                    <?php
                         }
                    ?>
                </tbody>
            </table>
            <?php 
            }
            ?>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilos.css">
    <title>Update</title>
</head>
<body>
<div class="cont-padre">
        <div class="form">
                <?php
                        require_once "../PHP/acciones_db.php";
                        // print_r(select_by_id());
                        $row = select_by_id($_GET['id']); 
                ?>
            <section><h2>Actualizar datos.</h2></section>
            <form action="../PHP/peticiones_form.php" method="POST">
                <div class="input-form">
                    <input type="text" name="accion" value="update" hidden>
                    <input type="number" name="id" value="<?php echo $row['id'] ?>" hidden>
                    <label for="num_empleado">Numero de empleado</label>
                    <input type="number" name="num_empleado" value="<?php echo $row['num_empleado'] ?>" readonly>
                </div>
                <div class="input-form">
                    <label for="nombre">Nombre(s)</label>
                    <input type="text" name="nombre" placeholder="Ingrese su nombre" readonly value="<?php echo $row['nombre']?>">
                </div>
                <div class="input-form">
                    <label for="primer_apellido">Apellido paterno</label>
                    <input type="text" name="primer_apellido" placeholder="Ingrese su primer apellido" required value="<?php echo $row['primer_apellido'] ?>">
                </div>
                <div class="input-form">
                    <label for="segundo_apellido">Apellido materno</label>
                    <input type="text" name="segundo_apellido" placeholder="Ingrese su segundo apellido" required value="<?php echo $row['segundo_apellido'] ?>">
                </div>
                <div class="input-form">
                    <label for="departamento">Departamento / Area</label>
                    <input type="text" name="departamento" placeholder="Agregue el departamento" required value="<?php echo $row['departamento'] ?>">
                </div>
                <div class="input-form">
                    <label for="puesto">Puesto inicial</label>
                    <input type="text" name="puesto" placeholder="Agregue puesto inicial" required value="<?php echo $row['puesto'] ?>">
                </div>
                <div class="input-form">
                    <label for="estado">Estado</label>
                    <select name="estado">
                        <option value="1" <?php echo $row['estado']?'selected':'' ?>>Activo</option>
                        <option value="0" <?php echo !($row['estado'])?'selected':'' ?>>Inactivo</option>
                    </select>
                </div>
                <div class="input-form">
                    <label for="nacimiento">fecha de nacimiento</label>
                    <input type="date" name="nacimiento" placeholder="Fecha de nacimiento" required value="<?php echo $row['nacimiento'] ?>">
                </div>
                <div>
                    <input type="submit" value="Actualizar">
                </div>
            </form>
        </div>
</body>
</html>
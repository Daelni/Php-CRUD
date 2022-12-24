<?php
include("conexion.php");
$con = conection();
$sql = "SELECT * FROM empleados";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesa logistics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-6">
                <h1>Alta empleado</h1>
                <form action="insertt.php" method="POST">
                    <!-- <input type="text" class="form-control mb-3" name="IdEmpleado" placeholder="id empleado"> -->
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="nombre">
                    <input type="text" class="form-control mb-3" name="Primer_apellido" placeholder="Primer apellido">
                    <input type="text" class="form-control mb-3" name="Segundo_apellido" placeholder="Segundo apellido">
                    <input type="text" class="form-control mb-3" name="Alias" placeholder="alias">
                    <input type="text" class="form-control mb-3" name="Correo" placeholder="correo">
                    <label for="">Fecha de nacimiento</label>
                    <input type="date" class="form-control mb-3" name="Fecha_de_nacimiento" placeholder="fecha de nacimiento">
                    <input type="text" class="form-control mb-3" name="Domicilio" placeholder="domicilio">
                    <input type="number" class="form-control mb-3" name="Telefono_particular" placeholder="Teléfono particular">
                    <label for="">Fecha de ingreso</label>
                    <input type="date" class="form-control mb-3" name="Fecha_de_ingreso" placeholder="fecha de ingreso">
                    <input type="number" class="form-control mb-3" name="Salario_neto" placeholder="salario neto">
                    <input type="password" class="form-control mb-3" name="Contrasena" placeholder="contraseña">
                    <!-- <input type="submit" class="btn btn-secondary"> -->
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col md-8">
                <h1>Mostrar tabla</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>IdEmpleado</th>
                            <th>Nombre</th>
                            <th>Primer_apellido</th>
                            <th>Segundo_apellido</th>
                            <th>Alias</th>
                            <th>Correo</th>
                            <th>Fecha_de_nacimiento</th>
                            <th>Domicilio</th>
                            <th>Telefono_particular</th>
                            <th>Fecha_de_ingreso</th>
                            <th>Salario_neto</th>
                            <th>Contraseña</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            // recorre los campos de la tabla empleados, instruccion resultante de la consulta SELECT
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <!-- segun lo que se encuentre en los campos de la bd agrega el contenido del campo, a traves de la propiedad name de html en el formulario -->
                                <th><?php echo $row['IdEmpleado']?></th> 
                                <th><?php echo $row['Nombre']?></th>
                                <th><?php echo $row['Primer_apellido']?></th>
                                <th><?php echo $row['Segundo_apellido']?></th>
                                <th><?php echo $row['Alias']?></th>
                                <th><?php echo $row['Correo']?></th>
                                <th><?php echo $row['Fecha_de_nacimiento']?></th>
                                <th><?php echo $row['Domicilio']?></th>
                                <th><?php echo $row['Telefono_particular']?></th>
                                <th><?php echo $row['Fecha_de_ingreso']?></th>
                                <th><?php echo $row['Salario_neto']?></th>
                                <th><?php echo $row['Contrasena']?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['IdEmpleado']?>"class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['IdEmpleado']?>"class="btn btn-danger">Dar de baja</a></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        <?php 
                           } 
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
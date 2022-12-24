<?php
    include("conexion.php");
    $con = conection();
    $id = $_GET['id'];

$sql = "SELECT * FROM empleados WHERE IdEmpleado='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>actualizar</title>
</head>
<body>
    <div class="comtainer m-5">
        <form action="update.php" method="POST">
            <input type="hidden" class="form-control mb-3" name="IdEmpleado" value="<?php echo $row['IdEmpleado']?>">
            <input type="text" class="form-control mb-3" name="Nombre" placeholder="nombre" value="<?php echo $row['Nombre']?>">
            <input type="text" class="form-control mb-3" name="Primer_apellido" placeholder="Primer apellido" value="<?php echo $row['Primer_apellido']?>">
            <input type="text" class="form-control mb-3" name="Segundo_apellido" placeholder="Segundo apellido" value="<?php echo $row['Segundo_apellido']?>">
            <input type="text" class="form-control mb-3" name="Alias" placeholder="alias" value="<?php echo $row['Alias']?>">
            <input type="text" class="form-control mb-3" name="Correo" placeholder="correo" value="<?php echo $row['Correo']?>">
            <label for="">Fecha de nacimiento</label>
            <input type="date" class="form-control mb-3" name="Fecha_de_nacimiento" placeholder="fecha de nacimiento" value="<?php echo $row['Fecha_de_nacimiento']?>">
            <input type="text" class="form-control mb-3" name="Domicilio" placeholder="domicilio" value="<?php echo $row['Domicilio']?>">
            <input type="text" class="form-control mb-3" name="Telefono_particular" placeholder="Teléfono particular" value="<?php echo $row['Telefono_particular']?>">
            <label for="">Fecha de ingreso</label>
            <input type="date" class="form-control mb-3" name="Fecha_de_ingreso" placeholder="fecha de ingreso" value="<?php echo $row['Fecha_de_ingreso']?>">
            <input type="number" class="form-control mb-3" name="Salario_neto" placeholder="salario neto" value="<?php echo $row['Salario_neto']?>">
            <input type="password" class="form-control mb-3" name="Contrasena" placeholder="contraseña" value="<?php echo $row['Contrasena']?>">
            <input type="submit" class="btn btn-primary btn-block" value="actualizar">
        </form>
    </div>
</body>
</html>
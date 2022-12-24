<?php
    include("conexion.php");
    $con = conection();
    // insertar en cada campo de la base de datos los valores establecidos en el formulario con $_POST
    $IdEmpleado = $_POST['IdEmpleado'];
    $Nombre = $_POST['Nombre'];
    $Primer_apellido = $_POST['Primer_apellido'];
    $Segundo_apellido = $_POST['Segundo_apellido'];
    $Alias = $_POST['Alias'];
    $Correo = $_POST['Correo'];
    $Fecha_de_nacimiento = $_POST['Fecha_de_nacimiento']; 
    $Domicilio = $_POST['Domicilio'];
    $Telefono_particular = $_POST['Telefono_particular'];
    $Fecha_de_ingreso = $_POST['Fecha_de_ingreso'];
    $Salario_neto = $_POST['Salario_neto'];
    $Contrasena = $_POST['Contrasena'];

    $sql="INSERT INTO empleados VALUES('$IdEmpleado','$Nombre','$Primer_apellido','$Segundo_apellido','$Alias','$Correo','$Fecha_de_nacimiento','$Domicilio','$Telefono_particular','$Fecha_de_ingreso','$Salario_neto','$Contrasena')";
    $query = mysqli_query($con,$sql);
    
    if ($query) {
        Header('Location: empleado.php');
    }else {
        echo ("error");
    }

?>

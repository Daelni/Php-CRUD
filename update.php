<?php 
include("conexion.php");
// actualizar un registro de la tabla empleados a tra ves de UPDATE
$con = conection();
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

$sql = "UPDATE empleados SET Nombre='$Nombre',Primer_apellido='$Primer_apellido',Segundo_apellido ='$Segundo_apellido',Alias='$Alias',Correo='$Correo',Fecha_de_nacimiento='$Fecha_de_nacimiento',Domicilio='$Domicilio',Telefono_particular='$Telefono_particular',Fecha_de_ingreso='$Fecha_de_ingreso',Salario_neto=$Salario_neto,Contrasena='$Contrasena' WHERE IdEmpleado = '$IdEmpleado'";
$query = mysqli_query($con,$sql);

    if($query){
        Header("Location:empleado.php");
    }
?>
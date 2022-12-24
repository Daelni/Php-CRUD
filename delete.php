<?php
    include("conexion.php");
    $con = conection();
    $id = $_GET['id'];
    $sql = "DELETE FROM empleados WHERE IdEmpleado='$id'";
    $query = mysqli_query($con, $sql);
    if($query){
        Header("Location: empleado.php");
    }
?>

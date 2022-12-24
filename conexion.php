<?php 
    function conection(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db="accesa-logistics";

        $con=mysqli_connect($host,$user,$pass);
        mysqli_select_db($con,$db);
        return $con;
    }
?>
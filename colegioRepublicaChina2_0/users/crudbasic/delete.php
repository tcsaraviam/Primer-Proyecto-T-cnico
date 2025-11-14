<?php

include("conexion.php");
$con=conectar();

$id_alumno=$_GET['id'];

$sql="DELETE FROM alumnosTabla  WHERE id_alumno='$id_alumno'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumnosTabla.php");
    }else {
        Header("Location: 404.php");
    }
?>
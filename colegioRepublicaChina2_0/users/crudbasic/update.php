<?php

include("conexion.php");
$con=conectar();

$id_alumno         = $_POST['id_alumno'];
$correo_alumno     = $_POST['email'];
$password_alumno   = $_POST['password'];
$nombre_alumno     = $_POST['nombre'];
$telefono_alumno   = $_POST['telefono'];

$sql="UPDATE alumnosTabla SET correo_alumno='$correo_alumno', password_alumno='$password_alumno', nombre_alumno='$nombre_alumno', telefono_alumno='$telefono_alumno' WHERE id_alumno = '$id_alumno'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumnosTabla.php");
    }else {
        Header("Location: 404.php");
    }
?>
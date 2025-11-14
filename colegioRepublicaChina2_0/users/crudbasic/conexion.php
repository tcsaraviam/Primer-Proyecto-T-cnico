<?php
    // --------------------------------------------------------------------------

    // CONECTANDO CON LA DATABASE
    

    function conectar (){
        $host="localhost";
        $user="root";
        $pass="";

        $bd="colegio_rep_china";
    
        $con = mysqli_connect($host, $user, $pass);
        
        mysqli_select_db($con, $bd);

        return  $con;    
    }

    // --------------------------------------------------------------------------
    // PONER AUTO_INCREMENT A 0 ALTER TABLE alumnosTabla AUTO_INCREMENT = 1




?>
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Otra forma de conectar

    CON FUNCIONES

    function conectar (){
        $host="localhost";
        $user="root";
        $pass="";

        $bd="colegio_rep_china";
    
        $con = mysqli_connect($host, $user, $pass);
        
        mysqli_select_db($con, $bd);

        return  $con;    
    } 

    SIN FUNCIONES

    $host="localhost";
    $user="root";
    $pass="";

    $bd="colegio_rep_china";

    $conexion = new mysqli($host, $user, $pass);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    } 




        // --------------------------------------------------------------------------

    // PARA CREAR LA DATABASE
/*
    $sql_create= "CREATE DATABASE colegio_rep_china";

    if($con-> query($sql_create)===true){
        echo "Base de datos creada correctamente";
    } else{
        die("Error al crear la base de datos"); 
    }*/

    // --------------------------------------------------------------------------


    
    // --------------------------------------------------------------------------

    // PARA CREAR LAS TABLAS DE LA BASE
/*
    $sql_create= "CREATE TABLE alumnosTabla(

    id_alumno INT(11) AUTO_INCREMENT PRIMARY KEY,
    correo_alumno VARCHAR(50) NOT NULL,
    password_alumno VARCHAR(150) NOT NULL,
    nombre_alumno VARCHAR(50) NOT NULL,
    telefono_alumno INT(10) NOT NULL,
    )";


    if($con-> query($sql_create)===true){
        echo "Base de datos creada correctamente";
    } else{
        die("Error al crear la base de datos"); 
    }
*/
    // --------------------------------------------------------------------------
-->
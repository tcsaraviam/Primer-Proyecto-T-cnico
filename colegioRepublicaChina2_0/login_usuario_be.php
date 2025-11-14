<?php

    session_start();

    include 'conexion_be.php';

    //variables
    //$usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    
    //encriptando contraseña
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE 
    correo='$correo' and contrasena='$contrasena'");



    if(mysqli_num_rows($validar_login) > 0){

        $_SESSION['usuario'] = $correo;
        header("location: inicioCorrecto.php");
        // echo '
        //     <script>
        //         alert ("hacete el boludoo");
        //         document.getElementById("nombreUsuario_iC").innerHTML = "Señor@" $usuario
        //     </script>
        // ';
        exit();

    } else{
        echo '
            <script>
                alert ("Usuario NO REGISTRADO, por favor verifique los datos ingresados");
                window.location = "login.php";
            </script>
        ';
        exit();
    }




?>
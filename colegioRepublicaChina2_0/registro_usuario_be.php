<?php
    
include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['id_rol'];
    
    //encriptando contraseña
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena, id_roles)
    VALUES ('$nombre_completo','$correo','$usuario','$contrasena', '$rol')";

//verificar que no se repita la info en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
            alert("Este CORREO ya esta registrado, intenta con otro diferente ;)");
            window.location = "login.php";
            </script>
        ';
        exit();
    }   

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
            alert("Este USUARIO ya esta registrado, intenta con otro diferente ;)");
            window.location = "login.php";
            </script>
        ';
        exit();
    }

//--------------------------------------------------------------------------------------------------

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("Usuario almacenado exitosamente")
            window.location = "login.php";
        </script>
        ';
    } else{
            echo '
                <script>
                    alert("Intentelo de nuevo, usuario no registrado");
                    window.location = "login.php";
                </script>
            ';
    }

    mysqli_close($conexion);

?>
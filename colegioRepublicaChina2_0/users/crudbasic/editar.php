<?php 

    if (isset($_GET['editar'])) {
        
        $editar_id = $_GET['editar'];

        $consulta = 
        "SELECT * FROM alumnosTabla WHERE id_alumno = $editar_id";
        $ejecutar = mysqli_query($conexion ,$consulta);

        $fila = mysqli_fetch_array($ejecutar);

        print_r($_GET);

        $usuario = $fila['nombre_alumno'];
        $email = $fila['correo_alumno'];
        $password = $fila['password_alumno'];
        $telefono = $fila['telefono_alumno'];
        
    }
?>

<br>

<form action="POST" action="">
    <input type="text" name="nombre" value="<?php echo $usuario ?>">
    <input type="text" name="password" value="<?php echo $password ?>">
    <input type="text" name="telefono" value="<?php echo $telefono ?>">
    <input type="text" name="email" value="<?php echo $email ?>">
    <input type="submit" name="actualizar" value=" ACTUALIZAR DATOS ">
</form>

<!-- <script>
    if(1 == "1"){
    console.log($GET['editar']);
    }

</script> -->

<?php
    if(isset($_POST['actualizar'])){
    $actualizar_nombre      = $_POST['nombre'];
    $actualizar_password    = $_POST['password'];
    $actualizar_telefono    = $_POST['telefono'];
    $actualizar_email       = $_POST['email'];

    $actualizar = "UPDATE alumnosTabla SET
    nombre_alumno   = $actualizar_nombre  
    correo_alumno   = $actualizar_email
    password_alumno = $actualizar_password
    telefono_alumno = $actualizar_telefono
    ";

    $ejecutar = mysqli_query($conexion, $actualizar);
    if($ejecutar){
        echo "<script>alert('Datos actualizados')</script>";
        echo "<script>window.open('insertar.php')</script>";
    }
}

?>
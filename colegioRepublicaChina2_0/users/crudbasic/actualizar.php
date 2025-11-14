<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumnosTabla WHERE id_alumno='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_crud.css">
        <title>Crud</title>
    </head>
    <body>
                <div class="container mt-5">cambiar y mejorar los input haciendo que no puedan ingresar valores varchar
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_alumno" value="<?php echo $row['id_alumno']  ?>">

                                <input type="text" name="email" placeholder="Escriba el Correo Electronico" value="<?php echo $row['correo_alumno']  ?>"      >
                                <input type="password" name="password" placeholder="Escriba tu Contraseña"  value="<?php echo $row['password_alumno']  ?>"  >
                                <input type="text" name="nombre" placeholder="Escriba el nombre"            value="<?php echo $row['nombre_alumno']  ?>"  >
                                <input type="text" name="telefono" placeholder="Escriba tu Número Celular"  value="<?php echo $row['telefono_alumno']  ?>"  >
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
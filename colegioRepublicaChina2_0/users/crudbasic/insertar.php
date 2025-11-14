
<?php
    // Conexion

    //  Con variables

    $servidor_bd = 'localhost';
    $usuario_bd = 'root';
    $password_bd = '';
    $nombre_bd = 'colegio_rep_china';
    
    $conexion = mysqli_connect($servidor_bd, $usuario_bd, $password_bd, $nombre_bd);    
    

        // Comprobamos
        //if($conexion-> connect_error){
        //die(header("location: 404.php") /*"El error de Conexión es :".$conexion-> connect_error*/);
        //}
        //    echo "Conexion exitosa";
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

    
    <main>
        <h2>Ingresa la info</h2>
        <section class="cuarta-parte">
            <div class="formulario">
                <form action="insertar.php" method="POST" class="form-ingresar-datos">
                    <ul>
                        <li class="li-ingresar-datos">
                            <label for="nombre">Nombre:</label>
                            
                            <div><input type="text" name="nombre" placeholder="Escriba el nombre"></div>
                        </li>

                        <li class="li-ingresar-datos">
                            <label for="email">Correo Electronico:</label>
                            <div><input type="text" name="email" placeholder="Escriba el Correo Electronico"></div>
                        </li>

                        <li class="li-ingresar-datos">
                            <label for="password">Contraseña:</label>
                            <div><input type="password" name="password" placeholder="Escriba tu Contraseña"></div>
                        </li>

                        <li class="li-ingresar-datos">
                            <label for="telefono">Número Celular:</label>
                            <div><input type="text" name="telefono" placeholder="Escriba tu Número Celular"></div>
                        </li>

                        <!-- <li class="li-ingresar-datos">
                            <label for="avatar">Avatar:</label>
                            <div><input type="file" name="avatar" placeholder="Ingresa tu avatar"></div>
                        </li> -->

                        <!-- <li class="li-ingresar-datos">
                            <label for="rol">Que eres:</label>
                            <div><input type="text" name="rol" placeholder="Ingresa tu rol"></div>
                        </li> -->

                        <li class="li-ingresar-datos">
                            <button class="btn button" name="insert">
                                <div class="svg-wrapper-1">
                                    <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                    </svg>
                                    </div>
                                </div>
                                <span>Send</span>
                            </button>
                        </li>
                        
                    </ul>
                </form>
            </div>

            <?php
                if (isset($_POST['insert'])) {
                    $usuario = $_POST['nombre'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $telefono = $_POST['telefono'];
                    // $rol = $_POST['rol'];
   

                    $insertar = "INSERT INTO alumnostabla (correo_alumno, password_alumno,
                    	nombre_alumno,	telefono_alumno) VALUES 
                        ('$email','$password','$usuario','$telefono')";
                    
                    $ejecutar = mysqli_query($conexion, $insertar);

                    if($ejecutar){
                        echo("se ha hecho patrón");
                        // header("location: alumnosTabla.php");
                    } else{
                        echo("<h3>F mi bro hay algo mal</h3>");
                    }
                }                
            ?>

            <?php 
                // Y ahora mostramos los datos

                $consultar = "SELECT * FROM alumnosTabla";
                $ejecutar = mysqli_query($conexion, $consultar);
                $i = 0;                

                while($fila = mysqli_fetch_array($ejecutar)) {
                    $id = $fila['id_alumno'];
                    $usuario = $fila['nombre_alumno'];
                    $email = $fila['correo_alumno'];
                    $password = $fila['password_alumno'];
                    $telefono = $fila['telefono_alumno'];
                    
                    $i++;
            ?>

            <div>
                <div class="tabla">
                    <ul>
                        <li><?php echo $id; ?></li>
                        <li><?php echo $usuario; ?></li>
                        <li><?php echo $email; ?></li>
                        <li><?php echo($password); ?></li>
                        <li><?php echo($telefono); ?></li>
                        <li><a href="actualizar.php?editar<?php echo($id); ?>">editar</a></li>
                        <li><a href="delete.php?borrar<?php echo($id); ?>">borrar</a></li>
                        
                        <?php } ?> <!--Cerramos la llave de php -->
                        
            <?php 
                if (isset($_GET['editar'])) {
                    include ("editar.php");
                }
            ?>
                    </ul>
                </div>
                <details>
                    <summary>
                        Du
                    </summary>
                    <p>TITI ESTA MUERTO</p>
                </details>
            </div>
        </section>
    </main>
    
</body>
</html>
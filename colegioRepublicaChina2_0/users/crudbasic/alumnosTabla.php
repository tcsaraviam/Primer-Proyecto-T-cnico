

<?php
    
    include("conexion.php");
        
        $con = conectar();
        
        $sql = "SELECT * FROM alumnosTabla ";
        $query = mysqli_query($con, $sql);
        
        // $row = mysqli_fetch_array($query);
        
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
                            <label for="id_alumno">id_alumno:</label>                            
                            <div><input type="text" name="id_alumno" placeholder="Escriba el codigo id_alumno"></div>
                        </li>
                        <li class="li-ingresar-datos">
                            <label for="email">Correo Electronico:</label>
                            <div><input type="email" name="email" placeholder="Escriba el Correo Electronico" required></div>
                        </li>

                        <li class="li-ingresar-datos">
                            <label for="password">Contraseña:</label>
                            <div><input type="password" name="password" placeholder="Escriba tu Contraseña" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres"></div>
                        </li>
                        <li class="li-ingresar-datos">
                            <label for="nombre">Nombre:</label>                            
                            <div><input type="text" name="nombre" placeholder="Escriba el nombre" required></div>
                        </li>
                        <li class="li-ingresar-datos">
                            <label for="telefono">Número Celular:</label>
                            <div><input type="text" inputmode="numeric" maxlength="10" name="telefono" placeholder="Escriba tu Número Celular" min="1" pattern="^[0-9]+"></div>
                        </li>                

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
                                <span>Enviar</span>
                            </button>
                        </li>
                        
                    </ul>
                </form>
            </div>

 
            <div>
                <ul class="tablaAlumnosTitle">
                    <li>ID</li>
                    <li>Nombre</li>
                    <li>Telefono</li>
                </ul>
            </div>
            <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <div>
                        <div>
                            
                            <ul class="tablaAlumnosFirst">
                                <li class="tablaAlumnosId"><?php  echo $row['id_alumno']        ?></li>
                                <!-- <li class="tablaAlumnosCorreo"><?php  echo $row['correo_alumno']    ?></li>
                                <li><?php  echo $row['password_alumno']  ?></li> -->
                                <li class="tablaAlumnosNombre"><?php  echo $row['nombre_alumno']    ?></li>
                                <li class="tablaAlumnosTelefono"><?php  echo $row['telefono_alumno']  ?></li>
                                <li class="btn-edit">
                                    <a href="actualizar.php?id=<?php echo $row['id_alumno'] ?>" class="btn btn-info">
                                        <button class="learn-more">
                                        <span class="circle" aria-hidden="true">
                                        <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text">Editar</span>
                                        </button>
                                    </a>
                                </li>

                                <li class="btn-delete">
                                    <a href="delete.php?id=<?php echo $row['id_alumno'] ?>" class="btn btn-danger">
                                        <button class="noselect">
                                            <span class="text">Eliminar</span>
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path>
                                                </svg>
                                            </span>
                                        </button>   
                                    </a>
                                </li>  

                            </ul>
                        </div>
                    </div>
                <?php 
                    }
                ?>
        </section>
    </main>
    
    <details>
        <summary>
            Du
        </summary>
        <p>TITI ESTA MUERTO</p>
    </details>
</body>
</html>
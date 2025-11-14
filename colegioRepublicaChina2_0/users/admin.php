
<?php
    session_start();
 
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Debes iniciar sesion para acceder me kiero morir ;)")
                window.location = "../login.php";
            </script>
        ';

        // header("location: login.php");
        session_destroy();
        die();
    }else{
        include '../conexion_be.php';
        $correo = $_SESSION['usuario'];
        $rresultados = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
        while($cconsulta = mysqli_fetch_array($rresultados)){

            $name_kudasai = $cconsulta['usuario'];
            $rolesito = $cconsulta['id_roles'];

            if($rolesito == 1){
                $saludo = 'wenas jefe '. $name_kudasai;
            }else if($rolesito == 2){
                echo '
                <script>
                alert("Debes ser admin para ingresar ;)")
                window.location = "programador.php";
                </script>
            ';
            }else if($rolesito == 3){
                echo '
                <script>
                alert("Debes ser admin para ingresar ;)")
                window.location = "profesor.php";
                </script>
            ';
            }else if($rolesito == 4){
                echo '
                <script>
                alert("Debes ser admin para ingresar ;)")
                window.location = "alumnos.php";
                </script>
            ';
            } else{
                    echo '
                    <script>
                    window.location = "index.html";
                    </script>
                ';
                session_destroy();
                die();
            }
        }

    }


    

?>

<!DOCTYPE html>
<html lang="es">
<head>

      <!-- icono -->
  <link rel="apple-touch-icon" sizes="57x57" href="         ../img/icono/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="         ../img/icono/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="         ../img/icono/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="         ../img/icono/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="       ../img/icono/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="       ../img/icono/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="       ../img/icono/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="       ../img/icono/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="       ../img/icono/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href=" ../img/icono/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="    ../img/icono/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="    ../img/icono/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="    ../img/icono/favicon-16x16.png">
  <link rel="manifest" href="../img/icono/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../img/iconoms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  
  <!--meta-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:description" content="Colegio República de China ">
  <meta name="Description" content="Colegio República de China ">
  

  <!--titulo-->
  <title>República de China | Administrador</title>
  
  <!--Falta logo-->
  <link rel="shortcut icon" href="Logo.ico" type="image/x-icon"> 

  <!--styles-->
  <link rel="stylesheet" href="../styles/styles.css">

  <!--fonts-->
  <script src="https://kit.fontawesome.com/8d13d211d7.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- font-family: 'Montserrat', sans-serif;
  font-family: 'Roboto', sans-serif; -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <!--font-family: 'Noto Serif', serif;-->


</head>
<body id="arriba">

  <!--Parte superior-->

  <div class="envoltura0">
    
    <section class="bloqueArriba">
      <ul>
        <li><a href=""><i class="fas fa-user-plus"></i> Telefono</a></li>
        <li><a href="../cerrarSesion.php"><i class="fas fa-sign-in-alt select"></i> Cerrar Sesion</a></li>
      </ul>
    </section>
    <!--Parte navegación-->

  </div>


  <header id="header">
    <div class="contenedor_header">
      <div class="logo">
        <img  src="../img/imgcrc.jpg" alt="Logo CRC">
      </div>
      <div class="contenedor_nav">
        <nav id="nav">
          <ul>
            <li><a href="../index.html">Inicio</a></li>
            <li><a href="../sobre_nosotros.html">Acerca de nosotros</a></li>
            <li><a href="../contacta_profesores.html">Contacta profesores</a></li>
            <li><a href="../recursos_servicios.html">Recursos y Servicios</a></li>
          </ul>
        </nav>
        <div class="btn_menu" id="btn_menu"><i class="fas fa-bars"></i></div>
      </div>
    </div>
  </header>

    <!--Cuerpo-->

    <main>
        <section>
            <div class="contenedor_all" id="contenedor_all">                
                <div class="contenedor-users">
                    <h2><?php echo $saludo ?></h2>
                    <p>¿Qué deseas hacer?</p>
                    <div class="contenedor-users_acciones">
                        <div class="acciones">
                            <p>Agregar un Administrador, profesor o alumno </p>
                            <div>
                                <button class="learn-more" onclick='location.href="../coming.html"'>
                                    <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Vamos allá</span>
                                </button>
                            </div>
                        </div>
                        <div class="acciones"></div>
                        <div class="acciones"></div>
                        </div>
                    </div>
       
    
            </div> <!--Este es contenendor all--> 
        </section>
    </main>


  <!--Pie de pagina-->

  <footer>
    <section class="contenedor_piepag">
      <section class="caja_piepag">
        <div class="logo_piepag">
          <img src="../img/imgcrc.jpg" alt="logo del colegio república de china">
        </div>
        <div class="terms">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque delectus facere perspiciatis soluta natus sed atque! Perferendis dolorum illum, vel expedita alias ad, natus asperiores quia sit earum quasi animi.</p>
        </div>
      </section>

      <section class="caja_piepag">
        <h2>Soluciones</h2>
        <a href="#">App Desarrollo</a>
        <a href="#">App Marketing</a>
        <a href="#">YO</a>
        <a href="#">IRWIN</a>
      </section>

      <section class="caja_piepag">
        <h2>Compañia</h2>
        <a href="#">Acerca del colegio</a>
      </section>

      <section class="caja_piepag">
        <h2>Redes Sociales</h2>
        <a href="#"><i class="fab fa-facebook-square"> Facebook</i></a>
        <a href="#"><i class="fab fa-twitter-square"> Twitter</i></a>
        <a href="#"><i class="fab fa-instagram-square"> Instagram</i></a>
      </section>
    </section>

    
    <section class="caja_copyrigth">
      <hr>
      <p>Todos los derechos reservados © 2022® <b>TS</b></p>
    </section>
    
  </footer>
</div>

<div id="btn_arriba">

  <i class="fas fa-chevron-up"></i>

</div>

  <script src="../js/script.js" async></script>
</body>
</html>
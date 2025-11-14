<?php

    session_start();
 
    if(!isset($_SESSION['usuario'])){
        print_r($_SESSION);
        echo '
            <script>
                alert("Debes iniciar sesion para acceder ;)")
                window.location = "login.php";
            </script>
        ';
        
       

        


        // header("location: login.php");
        session_destroy();
        die();
    }{
        if(isset($_SESSION['usuario'])){
            include 'conexion_be.php';
            $correo = $_SESSION['usuario'];
            $rresultados = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
            while($cconsulta = mysqli_fetch_array($rresultados)){
    
                $name_kudasai = $cconsulta['usuario'];
                $rolesito = $cconsulta['id_roles'];

                if($rolesito == 1){
                    echo '
                    <script>
                    window.location = "users/admin.php";
                    </script>
                ';
                }else if($rolesito == 2){
                    echo '
                    <script>
                    window.location = "users/programador.php";
                    </script>
                ';
                }else if($rolesito == 3){
                    echo '
                    <script>
                    window.location = "users/profesor.php";
                    </script>
                ';
                }else if($rolesito == 4){
                    echo '
                    <script>
                    window.location = "users/alumnos.php";
                    </script>
                ';
                } else{
                        echo '
                        <script>
                        window.location = "index.html";
                        </script>
                    ';
                    
                }
            }

        }

}{

}

?>

<?php
function textoAleatorio()
{
	//Se usan &xacute; para evitar posibles fallos de codificación.
	$textos = array(
    'Sigue esperando...',
	'P&aacute;gina en progreso...',
	'Alg&uacute;n d&iacute;a podr&aacute;s dejar de esperar...',
    'Les deseo grandes éxitos y una estancia provechosa durante estos días.',
    'Mi más sincero agradecimiento por su interés y dedicación.',
    'Mis mejores deseos para todos vosotros.',
    'Muchas gracias por la distinción que nos hacen con su presencia.',
    'Muchas gracias por su atención.',
    'Siéntanse en su casa.',
			);
	return $textos[rand(0, count($textos) - 1)]; //Da un número entre 0 y la longitud - 1, ya que los arrays empiezan en 0 y terminan en el número de elementos - 1
}
?>


<!DOCTYPE html>
<html lang="es">
<head>

  <!-- icono -->
  <link rel="apple-touch-icon" sizes="57x57" href="img/icono/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/icono/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/icono/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/icono/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/icono/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/icono/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/icono/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/icono/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/icono/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/icono/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/icono/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/icono/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/icono/favicon-16x16.png">
<link rel="manifest" href="img/icono/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/img/iconoms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

  <!--meta-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:description" content="Colegio República de China xxxxxxxxxxxxxxxxxxxxxxxxx">
  <meta name="Description" content="Colegio República de China xxxxxxxxxxxxxxxxxxxxxxxxx">
  

  <!--titulo-->
  <title>República de China | Inicio Sesion Correctamnete</title>
  
  <!--Falta logo-->
  <link rel="shortcut icon" href="Logo.ico" type="image/x-icon"> 

  <!--styles-->
  <link rel="stylesheet" href="styles/styles.css">

  <!--fonts-->
  <script src="https://kit.fontawesome.com/525194352f.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <!--font-family: 'Noto Serif', serif;-->

</head>
<body class="body_inicioCorrecto">
    <div >
        <span class="span_inicioCorrecto">
            !Has iniciado Sesion Correctamente!<p><?php echo textoAleatorio(); ?></p> <br>
            <hr>
            Bienvenid@ <?php echo $_SESSION['usuario'];?>
        </span>
        <a href="cerrarSesion.php">Cerrar sesión</a>
    </div>
</body>
</html>
<?php

    session_start();
    if (isset($_SESSION['usuario'])){
        header("location: inicioCorrecto.php");
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
  <title>República de China | INICIO</title>
  
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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- font-family: 'DynaPuff', cursive; -->

  <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400;500;600;700&family=Roboto+Condensed&display=swap" rel="stylesheet">
  <!-- font-family: 'Roboto Condensed', sans-serif; -->

  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- font-family: 'Roboto', sans-serif; -->

</head>
<body class="body_login">
    <main class="main_login">
        <div class="contenedor_todo">
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la página</p>
                    <button id="btn_login">Iniciar sesión</button>
                </div>
                <div class="caja_trasera_register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn_register">Regístrarse</button>
                </div>
            </div>
                <!-- aca hay dos formularios el de login y el de register -->
                <div class="contenedor_login-register">

                    <!-- login -->
                    <form action="login_usuario_be.php" method="POST" class="formulario_login"> <!--LOGIN-->
                        <p>
                            <button class="cta" onclick="location.href='index.html'">
                                <span class="hover-underline-animation"> Regresar </span>
                                <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                                <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
                                </svg>
                            </button>   
                        </p>
                        <h2>Iniciar sesión</h2>
                        <input type="email"     name="correo"       placeholder="Correo Electronico" required autofocus  >
                        <input type="password"  name="contrasena"   placeholder="Contraseña" required>
                        <button name="btn1">Entrar</button>

                    </form>

                    <!-- reegister -->
                    <form action="registro_usuario_be.php" method="POST" class="formulario_register"> <!--REGISTER-->
                        Comunicate con tu profesor@ para que te brinde ayuda para crear tu cuenta
                    </form>
                </div>
        </div>
    </main>
    <script src="js/script_login.js"></script>
</body>
</html> 
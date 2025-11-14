<?php

    // La vieja conexion sencilla $conexion = mysqli_connect("localhost", "root", "", "login_register_db");



    //  Con variables

    $servidor_bd = 'localhost';
    $usuario_bd = 'root';
    $nombre_bd = 'colegio_rep_china';
    $password_bd = '';

    $conexion = new mysqli($servidor_bd, $usuario_bd, $password_bd, $nombre_bd);             

    if($conexion-> connect_error){
        die("El error de Conexión es :".$conexion-> connect_error);
    }


    /*
    class conexion{
        public static function conectar(){
            define('servidor_bd','localhost');
            define('nombre_bd','login_register_db');
            define('usuario_bd','root');
            define('password_bd','');         
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            
            try{
               $conexion = new PDO("mysql:host=".servidor_bd.";dbname=".nombre_bd, usuario_bd, password_bd, $opciones);             
               return $conexion; 
            }catch (Exception $e){
                die("El error de Conexión es :".$e->getMessage());
            }         
        }
        
    }

    /*if($conexion){
        echo 'conectado exitosamente a la base de datos';
    } else{
        echo 'no se ha podido conectar a la base de datos';
    }*/

    /*Ejemplo de como conectar
     class Conexion{
     public static function Conectar(){
         define('servidor','localhost');
         define('nombre_bd','login_2019');
         define('usuario','root');
         define('password','');         
         $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
         
         try{
            $conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password, $opciones);             
            return $conexion; 
         }catch (Exception $e){
             die("El error de Conexión es :".$e->getMessage());
         }         
     }
     
 }*/

?>
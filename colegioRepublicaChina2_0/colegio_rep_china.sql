-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2022 a las 13:17:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio_rep_china`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnostabla`
--

CREATE TABLE `alumnostabla` (
  `id_alumno` int(11) NOT NULL,
  `correo_alumno` varchar(50) NOT NULL,
  `password_alumno` varchar(150) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `telefono_alumno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnostabla`
--

INSERT INTO `alumnostabla` (`id_alumno`, `correo_alumno`, `password_alumno`, `nombre_alumno`, `telefono_alumno`) VALUES
(12, 'camilomartinez.tcsm@gmail.com', 'ajjahdjsdkhaj455454ASDASd', 'dsadsada', '2544545646');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnostabla`
--
ALTER TABLE `alumnostabla`
  ADD PRIMARY KEY (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnostabla`
--
ALTER TABLE `alumnostabla`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

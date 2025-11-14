-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2022 a las 06:58:01
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
-- Base de datos: `login_register_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
(1, 'Anny Barbosa', 'Annyhermosa@gmail.com', 'Anny.__.', 'Tequierothomas'),
(2, 'Tomas Saravia', 'Tomasaravia@gmail.com', 'CdeCamilo', 'Tequieroanny'),
(10, 'Assur', 'Assur@gmail.com', 'Assur', ''),
(11, 'A', 'E@gmail.com', 'I', ''),
(12, 'O', 'I@gmail', 'E', ''),
(13, 'Maye', 'Maye@gmail.com', 'Maye', ''),
(14, 'a', 'a@gmail.com', 'a', ''),
(15, 'o', 'o@gmail.com', 'o', 'o'),
(16, 'mayerly', 'mayerly@gmail.com', 'mayerly', '0eab19276a62b81b11dc025bb9db1dc6bc0b335dc3fc68e530dcdece12d3bf208ca201493b67f27ad716a0e681d694679ae66ffe20e522e6ef025cda9df24f83'),
(17, 'pelusa', 'pelusa@gmail.com', 'pelusa', '2fce027b55ffa9b2fe15736949963f034373ed4017e349e769d6d86a3279c9715ac261e3b79ec031cf9ab0f64bb7164d93767b23eb571fb90707f01d2f7bef13'),
(18, 'pruebas', 'p@gmail.com', 'p', '929872838cb9cfe6578e11f0a323438aee5ae7f61d41412d62db72b25dac52019de2d6a355eb2d033336fb70e73f0ec0afeca3ef36dd8a90d83f998fee23b78d');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2020 a las 23:29:01
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curso_php_avanzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_consulta` int(11) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `consulta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `apellido`, `nombre`, `email`, `consulta`) VALUES
(1, 'gallo', 'rodrigo', 'elrodri@gmail.com', 'adasdas'),
(2, 'gallo', 'rodrigo', 'elrodri@gmail.com', 'adasdas'),
(3, 'gallo', 'rodrigo', 'elrodri@gmail.com', 'adasdas'),
(4, 'gallo', 'rodrigo', 'elrodri@gmail.com', 'adasdas'),
(5, 'Gallo', 'Rodrigo', 'elrodria@ho.com', 'hola como estas?'),
(6, 'asdas', 'sda', 'a@a.com', 'consulta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consulta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

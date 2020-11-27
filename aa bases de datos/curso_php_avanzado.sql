-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2020 a las 23:29:15
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
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id_clases` int(5) NOT NULL,
  `unidad` varchar(30) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id_clases`, `unidad`, `fecha`) VALUES
(1, 'unidad1', '2020-10-10'),
(2, 'unidad2', '2020-10-10'),
(3, 'unidad2', '2020-10-10'),
(4, 'unidad2', '2020-10-10'),
(5, 'unida8', '2020-09-15'),
(6, 'hola', '2025-10-10'),
(7, 'sdsadas', '2020-10-10'),
(8, 'registro en php', '2020-12-10'),
(9, 'sdasdas', '2020-10-14'),
(10, 'sadasdas', '1020-10-10'),
(11, 'dasdasd', '2020-10-10'),
(12, 'sdasdas', '2020-10-10'),
(13, 'dasdsada', '2025-10-10'),
(14, 'sadasdasd', '2021-08-15'),
(15, 'asadada', '2020-10-10'),
(16, 'asADSADA', '2025-10-10'),
(17, 'hola', '0000-00-00'),
(18, 'hola', '2000-02-15'),
(19, 'hola35', '2020-10-10');

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
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_clases`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consulta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id_clases` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

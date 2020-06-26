-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-06-2020 a las 15:29:09
-- Versión del servidor: 5.6.48-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `danifer1_chatusu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1`
--

CREATE TABLE `1` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `materia` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `1`
--

INSERT INTO `1` (`id`, `Nombre`, `mensaje`, `materia`, `fecha`, `estado`) VALUES
(1, 'Daniel Ferreira ', 'Hola Rogelio como estas? ya quedo habilitado el chat, saludos Daniel.F', 'historia', '2020-06-23 04:01:17', 1),
(2, 'Daniel Ferreira ', 'si encuentras algún error házmelo saber para poder corregirlo.', 'historia', '2020-06-24 01:37:30', 1),
(3, 'Rogelio Castro ', 'Hola perfecto', 'historia', '2020-06-26 02:09:24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `45`
--

CREATE TABLE `45` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `materia` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `47`
--

CREATE TABLE `47` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `materia` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `47`
--

INSERT INTO `47` (`id`, `Nombre`, `mensaje`, `materia`, `fecha`, `estado`) VALUES
(1, 'Alda  Rodríguez  ', 'Hola Rogelio estoy probando el chat para ver si te llegan los mensajes. Saludos D.F.', 'historia', '2020-06-24 04:32:05', 1),
(2, 'Alda  Rodríguez  ', 'HOla Adri estoy probando el chat. D.F', 'matematica1', '2020-06-24 04:34:20', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `1`
--
ALTER TABLE `1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `45`
--
ALTER TABLE `45`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `47`
--
ALTER TABLE `47`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `1`
--
ALTER TABLE `1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `45`
--
ALTER TABLE `45`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `47`
--
ALTER TABLE `47`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

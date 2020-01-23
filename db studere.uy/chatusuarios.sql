-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2019 a las 00:23:00
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chatusuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `danielferreira`
--

CREATE TABLE `danielferreira` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `mensaje` text NOT NULL,
  `materia` varchar(30) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `danielferreira`
--

INSERT INTO `danielferreira` (`id`, `Nombre`, `mensaje`, `materia`, `fecha`) VALUES
(1, 'Daniel', 'Hvhj', 'historia', '2019-10-05 20:00:42'),
(2, 'Daniel', 'sdnadeq', 'historia', '2019-10-07 19:59:26'),
(3, 'Daniel', 'Jshs', '', '2019-10-10 05:13:49'),
(4, 'Daniel', 'Psijsus', '', '2019-10-10 05:13:56'),
(5, 'Daniel', 'Hvhjhgyhvgttthh', '', '2019-10-10 05:45:21'),
(6, 'Daniel', 'hola\r\n', 'historia', '2019-10-11 13:36:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `danielferreira`
--
ALTER TABLE `danielferreira`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `danielferreira`
--
ALTER TABLE `danielferreira`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

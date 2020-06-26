-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-06-2020 a las 15:30:53
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
-- Base de datos: `danifer1_profesor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_profesores`
--

CREATE TABLE `pago_profesores` (
  `id` int(11) NOT NULL,
  `id_profesor` int(200) NOT NULL,
  `monto_total` int(200) NOT NULL,
  `30` int(200) NOT NULL,
  `70` int(11) NOT NULL,
  `fecha_de_cobro` date NOT NULL,
  `referencia_factura` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago_profesores`
--

INSERT INTO `pago_profesores` (`id`, `id_profesor`, `monto_total`, `30`, `70`, `fecha_de_cobro`, `referencia_factura`) VALUES
(1, 22, 3000, 900, 2100, '2020-07-20', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `id_profe` int(200) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Apellido` varchar(200) NOT NULL,
  `Materia` varchar(200) NOT NULL,
  `Cuenta` varchar(200) NOT NULL,
  `Tipo_de_cuenta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `id_profe`, `Nombre`, `Apellido`, `Materia`, `Cuenta`, `Tipo_de_cuenta`) VALUES
(8, 34, 'Rogelio', 'Castro', 'historia', '0', ''),
(9, 44, 'Belquis', 'Torres', 'fisica', '0', ''),
(10, 41, 'Valeria', 'Rodríguez', 'ingles', '0', ''),
(11, 38, 'Estela', 'Antúnez', 'matematica', '0', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pago_profesores`
--
ALTER TABLE `pago_profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pago_profesores`
--
ALTER TABLE `pago_profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

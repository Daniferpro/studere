-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-06-2020 a las 15:28:14
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
-- Base de datos: `danifer1_ciclo_basico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biologia`
--

CREATE TABLE `biologia` (
  `id` int(11) NOT NULL,
  `nombre_clase` varchar(100) CHARACTER SET latin1 NOT NULL,
  `precio` int(255) NOT NULL,
  `alumnos` int(255) NOT NULL,
  `profesor` varchar(100) CHARACTER SET latin1 NOT NULL,
  `temas` varchar(10000) CHARACTER SET latin1 NOT NULL,
  `Descripcion` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `derecho`
--

CREATE TABLE `derecho` (
  `id` int(11) NOT NULL,
  `nombre_clase` varchar(100) CHARACTER SET latin1 NOT NULL,
  `precio` int(255) NOT NULL,
  `alumnos` int(255) NOT NULL,
  `profesor` varchar(100) CHARACTER SET latin1 NOT NULL,
  `temas` varchar(10000) CHARACTER SET latin1 NOT NULL,
  `Descripcion` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `derecho1`
--

CREATE TABLE `derecho1` (
  `id` int(11) NOT NULL,
  `nombre_clase` varchar(100) CHARACTER SET latin1 NOT NULL,
  `precio` int(255) NOT NULL,
  `alumnos` int(255) NOT NULL,
  `profesor` varchar(100) CHARACTER SET latin1 NOT NULL,
  `temas` varchar(10000) CHARACTER SET latin1 NOT NULL,
  `Descripcion` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `derecho1`
--

INSERT INTO `derecho1` (`id`, `nombre_clase`, `precio`, `alumnos`, `profesor`, `temas`, `Descripcion`) VALUES
(33, '20 Clases para 4to año ', 4000, 0, '43', 'Webex Cisco', 'Lunes a Viernes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisica`
--

CREATE TABLE `fisica` (
  `id` int(11) NOT NULL,
  `nombre_clase` varchar(100) CHARACTER SET latin1 NOT NULL,
  `precio` int(255) NOT NULL,
  `alumnos` int(255) NOT NULL,
  `profesor` varchar(100) CHARACTER SET latin1 NOT NULL,
  `temas` varchar(10000) CHARACTER SET latin1 NOT NULL,
  `Descripcion` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisica1`
--

CREATE TABLE `fisica1` (
  `id` int(11) NOT NULL,
  `nombre_clase` varchar(100) CHARACTER SET latin1 NOT NULL,
  `precio` int(255) NOT NULL,
  `alumnos` int(255) NOT NULL,
  `profesor` varchar(100) CHARACTER SET latin1 NOT NULL,
  `temas` varchar(10000) CHARACTER SET latin1 NOT NULL,
  `Descripcion` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `geografia`
--

CREATE TABLE `geografia` (
  `id` int(11) NOT NULL,
  `nombre_clase` varchar(100) CHARACTER SET latin1 NOT NULL,
  `precio` int(255) NOT NULL,
  `alumnos` int(255) NOT NULL,
  `profesor` varchar(100) CHARACTER SET latin1 NOT NULL,
  `temas` varchar(10000) CHARACTER SET latin1 NOT NULL,
  `Descripcion` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `id` int(11) NOT NULL,
  `nombre_clase` varchar(100) CHARACTER SET latin1 NOT NULL,
  `precio` int(255) NOT NULL,
  `alumnos` int(255) NOT NULL,
  `profesor` varchar(100) CHARACTER SET latin1 NOT NULL,
  `temas` varchar(10000) CHARACTER SET latin1 NOT NULL,
  `Descripcion` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id`, `nombre_clase`, `precio`, `alumnos`, `profesor`, `temas`, `Descripcion`) VALUES
(33, 'Andrés tercero de ciclo básico ', 4500, 0, '34', 'Zoom', 'Lunes, miércoles y viernes '),
(34, 'Andrés tercero de ciclo básico ', 4500, 0, '34', 'Zoom', 'Lunes, miércoles y viernes '),
(35, 'Andrés tercero de ciclo básico ', 4500, 0, '34', 'Zoom', 'Lunes, miércoles y viernes '),
(36, 'Diego ', 4500, 0, '34', 'Zoom', 'Martes jueves, sábados '),
(37, 'Estela, cuarto año de bachillerato ', 4500, 0, '34', 'Webex Cisco', 'Lunes, miércoles y viernes '),
(38, '4° Año de Bachillerato', 4500, 0, '34', 'Zoom', 'lunes, miércoles y viernes'),
(39, '4° Año de Bachillerato', 4500, 0, '34', 'Zoom', 'lunes, miércoles y viernes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matematica`
--

CREATE TABLE `matematica` (
  `id` int(11) NOT NULL,
  `nombre_clase` varchar(100) NOT NULL,
  `precio` int(255) NOT NULL,
  `alumnos` int(255) NOT NULL,
  `profesor` varchar(100) NOT NULL,
  `temas` varchar(10000) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matematica1`
--

CREATE TABLE `matematica1` (
  `id` int(11) NOT NULL,
  `nombre_clase` varchar(100) NOT NULL,
  `precio` int(255) NOT NULL,
  `alumnos` int(255) NOT NULL,
  `profesor` varchar(100) NOT NULL,
  `temas` varchar(10000) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quimica`
--

CREATE TABLE `quimica` (
  `id` int(11) NOT NULL,
  `nombre_clase` varchar(100) NOT NULL,
  `precio` int(255) NOT NULL,
  `alumnos` int(255) NOT NULL,
  `profesor` varchar(100) NOT NULL,
  `temas` varchar(10000) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `biologia`
--
ALTER TABLE `biologia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `derecho`
--
ALTER TABLE `derecho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `derecho1`
--
ALTER TABLE `derecho1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fisica`
--
ALTER TABLE `fisica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fisica1`
--
ALTER TABLE `fisica1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `geografia`
--
ALTER TABLE `geografia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matematica`
--
ALTER TABLE `matematica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matematica1`
--
ALTER TABLE `matematica1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quimica`
--
ALTER TABLE `quimica`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `biologia`
--
ALTER TABLE `biologia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `derecho`
--
ALTER TABLE `derecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `derecho1`
--
ALTER TABLE `derecho1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `fisica`
--
ALTER TABLE `fisica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fisica1`
--
ALTER TABLE `fisica1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `geografia`
--
ALTER TABLE `geografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `matematica`
--
ALTER TABLE `matematica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `matematica1`
--
ALTER TABLE `matematica1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `quimica`
--
ALTER TABLE `quimica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

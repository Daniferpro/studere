-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2019 a las 00:23:31
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
-- Base de datos: `parapruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `Alumno` varchar(100) NOT NULL,
  `Año` varchar(100) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha_inicio` varchar(100) NOT NULL,
  `fecha_fin` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `Nombre_clase` varchar(100) NOT NULL,
  `Profesor` varchar(100) NOT NULL,
  `progreso` int(101) NOT NULL,
  `ref` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `Alumno`, `Año`, `estado`, `fecha_inicio`, `fecha_fin`, `materia`, `Nombre_clase`, `Profesor`, `progreso`, `ref`) VALUES
(1, '1', '4°to año bd', 'activo', '2019-10-08', '2019-11-7', 'historia', 'Una Paz Ficticia 1945 1973', 'Rogelio Castro', 0, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fatura`
--

CREATE TABLE `fatura` (
  `id` int(11) NOT NULL,
  `comprobante` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `id_user` int(255) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `identificador_compra` varchar(200) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `status` varchar(150) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `forma` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fatura`
--

INSERT INTO `fatura` (`id`, `comprobante`, `data`, `id_user`, `materia`, `identificador_compra`, `producto`, `ref`, `status`, `valor`, `forma`) VALUES
(1, 'esperando confirmacion de Pago', '10/10/2019', 1, 'historia', '', 'Una Paz Ficticia 1945 1973', '11751', 'Pendiente', '499.00', 'Mercado Pago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Celular` varchar(14) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `materias` varchar(100) NOT NULL,
  `token` varchar(150) NOT NULL,
  `pago` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Nombre`, `Apellido`, `Celular`, `Contraseña`, `Email`, `estado`, `materias`, `token`, `pago`) VALUES
(1, 'Daniel', 'Ferreira', '097014192', 'ZGFuaWZlcnBybzIwMTk=', 'daniferpro3@gmail.com', 'offline', '', '1', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fatura`
--
ALTER TABLE `fatura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fatura`
--
ALTER TABLE `fatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

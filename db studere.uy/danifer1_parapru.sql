-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-06-2020 a las 15:30:39
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
-- Base de datos: `danifer1_parapru`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(100) NOT NULL,
  `Nombre_clase` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Profesor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Año` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `Alumno` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `materia` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ref` int(50) NOT NULL,
  `id_clase` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `Nombre_clase`, `Profesor`, `Año`, `fecha_inicio`, `fecha_fin`, `Alumno`, `materia`, `estado`, `ref`, `id_clase`) VALUES
(1, '20 Clases 1° de Bachillerato', '34', '4', '2020-06-10', '2020-07-10', '1', 'historia', 'activo', 0, 14),
(6, '20 clases 5 veces por semana 3° Bachillerato ', '42', '6', '2020-06-10', '2020-07-10', '47', 'matematica1', 'activo', 97847, 15),
(3, '20 clases para 3° de Bachillerato Derecho 5 días', '34', '4', '2020-06-10', '2020-07-10', '48', 'historia', 'activo', 0, 20),
(4, '20 clases para 3° Bachillerato de Economía 5 días a la semana ', '34', '4', '2020-06-10', '2020-07-10', '47', 'historia', 'activo', 0, 31),
(5, '20 clases, 3° de Ciclo Básico 5 días a la semana', '34', '3', '2020-06-10', '2020-07-10', '45', 'historia', 'activo', 0, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fatura`
--

CREATE TABLE `fatura` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `forma` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comprobante` varchar(100) NOT NULL,
  `identificador_compra` int(200) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `fecha_compra` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fatura`
--

INSERT INTO `fatura` (`id`, `id_user`, `ref`, `forma`, `data`, `valor`, `producto`, `materia`, `status`, `comprobante`, `identificador_compra`, `id_clase`, `fecha_compra`) VALUES
(18, 47, 607347, 'Mercado Pago', '42 ', '4000.00', '20 clases 5 veces por semana 3Â° Bachillerato ', 'matematica1', 'Pendiente', 'esperando confirmacion de Pago', 0, 15, '2020-06-11 11:17:46'),
(17, 47, 105347, 'Mercado Pago', '42 ', '4000.00', '20 clases 5 veces por semana 3Â° Bachillerato ', 'matematica1', 'Pendiente', 'esperando confirmacion de Pago', 0, 15, '2020-06-10 17:50:43'),
(3, 47, 297747, 'Mercado Pago', '42 ', '4000.00', '20 clases 5 veces por semana 3Â° Bachillerato ', 'matematica1', 'Pendiente', 'esperando confirmacion de Pago', 0, 15, '2020-06-08 17:43:57'),
(16, 47, 97847, 'Red Pagos', '42 ', '4000.00', '20 clases 5 veces por semana 3Â° Bachillerato ', 'matematica1', 'aprovado', 'acreditado', 1, 15, '2020-06-10 14:37:10'),
(5, 34, 137634, 'Mercado Pago', '34 ', '4000.00', '20 Clases 1Â° de Bachillerato', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 14, '2020-06-09 17:53:30'),
(6, 45, 749545, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-09 18:54:14'),
(7, 45, 324445, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-09 19:01:10'),
(8, 47, 710247, 'Mercado Pago', '34 ', '4500.00', '20 clases para 3Â° Bachillerato de EconomÃ­a 5 dÃ­', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 31, '2020-06-09 19:54:14'),
(9, 47, 241747, 'Mercado Pago', '42 ', '4000.00', '20 clases 5 veces por semana 3Â° Bachillerato ', 'matematica1', 'Pendiente', 'esperando confirmacion de Pago', 0, 15, '2020-06-09 19:55:45'),
(10, 47, 949047, 'Mercado Pago', '42 ', '4000.00', '20 clases 5 veces por semana 3Â° Bachillerato ', 'matematica1', 'Pendiente', 'esperando confirmacion de Pago', 0, 15, '2020-06-09 23:33:58'),
(15, 1, 17741, 'Mercado Pago', '44 ', '4000.00', '20 Clases por Video Conferencia 3ero Ciclo BÃ¡sico', 'fisica', 'Pendiente', 'esperando confirmacion de Pago', 0, 14, '2020-06-10 13:25:18'),
(14, 47, 720347, 'Mercado Pago', '42 ', '4000.00', '20 clases 5 veces por semana 3Â° Bachillerato ', 'matematica1', 'Pendiente', 'esperando confirmacion de Pago', 0, 15, '2020-06-10 11:27:57'),
(13, 48, 909448, 'Mercado Pago', '34 ', '4500.00', '20 clases para 3Â° de Bachillerato Derecho 5 dÃ­as', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 20, '2020-06-10 00:37:47'),
(19, 45, 443545, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-13 01:12:37'),
(20, 34, 524734, 'Mercado Pago', '34 ', '4500.00', '20 clases para 3Â° de Bachillerato Derecho 5 dÃ­as', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 20, '2020-06-15 01:24:29'),
(21, 45, 652545, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-16 00:38:16'),
(22, 45, 644245, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-16 00:40:14'),
(23, 45, 322245, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-17 00:28:20'),
(24, 45, 596145, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-17 00:28:20'),
(25, 45, 273545, 'Mercado Pago', '34 ', '3000.00', '12 clases de 3Â° de Ciclo BÃ¡sico, 3 dÃ­as a la se', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 22, '2020-06-21 23:23:41'),
(26, 45, 932545, 'Mercado Pago', '34 ', '3000.00', '12 clases de 3Â° de Ciclo BÃ¡sico, 3 dÃ­as a la se', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 22, '2020-06-21 23:23:41'),
(27, 45, 215545, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-21 23:23:52'),
(28, 45, 882045, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-21 23:23:53'),
(29, 45, 258045, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-21 23:29:00'),
(30, 45, 172545, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-21 23:29:00'),
(31, 45, 53645, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-24 00:25:02'),
(32, 45, 500745, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-24 00:25:02'),
(33, 34, 658734, 'Mercado Pago', '34 ', '4000.00', '20 clases, 3Â° de Ciclo BÃ¡sico 5 dÃ­as a la seman', 'historia', 'Pendiente', 'esperando confirmacion de Pago', 0, 19, '2020-06-25 03:06:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(200) NOT NULL,
  `Email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Celular` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Contraseña` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `token` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `materias` varchar(400) COLLATE utf8_spanish2_ci NOT NULL,
  `pago` tinyint(1) NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Email`, `Nombre`, `Apellido`, `Celular`, `Contraseña`, `token`, `materias`, `pago`, `estado`) VALUES
(1, 'danielferreira@studere.com.uy', 'Daniel', 'Ferreira', '096635675', 'ZGFuaWZlcnBybzIwMTk=', '1', 'admin', 1, 'offline'),
(26, 'rogeliocastro@studere.com.uy', 'Rogelio', 'Castro', '092079765', 'cm9nZWxpb2Nhc3RybzIwMTk=', '1', 'admin', 0, 'offline'),
(34, 'Profe_rogelio@studere.com.uy', 'Rogelio', 'Castro', '092079765', 'Um9nZS40NDY2', '1', 'historia', 1, 'offline'),
(45, 'yamilameyer1995@gmail.com', 'yamila', 'meyer  balao', '091385061', 'MTk5NQ==', '1', '', 0, 'offline'),
(38, 'estelaantupi@gmail.com', 'Estela', 'Antúnez', '094 736 481', 'RWEyNzEyNzI=', '1', 'matematica', 0, 'online'),
(44, 'belquistorres@hotmail.com', 'Belquis', 'Torres', '095753370', 'TmV3dG9uMjAyMA==', '1', 'fisica', 0, 'online'),
(39, 'ceciflor2311@hotmail.com', 'Ana Cecilia', 'Florenciano Barboza', '099120035', 'SHVnb2NlY2lsaWEyMzA3Kw==', '1', 'derecho', 0, 'offline'),
(41, 'soxx_18@hotmail.com', 'Valeria', 'Rodríguez', '091997776', 'dnNyYzE4ODQ=', '1', 'ingles', 0, 'offline'),
(40, 'gonsalopz@gmail.com', 'Gonzalo', 'Lopez', '091217729', 'Z29uemEzMDExODc=', '1', 'quimica', 0, 'offline'),
(42, 'adri27nicodella@gmail.com', 'Adriana ', 'Nicodella ', '096247117', 'MDkxNjM3MDAz', '1', 'matematica1', 0, 'offline'),
(46, 'tonytacuarembo@hotmail.com', 'Winston ', 'Sant Anna', '099556050', 'Z2VvZ3JhZmlhMDUwODg3', '1', 'geografia', 0, 'offline'),
(47, 'aldarodriguezmdrs17@gmail.com', 'Alda ', 'Rodríguez ', '092623788', 'MDkyNjIzNzg4', '1', '', 0, 'online'),
(48, 'stefanitexeira@hotmail.es', 'Stefani', 'Texeira', '', 'c3RlZmFuaXRleGVpcmEyMDIw', '1', '', 0, 'online'),
(49, 'mayravictoria08@gmail.com', 'Mayra Victoria', 'Artigas Modernel', '097980860', 'NTA3NDc3Njk=', '1', '', 0, 'online'),
(50, 'mariamabelrodriguez89@gmail.com', 'María ', 'RODRÍGUEZ ', '092287767', 'bWFyaWNvdGEyMDIw', '1', '', 0, 'online'),
(52, 'maria341955@gmail.com', 'Francisco Nahuel', 'Rodriguez', '092231742', 'c2V0ZWFtZWVzdGEyMDIw', '1', 'admin', 0, 'offline'),
(53, 'profe_maria341955@gmail.com', 'Francisco', 'Vignoli', '0000000', 'c2V0ZWFtZWVzdGEyMDIw', '1', 'fisica1', 0, 'offline');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `fatura`
--
ALTER TABLE `fatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

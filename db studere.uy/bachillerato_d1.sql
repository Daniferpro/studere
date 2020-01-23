-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2019 a las 00:21:35
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
-- Base de datos: `bachillerato_d1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `id` int(11) NOT NULL,
  `nombre_clase` varchar(100) NOT NULL,
  `precio` int(255) NOT NULL,
  `alumnos` int(255) NOT NULL,
  `profesor` varchar(100) NOT NULL,
  `temas` varchar(10000) NOT NULL,
  `videos` mediumtext NOT NULL,
  `Descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id`, `nombre_clase`, `precio`, `alumnos`, `profesor`, `temas`, `videos`, `Descripcion`) VALUES
(1, 'Curso Completo Cuarto Bachillerato', 2599, 1, 'Rogelio Castro', '', '', ''),
(2, 'Una Paz Ficticia 1945 1973', 499, 12, 'Rogelio Castro', 'Mundo Bipolar_Guerra Fria_La Intervencion NorteAmericana en Europa_Guerra de Corea_Crisis de los Misiles_Revolucion China', 'mundo bipolr video_ guerra fria video_ interebncion de eeuu en europa video_guerra corea video_crisis de los misiles video_china video', ''),
(3, 'Capitalismo y Socialismo', 499, 12, 'Rogelio Castro', 'Los Años dorados del Capitalismo_El estado de bienestar_El milagro económico de Alemania_El milagro económico de Japón_Las contradicciones sociales: La segregación racial en EE.UU._La integración económica de Europa_La Desestalinización_Los síntomas de la crisis_El difícil desarrollo de Latino América', 'Los Años dorados del Capitalismo_El estado de bienestar_El milagro económico de Alemania_El milagro económico de Japón_Las contradicciones sociales: La segregación racial en EE.UU._La integración económica de Europa_La Desestalinización_Los síntomas de la crisis_El difícil desarrollo de Latino América', 'Capitalismo y Socialismo Dos vías para el Desarrollo'),
(5, 'Un Mundo en Crisis 1973 1990', 499, 11, 'Rogelio Castro', 'La reseción económica_La segunda Guerra Fría_Hacia la distensión_La desintegración del bloque Socialista_La Perestroika de Gorbachof_La vía China de reforma del Socialismo_El Tercer Mundo: La lucha por la Democracia', 'La reseción económica_La segunda Guerra Fría_Hacia la distensión_La desintegración del bloque Socialista_La Perestroika de Gorbachof_La vía China de reforma del Socialismo_El Tercer Mundo: La lucha por la Democracia', ''),
(6, 'El Nuevo orden Mundial', 499, 10, 'Rogelio Castro', '', '', ''),
(8, 'Desconolizcion y Tercer Mundo', 499, 11, 'Rogelio Castro', 'Aspectos escenciales de la desconolización_La conferencia de Banding_El tercer Mundo y el subdesarrollo', 'Aspectos escenciales de la desconolización_La conferencia de Banding_El tercer Mundo y el subdesarrollo', ''),
(12, 'Los Derechos Humanos', 499, 11, 'Rogelio Castro', '¿Qué son los Derechos Humanos?_Los Derechos Humanos a lo largo de la Historia_La Organización de las Naciones Unidas (ONU)_Los Derechos de la Mujer_Los Derechos del Niño_Los Derechos de autodeterminación', '¿Qué son los Derechos Humanos?_Los Derechos Humanos a lo largo de la Historia_La Organización de las Naciones Unidas (ONU)_Los Derechos de la Mujer_Los Derechos del Niño_Los Derechos de autodeterminación', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-06-2020 a las 15:29:51
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
-- Base de datos: `danifer1_comenta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clase` varchar(100) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  `fecha` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `usuario`, `clase`, `comentario`, `fecha`) VALUES
(1, 'Daniel Ferreira', 'Capitalismo y Socialismo', 'kjbk', '15/09/2019'),
(2, 'Daniel Ferreira', 'Capitalismo y Socialismo', 'kjbk', '15/09/2019'),
(3, 'Daniel Ferreira', 'Una Paz Ficticia', 'mnb,m', '16/09/2019'),
(4, 'Daniel Ferreira', 'Una Paz Ficticia', 'mnb,m', '16/09/2019'),
(5, 'Daniel Ferreira', 'Capitalismo y Socialismo', 'kkk', '18/09/2019'),
(6, 'Daniel Ferreira', 'Una Paz Ficticia', '.hkvkh.liyvlgbuvglhjk', '28/09/2019'),
(7, 'Daniel Ferreira', '', 'jhg', '29/09/2019'),
(8, 'Daniel Ferreira', 'Una Paz Ficticia', 'añsldkjasldkasd', '03/10/2019'),
(9, 'Daniel Ferreira', 'Una Paz Ficticia', '111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111', '03/10/2019'),
(10, 'Daniel Ferreira', 'Una Paz Ficticia', 'aaa', '03/10/2019'),
(11, 'Daniel Ferreira', 'Una Paz Ficticia', 'aaaa1', '03/10/2019'),
(12, 'Daniel Ferreira', 'Una Paz Ficticia', 'j', '03/10/2019'),
(13, 'Daniel Ferreira', 'Una Paz Ficticia', 'Hdhbdhd', '05/10/2019'),
(14, 'Analia Benitez', 'Capitalismo y Socialismo', 'este es un comentario de prueba', '07/10/2019'),
(15, 'Rogelio Castro', 'Una Paz Ficticia 1945 1973', 'muy buena la plataforma equipo de stedere', '07/10/2019'),
(16, 'Daniel  Ferreira', 'Una Paz Ficticia 1945 1973', 'Buenazo Rogelio jajaj Palo y palo', '07/10/2019'),
(17, 'Analia Benitez', 'Un Mundo en Crisis 1973 1990', 'Muy bueno\r\n', '11/10/2019'),
(18, 'Daniel  Ferreira', 'Una Paz Ficticia 1945 1973', 'hola probando el comentario desde studere.uy ', '29/10/2019'),
(19, 'Daniel  Ferreira', 'Una Paz Ficticia 1945 1973', 'Isjsjs', '29/10/2019'),
(20, 'Daniel Ferreira', 'Un Mundo en Crisis 1973 1990', 'hola gente', '30/10/2019'),
(21, 'Daniel Ferreira', 'Una Paz Ficticia 1945 1973', 'Hola', '02/11/2019'),
(22, 'Daniel Ferreira', 'Una Paz Ficticia 1945 1973', 'hola', '11/04/2020'),
(23, 'Daniel Ferreira', 'Una Paz Ficticia 1945 1973', 'ad', '11/04/2020'),
(24, 'Daniel Ferreira', '20 Clases 1° de Bachillerato', 'Hols', '10/06/2020'),
(25, 'Daniel Ferreira', '20 Clases 1° de Bachillerato', 'Hola. Este es un comentario de prueba para Rogelio. En unos dias quedará habilitado por completo los servicios de chat. Subida de material y tendran acceso a las videoconferencias grabadas. Saludos', '11/06/2020'),
(26, 'Stefani Texeira', '20 clases para 3° de Bachillerato Derecho 5 días', 'En el correr de hoy quedará habilitado el chat. Y estos comentarios. El material del profesor y las grabaciones de las videoconferencias.\r\nUn saludo Daniel Ferreira. ', '11/06/2020'),
(27, 'Alda  Rodríguez ', '20 clases 5 veces por semana 3° Bachillerato ', 'En el correr del día de hoy, quedarán habilitadas las funciones de chat, subida de material y vista de las vc grabadas.\r\nSaludos Daniel Ferreira.\r\n', '11/06/2020');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

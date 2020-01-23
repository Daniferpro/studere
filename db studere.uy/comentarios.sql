-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2019 a las 00:22:26
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
-- Base de datos: `comentarios`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(14, 'Daniel Ferreira', 'Una Paz Ficticia 1945 1973', 'Post de prueba', '10/10/2019');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

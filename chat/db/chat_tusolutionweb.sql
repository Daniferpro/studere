-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2018 a las 19:34:41
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chatting`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatters`
--

CREATE TABLE `chatters` (
  `name` text NOT NULL,
  `seen` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `name` text NOT NULL,
  `msg` text NOT NULL,
  `posted` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`name`, `msg`, `posted`) VALUES
('Bachors', 'hiiii', '2016-01-25 14:17:57'),
('Bachors', 'como estaN TODOS', '2016-01-25 14:18:02'),
('tusolutionweb', 'visiten la pagina para descargar mas sistemas', '2016-01-25 14:18:08'),
('Bachors', 'me recomiendan alguna pagina para descargar cursos de programacion', '2016-01-25 14:20:54'),
('tusolutionweb', 'http://tusolutionweb.blogspot.com/', '2016-01-25 14:21:30'),
('tusolutionweb', 'Cursos libros y sistemas con codigo fuente gratis', '2016-01-25 14:21:34'),
('usep', 'alguien en linea :v', '2016-01-25 14:24:58'),
('rayan', 'hola', '2018-03-03 08:20:20'),
('rayan', 'como estas', '2018-03-03 08:20:40'),
('kimi kami', 'como estan', '2018-03-03 08:21:29'),
('tirios', 'Descargado de la pagina http://tusolutionweb.blogspot.pe/', '2018-03-04 13:31:14'),
('tirios', 'sigannos //SIGUENOS //Siguenos en twitter //https://twitter.com/tusolutionweb //Vista nuestra pagina web //http://tusolutionweb.blogspot.com/ //Siguenos en facebook //https://www.facebook.com/CodigofuenteGratis/', '2018-03-04 13:32:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_enET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

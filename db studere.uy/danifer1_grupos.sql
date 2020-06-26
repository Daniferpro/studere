-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-06-2020 a las 15:30:08
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
-- Base de datos: `danifer1_grupos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biologia`
--

CREATE TABLE `biologia` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biologia1`
--

CREATE TABLE `biologia1` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `derecho`
--

CREATE TABLE `derecho` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `derecho`
--

INSERT INTO `derecho` (`id`, `link_vc`, `Horario`, `Dias`, `Contraseña_vc`, `Nombre`, `dia_inicio`, `dia_fin`, `descripcion`, `Precio`, `alumnos`, `nivel`) VALUES
(14, '', '18:00 a 18:40', 'Lunes, miércoles y viernes', '', 'Ana Cecilia Florenciano Barboza', '2020-06-10', '2020-07-10', 'En 3er año de bachillerato la asignatura Derecho consta de 6 unidades temáticas, de las cuales se seleccionará aquellos temas relevantes acorde a lo trabajado en el año lectivo o a la modalidad del examen (reglamentado o libre).', 4000, 0, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `derecho1`
--

CREATE TABLE `derecho1` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisica`
--

CREATE TABLE `fisica` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fisica`
--

INSERT INTO `fisica` (`id`, `link_vc`, `Horario`, `Dias`, `Contraseña_vc`, `Nombre`, `dia_inicio`, `dia_fin`, `descripcion`, `Precio`, `alumnos`, `nivel`) VALUES
(14, 'https://us04web.zoom.us/j/79385202533?pwd=RG82bHdmVHA2dmFkTnRybHFtZ3lDdz09', 'De 18:30 a 19:10', 'Lunes a Viernes', '9chbny', '20 Clases por Video Conferencia 3ero Ciclo Básico', '2020-06-08', '2020-07-05', 'Plan Full de Física para Alumnos de Tercer año de Ciclo Básico', 4000, 0, 3),
(15, 'https://us04web.zoom.us/j/79385202533?pwd=RG82bHdmVHA2dmFkTnRybHFtZ3lDdz09', 'De 19:30 a 20:10', 'Lunes, Miércoles y Viernes', '9chbny', '10 Clases por Video Conferencia - 3ero Ciclo Básico', '2020-06-08', '2020-07-05', 'Plan Básico de Física para Alumnos de Tercer año de Ciclo Básico. 10 Clases', 2800, 0, 3),
(16, 'https://us04web.zoom.us/j/79385202533?pwd=RG82bHdmVHA2dmFkTnRybHFtZ3lDdz09', 'De 20:30 a 21:10', 'Lunes a Viernes', '9chbny', '20 Clases por Video Conferencia - 2° Bachillerato (Biológico & Científico)', '2020-06-08', '2020-07-05', 'Plan Full de Física para Alumnos de 2° año Bachillerato de Orientación Biológico y Científico', 4500, 0, 5),
(17, 'https://us04web.zoom.us/j/79385202533?pwd=RG82bHdmVHA2dmFkTnRybHFtZ3lDdz09', 'De 19:30 a 20:10', 'Martes, Jueves y Sábados', '9chbny', '10 Clases por Video Conferencia - 2° año Bachillerato (Biológico & Científico)', '2020-06-09', '2020-07-05', 'Plan Básico de Física para Alumnos de 2° año Bachillerato Orientación Biológico y Científico', 3400, 0, 5),
(18, 'https://us04web.zoom.us/j/79385202533?pwd=RG82bHdmVHA2dmFkTnRybHFtZ3lDdz09	', 'De 20:30 a 21:10', 'Lunes a Sabado', '9chbny', '1 clase de Vc Para Alumnos de 2° año Bachillerato', '2020-06-08', '2020-07-05', 'Plan de solo 1 Clase de Física para Alumnos de 2° año Bachillerato Orientación Biológico y Científico.Pueden Ingresar los dias: Lunes a Viernes a las 20:30 o Martes Jueves y Sabados a las 19:30', 500, 0, 5),
(19, 'https://us04web.zoom.us/j/79385202533?pwd=RG82bHdmVHA2dmFkTnRybHFtZ3lDdz09	', 'De 18:30 a 19:10', 'Lunes a Viernes', '9chbny', '1 clase de Vc Para Alumnos de 3° Ciclo Básico', '2020-06-08', '2020-07-05', '	Plan de solo 1 Clase de Física para Alumnos de 3° Ciclo Básico. Pueden Ingresar los dias: Lunes a Viernes a las 18:30 o a las 19:30', 350, 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisica1`
--

CREATE TABLE `fisica1` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fisica1`
--

INSERT INTO `fisica1` (`id`, `link_vc`, `Horario`, `Dias`, `Contraseña_vc`, `Nombre`, `dia_inicio`, `dia_fin`, `descripcion`, `Precio`, `alumnos`, `nivel`) VALUES
(1, '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id`, `link_vc`, `Horario`, `Dias`, `Contraseña_vc`, `Nombre`, `dia_inicio`, `dia_fin`, `descripcion`, `Precio`, `alumnos`, `nivel`) VALUES
(14, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'De 11:00 a 11:40', 'De Lunes a viernes ', '6VFOIT ', '20 Clases 1° de Bachillerato', '2020-06-10', '2020-06-10', 'Se trabajará todo el programa oficial de Secundaria ', 4000, 0, 4),
(19, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'De 9:00 a 9:40', 'De Lunes a viernes ', '6VFOIT', '20 clases, 3° de Ciclo Básico 5 días a la semana ', '2020-06-08', '2020-06-28', 'Se trabajará todo el programa curricular de Tercero de Ciclo Básico. ', 4000, 0, 3),
(20, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'De 10:00 a 10:40', 'De Lunes a viernes ', '6VFOIT', '20 clases para 3° de Bachillerato Derecho 5 días a la semana', '2020-06-10', '2020-06-10', 'Se trabajará todo el programa curricular de 3° de Bachillerato ', 4500, 0, 6),
(21, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'A coordinar ', 'De Lunes a viernes ', '6VFOIT', '20 clases 5 días a la semana para 2° de Bachillerato ', '2020-06-08', '2020-06-28', '', 4500, 0, 5),
(22, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'A coordinar ', 'Lunes, miércoles y viernes ', '6VFOIT ', '12 clases de 3° de Ciclo Básico, 3 días a la semana ', '2020-06-10', '2020-07-10', 'Se trabajará los temas correspondientes al programa', 3000, 0, 3),
(23, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'A coordinar ', 'Lunes, miércoles y viernes ', '6VFOIT ', '12 clases, 3 días a la semana para 1° de Bachillerato ', '2020-06-10', '2020-06-10', 'Se trabajará los temas correspondientes al programa ', 3000, 0, 4),
(24, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'A coordinar ', 'Lunes, miércoles y viernes ', '6VFOIT ', '12 clases, 3 días a la semana, para 2° de Bachillerato ', '2020-06-10', '2020-06-10', 'Se trabajará los temas correspondientes al programa oficial ', 3600, 0, 5),
(25, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'A coordinar ', 'Martes, jueves y sábados ', '6VFOIT ', '12 clases 3 días a la semana, 3°de Bachillerato ', '2020-06-10', '2020-07-10', 'Se trabajarán los temas correspondientes al programa oficial ', 3600, 0, 6),
(26, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'A coordinar ', 'Martes y Sábados', '6VFOIT ', '8 clases, 2 días a la semana, 3° Ciclo Básico ', '2020-06-10', '2020-07-10', 'Se trabajarán los temas correspondientes al programa oficial ', 2600, 0, 3),
(28, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'A coordinar ', 'Martes y Sábados ', '6VFOIT ', '8 clases 2 días a la semana para 1°de Bachillerato ', '2020-06-10', '2020-07-10', 'Se trabajarán los temas correspondientes al programa oficial de Secundaria ', 2600, 0, 4),
(29, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'A coordinar ', 'Martes y Sábados ', '6VFOIT ', '8 clases, 2 días a la semana para 2°de Bachillerato ', '2020-06-10', '2020-07-10', 'Se trabajarán los temas correspondientes al programa oficial de Secundaria ', 3000, 0, 5),
(30, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', 'A coordinar ', 'Martes y Sábados ', '6VFOIT ', '8 clases, 2 días a la semana, 3°de Bachillerato ', '2020-06-10', '2020-07-10', 'Se trabajarán los temas correspondientes al programa oficial de Secundaria ', 3000, 0, 6),
(31, 'https://us04web.zoom.us/j/6569975731?pwd=c3JEVVVWN29CY01MTlV6ajN0dXR1dz09', '20:00', 'Lunes a Viernes ', '6VFOIT ', '20 clases para 3° Bachillerato de Economía 5 días a la semana ', '2020-06-10', '2020-06-10', 'Se trabajará todo el programa oficial de Secundaria ', 4500, 0, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia1`
--

CREATE TABLE `historia1` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingles`
--

CREATE TABLE `ingles` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingles1`
--

CREATE TABLE `ingles1` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matematica`
--

CREATE TABLE `matematica` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matematica`
--

INSERT INTO `matematica` (`id`, `link_vc`, `Horario`, `Dias`, `Contraseña_vc`, `Nombre`, `dia_inicio`, `dia_fin`, `descripcion`, `Precio`, `alumnos`, `nivel`) VALUES
(14, '', 'De 11 a 11:40; o de 19 a 19:40', 'Lunes, miercoles y jueves por la mañana. Martes y viernes por la tarde', '', '20 clases 5 días por semana, tercer año de ciclo básico', '2020-06-10', '2020-07-10', 'Las clases serán dictadas de acuerdo a las necesidades de los alumnos.', 4000, 0, 1),
(15, '', 'De 10 a 10:40 y de 18 a 18:40', 'Lunes, miercoles y jueves por la mañana. Martes y viernes por la tarde', '', '20 clases 5 días por semana, primer año de bachillerato', '2020-06-10', '2020-07-10', 'Las clases serán dictadas de acuerdo a las necesidades de los alumnos.', 4000, 0, 4),
(16, '', '9 a 9:40', 'Lunes', '', '1 clase de tercer año de ciclo básico', '2020-06-10', '2020-07-10', 'Las clases serán dictadas de acuerdo a las necesidades de los alumnos.', 350, 0, 1),
(17, '', '9 a 9:40', 'Miercoles', '', '1 clase de primer año de bachillerato', '2020-06-10', '2020-07-10', 'Las clases serán dictadas de acuerdo a las necesidades de los alumnos.', 350, 0, 1),
(18, '', '8 a 8: 40 y19:50 a 20:30', 'Lunes, miercoles y jueves por la mañana. Martes y viernes por la tarde', '', '10 clases de primero de bachillerato más video conferencias', '2020-06-10', '2020-07-10', 'Las clases serán dictadas de acuerdo a las necesidades de los alumnos.', 2500, 0, 4),
(19, '', '9 a 9:40; 11:50 a12:30 y20:40 a 21:20', 'Lunes, miercoles y jueves por la mañana. Martes y viernes por la tarde', '', '1o clase de tercer año de ciclo básico más videoconferencias', '2020-06-10', '2020-07-10', 'Las clases serán dictadas de acuerdo a las necesidades de los alumnos.', 2500, 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matematica1`
--

CREATE TABLE `matematica1` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matematica1`
--

INSERT INTO `matematica1` (`id`, `link_vc`, `Horario`, `Dias`, `Contraseña_vc`, `Nombre`, `dia_inicio`, `dia_fin`, `descripcion`, `Precio`, `alumnos`, `nivel`) VALUES
(14, '756 0792 5863', '08:30 a 9:10', 'Lunes, Miércoles y Viernes ', '9nXR20', '20 clases 5 veces por semana 2do Bachillerato ', '2020-06-10', '2020-07-10', 'Pautas y metodología de trabajo', 4000, 0, 5),
(15, '744 0423 5475', '08:30 a 09:10', 'Martes, Jueves y Sábados ', 'matema', '20 clases 5 veces por semana 3° Bachillerato ', '2020-06-11', '2020-07-11', 'Continuidad ', 4000, 0, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quimica`
--

CREATE TABLE `quimica` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quimica`
--

INSERT INTO `quimica` (`id`, `link_vc`, `Horario`, `Dias`, `Contraseña_vc`, `Nombre`, `dia_inicio`, `dia_fin`, `descripcion`, `Precio`, `alumnos`, `nivel`) VALUES
(14, 'https://us04web.zoom.us/j/71413700346?pwd=eVVRSWRMRmp1ZWtadVY4em5raWpRQT09', '17:20 a 18:00', 'lunes a vieres', 'studereQ', 'Química 4to año 20 clases', '2020-06-10', '2020-05-20', 'Se trabajarán todos los contenidos que sean requeridos, con énfasis en contenidos programáticos esenciales para la presentación a una mesa de examen (contando con conocimiento de los programas), y a su vez atendiendo los requerimientos particulares, ya sea para su profundización o repaso específico', 4500, 0, 4),
(15, 'https://us04web.zoom.us/j/73103567465?pwd=a3dxWHJVNGg4Z0JSb1VWYjlPZ29oZz09', 'de 18:05 a 18:45', 'Lunes , Miércoles y Viernes', 'StudereQ', 'Química 3er año 12 clases', '2020-06-10', '2020-07-15', 'Se trabajarán todos los contenidos que sean requeridos, con énfasis en contenidos programáticos esenciales para la presentación a una mesa de examen (contando con conocimiento de los programas), y a su vez atendiendo los requerimientos particulares, ya sea para su profundización o repaso específico', 3600, 0, 3),
(16, 'https://us04web.zoom.us/j/73699569308?pwd=WllaUDVNclFuNzlVVXp6ek40SU9nUT09', 'de 18:05 a 18:45', 'Martes y Jueves', 'StudereQ', 'Química 3er o 4to año 8 clases', '2020-06-10', '2020-07-23', 'Se trabajarán todos los contenidos que sean requeridos, con énfasis en contenidos programáticos esenciales para la presentación a una mesa de examen (contando con conocimiento de los programas), y a su vez atendiendo los requerimientos particulares, ya sea para su profundización o repaso específico', 3000, 0, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quimica1`
--

CREATE TABLE `quimica1` (
  `id` int(11) NOT NULL,
  `link_vc` text NOT NULL,
  `Horario` varchar(200) NOT NULL,
  `Dias` text NOT NULL,
  `Contraseña_vc` text NOT NULL,
  `Nombre` text NOT NULL,
  `dia_inicio` date NOT NULL,
  `dia_fin` date NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` int(200) NOT NULL,
  `alumnos` int(200) NOT NULL DEFAULT '0',
  `nivel` int(11) NOT NULL
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
-- Indices de la tabla `biologia1`
--
ALTER TABLE `biologia1`
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
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historia1`
--
ALTER TABLE `historia1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingles`
--
ALTER TABLE `ingles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingles1`
--
ALTER TABLE `ingles1`
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
-- Indices de la tabla `quimica1`
--
ALTER TABLE `quimica1`
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
-- AUTO_INCREMENT de la tabla `biologia1`
--
ALTER TABLE `biologia1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `derecho`
--
ALTER TABLE `derecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `derecho1`
--
ALTER TABLE `derecho1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fisica`
--
ALTER TABLE `fisica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `fisica1`
--
ALTER TABLE `fisica1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `historia1`
--
ALTER TABLE `historia1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingles`
--
ALTER TABLE `ingles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingles1`
--
ALTER TABLE `ingles1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `matematica`
--
ALTER TABLE `matematica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `matematica1`
--
ALTER TABLE `matematica1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `quimica`
--
ALTER TABLE `quimica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `quimica1`
--
ALTER TABLE `quimica1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

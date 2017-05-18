-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2017 a las 22:22:05
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vaca`
--

CREATE TABLE `vaca` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `peso` decimal(10,3) NOT NULL,
  `escala` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `fecha_parto` date NOT NULL,
  `fecha_inicio_produccion` date NOT NULL,
  `tiempos_alimentacion` varchar(50) NOT NULL,
  `tratamiento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vaca`
--

INSERT INTO `vaca` (`id`, `codigo`, `raza`, `fecha_nacimiento`, `peso`, `escala`, `estado`, `fecha_parto`, `fecha_inicio_produccion`, `tiempos_alimentacion`, `tratamiento`) VALUES
(0, '0B363200', 'holstein', '2014-02-05', '700.000', 'normal', 'lactancia', '2017-04-02', '2017-04-18', '3 veces', 'medio'),
(1, '47AEEA75', 'ANGUS', '2012-11-08', '716.000', 'NORMAL', 'LACTANCIA', '2016-12-08', '2017-01-12', '1300', 'MEDIO'),
(3, '740349EA', 'HOLSTEIN', '2014-10-02', '700.000', 'normal', 'embarazo', '0000-00-00', '0000-00-00', '3 veces', 'medio'),
(2, 'A387018B', 'HOLSTEIN', '2014-07-05', '708.000', 'normal', 'LACTANCIA', '2017-02-02', '2017-02-08', '1300', 'ALTO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vaca`
--
ALTER TABLE `vaca`
  ADD PRIMARY KEY (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

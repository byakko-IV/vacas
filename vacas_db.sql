-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2017 a las 13:06:28
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vacas`
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
(1, '47AEEA75', 'ANGUS', '2012-11-08', '716.000', 'NORMAL', 'LACTANCIA', '2016-12-08', '2017-01-12', '1300', 'MEDIO'),
(3, '740349EA', 'HOLSTEIN', '2014-10-02', '700.000', 'normal', 'embarazo', '0000-00-00', '0000-00-00', '3 veces', 'medio'),
(2, 'A387018B', 'HOLSTEIN', '2014-07-05', '760.000', 'normal', 'LACTANCIA', '2017-02-02', '2017-02-08', '1300', 'BAJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `fecha_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vaca`
--
ALTER TABLE `vaca`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

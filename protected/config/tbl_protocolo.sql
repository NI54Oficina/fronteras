-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2016 a las 20:28:48
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fronteras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_protocolo`
--

CREATE TABLE `tbl_protocolo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `dia0` varchar(300) NOT NULL,
  `dia7` varchar(300) NOT NULL,
  `dia8` varchar(300) NOT NULL,
  `dia9` varchar(300) NOT NULL,
  `dia10` varchar(300) NOT NULL,
  `prioridad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_protocolo`
--

INSERT INTO `tbl_protocolo` (`id`, `nombre`, `dia0`, `dia7`, `dia8`, `dia9`, `dia10`, `prioridad`) VALUES
(2, '8 días con cipionato - Vaquillona', 'Colocar CRONIPRES MONODOSIS <p> 2 ml BIOESTROGEN </p>', '', 'Retirar CRONIPRES MONODOSIS <p>1 ml CRONI-CIP</p> <p> 2 ml ENZAPROST D-C </p>', '', 'IATF (48 hr)', '1'),
(3, '8 días con cipionato - Vaquillona prepúber o anestro', 'Colocar CRONIPRES MONDOSIS <p>2 ml BIOESTROGEN</p>', '', 'Retirar CRONIPRES MONODOSIS <p> 1 ml CRONI-CIP </p><p> 1,5 ml ECEGON (300 UI) </p><p>2 ml ENZAPROST D-C</p>', '', 'IATF (48 hr)', '1'),
(4, '7 días con cipionato - Vaquillona', 'Colocar CRONIPRES MONODOSIS <p>2 ml BIOESTROGEN </p>', 'Retirar CRONIPRES MONODOSIS <p>1 ml CRONI-CIP</p> <p> 2 ml ENZAPROST D-C </p>', '', 'IATF (48 hr)', '', '2'),
(5, '7 días con benzoato - Vaquillona', 'Colocar CRONIPRES MONODOSIS <p> 2 ml BIOESTROGEN</p>', 'Retirar CRONIPRES MONODOSIS  <p>2 ml ENZAPROST D-C </p>', '<p>1 ml BIOESTROGEN </p>', 'IATF (52 A 56 hr', '', '2'),
(6, '8 días con benzoato - Vaquillona', 'Colocar CRONIPRES MONODOSIS <p> 2 ml BIOESTROGEN </p>', '', 'Retirar CRONIPRES MONODOSIS <p> 2 ml ENZAPROST D-C </p>', '<p>1 ml BIOESTROGEN</p>', '<p>IATF (52 A 56 hr)</p>', '1'),
(7, '8 días con benzoato - Vaquillona prepúber o anestro', 'Colocar CRONIPRES MONODOSIS <p> 2 ml BIOESTROGEN </p>', '', 'Retirar CRONIPRES MONODOSIS <p> 1,5 ml ECEGON (300 UI) </p> <p>2 ml ENZAPROST D-C </p>', '<p> 1 ml BIOESTROGEN </p>', 'IATF (52 A 56 hr)', '2'),
(8, '8 días con cipionato - Vaca cíclica, razas carniceras', 'Colocar CRONIPRES MONODOSIS <p> 2 ml BIOESTROGEN </p>', '', 'Retirar CRONIPRES MONODOSIS <p>2 ml CRONI-CIP </p><p>2 ml ENZAPROST D-C</p>', '', 'IATF (48 hr)', '1'),
(9, '8 días con cipionato - Vaca en anestro, razas carniceras', 'Colocar CRONIPRES MONODOSIS<p> 2 ml BIOESTROGEN </p>', '', 'Retirar CRONIPRES MONODOSIS <p> 2 ml CRONI-CIP </p><p>2 ml ECEGON (400 UI)</p> <p>2 ml ENZAPROST D-C</p>', '', 'IATF (48 hr)', '1'),
(10, '8 días con cipionato - Vaca lechera', 'Colocar CRONIPRES MONODOSIS <p> 2 ml BIOESTROGEN</p>', '', 'Colocar CRONIPRES MONODOSIS 2 ml BIOESTROGEN', '', 'IATF (56 hr)', '3'),
(11, 'Co-Synch - Vaca lechera', '<p>2,5 ml GONAXAL</p>', '<p>2 ml ENZAPROST</p>', '', 'IATF (60 hr) <p>2,5 ml GONAXAL</p>', 'IATF (48 hr)', '1'),
(12, 'Ov-Synch - Vaca lechera', '<p>2,5 ml GONAXAL</p>', '<p>2 ml ENZAPROST</p>', '', '<p>2,5 ml GONAXAL</p>', 'IATF', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_protocolo`
--
ALTER TABLE `tbl_protocolo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_protocolo`
--
ALTER TABLE `tbl_protocolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2016 a las 15:02:45
-- Versión del servidor: 5.5.24
-- Versión de PHP: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fronteras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_protocolo`
--

CREATE TABLE IF NOT EXISTS `tbl_protocolo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `dia0` varchar(300) NOT NULL,
  `dia7` varchar(300) NOT NULL,
  `dia8` varchar(300) NOT NULL,
  `dia9` varchar(300) NOT NULL,
  `dia10` varchar(300) NOT NULL,
  `prioridad` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_protocolo`
--

INSERT INTO `tbl_protocolo` (`id`, `nombre`, `dia0`, `dia7`, `dia8`, `dia9`, `dia10`, `prioridad`) VALUES
(1, 'Protocol1', 'asd', '1233', '465', '2345', '111243', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

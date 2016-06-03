-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-06-2016 a las 16:59:19
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
-- Estructura de tabla para la tabla `tbl_provincia`
--

CREATE TABLE IF NOT EXISTS `tbl_provincia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `pais` int(11) NOT NULL DEFAULT '1',
  `veterinarias` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `tbl_provincia`
--

INSERT INTO `tbl_provincia` (`id`, `nombre`, `pais`, `veterinarias`) VALUES
(1, 'Buenos Aires', 1, 1),
(2, 'Catamarca', 1, 0),
(3, 'Chaco', 1, 1),
(4, 'Chubut', 1, 1),
(5, 'Córdoba', 1, 1),
(6, 'Corrientes', 1, 1),
(7, 'Entre Ríos', 1, 1),
(8, 'Formosa', 1, 1),
(9, 'Jujuy', 1, 1),
(10, 'La Pampa', 1, 1),
(11, 'La Rioja', 1, 0),
(12, 'Mendoza', 1, 1),
(13, 'Misiones', 1, 1),
(14, 'Neuquén', 1, 1),
(15, 'Río Negro', 1, 0),
(16, 'Salta', 1, 1),
(17, 'San Juan', 1, 0),
(18, 'San Luis', 1, 1),
(19, 'Santa Cruz', 1, 1),
(20, 'Santa Fe', 1, 1),
(21, 'Santiago del Estero', 1, 1),
(22, 'Tierra del Fuego', 1, 0),
(23, 'Tucumán', 1, 1),
(24, 'Capital', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-06-2016 a las 18:38:40
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
-- Estructura de tabla para la tabla `tbl_remates`
--

CREATE TABLE IF NOT EXISTS `tbl_remates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cartelera` int(11) NOT NULL,
  `modalidad` varchar(100) NOT NULL,
  `consignatario` varchar(140) NOT NULL,
  `lugar` varchar(140) NOT NULL,
  `detalle` varchar(140) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `zona` varchar(140) NOT NULL,
  `cabezas` varchar(300) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `cate` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `categoria` varchar(100) NOT NULL,
  `suspendido` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=150 ;

--
-- Volcado de datos para la tabla `tbl_remates`
--

INSERT INTO `tbl_remates` (`id`, `cartelera`, `modalidad`, `consignatario`, `lugar`, `detalle`, `provincia`, `zona`, `cabezas`, `tipo`, `cate`, `fecha`, `categoria`, `suspendido`) VALUES
(1, 36796, '', 'Pedro Manuel Amoz y Cía. S.A. ', 'Ayacucho.', 'Gordo, invernada y cría.', 'Buenos Aires', 'Pampeana', '800', 'simple', 'Físico', '2016-07-05 03:00:00', 'Generales', ''),
(2, 36797, '', 'Pedro Manuel Amoz y Cía. S.A. ', 'Ayacucho.', 'Gordo, invernada y cría.', 'Buenos Aires', 'Pampeana', '800', 'simple', 'Físico', '2016-08-04 03:00:00', 'Generales', ''),
(3, 36798, '', 'Pedro Manuel Amoz y Cía. S.A. ', 'Ayacucho.', 'Gordo, invernada y cría.', 'Buenos Aires', 'Pampeana', '800', 'simple', 'Físico', '2016-09-05 03:00:00', 'Generales', ''),
(4, 36799, '', 'Pedro Manuel Amoz y Cía. S.A. ', 'Ayacucho.', 'Gordo, invernada y cría.', 'Buenos Aires', 'Pampeana', '800', 'simple', 'Físico', '2016-10-04 03:00:00', 'Generales', ''),
(5, 36800, '', 'Pedro Manuel Amoz y Cía. S.A. ', 'Ayacucho.', 'Gordo, invernada y cría.', 'Buenos Aires', 'Pampeana', '800', 'simple', 'Físico', '2016-11-03 03:00:00', 'Generales', ''),
(6, 36801, '', 'Pedro Manuel Amoz y Cía. S.A. ', 'Ayacucho.', 'Gordo, invernada y cría.', 'Buenos Aires', 'Pampeana', '800', 'simple', 'Físico', '2016-12-06 03:00:00', 'Generales', ''),
(7, 38364, '', 'Meganar', 'Bahia Blanca', 'Remate por Internet.', 'Buenos Aires', 'Pampeana', 'a-c', 'simple', 'Internet', '2016-06-15 03:00:00', 'Generales', ''),
(8, 38115, '', 'Productores Rurales del Sud Coop. Ltda.', 'Bahía Blanca.', 'Remate por Internet.', 'Buenos Aires.', 'Pampeana', 'a-c.', 'simple', 'Internet', '2016-06-10 03:00:00', 'Generales', ''),
(9, 38116, '', 'Brandemann Consignataria S.R.L.', 'Eduardo Castex.', 'Remate por Pantalla.', 'La Pampa.', 'Pampeana', '1.500', 'simple', 'Internet', '2016-06-10 03:00:00', 'Generales', ''),
(10, 38118, '', 'Madelán S.A. ', 'Capital Federal.', 'Remate por Internet.', 'Buenos Aires.', 'Pampeana', 'a-c.', 'destacado', 'Internet', '2016-06-14 03:00:00', 'Generales', ''),
(11, 38119, '', 'Madelán S.A. ', 'Capital Federal.', 'Remate por Internet.', 'Buenos Aires.', 'Pampeana', 'a-c.', 'destacado', 'Internet', '2016-06-21 03:00:00', 'Generales', ''),
(12, 38120, '', 'Madelán S.A. ', 'Capital Federal.', 'Remate por Internet.', 'Buenos Aires.', 'Pampeana', 'a-c.', 'destacado', 'Internet', '2016-06-28 03:00:00', 'Generales', ''),
(13, 38121, '', 'Silvio Rubén Fernández  S.A.', 'Carlos Casares', 'Gordo,Invernada y Cría.', 'Buenos Aires', 'Pampeana', '700', 'simple', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(14, 38135, '', 'Pedro José Ronchi y Cía. S.R.L.', 'Coronel Vidal', 'Gordo,Invernada y Cría', 'Buenos Aires', 'Pampeana', '900', 'simple', 'Físico', '2016-06-24 03:00:00', 'Generales', ''),
(15, 38136, '', 'Hourcade Albelo y Cía. S.C.C.', 'Rauch', 'Gordo,Invernada y Cría.', 'Buenos Aires', 'Pampeana', '1.500', 'destacado', 'Físico', '2016-06-24 03:00:00', 'Generales', ''),
(16, 38141, '', 'Ferias del Centro S.R.L. ', 'Bolivar.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '800', 'simple', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(17, 38143, '', 'Vicar Ganadera S.A.', 'Victorica.', 'Gordo, invernada y cría.', 'La Pampa.', 'Pampeana', '1.200', 'simple', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(18, 38144, '', 'Cooperativa de Darregueira, Espartillar, Puán y Pigué.', 'Puán.', 'Gordo, invernada y cría.', 'La Pampa.', 'Pampeana', '1.200', 'simple', 'Físico', '2016-06-24 03:00:00', 'Generales', ''),
(19, 38148, '', 'Sivero y Cía. S.A.', 'Saladillo.', 'Gordo.', 'Buenos Aires.', 'Pampeana', '600', 'simple', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(20, 38149, '', 'Sivero y Cía. S.A.', 'Saladillo.', 'Gordo.', 'Buenos Aires.', 'Pampeana', '600', 'simple', 'Físico', '2016-06-21 03:00:00', 'Generales', ''),
(21, 38150, '', 'Sivero y Cía. S.A.', 'Saladillo.', 'Gordo.', 'Buenos Aires.', 'Pampeana', '600', 'simple', 'Físico', '2016-06-28 03:00:00', 'Generales', ''),
(22, 38154, '', 'Talano Hnos S.A.', 'Río Cuarto.', 'Remate televisado.', 'Córdoba.', 'Pampeana', '2.500', 'simple', 'Televisado', '2016-06-17 03:00:00', 'Generales', ''),
(23, 38156, '', 'Lanusse - Santillán y Cía. S.A. ', 'Lobos.', 'Gordo, invernada y cría, junto a La Ganadera de Lobos.', 'Buenos Aires.', 'Pampeana', '1.200', 'destacado', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(24, 38157, '', 'Lalor S.A.', 'General Belgrano.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '1.000', 'simple', 'Físico', '2016-06-23 03:00:00', 'Generales', ''),
(25, 38158, '', 'Colombo y Magliano S.A.', 'Formosa.', 'Remate Televisado del NEA.', 'Formosa.', 'Pampeana', '4.000', 'destacado', 'Televisado', '2016-06-23 03:00:00', 'Generales', ''),
(26, 38161, '', 'Monasterio Tatersall ? Coop. Agricola Ganadera de Tandil y Vela Ltda.', 'Tandil.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '1.000', 'destacado', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(27, 38162, '', 'Monasterio Tattersall S.A.', 'Maipú.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '600', 'destacado', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(28, 38163, '', 'Monasterio Tattersall S.A.', 'Laprida.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '800', 'destacado', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(29, 38164, '', 'Monasterio Tattersall S.A.', 'Daireaux.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '1.500', 'destacado', 'Físico', '2016-06-23 03:00:00', 'Generales', ''),
(30, 38166, '', 'Ferias Rauch S.A.', 'Rauch.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '1.200', 'destacado', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(31, 38170, '', 'Jorge Luis Doartero', 'Laprida.', 'Diferido por lluvia para el MIERCOLES 15', 'Buenos Aires.', 'Pampeana', '1.000', 'simple', 'Físico', '2016-06-10 03:00:00', 'Generales', '.'),
(32, 38169, '', 'Nestor Hugo Fuentes S.A.', 'General Acha.', 'Remate Aniversario.', 'La Pampa.', 'Pampeana', '2.000', 'destacado', 'Físico', '2016-06-10 03:00:00', 'Generales', ''),
(33, 38175, '', 'Alzaga Unzué y Cía. S.A.', 'Olavarría.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '1.000', 'destacado', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(34, 38176, '', 'Alzaga Unzué y Cía. S.A.', 'Benito Júarez.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '900', 'destacado', 'Físico', '2016-06-23 03:00:00', 'Generales', ''),
(35, 38181, '', 'Colombo y Magliano S.A.', 'Tintina.', 'Gordo, invernada y cría.', 'Santiago del Estero.', 'Pampeana', '1.500', 'destacado', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(36, 38182, '', 'Colombo y Magliano S.A.', 'Ayacucho.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '1.200', 'destacado', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(37, 38183, '', 'Colombo y Magliano S.A.', 'Chascomús.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '1.200', 'destacado', 'Físico', '2016-06-29 03:00:00', 'Generales', ''),
(38, 38185, '', 'Martin y Alonso S.R.L.', 'Huanguelén.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '1.200', 'destacado', 'Físico', '2016-06-22 03:00:00', 'Generales', ''),
(39, 38189, '', 'Ganadera Salliqueló S.A.', 'Salliquelo', 'Gordo,Invernada y Cría.', 'Buenos Aires', 'Pampeana', '1.300', 'simple', 'Físico', '2016-06-13 03:00:00', 'Generales', ''),
(40, 38201, '', 'Martin G. Lalor S.A.', 'Suipacha', 'Gordo,Invernada y Cría.', 'Buenos Aires', 'Pampeana', '600', 'destacado', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(41, 38195, '', 'Jauregui Lorda S.R.L.', 'Brandsen', 'Haciendas Generales.', 'Buenos Aires', 'Pampeana', '600', 'destacado', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(42, 38196, '', 'Jauregui Lorda S.R.L.', 'Brandsen', 'Invernada y Cría.', 'Buenos Aires', 'Pampeana', '3.000', 'destacado', 'Físico', '2016-06-17 03:00:00', 'Generales', ''),
(43, 38197, '', 'Jauregui Lorda S.R.L.', 'Brandsen', 'Haciendas Generales.', 'Buenos Aires', 'Pampeana', '600', 'destacado', 'Físico', '2017-06-22 03:00:00', 'Generales', ''),
(44, 38198, '', 'Jauregui Lorda S.R.L.', 'Brandsen', 'Haciendas Generales.', 'Buenos Aires', 'Pampeana', '600', 'destacado', 'Físico', '2016-06-29 03:00:00', 'Generales', ''),
(45, 38199, '', 'Jauregui Lorda S.R.L.', 'Ranchos', 'Consumo e Invernada', 'Buenos Aires', 'Pampeana', '900', 'destacado', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(46, 38200, '', 'Jauregui Lorda S.R.L.', 'Brandsen', 'Haciendas Generales.', 'Buenos Aires', 'Pampeana', '600', 'destacado', 'Físico', '2016-06-22 03:00:00', 'Generales', ''),
(47, 38202, '', 'Martin G. Lalor S.A.', 'Mercado de Liniers', 'Remate 30º Aniversario', 'Buenos Aires', 'Pampeana', 'a/c', 'destacado', 'Físico', '2016-06-23 03:00:00', 'Generales', ''),
(48, 38284, '', 'Martin G. Lalor S.A.', 'Lincoln', 'Gordo,Invernada y Cría', 'Buenos Aires', 'Pampeana', '800', 'destacado', 'Físico', '2016-06-29 03:00:00', 'Generales', ''),
(49, 38283, '', 'Martin G. Lalor S.A.', 'Union', 'Gordo,Invernada y Cría.', 'San Luis', 'Pampeana', '500', 'destacado', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(50, 38228, '', 'Emilio J. R. Servato y Cía. S.R.L.', 'Oliva.', 'Holando Argentino.', 'Córdoba.', 'Pampeana', '300', 'simple', 'Físico', '2016-06-10 03:00:00', 'Generales', ''),
(51, 38229, '', 'Pepa, Knubel y Ferrero S.R.L.', 'San Cristobal.', 'Invernada y cría.', 'Santa Fé.', 'Pampeana', '2.000', 'simple', 'Físico', '2016-06-10 03:00:00', 'Generales', ''),
(52, 38230, '', 'Aguirre Vázquez S.A.', 'Chajarí.', 'Haciendas generales.', 'Entre Ríos.', 'Pampeana', '500', 'simple', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(53, 38231, '', 'Eduardo A. Travaglia y Cía. S.A. ', 'La Toma.', 'Gordo, invernada y cría.', 'San Luis.', 'Pampeana', '700', 'simple', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(54, 38232, '', 'Etchevehere Rural S.R.L.', 'General Ramirez.', 'Gordo, invernada y cría.', 'Entre Ríos.', 'Pampeana', '700', 'simple', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(55, 38233, '', 'Pepa, Knubel y Ferrero S.R.L.', 'San Cristobal.', 'Gordo, invernada y cría.', 'Santa Fé.', 'Pampeana', '500', 'simple', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(56, 38234, '', 'Scaglia S.A.', 'Bell Ville.', 'Consumo y conserva.', 'Córdoba.', 'Pampeana', '600', 'simple', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(57, 38235, '', 'Scaglia S.A.', 'Villa Nueva.', 'Consumo y conserva.', 'Córdoba.', 'Pampeana', '600', 'simple', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(58, 38238, '', 'Emilio J. R. Servato y Cía. S.R.L.', 'Oncativo', 'Gordo e invernada.', 'Cordoba', 'Pampeana', '700', 'simple', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(59, 38239, '', 'Fiorito y Sebastiani S.A.', 'Armstrong', 'Gordo, invernada y crìa.', 'Santa Fè', 'Pampeana', '500', 'simple', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(60, 38240, '', 'Pepa, Knubel y Ferrero S.R.L.', 'Colonia Rosa', 'Gordo, invernada y crìa.', 'Santa Fè', 'Pampeana', '700', 'simple', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(61, 38241, '', 'Aguirre Vázquez S.A.', 'Alcorta', 'Invernada y crìa.', 'Santa Fè', 'Pampeana', '800', 'simple', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(62, 38242, '', 'Madelán S.A. ', 'Capital Federal', 'Remate por Internet.', 'Buenos Aires', 'Pampeana', '1.200', 'destacado', 'Internet', '2016-06-16 03:00:00', 'Generales', ''),
(63, 38243, '', 'Eduardo A. Travaglia y Cía. S.A. ', 'Sampacho', 'Gordo, invernada y crìa.', 'Cordoba', 'Pampeana', '800', 'simple', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(64, 38244, '', 'Ferias Rodeo Huinca S.R.L.', 'Huinca Renancò', 'Gordo e invernada. 10:00 hs.', 'Cordoba', 'Pampeana', '2.000', 'simple', 'Físico', '2016-06-17 03:00:00', 'Generales', ''),
(65, 38245, '', 'Ganadera Granada S.A. ', 'Coronel Granada', 'Gordo e invernada.', 'Buenos Aires', 'Pampeana', '1.000', 'simple', 'Físico', '2016-06-17 03:00:00', 'Generales', ''),
(66, 38246, '', 'Scaglia S.A.', 'Villa Dolores', 'Gordo, invernada y crìa. 11:00 hs.', 'Cordoba', 'Pampeana', '500', 'simple', 'Físico', '2016-06-17 03:00:00', 'Generales', ''),
(67, 38247, '', 'Scaglia S.A.', 'Concaràn', 'Gordo, invernada y crìa. 14:00 hs.', 'San Luis', 'Pampeana', '600', 'simple', 'Físico', '2016-06-17 03:00:00', 'Generales', ''),
(68, 38248, '', 'Etchevehere Rural S.R.L.', 'General Ramirez', 'Gordo, invernada y crìa.', 'Entre Rios', 'Pampeana', '500', 'simple', 'Físico', '2016-06-21 03:00:00', 'Generales', ''),
(69, 38249, '', 'Fiorito y Sebastiani S.A.', 'Isla Verde', 'Gordo, invernada y crìa.', 'Cordoba', 'Pampeana', '600', 'simple', 'Físico', '2016-06-21 03:00:00', 'Generales', ''),
(70, 38250, '', 'Aguirre Vázquez S.A.', 'Arrecifes', 'Gordo, invernada y crìa.', 'Santa Fè', 'Pampeana', '500', 'simple', 'Físico', '2016-06-22 03:00:00', 'Generales', ''),
(71, 38251, '', 'Coop. Ganadera El Pronunciamiento Ltda.', 'Bovril', '22º Certamen de Hacienda Terminada.', 'Entre Rios', 'Pampeana', '600', 'simple', 'Físico', '2016-06-22 03:00:00', 'Generales', ''),
(72, 38252, '', 'Emilio J. R. Servato y Cía. S.R.L.', 'Oliva', 'Gordo e invernada.', 'Cordoba', 'Pampeana', '500', 'simple', 'Físico', '2016-06-22 03:00:00', 'Generales', ''),
(73, 38253, '', 'Pepa, Knubel y Ferrero S.R.L.', 'San Cristòbal', 'Gordo e invernada.', 'Santa Fè', 'Pampeana', '500', 'simple', 'Físico', '2016-06-22 03:00:00', 'Generales', ''),
(74, 38254, '', 'Scaglia S.A.', 'Ticino', 'Gordo, invernada y crìa. 11:00 hs.', 'Cordoba', 'Pampeana', '600', 'simple', 'Físico', '2016-06-22 03:00:00', 'Generales', ''),
(75, 38255, '', 'Scaglia S.A.', 'Villa Marìa', 'Especial invernada. 14:30 hs.', 'Cordoba', 'Pampeana', '700', 'simple', 'Físico', '2016-06-22 03:00:00', 'Generales', ''),
(76, 38256, '', 'Aguirre Vázquez S.A.', 'Lincoln', 'Gordo, invernada y crìa.', 'Buenos Aires', 'Pampeana', '500', 'simple', 'Físico', '2016-06-23 03:00:00', 'Generales', ''),
(77, 38257, '', 'Eduardo A. Travaglia y Cía. S.A. ', 'Villa Mercedes', 'Gordo, invernada y crìa.', 'San Luis', 'Pampeana', '600', 'simple', 'Físico', '2016-06-23 03:00:00', 'Generales', ''),
(78, 38258, '', 'Coop. Ganadera El Pronunciamiento Ltda.', 'Basavilbaso', 'Gordo, invernada y crìa.', 'Entre Rios', 'Pampeana', '700', 'simple', 'Físico', '2016-06-24 03:00:00', 'Generales', ''),
(79, 38259, '', 'Emilio J. R. Servato y Cía. S.R.L.', 'Oncativo', 'Especial invernada y crìa.', 'Cordoba', 'Pampeana', '600', 'simple', 'Físico', '2016-06-24 03:00:00', 'Generales', ''),
(80, 38260, '', 'Aguirre Vázquez S.A.', 'El Trebol', 'Gordo, invernada y crìa.', 'Santa Fè', 'Pampeana', '500', 'simple', 'Físico', '2016-06-27 03:00:00', 'Generales', ''),
(81, 38263, '', 'Aguirre Vázquez S.A.', 'Chajarì', 'Gordo, invernada y crìa.', 'Entre Rios', 'Pampeana', '600', 'simple', 'Físico', '2016-06-28 03:00:00', 'Generales', ''),
(82, 38264, '', 'Etchevehere Rural S.R.L.', 'General Ramirez', 'Gordo, invernada y crìa.', 'Entre Rios', 'Pampeana', '700', 'simple', 'Físico', '2016-06-28 03:00:00', 'Generales', ''),
(83, 38265, '', 'Pepa, Knubel y Ferrero S.R.L.', 'San Cristòbal', 'Gordo e invernada.', 'Santa Fè', 'Pampeana', '700', 'simple', 'Físico', '2016-06-28 03:00:00', 'Generales', ''),
(84, 38266, '', 'Scaglia S.A.', 'Villa Nueva', 'Gordo, invernada y crìa.', 'Cordoba', 'Pampeana', '600', 'simple', 'Físico', '2016-06-28 03:00:00', 'Generales', ''),
(85, 38267, '', 'Coop. Ganadera El Pronunciamiento Ltda.', 'Rosario del Tala', 'Especial invernada.', 'Entre Rios', 'Pampeana', '500', 'simple', 'Físico', '2016-06-29 03:00:00', 'Generales', ''),
(86, 38268, '', 'Emilio J. R. Servato y Cía. S.R.L.', 'Oncativo', 'Gordo, invernada y crìa.', 'Cordoba', 'Pampeana', '600', 'simple', 'Físico', '2016-06-29 03:00:00', 'Generales', ''),
(87, 38269, '', 'Fiorito y Sebastiani S.A.', 'Santa Rosa de Rio Primero', 'Gordo, invernada y crìa.', 'Cordoba', 'Pampeana', '700', 'simple', 'Físico', '2016-06-29 03:00:00', 'Generales', ''),
(88, 38270, '', 'Pepa, Knubel y Ferrero S.R.L.', 'Colonia Rosa', 'Gordo e invernada.', 'Santa Fè', 'Pampeana', '600', 'simple', 'Físico', '2016-06-29 03:00:00', 'Generales', ''),
(89, 38271, '', 'Eduardo A. Travaglia y Cía. S.A. ', 'San Basilio', 'Gordo, invernada y crìa.', 'Cordoba', 'Pampeana', '700', 'simple', 'Físico', '2016-06-30 03:00:00', 'Generales', ''),
(90, 38274, '', 'Ferialvarez S.R.L.', 'Rio Cuarto', 'Gordo.', 'Cordoba', 'Pampeana', '400', 'simple', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(91, 38275, '', 'Ferialvarez S.R.L.', 'Laboulaye', 'Gordo e invernada.', 'Cordoba', 'Pampeana', '1.000', 'simple', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(92, 38276, '', 'Ferialvarez S.R.L.', 'Rio Cuarto', 'Gordo.', 'Cordoba', 'Pampeana', '500', 'simple', 'Físico', '2016-06-21 03:00:00', 'Generales', ''),
(93, 38277, '', 'Ferialvarez S.R.L.', 'Rio Cuarto', 'Invernada y crìa.', 'Cordoba', 'Pampeana', '1.200', 'simple', 'Físico', '2016-06-23 03:00:00', 'Generales', ''),
(94, 38278, '', 'Ferialvarez S.R.L.', 'Rio Cuarto', 'Gordo.', 'Cordoba', 'Pampeana', '600', 'simple', 'Físico', '2016-06-28 03:00:00', 'Generales', ''),
(95, 38279, '', 'Ferialvarez S.R.L.', 'Quines', 'Invernada y crìa.', 'San Luis', 'Pampeana', '1.200', 'simple', 'Físico', '2016-06-30 03:00:00', 'Generales', ''),
(96, 38280, '', 'Ferialvarez S.R.L.', 'Rio Cuarto', 'Gordo.', 'Cordoba', 'Pampeana', '600', 'simple', 'Físico', '2016-06-28 03:00:00', 'Generales', ''),
(97, 38281, '', 'Oregui Cía S.A', 'Saavedra', 'Gordo,Invernada y Cría.', 'Buenos Aires', 'Pampeana', '1.200', 'destacado', 'Físico', '2016-06-10 03:00:00', 'Generales', ''),
(98, 38288, '', 'Jauregui Lorda S.R.L.', 'Vieytes.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '1.800', 'destacado', 'Físico', '2016-06-10 03:00:00', 'Generales', ''),
(99, 38286, '', 'Martin G. Lalor S.A.', 'Venado Tuerto', 'Gordo,Invernada y Cría. 15 Hs.', 'Santa Fe', 'Pampeana', '700', 'destacado', 'Físico', '2016-06-30 03:00:00', 'Generales', ''),
(100, 38287, '', 'Martin G. Lalor S.A.', 'Rufino', 'Gordo,Invernada y Cría. 11 Hs.', 'Santa Fe', 'Pampeana', '600', 'destacado', 'Físico', '2016-06-30 03:00:00', 'Generales', ''),
(101, 38291, '', 'Ganadera Pampeana S.R.L.', 'General Acha.', 'Gordo, invernada y cría.', 'La Pampa.', 'Pampeana', '1.100', 'simple', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(102, 38292, '', 'Carossia y Galcerán S.A.', 'Caleofú.', 'Gordo, invernada y cría.', 'La Pampa.', 'Pampeana', '900', 'simple', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(103, 38293, '', 'Ganaderos de General Acha S.A.', 'General Acha.', 'Gordo, invernada y cría.', 'La Pampa.', 'Pampeana', '1.000', 'simple', 'Físico', '2016-06-17 03:00:00', 'Generales', ''),
(104, 38294, '', 'Vicar Ganadera S.A.', 'Toay.', 'Gordo, invernada y cría.', 'La Pampa.', 'Pampeana', '1.000', 'simple', 'Físico', '2016-06-23 03:00:00', 'Generales', ''),
(105, 38295, '', 'Nestor Hugo Fuentes S.A.', 'General Acha.', 'Remate Aniversario.', 'La Pampa.', 'Pampeana', '2.000', 'destacado', 'Físico', '2016-06-24 03:00:00', 'Generales', ''),
(106, 38296, '', 'Raúl Battistoni S.R.L.', 'Santa Rosa.', 'Remate Aniversario.', 'La Pampa.', 'Pampeana', '1.000', 'simple', 'Físico', '2016-06-28 03:00:00', 'Generales', ''),
(107, 38298, '', 'Pedro Noel Irey S.R.L.', 'Brandsen.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '4.000', 'simple', 'Físico', '2016-06-10 03:00:00', 'Generales', ''),
(108, 38302, '', 'Ricardo Peiretti S.A.', 'San Jorge', 'Gordo, invernada y crìa.', 'Buenos Aires', 'Pampeana', '2.000', 'destacado', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(109, 38303, '', 'Nestor I. Goenaga y Cía. S.A.', 'Azul', 'Gordo.', 'Buenos Aires', 'Pampeana', '400', 'destacado', 'Físico', '2017-06-09 03:00:00', 'Generales', ''),
(110, 38307, '', 'Wallace Hnos. S.A.', 'Azul', 'Gordo,Invernada y Cría.', 'Buenos Aires', 'Pampeana', '2.000', 'destacado', 'Físico', '2016-06-22 03:00:00', 'Generales', ''),
(111, 38308, '', 'Adolfo S. Koerner y Cía. S.A.', 'Azul', 'Gordo,Invernada y Cría.', 'Buenos Aires', 'Pampeana', '900', 'destacado', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(112, 38360, '', 'Jorge Luis Doartero', 'Laprida', 'Gordo,Invernada y Cría.', 'Buenos Aires', 'Pampeana', '1.300', 'simple', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(113, 38311, '', 'Colombo y Magliano S.A.', 'Villaguay', 'Especial de Vientres Entrerrianos', 'Entre Rios', 'Pampeana', '3.000', 'destacado', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(114, 38312, '', 'Ledesma y Arana S.R.L.', 'Tandil.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '1.400', 'destacado', 'Físico', '2016-06-10 03:00:00', 'Generales', ''),
(115, 38313, '', 'Sucesores de Brivio y Cía. S.R.L.', 'Tandil.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '600', 'destacado', 'Físico', '2016-06-13 03:00:00', 'Generales', ''),
(116, 38314, '', 'Alfredo Sebastian Mondino', 'Buena Esperanza', 'Gordo, invernada y crìa.', 'San Luis', 'Pampeana', '4.500', 'destacado', 'Físico', '2016-06-10 03:00:00', 'Generales', ''),
(117, 38315, '', 'Wallace Hnos. S.A.', 'General La Madrid', 'Gordo, invernada y crìa.', 'Buenos Aires', 'Pampeana', '1.000', 'destacado', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(118, 38320, '', 'Consignataria Hasenkamp S.R.L.', 'Rosario del Tala', 'Gordo, invernada y crìa.', 'Entre Rios', 'Pampeana', '800', 'simple', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(119, 38321, '', 'Consignataria Hasenkamp S.R.L.', 'Hasenkamp', 'Gordo, invernada y crìa.', 'Entre Rios', 'Pampeana', '700', 'simple', 'Físico', '2016-06-15 03:00:00', 'Generales', ''),
(120, 38322, '', 'Sáenz Valiente, Bullrich y Cía. S.A.', 'Capital Federal.', 'Remate Televisado. 15:00 hs.', 'Buenos Aires', 'Pampeana', '2.500', 'simple', 'Televisado', '2016-06-15 03:00:00', 'Generales', ''),
(121, 38323, '', 'Consignataria Edgardo Vittori S.A.', 'Bahia Blanca', 'DIFERIDO PARA EL 23 DE JUNIO', 'Buenos Aires', 'Pampeana', 'a-c', 'destacado', 'Internet', '2016-06-16 03:00:00', 'Generales', '.'),
(122, 38324, '', 'Colombo y Magliano S.A.', 'Ayacucho', 'Gordo, invernada y crìa.', 'Buenos Aires', 'Pampeana', '600', 'destacado', 'Físico', '2016-06-17 03:00:00', 'Generales', ''),
(123, 38325, '', 'Consignataria Hasenkamp S.R.L.', 'Chajarì', 'Gordo, invernada y crìa.', 'Entre Rios', 'Pampeana', '700', 'simple', 'Físico', '2016-06-17 03:00:00', 'Generales', ''),
(124, 38326, '', 'Consignataria Hasenkamp S.R.L.', 'La Paz', 'Gordo, invernada y crìa.', 'Entre Rios', 'Pampeana', '700', 'simple', 'Físico', '2016-06-17 03:00:00', 'Generales', ''),
(125, 38327, '', 'Consignataria Hasenkamp S.R.L.', 'Nogoyà', 'Gordo, invernada y crìa.', 'Entre Rios', 'Pampeana', '800', 'simple', 'Físico', '2016-06-21 03:00:00', 'Generales', ''),
(126, 38328, '', 'Consignataria Hasenkamp S.R.L.', 'Hasenkamp', 'Gordo, invernada y crìa.', 'Entre Rios', 'Pampeana', '700', 'simple', 'Físico', '2016-06-22 03:00:00', 'Generales', ''),
(127, 38329, '', 'Alfredo Sebastian Mondino', 'Olavarria', 'Gordo, invernada y crìa.', 'Buenos Aires', 'Pampeana', '1.100', 'destacado', 'Físico', '2016-06-24 03:00:00', 'Generales', ''),
(128, 38330, '', 'Consignataria Hasenkamp S.R.L.', 'Hasenkamp', 'Gordo, invernada y crìa.', 'Entre Rios', 'Pampeana', '700', 'simple', 'Físico', '2016-06-29 03:00:00', 'Generales', ''),
(129, 38331, '', 'Aguirre Vázquez S.A.', 'El Trebol', 'Gordo, invernada y crìa.', 'Santa Fè', 'Pampeana', '800', 'simple', 'Físico', '2016-06-10 03:00:00', 'Generales', ''),
(130, 38348, '', 'Consignataria Edgardo Vittori S.A.', 'Bahia Blanca', 'Remate x Internet', 'Buenos Aires', 'Pampeana', 'a/c', 'destacado', 'Internet', '2016-06-23 03:00:00', 'Generales', ''),
(131, 38333, '', 'Colombo y Magliano S.A.', 'Piranè', 'Gordo, invernada y crìa.', 'Formosa', 'Pampeana', '1.500', 'destacado', 'Físico', '2016-06-30 03:00:00', 'Generales', ''),
(132, 38336, '', 'Pedro Noel Irey S.R.L.', 'Ranchos', 'Especial Holando Argentino.', 'Buenos Aires', 'Pampeana', '150', 'simple', 'Físico', '2016-06-28 03:00:00', 'Generales', ''),
(133, 38340, '', 'Sáenz Valiente, Bullrich y Cía. S.A.', 'Cañuelas', 'Gordo, invernada y crìa. 11:00 hs.', 'Buenos Aires', 'Pampeana', '500', 'simple', 'Físico', '2016-06-14 03:00:00', 'Generales', ''),
(134, 38341, '', 'Sáenz Valiente, Bullrich y Cía. S.A.', 'Las Flores', 'Solo Vientres.', 'Buenos Aires', 'Pampeana', 'a-c', 'simple', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(135, 38349, '', 'La Agrícola Ganadera de Tres Arroyos - Eduardo Eguilegor', 'San Cayetano.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '600', 'simple', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(136, 38344, '', 'Agricultores Federados Argentinos S.C.L.', 'Monje', 'Remate Televisado. 13:30 Hs.', 'Santa Fè', 'Pampeana', '1.500', 'simple', 'Televisado', '2016-06-10 03:00:00', 'Generales', ''),
(137, 38345, '', 'Ganadera Granada S.A. ', 'Lincoln', 'Gordo, invernada y crìa.', 'Buenos Aires', 'Pampeana', '2.000', 'simple', 'Físico', '2016-06-10 03:00:00', 'Generales', ''),
(138, 38346, '', 'Consignataria Hasenkamp S.R.L.', 'Hasenkamp', 'Remate Televisado.', 'Entre Rios', 'Pampeana', 'a-c', 'simple', 'Televisado', '2016-06-13 03:00:00', 'Generales', ''),
(139, 38347, '', 'Monasterio Tattersall S.A.', 'Carlos Tejedor', 'Gordo, invernada y crìa.', 'Buenos Aires', 'Pampeana', '800', 'destacado', 'Físico', '2016-06-28 03:00:00', 'Generales', ''),
(140, 38350, '', 'Duhalde y Cía S.R.L. - Aguerre S.R.L.', 'Corrientes.', 'Remate Televisado.', 'Corrientes.', 'Pampeana', 'a-c.', 'simple', 'Televisado', '2016-06-16 03:00:00', 'Generales', ''),
(141, 38351, '', 'Lartirigoyen y Oromí S.A.', 'Capital Federal.', 'Remate Televisado.', 'Buenos Aires.', 'Pampeana', 'a-c.', 'simple', 'Televisado', '2016-06-21 03:00:00', 'Generales', ''),
(142, 38352, '', 'U.M.C. S.A.', 'Corrientes.', 'Remate Televisado.', 'Corrientes.', 'Pampeana', 'a-c.', 'simple', 'Televisado', '2016-06-22 03:00:00', 'Generales', ''),
(143, 38353, '', 'Coop. La Ganadera de General Ramirez Ltda.', 'General Ramirez.', 'Remate Televisado.', 'Entre Rìos.', 'Pampeana', 'a-c.', 'simple', 'Televisado', '2016-06-24 03:00:00', 'Generales', ''),
(144, 38354, '', 'M.I.C.', 'Capital Federal.', 'Remate Televisado.', 'Buenos Aires.', 'Pampeana', 'a-c.', 'simple', 'Televisado', '2016-06-29 03:00:00', 'Generales', ''),
(145, 38355, '', 'Campos y Ganados S.A.', 'Capital Federal.', 'Remate Televisado.', 'Buenos Aires.', 'Pampeana', 'a-c.', 'simple', 'Televisado', '2016-06-30 03:00:00', 'Generales', ''),
(146, 38356, '', 'Nestor I. Goenaga y Cía. S.A.', 'Azul.', 'Gordo, invernada y cría.', 'Buenos Aires.', 'Pampeana', '1.500', 'destacado', 'Físico', '2016-06-16 03:00:00', 'Generales', ''),
(147, 38361, '', 'Ganadera Salliqueló S.A.', 'Coronel Pringles', 'Gordo,Invernada y Cría. 11 hs', 'Buenos Aires', 'Pampeana', '1.100', 'simple', 'Físico', '2016-06-11 03:00:00', 'Generales', ''),
(148, 38362, '', 'Ganadera Salliqueló S.A.', 'Coronel Pringles', 'Gordo,Invernada y Cría. 11 hs', 'Buenos Aires', 'Pampeana', '1.100', 'simple', 'Físico', '2016-06-11 03:00:00', 'Generales', ''),
(149, 38363, '', 'Ganadera Salliqueló S.A.', 'Coronel Pringles', 'DIFERIDO PARA MAÑANA SABADO 11', 'Buenos Aires', 'Pampeana', '1.100', 'simple', 'Físico', '2016-06-10 03:00:00', 'Generales', '.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

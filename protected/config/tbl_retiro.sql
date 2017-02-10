-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2016 a las 16:43:42
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
-- Estructura de tabla para la tabla `tbl_retiro`
--

CREATE TABLE `tbl_retiro` (
  `id` int(11) NOT NULL,
  `producto` varchar(150) NOT NULL,
  `pais` varchar(150) NOT NULL,
  `nombreComercial` varchar(150) NOT NULL,
  `retiroCarne` varchar(150) NOT NULL,
  `retiroLeche` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_retiro`
--

INSERT INTO `tbl_retiro` (`id`, `producto`, `pais`, `nombreComercial`, `retiroCarne`, `retiroLeche`) VALUES
(1, 'Aciendel (Solución pour-on)', 'Argentina', 'Aciendel', '6 d', 'puede usarse inmediatamente despues\ndel ordeñe y hasta 6hs antes del proximo'),
(2, 'Aciendel Plus (Solución pour-\non)', 'Argentina', 'Aciendel Plus', '35 d', 'Puede usarse inmediatamente despues\ndel ordeñe y hasta 12 hs antes del proximo'),
(3, 'Adaptador Min (solución\ninyectable)', 'Argentina', 'Adaptador Min', '0 d', '0 d'),
(4, 'Adaptador Vit (solución\ninyectable)', 'Argentina', 'Adaptador Vit', '0 d', '0 d'),
(5, 'Arrasa (Solución pour-on)', 'Argentina', 'Arrasa', '10 d', '12 hs'),
(6, 'Arrasa Ovinos (Solución pour-\non)', 'Argentina', 'Arrasa Ovinos', '10 d', 'No usar'),
(7, 'Aspersin (Solución\nemulsionable)', 'Argentina', 'Aspersin', '34 y 250 mL: 17\ndias\n5 L: 21 días', '5 L: No usar; 250 y 34 mL: 120 hs'),
(8, 'Bago AD3E (Solución inyectable)', 'Argentina', 'Bagó AD3E', '0 d', '0 d'),
(9, 'Bagomectina (Solución\ninyectable)', 'Argentina', 'Bagomectina', 'Bov y Ov: 35 d.\nPorc: 18 d.', 'Vacas: No usar ni dentro de los 28\nd previos al parto. Ovejas: No usar'),
(10, 'Bagomectina 3,15 LA AD3E\n(Solución inyectable)', 'Argentina', 'Bagomectina 3,15 LA\nAD3E', 'Bov: 50 d. Ov: 14\nd', 'No usar'),
(11, 'Bagomectina AD3E Forte\n(Solución inyectable)', 'Argentina', 'Bagomectina AD3E Forte', 'Bov: 35 d. Ov: 28\nd', 'Vacas: No aplicar en vacas lecheras\nen lactación ni dentro de los 35 días previos al parto cuando la leche se destine a consumo humano o industrialización.  Ovinos:  No aplicar en animeles en lactación ni dentro de los 28 días previos al parto cuando la leche se destine a consumo humano o industrialización'),
(12, 'Bagomectina Equina (Gel para\nadministración oral)', 'Argentina', 'Bagomectina Equina', '14 d', 'N/A'),
(13, 'Bagomectina LA AD3E (Solución\ninyectable)', 'Argentina', 'Bagomectina LA AD3E', 'Bov y Ov: 48 d.\nPorc: 28 d', 'Bov y Ov: No usar ni dentro de los\n38 d. Previos al parto'),
(14, 'Bagomectina LA STAR\n(Exportación) (Solución inyectable)', 'Argentina', 'N/A', '50 d', 'No usar'),
(15, 'Bagomectina STAR  (Solución\ninyectable)', 'Argentina', 'Bagomectina STAR', '56 d', 'No usar'),
(16, 'Bagomectina Star L.A. AD3E\nVitaminada\n(Exportación)(Solución inyectable)', 'Argentina', 'N/A', '50 d', 'No usar'),
(17, 'Bagopell (Pellets inyectables)', 'Argentina', 'N/A', 'Bov: 65 d. Ov: 40\nd', 'N/A'),
(18, 'Bioestrogen (Solución\ninyectable)', 'Argentina', 'Bioestrogen', '0 d', '30 d'),
(19, 'Biofasiolex T 10 (Suspensión\nacuosa para administración oral)', 'Argentina', 'Biofasiolex T 10', '28 d', 'No usar'),
(20, 'Bovifort (Solución inyectable)', 'Argentina', 'Bovifort', 'Bov y Ov: 49 d.\nPorc: 28 d', 'No  administrar  a  animales  en\nlactancia. No administrar a bovinos\n28 días previos al parto.'),
(21, 'Cantrimol (Polvo para\nreconstituir a solución inyectable)', 'Argentina', 'Cantrimol', '30 d', '7 días'),
(22, 'Ceftiomax (Suspensión\ninyectable)', 'Argentina', 'Ceftiomax', '2 d', '0 d'),
(23, 'Cipersin 15%  (Líquido\nconcentrado emulsionable)', 'Argentina', 'N/A', '2 d', '2 d'),
(24, 'Cipersin (Líquido concentrado\nemulsionable)', 'Argentina', 'Cipersin', '2 d', '2 d'),
(25, 'Croni-Cip (Solución inyectable)', 'Argentina', 'Croni-Cip', '0 días', '0 d'),
(26, 'Ecegon (Inyectable liofilizado)', 'Argentina', 'Ecegon', '0 d', '0 d'),
(27, 'Enzaprost DC (Solución\ninyectable)', 'Argentina', 'Enzaprost DC', '24 hs', '4 hs'),
(28, 'Estreptocarbocaftiazol\n(Suspensión oral)', 'Argentina', 'Estreptocarbocaftiazol', '12 d', '72 hs'),
(29, 'Estreptopendiben 5.000.000 UI\n(Suspensión inyectable)', 'Argentina', 'Estreptopendiben\n5.000.000 UI', '30 d', '4 d'),
(30, 'Flok (solución inyectable)', 'Argentina', 'Flok', 'Bov y Ov: 44 d', 'No usar'),
(31, 'Flok 3,15% (solución\ninyectable)', 'Argentina', 'Flok 3,15%', 'Bov y Ov: 52 d', 'No usar'),
(32, 'Floroxin (Solución inyectable)', 'Argentina', 'Floroxin', 'Bov y Porc: 28 d', 'No usar'),
(33, 'Forbox (Solución pour-on)', 'Argentina', 'Forbox', '6 semanas', 'No usar'),
(34, 'Fortium (Gel para\nadministración oral)', 'Argentina', 'Fortium', '14 d', 'N/A'),
(35, 'Fosfamisol MV (Solución\ninyectable para administración subcutánea, intramuscular, intrarruminal e intraperitoneal)', 'Argentina', 'Fosfamisol MV', '7 d', '48 hs'),
(36, 'Galgosantel Oral 15 (Solución\noral)', 'Argentina', 'Galgosantel Oral 15', '30 d', 'No usar'),
(37, 'Galgosantel Oral 7,5% (Solución\noral)', 'Argentina', 'Galgosantel Oral 7,5%', '30 d', 'No usar'),
(38, 'Galmetrin Plus Polvo (Polvo\npara aplicación local)', 'Argentina', 'Galmetrin Plus Polvo', '48 hs. No usar en\nequinos', '48 hs'),
(39, 'Galmetrin Plus Pomada', 'Argentina', 'Galmetrin Plus Pomada', '48 hs.', '48 hs'),
(40, 'Galmetrin Plus Solución\n(Solución para administración tópica)', 'Argentina', 'Galmetrin Plus\nSolución', '48 hs', '48 hs'),
(41, 'Galmetrin Plus Spray (Aerosol)', 'Argentina', 'Galmetrin Plus Spray', '0 d', '0 d'),
(42, 'Garramix (Líquido concentrado\nemulsionable)', 'Argentina', 'Garramix', '14 días', 'No usar'),
(43, 'Gonaxal (Solución inyectable)', 'Argentina', 'Gonaxal', '0 d', '0 d'),
(44, 'Ivergen (Solución inyectable)', 'Argentina', 'Ivergen', 'Bov: 35 d, Ov: 28\nd, Porc.:18 d', 'No usar'),
(45, 'Maxibiotic L.A. (Solución\ninyectable)', 'Argentina', 'Maxibiotic LA', '28 d', 'No usar'),
(46, 'Maxityl (Solución inyectable)', 'Argentina', 'Maxityl', '28 d', 'No usar'),
(47, 'Maxityl Platinum (Solución\ninyectable)', 'Argentina', 'Maxityl Platinum', '28 d', 'No usar'),
(48, 'Paraxane 10% (Suspensión oral)', 'Argentina', 'Paraxane 10%', '8 días. No usar en\nequinos cuando la carne se destine a consumo humano', '0 d'),
(49, 'Paraxane Inyectable (Solución\ninyectable)', 'Argentina', 'Paraxane Inyectable', '49 d', '120 hs (10 ordeñes)'),
(50, 'Policalcina (Solución\ninyectable)', 'Argentina', 'Policalcina', '0 d', '0 d'),
(51, 'Stand Up (Solución inyectable)', 'Argentina', 'Stand Up', '90 d', '10 d'),
(52, 'Suplenut (Solución inyectable)', 'Argentina', 'Suplenut', '0 d', '0 d'),
(53, 'Ubresan Sell (Pasta para\nadministración intramamaria)', 'Argentina', 'Ubresan Sell', '0 d', '0 d');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_retiro`
--
ALTER TABLE `tbl_retiro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_retiro`
--
ALTER TABLE `tbl_retiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

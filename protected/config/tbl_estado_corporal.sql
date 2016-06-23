-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2016 a las 18:02:10
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
-- Estructura de tabla para la tabla `tbl_estado_corporal`
--

CREATE TABLE `tbl_estado_corporal` (
  `id` int(11) NOT NULL,
  `raza` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `indice` int(10) NOT NULL,
  `info` text NOT NULL,
  `grafica` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_estado_corporal`
--

INSERT INTO `tbl_estado_corporal` (`id`, `raza`, `estado`, `indice`, `info`, `grafica`) VALUES
(2, 'angus', 'Flaca', 1, 'Profunda cavidad alrededor del nacimiento de la cola. Huesos pelvianos y coxales fácilmente palpables. Ausencia total de tejido adiposo. Marcada depresión pelviana y lumbar. </br>\r\nLas vacas en este estado corporal no son funcionales. Están en anestro profundo. Capacidad de lactación comprometida.', 1),
(3, 'angus', 'Regular', 2, 'Cavidad menos pronunciada alrededor de la encoladura.</br>\nPresencia de algo de tejido adiposo. Extremos de costillas algo redondeados. Insuficientes reservas corporales. Luego del parto bajará su estado corporal y se comprometerá su performance reproductiva y lactancia. </br>\n', 1),
(4, 'angus', 'Ideal al parto', 3, 'Desaparece cavidad alrededor de la cola. Presencia de tejido adiposo no exagerado en esa superficie. </br>\r\nExtremos de costillas cortas cubiertas, aunque palpables con leve presión.', 1),
(5, 'angus', 'Sobrepeso', 4, 'Aparición de mayor tejido adiposo cubriendo toda la pelvis, costillas cortas invisibles y difíciles de palpar.</br>\r\nEstado ideal aunque sería antieconómico. Vacas cíclicas. Excelente lactancia. Buenos índices de preñez, pero es indicativo de baja carga por\r\nhectárea.', 1),
(6, 'angus', 'Obesa', 5, 'Engrasamiento exagerado. Desaparece toda la forma de la pelvis. Costillas cortas no palpables. Totalmente excedida de gordura. Antieconómica e incluso con riesgos reproductivos por exceso de grasa.', 1),
(7, 'hereford', 'Emaciada', 1, 'Profunda cavidad alrededor del nacimiento de la cola. Huesos pelvianos y coxales fácilmente palpables. Ausencia total de tejido adiposo. Marcada depresión pelviana y lumbar. </br>\r\nLas vacas en este estado corporal no son funcionales. Están en anestro profundo. Capacidad de lactación comprometida.', 1),
(8, 'hereford', 'Flaca', 2, 'Cavidad menos pronunciada alrededor de la encoladura. Presencia de algo de tejido adiposo. Extremos de costillas algo redondeados. Insuficientes reservas corporales. Luego del parto bajará su estado corporal y se comprometerá su performance reproductiva y lactancia. Anestro superficial.', 1),
(9, 'hereford', 'Promedio', 3, 'Desaparece cavidad alrededor de la cola. Presencia de tejido adiposo no\r\nexagerado en esa superficie. Extremos de costillas cortas cubiertas, aunque palpables con leve presión. Estado próximo al ideal en estado post parto. Buena reserva que va a estar asociada a vacas cíclicas y de buena lactancia. Carga justa por hectárea de campo.', 1),
(10, 'hereford', 'Gorda', 4, 'Aparición de mayor tejido adiposo cubriendo toda la pelvis, costillas cortas\r\ninvisibles y difíciles de palpar. Estado ideal aunque será antieconómico.\r\nVacas cíclicas. Excelente lactancia. Buenos índices de preñez, pero es\r\nindicativo de baja carga por hectárea.', 1),
(11, 'hereford', 'Obesa', 5, 'Engrasamiento exagerado. Desaparece toda la forma de la pelvis.</b>\r\nCostillas cortas no palpables.</b>\r\nTotalmente excedida de gordura.</b>\r\nAntieconómica e incluso con riesgos reproductivos por exceso de grasa.', 1),
(12, 'brangus', 'Emaciada', 1, 'La estructura ósea del hombro, costillas, dorso y cadera es\r\nangulosa, muy sobresaliente y áspera al tacto. Hay severa\r\npérdida muscular con ausencia total de grasa y debilidad física.', 0),
(13, 'brangus', 'Conserva flaca', 2, 'Estructuras óseas con alguna cobertura muscular, especialmente en\r\nel hombro y cuarto posterior. Las apófisis espinosas y transversas de\r\nlas vértebras se ven con facilidad, son ásperas al tacto y muestran los\r\nespacios entre ellas.', 0),
(14, 'brangus', 'Conserva  buena', 3, 'La cobertura muscular ha aumentado pero es aún insuficiente para cubrir\r\ncostillas o rellenar el dorso, lomo y cadera. Las apófisis espinosas todavía\r\nson visibles y las tuberosidades de la cadera se mantienen angulosas.', 0),
(15, 'brangus', 'Manufactura', 4, 'Las marcas de las costillas anteriores no son visibles. Los cuartos posteriores\r\npresentan una cobertura muscular de forma recta.</br>\r\nLas tuberosidades de la cadera comienzan a redondearse. Se detecta leve\r\nmullidez en la zona lumbar.', 0),
(16, 'brangus', 'Empulpada', 5, 'No son visibles las costillas excepto en animales desbastados.\r\nLa zona lumbar y la grupa comienzan a redondearse. La zona media de\r\nlas costillas comienza a palparse esponjosa. Las áreas a cada lado de la\r\nbase de la cola están rellenas pero no abultadas.', 0),
(17, 'brangus', 'Consumo local', 6, 'Los cuartos posteriores se observan rellenos y redondeados. La cobertura\r\nde las costillas, el ala de la cadera y base de la cola es gruesa y muy\r\nesponjosa.', 0),
(18, 'brangus', 'Consumo especial', 7, 'El animal se ve redondeado con una cobertura grasa uniforme. Se observa\r\nabundante acumulación de grasa a cada lado de la base de la cola con\r\nformación de depósitos.', 0),
(19, 'brangus', 'Gorda', 8, 'El animal toma un aspecto liso y cilíndrico. La estructura ósea es difícil\r\nde visualizar. La cobertura grasa se presenta muy gruesa y esponjosa\r\ncon presencia de depósitos localizados alrededor de la cola, pecho y ubre\r\n(polizones).', 0),
(20, 'brangus', 'Engrasada en exceso', 9, 'Presenta depósitos grasos aún más marcados que en la C. C. anterior\r\nen pecho, ubre y cuarto posterior. La movilidad del animal puede verse\r\ndificultada por el exceso de grasa. En nuestros sistemas de producción se\r\nobserva sólo raramente esta C. C.', 0),
(21, 'braford', 'Emaciada', 1, 'La estructura del hombro, costillas, dorso y cadera es angulosa, muy\r\nsobresaliente y áspera al tacto. Hay una severa pérdida muscular con\r\nausencia de grasa y debilidad física.', 0),
(22, 'braford', 'Conserva flaca', 2, 'Estructuras óseas con alguna cobertura muscular, especialmente en el\r\nhombro y cuarto posterior. Las apófisis espinosas y transversas de las\r\nvértebras se ven con facilidad, son ásperas al tacto y muestran los espacios\r\nentre ellas.', 0),
(23, 'braford', 'Conserva buena', 3, 'La cobertura muscular ha aumentado pero es aún insuficiente para cubrir\r\ncostillas o rellenar el dorso, lomo y cadera. Las apófisis espinosas todavía\r\nson visibles y las tuberosidades de la cadera se mantienen angulosas.', 0),
(24, 'braford', 'Manufactura', 4, 'Las marcas de las costillas anteriores no son visibles. Los cuartos\r\nposteriores presentan una cobertura muscular de forma recta.\r\nLas tuberosidades de la cadera comienzan a redondearse.\r\nSe detecta leve mullidez en la zona lumbar.', 0),
(25, 'braford', 'Empulpada', 5, 'No son visibles las costillas excepto en animales desbastados. La zona\r\nlumbar y la grupa comienzan a redondearse. La zona media de las costillas\r\ncomienza a palparse esponjosa. Las áreas a cada lado de la cola están\r\nrellenas pero no abultadas.', 0),
(26, 'braford', 'Consumo local', 6, 'Los cuartos posteriores se observan rellenos y redondeados.\r\nLa cobertura de las costillas, el ala de la cadera y base de la cola es\r\ngruesa y muy esponjosa.', 0),
(27, 'braford', 'Consumo especial', 7, 'El animal se ve redondeado con una cobertura grasa uniforme. Se observa\r\nabundante acumulación de grasa a cada lado de la base de la cola con\r\nformación de depósitos.', 0),
(28, 'braford', 'Gorda', 8, 'El animal toma un aspecto liso y cilíndrico. La estructura ósea es difícil\r\nde visualizar. La cobertura grasa se presenta muy gruesa y esponjosa con\r\ndepósitos localizados alrededor de la cola, pecho y ubre (polizones).', 0),
(29, 'braford', 'Engrasada en exceso', 9, 'Presenta depósitos grasos aún más marcados que en la C. C. anterior\r\nen pecho, ubre y cuarto posterior. La movilidad del animal puede verse\r\ndificultada por el exceso de grasa. En nuestros sistemas de producción se\r\nobserva sólo raramente esta C. C.', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_estado_corporal`
--
ALTER TABLE `tbl_estado_corporal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_estado_corporal`
--
ALTER TABLE `tbl_estado_corporal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2021 a las 06:02:13
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnobox`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `ID` int(10) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Categoria` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Etiqueta` varchar(50) NOT NULL,
  `Stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`ID`, `Nombre`, `Categoria`, `Descripcion`, `Etiqueta`, `Stock`) VALUES
(1, 'Ubuntu', 'Laptop', 'Tiene una pequeña grieta en la parte de adelante', 'UBU1', 1),
(7, 'Magallanes 2018', 'Laptop', 'Wifi rota', 'ubu3', 1),
(8, 'auriculares sony', 'Cables', 'funicona perfectamente', 'au1', 5),
(11, 'Monitor AOC', 'Periféricos', 'Negro 20´', '12', 1),
(12, 'Monitor Olidata', 'Periféricos', 'Negro y Gris 22´', '11', 1),
(13, 'Auriculares iPhone', 'Periféricos', 'conector jack 3.5mm', '', 11),
(14, 'Cable VGA', 'Cables', '', '', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `Fechayhora` datetime NOT NULL,
  `ID` int(10) DEFAULT NULL,
  `CI` int(8) NOT NULL,
  `Plazo` date DEFAULT NULL,
  `Devolución` date DEFAULT NULL,
  `Cantidad` int(3) DEFAULT NULL,
  `Usuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`Fechayhora`, `ID`, `CI`, `Plazo`, `Devolución`, `Cantidad`, `Usuario`) VALUES
('2021-11-01 11:01:00', 7, 54313710, '2021-11-08', '2021-11-07', 1, 'NicoEugui'),
('2021-11-06 07:00:00', 8, 37713276, '2021-11-08', '2021-11-07', 2, 'Programador'),
('2021-11-06 08:00:00', 13, 54159518, '2021-11-06', '2021-11-07', 1, 'Arizona Robbins'),
('2021-11-06 12:47:00', 13, 54159518, '2021-11-14', '2021-11-07', 1, 'Meredith Grey'),
('2021-11-06 16:06:00', 8, 34131887, '2021-11-14', '2021-11-07', 2, 'Cristina Yang'),
('2021-11-07 00:15:00', 13, 34131887, '2021-11-10', '2021-11-07', 1, 'Programador'),
('2021-11-07 00:24:00', 12, 54159518, '2021-11-28', '2021-11-07', 1, 'Programador'),
('2021-11-07 11:11:00', 1, 54313710, '2021-11-08', '2021-11-07', 1, 'NicoEugui'),
('2021-11-07 12:45:00', 1, 37713276, '2021-11-12', '2021-11-07', 1, 'Mark Sloan'),
('2021-11-07 12:47:00', 13, 54159518, '2021-11-14', '2021-11-07', 1, 'Meredith Grey'),
('2021-11-08 07:25:00', 1, 12345678, '2021-11-08', '2021-11-08', 1, 'Programador'),
('2021-11-08 20:59:00', 1, 58995699, '2021-11-18', NULL, 1, 'Programador'),
('2021-11-30 10:41:00', 8, 54159518, '0000-00-00', NULL, 2, 'Programador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `CI` int(8) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Cargo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`CI`, `Nombre`, `Cargo`) VALUES
(9631237, 'Joaco Benta', 'Laboratorista'),
(12345678, 'María Luisa González', 'Docente'),
(34131887, 'Janet Pérez', 'Alumno'),
(34567889, 'Juan Romero', 'Alumno'),
(37713276, 'Arizona Robbins', 'Docente'),
(37772472, 'Sebastian Mendoza', 'Alumno'),
(54159518, 'Diego Ruiz', 'Alumno'),
(54313710, 'Nicolas Eugui Bentancor', 'Alumno'),
(58995699, 'Sergio Cheveste', 'Alumno'),
(65597458, 'Silvana Porro', 'Alumno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`Fechayhora`,`CI`),
  ADD KEY `ID` (`ID`),
  ADD KEY `CI` (`CI`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `equipo` (`ID`),
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`CI`) REFERENCES `usuario` (`CI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

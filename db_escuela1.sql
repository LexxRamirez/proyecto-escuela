-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-06-2016 a las 20:55:22
-- Versión del servidor: 5.5.49-0+deb8u1
-- Versión de PHP: 5.6.20-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_escuela`
--
CREATE DATABASE IF NOT EXISTS `db_escuela` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `db_escuela`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
`id_alumno` int(11) NOT NULL,
  `anho` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_grado` int(11) NOT NULL,
  `matricula` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nie` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `anho_ultimo_grado` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `minicipio_ultimo_grado` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `discapacidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estudio_especial` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `recidencia` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `edad` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `repite_grado` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `parbularia` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `sobre_edad` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `trabajo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `vive` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `enfermedad` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `vacunas` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `encargado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tel_casa` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tel_cel` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `ingresos` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `otros_ingreso` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `vivienda` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_vivienda` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `embarazo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `parto` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `madre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `edad_madre` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Msabe` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `padre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `edad_padre` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Psabe` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `hermanas` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `hermanos` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `comportamiento` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `documento` varchar(70) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `anho`, `id_grado`, `matricula`, `nombre`, `nie`, `anho_ultimo_grado`, `minicipio_ultimo_grado`, `codigo`, `discapacidad`, `estudio_especial`, `recidencia`, `fecha_nacimiento`, `edad`, `repite_grado`, `parbularia`, `sobre_edad`, `trabajo`, `vive`, `enfermedad`, `vacunas`, `encargado`, `dui`, `tel_casa`, `tel_cel`, `ingresos`, `otros_ingreso`, `vivienda`, `tipo_vivienda`, `embarazo`, `parto`, `madre`, `edad_madre`, `Msabe`, `padre`, `edad_padre`, `Psabe`, `hermanas`, `hermanos`, `comportamiento`, `documento`) VALUES
(1, '', 1, '', 'Juanito', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', 1, '', 'Pedrito', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', 1, '', 'Jose Jose Romero', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', 1, '', 'Juan Prez Rodriges', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', 1, '', 'Jose Miguel Martinez', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', 1, '', 'Maria de los Angeles Ayala', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '', 1, '', 'Ramon Jose Valdes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', 1, '', 'Jose Perez Leon', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
`id_docente` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `nombre`, `direccion`, `telefono`, `dui`, `grado`, `clave`) VALUES
(1, 'Guss', 'Kame House', '77454545', '1234567890', '8', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE IF NOT EXISTS `grado` (
`id_grado` int(11) NOT NULL,
  `nombre_grado` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id_grado`, `nombre_grado`) VALUES
(1, 'Primero'),
(2, 'Segundo'),
(3, 'Tercero'),
(4, 'Cuato'),
(5, 'Quinto'),
(6, 'Sexto'),
(7, 'Septimo'),
(8, 'Octavo'),
(9, 'Noveno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
`id_materia` int(11) NOT NULL,
  `materia` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `materia`) VALUES
(1, 'Matematicas'),
(2, 'Lenguaje'),
(3, 'Sociales'),
(4, 'Ciencias'),
(5, 'Ingles'),
(6, 'Informatica'),
(7, 'Educacion fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
`id` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `nota1` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `promedio` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `periodo`, `id_materia`, `id_grado`, `id_docente`, `id_alumno`, `nota1`, `promedio`) VALUES
(4, 1, 2, 1, 1, 1, '5.66-6.34-7.12', '6.98'),
(5, 3, 2, 1, 1, 2, '10-10-10', '10'),
(6, 2, 4, 1, 1, 1, '5.98-6.12-7.12', '6.98'),
(7, 2, 4, 1, 1, 2, '9-8-7', '8'),
(8, 2, 4, 1, 1, 3, '8-7-6', '7'),
(9, 2, 4, 1, 1, 4, '4-10-10', '8'),
(10, 2, 4, 1, 1, 5, '1-8-9', '6'),
(11, 2, 4, 1, 1, 6, '3-2-10', '5'),
(12, 2, 4, 1, 1, 7, '10-10-10', '10'),
(13, 2, 4, 1, 1, 8, '9-9-9', '9'),
(14, 3, 1, 1, 1, 1, '6.23-7.12-8.12', '2.32'),
(15, 1, 1, 1, 1, 2, '7-8-8', '3'),
(16, 1, 1, 1, 1, 3, '2-1-4', '3'),
(17, 1, 1, 1, 1, 4, '5-6-7', '6'),
(18, 1, 1, 1, 1, 5, '4-5-6', '4'),
(19, 1, 1, 1, 1, 6, '5-6-7', '4'),
(20, 1, 1, 1, 1, 7, '4-4-4', '4'),
(21, 1, 1, 1, 1, 8, '3-3-3', '2'),
(22, 2, 2, 1, 1, 1, '9.0-10-9.82', '9.5'),
(23, 3, 2, 1, 1, 1, '1.4-3.4-3.4', '1.2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
 ADD PRIMARY KEY (`id_alumno`), ADD KEY `id_grado` (`id_grado`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
 ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
 ADD PRIMARY KEY (`id_grado`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
 ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
 ADD PRIMARY KEY (`id`), ADD KEY `id_matera` (`id_materia`), ADD KEY `id_grado` (`id_grado`), ADD KEY `id_docente` (`id_docente`), ADD KEY `id_alumno` (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
ADD CONSTRAINT `id_grado_fk` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
ADD CONSTRAINT `id_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_docente` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_grado` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

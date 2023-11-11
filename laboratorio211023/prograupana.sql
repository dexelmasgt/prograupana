-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2023 a las 21:02:31
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prograupana2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(3) NOT NULL,
  `nombre_estudiante` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_estudiante` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `fec_nac_estudiante` date NOT NULL,
  `grado_estudiante` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `carrera_estudiante` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `nombre_estudiante`, `apellido_estudiante`, `fec_nac_estudiante`, `grado_estudiante`, `carrera_estudiante`) VALUES
(1, 'José Miguel', 'Morales Lucero', '2010-10-10', 'Segundo', 'Ingeniería en Sistemas'),
(2, 'Jefferson Estuardo', 'Flores Guerra', '2002-12-06', 'Segundo', 'Ingeniería en Sistemas'),
(3, 'Guillermo Rafael', 'Burgos Paz', '2005-02-23', 'Segundo', 'Ingeniería en Sistemas'),
(4, 'Carlos Moises', 'Contreras Calderon', '2004-11-15', 'Segundo', 'Ingeniería en Sistemas'),
(5, 'Juan Carlos', 'Cruz Pinelo', '2000-12-10', 'Segundo', 'Ingeniería en Sistemas'),
(6, 'Juan Carlos', 'Morales Gutierrez', '2001-12-15', 'Primero', 'Ingenieria Civil'),
(7, 'Jose Manuel', 'Lopez Franco', '1999-12-10', 'Segundo', 'Ingenieria Civil'),
(8, 'Guilson Danilo', 'Mejia Vasquez', '2002-12-29', 'Segundo', 'Ingenieria Civil'),
(9, 'Marlon Vinicio', 'Mendoza Colay', '2001-06-09', 'Segundo', 'Ingenieria Civil');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

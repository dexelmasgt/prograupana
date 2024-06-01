-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2024 a las 01:01:25
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
-- Base de datos: `tareasupana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

CREATE TABLE `lista` (
  `id_lista` int(4) NOT NULL,
  `nombre_lista` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `creador_lista` int(3) NOT NULL,
  `propietario_lista` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `lista`
--

INSERT INTO `lista` (`id_lista`, `nombre_lista`, `creador_lista`, `propietario_lista`) VALUES
(1, 'UPANA', 1, 1),
(2, 'Upana 2', 1, 1),
(3, 'Personal', 1, 1),
(4, 'Trabajo', 1, 1),
(5, 'Prueba', 1, 1),
(6, 'Prueba 2', 1, 1),
(7, 'Prueba3', 0, 0),
(8, 'Prueba3', 1, 1),
(9, '', 1, 1),
(10, '', 1, 1),
(11, '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `id_tarea` int(4) NOT NULL,
  `titulo_tarea` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion_tarea` text COLLATE utf8_spanish2_ci NOT NULL,
  `fec_crea_tarea` date NOT NULL,
  `fec_venc_tarea` date NOT NULL,
  `estado_tarea` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `progreso_tarea` int(3) NOT NULL,
  `responsable_tarea` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_lista` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`id_tarea`, `titulo_tarea`, `descripcion_tarea`, `fec_crea_tarea`, `fec_venc_tarea`, `estado_tarea`, `progreso_tarea`, `responsable_tarea`, `id_lista`) VALUES
(1, 'Hacer app de tareas', 'Programar el código para una app que realice la carga de tareas y edición de las mismas.', '2024-04-18', '2024-04-29', 'Sin iniciar', 0, '1', 1),
(2, 'Estudiar PHP', 'Investigar elementos y funciones en PHP.', '2024-04-18', '2024-05-05', 'En proceso', 35, '1', 1),
(3, 'Tarea Prueba', 'Descripcion prueba', '2024-04-17', '2024-04-30', 'Sin iniciar', 0, '1', 1),
(4, 'Tarea Prueba', 'Descripcion prueba', '2024-04-18', '2024-05-02', 'Sin iniciar', 0, '1', 1),
(5, 'PRUEBA', 'DESCRIPCION', '2024-04-20', '2024-04-29', 'Sin iniciar', 0, '1', 1),
(6, 'PRUEBA', 'DESCRIPCION', '2024-04-21', '2024-04-29', 'Sin iniciar', 0, '1', 1),
(7, 'otra', 'otra desc', '2024-04-21', '2024-04-25', 'En proceso', 35, '1', 1),
(8, 'upana', 'upana descripcion', '2024-04-21', '2024-04-25', 'Completada', 100, '1', 1),
(9, 'Dar Clases', 'Esta tarea incluye atender a los alumnos en clase', '2024-04-21', '2024-04-29', 'Sin iniciar', 0, '1', 1),
(10, 'Agregar boton de eliminar', 'Debo agregar un boton para eliminar una tarea.', '2024-04-21', '2024-04-22', 'Completada', 100, '1', 1),
(11, 'Hacer funcionalidad 2', 'Desarrollar el código para la funcionalidad 2 del proyecto.', '2024-04-28', '2024-04-28', 'Sin iniciar', 0, '1', 1),
(12, 'Poner punteo a los alumnos', 'Calificar tareas y colocar punteos a los estudiantes de Ingeniería en Sistemas', '2024-05-19', '2024-05-19', 'Completada', 0, '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(3) NOT NULL,
  `nombre_usuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_usuario` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `password_usuario` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `correo_usuario`, `password_usuario`) VALUES
(1, 'Jose Miguel Morales', 'admin@admin.com', '12345'),
(2, 'Guillermo', 'guillermo@admin.com', 'guillermo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id_lista`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`id_tarea`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lista`
--
ALTER TABLE `lista`
  MODIFY `id_lista` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `id_tarea` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

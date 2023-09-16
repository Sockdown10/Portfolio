-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2023 a las 12:05:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `talemtum`
--
CREATE DATABASE IF NOT EXISTS `talemtum` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `talemtum`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alum_cursos`
--

DROP TABLE IF EXISTS `alum_cursos`;
CREATE TABLE IF NOT EXISTS `alum_cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAlumno` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `fecha_alta` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alum_cursos`
--

INSERT INTO `alum_cursos` (`id`, `idAlumno`, `nombre`, `apellidos`, `idCategoria`, `fecha_alta`) VALUES
(1, 2, 'Eloi', 'Ginesti', 5, '2023-05-30'),
(2, 2, 'Eloi', 'Ginesti', 8, '2023-05-30'),
(3, 4, 'Juan', 'Fernandez', 6, '2023-05-30'),
(4, 5, 'Santiago', 'Campillo', 8, '2023-05-30'),
(5, 4, 'Juan', 'Fernandez', 6, '2023-05-31'),
(6, 2, 'Eloi', 'Ginesti', 7, '2023-05-31'),
(9, 4, 'Juan', 'Fernandez', 7, '2023-05-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCurso` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombreCurso`) VALUES
(5, 'Inglés'),
(6, 'Frances'),
(7, 'Aleman'),
(8, 'Japones'),
(9, 'Árabe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rol` varchar(50) NOT NULL DEFAULT 'alumno',
  `email` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `nombre`, `apellidos`, `password`, `rol`, `email`) VALUES
(2, 'Xapolin', 'Eloi', 'Ginesti', '$2y$10$YUlaRkoVbyrr332HGWyfIuVFrKlWEyC7DIBb1dA0Wpbw4mWoK4P0C', 'alumno', 'ginesti1979@gmail.com'),
(5, 'Espinete', 'Santiago', 'Campillo', '$2y$10$ifhdf.Lnvbx91U8sPB.kR.TDeol2.Ht27nurXedLltDd/s9Dum3Q6', 'alumno', 'espinete@gmail.com'),
(6, 'drosado', 'David', 'Rosado', '$2y$10$vnuxb7KInZAdHlqczI.1ru..c1fqXLvoF5DlUoFP.2ZF45VyB2Mg.', 'alumno', 'davidprueba@gmail.com'),
(7, 'admin', 'Admin', 'Admin', '$2y$10$irIktZdgsK3w0GeBj8sSeeVjAkUDmLfebJTzHM4egP9EjvUSQx0OK', 'admin', 'admin@gmail.com'),
(8, 'yanina', 'Yanina', 'Sadas', '$2y$10$g0fTQ448A4pemkTTRxYyJe0jgIuV3XygjNvWyqJHqGAjx80YHI4hW', 'alumno', 'yanina@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2020 a las 02:53:56
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `psicoapp/web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(20) NOT NULL,
  `texto_pregunta` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `texto_pregunta`) VALUES
(1, '¿Cuál es la diferencia entre vivir y existir?'),
(2, ' ¿Qué es lo que más detestas de una persona? ¿Por que?'),
(3, '¿Qué harías de otra manera si supieras que nadie te juzgará?'),
(4, '¿Cuál es la promesa más importante que te has hecho?'),
(5, '¿Cómo podemos tener relaciones saludables?'),
(6, '¿Cuál es el significado de la vida?'),
(7, '¿Cómo mides la vida?'),
(8, '¿Estás en control de tu vida?'),
(9, '¿Por qué a veces te comportas así?'),
(10, '¿Cómo puedes cambiar tu vida?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas_preguntas`
--

CREATE TABLE `respuestas_preguntas` (
  `correo` varchar(50) DEFAULT NULL,
  `id_pregunta` int(50) DEFAULT NULL,
  `respuesta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuestas_preguntas`
--

INSERT INTO `respuestas_preguntas` (`correo`, `id_pregunta`, `respuesta`) VALUES
('prueba@hotmail.com', 1, '7'),
('prueba@hotmail.com', 2, '7'),
('prueba@hotmail.com', 3, '77'),
('prueba@hotmail.com', 4, '7'),
('prueba@hotmail.com', 5, '7'),
('prueba@hotmail.com', 6, '7'),
('prueba@hotmail.com', 7, '7'),
('prueba@hotmail.com', 8, '7'),
('prueba@hotmail.com', 9, '7'),
('prueba@hotmail.com', 10, '7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id_rol` int(20) NOT NULL,
  `nom_rol` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Id_rol`, `nom_rol`) VALUES
(1, 'psicologo'),
(2, 'paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_persona` int(11) NOT NULL,
  `correo` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_rol` int(20) NOT NULL,
  `nombres` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_persona`, `correo`, `contrasena`, `id_rol`, `nombres`, `apellidos`) VALUES
(1, 'prueba2@hotmail.com', '1234', 2, 'Juan', 'Grijalba'),
(5, 'prueba@hotmail.com', '1234', 1, 'Jose', 'Grijalba'),
(7, 'prueb@hotmail.com', '1234', 2, NULL, NULL),
(8, 'prue@hotmail.com', '1234', 2, NULL, NULL),
(9, 'pru@hotmail.com', '1234', 2, NULL, NULL),
(15, 'ru@hotmail.com', '1234', 2, NULL, NULL),
(16, 'qw@hot.com', 'qwe', 2, NULL, NULL),
(18, 'wer@h.com', '123', 2, 'pdre', 'car'),
(19, 'asd@hotmail.com', '123', 2, 'cristhian', 'hernandez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_persona`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

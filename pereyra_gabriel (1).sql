-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2024 a las 01:30:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pereyra_gabriel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONES PARA LA TABLA `perfiles`:
--

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONES PARA LA TABLA `usuarios`:
--   `perfil_id`
--       `perfiles` -> `id_perfiles`
--

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(18, 'Gabriel', 'Pereyra', 'Gabri', 'gabriel@gmail.com', '$2y$10$6Als3dbp5wGxJfH9CIjsTeihCTUSv0uH6.iefowOoHTDaBwMcttlW', 1, 'NO'),
(19, 'Clara', 'Pereyra', 'Clara', 'clarap@gmail.com', '$2y$10$AlbuwdWVBLt.fSq2N9JmEeZ.lCQUvT1p3.kbXIdNk0W59QkpuKcse', 2, 'NO'),
(20, 'Cielo', 'Rolheiser', 'Cielo', 'cielo@gmail.com', '$2y$10$0uClMkryBCeSloTFZ5Ff9uxFSmTyVprDqYCoDS5o5dL8ORtXJSUYW', 2, 'NO'),
(21, 'Elian', 'Pereyra', 'Elian', 'elian@gmail.com', '$2y$10$DQdiTQ5wwWeHfKilEH5uluHeRCmgKsNEFEcfqwhcY4k4kHkWfT4r.', 2, 'NO'),
(22, 'Amanda', 'Pereyra', 'Amanda', 'amanda@gmail.com', '$2y$10$OvsSyuy/APoeib1G/W7u5eLMi0Rj87lrnFyxoacDZCIgWL0XeV0.W', 2, 'NO'),
(23, 'fabrizio', 'pereyra', 'Fabri', 'fabrizio@gmail.com', '$2y$10$GE54V2NBQUNJ7EwNJNMaxO.UA0LoBzTsUBnkQ2vhaSIYcKlHTCm6G', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

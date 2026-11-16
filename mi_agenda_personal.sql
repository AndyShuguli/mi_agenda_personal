-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2026 a las 04:06:26
-- Versión del servidor: 10.11.16-MariaDB
-- Versión de PHP: 8.3.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_agenda_personal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos_personales`
--

CREATE TABLE `contactos_personales` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contactos_personales`
--

INSERT INTO `contactos_personales` (`id`, `id_usuario`, `nombre`, `telefono`, `correo`, `ciudad`) VALUES
(0, 1, 'Andy', '0987068067', 'andyshuguli2005@gmail.com', 'Quito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`, `fecha_registro`) VALUES
(1, 'Andy', 'andyshuguli2005@gmail.com', '$2y$10$xtR/KWETvJbvs6C/a5awVeKz3vB7h6lG9i4HH0dI/L8CAwD1gYjFG', '2026-11-15'),
(3, 'Juan David', 'ffdfd@hakdsd', '$2y$10$VlZPG2kacFPc9m6RajmjZ.kDsIgTECe/qDTIPHi9kpeKqbVEcjVue', '2026-11-15'),
(4, 'Andy', 'ssdsds@hh', '$2y$10$Tj92etqSzJrjFAC77hyYEuJqtTJm4Nvcd9gO6eNZeEbbLCuDvGhHS', '2026-11-15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos_personales`
--
ALTER TABLE `contactos_personales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

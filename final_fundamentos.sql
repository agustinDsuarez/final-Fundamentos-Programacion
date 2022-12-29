-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2022 a las 20:45:34
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `final_fundamentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `partido` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `precio` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `seleccionA` varchar(255) NOT NULL,
  `seleccionB` varchar(255) NOT NULL,
  `tipo_partido` varchar(255) NOT NULL,
  `partido_vs` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `precio` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id`, `seleccionA`, `seleccionB`, `tipo_partido`, `partido_vs`, `fecha`, `precio`) VALUES
(1, 'Qatar', 'Ecuador', 'Grupos', 'Qatar Vs Ecuador', '2022-11-20', 50.00),
(2, 'Inglaterra', 'Irán', 'Grupos', 'Inglaterra Vs Irán', '2022-11-21', 50.00),
(3, 'Estados Unidos', 'Gales', 'Grupos', 'Estados Unidos Vs Gales', '2022-11-21', 50.00),
(4, 'Senegal', 'Países Bajos', 'Grupos', 'Senegal Vs Países Bajos', '2022-11-21', 50.00),
(5, 'Argentina', 'Arabia Saudita', 'Grupos', 'Argentina Vs Arabia Saudita', '2022-11-22', 50.00),
(6, 'México', 'Polonia', 'Grupos', 'México Vs Polonia', '2022-11-22', 50.00),
(7, 'Dinamarca', 'Túnez', 'Grupos', 'Dinamarca Vs Túnez', '2022-11-22', 50.00),
(8, 'Francia', 'Australia', 'Grupos', 'Francia Vs Dinamarca', '2022-11-22', 50.00),
(9, 'Partido', '49', 'Octavos', 'A definir', '2022-12-03', 60.00),
(10, 'Partido', '57', 'Cuartos', 'A definir', '2022-12-09', 70.00),
(11, 'Partido', '62', 'Semi', 'A definir', '2022-12-13', 80.00),
(12, 'Final', 'Final', 'Final', 'A Definir', '2022-12-18', 100.00),
(13, 'Pase Completo (Permite ver un partido a elección por instancia)', 'Todos', 'Todos', 'A eleccion del portador', '0000-00-00', 28.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuariosId` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `pais` varchar(255) NOT NULL,
  `estado_civil` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasenia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuariosId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuariosId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

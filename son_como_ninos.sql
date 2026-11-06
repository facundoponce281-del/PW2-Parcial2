-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2026 a las 01:02:18
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `son_como_ninos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `correo`, `password`, `fecha_registro`) VALUES
(9, 'Benjamin', 'Lopez', 'benjalopez', 'benjalopez@gmail.com', '$2y$10$Aezh7H.juk0VzuRu9REc6e0U5WW.AqRKJDalsutSJabVcX0acmr8W', '2026-11-04 01:17:27'),
(10, 'Martin', 'palermo', 'martpalrm', 'martin.palermo@gmail.com', '$2y$10$BU2Gk3tJLryl4AW4a1zMy./uYmhIYzVu2gVGqbLnBqjGPB3YiUV5W', '2026-11-04 01:26:58'),
(11, 'juan', 'perez', 'juanperez', 'juan.perez@gmail.com', '$2y$10$Wi95zOdEQtSoNxe.Tye0j.QFjlOGbHp3VZwS7apbKiDi4Gbfvr8bm', '2026-11-05 18:41:20'),
(12, 'tomas', 'fernandez', 'tomifernandez', 'tomifernandez@gmail.com', '$2y$10$Dp.q9OECWSeHe9XVJv1q4.sH4JGUBfX3C9qZVTQR3yRUxMb836boW', '2026-11-05 18:42:43'),
(13, 'santiago', 'lopez', 'santilopez', 'santilopez@gmail.com', '$2y$10$ZmISsMs3MbAmkvUS/ZXzWeQiUu67VbvpDQaPOe1Hb1Fr/Iwv6AHNu', '2026-11-05 18:43:49'),
(14, 'nicolas', 'luna', 'nicoluna', 'nicoluna@gmail.com', '$2y$10$6r34VNP3Dujy1dXfU9y3duybo.xSgphO8dTmwWnJMkEJDY4GJxc5m', '2026-11-05 18:47:54'),
(15, 'lucas', 'gonzales', 'nicogonzales', 'nicogonzales@gmail.com', '$2y$10$rgN193/Qnk9EO7V8K2KtKeAdkvsJo6cEsfGPmK9Y8g4xt9CLu6cCG', '2026-11-05 18:49:18'),
(16, 'mateo', 'maldonado', 'matemaldonado', 'mateomaldonado@gmail.com', '$2y$10$M/oq42YQwfB1LpaRo1gare1KVEZz/XeOTHfIHWbUSHCgLD8041wEa', '2026-11-05 18:50:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `uq_usuario` (`usuario`),
  ADD UNIQUE KEY `uq_correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

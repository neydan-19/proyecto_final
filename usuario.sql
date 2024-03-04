-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2024 a las 05:48:00
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
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `contraseña` varchar(50) NOT NULL,
  `COD_documento` int(11) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `id_genero`, `contraseña`, `COD_documento`, `fecha_nacimiento`) VALUES
(1, 'Brad', 'Velarde', 'bradvelarde@gmail.com', 1, 'INDEX', 1, '2005-06-05'),
(2, 'Mateo', 'Ramos', 'mateo@gmail.com', 1, 'GokuyVegeta', 3, '2006-04-11'),
(3, 'Fabrizio', 'Lengua', 'lengua@gmail.com', 2, 'lengualarga', 4, '2005-08-22'),
(4, 'Cristhian', 'Gallozo', 'gallozo@gmail.com', 1, 'digimon05', 2, '2005-09-14'),
(5, 'Silver', 'Quispe', 'quispe@gmail.com', 1, 'bills', 2, '2000-02-14'),
(6, 'Oliva', 'baky', 'oliva@gmail.com', 1, 'estudiar', 2, '1995-07-22'),
(7, 'Hans', 'Velarde', 'hans@gmail.com', 1, 'mama', 0, '2024-03-05'),
(8, 'Goku', 'Potter', 'kaiosama@gmail.com', 1, 'INDEX', 3, '2024-03-20'),
(9, 'Vegeta', 'Vegita', 'vegeta@gmail.com', 0, 'vegeta', 0, NULL),
(10, 'lizeth', 'velarde', 'lizeth@gmail.com', 2, '123456789', 1, '2000-03-08'),
(11, 'Mario', 'Bros', 'mario@gmail.com', 0, 'mario', 0, NULL),
(13, 'Luigui', 'bros', 'luigui@gmail.com', 0, 'luigui', 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_genero` (`id_genero`),
  ADD KEY `fk_tipo_documento` (`COD_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_genero` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`),
  ADD CONSTRAINT `fk_tipo_documento` FOREIGN KEY (`COD_documento`) REFERENCES `tipo_documento` (`COD_documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

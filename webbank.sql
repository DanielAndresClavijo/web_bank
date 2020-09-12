-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2020 a las 04:19:09
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webbank`
--

CREATE database `webbank` CHARACTER SET utf8 COLLATE utf8_general_ci;;
use `webbank`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_transacion` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_historial`, `id_usuario`, `id_transacion`, `cantidad`, `fecha`) VALUES
(1, 1, 2, 15000, '2020-09-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `id_usuario`, `cantidad`) VALUES
(1, 1, 15000),
(2, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_transacion`
--

CREATE TABLE `tipo_transacion` (
  `id_transacion` int(11) NOT NULL,
  `nombre_transacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_transacion`
--

INSERT INTO `tipo_transacion` (`id_transacion`, `nombre_transacion`) VALUES
(1, 'Transferir'),
(2, 'Depositar'),
(3, 'Retirar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `numero_cedula` varchar(32) NOT NULL,
  `contrasena` varchar(32) NOT NULL,
  `primer_nombre` varchar(45) NOT NULL,
  `segundo_nombre` varchar(45) DEFAULT NULL,
  `primer_apellido` varchar(45) NOT NULL,
  `segundo_apellido` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `numero_cedula`, `contrasena`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`) VALUES
(1, 'e11170b8cbd2d74102651cb967fa28e5', '202cb962ac59075b964b07152d234b70', 'Juan', 'Diego', 'Rios', 'Ballesteros'),
(2, '3a08fe7b8c4da6ed09f21c3ef97efce2', '202cb962ac59075b964b07152d234b70', 'Juan', 'David', 'Hoyos', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`,`id_usuario`,`id_transacion`),
  ADD UNIQUE KEY `id_historial_UNIQUE` (`id_historial`),
  ADD KEY `fk_usuario_has_transacion_transacion1_idx` (`id_transacion`),
  ADD KEY `fk_usuario_has_transacion_usuario1_idx` (`id_usuario`);

--
-- Indices de la tabla `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`,`id_usuario`),
  ADD UNIQUE KEY `id_estado_UNIQUE` (`id_saldo`),
  ADD KEY `fk_estado_usuario_idx` (`id_usuario`);

--
-- Indices de la tabla `tipo_transacion`
--
ALTER TABLE `tipo_transacion`
  ADD PRIMARY KEY (`id_transacion`),
  ADD UNIQUE KEY `id_transacion_UNIQUE` (`id_transacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `numero_celular_UNIQUE` (`numero_cedula`),
  ADD UNIQUE KEY `id_usuario_UNIQUE` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_transacion`
--
ALTER TABLE `tipo_transacion`
  MODIFY `id_transacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_usuario_has_transacion_transacion1` FOREIGN KEY (`id_transacion`) REFERENCES `tipo_transacion` (`id_transacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_transacion_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `saldo`
--
ALTER TABLE `saldo`
  ADD CONSTRAINT `fk_estado_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

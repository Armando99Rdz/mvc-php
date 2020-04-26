-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2020 a las 21:55:44
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE mvc_app;
USE mvc_app;


--
-- Base de datos: `mvc_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `example_table`
--

CREATE TABLE `example_table` (
  `id_articulo` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `example_table`
--

INSERT INTO `example_table` (`id_articulo`, `titulo`, `descripcion`) VALUES
(1, 'Laptop Lenovo Y5070 Gamer Black', 'Con gran rendimiento'),
(2, 'Monitor LED Qian 21.5\"', 'Ultra delgado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `example_table`
--
ALTER TABLE `example_table`
  ADD PRIMARY KEY (`id_articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `example_table`
--
ALTER TABLE `example_table`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

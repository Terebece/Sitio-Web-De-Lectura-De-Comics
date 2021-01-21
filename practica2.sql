-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-01-2021 a las 03:10:29
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comics`
--

CREATE TABLE `comics` (
  `id` int(11) NOT NULL,
  `serie` varchar(64) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `tomos` varchar(64) NOT NULL,
  `año` int(11) NOT NULL,
  `dibujo` varchar(64) NOT NULL,
  `guion` varchar(64) NOT NULL,
  `editorial` varchar(64) NOT NULL,
  `resumen` text NOT NULL,
  `ruta_imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comics`
--

INSERT INTO `comics` (`id`, `serie`, `titulo`, `tomos`, `año`, `dibujo`, `guion`, `editorial`, `resumen`, `ruta_imagen`) VALUES
(1, 'Superman', 'Superman', '1', 2000, 'Un humano', 'Otro humano', 'DC', 'Una peli de superman, digo, comic', 'cover-sup-1.jpg'),
(2, 'Ironman', 'Ironman', '1/2', 1998, 'Un humano', 'Otro humano', 'Marvel', 'Suuuuper Ironman', 'cover-im-1.jpg'),
(3, 'Flash', 'The Flash', '1', 1990, 'Un humano', 'Otro humano', 'DC', 'El man mas rapido', 'Flashpoint.jpeg'),
(4, 'Superman', 'The supergirl', '1', 2000, 'Un humano', 'Otro humano', 'DC', 'Una peli de superman, digo, comic', 'cover-superg-1.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comics`
--
ALTER TABLE `comics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

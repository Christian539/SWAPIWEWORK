-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2019 a las 23:29:32
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `swapi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inf_ship`
--

CREATE TABLE `inf_ship` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `pas` varchar(100) NOT NULL,
  `vel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inf_ship`
--

INSERT INTO `inf_ship` (`id`, `name`, `modelo`, `pas`, `vel`) VALUES
(1, '', 'Executor-class star dreadnought', '380099', 'n/a'),
(2, '', 'Executor-class star dreadnought', '38009', 'n/a'),
(3, '', 'Executor-class star dreadnought', '38000', 'n/a'),
(4, '', 'Executor-class star dreadnought', '38000', '100'),
(5, 'Executores', 'Executor-class star dreadnought', '7777', 'n/a'),
(6, 'Executorar', 'Executor-class star dreadnought', '38000', '90000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inf_ship`
--
ALTER TABLE `inf_ship`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inf_ship`
--
ALTER TABLE `inf_ship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

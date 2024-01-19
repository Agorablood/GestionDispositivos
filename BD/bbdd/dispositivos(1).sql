-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2024 a las 14:33:12
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dispositivos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movil`
--

CREATE TABLE `movil` (
  `id` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `año` int(11) NOT NULL,
  `pulgadas` float NOT NULL,
  `tipo_pantalla` varchar(20) NOT NULL,
  `conectividad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `movil`
--

INSERT INTO `movil` (`id`, `marca`, `modelo`, `año`, `pulgadas`, `tipo_pantalla`, `conectividad`) VALUES
(46, 'iPhone 12', 'Básico', 2021, 4.7, 'XDR', '3G'),
(47, 'Huawei P30', 'Lite', 2022, 5.4, 'XDR', '3G'),
(48, 'Xiaomi Mi 11', 'Ultra', 2023, 5.4, 'Oled', '3G'),
(49, 'Sony Xperia 1 III', 'II', 2021, 4.7, 'Oled', ''),
(50, 'Oppo Find', 'Pro', 2023, 6.7, 'Oled', '4G'),
(51, 'Sony Xperia 1', 'Plus', 2023, 6.7, 'Oled', '5G'),
(52, 'Xiaomi Mi 10', 'Lite', 2022, 5.4, 'XDR', '3G'),
(53, 'iPhone 14', 'ProMax', 2022, 4.7, 'LCD', '4G'),
(54, 'Oppo Find', 'Plus', 2022, 4.7, 'Oled', '4G'),
(55, 'Galaxy S', 'Ultra', 2023, 6.7, 'Oled', '5G'),
(56, 'iPhone 14', 'ProMax', 2023, 6.7, 'Oled', '5G'),
(57, 'Oppo Reno 5', 'Plus', 2022, 5.4, 'Oled', '4G'),
(58, 'Xiaomi Mi 11', 'Ultra', 2023, 5.4, 'Oled', '3G'),
(59, 'iPhone 14', 'ProMax', 2023, 6.7, 'Oled', '5G'),
(60, 'Galaxy S', 'Ultra', 2023, 6.7, 'XDR', '3G'),
(61, 'Huawei Mate 20', 'Lite', 2022, 5.4, 'LCD', '3G'),
(62, 'Xiaomi Mi 10', 'Lite', 2022, 6.7, 'LCD', '5G'),
(63, 'Sony Xperia 10', 'II', 2023, 6.7, 'Oled', '3G'),
(64, 'Oppo F19', 'Plus', 2022, 6.7, 'Oled', '4G'),
(65, 'iPhone 14', 'ProMax', 2022, 5.4, 'XDR', '4G'),
(66, 'Sony Xperia 5', 'Plus', 2023, 6.7, 'Oled', '5G'),
(67, 'iPhone 14', 'ProMax', 2023, 6.7, 'Oled', '5G');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc`
--

CREATE TABLE `pc` (
  `id` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `año` int(11) NOT NULL,
  `cpu` varchar(20) NOT NULL,
  `tarjeta_grafica` varchar(20) NOT NULL,
  `placa_base` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movil`
--
ALTER TABLE `movil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movil`
--
ALTER TABLE `movil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

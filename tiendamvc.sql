-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql
-- Tiempo de generación: 11-10-2022 a las 17:32:55
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendamvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` tinyint NOT NULL,
  `deleted` tinyint NOT NULL,
  `login_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `status`, `deleted`, `login_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Jorge', 'jorge@mail.es', '806cc6e9290ccac7e77a34f545b28fdf3c8a87dab0f144f3885b2411483e433df0a34d9d11355f20b74df86b9bbbe5dd95d4046be9430851b8fbdbc390dc8e54', 1, 0, '2022-10-11 17:26:13', '2022-10-07 18:00:41', '2022-10-11 17:27:38', NULL),
(3, 'Jaime', 'jorge@mail.es', '806cc6e9290ccac7e77a34f545b28fdf3c8a87dab0f144f3885b2411483e433df0a34d9d11355f20b74df86b9bbbe5dd95d4046be9430851b8fbdbc390dc8e54', 1, 0, '2022-10-11 17:27:19', '2022-10-07 18:32:51', '2022-10-11 17:28:13', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE `config` (
  `id` int NOT NULL,
  `type` varchar(50) NOT NULL,
  `value` int NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`id`, `type`, `value`, `description`) VALUES
(1, 'adminStatus', 0, 'Inactivo'),
(2, 'adminStatus', 1, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `last_name_1` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `last_name_2` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `address` varchar(150) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `city` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `state` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `zipcode` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `country` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name_1`, `last_name_2`, `email`, `address`, `city`, `state`, `zipcode`, `country`, `password`) VALUES
(1, 'Pepe', 'Pérez', 'Sánchez', 'pepe@mail.es', 'c/ La suya 1', 'Murcia', 'Murcia', '30001', 'España', 'a69f16dbd2c154898e4bf453fd0694a11d429bc86972a26b521ffd9c2c84b9ca6253e0b10ae26c39d0d7b71f0eb973758f6b43eba1949fd9c4faaeeb18dd5b74'),
(2, 'Juan', 'García', 'Martínez', 'juan@juan.es', 'c/ La otra', 'Valencia', 'Valencia', '46001', 'España', '806cc6e9290ccac7e77a34f545b28fdf3c8a87dab0f144f3885b2411483e433df0a34d9d11355f20b74df86b9bbbe5dd95d4046be9430851b8fbdbc390dc8e54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `config`
--
ALTER TABLE `config`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

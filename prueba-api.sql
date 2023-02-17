-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2023 a las 20:32:07
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
-- Base de datos: `prueba-api`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id`, `nombre`, `especie`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Rick Sanchez', 'Human', 'Alive', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(2, 'Morty Smith', 'Human', 'Alive', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(3, 'Summer Smith', 'Human', 'Alive', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(4, 'Beth Smith', 'Human', 'Alive', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(5, 'Jerry Smith', 'Human', 'Alive', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(6, 'Abadango Cluster Princess', 'Alien', 'Alive', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(7, 'Abradolf Lincler', 'Human', 'unknown', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(8, 'Adjudicator Rick', 'Human', 'Dead', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(9, 'Agency Director', 'Human', 'Dead', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(10, 'Alan Rails', 'Human', 'Dead', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(11, 'Albert Einstein', 'Human', 'Dead', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(12, 'Alexander', 'Human', 'Dead', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(13, 'Alien Googah', 'Alien', 'unknown', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(14, 'Alien Morty', 'Alien', 'unknown', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(15, 'Alien Rick', 'Alien', 'unknown', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(16, 'Amish Cyborg', 'Alien', 'Dead', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(17, 'Annie', 'Human', 'Alive', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(18, 'Antenna Morty', 'Human', 'Alive', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(19, 'Antenna Rick', 'Human', 'unknown', '2023-02-18 00:31:43', '2023-02-18 00:31:43'),
(20, 'Ants in my Eyes Johnson', 'Human', 'unknown', '2023-02-18 00:31:43', '2023-02-18 00:31:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

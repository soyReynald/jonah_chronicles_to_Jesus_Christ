-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2026 a las 18:48:06
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jonah_chronicles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `games_question_`
--

CREATE TABLE `games_question_` (
  `id` int(11) NOT NULL,
  `question` varchar(39) NOT NULL,
  `verse_in_to_the_question` text NOT NULL,
  `question_answer` text NOT NULL,
  `id_admin_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `levels_of_access`
--

CREATE TABLE `levels_of_access` (
  `id` int(11) NOT NULL,
  `level_name` int(25) NOT NULL,
  `requirement_email` varchar(25) NOT NULL,
  `required_pw` varchar(46) NOT NULL,
  `connected_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `level_names_and_id`
--

CREATE TABLE `level_names_and_id` (
  `id` int(11) NOT NULL,
  `name` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_registry_`
--

CREATE TABLE `users_registry_` (
  `id` int(11) NOT NULL,
  `user_name` varchar(24) NOT NULL,
  `password_within_hash_` varchar(40) NOT NULL,
  `date_of_registry` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `games_question_`
--
ALTER TABLE `games_question_`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin_user` (`id_admin_user`);

--
-- Indices de la tabla `levels_of_access`
--
ALTER TABLE `levels_of_access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_connection_id` (`connected_user_id`),
  ADD KEY `level_name` (`level_name`);

--
-- Indices de la tabla `level_names_and_id`
--
ALTER TABLE `level_names_and_id`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_registry_`
--
ALTER TABLE `users_registry_`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `games_question_`
--
ALTER TABLE `games_question_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `levels_of_access`
--
ALTER TABLE `levels_of_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `level_names_and_id`
--
ALTER TABLE `level_names_and_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users_registry_`
--
ALTER TABLE `users_registry_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2019 a las 15:11:40
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dates`
--

CREATE TABLE `dates` (
  `id_date` int(3) NOT NULL,
  `id_user_date` int(3) NOT NULL,
  `date` date NOT NULL,
  `time` time DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `doctor` varchar(40) DEFAULT NULL,
  `comentarios` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dates`
--

INSERT INTO `dates` (`id_date`, `id_user_date`, `date`, `time`, `status`, `doctor`, `comentarios`) VALUES
(1, 1, '2019-01-15', '08:00:00', 0, 'Doctor García', 'holac:'),
(5, 1, '2019-01-17', '16:30:00', 1, 'CRISTHIAN', 'HOLA NECESITO UNA CITA ;D'),
(9, 1, '2019-01-21', '01:00:00', 1, 'Elma Nazo', 'Prueba 3'),
(20, 2, '0000-00-00', '03:00:00', 1, 'Elmo Mazo', 'elmo kozo'),
(21, 3, '2019-01-22', '15:00:00', 0, 'Doctor Garci­a', 'Que esta pasando?'),
(22, 3, '2019-01-22', '01:00:00', 0, 'Elmo Mazo', 'Prueba 3'),
(23, 3, '2019-01-22', '01:00:00', 0, 'Elmo Mazoooo', 'Prueba2'),
(24, 3, '2019-01-22', '01:00:00', 0, 'El chino', 'aaaaaaaaaaaaa'),
(25, 1, '2019-01-24', '14:01:00', 0, 'Jazmin Pool', 'Stoi usando magia'),
(26, 3, '2019-01-24', '12:55:00', 1, 'Mrs. Nugle', 'Hi Mrs. Nugle.'),
(27, 3, '0000-00-00', '01:00:00', 1, 'whtssss', 'rewrwe'),
(28, 4, '0000-00-00', '15:01:00', 1, 'St. Brean', 'Nothing.'),
(29, 4, '2019-01-24', '01:00:00', 0, 'Dale', 'Dale don dale'),
(30, 3, '2019-01-24', '01:00:00', 0, 'Pruebaxxx', 'Pruebaxxxxxxx'),
(31, 3, '0000-00-00', '01:00:00', 1, 'amina', 'Pruebaxxx'),
(50, 4, '2019-01-25', '01:00:00', 1, 'Stado', 'Prueba'),
(51, 3, '2019-01-25', '01:00:00', 1, 'spin', 'Prueba spin'),
(52, 3, '2019-01-25', '01:00:00', 1, 'Spiner', 'abc'),
(53, 3, '0000-00-00', '13:01:00', 0, 'Dr. Cirujano0', 'abccccccc'),
(54, 3, '0000-00-00', '23:55:00', 1, 'editado', 'editaooooo'),
(55, 3, '0000-00-00', '12:00:00', 1, 'dssddssadssad', 'ojala si xdddddd'),
(56, 4, '2019-01-31', '15:00:00', 1, 'Elmo Kozo', 'Soy elmo'),
(57, 2, '0000-00-00', '13:00:00', 1, 'Jazmin Pool', 'Cita'),
(58, 2, '2019-01-31', '03:00:00', 1, 'Elmo', 'abc'),
(59, 2, '2019-01-31', '13:00:00', 1, 'Victor', 'abc'),
(60, 1, '2019-02-01', '13:00:00', 1, 'Prueba eliminar', 'Prueba'),
(61, 4, '0000-00-00', '15:05:00', 1, 'Nueva cita', 'Nada que decir'),
(62, 4, '2019-02-06', '13:00:00', 1, 'abr', 'abc'),
(63, 5, '0000-00-00', '15:02:00', 1, 'Elmo Mazo', 'Test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `Nombre`, `username`, `password`) VALUES
(1, 'Mari Carmen', 'maricarmen@gmail.com', '12345678'),
(2, 'Motel', 'escondido@gmail.com', '456'),
(3, 'Jazmín Pool', 'jgpoolpech@gmail.com', 'jazmin217'),
(4, 'Mrs. Janne Doe', 'janne@gmail.com', '0203'),
(5, 'Elmo Cos O', 'elmocoso@gmail.com', '010203');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id_date`),
  ADD KEY `id_user_date` (`id_user_date`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dates`
--
ALTER TABLE `dates`
  MODIFY `id_date` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dates`
--
ALTER TABLE `dates`
  ADD CONSTRAINT `id_user_date` FOREIGN KEY (`id_user_date`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

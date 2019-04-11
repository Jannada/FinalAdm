-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2019 a las 17:37:04
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `financiera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` text NOT NULL,
  `documento` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `calificacion` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `sexo`, `documento`, `telefono`, `direccion`, `email`, `fecha_nacimiento`, `calificacion`, `fecha`) VALUES
(2, 'Juan Martines', '', '00188579873', '(809) 558-7789', 'calle unju #4', 'Juancito@hotmail.com', '1978-08-09', 0, '2019-03-24 20:14:59'),
(3, 'Anthony Pérez', '', '22555454645', '(654) 765-4845', 'direccion', 'yo@yo.com', '1998-09-08', 0, '2019-03-24 20:15:20'),
(4, 'Pedro Pablo', '', '00154887998', '(829) 878-5623', 'una calle', 'viv@fif.com', '1998-05-04', 0, '2019-03-24 20:15:31'),
(5, 'Deivy klk', '', '23486468798', '(754) 555-5895', 'una calle', 'asdas@adas.com', '2065-05-04', 0, '2019-03-24 21:07:17'),
(6, 'Josep Yepeto', '', '00015489987', '(852) 217-7853', 'calles', 'yo@yo.com', '2054-05-06', 0, '2019-03-27 17:59:34'),
(7, 'Juan Martinez', 'Masculino', '0000565872', '56901997', 'una calle', 'Juancito@hotmail.com', '1992-08-08', 0, '2019-04-11 04:42:53'),
(8, 'Jauan', 'Femenino', '0012548792', '8095699987', 'calle', 'asdas@adas.com', '2022-05-08', 0, '2019-04-11 05:01:29'),
(9, 'Juan Martinez', 'Femenino', '0015487', '8095587845', 'calle unju #4', 'Juancito@hotmail.com', '2011-02-23', 0, '2019-04-11 05:03:53'),
(10, 'Anthony Pérez', 'Femenino', '001547896', '8098854512', 'calles', 'deividC047@gmail.com', '2018-07-09', 0, '2019-04-11 05:08:21'),
(11, 'Anthony Pérez', 'Femenino', '01215555', '8097899799', 'kkk', 'asdas@adas.com', '1998-09-08', 0, '2019-04-11 05:27:26'),
(12, 'Anthony Pérez', 'Femenino', '165564654', '545565566', 'asdsa', 'Juancito@hotmail.com', '1998-09-08', 0, '2019-04-11 05:28:32'),
(13, 'Juan Martinez', 'Femenino', '05545465', '789789789', 'adssda', 'deividC047@gmail.com', '2065-04-04', 0, '2019-04-11 05:36:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE `cuotas` (
  `id` int(11) NOT NULL,
  `id_prestamo` int(11) NOT NULL,
  `monto` float NOT NULL,
  `capital` float NOT NULL,
  `interes` float NOT NULL,
  `mora` float NOT NULL DEFAULT '0',
  `estado` int(11) NOT NULL DEFAULT '0',
  `fecha_pago` date NOT NULL,
  `fecha_limite` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuotas`
--

INSERT INTO `cuotas` (`id`, `id_prestamo`, `monto`, `capital`, `interes`, `mora`, `estado`, `fecha_pago`, `fecha_limite`) VALUES
(1, 1, 1208.33, 979.167, 18, 0, 0, '2018-05-06', '0000-00-00'),
(2, 1, 1208.33, 990.243, 18, 0, 0, '2018-06-06', '0000-00-00'),
(3, 1, 1208.33, 1001.32, 18, 0, 0, '2018-07-06', '0000-00-00'),
(4, 1, 1208.33, 1012.4, 18, 0, 0, '2018-08-06', '0000-00-00'),
(5, 1, 1208.33, 1023.47, 18, 0, 0, '2018-09-06', '0000-00-00'),
(6, 1, 1208.33, 1034.55, 18, 0, 0, '2018-10-06', '0000-00-00'),
(7, 1, 1208.33, 1045.62, 18, 0, 0, '2018-11-06', '0000-00-00'),
(8, 1, 1208.33, 1056.7, 18, 0, 0, '2018-12-06', '0000-00-00'),
(9, 1, 1208.33, 1067.78, 19, 0, 0, '2019-01-06', '0000-00-00'),
(10, 1, 1208.33, 1078.85, 19, 0, 0, '2019-02-06', '0000-00-00'),
(11, 1, 1208.33, 1089.93, 19, 0, 0, '2019-03-06', '0000-00-00'),
(12, 1, 1208.33, 1101.01, 19, 0, 0, '2019-04-06', '0000-00-00'),
(13, 1, 1208.33, 1112.08, 19, 0, 0, '2019-05-06', '0000-00-00'),
(14, 1, 1208.33, 1123.16, 19, 0, 0, '2019-06-06', '0000-00-00'),
(15, 1, 1208.33, 1134.24, 19, 0, 0, '2019-07-06', '0000-00-00'),
(16, 1, 1208.33, 1145.31, 19, 0, 0, '2019-08-06', '0000-00-00'),
(17, 1, 1208.33, 1156.39, 19, 0, 0, '2019-09-06', '0000-00-00'),
(18, 1, 1208.33, 1167.47, 19, 0, 0, '2019-10-06', '0000-00-00'),
(19, 1, 1208.33, 1178.54, 19, 0, 0, '2019-11-06', '0000-00-00'),
(20, 1, 1208.33, 1189.62, 19, 0, 0, '2019-12-06', '0000-00-00'),
(21, 1, 1208.33, 1200.69, 20, 0, 0, '2020-01-06', '0000-00-00'),
(22, 1, 1208.33, 1211.77, 20, 0, 0, '2020-02-06', '0000-00-00'),
(23, 1, 1208.33, 1222.85, 20, 0, 0, '2020-03-06', '0000-00-00'),
(24, 1, 1208.33, 1233.92, 20, 0, 0, '2020-04-06', '0000-00-00'),
(25, 1, 2250, 2020.83, 229.167, 0, 0, '2019-02-25', '2019-03-09'),
(26, 1, 2250, 2041.46, 208.542, 0, 0, '2019-03-25', '2019-04-09'),
(27, 1, 2250, 2062.08, 187.917, 0, 0, '2019-04-25', '2019-05-09'),
(28, 1, 2250, 2082.71, 167.292, 0, 0, '2019-05-25', '2019-06-09'),
(29, 1, 2250, 2103.33, 146.667, 0, 0, '2019-06-25', '2019-07-09'),
(30, 1, 2250, 2123.96, 126.042, 0, 0, '2019-07-25', '2019-08-09'),
(31, 1, 2250, 2144.58, 105.417, 0, 0, '2019-08-25', '2019-09-09'),
(32, 1, 2250, 2165.21, 84.7917, 0, 0, '2019-09-25', '2019-10-09'),
(33, 1, 2250, 2185.83, 64.1667, 0, 0, '2019-10-25', '2019-11-09'),
(34, 1, 2250, 2206.46, 43.5417, 0, 0, '2019-11-25', '2019-12-09'),
(35, 1, 2250, 2227.08, 22.9167, 0, 0, '2019-12-25', '2020-01-09'),
(36, 1, 2250, 2247.71, 2.29167, 0, 0, '2020-01-25', '2020-02-09'),
(37, 1, 2880, 2586.67, 293.333, 0, 0, '2012-02-12', '2012-02-24'),
(38, 1, 2880, 2613.07, 266.933, 0, 0, '2012-03-12', '2012-03-24'),
(39, 1, 2880, 2639.47, 240.533, 0, 0, '2012-04-12', '2012-04-24'),
(40, 1, 2880, 2665.87, 214.133, 0, 0, '2012-05-12', '2012-05-24'),
(41, 1, 2880, 2692.27, 187.733, 0, 0, '2012-06-12', '2012-06-24'),
(42, 1, 2880, 2718.67, 161.333, 0, 0, '2012-07-12', '2012-07-24'),
(43, 1, 2880, 2745.07, 134.933, 0, 0, '2012-08-12', '2012-08-24'),
(44, 1, 2880, 2771.47, 108.533, 0, 0, '2012-09-12', '2012-09-24'),
(45, 1, 2880, 2797.87, 82.1333, 0, 0, '2012-10-12', '2012-10-24'),
(46, 1, 2880, 2824.27, 55.7333, 0, 0, '2012-11-12', '2012-11-24'),
(47, 1, 2880, 2850.67, 29.3333, 0, 0, '2012-12-12', '2012-12-24'),
(48, 1, 2880, 2877.07, 2.93333, 0, 0, '2013-01-12', '2013-01-24'),
(49, 1, 2880, 2586.67, 293.333, 0, 0, '1970-01-01', '1970-01-01'),
(50, 1, 2880, 2613.07, 266.933, 0, 0, '1970-02-01', '1970-02-01'),
(51, 1, 2880, 2639.47, 240.533, 0, 0, '1970-03-01', '1970-03-01'),
(52, 1, 2880, 2665.87, 214.133, 0, 0, '1970-04-01', '1970-04-01'),
(53, 1, 2880, 2692.27, 187.733, 0, 0, '1970-05-01', '1970-05-01'),
(54, 1, 2880, 2718.67, 161.333, 0, 0, '1970-06-01', '1970-06-01'),
(55, 1, 2880, 2745.07, 134.933, 0, 0, '1970-07-01', '1970-07-01'),
(56, 1, 2880, 2771.47, 108.533, 0, 0, '1970-08-01', '1970-08-01'),
(57, 1, 2880, 2797.87, 82.1333, 0, 0, '1970-09-01', '1970-09-01'),
(58, 1, 2880, 2824.27, 55.7333, 0, 0, '1970-10-01', '1970-10-01'),
(59, 1, 2880, 2850.67, 29.3333, 0, 0, '1970-11-01', '1970-11-01'),
(60, 1, 2880, 2877.07, 2.93333, 0, 0, '1970-12-01', '1970-12-01'),
(61, 6, 90, 80.8333, 9.16667, 0, 0, '2019-02-05', '2019-02-17'),
(62, 6, 90, 81.6583, 8.34167, 0, 0, '2019-03-05', '2019-03-17'),
(63, 6, 90, 82.4833, 7.51667, 0, 0, '2019-04-05', '2019-04-17'),
(64, 6, 90, 83.3083, 6.69167, 0, 0, '2019-05-05', '2019-05-17'),
(65, 6, 90, 84.1333, 5.86667, 0, 0, '2019-06-05', '2019-06-17'),
(66, 6, 90, 84.9583, 5.04167, 0, 0, '2019-07-05', '2019-07-17'),
(67, 6, 90, 85.7833, 4.21667, 0, 0, '2019-08-05', '2019-08-17'),
(68, 6, 90, 86.6083, 3.39167, 0, 0, '2019-09-05', '2019-09-17'),
(69, 6, 90, 87.4333, 2.56667, 0, 0, '2019-10-05', '2019-10-17'),
(70, 6, 90, 88.2583, 1.74167, 0, 0, '2019-11-05', '2019-11-17'),
(71, 6, 90, 89.0833, 0.916667, 0, 0, '2019-12-05', '2019-12-17'),
(72, 6, 90, 89.9083, 0.0916667, 0, 0, '2020-01-05', '2020-01-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `documento` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `documento`, `telefono`, `direccion`, `email`, `id_perfil`, `fecha_nacimiento`, `fecha`) VALUES
(1, 'Alejandro Matos', '7589093545', '(849) 987-6543', 'El país de las maravillas', 'Otrocorreo@correo.com', 4, '1990-03-11', '2019-03-07 19:45:53'),
(2, 'Juan Perez', '6475857463', '(809) 654-3211', 'Una direccion', 'Email@email.com', 1, '1995-03-28', '2019-03-07 19:46:34'),
(3, 'Deivid Castillo', '40224246831', '8494024466', 'Churchill', 'deividC047@gmail.com', 1, '2011-11-11', '2019-03-17 22:47:13'),
(4, 'Viviana Beltre', '00155874589', '809654789', 'una calle', 'viv@fif.com', 3, '1998-12-09', '2019-03-20 18:59:37'),
(5, 'Viviana Beltre', '234444', '4444', 'churchill', 'Juancito@hotmail.com', 3, '1998-08-08', '2019-04-07 20:47:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formadepago`
--

CREATE TABLE `formadepago` (
  `id` int(11) NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garante`
--

CREATE TABLE `garante` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `documento` text NOT NULL,
  `direccion` text NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `perfil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `perfil`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Cajero'),
(4, 'Especial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `monto` decimal(60,2) NOT NULL,
  `total` decimal(60,2) NOT NULL,
  `pendiente` decimal(60,2) NOT NULL,
  `tasa_interes` float NOT NULL,
  `interes` decimal(60,2) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `cuotas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id`, `id_cliente`, `id_usuario`, `monto`, `total`, `pendiente`, `tasa_interes`, `interes`, `estado`, `cuotas`, `fecha`) VALUES
(1, 565872, 2, '10000.00', '10800.00', '10800.00', 11, '800.00', 1, 12, '2019-04-11 05:19:58'),
(2, 12548792, 2, '25000.00', '29000.00', '29000.00', 11, '4000.00', 1, 24, '2019-04-11 05:20:05'),
(3, 15487, 2, '25000.00', '29000.00', '29000.00', 11, '4000.00', 1, 24, '2019-04-11 05:20:09'),
(4, 1547896, 2, '25000.00', '27000.00', '27000.00', 11, '2000.00', 1, 12, '2019-04-11 05:20:13'),
(5, 165564654, 0, '32000.00', '34560.00', '34560.00', 11, '2560.00', 1, 12, '2019-04-11 05:28:32'),
(6, 5545465, 0, '1000.00', '1080.00', '1080.00', 11, '80.00', 1, 12, '2019-04-11 05:36:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE `recibo` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_prestamo` int(11) NOT NULL,
  `capital` float NOT NULL,
  `interes` float NOT NULL,
  `mora` float NOT NULL,
  `total_pagado` float NOT NULL,
  `id_forma_pago` int(11) NOT NULL,
  `referencia_f_pago` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo_detalle`
--

CREATE TABLE `recibo_detalle` (
  `id_recibo` int(11) NOT NULL,
  `id_prestamo` int(11) NOT NULL,
  `detalle_cuota` int(11) NOT NULL,
  `capital` float NOT NULL,
  `interes` float NOT NULL,
  `mora` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasa`
--

CREATE TABLE `tasa` (
  `id` int(11) NOT NULL,
  `tasa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tasa`
--

INSERT INTO `tasa` (`id`, `tasa`) VALUES
(1, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_empleado` int(11) NOT NULL,
  `id_cliente` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `id_perfil`, `estado`, `fecha`, `id_empleado`, `id_cliente`) VALUES
(1, 'admin', 'admin123', 1, 1, '2019-03-07 19:44:43', 2, '0'),
(2, 'usuario1', 'usuario123', 2, 1, '2019-03-21 05:32:01', 0, '7674839986'),
(3, 'usuario2', 'usuario123', 4, 1, '2019-03-07 19:44:57', 1, '0'),
(4, 'vbelt', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 3, 1, '2019-03-20 20:04:12', 4, '0'),
(5, '00188579873', '$2a$07$asxx54ahjppf45sd87a5au8Guh1q1GlbiZXkLiljfAu.4na4ldqV6', 2, 1, '2019-03-27 18:07:26', 0, '00188579873'),
(6, '22555454645', '$2a$07$asxx54ahjppf45sd87a5auV1OhBijih5CIy3CKmghjSDUDfN0knCS', 2, 1, '2019-03-27 18:08:58', 0, '22555454645'),
(7, '00015489987', '$2a$07$asxx54ahjppf45sd87a5au3BcU.9Goo1BQVYq5hMC5f9DD9mhBo3u', 2, 1, '2019-03-27 18:12:03', 0, '00015489987'),
(8, '23486468798', '$2a$07$asxx54ahjppf45sd87a5auD6pDN6ejYTJT7SV/.UB2OUU2s.ac/Ae', 2, 1, '2019-03-24 21:07:17', 0, '23486468798'),
(9, '00015489987', '$2a$07$asxx54ahjppf45sd87a5auVjOVA1M0jzJ7Y5OUvqooyMvD0K/SmtS', 2, 1, '2019-03-27 17:59:34', 0, '00015489987'),
(10, '0000565872', '$2a$07$asxx54ahjppf45sd87a5aupFIBN6QBCCUKBPw5HTXhz5zLkKp7vqq', 2, 1, '2019-04-11 04:42:53', 0, '0000565872'),
(11, '0012548792', '$2a$07$asxx54ahjppf45sd87a5auvySSuJFTDrbLnBcETUh22KwOIeNMzx2', 2, 1, '2019-04-11 05:01:29', 0, '0012548792'),
(12, '0015487', '$2a$07$asxx54ahjppf45sd87a5au36./D8eML3zjV0dTcynO.oF0661W5We', 2, 1, '2019-04-11 05:03:53', 0, '0015487'),
(13, '001547896', '$2a$07$asxx54ahjppf45sd87a5auf5rZaXTbqeGMQw2Vd1oauMZcbUQvXyW', 2, 1, '2019-04-11 05:08:21', 0, '001547896'),
(14, '01215555', '$2a$07$asxx54ahjppf45sd87a5auZIYe1THEMNEdvdMUgSDCn04xhbsAXbC', 2, 1, '2019-04-11 05:27:26', 0, '01215555'),
(15, '165564654', '$2a$07$asxx54ahjppf45sd87a5auC6nHWKOjCF61H/gOuozpptbh3WlY8a2', 2, 1, '2019-04-11 05:28:32', 0, '165564654'),
(16, '05545465', '$2a$07$asxx54ahjppf45sd87a5auGQ3q6H7QSyvDBPoYKQgQ.696OAxrJzq', 2, 1, '2019-04-11 05:36:53', 0, '05545465');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formadepago`
--
ALTER TABLE `formadepago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `garante`
--
ALTER TABLE `garante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recibo_detalle`
--
ALTER TABLE `recibo_detalle`
  ADD PRIMARY KEY (`id_recibo`);

--
-- Indices de la tabla `tasa`
--
ALTER TABLE `tasa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `formadepago`
--
ALTER TABLE `formadepago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `garante`
--
ALTER TABLE `garante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `recibo`
--
ALTER TABLE `recibo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tasa`
--
ALTER TABLE `tasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

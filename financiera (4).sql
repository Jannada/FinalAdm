-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2019 a las 15:47:54
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
(5, 'Deivy klk', '', '23486468798', '(754) 555-5895', 'una calle', 'asdas@adas.com', '2065-05-04', 0, '2019-03-24 21:07:17'),
(6, 'Josep Yepeto', '', '00015489987', '(852) 217-7853', 'calles', 'yo@yo.com', '2054-05-06', 0, '2019-03-27 17:59:34'),
(16, 'Petricio Estrella', 'Masculino', '4022358742', '820789451', 'calle', 'asdas@adas.com', '1994-02-05', 0, '2019-04-12 01:34:26'),
(17, 'Patricio Estrella', 'Masculino', '22555454647', '(809) 569-8521', 'unas calle', 'Juancito@hotmail.com', '1994-05-05', 0, '2019-04-12 01:38:02'),
(18, 'Pedro Pablo', 'Masculino', '4025898751', '8098878544', 'calles', 'viv@fif.com', '1998-09-08', 0, '2019-04-12 06:12:06');

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
(97, 1, 1080, 970, 110, 0, 0, '2019-04-25', '2020-03-20'),
(98, 1, 1080, 979.9, 100.1, 0, 0, '2019-05-25', '2020-04-20'),
(99, 1, 1080, 989.8, 90.2, 0, 0, '2019-06-25', '2020-05-20'),
(100, 1, 1080, 999.7, 80.3, 0, 0, '2019-07-25', '2020-06-20'),
(101, 1, 1080, 1009.6, 70.4, 0, 0, '2019-08-25', '2020-07-20'),
(102, 1, 1080, 1019.5, 60.5, 0, 0, '2019-09-25', '2020-08-20'),
(103, 1, 1080, 1029.4, 50.6, 0, 0, '2019-10-25', '2020-09-20'),
(104, 1, 1080, 1039.3, 40.7, 0, 0, '2019-11-25', '2020-10-20'),
(105, 1, 1080, 1049.2, 30.8, 0, 0, '2019-12-25', '2020-11-20'),
(106, 1, 1080, 1059.1, 20.9, 0, 0, '2020-01-25', '2020-12-20'),
(107, 1, 1080, 1069, 11, 0, 0, '2020-02-25', '2021-01-20'),
(108, 1, 1080, 1078.9, 1.1, 0, 0, '2020-03-25', '2021-02-20'),
(109, 1, 1080, 970, 110, 0, 0, '2019-04-25', '2020-03-20'),
(110, 1, 1080, 979.9, 100.1, 0, 0, '2019-05-25', '2020-04-20'),
(111, 1, 1080, 989.8, 90.2, 0, 0, '2019-06-25', '2020-05-20'),
(112, 1, 1080, 999.7, 80.3, 0, 0, '2019-07-25', '2020-06-20'),
(113, 1, 1080, 1009.6, 70.4, 0, 0, '2019-08-25', '2020-07-20'),
(114, 1, 1080, 1019.5, 60.5, 0, 0, '2019-09-25', '2020-08-20'),
(115, 1, 1080, 1029.4, 50.6, 0, 0, '2019-10-25', '2020-09-20'),
(116, 1, 1080, 1039.3, 40.7, 0, 0, '2019-11-25', '2020-10-20'),
(117, 1, 1080, 1049.2, 30.8, 0, 0, '2019-12-25', '2020-11-20'),
(118, 1, 1080, 1059.1, 20.9, 0, 0, '2020-01-25', '2020-12-20'),
(119, 1, 1080, 1069, 11, 0, 0, '2020-02-25', '2021-01-20'),
(120, 1, 1080, 1078.9, 1.1, 0, 0, '2020-03-25', '2021-02-20'),
(121, 11, 270, 242.5, 27.5, 0, 0, '2019-01-21', '2019-02-02'),
(122, 11, 270, 244.975, 25.025, 0, 0, '2019-02-21', '2019-03-02'),
(123, 11, 270, 247.45, 22.55, 0, 0, '2019-03-21', '2019-04-02'),
(124, 11, 270, 249.925, 20.075, 0, 0, '2019-04-21', '2019-05-02'),
(125, 11, 270, 252.4, 17.6, 0, 0, '2019-05-21', '2019-06-02'),
(126, 11, 270, 254.875, 15.125, 0, 0, '2019-06-21', '2019-07-02'),
(127, 11, 270, 257.35, 12.65, 0, 0, '2019-07-21', '2019-08-02'),
(128, 11, 270, 259.825, 10.175, 0, 0, '2019-08-21', '2019-09-02'),
(129, 11, 270, 262.3, 7.7, 0, 0, '2019-09-21', '2019-10-02'),
(130, 11, 270, 264.775, 5.225, 0, 0, '2019-10-21', '2019-11-02'),
(131, 11, 270, 267.25, 2.75, 0, 0, '2019-11-21', '2019-12-02'),
(132, 11, 270, 269.725, 0.275, 0, 0, '2019-12-21', '2020-01-02');

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
  `id_cliente` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
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
(9, '4022358742', 2, '12000.00', '12960.00', '12960.00', 11, '960.00', 1, 12, '2019-04-12 01:34:26'),
(10, '22555454647', 2, '12000.00', '12960.00', '12960.00', 11, '960.00', 1, 12, '2019-04-12 01:38:02'),
(11, '4025898751', 2, '3000.00', '3240.00', '3240.00', 11, '240.00', 1, 12, '2019-04-12 06:12:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE `recibo` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
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
  `nombre` text NOT NULL,
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

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `id_perfil`, `estado`, `fecha`, `id_empleado`, `id_cliente`) VALUES
(1, '	Juan Perez', 'admin', 'admin123', 1, 1, '2019-04-11 23:02:20', 2, '0'),
(3, 'Alejandro Matos', 'usuario2', 'usuario123', 4, 1, '2019-04-11 23:03:36', 1, '0'),
(4, '	Viviana Beltre', 'vbelt', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 3, 1, '2019-04-11 23:03:06', 4, '0'),
(5, 'Juan Martines', '00188579873', '$2a$07$asxx54ahjppf45sd87a5au8Guh1q1GlbiZXkLiljfAu.4na4ldqV6', 2, 1, '2019-04-11 23:07:08', 0, '00188579873'),
(6, 'Anthony Pérez', '22555454645', '$2a$07$asxx54ahjppf45sd87a5auV1OhBijih5CIy3CKmghjSDUDfN0knCS', 2, 1, '2019-04-11 23:08:02', 0, '22555454645'),
(7, 'Josep Yepeto', '00015489987', '$2a$07$asxx54ahjppf45sd87a5au3BcU.9Goo1BQVYq5hMC5f9DD9mhBo3u', 2, 1, '2019-04-11 23:08:26', 0, '00015489987'),
(8, '	Deivy klk', '23486468798', '$2a$07$asxx54ahjppf45sd87a5auD6pDN6ejYTJT7SV/.UB2OUU2s.ac/Ae', 2, 1, '2019-04-11 23:08:43', 0, '23486468798'),
(9, 'Josep Yepeto', '00015489987', '$2a$07$asxx54ahjppf45sd87a5auVjOVA1M0jzJ7Y5OUvqooyMvD0K/SmtS', 2, 1, '2019-04-11 23:08:56', 0, '00015489987'),
(19, 'Patricio Estrella', '22555454647', '$2a$07$asxx54ahjppf45sd87a5auV1OhBijih5CIy3CKmghjSDUDfN0knCS', 2, 1, '2019-04-12 01:38:02', 0, '22555454647'),
(20, 'Pedro Pablo', '4025898751', '$2a$07$asxx54ahjppf45sd87a5aubXvudla7jV5zt3izEngExiwVmKfxtZO', 2, 1, '2019-04-12 06:12:06', 0, '4025898751');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

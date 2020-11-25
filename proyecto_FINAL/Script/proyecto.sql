-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2020 a las 00:12:22
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'Mantenimiento inmueble'),
(2, 'Mantenimiento muebles'),
(3, 'Servicios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimientos`
--

CREATE TABLE `requerimientos` (
  `codigo` int(11) NOT NULL,
  `usuario solicitante` varchar(100) NOT NULL,
  `usuario soporte` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `servicio` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `descripcion solicitud` varchar(100) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `fecha creacion` date NOT NULL,
  `fecha atencion` date NOT NULL,
  `fecha finalizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos de servicios`
--

CREATE TABLE `tipos de servicios` (
  `id` int(11) NOT NULL,
  `ID_categorias` int(11) NOT NULL,
  `servicio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos de servicios`
--

INSERT INTO `tipos de servicios` (`id`, `ID_categorias`, `servicio`) VALUES
(1, 1, 'Baños'),
(3, 1, 'Cielo Raso'),
(4, 1, 'Electrico'),
(5, 1, 'Pared'),
(6, 1, 'Puerta'),
(7, 2, 'Aire Acondicionando'),
(8, 2, 'Archivador'),
(9, 2, 'Puesto de trabajo'),
(10, 2, 'Silla'),
(11, 3, 'Aseo'),
(12, 3, 'Transporte'),
(13, 3, 'Vigilancia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos usuario`
--

CREATE TABLE `tipos usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos usuario`
--

INSERT INTO `tipos usuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Soporte'),
(3, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `ID_tipo_usuario` varchar(50) CHARACTER SET utf8 NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `direccion`, `telefono`, `ID_tipo_usuario`, `codigo`, `usuario`, `contrasena`, `email`, `estado`) VALUES
(1, 'YAHIKO', 'KONOHA', '3333', '1', '123456', 'pain', '123', 'rdfajardos@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `requerimientos`
--
ALTER TABLE `requerimientos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tipos de servicios`
--
ALTER TABLE `tipos de servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos usuario`
--
ALTER TABLE `tipos usuario`
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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipos de servicios`
--
ALTER TABLE `tipos de servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipos usuario`
--
ALTER TABLE `tipos usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2021 a las 03:07:03
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd dc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrio`
--

CREATE TABLE `barrio` (
  `id_barrio` int(11) NOT NULL,
  `nombre_barrio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `barrio`
--

INSERT INTO `barrio` (`id_barrio`, `nombre_barrio`) VALUES
(1, 'Manrique');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_de_pedido`
--

CREATE TABLE `detalle_de_pedido` (
  `iddetalle_pedido` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `id_productos` int(11) DEFAULT NULL,
  `idpedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_de_pedido`
--

INSERT INTO `detalle_de_pedido` (`iddetalle_pedido`, `cantidad`, `id_productos`, `idpedido`) VALUES
(1, 5, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `iddocumento` varchar(15) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `segundo_nombre` varchar(20) DEFAULT NULL,
  `primer_apellido` varchar(20) DEFAULT NULL,
  `segundo_apellido` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `telefono_fijo` varchar(20) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `contraseña` varchar(30) DEFAULT NULL,
  `grupo_sanguineo` varchar(10) DEFAULT NULL,
  `id_sede` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`iddocumento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `celular`, `telefono_fijo`, `correo`, `contraseña`, `grupo_sanguineo`, `id_sede`, `id_rol`) VALUES
('1', 'Juan', 'Jose', 'Londoño', 'Agudelo', '3326598', '65656565', 'juan@gmail.com', '1234567', 'o+', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_productos`
--

CREATE TABLE `entrada_productos` (
  `identrada_productos` int(11) NOT NULL,
  `cantidad_agregar` int(11) DEFAULT NULL,
  `fecha_agregar` date DEFAULT NULL,
  `valor_producto` float DEFAULT NULL,
  `iddocumento` varchar(15) DEFAULT NULL,
  `idprecios_productos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrada_productos`
--

INSERT INTO `entrada_productos` (`identrada_productos`, `cantidad_agregar`, `fecha_agregar`, `valor_producto`, `iddocumento`, `idprecios_productos`) VALUES
(1, 50, '2021-02-11', 25000, '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `nombre_estado`) VALUES
(2, 'Cancelado'),
(3, 'Confirmado'),
(6, 'Entregado'),
(4, 'enviado'),
(1, 'espera de confirmaci'),
(5, 'inconvenientes'),
(7, 'Preparacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL,
  `nombre_municipio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `nombre_municipio`) VALUES
(1, 'Antioquia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_sede` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `docuc` varchar(15) NOT NULL,
  `primer_nombrec` varchar(25) NOT NULL,
  `segundo_nombrec` varchar(25) DEFAULT NULL,
  `primer_apellidoc` varchar(25) NOT NULL,
  `segundo_apellidoc` varchar(25) NOT NULL,
  `direccionc` varchar(20) DEFAULT NULL,
  `telefonoc` varchar(20) DEFAULT NULL,
  `celularc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idpedido`, `fecha`, `id_sede`, `id_estado`, `docuc`, `primer_nombrec`, `segundo_nombrec`, `primer_apellidoc`, `segundo_apellidoc`, `direccionc`, `telefonoc`, `celularc`) VALUES
(1, '2021-02-11', 1, 1, '2021543', 'Simon', 'David', 'Maya', 'Villegas', 'calle prueba', '568974', '3215468978');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio_productos`
--

CREATE TABLE `precio_productos` (
  `idprecios_productos` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `precio_producto` float DEFAULT NULL,
  `id_productos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `precio_productos`
--

INSERT INTO `precio_productos` (`idprecios_productos`, `fecha_inicio`, `fecha_fin`, `precio_producto`, `id_productos`) VALUES
(1, '2021-02-11', '2022-02-11', 25000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `valor_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre`, `stock`, `valor_producto`) VALUES
(1, 'Medio pollo asa', 50, 25000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombreRol` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombreRol`) VALUES
(1, 'administrador'),
(2, 'central'),
(3, 'sede');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(11) NOT NULL,
  `nombre_sede` varchar(35) DEFAULT NULL,
  `direccion_sede` varchar(35) DEFAULT NULL,
  `id_barrio` int(11) DEFAULT NULL,
  `id_municipio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `nombre_sede`, `direccion_sede`, `id_barrio`, `id_municipio`) VALUES
(1, 'Pollos Mario prueba', 'Calle prueba', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrio`
--
ALTER TABLE `barrio`
  ADD PRIMARY KEY (`id_barrio`),
  ADD UNIQUE KEY `nombre_barrio` (`nombre_barrio`);

--
-- Indices de la tabla `detalle_de_pedido`
--
ALTER TABLE `detalle_de_pedido`
  ADD PRIMARY KEY (`iddetalle_pedido`),
  ADD UNIQUE KEY `fk_pedido` (`idpedido`),
  ADD UNIQUE KEY `id_productos` (`id_productos`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`iddocumento`,`primer_nombre`),
  ADD UNIQUE KEY `FK_sede` (`id_sede`),
  ADD UNIQUE KEY `FK_rol` (`id_rol`);

--
-- Indices de la tabla `entrada_productos`
--
ALTER TABLE `entrada_productos`
  ADD PRIMARY KEY (`identrada_productos`),
  ADD UNIQUE KEY `FK_empleado` (`iddocumento`),
  ADD UNIQUE KEY `FK_precios_productos` (`idprecios_productos`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`),
  ADD UNIQUE KEY `nombre_estado` (`nombre_estado`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD UNIQUE KEY `id_sede` (`id_sede`),
  ADD UNIQUE KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `precio_productos`
--
ALTER TABLE `precio_productos`
  ADD PRIMARY KEY (`idprecios_productos`),
  ADD UNIQUE KEY `FK_productos` (`id_productos`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`),
  ADD UNIQUE KEY `nombreRol` (`nombreRol`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`),
  ADD UNIQUE KEY `id_municipio` (`id_municipio`),
  ADD UNIQUE KEY `id_barrio` (`id_barrio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barrio`
--
ALTER TABLE `barrio`
  MODIFY `id_barrio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `entrada_productos`
--
ALTER TABLE `entrada_productos`
  MODIFY `identrada_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `precio_productos`
--
ALTER TABLE `precio_productos`
  MODIFY `idprecios_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_de_pedido`
--
ALTER TABLE `detalle_de_pedido`
  ADD CONSTRAINT `detalle_de_pedido_ibfk_1` FOREIGN KEY (`idpedido`) REFERENCES `pedido` (`idpedido`),
  ADD CONSTRAINT `detalle_de_pedido_ibfk_2` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id_productos`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`id_sede`) REFERENCES `sede` (`id_sede`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `entrada_productos`
--
ALTER TABLE `entrada_productos`
  ADD CONSTRAINT `entrada_productos_ibfk_1` FOREIGN KEY (`idprecios_productos`) REFERENCES `precio_productos` (`idprecios_productos`),
  ADD CONSTRAINT `entrada_productos_ibfk_2` FOREIGN KEY (`iddocumento`) REFERENCES `empleados` (`iddocumento`);

--
-- Filtros para la tabla `precio_productos`
--
ALTER TABLE `precio_productos`
  ADD CONSTRAINT `precio_productos_ibfk_1` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id_productos`);

--
-- Filtros para la tabla `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `sede_ibfk_1` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`),
  ADD CONSTRAINT `sede_ibfk_2` FOREIGN KEY (`id_barrio`) REFERENCES `barrio` (`id_barrio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

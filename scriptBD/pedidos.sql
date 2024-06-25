-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2024 a las 21:59:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pedidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'CARNICOS'),
(2, 'LACTEOS'),
(3, 'LIMPIEZA'),
(4, 'HIGINE PERSONAL'),
(5, 'MEDICINAS'),
(6, 'COSMETICOS'),
(7, 'REVISTAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `numIdentificacion` varchar(15) NOT NULL,
  `nombreCompania` varchar(30) NOT NULL,
  `nombreContacto` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `telefono2` varchar(12) DEFAULT NULL,
  `clave` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `numIdentificacion`, `nombreCompania`, `nombreContacto`, `direccion`, `email`, `telefono`, `telefono2`, `clave`) VALUES
(1, '1890786576', 'SUPERMERCADO ESTRELLA', 'JUAN ALBAN', 'AV.AMAZONAS', 'abc@gmail.com', '3005275858', NULL, '123'),
(2, '1298765477', 'EL ROSADO', 'MARIA CORDERO', 'AV.AEL INCA', 'abc@gmail.com', '3005275858', NULL, '123'),
(3, '1009876567', 'DISTRIBUIDORA PRENSA', 'PEDRO PINTO', 'EL PINAR', 'abc@gmail.com', '3005275858', NULL, '123'),
(4, '1876090006', 'SU TIENDA', 'PABLO PONCE', 'AV.AMAZONAS', 'abc@gmail.com', '3005275858', NULL, '123'),
(5, '1893456776', 'SUPERMERCADO DORADO', 'LORENA PAZ', 'AV.6 DICIEMBRE', 'abc@gmail.com', '3005275858', NULL, '123'),
(6, '1678999891', 'MI COMISARIATO', 'ROSARIO UTRERAS', 'AV.AMAZONAS', 'abc@gmail.com', '3005275858', NULL, '123'),
(7, '1244567888', 'SUPERMERCADO DESCUENTO', 'LETICIA ORTEGA', 'AV.LA PRENSA', 'abc@gmail.com', '3005275858', NULL, '123'),
(8, '1456799022', 'EL DESCUENTO', 'JUAN TORRES', 'AV.PATRIA', 'abc@gmail.com', '3005275858', NULL, '123'),
(9, '1845677777', 'DE LUISE', 'JORGE PARRA', 'AV.AMAZONAS', 'abc@gmail.com', '3005275858', NULL, '123'),
(10, '183445667', 'YARBANTRELLA', 'PABLO POLIT', 'AV.REPUBLICA', 'abc@gmail.com', '3005275858', NULL, '123'),
(11, '12345678', 'SENA', 'Jorge sena', 'calle 5 sena', 'sena@sena.edu.co', '314525874', '300123456', '123admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ordenes`
--

CREATE TABLE `detalle_ordenes` (
  `id` int(11) NOT NULL,
  `idOrden` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_ordenes`
--

INSERT INTO `detalle_ordenes` (`id`, `idOrden`, `idProducto`, `cantidad`) VALUES
(35, 1, 1, 2),
(36, 1, 4, 1),
(37, 1, 6, 1),
(38, 1, 9, 1),
(39, 2, 10, 10),
(40, 2, 13, 20),
(41, 3, 3, 10),
(42, 4, 9, 12),
(43, 5, 1, 14),
(44, 5, 4, 20),
(45, 6, 3, 12),
(46, 7, 11, 10),
(47, 8, 2, 10),
(48, 8, 5, 14),
(49, 8, 7, 10),
(50, 9, 11, 10),
(51, 10, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombres` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `reportaA` int(11) DEFAULT NULL,
  `extension` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombres`, `apellidos`, `fechaNacimiento`, `reportaA`, `extension`) VALUES
(1, 'JUAN', 'CRUZ', '0000-00-00', NULL, 231),
(2, 'MARIO', 'SANCHEZ', '0000-00-00', 1, 144),
(3, 'VERONICA', 'ARIAS', '0000-00-00', 1, 234),
(4, 'PABLO', 'CELY', '0000-00-00', 2, 567),
(5, 'DIEGO', 'ANDRADE', '0000-00-00', 2, 890),
(6, 'JUAN', 'ANDRADE', '0000-00-00', 3, 230),
(7, 'MARIA', 'NOBOA', '0000-00-00', 3, 261);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `descuento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id`, `idEmpleado`, `idCliente`, `fecha`, `descuento`) VALUES
(1, 3, 4, '2017-06-07 00:00:00', 5),
(2, 3, 4, '2002-06-07 00:00:00', 10),
(3, 4, 5, '2005-06-07 00:00:00', 6),
(4, 2, 6, '2006-06-07 00:00:00', 2),
(5, 2, 7, '2009-06-07 00:00:00', NULL),
(6, 4, 5, '2012-06-07 00:00:00', 10),
(7, 2, 5, '2014-06-07 00:00:00', 10),
(8, 3, 2, '2013-06-07 00:00:00', 10),
(9, 3, 2, '2017-06-07 00:00:00', 3),
(10, 2, 2, '2018-06-07 00:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `vrUnitario` double NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `idProveedor`, `idCategoria`, `descripcion`, `vrUnitario`, `stock`, `imagen`) VALUES
(1, 1, 1, 'SALCHíCHAS VIENESAS', 3900, 200, NULL),
(2, 1, 1, 'SALAMI DE AJO', 4000, 300, NULL),
(3, 1, 1, 'BOTON PARA ASADO', 5000, 400, NULL),
(4, 2, 1, 'SALCHICHAS DE POLLO', 3000, 200, NULL),
(5, 2, 1, 'JAMON DE POLLO', 3000, 100, NULL),
(6, 3, 2, 'YOGURT NATURAL', 4000, 80, NULL),
(7, 3, 2, 'LECHE CHOCOLATE', 2000, 90, NULL),
(8, 4, 2, 'YOGURT DE SABORES', 2000, 200, NULL),
(9, 4, 2, 'CREMA DE LECHE', 4000, 30, NULL),
(10, 5, 6, 'BASE DE MAQUILLAJE', 15000, 40, NULL),
(11, 5, 6, 'RIMMEL', 13000, 20, NULL),
(12, 6, 6, 'SOMBRA DE OJOS', 10000, 100, NULL),
(13, 9, 5, 'Dolex forte', 9500, 120, NULL),
(14, 7, 7, 'Revista VEA', 5200, 100, NULL),
(15, 9, 5, 'jarabe de la tos', 5000, 10, NULL),
(16, 3, 6, 'labial tonay', 12000, 100, NULL),
(17, 1, 3, 'escoba de cerda de dos colores', 5555, 100, NULL),
(18, 2, 2, 'Yogurt en bolsa de 350 ml', 1550, 6, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `telefono2` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `contacto`, `telefono`, `telefono2`) VALUES
(1, 'DON DIEGO', 'MANUEL ANDRADE', '099234567', '2124456'),
(2, 'PRONACA', 'JUAN PEREZ', '0923434467', '2124456'),
(3, 'TONY', 'JORGE BRITO', '099234567', '2124456'),
(4, 'MIRAFLORES', 'MARIA PAZ', '098124498', '2458799'),
(5, 'ALMAY', 'PEDRO GONZALEZ', '097654567', '2507190'),
(6, 'REVLON', 'MONICA SALAS', '099245678', '2609876'),
(7, 'YANBAL', 'BETY ARIAS', '098124458', '2450887'),
(8, 'CLEANER', 'MANUEL ANDRADE', '099234567', '2124456'),
(9, 'BAYER', 'MANUEL ANDRADE', '099234567', '2124456'),
(10, 'PALMOLIVE', 'MANUEL ANDRADE', '099234567', '2124456'),
(11, 'JURIS', 'MANUEL ANDRADE', '099234567', '2124456'),
(12, 'Proveedor de prueba', 'contacto de prueba', '300520333', '1323656565'),
(13, 'Otro Proveedor 2', 'Otro contacto 2', '888', '777'),
(15, 'ProveeTodo', 'Contacto proveetodo', '3333333', '11111111');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numIdentificacion` (`numIdentificacion`);

--
-- Indices de la tabla `detalle_ordenes`
--
ALTER TABLE `detalle_ordenes`
  ADD PRIMARY KEY (`id`,`idOrden`),
  ADD KEY `FK_DETALLE__PROD_DETA_PRODUCTO` (`idProducto`),
  ADD KEY `FK_DETALLE__ORDEN_DET_ORDENES` (`idOrden`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_EMPLEADO_REPORTA` (`reportaA`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ORDENES_CLIEN_ORD_CLIENTES` (`idCliente`),
  ADD KEY `FK_ORDENES_EMPLE_ORD_EMPLEADO` (`idEmpleado`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PRODUCTO_CATE_PROD_CATEGORI` (`idCategoria`),
  ADD KEY `FK_PRODUCTO_PROV_PROD_PROVEEDO` (`idProveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalle_ordenes`
--
ALTER TABLE `detalle_ordenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_ordenes`
--
ALTER TABLE `detalle_ordenes`
  ADD CONSTRAINT `FK_DETALLE__ORDEN_DET_ORDENES` FOREIGN KEY (`idOrden`) REFERENCES `ordenes` (`id`),
  ADD CONSTRAINT `FK_DETALLE__PROD_DETA_PRODUCTO` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `FK_EMPLEADO_REPORTA` FOREIGN KEY (`reportaA`) REFERENCES `empleados` (`id`);

--
-- Filtros para la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD CONSTRAINT `FK_ORDENES_CLIEN_ORD_CLIENTES` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `FK_ORDENES_EMPLE_ORD_EMPLEADO` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_PRODUCTO_CATE_PROD_CATEGORI` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `FK_PRODUCTO_PROV_PROD_PROVEEDO` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

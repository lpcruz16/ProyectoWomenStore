-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2021 a las 21:55:55
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `womenstore`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `reg_categoria` (IN `id_categoria` INT(15), IN `nombrecategorias` VARCHAR(100), IN `descripcion` VARCHAR(200))  BEGIN
INSERT INTO categorias (id_categoria,nombrecategorias,descripcion) VALUES(id_categoria,nombrecategorias,descripcion);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reg_cliente` (IN `id_cliente` INT(15), IN `nombre` VARCHAR(50), IN `apellido` VARCHAR(50), IN `correo` VARCHAR(30), IN `telefono` VARCHAR(40), IN `usuario` VARCHAR(20), IN `contraseña` VARCHAR(100))  BEGIN
INSERT INTO clientes (id_cliente,nombre,apellido,correo,telefono,usuario,contraseña) 
VALUES(id_cliente,nombre,apellido,correo,telefono,usuario,contraseña);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reg_pedidos` (IN `id_pedidos` INT(15), IN `id_cliente` INT(15), IN `id_empaque` INT(15), IN `estadopedido` ENUM('enviado','transito','entregado','preparacion'), IN `fechahora` TIMESTAMP(6))  BEGIN
INSERT INTO pedidos
(id_pedidos,id_cliente,id_empaques,estadopedido,fechahora) VALUES(id_pedidos,id_cliente,id_empaques,estadopedido,fechahora);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actualizacion_cliente`
--

CREATE TABLE `actualizacion_cliente` (
  `id_cliente` int(15) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  `nuevoid_cliente` int(15) DEFAULT NULL,
  `nuevo_nombre` varchar(50) DEFAULT NULL,
  `nuevo_apellido` varchar(50) DEFAULT NULL,
  `nuevo_correo` varchar(30) DEFAULT NULL,
  `nuevo_telefono` varchar(40) DEFAULT NULL,
  `nuevo_usuario` varchar(20) DEFAULT NULL,
  `nueva_contraseña` varchar(100) DEFAULT NULL,
  `users` varchar(20) DEFAULT NULL,
  `fmodificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actualizacion_cliente`
--

INSERT INTO `actualizacion_cliente` (`id_cliente`, `nombre`, `apellido`, `correo`, `telefono`, `usuario`, `contraseña`, `nuevoid_cliente`, `nuevo_nombre`, `nuevo_apellido`, `nuevo_correo`, `nuevo_telefono`, `nuevo_usuario`, `nueva_contraseña`, `users`, `fmodificacion`) VALUES
(834, 'ROSA', 'CASTILLO', 'CORREO@HOTMAIL.COM', '975896', 'ROSITA123', '12345', 834, 'ROSALBA', 'CASTILLO', 'CORREO@HOTMAIL.COM', '975896', 'ROSITA123', '12345', NULL, '2021-07-02'),
(45345, 'PAOLA', 'CRUZ', 'PAOLACRUZ@HOTMAIL.COM', '48957348', 'PAOLACRZ2', 'paola', 45345, 'paola', 'CRUZ', 'PAOLACRUZ@HOTMAIL.COM', '48957348', 'PAOLACRZ2', 'paola', NULL, '2021-07-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id_calificacion` int(15) NOT NULL,
  `id_cliente` int(15) NOT NULL,
  `id_factura` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `calificacion` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(15) NOT NULL,
  `nombrecategorias` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(15) NOT NULL,
  `Doc_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `Doc_cliente`, `nombre`, `apellido`, `correo`, `telefono`, `usuario`, `contraseña`) VALUES
(6, 10238203, 'YONI', 'CRUZ PINTO', 'yonicruz@hotmail.com', '3168482503', 'yonicruz', 'yoni');

--
-- Disparadores `clientes`
--
DELIMITER $$
CREATE TRIGGER `actualizacion_cliente` AFTER UPDATE ON `clientes` FOR EACH ROW Insert into actualizacion_cliente(id_cliente,nombre, apellido,correo, telefono,usuario,contraseña, Nuevoid_cliente,Nuevo_nombre,Nuevo_apellido,Nuevo_correo,Nuevo_telefono,Nuevo_usuario,Nueva_contraseña,fmodificacion  ) 
Values(old.id_cliente, old.nombre, old.apellido, old.correo, old.telefono,old.usuario,old.contraseña, new.id_cliente, new.nombre, new.apellido,new.correo, new.telefono,new.usuario,new.contraseña, now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `eliminar_cliente` AFTER DELETE ON `clientes` FOR EACH ROW Insert into eliminar_clientes(id_cliente, nombre,apellido, correo, telefono, usuario, contraseña,eliminado) 
Values(old.id_cliente, old.nombre, old.apellido, old.correo, old.telefono,old.usuario,old.contraseña,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `reg_cliente` AFTER INSERT ON `clientes` FOR EACH ROW Insert into reg_cliente(id_cliente, nombre, apellido, correo, telefono,usuario,contraseña, insertado)
Values(new.id_cliente, new.nombre, new.apellido, new.correo, new.telefono, new.usuario, new.contraseña,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_factura` int(15) NOT NULL,
  `id_productos` int(15) NOT NULL,
  `cantidad` int(30) NOT NULL,
  `valorventa` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `id_pedido` int(15) NOT NULL,
  `id_producto` int(15) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `valorventa` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eliminar_clientes`
--

CREATE TABLE `eliminar_clientes` (
  `id_cliente` int(15) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `usuario` varchar(200) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  `eliminado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eliminar_clientes`
--

INSERT INTO `eliminar_clientes` (`id_cliente`, `nombre`, `apellido`, `correo`, `telefono`, `usuario`, `contraseña`, `eliminado`) VALUES
(0, '', '', '', '', '', '', '2021-06-24 15:38:24'),
(32534654, '', '', '', '347234', '', '4CJNhdsGZxGzbgE', '2021-07-01 13:27:03'),
(0, '', '', '', '', '', '', '2021-07-01 13:27:06'),
(8459834, '', '', '', '347234', '', '8473569834', '2021-07-01 13:27:09'),
(23234545, 'camilo ', 'torres', 'camilotorres23@gmail.com', '4567890', 'camilosss23', 'abc123', '2021-07-02 11:45:02'),
(834, 'ROSALBA', 'CASTILLO', 'CORREO@HOTMAIL.COM', '975896', 'ROSITA123', '12345', '2021-07-15 19:22:23'),
(3000, 'SARA CAMILA', 'VARGAS CRUZ', 'saravargas@hotmail.com', '32748505', 'saracruz23', '12345', '2021-07-15 19:22:25'),
(45345, 'paola', 'CRUZ', 'PAOLACRUZ@HOTMAIL.COM', '48957348', 'PAOLACRZ2', 'paola', '2021-07-15 19:22:25'),
(10235677, 'NELSON', 'VARGAS', 'lpcruz16@misena.edu.co', '5645756', 'NELSON_2020', '123445678', '2021-07-15 19:22:26'),
(78902354, 'MARCOS ', 'CRUZ', 'MARCOSCRUZ@HOTMAIL.COM', '6234782', 'MARCOSA', '12345', '2021-07-15 19:22:26'),
(792109982, 'SUSANA', 'CORTEZ', 'nelsonvargas@outlook.co', '5645756', 'SUSANACORTEZ23', '12345', '2021-07-15 19:22:26'),
(1012375627, 'juana', 'roberta', 'juana@hotmail.com', '5645756', 'juanaroberta', 'juana', '2021-07-15 19:22:26'),
(2147483647, 'juleidy', 'pcruz', 'lpcruz16@dddmisena.edu.co', '3209555424923', 'paitovcruz', 'paolap', '2021-07-15 19:22:26'),
(2, 'BLADICIA', 'PINTO', 'bladiciapinto@hotmail.com', '57368762', 'blady', '', '2021-07-15 19:43:06'),
(1, 'PAOLA', 'CRUZ', 'paitocruz585@gmail.com', '8969799', 'paolal', '12345', '2021-08-12 11:22:42'),
(3, 'BLADICIA', 'PINTO', 'bladiciapinto@hotmail.com', '57368762', 'blady', '1234', '2021-08-12 11:22:42'),
(4, 'MARCOS ', 'CRUZ', 'marcoacruz@hotmail.com', '9080958690', 'marcosa7800', '123456789', '2021-08-12 11:22:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empaques`
--

CREATE TABLE `empaques` (
  `id_empaque` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `stock` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id_factura` int(15) NOT NULL,
  `FechaFactura` datetime NOT NULL,
  `id_cliente` int(15) NOT NULL,
  `id_pago` int(2) NOT NULL,
  `id_pedidos` int(15) NOT NULL,
  `valorventa` decimal(20,2) NOT NULL,
  `Nombrevendedor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediosdepago`
--

CREATE TABLE `mediosdepago` (
  `id_pago` int(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_21_200302_proveedores', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedidos` int(15) NOT NULL,
  `id_cliente` int(15) NOT NULL,
  `id_empaque` int(15) NOT NULL,
  `estadopedido` enum('enviado','transito','entregado','preparacion') NOT NULL,
  `fechahora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(15) NOT NULL,
  `id_categoria` int(15) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `valorunitario` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_cliente`
--

CREATE TABLE `reg_cliente` (
  `id_cliente` int(15) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `usuario` varchar(200) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  `insertado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reg_cliente`
--

INSERT INTO `reg_cliente` (`id_cliente`, `nombre`, `apellido`, `correo`, `telefono`, `usuario`, `contraseña`, `insertado`) VALUES
(6, 'YONI', 'CRUZ PINTO', 'yonicruz@hotmail.com', '3168482503', 'yonicruz', 'yoni', '2021-08-26 19:07:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id_calificacion`),
  ADD KEY `id_cliente` (`id_cliente`,`id_factura`),
  ADD KEY `id_factura` (`id_factura`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD KEY `id_factura` (`id_factura`,`id_productos`),
  ADD KEY `id_productos` (`id_productos`);

--
-- Indices de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD KEY `id_factura` (`id_producto`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `empaques`
--
ALTER TABLE `empaques`
  ADD PRIMARY KEY (`id_empaque`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_cliente` (`id_cliente`,`id_pago`),
  ADD KEY `id_pago` (`id_pago`),
  ADD KEY `id_pedidos` (`id_pedidos`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `mediosdepago`
--
ALTER TABLE `mediosdepago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedidos`),
  ADD KEY `id_cliente` (`id_cliente`,`id_empaque`),
  ADD KEY `id_empaque` (`id_empaque`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proveedores_email_unique` (`email`);

--
-- Indices de la tabla `reg_cliente`
--
ALTER TABLE `reg_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id_calificacion` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id_factura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calificaciones_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id_productos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id_factura`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD CONSTRAINT `detalle_pedidos_ibfk_3` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedidos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_pedidos_ibfk_4` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_productos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `facturas_ibfk_4` FOREIGN KEY (`id_pago`) REFERENCES `mediosdepago` (`id_pago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_empaque`) REFERENCES `empaques` (`id_empaque`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2021 a las 15:54:44
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas_apps`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `cond` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `cond`) VALUES
(1, NULL, NULL, 0),
(2, 'Teaching', 'courses and more & more', 1),
(3, 'nueva', 'nueva', 1),
(4, 'Games', 'games for all tastes   -', 1),
(5, 'Social', '\r\nThey are mainly oriented to communication between users', 1),
(6, 'Creation', 'There is one that is responsible for enhancing the creativity of users and making them work on it', 1),
(7, ' Personal‎ ', 'Curriculums, Blogs, And more personal apps', 1),
(8, 'Productive', 'Productive Apps', 1),
(9, 'BatCar', '', 0),
(10, 'OtraCate', 'nuevacate', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permits`
--

CREATE TABLE `permits` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `read` int(11) NOT NULL,
  `insert` int(11) NOT NULL,
  `update` int(11) NOT NULL,
  `delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `codigo` varchar(25) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `cond` tinyint(4) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `codigo`, `name`, `description`, `price`, `stock`, `categoria_id`, `cond`, `id_usuario`) VALUES
(1, '10001', 'BatCar', 'gestion app to purchase car batteries', 58755, 1, 1, 1, 0),
(2, '10002', 'Live Socks App', 'app to purchase socks personalized', 37800, 1, 1, 0, 3),
(3, '10003', 'guitar ( + ) app', 'guitar masterclass app for principiants', 64800, 1, 2, 1, 5),
(4, '10004', 'ideas app', 'gestion app for ideas of everything\'s type, You can create, and check the advance tu ideas11', 46850, 1, 6, 1, 5),
(6, '10006', 'Architecting', ' construction, plans, architecture and more', 63500, NULL, 6, 1, 5),
(7, '10007', 'newapp', 'app new', 10, NULL, 7, 1, 1),
(8, '10008', 'AppNueva', 'nueva app para ver id', 123123, NULL, 5, 1, 3),
(9, '10009', 'AppdeQuico', 'La aplicacion es de Quico, No del chavo ni del señor barriga', 50000, NULL, 4, 1, 7),
(10, '10010', 'App notebook', 'Diseñador de Notebook', 5000, NULL, 6, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `nombre`, `descripcion`) VALUES
(1, 'superadmin', 'control total'),
(2, 'developer', 'control total'),
(3, 'client', 'algunos modulos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `total` float DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `detalle` varchar(255) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`id`, `fecha`, `total`, `cliente_id`, `usuario_id`, `detalle`, `nombre_cliente`, `estado`) VALUES
(25, '2021-02-15', 10, 1, 1, 'newapp , ', 'Lucas', 0),
(26, '2021-02-15', 46860, 2, 2, 'ideas app , newapp , ', 'Mariana', 0),
(27, '2021-02-15', 173133, 1, 1, 'newapp , AppNueva , AppdeQuico , ', 'Lucas', 0),
(28, '2021-02-20', 37800, 1, 1, 'Live Socks App , ', 'Lucas', 0),
(30, '2021-02-20', 10, 4, 4, 'newapp , ', 'Alejandro', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellidos`, `telefono`, `email`, `username`, `password`, `rol_id`, `estado`) VALUES
(1, 'Lucas', 'Sanchez', '2974739556', 'sanchezlucasar@gmail.com', 'lucas', '8cb2237d0679ca88db6464eac60da96345513964', 1, 1),
(2, 'Mariana', 'Manquecheo', '2974228202', 'marimanquecheo@gmail.com', 'marimanquecheo', '8cb2237d0679ca88db6464eac60da96345513964', 3, 1),
(3, 'Fracisco Tahiel', 'Sanchez', '2974739556', 'lucas@mbsgrupo.com', 'francisco2017', '8cb2237d0679ca88db6464eac60da96345513964', 2, 1),
(4, 'Alejandro', 'alejandrosanchesar', '2975060053', 'alejandro@mbsgrupo.com', 'alejandrosanchesar', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 1),
(5, 'Carlos', 'Turra', '2974739559', 'cturra@mbsgrupo.com', 'carlin', '42879f87753122eeb1b4894f91e392790c9637f9', 2, 0),
(6, 'Lihuen', 'Manquecheo', '123123', 'lihuen@lihuen.com', 'lihuenmanquecheo', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 3, 1),
(7, 'quico', NULL, '12345', 'quico@quico.com', 'quico', '8cb2237d0679ca88db6464eac60da96345513964', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`name`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permits`
--
ALTER TABLE `permits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`name`),
  ADD KEY `fk_categoria_producto_idx` (`categoria_id`),
  ADD KEY `fk_producto_usuario` (`id_usuario`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ventas_cliente_idx` (`cliente_id`),
  ADD KEY `fk_ventas_usuario_idx` (`usuario_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rol_usuarios_idx` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permits`
--
ALTER TABLE `permits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permits`
--
ALTER TABLE `permits`
  ADD CONSTRAINT `permits_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permits_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_categoria_producto` FOREIGN KEY (`categoria_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `fk_usuario_venta` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_rol_usuarios` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-11-2020 a las 04:42:58
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
-- Base de datos: `prueba_evenorg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistente`
--

CREATE TABLE `asistente` (
  `id` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistente`
--

INSERT INTO `asistente` (`id`, `id_evento`, `id_usuario`) VALUES
(3, 5, 2),
(1, 6, 3),
(4, 7, 2),
(5, 9, 2),
(6, 11, 2),
(10, 11, 3),
(8, 13, 2),
(7, 14, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_evento`
--

INSERT INTO `categoria_evento` (`id`, `nombre`) VALUES
(1, 'Webinar'),
(2, 'Taller'),
(3, 'Webinar'),
(4, 'Taller'),
(5, 'Congreso'),
(6, 'Carrera'),
(7, 'Encuentro'),
(8, 'Feria gastronomica'),
(9, 'Fiesta benefica'),
(10, 'Festivales'),
(11, 'Hackathon'),
(12, 'Lanzamiento de productos'),
(13, 'Networking'),
(14, 'Degustacion'),
(15, 'Torneo'),
(16, 'Congreso'),
(17, 'Carrera'),
(18, 'Encuentro'),
(19, 'Feria gastronomica'),
(20, 'Fiesta benefica'),
(21, 'Festivales'),
(22, 'Hackathon'),
(23, 'Lanzamiento de productos'),
(24, 'Networking'),
(25, 'Degustacion'),
(26, 'Torneo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_servicio`
--

CREATE TABLE `categoria_servicio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_servicio`
--

INSERT INTO `categoria_servicio` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Transporte', 'Servicio de transporte'),
(2, 'Cátering', 'Servicio de cátering'),
(3, 'Mobiliario', 'Servicio de alquiler de locales'),
(4, 'Audiovisuales', 'Servicio de alquiler de audiovisuales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `idOrganizador` int(11) NOT NULL,
  `nombreEvento` varchar(255) NOT NULL,
  `tipoEvento` int(11) NOT NULL,
  `categoriaEvento` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `horaInicio` datetime DEFAULT NULL,
  `horaFin` datetime DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `costo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id`, `idOrganizador`, `nombreEvento`, `tipoEvento`, `categoriaEvento`, `descripcion`, `horaInicio`, `horaFin`, `lugar`, `costo`) VALUES
(5, 2, 'windows 11', 3, 3, 'nuevas funcionalidades de windows 11', '2021-02-02 02:02:00', '2021-02-02 02:02:00', 'centro de convenciones', 150000),
(6, 2, 'windows 12', 3, 3, 'nuevas funcionalidades de windows 11', '2021-02-02 02:02:00', '2021-02-02 02:02:00', 'centro de convenciones', 150000),
(7, 2, 'fiesta de arepas', 5, 6, 'dar a conocer a la ciudad de cartagena la gastrononia de su misma ciudad', '2021-02-02 01:02:00', '2021-02-02 01:02:00', 'centro de convenciones', 25000),
(8, 2, 'fiesta de arepas', 5, 6, 'dar a conocer a la ciudad de cartagena la gastrononia de su misma ciudad', '2021-02-02 01:02:00', '2021-02-02 01:02:00', 'centro de convenciones', 25000),
(9, 2, 'fiesta en la playa', 1, 5, 'fiesta hasta que amanezc', '2020-01-02 00:00:00', '2020-01-02 00:00:00', 'playa bocagrande', 0),
(10, 2, 'fiesta en la playa', 1, 5, 'fiesta hasta que amanezc', '2020-01-02 00:00:00', '2020-01-02 00:00:00', 'playa bocagrande', 0),
(11, 2, 'concierto por la paz', 5, 3, 'concierto por las victimas del conflicto armado', '2022-01-02 01:01:00', '2022-01-02 01:01:00', 'india catalina', 0),
(12, 2, 'feria del telefono', 2, 2, 'te arreglamos el telefono a un bajo costo', '2021-01-02 01:01:00', '2021-01-02 01:01:00', 'mercado de bazurto', 0),
(13, 2, 'linux colombia', 4, 2, 'conoces kas mejoras que te ofrece el software libre', '2021-01-02 01:00:00', '2021-01-02 01:00:00', 'utb', 0),
(14, 2, 'sancochos donde ana', 5, 6, 'la mejor comida la encuentrar donde ana', '2021-01-03 02:03:00', '2021-01-03 02:03:00', 'frente al colombo centro', 0),
(15, 2, 'sancochos donde ana', 5, 6, 'la mejor comida la encuentrar donde ana', '2021-01-03 02:03:00', '2021-01-03 02:03:00', 'frente al colombo centro', 0),
(16, 2, 'sancochos donde ana', 5, 6, 'la mejor comida la encuentrar donde ana', '2021-01-03 02:03:00', '2021-01-03 02:03:00', 'frente al colombo centro', 0),
(17, 2, 'windows 13', 8, 3, 'nuevas funcionalidades que ofrece windows', '2020-12-05 20:42:00', '2020-12-05 20:42:00', 'unicolombo cartagena', 80000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `camaraComercio` varchar(255) NOT NULL,
  `numeroMatricula` varchar(50) NOT NULL,
  `nit` bigint(20) NOT NULL,
  `razonSocial` varchar(255) NOT NULL,
  `tipoEmpresa` varchar(255) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `correo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `id_usuario`, `camaraComercio`, `numeroMatricula`, `nit`, `razonSocial`, `tipoEmpresa`, `pais`, `ciudad`, `direccion`, `telefono`, `celular`, `correo`) VALUES
(9, 2, 'Sociedad por accion Simplificada', '15246895', 5623878, 'ayudar y servir', 'Sociedades por Acciones Simplificadas', 'Colombia', 'Cartagena de Indias', 'avenida santander cr 23 78', 6589852, 3158965147, 'ayudar@ayudar.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `tipoServicio` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `idProveedor`, `idServicio`, `tipoServicio`, `descripcion`, `valor`) VALUES
(2, 9, 2, 'Comida donde carmela', 'Los mejores sancochos de la ciudad', '50000'),
(3, 9, 3, 'casa de alojo juanita', 'Te ofrezo mi casa finca para tus eventos o fiestas', '500000'),
(4, 9, 4, 'Visores flux', 'Tu solucion para presentaciones audiovisuales', '80000'),
(6, 9, 2, 'Transportes Manolo', 'Trnasportes en cartagena\r\n', '80000'),
(7, 9, 3, 'mobiliario', 'Casa en el barrio manga', '100000'),
(8, 9, 1, 'mobiliario', 'Casa campestre club ', '200000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_evento`
--

CREATE TABLE `tipo_evento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_evento`
--

INSERT INTO `tipo_evento` (`id`, `nombre`) VALUES
(1, 'Sociales'),
(2, 'Corporativos o Empresarios'),
(3, 'Espirituales o Comunitarios'),
(4, 'Academicos'),
(5, 'Culturales y de Ocio'),
(6, 'Deportivos'),
(7, 'Politicos'),
(8, 'Educativos'),
(9, 'Sociales'),
(10, 'Corporativos o Empresarios'),
(11, 'Espirituales o Comunitarios'),
(12, 'Academicos'),
(13, 'Culturales y de Ocio'),
(14, 'Deportivos'),
(15, 'Politicos'),
(16, 'Educativos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `primerNombre` varchar(20) CHARACTER SET latin1 NOT NULL,
  `segundoNombre` varchar(20) CHARACTER SET latin1 NOT NULL,
  `primerApellido` varchar(20) CHARACTER SET latin1 NOT NULL,
  `segundoApellido` varchar(20) CHARACTER SET latin1 NOT NULL,
  `tipoIdentificacion` varchar(20) CHARACTER SET latin1 NOT NULL,
  `numIdentificacion` bigint(30) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `correo` varchar(80) CHARACTER SET latin1 NOT NULL,
  `contrasena` varchar(50) CHARACTER SET latin1 NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `pais` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ciudad` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `tipoIdentificacion`, `numIdentificacion`, `fechaNacimiento`, `correo`, `contrasena`, `telefono`, `celular`, `pais`, `ciudad`) VALUES
(2, 'jaime', 'ronaldo', 'bermudez', 'sierra', 'Cedula de ciudadania', 9825648726, '2000-09-07', 'jaime.bermudez@gmail.com', 'fc5e038d38a57032085441e7fe7010b0', 6581858, 320987265, 'Colombia', 'Cartagena de Indias'),
(3, 'esmelin', 'antonio', 'vivanco', 'mercado', 'Cedula de ciudadania', 9812552372, '1995-12-31', 'esmelin@esmelin.com', 'fc5e038d38a57032085441e7fe7010b0', 4141248, 3467825467, 'Colombia', 'Cartagena de Indias');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistente`
--
ALTER TABLE `asistente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_evento` (`id_evento`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_servicio`
--
ALTER TABLE `categoria_servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idOrganizador` (`idOrganizador`,`categoriaEvento`),
  ADD KEY `tipoEvento` (`tipoEvento`),
  ADD KEY `categoriaEvento` (`categoriaEvento`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProveedor` (`idProveedor`,`idServicio`),
  ADD KEY `idServicio` (`idServicio`);

--
-- Indices de la tabla `tipo_evento`
--
ALTER TABLE `tipo_evento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numIdentificacion` (`numIdentificacion`,`correo`,`telefono`,`celular`),
  ADD UNIQUE KEY `numIdentificacion_2` (`numIdentificacion`,`correo`,`telefono`,`celular`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistente`
--
ALTER TABLE `asistente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `categoria_servicio`
--
ALTER TABLE `categoria_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo_evento`
--
ALTER TABLE `tipo_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistente`
--
ALTER TABLE `asistente`
  ADD CONSTRAINT `asistente_ibfk_1` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asistente_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`idOrganizador`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evento_ibfk_2` FOREIGN KEY (`tipoEvento`) REFERENCES `tipo_evento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evento_ibfk_3` FOREIGN KEY (`categoriaEvento`) REFERENCES `categoria_evento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`idServicio`) REFERENCES `categoria_servicio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

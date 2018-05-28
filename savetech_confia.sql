-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2018 at 08:36 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `savetech_confia`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagenesPrueba`
--

CREATE TABLE `imagenesPrueba` (
  `Id` int(11) NOT NULL,
  `IdPrueba` int(11) NOT NULL,
  `IdImagen` int(11) NOT NULL,
  `TiempoMuestra` int(11) NOT NULL,
  `TiempoDescanso` int(11) NOT NULL,
  `FechaCreacion` date NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  `UsuarioModificacion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagenesPrueba`
--

INSERT INTO `imagenesPrueba` (`Id`, `IdPrueba`, `IdImagen`, `TiempoMuestra`, `TiempoDescanso`, `FechaCreacion`, `FechaModificacion`, `UsuarioModificacion`) VALUES
(3, 1, 2, 2, 5, '2017-09-09', '2017-09-09 12:01:09', 'adelarosa'),
(2, 1, 1, 2, 5, '2017-09-09', '2017-09-09 12:00:25', 'adelarosa'),
(4, 1, 4, 2, 5, '2017-09-09', '2017-09-09 12:01:53', 'adelarosa'),
(5, 1, 3, 5, 4, '2017-09-09', '2017-09-09 12:27:18', 'adelarosa'),
(6, 2, 1, 5, 4, '2017-09-09', '2017-09-09 12:30:16', 'adelarosa'),
(7, 3, 2, 5, 3, '2017-09-09', '2017-09-09 12:41:06', 'adelarosa'),
(8, 3, 4, 3, 1, '2017-11-08', '2017-11-08 18:40:18', 'adelarosa'),
(9, 3, 7, 3, 1, '2017-11-08', '2017-11-08 19:19:41', 'adelarosa'),
(10, 4, 8, 2, 1, '2018-02-13', '2018-02-13 17:55:11', 'adelarosa'),
(11, 4, 4, 3, 2, '2018-02-13', '2018-02-13 17:55:26', 'adelarosa'),
(12, 4, 2, 4, 3, '2018-02-13', '2018-02-13 17:55:35', 'adelarosa');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(512) NOT NULL,
  `Titulo` varchar(250) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Estatus` int(11) NOT NULL,
  `FechaCreacion` date NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  `UsuarioModificacion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Id`, `Nombre`, `Titulo`, `Descripcion`, `Estatus`, `FechaCreacion`, `FechaModificacion`, `UsuarioModificacion`) VALUES
(1, 'p1boo3g42a17pv16f3mtmbsrfdo4.jpg', 'Test', 'Descripcion test', 1, '2017-08-29', '2017-08-29 17:59:49', 'adelarosa'),
(2, 'p1boo5srp5u42nv03eo1pebe0q4.jpg', 'Imagen 2', 'Descripcion 2 ', 1, '2017-08-29', '2017-08-29 18:41:02', 'adelarosa'),
(3, 'p1boo62sc1ha1fun2lg1u2o86n4.jpg', 'Imagen 3', 'Descripcion 3', 1, '2017-08-29', '2017-08-29 18:45:09', 'adelarosa'),
(4, 'p1boo68q7bs261c111paiim17504.jpg', 'Imagen 3', 'Descripcion 3', 1, '2017-08-29', '2017-08-29 18:47:37', 'adelarosa'),
(7, 'p1buf5b3pl1dospivlghobvp4f4.jpeg', 'Test', 'Test ', 1, '2017-11-08', '2017-11-08 19:12:20', 'adelarosa'),
(8, 'p1c68p5tusnr1131g1qr119tbk924.jpg', 'Imagen de Prueba', 'Descripcion de prueba', 1, '2018-02-13', '2018-02-13 17:49:47', 'adelarosa');

-- --------------------------------------------------------

--
-- Table structure for table `prueba`
--

CREATE TABLE `prueba` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Indicaciones` text NOT NULL,
  `FechaCreacion` date NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  `UsuarioModificacion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prueba`
--

INSERT INTO `prueba` (`Id`, `Titulo`, `Indicaciones`, `FechaCreacion`, `FechaModificacion`, `UsuarioModificacion`) VALUES
(1, 'Prueba Test', '<p style=\"text-align:center\">INDICACIONES DE LA PRUEBA</p>\n\n<p>&nbsp;</p>\n\n<ul>\n	<li>Favor de seguir las siguientes instrucciones durante la prueba:</li>\n	<li>Estar relajado y con suficiente tiempo para la prueba</li>\n	<li>Una vez iniciada la prueba se tendra que terminar, ya que no se puede repetir</li>\n	<li>Mirar directamente las imagenes que apareceran en la pantalla</li>\n	<li>No distraerse durante la prueba</li>\n	<li>Terminar la prueba</li>\n</ul>\n', '2017-09-09', '2017-09-09 10:00:14', 'adelarosa'),
(2, 'test psicologico - Aptitudes', '<p style=\"text-align:center\">INDICACIONES DE LA PRUEBA</p>\n\n<p>&nbsp;</p>\n\n<ul>\n	<li>Favor de seguir las siguientes instrucciones durante la prueba:</li>\n	<li>Estar relajado y con suficiente tiempo para la prueba</li>\n	<li>Una vez iniciada la prueba se tendra que terminar, ya que no se puede repetir</li>\n	<li>Mirar directamente las imagenes que apareceran en la pantalla</li>\n	<li>No distraerse durante la prueba</li>\n	<li>Terminar la prueba</li>\n</ul>\n', '2017-09-09', '2017-09-09 12:29:44', 'adelarosa'),
(3, 'Test imagenes Muestra', '<p style=\"text-align:center\">INDICACIONES DE LA PRUEBA</p>\n\n<p>&nbsp;</p>\n\n<ol>\n	<li><span style=\"font-size:14px\">Favor de seguir las siguientes instrucciones durante la prueba:</span></li>\n	<li><span style=\"font-size:14px\">Estar relajado y con suficiente tiempo para la prueba</span></li>\n	<li><span style=\"font-size:14px\">Una vez iniciada la prueba se tendra que terminar, ya que no se puede repetir</span></li>\n	<li><span style=\"font-size:14px\">Mirar directamente las imagenes que apareceran en la pantalla</span></li>\n	<li><span style=\"font-size:14px\">No distraerse durante la prueba</span></li>\n	<li><span style=\"font-size:14px\">Terminar la prueb</span></li>\n</ol>\n\n<blockquote>\n<p>Nota importante&nbsp;</p>\n</blockquote>\n', '2017-09-09', '2017-09-09 12:38:57', 'adelarosa'),
(4, 'Prueba 13.02.2018', '<p style=\"text-align: center;\">INDICACIONES PRINCIPALES</p>\n\n<p style=\"text-align: center;\">&nbsp;</p>\n\n<ol>\n	<li>Revisar la iluminacion del lugar donde se realizar&aacute; el test</li>\n	<li>Contar con suficiente tiempo para realizar la prueba.</li>\n	<li>etc..&nbsp;</li>\n</ol>\n', '2018-02-13', '2018-02-13 17:52:53', 'adelarosa');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Estatus` int(11) NOT NULL,
  `FechaCreacion` date NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  `UsuarioModificacion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`Id`, `Descripcion`, `Estatus`, `FechaCreacion`, `FechaModificacion`, `UsuarioModificacion`) VALUES
(1, 'Administrador', 1, '2017-08-25', '2017-08-25 14:21:56', 'Admin'),
(2, 'Analista', 1, '2017-08-25', '2017-08-25 17:10:06', 'Admin'),
(3, 'Aplicante', 1, '2017-08-25', '2017-08-25 17:10:06', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `scheduledTest`
--

CREATE TABLE `scheduledTest` (
  `Id` int(11) NOT NULL,
  `IdPrueba` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Estatus` int(11) NOT NULL,
  `FechaRealizacion` datetime DEFAULT NULL,
  `VideoLink` varchar(150) NOT NULL,
  `Video_blob` blob,
  `FechaCreacion` datetime NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  `UsuarioModificacion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheduledTest`
--

INSERT INTO `scheduledTest` (`Id`, `IdPrueba`, `IdUsuario`, `FechaInicio`, `FechaFin`, `Estatus`, `FechaRealizacion`, `VideoLink`, `Video_blob`, `FechaCreacion`, `FechaModificacion`, `UsuarioModificacion`) VALUES
(13, 3, 11, '2018-01-29', '2018-01-30', 1, '2018-02-13 00:00:00', '', '', '2018-01-16 00:00:00', '2018-02-12 22:38:11', 'adrian.mendez'),
(12, 3, 11, '2018-01-30', '2018-01-31', 1, '2018-02-13 00:00:00', '', '', '2018-01-16 00:00:00', '2018-02-13 13:10:12', 'adrian.mendez'),
(11, 3, 11, '2018-01-27', '2018-01-29', 1, NULL, '', NULL, '2018-01-16 00:00:00', '2018-01-16 23:27:27', 'adelarosa'),
(14, 4, 14, '2018-02-01', '2018-02-28', 2, '2018-02-13 18:03:48', '../Site/video_files/video_14.webm', '', '2018-02-13 00:00:00', '2018-02-13 18:03:48', 'prueba'),
(15, 2, 14, '2018-02-07', '2018-02-21', 2, '2018-02-13 18:11:10', '../Site/video_files/video_15.webm', '', '2018-02-13 00:00:00', '2018-02-13 18:11:10', 'prueba'),
(16, 1, 15, '2018-02-23', '2018-02-26', 1, NULL, '', NULL, '2018-02-23 00:00:00', '2018-02-23 13:52:38', 'adelarosa');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Apellidos` varchar(250) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Login` varchar(20) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Estatus` int(11) NOT NULL,
  `TieneVigencia` int(11) NOT NULL,
  `Vigencia` datetime NOT NULL,
  `IdRol` int(11) NOT NULL,
  `FechaCreacion` date NOT NULL,
  `FechaModificacion` datetime NOT NULL,
  `UsuarioModificacion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`Id`, `Nombre`, `Apellidos`, `Email`, `Login`, `Password`, `Estatus`, `TieneVigencia`, `Vigencia`, `IdRol`, `FechaCreacion`, `FechaModificacion`, `UsuarioModificacion`) VALUES
(14, 'Aplicante', 'Prueba', 'aldo.delarosa@savetechnology.com.mx', 'prueba', '4297f44b13955235245b2497399d7a93', 1, 0, '0000-00-00 00:00:00', 3, '2018-02-13', '2018-02-13 17:48:27', 'adelarosa'),
(13, 'Alejandro', 'Romero', 'alejandro.romero@test.com', 'aromero', '4297f44b13955235245b2497399d7a93', 1, 0, '0000-00-00 00:00:00', 1, '2018-02-13', '2018-02-13 17:47:31', 'adelarosa'),
(4, 'Aldo', 'De La Rosa, Emicente', 'alex.delarosae@gmail.com', 'adelarosa', '4297f44b13955235245b2497399d7a93', 1, 0, '0000-00-00 00:00:00', 1, '2017-08-26', '2017-09-08 17:33:24', 'adelarosa'),
(12, 'Luis ', 'Salinas', 'tona_26@hotmail.com', 'luis.salinas', '4297f44b13955235245b2497399d7a93', 1, 0, '0000-00-00 00:00:00', 1, '2018-02-08', '2018-02-08 18:00:43', 'adelarosa'),
(11, 'Adrian', 'Mendez R', 'test@test.com', 'adrian.mendez', '4297f44b13955235245b2497399d7a93', 1, 0, '0000-00-00 00:00:00', 3, '2018-01-15', '2018-02-13 17:49:07', 'adelarosa'),
(10, 'Mariano', 'Larios, Gomez', 'mlarios@gmail.com', 'mlarios', '4297f44b13955235245b2497399d7a93', 1, 0, '0000-00-00 00:00:00', 1, '2018-01-15', '2018-01-15 13:04:20', 'adelarosa'),
(15, 'Gerardo', 'Garcia', 'correo@dominio.com', 'jerry', '4297f44b13955235245b2497399d7a93', 1, 0, '0000-00-00 00:00:00', 3, '2018-02-23', '2018-02-23 13:50:08', 'adelarosa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagenesPrueba`
--
ALTER TABLE `imagenesPrueba`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `scheduledTest`
--
ALTER TABLE `scheduledTest`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagenesPrueba`
--
ALTER TABLE `imagenesPrueba`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prueba`
--
ALTER TABLE `prueba`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scheduledTest`
--
ALTER TABLE `scheduledTest`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

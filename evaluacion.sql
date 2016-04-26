-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2016 a las 04:44:52
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evaluacion`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarTabla` (IN `t` TEXT)  begin
truncate table t;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `existeAlumno` (IN `nc` TEXT, `mail` TEXT)  begin
select count(*) from alumno where no_control=nc or correo=mail;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardarAlumno` (IN `n` TEXT, IN `ap` TEXT, IN `am` TEXT, IN `nc` TEXT, IN `fech` TEXT, IN `carr` TEXT, IN `semes` TEXT, IN `pass` TEXT, IN `mail` TEXT, IN `gpo` TEXT)  begin
insert into alumno (nombre,apellido_paterno,apellido_materno,no_control,fecha_evaluacion,carrera,semestre,contrasena,correo,grupo) values (n,ap,am,nc,fech,carr,semes,mail,pass,gpo);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardarEncuesta` (IN `r1` TEXT, IN `r2` TEXT, IN `r3` TEXT, IN `r4` TEXT, IN `r5` TEXT, IN `r6` TEXT, IN `r7` TEXT, IN `r8` TEXT, IN `r9` TEXT, IN `r10` TEXT, IN `r11` TEXT, IN `r12` TEXT, IN `r13` TEXT, IN `nc` TEXT, IN `tutor` TEXT, IN `r14` TEXT, IN `r15` TEXT, IN `r16` TEXT, IN `r17` TEXT, IN `r18` TEXT)  begin
insert into resultados (p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,no_control_alumno,id_maestro) values (r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12,r13,r14,r15,r16,r17,r18,nc,tutor);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardarTutor` (IN `n` TEXT, IN `ap` TEXT, IN `am` TEXT, IN `nc` TEXT, IN `m` TEXT, IN `d` TEXT)  begin
insert into tutor (nombre,apellido_paterno,apellido_materno,numero_control,materia,observacion) values (n,ap,am,nc,m,d);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarUsuario` (IN `u` TEXT, `c` TEXT)  begin
select count(*) from usuario where usuario=u and contrasena=c;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `verificarControlMail` (IN `nc` TEXT, `m` TEXT)  begin
select count(*) from alumno where no_control=nc and correo=m;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `apellido_paterno` varchar(100) DEFAULT NULL,
  `apellido_materno` varchar(100) DEFAULT NULL,
  `no_control` varchar(20) DEFAULT NULL,
  `fecha_evaluacion` varchar(100) DEFAULT NULL,
  `carrera` varchar(200) DEFAULT NULL,
  `semestre` varchar(2) DEFAULT NULL,
  `contrasena` varchar(300) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `grupo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `no_control`, `fecha_evaluacion`, `carrera`, `semestre`, `contrasena`, `correo`, `grupo`) VALUES
(1, 'manuel', 'cer', 'flores', '12050405', 'Fri, 27 Nov 2015 05:21:58 +0100', 'ing sistemas', '7', '2AP7EBfj.6TUA', 'hola@hola', ''),
(2, 'juan', 'garcia', 'alberto', '55555', 'Fri, 27 Nov 2015 18:33:40 +0100', 'ing sistemas', '3', '2A.ZK0C/Kuvf6', 'hola@hola', ''),
(3, 'chema', 'chema', 'chema', 'chema', 'Wed, 09 Dec 2015 04:23:55 +0100', 'ing industrial', '2', '2A.ZK0C/Kuvf6', 'chema@chema', ''),
(4, 'popo', 'popo', 'popo', 'popo', 'Thu, 10 Dec 2015 02:16:59 +0100', 'ing sistemas', '2', '2A.ZK0C/Kuvf6', '0@q', 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `p1` varchar(50) DEFAULT NULL,
  `p2` varchar(50) DEFAULT NULL,
  `p3` varchar(50) DEFAULT NULL,
  `p4` varchar(50) DEFAULT NULL,
  `p5` varchar(50) DEFAULT NULL,
  `p6` varchar(50) DEFAULT NULL,
  `p7` varchar(50) DEFAULT NULL,
  `p8` text,
  `p9` text,
  `p10` text,
  `p11` text,
  `p12` text,
  `p13` text,
  `p14` varchar(50) NOT NULL,
  `p15` varchar(50) NOT NULL,
  `p16` varchar(50) NOT NULL,
  `p17` varchar(50) NOT NULL,
  `p18` varchar(50) NOT NULL,
  `no_control_alumno` varchar(20) DEFAULT NULL,
  `id_maestro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`id`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `no_control_alumno`, `id_maestro`) VALUES
(1, 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', '', '', '', '', '', 'chema', '23423423432'),
(2, 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'chema', '23423423432', 'Siempre', 'Siempre'),
(3, 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'josemanuel', '23423423432', 'Siempre', 'Siempre'),
(4, 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'josemanuel', '23423423432', 'Siempre', 'Siempre'),
(5, 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'josemanuel', '23423423432', 'Siempre', 'Siempre'),
(6, 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'Siempre', 'josemanuel', '', 'Siempre', 'Siempre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido_paterno` varchar(100) DEFAULT NULL,
  `apellido_materno` varchar(100) DEFAULT NULL,
  `numero_control` varchar(20) DEFAULT NULL,
  `materia` varchar(150) DEFAULT NULL,
  `observacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `numero_control`, `materia`, `observacion`) VALUES
(1, 'Nestor', 'Chico', 'Rojas', '23423423432', 'programacion', ''),
(2, 'Jose Raul', 'Macias', 'Hernandez', '123456', 'Investigacion', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(200) DEFAULT NULL,
  `fecha_registro` varchar(100) DEFAULT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasena`, `fecha_registro`, `rol`) VALUES
(1, 'josemanuel', 'josemanuel', NULL, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2016 a las 02:29:57
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `matricula` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`matricula`, `nombre`, `apellido`, `telefono`, `edad`, `sexo`) VALUES
(124, 'hazel', 'fuentes', 12121, 20, 'femenino'),
(764, 'ALBA', '', 876, 121, 'MASCULINO'),
(24681, 'carlos', 'fuentes', 123455677, 25, 'masculio'),
(97696, 'KARLA ISIS', 'GOMEZ ALFARO', 21212, 12, 'FEMENINO'),
(14011089, 'KARLA ISIS', '', 2147483647, 20, 'FEMENINO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multa`
--

CREATE TABLE `multa` (
  `id_multa` int(11) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_final` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vestuario`
--

CREATE TABLE `vestuario` (
  `clave` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `piezas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vestuario`
--

INSERT INTO `vestuario` (`clave`, `genero`, `descripcion`, `nombre`, `piezas`) VALUES
('101', 'masculino', 'blusa,falda,mandil', 'veracruz', 3),
('1234r', 'masculino', 'botas', 'veracruz', 1),
('1h', 'femenino', 'falda,fladacolor,blusa,trensa', 'hidalgo', 4),
('1j', 'Femenino', 'falda,tocado', 'JALISCO', 2),
('1v', 'femenino', 'falda', 'hidalgo', 3),
('2222', 'femenino', 'penacho', 'prehispanico', 1),
('23423', 'femenino', 'aretes', 'prehispanic', 5),
('3213123', '', 'falda', 'JALISXO', 2),
('ve1', 'fmenino', 'mandil tocadp', 'nayarit', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `multa`
--
ALTER TABLE `multa`
  ADD PRIMARY KEY (`id_multa`);

--
-- Indices de la tabla `vestuario`
--
ALTER TABLE `vestuario`
  ADD PRIMARY KEY (`clave`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

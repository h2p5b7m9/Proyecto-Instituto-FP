-- EXPORT DE MYSQLPHPADMIN XAMPP MAS ACTUALIZADO QUE Proyecto_Instituto.sql
-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2019 a las 20:33:22
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estructura de tabla para la tabla `actividades_diarias`
--

CREATE TABLE `actividades_diarias` (
  `Id_Actividad_Diaria` int(11) NOT NULL,
  `Id_UF` int(11) NOT NULL,
  `Id_Curso` int(11) NOT NULL,
  `Descripcion` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL,
  `Fecha_Presentada` date NOT NULL,
  `Nota_Final` int(11) NOT NULL,
  `Comentarios` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Herramientas` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_ultima_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `actividades_diarias`
--

INSERT INTO `actividades_diarias` (`Id_Actividad_Diaria`, `Id_UF`, `Id_Curso`, `Descripcion`, `Fecha_Inicio`, `Fecha_Fin`, `Fecha_Presentada`, `Nota_Final`, `Comentarios`, `Herramientas`, `fecha_ultima_actualizacion`) VALUES
(1, 1, 1, 'Diagrama de estructura y clase', '2018-10-06', '2018-10-25', '0000-00-00', 10, 'Excelente desarrollo con profu', 'Microsoft Word', '2019-02-08 23:00:00'),
(2, 2, 2, 'Diagrama de maquina de tiempos', '2018-11-26', '2018-11-12', '2018-11-29', 10, 'Bien documentado.', 'Microsoft Visio', '2019-02-08 23:00:00'),
(3, 3, 3, 'Esquema general de la aplicaci', '2018-10-08', '2018-10-22', '2018-01-22', 10, 'Buen trabajo!', 'PowerPoint, FlowChart, NinjaMo', '2019-02-08 23:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Id_Alumno` int(11) NOT NULL,
  `Nombre` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Apellido` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Sexo` varchar(1) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Ciudad` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Pais` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Region` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `CodigoPostal` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `Telefono` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `LineaDireccion1` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `LineaDireccion2` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Formacion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Delegado` tinyint(1) DEFAULT NULL,
  `Anos_Experiencia_Laboral` int(11) NOT NULL,
  `Fecha_ultima_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Id_Alumno`, `Nombre`, `Apellido`, `FechaNacimiento`, `Sexo`, `Ciudad`, `Pais`, `Region`, `CodigoPostal`, `Telefono`, `LineaDireccion1`, `LineaDireccion2`, `Formacion`, `Delegado`, `Anos_Experiencia_Laboral`, `Fecha_ultima_actualizacion`) VALUES
(1, 'Pedro', 'Almodovar', '2006-01-19', 'H', 'Malaga', 'España', 'Andalucia', '34689', '974793101', 'Avda. Romeria, 7', 'Barrio Colomar', 'Graduado', 1, 1, '2019-01-29 23:00:00'),
(2, 'Carlos', 'Larrañaga', '2001-12-07', 'H', 'Getafe', 'España', 'Madrid', '32238', '916432974', 'C/Mero, 32', 'Barrio Estepona', 'Licenciado', 0, 10, '2019-01-29 23:00:00'),
(3, 'Juan', 'Garcia', '2005-10-23', 'H', 'Alcalá', 'España', 'Madrid', '32238', '916432576', 'C/Loza, 170', 'Barrio Alcañá', 'Graduado Superior', 0, 6, '2019-01-31 23:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_cursos`
--

CREATE TABLE `alumnos_cursos` (
  `Id_Alumno` int(11) NOT NULL,
  `Id_Curso` int(11) NOT NULL,
  `Expediente` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos_cursos`
--

INSERT INTO `alumnos_cursos` (`Id_Alumno`, `Id_Curso`, `Expediente`) VALUES
(1, 1, 'Alumno excelente, trabajador y'),
(2, 2, 'Pocas horas de dedicación al e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id_Asistencia` int(11) NOT NULL,
  `fecha_Clase` date NOT NULL,
  `hora_Clase` time NOT NULL,
  `nombreAlumno` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `id_Alumno` int(11) NOT NULL,
  `id_UF` int(11) NOT NULL,
  `justificante` tinyint(1) NOT NULL,
  `fecha_ultima_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fotografia` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `descripcion` varchar(90) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id_Asistencia`, `fecha_Clase`, `hora_Clase`, `nombreAlumno`, `id_Alumno`, `id_UF`, `justificante`, `fecha_ultima_actualizacion`, `fotografia`, `descripcion`) VALUES
(1, '2018-10-05', '12:30:00', 'Luis Martinez', 1, 1, 0, '2019-02-09 20:31:00', 'Alumno1.jpg', 'Chico muy aplicado que trabaja muy bien en clase.'),
(2, '2018-10-06', '11:00:00', 'María Marquez', 2, 2, 0, '2019-02-09 20:31:31', 'Alumno2.jpg', 'Está siempre muy atenta y se sienta en la fila de delante de la clase.'),
(3, '2018-10-07', '12:00:00', 'Sandra Perez', 3, 3, 0, '2019-02-09 20:31:39', 'Alumno3.jpg', 'Participa activamente y entregó la tarea de programación correctamente.'),
(4, '2019-10-08', '09:00:00', 'Ana Roca', 4, 4, 0, '2019-02-09 20:30:05', 'Alumno4.jpg', 'Muy buen trabajo en el desarrollo de la aplicación web con el equipo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos_formativos`
--

CREATE TABLE `ciclos_formativos` (
  `Id_Ciclo_Formativo` int(11) NOT NULL,
  `Descripcion` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Area_Formativa` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `BOE` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_ultima_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ciclos_formativos`
--

INSERT INTO `ciclos_formativos` (`Id_Ciclo_Formativo`, `Descripcion`, `Area_Formativa`, `BOE`, `fecha_ultima_actualizacion`) VALUES
(1, 'CFGS DAW', 'Informatica Web', '2017', '2019-01-29 23:00:00'),
(2, 'CFGS DAM', 'Informática Multiplataforma', '2017', '2019-01-29 23:00:00'),
(3, 'CFGS ASICS', 'Informática', '2017', '2019-01-29 23:00:00'),
(4, 'CFGS Marketing', 'Ventas Empresa', '2017', '2019-01-29 23:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos_formativos_modulos`
--

CREATE TABLE `ciclos_formativos_modulos` (
  `Id_Ciclo_Formativo` int(11) NOT NULL,
  `Id_Modulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ciclos_formativos_modulos`
--

INSERT INTO `ciclos_formativos_modulos` (`Id_Ciclo_Formativo`, `Id_Modulo`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `Id_Curso` int(11) NOT NULL,
  `Id_Ciclo_Formativo` int(11) NOT NULL,
  `Descripcion` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL,
  `fecha_ultima_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`Id_Curso`, `Id_Ciclo_Formativo`, `Descripcion`, `Fecha_Inicio`, `Fecha_Fin`, `fecha_ultima_actualizacion`) VALUES
(1, 1, 'Delegado de clase Ramon Orozco', '2014-10-06', '2016-06-02', '2019-01-29 23:00:00'),
(2, 2, 'Delegado de clase Juan Perez', '2015-10-06', '2017-06-02', '2019-01-29 23:00:00'),
(3, 3, 'Delegado de clase Marcos Gorri', '2016-10-06', '2018-06-02', '2019-01-29 23:00:00'),
(4, 4, 'Delegado de clase Santiago Seg', '2017-10-06', '2019-06-02', '2019-01-29 23:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_modulos`
--

CREATE TABLE `cursos_modulos` (
  `Id_Curso` int(11) NOT NULL,
  `Id_Modulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `cursos_modulos`
--

INSERT INTO `cursos_modulos` (`Id_Curso`, `Id_Modulo`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE `matriculas` (
  `Id_Matricula` int(11) NOT NULL,
  `Id_Curso` int(11) NOT NULL,
  `Id_Alumno` int(11) NOT NULL,
  `Descripcion` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL,
  `fecha_ultima_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`Id_Matricula`, `Id_Curso`, `Id_Alumno`, `Descripcion`, `Fecha_Inicio`, `Fecha_Fin`, `fecha_ultima_actualizacion`) VALUES
(1, 1, 1, 'Diagrama de clases UML', '2010-10-06', '2011-06-02', '2019-01-29 23:00:00'),
(2, 2, 2, 'Diagrama de flujo del programa', '2011-10-06', '2012-06-02', '2019-01-29 23:00:00'),
(3, 3, 3, 'Esquema general aplicación', '2012-10-06', '2013-06-02', '2019-01-29 23:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `Id_Modulo` int(11) NOT NULL,
  `Id_UF` int(11) NOT NULL,
  `Descripcion` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Fecha_Creacion` date NOT NULL,
  `fecha_ultima_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`Id_Modulo`, `Id_UF`, `Descripcion`, `Fecha_Creacion`, `fecha_ultima_actualizacion`) VALUES
(1, 1, 'Bases de datos', '2018-11-06', '2019-01-29 23:00:00'),
(2, 2, 'Programacion', '2018-03-06', '2019-01-29 23:00:00'),
(3, 3, 'Lenguaje de marcas y SGI', '2018-10-06', '2019-01-29 23:00:00'),
(4, 4, 'Sistemas informáticos', '2018-10-09', '2019-01-29 23:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos_matriculas`
--

CREATE TABLE `modulos_matriculas` (
  `Id_Modulo` int(11) NOT NULL,
  `Id_Matricula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `modulos_matriculas`
--

INSERT INTO `modulos_matriculas` (`Id_Modulo`, `Id_Matricula`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `Id_Profesor` int(11) NOT NULL,
  `Nombre` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Apellido` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Experiencia` int(11) DEFAULT NULL,
  `Formacion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Doctorado` tinyint(1) DEFAULT NULL,
  `Sexo` varchar(1) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Ciudad` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Pais` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Region` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `CodigoPostal` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `Telefono` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `LineaDireccion1` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `LineaDireccion2` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_ultima_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`Id_Profesor`, `Nombre`, `Apellido`, `Experiencia`, `Formacion`, `Doctorado`, `Sexo`, `Ciudad`, `Pais`, `Region`, `CodigoPostal`, `Telefono`, `LineaDireccion1`, `LineaDireccion2`, `fecha_ultima_actualizacion`) VALUES
(1, 'Carlos1', 'Fernandez Vilaseca', 1, 'Licenciado', 0, 'H', 'Madrid', 'España', 'Madrid', '28041', '914589756', 'C/Fuencarral, 46', 'Alcalá', '2019-02-24 18:16:28'),
(3, 'Luis', 'Martinez Perez', 3, 'Doctorado', 0, 'H', 'Madrid', 'España', 'Madrid', '28045', '914589750', 'Avda. del marqués, 51', 'Embajadores', '2019-02-24 19:06:44'),
(4, 'Manuel', 'Gonzalvo Gutiérrez', 4, 'Grado Superior', 0, 'H', 'Barcelona', 'España', 'Cataluña', '08028', '934589750', 'Avda. Diagonal, 654', 'Les Corts', '2019-02-24 18:17:12'),
(5, 'Ruben', 'Serna Hornos', 5, 'Ingeniero', 0, 'H', 'Barcelona', 'España', 'Cataluña', '08029', '934589751', 'Avda. Circunvalación, 234 6-1', 'Vall d\'Hebron', '2019-02-24 19:30:33'),
(6, 'Francisco1', 'Machado Heras', 6, 'Ingeniero técnico', 0, 'H', 'Barcelona', 'España', 'Cataluña', '08021', '93458345', 'C/ Flores, 94', 'Eixampla Dret', '2019-02-24 18:17:52'),
(8, 'Carlos', 'García Fernandez', 1, 'Licenciado', 1, 'H', 'Madrid', 'España', 'Madrid', '28041', '914589756', 'C/Fuencarral, 46', 'Alcalá', '2019-02-24 18:17:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores1`
--

CREATE TABLE `profesores1` (
  `Id_Profesor` int(11) NOT NULL,
  `Nombre` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Apellido` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Experiencia` int(11) DEFAULT NULL,
  `Formacion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Doctorado` tinyint(1) DEFAULT NULL,
  `Sexo` varchar(1) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Ciudad` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Pais` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Region` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `CodigoPostal` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `Telefono` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `LineaDireccion1` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `LineaDireccion2` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_ultima_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `profesores1`
--

INSERT INTO `profesores1` (`Id_Profesor`, `Nombre`, `Apellido`, `Experiencia`, `Formacion`, `Doctorado`, `Sexo`, `Ciudad`, `Pais`, `Region`, `CodigoPostal`, `Telefono`, `LineaDireccion1`, `LineaDireccion2`, `fecha_ultima_actualizacion`) VALUES
(1, 'Carlos1', 'Fernandez', 1, 'Licenciado', 0, 'H', 'Madrid', 'España', 'Madrid', '28041', '914589756', 'C/Fuencarral, 46', 'Alcalá', '2019-02-02 18:38:35'),
(3, 'Luis', 'Martinez', 3, 'Técnico', 0, 'H', 'Madrid', 'España', 'Madrid', '28045', '914589750', 'Avda. del marqués, 51', 'Embajadores', '2019-01-29 23:00:00'),
(4, '4', '4', 4, '4', 1, '4', '4', '4', '4', '4', '4', '4', '4', '2019-01-30 15:35:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ufs`
--

CREATE TABLE `ufs` (
  `Id_UF` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Descripcion` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Nota_Evaluacion_Continua` int(11) NOT NULL,
  `Nota_Examen` int(11) NOT NULL,
  `Nota_Final` int(11) NOT NULL,
  `fecha_ultima_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ufs`
--

INSERT INTO `ufs` (`Id_UF`, `Nombre`, `Descripcion`, `Nota_Evaluacion_Continua`, `Nota_Examen`, `Nota_Final`, `fecha_ultima_actualizacion`) VALUES
(1, 'UF1', 'Sesiones', 8, 7, 8, '2019-01-29 23:00:00'),
(2, 'UF2', 'Modelo Vista Controlador', 8, 7, 8, '2019-01-29 23:00:00'),
(3, 'UF3', 'Introducción POO en PHP', 7, 8, 8, '2019-01-29 23:00:00'),
(4, 'UF4', 'Servicios web', 8, 8, 8, '2019-01-29 23:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades_diarias`
--
ALTER TABLE `actividades_diarias`
  ADD PRIMARY KEY (`Id_Actividad_Diaria`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Id_Alumno`);

--
-- Indices de la tabla `alumnos_cursos`
--
ALTER TABLE `alumnos_cursos`
  ADD PRIMARY KEY (`Id_Alumno`,`Id_Curso`),
  ADD KEY `Id_Curso` (`Id_Curso`);

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id_Asistencia`);

--
-- Indices de la tabla `ciclos_formativos`
--
ALTER TABLE `ciclos_formativos`
  ADD PRIMARY KEY (`Id_Ciclo_Formativo`);

--
-- Indices de la tabla `ciclos_formativos_modulos`
--
ALTER TABLE `ciclos_formativos_modulos`
  ADD PRIMARY KEY (`Id_Ciclo_Formativo`,`Id_Modulo`),
  ADD KEY `Id_Modulo` (`Id_Modulo`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`Id_Curso`);

--
-- Indices de la tabla `cursos_modulos`
--
ALTER TABLE `cursos_modulos`
  ADD PRIMARY KEY (`Id_Curso`,`Id_Modulo`),
  ADD KEY `Id_Modulo` (`Id_Modulo`);

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`Id_Matricula`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`Id_Modulo`);

--
-- Indices de la tabla `modulos_matriculas`
--
ALTER TABLE `modulos_matriculas`
  ADD PRIMARY KEY (`Id_Modulo`,`Id_Matricula`),
  ADD KEY `Id_Matricula` (`Id_Matricula`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`Id_Profesor`);

--
-- Indices de la tabla `profesores1`
--
ALTER TABLE `profesores1`
  ADD PRIMARY KEY (`Id_Profesor`);

--
-- Indices de la tabla `ufs`
--
ALTER TABLE `ufs`
  ADD PRIMARY KEY (`Id_UF`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades_diarias`
--
ALTER TABLE `actividades_diarias`
  MODIFY `Id_Actividad_Diaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `Id_Alumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id_Asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ciclos_formativos`
--
ALTER TABLE `ciclos_formativos`
  MODIFY `Id_Ciclo_Formativo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `Id_Curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  MODIFY `Id_Matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `Id_Modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `Id_Profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `profesores1`
--
ALTER TABLE `profesores1`
  MODIFY `Id_Profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ufs`
--
ALTER TABLE `ufs`
  MODIFY `Id_UF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos_cursos`
--
ALTER TABLE `alumnos_cursos`
  ADD CONSTRAINT `alumnos_cursos_ibfk_1` FOREIGN KEY (`Id_Alumno`) REFERENCES `alumnos` (`id_Alumno`) ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_cursos_ibfk_2` FOREIGN KEY (`Id_Curso`) REFERENCES `cursos` (`Id_Curso`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ciclos_formativos_modulos`
--
ALTER TABLE `ciclos_formativos_modulos`
  ADD CONSTRAINT `ciclos_formativos_modulos_ibfk_1` FOREIGN KEY (`Id_Ciclo_Formativo`) REFERENCES `ciclos_formativos` (`Id_Ciclo_Formativo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ciclos_formativos_modulos_ibfk_2` FOREIGN KEY (`Id_Modulo`) REFERENCES `modulos` (`Id_Modulo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cursos_modulos`
--
ALTER TABLE `cursos_modulos`
  ADD CONSTRAINT `cursos_modulos_ibfk_1` FOREIGN KEY (`Id_Curso`) REFERENCES `cursos` (`Id_Curso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cursos_modulos_ibfk_2` FOREIGN KEY (`Id_Modulo`) REFERENCES `modulos` (`Id_Modulo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `modulos_matriculas`
--
ALTER TABLE `modulos_matriculas`
  ADD CONSTRAINT `modulos_matriculas_ibfk_1` FOREIGN KEY (`Id_Modulo`) REFERENCES `modulos` (`Id_Modulo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `modulos_matriculas_ibfk_2` FOREIGN KEY (`Id_Matricula`) REFERENCES `matriculas` (`Id_Matricula`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

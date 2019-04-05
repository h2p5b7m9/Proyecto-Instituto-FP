--OJO USAR proyecto.sql que es un EXPORT DE LA BD PROYECTO EN PHPMYADMIN XAMPP Y ESTA MAS ACTUALIZADO
-- Copiado de UF3.BD Jardineria.sql y de Atrium sakila-schema.sql
--KKK Buscar FOREIGN en Sakila

DROP SCHEMA IF EXISTS proyecto;

CREATE DATABASE proyecto CHARACTER SET latin1 COLLATE latin1_spanish_ci;
--CREATE SCHEMA proyecto;

USE proyecto; --Establece BD actual en uso

DROP TABLE IF EXISTS Profesores;

CREATE TABLE Profesores (
  Id_Profesor INT(11) NOT NULL,
  Nombre VARCHAR(15) DEFAULT NULL,
  Apellido VARCHAR(40) DEFAULT NULL,
  Experiencia INT(11) DEFAULT NULL,
  Formacion VARCHAR(50) DEFAULT NULL,
  Doctorado BOOLEAN DEFAULT NULL,
  Sexo VARCHAR(1) DEFAULT NULL,
  Ciudad VARCHAR(15) DEFAULT NULL,
  Pais VARCHAR(50) NOT NULL,
  Region VARCHAR(50) DEFAULT NULL,
  CodigoPostal VARCHAR(10) NOT NULL,
  Telefono VARCHAR(20) NOT NULL,
  LineaDireccion1 VARCHAR(50) NOT NULL,
  LineaDireccion2 VARCHAR(50) DEFAULT NULL,
  fecha_ultima_actualizacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (Id_Profesor)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Profesores del Proyecto Instituto';

ALTER TABLE Profesores
  MODIFY Id_Profesor INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO Profesores VALUES (1, 'Carlos', 'Fernandez Vilaseca', 1, 'Licenciado', true, 'H', 'Madrid', 'España', 'Madrid', '28041', '914589756', 'C/Fuencarral, 46 4-1', 'Alcalá', CURRENT_DATE());
INSERT INTO Profesores VALUES (2, 'Juan', 'Martinez Perez', 2, 'Graduado', false, 'H', 'Madrid', 'España', 'Madrid', '28040', '91577889', 'C/Navas, 98 5-2', 'Fuencarral', CURRENT_DATE());
INSERT INTO Profesores VALUES (3, 'Luis', 'Gonzalvo Gutiérrez', 3, 'Doctorado', false, 'H', 'Madrid', 'España', 'Madrid', '28045', '914589750', 'Avda. del marqués, 51 1-1', 'Embajadores', CURRENT_DATE());
INSERT INTO Profesores VALUES (4, 'Manuel', 'García Fernandez', 4, 'Grado Superior', false, 'H', 'Barcelona', 'España', 'Cataluña', '08028', '934589751', 'Avda. Diagonal, 654 4-2', 'Les Corts', CURRENT_DATE());
INSERT INTO Profesores VALUES (5, 'Ruben', 'Serna Hornos', 5, 'Ingeniero Superior', true, 'H', 'Barcelona', 'España', 'Cataluña', '08029', '934589751', 'Avda. Circunvalación, 234 5-1', 'Vall d''Hebron', CURRENT_DATE());
INSERT INTO Profesores VALUES (6, 'Francisco', 'Machado Heras', 6, 'Ingeniero técnico', false, 'H', 'Barcelona', 'España', 'Cataluña', '08021', '934583498', 'C/ Flores, 94', 'Eixampla Dret', CURRENT_DATE());

DROP TABLE IF EXISTS Alumnos;

CREATE TABLE Alumnos (
  Id_Alumno INT(11) NOT NULL,
  Nombre VARCHAR(15) DEFAULT NULL,
  Apellido VARCHAR(15) DEFAULT NULL,
  FechaNacimiento DATE DEFAULT NULL,
  Sexo VARCHAR(1) DEFAULT NULL,
  Ciudad VARCHAR(15) DEFAULT NULL,
  Pais VARCHAR(50) NOT NULL,
  Region VARCHAR(50) DEFAULT NULL,
  CodigoPostal VARCHAR(10) NOT NULL,
  Telefono VARCHAR(20) NOT NULL,
  LineaDireccion1 VARCHAR(50) NOT NULL,
  LineaDireccion2 VARCHAR(50) DEFAULT NULL,
  Formacion VARCHAR(50) DEFAULT NULL,
  Delegado BOOLEAN DEFAULT NULL,
  Anos_Experiencia_Laboral INT(11) NOT NULL,
  Fecha_ultima_actualizacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (Id_Alumno)
) engine=innodb;

ALTER TABLE Alumnos
  MODIFY Id_Alumno INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO Alumnos VALUES (1, 'Pedro', 'Almodovar', '2006-01-19', 'H', 'Malaga', 'España', 'Andalucia', '34689', '974793101', 'Avda. Romeria, 7', 'Barrio Colomar', 'Graduado', true, 1, CURRENT_DATE());
INSERT INTO Alumnos VALUES (2, 'Carlos', 'Larrañaga', '2001-12-07', 'H', 'Getafe', 'España', 'Madrid', '32238', '916432974', 'C/Mero, 32', 'Barrio Estepona', 'Licenciado', false, 10, CURRENT_DATE());
INSERT INTO Alumnos VALUES (3, 'Juan', 'Garcia', '2005-10-23', 'H', 'Alcalá', 'España', 'Madrid', '32238', '916432576', 'C/Loza, 170', 'Barrio Alcañá', 'Graduado Superior', false, 6, CURRENT_DATE());

--UF es como un examen parcial de una asignatura de la carrera. Varias UFs componen un modulo que es como una asignatura de la carrera.
DROP TABLE IF EXISTS UFS;

CREATE TABLE UFS (
  Id_UF INT(11) NOT NULL,
  Nombre VARCHAR(30) DEFAULT NULL,
  Descripcion VARCHAR(30) DEFAULT NULL,
  Nota_Evaluacion_Continua INT(11) NOT NULL,
  Nota_Examen INT(11) NOT NULL,
  Nota_Final INT(11) NOT NULL,
  Fecha_ultima_actualizacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (Id_UF)
) engine=innodb;

ALTER TABLE UFS
  MODIFY Id_UF INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO UFS VALUES (1, 'UF1', 'Sesiones', 8, 7, 8, CURRENT_DATE());
INSERT INTO UFS VALUES (2, 'UF2', 'Modelo Vista Controlador', 8, 7, 8, CURRENT_DATE());
INSERT INTO UFS VALUES (3, 'UF3', 'Introducción POO en PHP', 7, 8, 8, CURRENT_DATE());
INSERT INTO UFS VALUES (4, 'UF4', 'Servicios Web', 8, 8, 8, CURRENT_DATE());

--Para saber si un alumno ha faltado a clase un día concreto o en una UF concreta.
DROP TABLE IF EXISTS Asistencias;

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


ALTER TABLE `asistencias`
  MODIFY id_Asistencia INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO `asistencias` (`id_Asistencia`, `fecha_Clase`, `hora_Clase`, `nombreAlumno`, `id_Alumno`, `id_UF`, `justificante`, `fecha_ultima_actualizacion`, `fotografia`, `descripcion`) VALUES
(1, '2018-10-05', '12:30:00', 'Luis Martinez', 1, 1, 0, '2019-02-09 20:31:00', 'Alumno1.jpg', 'Chico muy aplicado que trabaja muy bien en clase.'),
(2, '2018-10-06', '11:00:00', 'María Marquez', 2, 2, 0, '2019-02-09 20:31:31', 'Alumno2.jpg', 'Está siempre muy atenta y se sienta en la fila de delante de la clase.'),
(3, '2018-10-07', '12:00:00', 'Sandra Perez', 3, 3, 0, '2019-02-09 20:31:39', 'Alumno3.jpg', 'Participa activamente y entregó la tarea de programación correctamente.'),
(4, '2019-10-08', '09:00:00', 'Ana Roca', 4, 4, 0, '2019-02-09 20:30:05', 'Alumno4.jpg', 'Muy buen trabajo en el desarrollo de la aplicación web con el equipo.');


DROP TABLE IF EXISTS Ciclos_Formativos;

CREATE TABLE Ciclos_Formativos (
  Id_Ciclo_Formativo INT(11) NOT NULL,
  Descripcion VARCHAR(30) DEFAULT NULL,
  Area_Formativa VARCHAR(30) DEFAULT NULL,
  BOE VARCHAR(30) DEFAULT NULL,
  Fecha_ultima_actualizacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (Id_Ciclo_Formativo)
) engine=innodb;

ALTER TABLE Ciclos_Formativos
  MODIFY Id_Ciclo_Formativo INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO Ciclos_Formativos VALUES (1, 'CFGS DAW', 'Informatica Web', '2019', CURRENT_DATE());
INSERT INTO Ciclos_Formativos VALUES (2, 'CFGS DAM', 'Informática Multiplataforma', '2019', CURRENT_DATE());
INSERT INTO Ciclos_Formativos VALUES (3, 'CFGS ASICS', 'Informática', '2019', CURRENT_DATE());
INSERT INTO Ciclos_Formativos VALUES (4, 'CFGS Marketing', 'Ventas Empresa', '2019', CURRENT_DATE());

DROP TABLE IF EXISTS Cursos;

CREATE TABLE Cursos (
  Id_Curso INT(11) NOT NULL,
  Id_Ciclo_Formativo INT(11) NOT NULL,
  Descripcion VARCHAR(30) DEFAULT NULL,
  Fecha_Inicio DATE NOT NULL,
  Fecha_Fin DATE NOT NULL,
  Fecha_ultima_actualizacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (Id_Curso)
) engine=innodb;

ALTER TABLE Cursos
  MODIFY Id_Curso INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO Cursos VALUES (1, 1, 'Delegado de clase Ramon Orozco', '2019-10-06', '2020-06-02', CURRENT_DATE());
INSERT INTO Cursos VALUES (2, 2, 'Delegado de clase Juan Perez', '2019-10-06', '2020-06-02', CURRENT_DATE());
INSERT INTO Cursos VALUES (3, 3, 'Delegado de clase Marcos Gorriz', '2019-10-06', '2020-06-02', CURRENT_DATE());
INSERT INTO Cursos VALUES (4, 4, 'Delegado de clase Santiago Segura', '2019-10-06', '2020-06-02', CURRENT_DATE());

DROP TABLE IF EXISTS Actividades_Diarias;

CREATE TABLE Actividades_Diarias (
  Id_Actividad_Diaria INT(11) NOT NULL,
  Id_UF INT(11) NOT NULL,
  Id_Curso INT(11) NOT NULL,
  Descripcion VARCHAR(30) DEFAULT NULL,
  Fecha_Inicio DATE NOT NULL,
  Fecha_Fin DATE NOT NULL,
  Fecha_Presentada DATE NOT NULL,
  Nota_Final INT(11) NOT NULL,
  Comentarios VARCHAR(30) DEFAULT NULL,
  Herramientas VARCHAR(30) DEFAULT NULL,
  Fecha_ultima_actualizacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (Id_Actividad_Diaria)
) engine=innodb;

ALTER TABLE Actividades_Diarias
  MODIFY Id_Actividad_Diaria INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO Actividades_Diarias VALUES (1, 1, 1, 'Diagrama de estructura y clases UML', '2018-10-06', '2018-10-25', '2018-19-02', 10, 'Excelente desarrollo con profundidad.', 'Microsoft Word', CURRENT_DATE());
INSERT INTO Actividades_Diarias VALUES (2, 2, 2, 'Diagrama de maquina de tiempos y flujo del programa', '2018-11-26', '2018-11-12', '2018-11-29', 10, 'Bien documentado.', 'Microsoft Visio', CURRENT_DATE());
INSERT INTO Actividades_Diarias VALUES (3, 3, 3, 'Esquema general de la aplicación web', '2018-10-08', '2018-10-22', '2018-1-22', 10, 'Buen trabajo!', 'PowerPoint, FlowChart, NinjaMock', CURRENT_DATE());

--Modulo es como una asignatura de la carrera que está compuesta de examenes parciales que son las UFs
DROP TABLE IF EXISTS Modulos;

CREATE TABLE Modulos (
  Id_Modulo INT(11) NOT NULL,
  Id_UF INT(11) NOT NULL,
  Descripcion VARCHAR(30) DEFAULT NULL,
  Fecha_Creacion DATE NOT NULL,
  Fecha_ultima_actualizacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (Id_Modulo)
) engine=innodb;

ALTER TABLE Modulos
  MODIFY Id_Modulo INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO Modulos VALUES (1, 1, 'Bases de datos', '2018-11-06', CURRENT_DATE());
INSERT INTO Modulos VALUES (2, 2, 'Programacion', '2018-03-06', CURRENT_DATE());
INSERT INTO Modulos VALUES (3, 3, 'Lenguaje de marcas y SGI', '2018-10-06', CURRENT_DATE());
INSERT INTO Modulos VALUES (4, 4, 'Sistemas informáticos', '2018-10-09', CURRENT_DATE());

DROP TABLE IF EXISTS Matriculas;

CREATE TABLE Matriculas (
  Id_Matricula INT(11) NOT NULL,
  Id_Curso INT(11) NOT NULL,
  Id_Alumno INT(11) NOT NULL,
  Descripcion VARCHAR(30) DEFAULT NULL,
  Fecha_Inicio DATE NOT NULL,
  Fecha_Fin DATE NOT NULL,
  Fecha_ultima_actualizacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (Id_Matricula)
) engine=innodb;

ALTER TABLE Matriculas
  MODIFY Id_Matricula INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO Matriculas VALUES (1, 1, 1, 'Diagrama de clases UML', '2019-10-06', '2020-06-02', CURRENT_DATE());
INSERT INTO Matriculas VALUES (2, 2, 2, 'Diagrama de flujo del programa', '2019-10-06', '2020-06-02', CURRENT_DATE());
INSERT INTO Matriculas VALUES (3, 3, 3, 'Esquema general aplicación', '2019-10-06', '2020-06-02', CURRENT_DATE());

DROP TABLE IF EXISTS Profesores_Ciclos_Formativos;

CREATE TABLE Profesores_Ciclos_Formativos (
Id_Profesor INT(11) NOT NULL,
Id_Ciclo_Formativo INT(11) NOT NULL,
PRIMARY KEY (Id_Profesor, Id_Ciclo_Formativo),
FOREIGN KEY (Id_Profesor) REFERENCES Profesores(Id_Profesor) ON DELETE RESTRICT ON UPDATE CASCADE,
FOREIGN KEY (Id_Ciclo_Formativo) REFERENCES Ciclos_Formativos(Id_Ciclo_Formativo) ON DELETE RESTRICT ON UPDATE CASCADE
) engine=innodb;

INSERT INTO Profesores_Ciclos_Formativos VALUES (1, 1);
INSERT INTO Profesores_Ciclos_Formativos VALUES (2, 2);

DROP TABLE IF EXISTS Modulos_Matriculas;

CREATE TABLE Modulos_Matriculas (
Id_Modulo INT(11) NOT NULL,
Id_Matricula INT(11) NOT NULL,
PRIMARY KEY (Id_Modulo, Id_Matricula),
FOREIGN KEY (Id_Modulo) REFERENCES Modulos(Id_Modulo) ON DELETE RESTRICT ON UPDATE CASCADE,
FOREIGN KEY (Id_Matricula) REFERENCES Matriculas(Id_Matricula) ON DELETE RESTRICT ON UPDATE CASCADE
) engine=innodb;

INSERT INTO Modulos_Matriculas VALUES (1, 1);
INSERT INTO Modulos_Matriculas VALUES (2, 2);

DROP TABLE IF EXISTS Alumnos_Cursos;

CREATE TABLE Alumnos_Cursos (
Id_Alumno INT(11) NOT NULL,
Id_Curso INT(11) NOT NULL,
Expediente VARCHAR(30) DEFAULT NULL,
PRIMARY KEY (Id_Alumno, Id_Curso),
FOREIGN KEY (Id_Alumno) REFERENCES Alumnos(Id_Alumno) ON DELETE RESTRICT ON UPDATE CASCADE,
FOREIGN KEY (Id_Curso) REFERENCES Cursos(Id_Curso) ON DELETE RESTRICT ON UPDATE CASCADE
) engine=innodb;

INSERT INTO Alumnos_Cursos VALUES (1, 1, 'Alumno excelente, trabajador y aplicado.');
INSERT INTO Alumnos_Cursos VALUES (2, 2, 'Pocas horas de dedicación al estudio. Dificultad compatibilizar con trabajo.');

DROP TABLE IF EXISTS Cursos_Modulos;

CREATE TABLE Cursos_Modulos (
Id_Curso INT(11) NOT NULL,
Id_Modulo INT(11) NOT NULL,
PRIMARY KEY (Id_Curso, Id_Modulo),
FOREIGN KEY (Id_Curso) REFERENCES Cursos(Id_Curso) ON DELETE RESTRICT ON UPDATE CASCADE,
FOREIGN KEY (Id_Modulo) REFERENCES Modulos(Id_Modulo) ON DELETE RESTRICT ON UPDATE CASCADE
) engine=innodb;

INSERT INTO Cursos_Modulos VALUES (1, 1);
INSERT INTO Cursos_Modulos VALUES (2, 2);

DROP TABLE IF EXISTS Ciclos_Formativos_Modulos;

CREATE TABLE Ciclos_Formativos_Modulos (
Id_Ciclo_Formativo INT(11) NOT NULL,
Id_Modulo INT(11) NOT NULL,
PRIMARY KEY (Id_Ciclo_Formativo, Id_Modulo),
FOREIGN KEY (Id_Ciclo_Formativo) REFERENCES Ciclos_Formativos(Id_Ciclo_Formativo) ON DELETE RESTRICT ON UPDATE CASCADE,
FOREIGN KEY (Id_Modulo) REFERENCES Modulos(Id_Modulo) ON DELETE RESTRICT ON UPDATE CASCADE
) engine=innodb;

INSERT INTO Ciclos_Formativos_Modulos VALUES (1, 1);
INSERT INTO Ciclos_Formativos_Modulos VALUES (2, 2);


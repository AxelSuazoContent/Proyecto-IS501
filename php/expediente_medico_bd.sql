-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2024 a las 04:07:21
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `expediente_medico_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_trabajo`
--

CREATE TABLE `area_trabajo` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `area_trabajo`
--

INSERT INTO `area_trabajo` (`ID`, `Descripcion`) VALUES
(1, 'Atencion de emergencias medicas'),
(2, 'Area de atencion para niños'),
(3, 'Atención de problemas cardíacos'),
(4, 'Área de atención de lesiones y fracturas'),
(5, 'Análisis clínicos y pruebas de laboratorio'),
(6, 'Imágenes y estudios radiológicos'),
(7, 'Realización de intervenciones quirúrgicas'),
(8, 'Atención de consultas médicas'),
(9, 'Tratamiento y prevención del cáncer'),
(10, 'Salud reproductiva de la mujer'),
(11, 'Atención de salud mental'),
(12, 'Unidad de cuidados intensivos'),
(13, 'Dispensación de medicamentos'),
(14, 'Gestión administrativa del hospital'),
(15, 'Terapia física y ocupacional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`ID`, `Nombre`, `Estado`) VALUES
(1, 'Administrador', 'A'),
(2, 'Médico General', 'A'),
(3, 'Enfermera', 'A'),
(4, 'Recepcionista', 'A'),
(5, 'Farmacéutico', 'A'),
(6, 'Técnico de Laboratorio', 'A'),
(7, 'Auxiliar de Limpieza', 'A'),
(8, 'Seguridad', 'A'),
(9, 'Paramédico', 'A'),
(10, 'Médico Especialista', 'A'),
(11, 'Gerente', 'A'),
(12, 'Contador', 'A'),
(13, 'Terapeuta', 'A'),
(14, 'Supervisor', 'A'),
(15, 'Asistente Administrativo', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita_medica`
--

CREATE TABLE `cita_medica` (
  `ID` int(11) NOT NULL,
  `PACIENTE_ID` int(11) DEFAULT NULL,
  `DOCTOR_ID` int(11) DEFAULT NULL,
  `Fecha_Hora` datetime DEFAULT NULL,
  `Observaciones` varchar(80) DEFAULT NULL,
  `ESTADO` varchar(1) DEFAULT NULL,
  `HABITACIONES_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `MUNICIPIO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas_medica`
--

CREATE TABLE `consultas_medica` (
  `ID` int(11) NOT NULL,
  `Observaciones` varchar(45) DEFAULT NULL,
  `Fecha_Hora` datetime DEFAULT NULL,
  `CITA_MEDICA_ID` int(11) DEFAULT NULL,
  `DIAGNOSTICO_ID` int(11) DEFAULT NULL,
  `RECETA_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas_medica_has_pruebas_diagnostico`
--

CREATE TABLE `consultas_medica_has_pruebas_diagnostico` (
  `CONSULTAS_MEDICAS_ID` int(11) NOT NULL,
  `Pruebas_diagnostico_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Severidad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID` int(11) NOT NULL,
  `Fecha_Contratacion` date DEFAULT NULL,
  `Persona_ID` int(11) DEFAULT NULL,
  `Gerente_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID`, `Fecha_Contratacion`, `Persona_ID`, `Gerente_ID`) VALUES
(1, '2023-01-01', 1, NULL),
(2, '2023-01-02', 2, 1),
(3, '2023-01-03', 3, 1),
(4, '2023-01-04', 4, 1),
(5, '2023-01-05', 5, 1),
(6, '2023-01-06', 6, 1),
(7, '2023-01-07', 7, 1),
(8, '2023-01-08', 8, 1),
(9, '2023-01-09', 9, 1),
(10, '2023-01-10', 10, 1),
(11, '2023-01-11', 11, 1),
(12, '2023-01-12', 12, 1),
(13, '2023-01-13', 13, 1),
(14, '2023-01-14', 14, 1),
(15, '2023-01-15', 15, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_has_area_trabajo`
--

CREATE TABLE `empleado_has_area_trabajo` (
  `EMPLEADO_ID` int(11) NOT NULL,
  `Area_Trabajo_ID` int(11) NOT NULL,
  `Fecha_Hora_Asignacion` datetime DEFAULT NULL,
  `Fecha_Hora_Fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_has_cargo`
--

CREATE TABLE `empleado_has_cargo` (
  `EMPLEADO_ID` int(11) NOT NULL,
  `CARGO_ID` int(11) NOT NULL,
  `Fecha_Inicio` date DEFAULT NULL,
  `Fecha_Fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado_has_cargo`
--

INSERT INTO `empleado_has_cargo` (`EMPLEADO_ID`, `CARGO_ID`, `Fecha_Inicio`, `Fecha_Fin`) VALUES
(1, 1, '2024-01-01', '2025-01-01'),
(2, 2, '2024-02-01', '2025-02-01'),
(3, 3, '2024-03-01', '2025-03-01'),
(4, 4, '2024-04-01', '2025-04-01'),
(5, 5, '2024-05-01', '2025-05-01'),
(6, 6, '2024-06-01', '2025-06-01'),
(7, 7, '2024-07-01', '2025-07-01'),
(8, 8, '2024-08-01', '2025-08-01'),
(9, 9, '2024-09-01', '2025-09-01'),
(10, 10, '2024-10-01', '2025-10-01'),
(11, 11, '2024-11-01', '2025-11-01'),
(12, 12, '2024-12-01', '2025-12-01'),
(13, 13, '2025-01-01', '2026-01-01'),
(14, 14, '2025-02-01', '2026-02-01'),
(15, 15, '2025-03-01', '2026-03-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_has_especialidad`
--

CREATE TABLE `empleado_has_especialidad` (
  `EMPLEADO_ID` int(11) NOT NULL,
  `ESPECIALIDAD_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `licencia` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`ID`, `Descripcion`, `licencia`) VALUES
(1, 'Cardiología', 'CAR123'),
(2, 'Pediatría', 'PED456'),
(3, 'Ginecología', 'GIN789'),
(4, 'Dermatología', 'DER101'),
(5, 'Neurología', 'NEU202'),
(6, 'Oftalmología', 'OFT303'),
(7, 'Oncología', 'ONC404'),
(8, 'Ortopedia', 'ORT505'),
(9, 'Psicología', 'PSI606'),
(10, 'Psiquiatría', 'PSQ707'),
(11, 'Urología', 'URO808'),
(12, 'Endocrinología', 'END909'),
(13, 'Reumatología', 'REU111'),
(14, 'Gastroenterología', 'GAS222'),
(15, 'Infectología', 'INF333');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios_especializado`
--

CREATE TABLE `estudios_especializado` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Costo` int(11) DEFAULT NULL,
  `TIPO_ESTUDIO_ID` int(11) DEFAULT NULL,
  `Pruebas_diagnostico_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID` int(11) NOT NULL,
  `Fecha_Emision` date DEFAULT NULL,
  `POLIZA_ID` int(11) DEFAULT NULL,
  `Monto_Total` decimal(10,0) DEFAULT NULL,
  `Monto_Cubierto` decimal(10,0) DEFAULT NULL,
  `Detalles` varchar(45) DEFAULT NULL,
  `PACIENTE_ID` int(11) DEFAULT NULL,
  `CITA_MEDICA_ID` int(11) DEFAULT NULL,
  `PAGO_ID` int(11) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `ID` int(11) NOT NULL,
  `Numero` int(11) DEFAULT NULL,
  `SALA_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`ID`, `Numero`, `SALA_ID`) VALUES
(1, 201, 1),
(2, 202, 2),
(3, 203, 3),
(4, 204, 4),
(5, 205, 5),
(6, 206, 6),
(7, 207, 7),
(8, 208, 8),
(9, 209, 9),
(10, 210, 10),
(11, 211, 11),
(12, 212, 12),
(13, 213, 13),
(14, 214, 14),
(15, 215, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_medico`
--

CREATE TABLE `historial_medico` (
  `ID` int(11) NOT NULL,
  `Fecha_Inicio` date DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Observaciones` varchar(80) DEFAULT NULL,
  `Paciente_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospital_clinica`
--

CREATE TABLE `hospital_clinica` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `TELEFONO_ID` int(11) DEFAULT NULL,
  `CIUDAD_ID` int(11) DEFAULT NULL,
  `TIPOS_HOSPITALES_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospital_clinica_has_historial_medico`
--

CREATE TABLE `hospital_clinica_has_historial_medico` (
  `HOSPITAL_ID` int(11) NOT NULL,
  `HISTORIAL_MEDICO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intervencion_quirurgica`
--

CREATE TABLE `intervencion_quirurgica` (
  `ID` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Duracion` decimal(10,0) DEFAULT NULL,
  `Observaciones` varchar(45) DEFAULT NULL,
  `CONSULTAS_MEDICAS_ID` int(11) DEFAULT NULL,
  `TIPO_INTERVENCION_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `DEPARTAMENTO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `ID` int(11) NOT NULL,
  `PERSONA_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`ID`, `PERSONA_ID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente_has_poliza`
--

CREATE TABLE `paciente_has_poliza` (
  `PACIENTE_ID` int(11) NOT NULL,
  `POLIZA_ID` int(11) NOT NULL,
  `Fecha_caducacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `ID` int(11) NOT NULL,
  `Fecha_Pago` date DEFAULT NULL,
  `TIPO_PAGO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ID` int(11) NOT NULL,
  `PNombre` varchar(45) DEFAULT NULL,
  `SNombre` varchar(45) DEFAULT NULL,
  `PApellido` varchar(45) DEFAULT NULL,
  `SApellido` varchar(45) DEFAULT NULL,
  `Direccion` varchar(80) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `Identidad` varchar(25) DEFAULT NULL,
  `RTN` varchar(25) DEFAULT NULL,
  `Fecha_Nacim` date DEFAULT NULL,
  `Numero_Emergencia` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ID`, `PNombre`, `SNombre`, `PApellido`, `SApellido`, `Direccion`, `correo`, `sexo`, `Identidad`, `RTN`, `Fecha_Nacim`, `Numero_Emergencia`) VALUES
(1, 'Juan', 'Carlos', 'Pérez', 'Gómez', 'Av. Central 101', 'juan.perez@example.com', 'M', '0801199912345', '08011999012345', NULL, NULL),
(2, 'Ana', 'María', 'López', 'Rodríguez', 'Calle 5 No. 20', 'ana.lopez@example.com', 'F', '0802199912346', '08021999012346', NULL, NULL),
(3, 'Pedro', 'Luis', 'Martínez', 'Santos', 'Col. El Bosque', 'pedro.martinez@example.com', 'M', '0803199912347', '08031999012347', NULL, NULL),
(4, 'Lucía', 'Elena', 'García', 'Ruiz', 'Col. Las Colinas', 'lucia.garcia@example.com', 'F', '0804199912348', '08041999012348', NULL, NULL),
(5, 'Carlos', 'Eduardo', 'Hernández', 'Fernández', 'Resid. La Primavera', 'carlos.hernandez@example.com', 'M', '0805199912349', '08051999012349', NULL, NULL),
(6, 'María', 'Isabel', 'Mejía', 'Torres', 'Barrio Abajo', 'maria.mejia@example.com', 'F', '0806199912350', '08061999012350', NULL, NULL),
(7, 'José', 'Manuel', 'Castro', 'Alvarado', 'Barrio Cabañas', 'jose.castro@example.com', 'M', '0807199912351', '08071999012351', NULL, NULL),
(8, 'Rosa', 'Beatriz', 'Suárez', 'Cruz', 'Resid. Monte Verde', 'rosa.suarez@example.com', 'F', '0808199912352', '08081999012352', NULL, NULL),
(9, 'Miguel', 'Ángel', 'Ortega', 'López', 'Barrio El Centro', 'miguel.ortega@example.com', 'M', '0809199912353', '08091999012353', NULL, NULL),
(10, 'Sofía', 'Gabriela', 'Mendoza', 'Lara', 'Resid. El Hatillo', 'sofia.mendoza@example.com', 'F', '0810199912354', '08101999012354', NULL, NULL),
(11, 'Roberto', 'Tomás', 'Ramírez', 'García', 'Resid. Santa Lucía', 'roberto.ramirez@example.com', 'M', '0811199912355', '08111999012355', NULL, NULL),
(12, 'Elena', 'Patricia', 'Gómez', 'Torres', 'Col. El Pedregal', 'elena.gomez@example.com', 'F', '0812199912356', '08121999012356', NULL, NULL),
(13, 'Alberto', 'Ignacio', 'Sánchez', 'Romero', 'Col. El Paraíso', 'alberto.sanchez@example.com', 'M', '0813199912357', '08131999012357', NULL, NULL),
(14, 'Carmen', 'Teresa', 'Reyes', 'García', 'Av. Bolívar 250', 'carmen.reyes@example.com', 'F', '0814199912358', '08141999012358', NULL, NULL),
(15, 'Raúl', 'Antonio', 'Díaz', 'Morales', 'Resid. Los Pinos', 'raul.diaz@example.com', 'M', '0815199912359', '08151999012359', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poliza`
--

CREATE TABLE `poliza` (
  `ID` int(11) NOT NULL,
  `Detalles` varchar(45) DEFAULT NULL,
  `TIPO_POLIZA_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas_diagnostico`
--

CREATE TABLE `pruebas_diagnostico` (
  `ID` int(11) NOT NULL,
  `Altura` decimal(10,0) DEFAULT NULL,
  `Peso` decimal(10,0) DEFAULT NULL,
  `Presion_Arterial` decimal(10,0) DEFAULT NULL,
  `Temperatura` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `ID` int(11) NOT NULL,
  `Medicamento` varchar(45) DEFAULT NULL,
  `Dosis` varchar(45) DEFAULT NULL,
  `Frecuencia` varchar(45) DEFAULT NULL,
  `Fecha_Inicio` date DEFAULT NULL,
  `Fecha_Fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `ID` int(11) NOT NULL,
  `Numero` int(11) DEFAULT NULL,
  `Area_Trabajo_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`ID`, `Numero`, `Area_Trabajo_ID`) VALUES
(1, 101, 1),
(2, 102, 2),
(3, 103, 3),
(4, 104, 4),
(5, 105, 5),
(6, 106, 6),
(7, 107, 7),
(8, 108, 8),
(9, 109, 9),
(10, 110, 10),
(11, 111, 11),
(12, 112, 12),
(13, 113, 13),
(14, 114, 14),
(15, 115, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `ID` int(11) NOT NULL,
  `Numero` varchar(45) DEFAULT NULL,
  `Persona_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`ID`, `Numero`, `Persona_ID`) VALUES
(1, '50412345678', 1),
(2, '50487654321', 2),
(3, '50423456789', 3),
(4, '50498765432', 4),
(5, '50434567890', 5),
(6, '50476543210', 6),
(7, '50445678901', 7),
(8, '50465432109', 8),
(9, '50456789012', 9),
(10, '50467890123', 10),
(11, '50478901234', 11),
(12, '50489012345', 12),
(13, '50490123456', 13),
(14, '50401234567', 14),
(15, '50467812345', 15),
(16, '8824-5624', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_hospital`
--

CREATE TABLE `tipos_hospital` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_estudio`
--

CREATE TABLE `tipo_estudio` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_intervencion`
--

CREATE TABLE `tipo_intervencion` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_poliza`
--

CREATE TABLE `tipo_poliza` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Estado` varchar(1) DEFAULT NULL,
  `Monto_cubrir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area_trabajo`
--
ALTER TABLE `area_trabajo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `cita_medica`
--
ALTER TABLE `cita_medica`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PACIENTE_ID` (`PACIENTE_ID`),
  ADD KEY `DOCTOR_ID` (`DOCTOR_ID`),
  ADD KEY `HABITACIONES_ID` (`HABITACIONES_ID`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MUNICIPIO_ID` (`MUNICIPIO_ID`);

--
-- Indices de la tabla `consultas_medica`
--
ALTER TABLE `consultas_medica`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CITA_MEDICA_ID` (`CITA_MEDICA_ID`),
  ADD KEY `DIAGNOSTICO_ID` (`DIAGNOSTICO_ID`),
  ADD KEY `RECETA_ID` (`RECETA_ID`);

--
-- Indices de la tabla `consultas_medica_has_pruebas_diagnostico`
--
ALTER TABLE `consultas_medica_has_pruebas_diagnostico`
  ADD PRIMARY KEY (`CONSULTAS_MEDICAS_ID`,`Pruebas_diagnostico_ID`),
  ADD KEY `Pruebas_diagnostico_ID` (`Pruebas_diagnostico_ID`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Persona_ID` (`Persona_ID`),
  ADD KEY `fk_Gerente_ID` (`Gerente_ID`);

--
-- Indices de la tabla `empleado_has_area_trabajo`
--
ALTER TABLE `empleado_has_area_trabajo`
  ADD PRIMARY KEY (`EMPLEADO_ID`,`Area_Trabajo_ID`),
  ADD KEY `Area_Trabajo_ID` (`Area_Trabajo_ID`);

--
-- Indices de la tabla `empleado_has_cargo`
--
ALTER TABLE `empleado_has_cargo`
  ADD PRIMARY KEY (`EMPLEADO_ID`,`CARGO_ID`),
  ADD KEY `CARGO_ID` (`CARGO_ID`);

--
-- Indices de la tabla `empleado_has_especialidad`
--
ALTER TABLE `empleado_has_especialidad`
  ADD PRIMARY KEY (`EMPLEADO_ID`,`ESPECIALIDAD_ID`),
  ADD KEY `ESPECIALIDAD_ID` (`ESPECIALIDAD_ID`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `estudios_especializado`
--
ALTER TABLE `estudios_especializado`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TIPO_ESTUDIO_ID` (`TIPO_ESTUDIO_ID`),
  ADD KEY `Pruebas_diagnostico_ID` (`Pruebas_diagnostico_ID`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `POLIZA_ID` (`POLIZA_ID`),
  ADD KEY `PACIENTE_ID` (`PACIENTE_ID`),
  ADD KEY `PAGO_ID` (`PAGO_ID`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SALA_ID` (`SALA_ID`);

--
-- Indices de la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Paciente_ID` (`Paciente_ID`);

--
-- Indices de la tabla `hospital_clinica`
--
ALTER TABLE `hospital_clinica`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TELEFONO_ID` (`TELEFONO_ID`),
  ADD KEY `CIUDAD_ID` (`CIUDAD_ID`),
  ADD KEY `TIPOS_HOSPITALES_ID` (`TIPOS_HOSPITALES_ID`);

--
-- Indices de la tabla `hospital_clinica_has_historial_medico`
--
ALTER TABLE `hospital_clinica_has_historial_medico`
  ADD PRIMARY KEY (`HOSPITAL_ID`,`HISTORIAL_MEDICO_ID`),
  ADD KEY `HISTORIAL_MEDICO_ID` (`HISTORIAL_MEDICO_ID`);

--
-- Indices de la tabla `intervencion_quirurgica`
--
ALTER TABLE `intervencion_quirurgica`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CONSULTAS_MEDICAS_ID` (`CONSULTAS_MEDICAS_ID`),
  ADD KEY `TIPO_INTERVENCION_ID` (`TIPO_INTERVENCION_ID`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DEPARTAMENTO_ID` (`DEPARTAMENTO_ID`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PERSONA_ID` (`PERSONA_ID`);

--
-- Indices de la tabla `paciente_has_poliza`
--
ALTER TABLE `paciente_has_poliza`
  ADD PRIMARY KEY (`PACIENTE_ID`,`POLIZA_ID`),
  ADD KEY `POLIZA_ID` (`POLIZA_ID`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TIPO_PAGO_ID` (`TIPO_PAGO_ID`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `poliza`
--
ALTER TABLE `poliza`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TIPO_POLIZA_ID` (`TIPO_POLIZA_ID`);

--
-- Indices de la tabla `pruebas_diagnostico`
--
ALTER TABLE `pruebas_diagnostico`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Area_Trabajo_ID` (`Area_Trabajo_ID`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Persona_ID` (`Persona_ID`);

--
-- Indices de la tabla `tipos_hospital`
--
ALTER TABLE `tipos_hospital`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tipo_estudio`
--
ALTER TABLE `tipo_estudio`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tipo_intervencion`
--
ALTER TABLE `tipo_intervencion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tipo_poliza`
--
ALTER TABLE `tipo_poliza`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area_trabajo`
--
ALTER TABLE `area_trabajo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `cita_medica`
--
ALTER TABLE `cita_medica`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consultas_medica`
--
ALTER TABLE `consultas_medica`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `estudios_especializado`
--
ALTER TABLE `estudios_especializado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hospital_clinica`
--
ALTER TABLE `hospital_clinica`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `intervencion_quirurgica`
--
ALTER TABLE `intervencion_quirurgica`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `poliza`
--
ALTER TABLE `poliza`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pruebas_diagnostico`
--
ALTER TABLE `pruebas_diagnostico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tipos_hospital`
--
ALTER TABLE `tipos_hospital`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_estudio`
--
ALTER TABLE `tipo_estudio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_intervencion`
--
ALTER TABLE `tipo_intervencion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_poliza`
--
ALTER TABLE `tipo_poliza`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita_medica`
--
ALTER TABLE `cita_medica`
  ADD CONSTRAINT `cita_medica_ibfk_1` FOREIGN KEY (`PACIENTE_ID`) REFERENCES `paciente` (`ID`),
  ADD CONSTRAINT `cita_medica_ibfk_2` FOREIGN KEY (`DOCTOR_ID`) REFERENCES `empleado` (`ID`),
  ADD CONSTRAINT `cita_medica_ibfk_3` FOREIGN KEY (`HABITACIONES_ID`) REFERENCES `habitacion` (`ID`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`MUNICIPIO_ID`) REFERENCES `municipio` (`ID`);

--
-- Filtros para la tabla `consultas_medica`
--
ALTER TABLE `consultas_medica`
  ADD CONSTRAINT `consultas_medica_ibfk_1` FOREIGN KEY (`CITA_MEDICA_ID`) REFERENCES `cita_medica` (`ID`),
  ADD CONSTRAINT `consultas_medica_ibfk_2` FOREIGN KEY (`DIAGNOSTICO_ID`) REFERENCES `diagnostico` (`ID`),
  ADD CONSTRAINT `consultas_medica_ibfk_3` FOREIGN KEY (`RECETA_ID`) REFERENCES `receta` (`ID`);

--
-- Filtros para la tabla `consultas_medica_has_pruebas_diagnostico`
--
ALTER TABLE `consultas_medica_has_pruebas_diagnostico`
  ADD CONSTRAINT `consultas_medica_has_pruebas_diagnostico_ibfk_1` FOREIGN KEY (`CONSULTAS_MEDICAS_ID`) REFERENCES `consultas_medica` (`ID`),
  ADD CONSTRAINT `consultas_medica_has_pruebas_diagnostico_ibfk_2` FOREIGN KEY (`Pruebas_diagnostico_ID`) REFERENCES `pruebas_diagnostico` (`ID`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`Persona_ID`) REFERENCES `persona` (`ID`),
  ADD CONSTRAINT `fk_Gerente_ID` FOREIGN KEY (`Gerente_ID`) REFERENCES `empleado` (`ID`);

--
-- Filtros para la tabla `empleado_has_area_trabajo`
--
ALTER TABLE `empleado_has_area_trabajo`
  ADD CONSTRAINT `empleado_has_area_trabajo_ibfk_1` FOREIGN KEY (`EMPLEADO_ID`) REFERENCES `empleado` (`ID`),
  ADD CONSTRAINT `empleado_has_area_trabajo_ibfk_2` FOREIGN KEY (`Area_Trabajo_ID`) REFERENCES `area_trabajo` (`ID`);

--
-- Filtros para la tabla `empleado_has_cargo`
--
ALTER TABLE `empleado_has_cargo`
  ADD CONSTRAINT `empleado_has_cargo_ibfk_1` FOREIGN KEY (`EMPLEADO_ID`) REFERENCES `empleado` (`ID`),
  ADD CONSTRAINT `empleado_has_cargo_ibfk_2` FOREIGN KEY (`CARGO_ID`) REFERENCES `cargo` (`ID`);

--
-- Filtros para la tabla `empleado_has_especialidad`
--
ALTER TABLE `empleado_has_especialidad`
  ADD CONSTRAINT `empleado_has_especialidad_ibfk_1` FOREIGN KEY (`EMPLEADO_ID`) REFERENCES `empleado` (`ID`),
  ADD CONSTRAINT `empleado_has_especialidad_ibfk_2` FOREIGN KEY (`ESPECIALIDAD_ID`) REFERENCES `especialidad` (`ID`);

--
-- Filtros para la tabla `estudios_especializado`
--
ALTER TABLE `estudios_especializado`
  ADD CONSTRAINT `estudios_especializado_ibfk_1` FOREIGN KEY (`TIPO_ESTUDIO_ID`) REFERENCES `tipo_estudio` (`ID`),
  ADD CONSTRAINT `estudios_especializado_ibfk_2` FOREIGN KEY (`Pruebas_diagnostico_ID`) REFERENCES `pruebas_diagnostico` (`ID`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`POLIZA_ID`) REFERENCES `poliza` (`ID`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`PACIENTE_ID`) REFERENCES `paciente` (`ID`),
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`PAGO_ID`) REFERENCES `pago` (`ID`);

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `habitacion_ibfk_1` FOREIGN KEY (`SALA_ID`) REFERENCES `sala` (`ID`);

--
-- Filtros para la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD CONSTRAINT `historial_medico_ibfk_1` FOREIGN KEY (`Paciente_ID`) REFERENCES `paciente` (`ID`);

--
-- Filtros para la tabla `hospital_clinica`
--
ALTER TABLE `hospital_clinica`
  ADD CONSTRAINT `hospital_clinica_ibfk_1` FOREIGN KEY (`TELEFONO_ID`) REFERENCES `telefono` (`ID`),
  ADD CONSTRAINT `hospital_clinica_ibfk_2` FOREIGN KEY (`CIUDAD_ID`) REFERENCES `ciudad` (`ID`),
  ADD CONSTRAINT `hospital_clinica_ibfk_3` FOREIGN KEY (`TIPOS_HOSPITALES_ID`) REFERENCES `tipos_hospital` (`ID`);

--
-- Filtros para la tabla `hospital_clinica_has_historial_medico`
--
ALTER TABLE `hospital_clinica_has_historial_medico`
  ADD CONSTRAINT `hospital_clinica_has_historial_medico_ibfk_1` FOREIGN KEY (`HOSPITAL_ID`) REFERENCES `hospital_clinica` (`ID`),
  ADD CONSTRAINT `hospital_clinica_has_historial_medico_ibfk_2` FOREIGN KEY (`HISTORIAL_MEDICO_ID`) REFERENCES `historial_medico` (`ID`);

--
-- Filtros para la tabla `intervencion_quirurgica`
--
ALTER TABLE `intervencion_quirurgica`
  ADD CONSTRAINT `intervencion_quirurgica_ibfk_1` FOREIGN KEY (`CONSULTAS_MEDICAS_ID`) REFERENCES `consultas_medica` (`ID`),
  ADD CONSTRAINT `intervencion_quirurgica_ibfk_2` FOREIGN KEY (`TIPO_INTERVENCION_ID`) REFERENCES `tipo_intervencion` (`ID`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`DEPARTAMENTO_ID`) REFERENCES `departamento` (`ID`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`PERSONA_ID`) REFERENCES `persona` (`ID`);

--
-- Filtros para la tabla `paciente_has_poliza`
--
ALTER TABLE `paciente_has_poliza`
  ADD CONSTRAINT `paciente_has_poliza_ibfk_1` FOREIGN KEY (`PACIENTE_ID`) REFERENCES `paciente` (`ID`),
  ADD CONSTRAINT `paciente_has_poliza_ibfk_2` FOREIGN KEY (`POLIZA_ID`) REFERENCES `poliza` (`ID`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`TIPO_PAGO_ID`) REFERENCES `tipo_pago` (`ID`);

--
-- Filtros para la tabla `poliza`
--
ALTER TABLE `poliza`
  ADD CONSTRAINT `poliza_ibfk_1` FOREIGN KEY (`TIPO_POLIZA_ID`) REFERENCES `tipo_poliza` (`ID`);

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`Area_Trabajo_ID`) REFERENCES `area_trabajo` (`ID`);

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `telefono_ibfk_1` FOREIGN KEY (`Persona_ID`) REFERENCES `persona` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

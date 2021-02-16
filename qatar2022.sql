-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2019 a las 22:19:58
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qatar2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE `club` (
  `Id_Club` decimal(4,0) NOT NULL,
  `Nombre_Club` varchar(50) NOT NULL,
  `Id_Pais` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `club`
--

INSERT INTO `club` (`Id_Club`, `Nombre_Club`, `Id_Pais`) VALUES
('1', 'INTER DE MILAN', '70'),
('2', 'MILAN', '70'),
('3', 'JUVENTUS', '70'),
('4', 'ATLETICO DE MADRID', '48'),
('5', 'LIVERPOOL', '67'),
('6', 'MANCHASTER UNITED', '67'),
('7', 'CHELSEA', '67'),
('8', 'TOTTEMHAM', '67'),
('9', 'BARCELONA', '48'),
('10', 'BAYER MUNICH', '3'),
('11', 'REAL MADRID', '48'),
('12', 'PARIS SAINT-GERMAIN', '53'),
('13', 'MANCHASTER CITY', '67'),
('14', 'ROMA', '70'),
('15', 'AJAX', '86'),
('105', 'Municipal', '59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadios`
--

CREATE TABLE `estadios` (
  `Id_Estadio` int(11) NOT NULL,
  `Nombre_Estadio` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadios`
--

INSERT INTO `estadios` (`Id_Estadio`, `Nombre_Estadio`) VALUES
(1, 'AL-GHARAFA'),
(2, 'SPORTS CITY'),
(3, 'EDUCATION CITY'),
(4, 'KHALIFA INTERNATIONAL'),
(5, 'UMM SLAL'),
(6, 'QATAR UNIVERSITY'),
(7, 'AL-RAYYAN'),
(8, 'AL-WAKRAH'),
(9, 'AL-KHOR'),
(10, 'AL-SHAMAL'),
(11, 'LUSAIL ICONIC'),
(12, 'DOHA PORT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `Id_Grupo` decimal(4,0) NOT NULL,
  `Nombre_Grupo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`Id_Grupo`, `Nombre_Grupo`) VALUES
('1', 'GRUPO A'),
('2', 'GRUPO B'),
('3', 'GRUPO C'),
('4', 'GRUPO D'),
('5', 'GRUPO E'),
('6', 'GRUPO F'),
('7', 'GRUPO G'),
('8', 'GRUPO H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `Id_Jugador` decimal(4,0) NOT NULL,
  `Nombre_Jugador` varchar(50) NOT NULL,
  `Id_Puesto` decimal(4,0) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Dorsal` int(11) NOT NULL,
  `Id_Seleccion` decimal(2,0) NOT NULL,
  `Id_Club` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`Id_Jugador`, `Nombre_Jugador`, `Id_Puesto`, `Edad`, `Dorsal`, `Id_Seleccion`, `Id_Club`) VALUES
('1', 'Marc Andre Ter Stegen', '1', 28, 1, '1', '9'),
('2', 'Lionel', '4', 32, 10, '1', '1'),
('20', 'Zairy', '2', 30, 8, '10', '5'),
('105', 'Nicole', '1', 20, 10, '2', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `Id_Pais` decimal(4,0) NOT NULL,
  `Nombre_Pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`Id_Pais`, `Nombre_Pais`) VALUES
('1', 'AFGANISTAN'),
('2', 'ALBANIA'),
('3', 'ALEMANIA'),
('4', 'ANDORRA'),
('5', 'ANGOLA'),
('6', 'ANTIGUA Y BARBUDA'),
('7', 'ARABIA SAUDITA'),
('8', 'ARGELIA'),
('9', 'ARGENTINA'),
('10', 'ARMENIA'),
('11', 'AUSTRALIA'),
('12', 'AUSTRIA'),
('13', 'AZERBAIYÁN'),
('14', 'BAHAMAS'),
('15', 'BARBADOS'),
('16', 'BELGICA'),
('17', 'BELICE'),
('18', 'BENIN'),
('19', 'BIELORRUSIA'),
('20', 'BIRMANIA'),
('21', 'BOLIVIA'),
('22', 'BOSNIA-HERZEGOVINA'),
('23', 'BRASIL'),
('24', 'BULGARIA'),
('25', 'CABO VERDE'),
('26', 'CAMBOYA'),
('27', 'CAMERUN'),
('28', 'CANADA'),
('29', 'REPUBLICA CHECA'),
('30', 'CHILE'),
('31', 'CHINA'),
('32', 'CHIPRE'),
('33', 'COLOMBIA'),
('34', 'COREA DEL SUR'),
('35', 'COREA DEL NORTE'),
('36', 'COSTA DE MARFIL'),
('37', 'COSTA RICA'),
('38', 'CROACIA'),
('39', 'CUBA'),
('40', 'DINAMARCA'),
('41', 'REPUBLICA DOMINICANA'),
('42', 'ECUADOR'),
('43', 'EGIPTO'),
('44', 'EL SALVADOR'),
('45', 'EMIRATOS ARABES UNIDOS'),
('46', 'ESLOVAQUIA'),
('47', 'ESLOVENIA'),
('48', 'ESPAÑA'),
('49', 'ESTADOS UNIDOS DE AMERICA'),
('50', 'ESTONIA'),
('51', 'FILIPINAS'),
('52', 'FINLANDIA'),
('53', 'FRANCIA'),
('54', 'GEORGIA'),
('55', 'GHANA'),
('56', 'GRAN BRETAÑA'),
('57', 'GRANADA'),
('58', 'GRECIA'),
('59', 'GUATEMALA'),
('60', 'HAITI'),
('61', 'HONDURAS'),
('62', 'HUNGRIA'),
('63', 'INDIA'),
('64', 'INDONESIA'),
('65', 'IRAN'),
('66', 'IRAQ'),
('67', 'IRLANDA'),
('68', 'ISLANDIA'),
('69', 'ISRAEL'),
('70', 'ITALIA'),
('71', 'JAMAICA'),
('72', 'JAPON'),
('73', 'JORDANIA'),
('74', 'KENIA'),
('75', 'MACEDONIA'),
('76', 'MADAGASCAR'),
('77', 'MALTA'),
('78', 'MARRUECOS'),
('79', 'MEXICO'),
('80', 'NEPAL'),
('81', 'NICARAGUA'),
('82', 'NIGERIA'),
('83', 'NORUEGA'),
('84', 'NUEVA ZELANDA'),
('85', 'OMAN'),
('86', 'PAISES BAJOS'),
('87', 'PANAMA'),
('88', 'PARAGUAY'),
('89', 'PERU'),
('90', 'POLONIA'),
('91', 'PORTUGAL'),
('92', 'PUERTO RICO'),
('93', 'QATAR'),
('94', 'RUMANIA'),
('95', 'RUSIA'),
('96', 'SAMOA'),
('97', 'SENEGAL'),
('98', 'SERBIA'),
('99', 'SINGAPUR'),
('100', 'SIRIA'),
('101', 'SUDAFRICA'),
('102', 'SUECIA'),
('103', 'SUIZA'),
('104', 'TAILANDIA'),
('105', 'TUNEZ'),
('106', 'TURQUIA'),
('107', 'UCRANIA'),
('108', 'UGANDA'),
('109', 'URUGUAY'),
('110', 'VENEZUELA'),
('111', 'VIETNAM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `Id_Puesto` decimal(4,0) NOT NULL,
  `Descripcion_Puesto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`Id_Puesto`, `Descripcion_Puesto`) VALUES
('1', 'PORTERO'),
('2', 'DEFENSA'),
('3', 'MEDIO CAMPISTA'),
('4', 'DELANTERO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranking`
--

CREATE TABLE `ranking` (
  `Id_Ranking` int(11) NOT NULL,
  `Id_Seleccion` decimal(2,0) NOT NULL,
  `Puntos` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seleccion`
--

CREATE TABLE `seleccion` (
  `Id_Seleccion` decimal(2,0) NOT NULL,
  `Nombre_Seleccion` varchar(50) NOT NULL,
  `Id_Grupo` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seleccion`
--

INSERT INTO `seleccion` (`Id_Seleccion`, `Nombre_Seleccion`, `Id_Grupo`) VALUES
('1', 'ALEMANIA', '6'),
('2', 'FRANCIA', '3'),
('3', 'SENEGAL', '8'),
('5', 'Nigeria', '4'),
('10', 'EspaÃ±a', '4'),
('15', 'Francia', '4'),
('20', 'Hungria', '7'),
('32', 'ARGENTINA', '4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`Id_Club`),
  ADD KEY `FK_Id_Pais` (`Id_Pais`);

--
-- Indices de la tabla `estadios`
--
ALTER TABLE `estadios`
  ADD PRIMARY KEY (`Id_Estadio`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`Id_Grupo`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`Id_Jugador`),
  ADD KEY `FK_Id_Posicion` (`Id_Puesto`),
  ADD KEY `FK_Id_Seleccion_J` (`Id_Seleccion`),
  ADD KEY `FK_Id_Club_J` (`Id_Club`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`Id_Pais`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`Id_Puesto`);

--
-- Indices de la tabla `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`Id_Ranking`),
  ADD KEY `FK_Id_Seleccion_R` (`Id_Seleccion`);

--
-- Indices de la tabla `seleccion`
--
ALTER TABLE `seleccion`
  ADD PRIMARY KEY (`Id_Seleccion`),
  ADD KEY `FK_Id_Grupo` (`Id_Grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estadios`
--
ALTER TABLE `estadios`
  MODIFY `Id_Estadio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ranking`
--
ALTER TABLE `ranking`
  MODIFY `Id_Ranking` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `FK_Id_Pais` FOREIGN KEY (`Id_Pais`) REFERENCES `pais` (`Id_Pais`);

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `FK_Id_Club_J` FOREIGN KEY (`Id_Club`) REFERENCES `club` (`Id_Club`),
  ADD CONSTRAINT `FK_Id_Posicion` FOREIGN KEY (`Id_Puesto`) REFERENCES `puesto` (`Id_Puesto`),
  ADD CONSTRAINT `FK_Id_Seleccion_J` FOREIGN KEY (`Id_Seleccion`) REFERENCES `seleccion` (`Id_Seleccion`);

--
-- Filtros para la tabla `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `FK_Id_Seleccion_R` FOREIGN KEY (`Id_Seleccion`) REFERENCES `seleccion` (`Id_Seleccion`);

--
-- Filtros para la tabla `seleccion`
--
ALTER TABLE `seleccion`
  ADD CONSTRAINT `FK_Id_Grupo` FOREIGN KEY (`Id_Grupo`) REFERENCES `grupo` (`Id_Grupo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

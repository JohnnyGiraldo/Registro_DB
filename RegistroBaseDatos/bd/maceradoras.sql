-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2023 a las 18:56:43
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
-- Base de datos: `alkamedica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maceradoras`
--

CREATE TABLE `maceradoras` (
  `MODELO` varchar(255) NOT NULL,
  `SERIAL` varchar(255) NOT NULL,
  `PAIS` varchar(255) NOT NULL,
  `CIUDAD` varchar(255) NOT NULL,
  `INSTITUCION` varchar(255) NOT NULL,
  `TELEFONO` int(20) NOT NULL,
  `DIRECCION` varchar(255) NOT NULL,
  `UBICACIÓN` varchar(255) NOT NULL,
  `PISO` varchar(5) NOT NULL,
  `CUARTO` varchar(255) NOT NULL,
  `TIPO DE ASISTENCIA` varchar(255) NOT NULL,
  `FECHA FABRICACION` date NOT NULL,
  `FECHA INSTALACION` date NOT NULL,
  `TIPO DE MANTENIMIENTO` varchar(255) NOT NULL,
  `FECHA DE MANTENIMIENTO` date NOT NULL,
  `CAMBIO DE PIEZAS` date NOT NULL,
  `TIPO DE PIEZA` varchar(255) NOT NULL,
  `NUMERO DE CICLOS` int(10) NOT NULL,
  `ESTADO DEL EQUIPO` varchar(255) NOT NULL,
  `PIEZAS CAMBIADAS` varchar(255) NOT NULL,
  `FECHA DE DAÑO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `maceradoras`
--
ALTER TABLE `maceradoras`
  ADD PRIMARY KEY (`SERIAL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 07:28 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spending_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `cantidad` float(8,2) NOT NULL,
  `categoria` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gastos`
--

INSERT INTO `gastos` (`id`, `cantidad`, `categoria`, `fecha`, `descripcion`) VALUES
(1, 20.00, 3, '2022-11-07 01:20:04', 'gansito'),
(2, 15.00, 3, '2022-11-15 05:35:17', 'coca cola'),
(3, 10.00, 3, '2022-11-07 01:21:34', 'agua'),
(4, 32.00, 4, '2022-11-07 03:10:57', 'renta'),
(5, 55.00, 4, '2022-11-07 02:56:57', 'desayuno');

-- --------------------------------------------------------

--
-- Table structure for table `gastos_categoria`
--

CREATE TABLE `gastos_categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gastos_categoria`
--

INSERT INTO `gastos_categoria` (`id`, `nombre`) VALUES
(1, 'sin categoria'),
(2, 'viáticos'),
(3, 'despensa'),
(4, 'gastos fijos'),
(5, 'diversion'),
(9, 'Transporte');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `password`, `telefono`, `nombre`, `status`) VALUES
(1, 'justinbieber@gmail.com', 'justin123', '1234567895', 'justin bieber', 1),
(9, 'brisitap@gmail.com', '', '3339948109', 'Brisa', 1),
(10, 'karensglez13@gmail.com', 'Hellokitty666', '934898643502', 'Karen S', 1),
(11, 'angie123@gmail.com', 'angie123', '03439042030', 'angie velazco', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gastos_categoria`
--
ALTER TABLE `gastos_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gastos_categoria`
--
ALTER TABLE `gastos_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

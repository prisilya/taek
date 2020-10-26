-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 10:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ic` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ic`, `psw`) VALUES
('admin', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `kebun`
--

CREATE TABLE `kebun` (
  `id_kebun` int(11) NOT NULL,
  `k_name` varchar(100) NOT NULL,
  `k_ic` varchar(12) NOT NULL,
  `k_grade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebun`
--

INSERT INTO `kebun` (`id_kebun`, `k_name`, `k_ic`, `k_grade`) VALUES
(3, 'JANNY', '124578963258', 'YELLOW GREEN BAR');

-- --------------------------------------------------------

--
-- Table structure for table `penaga`
--

CREATE TABLE `penaga` (
  `id_p` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_ic` varchar(12) NOT NULL,
  `p_grade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penaga`
--

INSERT INTO `penaga` (`id_p`, `p_name`, `p_ic`, `p_grade`) VALUES
(1, 'DOL DOLY', '784596123699', 'GREEN'),
(2, 'RA RA', '012365897455', 'RED');

-- --------------------------------------------------------

--
-- Table structure for table `p_sgdua`
--

CREATE TABLE `p_sgdua` (
  `id_paysgdua` int(11) NOT NULL,
  `ic_sgdua` varchar(12) NOT NULL,
  `n_sgdua` varchar(100) NOT NULL,
  `jan` varchar(100) NOT NULL,
  `feb` varchar(100) NOT NULL,
  `mar` varchar(100) NOT NULL,
  `apr` varchar(100) NOT NULL,
  `may` varchar(100) NOT NULL,
  `jun` varchar(100) NOT NULL,
  `jul` varchar(100) NOT NULL,
  `aug` varchar(100) NOT NULL,
  `sep` varchar(100) NOT NULL,
  `oct` varchar(100) NOT NULL,
  `nov` varchar(100) NOT NULL,
  `dis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seri`
--

CREATE TABLE `seri` (
  `id_seri` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_ic` varchar(12) NOT NULL,
  `s_grade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seri`
--

INSERT INTO `seri` (`id_seri`, `s_name`, `s_ic`, `s_grade`) VALUES
(4, 'AMELIA JON', '024578963145', 'YELLOW');

-- --------------------------------------------------------

--
-- Table structure for table `sgdua`
--

CREATE TABLE `sgdua` (
  `id_sgdua` int(11) NOT NULL,
  `n_sgdua` varchar(100) NOT NULL,
  `ic_sgdua` varchar(12) NOT NULL,
  `grade_sgdua` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sgdua`
--

INSERT INTO `sgdua` (`id_sgdua`, `n_sgdua`, `ic_sgdua`, `grade_sgdua`) VALUES
(1, 'JAMES', '963214569877', 'WHITE'),
(2, 'ALAIA', '984568712354', 'BLUE'),
(3, 'JOHN', '114785902355', 'GREEN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ic`);

--
-- Indexes for table `kebun`
--
ALTER TABLE `kebun`
  ADD PRIMARY KEY (`id_kebun`),
  ADD UNIQUE KEY `k_ic` (`k_ic`);

--
-- Indexes for table `penaga`
--
ALTER TABLE `penaga`
  ADD PRIMARY KEY (`id_p`),
  ADD UNIQUE KEY `p_ic` (`p_ic`);

--
-- Indexes for table `p_sgdua`
--
ALTER TABLE `p_sgdua`
  ADD PRIMARY KEY (`id_paysgdua`);

--
-- Indexes for table `seri`
--
ALTER TABLE `seri`
  ADD PRIMARY KEY (`id_seri`),
  ADD UNIQUE KEY `s_ic` (`s_ic`);

--
-- Indexes for table `sgdua`
--
ALTER TABLE `sgdua`
  ADD PRIMARY KEY (`id_sgdua`),
  ADD UNIQUE KEY `ic_sgdua` (`ic_sgdua`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kebun`
--
ALTER TABLE `kebun`
  MODIFY `id_kebun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `penaga`
--
ALTER TABLE `penaga`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `p_sgdua`
--
ALTER TABLE `p_sgdua`
  MODIFY `id_paysgdua` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seri`
--
ALTER TABLE `seri`
  MODIFY `id_seri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sgdua`
--
ALTER TABLE `sgdua`
  MODIFY `id_sgdua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

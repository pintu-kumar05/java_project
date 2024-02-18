-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 11:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `v2_bitssewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `oname` varchar(255) DEFAULT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `cphone` varchar(255) NOT NULL,
  `cemail` varchar(255) DEFAULT NULL,
  `caddress` varchar(255) DEFAULT NULL,
  `cpin` varchar(255) DEFAULT NULL,
  `cstate` varchar(255) DEFAULT NULL,
  `cpan` varchar(255) DEFAULT NULL,
  `ccreatepass` varchar(255) DEFAULT NULL,
  `cconfpass` varchar(255) DEFAULT NULL,
  `cfee` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`oname`, `cname`, `cphone`, `cemail`, `caddress`, `cpin`, `cstate`, `cpan`, `ccreatepass`, `cconfpass`, `cfee`) VALUES
('abc', 'dR. abc', '8986639495', 'abc@gmail.com', 'Sindri', '828122', 'JH', 'SJFB343S', '1234', '1234', '1000'),
('Nikhil Singh', 'Dr. Nikhil', '9155940740', 'emnikhilsingh@gmail.com', 'BIT SINDRI', '838123', 'Jharkhand', 'JDH762', '1234', '1234', '1000'),
('Nikhil Singh', 'Dr. Nikhil OD', '9431129155', 'nikhilsingh319@gmail.com', 'Rajghat, Odissa', '757055', 'Odissa', 'JHD8472', '1234', '1234', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_name` varchar(255) DEFAULT NULL,
  `p_phone` varchar(255) DEFAULT NULL,
  `Age` int(5) NOT NULL,
  `p_date` varchar(255) DEFAULT NULL,
  `p_address` varchar(255) DEFAULT NULL,
  `test_name` varchar(255) DEFAULT NULL,
  `test_report` varchar(255) DEFAULT NULL,
  `c_phone` varchar(255) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `p_state` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_name`, `p_phone`, `Age`, `p_date`, `p_address`, `test_name`, `test_report`, `c_phone`, `rating`, `p_state`) VALUES
('Nikhil', '9155940740', 23, '2023-03-27', 'Sindri', 'Test 1', '11', '9155940740', '0', NULL),
('Nikhil', '9155940740', 23, '2023-03-27', 'Sindri', 'Test 2', '123', '9155940740', '1', NULL),
('Nikhil', '9155940740', 23, '2023-03-27', 'Sindri', 'Test 1234', '2323', '9155940740', '2', NULL),
('Nikhil', '9155940740', 23, '2023-03-27', 'Sindri', 'Test 3', '', '9155940740', '3', NULL),
('Nikhil Singh', '9155940740', 24, '2023-04-03', 'Sindri', 'Blood Group', 'A+', '9155940740', '0', NULL),
('Nikhil Singh', '9155940740', 24, '2023-04-03', 'Sindri', 'Sugar', '100', '9155940740', '1', NULL),
('Nikhil Singh', '9155940740', 24, '2023-04-03', 'Sindri', 'Blood Pressure', '80.2265', '9155940740', '3', NULL),
('Nikhil Singh', '9155940740', 24, '2023-04-03', 'Sindri', 'FFFF', '0.021', '9155940740', '2', NULL),
('Nikhil', '9155940740', 24, '2023-04-03', 'Sindri', 'Sugar', '120', '9155940740', '2', NULL),
('Nikhil', '9155940740', 24, '2023-04-03', 'Sindri', 'Blood Pressure', '545', '9155940740', '3', NULL),
('nikhil', '9155940740', 24, '2023-04-03', 'sindri', 'BLOOD PRESSURE', '100', '9155940740', '1', NULL),
('nikhil', '9155940740', 24, '2023-04-03', 'sugar', 'sugar', '44', '9155940740', '3', NULL),
('nikhil', '9155940740', 24, '2023-04-04', 'sindri', 'sugar', '200', '9155940740', '3', NULL),
('akash kumar', '8102169678', 21, '2023-04-04', 'DHANBAD', 'BLOOD GROUP', 'b+', '9155940740', '0', NULL),
('akash kumar', '8102169678', 21, '2023-04-04', 'DHANBAD', 'SUAGR', '100', '9155940740', '1', NULL),
('akash kumar', '8102169678', 21, '2023-04-04', 'DHANBAD', 'BLOOD PRESURE', '66.2', '9155940740', '2', NULL),
('Navneet', '11111', 21, '2023-04-06', 'sindri', 'PAIN in left leg', 'Move 60mg', '9155940740', '0', NULL),
('Navneet', '11111', 21, '2023-04-06', 'sindri', 'Neck pain', 'Pain killer 20mg', '9155940740', '0', NULL),
('Navneeet', '11111', 20, '2023-04-06', 'Dhanabd', 'T!', '777', '9431129155', '0', NULL),
('nikhil singh', '9155940740', 22, '2023-04-11', 'sindri', 'test1', 'test1', '9155940740', '0', 'JH'),
('nikhil singh', '9155940740', 22, '2023-04-11', 'sindri', 'test2', 'test2', '9155940740', '1', 'JH'),
('NIKHIL SINGH', '9155940740', 45, '2023-04-11', 'dfsf', 'fdgfd', 'dfg', '9155940740', '3', 'BR'),
('BEDIYA', '8002689024', 22, '2023-04-12', 'SINDRI', 'SUGAR', '180', '9155940740', '3', 'JH'),
('BEDIYA', '8002689024', 22, '2023-04-12', 'SINDRI', '', 'EAT SOME HEALTY FOOD, DO NOT EAT POTATOES, RICE.', '9155940740', '0', 'JH'),
('NIKHI,L', '9155940740', 33, '2023-04-13', 'sindri', 'test1', 'test1', '9155940740', '1', 'JH'),
('NIKHIL', '9155940740', 22, '2023-04-13', 'sdsd', 'test1', 'test1', '9155940740', '1', 'JH'),
('NIK', '1234567890', 22, '2023-04-13', 'ii', 'TEST1', '11', '9155940740', '1', 'JH'),
('BEDIYA', '0000000000', 22, '2023-04-13', 'sindri', 'TEST2', '222', '9155940740', '1', 'JH'),
('NIKHIL SINGH', '9155940740', 55, '2023-04-14', 'gua', 'TEST2', '12364', '9155940740', '1', 'JH'),
('YYYU', '1234567890', 44, '2023-04-14', 'gua', 'TEST2', 'www', '9155940740', '1', 'JH'),
('YYYU', '1234567890', 44, '2023-04-14', 'gua', 'TEST2', 'ffff', '9155940740', '2', 'JH'),
('YYYU', '1234567890', 44, '2023-04-14', 'gua', 'TEST2', 'rrr', '9155940740', '0', 'JH'),
('FRSEDF', '1234567890', 22, '2023-04-14', 'ddd', 'TEST2', 'shbd', '9155940740', '2', 'JH'),
('FRSEDF', '1234567890', 22, '2023-04-14', 'ddd', 'TEST2', 'dsf', '9155940740', '0', 'JH'),
('FRSEDF', '1234567890', 22, '2023-04-14', 'ddd', 'TEST2', 'dsfdf', '9155940740', '0', 'JH'),
('FDG', '1234567899', 23, '2023-04-14', 'bihar', 'TEST2-BR', 'dfv', '9155940740', '0', 'BR'),
('FDG', '1234567899', 23, '2023-04-14', 'bihar', 'TEST2-BR', 'xc', '9155940740', '0', 'BR'),
('FDG', '1234567899', 23, '2023-04-14', 'bihar', 'TEST2-BR', '', '9155940740', '0', 'BR'),
('FDG', '1234567899', 23, '2023-04-14', 'bihar', 'TEST2-BR', '', '9155940740', '0', 'BR'),
('NIKHIL`', '9155940740', 10, '2023-04-16', 'sindri', 'TEST1', 'hsdf', '9155940740', '0', 'JH'),
('AKASH', '787878787878', 20, '2023-05-05', 'DHANBAD', 'AKASH', 'tesst', '9431129155', '1', 'JH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`cphone`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD KEY `c_phone` (`c_phone`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`c_phone`) REFERENCES `clinic` (`cphone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

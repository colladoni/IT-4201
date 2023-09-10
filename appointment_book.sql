-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 06:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '@admin1');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Appointment_ID` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Appointment_ID`, `Patient_ID`, `lname`, `fname`, `mname`, `date`, `time`, `purpose`) VALUES
(114, 11, 'Parchaso', 'Jhon', 'Joseph', '2023-05-18', '10:50:00', 'extract'),
(115, 11, 'Parchaso', 'Jhon', 'Joseph', '2023-05-25', '11:00:00', 'check up'),
(116, 12, 'rixielie', 'potot', 'travero', '2023-05-19', '11:00:00', 'Singapore'),
(117, 13, 'Collado', 'Justin Rey', 'Austiro', '2023-05-27', '11:46:00', 'patuli'),
(118, 16, 'Parchaso', 'Jhon', 'Espana', '2023-05-20', '09:39:00', 'check up');

-- --------------------------------------------------------

--
-- Table structure for table `patient_profile`
--

CREATE TABLE `patient_profile` (
  `Patient_ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `patient_lname` varchar(50) NOT NULL,
  `patient_mname` varchar(50) NOT NULL,
  `patient_fname` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `email_add` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_profile`
--

INSERT INTO `patient_profile` (`Patient_ID`, `username`, `password`, `patient_lname`, `patient_mname`, `patient_fname`, `birth_date`, `gender`, `contact_num`, `email_add`) VALUES
(11, 'parch', '202cb962ac59075b964b07152d234b70', 'Parchaso', 'Joseph', 'Jhon', '1000-01-01', 'Male', '0912345668', 'jj@usc.com'),
(12, 'Rix', '5612520a8296fbfa796480afbc28c96f', 'rixielie', 'travero', 'potot', '2000-04-05', 'Female', '09950217941', 'rix@potot.com'),
(13, 'colladoni', '062c325c435cb2342951d9dd1da6144f', 'Collado', 'Austiro', 'Justin Rey', '1999-09-20', 'Male', '09123124', 'colasdfasd@mail.com'),
(14, 'wixxx', '81dc9bdb52d04dc20036dbd8313ed055', 'Potot', 'Trav', 'Rix', '2000-04-05', 'Female', '0912345678', 'potot@gmail.com'),
(15, 'bakol', '202cb962ac59075b964b07152d234b70', 'Collado', 'Rey', 'Justin', '2012-12-12', 'Female', '0912345678', 'collado@usc.com'),
(16, 'jhparchaso', '5f4dcc3b5aa765d61d8327deb882cf99', 'Parchaso', 'Espana', 'Jhon', '1999-08-17', 'Male', '09055626339', 'parch@usc.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Appointment_ID`),
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `patient_profile`
--
ALTER TABLE `patient_profile`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Appointment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `patient_profile`
--
ALTER TABLE `patient_profile`
  MODIFY `Patient_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`Patient_ID`) REFERENCES `patient_profile` (`Patient_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

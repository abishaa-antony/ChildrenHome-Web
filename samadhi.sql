-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 07:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samadhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` int(11) NOT NULL,
  `initial` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `initial`, `name`, `dob`, `gender`, `image`) VALUES
(4, 'Annet Abishaa', 'abis', '2021-08-11', 'Male', '');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `number` bigint(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `address`, `number`, `type`, `amount`, `date`) VALUES
(3, 'Annet Abishaa', 'vvvvvv', 762844661, 'Cash', '30000.00', '2021-08-27'),
(4, 'Annet Abishaa', 'vvvvvv', 762834161, 'Cash', '60000.00', '2021-09-02'),
(5, 'Annet Abishaa', 'xxxxxxxx', 762821161, 'Cash', '30000.00', '2021-08-27'),
(7, 'abi', 'vvvvvv', 762814361, 'Cash', '300000.00', '2021-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE `labor` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `company` varchar(15) NOT NULL,
  `salary` decimal(14,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`id`, `fullname`, `fname`, `bdate`, `gender`, `contact`, `address`, `company`, `salary`) VALUES
(1, ' Annet Abishaa', ' abi', '2021-08-28', 'Female', 762811161, 'colombo', 'Sunshine', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'abi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `initial` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `nic` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `post` varchar(30) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `lname`, `initial`, `dob`, `nic`, `gender`, `contact`, `address`, `email`, `post`, `image`) VALUES
(1, 'abi', 'antony', 'Annet Abishaa', '2021-08-19', '200081800812', 'Female', 762811161, 'vvvvvv', 'antonyabishaa@gmail.com', '', ''),
(2, 'abi', 'antony', 'Annet Abishaa', '2021-08-19', '200351600812', 'Female', 762811161, 'vvvvvv', 'antonyabishaa@gmail.com', '', ''),
(3, 'abi', 'antony', 'Annet Abishaa', '2021-08-10', '200046564267', 'Female', 762811161, 'vvvvvv', 'kavihana884@gmail.com', '', 0x6261636b5f623236312e6a7067),
(7, ' aaaa', 'skcjs', ' scksic', '2021-08-18', '200053435464', 'Female', 762811161, 'vvvvvv', 'antonyabishaa@gmail.com', 'Select', ''),
(8, '  abi', 'antony', '  Annet Abishaa', '2021-08-04', '302098989898', 'Female', 762811161, 'colombo', 'antonyabishaa@gmail.com', 'Select', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labor`
--
ALTER TABLE `labor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `labor`
--
ALTER TABLE `labor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

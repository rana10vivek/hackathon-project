-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2017 at 05:46 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `email`, `mobile`, `password`, `gender`, `status`) VALUES
('Bhanu ', 'Pratap', 'bpraghav@gmail.com', 2147483647, 'qwerty', 'Male', ''),
('Vaibhav', 'Thirwani', 'vibhu@bhanu.com', 1234567890, 'bhanu', 'Male', ''),
('Surinder', 'Rajput', 'surinder@rajput.com', 12345689, 'surinder', 'Male', ''),
('fxfd', 'n mn', 'rock@abc.com', 1, 'pass', 'Male', ''),
('a', 'b', 'ab@cd.com', 12345689, 'abc', 'Male', ''),
('as', 'as', 'ab@cd.com', 2147483647, 'asd', 'Male', ''),
('AS', 'SA', 'rocktimvrajkhowa@gmail.com', 12, 'AS', 'Male', ''),
('as', 'as', 'ab@cd.com', 12345, 'qwerty', 'Male', ''),
('Himanshi', 'Goyat', '14.himanshi@gmail.com', 2147483647, 'himanshi123', 'Female', ''),
('Yashi', 'Gupta', 'yashi@gupta.com', 2147483647, 'yashi', 'Female', ''),
('abc', 'cds', 'bhanu@pratap.com', 12233435, 'abc', 'Male', ''),
('Rocktim Vijay', 'Rajkhowa', 'rocktimvrajkhowa@hotmail.com', 2147483647, 'rocktim12', 'Male', ''),
('Manoj', 'Parmar', 'manoj@parmar.com', 2147483647, 'jsbfj', 'Male', ''),
('Padi', 'Kobing', 'kobing@abc.com', 122322123, 'PASSWORD', 'Male', ''),
('Padi', 'Kobing', 'kobing@abc.com', 122322123, 'PASSWORD', 'Male', ''),
('Vijay', 'Singh', 'vijay@abc.com', 13134, 'abc', 'Male', ''),
('Ajay', 'Singh', 'ajay@singh.com', 144545565, '12345', 'Male', ''),
('Ajay', 'Singh', 'ajay@singh.com', 1242525, 'qwerty', 'Male', ''),
('Sarfraz', 'Rana', 'sarfraz@chutia.com', 263543247, 'rock', 'Male', ''),
('Sarfraz', 'Rana', 'sarfraz@chutia.com', 263543247, 'abc', 'Male', ''),
('Rocktim', 'Vijay', 'rocktimvrajkhowa@hotmail.com', 2147483647, 'wer', 'Male', ''),
('qwerty', 'uiop', 'qwerty@bhanu.com', 12112334, 'qwertyhn', 'Male', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

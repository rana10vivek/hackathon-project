-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 05:53 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges_zonewise`
--

CREATE TABLE `colleges_zonewise` (
  `CollegeName` varchar(250) NOT NULL,
  `State` varchar(150) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Courses` varchar(500) NOT NULL,
  `Duration` varchar(150) NOT NULL,
  `About` varchar(1000) NOT NULL,
  `ZONE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges_zonewise`
--

INSERT INTO `colleges_zonewise` (`CollegeName`, `State`, `Website`, `Courses`, `Duration`, `About`, `ZONE`) VALUES
('J&K Computer Center', 'J&K', 'www.jkcc.com', '1.Computer Basics(Rs.5000)\r\n2.Typing(Rs.3000)\r\n3.Hardware Repairing(Rs.5000) \r\n3.', '1.Computer Basics(6months)\r\n2.Typing(3months)\r\n3.Hardware Repairing(8months) ', 'The J&K College is situated to the extreme North Zone. It provides specialisations and certification on different vocational courses.The college also helps in the future prospect of the candidates by arranging jobs for the same.', 'NORTH'),
('Goa Training Centre', 'GOA', 'www.goatc.com', '1.Life Guard (Rs.3000)\r\n2.Electronics (Rs.8000)', '1.Life Guard-Swimming is mandatory (3months)\r\n2.Electronics (8months)', 'The Goa Training Centre have been very helpful for the illiterate youth providing them the course of Life Guard which requires no pre-requisite qualification.The institute has also excelled in the field  of Electronics, producing a number of electricians per year.', 'WEST'),
('Andhara Training Institute', 'ANDHARA PRADESH', 'www.ati.com', '1.Tailoring(Rs.3000)\r\n2.Banking(Rs.10000)', '1.Tailoring(3months)\r\n2.Banking(1yr)', 'The Andhara Training Institute focuses on the banking sector to provide a field of opportunities and better future prospect.', 'SOUTH'),
('Chattisgarh Computer Centre', 'CHATTISGARH', 'www.ccc.com', '1.Typing (Rs.2000)\r\n2.Basics (Rs.3000)', '1.Typing(3months)\r\n2.Basics(5months)', 'The Chattisgarh Computer Centre provides vocational courses in the field of computers.', 'CENTRAL'),
('Bihar Tailoring Centre', 'BIHAR', 'www.btc.com', 'They provide Vocational Courses related to the field of Tailoring.', 'With Respect to the course opted(max.8month)', 'The Bihar Tailoring Centre focuses on the Women Empowerment and that house wives don''t really remain house wives and earn by working from home. They also provide free Tailoring Machine during the course duration.', 'EAST'),
('Assam Handicraft Centre', 'ASSAM', 'www.ahc.com', 'They provide Vocational Courses those which are related to the field of Handicrafts. It includes hand made ornaments, handlooms, hand stitched clothes.', 'Maximum 1 yr', 'This provides an unique platform of Vocational Courses and good amount of earning with crafting that is which is entertainment and enjoyable.', 'NORTH EAST');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

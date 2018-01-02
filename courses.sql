-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 05:57 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `College` varchar(500) NOT NULL,
  `Course` varchar(500) NOT NULL,
  `Website` varchar(500) NOT NULL,
  `Type` text NOT NULL,
  `City` varchar(500) NOT NULL,
  `Duration` varchar(500) NOT NULL,
  `Fee` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`College`, `Course`, `Website`, `Type`, `City`, `Duration`, `Fee`) VALUES
('1. Bharat Computer Center\r\n2. Dergaon Kamal College\r\n3. P.N data System Computer Training Institute', 'Certificate Course in Computer Basics', '1.www.bcc.com\r\n2.www.dkc.com\r\n3.www.pni.com', 'A', '1.Delhi\r\n2.Assam\r\n3.Kolkata', '6 months', '8000'),
('1.Uttrakhand Open University', 'Advance Certificate Course in Industrial Training', '1.www.uou.com', 'A', '1.Uttrakhand', '6months', '5000'),
('1.Aggarwal College\r\n2.Bharat Computer Center\r\n3.Bharat Sevak Samaj IT Mission\r\n4.Compusoft Computer Education', 'Certificate Course in Computer Hardware', '1.www.agg.com\r\n2.www.bcc.com\r\n3.www.bssm.com\r\n4.www.cce.com', 'A', '1.Delhi\r\n2.Gurgaon\r\n3.Noida\r\n4.Delhi', '8months', '9000'),
('1.Krishna Kanta Handique State Open\r\n2.High-Tech Institute Gurgaon', 'Certificate Course in Mobile Repairing', '1.www.kkhso.com\r\n2.www.htig.com', 'A', '1.Guwahati\r\n2.Gurgaon', '1yr', '12000'),
('1.Institute of Intellectual Property Studies', 'Certificate Course in Technology Transfer and Licensing', '1.www.iips.com', 'A', 'Bangalore', '15000', '1yr'),
('1.Dr.Bhim Rao Ambedkar University\r\n2.Gokhale Memorial Girls'' College\r\n3.Panjab University', 'B.A in Advertising,Sales Promotion & Sales Management', '1.www.dbrau.com\r\n2.www.gmgc.com\r\n3.www.pu.com', 'B', '1.Gujarat\r\n2.Delhi\r\n3.Punjab', '2yr', '100000'),
('1.Chaudhary Charan Singh University\r\n2.Guru Nanak Dev University\r\n3.Symbiosis International University', 'Advanced Diploma in English Communication & Presentation Skills', '1.www.ccsu.com\r\n2.www.gndu.com\r\n3.www.siu.com', 'B', '1.Punjab\r\n2.Delhi\r\n3.Bangalore', '3yrs', '150000'),
('1.Renaissance Institute of Technology & Management\r\n2.Rai University Gujarat\r\n3.Consult Inn-Institute of Hotel Management', 'Diploma in Restaurant Service', '1.www.ritm.com\r\n2.www.rug.com\r\n3.www.ciihm.com', 'B', '1.Chennai\r\n2.Gujarat\r\n3.Kolkata', '3yr', '200000'),
('1.Dr. Zakir Husain Institute\r\n2.Aartissan Academy of Multimedia & Animation\r\n3.Gecko Animation Studios', 'Certificate Course in Advertising Design', '1.www.zakir.com\r\n2.www.aama.com\r\n3.www.gas.com', 'B', '1.Delhi\r\n2.Chennai\r\n3.Mumbai', '1yr', '100000'),
('1.Indira Gandhi National Open University\r\n2.Maharani Kishori Jat Kanya Mahavidyalaya', 'Certificate Course in Craft & Design ', '1.www.ignou.com\r\n2.www.mkjkm.com', 'B', '1.Multiple Locations in India\r\n2.Delhi', '8months', '50000'),
('1.Arunachal University of Studies\r\n', 'B.Voc Hospitality & Tourism', '1.www.aus.com', 'C', '1.Arunachal Pradesh', '2yrs', '150000'),
('1.Indian Film & Television Institute\r\n2.M.J.P Rohilkhand University\r\n3.PCM S.D College for Women\r\n4.Sadhna Academy for Media Studies', 'Diploma in Television & Video Production', '1.www.ifti.com\r\n2.www.mru.com\r\n3.www.pcw.com\r\n4.www.sams.com', 'C', '1.Mumbai\r\n2.Nagpur\r\n3.Pune\r\n4.Mumbai', '3yr', '200000'),
('1.Dr. Zakir Hussain Institute\r\n2.Brevity International Institute of Management & TEchnology', 'Certificate for Corporate Communications', '1..www.zakir.com\r\n2.www.biimt.com', 'C', '1.Delhi\r\n2.Bangalore', '8months', '50000'),
('1.St.Xavier''s College of Mumbai', 'B.Voc Tourism', '1.www.sxcm.com', 'C', '1.Mumbai', '2yr', '150000'),
('1.St. Xavier''s College of Mumbai', 'Diploma in International Culinary Arts & Entrepreneurship', '1.www.sxcm.com', 'C', '1.Mumbai', '2yr', '150000'),
('1.Ahimsa Women Polytechnic\r\n2.AirForce Vocational College\r\n3.Brilliant Eeducation Gujarat\r\n4.Guru Nanak Khalsa College', 'Diploma in Secretarial Practise', '1.www.awp.com\r\n2.www.afvc.com\r\n3.www.beg.com\r\n4.www.gnkc.com', 'D', '1.Delhi\r\n2.Chennai\r\n3.Gujarat\r\n4.Delhi', '2yr', '150000'),
('1.Amro Institute\r\n2.Bengal Institute of Hotel Management\r\n3.Bharath College of Science & Management\r\n4.Global Insitute of Hotel Management', 'Certificate course in Basic Front Desk', '1.www.amro.com\r\n2.www.bihm.com\r\n3.www.bcsm.com\r\n4.www.gihm.com\r\n', 'D', '1.Banagalore\r\n2.Kolkata\r\n3.Delhi\r\n4.Gujarat', '8months', '8000'),
('1.TCIL-IT Education & Training\r\n2.Tirupati College of Technical Education\r\n3.Vinayakrao Patil Mahavidyalaya', 'Certificate Course in Call Center', '1.www.tet.com\r\n2.www.tcte.com\r\n3.www.vpm.com', 'D', '1.Delhi\r\n2.Tamil Nadu\r\n3.Gujarat', '8months', '5000'),
('1.University of Kalyani\r\n2.Davar''s College', 'Certificate Course in Computer Typing & Internet Operation', '1.www.uok.com\r\n2.www.davar.com', 'D', '1.Chennai\r\n2.Gujarat', '8months', '8000'),
('1.National Power Training Institute\r\n2.Indira Gandhi National Open University', 'Certificate of Competency & Power Distribution', '1.www.npti.com\r\n2.www.ignou.com', 'D', '1.Delhi\r\n2.Multiple Locations in India', '10months', '50000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD FULLTEXT KEY `Type` (`Type`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

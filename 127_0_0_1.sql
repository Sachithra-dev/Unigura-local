-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 05:05 PM
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
-- Database: `unigura`
--
CREATE DATABASE IF NOT EXISTS `unigura` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `unigura`;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `ID` int(11) NOT NULL,
  `Subject` text NOT NULL,
  `Lesson` text NOT NULL,
  `Rate` float NOT NULL,
  `Mode` text NOT NULL,
  `Duration` float NOT NULL,
  `tutorid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ID`, `Subject`, `Lesson`, `Rate`, `Mode`, `Duration`, `tutorid`) VALUES
(3, 'physics', 'machincs', 3000, '', 2, ''),
(4, 'Physics', 'Mechanics', 500, '', 2, '10'),
(5, 'Chemistry', 'Organic', 500, '', 3, '11'),
(6, 'Physics', 'Mechanics', 100, '', 1, '0'),
(7, 'Chemistry', 'Organinc', 2100, '', 2, '0'),
(8, 'Chemistry', 'Equillirium', 700, '', 1, '0'),
(9, 'සං‍යුක්ත ගණිතය', 'කලනය', 1000, '', 2, '0'),
(10, 'Chemistry', 'Enviromental Science', 500, '', 3, '0'),
(11, 'Physics', 'Mechanics', 300, '', 2, '12'),
(12, 'Chemistry', 'Organic', 400, '', 3, '12'),
(13, 'Chemistry', 'Organic', 400, '', 3, '12'),
(14, 'Chemistry', '300', 500, 'Physical', 3, '12'),
(15, 'Chemistry', 'Energy ', 300, 'Online', 2, '12'),
(16, 'Physics', 'Mechanics', 1000, 'Online', 2, '13'),
(17, 'Chemistry', 'Organic', 1000, 'Both', 2, '13'),
(18, 'Infomation Tech', 'Database', 800, 'Physical', 2, '13'),
(19, 'biology', 'ජෛව විවිධත්වය', 700, 'Both', 3, '13'),
(20, 'Chemistry', 'ශක්ති විද්‍යාව', 800, 'Both', 2, '13'),
(21, 'Chemistry', 'ශක්ති විද්‍යාව', 1000, 'Physical', 2, '23'),
(22, 'Chemistry', 'ශක්ති විද්‍යාව', 1000, 'Physical', 2, '23'),
(23, 'Chemistry', 'Organic', 1000, 'Both', 2, '24'),
(24, 'Physics', 'Mechanics', 1300, 'Physical', 3, '24');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Telephone` text NOT NULL,
  `Address` text NOT NULL,
  `Street` text NOT NULL,
  `City` text NOT NULL,
  `District` text NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `name`, `email`, `password`, `Firstname`, `Lastname`, `Telephone`, `Address`, `Street`, `City`, `District`, `Gender`) VALUES
(1, 'Sachithra', 'sachithra@gmail.com', '$2y$10$uFb3Iwup7BO.U8Cx/BLs4eWBtyC5fQ55xc.Zw0OU1/04y0eYkaYwe', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(2, 'Kavi', 'kavinda@gmail.com', '$2y$10$HcQHKntwdtzU3SCghUR.6uCNGU7xKaaulapWrAyzJuy3XIeHf0SBa', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(3, 'Maheshi', 'kavindadaylen@gmail.com', '$2y$10$HiqloRJMY9zMJpQ4WmL23O/XCQK9D0dk.99e2uRHy6lTZwHNiuqMa', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(4, 'Sachithraks', 'gf@gmail.com', '$2y$10$6pJlQHGNyRNQBPd6Iw5Vou9Wj.eeZGMSsjqXuM/DWebg0g8iFjt76', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(5, 'Kavi', 'da@gmail.com', '$2y$10$4/MslmJoi4M9R3/FGADDi.UJTvrtFLmjmAcSP6wG8s2ZMyz5UEC9K', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(6, 'testuser', 'test@gmail.com', '$2y$10$KmPF5ZiEDGLjK5KPTY3YJuJqa2XqVKhg.o4u0RRj3jEC3Wg2vicxO', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(7, 'jane', 'jane@gmail.com', '$2y$10$NRCZXznIjc3YlISgcrdWSONi0sln6XvLMwdY2YU.L39MQtjtVa72K', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(8, 'Madushrani', 'madusharani@g.com', '$2y$10$u86EFPDOxjROeQFjPq7sCejDlOzNHAK6JCq0Maj60rRmzxWnymowa', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(9, 'hdsdf', 'dad@gmail.com', '$2y$10$S55W6rTVN6N9jRzd.nphvuodGEzLXELqvte7.kodn2axGZQ12pGC.', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(10, 'bhanu', 'bhanu@gmail.com', '$2y$10$.XXef2FPxVOoyD0m1rQmKO7ltCOmfmlOyZ92zQUOv31Y8ryaYXL96', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(11, 'sachithra', 'sachithrad@gmail.com', '$2y$10$KMgyt68uqkXmwxJWhjR.Guj/zVu//lezmBoK7/LodhFYqy4Ab6qQq', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(12, 'Sachithra', 'smb@gmail.com', '$2y$10$fRPRduN8z..XDNojZYzIxuEDgnzugGWppjohvD3ceJa7zvtjWqTka', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(13, 'viraj', 'viraj@gmail.com', '$2y$10$WnEKQpyv5Qak8YT57JBJB.dAgn/TJdLldSg6FjGXmpPdFPsxwFuLK', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(14, 'Sachithra', 'sk@gmail.com', '$2y$10$sM.cglKBdLoVCt/ePnhZTeyHax0ly/4oT1vsmk1g7.JF.8JEPclg.', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(15, '', '', '', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(16, '', '', '', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(17, '', '', '', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(18, '', '', '', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(19, 'ABC', 'abc@gmail.com', '$2y$10$IIdzPlblEDvCBhmiSMNtyun1AXbEh.rnIhW8iIORUV7w78yfXyYMa', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(20, '', '', '', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(21, 'james', 'james@gmail.com', '$2y$10$AdxlNbxixYoW7LQKIIStAeram./dt1hL2biYX0rPOuXLlohE84ZTW', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(22, 'Mary', 'mary@gmail.com', '$2y$10$979sP8rzVYHj/yhRvMUsduAZncdaQWUwh37QsNX0SWK/hSCOnkuQi', '', '', '23212321', 'dfjsaf', 'dsasd', 'dsfa', 'sdasd', 'afdfa'),
(23, 'john', 'john@gmail.com', '$2y$10$n0Xerq9jbQFascLlywwCmO6wO0ZKeVTrPGb1ln8lWunnkSbX1GXLO', '', '', '93020202', 'hgf', 'djsjd', 'adka', 'dads', 'aasa'),
(24, 'Sajith', 'sajithprem@gmail.com', '$2y$10$2UcMdooibR3MkaUJ.nGro.877FDhTSTipfIOW2uKE.wBjkG0LBgee', '', '', '', '', '', '', '', ''),
(25, 'dfssd', 'dfdfa@gmail.com', '$2y$10$Ejs8rF4y2vCOsdEoTp91IuCRDpYBheAryetKp1e73f6QOXPXtP8na', '', '', '', '', '', '', '', ''),
(26, 'jamy', 'jamy@gmail.com', '$2y$10$fdAnxk0J/uE3uwbuFWVlJ.s4xDD6mGsaQv2tayNDnM.7EAveM0dl6', '', '', '', '', '', '', '', ''),
(27, 'name', 'name@gmail', '$2y$10$6phqzCnOyJHIbT9SbOWLV.knCSwG5QXySSb5KqCvExcxutYoL2dB.', '', '', '', '', '', '', '', ''),
(28, 'dfdfdf', 'dfd@gmail.com', '$2y$10$qvMMgxMimP3tpY0CV7NZXu2nYk2MKjST2jst5Ao.F.eFk/JGbAKOe', '', '', '', '', '', '', '', ''),
(29, 'User', 'username@gmail.com', '$2y$10$OGGURQfoFqUSC5plNMMD.uFpxldD.GqgzG4VNgJ7Y17FkH4jmHDX6', '', '', '', '', '', '', '', ''),
(30, 'came', 'came@gmail.com', '$2y$10$uRAim4O7B/0TFVcrc2BX/OejuQWxSbTt7mnCVUeqARMqNcEJxYGWW', '', '', '', '', '', '', '', ''),
(31, 'dsd', 'd@gma', '$2y$10$m/bvT98Q767HVvUAmryuWOK.BIRj1Gi0fismd43MJA/yZMEfuaSeC', '', '', '', '', '', '', '', ''),
(32, 'nme', 'name@gamil', '$2y$10$Jx8261uj8sYXBYjae/fM2.K0s/z0ClUSIRg.c9FC6fKm977xPkXy.', '', '', '', '', '', '', '', ''),
(33, 'nameeeee', 'sd@gmail.com', '$2y$10$d7V.PiggSjk0bDffl7ZNi.2OmUl.aTdVLv9AsrJ.EcGlXX82IGkCK', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

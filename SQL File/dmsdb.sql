-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 11:01 AM
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
-- Database: `dmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8765398765, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-04-30 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbldirectory`
--

CREATE TABLE `tbldirectory` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Profession` varchar(120) DEFAULT NULL,
  `Email` varchar(120) NOT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Address` varchar(250) NOT NULL,
  `City` varchar(250) NOT NULL,
  `Status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbldirectory`
--

INSERT INTO `tbldirectory` (`ID`, `FullName`, `Profession`, `Email`, `MobileNumber`, `Address`, `City`, `Status`) VALUES
(1, 'Airi Sato', 'Accountant', 'airi@gmail.com', 9876509632, '1-2-3 Minami Aoyama, Minato, Tokyo', 'Tokyo', '1'),
(2, 'Akiko Yamamoto', 'Chief Executive Officer (CEO)', 'akiko@gmail.com', 4577890655, '4-5-6 Shijo Dori, Nakagyo Ward, Kyoto', 'Kyoto', '1'),
(3, 'Hiroshi Tanaka', 'Junior Technical Author', 'hiroshi@gmail.com', 4577890690, '7-8-9 Nishiki, Naka Ward, Nagoya', 'Nagoya', '0'),
(4, 'Airi Sato', 'Accountant', 'airi@gmail.com', 4577890655, '10-11-12 Roppongi, Minato, Tokyo', 'Tokyo', '1'),
(5, 'Takeshi Kimura', 'Software Engineer', 'takeshi@gmail.com', 6787655433, '13-14-15 Minato Mirai, Nishi Ward, Yokohama', 'Yokohama', '1'),
(6, 'Kenji Sato', 'HR', 'kenji@gmail.com', 6877955435, '16-17-18 Tenjin, Chuo Ward, Fukuoka', 'Fukuoka', '0'),
(7, 'Yuki Watanabe', 'Pre-Sales Support', 'yuki@gmail.com', 9063735686, '19-20-21 Shinjuku, Shinjuku Ward, Tokyo', 'Tokyo', '0'),
(8, 'Haruto Suzuki', 'Senior Javascript Developer', 'haruto@gmail.com', 5764324679, '22-23-24 Umeda, Kita Ward, Osaka', 'Osaka', '0'),
(9, 'Sakura Kato', 'Team Leader', 'sakura@gmail.com', 9807531479, '25-26-27 Sannomiya, Chuo Ward, Kobe', 'Kobe', '1'),
(10, 'Yumi Mori', 'Support Engineer', 'yumi@gmail.com', 9876578965, '28-29-30 Sakae, Naka Ward, Nagoya', 'Nagoya', '0'),
(11, 'Koji Yamashita', 'Office Manager', 'koji@gmail.com', 8098765654, '31-32-33 Motomachi, Naka Ward, Yokohama', 'Yokohama', '1'),
(12, 'Naomi Saito', 'HR Executive', 'naomi@gmail.com', 7867564645, '34-35-36 Shibuya, Shibuya Ward, Tokyo', 'Tokyo', '0'),
(13, 'Naomi Saito', 'HR Executive', 'naomi@gmail.com', 7867564645, '34-35-36 Shibuya, Shibuya Ward, Tokyo', 'Tokyo', '1'),
(14, 'Fujiwara Taro', 'CEO', 'fujiwara@gmail.com', 7865564534, '37-38-39 Ginza, Chuo Ward, Tokyo', 'Tokyo', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldirectory`
--
ALTER TABLE `tbldirectory`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldirectory`
--
ALTER TABLE `tbldirectory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

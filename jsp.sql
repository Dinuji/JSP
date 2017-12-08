-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 05:59 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `damaged_fse`
--

CREATE TABLE `damaged_fse` (
  `Number` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ShopId` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `damaged_main`
--

CREATE TABLE `damaged_main` (
  `Date` date NOT NULL,
  `FSEId` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `damaged_main`
--

INSERT INTO `damaged_main` (`Date`, `FSEId`, `Type`, `SerialNumber`) VALUES
('2017-12-02', '4', '100', '155855'),
('2017-12-03', '6', '500', '589689'),
('2017-12-04', '6', '200', '789654');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `NIC` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Type` varchar(255) NOT NULL,
  `EmpId` varchar(255) NOT NULL,
  `TpNum` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `FirstName`, `LastName`, `Gender`, `NIC`, `DOB`, `Type`, `EmpId`, `TpNum`, `Address`) VALUES
(1, 'Ishara', 'Wickramasinghe', 'Female', '946754324V', '1994-04-05', 'Administrator', 'ADM01', 712345678, 'Police Junction,Anuradhapura'),
(2, 'Randika', 'Godigamuwa', 'Female', '946743232V', '1994-08-12', 'Manager', 'MAN01', 772245654, 'Panadura Town, Panadura'),
(3, 'Ruwanari', 'Heenkenda', 'Female', '946756787V', '1994-03-14', 'FSE', 'FSE04', 719876543, 'Dalada Widiya,Kandy'),
(4, 'Yasas', 'Ranawaka', 'male', '876545454V', '1987-02-05', 'FSE', 'FSE01', 718787878, 'Kirulapana,Colombo');

-- --------------------------------------------------------

--
-- Table structure for table `graphsales`
--

CREATE TABLE `graphsales` (
  `Date` date NOT NULL,
  `FSE3` int(11) NOT NULL,
  `FSE5` int(11) NOT NULL,
  `FSE6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphsales`
--

INSERT INTO `graphsales` (`Date`, `FSE3`, `FSE5`, `FSE6`) VALUES
('2017-12-02', 1200, 2100, 865),
('2017-12-03', 1300, 1500, 1023);

-- --------------------------------------------------------

--
-- Table structure for table `graphtable1`
--

CREATE TABLE `graphtable1` (
  `Id` int(11) NOT NULL,
  `Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphtable1`
--

INSERT INTO `graphtable1` (`Id`, `Count`) VALUES
(1, 14),
(3, 40),
(5, 115),
(6, 48);

-- --------------------------------------------------------

--
-- Table structure for table `graphtable2`
--

CREATE TABLE `graphtable2` (
  `Type` int(11) NOT NULL,
  `Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphtable2`
--

INSERT INTO `graphtable2` (`Type`, `Count`) VALUES
(20, 207),
(50, 16),
(100, 20),
(200, 15),
(1000, 37),
(500, 8);

-- --------------------------------------------------------

--
-- Table structure for table `mainstock_summary`
--

CREATE TABLE `mainstock_summary` (
  `Type` varchar(100) NOT NULL,
  `RemainingAmount` int(11) NOT NULL,
  `ReorderLevel` int(11) NOT NULL,
  `BufferLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainstock_summary`
--

INSERT INTO `mainstock_summary` (`Type`, `RemainingAmount`, `ReorderLevel`, `BufferLevel`) VALUES
('20', 580, 150, 100),
('50', 314, 150, 100),
('100', 436, 150, 100),
('200', 246, 150, 100),
('500', 112, 100, 50),
('1000', 180, 100, 50);

-- --------------------------------------------------------

--
-- Table structure for table `main_stock_deatils`
--

CREATE TABLE `main_stock_deatils` (
  `Type` int(11) NOT NULL,
  `Serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_stock_deatils`
--

INSERT INTO `main_stock_deatils` (`Type`, `Serial`) VALUES
(50, 0),
(20, 100110),
(20, 123995),
(20, 123996),
(20, 123997),
(20, 200500),
(20, 200501),
(20, 200502),
(20, 200503),
(20, 200504),
(20, 200505),
(20, 200506),
(20, 200507),
(20, 200508),
(20, 200509),
(20, 200510),
(50, 234572),
(50, 234573),
(50, 234574),
(50, 234575),
(50, 234576),
(50, 234577),
(200, 345349),
(200, 345350),
(200, 345351),
(200, 345352),
(200, 345353),
(200, 345354),
(200, 345355),
(1000, 555555),
(1000, 555556),
(1000, 555557),
(1000, 555558),
(1000, 555559),
(1000, 555560),
(1000, 555561),
(1000, 555562),
(1000, 555563),
(1000, 555564),
(1000, 555565),
(20, 987987),
(20, 987988),
(20, 987989),
(20, 987990),
(20, 987991),
(20, 987992),
(20, 987993),
(20, 987994),
(20, 987995),
(20, 987996),
(20, 987997);

-- --------------------------------------------------------

--
-- Table structure for table `piegraphtable`
--

CREATE TABLE `piegraphtable` (
  `Date` date NOT NULL,
  `FseId` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piegraphtable`
--

INSERT INTO `piegraphtable` (`Date`, `FseId`, `Type`, `Count`) VALUES
('2017-12-04', 3, '20', 2),
('2017-12-04', 3, '50', 3),
('2017-12-04', 5, '20', 5),
('2017-12-05', 3, '20', 5),
('2017-12-04', 5, '100', 2),
('2017-12-04', 3, '100', 2),
('2017-12-04', 3, '200', 4),
('2017-12-04', 3, '500', 4),
('2017-12-04', 3, '1000', 2),
('2017-12-04', 5, '50', 2),
('2017-12-04', 5, '200', 2),
('2017-12-04', 5, '1000', 2),
('2017-12-04', 6, '100', 4);

-- --------------------------------------------------------

--
-- Table structure for table `reloads`
--

CREATE TABLE `reloads` (
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reloads`
--

INSERT INTO `reloads` (`Amount`) VALUES
(4000);

-- --------------------------------------------------------

--
-- Table structure for table `reload_transferred_stock`
--

CREATE TABLE `reload_transferred_stock` (
  `FseId` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reload_transferred_stock`
--

INSERT INTO `reload_transferred_stock` (`FseId`, `Amount`) VALUES
(3, 200),
(5, 200),
(6, 100),
(1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Distance` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`Id`, `Name`, `Distance`) VALUES
(1, 'Athugala read', 250),
(2, 'High Level Road', 550),
(3, 'Thalawathugoda Road', 156),
(4, 'Kandy Road', 413);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `ShopId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `OwnerName` varchar(255) NOT NULL,
  `OwnerNIC` varchar(255) NOT NULL,
  `TPNumber` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `RouteId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`ShopId`, `Name`, `OwnerName`, `OwnerNIC`, `TPNumber`, `Address`, `RouteId`) VALUES
(1, 'Naduli Communication', 'Naduli Samarasinghe', '826543785V', '0772345433', 'N0.56,Athugala road,kurunegala', '1'),
(2, 'Thilak Stores', 'Thilak Jayawardena', '746751231V', '0256787654', 'HighLevel Road,Nugegoda', '2'),
(3, 'Pubudu Co Ltd', 'Pubudu Perera', '856787654V', '0114567534', 'Kandy Road, Wewaldeniya', '4');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Date` date NOT NULL,
  `StockKeeperId` varchar(255) NOT NULL,
  `FSEId` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transferred_stock`
--

CREATE TABLE `transferred_stock` (
  `TransferredDate` date NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL,
  `FSEId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transferred_stock`
--

INSERT INTO `transferred_stock` (`TransferredDate`, `Type`, `SerialNumber`, `FSEId`) VALUES
('2017-12-06', '20', '234567', '1'),
('2017-12-06', '50', '456789', '1'),
('2017-12-06', '20', '234568', '1'),
('2017-12-06', '50', '456790', '1'),
('2017-12-07', '20', '100100', '1'),
('2017-12-07', '20', '100101', '1'),
('2017-12-07', '20', '100102', '1'),
('2017-12-07', '20', '100103', '1'),
('2017-12-07', '20', '100104', '1'),
('2017-12-07', '20', '100105', '1'),
('2017-12-07', '20', '100106', '1'),
('2017-12-07', '20', '100107', '1'),
('2017-12-07', '20', '100108', '1'),
('2017-12-07', '20', '100109', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `UserName`, `Password`, `Type`) VALUES
(1, 'Avishka', 'avi', '123', 'FSE'),
(2, 'ishara', 'papaya', '123', 'Administrator'),
(3, 'Randika', 'randi', '123', 'Manager'),
(4, 'Yasas', 'yasas', '123', 'FSE'),
(5, 'Prabash', 'prabash', '456', 'StockKeeper'),
(6, 'Dilan', 'dilan', '123', 'FSE'),
(7, 'Hansika', 'hansi', '456', 'FSE'),
(8, 'Chathurya', 'chathu', '567', 'FSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `damaged_fse`
--
ALTER TABLE `damaged_fse`
  ADD PRIMARY KEY (`Number`,`SerialNumber`);

--
-- Indexes for table `damaged_main`
--
ALTER TABLE `damaged_main`
  ADD PRIMARY KEY (`SerialNumber`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `graphtable1`
--
ALTER TABLE `graphtable1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `main_stock_deatils`
--
ALTER TABLE `main_stock_deatils`
  ADD PRIMARY KEY (`Serial`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`ShopId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `ShopId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

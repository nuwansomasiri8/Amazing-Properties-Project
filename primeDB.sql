-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2017 at 09:40 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primeDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `AdminUsers`
--

CREATE TABLE `AdminUsers` (
  `idAdminUsers` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AdminUsers`
--

INSERT INTO `AdminUsers` (`idAdminUsers`, `email`, `userName`, `password`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `idproperty` int(11) NOT NULL,
  `propertyType` varchar(45) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL,
  `addressLine1` varchar(45) DEFAULT NULL,
  `addressLine2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `revenue` varchar(45) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `imgName` varchar(45) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `postState` varchar(25) NOT NULL DEFAULT 'PENDING',
  `Users_username` varchar(25) NOT NULL,
  `curTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`idproperty`, `propertyType`, `district`, `addressLine1`, `addressLine2`, `city`, `revenue`, `description`, `imgName`, `Date`, `postState`, `Users_username`, `curTime`) VALUES
(23, 'Commercial Property', 'Nuwara Eliya', 'No 924', 'Pattipola road', 'Nuwara Eliya', '500000', '1500 square feet sized two storied bulding.', 'com.jpg', '2017-10-22', 'APPROVED', 'abc', '13:13:33'),
(25, 'Houses', 'Colombo', 'no 9876', 'Nugegoda road', 'Colombo 7', '95014112', 'Two bed rooms with attached bathrooms. Located at a very calm place.', 'sea.jpg', '2017-10-22', 'APPROVED', 'abc', '02:25:22'),
(27, 'Houses', 'Ampara', 'No 195', 'Thumpane road', 'Ampara', '80000', 'Two storied house with a beautifully maintained garden.', 'apart1.jpg', '2017-10-23', 'PENDING', 'abc', '10:00:00'),
(28, 'Houses', 'Anuradhapura', 'No 456', 'Kandy Road', 'Anuradhapura', 'ahag', 'Four bathrooms and one bed room. Good condition.', 'green.jpg', '2017-10-23', 'APPROVED', 'abc', '00:00:00'),
(29, 'Land', 'Ampara', 'No 123', 'Gampaha', 'Colombo ', '133000 ', '1.5 acres and firtiled flat land.', 'abcdefg.jpg', '2017-12-18', 'APPROVED', 'abc', '09:48:11'),
(32, 'Commercial Property', 'Kurunegala', 'no 098', 'Asgiriya', 'Gampaha', '78511', '4 rooms with living rooms', 'build.jpg', '2017-12-18', 'PENDING', 'abc', '17:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `username` varchar(25) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`username`, `firstName`, `lastName`, `email`, `telephone`, `password`) VALUES
('abc', 'Tha', 'la', 'lakshankat@gmail.com', '0313313261', '900150983cd24fb0d6963f7d28e17f72'),
('costa', 'Thilan', 'Costa', 'costa@gmail.com', '0312247188', '202cb962ac59075b964b07152d234b70'),
('lucky', 'Lucky', 'Seww', 'lcuk@gmail.com', '0313313261', '867c4235c7d5abbefd2b8abd92b57f8a'),
('websterKAT', 'Tharindu', 'Lakshan', 'webster@gmail.com', '0777894561', '4eae35f1b35977a00ebd8086c259d4c9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AdminUsers`
--
ALTER TABLE `AdminUsers`
  ADD PRIMARY KEY (`idAdminUsers`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `userName_UNIQUE` (`userName`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`idproperty`,`Users_username`),
  ADD KEY `fk_property_Users_idx` (`Users_username`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `password_UNIQUE` (`password`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AdminUsers`
--
ALTER TABLE `AdminUsers`
  MODIFY `idAdminUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `idproperty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `fk_property_Users` FOREIGN KEY (`Users_username`) REFERENCES `Users` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

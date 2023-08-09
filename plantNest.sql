-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 09:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantnest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(225) DEFAULT NULL,
  `adminEmail` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `adminImage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminID`, `adminName`, `adminEmail`, `password`, `adminImage`) VALUES
(1, 'Fiza', 'fiza@gmail.com', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(225) DEFAULT NULL,
  `categoryImage` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `categoryImage`) VALUES
(1, 'Indoor plants', 'quick-shop-1.png'),
(2, 'Outdoor plants', 'quick-shop-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `productID` int(11) DEFAULT NULL,
  `productQuantity` varchar(225) DEFAULT NULL,
  `orderDate` timestamp NULL DEFAULT current_timestamp(),
  `totalAmount` varchar(225) DEFAULT NULL,
  `orderStatus` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `userID`, `productID`, `productQuantity`, `orderDate`, `totalAmount`, `orderStatus`) VALUES
(1, 5, 2, '2', '2023-08-09 09:44:02', '5677', 'pending'),
(2, 5, 1, '2', '2023-08-09 09:44:04', '5677', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(225) DEFAULT NULL,
  `productDescription` varchar(225) DEFAULT NULL,
  `productPrice` varchar(225) DEFAULT NULL,
  `productImage` varchar(225) DEFAULT NULL,
  `productStock` varchar(255) NOT NULL,
  `categoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productDescription`, `productPrice`, `productImage`, `productStock`, `categoryID`) VALUES
(1, 'Bambino dwarf', 'Ficus lyrata Bambino has an extremely compact, upright, branching nature; slightly smaller and thicker leaves compared to Ficus lyrata', '39.99', 'product-01.png', '24', 1),
(2, 'Golden pothos', 'Epipremnum aureum commonly called golden pothos or devil\'s ivy, is native to the Solomon Islands.', '39.99', 'product-02.png', '20', 1),
(3, 'Ninja jewel alocasia', 'Alocasia \'Ninja\' is a compact Jewel Alocasia with deep green to black, rounded shield leaves and striking white veining. ', '35.99', 'product-03.png', '36', 1),
(4, 'Croton', 'Croton is a small shrub used as a landscape plant in tropical climates. In its native habitat, croton is a branching, bushy shrub.', '25.99', 'product-04.png', '15', 2),
(5, 'Pentas', 'Colorful pentas, also known as Egyptian starcluster or star flower, are one of the best choices to attract pollinators like butterflies.', '26.99', 'product-05.png', '17', 2),
(6, 'Lantana', 'Lantana is an annual or perennial, small, broadleaf evergreen shrub in the Verbenaceae (verbena) family that has woody stems but a sprawling habit.', '23.99', 'product-05.png', '34', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(225) DEFAULT NULL,
  `lastName` varchar(225) DEFAULT NULL,
  `userEmail` varchar(225) NOT NULL,
  `userPassword` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `userEmail`, `userPassword`) VALUES
(1, 'ali', 'ali', 'ali@gmail.com', '123456'),
(2, 'fatima', 'fatima', 'fatima@gmail.com', '12345678\r\n'),
(3, 'zainab', 'zainab', 'zainab@gmail.com', '7444'),
(4, 'usman', 'usman', 'usman@gmail.com', '9877'),
(5, 'umar', 'umar', 'umar@gmail.com', '9977');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `adminEmail` (`adminEmail`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `p_fk` (`productID`),
  ADD KEY `u_fk` (`userID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `c_fk` (`categoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `p_fk` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `u_fk` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `c_fk` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

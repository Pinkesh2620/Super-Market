-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 05:26 PM
-- Server version: 8.0.33
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinkesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `IsAvailable` varchar(10) NOT NULL DEFAULT 'AVAILABLE',
  `Price` int NOT NULL,
  `ImgPath` varchar(300) NOT NULL,
  `Categories` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `Title`, `Description`, `IsAvailable`, `Price`, `ImgPath`, `Categories`) VALUES
(80, 'Product 1', 'Description 1', 'AVAILABLE', 100, 'vegetable/6.jpeg', 'F'),
(81, 'Product 2', 'Description 2', 'AVAILABLE', 200, 'vegetable/5.jpeg', 'F'),
(83, 'Product 3', 'Description 3', 'AVAILABLE', 300, 'vegetable/4.jpeg', 'F'),
(84, 'Product 4', 'Description 4', 'AVAILABLE', 400, 'vegetable/3.jpeg', 'F'),
(85, 'Product 5', 'Description 5', 'AVAILABLE', 500, 'vegetable/2.jpeg', 'M'),
(86, 'Product 6', 'Description 6', 'AVAILABLE', 600, 'vegetable/1.jpeg', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `client_id` int NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`client_id`, `first_name`, `last_name`, `email`, `mobile`, `password`, `gender`) VALUES
(1, 'seni', 'Patel', 'rohit@gmail.com', 134567891, '1234', 'Male'),
(2, 'Pinkesh', 'Patel', 'p@gmail.com', 123456749, '123', 'Male'),
(3, 'rutwik', 'butani', 'rutwik@gmail.com', 987456321, '123', 'Male'),
(4, 'vishal', 'Nair', 'vishal@gmail.com', 970251676, '123', 'Male'),
(5, 'Vishal', 'nair', '22amtics285@gmail.com', 123456789, '123', 'Male'),
(6, 'om', 'nath', 'om@gmail.com', 12345678, '123', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `ShoppingCartId` int NOT NULL,
  `ProductId` int NOT NULL,
  `Quantity` int NOT NULL,
  `Price` int NOT NULL,
  `clientId` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`ShoppingCartId`, `ProductId`, `Quantity`, `Price`, `clientId`) VALUES
(45, 89, 3, 2700, 31),
(44, 87, 4, 2800, 31),
(40, 81, 4, 800, 31),
(48, 81, 4, 800, 32),
(49, 89, 2, 1800, 32),
(50, 87, 4, 2800, 32),
(51, 83, 3, 900, 32);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobilenumber` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `email`, `password`, `mobilenumber`) VALUES
(1, 'pradip', 'vrnair010@gmail.com', '123', 1234567890),
(2, 'Pinkesh Patel', '22amtics184@gmail.com', '123', 97025167),
(3, 'Pinkesh Patel', '22amtics184@gmail.com', '123', 97025163),
(4, 'Yash Bhavsar', '22amtics276@gmail.com', '123', 12345678),
(5, 'Rohit Rajesh Mahadik', '22amtics183@gmail.com', '1234', 2345678);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`ShoppingCartId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `client_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `ShoppingCartId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

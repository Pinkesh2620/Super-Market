-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 09:48 PM
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
-- Database: `supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `price`, `img`) VALUES
(1, 'Onion', '1KG', 100.00, 'vegetable/1.jpeg'),
(2, 'Potato', '1kg', 80.00, 'vegetable/2.jpeg'),
(3, 'Lady Finger', '1Kg', 50.00, 'vegetable/3.jpeg'),
(4, 'Tamato', '1KG', 60.00, 'vegetable/4.jpeg'),
(5, 'Karela', '1KG', 80.00, 'vegetable/5.jpeg'),
(6, 'Brinjal', '1KG', 80.00, 'vegetable/6.jpeg'),
(7, 'apple', '1KG', 100.00, 'fruits/1.jpeg'),
(8, 'banana', '1KG', 80.00, 'fruits/2.jpeg'),
(9, 'mosambi', '1KG', 50.00, 'fruits/3.jpeg'),
(10, 'santra', '1KG', 60.00, 'fruits/4.jpeg'),
(11, 'Dragon fruit', '1KG', 80.00, 'fruits/5.jpeg'),
(12, 'Peach', '1KG', 80.00, 'fruits/6.jpeg'),
(13, 'Butter', '1KG', 100.00, 'dairy/1.jpeg'),
(14, 'Cheese', '1KG', 80.00, 'dairy/2.jpeg'),
(15, 'Milk', '1KG', 50.00, 'dairy/3.jpeg'),
(16, 'Yogurt', '1KG', 60.00, 'dairy/4.jpeg'),
(17, 'Panner', '1Kg', 80.00, 'dairy/5.jpeg'),
(18, 'Ghee', '1KG', 80.00, 'dairy/6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Repassword` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Firstname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Lastname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Email`, `Password`, `Repassword`, `Firstname`, `Lastname`) VALUES
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('rohit@gmail.com', '123', '123', 'rohit', 'mahadik'),
('', '', '', '', ''),
('rohit@gmail.com', '123', '123', 'rohit', 'mahadik'),
('', '', '', '', ''),
('rohit@gmail.com', '123', '123', 'rohit', 'mahadik'),
('', '', '', '', ''),
('rohit@gmail.com', '123', '123', 'rohit', 'mahadik'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('rutwik@gmail.com', '123', '123', 'rohit', 'mahadik'),
('rutwik@gmail.com', '123', '123', 'rohit', 'mahadik'),
('rutwik@gmail.com', '123', '123', 'rohit', 'mahadik'),
('rutwik@gmail.com', '123', '123', 'rohit', 'mahadik'),
('vishal@gmail.com', '123', '123', 'vishal', 'nair'),
('vishal@gmail.com', '123', '123', 'vishal', 'nair');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

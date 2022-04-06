-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 09:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `termprojectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `firstparagraph` varchar(750) NOT NULL,
  `secondparagraph` varchar(750) NOT NULL,
  `thirdparagraph` varchar(750) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`firstparagraph`, `secondparagraph`, `thirdparagraph`) VALUES
('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia nulla a justo dignissim, id convallis mauris auctor. Phasellus efficitur luctus justo quis interdum. In in tellus ac purus rhoncus iaculis ut nec nibh. Mauris rhoncus venenatis elit, vel scelerisque ex molestie non. Aliquam sit amet efficitur dolor, id tincidunt enim. Donec quam diam, bibendum eget nisi vitae, venenatis gravida erat. Nam dui tellus, iaculis quis odio euismod, finibus sollicitudin massa. Duis dapibus metus lobortis ultrices egestas. Donec elementum turpis placerat velit tempus, vel dictum nisi lobortis. Pellentesque in hendrerit libero, sed sodales elit.', 'Vestibulum fermentum interdum nisi, a mollis nisl volutpat nec. Nulla eget bibendum lectus. Donec dictum id dolor lacinia varius. Curabitur tristique mollis massa ut commodo. Fusce ornare orci eu aliquam pellentesque. Phasellus ac dolor sem. Nunc vitae sodales elit. In sed pulvinar elit, vel luctus massa. Pellentesque accumsan risus est, ut accumsan quam feugiat eget. Morbi purus justo, tincidunt vel aliquet nec, pharetra at tortor. Mauris vestibulum sed nulla ac euismod. Nulla et sagittis orci. Maecenas in ipsum a lacus lacinia sodales mattis eget nulla.', 'Quisque orci arcu, dignissim a eleifend ac, sagittis eu velit. In euismod tortor nec pretium iaculis. Integer dui urna, sagittis vel accumsan et, faucibus ac nisl. Curabitur imperdiet a massa ac bibendum. Aliquam sed lacinia nibh, ac vulputate erat. Aliquam rutrum tellus ut lobortis congue. Phasellus orci eros, porttitor nec vehicula tristique, volutpat lobortis neque. Suspendisse potenti. Vivamus porta feugiat diam, sit amet pretium sem egestas quis. Cras a justo eu augue consectetur consectetur vitae ut mi. Aenean id mi elementum, volutpat nisi non, dignissim mi.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminEmail` varchar(150) NOT NULL,
  `AdminFirstName` varchar(25) NOT NULL,
  `AdminLastName` varchar(30) NOT NULL,
  `AdminPasswordHash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminEmail`, `AdminFirstName`, `AdminLastName`, `AdminPasswordHash`) VALUES
('adminemail@email.com', 'notadmin', 'totallyadmin', '$2y$10$DzCF.FWH9Jzi/XKs3/kf9O8OyZ7N8cFBQWy4ZzaZINxUx4XD0Scba');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `clientEmail` varchar(150) NOT NULL,
  `UPC` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductPrice` decimal(10,2) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`clientEmail`, `UPC`, `ProductName`, `ProductPrice`, `Quantity`) VALUES
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 2, 'AnotherOne', '150.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1),
('sarah@gmail.com', 1, 'Product', '15.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ClientEmail` varchar(150) NOT NULL,
  `ClientFirstName` varchar(25) NOT NULL,
  `ClientLastName` varchar(30) NOT NULL,
  `ClientShippingAddress` varchar(255) NOT NULL,
  `ClientPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ClientEmail`, `ClientFirstName`, `ClientLastName`, `ClientShippingAddress`, `ClientPassword`) VALUES
('sarah@gmail.com', 'sarah', 'tester', '1234 testing route', '$2y$10$DzCF.FWH9Jzi/XKs3/kf9O8OyZ7N8cFBQWy4ZzaZINxUx4XD0Scba');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(4) NOT NULL,
  `OrderStatus` varchar(50) NOT NULL,
  `UPC` int(13) NOT NULL,
  `OrderTotalPrice` decimal(10,2) NOT NULL,
  `ClientEmail` varchar(150) NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `UPC` int(13) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductDescription` varchar(255) NOT NULL,
  `ProductPrice` decimal(10,2) NOT NULL,
  `ProductAmount` int(5) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`UPC`, `ProductName`, `ProductDescription`, `ProductPrice`, `ProductAmount`, `picture`) VALUES
(1, 'Product', 'yoo', '15.00', 3, ''),
(2, 'AnotherOne', 'djKhaled', '150.00', 5, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`firstparagraph`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminEmail`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `cart_clientEmail_FK` (`clientEmail`),
  ADD KEY `cart_UPC_FK` (`UPC`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ClientEmail`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`UPC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `UPC` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_UPC_FK` FOREIGN KEY (`UPC`) REFERENCES `products` (`UPC`),
  ADD CONSTRAINT `cart_clientEmail_FK` FOREIGN KEY (`clientEmail`) REFERENCES `clients` (`ClientEmail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

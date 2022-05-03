-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 06:14 PM
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
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `AddressId` int(11) NOT NULL,
  `Address` text NOT NULL,
  `ClientEmail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`AddressId`, `Address`, `ClientEmail`) VALUES
(1, 'dddgwthbtb', 'raigorodskyi@gmail.com'),
(3, '789482 lane street', 'sarah@gmail.com');

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
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `CardId` int(11) NOT NULL,
  `CardNumber` varchar(16) NOT NULL,
  `CardName` varchar(150) NOT NULL,
  `ClientEmail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`CardId`, `CardNumber`, `CardName`, `ClientEmail`) VALUES
(1, '1234567812345678', 'Ol VDJ', 'raigorodskyi@gmail.com'),
(2, '9876543219876543', 'trrh hg', 'raigorodskyi@gmail.com'),
(5, '987654321', 'NOT SARAH', 'sarah@gmail.com'),
(6, '1', 'me', 'sarah@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `item_id` int(11) NOT NULL,
  `clientEmail` varchar(150) NOT NULL,
  `UPC` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductPrice` decimal(10,2) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('raigorodskyi@gmail.com', 'Igor', 'Raigorodskiy', '37, rue d\'Orléans', '$2y$10$A7bIiQE/hgDHeP.GAd849O.B8TZM5iN2ZbkDMKrw3nOMGj3KYLise'),
('sarah@gmail.com', 'sarah', 'tester', '1234 testing route', '$2y$10$DzCF.FWH9Jzi/XKs3/kf9O8OyZ7N8cFBQWy4ZzaZINxUx4XD0Scba');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(4) NOT NULL,
  `OrderStatus` varchar(50) NOT NULL,
  `OrderTotalPrice` decimal(10,2) NOT NULL,
  `ClientEmail` varchar(150) NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderId`, `OrderStatus`, `OrderTotalPrice`, `ClientEmail`, `OrderDate`) VALUES
(1, 'Shipped', '45.00', 'sarah@gmail.com', '2022-04-27 07:20:58'),
(2, 'Order created', '45.00', 'sarah@gmail.com', '2022-05-03 22:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_item_id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `UPC` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `unitPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_item_id`, `orderId`, `UPC`, `ProductName`, `Quantity`, `unitPrice`) VALUES
(1, 1, 2, 'AnotherOne', 2, 150),
(2, 2, 1, '', 2, 15),
(3, 2, 1, '', 1, 15);

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
(2, 'AnotherOne', 'djKhaled', '150.00', 5, ''),
(3, 'Tumble Bundle', 'Bundle of tumbled rocks', '20.00', 10, '6270c69fdf309.jpg'),
(4, 'Small Celestite Geode', 'small beautiful celestite geode', '15.00', 5, '6270c6df7518d.jpg'),
(5, 'Clear Quartz', 'Pieces of rough clear quartz', '5.00', 30, '6270c72049a67.jpg'),
(6, 'Rose Quartz', 'Pieces of raw rose quartz. This will help you find a significant other', '50.00', 40, '6270c77358317.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`firstparagraph`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`AddressId`),
  ADD KEY `ClientEmail` (`ClientEmail`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminEmail`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`CardId`),
  ADD KEY `ClientEmail` (`ClientEmail`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`item_id`),
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
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `clientEmail_fk` (`ClientEmail`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `orderId_fk` (`orderId`),
  ADD KEY `UPC_fk` (`UPC`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`UPC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `AddressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `CardId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `UPC` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`ClientEmail`) REFERENCES `clients` (`ClientEmail`);

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_ibfk_1` FOREIGN KEY (`ClientEmail`) REFERENCES `clients` (`ClientEmail`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_UPC_FK` FOREIGN KEY (`UPC`) REFERENCES `products` (`UPC`),
  ADD CONSTRAINT `cart_clientEmail_FK` FOREIGN KEY (`clientEmail`) REFERENCES `clients` (`ClientEmail`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `clientEmail_fk` FOREIGN KEY (`ClientEmail`) REFERENCES `clients` (`ClientEmail`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `UPC_fk` FOREIGN KEY (`UPC`) REFERENCES `products` (`UPC`),
  ADD CONSTRAINT `orderId_fk` FOREIGN KEY (`orderId`) REFERENCES `orders` (`OrderId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

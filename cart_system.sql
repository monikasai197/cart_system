-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 11:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `total_price` float NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(44, 'Shirt', 650, 'images/shirt.jpg', 1, 650, 'p904'),
(45, 'Short', 780, 'images/short.jpg', 1, 780, 'p903');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Legginng', 110, 'images/leg.jpg', 'p101'),
(2, 'Night top', 449, 'images/top.jpg', 'p102'),
(3, 'Night dress', 444, 'images/ngtdrs.jpg', 'p103'),
(4, 'Long top', 650, 'images/long.jpg', 'p104');

-- --------------------------------------------------------

--
-- Table structure for table `cosmetics`
--

CREATE TABLE `cosmetics` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cosmetics`
--

INSERT INTO `cosmetics` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Lipstick', 135, 'images/lipstick.jpg', 'p201'),
(2, 'Compact', 222, 'images/compact.jpg', 'p202'),
(3, 'Liner', 159, 'images/liner.jpg', 'p203'),
(4, 'Mascara', 165, 'images/mascara.jpg', 'p204');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Sewing machine', 2850, 'images/sew.jpg', 'p301'),
(2, 'Washing machine', 37800, 'images/wash.jpg', 'p302'),
(3, 'Oven', 8500, 'images/oven.jpg', 'p303'),
(4, 'Fredge', 38000, 'images/fredge.jpg', 'p304');

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Apple', 80, 'images/apple.jpg', 'p401'),
(2, 'Banana', 65, 'images/banana.jpg', 'p402'),
(3, 'Kiwi', 90, 'images/kiwi.jpg', 'p403'),
(4, 'Orange', 120, 'images/orange.jpg', 'p404');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Chair', 650, 'images/chair.jpg', 'p501'),
(2, 'Flower vase', 800, 'images/flower.jpg', 'p502'),
(3, 'Table', 2500, 'images/table.jpg', 'p503'),
(4, 'Mirror', 780, 'images/mirror.jpg', 'p504');

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE `grocery` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Toor dal', 64, 'images/toor.jpg', 'p601'),
(2, 'Salt', 50, 'images/salt.jpg', 'p602'),
(3, 'Bread flour', 55, 'images/brdflr.jpg', 'p603'),
(4, 'Chilli packet', 45, 'images/chilli.jpg', 'p604');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitchen`
--

INSERT INTO `kitchen` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Big spoons', 430, 'images/spoon.jpg', 'p701'),
(2, 'Electric stove', 1980, 'images/stove.jpg', 'p702'),
(3, 'Non-stick items', 2500, 'images/nonstick.jpg', 'p703'),
(4, 'Cutter', 670, 'images/cutter.jpg', 'p704');

-- --------------------------------------------------------

--
-- Table structure for table `leafy`
--

CREATE TABLE `leafy` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leafy`
--

INSERT INTO `leafy` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Podina', 25, 'images/podina.jpg', 'p801'),
(2, 'Menthi', 30, 'images/menthi.jpg', 'p802'),
(3, 'Karepaku', 30, 'images/karepaku.jpg', 'p803'),
(4, 'Gongoora', 35, 'images/gongoora.jpg', 'p804');

-- --------------------------------------------------------

--
-- Table structure for table `mensclothes`
--

CREATE TABLE `mensclothes` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mensclothes`
--

INSERT INTO `mensclothes` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Track pant', 850, 'images/track.jpg', 'p901'),
(2, 'T-shirt', 450, 'images/tsht.jpg', 'p902'),
(3, 'Short', 780, 'images/short.jpg', 'p903'),
(4, 'Shirt', 650, 'images/shirt.jpg', 'p904');

-- --------------------------------------------------------

--
-- Table structure for table `mensfoot`
--

CREATE TABLE `mensfoot` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mensfoot`
--

INSERT INTO `mensfoot` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Shoe', 2150, 'images/shoe1.jpg', 'p1001'),
(2, 'Sandals', 870, 'images/sandal1.jpg', 'p1002'),
(3, 'Slippers', 650, 'images/slipper.jpg', 'p1003'),
(4, 'Jogging shoes', 1350, 'images/shoe.png', 'p1004');

-- --------------------------------------------------------

--
-- Table structure for table `milkproducts`
--

CREATE TABLE `milkproducts` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milkproducts`
--

INSERT INTO `milkproducts` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Yogart', 45, 'images/yog.jpg', 'p1101'),
(2, 'Cheese', 60, 'images/cheese.jpg', 'p1102'),
(3, 'Butter', 55, 'images/butter.jpg', 'p1103'),
(4, 'Milk packet', 30, 'images/milkpct.jpg', 'p1104');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(1, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(2, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(3, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(4, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(5, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(6, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(7, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(8, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(9, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(10, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(11, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(12, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Mahanadu, Tadepalli, Guntur.', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1)', '1873'),
(13, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', '', 'cod', 'Legginng(3), Night top(1), Night dress(1), Long top(1), Lipstick(1), Bitter gaurd(1), Bottle gaurd(1)', '2054'),
(14, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Vijayawada', 'cod', 'Long top(1)', '650'),
(15, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Vijayawada', 'cod', 'Long top(2)', '1300'),
(16, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Andhra Layola college', 'cod', 'Shirt(1), T-shirt(1), Track pant(1)', '1950'),
(17, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Vijayawada', 'cod', 'Shirt(1), T-shirt(1), Track pant(1), Short(1), Flower vase(1), Chair(1), Table(1), Mirror(1)', '7460'),
(18, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Vijayawada', 'cod', 'Night top(2), Night dress(1), Legginng(1)', '1452'),
(19, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Andhra Loyola College', 'netbanking', 'Night top(2), Night dress(1), Legginng(1)', '1452'),
(20, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Andhra', 'cod', 'Lipstick(1)', '135'),
(21, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Andhra', 'cod', 'Long top(1)', '650'),
(22, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Andhra Loyola College', 'cod', 'Butter(1)', '55'),
(23, 'Monika Sai', 'monikasai197@gmail.com', '9505990998', 'Vijayawada', 'cod', 'Point heels(1)', '780');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Point heels', 780, 'images/point.jpg', 'p1201'),
(2, 'Sandals', 450, 'images/sand.jpg', 'p1201'),
(3, 'Slippers', 380, 'images/slip.jpg', 'p1203'),
(4, 'Shoe heels', 2500, 'images/shoheel.jpg', 'p1204');

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE `stationary` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stationary`
--

INSERT INTO `stationary` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Marker', 50, 'images/marker.jpg', 'p1301'),
(2, 'Pencil', 35, 'images/pcl1.jpg', 'p1302'),
(3, 'Pens', 45, 'images/pen1.jpg', 'p1303'),
(4, 'Sharpner', 35, 'images/sharp.jpg', 'p1304');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'monika', '9505990998', 'monikasai197@gmail.com', 'moni');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Cucumber', 36, 'images/cucumber.jpg', 'p1401'),
(2, 'Bitter gaurd', 19, 'images/bitgd.jpg', 'p1402'),
(3, 'Brinjal', 30, 'images/brin.jpg', 'p1403'),
(4, 'Bottle gaurd', 27, 'images/btlgd.png', 'p1404');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cosmetics`
--
ALTER TABLE `cosmetics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grocery`
--
ALTER TABLE `grocery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leafy`
--
ALTER TABLE `leafy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensclothes`
--
ALTER TABLE `mensclothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensfoot`
--
ALTER TABLE `mensfoot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milkproducts`
--
ALTER TABLE `milkproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stationary`
--
ALTER TABLE `stationary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cosmetics`
--
ALTER TABLE `cosmetics`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grocery`
--
ALTER TABLE `grocery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leafy`
--
ALTER TABLE `leafy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mensclothes`
--
ALTER TABLE `mensclothes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mensfoot`
--
ALTER TABLE `mensfoot`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `milkproducts`
--
ALTER TABLE `milkproducts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stationary`
--
ALTER TABLE `stationary`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

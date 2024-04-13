-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 08:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `Subject`, `Message`, `id`) VALUES
('Henry Darst', 'sasukevegda@gmail.com', '9510233123', 'FOOD SUGGESTION', 'add some more new food !', 37),
('Jayesh Vegda', 'my3sonssjess@yahoo.com', '08780905976', 'Review', 'your food quality and service is osm ! 5/5 Star', 38),
('Sanket Seth', 'sankety@gmail.com', '9510214102', 'Business Proposal', 'I would like to tied with your site !', 39),
('Maheta Arnam', 'ar8416@gmail.com', '9510122155', 'FOOD COMPAIN', 'FOOD was not good !  improve pls', 40);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('', '', '', '', '', ''),
('admin', 'Admin', 'admin@admin.com', '9510233829', '15, Plot No 18, Twinkle Apartment, Adjoining Link ', 'admin'),
('admins', 'Jessica Sanchez', 'R00000003@gmail.com', '5052407107', 'PO Box 1937', 'Zayu@123'),
('kanye.west', 'Kanye West', 'Kanyeoffical@gmail.com', '9510233829', '', 'kanye'),
('meet', 'Meet ', 'meet@gmail.com', '9510233829', '', 'meet'),
('virat', 'Virat Kholi', 'viratkholi@india.com', '9510233829', '', 'virat'),
('virat.kholi', 'Virat Kohli', 'viratkholi@india.com', '9510233821', '', 'virat'),
('yuvika', 'Jayesh Vegda', 'yuvikavegda@gmail.com', '9510123123', '49, Digvijay plot, jamnagar', 'yuvika'),
('zayu', 'Jayesh Vegda', 'Jayeshvegda@gmail.com', '9510233829', '25, Dhan Bhavan, 1st Carpenter Street, C P Tank, C.p.tank', 'zayu'),
('zayu123', 'Jayesh Vegda', 'zayuvegda@gmail.com', '9510233829', '49,udhyog nagar road\r\nkhijda mandir vadi near', 'zayu123');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE',
  `s_text` varchar(30) NOT NULL,
  `r_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `images_path`, `options`, `s_text`, `r_name`) VALUES
(104, 'Margherita Pizza', 190, 'Pizza margherita, as the Italians call it, is a simple pizza hailing from Naples. When done right, margherita pizza features a bubbly crust', './images/product/margherita_pizza.jpeg', 'ENABLE', 'Loaded with Extra Cheese', 'LaPinoz'),
(105, 'English Pizza', 285, 'ENGLISH RETREAT PIZZA - a combination of Olives, Red Paprika, Tomatoes, Paneer, Capsicum, Cheese, Jalapeño Dip Hot delicious CHOCO LAVA loaded ', './images/product/english_pizza.png', 'ENABLE', 'Olives, Red Paprika, Tomatoes', 'LaPinoz'),
(106, 'Farm Villa', 195, 'As the name suggests, the farmhouse pizza is loaded with various fresh vegetarian toppings. Crunchy and crisp capsicum, juicy tomatoes, and succulent mushrooms', './images/product/farm_pizza.jpeg', 'ENABLE', 'Capsicum, Fresh Tomatoes, Pane', 'LaPinoz'),
(107, 'Garlic Pizza', 285, 'This quick Garlic Pizza is the cheesiest, most delicious pizza you\'ll make with my simple pizza dough and an herb roasted garlic butter!', './images/product/garlic_pizza.png', 'ENABLE', 'Hot Garlic Dip, Capsicum, Pane', 'LaPinoz'),
(116, 'Cheese n Corn', 439, 'A delectable combination of sweet &amp; juicy golden corn', './images/product/Corn.png', 'ENABLE', 'Chesse, corn', 'Dominos'),
(117, 'Cheese n Tomato', 439, 'A delectable combination of cheese and juicy tomato ', './images/product/Tomato.png', 'ENABLE', 'cheese, tomato', 'Dominos'),
(118, 'Veg Loaded', 439, 'Chewy, slow-rise pizza dough with roasted mushrooms and veggie', './images/product/Loaded.png', 'ENABLE', 'Chesse, Vaggie', 'Dominos'),
(119, 'Corn Pizza', 350, 'Cutting fresh corn from the cob is a must for these cheery summer pizzas. It adds flavor and texture that you can\'t get from canned or frozen corn', './images/product/cornie.png', 'ENABLE', 'Golden Corn, Chesse', 'Dominos');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `email`, `password`) VALUES
('admin', 'admin@admin.com', 'admin'),
('jay', 'jaydhanukiya@gmail.com', 'jay');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `r_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `r_name`) VALUES
(264, 'Farm Villa', 195, 2, '2022-09-14', 'admin', 'LaPinoz'),
(265, 'Veg Loaded', 439, 1, '2022-09-14', 'admin', 'Dominos'),
(266, 'Cheese n Corn', 439, 2, '2022-09-14', 'admin', 'Dominos'),
(267, 'Garlic Pizza', 285, 1, '2022-09-14', 'admin', 'LaPinoz'),
(268, 'English Pizza', 285, 1, '2022-09-14', 'zayu', 'LaPinoz'),
(269, 'Farm Villa', 195, 1, '2022-09-14', 'zayu', 'LaPinoz'),
(270, 'English Pizza', 285, 1, '2022-09-15', 'admin', 'LaPinoz'),
(271, 'Margherita Pizza', 190, 2, '2022-09-16', 'admin', 'LaPinoz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`) USING BTREE;

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

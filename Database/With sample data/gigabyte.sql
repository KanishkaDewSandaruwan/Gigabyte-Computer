-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 05:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gigabyte`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `image`) VALUES
(3, 'Best-Advertisement-Services-in-Sri-Lanka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Keyboard'),
(2, 'Headphones');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `date_of_birth`, `phone`, `email`, `address`, `password`, `trn_date`) VALUES
(3, 'Kanishka', 'Sandaruwan', '1996.09.23', 713664071, 'kanishkadewsandaruwan@gmail.com', 'Banwalgodalla, Kosmulla', '827ccb0eea8a706c4c34a16891f84e7b', '2020-12-11 12:03:31'),
(5, 'Kanishka', 'Sandaruwan', '1996.09.23', 713664071, 'kanishkadewsandaruwan123@gmail.com', 'Banwalgodalla, Kosmulla', '827ccb0eea8a706c4c34a16891f84e7b', '2020-12-13 12:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `customer_backup`
--

CREATE TABLE `customer_backup` (
  `backup_id` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_backup`
--

INSERT INTO `customer_backup` (`backup_id`, `customer_id`, `name`, `phone`, `email`, `trn_date`) VALUES
(1, '2', 'Kanishka Sandaruwan', '713664071', 'kanishkadewsandaruwan@gmail.com', '2020-12-11 12:03:00'),
(2, '4', 'Kanishka Sandaruwan', '713664071', 'kanishkadewsandaruwan5@gmail.com', '2020-12-12 12:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `full_name`, `address`, `phone_number`, `email`, `gender`, `password`, `username`, `trndate`) VALUES
(2, '', '', 0, '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '2020-11-22 11:15:44'),
(3, 'Kanishka Dew Sandaruwan', 'Banwalgodalla, Kosmulla', 713664071, 'kanishkadewsandaruwan@gmail.com1', 'Male', '827ccb0eea8a706c4c34a16891f84e7b', 'dew', '2020-12-12 12:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `getorder`
--

CREATE TABLE `getorder` (
  `order_id` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `product_ids` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `accept` varchar(255) NOT NULL,
  `shipped` varchar(255) NOT NULL,
  `deliver` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `getorder`
--

INSERT INTO `getorder` (`order_id`, `customer_id`, `product_ids`, `amount`, `payment_type`, `address`, `accept`, `shipped`, `deliver`, `paid`, `trn_date`) VALUES
(28, '2', '6', 3969, 'COD', 'Banwalgodalla, Kosmulla', 'Accepted', 'Shipped', 'Diliverd', 'Paid', '2020-12-11 12:03:15'),
(29, '3', '9,11', 16469, 'COD', 'Banwalgodalla, Kosmulla', 'Reject', 'Reject', 'Pending', 'Pending', '2020-10-11 12:03:59'),
(32, '3', '9,7', 8719, 'COD', 'Banwalgodalla, Kosmulla', 'Accepted', 'Shipped', 'Diliverd', 'Pending', '2020-12-12 12:20:06'),
(33, '3', '6,9', 5519, 'COD', 'Banwalgodalla, Kosmulla', 'Pending', 'Pending', 'Pending', 'Pending', '2020-12-13 12:03:02'),
(34, '5', '10,7,8', 14219, 'COD', 'Banwalgodalla, Kosmulla', 'Pending', 'Pending', 'Pending', 'Pending', '2020-12-13 12:03:24'),
(35, '5', '9,5', 3269, 'COD', 'Banwalgodalla, Kosmulla', 'Pending', 'Pending', 'Pending', 'Pending', '2020-12-13 12:03:56'),
(36, '5', '6,10', 9969, 'COD', 'Banwalgodalla, Kosmulla', 'Pending', 'Pending', 'Pending', 'Pending', '2020-12-13 12:03:08'),
(37, '5', '3,9,8', 4469, 'COD', 'Banwalgodalla, Kosmulla', 'Pending', 'Pending', 'Pending', 'Pending', '2020-12-13 12:03:49'),
(38, '3', '5,8,3', 5769, 'COD', 'Banwalgodalla, Kosmulla', 'Pending', 'Pending', 'Pending', 'Pending', '2020-12-13 12:04:26'),
(39, '3', '12', 16219, 'COD', 'Banwalgodalla, Kosmulla', 'Accepted', 'Shipped', 'Diliverd', 'Paid', '2020-12-13 12:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `email`, `subject`, `message`, `trn_date`) VALUES
(1, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'aa', 'aaa', '2020-12-12 12:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `pramotion`
--

CREATE TABLE `pramotion` (
  `pramo_id` int(11) NOT NULL,
  `pramo_code` varchar(255) NOT NULL,
  `promo_precentage` int(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pramotion`
--

INSERT INTO `pramotion` (`pramo_id`, `pramo_code`, `promo_precentage`, `start_date`, `end_date`) VALUES
(1, 'pramo123', 10, '2020-12-02', '2020-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `original_price` int(255) NOT NULL,
  `sell_price` int(255) NOT NULL,
  `qnt` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `available` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `warenty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `title`, `description`, `highlight`, `cat_id`, `original_price`, `sell_price`, `qnt`, `image`, `trn_date`, `available`, `code`, `warenty`) VALUES
(3, 'Logitec Keyboard New', 'You can use this keyboard with pc and laptops', 'Best Keyboard in world', '1', 450, 750, 500, 'keyboard.jpg', '2020-11-21 11:18:44', 'Yes', 'PC01', '3 Month'),
(5, 'Logitec Bluetooth keyboard', 'Patta sssds', 'Best Keyboard', '1', 1000, 1800, 20, 'download.jpg', '2020-11-21 11:18:49', 'Yes', 'PC02', '6 Month'),
(6, 'Logitec Keyboard Gaming', 'kaniya', 'Best Keyboard', '1', 2500, 3000, 20, 'keyboard.jpg', '2020-11-22 11:06:13', 'Yes', 'PC03', '5 Year'),
(7, 'Unix Headphone', 'Patta Headphone', 'This is the best Head phone', '2', 1500, 2000, 20, '41srzfxYpXL._AC_.jpg', '2020-11-23 11:19:59', 'Yes', 'PC04', '6 Month'),
(8, 'Bluetooth', 'Good', 'Best Headphone in world', '2', 2500, 3000, 20, '41srzfxYpXL._AC_.jpg', '2020-11-24 11:03:32', 'Yes', 'PC05', '2 Years'),
(9, 'Logitec Keyboard', 'Patta sssds', 'Best Keyboard in world', '1', 450, 500, 100, 'keyboard.jpg', '2020-11-24 11:04:05', 'Yes', 'PC06', '3 Month'),
(10, 'Gamin Keyboard', 'Painkillers', 'Best Keyboard in world', '1', 5000, 6000, 10, 'keyboard.jpg', '2020-11-24 11:04:44', 'Yes', 'PC06', '5 Years');

-- --------------------------------------------------------

--
-- Table structure for table `productgalary`
--

CREATE TABLE `productgalary` (
  `galary_id` int(11) NOT NULL,
  `pid` int(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productgalary`
--

INSERT INTO `productgalary` (`galary_id`, `pid`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`) VALUES
(2, 3, 'download.jpg', 'keyboard.jpg', 'download.jpg', 'keyboard.jpg', 'keyboard.jpg', 'keyboard.jpg'),
(3, 7, 'car-lights-header-by-afreepixel.jpg', 'Best-Advertisement-Services-in-Sri-Lanka.jpg', 'Dry-ice-cubes-1024x576.jpg', 'car-lights-header-by-afreepixel.jpg', 'Best-Advertisement-Services-in-Sri-Lanka.jpg', 'car-lights-header-by-afreepixel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_backup`
--

CREATE TABLE `product_backup` (
  `product_backup_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `pid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_backup`
--

INSERT INTO `product_backup` (`product_backup_id`, `title`, `image`, `trn_date`, `pid`) VALUES
(1, 'Logitec Keyboard Grade A', 'keyboard.jpg', '2020-12-12 12:20:39', '11'),
(2, 'Core to 2', '130262147_132253888693998_5597267228530318428_o.jpg', '2020-12-13 12:04:36', '12');

-- --------------------------------------------------------

--
-- Table structure for table `slider_banner`
--

CREATE TABLE `slider_banner` (
  `slider_banner_id` int(11) NOT NULL,
  `slider_banner_01` varchar(255) NOT NULL,
  `slider_banner_02` varchar(255) NOT NULL,
  `slider_banner_03` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_banner`
--

INSERT INTO `slider_banner` (`slider_banner_id`, `slider_banner_01`, `slider_banner_02`, `slider_banner_03`) VALUES
(8, 'car-lights-header-by-afreepixel.jpg', 'download.jpg', 'Best-Advertisement-Services-in-Sri-Lanka.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_backup`
--
ALTER TABLE `customer_backup`
  ADD PRIMARY KEY (`backup_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `getorder`
--
ALTER TABLE `getorder`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `pramotion`
--
ALTER TABLE `pramotion`
  ADD PRIMARY KEY (`pramo_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `productgalary`
--
ALTER TABLE `productgalary`
  ADD PRIMARY KEY (`galary_id`);

--
-- Indexes for table `product_backup`
--
ALTER TABLE `product_backup`
  ADD PRIMARY KEY (`product_backup_id`);

--
-- Indexes for table `slider_banner`
--
ALTER TABLE `slider_banner`
  ADD PRIMARY KEY (`slider_banner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_backup`
--
ALTER TABLE `customer_backup`
  MODIFY `backup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `getorder`
--
ALTER TABLE `getorder`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pramotion`
--
ALTER TABLE `pramotion`
  MODIFY `pramo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `productgalary`
--
ALTER TABLE `productgalary`
  MODIFY `galary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_backup`
--
ALTER TABLE `product_backup`
  MODIFY `product_backup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider_banner`
--
ALTER TABLE `slider_banner`
  MODIFY `slider_banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

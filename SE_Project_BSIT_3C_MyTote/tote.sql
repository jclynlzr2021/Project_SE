-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 09:14 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(255) NOT NULL,
  `admin_lname` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_email`, `admin_pass`) VALUES
(1, 'Angelica', 'Corcuera', 'admin@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `prod_name` varchar(250) NOT NULL,
  `prod_image` varchar(250) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` double(10,2) NOT NULL,
  `total_amount` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `p_id`, `ip_add`, `user_id`, `prod_name`, `prod_image`, `qty`, `price`, `total_amount`) VALUES
(38, 20, '0', 7, 'Life', 'image/st10.jpg', 2, 249.00, 498.00),
(39, 5, '0', 8, 'Mac', 'image/pouch1.jpg', 900, 159.00, 143100.00),
(40, 6, '0', 8, 'Engineer', 'image/pouch8.jpg', 6, 199.00, 1194.00),
(41, 7, '0', 8, 'Girl', 'image/pouch5.jpg', 1, 199.00, 258.70),
(42, 21, '0', 8, 'Kitty', 'image/pouch9.jpg', 1, 133.00, 133.00),
(43, 21, '0', 9, 'Kitty', 'image/pouch9.jpg', 1, 133.00, 133.00),
(44, 20, '0', 9, 'Life', 'image/st10.jpg', 1, 249.00, 249.00),
(45, 1, '0', 7, 'Monster', 'image/bag1.jpg', 1, 199.00, 199.00),
(46, 4, '0', 7, 'Lawyer', 'image/bag5.jpg', 1, 199.00, 199.00),
(47, 3, '0', 7, 'Anchor', 'image/bag4.jpg', 1, 149.00, 149.00),
(48, 21, '0', 7, 'Kitty', 'image/pouch9.jpg', 1, 133.00, 133.00),
(49, 5, '0', 7, 'Mac', 'image/pouch1.jpg', 1, 159.00, 159.00),
(50, 2, '0', 10, 'Elsa', 'image/bag2.jpg', 1, 199.00, 199.00),
(51, 10, '0', 7, 'Vibes', 'image/st2.jpg', 5, 300.00, 1500.00),
(52, 6, '0', 7, 'Engineer', 'image/pouch8.jpg', 1, 199.00, 199.00),
(53, 2, '0', 7, 'Elsa', 'image/bag2.jpg', 1, 199.00, 199.00),
(54, 3, '0', 8, 'Anchor', 'image/bag4.jpg', 1, 149.00, 149.00),
(55, 10, '0', 8, 'Vibes', 'image/st2.jpg', 1, 300.00, 300.00),
(56, 20, '0', 8, 'Life', 'image/st10.jpg', 1, 249.00, 249.00),
(57, 9, '0', 8, 'IT', 'image/st1.jpg', 1, 300.00, 300.00),
(58, 8, '0', 8, 'Slay', 'image/st4.jpg', 1, 199.00, 199.00),
(59, 22, '0', 8, 'Heart', 'uploads/bag7.jpg', 1, 199.00, 199.00);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Tote Bag'),
(2, 'Trendy Pouch'),
(3, 'Drawstring');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `feed_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `imageid` int(11) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_type` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_type`, `user_id`, `user_fname`, `user_lname`, `user_image`, `user_message`) VALUES
(1, 1, 0, 'mmsnd', 'msndms', '', 'dssmnd'),
(2, 1, 0, 'Coranel', 'Chua', '', 'Hi. Can i get your number?'),
(3, 1, 0, 'fdf', 'dfdd', '', 'dfddf'),
(4, 1, 0, 'asdsds', 'sdsad', '', 'as'),
(5, 2, 0, 'sjakjsd', 'skl', '', 'sdkas;daslkd');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` double(10,2) NOT NULL,
  `prod_sale` varchar(3) NOT NULL,
  `prod_price_sale` double(10,2) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_desc` varchar(255) NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `cat_id`, `prod_name`, `prod_price`, `prod_sale`, `prod_price_sale`, `prod_image`, `prod_desc`, `keywords`) VALUES
(1, 1, 'Monster', 199.00, 'no', 0.00, 'image/bag1.jpg', '3 Layered Cloth\r\nPolyester Cloth\r\nPelon\r\nLining\r\nSize: 15 x 14 inches\r\nStrap length 12 inches\r\nVelcro tape serves as lock\r\nGuranteed durable. Can carry up to two laptops.\r\n', ''),
(2, 1, 'Elsa', 199.00, 'no', 0.00, 'image/bag2.jpg', '3 Layered Cloth\r\nPolyester Cloth\r\nPelon\r\nLining\r\nSize: 15 x 14 inches\r\nStrap length 12 inches\r\nVelcro tape serves as lock\r\nGuranteed durable. Can carry up to two laptops.\r\n', ''),
(3, 1, 'Anchor', 149.00, 'yes', 199.00, 'image/bag4.jpg', '3 Layered Cloth Polyester Cloth Pelon Lining Size: 15 x 14 inches Strap length 12 inches Velcro tape serves as lock Guranteed durable. Can carry up to two laptops.', 'anchor'),
(4, 1, 'Lawyer', 199.00, '', 0.00, 'image/bag5.jpg', '3 Layered Cloth Polyester Cloth Pelon Lining Size: 15 x 14 inches Strap length 12 inches Velcro tape serves as lock Guranteed durable. Can carry up to two laptops.', 'bag'),
(5, 2, 'Mac', 159.00, 'yes', 199.00, 'image/pouch1.jpg', '3 Layered Cloth\r\nPolyester Cloth\r\nPelon\r\nLining\r\nSize: 6.5 x 5 inches', ''),
(6, 2, 'Engineer', 199.00, 'no', 0.00, 'image/pouch8.jpg', '3 Layered Cloth\r\nPolyester Cloth\r\nPelon\r\nLining\r\nSize: 6.5 x 5 inches', ''),
(7, 2, 'Girl', 199.00, '', 0.00, 'image/pouch5.jpg', '3 Layered Cloth\r\nPolyester Cloth\r\nPelon\r\nLining\r\nSize: 6.5 x 5 inches', ''),
(8, 3, 'Slay', 199.00, '', 0.00, 'image/st4.jpg', '3 Layered Cloth\r\nSpecial cloth for printing\r\nBlack lining (inside)\r\nDurable special black cloth(front and back)\r\nFront: 100% polyester\r\nBack: Full black cloth smooth and durable\r\n13 x 16 inches', ''),
(9, 3, 'IT', 300.00, '', 0.00, 'image/st1.jpg', '3 Layered Cloth\r\nSpecial cloth for printing\r\nBlack lining (inside)\r\nDurable special black cloth(front and back)\r\nFront: 100% polyester\r\nBack: Full black cloth smooth and durable\r\n13 x 16 inches', ''),
(10, 3, 'Vibes', 300.00, '', 0.00, 'image/st2.jpg', '3 Layered Cloth\r\nSpecial cloth for printing\r\nBlack lining (inside)\r\nDurable special black cloth(front and back)\r\nFront: 100% polyester\r\nBack: Full black cloth smooth and durable\r\n13 x 16 inches', ''),
(20, 3, 'Life', 249.00, 'yes', 300.00, 'image/st10.jpg', '3 Layered Cloth\r\nSpecial cloth for printing\r\nBlack lining (inside)\r\nDurable special black cloth(front and back)\r\nFront: 100% polyester\r\nBack: Full black cloth smooth and durable\r\n13 x 16 inches', ''),
(21, 2, 'Kitty', 133.00, 'yes', 199.00, 'image/pouch9.jpg', '3 Layered Cloth\r\nPolyester Cloth\r\nPelon\r\nLining\r\nSize: 6.5 x 5 inches', ''),
(22, 1, 'Heart', 199.00, '', 0.00, 'uploads/bag7.jpg', '3 Layered Cloth Polyester Cloth Pelon Lining Size: 15 x 14 inches Strap length 12 inches Velcro tape serves as lock Guranteed durable. Can carry up to two laptops.', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_bday` date NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_add` varchar(255) NOT NULL,
  `user_zip` int(11) NOT NULL,
  `user_contact` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_pass2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_lname`, `user_bday`, `user_age`, `user_gender`, `user_add`, `user_zip`, `user_contact`, `user_email`, `user_image`, `user_pass`, `user_pass2`) VALUES
(7, 'Varley', 'Miclat', '2017-03-09', 12, 'female', 'Bamban, Tarlac', 1234, '09286029325', 'angie@yahoo.com', 'uploads/65779_553684644655857_1630829286_n.jpg', 'password', 'password'),
(8, 'Coranel', 'Chua', '1997-09-04', 19, 'female', 'san joaquin', 2112, '09261429644', 'email@yahoo.com', 'uploads/17351133_1122411647903995_732200726_n.jpg', 'chua123', 'chua123'),
(9, 'regine', 'jimenez', '2017-08-14', 19, 'female', 'atlu bola mabalacat city pampanga', 2010, '09265173701', 'reginejimenez06@yahoo.com', 'uploads/GEDC0628.JPG', 'regine01', 'regine01'),
(10, 'ian', 'perez', '1996-03-07', 21, 'male', 'pagasa bamban tarlac', 1234, '09126536262', 'perezian@yahoo.com', 'uploads/GEDC0626.JPG', 'adminako12', 'adminako12'),
(11, 'angelica', 'dfdf', '2017-04-21', 12, 'male', 'jhhjh', 7678, '09365675086', 'angelicara@yahoo.com', 'uploads/65779_553684644655857_1630829286_n.jpg', 'password', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `imageid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

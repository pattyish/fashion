-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2019 at 08:17 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;


--
-- Database: `fashion_solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_table`
--

CREATE TABLE IF NOT EXISTS `cart_table` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `prodid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `total_unit_price` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cart_table`
--


-- --------------------------------------------------------

--
-- Table structure for table `categories_table`
--

CREATE TABLE IF NOT EXISTS `categories_table` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories_table`
--

INSERT INTO `categories_table` (`cat_id`, `category_name`) VALUES
(1, 'men '),
(2, 'women');

-- --------------------------------------------------------

--
-- Table structure for table `customers_table`
--

CREATE TABLE IF NOT EXISTS `customers_table` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customers_table`
--

INSERT INTO `customers_table` (`cust_id`, `firstname`, `lastname`, `gender`, `email`, `phone`, `username`, `password`) VALUES
(1, 'karangwa rwibutso', 'emmanuel', 'male', 'emmanuel@gmail.com', '0789124367', 'karangwa', '12345'),
(2, 'isingizwe gasana', 'aline', 'female', 'alinegasana@gmail.com', '0786543212', 'aline', '123456'),
(3, 'kanyange', 'delphine', 'female', 'delphine@gmail.com', '0785514140', 'kanyange', 'k1234'),
(6, 'iracyiza', 'benny', 'male', 'benny@gmail.com', '0782214140', 'benny', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prodid` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_origin` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_catid` int(11) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_description` text NOT NULL,
  PRIMARY KEY (`prodid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodid`, `product_name`, `product_origin`, `quantity`, `product_price`, `cat_id`, `sub_catid`, `product_image`, `product_description`) VALUES
(12, 'jacket', 'china', 200, 16000, 1, 1, 'upload/jacket122.jfif', 'jacket for men'),
(3, 'shorts', 'canada', 40, 4000, 2, 2, 'upload/Summer.jpg', 'best t-shirt ever for lower price, to buy it is the best idea'),
(13, 'shorts', 'canada', 40, 8000, 1, 2, 'upload/trouser.jfif', 'best t-shirt ever for lower price, to buy it is the best idea'),
(14, 'trouser', 'USA', 40, 10000, 1, 2, 'upload/t4.jpg', 'wear trouser, trouser is best clothe'),
(15, 'T_shirt', 'uganda', 300, 5000, 1, 1, 'upload/sh2.jpg', 'let see powerfull t-shirt is'),
(16, 'Dress ', 'france', 200, 20000, 2, 4, 'upload/dre1.jfif', 'this is good for every girl'),
(17, 'shorts', 'canada', 300, 5000, 2, 2, 'upload/bottom4.jfif', 'every girl look beautifull in shorts'),
(18, 'pant', 'korea', 60, 7000, 2, 2, 'upload/t7.jpg', 'woo pant');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `sub_catid` int(11) NOT NULL AUTO_INCREMENT,
  `sub_cat_name` varchar(40) NOT NULL,
  PRIMARY KEY (`sub_catid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_catid`, `sub_cat_name`) VALUES
(1, 'tops'),
(2, 'bottom'),
(3, 'outerwear'),
(4, 'dresses'),
(5, 'basic');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions_table`
--

CREATE TABLE IF NOT EXISTS `suggestions_table` (
  `sugid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `suggestion` text NOT NULL,
  PRIMARY KEY (`sugid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `suggestions_table`
--

INSERT INTO `suggestions_table` (`sugid`, `firstname`, `lastname`, `email`, `suggestion`) VALUES
(1, 'patrick', 'ishimwe', 'patrickishimwe16@gmail.com', ' we appreciate your service and your products');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_table`
--

CREATE TABLE IF NOT EXISTS `transaction_table` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`trans_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `transaction_table`
--


-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE IF NOT EXISTS `users_table` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`user_id`, `firstname`, `lastname`, `gender`, `email`, `phone`, `username`, `password`) VALUES
(1, 'ishimwe', 'patrick', 'male', 'patrickishimwe16@gmail.com', '0782214140', 'patty', 'patty123');

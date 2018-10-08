-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2018 at 08:32 पूर्वाह्न
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `p_id`, `product_name`, `product_price`, `file_name`, `quantity`, `u_id`) VALUES
(3, 3, 'Summer Love', '200', 'novel_summer_love.jpg', 4, 2),
(4, 1, 'The Heritage of Words', '150', 'heritage_of_words.jpg', 2, 2),
(5, 4, 'Seto Dharti', '300', 'novel_seto_dharti.jpg', 1, 2),
(6, 2, 'The Fundamental of Physics', '300', 'fundamental_physics_1.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `po_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `cart_total` varchar(100) NOT NULL,
  `bill_fname` varchar(100) NOT NULL,
  `bill_lname` varchar(100) NOT NULL,
  `bill_add` varchar(100) NOT NULL,
  `bill_city` varchar(100) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_phone` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`po_id`, `u_id`, `cart_total`, `bill_fname`, `bill_lname`, `bill_add`, `bill_city`, `bill_email`, `bill_phone`, `status`, `date`) VALUES
(1, 1, '4600', 'Roshan', 'Khadka', 'koteshwor, Mahadevsthan', 'khi', 'roshankhadka@female.com', '9843434343', 'delivered', '2018-07-25 11:37:38'),
(2, 2, '4200', 'Dipesh', 'Khadka', 'Mahadevsthan', 'khi', 'khadkadipesh@gmail.com', '9843251554', 'delivered', '2018-07-25 14:19:07'),
(3, 1, '2200', 'Abishek', 'Mahat', 'Banepa', 'psh', 'mahatabhishek@gmail.com', '9808987654', 'delivered', '2018-07-25 11:37:40'),
(4, 2, '5400', 'Dipesh', 'Khadka', 'Mahadevsthan', 'khi', 'dipeshkhadka@gmail.com', '9843251554', 'delivered', '2018-07-25 11:37:33'),
(5, 1, '2100', 'Pratit', 'Giri', 'Mahadevsthan', 'khi', 'pratitrajgiri@gmail.com', '9843188611', 'delivered', '2018-07-25 13:52:55'),
(6, 1, '2150', 'Roshan', 'Khadka', 'koteshwor, Mahadevsthan', 'khi', 'roshankhadka@female.com', '9843434343', 'delivered', '2018-07-25 14:19:08'),
(7, 1, '2100', 'Pratit', 'Giri', 'koteshwor, Mahadevsthan', 'isl', 'pratitrajgiri@gmail.com', '9898989898', 'delivered', '2018-07-26 14:00:12'),
(8, 1, '3200', 'dsfz', 'sdafa', 'koteshwor, Mahadevsthan', 'psh', 'as@as.com', '9090909090', 'delivered', '2018-07-27 09:22:05'),
(9, 1, '2900', 'Pratit', 'sdafa', 'koteshwor, Mahadevsthan', 'kot', 'as@as.com', '9898989898', 'delivered', '2018-07-27 13:20:23'),
(10, 4, '4000', 'keshav', 'verma', 'koteshwor, Mahadevsthan', 'koteshwor', 'pratitrajgiri@live.com', '9090909090', 'delivered', '2018-07-30 20:01:31'),
(11, 1, '700', 'Pratit', 'Giri', 'koteshwor, Mahadevsthan', 'koteshwor', 'pratitrajgiri@gmail.com', '9843434343', '', '2018-07-30 20:01:00'),
(12, 1, '400', 'Pratit', 'Giri', 'koteshwor, Mahadevsthan', 'baneshwor', 'pratitrajgiri@gmail.com', '9090909090', '', '2018-07-31 05:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_des` varchar(1000) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `file_ext` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `product_name`, `product_category`, `product_price`, `product_des`, `file_name`, `file_path`, `file_ext`) VALUES
(1, 'The Heritage of Words', '11sci', '150', 'This book is used for a year, and is in good condition and is offered for 70% less in the original marked price of Rs 800.', 'heritage_of_words.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(2, 'The Fundamental of Physics', '12sci', '300', 'This is grade 12 Physics book. It is used in all college as a course book as well as reference book. This was used for two year and still fresh and nothing is torn or no any pages are lost. Its a latest edition book and is offered in 60% less than the original price of Rs 900. A good book to buy because it is also one of the top seller book of India. Nepalese students even find it easy to read Indian writers book.', 'fundamental_physics_1.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(3, 'Summer Love', 'novel', '200', 'A good conditioned book used for 1 month. It is a great novel to read.', 'novel_summer_love.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(4, 'Seto Dharti', 'novel', '300', 'A very good story about Nepal''s history. A book to read, this book is only used for 2 months and is very good in condition. ', 'novel_seto_dharti.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(5, 'Palpasa Cafe', 'novel', '500', 'A good book to read and have. ', 'novel_palpasa.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(6, 'Harry Porter', 'novel', '1000', 'A series of Harry Porter stories. It is a very good book to read and is offered in 80% less than the original price.', 'novel_harry_porter.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(7, 'Chemistry', '12sci', '400', 'A class 12 needed book for chemistry. This can be used as a good reference book, its a very good book in good condition. This book was used for 1 year and is the latest edition.', 'chemistry_1.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(8, 'Chemistry Practical', 'course', '350', 'A needed book for chemistry practical for grade 12. this is the latest edition book that you can find in the market. ', 'chemistry_practical_1.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(9, 'Physics Practical', '12sci', '250', 'Based on the latest syllabus of HSEB this book was designed for grade 11 and 12 practical in physics. ', 'physics_practical_2.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(10, 'University Physics', '11sci', '800', 'University Physics is the name of a two-volume physics textbook written by Hugh Young and Roger Freedman. The first edition of University Physics was published by Mark Zemansky and Francis Sears in 1949. Hugh Young became a coauthor with Sears and Zemansky in 1973. Now in its 14th edition, University Physics is among the most widely used introductory textbooks in the world.\r\nThis book was used for 1 year and is the latest edition that you can find in the market.', 'university_physics.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(11, 'Matematics', '11sci', '500', 'Textbook for class 11 Science stream students.', 'mathematics.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(12, 'Meaning into Words', '12sci', '150', 'This book is very useful workbook for english.', 'meaning_into_words.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(13, 'Principle of Physics', '11sci', '500', 'Mostly used book for course book in all college around Nepal and this book is used as a reference material as well. The best seller of Nepal.', 'Physics_class_11.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(14, 'Business Studies', 'course', '700', 'This is a management book which is also a compulsory subject in class 11 and 12.', 'Business_studies.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(15, 'Physics Short Question', 'course', '200', 'This book is a collection of short questions and answers.', 'physics_sq.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg'),
(16, 'Chemistry for Higher Studies', 'course', '500', 'This is a reference book for students of class 11.', 'chemistry_book.jpg', '/opt/lampp/htdocs/e-commerce/uploads/', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `ph_id` int(11) NOT NULL,
  `oh` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_qty` varchar(100) NOT NULL,
  `u_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_history`
--

INSERT INTO `purchase_history` (`ph_id`, `oh`, `p_name`, `p_price`, `p_qty`, `u_id`, `date`) VALUES
(1, 1, 'Disciplined Entrerpreneurship', '1200', '3', 1, '2018-07-24 18:49:52'),
(2, 2, 'Discipline Entrerpreneurship', '2000', '1', 2, '2018-07-25 10:36:37'),
(3, 2, 'Disciplined Entrerpreneurship', '1200', '1', 2, '2018-07-25 10:36:37'),
(4, 3, 'Sajilo', '1200', '1', 1, '2018-07-25 10:39:53'),
(5, 4, 'Discipline Entrerpreneurship', '2000', '1', 2, '2018-07-25 11:31:13'),
(6, 4, 'Disciplined Entrerpreneurship', '1200', '2', 2, '2018-07-25 11:31:13'),
(7, 5, 'Summer Love', '200', '1', 1, '2018-07-25 13:52:26'),
(8, 5, 'The Heritage of Words', '150', '2', 1, '2018-07-25 13:52:26'),
(9, 5, 'The Fundamental of Physics', '300', '2', 1, '2018-07-25 13:52:26'),
(10, 6, 'The Heritage of Words', '150', '1', 1, '2018-07-25 14:18:42'),
(11, 6, 'Harry Porter', '1000', '1', 1, '2018-07-25 14:18:42'),
(12, 7, 'The Heritage of Words', '150', '2', 1, '2018-07-26 13:59:41'),
(13, 7, 'The Fundamental of Physics', '300', '1', 1, '2018-07-26 13:59:42'),
(14, 7, 'Seto Dharti', '300', '1', 1, '2018-07-26 13:59:42'),
(15, 7, 'Summer Love', '200', '1', 1, '2018-07-26 13:59:42'),
(16, 8, 'Harry Porter', '1000', '2', 1, '2018-07-27 09:21:51'),
(17, 8, 'Summer Love', '200', '1', 1, '2018-07-27 09:21:51'),
(18, 9, 'The Heritage of Words', '150', '1', 1, '2018-07-27 11:27:08'),
(19, 9, 'Seto Dharti', '300', '2', 1, '2018-07-27 11:27:08'),
(20, 9, 'Palpasa Cafe', '500', '1', 1, '2018-07-27 11:27:08'),
(21, 9, 'Chemistry Practical', '350', '1', 1, '2018-07-27 11:27:09'),
(22, 9, 'The Fundamental of Physics', '300', '1', 1, '2018-07-27 11:27:09'),
(23, 10, 'Harry Porter', '1000', '3', 4, '2018-07-27 13:19:46'),
(24, 11, 'The Fundamental of Physics', '300', '2', 1, '2018-07-30 20:01:00'),
(25, 12, 'The Fundamental of Physics', '300', '1', 1, '2018-07-31 05:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `sell_products`
--

CREATE TABLE `sell_products` (
  `book_name` text NOT NULL,
  `book_author` text NOT NULL,
  `book_edition` varchar(30) NOT NULL,
  `book_type` int(11) NOT NULL,
  `book_publication` int(11) NOT NULL,
  `book_description` int(11) NOT NULL,
  `book_condition` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `fname`, `lname`, `username`, `email`, `password`, `status`) VALUES
(1, 'Pratit', 'Giri', 'irigpratit', 'pratitrajgiri@gmail.com', 'admin', 'admin'),
(2, 'Dipesh', 'Khadka', 'khadkakaji', 'dipeshkhadka@gmail.com', 'user', 'user'),
(3, 'keshav', 'verma', 'kirito09', 'keshaverma99@gmail.com', 'apolo456789', ''),
(4, 'keshav', 'verma', 'kev09', 'keshaverma999@gmail.com', 'astro456789', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`ph_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `ph_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

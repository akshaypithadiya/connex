-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2018 at 04:04 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`` PROCEDURE `AddGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64), `t_srid` INT)  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' ADD ', geometry_column,' GEOMETRY REF_SYSTEM_ID=', t_srid); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

CREATE DEFINER=`` PROCEDURE `DropGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64))  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' DROP ', geometry_column); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `note_txt` varchar(240) NOT NULL,
  `note_date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`note_id`, `user_name`, `note_txt`, `note_date_time`) VALUES
(12, 'akshay', 'now it should work', '16 September 2018 at 10:25 am'),
(13, 'akshay', 'a new note after design update.', '16 September 2018 at 09:25 pm'),
(14, 'akshay', 'yo ', '17 September 2018 at 02:05 pm'),
(15, 'akshay', 'another note', '17 September 2018 at 02:07 pm'),
(16, 'akshay', 'another one', '17 September 2018 at 02:07 pm'),
(17, 'dagdu123', 'apunich bhagwan hai\r\n', '20 September 2018 at 09:03 pm'),
(18, 'adidas', 'sup bro', '20 September 2018 at 09:29 pm'),
(19, 'akshay', 'a new note', '28 September 2018 at 08:37 am'),
(20, 'akshay', 'a new note 2', '28 September 2018 at 08:51 pm'),
(21, 'akshay', 'hey', '28 September 2018 at 08:58 pm');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `username`, `name`, `image`) VALUES
(4, 'omkar', 'Omkar Prabhu', 'gb.jpg'),
(5, 'akshay', 'Akshay Pithadiya', 'image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `propic` varchar(120) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `post_txt` text NOT NULL,
  `post_date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `full_name`, `propic`, `user_name`, `post_txt`, `post_date_time`) VALUES
(15, 'Akshay Pithadiya', 'akshay.jpg', 'akshay', 'hey, wassup!', '16 September 2018 at 06:54 pm'),
(16, 'Akshay Pithadiya', 'akshay.jpg', 'akshay', 'this is a random post to see if everything is working properly or not. Some things are remaining which i will complete tomorrow. :)', '16 September 2018 at 06:55 pm'),
(17, 'Akshay Pithadiya', 'akshay.jpg', 'akshay', 'hello.', '16 September 2018 at 09:05 pm'),
(20, 'Omkar Prabhu', '', 'omkar', 'hello world', '28 September 2018 at 08:49 pm'),
(22, 'Akshay Pithadiya', 'akshay.jpg', 'akshay', 'hello', '28 September 2018 at 08:51 pm'),
(23, 'Akshay Pithadiya', 'akshay.jpg', 'akshay', 'hey', '28 September 2018 at 08:55 pm'),
(24, 'Akshay Pithadiya', 'akshay.jpg', 'akshay', 'hello', '28 September 2018 at 08:57 pm'),
(25, 'Akshay Pithadiya', '', 'akshay', 'yo', '04 October 2018 at 09:33 pm'),
(26, 'Akshay Pithadiya', '', 'akshay', 'ewew', '06 October 2018 at 11:40 pm'),
(27, 'Tejas A', '', 'tejas', 'Rhyme, alliteration, assonance and consonance are ways of creating repetitive patterns of sound. They may be used as an independent structural element in a poem, to reinforce rhythmic patterns, or as an ornamental element.', '06 October 2018 at 11:46 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `fname` varchar(24) NOT NULL,
  `lname` varchar(24) NOT NULL,
  `email` varchar(24) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `about` varchar(120) NOT NULL,
  `city` varchar(50) NOT NULL,
  `propic` varchar(200) NOT NULL,
  `birthday` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `password`, `about`, `city`, `propic`, `birthday`) VALUES
(25, 'Omkar', 'Prabhu', 'omkar@gmail.com', 'omkar', 'abcd', 'i like to code.', 'Mumbai', 'IMG_20161127_162837008.jpg', ''),
(24, 'Akshay', 'Pithadiya', 'akshay@gmail.com', 'akshay', '1234', 'Hello, World!', 'Mumbai', 'akshay.jpg', ''),
(37, 'Tejas', 'A', 'tejas@gmail.com', 'tejas', 'xyz', 'abcd efgh ijkl mnop qrst uvw xyz', 'Mumbai', 'default.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

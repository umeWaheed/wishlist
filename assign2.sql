-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2016 at 05:19 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assign2`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `review` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `review`, `image`) VALUES
(1, 'The Great Gatsby', 'F. Scott Fitzgerald', 4, 'http://ecx.images-amazon.com/images/I/41eiFf1x23L._SL160_.jpg'),
(2, 'The Grapes of Wrath', 'John Steinbeck', 4, 'http://ecx.images-amazon.com/images/I/41adOkkXUzL._SL160_.jpg'),
(3, 'Nineteen Eighty-Four', 'George Orwell', 4, 'http://ecx.images-amazon.com/images/I/41Kv1qGuXUL._SL160_.jpg'),
(4, 'Ulysses', 'James Joyce', 3, 'http://ecx.images-amazon.com/images/I/51XEH13NOnL._SL160_.jpg'),
(5, 'Lolita', 'Vladimir Nabokov', 4, 'http://ecx.images-amazon.com/images/I/41gMT3BaWiL._SL160_.jpg'),
(6, 'Catch-22', 'Joseph Heller', 4, 'http://ecx.images-amazon.com/images/I/51kqbC3YKvL._SL160_.jpg'),
(7, 'The Catcher in the Rye', 'J. D. Salinger', 4, 'http://ecx.images-amazon.com/images/I/511BDFArolL._SL160_.jpg'),
(8, 'Beloved', 'Toni Morrison', 4, 'http://ecx.images-amazon.com/images/I/31BhkmDS75L._SL160_.jpg'),
(9, 'The Sound and the Fury', 'William Faulkner', 3, 'http://ecx.images-amazon.com/images/I/51wiIwgg8yL._SL160_.jpg'),
(10, 'To Kill a Mockingbird', 'Harper Lee', 4, 'http://ecx.images-amazon.com/images/I/51KFyfyK7eL._SL160_.jpg'),
(11, 'The Lord of the Rings', 'J. R. R. Tolkien', 4, 'http://ecx.images-amazon.com/images/I/516GyHY9p6L._SL160_.jpg'),
(12, 'One Hundred Years of Solitude', 'Gabriel García Márquez', 4, 'http://ecx.images-amazon.com/images/I/513GEHVNTBL._SL160_.jpg'),
(13, 'Brave New World', 'Aldous Huxley', 3, 'http://ecx.images-amazon.com/images/I/41kwa0ECKKL._SL160_.jpg'),
(14, 'To the Lighthouse', 'by Virginia Woolf', 3, 'http://ecx.images-amazon.com/images/I/41jK9O4kcbL._SL160_.jpg'),
(15, 'Invisible Man', 'Ralph Ellison', 4, 'http://ecx.images-amazon.com/images/I/41RYVHiPOdL._SL160_.jpg'),
(16, 'Gone with the Wind', 'Margaret Mitchell', 4, 'http://ecx.images-amazon.com/images/I/51OzjjUS28L._SL160_.jpg'),
(17, 'Jane Eyre', 'Charlotte Brontë', 4, 'http://ecx.images-amazon.com/images/I/51BcQQaBU8L._SL160_.jpg'),
(18, 'On the Road', 'Jack Kerouac', 3, 'http://ecx.images-amazon.com/images/I/51nr10ChxRL._SL160_.jpg'),
(19, 'Pride and Prejudice', 'Jane Austen', 4, 'http://ecx.images-amazon.com/images/I/51esDUk1Q6L._SL160_.jpg'),
(20, 'Lord of the Flies', 'William Golding', 4, 'http://ecx.images-amazon.com/images/I/51rgMeqmqaL._SL160_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

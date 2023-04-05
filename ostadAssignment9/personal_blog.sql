-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 05:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `excerpt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `excerpt`) VALUES
(1, 'sdfsdf', '../images/banner01.jpg', 'sdsdfsdf'),
(2, 'ultricies Lorem et lacinia.', '../images/about-me.jpg', 'ultricies Lorem et lacinia. ullamcorper tristique. et amet malesuada elit. non Sed vitae ullamcorper fermentum Nullam tellus dolor, consectetur adipiscing scelerisque. nisi vitae Sed malesuada consectetur sit venenatis massa ligula et vestibulum malesuada vel scelerisque. Maecenas nisi Maecenas ullamcorper tellus vestibulum risus. amet, Nulla a tincidunt Maecenas at. scelerisque. ut auctor vestibulum vel consectetur vel tristique. consectetur at vestibulum et malesuada In et et sit tellus vel non dignissim laoreet Nullam quis ipsum nisi Suspendisse sollicitudin elit. amet, vel lacinia. lacinia fermentum consectetur Maecenas vitae fringilla. vel at. consectetur tellus vel Sed sit tincidunt elit. et Suspendisse Nullam risus ipsum '),
(3, 'wewerer', '../images/ales-nesetril-Im7lZjxeLhg-unsplash.jpg', 'dgfdfg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'MD. Anwar Sayeed', 'anwar.saeed656@gmail.com', 'sdfsdfsdf', 'wewewert'),
(2, 'MD. Anwar Sayeed', 'anwar.saeed656@gmail.com', 'sdfsdfsdf', 'wewewert'),
(3, 'MD. Anwar Sayeed', 'anwar.saeed656@gmail.com', 'sdlkds fsdlkf sldfk sdf', 'zssdfsdf'),
(4, 'MD. Anwar Sayeed', 'anwar.saeed656@gmail.com', 'sdlkds fsdlkf sldfk sdf', 'zssdfsdf'),
(5, 'MD. Anwar Sayeed', 'anwar.saeed656@gmail.com', 'sdlkds fsdlkf sldfk sdf', 'sddfsdf'),
(6, 'MD. Anwar Sayeed', 'anwar.saeed656@gmail.com', 'sdlkds fsdlkf sldfk sdf', 'sddfsdf'),
(7, 'MD. Anwar Sayeed', 'anwar.saeed656@gmail.com', 'What is Lorem Ipsum?', 'sdfsdf'),
(8, 'MD. Anwar Sayeed', 'anwar.saeed656@gmail.com', 'What is Lorem Ipsum?', 'sdfsdf'),
(9, 'MD. Anwar Sayeed', 'anwar.saeed656@gmail.com', 'What is Lorem Ipsum?', 'sdfsdf'),
(10, 'MD. Anwar Sayeed', 'anwar.saeed656@gmail.com', 'What is Lorem Ipsum?', 'sdfsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

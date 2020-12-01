-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 12:24 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymnasium`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `section` varchar(15) NOT NULL,
  `section_code` varchar(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `article` text,
  `image_url` varchar(200) DEFAULT NULL,
  `video_url` varchar(200) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `accordions`
--

CREATE TABLE `accordions` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `paragraph` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `page` varchar(11) NOT NULL,
  `code` varchar(11) NOT NULL,
  `link` varchar(200) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `sub_title` varchar(200) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `blog_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `article` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `article` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `footer_contents`
--

CREATE TABLE `footer_contents` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `about` text NOT NULL,
  `credits` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_grid_image`
--

CREATE TABLE `home_grid_image` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `paragraph` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_s1_left`
--

CREATE TABLE `home_s1_left` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `paragraph` text NOT NULL,
  `bullets` text,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `serial` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `currency` varchar(6) NOT NULL,
  `amount` float NOT NULL,
  `duration` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pricing_article`
--

CREATE TABLE `pricing_article` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `article` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `details` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `facebook` varchar(1000) NOT NULL,
  `instagram` varchar(1000) NOT NULL,
  `twitter` varchar(1000) NOT NULL,
  `linked_in` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `serial` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`serial`, `user_id`, `email`, `password`, `date`) VALUES
(1, 'U5DA894F6E2', 'tester@mail.com', '$2y$10$jvgBIRtEBQHsGEMoJGP48uizMVOtCY4mKUPxw8ub/mCNfavnyaOn6', '2019-10-17 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `section_code` (`section_code`);

--
-- Indexes for table `accordions`
--
ALTER TABLE `accordions`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `footer_contents`
--
ALTER TABLE `footer_contents`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `home_grid_image`
--
ALTER TABLE `home_grid_image`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `home_s1_left`
--
ALTER TABLE `home_s1_left`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `pricing_article`
--
ALTER TABLE `pricing_article`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `accordions`
--
ALTER TABLE `accordions`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_contents`
--
ALTER TABLE `footer_contents`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_grid_image`
--
ALTER TABLE `home_grid_image`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_s1_left`
--
ALTER TABLE `home_s1_left`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricing_article`
--
ALTER TABLE `pricing_article`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

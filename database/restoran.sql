-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 07:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(20) NOT NULL,
  `brand_image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(100) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `guest_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `guest_name`, `guest_email`, `guest_message`) VALUES
(1, 'kazi', 'zana@gmail.com', 'fwstg'),
(2, 'Seikh Nirzana', 'zana@gmail.com', 'amar akta table lagbee'),
(3, 'kazi sara', 'sara@gmail.com', 'ami tomk biya kortee chai emam vaiyaa\r\n'),
(5, 'u', 'u@gmail.com', 'ok kazi vai'),
(6, 'emam vaiya', 'hasina@gmail.com', 'amar akhon biya korbar mon chay');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(20) NOT NULL,
  `post_by` varchar(100) NOT NULL,
  `foods_title` varchar(100) NOT NULL,
  `foods_details` text NOT NULL,
  `food_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(20) NOT NULL,
  `post_by` varchar(100) NOT NULL,
  `portfolio_title` varchar(100) NOT NULL,
  `portfolio_details` text NOT NULL,
  `portfolio_feature_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `post_by`, `portfolio_title`, `portfolio_details`, `portfolio_feature_photo`) VALUES
(19, 'jamal@gmail.com', 'KAZI KAMRUZZAMAN', 'HEAD CHEFS', '1650056333-1307.jpg'),
(22, 'jamal@gmail.com', 'KAZI TAMAL', 'ACCOUNT MANAGER', '1650056584-3620.jpg'),
(23, 'jamal@gmail.com', 'KAZI TARIK', 'CO-ASSISTANT CHEFS', '1650056622-3989.jpg'),
(28, 'jamal@gmail.com', 'KAZI ASAD', 'HR-ADMIN', '1650057764-5420.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `service_title` varchar(20) NOT NULL,
  `service_description` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_icon`, `service_title`, `service_description`, `status`) VALUES
(1, 'fa fa-user-circle', 'Master Chefs', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam', 'active'),
(2, 'fa fa-cutlery', 'Quality Food', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam', 'active'),
(3, 'fa fa-cart-plus', 'Online Order', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam', 'active'),
(4, 'fa fa-volume-control-phone', '24/7 Service', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam', 'active'),
(5, 'fa fa-user-circle', 'Master Chefs', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam', 'active'),
(6, 'fa fa-cutlery', 'Quality Food', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam', 'active'),
(7, 'fa fa-cart-plus', 'Online Order', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam', 'active'),
(8, 'fa fa-volume-control-phone', '24/7 Service', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(20) NOT NULL,
  `testimonial_text` text NOT NULL,
  `testimonial_name` varchar(50) NOT NULL,
  `testimonial_dasignation` varchar(100) NOT NULL,
  `testimonial_stars` int(5) NOT NULL,
  `testimonial_Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonial_text`, `testimonial_name`, `testimonial_dasignation`, `testimonial_stars`, `testimonial_Image`) VALUES
(1, 'amar sonar bangla amai too may ava;lo bashi', 'seikh nirxana', 'COO', 4, ''),
(2, 'hello vai jan', 'seikh nirxana', 'MD', 5, ''),
(3, 'BEST work ever i have seen', 'kazi Asad', 'SEO', 5, ''),
(4, 'An event is a message sent by an object to signal hbwuhf ub h bv', 'Kazi tarik', 'ECO', 5, ''),
(5, 'amar sonar bangla amai too may ava;lo bashi', 'seikh nirxana', 'COO', 4, ''),
(6, 'hello vai jan', 'seikh nirxana', 'MD', 5, ''),
(7, 'BEST work ever i have seen', 'kazi Asad', 'SEO', 5, ''),
(8, 'An event is a message sent by an object to signal hbwuhf ub h bv', 'Kazi tarik', 'ECO', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `text_settings`
--

CREATE TABLE `text_settings` (
  `id` int(20) NOT NULL,
  `setting_name` varchar(100) NOT NULL,
  `setting_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text_settings`
--

INSERT INTO `text_settings` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'ban_text', 'Enjoy Our Delicious Meal '),
(2, 'ban_details', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet'),
(3, 'fb_link', 'https://www.facebook.com/kazi.emam.9'),
(4, 'tw_link', 'https://twitter.com/KaziEmam3'),
(5, 'about_text', 'My skills is HTML-5, CSS-3, Bootstrap-5, JavaScrip..'),
(6, 'address', 'Dhaka, Bangladesh'),
(7, 'phone', '+880 1775536198'),
(8, 'email', 'kaziemam007@gmail.com'),
(9, 'instagram', 'https://www.instagram.com/kazi_emam_h_salman/'),
(10, 'about_textarea', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profile_img` varchar(150) NOT NULL DEFAULT 'defoultPP.png',
  `role` varchar(50) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email_address`, `password`, `gender`, `profile_img`, `role`) VALUES
(52, 'echo', 'echo@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9', 'female', 'defoultPP.png', 'admin'),
(53, 'KAZI EMAM', 'kazi@gamil.com', '698d51a19d8a121ce581499d7b701668', 'male', 'defoultPP.png', 'admin'),
(54, 'Seikh Nirzana', 'zana@emam.com', '310dcbbf4cce62f762a2aaa148d556bd', 'female', 'defoultPP.png', 'admin'),
(55, 'mannaf', 'mannaf@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 'defoultPP.png', 'admin'),
(56, 'emam', 'e@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', 'defoultPP.png', 'admin'),
(64, 'aa', 'aa@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', 'defoultPP.png', 'admin'),
(65, 'h', 'h@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', '65.jpg', 'admin'),
(66, 'koko', 'koko@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', '66.jpg', 'admin'),
(67, 'jamal', 'jamal@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'male', '67.jpg', 'admin'),
(68, 'sumon', 'sumon@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '68.jpg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_settings`
--
ALTER TABLE `text_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `text_settings`
--
ALTER TABLE `text_settings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

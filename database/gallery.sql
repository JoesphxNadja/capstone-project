-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 08:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `pics`
--

CREATE TABLE `pics` (
  `id` int(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `img` varchar(3000) NOT NULL,
  `ext` varchar(30) NOT NULL,
  `description` varchar(25500) NOT NULL,
  `cate` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pics`
--

INSERT INTO `pics` (`id`, `title`, `username`, `img`, `ext`, `description`, `cate`) VALUES
(27, 'Lovely View captured', 'mike4321', 'uploads/screencapture-localhost-CBCR-active-jobs-php-2020-03-06-19_42_46.png', 'png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has suIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'awean'),
(28, 'assa', 'mike4321', 'uploads/screencapture-localhost-CBCR-admin-jobs-applied-php-2020-03-06-23_06_35.png', 'png', 'Lorem Ipsum is simply dummy text of the priIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).nting and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'asas'),
(29, 'Lovely View captured', 'amna', 'uploads/notattoo-x400-thumb.jpg', 'jpg', 'gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd gfdgdgdg dgd dddggdd ', 'awean'),
(31, 'sdsddsds', 'jawadtrainer', 'uploads/roses.jpg', 'jpg', 'adaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssdadaddsssd', 'sdsdsd'),
(32, 'sdsdsd', 'jawadtrainer', 'uploads/flower.jpg', 'jpg', 'saasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassasaasassa', 'dssdsd'),
(33, 'sdsdsdsd', 'jawadtrainer', 'uploads/PA.jpg', 'jpg', 'asssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssss', 'sdsdsd'),
(34, 'dssd', 'jawadtrainer', 'uploads/SSS.jpg', 'jpg', 'asssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssss', 'sdsdsd'),
(35, 'sdsd', 'jawadtrainer', 'uploads/SNOW.jpg', 'jpg', 'asssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssss', 'sdsd'),
(36, 'SDSDSD', 'jawadtrainer', 'uploads/ME.jpg', 'jpg', 'asssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssss', 'SDSD'),
(37, 'SDDSDS', 'jawadtrainer', 'uploads/images (1).jpg', 'jpg', ' asssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssss       \r\n      ', 'DSDDSSD'),
(38, 'SDSDDS', 'jawadtrainer', 'uploads/flower.jpg', 'jpg', 'asssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssss', 'SDSD'),
(39, 'SSSA', 'jawadtrainer', 'uploads/download (10).jpg', 'jpg', 'asssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssss        \r\n      ', 'ASAS'),
(40, 'ASAS', 'jawadtrainer', 'uploads/download (6).jpg', 'jpg', 'asssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssss        \r\n      ', 'ASASAS'),
(41, 'SDSD', 'jawadtrainer', 'uploads/contre_jour_leaves_lens_flare_meadow_nature_park_sky_summer-948356.jpg', 'jpg', 'asssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssssasssssssssssssss        \r\n      ', 'SDSD'),
(42, 'sdsdsd', 'jawadtrainer', 'uploads/64083-natures-temples.jpg', 'jpg', 'color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;', 'sdsdsd'),
(43, 'sdsdds', 'jawadtrainer', 'uploads/download (6).jpg', 'jpg', 'color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;color: purple;        \r\n      ', 'sdsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(11000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`) VALUES
(2, 'jackson1234', 'jackson.ponting@gmail.com', 'asd4321', '0'),
(3, 'jawadtrainer', 'jawad.ranjha@yahoo.com', 'asd4321', 'gnm,./saasassasasaassa'),
(4, 'Admin', 'admin@gmail.com', 'admin4321', ''),
(5, 'amna', 'amina.ranjha@yahoo.com', 'asd4321', 'sdsdsdsdsdsdsdsdsdsdsdsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pics`
--
ALTER TABLE `pics`
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
-- AUTO_INCREMENT for table `pics`
--
ALTER TABLE `pics`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

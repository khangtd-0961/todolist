-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2019 at 04:16 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `QLSV`
--

-- --------------------------------------------------------

--
-- Table structure for table `diems`
--

CREATE TABLE `diems` (
  `id` int(11) NOT NULL,
  `mamonhoc` varchar(500) NOT NULL,
  `masinhvien` varchar(500) NOT NULL,
  `diem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lops`
--

CREATE TABLE `lops` (
  `id` int(11) NOT NULL,
  `malop` varchar(500) NOT NULL,
  `tenlop` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `monhocs`
--

CREATE TABLE `monhocs` (
  `id` int(11) NOT NULL,
  `mamonhoc` varchar(500) NOT NULL,
  `tenlop` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `ID` int(11) NOT NULL,
  `Masinhvien` varchar(500) NOT NULL,
  `Mamonhoc` varchar(500) NOT NULL,
  `Malop` varchar(500) NOT NULL,
  `Ten` varchar(500) NOT NULL,
  `Ngaysinh` datetime NOT NULL,
  `Gioitinh` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `Masinhvien`, `Mamonhoc`, `Malop`, `Ten`, `Ngaysinh`, `Gioitinh`) VALUES
(2, '1551060749', 'van', '57th2', 'khang', '2019-09-05 00:00:00', 'nam'),
(4, 'sfdf', 'sfdf', 'sdfsf', 'sdfsdf', '2019-09-20 12:25:00', 'dsfdf');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `body` varchar(500) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'hello', 'Ã­s me', '2019-09-24 08:49:49', '1569314989');

-- --------------------------------------------------------

--
-- Table structure for table `sinhviens`
--

CREATE TABLE `sinhviens` (
  `id` int(11) NOT NULL,
  `masinhvien` varchar(500) NOT NULL,
  `malop` varchar(500) NOT NULL,
  `ten` varchar(500) NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `gioitinh` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinhviens`
--

INSERT INTO `sinhviens` (`id`, `masinhvien`, `malop`, `ten`, `ngaysinh`, `gioitinh`) VALUES
(2, '1551060749', '57th2', 'khang', '2019-09-04 00:00:00', 'Nam'),
(3, '1551060749', '57th2', 'khang', '2019-09-23 13:47:00', 'Gay'),
(4, '1551060749', '57th2', 'duc', '2019-09-25 10:21:00', 'nam'),
(5, '1551060749', '15', 'trang', '2019-09-25 10:32:00', 'nu'),
(6, 'fsf', 'gsdgdfg', 'gsdgg', '2019-09-25 10:32:00', 'fsdfgdfg'),
(7, '1551060749', '57th2', 'hiihi', '2019-09-25 12:45:00', 'Gay');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(3, 'admin123', 'admin@mail.com', '$2a$10$mTSgo8qLlwnCTjyi1hQIyuesgHH55TizKPFwqaNR3geDmBEtNc/IW', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diems`
--
ALTER TABLE `diems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lops`
--
ALTER TABLE `lops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monhocs`
--
ALTER TABLE `monhocs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinhviens`
--
ALTER TABLE `sinhviens`
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
-- AUTO_INCREMENT for table `diems`
--
ALTER TABLE `diems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lops`
--
ALTER TABLE `lops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `monhocs`
--
ALTER TABLE `monhocs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sinhviens`
--
ALTER TABLE `sinhviens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2016 at 03:11 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alumn11`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_user` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tempat` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `hp` varchar(15) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_user`, `nama`, `email`, `alamat`, `tempat`, `tanggal_lahir`, `hp`, `bio`) VALUES
('U000000001', 'Zaky', 'zakyymuh123@gmail.com', '', '', '0000-00-00', '', ''),
('U000000002', 'Bau bau bauuu bau bau', 'bau@gmail.com', 'dihatimu', '', '0000-00-00', '121212', '21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(22) NOT NULL,
  `last_login` datetime NOT NULL,
  `last_logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `last_login`, `last_logout`) VALUES
('U000000001', 'zakyymuh', 'U9kRzZK5TYJjeNZ5aq4Yh1', '2016-09-03 10:00:56', '2016-09-02 13:31:38'),
('U000000002', 'bau', 'U9kRzZK5TYJjeNZ5aq4Yh1', '2016-08-18 09:08:52', '2016-08-18 09:00:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

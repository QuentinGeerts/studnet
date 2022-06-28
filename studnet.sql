-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2022 at 11:22 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` char(36) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  `zip_code` smallint(6) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `gender`, `birthdate`, `birthplace`, `email`, `password`, `phone_number`, `street`, `number`, `zip_code`, `city`, `role`, `created_at`, `updated_at`) VALUES
('5291DB18-D6E0-4C62-98C7-65D34B72E908', 'Geerts', 'Mélanie', 'F', '1988-05-08', 'Chimay', 'melanie.geerts@bstorm.be', '00d70c561892a94980befd12a400e26aeb4b8599', NULL, 'Rue du Discobole', '13', 1340, 'Ottignies Louvain-La-Neuve', 0, '2022-06-29 01:17:39', '2022-06-29 01:17:59'),
('8B6F89C0-99CB-4F65-B3B9-7B9D202C02AC', 'Geerts', 'Quentin', 'M', '1996-04-03', 'Montigny-Le-Tilleul', 'quentin.geerts@bstorm.be', '00d70c561892a94980befd12a400e26aeb4b8599', '+32 496 04 69 10', 'Rue de la Fabrique', '6', 6500, 'Solre-Saint-Géry', 1, '2022-06-28 17:30:10', '2022-06-28 17:51:50'),
('979A4645-E813-44FD-88CD-A992E859E670', 'admin', 'admin', 'X', '2022-06-29', 'Bruxelles', 'admin@sn.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, NULL, NULL, NULL, 1, '2022-06-29 01:05:40', '2022-06-29 01:07:16'),
('AC040774-91D7-44C2-883D-C578067040F6', 'Person', 'Michael', 'M', '1980-01-01', 'Bruxelles', 'michael.person@bstorm.be', '58aa866998173d5462715f4d80af39742ed9e868', '+32 123 45 67 89', 'Rue de la rue', '42', 1000, 'Bruxelles', 0, '2022-06-28 17:47:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UK_email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

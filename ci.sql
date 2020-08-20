-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 09:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_user_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_body` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_user_id`, `project_name`, `project_body`, `date_created`) VALUES
(11, 0, 'Javascript', 'JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions. While it is most well-known as the scripting language for Web pages, many non-browser environments also use it, such as Node.js, Apache CouchDB, and Adobe Acrobat.', '2020-07-06 11:27:41'),
(20, 11, 'Php', 'PHP is a popular general-purpose scripting language that is especially suited to web development. Fast, flexible and pragmatic.PHP is a server scripting language and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft\'s ASP. PHP 7 is the latest stable release.', '2020-07-09 11:24:21'),
(27, 11, 'Java', 'Java can help reduce costs, drive innovation, & improve application services; the #1 programming language for IoT, enterprise architecture, and cloud.\r\nJava is a general-purpose programming language that is class-based, object-oriented, and designed to have as few implementation dependencies as possible', '2020-07-20 14:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_body` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `project_id`, `task_name`, `task_body`, `due_date`, `date_create`, `status`) VALUES
(15, 11, 'create a function in javascript', 'simple function in java', '2020-07-07', '2020-07-13 09:38:06', 0),
(24, 20, 'new', 'copleett', '2020-07-08', '2020-07-14 10:30:14', 1),
(26, 20, 'phpmailer', 'create a phpMailer hgyuergegioegieoubuegbuee', '2020-07-09', '2020-07-16 12:28:12', 1),
(27, 27, 'create a  intreface', 'In java', '2020-07-20', '2020-07-21 08:36:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `profile_photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `register_date`, `profile_photo`) VALUES
(1, 'admin', '1234', '', '', '', '2020-06-25 11:28:50', 0x30),
(8, 'suraj', 'suraj', 'suraj', 'suraj', 'suraj@gmail.com', '2020-06-29 11:35:58', 0x30),
(9, 'root', '$2y$12$oEkb42BeYF9..FCWk2GggOPiyFka6wPbvdnJ728e7FMKbGF9.DYwi', 'root', 'root', 'root', '2020-06-29 11:54:15', 0x30),
(10, 'exal', '$2y$12$rhuTG5DbdWUPZOhwIIl8vuDow4QDJsdnmcUPDYD3p7NFjsDMXet0a', 'exaltare', 'exal', 'exal@gmail.com', '2020-06-29 12:44:09', 0x30),
(11, 'srk', '$2y$12$FcAHbRxfjJuA3JxyLF8Syu6/DVmtTA64HKIlxjVtu8gbav2Sd8QoS', 'srk', 'srk', 'srk@gmail..com', '2020-06-29 13:10:28', 0x30),
(12, 'abc', '$2y$12$zXauDsQjg0fEBEYELePFQOpHLMYZs12Qko.EyizECWnA177Q4S51K', 'abc', 'abc', 'abc@fgmail.com', '2020-07-06 08:47:17', 0x30),
(13, 'ram', '$2y$12$96LqVcpK7AiSWTvCYtUTVePvfJEy4VhZemzZUTfqFUZy4WWAT7EmW', 'ram', 'sham', 'ram@gmail.com', '2020-08-19 16:32:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

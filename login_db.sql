-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2025 at 04:15 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `author` varchar(200) NOT NULL,
  `about_author` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `date`, `title`, `content`, `author`, `about_author`) VALUES
(9, '2024-01-30', 'Is getting an MBA still important today?     ', 'The modern business landscape is characterized by rapid technological advancements, evolving business models,\r\n                digital transformation, and disruption across industries. In this dynamic, interdependent global economy, \r\n                traditional business theories and strategies are becoming obsolete. To survive and thrive, businesses must \r\n                be agile and ready to adapt. In such an environment, the relevance of an MBA for business leaders can be \r\n                questioned, but it remains crucial for several reasons.\r\n                \r\n                Traditionally, an MBA has been a prerequisite for leadership roles, often leading to higher-level positions\r\n                     and commanding higher salaries. MBA graduates are seen as potential leaders equipped with the skills and \r\n                     knowledge necessary to drive organizational success.  However, in today’s fast-paced world, the importance\r\n                      of an MBA has only increased.\r\n\r\n    Networking opportunities:\r\n    One of the most significant benefits of an MBA is the networking opportunities it provides. The connections formed during\r\n         an MBA program—with peers, alumni, faculty, and industry professionals—are invaluable. These relationships can lead to \r\n         mentorship, job opportunities, and business partnerships, serving as a support system throughout one’s career. Networking\r\n          opportunities are one of the most essential components of a good MBA program.\r\n          \r\n    Tech entrepreneurship:\r\n    For tech entrepreneurs, an MBA offers a broad knowledge base essential for navigating the complexities of the technology\r\n         industry. It covers financial management, marketing strategies, operational efficiency, business planning, and risk \r\n         mitigation—skills crucial for entrepreneurial success. A practical and interactive MBA program can significantly enhance\r\n          these capabilities.\r\n          \r\n          Data driven decision making:\r\n          In the era of big data, data-driven decision-making is another critical component of modern business leadership.\r\n            MBA programs that focus on data analytics teach students how to leverage large datasets to derive actionable insights,\r\n             make strategic decisions, and track key performance indicators.\r\n             \r\n             Leading change management:\r\n             Moreover, leading change management is vital in today’s rapidly evolving business environment. An MBA hones leadership\r\n                 and management skills, preparing leaders to guide their organizations through digital transformation, manage resistance\r\n                  to change, and ensure successful adoption of new technologies. In conclusion, an MBA offers essential benefits for navigating\r\n                   the complexities of the digital age, from strategic management skills and leadership development to networking opportunities.\r\n                    A', 'Dr. Sampath Kannangara ', 'Executive Director CEO & Executive Dean – ICBT Campus');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `comment`) VALUES
('Kamal J', 'kamal12@gmail.com', 'oh'),
('Ajith Kumara', 'ajith@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `entry_criteria` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `duration`, `description`, `entry_criteria`) VALUES
(1, 'BSc(Hons) Business and Management ', '3 year Degree', 'The programme aims to provide a high quality and professionally relevant undergraduate programme, developing in students a critical appreciation of the role managers undertake in the modern business world. Graduates will be equipped with the necessary skills and knowledge for a multi-disciplinary ap', 'G.C.E. A/L 03 Passes Can apply with pending results'),
(2, 'BSc (Hons) Information Technology\r\n', ' 3 year Degree \r\n', 'Cardiff Metropolitan University, UK together with Sri Lanka’s leading private sector education institute ICBT Campus, now offer students the unique opportunity of completing British Bachelor (Hons) Degree in 3 Years.\r\n\r\n', 'G.C.E. A/L 03 Passes Can apply with pending results\r\n'),
(3, 'Bachelor of Business Management (Hons) – BBM\r\n', '4 year', 'The BBM (Hons) programme aims to develop students in a critical aspect of roles in management in the field of business. Graduates will be equipped with the necessary skills and knowledge for a multi-disciplinary approach and will help you begin your career in the business world.\r\nThe BBM (Hons) degr', 'G.C.E. A/L 03 Passes Can apply with pending results\r\n'),
(4, 'BSc (Hons) Software Engineering', '3 year Degree ', 'Cardiff Metropolitan University, UK together with Sri Lanka’s leading private sector education institute ICBT Campus, now offer students the unique opportunity of completing British Bachelor (Hons) Degree in 3 Years.', 'G.C.E. A/L 03 Passes Can apply with pending results');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`) VALUES
(4, 'kaushalya', 'kaushalya@gmail.com', 'About Course', 'AI'),
(5, 'Brown Smith', 'brown@gmail.com', 'About correct location', 'aaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(3, 'Mark Poll', 'mark@gmail.com', '722', 'user'),
(4, 'kamal Perera', 'kamal12@gmail.com', '2004', 'user'),
(22, 'manel kumara', 'manel@gmail.com', '456', 'user'),
(15, 'Ajith Kumara', 'ajith@gmail.com', '1975', 'user'),
(16, 'Ayesh Perera', 'ayesh12@gmail.com', '234', 'user'),
(17, 'Nimali Jayalath', 'nimali@gmail.com', '123456', 'user'),
(21, 'kaushalya', 'kumari123@gmail.com', '123456', 'user'),
(19, 'admin', 'admin@gmail.com', 'admin123', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

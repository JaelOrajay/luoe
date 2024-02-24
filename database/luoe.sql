-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 03:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `gender`, `college`) VALUES
('ren@gmail.com', 'rensantos', '', ''),
('admin@gmail.com', 'admin123', 'a', 'asd'),
('admin@gmail,com', 'admin123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('61bb3f3fe455e', '61bb3f4007483'),
('61bb3f40c603b', '61bb3f40d8553'),
('61bb3f4146263', '61bb3f415e676'),
('61bb3f4195373', '61bb3f419d9d6'),
('61bb3f41c6099', '61bb3f41d6532'),
('61bb40c10fc21', '61bb40c11ddef'),
('61bb43c12aed4', '61bb43c13c33b'),
('61bb43c1a8133', '61bb43c1c962d'),
('61bb43c2300ad', '61bb43c238f29'),
('61bb4596468e0', '61bb45966dae0'),
('61bb4596aab8c', '61bb4596ca7aa'),
('61bb45974050c', '61bb459749137'),
('61bb459771261', '61bb459779e38'),
('61bb4597a813f', '61bb4597bc5c9'),
('61bb4597edea0', '61bb45980138a'),
('61bb459833f8e', '61bb45983ce47'),
('61bb4a4e01852', '61bb4a4e0191d'),
('61bb4ee73fe07', '61bb4ee75eb2c'),
('61bb4ee7bd41f', '61bb4ee7c67ac'),
('61bb4ee8000da', '61bb4ee80e330'),
('61bb5203e2a12', '61bb52040db8c'),
('61bb520460082', '61bb52048eac4'),
('61bb52054d95f', '61bb520556e36'),
('61bb5205868e7', '61bb52058fdc2'),
('61bb5205dd2ef', '61bb5205ec4f6'),
('61bb520626203', '61bb52063a722'),
('61bb52068abca', '61bb520693f5a'),
('61bb5206d3e59', '61bb5206eb79e'),
('61bb5207458c8', '61bb52074ec93'),
('61bb52077c69a', '61bb520785c25');

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `Course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`Course`) VALUES
('BACHELOR OF ARTS IN COMMUNICATION'),
('BACHELOR OF SCIENCE IN MECHANICAL ENGINEERING'),
('BACHELOR OF ELEMENTARY EDUCATION'),
('BACHELOR OF SECONDARY EDUCATION'),
('BACHELOR OF SCIENCE IN ACCOUNTING INFORMATION SYSTEMS'),
('BACHELOR OF SCIENCE IN ACCOUNTANCY'),
('BACHELOR OF SCIENCE IN TOURISM MANAGEMENT'),
('BACHELOR OF SCIENCE IN ENTREPRENEURSHIP'),
('BACHELOR OF SCIENCE IN COMPUTING STUDIES'),
('BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('61bb5aa44e91a', 'Jael', 'eunicejael@gmail.com', 'Database', 'I love it!', '2021-12-16', '04:26:28 pm'),
('61bbe5fb608ff', 'Marryjoice', 'marryjoicellarena02@gmail.com', 'PHP', 'Good', '2021-12-17', '02:20:59 am'),
('61bbe626a2707', 'Jonaly', 'jonalylaserna8@gmail.com', 'Database', 'Awesome!!!', '2021-12-17', '02:21:42 am');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('eunicejael@gmail.com', '61bb4e7028def', 0, 3, 2, 1, '2021-12-16 15:00:48'),
('jonalylaserna8@gmail.com', '61bb4e7028def', 0, 3, 1, 2, '2021-12-16 15:20:41'),
('jonalylaserna8@gmail.com', '61bb4fa3255e5', 0, 10, 5, 5, '2021-12-16 15:21:57'),
('eunicejael@gmail.com', '61bb4fa3255e5', 0, 10, 10, 0, '2021-12-16 15:25:23'),
('marryjoicellarena02@gmail.com', '61bb4fa3255e5', 0, 10, 7, 3, '2021-12-16 15:36:31'),
('marryjoicellarena02@gmail.com', '61bb4e7028def', 0, 3, 3, 0, '2021-12-17 01:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('61bb3f3fe455e', 'Hyper Text Markup Language', '61bb3f4007483'),
('61bb3f3fe455e', 'Holistick Technical Method Library', '61bb3f400748c'),
('61bb3f3fe455e', 'Hyper Tax Makes Line', '61bb3f400748d'),
('61bb3f3fe455e', 'None of the above', '61bb3f400748e'),
('61bb3f40c603b', 'SGMD', '61bb3f40d854b'),
('61bb3f40c603b', 'SGML', '61bb3f40d8553'),
('61bb3f40c603b', 'SGMH', '61bb3f40d8555'),
('61bb3f40c603b', 'None of the above', '61bb3f40d8556'),
('61bb3f4146263', 'HTML tag', '61bb3f415e66c'),
('61bb3f4146263', 'EM tag', '61bb3f415e674'),
('61bb3f4146263', 'TITLE tag', '61bb3f415e675'),
('61bb3f4146263', 'HEAD tag', '61bb3f415e676'),
('61bb3f4195373', 'What You See Is What You Get', '61bb3f419d9d6'),
('61bb3f4195373', 'What you See Is What You Gain', '61bb3f419d9de'),
('61bb3f4195373', 'When You Start Is When You Go', '61bb3f419d9e0'),
('61bb3f4195373', 'None of the above', '61bb3f419d9e1'),
('61bb3f41c6099', 'comment tag', '61bb3f41d6528'),
('61bb3f41c6099', 'document tag', '61bb3f41d6530'),
('61bb3f41c6099', 'container tag', '61bb3f41d6532'),
('61bb3f41c6099', 'None of the above', '61bb3f41d6533'),
('61bb40c10fc21', 'margin', '61bb40c11dde8'),
('61bb40c10fc21', 'clear', '61bb40c11ddef'),
('61bb40c10fc21', 'float', '61bb40c11ddf0'),
('61bb40c10fc21', 'padding', '61bb40c11ddf1'),
('61bb43c12aed4', 'Information Model', '61bb43c13c333'),
('61bb43c12aed4', 'Organizational Model', '61bb43c13c33b'),
('61bb43c12aed4', 'Communication Model', '61bb43c13c33c'),
('61bb43c12aed4', 'Centralized Model', '61bb43c13c33d'),
('61bb43c1a8133', 'physical', '61bb43c1c9624'),
('61bb43c1a8133', 'data link', '61bb43c1c962d'),
('61bb43c1a8133', 'transport', '61bb43c1c962e'),
('61bb43c1a8133', 'presentation', '61bb43c1c962f'),
('61bb43c2300ad', 'Transport Mapper', '61bb43c238f1d'),
('61bb43c2300ad', 'Message Dispatcher', '61bb43c238f26'),
('61bb43c2300ad', 'PDU Dispatcher', '61bb43c238f28'),
('61bb43c2300ad', 'All the above', '61bb43c238f29'),
('61bb4596468e0', '16', '61bb45966dad3'),
('61bb4596468e0', '32', '61bb45966dadc'),
('61bb4596468e0', '64', '61bb45966dade'),
('61bb4596468e0', 'None of the above', '61bb45966dae0'),
('61bb4596aab8c', 'Zim Den', '61bb4596ca7a0'),
('61bb4596aab8c', 'Guido Van Rossum', '61bb4596ca7aa'),
('61bb4596aab8c', 'Niene Stom', '61bb4596ca7ab'),
('61bb4596aab8c', 'Wick Van', '61bb4596ca7ac'),
('61bb45974050c', '1995', '61bb45974912b'),
('61bb45974050c', '1972', '61bb459749134'),
('61bb45974050c', '1981', '61bb459749136'),
('61bb45974050c', '1989', '61bb459749137'),
('61bb459771261', 'Key', '61bb459779e31'),
('61bb459771261', 'Brackets', '61bb459779e37'),
('61bb459771261', 'Indentatin', '61bb459779e38'),
('61bb459771261', 'None of the above', '61bb459779e39'),
('61bb4597a813f', 'Object', '61bb4597bc5c0'),
('61bb4597a813f', 'Function', '61bb4597bc5c9'),
('61bb4597a813f', 'Attribute', '61bb4597bc5cb'),
('61bb4597a813f', 'Argument', '61bb4597bc5cc'),
('61bb4597edea0', 'val', '61bb45980138a'),
('61bb4597edea0', 'raise', '61bb459801393'),
('61bb4597edea0', 'try', '61bb459801395'),
('61bb4597edea0', 'with', '61bb459801396'),
('61bb459833f8e', 'Division', '61bb45983ce3c'),
('61bb459833f8e', 'Subtraction', '61bb45983ce44'),
('61bb459833f8e', 'Power', '61bb45983ce46'),
('61bb459833f8e', 'Parenthesis', '61bb45983ce47'),
('61bb4a4e01852', 'class', '61bb4a4e01918'),
('61bb4a4e01852', 'keyword', '61bb4a4e0191c'),
('61bb4a4e01852', 'variable', '61bb4a4e0191d'),
('61bb4a4e01852', 'operator', '61bb4a4e0191e'),
('61bb4ee73fe07', 'PHP Hypertex Processor', '61bb4ee75eb22'),
('61bb4ee73fe07', 'PHP Hyper Markup Preprocessor', '61bb4ee75eb2a'),
('61bb4ee73fe07', 'PHP Hyper Markup Processor', '61bb4ee75eb2b'),
('61bb4ee73fe07', 'PHP Hypertext Preprocessor', '61bb4ee75eb2c'),
('61bb4ee7bd41f', 'Rasmus Lerdorf', '61bb4ee7c67ac'),
('61bb4ee7bd41f', 'Drek Kolkevi', '61bb4ee7c67b5'),
('61bb4ee7bd41f', 'Willam Makepiece', '61bb4ee7c67b6'),
('61bb4ee7bd41f', 'List Barely', '61bb4ee7c67b8'),
('61bb4ee8000da', 'PHP can be used to develop web applications', '61bb4ee80e326'),
('61bb4ee8000da', 'PHP applications can not be compile', '61bb4ee80e32e'),
('61bb4ee8000da', 'PHP makes a website dynamic', '61bb4ee80e32f'),
('61bb4ee8000da', 'PHP can not be embedded into html', '61bb4ee80e330'),
('61bb5203e2a12', 'user data', '61bb52040db84'),
('61bb5203e2a12', 'metadata', '61bb52040db8b'),
('61bb5203e2a12', 'reports', '61bb52040db8c'),
('61bb5203e2a12', 'indexes', '61bb52040db8d'),
('61bb520460082', 'Structured Query Language', '61bb52048eac4'),
('61bb520460082', 'Sequential Query Language', '61bb52048eacd'),
('61bb520460082', 'Structured Question Language', '61bb52048eacf'),
('61bb520460082', 'Sequential Question Language', '61bb52048ead0'),
('61bb52054d95f', 'creating and processing forms', '61bb520556e36'),
('61bb52054d95f', 'creating databases', '61bb520556e3e'),
('61bb52054d95f', 'processing data', '61bb520556e40'),
('61bb52054d95f', 'administrating databases', '61bb520556e41'),
('61bb5205868e7', 'database', '61bb52058fdc2'),
('61bb5205868e7', 'table', '61bb52058fdcc'),
('61bb5205868e7', 'instance', '61bb52058fdce'),
('61bb5205868e7', 'relationship', '61bb52058fdcf'),
('61bb5205dd2ef', 'Users', '61bb5205ec4eb'),
('61bb5205dd2ef', 'Database applications', '61bb5205ec4f3'),
('61bb5205dd2ef', 'DBMS', '61bb5205ec4f4'),
('61bb5205dd2ef', 'COBOL programs', '61bb5205ec4f6'),
('61bb520626203', 'add', '61bb52063a717'),
('61bb520626203', 'create', '61bb52063a720'),
('61bb520626203', 'insert', '61bb52063a722'),
('61bb520626203', 'make', '61bb52063a723'),
('61bb52068abca', 'limits the column data that are returned', '61bb520693f51'),
('61bb52068abca', 'imits the row data are returned', '61bb520693f5a'),
('61bb52068abca', 'Both A and B are correct', '61bb520693f5b'),
('61bb52068abca', 'Neither A nor B are correct', '61bb520693f5c'),
('61bb5206d3e59', 'Normalization', '61bb5206eb795'),
('61bb5206d3e59', 'Data Integrity', '61bb5206eb79e'),
('61bb5206d3e59', 'Materialized Views', '61bb5206eb79f'),
('61bb5206d3e59', 'All of the above', '61bb5206eb7a1'),
('61bb5207458c8', 'DDL', '61bb52074ec93'),
('61bb5207458c8', 'DML', '61bb52074ec9c'),
('61bb5207458c8', 'HTML', '61bb52074ec9d'),
('61bb5207458c8', 'XML', '61bb52074ec9f'),
('61bb52077c69a', 'report', '61bb520785c1a'),
('61bb52077c69a', 'form', '61bb520785c22'),
('61bb52077c69a', 'file', '61bb520785c23'),
('61bb52077c69a', 'table', '61bb520785c25');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('61bb3e64c415c', '61bb3f3fe455e', 'HTML is stand for ', 4, 1),
('61bb3e64c415c', '61bb3f40c603b', 'HTML is a subset of ', 4, 2),
('61bb3e64c415c', '61bb3f4146263', 'The BODY tag is usually used after ', 4, 3),
('61bb3e64c415c', '61bb3f4195373', 'WYSIWYG stands for ', 4, 4),
('61bb3e64c415c', '61bb3f41c6099', 'In HTML, tags that include both on and off tag are called', 4, 5),
('61bb432b5e361', '61bb43c12aed4', 'The model that specifies the relationship between network element, agent, and manager is', 4, 1),
('61bb432b5e361', '61bb43c1a8133', 'The layer of the OSI model can use the trailer of the frame for error detection', 4, 2),
('61bb432b5e361', '61bb43c2300ad', 'The three separate functions in the Dispatcher subsystem are accomplished using', 4, 3),
('61bb440b890d6', '61bb4596468e0', 'What is the maximum possible length of an identifier?', 4, 1),
('61bb440b890d6', '61bb4596aab8c', 'Who developed the Python language?', 4, 2),
('61bb440b890d6', '61bb45974050c', 'In which year was the Python language developed? ', 4, 3),
('61bb440b890d6', '61bb459771261', 'What do we use to define a block of code in Python language? ', 4, 4),
('61bb440b890d6', '61bb4597a813f', 'What is the method inside the class in python language? ', 4, 5),
('61bb440b890d6', '61bb4597edea0', 'Which of the following is not a keyword in Python language? ', 4, 6),
('61bb440b890d6', '61bb459833f8e', 'Which one of the following has the highest precedence in the expression? ', 4, 7),
('61bb4e7028def', '61bb4ee73fe07', 'PHP Stands for?', 4, 1),
('61bb4e7028def', '61bb4ee7bd41f', 'Who is known as the father of PHP?', 4, 2),
('61bb4e7028def', '61bb4ee8000da', 'Which of the following is not true?', 4, 3),
('61bb4fa3255e5', '61bb5203e2a12', 'The following are components of a database except', 4, 1),
('61bb4fa3255e5', '61bb520460082', 'SQL stands for', 4, 2),
('61bb4fa3255e5', '61bb52054d95f', 'The following are functions of a DBMS except', 4, 3),
('61bb4fa3255e5', '61bb5205868e7', 'Helping people keep track of things is the purpose of a', 4, 4),
('61bb4fa3255e5', '61bb5205dd2ef', 'Which of the following is not considered to be a basic element of an enterprise-class database system?', 4, 5),
('61bb4fa3255e5', '61bb520626203', 'You can add a row using SQL in a database with which of the following?', 4, 6),
('61bb4fa3255e5', '61bb52068abca', 'The SQL WHERE clause', 4, 7),
('61bb4fa3255e5', '61bb5206d3e59', 'ON UPDATE CASCADE ensures which of the following?', 4, 8),
('61bb4fa3255e5', '61bb5207458c8', 'SQL data definition commands make up a', 4, 9),
('61bb4fa3255e5', '61bb52077c69a', 'The result of a SQL SELECT statement is a', 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('61bb3e64c415c', 'Html', 0, 0, 5, 0, 'Basic test for HTML', '', '2021-12-16 13:25:56'),
('61bb432b5e361', 'Network Management', 0, 0, 3, 0, 'Basic test for Network Management', '', '2021-12-16 13:46:19'),
('61bb440b890d6', 'Python', 0, 0, 7, 0, 'Basic Test for Python', '', '2021-12-16 13:50:03'),
('61bb4e7028def', 'Php', 0, 0, 3, 0, 'Basic test for PHP', '', '2021-12-16 14:34:24'),
('61bb4fa3255e5', 'Database', 0, 0, 10, 0, 'Introduction to database', '', '2021-12-16 14:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('sunnygkp10@gmail.com', 5, '2021-04-11 16:27:17'),
('avantika420@gmail.com', 8, '2015-06-23 14:49:39'),
('mi5@hollywood.com', 4, '2015-06-23 15:12:56'),
('nik1@gmail.com', 1, '2015-06-23 16:11:50'),
('steeve@gmail.com', 14, '2021-04-11 17:50:15'),
('ej@gmail.com', 1, '2021-12-13 09:57:09'),
('eunicejael123@gmail.com', 7, '2021-12-14 13:28:31'),
('itssmeyel@gmail.com', 0, '2021-12-15 14:17:28'),
('eunicejael@gmail.com', 0, '2021-12-16 15:25:23'),
('jonalylaserna8@gmail.com', 0, '2021-12-16 15:21:57'),
('marryjoicellarena02@gmail.com', 0, '2021-12-17 01:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Andrea Torrejos', 'Female', 'BACHELOR OF SCIENCE IN ACCOUNTING INFORMATION SYSTEMS', 'andreatorrejos32@gmail.com', 9516354408, '37594021ee736242c143111ac6a278bc'),
('Eunice Jael Orajay', 'Female', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY', 'eunicejael@gmail.com', 9451672558, '08f9b86e2910e4d68f1dd7ebb8ccf9c8'),
('Mariel Guico', 'Female', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY', 'itsmeyel@gmail.com', 9653369488, '07d7e4ad5ca9e0b1dd0e6b7877f6278c'),
('Jonaly Laserna', 'Female', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY', 'jonalylaserna8@gmail.com', 9297022264, '0c7b6fe891db174a97075baba8dd3b79'),
('Marryjoice Llarena ', 'Female', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY', 'marryjoicellarena02@gmail.com', 9959250359, '025a26d805dd9380aa7f08a993cf9800');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

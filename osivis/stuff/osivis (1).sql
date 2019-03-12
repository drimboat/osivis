-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 03:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osivis`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `coursecode` varchar(15) NOT NULL,
  `coursetitle` varchar(255) NOT NULL,
  `courseimg` varchar(255) NOT NULL,
  `coursedesc` varchar(255) NOT NULL,
  `courseid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`coursecode`, `coursetitle`, `courseimg`, `coursedesc`, `courseid`) VALUES
('GEDS101', 'Philosophy of Christian Education', '../img/bg/101.jpg', '', 1),
('GEDS105', 'Use of Library & Study Skills', '../img/bg/105.jpg', '', 2),
('GEDS107', 'Introduction to General Psychology', '../img/bg/107.jpg', '', 3),
('GEDS131', 'Communication in English', '../img/bg/131.jpg', '', 4),
('GEDS112', 'Health Principles', '../img/bg/112.jpg', '', 5),
('GEDS122', 'Life And Teachings Of Christ', '../img/bg/122.jpg', '', 6),
('GEDS132', 'Communication in English II', '../img/bg/132.jpg', '', 7),
('GEDS134', 'Nigerian People In A Global Culture ', '../img/bg/134.jpg', '', 8),
('GEDS200', 'Communication in French', '../img/bg/200.jpg', '', 9),
('GEDS201', 'Fundamentals of Christian Beliefs', '../img/bg/201.jpg', '', 10),
('GEDS221', 'Introduction to Agriculture', '../img/bg/221.jpg', '', 11),
('GEDS222', 'Philosophy of science', '../img/bg/222.jpg', '', 12),
('GEDS301', 'Religion and Society', '../img/bg/301.jpg', '', 13),
('GEDS312', 'Introduction to Family Life Education', '../img/bg/312.jpg', '', 14),
('GEDS400', 'Introduction to Entrepreneurship skills', '../img/bg/400.jpg', '', 15);

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `year` int(8) NOT NULL,
  `yearid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`year`, `yearid`) VALUES
(2007, 10),
(2008, 9),
(2009, 8),
(2010, 7),
(2011, 6),
(2012, 5),
(2013, 4),
(2014, 3),
(2015, 2),
(2016, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `SerialNumber` int(8) NOT NULL,
  `query` text NOT NULL,
  `A` varchar(400) DEFAULT NULL,
  `B` varchar(400) DEFAULT NULL,
  `C` varchar(400) DEFAULT NULL,
  `D` varchar(400) DEFAULT NULL,
  `E` varchar(400) DEFAULT NULL,
  `logic` tinyint(2) DEFAULT NULL,
  `answer` varchar(400) NOT NULL,
  `typeID` int(8) NOT NULL,
  `yearid` int(8) NOT NULL,
  `courseid` int(8) NOT NULL,
  `sectionid` int(8) NOT NULL,
  `queryid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`SerialNumber`, `query`, `A`, `B`, `C`, `D`, `E`, `logic`, `answer`, `typeID`, `yearid`, `courseid`, `sectionid`, `queryid`) VALUES
(1, 'The domain of philosophy that helps to define and ascribe values to each of the branch of knowledge is ___________________', NULL, NULL, NULL, NULL, NULL, NULL, 'axology', 3, 5, 1, 1, 4),
(2, '_________________ and _______________ are activities in philosophical enquiry ', NULL, NULL, NULL, NULL, NULL, NULL, 'Analyzing, Speculation', 3, 5, 1, 1, 5),
(3, 'Looking at philosophy as an attitude, ______________ and ________________ are attributes of a philospher ', NULL, NULL, NULL, NULL, NULL, NULL, 'Self-Awareness, Flexibility', 3, 5, 1, 1, 6),
(4, 'Distinguishing between education and knowledge, it could be seen that education is _______________ while knowledge is _________________. ', NULL, NULL, NULL, NULL, NULL, NULL, 'Value Laden, Value Neural', 3, 5, 1, 1, 7),
(5, 'Biblical knowledge is validated through _______________ and _________________', NULL, NULL, NULL, NULL, NULL, NULL, 'Correspondence, Coherence', 3, 5, 1, 1, 8),
(6, 'The five sources of knowledge are ________________, ________________, _________________, ________________, ___________________.', NULL, NULL, NULL, NULL, NULL, NULL, 'Reasoning, Authority, Senses, Intuition, Revelation', 3, 5, 1, 1, 9),
(7, 'The four aspects of metaphysics are ______________, ________________, ______________ and  _______________', NULL, NULL, NULL, NULL, NULL, NULL, 'Cosmology, Theology, Ontology, Antropology', 3, 5, 1, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sec` char(1) NOT NULL,
  `sectionid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sec`, `sectionid`) VALUES
('A', 1),
('B', 2),
('C', 3);

-- --------------------------------------------------------

--
-- Table structure for table `table_col`
--

CREATE TABLE `table_col` (
  `col_head` varchar(255) NOT NULL,
  `sectionid` int(8) NOT NULL,
  `courseid` int(8) NOT NULL,
  `yearid` int(8) NOT NULL,
  `colid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_col`
--

INSERT INTO `table_col` (`col_head`, `sectionid`, `courseid`, `yearid`, `colid`) VALUES
('Symbols', 2, 1, 5, 1),
('Kingdoms', 2, 1, 5, 2),
('Date', 2, 1, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `table_row`
--

CREATE TABLE `table_row` (
  `row_content` varchar(255) NOT NULL,
  `courseid` int(8) NOT NULL,
  `yearid` int(8) NOT NULL,
  `sectionid` int(8) NOT NULL,
  `colid` int(8) NOT NULL,
  `rowid` int(8) NOT NULL,
  `row_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_row`
--

INSERT INTO `table_row` (`row_content`, `courseid`, `yearid`, `sectionid`, `colid`, `rowid`, `row_id`) VALUES
('Head of Gold', 1, 5, 2, 1, 0, 1),
('___________', 1, 5, 2, 2, 0, 2),
('_________________', 1, 5, 2, 3, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `take`
--

CREATE TABLE `take` (
  `name` varchar(255) NOT NULL,
  `score` int(30) NOT NULL,
  `courseid` int(8) NOT NULL,
  `yearid` int(8) NOT NULL,
  `takeid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wordbank`
--

CREATE TABLE `wordbank` (
  `word` varchar(255) NOT NULL,
  `courseid` int(8) NOT NULL,
  `yearid` int(8) NOT NULL,
  `wordid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`yearid`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`queryid`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionid`);

--
-- Indexes for table `table_col`
--
ALTER TABLE `table_col`
  ADD PRIMARY KEY (`colid`);

--
-- Indexes for table `table_row`
--
ALTER TABLE `table_row`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `wordbank`
--
ALTER TABLE `wordbank`
  ADD PRIMARY KEY (`wordid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `yearid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `queryid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wordbank`
--
ALTER TABLE `wordbank`
  MODIFY `wordid` int(8) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 05:50 AM
-- Server version: 5.5.25a
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jagrati`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE `donation` (
  `cause` varchar(100) NOT NULL DEFAULT '',
  `start_date` date NOT NULL DEFAULT '0000-00-00',
  `end_date` date DEFAULT NULL,
  `amount` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`cause`, `start_date`, `end_date`, `amount`) VALUES
('blood donation', '2015-01-01', '2015-01-03', NULL),
('blood donation', '2016-02-01', '2016-02-03', NULL),
('cloth donation', '2015-03-01', '2015-03-07', NULL),
('cloth donation', '2016-04-01', '2016-04-07', NULL),
('exhibition', '2016-05-01', '2016-05-04', 28000),
('exhibition', '2017-06-01', '2017-06-04', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `name` varchar(100) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`name`, `date`) VALUES
('calligraphy competition', '2017-05-01'),
('cloth distribution', '2014-01-01'),
('cloth distribution', '2017-10-01'),
('colouring competition', '2017-06-01'),
('diya decoration competition', '2016-04-01'),
('diya decoration competition', '2017-04-01'),
('old age home', '2016-06-01'),
('painting competition', '2016-03-01'),
('plantation drive', '2015-05-01'),
('rangoli competition', '2016-02-01'),
('rangoli competition', '2017-09-01'),
('tarang', '2014-08-01'),
('tarang', '2016-08-01'),
('treasure hunt', '2017-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `free`
--

DROP TABLE IF EXISTS `free`;
CREATE TABLE `free` (
  `roll_number` int(7) NOT NULL DEFAULT '0',
  `day` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `free`
--

INSERT INTO `free` (`roll_number`, `day`) VALUES
(2016092, 'tuesday'),
(2016092, 'wednesday'),
(2016107, 'thursday'),
(2016107, 'wenesday'),
(2016117, 'monday'),
(2016117, 'tuesday'),
(2016142, 'friday'),
(2016142, 'saturday'),
(2016143, 'monday'),
(2016143, 'sunday');

-- --------------------------------------------------------

--
-- Table structure for table `learns`
--

DROP TABLE IF EXISTS `learns`;
CREATE TABLE `learns` (
  `student_id` int(7) DEFAULT NULL,
  `subject_name` varchar(20) DEFAULT NULL,
  `class` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learns`
--

INSERT INTO `learns` (`student_id`, `subject_name`, `class`) VALUES
(2016101, 'english', 1),
(2016102, 'hindi', 2),
(2016103, 'maths', 2),
(2016104, 'science', 8),
(2016105, 'english', 5),
(2016106, 'hindi', 9),
(2016107, 'maths', 7),
(2016108, 'science', 1),
(2016109, 'english', 9),
(2016110, 'hindi', 10),
(2017102, NULL, NULL),
(2017103, 'maths', 9),
(2017102, 'maths', 6),
(2017101, 'hindi', 9),
(2016101, 'hindi', 9);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `roll_number` int(7) NOT NULL DEFAULT '0',
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`roll_number`, `password`) VALUES
(2016092, '2016092'),
(2016107, '2016107'),
(2016117, '2016117'),
(2016142, '2016142'),
(2016143, '2016143'),
(2016247, '2016247');

-- --------------------------------------------------------

--
-- Table structure for table `organises`
--

DROP TABLE IF EXISTS `organises`;
CREATE TABLE `organises` (
  `roll_number` int(7) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organises`
--

INSERT INTO `organises` (`roll_number`, `name`, `date`) VALUES
(2016107, 'tarang', '2014-08-01'),
(2016117, 'tarang', '2014-08-01'),
(2016142, 'rangoli competition', '2016-02-01'),
(2016143, 'rangoli competition', '2017-09-01'),
(2016092, 'treasure hunt', '2017-07-01'),
(2016107, 'old age home', '2016-06-01'),
(2016117, 'cloth distribution', '2017-10-01'),
(2016142, 'painting competition', '2016-03-01'),
(2016143, 'colouring competition', '2017-06-01'),
(2016092, 'plantation drive', '2015-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `oversees`
--

DROP TABLE IF EXISTS `oversees`;
CREATE TABLE `oversees` (
  `roll_number` int(7) DEFAULT NULL,
  `cause` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oversees`
--

INSERT INTO `oversees` (`roll_number`, `cause`, `start_date`) VALUES
(2016107, 'blood donation', '2015-01-01'),
(2016142, 'blood donation', '2015-01-01'),
(2016092, 'cloth donation', '2015-03-01'),
(2016143, 'cloth donation', '2015-03-01'),
(2016117, 'exhibition', '2016-05-01'),
(2016143, 'exhibition', '2017-06-01'),
(2016107, 'blood donation', '2016-02-01'),
(2016092, 'blood donation', '2016-02-01'),
(2016117, 'cloth donation', '2016-04-01'),
(2016142, 'cloth donation', '2016-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

DROP TABLE IF EXISTS `participate`;
CREATE TABLE `participate` (
  `student_id` int(7) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participate`
--

INSERT INTO `participate` (`student_id`, `name`, `date`) VALUES
(2016101, 'tarang', '2014-08-01'),
(2016102, 'tarang', '2014-08-01'),
(2016103, 'rangoli competition', '2016-02-01'),
(2016104, 'rangoli competition', '2017-09-01'),
(2016105, 'treasure hunt', '2017-07-01'),
(2016106, 'old age home', '2016-06-01'),
(2016107, 'cloth distribution', '2017-10-01'),
(2016108, 'painting competition', '2016-03-01'),
(2016109, 'colouring competition', '2017-06-01'),
(2016110, 'plantation drive', '2015-05-01'),
(2017101, NULL, NULL),
(2017102, NULL, NULL),
(2017103, NULL, NULL),
(2017104, NULL, NULL),
(2016101, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `student_id` int(7) NOT NULL DEFAULT '0',
  `name` varchar(20) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `group_number` varchar(5) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sex` varchar(5) DEFAULT NULL,
  `village` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `fname`, `group_number`, `date_of_birth`, `sex`, `village`, `address`) VALUES
(2016101, 'Sakshi Yadav', 'Lavish Yadav', 'A01', '2008-01-01', 'F', 'Gadheri', 'house-1'),
(2016102, 'Palak Singh', 'Anuj Sharma', 'B05', '2005-02-01', 'F', 'Gadheri', 'house-3'),
(2016103, 'Bunty Yadav', 'Sourabh Yadav', 'C09', '1999-03-01', 'M', 'Chanditola', 'house-6'),
(2016104, 'Babli Yadav', 'Ankit Yadav', 'A03', '2006-04-01', 'F', 'Chanditola', 'house-7'),
(2016105, 'Bittoo Sharma', 'Lokesh Sharma', 'B07', '2004-05-01', 'M', 'Mehgawan', 'house-15'),
(2016106, 'Kittoo Yadav', 'Shubham Yadav', 'C10', '2000-06-01', 'M', 'Mehgawan', 'house-16'),
(2016107, 'Kajal Yadav', 'Prakhar Yadav', 'A04', '2009-07-01', 'F', 'Suarkol', 'house-1'),
(2016108, 'Khushi Singh', 'Vishu Singh', 'B08', '2010-08-01', 'F', 'Suarkol', 'house-4'),
(2016109, 'HemantYadav', 'Aditya Yadav', 'B06', '2011-09-01', 'M', 'Amarnala', 'house-6'),
(2016110, 'Harshit Singh', 'Devesh Singh', 'A02', '2011-10-01', 'M', 'Amarnala', 'house-17'),
(2017101, 'Nitin Gaav', 'Paa', 'A01', '2001-01-01', 'M', 'Gadheri', 'house-27'),
(2017102, 'Himani meh', 'meha', 'S01', '2009-09-09', 'F', 'Gadheri', 'House-k'),
(2017103, 'himani naraini', 'narayan naraini', 'A01', '2009-09-06', 'F', 'Gadheri', 'house-28'),
(2017104, 'Neha Sangwi', 'Raj sangwi', 'C02', '2008-04-05', 'F', 'Gadheri', 'house-29');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE `subject` (
  `subject_name` varchar(20) NOT NULL DEFAULT '',
  `class` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_name`, `class`) VALUES
('english', 1),
('english', 2),
('english', 3),
('english', 4),
('english', 5),
('english', 6),
('english', 7),
('english', 8),
('english', 9),
('english', 10),
('hindi', 1),
('hindi', 2),
('hindi', 3),
('hindi', 4),
('hindi', 5),
('hindi', 6),
('hindi', 7),
('hindi', 8),
('hindi', 9),
('hindi', 10),
('maths', 1),
('maths', 2),
('maths', 3),
('maths', 4),
('maths', 5),
('maths', 6),
('maths', 7),
('maths', 8),
('maths', 9),
('maths', 10),
('science', 1),
('science', 2),
('science', 3),
('science', 4),
('science', 5),
('science', 6),
('science', 7),
('science', 8),
('science', 9),
('science', 10);

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

DROP TABLE IF EXISTS `teaches`;
CREATE TABLE `teaches` (
  `roll_number` int(7) DEFAULT NULL,
  `subject_name` varchar(20) DEFAULT NULL,
  `class` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`roll_number`, `subject_name`, `class`) VALUES
(2016107, 'english', 1),
(2016142, 'hindi', 2),
(2016092, 'maths', 2),
(2016117, 'science', 8),
(2016143, 'english', 5),
(2016107, 'hindi', 9),
(2016092, 'maths', 7),
(2016117, 'science', 1),
(2016143, 'english', 9),
(2016142, 'hindi', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

DROP TABLE IF EXISTS `transport`;
CREATE TABLE `transport` (
  `name` varchar(20) DEFAULT NULL,
  `vehicle_number` varchar(10) NOT NULL DEFAULT '',
  `driver_name` varchar(20) NOT NULL DEFAULT '',
  `driver_contact_numbmer` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`name`, `vehicle_number`, `driver_name`, `driver_contact_numbmer`) VALUES
('bus', 'B101', 'Raj Verma', 12345),
('bus', 'B101', 'Ravi Shastri', 67891),
('bus', 'B103', 'Akash Singh', 54321),
('bus', 'B104', 'Vansh Yadav', 53421),
('car', 'C101', 'Ravi Shastri', 94321),
('car', 'C101', 'Virat Joshi', 89791),
('geep', 'G101', 'Mandeep Singh', 91274),
('geep', 'G102', 'Virat Joshi', 87654),
('motorcycle', 'M101', 'Mandeep Singh', 45678),
('motorcycle', 'M101', 'Raj Verma', 86547);

-- --------------------------------------------------------

--
-- Table structure for table `uses`
--

DROP TABLE IF EXISTS `uses`;
CREATE TABLE `uses` (
  `student_id` int(7) DEFAULT NULL,
  `vehicle_number` varchar(10) DEFAULT NULL,
  `driver_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uses`
--

INSERT INTO `uses` (`student_id`, `vehicle_number`, `driver_name`) VALUES
(2016101, 'B101', 'Raj Verma'),
(2016102, 'B103', 'Akash Singh'),
(2016103, 'C101', 'Virat Joshi'),
(2016104, 'M101', 'Mandeep Singh'),
(2016105, 'G102', 'Virat Joshi'),
(2016106, 'G101', 'Mandeep Singh'),
(2016107, 'B101', 'Ravi Shastri'),
(2016108, 'B104', 'Vansh Yadav'),
(2016109, 'B103', 'Akash Singh'),
(2016110, 'B104', 'Vansh Yadav');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE `volunteer` (
  `roll_number` int(7) NOT NULL DEFAULT '0',
  `name` varchar(20) DEFAULT NULL,
  `contact_number` int(15) DEFAULT NULL,
  `graduation` varchar(5) DEFAULT NULL,
  `branch` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`roll_number`, `name`, `contact_number`, `graduation`, `branch`) VALUES
(2016092, 'Gayatri Mech', 75033, 'PG', 'ECE'),
(2016107, 'Himani Narain', 94127, 'UG', 'CSE'),
(2016117, 'Garima Karnwal', 87555, 'UG', 'ME'),
(2016142, 'Revati Mahajan', 89796, 'UG', 'ECE'),
(2016143, 'Mahima Srivas', 80852, 'PG', 'CSE'),
(2016247, 'Shivangi Katiyar', 1254, 'UG', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`cause`,`start_date`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`name`,`date`);

--
-- Indexes for table `free`
--
ALTER TABLE `free`
  ADD PRIMARY KEY (`roll_number`,`day`);

--
-- Indexes for table `learns`
--
ALTER TABLE `learns`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_name` (`subject_name`,`class`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`roll_number`);

--
-- Indexes for table `organises`
--
ALTER TABLE `organises`
  ADD KEY `name` (`name`,`date`),
  ADD KEY `roll_number` (`roll_number`);

--
-- Indexes for table `oversees`
--
ALTER TABLE `oversees`
  ADD KEY `roll_number` (`roll_number`),
  ADD KEY `cause` (`cause`,`start_date`);

--
-- Indexes for table `participate`
--
ALTER TABLE `participate`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `name` (`name`,`date`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_name`,`class`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD KEY `roll_number` (`roll_number`),
  ADD KEY `subject_name` (`subject_name`,`class`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`vehicle_number`,`driver_name`);

--
-- Indexes for table `uses`
--
ALTER TABLE `uses`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `vehicle_number` (`vehicle_number`,`driver_name`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`roll_number`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `free`
--
ALTER TABLE `free`
  ADD CONSTRAINT `free_ibfk_1` FOREIGN KEY (`roll_number`) REFERENCES `volunteer` (`roll_number`);

--
-- Constraints for table `learns`
--
ALTER TABLE `learns`
  ADD CONSTRAINT `learns_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `learns_ibfk_2` FOREIGN KEY (`subject_name`,`class`) REFERENCES `subject` (`subject_name`, `class`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`roll_number`) REFERENCES `volunteer` (`roll_number`);

--
-- Constraints for table `organises`
--
ALTER TABLE `organises`
  ADD CONSTRAINT `organises_ibfk_1` FOREIGN KEY (`name`,`date`) REFERENCES `event` (`name`, `date`),
  ADD CONSTRAINT `organises_ibfk_2` FOREIGN KEY (`roll_number`) REFERENCES `volunteer` (`roll_number`);

--
-- Constraints for table `oversees`
--
ALTER TABLE `oversees`
  ADD CONSTRAINT `oversees_ibfk_1` FOREIGN KEY (`roll_number`) REFERENCES `volunteer` (`roll_number`),
  ADD CONSTRAINT `oversees_ibfk_2` FOREIGN KEY (`cause`,`start_date`) REFERENCES `donation` (`cause`, `start_date`);

--
-- Constraints for table `participate`
--
ALTER TABLE `participate`
  ADD CONSTRAINT `participate_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `participate_ibfk_2` FOREIGN KEY (`name`,`date`) REFERENCES `event` (`name`, `date`);

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`roll_number`) REFERENCES `volunteer` (`roll_number`),
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`subject_name`,`class`) REFERENCES `subject` (`subject_name`, `class`);

--
-- Constraints for table `uses`
--
ALTER TABLE `uses`
  ADD CONSTRAINT `uses_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `uses_ibfk_2` FOREIGN KEY (`vehicle_number`,`driver_name`) REFERENCES `transport` (`vehicle_number`, `driver_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

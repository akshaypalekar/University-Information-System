-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 07:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Admin_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`First_Name`, `Last_Name`, `Username`, `Password`, `Admin_ID`) VALUES
('Akshay', 'Palekar', 'akshayp', 'akshay123', 1145488);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_Id` int(10) NOT NULL,
  `Course_Name` text NOT NULL,
  `Faculty_Id` int(11) NOT NULL,
  `Course_Description` varchar(200) NOT NULL,
  `Credits` int(11) NOT NULL,
  `Course_Time` time NOT NULL,
  `Course_Status` text NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Course_Level` text,
  `Course_Day` text,
  `Time_End` time DEFAULT NULL,
  `Course_Fees` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_Id`, `Course_Name`, `Faculty_Id`, `Course_Description`, `Credits`, `Course_Time`, `Course_Status`, `Capacity`, `Course_Level`, `Course_Day`, `Time_End`, `Course_Fees`) VALUES
(606, 'Distributed Systems', 1111111, 'DS', 3, '17:00:00', 'Open', 40, 'Graduate', 'Wednesday', '19:00:00', 3645),
(620, 'Operating Systems', 1111112, 'OS', 3, '14:00:00', 'Open', 40, 'Graduate', 'Monday', '16:30:00', 3645),
(621, 'Programming Languages', 1111113, 'PL', 3, '14:00:00', 'Open', 40, 'Graduate', 'Monday', '16:40:00', 3645),
(640, 'Theory of Computation', 1111112, 'TCC', 3, '16:00:00', 'Open', 40, 'Graduate', 'Friday', '18:30:00', 3645),
(641, 'Computer Architecture', 1111112, 'CA', 3, '12:45:00', 'Open', 35, 'Graduate', 'Tuesday', '14:45:00', 3645),
(651, 'Algorithm Concepts', 1111113, 'AC', 3, '09:35:00', 'Open', 40, 'Graduate', 'Wednesday', '12:35:00', 3645),
(665, 'Software Engineering', 1111111, 'SE', 3, '17:30:00', 'Open', 35, 'Graduate', 'Friday', '20:15:00', 3645),
(690, 'Computer Networks', 1111111, 'CN', 3, '17:45:00', 'Open', 40, 'Graduate', 'Tuesday', '20:15:00', 3645),
(755, 'Artificial Intelligence', 1111112, 'AI', 3, '12:45:00', 'Open', 45, 'Graduate', 'Saturday', '15:15:00', 3645),
(760, 'Database Systems', 1111111, 'DB', 3, '20:30:00', 'Open', 45, 'Graduate', 'Saturday', '23:15:00', 3645),
(860, 'Special Topics', 1111111, 'special topics', 3, '16:00:00', 'Open', 30, 'Graduate', 'Thursday', '18:00:00', 3645);

-- --------------------------------------------------------

--
-- Table structure for table `course_enrollment`
--

CREATE TABLE `course_enrollment` (
  `User_Id` varchar(10) NOT NULL,
  `Course_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `User_Id` int(10) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Contact_Information` bigint(20) NOT NULL,
  `Speciality` text NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Security_Question` text NOT NULL,
  `Security_Answer` text NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`User_Id`, `First_Name`, `Last_Name`, `Username`, `Contact_Information`, `Speciality`, `Date_of_Birth`, `Security_Question`, `Security_Answer`, `Pwd`, `Address`) VALUES
(1111111, 'Taoufik', 'Ennoure', 'tennoure', 0, 'Software Engineering', '1980-03-01', '', '', '', ''),
(1111112, 'Sandra', 'Kopecky', 'skopecky', 0, 'Artificial Intelligence', '1985-06-03', '', '', '', ''),
(1111113, 'Wenjia', 'Li', 'wenjiali', 0, 'Networks', '1980-10-20', '', '', '', '');

--
-- Triggers `faculty`
--
DELIMITER $$
CREATE TRIGGER `FacultyToUsers` AFTER INSERT ON `faculty` FOR EACH ROW BEGIN
Insert into Users values (new.User_Id,new.First_Name,new.Last_Name,new.Username,new.Pwd,'Faculty');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `User_Id` varchar(10) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Contact_Information` bigint(20) NOT NULL,
  `Emergency_Contact` bigint(20) NOT NULL,
  `Major` text NOT NULL,
  `Course_Career` text NOT NULL,
  `Total_Credit_Needed` int(11) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Security_Question` text,
  `Security_Answer` text,
  `Pwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`User_Id`, `First_Name`, `Last_Name`, `Address`, `Username`, `Contact_Information`, `Emergency_Contact`, `Major`, `Course_Career`, `Total_Credit_Needed`, `Date_of_Birth`, `Security_Question`, `Security_Answer`, `Pwd`) VALUES
('2222222', 'Akshay', 'Palekar', '', 'apalekar', 0, 0, 'CS', 'Graduate', 30, '1991-07-11', 'What is your Favourite Color?', 'Blue', 'akshay123'),
('2222223', 'Pooja', 'Manjeshwar', '', 'pmanjeshwar', 0, 0, 'CS', 'Graduate', 30, '1992-03-19', '', '', ''),
('2222224', 'Laukik', 'Panse', '', 'lpanse', 0, 0, 'CS', 'Graduate', 30, '1991-04-22', '', '', ''),
('2222225', 'Shreya', 'Sawant', '', 'ssawant', 0, 0, 'CS', 'Graduate', 30, '1992-06-15', '', '', '');

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `UpdatePassword` AFTER UPDATE ON `students` FOR EACH ROW BEGIN
if NEW.Pwd <> OLD.Pwd THEN
UPDATE users 
SET Pwd = NEW.Pwd 
WHERE User_Id = OLD.User_id; 
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UpdateUserTable` AFTER INSERT ON `students` FOR EACH ROW BEGIN
INSERT INTO users VALUES(NEW.User_id,NEW.First_Name,NEW.Last_Name,NEW.Username,NEW.Pwd,'Student');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` varchar(10) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  `Account_Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `First_Name`, `Last_Name`, `Username`, `Pwd`, `Account_Type`) VALUES
('1111111', 'Taoufik', 'Ennoure', 'tennoure', '', 'Faculty'),
('1111112', 'Sandra', 'Kopecky', 'skopecky', '', 'Faculty'),
('1111113', 'Wenjia', 'Li', 'wenjiali', '', 'Faculty'),
('2222222', 'Akshay', 'Palekar', 'apalekar', 'akshay123', 'Student'),
('2222223', 'Pooja', 'Manjeshwar', 'pmanjeshwar', '', 'Student'),
('2222224', 'Laukik', 'Panse', 'lpanse', '', 'Student'),
('2222225', 'Shreya', 'Sawant', 'ssawant', '', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_Id`),
  ADD KEY `FacultyFK` (`Faculty_Id`);

--
-- Indexes for table `course_enrollment`
--
ALTER TABLE `course_enrollment`
  ADD KEY `UserIdFK` (`User_Id`),
  ADD KEY `CourseIdFK` (`Course_Id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `FacultyFK` FOREIGN KEY (`Faculty_Id`) REFERENCES `faculty` (`User_Id`);

--
-- Constraints for table `course_enrollment`
--
ALTER TABLE `course_enrollment`
  ADD CONSTRAINT `CourseIdFK` FOREIGN KEY (`Course_Id`) REFERENCES `courses` (`Course_Id`),
  ADD CONSTRAINT `UserIdFK` FOREIGN KEY (`User_Id`) REFERENCES `students` (`User_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

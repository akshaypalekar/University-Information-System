-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 01:15 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

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
('1145468', 'Akshay', 'Palekar', 'kdjsalkjalksjd', 'django', 965358451, 965648752, 'CS', 'Gradutare', 0, '2017-12-04', 'What is your mothers name', 'Anjali', 'django456'),
('1145874', 'Shreya', 'Sawant', 'kjflksdfjlkfj', 'ssawant', 965654215, 123658745, 'CS', 'Graduate', 30, '2017-12-03', 'Whats is your Mothers name', 'Mangala', 'shreya123');

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
('1145468', 'Akshay', 'Palekar', 'django', 'django456', 'Student'),
('1145488', 'Akshay', 'Palekar', 'apalekar', 'akshay123', 'Student'),
('1145493', 'Pooja', 'Manjeshwar', 'pmanjeshwar', 'pooja123', 'Student'),
('1156584', 'Sandra', 'Kopecky', 'skopec', 'sandra123', 'Faculty');

--
-- Indexes for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
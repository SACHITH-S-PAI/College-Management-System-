-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 12, 2022 at 06:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `USN`, `password`) VALUES
(2, 'admin', '6c44e5cd17f0019c64b042e4a745412a');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `Subject_Code` varchar(10) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`Subject_Code`, `Subject`, `Date`) VALUES
('15ME62', 'Physics', '2022-07-15'),
('18CS11', 'Calculus and Linear Algebra', '2022-01-01'),
('18CS12', 'Physics', '2022-01-02'),
('18CS13', 'Electrical', '2022-01-03'),
('18CS14', 'Civil', '2022-01-04'),
('18CS15', 'CAED', '2022-01-05'),
('18CS16', 'Physics Lab', '2022-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(5) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `Fees_Description` varchar(255) NOT NULL,
  `Amount` decimal(8,2) NOT NULL,
  `Due_date` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `USN`, `Fees_Description`, `Amount`, `Due_date`, `Status`) VALUES
(1, '1BG19CS001', 'Tuition Fees', '150000.00', '2021-02-02', 'Paid'),
(3, '1BG19CS003', 'Tuition', '50000.00', '2022-04-02', 'Paid'),
(9, '1BG19IS002', 'Transport', '5000.00', '2022-01-02', 'Paid'),
(10, '1BG19EC002', 'Tuition', '120000.00', '2022-01-02', 'Paid'),
(11, '1BG19IS008', 'Books', '3500.00', '2022-01-03', 'Not Paid'),
(12, '1BG19IS064', 'Books', '3500.00', '2022-01-05', 'Paid'),
(13, '1BG19IS014', 'Tuition', '500000.00', '2022-01-02', 'Paid'),
(15, '1BG19IS009', 'Tuition', '100000.00', '2022-01-05', 'Not Paid'),
(18, '1BG19IS001', 'Books', '3500.00', '2022-07-15', 'Paid'),
(19, '1BG15ME002', 'Transport', '5000.00', '2022-07-15', 'Not Paid');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Branch` varchar(3) NOT NULL,
  `Semester` int(1) NOT NULL,
  `Mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `USN`, `password`, `Name`, `Branch`, `Semester`, `Mobile`) VALUES
(2, '1BG19IS001', 'b8ff50c4ff019d14a9ff6d9a9b32834b', 'Advik', 'ISE', 1, '987654322'),
(3, '1BG19IS002', '1eb647c076387bd302337dd501e30213', 'Chandrashekhar', 'ISE', 1, '9876543251'),
(4, '1BG19IS003', 'aaa5fff9b7eec59132428c677b7cd777', 'Dhruvanth', 'ISE', 1, '9876543218'),
(5, '1BG19IS004', 'b3ef7190432b375f6d412debdcb6e025', 'Ganesh', 'ISE', 1, '9876543215'),
(7, '1BG19EC001', 'f0e7d0d17cff891edbc9cdf92dcd9297', 'Jaydev', 'ECE', 1, '9876543217'),
(8, '1BG19EC002', '6a557ed1005dddd940595b8fc6ed47b2', 'Ramesh', 'ECE', 1, '9876543278'),
(9, '1BG19EC003', '52ffefbbc537339cde002eb2e9695ec4', 'Krishnamurthy', 'ECE', 1, '9865321470'),
(10, '1BG19EC004', '573b410ced2c9d30e08e00ba84f33fae', 'Lakshmi', 'ECE', 1, '9764318521'),
(11, '1BG19EC005', '6e052b7e74dd8ce6934b8b5c12ca1383', 'Shubha', 'ECE', 1, '9638520147'),
(12, '1BG19CS002', '827ccb0eea8a706c4c34a16891f84e7b', 'Amulya', 'CSE', 1, '9876543211'),
(14, '1BG19CS004', '40e592df56e6e34bb26bc840cce82a7a', 'Charan', 'CSE', 1, '9845632170'),
(20, '1BG15ME002', '827ccb0eea8a706c4c34a16891f84e7b', 'Srihari', 'ME', 6, '9874563210');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(5) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `Name`, `Department`, `Designation`) VALUES
(100, 'Mr. Vijay Kumar S', 'ISE', 'Assistant Prof'),
(102, 'Dr. Prashanth', 'CSE', 'Prof'),
(103, 'Dr. Manjunath', 'Mathematics', 'HOD'),
(104, 'Dr. Vijaya', 'ECE', 'HOD'),
(105, 'Dr. Kumarswamy', 'ME', 'Prof'),
(106, 'Ms. Kavyashree', 'CSE', 'Asst. Prof'),
(200, 'Mr. Praveen Jois', 'Physics', 'Associate Professor'),
(201, 'Dr. Shashikala', 'ISE', 'HOD'),
(202, 'Mrs. Jagruthi', 'ISE', 'Asst. Prof'),
(205, 'Ms. Parimala', 'EEE', 'HOD'),
(206, 'Dr. Anilkumar', 'ME', 'HOD'),
(9876, 'Dr. N.P.Chandrashekhar ', 'Mathematics', 'Prof'),
(54321, 'Mr. Mahendrakumar C', 'ME', 'Prof');

-- --------------------------------------------------------

--
-- Table structure for table `uattendance`
--

CREATE TABLE `uattendance` (
  `id` int(255) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `Course_Name` varchar(255) NOT NULL,
  `Total_Classes` int(3) NOT NULL,
  `Classes_Attended` int(3) NOT NULL,
  `Percentage` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uattendance`
--

INSERT INTO `uattendance` (`id`, `USN`, `Course_Name`, `Total_Classes`, `Classes_Attended`, `Percentage`) VALUES
(11, '1BG19EC002', 'Physics', 35, 15, '42.86'),
(12, '1BG19IS002', 'Calculus and Linear Algebra', 35, 30, '85.71'),
(13, '1BG19IS003', 'Electrical', 45, 29, '64.44'),
(14, '1BG19ME001', 'CAED', 20, 17, '85.00'),
(15, '1BG19IS001', 'Physics', 50, 46, '92.00'),
(17, '1BG19CS024', 'Civil', 54, 28, '51.85'),
(18, '1BG19IS039', 'Electrical', 50, 29, '58.00'),
(20, '1BG19CS001', 'Physics', 51, 47, '92.16'),
(22, '1BG19CS002', 'CAED', 45, 40, '88.89'),
(23, '1BG19IS064', 'CAED', 56, 49, '87.50'),
(24, '1BG19IS014', 'Civil', 50, 38, '76.00'),
(26, '1BG15ME002', 'Calculus and Linear Algebra', 55, 45, '81.82');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`Subject_Code`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `USN` (`USN`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `uattendance`
--
ALTER TABLE `uattendance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `USN` (`USN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `uattendance`
--
ALTER TABLE `uattendance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

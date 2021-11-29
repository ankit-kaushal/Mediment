-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2021 at 07:11 PM
-- Server version: 5.7.27
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kohliga_iiit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hospital_contact_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_logo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_email_address`, `admin_password`, `admin_name`, `hospital_name`, `hospital_address`, `hospital_contact_no`, `hospital_logo`) VALUES
(1, 'ankitkaushal882@gmail.com', 'password', 'Ankit Kaushal', 'Mediment - Medical Solutions', 'Virtual Mode', '6207994778', '../images/1910923659.png');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance_table`
--

CREATE TABLE `ambulance_table` (
  `ambulance_id` int(11) NOT NULL,
  `ambulance_no` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ambulance_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ambulance_driver` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ambulance_contact` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ambulance_status` enum('Active','Inactive') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulance_table`
--

INSERT INTO `ambulance_table` (`ambulance_id`, `ambulance_no`, `ambulance_name`, `ambulance_driver`, `ambulance_contact`, `ambulance_status`) VALUES
(5, 'JH09H7858', 'OMNI', 'Dinesh Patel', '7894563245', 'Active'),
(3, 'JH09H7878', 'Winger AC ', 'Charan Singh', '7894563299', 'Inactive'),
(4, 'JH09H2558', 'Force Traveller (With Ventilator)', 'Prem Chauhan', '7894563245', 'Active'),
(6, 'JH09H8745', 'Winger (With Ventilator)', 'Manish Kumar', '8745321478', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `appointment_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_schedule_id` int(11) NOT NULL,
  `appointment_number` int(11) NOT NULL,
  `reason_for_appointment` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `appointment_time` time NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `patient_come_into_hospital` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `doctor_comment` mediumtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointment_table`
--

INSERT INTO `appointment_table` (`appointment_id`, `doctor_id`, `patient_id`, `doctor_schedule_id`, `appointment_number`, `reason_for_appointment`, `appointment_time`, `status`, `patient_come_into_hospital`, `doctor_comment`) VALUES
(1, 4, 7, 6, 1000, 'NA', '15:00:00', 'Cancel', 'No', 'NA'),
(2, 3, 7, 11, 1001, 'NA', '14:00:00', 'Cancel', 'No', NULL),
(3, 5, 3, 9, 1002, 'pain', '11:00:00', 'Booked', 'No', NULL),
(4, 1, 3, 15, 1003, 'chest pain', '00:12:00', 'In Process', 'Yes', NULL),
(5, 2, 3, 8, 1004, 'chest pain', '09:30:00', 'Booked', 'No', NULL),
(6, 4, 7, 12, 1005, 'fdfdfdgdffs', '16:00:00', 'Cancel', 'No', NULL),
(7, 2, 7, 8, 1006, 'fdsgsgsvc xvcxv', '10:35:00', 'Booked', 'No', NULL),
(8, 3, 8, 11, 1007, 'HeadAche', '14:30:00', 'In Process', 'Yes', NULL),
(9, 7, 8, 16, 1008, 'Headache', '17:00:00', 'Cancel', 'No', NULL),
(10, 4, 8, 12, 1009, 'HeadAche', '16:20:00', 'Booked', 'No', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedule_table`
--

CREATE TABLE `doctor_schedule_table` (
  `doctor_schedule_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `doctor_schedule_date` date NOT NULL,
  `doctor_schedule_day` enum('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday') COLLATE utf8_unicode_ci NOT NULL,
  `doctor_schedule_start_time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_schedule_end_time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `average_consulting_time` int(5) NOT NULL,
  `doctor_schedule_status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor_schedule_table`
--

INSERT INTO `doctor_schedule_table` (`doctor_schedule_id`, `doctor_id`, `doctor_schedule_date`, `doctor_schedule_day`, `doctor_schedule_start_time`, `doctor_schedule_end_time`, `average_consulting_time`, `doctor_schedule_status`) VALUES
(2, 1, '2021-11-29', 'Friday', '09:00', '14:00', 65, 'Active'),
(3, 2, '2021-11-04', 'Friday', '09:00', '12:00', 65, 'Active'),
(4, 5, '2021-10-27', 'Friday', '10:00', '14:00', 65, 'Active'),
(5, 3, '2021-10-22', 'Friday', '13:00', '17:00', 65, 'Active'),
(6, 4, '2021-10-17', 'Friday', '15:00', '18:00', 65, 'Active'),
(7, 5, '2021-11-15', 'Monday', '18:00', '20:00', 35, 'Active'),
(8, 2, '2021-10-22', 'Wednesday', '09:30', '12:30', 65, 'Active'),
(9, 5, '2021-10-25', 'Wednesday', '11:00', '15:00', 30, 'Active'),
(10, 1, '2021-11-16', 'Wednesday', '12:00', '15:00', 35, 'Active'),
(11, 3, '2021-10-19', 'Wednesday', '14:00', '17:00', 30, 'Active'),
(12, 4, '2021-11-15', 'Wednesday', '16:00', '20:00', 20, 'Active'),
(13, 6, '2021-10-08', 'Wednesday', '15:30', '18:30', 75, 'Active'),
(14, 6, '2021-10-16', 'Thursday', '00:08', '03:24', 75, 'Active'),
(16, 7, '2021-11-18', 'Monday', '17:00', '23:30', 20, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `doctor_id` int(11) NOT NULL,
  `doctor_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_profile_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_phone_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `doctor_date_of_birth` date NOT NULL,
  `doctor_degree` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_expert_in` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL,
  `doctor_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`doctor_id`, `doctor_email_address`, `doctor_password`, `doctor_name`, `doctor_profile_image`, `doctor_phone_no`, `doctor_address`, `doctor_date_of_birth`, `doctor_degree`, `doctor_expert_in`, `doctor_status`, `doctor_added_on`) VALUES
(1, 'anuj@gmail.com', 'password', 'Dr. Anuj Singh', '../images/10872.jpg', '7539518520', 'Plot no-47, Sector-4', '1985-10-29', 'MBBS MS', 'Surgen', 'Active', '2021-02-15 17:04:59'),
(2, 'niranjanroy@gmail.com', 'password', 'Dr. Niranjan Roy', '../images/21336.jpg', '753852963', 'Qtr no-7859, Street-26, Sector-4', '1982-08-10', 'MBBS MD(Cardiac)', 'Cardiologist', 'Active', '2021-02-18 15:00:32'),
(3, 'nisha.patel@gmail.com', 'password', 'Dr. Nisha Patel', '../images/13838.jpg', '7417417410', '89, Lakshmi Market, Sector-4', '1989-04-03', 'MBBS', 'Gynacologist', 'Active', '2021-02-18 15:05:02'),
(4, 'rajpramanik@gmail.com', 'password', 'Dr. Raj Pramanik', '../images/9498.jpg', '8523698520', 'Plot no-37, Co-operative Colony', '1984-06-11', 'MBBS MD', 'Nurologist', 'Active', '2021-02-18 15:08:24'),
(5, 'pragyaroy@gmail.com', 'password', 'Dr. Pragya Roy', '../images/1613641523.png', '9635852025', 'Street-11, Sector-9', '1988-03-03', 'MBBS MD', 'General Physian', 'Active', '2021-02-18 15:15:23'),
(6, 'sk.das@gmail.com', 'password', 'Dr. SK Das', '../images/1614081376.png', '8523697410', 'Plot no-11, Co-operative Colony', '1989-03-01', 'MBBS MD (Medicine)', 'General Physician', 'Active', '2021-02-23 17:26:16'),
(7, 'supriya@gmail.com', 'password', 'Dr. Supriya Rani', '../images/78765013.jpg', '8521966680', 'Gangjori', '2005-07-21', 'MBBS', 'General Physician', 'Active', '2021-10-22 17:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

CREATE TABLE `patient_table` (
  `patient_id` int(11) NOT NULL,
  `patient_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `patient_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_date_of_birth` date NOT NULL,
  `patient_gender` enum('Male','Female','Other') COLLATE utf8_unicode_ci NOT NULL,
  `patient_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `patient_phone_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `patient_maritial_status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `patient_added_on` datetime NOT NULL,
  `patient_verification_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_verify` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`patient_id`, `patient_email_address`, `patient_password`, `patient_first_name`, `patient_last_name`, `patient_date_of_birth`, `patient_gender`, `patient_address`, `patient_phone_no`, `patient_maritial_status`, `patient_added_on`, `patient_verification_code`, `email_verify`) VALUES
(3, 'jacobmartin@gmail.com', 'password', 'Jacob', 'Martin', '2021-02-26', 'Male', 'Green view, 1025, NYC', '85745635210', 'Single', '2021-02-18 16:34:55', 'b1f3f8409f7687072adb1f1b7c22d4b0', 'Yes'),
(4, 'oliviabaker@gmail.com', 'password', 'Olivia', 'Baker', '2001-04-05', 'Female', 'Diamond street, 115, NYC', '7539518520', 'Married', '2021-02-19 18:28:23', '8902e16ef62a556a8e271c9930068fea', 'Yes'),
(5, 'web-tutorial@programmer.net', 'password', 'Amber', 'Anderson', '1995-07-25', 'Female', '2083 Cameron Road Buffalo, NY 14202', '75394511442', 'Single', '2021-02-23 17:50:06', '1909d59e254ab7e433d92f014d82ba3d', 'Yes'),
(7, 'ankitkaushal288@gmail.com', 'password', 'Ankit', 'Kaushal', '2000-08-28', 'Male', 'QTR NO-1166, SECTOR-12/F\r\nBOKARO STEEL CITY (NEAR SECTOR-12 BMP GROUND)', '6207994778', 'Single', '2021-10-07 00:58:25', '4abea5453702246bd60a2c43885fb2de', 'Yes'),
(8, 'ankitkaushal882@gmail.com', '123456789', 'Kaushal', 'Ankit', '2000-08-15', 'Male', 'IIIT KALYANI BOYS HOSTEL(OLD NARAYANA SCHOOL BUILDING)\r\nRATHTALA, BLOCK-B\r\nKALYANI, WEST BENGAL', '6207994778', 'Single', '2021-10-19 23:31:49', '151711ae280340204c9800dc89bbbe10', 'Yes'),
(9, 'ankit.kaushal@kohli.tel', 'password', 'Ankit', 'Kaushal', '2001-06-20', 'Male', 'IIIT KALYANI BOYS HOSTEL(OLD NARAYANA SCHOOL BUILDING)\r\nRATHTALA, BLOCK-B\r\nKALYANI, WEST BENGAL', '06207994778', 'Single', '2021-10-20 00:22:28', 'fa2030a12546a9cfe354a4c928697b11', 'No'),
(10, 'shardulshivam27@gmail.com', 'password', 'Shardul', 'Shivam', '2000-02-15', 'Male', 'Gorakhpur', '789458742', 'Single', '2021-11-14 21:17:45', '5ff2e8f9be03c9b0566ed78a5d1ce3ff', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `table_ambulance`
--

CREATE TABLE `table_ambulance` (
  `ambulance_no` varchar(15) NOT NULL,
  `ambulance_name` varchar(50) NOT NULL,
  `ambulance_driver` varchar(100) NOT NULL,
  `ambulance_contact` varchar(30) NOT NULL,
  `ambulance_status` enum('Active','Inactive','Running') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_ambulance`
--

INSERT INTO `table_ambulance` (`ambulance_no`, `ambulance_name`, `ambulance_driver`, `ambulance_contact`, `ambulance_status`) VALUES
('JH09H7858', '', 'Dinesh', '9874125896', 'Active'),
('JH09H2558', '', 'Patel', '7894563245', 'Active'),
('JH09H7878', '', 'Yadav', '7894563258', 'Active'),
('JH09H787', '', 'Dinesh', '9874125896', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ambulance_table`
--
ALTER TABLE `ambulance_table`
  ADD PRIMARY KEY (`ambulance_id`);

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `doctor_schedule_table`
--
ALTER TABLE `doctor_schedule_table`
  ADD PRIMARY KEY (`doctor_schedule_id`);

--
-- Indexes for table `doctor_table`
--
ALTER TABLE `doctor_table`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `patient_table`
--
ALTER TABLE `patient_table`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `table_ambulance`
--
ALTER TABLE `table_ambulance`
  ADD PRIMARY KEY (`ambulance_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ambulance_table`
--
ALTER TABLE `ambulance_table`
  MODIFY `ambulance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor_schedule_table`
--
ALTER TABLE `doctor_schedule_table`
  MODIFY `doctor_schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `doctor_table`
--
ALTER TABLE `doctor_table`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient_table`
--
ALTER TABLE `patient_table`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

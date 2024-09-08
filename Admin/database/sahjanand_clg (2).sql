-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2024 at 10:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahjanand_clg`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `img`, `description`, `title`, `updated_at`) VALUES
(1, '1712218806.jpg', '<h6>&nbsp;</h6>\r\n\r\n<p>Federation of Indian Professionals (FIP), is a non-profit organization created by the members of the professional fraternity, for the professional fraternity. Established in 2020 under the guidance of CA Gaurav Aggarwal, FIP has over 3000+ members both pioneers and new-comers in the field of Chartered Accountancy, Company Secretary, Cost Accounting, and Law.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Through an array of workshops and seminars, hosted by some of the most-coveted professionals, FIP focuses on creating a synergy effect in skill development by offering the young professionals an opportunity to learn from the experts before stepping into the vast world of business. At FIP, we understand the need to evolve with the emerging markets along with the need to learn, unlearn and relearn, and we believe in equipping young professionals with skills to enhance their capacity and talent to support and nurture professional development.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>FIP also provides a platform for access to useful and reliable information, and a platform for easy networking among members, with the aim of growing together.</p>\r\n', 'About us', '2024-04-06 15:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `course_type` varchar(255) DEFAULT NULL,
  `application_no` varchar(255) DEFAULT NULL,
  `applicant_name` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(15) DEFAULT NULL,
  `fathers_name` varchar(255) DEFAULT NULL,
  `mothers_name` varchar(255) DEFAULT NULL,
  `parents_mobile_no` varchar(15) DEFAULT NULL,
  `no_of_siblings` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `disability` varchar(255) DEFAULT NULL,
  `disability_percentage` decimal(5,2) DEFAULT NULL,
  `disability_certificate` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `aadhar_number` varchar(20) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `is_minority` tinyint(1) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `signature_photo` varchar(255) DEFAULT NULL,
  `present_address` text DEFAULT NULL,
  `present_state` varchar(255) DEFAULT NULL,
  `present_district` varchar(255) DEFAULT NULL,
  `present_taluka` varchar(255) DEFAULT NULL,
  `present_pincode` varchar(10) DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `permanent_state` varchar(255) DEFAULT NULL,
  `permanent_district` varchar(255) DEFAULT NULL,
  `permanent_taluka` varchar(255) DEFAULT NULL,
  `permanent_pincode` varchar(10) DEFAULT NULL,
  `hsc_diploma` varchar(255) DEFAULT NULL,
  `hsc_board` varchar(255) DEFAULT NULL,
  `hsc_passing_year` year(4) DEFAULT NULL,
  `hsc_seat_no` varchar(255) DEFAULT NULL,
  `hsc_percentage` decimal(5,2) DEFAULT NULL,
  `hsc_marksheet` varchar(255) DEFAULT NULL,
  `ssc_board` varchar(255) DEFAULT NULL,
  `ssc_passing_year` year(4) DEFAULT NULL,
  `ssc_seat_no` varchar(255) DEFAULT NULL,
  `ssc_percentage` decimal(5,2) DEFAULT NULL,
  `ssc_marksheet` varchar(255) DEFAULT NULL,
  `agree_terms` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pdf_url` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `course_type`, `application_no`, `applicant_name`, `birthdate`, `email`, `mobile_no`, `fathers_name`, `mothers_name`, `parents_mobile_no`, `no_of_siblings`, `category`, `gender`, `disability`, `disability_percentage`, `disability_certificate`, `nationality`, `locality`, `aadhar_number`, `religion`, `is_minority`, `profile_photo`, `signature_photo`, `present_address`, `present_state`, `present_district`, `present_taluka`, `present_pincode`, `permanent_address`, `permanent_state`, `permanent_district`, `permanent_taluka`, `permanent_pincode`, `hsc_diploma`, `hsc_board`, `hsc_passing_year`, `hsc_seat_no`, `hsc_percentage`, `hsc_marksheet`, `ssc_board`, `ssc_passing_year`, `ssc_seat_no`, `ssc_percentage`, `ssc_marksheet`, `agree_terms`, `status`, `pdf_url`, `createdAt`) VALUES
(1, 'B.C.A', '81182315', 'Knox Robbins', '2007-06-17', 'qaxuza@gmail.com', '9925588744', 'Lucian Watkins', 'Todd Caldwell', '8855778844', 53, 'OBC', 'Male', 'No', 0.00, '', 'Indian', 'Rural', '411', 'Christian', 1, '1725480499.jpeg', '1725480499.png', 'Dolor iste porro inc', 'Sint ut qui tempora ', 'Ut ea ea necessitati', 'Doloribus non et qua', '25', 'Accusantium cumque v', 'Voluptas facilis fac', 'Velit explicabo Do ', 'Ea qui et enim labor', '60', 'Diploma', 'Dolore facere conseq', '1977', 'Quia vel vero debiti', 65.00, '1725480499.pdf', 'Occaecat consequatur', '2015', 'Rerum omnis quaerat ', 18.00, '1725480499.pdf', '1', '0', 'admission_application_20240905_013819.pdf', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jobPosition` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_logo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `img`, `name`, `jobPosition`, `c_name`, `c_logo`, `created_at`, `updated_at`) VALUES
(1, '', 'sdcf', 'fscdfszdf', 'fzdsfs', '', '2024-09-01 12:59:34', '2024-09-01 14:59:20'),
(4, '1725529626.png', 'Courtney Pope1', 'Eveniet sunt est 1', 'Cairo Hensley1', '1725529626.png', '2024-09-05 09:47:06', '2024-09-05 15:17:06'),
(5, '1725529626.png', 'Sangani D', 'Full stack', 'epsilon', '1725529626.png', '2024-09-05 09:47:06', '2024-09-05 15:17:06'),
(6, '1725529626.png', 'ds', 'Full stack d', 'epsilon', '1725529626.png', '2024-09-05 09:47:06', '2024-09-05 15:17:06'),
(7, '1725529626.png', 'sd', 'Full stack d', 'epsilon', '1725529626.png', '2024-09-05 09:47:06', '2024-09-05 15:17:06'),
(8, '1725529626.png', 'DS', 'Full stack dev', 'epsilon', '1725529626.png', '2024-09-05 09:47:06', '2024-09-05 15:17:06'),
(9, '1725529626.png', 'SD', 'Full stack dev', 'epsilon', '1725529626.png', '2024-09-05 09:47:06', '2024-09-05 15:17:06'),
(10, '1725529626.png', 'SDSDSDSD', 'Full stack dev', 'epsilon', '1725529626.png', '2024-09-05 09:47:06', '2024-09-05 15:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `msg`, `date`) VALUES
(1, 'Dhruvi', 'dsangani44@gmail.com', '7016922456', 'frgrdg', '2024-09-07 15:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `c_img` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_subtitle` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `objective` text NOT NULL,
  `after_graduation` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `c_img`, `c_name`, `c_subtitle`, `duration`, `eligibility`, `medium`, `objective`, `after_graduation`, `created_at`, `updated_at`) VALUES
(1, '1725712533.png', ' B.Com.', '(BACHELORS OF COMMERCE)', '8 semesters ( 4 years )', ' Higher Secondary Exam (10+2) \r\nPassed in any discipline from Gujarat Board \r\nOR Higher Secondary Exam Passed in any \r\ndiscipline from other Board recognized by \r\nSaurashtra University. ', 'Gujarati', 'Equip the students with the knowledge of concepts, \r\nand techniques of management accounting and \r\nenable them to use various techniques of cost \r\nascertainment, budget preparation and variance analysis', '• Work in Government Sector \r\n• Marketing Manager \r\n• Public sector • Private sector \r\n• Financial Professionals', '2024-09-07 12:39:11', '2024-09-07 18:09:11'),
(3, '1725713586.png', 'B.C.A.', '(BACHELOR OF COMPUTER APPLICATIONS)', '8 semesters (4 years)', ': Higher Secondary Exam (10+2) \r\nPassed in any discipline from Gujarat Board OR Higher Secondary \r\nExam Passed in any discipline from other Board recognized \r\nby Saurashtra university. ', 'English', '• Perform sensitivity analysis \r\n• Select a portfolio of alternatives projects \r\n• Basic idea of Programming i.e. Java, Android, Python, \r\n.NET, iOS \r\n• Deals with mainly Professional area.', '• Work in Government Sector • Banking sector \r\n• Web Developer & Designer • Game Development \r\n• Digital Industrials collaboration • System analyser • Software developer \r\n• Network Mngt. & Establishment • Multimedia • Teaching Sector \r\n• Faculty in training institutes and schools • Security and Surveillance', '2024-09-07 12:53:06', '0000-00-00 00:00:00'),
(4, '1725713653.png', 'B.B.A.', '(BACHELORS OF BUSINESS ADMINISTRATION)', '8 semesters ( 4 years ) ', ': Higher Secondary Exam (10+2) \r\nPassed in any discipline from \r\nGujarat Higher Education Board OR Higher \r\nSecondary Exam (10+2) Passed in any discipline \r\nfrom other Board recognized by Saurashtra university.', 'English', '• Demonstrate Critical Thinking and Decision Making \r\n• Ethical Behaviour and Social Responsibility • Core Business Knowledge \r\n• Effective communication skill', '• Work in Government Sector • Marketing Manager • Banking sector \r\n• Public sector • Private sector • Financial Professionals • Entrepreneurship \r\n• Consultancy • Human Resource Manager • Information Systems Manager \r\n• Work in Insurance sector • Teaching sector', '2024-09-07 12:54:13', '0000-00-00 00:00:00'),
(5, '1725713729.png', 'B.Sc.', 'BACHELOR OF SCIENCE  (Chem., Botany, Maths, Physics) ', '8 semesters ( 4 years ) ', ' Higher Secondary Exam (10+2) \r\nPassed in any discipline from G.S.H.S.E.B. \r\nOR Diploma Degree holder in computer Science \r\ndiscipline OR Higher Secondary Exam (10+2) \r\nPassed in any discipline from other Board recognized \r\nby Saurashtra university. ', 'English', '• To prepare scientific professional person required fo public/private sector. \r\n• To prepare professionals dedicate and devoted to scientifical services. ', '• Specific Scientific Development • Research and Development in Science • Service Industries • Education', '2024-09-07 12:55:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_category`, `title`, `img`, `link`, `created_at`, `updated_at`) VALUES
(11, 'College Activity', 'Garba', '1725186781.png', '', '2024-09-01 16:03:01', '2024-09-01 16:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `faculty_iamge` varchar(250) NOT NULL,
  `faculty_name` varchar(250) NOT NULL,
  `faculty_degree` varchar(250) NOT NULL,
  `joinig_date` varchar(255) NOT NULL,
  `resign_date` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_iamge`, `faculty_name`, `faculty_degree`, `joinig_date`, `resign_date`, `created_at`, `updated_at`) VALUES
(3, '1725173204.png', 'Dhruvi', 'BCA', '2024-08-01', '2024-08-31', '2024-09-01 06:46:44', '0000-00-00 00:00:00'),
(4, '1725173286.png', 'Dhruvi', 'BCA', '2024-07-02', '', '2024-09-01 07:07:28', '2024-09-01 12:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'can here all courses are free ?', 'no, here all corses are not free. Some courses avilable for free.', '2024-03-20 10:26:31', '2024-03-20 10:26:31'),
(3, 'is it testing question ?', '<p>yes, it is testing.</p>\r\n', '2024-03-20 15:08:06', '2024-03-26 14:48:39'),
(4, 'dfvfd', '<p>gfdg</p>\r\n', '2024-09-07 15:31:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `dt` datetime NOT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `phone`, `password`, `dt`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '9876543210', '$2y$10$y15.AEe4IyK/vUVIf0fWIudzSQML6SndosvHYRbwYmNi/JbAeeFZG', '2024-02-16 16:28:33', '2024-03-26 15:02:11.000000');

-- --------------------------------------------------------

--
-- Table structure for table `notificationhistory`
--

CREATE TABLE `notificationhistory` (
  `id` int(5) NOT NULL,
  `date` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notificationhistory`
--

INSERT INTO `notificationhistory` (`id`, `date`, `msg`, `time`, `type`) VALUES
(39, '04/04/2024', 'test Enroll Ratione maxime cupid Course', '03:16 pm', 'course'),
(42, '04/04/2024', ' Purchase New Membership - 20-03-2024 To 30-04-2024', '03:40 pm', 'member_user'),
(43, '04/04/2024', 'test Enroll Ratione maxime cupid Course', '03:45 pm', 'course'),
(45, '04/04/2024', 'test Enroll React Js for Begginer Course', '03:53 pm', 'course'),
(46, '05/04/2024', 'test Enroll Html Basic Course', '10:49 am', 'course'),
(47, '05/04/2024', 'test Enroll Html Basic Course', '10:49 am', 'course'),
(48, '05/04/2024', 'test Enroll Angular Basic Course', '10:49 am', 'course'),
(49, '05/04/2024', 'New Review Add by :- dhruvi', '06:59 pm', 'review'),
(50, '05/04/2024', 'New Review Add by :- Sangani Dhruvi', '07:09 pm', 'review'),
(51, '08/04/2024', 'Dhruvi Sangani Enroll Angular Basic Course', '01:02 pm', 'course'),
(52, '08/04/2024', 'Dhruvi Sangani Enroll Angular Basic Course', '01:02 pm', 'course'),
(53, '09/04/2024', 'Dhruvi Sangani Enroll Html Basic Course', '06:54 pm', 'course'),
(54, '10/04/2024', 'Dhruvi Sangani Enroll Html Basic Begginer Course', '03:49 pm', 'course'),
(55, '10/04/2024', 'Dhruvi Sangani Enroll Html Basic Begginer Course', '03:57 pm', 'course'),
(56, '10/04/2024', 'Dhruvi Sangani Enroll Html Basic Begginer Course', '04:18 pm', 'course'),
(57, '10/04/2024', 'Dhruvi Sangani Enroll Html Basic Begginer Course', '04:20 pm', 'course'),
(58, '10/04/2024', 'Dhruvi Sangani Enroll Html Basic Begginer Course', '04:21 pm', 'course'),
(59, '10/04/2024', 'Dhruvi Sangani Enroll Html Basic Begginer Course', '04:23 pm', 'course'),
(60, '10/04/2024', 'Dhruvi Sangani Enroll Html Basic Begginer Course', '04:26 pm', 'course'),
(61, '10/04/2024', 'Dhruvi Sangani Enroll Html Basic Begginer Course', '04:28 pm', 'course'),
(62, '10/04/2024', 'Dhruvi Sangani Enroll Angular Basic Course', '04:34 pm', 'course'),
(63, '10/04/2024', 'Dhruvi Sangani Enroll Angular Basic Course', '04:44 pm', 'course'),
(64, '10/04/2024', 'Dhruvi Sangani Enroll Html Basic Begginer Course', '04:47 pm', 'course'),
(65, '15/04/2024', 'Dhruvi Sangani Purchase New Membership - 20-03-2024 To 30-04-2024', '02:19 pm', 'member_user'),
(66, '15/04/2024', 'Dhruvi Sangani Enroll React Native for Begginer Course', '02:30 pm', 'course'),
(67, '15/04/2024', 'Dhruvi Sangani Enroll React Js for Begginer Course', '02:32 pm', 'course'),
(68, '15/04/2024', 'Dhruvi Sangani Purchase New Membership - 20-03-2024 To 30-04-2024', '04:00 pm', 'member_user'),
(69, '15/04/2024', 'Dhruvi Sangani Purchase New Membership - 20-03-2024 To 30-04-2024', '04:09 pm', 'member_user'),
(70, '15/04/2024', 'Dhruvi Sangani Purchase New Membership - 20-03-2024 To 30-04-2024', '04:13 pm', 'member_user'),
(71, '15/04/2024', 'Dhruvi Sangani Purchase New Membership - 20-03-2024 To 30-04-2024', '05:48 pm', 'member_user'),
(72, '15/04/2024', 'Dhruvi Sangani Purchase New Membership - 20-03-2024 To 30-04-2024', '05:52 pm', 'member_user'),
(73, '16/04/2024', 'Dhruvi Sangani Purchase New Membership - 20-03-2024 To 30-04-2024', '09:46 am', 'member_user'),
(74, '16/04/2024', 'Dhruvi Sangani Renew Membership - 20-03-2024 To 30-04-2024', '09:58 am', 'member_user'),
(75, '20/04/2024', 'Dhruvi Sangani Enroll React Native for Begginer Course', '03:33 pm', 'course'),
(76, '20/04/2024', 'Dhruvi Sangani Enroll Angular Basic Course', '03:34 pm', 'course'),
(77, '20/04/2024', 'New User Register :- test', '03:51 pm', 'user'),
(78, '20/04/2024', 'New User Register :- Testing', '03:59 pm', 'user'),
(79, '20/04/2024', 'New User Register :- testing', '05:54 pm', 'user'),
(80, '22/04/2024', 'New User Register :- sadas', '05:12 pm', 'user'),
(81, '23/04/2024', 'New User Register :- dhruvi', '11:11 am', 'user'),
(82, '23/04/2024', 'dhruvi Purchase New Membership - 20-03-2024 To 30-04-2024', '11:28 am', 'member_user'),
(83, '23/04/2024', 'dhruvi Enroll React Native for Begginer Course', '11:40 am', 'course'),
(84, '29/04/2024', 'New User Register :- Dhruvi Sangani', '11:24 am', 'user'),
(85, '29/04/2024', 'New User Register :- DhruviSangani', '04:42 pm', 'user'),
(86, '29/04/2024', 'New User Register :- sycyte', '04:46 pm', 'user'),
(87, '29/04/2024', 'New User Register :- sycyte', '04:47 pm', 'user'),
(88, '29/04/2024', 'New User Register :- toqygalim', '04:55 pm', 'user'),
(89, '29/04/2024', 'New User Register :- wikyzy', '04:58 pm', 'user'),
(90, '29/04/2024', 'New User Register :- bysebaw', '05:10 pm', 'user'),
(91, '29/04/2024', 'New User Register :- wujod', '05:14 pm', 'user'),
(92, '29/04/2024', 'New User Register :- xuponetydi', '05:16 pm', 'user'),
(93, '30/04/2024', 'New User Register :- test', '10:49 am', 'user'),
(94, '30/04/2024', 'New User Register :- test new', '10:51 am', 'user'),
(95, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '11:08 am', 'member_user'),
(96, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '11:13 am', 'member_user'),
(97, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '11:13 am', 'member_user'),
(98, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '11:14 am', 'member_user'),
(99, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '04:56 pm', 'member_user'),
(100, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '05:09 pm', 'member_user'),
(101, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '05:25 pm', 'member_user'),
(102, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '05:27 pm', 'member_user'),
(103, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '05:28 pm', 'member_user'),
(104, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '05:29 pm', 'member_user'),
(105, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '05:29 pm', 'member_user'),
(106, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '05:55 pm', 'member_user'),
(107, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '06:05 pm', 'member_user'),
(108, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '06:06 pm', 'member_user'),
(109, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '06:08 pm', 'member_user'),
(110, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '06:16 pm', 'member_user'),
(111, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '06:17 pm', 'member_user'),
(112, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '06:22 pm', 'member_user'),
(113, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '06:22 pm', 'member_user'),
(114, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '06:25 pm', 'member_user'),
(115, '02/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '06:27 pm', 'member_user'),
(116, '03/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '09:30 am', 'member_user'),
(117, '03/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '09:32 am', 'member_user'),
(118, '03/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '09:48 am', 'member_user'),
(119, '03/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '09:50 am', 'member_user'),
(120, '03/05/2024', 'Dhruvi Sangani Renew Membership - 01-03-2024 To 31-07-2024', '10:03 am', 'member_user'),
(121, '03/05/2024', 'Dhruvi Sangani Renew Membership - 01-03-2024 To 31-07-2024', '10:05 am', 'member_user'),
(122, '03/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '10:41 am', 'member_user'),
(123, '03/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '11:33 am', 'member_user'),
(124, '03/05/2024', 'Dhruvi Sangani Purchase New Membership - 01-03-2024 To 31-07-2024', '05:58 pm', 'member_user'),
(125, '13/05/2024', 'New User Register :- Dhruvi Sangani', '11:02 am', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `notification_count`
--

CREATE TABLE `notification_count` (
  `user` int(11) NOT NULL,
  `member_user` int(11) NOT NULL,
  `review` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `blog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification_count`
--

INSERT INTO `notification_count` (`user`, `member_user`, `review`, `course`, `blog`) VALUES
(5, 0, 7, 10, 7);

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `title`, `description`, `updated_at`) VALUES
(1, 'Privacy Policy', '<p>1. Each Member agrees to abide by the &ldquo;Terms and Conditions &ldquo;of FIP membership, as set forth herein. FIP may change the Terms and Conditions at any time with or without notice.</p>\r\n\r\n<p>2. The membership will grant you certain rights and priorities in the form of participation in future events and activities, Concessions, Reservations, or fee waivers to our majority paid courses.</p>\r\n\r\n<p>3. As long as you remain a member in good standing, you may use FIP&#39;s name and logo, in the format and with the notices provided or requested by FIP, solely to indicate your membership in FIP.</p>\r\n\r\n<p>4. Please note that this membership will NOT give any member a right to take part in the decision-making process at the FIP.</p>\r\n\r\n<p>5. This membership fee is annual and for the current Financial Year 2023-24 which is repayable annually as and when due.</p>\r\n\r\n<p>6. FIP reserves the right of allocating membership upon submission of a request from such person in prescribed form and manner. The acceptance of such form shall be determined in the sole and absolute discretion of the FIP.</p>\r\n\r\n<p>You agree to share information entered on this page with Federation of Indian Professionals (owner of this page) and Razorpay, adhering to applicable laws.</p>\r\n', '2024-03-26 14:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `description`, `updated_at`) VALUES
(1, 'Terms & Condition', '<p>1. Each Member agrees to abide by the &ldquo;Terms and Conditions &ldquo;of FIP membership, as set forth herein. FIP may change the Terms and Conditions at any time with or without notice.</p>\r\n\r\n<p>2. The membership will grant you certain rights and priorities in the form of participation in future events and activities, Concessions, Reservations, or fee waivers to our majority paid courses.</p>\r\n\r\n<p>3. As long as you remain a member in good standing, you may use FIP&#39;s name and logo, in the format and with the notices provided or requested by FIP, solely to indicate your membership in FIP.</p>\r\n\r\n<p>4. Please note that this membership will NOT give any member a right to take part in the decision-making process at the FIP.</p>\r\n\r\n<p>5. This membership fee is annual and for the current Financial Year 2023-24 which is repayable annually as and when due.</p>\r\n\r\n<p>6. FIP reserves the right of allocating membership upon submission of a request from such person in prescribed form and manner. The acceptance of such form shall be determined in the sole and absolute discretion of the FIP.</p>\r\n\r\n<p>You agree to share information entered on this page with Federation of Indian Professionals (owner of this page) and Razorpay, adhering to applicable laws.</p>\r\n', '2024-03-26 14:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `nm` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `desi` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `rev` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `img`, `nm`, `desi`, `rev`) VALUES
(7, '1722430346.png', 'Prakash ', 'Manager', 'Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two waters own morning gathered greater shall had behold had seed. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it'),
(8, '1722429941.png', 'Snehal', 'CEO', 'Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two waters own morning gathered greater shall had behold had seed. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it'),
(14, '1722429934.png', 'j', 'j', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `topers`
--

CREATE TABLE `topers` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topers`
--

INSERT INTO `topers` (`id`, `img`, `name`, `course`, `semester`, `year`, `percentage`, `active`, `created_at`, `updated_at`) VALUES
(3, '1725191136.png', 'Dhruvi', ' B.Com.', 'Sem-6', '2022', '95', 1, '2024-09-01 12:21:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uNo` varchar(6) NOT NULL,
  `nm` varchar(250) NOT NULL,
  `eml` varchar(250) NOT NULL,
  `mob` varchar(250) NOT NULL,
  `addr` varchar(250) NOT NULL,
  `dt` datetime NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `profilePicture` text NOT NULL,
  `v_code` varchar(250) NOT NULL,
  `is_verify` varchar(250) NOT NULL,
  `u_occupation` varchar(255) NOT NULL,
  `u_profession` varchar(255) NOT NULL,
  `u_city` varchar(255) NOT NULL,
  `u_pincode` varchar(255) NOT NULL,
  `u_birthdate` varchar(255) NOT NULL,
  `u_about_fip` varchar(255) NOT NULL,
  `u_instroctor_frd_name` varchar(255) NOT NULL,
  `u_instroctor_phone` varchar(255) NOT NULL,
  `is_member` varchar(250) NOT NULL DEFAULT 'No',
  `u_enroll_course` varchar(250) NOT NULL DEFAULT '0' COMMENT 'numberof course user buy',
  `u_enroll_course_ids` varchar(500) NOT NULL COMMENT 'enroll courses ids',
  `is_volunteer` int(11) NOT NULL,
  `updAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uNo`, `nm`, `eml`, `mob`, `addr`, `dt`, `pwd`, `profilePicture`, `v_code`, `is_verify`, `u_occupation`, `u_profession`, `u_city`, `u_pincode`, `u_birthdate`, `u_about_fip`, `u_instroctor_frd_name`, `u_instroctor_phone`, `is_member`, `u_enroll_course`, `u_enroll_course_ids`, `is_volunteer`, `updAt`) VALUES
(58, 'HM100X', 'xuponetydi', 'test@gmail.com', '9865321475', 'Libero expedita hic ', '2024-04-29 17:16:17', '$2y$10$Yq971OrjYOStFZyBUXua3.h3A60HsyiXL3mTyqjTHEWCu81D4sxEO', '1714391177.png', '946133', 'true', '', '', '', '', '', '', '', '', 'No', '0', '', 0, '2024-04-29 18:02:50'),
(59, 'HF745V', 'test', 'test@gmail.com', '7016922901', 'Test', '2024-04-30 10:48:54', '$2y$10$16a2JhEe7QSogF85THNOcekwW3E0pfo9NskwCeUvkX.V.D00WgQKK', '', '', '', '', '', '', '', '', '', '', '', 'No', '0', '', 0, '0000-00-00 00:00:00'),
(60, 'TS400I', 'test', 'test@gmail.com', '7016922901', 'Test', '2024-04-30 10:49:07', '$2y$10$5EDhNcjJrB4EFSMLo4cKsu9U/EYnuX2oFX59ZBykaXTO8vX1WcuoG', '1714454347.png', '', '', '', '', '', '', '', '', '', '', 'No', '0', '', 0, '0000-00-00 00:00:00'),
(61, 'CP663G', 'test new', 'testnew@gmail.com', '7016922945', 'test address', '2024-04-30 10:51:37', '$2y$10$Ob/2a5qAusKOckRHiR7URO0IxN72PQQT3v5rXbK7z1hlrgikBwATK', '1714455357.png', '', '', '', '', '', '', '', '', '', '', 'No', '0', '', 0, '2024-04-30 11:05:57'),
(62, 'JO705X', 'Dhruvi Sangani', 'dsangani44@gmail.com', '7016922908', 'Junagadh', '2024-05-13 11:02:13', '$2y$10$WVQJFZJk5L/TmJEvxVAx6.0Wd2qMQaFFqkbc7zZ92jclKiIBEchqi', '1715578333.png', '953174', 'true', '', '', '', '', '', '', '', '', 'No', '0', '', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `notificationhistory`
--
ALTER TABLE `notificationhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topers`
--
ALTER TABLE `topers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT for table `notificationhistory`
--
ALTER TABLE `notificationhistory`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `topers`
--
ALTER TABLE `topers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

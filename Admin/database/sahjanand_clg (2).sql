-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 06:41 PM
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
(4, '1726936647.png', 'Courtney Pope1', 'Eveniet sunt est 1', 'Cairo Hensley1', '1726936647.png', '2024-09-21 16:37:27', '2024-09-21 22:07:27');

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
(11, 'College Activity', 'Seminar Of Jay Vasavda', '1726245873.jpg', '', '2024-09-01 16:03:01', '2024-09-13 22:22:24'),
(12, 'College Activity', 'Gopal Namkeen Company Visit', '1726245896.jpg', '', '2024-09-13 22:14:56', '2024-09-13 22:15:13'),
(13, 'College Activity', 'Seminar of Feminine boldness', '1726246134.jpg', '', '2024-09-13 22:18:54', '2024-09-13 22:22:34'),
(14, 'College Activity', 'Drawing Competition', '1726246244.jpg', '', '2024-09-13 22:20:44', '0000-00-00 00:00:00'),
(15, 'College Activity', 'Seminar of Career', '1726246333.jpg', '', '2024-09-13 22:22:13', '0000-00-00 00:00:00'),
(16, 'General', 'Khelamahakumbha', '1726246419.jpg', '', '2024-09-13 22:23:39', '0000-00-00 00:00:00'),
(17, 'College Activity', 'Tree planting', '1726246492.jpg', '', '2024-09-13 22:24:52', '0000-00-00 00:00:00'),
(18, 'General', 'Blood Donation Camp', '1726246556.jpg', '', '2024-09-13 22:25:56', '0000-00-00 00:00:00'),
(19, 'General', 'Kala Mahakumbha', '1726246614.jpg', '', '2024-09-13 22:26:54', '0000-00-00 00:00:00'),
(20, 'College Activity', 'Fit India', '1726246693.jpg', '', '2024-09-13 22:28:13', '0000-00-00 00:00:00'),
(21, 'College Celebration', 'Traditional Day', '1726246759.jpg', '', '2024-09-13 22:29:19', '0000-00-00 00:00:00'),
(22, 'College Celebration', 'Farewell party', '1726246859.jpg', '', '2024-09-13 22:30:59', '0000-00-00 00:00:00'),
(23, 'College Celebration', 'Holi Celebration', '1726246918.jpg', '', '2024-09-13 22:31:58', '0000-00-00 00:00:00'),
(24, 'General', 'Fight against covid 19', '1726247091.jpg', '', '2024-09-13 22:34:51', '0000-00-00 00:00:00'),
(25, 'General', 'Distribution of Food Packet', '1726247180.jpg', '', '2024-09-13 22:36:20', '0000-00-00 00:00:00'),
(26, 'Newspaper Highlights', 'Distribution of Food Packet', '1726247243.jpg', '', '2024-09-13 22:37:23', '0000-00-00 00:00:00'),
(27, 'General', 'Visited the food service ', '1726247468.jpg', '', '2024-09-13 22:41:08', '0000-00-00 00:00:00'),
(28, 'General', 'Proud on Our Past Students', '1726247559.jpg', '', '2024-09-13 22:42:39', '0000-00-00 00:00:00'),
(29, 'General', 'Blood Donation Camp', '1726247657.jpg', '', '2024-09-13 22:44:17', '0000-00-00 00:00:00'),
(30, 'General', 'Help to Dhairyrajshih - ₹11000', '1726247783.jpg', '', '2024-09-13 22:46:23', '0000-00-00 00:00:00'),
(31, 'General', 'RT-CPR Testing Camp', '1726247853.jpg', '', '2024-09-13 22:47:33', '0000-00-00 00:00:00'),
(32, 'General', 'Seminar of awareness about cybercrime', '1726247944.jpg', '', '2024-09-13 22:49:04', '0000-00-00 00:00:00'),
(33, 'General', ' Dwarka picnic', '1726248069.png', '', '2024-09-13 22:51:09', '0000-00-00 00:00:00'),
(34, 'General', 'Accupressure Seminar', '1726248163.png', '', '2024-09-13 22:52:43', '0000-00-00 00:00:00'),
(35, 'College Celebration', 'Holi Celebration', '1726248325.png', '', '2024-09-13 22:55:25', '0000-00-00 00:00:00'),
(36, 'College Celebration', 'Musical Night', '1726248397.jpg', '', '2024-09-13 22:56:37', '0000-00-00 00:00:00'),
(37, 'College Celebration', 'Vrindavan nagri', '1726248526.png', '', '2024-09-13 22:58:46', '2024-09-13 22:59:21'),
(38, 'College Celebration', 'Teacher\'s Day', '1726248607.png', '', '2024-09-13 23:00:07', '0000-00-00 00:00:00'),
(39, 'College Celebration', 'Navaratri Celebration', '1726248676.png', '', '2024-09-13 23:01:16', '0000-00-00 00:00:00'),
(40, 'College Celebration', 'Happy Birthday Shivbhadrasinh', '1726248760.png', '', '2024-09-13 23:02:40', '0000-00-00 00:00:00'),
(41, 'College Activity', 'College Picnic', '1726248843.png', '', '2024-09-13 23:04:03', '0000-00-00 00:00:00'),
(42, 'General', 'Gayatri Yagya', '1726248915.png', '', '2024-09-13 23:05:15', '0000-00-00 00:00:00'),
(43, 'College Celebration', 'Happy Holi', '1726249026.png', '', '2024-09-13 23:07:06', '0000-00-00 00:00:00'),
(44, 'College Activity', 'NSS Camp', '1726249097.png', '', '2024-09-13 23:08:17', '0000-00-00 00:00:00'),
(45, 'College Celebration', 'Welcome of New Students', '1726249194.png', '', '2024-09-13 23:09:54', '0000-00-00 00:00:00'),
(46, 'College Celebration', 'Traditional day', '1726402165.png', '', '2024-09-15 17:39:25', '0000-00-00 00:00:00'),
(47, 'General', 'Spacefull Campus', '1726402355.png', '', '2024-09-15 17:41:32', '2024-09-15 17:42:35'),
(48, 'College Celebration', ' ', '1726402430.png', '', '2024-09-15 17:43:50', '0000-00-00 00:00:00'),
(49, 'General', ' ', '1726402497.png', '', '2024-09-15 17:44:57', '0000-00-00 00:00:00'),
(50, 'General', ' ', '1726402593.png', '', '2024-09-15 17:46:33', '0000-00-00 00:00:00'),
(51, 'College Celebration', 'Sports Day', '1726402672.png', '', '2024-09-15 17:47:52', '0000-00-00 00:00:00'),
(52, 'College Celebration', 'Teacher\'s Day', '1726402767.png', '', '2024-09-15 17:49:27', '0000-00-00 00:00:00'),
(53, 'College Celebration', 'Sahajanand College ka Raja', '1726402856.jpg', '', '2024-09-15 17:50:56', '0000-00-00 00:00:00'),
(54, 'General', 'Proud on our Rifle shooting Student', '1726403013.png', '', '2024-09-15 17:53:33', '0000-00-00 00:00:00'),
(55, 'College Celebration', 'First Day of College', '1726403165.jpg', '', '2024-09-15 17:56:05', '0000-00-00 00:00:00'),
(56, 'College Activity', 'Picnic', '1726403281.jpg', '', '2024-09-15 17:58:01', '0000-00-00 00:00:00'),
(57, 'College Celebration', 'Ganpati', '1726403368.png', '', '2024-09-15 17:59:28', '0000-00-00 00:00:00');

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
(3, '1725812945.png', 'Tatum Cobb', 'Test', '2001-06-02', '', '2024-09-08 16:30:33', '2024-09-08 22:00:33'),
(4, '1725812953.png', 'Liberty Hernandez', 'Test', '1997-03-08', '', '2024-09-08 16:30:26', '2024-09-08 22:00:26'),
(6, '1725812990.png', 'Hop Atkins', 'Test', '2011-10-05', '', '2024-09-08 16:30:40', '2024-09-08 22:00:40'),
(7, '1725813055.png', 'Hakeem Joyce', 'Consequat Id minus', '2023-04-17', '', '2024-09-08 16:30:55', '0000-00-00 00:00:00');

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
(1, 'What programs and courses does Sahajanand College offer?', '<p>We offer a wide range of undergraduate and postgraduate programs in arts, science, commerce, and professional studies. Please visit our courses page for detailed information.</p>\r\n', '2024-03-20 10:26:31', '2024-09-08 22:05:09'),
(3, 'How do I apply for admission to Sahajanand College?\r\n', '<p>You can apply online through our official website by following the steps on our &quot;How to Apply&quot; page. Make sure to check the admission deadlines and required documents.</p>\r\n', '2024-03-20 15:08:06', '2024-09-08 22:05:36'),
(4, 'What are the eligibility criteria for admission?', '<p>Eligibility criteria vary by program. Generally, applicants must have completed their previous level of education with a minimum percentage. Specific details are available on the individual program pages.</p>\r\n', '2024-09-07 15:31:41', '2024-09-08 22:06:03'),
(5, 'What facilities and resources are available on campus?', '<p>Our campus offers state-of-the-art classrooms, a library, computer labs, sports facilities, and a student activity center. We also provide support services like career counseling and mentoring.</p>\r\n', '2024-09-08 22:06:44', '0000-00-00 00:00:00'),
(6, 'Who can I contact for more information or guidance?', '<p>For any queries, you can reach out to our admission office via email or phone. Visit our &quot;Admission Offices&quot; &amp; &quot;Contact Us&quot; page for contact details and office locations.</p>\r\n', '2024-09-08 22:07:25', '0000-00-00 00:00:00');

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
(1, 'admin', 'admin@gmail.com', '9876543219', '$2y$10$y15.AEe4IyK/vUVIf0fWIudzSQML6SndosvHYRbwYmNi/JbAeeFZG', '2024-02-16 16:28:33', '2024-09-11 09:55:56.000000');

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
(15, '1726028569.png', 'Itaque', 'Ut veritatis dolore ', 'Enim eveniet corpor');

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
(3, '1726936524.png', 'Radhika', ' B.Com.', 'Sem-6', '2022', '95', 1, '2024-09-21 16:35:44', '0000-00-00 00:00:00'),
(4, '1726936532.png', 'Leo Villarreal', 'B.C.A.', 'Sem-5', '2005', '98', 1, '2024-09-21 16:35:32', '0000-00-00 00:00:00');

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
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `topers`
--
ALTER TABLE `topers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

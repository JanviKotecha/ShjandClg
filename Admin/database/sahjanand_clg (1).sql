-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 04:25 PM
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
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_cate`
--

CREATE TABLE `blog_cate` (
  `id` int(11) NOT NULL,
  `cate` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog_cate`
--

INSERT INTO `blog_cate` (`id`, `cate`) VALUES
(1, 'General'),
(7, 'Eduction'),
(8, 'Medicine'),
(9, 'Drugs ( Ek Aushadhi )'),
(10, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `cate` int(11) NOT NULL,
  `title` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `creted_by` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eml` varchar(250) NOT NULL,
  `mob` varchar(250) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_publish` varchar(250) NOT NULL DEFAULT '0',
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `updt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `img`, `cate`, `title`, `creted_by`, `eml`, `mob`, `description`, `is_publish`, `dt`, `updt`) VALUES
(13, '1715002913.png', 9, 'test', 'DS', 'ds@gmail.com', '7845127845', '<p>10 amazing web of demos Developers Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.And meat blessed void a fruit gathered waters. 25 That Prevent Job Seekers From Overcoming Failure Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio.</p>\r\n', '1', '2023-12-01 00:00:00', '2024-05-06'),
(16, '1701451525.jpg', 7, 'Test Blog', 'Sangani Dhruvi', 'ds@gmail.com', '9876543210', 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.And meat blessed void a fruit gathered waters.\r\n\r\n25 That Prevent Job Seekers From Overcoming Failure\r\nPhasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio.', '1', '2023-12-01 00:00:00', '0000-00-00'),
(17, '1701451525.jpg', 7, 'Test Blog 2', 'Dhruvi Sangani', 'shruci@gmail.com', '9876543210', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.And meat blessed void a fruit gathered waters.\r\n\r\n25 That Prevent Job Seekers From Overcoming Failure\r\nPhasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio.', '1', '2023-12-01 00:00:00', '0000-00-00'),
(18, '1701451525.jpg', 7, 'Testing Blog', 'Testing User', 'test@gmail.com', '9876543210', '25 That Prevent Job Seekers From Overcoming Failure\r\nPhasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio.', '1', '2023-12-01 00:00:00', '0000-00-00'),
(19, '1701451525.jpg', 9, 'New Blog', 'Test', 'shruci@gmail.com', '9876543210', 'Loare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio.', '1', '2023-12-01 00:00:00', '0000-00-00'),
(20, '1714830745.png', 7, 'hgvbn', 'Dhruvi Sangani', 'dsangani44@gmail.com', '7894561230', '<p>kla,xmx,xclmclkcm.c,.cxmlclzxc,mcx</p>\r\n', '1', '2024-05-04 19:22:25', '2024-05-04'),
(21, '', 7, 'Quo anim assumenda s', 'Id perferendis non ', 'jiqufi@mailinator.com', '7845851455', '<p>xm,sx</p>\r\n', '0', '2024-05-06 15:53:32', '2024-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `crt_img` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone`, `msg`, `date`) VALUES
(1, 'test', '', 'test@gmail.com', '9876543210', 'test', '2024-03-15 14:59:09'),
(7, 'Dhruvi', 'Sangani', 'dsangani44@gmail.com', '7016922908', 'i want to purchase new membership  how ?', '2024-03-30 16:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon_code` text NOT NULL,
  `c_amount` varchar(255) NOT NULL,
  `c_status` varchar(255) NOT NULL,
  `c_expire_date` varchar(255) NOT NULL,
  `c_usedby` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon_code`, `c_amount`, `c_status`, `c_expire_date`, `c_usedby`, `created_at`) VALUES
(5, 'HN762P', '200', '2', '2024-05-31', '', '2024-05-03 09:50:42'),
(7, 'OZ114F', '600', '1', '2024-05-31', '50', '2024-05-03 10:40:46'),
(8, 'AQ426O', '600', '2', '', '', '2024-05-03 10:47:24'),
(9, 'GU338Q', '600', '1', '2024-05-24', '50', '2024-05-03 10:47:53'),
(10, 'NR414M', '700', '1', '2024-05-31', '50', '2024-05-03 11:33:58'),
(11, 'ON216R', '200', '0', '2024-08-31', '', '2024-07-31 17:34:25'),
(12, 'IJ763L', '200', '0', '2024-07-31', '', '2024-07-31 17:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `instructor_id` varchar(11) NOT NULL,
  `c_title` varchar(255) NOT NULL,
  `c_date` varchar(255) NOT NULL,
  `c_exp_date` varchar(500) NOT NULL,
  `c_time` varchar(255) NOT NULL,
  `c_description` text NOT NULL,
  `c_thumbnail` text NOT NULL,
  `c_is_free` varchar(255) NOT NULL,
  `c_withoutmembership_price` varchar(255) NOT NULL,
  `c_membership_price` varchar(255) NOT NULL,
  `c_metting_link` varchar(255) NOT NULL,
  `c_metting_id` varchar(255) NOT NULL,
  `c_metting_pass` varchar(255) NOT NULL,
  `c_backup_type` text NOT NULL,
  `c_backup_link` varchar(255) NOT NULL,
  `enroll_stud` int(11) NOT NULL,
  `enroll_stud_ids` varchar(500) NOT NULL,
  `is_publish` int(11) NOT NULL,
  `view_count` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `instructor_id`, `c_title`, `c_date`, `c_exp_date`, `c_time`, `c_description`, `c_thumbnail`, `c_is_free`, `c_withoutmembership_price`, `c_membership_price`, `c_metting_link`, `c_metting_id`, `c_metting_pass`, `c_backup_type`, `c_backup_link`, `enroll_stud`, `enroll_stud_ids`, `is_publish`, `view_count`, `created_at`, `updated_at`) VALUES
(1, '4,5', 'Html Basic', '07-04-2024 - 13-04-2024', '13-04-2024', '11:00 AM - 02:00 PM', '<p><strong><span style=\"color:#8e44ad\"><span style=\"font-size:16px\">HTML BASIC</span></span></strong></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Formatting Tags</span></li>\r\n	<li><span style=\"font-size:16px\">Table</span></li>\r\n	<li><span style=\"font-size:16px\">Order list</span></li>\r\n	<li><span style=\"font-size:16px\">Unorder list</span></li>\r\n</ul>\r\n', '', '1', '', '', 'https://meet.google.com/kuy-wfmf-fup?authuser=0', '896455', '9632', 'youtube', 'https://www.youtube.com/embed/b5ccGgvEkns,https://www.youtube.com/embed/b5ccGgvEkns24', 0, '', 0, 10, '2024-03-15 11:31:42', '2024-04-06 15:24:49'),
(2, '4', 'React Js for Begginer', '18-03-2024 - 18-04-2024', '18-04-2024', '08:05 AM - 11:45 AM', '<p><span style=\"font-size:18px\"><strong>React Hooks</strong></span></p>\r\n\r\n<ul>\r\n	<li>Use Effect</li>\r\n	<li>Use Form</li>\r\n	<li>Use State</li>\r\n</ul>\r\n', '1712211424.jpg', '0', '700', '200', 'https://test.com', '852147', '452163', '', '', 0, '', 1, 27, '2024-03-15 14:56:57', '2024-04-16 14:21:26'),
(4, '4,6', 'Ratione maxime cupid', '06-03-2024 - 15-04-2024', '15-04-2024', '09:00 AM - 01:00 PM', '<ul>\n	<li>Html</li>\n	<li>Css</li>\n	<li>Js</li>\n	<li>React</li>\n</ul>\n', '1712213333.jpg', '0', '1500', '1200', 'https://test.com', 'Ducimus qui veniam', 'Odio et facere sequi', '', '', 0, '', 1, 42, '2024-03-15 16:12:41', '2024-04-04 12:18:53'),
(5, '4,5', 'Html Basic Begginer', '16-03-2024 - 17-04-2024', '17-04-2024', '11:00 AM - 02:00 PM', '<p><strong><span style=\"color:#8e44ad\"><span style=\"font-size:16px\">HTML BASIC</span></span></strong></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Formatting Tags</span></li>\r\n	<li><span style=\"font-size:16px\">Table</span></li>\r\n	<li><span style=\"font-size:16px\">Order list</span></li>\r\n	<li><span style=\"font-size:16px\">Unorder list</span></li>\r\n</ul>\r\n', '1712212302.jpg', '1', '', '', 'https://meet.google.com/kuy-wfmf-fup?authuser=0', '896455', '9632', 'youtube', '', 0, '', 1, 29, '2024-03-15 11:31:42', '2024-04-04 12:01:42'),
(6, '4,5', 'Angular Basic', '16-03-2024 - 31-05-2024', '31-05-2024', '11:00 AM - 02:00 PM', '<p><strong><span style=\"color:#8e44ad\"><span style=\"font-size:16px\">HTML BASIC</span></span></strong></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Formatting Tags</span></li>\r\n	<li><span style=\"font-size:16px\">Table</span></li>\r\n	<li><span style=\"font-size:16px\">Order list</span></li>\r\n	<li><span style=\"font-size:16px\">Unorder list</span></li>\r\n</ul>\r\n', '1712212318.jpg', '1', '', '', 'https://meet.google.com/kuy-wfmf-fup?authuser=0', '896455', '9632', 'youtube', 'https://meet.google.com/kuy-wfmf-fup?authuser=0,https://www.youtube.com/embed/b5ccGgvEkns	,https://meet.google.com/kuy-wfmf-fup?authuser=0', 0, '', 1, 58, '2024-03-15 11:31:42', '2024-04-20 15:34:22'),
(7, '4', 'React Native for Begginer', '18-03-2024 - 31-05-2024', '31-05-2024', '08:05 AM - 11:45 AM', '<p><span style=\"font-size:18px\"><strong>React Hooks</strong></span></p>\r\n\r\n<ul>\r\n	<li>Use Effect</li>\r\n	<li>Use Form</li>\r\n	<li>Use State</li>\r\n</ul>\r\n', '1712212332.jpg', '0', '700', '200', 'https://test.com', '852147', '452163', '', '', 0, '', 1, 105, '2024-03-15 14:56:57', '2024-04-20 15:27:56'),
(8, '4,5,6', 'React js Advance', '06-03-2024 - 15-03-2024', '15-03-2024', '09:00 AM - 01:00 PM', '<ul>\r\n	<li>Html</li>\r\n	<li>Css</li>\r\n	<li>Js</li>\r\n	<li>React</li>\r\n</ul>\r\n', '1712212349.jpg', '0', '1500', '1200', 'https://test.com', 'Ducimus qui veniam', 'Odio et facere sequi', '', '', 0, '', 0, 0, '2024-03-15 16:12:41', '2024-04-20 15:27:20'),
(9, '4', 'React Native for Intermidiat', '18-03-2024 - 15-05-2024', '15-05-2024', '08:05 AM - 11:45 AM', '<p><span style=\"font-size:18px\"><strong>React Hooks</strong></span></p>\r\n\r\n<ul>\r\n	<li>Use Effect</li>\r\n	<li>Use Form</li>\r\n	<li>Use State</li>\r\n</ul>\r\n', '1712212364.jpg', '0', '700', '200', 'https://test.com', '852147', '452163', '', '', 0, '', 1, 2, '2024-03-15 14:56:57', '2024-04-20 15:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `img`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Event1', '1712237660.jpg', 'https://www.youtube.com/embed/b5ccGgvEkns', '2024-04-04 18:17:17', '2024-04-10 10:57:01'),
(2, 'Event 2', '1712237744.jpg', 'https://www.youtube.com/embed/uYEhJj0P9J0', '2024-04-04 19:05:44', '2024-04-10 10:57:09'),
(3, 'event3', '1712237769.jpg', 'https://www.youtube.com/embed/YKMNVWvvp6I', '2024-04-04 19:06:09', '2024-04-10 10:57:14'),
(4, 'event4', '1712237792.jpg', 'https://www.youtube.com/embed/b5ccGgvEkns', '2024-04-04 19:06:32', '2024-04-10 10:57:20'),
(5, 'event5', '1712237816.jpg', 'https://www.youtube.com/embed/KLvNMvHzKcs', '2024-04-04 19:06:56', '2024-04-10 10:57:33'),
(6, 'event6', '1712237972.png', 'https://www.youtube.com/embed/uhhlrCk9wvQ', '2024-04-04 19:07:25', '2024-04-10 10:58:01'),
(7, 'event7', '1712237989.png', 'https://www.youtube.com/embed/ETouS3Dvfsk', '2024-04-04 19:07:53', '2024-04-10 10:58:08'),
(8, 'event8', '1712237907.jpg', 'https://www.youtube.com/embed/5eekY4ePqto', '2024-04-04 19:08:27', '2024-04-10 10:58:14'),
(9, 'event9', '1712237957.png', 'https://www.youtube.com/embed/3uzlG8IGPwU', '2024-04-04 19:09:02', '2024-04-10 10:58:20');

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
(3, 'is it testing question ?', '<p>yes, it is testing.</p>\r\n', '2024-03-20 15:08:06', '2024-03-26 14:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `Instructor_iamge` varchar(250) NOT NULL,
  `Instructor_name` varchar(250) NOT NULL,
  `Instructor_designation` varchar(250) NOT NULL,
  `Instructor_description` text NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `Instructor_iamge`, `Instructor_name`, `Instructor_designation`, `Instructor_description`, `add_date`, `updated_at`) VALUES
(1, '1712212786.jpg', 'Travis Websteer', 'Est ab sit voluptate', '<p>Hello everyone! I am [Name], and as a teacher by profession, I&#39;m committed to making a positive impact on the lives of children. With [X years] of experience and a [mention relevant degree/certification], I bring a wealth of knowledge and expertise to inspire young minds.</p>\r\n', '2024-04-06 09:58:17', '2024-04-06 15:28:17'),
(4, '1712212797.jpg', 'Clio Patel', 'Illum nisi irure se', '<p>Hello everyone! I am [Name], and as a teacher by profession, I&#39;m committed to making a positive impact on the lives of children. With [X years] of experience and a [mention relevant degree/certification], I bring a wealth of knowledge and expertise to inspire young minds.</p>\r\n', '2024-04-04 06:39:57', '2024-04-04 12:09:57'),
(5, '1712212809.jpg', 'Sandra Kaufman', 'Voluptate voluptates', '<p>Hello everyone! I am [Name], and as a teacher by profession, I&#39;m committed to making a positive impact on the lives of children. With [X years] of experience and a [mention relevant degree/certification], I bring a wealth of knowledge and expertise to inspire young minds.</p>\r\n', '2024-04-04 06:40:09', '2024-04-04 12:10:09'),
(6, '1712218678.jpg', 'Hilary Kim', 'Excepturi ipsa esse', '<p>Hello everyone! I am [Name], and as a teacher by profession, I&#39;m committed to making a positive impact on the lives of children. With [X years] of experience and a [mention relevant degree/certification], I bring a wealth of knowledge and expertise to inspire young minds.</p>\r\n', '2024-04-04 08:17:58', '2024-04-04 13:47:58');

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
-- Table structure for table `membership_pricing`
--

CREATE TABLE `membership_pricing` (
  `id` int(11) NOT NULL,
  `membership_start_date` varchar(255) NOT NULL,
  `membership_new_price` varchar(255) NOT NULL,
  `membership_renew_price` varchar(255) NOT NULL,
  `membership_discount_price` varchar(255) NOT NULL,
  `membership_description` text NOT NULL,
  `membership_privileges` text NOT NULL,
  `membership_email` varchar(255) NOT NULL,
  `membership_term_condition_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership_pricing`
--

INSERT INTO `membership_pricing` (`id`, `membership_start_date`, `membership_new_price`, `membership_renew_price`, `membership_discount_price`, `membership_description`, `membership_privileges`, `membership_email`, `membership_term_condition_id`, `created_at`, `updated_at`) VALUES
(0, '01-03-2024 - 31-07-2024', '500', '100', '', '<p>Your search for like-minded people, who would understand, appreciate, and nurture your talent ends here.</p>\r\n\r\n<p>Join FIP as a member!&nbsp;</p>\r\n\r\n<p>To follow the passion which you always wanted to, but something or the other was always in the way! Don&#39;t let it stop you, not this time!&nbsp;&nbsp;</p>\r\n', '<ul>\r\n	<li>Preferential seats in limited seat batches!</li>\r\n	<li>Fee concessions/Discounts in majority courses except some specific!</li>\r\n	<li>Entry in special webinars, sessions, and internal gatherings!</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 'fip_membership@gmail.com', 'false', '2024-03-20 10:20:01', '2024-04-23 11:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `n_u_id` varchar(255) NOT NULL,
  `n_thumbnill` text NOT NULL,
  `n_title` varchar(255) NOT NULL,
  `n_decription` text NOT NULL,
  `n_is_send` varchar(255) NOT NULL,
  `n_is_deleted_by_user` varchar(255) NOT NULL,
  `n_is_viewd_by_user` text NOT NULL,
  `n_created_at` datetime NOT NULL,
  `n_updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `n_u_id`, `n_thumbnill`, `n_title`, `n_decription`, `n_is_send`, `n_is_deleted_by_user`, `n_is_viewd_by_user`, `n_created_at`, `n_updated_at`) VALUES
(5, '43,44', '1712381460.png', 'Html Basic Course', 'Html Basic Course starts Tommorow ', 'true', '', '43', '2024-03-22 16:52:33', '2024-04-17 15:53:35'),
(7, '43', '1712383275.jpg', 'Angular course', 'Angular Course Start Tommorow', 'true', '43', '43', '2024-04-06 11:31:15', '2024-04-17 14:44:48'),
(8, '44', '1712383420.png', 'Certificate for Html Course', 'Your Html Course Certificate is ready', 'true', '', '', '2024-04-06 11:33:40', '2024-04-06 15:31:28'),
(9, '45', '1713786026.jpeg', 'hello', 'test', 'true', '', '', '2024-04-22 17:10:26', '0000-00-00 00:00:00');

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `method_img` text NOT NULL,
  `method_name` varchar(255) NOT NULL,
  `method_is_publish` varchar(255) NOT NULL,
  `merchantId` varchar(255) NOT NULL,
  `apiKey` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `method_img`, `method_name`, `method_is_publish`, `merchantId`, `apiKey`, `created_at`, `updated_at`) VALUES
(1, '', 'PhonePe', 'true', 'PGTESTPAYUATr', '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399', '2024-03-27 07:29:38', '2024-03-27 07:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `tit` text NOT NULL,
  `is_publish` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`id`, `img`, `tit`, `is_publish`, `updated_at`) VALUES
(1, '1714395108.jpg', 'Introduction', 0, '0000-00-00 00:00:00');

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
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `rating` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `course_id`, `user_id`, `name`, `msg`, `rating`, `created_at`, `updated_at`) VALUES
(1, '6', 0, 'Dhruvi', 'Really enjoyed the course . The instructor wan excellent and was clearly very knowledgeable about the topiscs.', '5', '2024-04-05 15:44:19', '0000-00-00 00:00:00'),
(9, '1', 0, 'Sangani', 'k,sajdsnd', '2', '2024-04-05 16:01:41', '0000-00-00 00:00:00'),
(11, '2', 0, 'Dhruvi sangani', 'this is very useful course.', '3', '2024-04-05 16:06:46', '2024-04-08 11:30:28'),
(12, '9', 0, 'dhruvi', 'its a good', '4', '2024-04-05 18:59:34', '0000-00-00 00:00:00'),
(13, '5', 43, 'Sangani Dhruvi', 'Testing', '3', '2024-04-05 19:09:16', '0000-00-00 00:00:00'),
(14, '6', 43, 'Dhruvi', 'its an ossom............', '5', '2024-04-08 16:30:31', '2024-04-08 17:06:26'),
(16, '6', 43, 'test', 'its an test', '4', '2024-04-09 17:00:48', '0000-00-00 00:00:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_billing_history`
--

CREATE TABLE `user_billing_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `transaction_id` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

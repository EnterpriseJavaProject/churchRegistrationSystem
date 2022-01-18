-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2021 at 09:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assemblies_of_God`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `email`, `phone`, `department`, `usertype`, `password`, `created_at`, `update_time`) VALUES
(1, 'Bismark Otu', 'bismarkotu1006@gmail.com', '0555560810', 'Media', 'Admin', 'Openforme', '2021-11-19 17:15:48', '2021-11-19 17:15:48'),
(3, 'Nana Kwesi', 'nanakwesi1006@gmail.com', '0246467856', 'Young Singles', 'User', 'Yes', '2021-11-29 10:52:37', '2021-11-29 10:52:37'),
(4, 'Admin', 'admin@gmail.com', '0555560822', 'Media', 'Admin', 'admin', '2021-11-29 10:53:16', '2021-11-29 10:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(255) NOT NULL,
  `membershipNo` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `place_of_work` varchar(255) DEFAULT NULL,
  `residence` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `tithe` int(255) DEFAULT NULL,
  `year_baptised` varchar(255) DEFAULT NULL,
  `home_town` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usertype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `membershipNo`, `username`, `phone`, `gender`, `marital_status`, `dob`, `occupation`, `place_of_work`, `residence`, `department`, `tithe`, `year_baptised`, `home_town`, `region`, `country`, `images`, `created_at`, `update_time`, `usertype`) VALUES
(1, 'HGT001', 'Apika Moses Sherif', '0545198389', 'Male', 'Single', '1992-03-09', 'Administrator', 'Holy Ghost Temple', 'Dulugu', 'Youth Ministry', 0, '2016', 'Bongo Feo', 'Upper East', 'Ghana', '', '2021-12-10 16:56:19', '2021-12-10 16:56:19', 'member'),
(2, 'HGT002', 'Isaac Agonbire Atugeba', '0546323383', 'Male', 'Married', '1990-10-01', 'Lecturer', 'Bolgatanga Technical University', 'Soe Abooki No Lie', 'Men Ministry', 0, '2019', 'Kandiga', 'Upper East', 'Ghana', '', '2020-10-15 21:55:28', '2020-10-15 21:55:28', 'member'),
(3, 'HGT003', 'Bismark Otu', '0555560810', 'Male', 'Single', '1995-06-25', 'Software Engineer', 'Kofi Annan IT Center', 'Zaare', 'IT', 0, '2010', 'Akyem Asuom', 'Eastern', 'Ghana', '', '2021-12-10 16:57:32', '2021-12-10 16:57:32', 'member'),
(4, 'HGT004', 'Timothy Nimatu', 'Null', 'Female', 'Select Marital Status', '', 'No', 'Zaare', 'Zaare', 'None', 0, 'No', 'Zaare', 'Upper East', 'Ghana', '', '2021-12-11 14:00:25', '2021-12-11 14:00:25', 'member'),
(5, 'HGT005', 'Akomisah Michael Assibi', '0245273673', 'Male', 'Married', '', 'Teaching', 'GES ', 'ZAARE', 'Men Ministry', 0, '1996', 'BINDURI', 'Upper East', 'Ghana', '', '2021-12-10 17:18:50', '2021-12-10 17:18:50', 'member'),
(6, 'HGT006', 'Janet Akasumah', '0554284479', 'Female', 'Single', '1996-02-26', 'Business', 'No', 'Zaare', 'None', 0, '2015', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 13:54:02', '2021-12-11 13:54:02', 'member'),
(7, 'HGT007', 'Cecilia Bawa', '0244170566', 'Female', 'Select Marital Status', '', 'GPRTU', 'Tamale Station', 'Dagmweo', 'Women Ministry', 0, '8-10-88', 'Sinierisi', 'Upper East', 'Ghana', '', '2021-12-11 12:42:21', '2021-12-11 12:42:21', 'member'),
(8, 'HGT008', 'Gifty Bawa', '0545168576', 'Female', 'Select Marital Status', '', 'Hair Dresser', 'No', 'Dagmweo', 'None', 0, '9-10-2010', 'Sinierisi', 'Upper East', 'Ghana', '', '2021-12-11 12:44:37', '2021-12-11 12:44:37', 'member'),
(9, 'HGT009', 'Gideon Ansah', '0543080168', 'Male', 'Select Marital Status', '', 'No', 'No', 'Dagmweo', 'None', 0, '9-10-2010', 'Asutuare', 'Upper East', 'Ghana', '', '2021-12-11 13:52:54', '2021-12-11 13:52:54', 'member'),
(10, 'HGT010', 'Pewura Joana', '0559160579', 'Female', 'Single', '', 'Nursing', 'No', 'Soe', 'Sunday School', 0, 'No', 'Navrongo', 'Upper East', 'Ghana', '', '2021-12-12 22:19:20', '2021-12-12 22:19:20', 'member'),
(11, 'HGT011', 'Pewura Veronica Bakeweye', '0541996014', 'Female', 'Select Marital Status', '', 'Midwifery', 'Regional Hospital Bolga', 'Soe', 'None', 0, 'No', 'Navrongo', 'Upper East', 'Ghana', '', '2021-12-11 13:14:52', '2021-12-11 13:14:52', 'member'),
(12, 'HGT012', 'Peter Namang', '0245439689', 'Male', 'Select Marital Status', '', 'Public Servant', 'GRA', 'Estate', 'None', 0, '15-08-2002', 'Bunkpurugu', 'Upper East', 'Ghana', '', '2021-12-11 13:18:13', '2021-12-11 13:18:13', 'member'),
(13, 'HGT013', 'Peter Damtar', '0247786792', 'Male', 'Select Marital Status', '', 'Business', 'No', 'Estate', 'None', 0, '19-08-2012', 'Bunkpurugu', 'Upper East', 'Ghana', '', '2021-12-11 13:20:45', '2021-12-11 13:20:45', 'member'),
(14, 'HGT014', 'Emmanuel Namang', '0551761017', 'Male', 'Select Marital Status', '', 'Student', 'No', 'Estate', 'None', 0, '30-06-2018', 'Bunkpurugu', 'Upper East', 'Ghana', '', '2021-12-11 13:24:43', '2021-12-11 13:24:43', 'member'),
(15, 'HGT015', 'Martin Nsobila', '0249341570', 'Male', 'Select Marital Status', '', 'Painting', 'Zaare', 'Zaare', 'Men Ministry', 0, '27-11-2016', 'Zaare', 'Upper East', 'Ghana', '', '2021-12-11 13:26:32', '2021-12-11 13:26:32', 'member'),
(16, 'HGT016', 'Mavis Nsobila', '0543388759', 'Female', 'Select Marital Status', '', 'Trading', 'Zaare', 'Zaare', 'Women Ministry', 0, '18-04-85', 'Zaare', 'Upper East', 'Ghana', '', '2021-12-11 13:28:26', '2021-12-11 13:28:26', 'member'),
(17, 'HGT017', 'Solomon Sulemana Akagile', '0548434055', 'Male', 'Select Marital Status', '', 'Veterinary Officer', 'Nkwata', 'Zaare', 'Men Ministry', 0, '14-10-2000', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 13:30:36', '2021-12-11 13:30:36', 'member'),
(18, 'HGT018', 'Zakari Akagile', '0246058904', 'Male', 'Select Marital Status', '', 'Orderly', 'Regional Hospital Bolga', 'Zaare', 'Men Ministry', 0, 'No', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 13:32:31', '2021-12-11 13:32:31', 'member'),
(19, 'HGT019', 'Ruth Akagile', '0241094484', 'Female', 'Select Marital Status', '', 'Seamstress', 'Walewale', 'Zaare', 'Women Ministry', 0, 'No', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 13:33:36', '2021-12-11 13:33:36', 'member'),
(20, 'HGT020', 'Susana Akagile', '0245983227', 'Female', 'Select Marital Status', '', 'Trader', 'No', 'Zaare', 'Women Ministry', 0, '20-09-1997', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 13:35:05', '2021-12-11 13:35:05', 'member'),
(21, 'HGT021', 'Eunice Ayimpogbila Akagile', '0544285575', 'Male', 'Select Marital Status', '', 'Teacher', 'No', 'Zaare', 'Youth Ministry', 0, '13-01-01', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 13:36:32', '2021-12-11 13:36:32', 'member'),
(22, 'HGT022', 'Mabel Anyellum Akagile', '0554169679', 'Female', 'Select Marital Status', '', 'Student', 'No', 'Zaare', 'Youth Ministry', 0, '16-11-2013', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 13:37:50', '2021-12-11 13:37:50', 'member'),
(23, 'HGT023', 'Stephen Mba', '0542578877', 'Male', 'Select Marital Status', '', 'No', 'No', 'Tindonmolgo', 'None', 0, '1996', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 13:45:26', '2021-12-11 13:45:26', 'member'),
(24, 'HGT024', 'Juliana Mba', '0246837790', 'Female', 'Select Marital Status', '', 'No', 'No', 'Tindonmolgo', 'None', 0, '1949', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 13:45:31', '2021-12-11 13:45:31', 'member'),
(25, 'HGT025', 'Paulina Yinze', 'Nothing', 'Female', 'Select Marital Status', '', 'Trader', 'Market', 'Zorbisi', 'Women Ministry', 0, 'No', 'Tongo', 'Upper East', 'Ghana', '', '2021-12-11 14:04:51', '2021-12-11 14:04:51', 'member'),
(26, 'HGT026', 'Jennifer Yinze', '0242212744', 'Female', 'Select Marital Status', '', 'Student', 'School', 'Zorbisi', 'Youth Ministry', 0, '28-12-2020', 'Tongo', 'Upper East', 'Ghana', '', '2021-12-11 14:01:57', '2021-12-11 14:01:57', 'member'),
(27, 'HGT027', 'Matthew Yinze', 'Dont Have', 'Male', 'Select Marital Status', '', 'Fitter', 'Sawaaba', 'Zorbisi', 'Youth Ministry', 0, 'No', 'Tongo', 'Upper East', 'Ghana', '', '2021-12-11 14:05:54', '2021-12-11 14:05:54', 'member'),
(28, 'HGT028', 'Christopher Nyaaba Adongo', '0555942490', 'Male', 'Select Marital Status', '', 'Student', 'School', 'Zorbisi', 'Youth Ministry', 0, '28-12-2020', 'Yorogo', 'Upper East', 'Ghana', '', '2021-12-11 14:07:52', '2021-12-11 14:07:52', 'member'),
(29, 'HGT029', 'Beatrice Aleya', '0596380799', 'Female', 'Select Marital Status', '', 'Student', 'School', 'Zorbisi', 'Youth Ministry', 0, '9-03-2019', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 14:12:13', '2021-12-11 14:12:13', 'member'),
(30, 'HGT030', 'Rita Aleya', '0557621633', 'Female', 'Select Marital Status', '', 'Trader', 'In the house', 'Zorbisi', 'Women Ministry', 0, '14-12-2013', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 14:13:22', '2021-12-11 14:13:22', 'member'),
(31, 'HGT031', 'Francisca Anyoka Ayinpogbila', '0559138482', 'Female', 'Select Marital Status', '', 'Tailor', 'Tindonsobligo', 'Soe', 'Women Ministry', 0, '2015', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 14:16:42', '2021-12-11 14:16:42', 'member'),
(32, 'HGT032', 'Betty Anyoka', '0240600516', 'Female', 'Select Marital Status', '', 'Tailor', 'Tindonsobligo', 'Soe', 'Women Ministry', 0, 'No', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 14:19:16', '2021-12-11 14:19:16', 'member'),
(33, 'HGT033', 'Jacob Atibila Ayinsogba', '0544552871', 'Male', 'Select Marital Status', '', 'Tailor', 'No', 'Soe', 'None', 0, 'No', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 14:20:44', '2021-12-11 14:20:44', 'member'),
(34, 'HGT034', 'Rose Laari Saaru', '0248498665', 'Female', 'Select Marital Status', '', 'GRA Customs', 'Zuarungu', 'Kumbosko', 'Women Ministry', 0, 'No', 'Bunkpurugu', 'Upper East', 'Ghana', '', '2021-12-11 14:24:11', '2021-12-11 14:24:11', 'member'),
(35, 'HGT035', 'Agomah Akuba Kubera', '0551949883', 'Female', 'Select Marital Status', '', 'Teacher', 'Talensi District', 'Zaare', 'Youth Ministry', 0, '2018', 'Bawku', 'Upper East', 'Ghana', '', '2021-12-11 14:25:57', '2021-12-11 14:25:57', 'member'),
(36, 'HGT036', 'Paulina Abazewe', '0596058529', 'Female', 'Select Marital Status', '', 'Teacher', 'Bawku', 'Bawku SEC TEC', 'Women Ministry', 0, '2012', 'Navrongo', 'Upper East', 'Ghana', '', '2021-12-11 14:28:12', '2021-12-11 14:28:12', 'member'),
(37, 'HGT037', 'Francis Malba Bugre', '0246725308', 'Male', 'Select Marital Status', '', 'Nursing', 'Talensi District Hospital', 'Tindonmolgo', 'Men Ministry', 0, '2012', 'Tongo', 'Upper East', 'Ghana', '', '2021-12-11 14:30:30', '2021-12-11 14:30:30', 'member'),
(38, 'HGT038', 'Selasi Awuni', '0248665022', 'Male', 'Select Marital Status', '', 'Student', 'Obuasi', 'Pobaga', 'Youth Ministry', 0, '2011', 'Balungu', 'Upper East', 'Ghana', '', '2021-12-11 14:46:56', '2021-12-11 14:46:56', 'member'),
(39, 'HGT039', 'Mary Lardi Avaala', '0241552128', 'Female', 'Select Marital Status', '', 'Hair Dresser', 'No', 'Bukere', 'None', 0, 'No', 'Pwalaga', 'Upper East', 'Ghana', '', '2021-12-11 14:35:12', '2021-12-11 14:35:12', 'member'),
(40, 'HGT040', 'Rafatu Dingarie', '0550388544', 'Female', 'Select Marital Status', '', 'Fashion Designer', 'Buuda Fashion', 'Tanzua', 'None', 0, 'No', 'Wulugu', 'Upper East', 'Ghana', '', '2021-12-11 14:38:09', '2021-12-11 14:38:09', 'member'),
(41, 'HGT041', 'Fati Atalebe', '0591872967', 'Female', 'Select Marital Status', '', 'Trader', 'Market', 'Bukere', 'Women Ministry', 0, 'No', 'Bukere', 'Upper East', 'Ghana', '', '2021-12-11 19:11:21', '2021-12-11 19:11:21', 'member'),
(42, 'HGT042', 'Jennifer Aboya', '0544051318', 'Male', 'Select Marital Status', '', 'Hair Dresser', 'A cal Block', 'Soe', 'None', 0, '2021', 'Dowa', 'Upper East', 'Ghana', '', '2021-12-11 14:41:44', '2021-12-11 14:41:44', 'member'),
(43, 'HGT043', 'Georgina Yinbill', '0246903714', 'Female', 'Select Marital Status', '', 'Hair Dresser', 'Market', 'Tindonmolgo', 'Women Ministry', 0, '12-052019', 'Gbego', 'Upper East', 'Ghana', '', '2021-12-11 14:43:18', '2021-12-11 14:43:18', 'member'),
(44, 'HGT044', 'Elizabeth Awuni', '0549796796', 'Female', 'Select Marital Status', '', 'Trader', 'In the house', 'Pobaga', 'Women Ministry', 0, '26-07-1997', 'Pelugu', 'Upper East', 'Ghana', '', '2021-12-11 14:49:11', '2021-12-11 14:49:11', 'member'),
(45, 'HGT045', 'Solomon Awuni', '0200552062', 'Male', 'Select Marital Status', '', 'Teacher', 'Bolga', 'Pobaga', 'Youth Ministry', 0, '03-09-2011', 'Pelugu', 'Upper East', 'Ghana', '', '2021-12-11 14:51:17', '2021-12-11 14:51:17', 'member'),
(46, 'HGT046', 'Rolanda Kayeeb', '0551647713', 'Female', 'Select Marital Status', '', 'Student', 'No', 'Tanzua', 'Young Singles', 0, '2016', 'Gare', 'Upper East', 'Ghana', '', '2021-12-11 14:52:51', '2021-12-11 14:52:51', 'member'),
(47, 'HGT047', 'Rosemary Rayeeb', '0244010333', 'Female', 'Select Marital Status', '', 'Nursing', 'Regional Hospital Bolga', 'Tanzua', 'Women Ministry', 0, '1991', 'Gare', 'Upper East', 'Ghana', '', '2021-12-11 14:54:49', '2021-12-11 14:54:49', 'member'),
(48, 'HGT048', 'Naomi Nsomah Apna', '0241490613', 'Female', 'Select Marital Status', '', 'Student', 'No', 'Tindonmolgo', 'Youth Ministry', 0, '24-01-2015', 'Dorongo', 'Upper East', 'Ghana', '', '2021-12-11 14:56:25', '2021-12-11 14:56:25', 'member'),
(49, 'HGT049', 'Reynolds Charinga', '0553896858', 'Male', 'Select Marital Status', '', 'Student', 'No', 'Tindonmolgo', 'Youth Ministry', 0, '2015', 'Wulugu', 'Upper East', 'Ghana', '', '2021-12-11 14:57:52', '2021-12-11 14:57:52', 'member'),
(50, 'HGT050', 'Grace Apononge Adariya', '0204049242', 'Female', 'Select Marital Status', '', 'Midwifery', 'Regional Hospital Bolga', 'None', 'Women Ministry', 0, 'No', 'Sumbrungu', 'Upper East', 'Ghana', '', '2021-12-11 15:01:21', '2021-12-11 15:01:21', 'member'),
(51, 'HGT051', 'Richmond Charinga', '0242074499', 'Male', 'Select Marital Status', '', 'No', 'No', 'Tindonmolgo', 'Youth Ministry', 0, '2007', 'Wulugu', 'Upper East', 'Ghana', '', '2021-12-11 15:02:58', '2021-12-11 15:02:58', 'member'),
(52, 'HGT052', 'Abigail Atarah', '0593250646', 'Female', 'Select Marital Status', '', 'Trader', 'Market', 'Waribise', 'Youth Ministry', 0, 'No', 'Tuarungu', 'Upper East', 'Ghana', '', '2021-12-11 15:04:43', '2021-12-11 15:04:43', 'member'),
(53, 'HGT053', 'Charity Daa', '0549313069', 'Female', 'Select Marital Status', '', 'Trader', 'Tanzu', 'Asonge', 'None', 0, '29-06-2019', 'Yinduri', 'Upper East', 'Ghana', '', '2021-12-11 15:07:01', '2021-12-11 15:07:01', 'member'),
(54, 'HGT054', 'Ronald Charinga', '0243835604', 'Male', 'Select Marital Status', '', 'Course Instructor', 'UCMAS Ghana LTD', 'Tindonmolgo', 'Youth Ministry', 0, '2001', 'Wulugu', 'Upper East', 'Ghana', '', '2021-12-11 15:08:57', '2021-12-11 15:08:57', 'member'),
(55, 'HGT055', 'Albert Alengo', '0241289331', 'Male', 'Select Marital Status', '', 'Trader', 'No', 'Sokabisi', 'Men Ministry', 0, 'No', 'Dorongo', 'Upper East', 'Ghana', '', '2021-12-11 15:11:06', '2021-12-11 15:11:06', 'member'),
(56, 'HGT056', 'Monica Alengo', '0246318674', 'Female', 'Select Marital Status', '', 'Trader', 'No', 'Sokabisi', 'Women Ministry', 0, '2008', 'Tongo', 'Upper East', 'Ghana', '', '2021-12-11 15:12:15', '2021-12-11 15:12:15', 'member'),
(57, 'HGT057', 'Rita Mmabil Atinga', '0245461615', 'Female', 'Select Marital Status', '', 'Student', 'Bolga Girls', 'Soe', 'Women Ministry', 0, 'No', 'Damologo', 'Upper East', 'Ghana', '', '2021-12-11 15:14:16', '2021-12-11 15:14:16', 'member'),
(58, 'HGT058', 'Kennedy Anaba', '0245296134', 'Male', 'Select Marital Status', '', 'Mason', 'Bolga', 'Tanzua', 'Men Ministry', 0, '2017', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 15:16:02', '2021-12-11 15:16:02', 'member'),
(59, 'HGT059', 'Dorothy Abire', '0241406854', 'Female', 'Select Marital Status', '', 'Student', 'No', 'Zaare', 'None', 0, 'No', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 15:17:07', '2021-12-11 15:17:07', 'member'),
(60, 'HGT060', 'Vida Azumah', '0594769325', 'Female', 'Select Marital Status', '', 'Tailor', 'Zaare', 'Zaare', 'Women Ministry', 0, '29-09-2019', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 15:18:19', '2021-12-11 15:18:19', 'member'),
(61, 'HGT061', 'Margaret Badeemah', '0554284124', 'Female', 'Select Marital Status', '', 'Secretary', 'NABDAM District', 'Tindonmolgo', 'Women Ministry', 0, '28-08-1993', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 15:20:36', '2021-12-11 15:20:36', 'member'),
(62, 'HGT062', 'Daabi Hawa', '0546902585', 'Female', 'Select Marital Status', '', 'Seamstress', 'Sawaaba Park', 'Sawaba', 'None', 0, '25-07-2015', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 15:22:36', '2021-12-11 15:22:36', 'member'),
(63, 'HGT063', 'Grace Akolgo Ngura', '0548148466', 'Female', 'Select Marital Status', '', 'Trader', 'Market', 'Bukere', 'Women Ministry', 0, '13-01-2008', 'Yikene', 'Upper East', 'Ghana', '', '2021-12-11 15:24:09', '2021-12-11 15:24:09', 'member'),
(64, 'HGT064', 'Joseph Samari', '0248579894', 'Female', 'Select Marital Status', '', 'Nurse', 'Afrikid Medical Centre', 'Soe', 'Men Ministry', 0, '25-10-2001', 'Wulugu', 'Upper East', 'Ghana', '', '2021-12-11 15:26:06', '2021-12-11 15:26:06', 'member'),
(65, 'HGT065', 'Francisca Akolgo Ngura', '0551905806', 'Female', 'Select Marital Status', '', 'Student', 'No', 'Bukere', 'Young Singles', 0, '30-07-2011', 'Zokor', 'Upper East', 'Ghana', '', '2021-12-11 15:27:55', '2021-12-11 15:27:55', 'member'),
(66, 'HGT066', 'Elizabeth Samari', '0556873399', 'Female', 'Select Marital Status', '', 'Hair Dresser', 'Market', 'Soe', 'Women Ministry', 0, '2011', 'Wulugu', 'Upper East', 'Ghana', '', '2021-12-11 15:29:00', '2021-12-11 15:29:00', 'member'),
(67, 'HGT067', 'Henry Akolgo Ngura', '0593210825', 'Male', 'Select Marital Status', '', 'Student', 'No', 'Bukere', 'Youth Ministry', 0, '05-05-2014', 'Zokor', 'Upper East', 'Ghana', '', '2021-12-11 15:30:29', '2021-12-11 15:30:29', 'member'),
(68, 'HGT068', 'Charles Azaare', '0248938518', 'Male', 'Select Marital Status', '', 'Teacher', 'Regional Education Office', 'Tanzua', 'None', 0, '1998', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 15:32:38', '2021-12-11 15:32:38', 'member'),
(69, 'HGT069', 'Precious Atule Adakudugu', '0594769368', 'Female', 'Select Marital Status', '', 'Student', 'No', 'Bukere', 'None', 0, '03-10-2020', 'Bawku', 'Upper East', 'Ghana', '', '2021-12-11 15:35:06', '2021-12-11 15:35:06', 'member'),
(71, 'HGT071', 'Elizabeth Azaare Atuta', '00', 'Female', 'Select Marital Status', '', 'Trader', 'No', 'Tanzua', 'None', 0, '1998', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 16:00:08', '2021-12-11 16:00:08', 'member'),
(72, 'HGT072', 'Abuuga Eunice Akalu', '0248079641', 'Female', 'Select Marital Status', '', 'Student', 'No', 'Bukere', 'Youth Ministry', 0, 'No', 'Bukere', 'Upper East', 'Ghana', '', '2021-12-11 16:04:06', '2021-12-11 16:04:06', 'member'),
(73, 'HGT073', 'Abaa Aleka Charles', '0542375184', 'Male', 'Select Marital Status', '', 'Mason', 'No', 'Bukere', 'Men Ministry', 0, 'No', 'Bukere', 'Upper East', 'Ghana', '', '2021-12-11 16:05:38', '2021-12-11 16:05:38', 'member'),
(74, 'HGT074', 'Edward Ndarbon', '0541441317', 'Male', 'Select Marital Status', '', 'Public Servant', 'NABDAM District', 'Tanzua', 'None', 0, 'No', 'Nabdam', 'Upper East', 'Ghana', '', '2021-12-11 16:07:51', '2021-12-11 16:07:51', 'member'),
(75, 'HGT075', 'Alice Laar', '0246438188', 'Female', 'Select Marital Status', '', 'Trader', 'Joshua Laar House', 'Yikene', 'Women Ministry', 0, '1981', 'Bunkpurugu', 'Upper East', 'Ghana', '', '2021-12-11 16:09:52', '2021-12-11 16:09:52', 'member'),
(76, 'HGT076', 'Martha Braimah', '0249645205', 'Female', 'Select Marital Status', '', 'Teacher but retired', 'No', 'Kumbosigo', 'Women Ministry', 0, '2015', 'Bawku', 'Upper East', 'Ghana', '', '2021-12-11 16:12:52', '2021-12-11 16:12:52', 'member'),
(77, 'HGT077', 'Joshua Laar', '0242553668', 'Male', 'Select Marital Status', '', 'Physician Assistant', 'Afrikid Medical Centre', 'Yikene', 'Men Ministry', 0, '1969', 'Bunkpurugu', 'Upper East', 'Ghana', '', '2021-12-11 16:15:29', '2021-12-11 16:15:29', 'member'),
(78, 'HGT078', 'Lambon Obed', '0552321590', 'Male', 'Select Marital Status', '', 'Student', 'No', 'Yikene', 'Youth Ministry', 0, '2013', 'Bunkpurugu', 'Upper East', 'Ghana', '', '2021-12-11 16:16:27', '2021-12-11 16:16:27', 'member'),
(79, 'HGT079', 'Nyaaba Grace', '000', 'Female', 'Select Marital Status', '', 'Business', 'Market', 'Tanzua', 'Women Ministry', 0, '1991', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 16:19:06', '2021-12-11 16:19:06', 'member'),
(80, 'HGT080', 'Yinzee Nicholas', '0240413691', 'Male', 'Select Marital Status', '', 'Teacher', 'Bolga', 'Zorbisi', 'None', 0, 'No', 'Tongo', 'Upper East', 'Ghana', '', '2021-12-11 16:21:00', '2021-12-11 16:21:00', 'member'),
(81, 'HGT081', 'Nyaaba Philip', '0541624475', 'Male', 'Select Marital Status', '', 'Vulcanizing', 'Tanzu', 'Tanzua', 'None', 0, '2016', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 16:23:18', '2021-12-11 16:23:18', 'member'),
(82, 'HGT082', 'Abagndoo Doris', '0555684865', 'Female', 'Select Marital Status', '', 'Nurse', 'Bolga Tanzua', 'Tanzua', 'Women Ministry', 0, '2011', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 16:24:57', '2021-12-11 16:24:57', 'member'),
(83, 'HGT083', 'Adumbila Esther', '0248737091', 'Female', 'Select Marital Status', '', 'Trader', 'Site', 'Tindonmolgo', 'Women Ministry', 0, 'No', 'Cambibgo', 'Upper East', 'Ghana', '', '2021-12-11 16:27:17', '2021-12-11 16:27:17', 'member'),
(84, 'HGT084', 'Adumbila Yinbe Rufina', '0545256079', 'Female', 'Select Marital Status', '', 'Midwifery', 'No', 'Tindonmolgo', 'Youth Ministry', 0, 'No', 'Cambibgo', 'Upper East', 'Ghana', '', '2021-12-11 16:29:55', '2021-12-11 16:29:55', 'member'),
(85, 'HGT085', 'Tia David Nbeninwen', '0544065853', 'Male', 'Select Marital Status', '', 'Nurse', 'Yendi', 'Estate', 'Youth Ministry', 0, 'No', 'Namang', 'Upper East', 'Ghana', '', '2021-12-11 16:31:47', '2021-12-11 16:31:47', 'member'),
(86, 'HGT086', 'Rita Poidim', '0247882319', 'Female', 'Select Marital Status', '', 'Seamstress', 'Estate', 'Estate', 'None', 0, '2004', 'Bunkpurugu', 'Upper East', 'Ghana', '', '2021-12-11 16:33:39', '2021-12-11 16:33:39', 'member'),
(87, 'HGT087', 'Nma Juliana Abagra', '0248368897', 'Female', 'Select Marital Status', '', 'Trader', 'Zaare', 'Zaare', 'None', 0, '2016', 'Tanzua', 'Upper East', 'Ghana', '', '2021-12-11 16:35:03', '2021-12-11 16:35:03', 'member'),
(88, 'HGT088', 'Bless Poidim', '0248753165', 'Male', 'Select Marital Status', '', 'No', 'No', 'Estate', 'None', 0, '2019', 'Bunkpurugu', 'Upper East', 'Ghana', '', '2021-12-11 16:36:11', '2021-12-11 16:36:11', 'member'),
(89, 'HGT089', 'Ayelguya Amalboba', '0593374391', 'Female', 'Select Marital Status', '', 'Weaver', 'Zaare', 'Zaare', 'None', 0, 'No', 'Zaare', 'Upper East', 'Ghana', '', '2021-12-11 16:38:04', '2021-12-11 16:38:04', 'member'),
(90, 'HGT090', 'Ayambila Ernestina', '0557357765', 'Female', 'Select Marital Status', '', 'Student', 'MMX', 'Bukere', 'Women Ministry', 0, 'No', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 16:39:18', '2021-12-11 16:39:18', 'member'),
(91, 'HGT091', 'Ayelguya Thomas Ayine', '0559210423', 'Male', 'Select Marital Status', '', 'Welder', 'Zaare', 'Zaare', 'None', 0, '2012', 'Zaare', 'Upper East', 'Ghana', '', '2021-12-11 16:41:03', '2021-12-11 16:41:03', 'member'),
(92, 'HGT092', 'Jane Frances Adjei', '0551951232', 'Female', 'Select Marital Status', '', 'HR', 'Ghana Water Company', 'CIDA Bungalow', 'None', 0, '1994', 'Jirapa', 'Upper East', 'Ghana', '', '2021-12-11 16:43:20', '2021-12-11 16:43:20', 'member'),
(93, 'HGT093', 'Ayelguya Lamisi', '0544257430', 'Female', 'Select Marital Status', '', 'Teller', 'Zaare', 'Zaare', 'None', 0, '2013', 'Zaare', 'Upper East', 'Ghana', '', '2021-12-11 16:44:45', '2021-12-11 16:44:45', 'member'),
(94, 'HGT094', 'Juliana Anaba', '0541647591', 'Female', 'Select Marital Status', '', 'Trader', 'Soe Market', 'Soe', 'Women Ministry', 0, '1989', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 16:46:29', '2021-12-11 16:46:29', 'member'),
(95, 'HGT095', 'Azoluke Paulina', '0249897397', 'Female', 'Select Marital Status', '', 'Nurse', 'Namoo', 'Zorbisi', 'None', 0, '2017', 'Yua', 'Upper East', 'Ghana', '', '2021-12-11 16:47:55', '2021-12-11 16:47:55', 'member'),
(96, 'HGT096', 'Rose Teni Awuni', '0248273750', 'Female', 'Select Marital Status', '', 'Trader', 'Near Bolga Regional Hospital', 'Tindonmolgo', 'None', 0, '2016', 'Winkongo', 'Upper East', 'Ghana', '', '2021-12-11 16:49:12', '2021-12-11 16:49:12', 'member'),
(97, 'HGT097', 'Sarah Anaga Abane', '0206140707', 'Female', 'Select Marital Status', '', 'House Wife', 'No', 'Dolingo', 'Women Ministry', 0, '2021', 'Dolingo', 'Upper East', 'Ghana', '', '2021-12-11 16:50:59', '2021-12-11 16:50:59', 'member'),
(98, 'HGT098', 'Gbandan Richard Azumah', '0540296286', 'Male', 'Select Marital Status', '', 'Student', 'No', 'Tanzua', 'Youth Ministry', 0, '2005', 'Gorogo', 'Upper East', 'Ghana', '', '2021-12-11 16:52:35', '2021-12-11 16:52:35', 'member'),
(99, 'HGT099', 'Abisige Cecilia', '0547203959', 'Female', 'Select Marital Status', '', 'Hair Dresser', 'Tindingo', 'Bukere', 'None', 0, '2017', 'Zokor', 'Upper East', 'Ghana', '', '2021-12-11 17:02:53', '2021-12-11 17:02:53', 'member'),
(100, 'HGT100', 'Naabsigna Bagarimbang Helina', '0541995434', 'Female', 'Select Marital Status', '', 'Student', 'No', 'Tanzua', 'Youth Ministry', 0, '2014', 'Gorogo', 'Upper East', 'Ghana', '', '2021-12-11 17:04:48', '2021-12-11 17:04:48', 'member'),
(101, 'HGT101', 'Awuni Mary Ayine Nongma', '0559086191', 'Female', 'Select Marital Status', '', 'Student', 'Bolga', 'Pobaga', 'Youth Ministry', 0, '2014', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 17:07:40', '2021-12-11 17:07:40', 'member'),
(102, 'HGT102', 'Aiya Ike Leonard', '0555684059', 'Male', 'Select Marital Status', '', 'Business', 'Market', 'Soe', 'Men Ministry', 0, '2000', 'Edo State', 'Upper East', 'Nigeria', '', '2021-12-11 17:11:03', '2021-12-11 17:11:03', 'member'),
(103, 'HGT103', 'Nyaabire Ayinpogbila Jessica', '0543108444', 'Female', 'Select Marital Status', '', 'Student', 'School', 'Soe', 'Youth Ministry', 0, '2015', 'Soe', 'Upper East', 'Ghana', '', '2021-12-11 17:12:22', '2021-12-11 17:12:22', 'member'),
(104, 'HGT104', 'Dominica Charinga', '0244089783', 'Female', 'Select Marital Status', '', 'Trader', 'Bolga', 'Tindonmolgo', 'Women Ministry', 0, '1988', 'Sirigu', 'Upper East', 'Ghana', '', '2021-12-11 17:14:04', '2021-12-11 17:14:04', 'member'),
(105, 'HGT105', 'Aiya Nkiruka Lovelyn', '0243459093', 'Female', 'Select Marital Status', '', 'Seamstress', 'Home', 'Soe', 'Women Ministry', 0, '2015', 'Edo State', 'Upper East', 'Nigeria', '', '2021-12-11 17:15:53', '2021-12-11 17:15:53', 'member'),
(106, 'HGT106', 'Adongo Ruth', '0246923031', 'Female', 'Select Marital Status', '', 'Teacher', 'Zokor', 'Zaare', 'None', 0, 'No', 'Zovenrigu', 'Upper East', 'Ghana', '', '2021-12-11 17:18:25', '2021-12-11 17:18:25', 'member'),
(107, 'HGT107', 'Awedoba Alice', '0547198090', 'Female', 'Select Marital Status', '', 'Business', 'No', 'Zuarungu', 'Women Ministry', 0, '2013', 'Navrongo', 'Upper East', 'Ghana', '', '2021-12-11 17:20:56', '2021-12-11 17:20:56', 'member'),
(108, 'HGT108', 'Aiya Isoa Joseph', '0547417125', 'Male', 'Select Marital Status', '', 'Business', 'Market', 'Soe', 'Men Ministry', 0, '1993', 'Edo State', 'Upper East', 'Nigeria', '', '2021-12-11 17:22:29', '2021-12-11 17:22:29', 'member'),
(109, 'HGT109', 'Asogbire Veronica Ayinongma', '0555685073', 'Female', 'Select Marital Status', '', 'Student', 'No', 'Daporetindongo', 'None', 0, 'No', 'Bolgatanta', 'Upper East', 'Ghana', '', '2021-12-11 17:24:42', '2021-12-11 17:24:42', 'member'),
(110, 'HGT110', 'Aduburo Melody', '0248370108', 'Female', 'Select Marital Status', '', 'Cook', 'Tap Hotel', 'Soe', 'None', 0, '2006', 'Bongo', 'Upper East', 'Ghana', '', '2021-12-11 17:27:52', '2021-12-11 17:27:52', 'member'),
(111, 'HGT111', 'Yebiga Joana Yentet', '0246268535', 'Female', 'Select Marital Status', '', 'Student', 'Duusi', 'Tindonmolgo', 'Youth Ministry', 0, '2017', 'Duusi', 'Upper East', 'Ghana', '', '2021-12-11 17:29:20', '2021-12-11 17:29:20', 'member'),
(112, 'HGT112', 'Ayaam Claudia', '0248061567', 'Female', 'Select Marital Status', '', 'Midwifery', 'Garu District', 'Soe', 'Women Ministry', 0, '2017', 'Sandema', 'Upper East', 'Ghana', '', '2021-12-11 17:31:08', '2021-12-11 17:31:08', 'member'),
(113, 'HGT113', 'Dekia Natashia', '0541273211', 'Female', 'Select Marital Status', '', 'Trader', 'Bolga', 'Atulbabisa', 'None', 0, '2015', 'Tongo', 'Upper East', 'Ghana', '', '2021-12-11 17:33:39', '2021-12-11 17:33:39', 'member'),
(114, 'HGT114', 'Daniel Awuni Anyagri', '0553246776', 'Male', 'Select Marital Status', '', 'Store Keeper', 'Lesken Ent', 'Soe', 'Youth Ministry', 0, '2012', 'Bugri', 'Upper East', 'Ghana', '', '2021-12-11 17:35:23', '2021-12-11 17:35:23', 'member'),
(115, 'HGT115', 'Georgina Akugre', '0248622451', 'Female', 'Select Marital Status', '', 'Weaver', 'Bolga Market', 'Bukere', 'Young Singles', 0, '2017', 'Sirigu', 'Upper East', 'Ghana', '', '2021-12-11 17:37:33', '2021-12-11 17:37:33', 'member'),
(116, 'HGT116', 'Atia Victor Daniel', '0205593402', 'Male', 'Select Marital Status', '', 'Nurse', 'WAR Memorial Hospital', 'Kumbosko', 'Men Ministry', 0, '1996', 'Bawku', 'Upper East', 'Ghana', '', '2021-12-11 17:39:52', '2021-12-11 17:39:52', 'member'),
(117, 'HGT117', 'Priscilla Atuta', '0245379378', 'Female', 'Married', '1998-04-17', 'Trader', 'Self Employed', 'Soe Abooki No Lie', 'Healing Voices', 0, '2015', 'Kandiga', 'Upper East', 'Ghana', '', '2020-10-15 22:20:54', '2020-10-15 22:20:54', 'member'),
(118, 'HGT118', 'Anagdene Juliet Adugpoka', '0240040959', 'Female', 'Married', '', 'Nurse', 'Bolga Health Center', 'Yikene', 'Women Ministry', 0, '2017', 'Tongo Balungu', 'Upper East', 'Ghana', '', '2021-12-11 20:35:13', '2021-12-11 20:35:13', 'member'),
(119, 'HGT119', 'Yidana Emmanuel Yussif', '0243166664', 'Male', 'Married', '', 'Teacher', 'Gowre SHS', 'Yikene', 'Men Ministry', 0, '2017', 'Nalerigu', 'North East', 'Ghana', '', '2021-12-11 20:39:29', '2021-12-11 20:39:29', 'member'),
(120, 'HGT120', 'Asuah Lydia', '0247536516', 'Female', 'Married', '', 'Teacher', 'Yorogo JHS', 'Gowre SHS', 'Joy Fellowship', 0, '2016', 'Apuwongo', 'Upper East', 'Ghana', '', '2021-12-11 20:43:35', '2021-12-11 20:43:35', 'member'),
(121, 'HGT121', 'Bounaab Diana', '0549296974', 'Female', 'Single', '', 'Student', 'No', 'Tindonmoligo', 'Youth Ministry', 0, '2016', 'Baare', 'Upper East', 'Ghana', '', '2021-12-11 20:51:27', '2021-12-11 20:51:27', 'member'),
(122, 'HGT122', 'Ayeguya Timothy', '0551658715', 'Male', 'Select Marital Status', '', 'No', 'No', 'Zaare', 'None', 0, '2012', 'Zaare', 'Upper East', 'Ghana', '', '2021-12-12 19:19:14', '2021-12-12 19:19:14', 'member'),
(123, 'HGT123', 'Azure Agnes Ayinpoka', '0248311299', 'Female', 'Married', '', 'Trader', 'Self Employed', 'Tindonmoligo', 'Women Ministry', 0, '2018', 'Zuarugu', 'Upper East', 'Ghana', '', '2021-12-12 19:22:00', '2021-12-12 19:22:00', 'member'),
(124, 'HGT124', 'Azure Charles', 'No', 'Male', 'Single', '', 'Student', 'No', 'Tindonmoligo', 'Children', 0, '2018', 'Sokabiisi', 'Upper East', 'Ghana', '', '2021-12-12 19:25:01', '2021-12-12 19:25:01', 'member'),
(125, 'HGT125', 'Sarah Wuniah', '0247155632', 'Female', 'Single', '', 'No', 'GRA', 'Zaare', 'Youth Ministry', 0, 'No', 'Tongo ', 'Upper East', 'Ghana', '', '2021-12-12 19:26:59', '2021-12-12 19:26:59', 'member'),
(126, 'HGT126', 'Agomah Malsum Stephen', '0242260333', 'Male', 'Single', '', 'Student', 'No', 'Zaare', 'Youth Ministry', 0, '2014', 'Bawku', 'Upper East', 'Ghana', '', '2021-12-12 19:29:46', '2021-12-12 19:29:46', 'member'),
(127, 'HGT127', 'Azor Brown Akabila', '0244074638', 'Male', 'Single', '', 'Trader', 'Self Employed', 'Sawaba', 'Select Department', 0, '2015', 'Bolgatanga', 'Upper East', 'Ghana', '', '2021-12-12 19:32:51', '2021-12-12 19:32:51', 'member'),
(128, 'HGT128', 'Ajonbila Patience Aduko', '0549628864', 'Female', 'Married', '', 'Life Planner', 'Enterprise Life', 'Daportindongo', 'Joy Fellowship', 0, '2017', 'Balungu', 'Upper East', 'Ghana', '', '2021-12-12 19:38:58', '2021-12-12 19:38:58', 'member'),
(129, 'HGT129', 'Paulina Zobil', '0242348566', 'Female', 'Married', '', 'Seamstress', 'Bolga Old Market ', 'SOE ', 'Women Ministry', 0, '2010', 'Daliga', 'Upper East', 'Ghana', '', '2021-12-12 19:46:03', '2021-12-12 19:46:03', 'member'),
(130, 'HGT130', 'Atiibo Moses', '0242071945', 'Male', 'Married', '', 'Civil Servant', 'Kassena Nankana West District', 'SSNIT Quarters', 'Men Ministry', 0, '1992', 'Zebilla', 'Upper East', 'Ghana', '', '2021-12-13 09:25:54', '2021-12-13 09:25:54', 'member'),
(131, 'HGT131', 'Bijakin Irene', '0546745264', 'Female', 'Select Marital Status', '', 'Teacher', 'Bolga', 'Bukere', 'None', 0, '2005', 'Nakpanduri', 'North East', 'Ghana', '', '2021-12-12 19:53:22', '2021-12-12 19:53:22', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `membershipNo` (`membershipNo`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

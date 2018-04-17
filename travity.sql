-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2016 at 01:30 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travity`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_request`
--

CREATE TABLE IF NOT EXISTS `bus_request` (
  `bus_rqst_id` int(255) NOT NULL AUTO_INCREMENT,
  `generated_by` varchar(10) NOT NULL,
  `requestee_id` varchar(10) NOT NULL,
  `functional_aprvr_id` varchar(10) NOT NULL,
  `b_request_id` varchar(12) NOT NULL,
  `b_status_id` tinyint(2) NOT NULL DEFAULT '1',
  `traveler_name` varchar(15) NOT NULL,
  `traveler_email` varchar(25) NOT NULL,
  `person_mob_no` int(12) NOT NULL,
  `journey_date` date NOT NULL,
  `from_time` time NOT NULL,
  `from_state_id` int(2) NOT NULL,
  `from_city_id` varchar(20) NOT NULL,
  `to_state_id` int(2) NOT NULL,
  `to_city_id` varchar(20) NOT NULL,
  `bus_type` tinyint(2) NOT NULL,
  `person_age` tinyint(2) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `so_no` varchar(15) NOT NULL,
  `spl_app` tinyint(1) NOT NULL,
  `spl_app_dtls` text NOT NULL,
  `date_time_request` datetime NOT NULL,
  `verify_date_time` datetime NOT NULL,
  `reject_date_time` datetime NOT NULL,
  `reject_by` varchar(10) NOT NULL,
  `reject_reason` tinytext NOT NULL,
  `assign_date_time` datetime NOT NULL,
  `cancel_date_time` datetime NOT NULL,
  `remarks` tinyint(4) NOT NULL,
  `booking_guest` int(11) NOT NULL,
  PRIMARY KEY (`bus_rqst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `bus_request`
--

INSERT INTO `bus_request` (`bus_rqst_id`, `generated_by`, `requestee_id`, `functional_aprvr_id`, `b_request_id`, `b_status_id`, `traveler_name`, `traveler_email`, `person_mob_no`, `journey_date`, `from_time`, `from_state_id`, `from_city_id`, `to_state_id`, `to_city_id`, `bus_type`, `person_age`, `purpose`, `so_no`, `spl_app`, `spl_app_dtls`, `date_time_request`, `verify_date_time`, `reject_date_time`, `reject_by`, `reject_reason`, `assign_date_time`, `cancel_date_time`, `remarks`, `booking_guest`) VALUES
(22, 'aa', '', 'bcd', 'SKAE123349', 1, 'vijay', 'vijayq9@gmail.com', 123456789, '2016-11-23', '03:45:00', 15, 'Indore, Maharashtra', 15, 'Indore, Maharashtra', 4, 19, 'purpose', 'sdfasf', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(28, 'aa', '', 'bcd', 'ZWYX423193', 1, 'Guest', 'Guest@gmail.com', 123456789, '2016-11-23', '06:30:00', 15, 'Indapur, Maharashtra', 15, 'Indapur, Maharashtra', 2, 18, 'dfaf', 'dsfsdf', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bus_type`
--

CREATE TABLE IF NOT EXISTS `bus_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_title` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bus_type`
--

INSERT INTO `bus_type` (`id`, `type_title`) VALUES
(1, 'VOLVO NON AC SEATER'),
(2, 'VOLVO AC SEATER'),
(3, 'VOLVO NON AC SLEEPER'),
(4, 'VOLVO AC SLEEPER'),
(5, 'Other Bus');

-- --------------------------------------------------------

--
-- Table structure for table `cab_category`
--

CREATE TABLE IF NOT EXISTS `cab_category` (
  `cab_cat_id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `cab_category_name` varchar(15) NOT NULL,
  PRIMARY KEY (`cab_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cab_category`
--

INSERT INTO `cab_category` (`cab_cat_id`, `cab_category_name`) VALUES
(1, 'CAR'),
(2, 'SUV'),
(3, 'LUXURY');

-- --------------------------------------------------------

--
-- Table structure for table `cab_details`
--

CREATE TABLE IF NOT EXISTS `cab_details` (
  `cab_det_id` int(255) NOT NULL AUTO_INCREMENT,
  `c_request_id` varchar(12) NOT NULL,
  `vehicle_number` varchar(20) NOT NULL,
  `driver_name` varchar(15) NOT NULL,
  `contact_number` varchar(12) NOT NULL,
  PRIMARY KEY (`cab_det_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `cab_details`
--

INSERT INTO `cab_details` (`cab_det_id`, `c_request_id`, `vehicle_number`, `driver_name`, `contact_number`) VALUES
(1, 'VBTW293143', 'mp091111', 'ravi', '9876543211'),
(2, 'XWQZ329314', 'MH01CD1001', 'Anil', '9988776655'),
(3, 'XWQZ329314', 'MH01CD1001', 'Anil', '9988776655'),
(4, 'XWQZ329314', 'MH01CD1001', 'Anil', '9988776655'),
(5, 'XWQZ329314', 'MH01CD1001', 'Anil', '9988776655'),
(6, 'XWQZ329314', 'MH01CD1001', 'Anil', '9988776655'),
(7, 'WUAM942313', 'MH01CD1001', 'Anil', '9988776655'),
(8, 'RHMV194323', 'mp091111', 'ravi', '9876543211'),
(9, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(10, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(11, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(12, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(13, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(14, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(15, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(16, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(17, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(18, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(19, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(20, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(21, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(22, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(23, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(24, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(25, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(26, 'UYAH393214', 'mp091111', 'ravi', '9876543211'),
(27, 'TMAB319234', '1234568', 'rahule', '1234567890'),
(28, 'JREC934231', '123456748', 'vijay', '9098562373');

-- --------------------------------------------------------

--
-- Table structure for table `cab_package`
--

CREATE TABLE IF NOT EXISTS `cab_package` (
  `package_id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(25) NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cab_package`
--

INSERT INTO `cab_package` (`package_id`, `package_name`) VALUES
(1, 'Local(4 Hr-40Km)'),
(2, 'Local(8Hr-80kms)'),
(3, 'Pickup Drop'),
(4, 'Outstation');

-- --------------------------------------------------------

--
-- Table structure for table `cab_request`
--

CREATE TABLE IF NOT EXISTS `cab_request` (
  `cab_rqst_id` int(255) NOT NULL AUTO_INCREMENT,
  `generated_by` varchar(10) NOT NULL,
  `requestee_id` varchar(10) NOT NULL,
  `functional_aprvr_id` varchar(10) NOT NULL,
  `c_request_id` varchar(12) NOT NULL,
  `c_status_id` tinyint(2) NOT NULL DEFAULT '1',
  `traveler_name` varchar(15) NOT NULL,
  `traveler_email` varchar(25) NOT NULL,
  `traveler_mob` varchar(12) NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_time` time NOT NULL,
  `pickup_point` varchar(255) NOT NULL,
  `drop_point` varchar(255) NOT NULL,
  `cab_type` tinyint(2) NOT NULL,
  `cab_category` tinyint(2) NOT NULL,
  `cab_package` tinyint(2) NOT NULL,
  `cab_service` tinyint(2) NOT NULL,
  `state_id` int(2) NOT NULL,
  `city_id` varchar(255) NOT NULL,
  `outstation_city` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `flight_details` varchar(50) NOT NULL,
  `playcard_name` varchar(50) NOT NULL,
  `so_no` varchar(15) NOT NULL,
  `spl_app` tinyint(1) NOT NULL,
  `spl_app_dtls` varchar(255) NOT NULL,
  `date_time_request` datetime NOT NULL,
  `verify_date_time` datetime NOT NULL,
  `reject_date_time` datetime NOT NULL,
  `reject_by` varchar(10) NOT NULL,
  `reject_reason` varchar(50) NOT NULL,
  `assign_date` datetime NOT NULL,
  `cancel_date` datetime NOT NULL,
  `remark` varchar(50) NOT NULL,
  `booking_guest` int(2) NOT NULL,
  PRIMARY KEY (`cab_rqst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `cab_request`
--

INSERT INTO `cab_request` (`cab_rqst_id`, `generated_by`, `requestee_id`, `functional_aprvr_id`, `c_request_id`, `c_status_id`, `traveler_name`, `traveler_email`, `traveler_mob`, `pickup_date`, `pickup_time`, `pickup_point`, `drop_point`, `cab_type`, `cab_category`, `cab_package`, `cab_service`, `state_id`, `city_id`, `outstation_city`, `purpose`, `flight_details`, `playcard_name`, `so_no`, `spl_app`, `spl_app_dtls`, `date_time_request`, `verify_date_time`, `reject_date_time`, `reject_by`, `reject_reason`, `assign_date`, `cancel_date`, `remark`, `booking_guest`) VALUES
(101, 'aa', '', 'bcd', 'CQEN413392', 1, '', '', '', '2016-11-23', '03:45:00', 'Indore Junction, Chhoti Gwaltoli, Indore, Madhya Pradesh', 'Indore Junction, Chhoti Gwaltoli, Indore, Madhya Pradesh', 3, 2, 2, 1, 29, 'Indore, Maharashtra', 'sdfasf', '', '', '', '', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(102, 'aa', '', 'bcd', 'HBDC332419', 1, '', '', '', '2016-11-23', '03:45:00', 'Indore Junction, Chhoti Gwaltoli, Indore, Madhya Pradesh', 'Indore Junction, Chhoti Gwaltoli, Indore, Madhya Pradesh', 1, 1, 1, 1, 15, 'Indore, Maharashtra', 'sdfadf', '', '', '', '', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cab_service_type`
--

CREATE TABLE IF NOT EXISTS `cab_service_type` (
  `cab_service_id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `cab_service_name` varchar(13) NOT NULL,
  PRIMARY KEY (`cab_service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cab_service_type`
--

INSERT INTO `cab_service_type` (`cab_service_id`, `cab_service_name`) VALUES
(1, 'Pooling'),
(2, 'Private');

-- --------------------------------------------------------

--
-- Table structure for table `cab_type`
--

CREATE TABLE IF NOT EXISTS `cab_type` (
  `cab_type_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `cab_name` varchar(13) NOT NULL,
  PRIMARY KEY (`cab_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cab_type`
--

INSERT INTO `cab_type` (`cab_type_id`, `cab_name`) VALUES
(1, 'Indogo'),
(2, 'Swift Dzire'),
(3, 'Xylo'),
(4, 'Innova'),
(5, 'Honda City'),
(6, 'Corolla Altis');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(4) NOT NULL AUTO_INCREMENT,
  `state_id` int(2) NOT NULL,
  `city_name` varchar(15) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=288 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 1, 'Bhopal'),
(2, 1, 'Gwalior'),
(3, 1, 'Indore'),
(4, 1, 'Jabalpur'),
(5, 1, 'Sagar'),
(6, 1, 'Satna'),
(7, 1, 'Ujjain'),
(8, 1, 'Bhilai'),
(9, 1, 'Bilaspur'),
(10, 1, 'Raipur'),
(11, 10, 'Bengalaru'),
(12, 15, 'Hyderabad'),
(13, 15, 'Anantapur'),
(14, 15, 'Bhimavaram'),
(15, 15, 'Chirala'),
(16, 15, 'Chittoor'),
(17, 15, 'Guntur'),
(18, 15, 'Kadapa'),
(19, 15, 'Kakinada'),
(20, 15, 'Karimnagar'),
(21, 15, 'Khammam'),
(22, 15, 'Kurnool'),
(23, 15, 'Nellore'),
(24, 15, 'Ongole'),
(25, 15, 'Peddapuram'),
(26, 15, 'Rajahmundry'),
(27, 15, 'Srikakulam'),
(28, 15, 'Tirupathi'),
(29, 15, 'Vijayawada'),
(30, 15, 'Visakhapatnam'),
(31, 15, 'Vizianagaram'),
(32, 15, 'Warangal'),
(33, 1, 'Rewa'),
(34, 10, 'Belgaum'),
(35, 10, 'Davangere'),
(36, 10, 'Gulbarga'),
(37, 10, 'Mangalore'),
(38, 10, 'Mysore'),
(39, 10, 'Shimoga'),
(40, 10, 'Mandya'),
(41, 10, 'Hubli'),
(42, 10, 'Tumkur'),
(43, 10, 'Kolar'),
(44, 10, 'Dharwad'),
(45, 10, 'Bellary'),
(46, 10, 'Bidar'),
(47, 10, 'Bhalki'),
(48, 10, 'Hassan'),
(49, 12, 'Chennai'),
(50, 11, 'Thiruvananthapu'),
(52, 3, 'Allahabad'),
(53, 3, 'Bareilly'),
(54, 3, 'Dehradun'),
(55, 3, 'Lucknow'),
(56, 3, 'Sultanpur'),
(57, 3, 'Varanasi'),
(58, 3, 'Kanpur'),
(59, 16, 'Mumbai'),
(60, 4, 'Jaipur'),
(61, 1, 'Jagdalpur'),
(62, 1, 'Ambikapur'),
(63, 12, 'Tirunelveli'),
(64, 12, 'Pondidherry'),
(65, 12, 'Coimbatore'),
(66, 12, 'Cuddalore'),
(67, 12, 'Dindigul'),
(68, 12, 'Ariyalur'),
(69, 12, 'Dharmapuri'),
(70, 12, 'Erode'),
(71, 12, 'Kancheepuram'),
(72, 12, 'Kanyakumari'),
(73, 12, 'Karur'),
(74, 12, 'Krishnagiri'),
(75, 12, 'Madurai'),
(76, 12, 'Nagapattinam'),
(77, 12, 'Nagercoil'),
(78, 12, 'Namakkal'),
(79, 12, 'Nilgiris'),
(80, 12, 'Perambalur'),
(81, 12, 'Pudukottai'),
(82, 12, 'Ramanathapuram'),
(83, 12, 'Salem'),
(84, 12, 'Sivagangai'),
(85, 12, 'Thanjavur'),
(86, 12, 'Theni'),
(87, 12, 'Thiruvannamalai'),
(88, 12, 'Thiruvarur'),
(89, 12, 'Thoothukudi'),
(90, 12, 'Tiruchirappalli'),
(91, 12, 'Tiruppur'),
(92, 12, 'Tiruvallur'),
(93, 12, 'Tuticorin'),
(94, 12, 'Vellore'),
(95, 12, 'Villupuram'),
(96, 12, 'Virudhunagar'),
(97, 3, 'Agra'),
(98, 3, 'Aligarh'),
(99, 3, 'Amroha'),
(100, 3, 'Banda'),
(101, 3, 'Barabanki'),
(102, 3, 'Bijnor'),
(103, 3, 'Bulandshahr'),
(104, 3, 'Chitrakoot Dham'),
(105, 3, 'Faizabad'),
(106, 3, 'Gonda'),
(107, 3, 'Gorakhpur'),
(108, 3, 'Raebareli'),
(109, 3, 'Mathura'),
(110, 3, 'Jhansi'),
(111, 3, 'Roorkee'),
(112, 3, 'Haridwar'),
(113, 3, 'Najibabad'),
(114, 3, 'Moradabad'),
(115, 3, 'Kaushambi'),
(116, 3, 'Muzaffarnagar'),
(117, 3, 'Varanasi'),
(118, 3, 'Rudrapur'),
(119, 3, 'Nainital'),
(120, 3, 'Sitapur'),
(121, 3, 'Udham Singh Nag'),
(122, 3, 'Haldwani'),
(123, 25, 'Bhubaneshwar'),
(124, 19, 'Muzaffarpur'),
(125, 10, 'Haliyal'),
(126, 11, 'Payannur'),
(127, 16, 'Nagpur'),
(128, 6, 'Ahmedhabad'),
(129, 32, 'Jhamsedhpur'),
(131, 11, 'KOCHI'),
(132, 12, 'TRICHY'),
(133, 11, 'THRISSUR'),
(134, 11, 'KOZHIKODE'),
(135, 11, 'ATTINGAL'),
(136, 11, 'NEDUMANGAD'),
(137, 11, 'NEYYATTINKARA'),
(138, 11, 'KOVALAM'),
(139, 11, 'THIRUVANANTHAPU'),
(140, 11, 'KARUNAGAPALLI'),
(141, 11, 'SASTHANKOTTA'),
(142, 11, 'KOTTARAKARA'),
(143, 11, 'PUNALUR'),
(144, 11, 'KOLLAM'),
(145, 11, 'MAVELIKARA'),
(146, 11, 'HARIPAD'),
(147, 11, 'AMBALAPULAI'),
(148, 11, 'MANCOMBU'),
(149, 11, 'CHERTALAI'),
(150, 11, 'ALAPPUZHA'),
(151, 11, 'ADUR '),
(152, 11, 'KOZHENCHERI'),
(153, 11, 'CHANGANASSERY'),
(154, 11, 'TIRUVALLA'),
(155, 11, 'PATHANAMTHITTA'),
(156, 11, 'VAIKAM'),
(157, 11, 'PALAI'),
(158, 11, 'KOTTAYAM'),
(159, 11, 'KANJIRAPPALI'),
(160, 11, 'THIRUVANCHOOR'),
(161, 11, 'THIRUVANCHOOR'),
(162, 11, 'KUMARAKAM'),
(163, 11, 'CHEMPILAVU'),
(164, 11, 'KUTTIKANAM'),
(165, 11, 'MUNNAR'),
(166, 11, 'DEVIKULAM'),
(167, 11, 'NEDUMKANDAM'),
(168, 11, 'TODUPULAI'),
(169, 11, 'PIRMED'),
(170, 11, 'IDUKKI'),
(171, 11, 'PARAVOOR'),
(172, 11, 'KOCHI'),
(173, 11, 'ERNAKULAM'),
(174, 11, 'ALUVA'),
(175, 11, 'ANGAMALI'),
(176, 11, 'PERUMBAVUR'),
(177, 11, 'MUVATTUPUZHA'),
(178, 11, 'PALARIVATTOM'),
(179, 11, 'PALARIVATTOM'),
(180, 11, 'ATHANI'),
(181, 11, 'KODAKARA'),
(182, 11, 'IRINJALAKUDA'),
(183, 11, 'AMBALLUR'),
(184, 11, 'VADAKKANCHERI'),
(185, 11, 'KODUNGALLOR'),
(186, 11, 'CHAAVAKKAAD'),
(187, 11, 'PUDUKKAD'),
(188, 11, 'OTTAPPALAM'),
(189, 11, 'MANNAARKKAD'),
(190, 11, 'ALATTHUR'),
(191, 11, 'NEMMARA'),
(192, 11, 'THIRUR'),
(193, 11, 'PERINTHALMANNA'),
(194, 11, 'MALAPPURAM'),
(195, 11, 'ANGADIPPURAM'),
(196, 11, 'MANJERI'),
(197, 11, 'KUTTIPPURAM'),
(198, 11, 'MELATTUR'),
(199, 11, 'PARAPPANANGADI'),
(200, 11, 'PONNANI'),
(201, 11, 'KOZHIKODE'),
(202, 11, 'VADAKARA'),
(203, 11, 'ARIKKULAM'),
(204, 11, 'BEYPORE'),
(205, 11, 'CHAKKALAKKAL'),
(206, 11, 'KINASSERY '),
(207, 11, 'MUKKAM'),
(208, 11, 'THAMARASSERY'),
(209, 11, 'KALPETTA'),
(210, 11, 'MANANTHAVADY'),
(211, 11, 'PADINHARETHARA'),
(212, 11, 'PANAMARAM'),
(213, 11, 'PULPALLY'),
(214, 11, 'SULTAN BATHERY'),
(215, 11, 'WAYANAD'),
(216, 11, 'AMBAYATHODE'),
(217, 11, 'ANGADIKADAVU'),
(218, 11, 'CHELORA'),
(219, 11, 'CHERUKUNNU'),
(220, 11, 'CHERUTHAZHAM'),
(221, 11, 'CHIRAKKAL'),
(222, 11, 'CHIRAKKALKULAM'),
(223, 11, 'DHARMADOM'),
(224, 11, 'DHARMASHALA'),
(225, 11, 'EDOOR'),
(226, 11, 'PAYYANUR'),
(227, 11, 'PERINGALAM'),
(228, 11, 'THALASSERY'),
(229, 11, 'VENGARA '),
(230, 11, 'THALIPARAMBU'),
(231, 11, 'THALIPARAMBU'),
(232, 11, 'KANHANGAD'),
(233, 11, 'KASARAGOD'),
(234, 11, 'NILESHWAR'),
(235, 11, 'UPPALA'),
(236, 11, 'TRIKARIPUR'),
(237, 11, 'MANJESHWAR'),
(238, 11, 'KUMBLA'),
(239, 11, 'AJANUR'),
(240, 11, 'CHERUVATHUR'),
(241, 11, 'PERLA'),
(242, 11, 'KUDLU'),
(243, 11, 'BEKAL'),
(244, 11, 'PADNE'),
(245, 11, 'CHENGALA'),
(246, 11, 'CHEMNAD'),
(247, 11, 'PUTHUR'),
(248, 11, 'BARE'),
(249, 11, 'MADHUR'),
(250, 11, 'KEEKAN'),
(251, 11, 'PILICODE'),
(252, 11, 'SRIBAGILU'),
(253, 11, 'BANDIYOD'),
(254, 11, 'kerala'),
(255, 11, 'KANNUR'),
(256, 11, 'PALAKKAD'),
(257, 3, 'Amethi'),
(258, 3, 'Bhimtal'),
(259, 10, 'Bagalkot'),
(264, 10, 'Bijapur'),
(265, 10, 'Chikballapur'),
(266, 10, 'Chikkamagaluru'),
(267, 10, 'Dakshina Kannad'),
(270, 10, 'Gadag'),
(273, 10, 'Haveri'),
(275, 10, 'Kodagu'),
(280, 10, 'Puttur'),
(281, 10, 'Raichur'),
(284, 10, 'Udupi'),
(285, 10, 'Uttara Kannada'),
(286, 1, 'CHHINDWARA'),
(287, 1, 'BALAGHAT');

-- --------------------------------------------------------

--
-- Table structure for table `flight_request`
--

CREATE TABLE IF NOT EXISTS `flight_request` (
  `flight_rqst_id` int(255) NOT NULL AUTO_INCREMENT,
  `generated_by` varchar(10) NOT NULL,
  `requestee_id` varchar(10) NOT NULL,
  `functional_aprvr_id` varchar(10) NOT NULL,
  `f_request_id` varchar(12) NOT NULL,
  `f_status_id` tinyint(2) NOT NULL DEFAULT '1',
  `traveler_name` varchar(15) NOT NULL,
  `traveler_email` varchar(25) NOT NULL,
  `person_age` tinyint(2) NOT NULL,
  `person_mob_no` varchar(12) NOT NULL,
  `from_loc` varchar(50) NOT NULL,
  `to_loc` varchar(50) NOT NULL,
  `journey_date` date NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `f_b_state` int(2) NOT NULL,
  `f_d_state` int(2) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `frequent_flier_no` varchar(15) NOT NULL,
  `funct_dept` varchar(15) NOT NULL,
  `so_no` varchar(15) NOT NULL,
  `spl_app` tinyint(1) NOT NULL,
  `spl_app_dtls` varchar(255) NOT NULL,
  `date_time_request` datetime NOT NULL,
  `verify_date_time` datetime NOT NULL,
  `reject_date_time` datetime NOT NULL,
  `reject_by` varchar(10) NOT NULL,
  `reject_reason` varchar(50) NOT NULL,
  `cancel_date` datetime NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`flight_rqst_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_details`
--

CREATE TABLE IF NOT EXISTS `hotel_details` (
  `htl_det_id` int(255) NOT NULL AUTO_INCREMENT,
  `h_request_id` varchar(12) NOT NULL,
  `h_booking_id1` varchar(20) NOT NULL,
  `h_name1` varchar(30) NOT NULL,
  `h_address1` varchar(50) NOT NULL,
  `h_checkin_date1` date NOT NULL,
  `h_checkout_date1` date NOT NULL,
  `h_checkin_time1` time NOT NULL,
  `h_checkout_time1` time NOT NULL,
  `h_booking_id2` varchar(20) NOT NULL,
  `h_name2` varchar(30) NOT NULL,
  `h_address2` varchar(50) NOT NULL,
  `h_checkin_date2` date NOT NULL,
  `h_checkout_date2` date NOT NULL,
  `h_checkin_time2` time NOT NULL,
  `h_checkout_time2` time NOT NULL,
  `h_booking_id3` varchar(20) NOT NULL,
  `h_name3` varchar(30) NOT NULL,
  `h_address3` varchar(50) NOT NULL,
  `h_checkin_date3` date NOT NULL,
  `h_checkout_date3` date NOT NULL,
  `h_checkin_time3` time NOT NULL,
  `h_checkout_time3` time NOT NULL,
  PRIMARY KEY (`htl_det_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_request`
--

CREATE TABLE IF NOT EXISTS `hotel_request` (
  `hotel_rqst_id` int(255) NOT NULL AUTO_INCREMENT,
  `generated_by` varchar(10) NOT NULL,
  `requestee_id` varchar(10) NOT NULL,
  `functional_aprvr_id` varchar(10) NOT NULL,
  `h_request_id` varchar(12) NOT NULL,
  `h_status_id` tinyint(2) NOT NULL DEFAULT '1',
  `guest_name` varchar(15) NOT NULL,
  `guest_email` varchar(25) NOT NULL,
  `guest_mob` varchar(12) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout_time` time NOT NULL,
  `no_of_rooms` int(2) NOT NULL,
  `no_of_persons` int(3) NOT NULL,
  `state_id` int(2) NOT NULL,
  `city_id` varchar(25) NOT NULL,
  `fst_preference` varchar(50) NOT NULL,
  `scnd_preference` varchar(50) NOT NULL,
  `thrd_preference` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `so_no` varchar(15) NOT NULL,
  `spl_app` tinyint(1) NOT NULL,
  `spl_app_dtls` varchar(255) NOT NULL,
  `date_time_request` datetime NOT NULL,
  `verify_date_time` datetime NOT NULL,
  `reject_date_time` datetime NOT NULL,
  `reject_by` varchar(10) NOT NULL,
  `reject_reason` varchar(50) NOT NULL,
  `assign_date` datetime NOT NULL,
  `cancel_date` datetime NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `booking_guest` int(11) NOT NULL,
  PRIMARY KEY (`hotel_rqst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `hotel_request`
--

INSERT INTO `hotel_request` (`hotel_rqst_id`, `generated_by`, `requestee_id`, `functional_aprvr_id`, `h_request_id`, `h_status_id`, `guest_name`, `guest_email`, `guest_mob`, `checkin_date`, `checkout_date`, `checkin_time`, `checkout_time`, `no_of_rooms`, `no_of_persons`, `state_id`, `city_id`, `fst_preference`, `scnd_preference`, `thrd_preference`, `purpose`, `so_no`, `spl_app`, `spl_app_dtls`, `date_time_request`, `verify_date_time`, `reject_date_time`, `reject_by`, `reject_reason`, `assign_date`, `cancel_date`, `remarks`, `booking_guest`) VALUES
(32, 'aa', '', 'bcd', 'GWKU423931', 1, '', '', '', '2016-11-23', '2016-11-24', '03:45:00', '03:45:00', 2, 2, 15, 'Indore, Maharashtra', 'daDS', '', '', '', 'sdfasf', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `module_type`
--

CREATE TABLE IF NOT EXISTS `module_type` (
  `module_type` tinyint(2) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(10) NOT NULL,
  PRIMARY KEY (`module_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE IF NOT EXISTS `priority` (
  `priority_id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `priority_name` varchar(10) NOT NULL,
  PRIMARY KEY (`priority_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`priority_id`, `priority_name`) VALUES
(1, 'Normal'),
(2, 'Urgent');

-- --------------------------------------------------------

--
-- Table structure for table `request_status`
--

CREATE TABLE IF NOT EXISTS `request_status` (
  `status_id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `status_data` varchar(30) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `request_status`
--

INSERT INTO `request_status` (`status_id`, `status_data`) VALUES
(1, 'Booking Saved'),
(2, 'Approver Desk'),
(3, 'Rejected by Approver'),
(4, 'Functional Head Desk'),
(5, 'Travel Desk S'),
(6, 'Travel Desk'),
(7, 'Vendor Desk'),
(8, 'Booked'),
(9, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(2) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(20) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Madhya Pradesh & Cha'),
(3, 'Uttar Pradesh & Uttr'),
(4, 'Rajasthan'),
(6, 'Gujrat'),
(7, 'Punjab'),
(8, 'Delhi'),
(9, 'Haryana'),
(10, 'Karnataka'),
(11, 'Kerala'),
(12, 'Tamil Nadu'),
(13, 'West Bengal'),
(14, 'Assam'),
(15, 'Andhra Pradesh & Tel'),
(16, 'Maharashtra'),
(17, 'Jammu & Kashmir'),
(18, 'Goa'),
(19, 'Bihar'),
(20, 'Arunachal Pradesh'),
(21, 'Manipur'),
(22, 'Meghalaya'),
(23, 'Mizoram'),
(24, 'Nagaland'),
(25, 'Orissa'),
(26, 'Sikkim'),
(27, 'Tripura'),
(29, 'Andaman & Nicobar'),
(30, 'Chandigarh'),
(31, 'QCA'),
(32, 'Jharkhand');

-- --------------------------------------------------------

--
-- Table structure for table `train_class`
--

CREATE TABLE IF NOT EXISTS `train_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_title` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `train_class`
--

INSERT INTO `train_class` (`id`, `class_title`) VALUES
(1, 'Second Seating'),
(2, 'Sleeper Class'),
(3, 'AC Chair Car'),
(4, 'Third AC');

-- --------------------------------------------------------

--
-- Table structure for table `train_request`
--

CREATE TABLE IF NOT EXISTS `train_request` (
  `train_rqst_id` int(255) NOT NULL AUTO_INCREMENT,
  `generated_by` varchar(10) NOT NULL,
  `requestee_id` varchar(10) NOT NULL,
  `functional_aprvr_id` varchar(10) NOT NULL,
  `t_request_id` varchar(12) NOT NULL,
  `t_status_id` tinyint(2) NOT NULL DEFAULT '1',
  `traveler_name` varchar(15) NOT NULL,
  `traveler_email` varchar(25) NOT NULL,
  `person_mob_no` int(12) NOT NULL,
  `journey_date` date NOT NULL,
  `from_time` time NOT NULL,
  `from_state_id` int(2) NOT NULL,
  `from_city_id` varchar(20) NOT NULL,
  `to_state_id` int(2) NOT NULL,
  `to_city_id` varchar(20) NOT NULL,
  `train_class` tinyint(2) NOT NULL,
  `person_age` tinyint(2) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `so_no` varchar(15) NOT NULL,
  `spl_app` tinyint(1) NOT NULL,
  `spl_app_dtls` text NOT NULL,
  `date_time_request` datetime NOT NULL,
  `verify_date_time` datetime NOT NULL,
  `reject_date_time` datetime NOT NULL,
  `reject_by` varchar(10) NOT NULL,
  `reject_reason` tinytext NOT NULL,
  `assign_date_time` datetime NOT NULL,
  `cancel_date_time` datetime NOT NULL,
  `remarks` tinytext NOT NULL,
  PRIMARY KEY (`train_rqst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `train_request`
--

INSERT INTO `train_request` (`train_rqst_id`, `generated_by`, `requestee_id`, `functional_aprvr_id`, `t_request_id`, `t_status_id`, `traveler_name`, `traveler_email`, `person_mob_no`, `journey_date`, `from_time`, `from_state_id`, `from_city_id`, `to_state_id`, `to_city_id`, `train_class`, `person_age`, `purpose`, `so_no`, `spl_app`, `spl_app_dtls`, `date_time_request`, `verify_date_time`, `reject_date_time`, `reject_by`, `reject_reason`, `assign_date_time`, `cancel_date_time`, `remarks`) VALUES
(32, 'aa', '', 'bcd', 'USZI219343', 1, '', '', 0, '2016-11-23', '04:00:00', 15, 'Indore, Madhya Prade', 29, 'Indore, Madhya Prade', 3, 22, '', 'sadfasf', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `user_type` tinyint(2) NOT NULL,
  `user_sub_type` tinyint(2) NOT NULL,
  `module_type` tinyint(2) NOT NULL,
  `status_user` tinyint(1) NOT NULL,
  `psswd_code` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `employee_id`, `password`, `user_type`, `user_sub_type`, `module_type`, `status_user`, `psswd_code`) VALUES
(1, 'aa', 'aa', 1, 1, 1, 1, '4660cb7973e1f2f0fd8ffa714af0e812'),
(2, 'bcd', 'bcd', 2, 1, 1, 1, ''),
(3, 'vdo', '111', 9, 1, 1, 1, ''),
(5, 'td', 'td', 5, 1, 1, 1, ''),
(6, 'pqr', 'pqr', 3, 1, 1, 1, ''),
(7, 'bb', 'bb', 1, 1, 1, 1, ''),
(8, 'fh', 'fh', 4, 1, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `user_detail_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_id` int(3) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `state_id` int(2) NOT NULL,
  `city_id` int(4) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`user_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_detail_id`, `user_id`, `first_name`, `last_name`, `state_id`, `city_id`, `mobile_no`, `email_id`) VALUES
(1, 1, 'Shithila', 'A', 1, 1, '09977883021', 'salasartestmail@gmail.com'),
(2, 2, 'Melroy', 'H', 3, 4, '09977883021', 'vijayq9@gmail.com'),
(3, 3, 'Vendor', 'Opr', 1, 12, '09977883021', 'vijayq9@gmail.com'),
(5, 5, 'Avinash', 'singh', 1, 5, '09977883021', 'vijayq9@gmail.com'),
(6, 6, 'Shamkant ', 'B', 10, 12, '09977883021', 'vijayq9@gmail.com'),
(7, 7, 'Sana', 'S', 10, 20, '09977883021', 'vijayq9@gmail.com'),
(8, 8, 'Ravi ', 'Dighe', 12, 12, '09977883021', 'vijayq9@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `user_type` tinyint(2) NOT NULL AUTO_INCREMENT,
  `user_role` varchar(20) NOT NULL,
  PRIMARY KEY (`user_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type`, `user_role`) VALUES
(1, 'AOE'),
(2, 'AMM'),
(3, 'ASM'),
(4, 'Functional Head'),
(5, 'Travel Desk'),
(6, 'Travel Finance Dept.'),
(7, 'Vendor Executive 1'),
(8, 'Vendor Executive 2'),
(9, 'Vendor Lead'),
(10, 'Vendor Finance');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 11:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excelanto_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` int(11) DEFAULT NULL,
  `country_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 355, 'Albania(+355)', 'active', NULL, NULL),
(3, 213, 'Algeria (+213)', 'active', NULL, NULL),
(4, 684, 'American Samoa(+684)', 'active', NULL, NULL),
(5, 376, 'Andorra (+376)', 'active', NULL, NULL),
(6, 244, 'Angola (+244)', 'active', NULL, NULL),
(7, 1264, 'Anguilla (+1264)', 'active', NULL, NULL),
(8, 672, 'Antarctica(+672)', 'active', NULL, NULL),
(9, 1268, 'Antigua & Barbuda (+1268)', 'active', NULL, NULL),
(10, 54, 'Argentina (+54)', 'active', NULL, NULL),
(11, 374, 'Armenia (+374)', 'active', NULL, NULL),
(12, 297, 'Aruba (+297)', 'active', NULL, NULL),
(13, 61, 'Australia (+61)', 'active', NULL, NULL),
(14, 43, 'Austria (+43)', 'active', NULL, NULL),
(15, 994, 'Azerbaijan (+994)', 'active', NULL, NULL),
(16, 1242, 'Bahamas (+1242)', 'active', NULL, NULL),
(17, 973, 'Bahrain (+973)', 'active', NULL, NULL),
(18, 880, 'Bangladesh (+880)', 'active', NULL, NULL),
(19, 1246, 'Barbados (+1246)', 'active', NULL, NULL),
(20, 375, 'Belarus (+375)', 'active', NULL, NULL),
(21, 32, 'Belgium (+32)', 'active', NULL, NULL),
(22, 501, 'Belize (+501)', 'active', NULL, NULL),
(23, 229, 'Benin (+229)', 'active', NULL, NULL),
(24, 1441, 'Bermuda (+1441)', 'active', NULL, NULL),
(25, 975, 'Bhutan (+975)', 'active', NULL, NULL),
(26, 591, 'Bolivia (+591)', 'active', NULL, NULL),
(27, 387, 'Bosnia Herzegovina (+387)', 'active', NULL, NULL),
(28, 267, 'Botswana (+267)', 'active', NULL, NULL),
(29, 55, 'Bouvet Island(+55)', 'active', NULL, NULL),
(30, 55, 'Brazil (+55)', 'active', NULL, NULL),
(31, 246, 'British Indian Ocean Territory(+246)', 'active', NULL, NULL),
(32, 673, 'Brunei (+673)', 'active', NULL, NULL),
(33, 359, 'Bulgaria (+359)', 'active', NULL, NULL),
(34, 226, 'Burkina Faso (+226)', 'active', NULL, NULL),
(35, 257, 'Burundi (+257)', 'active', NULL, NULL),
(36, 855, 'Cambodia (+855)', 'active', NULL, NULL),
(37, 237, 'Cameroon (+237)', 'active', NULL, NULL),
(38, 1, 'Canada (+1)', 'active', NULL, NULL),
(39, 238, 'Cape Verde Islands (+238)', 'active', NULL, NULL),
(40, 1345, 'Cayman Islands (+1345)', 'active', NULL, NULL),
(41, 236, 'Central African Republic (+236)', 'active', NULL, NULL),
(42, 235, 'Chad(+235)', 'active', NULL, NULL),
(43, 56, 'Chile (+56)', 'active', NULL, NULL),
(44, 86, 'China (+86)', 'active', NULL, NULL),
(45, 61, 'Christmas Island(+61)', 'active', NULL, NULL),
(46, 61, 'Cocos (Keeling) Islands(+61)', 'active', NULL, NULL),
(47, 57, 'Colombia (+57)', 'active', NULL, NULL),
(48, 269, 'Comoros (+269)', 'active', NULL, NULL),
(49, 242, 'Congo (+242)', 'active', NULL, NULL),
(50, 243, 'Congo The Democratic Republic Of The(+243)', 'active', NULL, NULL),
(51, 682, 'Cook Islands (+682)', 'active', NULL, NULL),
(52, 506, 'Costa Rica (+506)', 'active', NULL, NULL),
(53, 225, 'Cote D\'Ivoire (Ivory Coast)(+225)', 'active', NULL, NULL),
(54, 385, 'Croatia (+385)', 'active', NULL, NULL),
(55, 53, 'Cuba (+53)', 'active', NULL, NULL),
(56, 90392, 'Cyprus North (+90392)', 'active', NULL, NULL),
(57, 42, 'Czech Republic (+42)', 'active', NULL, NULL),
(58, 45, 'Denmark (+45)', 'active', NULL, NULL),
(59, 253, 'Djibouti (+253)', 'active', NULL, NULL),
(60, 1809, 'Dominica (+1809)', 'active', NULL, NULL),
(61, 1809, 'Dominican Republic (+1809)', 'active', NULL, NULL),
(62, 670, 'East Timor(+670)', 'active', NULL, NULL),
(63, 593, 'Ecuador (+593)', 'active', NULL, NULL),
(64, 20, 'Egypt (+20)', 'active', NULL, NULL),
(65, 503, 'El Salvador (+503)', 'active', NULL, NULL),
(66, 240, 'Equatorial Guinea (+240)', 'active', NULL, NULL),
(67, 291, 'Eritrea (+291)', 'active', NULL, NULL),
(68, 372, 'Estonia (+372)', 'active', NULL, NULL),
(69, 251, 'Ethiopia (+251)', 'active', NULL, NULL),
(70, 672, 'External Territories of Australia(+672)', 'active', NULL, NULL),
(71, 500, 'Falkland Islands (+500)', 'active', NULL, NULL),
(72, 298, 'Faroe Islands (+298)', 'active', NULL, NULL),
(73, 679, 'Fiji (+679)', 'active', NULL, NULL),
(74, 358, 'Finland (+358)', 'active', NULL, NULL),
(75, 33, 'France (+33)', 'active', NULL, NULL),
(76, 594, 'French Guiana (+594)', 'active', NULL, NULL),
(77, 689, 'French Polynesia (+689)', 'active', NULL, NULL),
(78, 262, 'French Southern Territories(262)', 'active', NULL, NULL),
(79, 241, 'Gabon (+241)', 'active', NULL, NULL),
(80, 220, 'Gambia (+220)', 'active', NULL, NULL),
(81, 7880, 'Georgia (+7880)', 'active', NULL, NULL),
(82, 49, 'Germany (+49)', 'active', NULL, NULL),
(83, 233, 'Ghana (+233)', 'active', NULL, NULL),
(84, 350, 'Gibraltar (+350)', 'active', NULL, NULL),
(85, 30, 'Greece (+30)', 'active', NULL, NULL),
(86, 299, 'Greenland (+299)', 'active', NULL, NULL),
(87, 1473, 'Grenada (+1473)', 'active', NULL, NULL),
(88, 590, 'Guadeloupe (+590)', 'active', NULL, NULL),
(89, 671, 'Guam (+671)', 'active', NULL, NULL),
(90, 502, 'Guatemala (+502)', 'active', NULL, NULL),
(91, 44, 'Guernsey and Alderney(44 1481)', 'active', NULL, NULL),
(92, 224, 'Guinea (+224)', 'active', NULL, NULL),
(93, 245, 'Guinea - Bissau (+245)', 'active', NULL, NULL),
(94, 592, 'Guyana (+592)', 'active', NULL, NULL),
(95, 509, 'Haiti (+509)', 'active', NULL, NULL),
(96, 672, 'Heard and McDonald Islands', 'active', NULL, NULL),
(97, 504, 'Honduras (+504)', 'active', NULL, NULL),
(98, 852, 'Hong Kong (+852)', 'active', NULL, NULL),
(99, 36, 'Hungary (+36)', 'active', NULL, NULL),
(100, 354, 'Iceland (+354)', 'active', NULL, NULL),
(101, 91, 'India (+91)', 'active', NULL, NULL),
(102, 62, 'Indonesia (+62)', 'active', NULL, NULL),
(103, 98, 'Iran (+98)', 'active', NULL, NULL),
(104, 964, 'Iraq (+964)', 'active', NULL, NULL),
(105, 353, 'Ireland (+353)', 'active', NULL, NULL),
(106, 972, 'Israel (+972)', 'active', NULL, NULL),
(107, 39, 'Italy (+39)', 'active', NULL, NULL),
(108, 1876, 'Jamaica (+1876)', 'active', NULL, NULL),
(109, 81, 'Japan (+81)', 'active', NULL, NULL),
(110, 44, 'Jersey(+44)', 'active', NULL, NULL),
(111, 962, 'Jordan (+962)', 'active', NULL, NULL),
(112, 7, 'Kazakhstan (+7)', 'active', NULL, NULL),
(113, 254, 'Kenya (+254)', 'active', NULL, NULL),
(114, 686, 'Kiribati (+686)', 'active', NULL, NULL),
(115, 850, 'Korea North (+850)', 'active', NULL, NULL),
(116, 82, 'Korea South (+82)', 'active', NULL, NULL),
(117, 965, 'Kuwait (+965)', 'active', NULL, NULL),
(118, 996, 'Kyrgyzstan (+996)', 'active', NULL, NULL),
(119, 856, 'Laos (+856)', 'active', NULL, NULL),
(120, 371, 'Latvia (+371)', 'active', NULL, NULL),
(121, 961, 'Lebanon (+961)', 'active', NULL, NULL),
(122, 266, 'Lesotho (+266)', 'active', NULL, NULL),
(123, 231, 'Liberia (+231)', 'active', NULL, NULL),
(124, 218, 'Libya (+218)', 'active', NULL, NULL),
(125, 417, 'Liechtenstein (+417)', 'active', NULL, NULL),
(126, 370, 'Lithuania (+370)', 'active', NULL, NULL),
(127, 352, 'Luxembourg (+352)', 'active', NULL, NULL),
(128, 853, 'Macao (+853)', 'active', NULL, NULL),
(129, 389, 'Macedonia (+389)', 'active', NULL, NULL),
(130, 261, 'Madagascar (+261)', 'active', NULL, NULL),
(131, 265, 'Malawi (+265)', 'active', NULL, NULL),
(132, 60, 'Malaysia (+60)', 'active', NULL, NULL),
(133, 960, 'Maldives (+960)', 'active', NULL, NULL),
(134, 223, 'Mali (+223)', 'active', NULL, NULL),
(135, 356, 'Malta (+356)', 'active', NULL, NULL),
(136, 44, 'Man (Isle of)(+44)', 'active', NULL, NULL),
(137, 692, 'Marshall Islands (+692)', 'active', NULL, NULL),
(138, 596, 'Martinique (+596)', 'active', NULL, NULL),
(139, 222, 'Mauritania (+222)', 'active', NULL, NULL),
(140, 230, 'Mauritius(+230)', 'active', NULL, NULL),
(141, 269, 'Mayotte (+269)', 'active', NULL, NULL),
(142, 52, 'Mexico (+52)', 'active', NULL, NULL),
(143, 691, 'Micronesia (+691)', 'active', NULL, NULL),
(144, 373, 'Moldova (+373)', 'active', NULL, NULL),
(145, 377, 'Monaco (+377)', 'active', NULL, NULL),
(146, 976, 'Mongolia (+976)', 'active', NULL, NULL),
(147, 1664, 'Montserrat (+1664)', 'active', NULL, NULL),
(148, 212, 'Morocco (+212)', 'active', NULL, NULL),
(149, 258, 'Mozambique (+258)', 'active', NULL, NULL),
(150, 95, 'Myanmar(+95)', 'active', NULL, NULL),
(151, 264, 'Namibia (+264)', 'active', NULL, NULL),
(152, 674, 'Nauru (+674)', 'active', NULL, NULL),
(153, 977, 'Nepal (+977)', 'active', NULL, NULL),
(154, 599, 'Netherlands Antilles(+599)', 'active', NULL, NULL),
(155, 31, 'Netherlands (+31)', 'active', NULL, NULL),
(156, 687, 'New Caledonia (+687)', 'active', NULL, NULL),
(157, 64, 'New Zealand (+64)', 'active', NULL, NULL),
(158, 505, 'Nicaragua (+505)', 'active', NULL, NULL),
(159, 227, 'Niger (+227)', 'active', NULL, NULL),
(160, 234, 'Nigeria (+234)', 'active', NULL, NULL),
(161, 683, 'Niue (+683)', 'active', NULL, NULL),
(162, 672, 'Norfolk Islands (+672)', 'active', NULL, NULL),
(163, 1, 'Northern Mariana Islands(+1)', 'active', NULL, NULL),
(164, 47, 'Norway (+47)', 'active', NULL, NULL),
(165, 968, 'Oman (+968)', 'active', NULL, NULL),
(166, 92, 'Pakistan(+92)', 'active', NULL, NULL),
(167, 680, 'Palau (+680)', 'active', NULL, NULL),
(168, 970, 'Palestinian Territory Occupied(+970)', 'active', NULL, NULL),
(169, 507, 'Panama (+507)', 'active', NULL, NULL),
(170, 675, 'Papua New Guinea (+675)', 'active', NULL, NULL),
(171, 595, 'Paraguay (+595)', 'active', NULL, NULL),
(172, 51, 'Peru (+51)', 'active', NULL, NULL),
(173, 63, 'Philippines (+63)', 'active', NULL, NULL),
(174, 64, 'Pitcairn Island(+64)', 'active', NULL, NULL),
(175, 48, 'Poland (+48)', 'active', NULL, NULL),
(176, 351, 'Portugal (+351)', 'active', NULL, NULL),
(177, 1787, 'Puerto Rico (+1787)', 'active', NULL, NULL),
(178, 974, 'Qatar (+974)', 'active', NULL, NULL),
(179, 262, 'Reunion (+262)', 'active', NULL, NULL),
(180, 40, 'Romania (+40)', 'active', NULL, NULL),
(181, 7, 'Russia (+7)', 'active', NULL, NULL),
(182, 250, 'Rwanda (+250)', 'active', NULL, NULL),
(183, 290, 'St. Helena (+290)', 'active', NULL, NULL),
(184, 1869, 'St. Kitts (+1869)', 'active', NULL, NULL),
(185, 1758, 'Saint Lucia(+1758)', 'active', NULL, NULL),
(186, 508, 'Saint Pierre and Miquelon(+508)', 'active', NULL, NULL),
(187, 1784, 'Saint Vincent And The Grenadines(+1784)', 'active', NULL, NULL),
(188, 685, 'Samoa(+685)', 'active', NULL, NULL),
(189, 378, 'San Marino (+378)', 'active', NULL, NULL),
(190, 239, 'Sao Tome & Principe (+239)', 'active', NULL, NULL),
(191, 966, 'Saudi Arabia (+966)', 'active', NULL, NULL),
(192, 221, 'Senegal (+221)', 'active', NULL, NULL),
(193, 381, 'Serbia(+381)', 'active', NULL, NULL),
(194, 248, 'Seychelles (+248)', 'active', NULL, NULL),
(195, 232, 'Sierra Leone (+232)', 'active', NULL, NULL),
(196, 65, 'Singapore (+65)', 'active', NULL, NULL),
(197, 421, 'Slovak Republic (+421)', 'active', NULL, NULL),
(198, 386, 'Slovenia (+386)', 'active', NULL, NULL),
(199, 44, 'Smaller Territories of the UK', 'active', NULL, NULL),
(200, 677, 'Solomon Islands (+677)', 'active', NULL, NULL),
(201, 252, 'Somalia (+252)', 'active', NULL, NULL),
(202, 27, 'South Africa (+27)', 'active', NULL, NULL),
(203, 500, 'South Georgia(+500)', 'active', NULL, NULL),
(204, 211, 'South Sudan(+211)', 'active', NULL, NULL),
(205, 34, 'Spain (+34)', 'active', NULL, NULL),
(206, 94, 'Sri Lanka (+94)', 'active', NULL, NULL),
(207, 249, 'Sudan (+249)', 'active', NULL, NULL),
(208, 597, 'Suriname (+597)', 'active', NULL, NULL),
(209, 47, 'Svalbard And Jan Mayen Islands(+41)', 'active', NULL, NULL),
(210, 268, 'Swaziland (+268)', 'active', NULL, NULL),
(211, 46, 'Sweden (+46)', 'active', NULL, NULL),
(212, 41, 'Switzerland (+41)', 'active', NULL, NULL),
(213, 963, 'Syria(+963)', 'active', NULL, NULL),
(214, 886, 'Taiwan (+886)', 'active', NULL, NULL),
(215, 7, 'Tajikstan (+7)', 'active', NULL, NULL),
(216, 255, 'Tanzania(+255)', 'active', NULL, NULL),
(217, 66, 'Thailand (+66)', 'active', NULL, NULL),
(218, 228, 'Togo (+228)', 'active', NULL, NULL),
(219, 690, 'Tokelau(+690)', 'active', NULL, NULL),
(220, 676, 'Tonga (+676)', 'active', NULL, NULL),
(221, 1868, 'Trinidad & Tobago (+1868)', 'active', NULL, NULL),
(222, 216, 'Tunisia (+216)', 'active', NULL, NULL),
(223, 90, 'Turkey (+90)', 'active', NULL, NULL),
(224, 7, 'Turkmenistan (+7)', 'active', NULL, NULL),
(225, 1649, 'Turks & Caicos Islands (+1649)', 'active', NULL, NULL),
(226, 688, 'Tuvalu (+688)', 'active', NULL, NULL),
(227, 256, 'Uganda (+256)', 'active', NULL, NULL),
(228, 380, 'Ukraine (+380)', 'active', NULL, NULL),
(229, 971, 'United Arab Emirates (+971)', 'active', NULL, NULL),
(230, 44, 'UK (+44)', 'active', NULL, NULL),
(231, 1, 'USA (+1)', 'active', NULL, NULL),
(232, 246, 'United States Minor Outlying Islands(+246)', 'active', NULL, NULL),
(233, 598, 'Uruguay (+598)', 'active', NULL, NULL),
(234, 7, 'Uzbekistan (+7)', 'active', NULL, NULL),
(235, 678, 'Vanuatu (+678)', 'active', NULL, NULL),
(236, 379, 'Vatican City (+379)', 'active', NULL, NULL),
(237, 58, 'Venezuela (+58)', 'active', NULL, NULL),
(238, 84, 'Vietnam (+84)', 'active', NULL, NULL),
(239, 84, 'Virgin Islands - British (+1284)', 'active', NULL, NULL),
(240, 84, 'Virgin Islands - US (+1340)', 'active', NULL, NULL),
(241, 681, 'Wallis & Futuna (+681)', 'active', NULL, NULL),
(242, 212, 'Western Sahara(+212)', 'active', NULL, NULL),
(243, 969, 'Yemen (North)(+969)', 'active', NULL, NULL),
(244, 38, 'Yugoslavia(+38)', 'active', NULL, NULL),
(245, 260, 'Zambia (+260)', 'active', NULL, NULL),
(246, 263, 'Zimbabwe (+263)', 'active', NULL, NULL),
(247, 156, 'Bahraini  +973', 'active', NULL, '2021-07-10 10:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2021_07_09_190616_create_countries_table', 2),
(3, '2014_10_12_000000_create_users_table', 3),
(4, '2014_10_12_100000_create_password_resets_table', 3),
(5, '2019_08_19_000000_create_failed_jobs_table', 3),
(6, '2021_07_09_192125_create_roles_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super admin', 'super-admin', 'active', '2021-07-11 09:01:35', '2021-07-11 09:01:35'),
(2, 'Employer company', 'employer-company', 'active', '2021-07-11 09:02:08', '2021-07-12 02:20:10'),
(3, 'Welfare service center company', 'welfare-service-center-company', 'active', '2021-07-11 09:02:29', '2021-07-11 09:02:29'),
(4, 'Bangladeshi embassy', 'bangladeshi-embassy', 'active', '2021-07-11 09:03:00', '2021-07-11 09:03:00'),
(5, 'Master One stop service', 'master-one-stop-service', 'active', '2021-07-11 09:03:26', '2021-07-11 09:03:26'),
(6, 'One stop service agency', 'child-one-stop-service', 'active', '2021-07-11 09:04:08', '2021-07-11 09:04:08'),
(7, 'Medical company', 'medical-company', 'active', '2021-07-11 09:04:24', '2021-07-11 09:04:24'),
(8, 'Training company', 'training-company', 'active', '2021-07-11 09:04:35', '2021-07-11 09:04:35'),
(9, 'Travel company', 'travel-company', 'active', '2021-07-11 09:04:46', '2021-07-11 09:04:46'),
(10, 'Biometric company', 'biometric-company', 'active', '2021-07-11 09:04:58', '2021-07-11 09:04:58'),
(11, 'Recruiting Agency', 'recruiting-agency', 'active', '2021-07-11 09:05:23', '2021-07-11 09:05:23'),
(12, 'Bangladeshi admin', 'bangladeshi-admin', 'active', '2021-07-11 09:06:02', '2021-07-11 09:06:02'),
(13, 'Employer', 'employer', 'active', '2021-07-11 09:06:28', '2021-07-11 09:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` enum('Pending','Approved','Rejected') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quata` int(11) DEFAULT NULL,
  `company_regno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abbr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childosc_id` int(11) DEFAULT NULL,
  `cosc_assigned_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `country_id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `active_status`, `quata`, `company_regno`, `domain`, `company_name`, `abbr`, `mobile`, `city`, `state`, `address1`, `address2`, `logo`, `document1`, `document2`, `status`, `childosc_id`, `cosc_assigned_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 'Super admin', 'sa@gmail.com', NULL, '$2y$10$TvYcKljGTDtXyD2m2.FR9.oM18zadv2AqTymusqr3aCh/VAKE0zhm', 'super-admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 02:41:48', '2021-07-12 02:41:48'),
(3, 12, 2, 'Bangladesh admin', 'ba@gmail.com', NULL, '$2y$10$roQwj7Ncvp1p2TWjw/bvIOYlpoDNR8QovM7FArzBlNfknUV4i0dQC', 'bangladeshi-admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 02:42:38', '2021-07-12 02:42:38'),
(4, 11, 2, 'Recruiting agency', 'rea@gmail.com', NULL, '$2y$10$HCO1voMsfykna7I9n1iJQuoI8Edcv2E03.2UzCrA2U1qtvCzi2/.O', 'recruiting-agency', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 02:43:41', '2021-07-12 02:43:41'),
(5, 3, 2, 'Welfare sevice centre', 'wsc@gmail.com', NULL, '$2y$10$K8FpdUM6OtdOknErZ4vSAO4yGIhG4vR57J0tmFvoMsvcJsEpFeMRi', 'welfare-service-center-company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 02:44:18', '2021-07-12 02:44:18'),
(6, 5, 2, 'Master One stop service', 'moss@gmail.com', NULL, '$2y$10$OLTKs0Ib3AubTrEh..74KOmQb9H9EJiyN458Jpds89Btg.w.6EYz2', 'master-one-stop-service', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 02:45:26', '2021-07-12 02:45:26'),
(7, 2, 2, 'Employer company', 'ec@gmail.com', NULL, '$2y$10$GTq4SaBJ7ANDPqO6bGT6FOCsVUI2Q0FtfBv3G4OfGju7t37QTkeuO', 'employer-company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 02:46:10', '2021-07-12 02:46:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_country_id_foreign` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2024 at 10:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cifpn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `header_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `content`, `image`, `header_image`, `created_at`, `updated_at`) VALUES
(1, 'IFPN', '<p>The Institute of Financial Crime and Fraud Prevention of Nigeria (IFPN) is a leading professional body dedicated to the advancement of financial crime prevention and fraud control in Nigeria. IFPN brings together experts and practitioners across industries to build a collaborative and knowledge-driven network aimed at combating financial crime and fostering transparency, compliance, and integrity in financial systems. We serve as a benchmark of professional excellence and are committed to continuous development and education in anti-fraud and financial crime measures.&nbsp;</p>', 'assets/images/about/1730907477.jpg', 'assets/images/about/1729848117.png', '2024-10-25 08:14:11', '2024-11-06 14:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  `login_ip` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `last_login`, `login_ip`, `otp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$SDWpI4m9YUWunhV9hP/spuxDlU25RYtkN52ts4CzC5fZjnHxv.Zwq', '', '', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<h4><strong>Internship Opportunities at Infoscert Xpression Streams Limited</strong></h4><p>At Infoscert, we are committed to fostering the next generation of innovators and leaders. While we currently do not have full-time openings, we offer exciting <strong>internship opportunities</strong> for students and recent graduates eager to gain practical experience in the technology sector.</p><h4><strong>Why Intern with Us?</strong></h4><p><strong>Hands-On Experience</strong>: Work on real projects and gain valuable skills in a dynamic environment.</p><p><strong>Mentorship</strong>: Learn from experienced professionals who are passionate about sharing their knowledge and expertise.</p><p><strong>Impactful Work</strong>: Contribute to initiatives that make a difference in various industries and communities.</p><h4><strong>Internship Areas</strong></h4><p><strong>Technology Development</strong></p><p><strong>Project Management</strong></p><p><strong>Business Process Management</strong></p><p><strong>Marketing and Communications</strong></p><p><strong>Consulting and Advisory Services</strong></p><h4><strong>How to Apply</strong></h4><p>If you are ready to kickstart your career with us, we’d love to hear from you! Please send your resume and a brief cover letter to <a href=\"mailto:internships@infoscert.com\"><strong>internships@infoscert.com</strong></a> outlining your interests and what you hope to gain from your internship experience.</p>', '2024-10-24 22:27:01', '2024-10-24 22:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` varchar(250) NOT NULL,
  `comment_id` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(250) NOT NULL,
  `author_pics` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultants`
--

CREATE TABLE `consultants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `solution_id` text DEFAULT NULL,
  `calendar_date` text DEFAULT NULL,
  `time_slot` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultants`
--

INSERT INTO `consultants` (`id`, `name`, `email`, `phone`, `solution_id`, `calendar_date`, `time_slot`, `created_at`, `updated_at`) VALUES
(24, 'Maris Avila', 'esdhanokpe@gmail.com', '+1 (715) 855-3658', '2', '2024-10-30 00:00:00', '60', '2024-10-28 14:02:16', '2024-10-28 14:02:16'),
(25, 'Richard Pitts', 'eshanokpe@gmail.com', '+1 (692) 717-7059', '5', '2024-10-30 00:00:00', '15', '2024-10-28 14:06:30', '2024-10-28 14:06:30'),
(26, 'Jorden Ratliff', 'eshanokpe77@gmail.com', '+1 (915) 757-2003', '1', '2024-10-30 00:00:00', '60', '2024-10-28 14:25:41', '2024-10-28 14:25:41'),
(27, 'Jorden Ratliff', 'eshanokpe77@gmail.com', '+1 (915) 757-2003', '1', '2024-10-30 00:00:00', '60', '2024-10-28 14:26:43', '2024-10-28 14:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Kimberley George', 'fyqy@mailinator.com', NULL, 'Nihil eum dolore del', 'Dolorum ipsum sed m', '2024-10-24 23:49:29', '2024-10-24 23:49:29'),
(2, 'Bernard Myers', 'qysywaqir@mailinator.com', NULL, 'Porro ipsam porro qu', 'Et nulla molestiae i', '2024-10-24 23:50:12', '2024-10-24 23:50:12'),
(3, 'Bernard Myers', 'qysywaqir@mailinator.com', NULL, 'Porro ipsam porro qu', 'Et nulla molestiae i', '2024-10-24 23:50:17', '2024-10-24 23:50:17'),
(12, 'Jaden Simmons', 'cajax@mailinator.com', NULL, 'Laboris architecto d', 'Aut ut omnis repelle', '2024-10-24 23:53:34', '2024-10-24 23:53:34'),
(15, 'Brock Rodriquez', 'ruhafal@mailinator.com', '96', 'Occaecat numquam dui', 'Nihil repellendus V', '2024-10-25 00:17:54', '2024-10-25 00:17:54'),
(16, 'Xerxes Dawson', 'hebivohe@mailinator.com', '68', 'Quisquam quas eius e', 'Ducimus quod sint', '2024-10-25 00:29:10', '2024-10-25 00:29:10'),
(17, 'Jared Warner', 'bawumakiqu@mailinator.com', '+1 (443) 874-7902', 'Dolore nostrum conse', 'Fuga Et incididunt', '2024-10-25 00:30:55', '2024-10-25 00:30:55'),
(18, 'Emery Madden', 'pozeriwasa@mailinator.com', '+1 (246) 727-6366', 'Aliqua Illo consequ', 'Nostrum dolorum quae', '2024-10-25 00:31:54', '2024-10-25 00:31:54'),
(19, 'Hermione Ayers', 'sufa@mailinator.com', '+1 (238) 834-1331', 'Dicta in quos at mag', 'Maiores deserunt vol', '2024-10-25 00:41:13', '2024-10-25 00:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `first_phone` varchar(255) DEFAULT NULL,
  `second_phone` varchar(255) DEFAULT NULL,
  `first_email` varchar(255) DEFAULT NULL,
  `second_email` varchar(255) DEFAULT NULL,
  `first_address` text DEFAULT NULL,
  `second_address` text DEFAULT NULL,
  `website_link` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `footer_logo` text DEFAULT NULL,
  `favicon` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `company_name`, `first_phone`, `second_phone`, `first_email`, `second_email`, `first_address`, `second_address`, `website_link`, `site_logo`, `footer_logo`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'IFPN', '+234 (1) 700-1770,', '+234 (0) 915-341-4314', 'info@cifpn.com', NULL, '2nd Floor, 1 Adeola Adeoye Street, Toyin Street, Ikeja, Lagos, Nigeria.', NULL, 'ww', 'assets/images/logo/6735bee8d6b34.png', 'assets/images/logo/6735bee8d7996.png', 'assets/images/logo/6735c4c488a11.png', NULL, '2024-11-14 08:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `core_activities`
--

CREATE TABLE `core_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_activities`
--

INSERT INTO `core_activities` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PROFESSIONAL DEVELOPMENT AND TRAINING', 'professional-development-and-training', '<ol><li>Workshops and Seminars: Organizing regular workshops and seminars on topics related to financial crime prevention, compliance, and fraud detection. Certification Programs: Offering accredited certification programs for professionals in the field to enhance their skills and knowledge.</li><li>Webinars and Online Learning: Providing access to online courses and webinars to reach a wider audience.</li></ol>', 'assets/images/coreActivities/6720f6e8f3ca6.svg', '2024-10-29 13:53:29', '2024-10-29 14:08:15'),
(2, 'RESEARCH AND PUBLICATIONS', 'research-and-publications', '<ol><li>Industry Research: Conducting research on trends, challenges, and best practices in financial crime and fraud prevention.</li><li>Reports and White Papers: Publishing reports and white papers that provide insights and recommendations based on research findings.</li><li>Newsletters: Regularly distributing newsletters to keep members informed about industry developments and IFPN activities.</li></ol>', 'assets/images/coreActivities/6720f71f2a0ee.svg', '2024-10-29 13:54:23', '2024-10-29 14:08:44'),
(3, 'NETWORKING AND COLLABORATION', 'networking-and-collaboration', '<ol><li>Annual Conferences and Events: Hosting conferences to facilitate networking among professionals and stakeholders in the financial crime prevention field.</li><li>Joint Working Committee: Collaborating with industry regulators and stakeholders across various sectors to promote best practices and standards.</li><li>Member Engagement: Encouraging interaction among members through forums, discussion groups, and social events.</li></ol>', 'assets/images/coreActivities/6720f757ed778.svg', '2024-10-29 13:55:19', '2024-10-29 14:08:27'),
(4, 'POLICY ADVOCACY AND REPRESENTATION', 'policy-advocacy-and-representation', '<ol><li>Engagement with Regulators: Advocating for policies that support effective financial crime prevention and compliance measures.&nbsp;</li><li>Industry Standards Development: Contributing to the development of industry standards and best practices for financial crime prevention.&nbsp;</li><li>Public Awareness Campaigns: Raising awareness about the importance of financial crime prevention through campaigns and outreach initiatives.&nbsp;</li></ol>', 'assets/images/coreActivities/6720fad6146c4.svg', '2024-10-29 14:10:14', '2024-10-29 14:10:14'),
(5, 'CONSULTANCY SERVICES', 'consultancy-services', '<ol><li>Organizational Assessments: Providing assessments of organizational practices related to financial crime and compliance.&nbsp;</li><li>Tailored Solutions: Offering customized consultancy services to address specific challenges faced by organizations.&nbsp;</li><li>Capacity Building: Developing training programs and materials to enhance organizational capabilities.&nbsp;</li></ol>', 'assets/images/coreActivities/6720fb00e04e5.svg', '2024-10-29 14:10:56', '2024-10-29 14:10:56'),
(6, 'KNOWLEDGE SHARING AND BEST PRACTICES', 'knowledge-sharing-and-best-practices', '<ol><li>Resource Library: Creating a repository of resources, including guidelines, toolkits, and best practice documents.&nbsp;</li><li>Case Studies: Sharing case studies that highlight successful strategies and approaches to financial crime prevention.&nbsp;</li><li>Mentorship Programs: Establishing mentorship programs to support the professional development of emerging talent in the field.&nbsp;</li></ol>', 'assets/images/coreActivities/6720fb4a1d7f6.svg', '2024-10-29 14:12:10', '2024-10-29 14:12:10'),
(7, 'MEMBERSHIP SERVICES', 'membership-services', '<ol><li>Member Support: Providing support and resources to members to enhance their professional practice. Membership Benefits: Offering exclusive benefits, including access to training, resources, and networking opportunities.&nbsp;</li><li>Membership Tiers: Developing a tiered membership structure to cater to professionals at different stages of their careers.&nbsp;</li></ol>', 'assets/images/coreActivities/6720fb7f38c70.svg', '2024-10-29 14:13:03', '2024-10-29 14:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `core_values`
--

CREATE TABLE `core_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `core_values` text DEFAULT NULL,
  `core_values_img` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `mission_img` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `vision_img` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_values`
--

INSERT INTO `core_values` (`id`, `core_values`, `core_values_img`, `mission`, `mission_img`, `vision`, `vision_img`, `created_at`, `updated_at`) VALUES
(4, '<p>cc</p>', 'assets/images/core-value/1728439790_6705e5ee1b046.jpg', 'Our mission at Infoscert Xpression Streams Limited is to deliver seamless, innovative technology solutions that address the critical needs of diverse industries, including agriculture, telecom, oil and gas, education, and the public sector. We are committed to bridging the gap between profit and purpose by leveraging technology to solve complex challenges while uplifting communities through sustainable social impact initiatives. Through collaboration, expertise, and innovation, we strive to create a positive, lasting influence on the industries we serve and the world around us.', 'assets/images/core-value/6705ea1f7f5f2.jpg', 'Our mission at Infoscert Xpression Streams Limited is to deliver seamless, innovative technology solutions that address the critical needs of diverse industries, including agriculture, telecom, oil and gas, education, and the public sector. We are committed to bridging the gap between profit and purpose by leveraging technology to solve complex challenges while uplifting communities through sustainable social impact initiatives. Through collaboration, expertise, and innovation, we strive to create a positive, lasting influence on the industries we serve and the world around us', 'assets/images/core-value/6705ea60cc732.jpg', '2024-10-09 01:09:50', '2024-10-09 01:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `dropdown_items`
--

CREATE TABLE `dropdown_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_item_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dropdown_items`
--

INSERT INTO `dropdown_items` (`id`, `menu_item_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(130, 6, 'Membership Overview', 'membership-overview', '2024-11-05 14:45:59', '2024-11-05 14:45:59'),
(131, 6, 'Membership Benefits', 'membership-benefits', '2024-11-05 14:45:59', '2024-11-05 14:45:59'),
(132, 6, 'Mentorship Programme', 'mentorship-programme', '2024-11-05 14:45:59', '2024-11-05 14:45:59'),
(133, 6, 'Membership Subscription Fees', 'membership-subscription-fees', '2024-11-05 14:45:59', '2024-11-05 14:45:59'),
(134, 6, 'Membership Tiers', 'membership-tiers', '2024-11-05 14:45:59', '2024-11-05 14:45:59'),
(135, 6, 'Membership Login', 'membership-login', '2024-11-05 14:45:59', '2024-11-05 14:45:59'),
(136, 6, 'Membership Application', 'membership-application', '2024-11-05 14:45:59', '2024-11-05 14:45:59'),
(137, 7, 'Programmes and Examinations', 'programmes-and-examinations', '2024-11-06 08:01:25', '2024-11-06 08:01:25'),
(138, 7, 'Exam Requirement', 'exam-requirement', '2024-11-06 08:01:25', '2024-11-06 08:01:25'),
(157, 15, 'Position Papers & Policy Briefs', 'position-papers-policy-briefs', '2024-11-13 10:50:42', '2024-11-13 10:50:42'),
(158, 15, 'Government & NGO Partnerships', 'government-ngo-partnerships', '2024-11-13 10:50:42', '2024-11-13 10:50:42'),
(159, 15, 'Legislative Recommendations', 'legislative-recommendations', '2024-11-13 10:50:42', '2024-11-13 10:50:42'),
(160, 15, 'Policies & Governance Framework', 'policies-governance-framework', '2024-11-13 10:50:42', '2024-11-13 10:50:42'),
(166, 16, 'Blog/News', 'blognews', '2024-11-13 11:44:39', '2024-11-13 11:44:39'),
(167, 16, 'Events', 'events', '2024-11-13 11:44:39', '2024-11-13 11:44:39'),
(168, 16, 'Testimonials', 'testimonials', '2024-11-13 11:44:39', '2024-11-13 11:44:39'),
(169, 16, 'Livestream', 'livestream', '2024-11-13 11:44:39', '2024-11-13 11:44:39'),
(170, 16, 'FAQ', 'faq', '2024-11-13 11:44:39', '2024-11-13 11:44:39'),
(171, 4, 'Vision', 'vision', '2024-11-13 13:10:29', '2024-11-13 13:10:29'),
(172, 4, 'Mission', 'mission', '2024-11-13 13:10:29', '2024-11-13 13:10:29'),
(173, 4, 'Core Activities', 'core-activities', '2024-11-13 13:10:29', '2024-11-13 13:10:29'),
(174, 4, 'Governance & Board', 'governance-board', '2024-11-13 13:10:29', '2024-11-13 13:10:29'),
(175, 4, 'Partners and Affiliates', 'partners-and-affiliates', '2024-11-13 13:10:29', '2024-11-13 13:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'GRC & FinCrime Prevention Awards & Summit', 'grc-fincrime-prevention-awards-summit', '<p>We congratulate our finalists for the 2024 GRC &amp; Fin Crime Prevention Excellence Awards category as we joyfully unveil them to you.<br><br>Now for the Excellence in Energy Sector , Governance, Risk, and Compliance (GRC) Awards(Energy/Oil Sector), the finalists are; Jim Swartz, Dr. Samba Seye, Mr. Roland Adams<br><br>We look forward to announcing the winner of this award.<br><br><a href=\"https://www.linkedin.com/company/totalenergies/\">TotalEnergies</a> <a href=\"https://www.linkedin.com/company/chevron/\">Chevron</a> <a href=\"https://www.linkedin.com/company/shell/\">Shell</a> <a href=\"https://www.linkedin.com/company/nuprc/\">Nigerian Upstream Petroleum Regulatory Commission (NUPRC)</a> <a href=\"https://www.linkedin.com/company/association-governance-risk-compliance/\">The Association of Governance, Risk &amp; Compliance (AGRC)</a> <a href=\"https://www.linkedin.com/company/lgca-edu/\">London Governance &amp; Compliance Academy (LGCA)</a>&nbsp;<br><br>In the meantime, remember to go on and register for the Summit via this link, <a href=\"https://lnkd.in/d8QfeH5b\">https://lnkd.in/d8QfeH5b</a><br><br>We look forward to hosting you.</p>', 'assets/images/event/1730889890.jpg', '2024-11-06 09:32:08', '2024-11-06 09:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `exam_requirements`
--

CREATE TABLE `exam_requirements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_requirements`
--

INSERT INTO `exam_requirements` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'EXAM REQUIREMENT', '<p>Institute of Financial Crime and Fraud Prevention of Nigeria (IFPN), Institute of Financial Crime and Fraud Prevention, there would typically be exam requirements for certain membership tiers, especially to ensure that members have the necessary knowledge and skills in financial crime prevention, compliance, and related areas. Here\'s how exam requirements might be structured:&nbsp;</p><p><strong>1. STUDENT MEMBERSHIP&nbsp;</strong></p><ul><li><strong>Exam Requirement:</strong> Not usually required for this tier. Membership is based on proof of enrollment in a relevant educational program.</li><li><strong>Progression</strong>: Exams or certifications may be required to move to higher membership tiers, such as Associate Membership.</li></ul><p><strong>2. ASSOCIATE MEMBERSHIP&nbsp;</strong></p><ul><li><strong>Exam Requirement: </strong>Entry-level exams could cover foundational topics in financial crime prevention, anti-money laundering (AML), Fraud Prevention, Know Your Customer (KYC) procedures, and compliance.</li><li><strong>Purpose</strong>: To assess understanding of basic concepts and skills in the financial crime prevention field.</li></ul><p><strong>3. &nbsp; FULL MEMBERSHIP</strong></p><ul><li><strong>Exam Requirement</strong>: Yes. To qualify, candidates might need to pass advanced certification exams that assess in-depth knowledge of financial crime regulation, compliance frameworks, and transaction monitoring.</li><li><strong>Purpose</strong>: To demonstrate competency and professional expertise in the financial crime and compliance sector.</li></ul><p><strong>4. FELLOW MEMBERSHIP</strong></p><ul><li><strong>Exam Requirement</strong>: Typically, no additional exams are required for this tier if the applicant has already passed the necessary exams for Full Membership. However, some bodies may require evidence of continuous professional development (CPD), including participation in advanced training programs or thought leadership activities.</li><li><strong>Purpose</strong>: To ensure ongoing expertise and leadership in the field.</li></ul><p><strong>5. CORPORATE MEMBERSHIP&nbsp;</strong></p><ul><li><strong>Exam Requirement:</strong> Not applicable to organizations. However, employees of member organizations may be required to take exams if they seek individual membership status or certifications.</li></ul>', 'assets/images/examRequirement/1730819447.png', '2024-11-05 14:10:47', '2024-11-05 14:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'How often are Continuous Professional Development (CPD) courses required?', '<p>CPD courses are offered regularly to help members stay current with industry best practices, regulatory changes, and evolving technologies. Members are encouraged to complete these courses periodically to maintain their certification and membership status.</p>', '2024-10-10 04:47:44', '2024-11-07 09:18:55'),
(2, 'Does IFPN offer certification programs?', '<p>Yes, IFPN offers certification programs such as the Certified Financial Crime Prevention Specialist (CFCP). These programs cover essential topics like Anti-Money Laundering (AML), Know Your Customer (KYC) processes, fraud detection, risk management, and compliance frameworks.</p>', '2024-10-10 04:48:05', '2024-11-07 09:20:16'),
(3, 'What are the benefits of membership with IFPN?', '<p>Members of IFPN gain access to exclusive resources, including anti-fraud toolkits, certification programs, and training courses. Additionally, members can participate in forums, receive the latest industry updates, and access networking opportunities with other professionals in the field.</p>', '2024-11-07 09:20:58', '2024-11-07 09:20:58'),
(4, 'How can I become a member of IFPN?', '<p>To become a member, visit our website\'s Membership section, select your desired membership category, complete the application form, and submit the necessary documents. Membership is available at various levels, from student to corporate, to accommodate professionals at different stages of their careers.</p>', '2024-11-07 09:21:26', '2024-11-07 09:21:26'),
(5, 'What is the mission of the Institute of Financial Crime and Fraud Prevention of Nigeria (IFPN)?', '<p>IFPN\'s mission is to advance knowledge, training, and standards in financial crime prevention and fraud prevention in Nigeria. Through certification programs, professional development, and advocacy, we aim to equip professionals to effectively combat financial crime.</p>', '2024-11-07 09:21:53', '2024-11-07 09:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `governance_boards`
--

CREATE TABLE `governance_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `governance_boards`
--

INSERT INTO `governance_boards` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Governance Structure of the institute of Financial Crime and Fraud Prevention of Nigeria (IFPN)', 'governance-structure-of-the-institute-of-financial-crime-and-fraud-prevention-of-nigeria-ifpn', '<p>The Institute of Financial Crime and Fraud Prevention of Nigeria (IFPN) is committed to promoting the highest standards of governance, transparency, and accountability. The governance structure of IFPN is designed to ensure that the Institute operates efficiently while upholding the professional integrity of its members. Below is the governance framework of IFPN: &nbsp;</p><p><strong>1. BOARD OF TRUSTEES&nbsp;</strong></p><p>The Board of Trustees serves as the strategic oversight body of IFPN and is responsible for guiding the long-term direction of the Institute. The board ensures that the IFPN remains aligned with its mission and vision while upholding ethical standards. &nbsp;</p><p><strong>Key Responsibilities:</strong>&nbsp;</p><ul><li>Establishing the strategic vision and mission of IFPN.</li><li>Overseeing governance policies and ensuring the Institute\'s sustainability.</li><li>Approving the annual budget and financial reports.</li><li>Appointing the members of the Council and ensuring proper leadership succession.</li><li>Ensuring compliance with Nigerian laws and international standards.</li></ul><p><strong>Composition:&nbsp;</strong></p><ul><li>Chairperson</li><li>Deputy Chairperson</li><li>5-7 Trustees, including industry experts, legal professionals, former regulators, and law enforcement officials.</li><li>The President of IFPN (ex-officio member)</li></ul><p><strong>2. GOVERNING COUNCIL&nbsp;</strong></p><p>The Governing Council is responsible for the formulation and implementation of the Institute\'s policies, providing direction for the activities of the Executive Management, and overseeing the Institute\'s core functions, including membership, education, certification, and research. &nbsp;</p><p><strong>Key Responsibilities</strong>:</p><ul><li>Developing and reviewing policies to ensure alignment with the Institute’s objectives.</li><li>Approving the Institute’s code of conduct, certification requirements, and membership policies.</li><li>Advising on matters related to education, certification, and professional development.</li><li>Overseeing disciplinary matters and upholding ethical standards.</li><li>Providing guidance on partnerships and collaboration with regulatory bodies and global organizations.</li></ul><p><strong>Composition</strong></p><ul><li>President</li><li>Vice-President</li><li>Secretary-General</li><li>Chairpersons of key committees (Membership, Education, Ethics, etc.)</li></ul>', 'assets/images/governanceBoard/1730311355.jpg', '2024-10-30 17:02:35', '2024-11-06 11:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Corporate Consulting', 'corporate-consulting', '<p>Infoscert Xpression Streams Limited partners with corporate consulting firms to provide cutting-edge technology solutions that enable them to deliver more value to their clients. Whether it’s improving operational efficiency, streamlining project management, or driving digital transformation, our solutions give consultants the tools they need to offer data-driven insights and innovative strategies.</p><h4><strong>Our Solutions for Corporate Consulting:</strong></h4><p><strong>Digital Transformation Consulting:</strong> We empower consulting firms with the digital tools needed to guide their clients through complex digital transformation journeys, helping businesses improve operational efficiency and customer experiences.</p><p><strong>Business Intelligence &amp; Analytics:</strong> Equip consulting firms with advanced data analytics solutions, helping them provide actionable insights and recommendations based on real-time data.</p><p><strong>Process Automation:</strong> We enable consultants to offer workflow automation solutions that reduce bottlenecks and increase organizational agility for their clients.</p><p><strong>Cloud Infrastructure &amp; Cybersecurity:</strong> Help consulting firms provide robust and secure cloud-based solutions to ensure their clients\' operations remain agile and secure in an increasingly digital environment.</p><h4><strong>Social Impact in Corporate Consulting:</strong></h4><p>Infoscert supports the consulting industry in advising businesses on sustainability, ethics, and corporate responsibility. We help consulting firms offer solutions that address social and environmental challenges, promoting ethical practices and corporate governance that benefit society as a whole.</p>', 'assets/images/industries/67061538e33d9.jpg', '2024-10-09 03:57:25', '2024-10-09 04:31:36'),
(2, 'Telecommunications', 'telecommunications', '<p>The telecommunications industry is the backbone of modern connectivity, and at <strong>Infoscert Xpression Streams Limited</strong>, we are committed to providing innovative systems that enable seamless communication across regions and borders.</p><p><strong>Our Telecommunications Solutions Include:</strong></p><p><strong>Network Infrastructure Development:</strong> Design, deploy, and manage reliable and scalable telecommunications networks, including 5G, fiber optic, and satellite systems.</p><p><strong>Data Management &amp; Analytics:</strong> Implement robust data management systems that help telecom companies efficiently manage large volumes of data and gain valuable insights through advanced analytics.</p><p><strong>IoT Integration:</strong> Facilitate the integration of IoT devices for smarter cities, homes, and businesses by connecting telecom infrastructure to emerging IoT technologies.</p><p><strong>Customer Experience Management (CEM):</strong> Provide customer relationship management (CRM) systems that enhance service delivery and improve customer satisfaction through automated support, real-time analytics, and self-service portals.</p><p><strong>Impact:</strong> We enable telecom providers to improve network reliability, expand coverage to underserved areas, and deliver exceptional customer experiences. Our solutions also contribute to bridging the digital divide, connecting more people and communities in remote regions.</p>', 'assets/images/industries/67061ab0371e7.jpg', '2024-10-09 04:54:56', '2024-10-09 04:54:56'),
(3, 'Agriculture', 'agriculture', '<p>At Infoscert, we provide innovative technology solutions that drive efficiency, sustainability, and growth in the agricultural sector. Our offerings are designed for farmers, agribusinesses, and cooperatives to harness data-driven insights, optimize operations, and meet the challenges of modern food production.</p><h3><strong>Our Solutions</strong></h3><h4><strong>1. Precision Farming with IoT and Data Analytics</strong></h4><p>Leverage real-time data to optimize soil health, irrigation, and pest control. Our IoT sensors and analytics enable smarter resource management, boosting crop yields while reducing waste.</p><h4><strong>2. Supply Chain Management</strong></h4><p>Streamline your agricultural supply chain from inventory to logistics. Our solutions provide real-time tracking, product traceability, and efficient distribution to ensure transparency and reliability from farm to market.</p><h4><strong>3. Digital Farm Management</strong></h4><p>Centralize farm operations with digital tools for task scheduling, equipment management, and financial tracking. Manage your entire farm from a single dashboard for enhanced productivity and cost savings.</p><h4><strong>4. Agri-Tech Advisory</strong></h4><p>Transform your farming operations with strategic consulting. We provide expertise in farm digitization, sustainability, and data-driven business intelligence, helping you adopt future-ready agricultural practices.</p>', 'assets/images/industries/671913e8eff0f.jpg', '2024-10-23 14:19:04', '2024-10-23 14:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `live_streams`
--

CREATE TABLE `live_streams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `live_streams`
--

INSERT INTO `live_streams` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Title', 'https://www.youtube.com/embed/ScMzIvxBSi4', '2024-11-13 12:11:11', '2024-11-13 13:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `membership_applications`
--

CREATE TABLE `membership_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membership_applications`
--

INSERT INTO `membership_applications` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Membership Application', '<p>To apply for membership in the Institute of Financial Crime and Fraud Prevention of Nigeria (IFPN), Institute of Financial Crime and Fraud Prevention, follow these steps:</p><p><strong>1.&nbsp; &nbsp; Visit the Official Website&nbsp;</strong></p><ul><li>Navigate to the official website of IFPN, where you can find the membership application section.</li></ul><p><strong>2.&nbsp; &nbsp; Choose Membership Category</strong></p><ul><li>Select the appropriate membership category (e.g., Student, Associate, Full, Fellow, or Corporate) based on your qualifications and experience in financial crime prevention, compliance, or related fields.</li></ul><p><strong>3.&nbsp; &nbsp; Complete Application Form</strong>&nbsp;</p><ul><li>Download or fill out the online application form with your personal details, educational qualifications, and work experience.</li><li>Include relevant certifications or documents that validate your expertise in areas like AML, KYC, or compliance (if required for the membership tier you\'re applying for)</li></ul><p><strong>4. &nbsp; Submit Required Documents&nbsp;</strong></p><ul><li>Prepare supporting documentation such as:</li></ul><ol><li>Proof of academic qualifications (degrees, certifications)</li><li>Work experience letters or references from current/past employers</li><li>Professional certifications (if applicable)</li><li>Proof of identification (e.g., passport, national ID)</li></ol><p><strong>5.&nbsp; &nbsp; Pay Membership Fees</strong></p><ul><li>Review the applicable membership fees based on your chosen membership category.</li><li>Payment can usually be made through bank transfer, credit card, or other secure payment methods listed on the website.</li></ul><p><strong>6.&nbsp; &nbsp; Attend an Interview&nbsp;</strong></p><ul><li>Some membership tiers may require an interview or oral examination to assess your knowledge and suitability for the organization.</li></ul><p><strong>7.&nbsp; &nbsp; Pass the Membership&nbsp;</strong></p><ul><li>Exam For certain levels of membership (such as Associate or Full Membership), you may need to pass an entrance exam to demonstrate your competency in financial crime prevention and compliance.</li></ul><p><strong>8.&nbsp; &nbsp; Receive Membership Confirmation</strong>&nbsp;</p><ul><li>After completing the application process, you will receive confirmation of your membership status, along with your membership ID and certificate.</li></ul><p><strong>9.&nbsp; &nbsp; Participate in Continuing Professional Development (CPD)&nbsp;</strong></p><ul><li>Ensure to meet any CPD requirements to maintain your membership and stay up to date with the latest industry trends and regulatory updates.</li></ul><p>&nbsp;</p><p><i><strong>By following these steps, you can apply and become a member of IFPN, gaining access to a network of professionals and resources in financial crime prevention and compliance.</strong></i></p>', NULL, '2024-11-06 07:52:59', '2024-11-06 07:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `membership_tiers`
--

CREATE TABLE `membership_tiers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membership_tiers`
--

INSERT INTO `membership_tiers` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Membership Tiers', 'membership-tiers', '<p><strong>1.&nbsp; STUDENT MEMBERSHIP</strong></p><ul><li><strong>Eligibility</strong>: For individuals currently studying a related discipline such as finance, law, criminology, or compliance at an accredited institution.</li><li><strong>Benefits</strong>: Access to educational resources, webinars, career development support, and networking with professionals in the field.</li><li><strong>Purpose</strong>: To support students aiming to build a career in financial crime prevention and compliance</li></ul><p><strong>2.&nbsp; ASSOCIATE MEMBERSHIP&nbsp;</strong></p><ul><li><strong>Eligibility</strong>: Entry-level professionals or those with less than three years of experience in financial crime prevention, compliance, KYC, or related areas.</li><li><strong>Benefits</strong>: Access to networking opportunities, continuous professional development (CPD), training programs, and industry updates.</li><li><strong>Purpose</strong>: To provide a platform for career growth and learning for early-career professionals.</li></ul><p><strong>3.&nbsp; FULL MEMBERSHIP&nbsp;</strong></p><ul><li><strong>Eligibility</strong>: Professionals with at least three to five years of experience in financial crime prevention, compliance, transaction monitoring, or related fields.</li><li><strong>Benefits</strong>: Full access to all member services, including advanced training programs, invitations to events, and voting rights within the organization.</li><li><strong>Purpose</strong>: To recognize established professionals and support their ongoing development and industry contributio</li></ul><p><strong>4. FELLOW MEMBERSHIP&nbsp;</strong></p><ul><li><strong>Eligibility</strong>: Senior professionals, thought leaders, or executives with over 20 years of experience in financial crime prevention, compliance, or governance roles.</li><li><strong>Benefits</strong>: Exclusive access to high-level forums, leadership development, opportunities to mentor junior professionals, and invitations to speak at events.</li><li><strong>Purpose</strong>: To honor industry leaders for their contribution and provide a platform for influencing policy and best practices.</li></ul><p><strong>5. CORPORATE MEMBERSHIP</strong>&nbsp;</p><ul><li><strong>Eligibility</strong>: Financial institutions, consulting firms, law enforcement agencies, and other organizations involved in preventing financial crime.</li><li><strong>Benefits</strong>: Organizational access to all resources, bulk training packages for staff, participation in policy development, and corporate branding opportunities at events.</li><li><strong>Purpose</strong>: To support organizations in complying with regulatory standards and improving internal controls against financial crime.</li></ul><p>&nbsp;</p><p><strong>NOTE</strong>: <i>These tiers cater to the different stages of a professional\'s career, from students and early-career individuals to seasoned experts and corporate entities.</i></p>', NULL, '2024-11-05 04:58:33', '2024-11-06 07:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `members_benefits`
--

CREATE TABLE `members_benefits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members_benefits`
--

INSERT INTO `members_benefits` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'BENEFITS OF THE MENTORSHIP PROGRAMME', 'benefits-of-the-mentorship-programme', '<p><strong>1. &nbsp;For Mentees: </strong>Gain invaluable insights, enhance skills, and receive guidance on navigating their careers in financial crime prevention.&nbsp;</p><p><strong>2. For Mentors:</strong> Opportunity to give back to the community, refine leadership skills, and stay updated on emerging trends and challenges in the industry. &nbsp;</p><p><i><strong>This Mentorship Programme aims to create a supportive environment that nurtures talent and promotes professional excellence in the fight against financial crime and fraud in Nigeria and beyond.&nbsp;</strong></i></p>', 'assets/images/membersBenefit/1730779405.png', '2024-10-30 18:25:47', '2024-11-05 07:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `members_overviews`
--

CREATE TABLE `members_overviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members_overviews`
--

INSERT INTO `members_overviews` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'IFPN MENTORSHIP PROGRAMME', 'ifpn-mentorship-programme', '<p><strong>OVERVIEW</strong></p><p>The IFPN Mentorship Programme is designed to foster professional development and knowledge sharing among members of the Institute of Financial Crime and Fraud Prevention of Nigeria. This initiative connects experienced professionals with emerging talent in the field of financial crime prevention, KYC, AML, and related areas.</p><p><strong>OBJECTIVES</strong></p><ul><li><strong>Skill Development:</strong> To help mentees acquire specific skills and knowledge relevant to their careers in financial crime prevention.</li><li><strong>Networking:</strong> To build professional relationships between seasoned experts and new entrants in the industry.</li><li><strong>Knowledge Transfer:</strong> To facilitate the sharing of best practices, insights, and experiences related to financial crime prevention.</li><li><strong>Career Guidance: </strong>To provide mentees with advice on career pathways, job search strategies, and professional growth.</li></ul><p><strong>PROGRAMME STRUCTURE</strong></p><p><strong>1. Eligibility</strong></p><ul><li>Open to all IFPN members, including both mentors and mentees.</li><li>Mentees should have a minimum level of experience or education in financial crime and fraud prevention.</li></ul><p><strong>2. Matching Process</strong></p><ul><li>Mentees can apply to join the programme and specify their areas of interest and desired outcomes.</li><li>The programme coordinators will match mentees with mentors based on expertise, goals, and preferences.</li></ul><p><strong>3. Mentorship Sessions</strong></p><ul><li>Regularly scheduled meetings (virtual or in-person) to discuss progress, challenges, and goals.</li><li>Flexibility in session frequency (e.g. bi-weekly or monthly) based on mutual agreement.</li></ul><p><strong>4. Resources and Support</strong></p><ul><li>Access to a dedicated mentorship portal with resources such as articles, webinars, and tools related to financial crime prevention.</li><li>Optional workshops and training sessions on relevant topics.</li></ul><p><strong>5. Duration</strong></p><ul><li>The mentorship relationship is typically established for a period of six months to one year, with the possibility of extension based on mutual agreement.</li></ul><p><strong>6. Feedback and Evaluation</strong></p><ul><li>Regular feedback sessions to evaluate the progress of the mentorship relationship.</li><li>End-of-programme surveys to gather insights for improving the programme.</li></ul><p><strong>7. Recognition</strong></p><ul><li>Certificates of participation for mentors and mentees upon successful completion of the programme.</li><li>Opportunities to showcase success stories in IFPN publications and events.</li></ul>', 'assets/images/membersOverview/1730781204.png', '2024-11-05 03:33:24', '2024-11-05 14:52:58'),
(2, 'IFPN FEES STRUCTURE', 'ifpn-fees-structure', '<p>Fees Structure The fees for becoming a member of the &nbsp;Institute of Financial Crime and Fraud Prevention of Nigeria (IFPN), Institute of Financial Crime and Fraud Prevention (IFP), would typically vary based on the membership level and type of professional involvement. While specific fees depend on the structure of the organization, here\'s a general outline of how fees might be organized:&nbsp;</p>', 'assets/images/membersSubscriptionFees/1730784320.png', '2024-11-05 04:25:20', '2024-11-05 04:25:20'),
(3, 'd', 'd', '<p>Fees Structure The fees for becoming a member of the &nbsp;Institute of Financial Crime and Fraud Prevention of Nigeria (IFPN), Institute of Financial Crime and Fraud Prevention (IFP), would typically vary based on the membership level and type of professional involvement. While specific fees depend on the structure of the organization, here\'s a general outline of how fees might be organized:&nbsp;</p>', 'assets/images/membersSubscriptionFees/1730784544.png', '2024-11-05 04:29:04', '2024-11-05 04:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `members_programmes`
--

CREATE TABLE `members_programmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members_programmes`
--

INSERT INTO `members_programmes` (`id`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 'HOW TO APPLY AS A MENTEE OR MENTOR FOR THE IFPN MENTORSHIP PROGRAMME', 'how-to-apply-as-a-mentee-or-mentor-for-the-ifpn-mentorship-programme', '<p><strong>Application Process</strong></p><p><strong>1. &nbsp;Eligibility Criteria</strong></p><ul><li>For Mentees:<ul><li>Must be a registered member of IFPN.</li><li>Should have a minimum educational qualification or experience in financial crime prevention, KYC, AML, or related fields.</li><li>Demonstrate a commitment to professional development and a willingness to learn.</li></ul></li><li>For Mentors:<ul><li>Must be a registered member of IFPN with substantial experience (typically 5+ years) in financial crime prevention or a related area.</li><li>Should possess strong leadership and communication skills.</li><li>Demonstrate a commitment to supporting and developing emerging professionals in the industry.</li></ul></li><li>&nbsp;</li></ul><p><strong>2. Application Steps</strong></p><ul><li>Online Application:<ul><li>Visit the IFPN website and navigate to the Mentorship Programme section.</li><li>Complete the online application form for either mentees or mentors, providing necessary information such as professional background, areas of expertise, and goals for the mentorship relationship.</li></ul></li><li>Submission:<ul><li>Submit the completed application form by the designated deadline. Ensure all required documents (e.g. CV, cover letter) are included.</li></ul></li></ul><p><strong>3. Matching Process</strong></p><ul><li>After the application deadline, the programme coordinators will review submissions and match mentees with suitable mentors based on shared interests, expertise, and goals.</li></ul><p><strong>4. Notification</strong></p><ul><li>Applicants will be notified via email regarding their acceptance into the programme and their assigned mentor or mentee.</li></ul><p><strong>5. Orientation Session</strong></p><ul><li>Both mentors and mentees will be invited to an orientation session to understand the programme structure, expectations, and guidelines</li><li>&nbsp;</li></ul><p><strong>IMPORTANT DATES</strong></p><p><strong>Application Opening Date:</strong> To be announced soon</p><p><strong>Application Deadline:</strong> To be announced soon</p><p><strong>Notification of Matches:</strong> To be announced soon</p><p><strong>Orientation Session: </strong>To be announced soon</p><p><strong>Benefits of Participating</strong></p><ul><li>Mentees: Gain guidance, networking opportunities, and insights into the industry.</li><li>Mentors: Enhance leadership skills and contribute to the development of future professionals.</li></ul><p>&nbsp;</p><p><i><strong>This structured approach ensures that both mentors and mentees have a rewarding experience, fostering a culture of learning and collaboration within the IFPN community.</strong></i></p><p>.</p>', '2024-11-05 07:50:30', '2024-11-05 08:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `members_subscription_fees`
--

CREATE TABLE `members_subscription_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members_subscription_fees`
--

INSERT INTO `members_subscription_fees` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'IFPN FEES STRUCTURE', 'ifpn-fees-structure', '<p>Fees Structure The fees for becoming a member of the&nbsp; Institute of Financial Crime and Fraud Prevention of Nigeria (IFPN), Institute of Financial Crime and Fraud Prevention (IFP), would typically vary based on the membership level and type of professional involvement. While specific fees depend on the structure of the organization, here\'s a general outline of how fees might be organized:<br>&nbsp;</p><p><strong>1.&nbsp; MEMBERSHIP APPLICATION FEES</strong></p><ul><li>Student Membership: ₦25,000 - ₦45,000 (One-time fee)</li><li>Associate Membership: ₦100,000 - ₦150,000 (One-time fee)</li><li>Full Membership: ₦150,000 - ₦200,000 (One-time fee)</li><li>Fellow Membership: ₦250,000 - ₦350,000 (One-time fee)</li></ul><p><strong>2.&nbsp; ANNUAL SUBSCRIPTION FEES</strong></p><ul><li>Student Members: ₦20,000 - ₦30,000 (Annual)</li><li>Associate Members: ₦30,000 - ₦50,000 (Annual)</li><li>Full Members: ₦80,000 - ₦100,000 (Annual)</li><li>Fellow Members: ₦100,000 - ₦200,000 (Annual)</li></ul><p><strong>3. EXAMINATION/CERTIFICATION FEES&nbsp;</strong></p><ul><li>Entry-level Certifications (KYC, AML): ₦50,000 - ₦70,000</li><li>Advanced Certifications (Financial Crime, Fraud Prevention, Compliance Management): ₦250,000 - ₦350,000</li></ul><p><strong>4.&nbsp; CPD (CONTINUING PROFESSIONAL DEVELOPMENT) FEES&nbsp;</strong></p><ul><li>Workshops/Seminars: ₦10,000 - ₦20,000 per session</li><li>Training Programs: ₦50,000 - ₦100,000</li></ul><p><strong>5.&nbsp; CORPORATE MEMBERSHIP FEES&nbsp;</strong></p><ul><li>Small Enterprises: ₦250,000 - ₦400,000 (Annual)</li><li>Medium-Large Enterprises: ₦500,000 - ₦1,000,000 (Annual)</li></ul><p><br>&nbsp;<strong>NOTE</strong>: <i>These are indicative fees that may change depending on the exact structure of the organization and the services provided to members.</i></p>', 'assets/images/membersSubscriptionFees/1730784800.png', '2024-11-05 04:33:20', '2024-11-06 11:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', '2024-10-08 08:18:50', '2024-10-08 08:18:50'),
(4, 'About us', 'about-us', '2024-10-08 08:21:06', '2024-10-08 08:21:06'),
(6, 'Membership', '#', '2024-10-08 08:24:29', '2024-11-05 12:19:14'),
(7, 'Certifications', '#', '2024-10-08 08:27:42', '2024-11-05 12:18:45'),
(15, 'Advocacy & Policy', '#', '2024-11-05 12:19:53', '2024-11-07 07:53:02'),
(16, 'Resource Center', '#', '2024-11-07 09:07:43', '2024-11-07 09:07:43'),
(17, 'Contact', 'contact', '2024-11-12 10:58:51', '2024-11-12 10:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_10_08_035736_create_contact_us_table', 2),
(3, '2024_10_08_040354_create_admins_table', 3),
(4, '2024_10_08_041650_create_services_table', 4),
(5, '2024_10_08_090522_create_menu_items_table', 5),
(6, '2024_10_08_091101_create_dropdown_items_table', 6),
(7, '2024_10_08_110112_create_core_values_table', 7),
(8, '2024_10_09_024545_create_vision_missions_table', 8),
(9, '2024_10_09_042007_create_industries_table', 9),
(10, '2024_10_10_053814_create_sociallinks_table', 10),
(11, '2024_10_10_054422_create_faqs_table', 11),
(12, '2024_10_24_213125_create_socialimpacts_table', 12),
(13, '2024_10_24_232026_create_careers_table', 13),
(14, '2024_09_23_040922_create_payment_models_table', 14),
(15, '2024_09_25_054212_create_comments_table', 14),
(16, '2024_09_26_193248_create_change_of_ownerships_table', 14),
(17, '2024_10_25_004102_create_contact_forms_table', 15),
(18, '2024_10_25_091101_create_about_us_table', 16),
(19, '2024_10_25_120301_create_consultants_table', 17),
(20, '2024_10_29_143834_create_core_activities_table', 18),
(21, '2024_10_30_132434_create_posts_table', 19),
(22, '2024_10_30_175025_create_governance_boards_table', 20),
(23, '2024_10_30_191821_create_members_benefits_table', 21),
(24, '2024_11_05_042816_create_members_overviews_table', 22),
(25, '2024_11_05_051757_create_members_subscription_fees_table', 23),
(26, '2024_11_05_054611_create_membership_tiers_table', 24),
(27, '2024_11_05_084449_create_members_programmes_table', 25),
(28, '2014_10_12_000000_create_users_table', 26),
(29, '2024_11_05_133749_create_programme_examinatios_table', 27),
(30, '2024_11_05_134505_create_programme_examinations_table', 28),
(31, '2024_11_05_145350_create_exam_requirements_table', 29),
(32, '2024_11_05_155415_create_membership_applications_table', 30),
(33, '2024_11_06_093110_create_events_table', 31),
(34, '2024_11_12_131340_create_testimonials_table', 32),
(35, '2024_11_13_122351_create_policies_governances_table', 33),
(36, '2024_11_13_125227_create_live_streams_table', 34),
(37, '2024_11_13_130455_create_live_streams_table', 35),
(38, '2024_11_14_061755_create_sliders_table', 36);

-- --------------------------------------------------------

--
-- Table structure for table `payment_models`
--

CREATE TABLE `payment_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `process_id` varchar(255) DEFAULT NULL,
  `process_type` varchar(255) DEFAULT NULL,
  `paymentReference` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amount` double(10,2) DEFAULT NULL,
  `trans_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies_governances`
--

CREATE TABLE `policies_governances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programme_examinations`
--

CREATE TABLE `programme_examinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programme_examinations`
--

INSERT INTO `programme_examinations` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'IFPN PROGRAMMES AND EXAMINATIONS', '<p><strong>1. Certification Programs</strong></p><ul><li><strong>Certified Financial Crime Prevention Specialist (CFCP)</strong><ul><li><strong>Overview</strong>: Designed for professionals seeking to deepen their expertise in financial crime prevention.</li><li><strong>Curriculum</strong>:<ul><li>Introduction to Financial Crime</li><li>Anti-Money Laundering (AML) Regulations</li><li>Know Your Customer (KYC) Processes</li><li>Fraud Detection and Prevention Techniques</li><li>Risk Assessment and Management</li><li>Cyber Security in Financial Services</li><li>Compliance Frameworks</li></ul></li></ul></li><li><strong>Assessment</strong>: Written examination and case study analysis.</li><li><strong>Certified Fraud Prevention Manager (CFPM)</strong><ul><li><strong>Overview</strong>: Aimed at professionals managing fraud prevention teams and initiatives.</li><li><strong>Curriculum</strong>:<ul><li>Fraud Risk Management</li><li>Investigation Techniques</li><li>Internal Controls and Auditing</li><li>Data Analytics for Fraud Detection</li><li>Digital Forensics in Fraud Investigations</li><li>Artificial Intelligence Applications in Fraud Detection</li><li>Ethics in Fraud Prevention</li></ul></li></ul></li><li><strong>Assessment</strong>: Practical examination and project submission.</li></ul><p><strong>2. Diploma Programs</strong></p><ul><li><strong>Diploma in Financial Crime and Fraud Prevention</strong></li><li><strong>Overview</strong>: A comprehensive program for those new to the field or seeking foundational knowledge.</li><li><strong>Curriculum</strong>:<ul><li>Overview of Financial Crime Types</li><li>Legal Frameworks and Regulations</li><li>Customer Due Diligence (CDD)</li><li>Emerging Trends in Financial Crime</li><li>Cyber Security Fundamentals</li><li>Communication and Reporting</li></ul></li><li><strong>Assessment</strong>: Multiple-choice examination, research / presentation and portfolio of assignments.<br>&nbsp;</li></ul><p><strong>3. Workshops and Short Courses</strong></p><ul><li><strong>Workshops on Emerging Financial Crime Trends</strong><ul><li>Topics include cryptocurrency fraud, cybercrime, and regulatory updates.</li></ul></li><li><strong>Short Courses on Specific Skills</strong><ul><li>Data Analysis for Financial Crime</li><li>Digital Forensics Techniques</li><li>AI Tools for Fraud Detection and Prevention</li></ul></li></ul><p><strong>4. Examinations Structure</strong></p><ul><li><strong>Format</strong>:<ul><li>Written examinations (multiple choice, short answer, essay)</li><li>Practical assessments (case studies, simulations)</li></ul></li><li><strong>Frequency</strong>:<ul><li>Examinations are held biannually or quarterly, depending on the program.</li></ul></li><li><strong>Duration</strong>:<ul><li>Ranging from 2 to 4 hours, depending on the complexity of the program.</li></ul></li></ul><p><strong>5.&nbsp; Accreditation and Recognition</strong></p><ul><li><strong>International Accreditation:</strong><ul><li>Partnering with recognized international bodies for accreditation of programs.</li></ul></li><li><strong>Membership Recognition:</strong><ul><li>Opportunities for members to earn continuing professional education (CPE) credits.</li></ul></li></ul><p><strong>6. Mentorship and Support</strong></p><ul><li><strong>Mentorship Program:&nbsp;</strong><ul><li>Pairing candidates with experienced professionals for guidance throughout their studies.</li></ul></li><li><strong>Resources:&nbsp;</strong><ul><li>Access to study materials, online forums, and practice exams.</li></ul></li></ul><p><strong>7. Evaluation and Feedback</strong></p><ul><li><strong>Feedback Mechanism:&nbsp;</strong><ul><li>Post-examination feedback sessions to discuss results and improvement areas.</li></ul></li><li><strong>Continuous Improvement:&nbsp;</strong><ul><li>Regular review and update of curriculum and assessment methods to ensure relevance and quality.</li></ul></li></ul><p>&nbsp;</p><p><i><strong>This structure ensures that the IFPN Programmes and Examinations remain relevant to the evolving landscape of financial crime prevention, integrating essential components like Cyber Security, Forensics, and Artificial Intelligence.</strong></i></p>', '2024-11-05 12:48:27', '2024-11-05 13:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `programme_examinatios`
--

CREATE TABLE `programme_examinatios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Digital Transformation Solution', 'digital-transformation', '<p>In today’s fast-paced world, digital transformation is no longer optional—it’s essential for businesses to remain competitive. At Infoscert, we help organizations reimagine their operations, enhance customer experiences, and embrace innovation through digital solutions that drive growth and agility.</p><p><strong>Our Digital Transformation Solutions Include:</strong></p><p><strong>Cloud Integration:</strong> Migrate systems and data to secure cloud platforms, improving scalability, flexibility, and collaboration.</p><p><strong>AI and Data Analytics:</strong> Leverage artificial intelligence and advanced analytics to gain insights, optimize decision-making, and automate processes.</p><p><strong>Process Automation:</strong> Automate manual tasks with robotic process automation (RPA), AI-driven bots, and workflow optimization to improve efficiency.</p><p><strong>Digital Platforms:</strong> Develop custom digital platforms for e-commerce, customer engagement, and internal business operations, tailored to your industry.</p><p><strong>Cybersecurity:</strong> Ensure robust protection for your digital assets through comprehensive cybersecurity frameworks, threat detection, and mitigation strategies.</p><p><strong>Impact:</strong><br>We help businesses transform into agile, data-driven organizations, unlocking new revenue streams, improving customer experiences, and building a future-ready digital infrastructure.</p>', 'services/1728361251.jpg', '2024-10-08 03:20:51', '2024-10-08 03:20:51'),
(2, 'Systems Integration Solution', 'systems-integration', '<p>Our core expertise lies in seamlessly integrating various technologies to create unified, efficient, and scalable systems for your business. Whether it’s across departments or across industries, we ensure that your technology systems work together to maximize performance and value.</p><p><strong>Our Systems Integration Solutions Include:</strong></p><p><strong>ERP Integration:</strong> Streamline operations by integrating enterprise resource planning (ERP) systems that manage finance, procurement, HR, and supply chain.</p><p><strong>Legacy Systems Modernization:</strong> Upgrade or replace outdated systems with modern, efficient solutions that enhance performance while preserving valuable data.</p><p><strong>API Integration:</strong> Connect diverse software applications using APIs to enable smooth data flow and better communication between systems.</p><p><strong>IoT Integration:</strong> Enable smart devices and sensors to work together for real-time monitoring, predictive maintenance, and data-driven decision-making.</p><p><strong>Cross-Industry Integration:</strong> From agriculture to telecom to public services, we integrate systems across sectors, enhancing collaboration and delivering end-to-end solutions.</p><p><strong>Impact:</strong><br>We enhance the operational efficiency and flexibility of your business by creating a cohesive ecosystem of systems that communicate seamlessly, drive automation, and improve decision-making.</p>', 'services/1728361324.jpg', '2024-10-08 03:22:04', '2024-10-08 03:22:04'),
(3, 'Cloud Solution', 'cloud-solutions', '<p>Cloud computing offers unprecedented scalability, flexibility, and cost-efficiency. Infoscert provides cloud solutions that are designed to enhance your organization’s capabilities while reducing infrastructure costs and complexity.</p><p><strong>Our Cloud Solutions Include:</strong></p><p><strong>Cloud Infrastructure as a Service (IaaS):</strong> Provision virtualized computing resources on-demand, allowing your organization to scale without the need for physical servers.</p><p><strong>Software as a Service (SaaS):</strong> Access cutting-edge software applications through cloud-based platforms that improve collaboration, efficiency, and accessibility.</p><p><strong>Cloud Storage &amp; Backup:</strong> Safeguard critical data with secure cloud storage solutions, ensuring easy recovery and high availability.</p><p><strong>Hybrid Cloud Solutions:</strong> Integrate public and private cloud environments for optimized flexibility and control, ensuring data sovereignty and compliance.</p><p><strong>Cloud Security Solutions:</strong> Ensure data protection and compliance with end-to-end cloud security measures, including encryption, identity management, and access controls.</p><p><strong>Impact:</strong><br>Our cloud solutions help businesses reduce costs, improve scalability, and foster innovation by leveraging the power of the cloud for critical operations and storage.</p>', 'services/1728361413.jpg', '2024-10-08 03:23:33', '2024-10-08 03:23:33'),
(4, 'IoT and Automation Solutions', 'iot-and-automation-solutions', '<p>The Internet of Things (IoT) and automation technologies are revolutionizing industries by enabling real-time data collection, predictive analytics, and process optimization. At Infoscert, we help businesses harness these technologies to improve efficiency and drive smarter decision-making.</p><p><strong>Our IoT and Automation Solutions Include:</strong></p><p><strong>Smart Sensors &amp; Devices:</strong> Deploy IoT devices to gather real-time data on operations, from environmental conditions in agriculture to machinery health in oil and gas.</p><p><strong>Industrial Automation:</strong> Implement automated production lines, logistics systems, and robotic technologies to improve efficiency, reduce errors, and lower costs.</p><p><strong>Remote Monitoring &amp; Control:</strong> Use IoT technologies for remote monitoring of assets, infrastructure, and operations across geographically dispersed locations.</p><p><strong>Predictive Maintenance:</strong> Leverage IoT and AI to predict equipment failure before it occurs, reducing downtime and maintenance costs.</p><p><strong>Home and Office Automation:</strong> Provide automation solutions for smart homes and businesses, from lighting and climate control to security systems and smart appliances.</p><p><strong>Impact:</strong><br>Our IoT and automation solutions empower organizations to make data-driven decisions, optimize asset utilization, and reduce costs by automating critical processes.</p>', 'services/1728361473.jpg', '2024-10-08 03:24:33', '2024-10-08 03:24:33'),
(5, 'Data Analytics & AI Solutions', 'data-analytics-ai-solutions', '<p>In the digital age, data is one of the most valuable assets a business can possess. At Infoscert, we help companies harness the power of data through advanced analytics and artificial intelligence to unlock insights, enhance decision-making, and drive growth.</p><p><strong>Our Data Analytics &amp; AI Solutions Include:</strong></p><p><strong>Business Intelligence (BI):</strong> Use BI tools to analyze data and create actionable insights that drive decision-making and optimize business processes.</p><p><strong>Predictive Analytics:</strong> Apply machine learning algorithms to predict future trends, customer behaviors, and operational challenges.</p><p><strong>AI-Powered Automation:</strong> Automate business processes and customer interactions using AI-driven chatbots, RPA, and natural language processing (NLP).</p><p><strong>Data Visualization:</strong> Transform complex data sets into intuitive, visual dashboards that allow for real-time performance tracking and analysis.</p><p><strong>Big Data Solutions:</strong> Develop scalable big data infrastructures that handle large volumes of structured and unstructured data, delivering deeper insights and better forecasting.</p><p><strong>Impact:</strong><br>By transforming data into actionable insights, we help businesses improve efficiency, make informed decisions, and stay ahead of the competition through AI-driven technologies.</p>', 'services/1728361523.jpg', '2024-10-08 03:25:23', '2024-10-08 03:25:23'),
(6, 'Enterprise Resource Planning (ERP)', 'enterprise-resource-planning-erp', '<p>An effective ERP system is the backbone of a well-run organization, streamlining operations and providing a single source of truth across departments. At Infoscert, we implement customized ERP solutions that empower businesses to optimize their workflows and drive operational excellence.</p><p><strong>Our ERP Solutions Include:</strong></p><p><strong>Custom ERP Implementation:</strong> Tailor ERP systems to meet the specific needs of industries such as agriculture, telecom, oil &amp; gas, and education.</p><p><strong>Finance &amp; Accounting Modules:</strong> Centralize your financial operations, ensuring transparency, compliance, and real-time visibility into financial performance.</p><p><strong>Supply Chain Management:</strong> Optimize inventory, procurement, and distribution through integrated supply chain modules that provide real-time data and automation.</p><p><strong>Human Resource Management (HRM):</strong> Streamline employee management with modules for payroll, attendance, talent acquisition, and performance tracking.</p><p><strong>Customer Relationship Management (CRM):</strong> Enhance customer engagement and sales with CRM modules that track interactions, automate marketing, and drive sales growth.</p><p><strong>Impact:</strong><br>Our ERP solutions provide businesses with the tools they need to optimize processes, enhance operational visibility, and make informed decisions across departments.</p>', 'assets/images/solution/1729803867.jpg', '2024-10-08 03:26:16', '2024-10-24 20:04:27'),
(7, 'Cybersecurity Solutions', 'cybersecurity-solutions', '<p>In an increasingly digital world, protecting your data and systems from cyber threats is crucial. Infoscert offers comprehensive cybersecurity solutions to ensure that your business remains secure, compliant, and resilient.</p><p><strong>Our Cybersecurity Solutions Include:</strong></p><p><strong>Network Security:</strong> Implement firewalls, intrusion detection systems, and advanced monitoring to secure your network infrastructure from cyber threats.</p><p><strong>Endpoint Security:</strong> Protect end-user devices, such as computers, mobile phones, and servers, with antivirus software, encryption, and access control.</p><p>&nbsp;</p><p><strong>Data Encryption &amp; Privacy:</strong> Secure sensitive data through encryption, ensuring compliance with data protection regulations and preventing unauthorized access.</p><p><strong>Incident Response &amp; Recovery:</strong> Develop robust incident response plans that minimize damage from security breaches and ensure swift recovery.</p><p><strong>Compliance Management:</strong> Ensure that your organization complies with industry regulations such as GDPR, HIPAA, and ISO standards through robust security frameworks.</p><p><strong>Impact:</strong><br>We safeguard your business from the growing threat of cyber-attacks by implementing proactive, multi-layered security solutions that ensure data integrity and regulatory compliance.</p>', 'assets/images/solution/1729803856.jpg', '2024-10-08 03:27:20', '2024-10-24 20:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `caption`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Empowering Financial Crime Prevention in Nigeria', '\"Join the movement to combat financial crime with the Institute of Financial Crime and Fraud Prevention of Nigeria (IFPN). Our programs equip professionals with essential tools and knowledge to make a meaningful impact.\"', 'assets/images/slider/1731575320-compportrait-professor-work-educational-system (1).jpg', '2024-11-14 05:46:42', '2024-11-14 08:08:40'),
(2, 'Certification and Training Programs', '\"IFPN offers specialized certifications, including Anti-Money Laundering (AML), Know Your Customer (KYC), and fraud prevention training, designed to advance expertise and maintain high standards within the industry.\"', 'assets/images/slider/1731568916.png', '2024-11-14 06:21:56', '2024-11-14 06:21:56'),
(3, 'Advancing Transparency and Governance', '\"Our commitment to transparency and governance is reflected in our partnerships with regulatory bodies and our rigorous governance framework. Together, we uphold integrity across Nigeria\'s financial sector.\"', 'assets/images/slider/1731570206.png', '2024-11-14 06:43:26', '2024-11-14 06:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE `sociallinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sociallinks`
--

INSERT INTO `sociallinks` (`id`, `facebook`, `twitter`, `whatsapp`, `instagram`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'www.facebook.com', 'www.twitter.com', 'www', 'instagram', 'linkedin', 'youtube', '2024-10-10 04:40:16', '2024-10-10 04:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `content`, `image`, `author_name`, `author_title`, `created_at`, `updated_at`) VALUES
(3, '<p>\"IFPN has provided me with the resources and tools I need to enhance my understanding of fraud prevention. The downloadable reports, webinars, and anti-fraud toolkits are excellent. I feel much more confident in my ability to handle complex fraud cases and contribute to the fight against financial crime in Nigeria.\"</p>', 'assets/images/testimonials/6733645671408.png', 'Chinonso O.', 'Financial Analyst', '2024-11-12 13:14:45', '2024-11-12 14:22:41'),
(4, '<p>Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor</p>', 'assets/images/testimonials/673364add28c2.png', 'Julian Waller edit', 'Madeson Jarvis eid', '2024-11-12 13:21:57', '2024-11-12 13:39:43'),
(5, '<p>\"I enrolled in the IFPN certification program and was impressed by how detailed and effective the training was. It gave me the practical skills to prevent financial crimes within my organization. The knowledge I gained has helped me strengthen our AML and KYC practices. I would recommend it to anyone in the financial sector.\"</p>', 'assets/images/testimonials/673370f39051c.png', 'Tunde F.', 'Risk Management Specialist', '2024-11-12 14:14:59', '2024-11-12 14:22:20'),
(6, '<p>\"As a corporate member, IFPN has played a pivotal role in empowering our team with the latest knowledge and tools on fraud prevention. Their continuous professional development (CPD) programs are invaluable in keeping our team updated with evolving regulations and compliance practices. We appreciate the Institute\'s commitment to excellence.\"</p>', 'assets/images/testimonials/673371a903491.png', 'Ngozi M.', 'Head of Compliance', '2024-11-12 14:18:01', '2024-11-12 14:20:57'),
(7, '<p>\"One of the things I appreciate most about IFPN is their transparency. They regularly provide annual reports and financial statements, which demonstrates their commitment to accountability. As a member, I have full confidence in the organization\'s leadership and its commitment to fostering a fraud-free financial system.\"</p>', 'assets/images/testimonials/673371f1b471e.png', 'Adebayo S.', 'Senior Financial Consultant', '2024-11-12 14:19:13', '2024-11-12 14:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kenneth Norton', 'taxoje@mailinator.com', NULL, '$2y$10$dILrGqXZXe16.v.rjUA04uA0DglMnLsARiqRvP0nNKFcLoC2dGMx2', NULL, '2024-11-05 10:36:54', '2024-11-05 10:36:54'),
(2, 'Zeph Phillips', 'zalyvyca@mailinator.com', NULL, '$2y$10$bmwTsmETMGluGkH7HSA/8ebo9VnmiWcKns0pAq/17RrRNtVNH519W', NULL, '2024-11-05 10:37:51', '2024-11-05 10:37:51'),
(3, 'Maxwell Keith', 'mahazyr@mailinator.com', NULL, '$2y$10$8HIa5dGpkgHdW8NXhqFCregHIqs./pkrO9bNpjAlXNNy3jcBm0BFG', NULL, '2024-11-05 10:38:46', '2024-11-05 10:38:46'),
(4, 'Claire Reid', 'tizucobori@mailinator.com', NULL, '$2y$10$xN4i0rH7d71OzWzyNGnq9eFn84icrtNlESxBZGg4U52ka5NDvbZ7C', NULL, '2024-11-05 10:39:59', '2024-11-05 10:39:59'),
(6, 'Chandler Mccray', 'eshanokpe@gmail.com', NULL, '$2y$10$pcAcbE3pmp/2MOxIRazVtezuU/SmFMqHaWsuy/BxTF/b/OnbmzScK', NULL, '2024-11-06 12:20:59', '2024-11-06 12:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `vision_missions`
--

CREATE TABLE `vision_missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mission` text NOT NULL,
  `mission_img` text NOT NULL,
  `vision` text NOT NULL,
  `vision_img` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vision_missions`
--

INSERT INTO `vision_missions` (`id`, `mission`, `mission_img`, `vision`, `vision_img`, `created_at`, `updated_at`) VALUES
(1, '<p>Our mission is to empower professionals with the tools, knowledge, and resources needed to prevent, detect, and combat financial crime and fraud. IFPN promotes a collaborative approach to tackling financial crime by enhancing industry-wide education, policy advocacy, and networking opportunities. Through our work, we aim to reduce financial crime, strengthen compliance frameworks, and support the growth of a fair and ethical financial environment.&nbsp;</p>', 'assets/images/mission/6705f1dfa5b4f.jpg', '<p>To be the foremost professional body in Nigeria and across Africa, providing leadership and innovation in the prevention of financial crime and fraud while ensuring the highest standards of integrity, transparency, and accountability in the financial sector. &nbsp;</p>', 'assets/images/vision/1728442789.jpg', '2024-10-09 01:59:49', '2024-10-29 10:37:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultants`
--
ALTER TABLE `consultants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_activities`
--
ALTER TABLE `core_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_values`
--
ALTER TABLE `core_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dropdown_items`
--
ALTER TABLE `dropdown_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dropdown_items_menu_item_id_foreign` (`menu_item_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_requirements`
--
ALTER TABLE `exam_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `governance_boards`
--
ALTER TABLE `governance_boards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_streams`
--
ALTER TABLE `live_streams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_applications`
--
ALTER TABLE `membership_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_tiers`
--
ALTER TABLE `membership_tiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_benefits`
--
ALTER TABLE `members_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_overviews`
--
ALTER TABLE `members_overviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_programmes`
--
ALTER TABLE `members_programmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_subscription_fees`
--
ALTER TABLE `members_subscription_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_models`
--
ALTER TABLE `payment_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies_governances`
--
ALTER TABLE `policies_governances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme_examinations`
--
ALTER TABLE `programme_examinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme_examinatios`
--
ALTER TABLE `programme_examinatios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vision_missions`
--
ALTER TABLE `vision_missions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultants`
--
ALTER TABLE `consultants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_activities`
--
ALTER TABLE `core_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `core_values`
--
ALTER TABLE `core_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dropdown_items`
--
ALTER TABLE `dropdown_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_requirements`
--
ALTER TABLE `exam_requirements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `governance_boards`
--
ALTER TABLE `governance_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `live_streams`
--
ALTER TABLE `live_streams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership_applications`
--
ALTER TABLE `membership_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership_tiers`
--
ALTER TABLE `membership_tiers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members_benefits`
--
ALTER TABLE `members_benefits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members_overviews`
--
ALTER TABLE `members_overviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members_programmes`
--
ALTER TABLE `members_programmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members_subscription_fees`
--
ALTER TABLE `members_subscription_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `payment_models`
--
ALTER TABLE `payment_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies_governances`
--
ALTER TABLE `policies_governances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `programme_examinations`
--
ALTER TABLE `programme_examinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programme_examinatios`
--
ALTER TABLE `programme_examinatios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vision_missions`
--
ALTER TABLE `vision_missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dropdown_items`
--
ALTER TABLE `dropdown_items`
  ADD CONSTRAINT `dropdown_items_menu_item_id_foreign` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

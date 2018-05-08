-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2018 at 10:53 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` longtext NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `content`, `type`) VALUES
(1, 'ABOUT US', '<p style=\"font-size: 16px; margin-bottom: 19px; line-height: 29px; color: #ffffff; font-family: \'Droid Serif\';\">Alumni Mentoring is an online service provided by Foundation for the Development of Multitalented Manpower (FDMM) and managed by DigiAfric Tech. Ltd. FDMM is a non-governmental organisation registered in Nigeria to promote the growth of a new multiskilled workforce among the youths so that they can become more valuable assets to themselves in particular and the society in general.</p>\r\n<p style=\"font-size: 16px; margin-bottom: 19px; line-height: 29px; color: #ffffff; font-family: \'Droid Serif\';\">The mentoring program is an initiative that is aimed at encouraging trusted and experienced alumni of secondary schools and higher institutions, to contribute to the personal and professional development of students from their alma mater through sharing of knowledge, experience, and expertise that they have acquired over the years. The mentor-mentee relationship that we are promoting is one that will bring about mutual benefits for both mentors and mentees and we encourage both parties to develop a relationship that is based on mutual trust and respect.</p>\r\n<p style=\"font-size: 16px; margin-bottom: 19px; line-height: 29px; color: #ffffff; font-family: \'Droid Serif\';\">In addition to the vast contributions usually made by alumni society to their alma mater including such things as renovation of buildings, donation of books, laboratory and sporting equipment, and donation of new buildings such as classrooms, libraries, laboratories etc, we are of the believe that, through mentoring, the alumni societies can also contribute towards the mental, social, and intellectual development of students from their alma mater.</p>\r\n<p style=\"font-size: 16px; margin-bottom: 19px; line-height: 29px; color: #ffffff; font-family: \'Droid Serif\';\">Other benefits that can be derived from the website include but not limited to free career and educational counselling, career guidance, university course guidance, opportunity for professional networking, ability to ask course and career-related questions and get answers from the right people, volunteering, access to career information and job postings, and ability to attend free events. We strongly encourage everyone to take full advantage and make good use of all these benefits.</p>', 'about'),
(2, 'BENEFIT FOR MENTORS', '<p class=\"aboutus-content\" style=\"font-size: 16px; margin-bottom: 19px; line-height: 29px; color: #ffffff; font-family: \'Droid Serif\';\">While mentors are expected to invest their time in developing mentees personally and professionally, the benefit from the relationship is never one-way. Being involved in mentoring also provides considerable benefits to mentors.</p>\r\n<p class=\"aboutus-content\" style=\"font-size: 16px; margin-bottom: 19px; line-height: 29px; color: #ffffff; font-family: \'Droid Serif\';\">Some notable benefits to mentors include: an opportunity to give back to the mentees, their alma mater, and the society; strengthens the mentor\'s interpersonal relationship skills and grows leadership capacity; and personal satisfaction of sharing their skills and experience with mentees.</p>', 'mentor'),
(3, 'BENEFIT FOR MENTEES', '<p style=\"font-size: 16px; margin-bottom: 19px; line-height: 29px; color: #ffffff; font-family: \'Droid Serif\';\">The opportunity to be mentored by experienced and trusted alumni is a valuable and effective development a mentee can get. Everyone you will ever meet knows something that you don\'t. So, respect their knowledge. Learn from them. It will bring out the best in both of you.</p>\r\n<p style=\"font-size: 16px; margin-bottom: 19px; line-height: 29px; color: #ffffff; font-family: \'Droid Serif\';\">Some key benefits to mentees include increase self-confidence, opportunity to develop new skills, learn to take better control of your career, exposure to new ideas and ways of thinking, and opportunity for important professional networking contact.</p>', 'mentee');

-- --------------------------------------------------------

--
-- Table structure for table `am_users`
--

CREATE TABLE `am_users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `type` int(1) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `mentor` int(1) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `am_users`
--

INSERT INTO `am_users` (`id`, `fname`, `lname`, `email`, `pwd`, `type`, `date`, `address`, `state`, `country`, `mentor`, `img`) VALUES
(1, 'Niyi', 'Jacobs', 'admin@admin.com', '93279e3308bdbbeed946fc965017f67a', 1, '2017-07-19', '', 0, 0, 2, ''),
(6, 'Olufemi', 'Oluoje', 'kobomarun@gmail.com', '93279e3308bdbbeed946fc965017f67a', 1, '0000-00-00', '', 0, 0, 3, 'Rasheed.jpg'),
(10, 'Philips', 'Badejo', 'me@aol.com', '93279e3308bdbbeed946fc965017f67a', 1, '0000-00-00', '', 0, 0, 1, ''),
(13, 'Rasheedat', 'Ismail', 'rs@yahoo.com', '93279e3308bdbbeed946fc965017f67a', 1, '2017-10-09', '', 0, 0, 1, ''),
(16, 'Ade', 'Ori-ade', 'oriade@yahoo.com', '93279e3308bdbbeed946fc965017f67a', 1, '2017-10-09', '', 0, 0, 1, ''),
(17, 'Layo', 'Sayo', 'oriade@yahoo.com', '93279e3308bdbbeed946fc965017f67a', 1, '2017-10-09', '', 0, 0, 1, ''),
(18, 'Samson', 'Ogunjobi', 'uche_o@yahoo.com', '93279e3308bdbbeed946fc965017f67a', 1, '2017-10-09', '', 0, 0, 1, ''),
(19, 'Musibau', 'Adebayo', 'mus@aol.com', '93279e3308bdbbeed946fc965017f67a', 1, '0000-00-00', '', 0, 0, 1, ''),
(21, 'MEntor', 'Oluoje', 'bk@aol.com', 'b59c67bf196a4758191e42f76670ceba', 0, '0000-00-00', '', 0, 0, 1, ''),
(22, 'Adetola', 'Michele', 'kobomarun@vv.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 0, '0000-00-00', '', 0, 0, 2, ''),
(23, 'Rasheed', 'Adesokan', 'adesokanrasheed@yahoo.co.uk', '93279e3308bdbbeed946fc965017f67a', 0, '0000-00-00', '', 0, 0, 3, 'Rasheed.jpg'),
(24, 'Lawal', 'Abiodun', 'adesokanrash@yahoo.co.uk', '93279e3308bdbbeed946fc965017f67a', 0, '0000-00-00', '', 0, 0, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `postby` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `img`, `date`, `postby`, `catid`, `status`) VALUES
(1, 'First Blog Post', '<p>Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;</p>', 'img21.png', 'Jan, 7, 2018', 0, 0, 1),
(2, 'First Blog Post', '<p>Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;Lorem ipsum lobatan&nbsp;</p>', 'img22.png', 'Jan, 7, 2018', 0, 0, 1),
(3, 'New Medicine Vacine', '<p>lotemkdvbdvbdivbddjvbdjvbdbvjd&nbsp; &nbsp;dsvdivbidbvdibvdivbalbsabkvdd dovndlotemkdvbdvbdivbddjvbdjvbdbvjd&nbsp; &nbsp;dsvdivbidbvdibvdivbalbsabkvdd dovndlotemkdvbdvbdivbddjvbdjvbdbvjd&nbsp; &nbsp;dsvdivbidbvdibvdivbalbsabkvdd dovndlotemkdvbdvbdivbddjvbdjvbdbvjd&nbsp; &nbsp;dsvdivbidbvdibvdivbalbsabkvdd dovndlotemkdvbdvbdivbddjvbdjvbdbvjd&nbsp; &nbsp;dsvdivbidbvdibvdivbalbsabkvdd dovndlotemkdvbdvbdivbddjvbdjvbdbvjd&nbsp; &nbsp;dsvdivbidbvdibvdivbalbsabkvdd dovndlotemkdvbdvbdivbddjvbdjvbdbvjd&nbsp; &nbsp;dsvdivbidbvdibvdivbalbsabkvdd dovndlotemkdvbdvbdivbddjvbdjvbdbvjd&nbsp; &nbsp;dsvdivbidbvdibvdivbalbsabkvdd dovndlotemkdvbdvbdivbddjvbdjvbdbvjd&nbsp; &nbsp;dsvdivbidbvdibvdivbalbsabkvdd dovndlotemkdvbdvbdivbddjvbdjvbdbvjd&nbsp; &nbsp;dsvdivbidbvdibvdivbalbsabkvdd dovndlotemkdvbdvbdivbddjvbdjvbdbvjd&nbsp; &nbsp;dsvdivbidbvdibvdivbalbsabkvdd dovnd</p>', 'Screen_Shot_2017-11-30_at_5_07', 'Jan, 7, 2018', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Medicine', 'All medicine post here'),
(2, 'Engineering', '0');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `authority` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `userid`, `name`, `authority`) VALUES
(3, 6, 'MSSE', 'Microsoft'),
(4, 23, 'Prince 2', 'AXELOS, UK'),
(5, 23, 'BCS', 'Axelos UAE'),
(6, 24, 'Prince2', 'BCS'),
(7, 24, '', ''),
(8, 24, 'Prince 2', 'Axelos'),
(9, 23, 'Prince2', 'Axelos'),
(10, 6, 'vlssslv', 'acclmalmca'),
(11, 6, 'lxvmlxmxl', 'vmslslvsl'),
(12, 6, 'lsvlmslvsm', 'slsvvmlms'),
(13, 6, 'svlsmlmvslvm', 'lsvmlsmvs'),
(14, 6, 'svlmsmv', 'sslvmsmv'),
(15, 6, 'spksfkp', 'SMSVS');

-- --------------------------------------------------------

--
-- Table structure for table `couse_guide`
--

CREATE TABLE `couse_guide` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `date` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `catid` int(11) NOT NULL,
  `tab1` text NOT NULL,
  `tab1_content` longtext NOT NULL,
  `tab2` text NOT NULL,
  `tab2_content` longtext NOT NULL,
  `tab3` text NOT NULL,
  `tab3_content` longtext NOT NULL,
  `tab4` text NOT NULL,
  `tab4_content` longtext NOT NULL,
  `tab5` text NOT NULL,
  `tab5_content` longtext NOT NULL,
  `tab6` text NOT NULL,
  `tab6_content` longtext NOT NULL,
  `tab7` text NOT NULL,
  `tab7_content` longtext NOT NULL,
  `tab8` text NOT NULL,
  `tab8_content` longtext NOT NULL,
  `tab9` text NOT NULL,
  `tab9_content` longtext NOT NULL,
  `type` varchar(10) NOT NULL,
  `postby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `couse_guide`
--

INSERT INTO `couse_guide` (`id`, `title`, `description`, `date`, `img`, `status`, `catid`, `tab1`, `tab1_content`, `tab2`, `tab2_content`, `tab3`, `tab3_content`, `tab4`, `tab4_content`, `tab5`, `tab5_content`, `tab6`, `tab6_content`, `tab7`, `tab7_content`, `tab8`, `tab8_content`, `tab9`, `tab9_content`, `type`, `postby`) VALUES
(1, 'Electrical Engineer: What they do and how you can become qualified in Nigeria', '<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\"><span class=\"bold\">WHAT IS CIVIL ENGINEERING?</span></p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Civil engineering is an engineering discipline that deals with the design, construction, and supervision of construction project in the public and private sector. Some of the infrastructures and construction work that are constructed by civil engineers include buildings, bridges, railways, roads, dams, canals, energy supply, airports, water supply, and waste management systems. It is also about maintaining these infrastructures and adapting them to meet challenges such as growth in population and demand, natural disaster, and also climate change.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">There are two variants of civil engineers. The consulting civil engineers who generally focus on the planning and designing aspect of a construction project. They spend most of their time in the office and also liaising with clients to try to understand the requirements for the project. The second type is contracting civil engineers and what they do is turn the plan and design prepared by consulting civil engineers into reality. They carry out the actual construction work by translating what is in the plan and design into reality.</p>', 'Dec, 30, 2017', '001computer.jpg', 1, 0, 'Entry Requirement', '<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB).</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'A Day in Life of Civil Engineer', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Top Employers', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Additional Qualification', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'What you will do', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Salary Ranges', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations.</p>', 'Other Ways', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', '', '', '', '', 'career', 6),
(2, 'Financial Accountant: What they do and how you can become qualified in Nigeria', '<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Entrepreneuship is a whatever aster&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB).</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Dec, 30, 2017', '001accountant.png', 1, 0, 'Becoming an Entrepreneur', '<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Steps to Take', '<p>In becoming entrepreneur, Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences</p>', 'What to do', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'More resources for you', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Events to attend', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', '', '', '', '', '', '', '', '', 'career', 6),
(3, 'Computer Engineer: What they do and how you can become qualified in Nigeria', '<h3>WHO IS A DATA SCIENTIST</h3>\r\n<p>Civil engineering is an engineering discipline that deals with the design, construction, and supervision of construction project in the public and private sector. Some of the infrastructures and construction work that are constructed by civil engineers include buildings, bridges, railways, roads, dams, canals, energy supply, airports, water supply, and waste management systems. It is also about maintaining these infrastructures and adapting them to meet challenges such as growth in population and demand, natural disaster, and also climate change.</p>\r\n<p>There are two variants of civil engineers. The consulting civil engineers who generally focus on the planning and designing aspect of a construction project. They spend most of their time in the office and also liaising with clients to try to understand the requirements for the project. The second type is contracting civil engineers and what they do is turn the plan and design prepared by consulting civil engineers into reality. They carry out the actual construction work by translating what is in the plan and design into reality.</p>', 'Dec, 30, 2017', '001electrical.jpg', 1, 0, 'Entry Requirement', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'A Day in Life of Civil Engineer', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Top Employers', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Additional Qualification', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'What you will do', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Salary Ranges', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations.</p>', 'Other Ways', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'How to become one', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', '', '', 'career', 6),
(4, 'Medical Doctor: What they do and how you can become qualified in Nigeria', '<h3>Teaching as a Profession</h3>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Entrepreneuship is a whatever aster&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Dec, 30, 2017', '001medicine.jpg', 1, 0, 'Becoming an Entrepreneur', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Steps to Take', '<p>In becoming entrepreneur, Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences</p>', 'What to do', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'More resources for you', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Events to attend', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', '', '', '', '', '', '', '', '', 'career', 6),
(5, 'Computer Engineer: What they do and how you can become qualified in Nigeria', '<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Teaching as a Profession</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Entrepreneuship is a whatever aster&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB).</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Dec, 30, 2017', '001electrical.jpg', 1, 0, 'Becoming an Entrepreneur', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Steps to Take', '<p>In becoming entrepreneur, Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences</p>', 'What to do', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'More resources for you', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Events to attend', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', '', '', '', '', '', '', '', '', 'career', 6);
INSERT INTO `couse_guide` (`id`, `title`, `description`, `date`, `img`, `status`, `catid`, `tab1`, `tab1_content`, `tab2`, `tab2_content`, `tab3`, `tab3_content`, `tab4`, `tab4_content`, `tab5`, `tab5_content`, `tab6`, `tab6_content`, `tab7`, `tab7_content`, `tab8`, `tab8_content`, `tab9`, `tab9_content`, `type`, `postby`) VALUES
(6, 'Medical Doctor: What they do and how you can become qualified in Nigeria', '<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Teaching as a Profession</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Entrepreneuship is a whatever aster&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry.</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB).</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Dec, 30, 2017', '001accountant.png', 1, 0, 'Becoming an Entrepreneur', '<p>Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Steps to Take', '<p>In becoming entrepreneur, Civil engineers need a bachelor&rsquo;s degree (BSc or BEng). Master&rsquo;s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor&rsquo;s degree at the university through direct entry. To stand a good chance of getting a job after graduation, it is advisable to work hard towards making a good result at the end of your degree. A first class or upper second class are both achievable and nothing stops you from aiming for this. Before you can be admitted into any higher institutions in Nigeria to study civil engineering you must have passed the West African Examinations Council(WAEC) and the Unified Tertiary Matriculation Examinations (UTME) popularly known as Joint Admission Matriculation Board (JAMB). After every UTME, the examining board JAMB will publish cut-off marks for different courses. Note that this cut-off is just the minimum pass mark fixed by JAMB, each institution can set their own cut-off depending on the number of demands for the course by prospective students. As a civil engineer, you could find yourself working in one or more of these specialist areas of engineering: Structural &ndash; dams, buildings, offshore platforms and pipelines Geotechnical &ndash; mining, earthworks and construction foundations. Environmental &ndash; water supply networks, drainage, flood barriers and waste management system Transportation &ndash; bridges, tunnel, roads, railways, canals and airports Maritime &ndash; ports, harbours and sea defences</p>', 'What to do', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'More resources for you', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', 'Events to attend', '<p>You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care. Also, you may receive additional payments for working overtime and for lodgings.</p>', '', '', '', '', '', '', '', '', 'career', 6),
(13, ' How to Study Medicine in London', '<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Medicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine:</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in London</p>', 'Dec, 30, 2017', '001medicine.jpg', 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'career', 6),
(14, 'How to Study Medicine in London', '<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">Medicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine:</p>\r\n<p style=\"font-size: 15px; margin-bottom: 25px; line-height: 27px; color: #000000; font-family: \'Roboto Slab\';\">How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in LondonMedicine: How to Study Medicine in London</p>', 'Dec, 30, 2017', '001computer.jpg', 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'career', 6);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `field` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `awards` longtext NOT NULL,
  `activities` longtext NOT NULL,
  `type` varchar(20) NOT NULL,
  `mentor` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `userid`, `school_name`, `degree`, `field`, `year`, `awards`, `activities`, `type`, `mentor`) VALUES
(14, 19, 'Mafoluku Grammar School', 'SSCE', 'Physics', '1996 to 1997', '', 'Reading', 's', 1),
(15, 19, 'Lagos State Polytechnic', 'HND', 'Accounting', '1964 to 1969', '', '', 't', 1),
(16, 19, 'University London, UK', 'LLB', 'Law', '1997 to 1999', 'no', 'No', 'm', 1),
(17, 1, 'Mafoluku Grammar School', 'Msc', 'Bsc', '2000', '', '', 's', 1),
(20, 1, 'Igbinedhon University', 'MSy', 'Yoruba', '1998 to 1999', '', '', 'm', 0),
(21, 23, 'Mafoluku Grammar School', '', '', '1989 to 1991', 'Art & Craft', 'Football, Volleyball', 's', 0),
(22, 23, 'LAUTECH', '', '', '1992 to 1999', '', '', 't', 0),
(23, 23, 'Government College Ibadan', 'SSCE', 'Science', '1971 to 1979', 'Best Graduating Student. Prefectship Award.', 'Football, Volley Ball, Cricket, Hockey, Athletic', 's', 0),
(24, 24, 'Bolade Grammar School', 'SSCE', '', '1999 to 1993', 'Fine Art Awar', 'Football', 's', 0),
(25, 24, 'Oluyole High School', 'BSC', 'Medicine', '1994 to 1997', '', '', 't', 0),
(26, 23, 'Wesley College of Science', 'SSCE', 'Science', '2015 to 2018', 'Quiz Club', 'Football', 's', 0),
(27, 23, 'Mafoluku Grammar School', 'SSCE', 'Science', '1919 to 1919', '', '', 's', 0),
(28, 23, 'LAUTECH', 'BSc. Elect/Elect', 'Electronic and Electrical Engineering', '1919 to 1920', '', '', 't', 0),
(29, 23, 'City Uni', 'MSc.', 'Telecomm', '1919 to 1920', '', '', 'm', 0),
(30, 23, 'City University', 'PhD', 'Data Science', '1920 to 1921', '', '', 'd', 0),
(32, 6, 'Mafoluku Grammar School', 'SSCE', 'Scence Student', '2013 to 2017', 'jsbjsbcjs', 'vchsvchsv', 's', 3),
(33, 6, 'Califonia University ', 'Bsc', 'Engineering', '2012 to 2018', 'Awards', 'Nothing more', 't', 3),
(34, 6, 'Doctor School International', 'Dr', 'Doctor', '1999 to 2018', '', '', 'd', 3),
(36, 6, 'Ibadan High School', 'SSCE', 'Science', '1992 to 1997', '', '', 's', 3);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `city` varchar(20) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `company` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `frm` varchar(20) NOT NULL,
  `too` varchar(20) NOT NULL,
  `type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `userid`, `title`, `company`, `location`, `frm`, `too`, `type`) VALUES
(5, 6, 'Frontend Engineer', 'Craft Turf UK', 'Lagos Nigeria', '', '', ''),
(6, 6, 'Web Developer', 'Softvision Professionals', 'Lagos', '1993', '1997', 'p'),
(7, 19, 'Plumbering', 'NIIT Pluber', 'UK', '1999', '1999', 'r'),
(8, 23, 'Digital Business Analyst', 'DigiAfric Technology Limited', 'Lagos', '2018', '2011', ''),
(9, 23, '', '', 'Lagos', '', '', ''),
(10, 23, 'Project Manager', 'DigiAfric Limited', 'Lagos', '1986', '1991', 'p'),
(11, 23, '', '', 'Lagos', '', '', ''),
(12, 24, '', '', '', '', '', 'r'),
(13, 24, 'Project Admin', 'Lagos State', 'Lagos', '1997', '1999', 'r'),
(14, 23, 'Nurse', 'DigiAfric Hospital', 'Ibadan', '2018', '2015', 'r'),
(15, 23, 'Engineer', 'DigiAfric Technology Limited', 'London', '1919', '1919', 'r'),
(16, 23, 'Project Manager', 'DigiAfric Limited', 'Lagos', '1919', '1923', 'p'),
(17, 6, 'Software Engineer and Trainer', 'Craft Turf Ltd', 'United Kingdom', '2012', '2016', 'r'),
(20, 6, 'Hello Dr', 'skffnsoj', 'kvnks1ssknks', '1999', '2018', 'p'),
(21, 6, 'Recent dr', 'dvndn', 'dovodm', '1999', '1996', 'r');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(200) NOT NULL,
  `img` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `text`, `img`, `link`) VALUES
(1, 'ALUMNI MENTORING', 'Free professional mentoring delivered by experienced alumni mentors.', 'alumnimentor.jpg', 'mentors'),
(2, 'FREE COUNSELLING', 'Get free career & educational counselling from experienced counsellors.', 'careercounselling.jpg', 'pages/free_counselling'),
(3, 'CAREER GUIDANCE', 'Use our free career guide to decide the best career choice for you.', 'careerguide.jpg', 'career_guide'),
(4, 'COURSE GUIDANCE', 'Learn what it takes to study a particular course at a particular institution.', 'CourseGuide.png', 'course_guide'),
(5, 'CAREER NETWORKING', 'Networking that can expose you to great career opportunities.', 'careernetwork.jpg', 'mentors'),
(6, 'QUESTIONS & ANSWERS', 'Get right answers for all your career & course-related questions.', 'qanda.jpg', ''),
(7, 'JOB BOARD', 'Search for part-time, volunteering, work experience, & graduate jobs.', 'jobboard.jpg', ''),
(8, 'CAREER INFO', 'Free career info on interview skills, study abroad, scholarships etc.', 'careerinfo.jpg', 'blog'),
(9, 'FREE CAREER EVENTS', 'Free conferences, networking events, life skills & soft skills training etc.', 'careerevents.jpg', 'events');

-- --------------------------------------------------------

--
-- Table structure for table `footermenu`
--

CREATE TABLE `footermenu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footermenu`
--

INSERT INTO `footermenu` (`id`, `name`, `url`) VALUES
(1, 'About us', ''),
(2, 'Contact us', '/pages/contact'),
(3, 'Support', '/pages/support'),
(4, 'Blog', '/blog'),
(5, 'Job Board', ''),
(6, 'Browse Events', '/events'),
(7, 'Browse Mentors', '/mentors'),
(8, 'Browse Mentees', '/mentees'),
(9, 'Free Counselling', '/pages/free_counselling'),
(10, 'Free Mentorship', '/pages/free_counselling'),
(11, 'Course Guides', '/course_guide'),
(12, 'Career Guides', '/career_guide'),
(13, 'Ask A Question', ''),
(14, 'Work & Study Abroad', '');

-- --------------------------------------------------------

--
-- Table structure for table `freecounsel`
--

CREATE TABLE `freecounsel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `call` varchar(12) NOT NULL,
  `their_name` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `their_email` varchar(50) NOT NULL,
  `their_phone` varchar(15) NOT NULL,
  `position` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `state` varchar(20) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freecounsel`
--

INSERT INTO `freecounsel` (`id`, `name`, `email`, `phone`, `call`, `their_name`, `relationship`, `their_email`, `their_phone`, `position`, `age`, `type`, `gender`, `state`, `comment`) VALUES
(1, 'Olufemi Oluoje', 'kobomarun@gmail.com', '08023584566', 'morningwend', 'Ade Muyiwa', '', 'ademuyisco@aol.com', '09088553344', 'employed', 0, 'youth', 'male', 'Lagos', 'Contact him immediately. He needs your help'),
(2, 'Layo Abbas', 'kobomarun@gmail.com', '07044653321', 'anytime', '', '', '', '', 'university', 0, 'educational', 'female', 'Akwa Ibom', 'Just talk to him.\r\nThanks'),
(3, 'Layo Abbas', 'kobomarun@gmail.com', '07044653321', 'anytime', '', '', '', '', 'university', 0, 'educational', 'female', 'Akwa Ibom', 'Just talk to him.\r\nThanks');

-- --------------------------------------------------------

--
-- Table structure for table `membership_cert`
--

CREATE TABLE `membership_cert` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership_cert`
--

INSERT INTO `membership_cert` (`id`, `name`, `url`, `level`, `userid`) VALUES
(1, 'Rotaract Club of Nigeria', 'no url', 'Member', 6),
(2, 'IEE', '', 'Associate', 23),
(3, 'IEE', '', 'Associate', 23),
(4, 'Softvision', 'url.com', 'AAA', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mentor_list`
--

CREATE TABLE `mentor_list` (
  `id` int(11) NOT NULL,
  `mentorid` int(11) NOT NULL,
  `menteeid` int(11) NOT NULL,
  `confirmed` int(1) NOT NULL,
  `disabled` int(1) NOT NULL,
  `skul_type` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`) VALUES
(2, 'Mentorship', ''),
(3, 'Career Info', ''),
(4, 'Blog', '/blog'),
(5, 'Free Counselling', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `from_userid` int(11) NOT NULL,
  `to_userid` int(11) NOT NULL,
  `from_msg` longtext,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_userid`, `to_userid`, `from_msg`, `time`) VALUES
(118, 6, 1, 'Hello Mr Niyi,\r\nMay name is olufemi. I will like you to mentor me\r\n\r\nThanks', 'February, 6, 2018'),
(119, 1, 6, 'Hello Femi.', 'February, 6, 2018'),
(120, 6, 1, 'Yes, sir. how are you', 'February 6, 2018'),
(121, 6, 1, 'hope you got my message last time', 'February 6, 2018'),
(122, 6, 1, 'Hello, are you there?', 'February 6, 2018'),
(123, 6, 1, 'Helloo', 'February 6, 2018'),
(124, 6, 1, 'Hello', 'February 6, 2018'),
(125, 6, 1, 'lxmlmxvx', 'February 8, 2018'),
(126, 6, 1, 'hh', 'February 8, 2018'),
(127, 6, 1, 'hello\n\n', 'February 8, 2018'),
(128, 6, 1, 'so what is this\n', 'February 8, 2018'),
(129, 6, 1, 'hello', 'February 8, 2018'),
(130, 6, 1, 'how far\n', 'February 8, 2018'),
(131, 6, 1, 'hello \nTGIF', 'February 9, 2018'),
(132, 6, 1, '', 'February 9, 2018'),
(133, 6, 1, 'helloo', 'March 3, 2018'),
(134, 6, 1, 'svknsvs', 'March 3, 2018'),
(135, 1, 6, 'This is Niyi', 'March 3, 2018'),
(136, 6, 1, 'This is Femi', 'March 3, 2018'),
(137, 6, 1, 'ok. Niyi', 'March 3, 2018'),
(138, 6, 1, 'so', 'March 3, 2018'),
(139, 6, 1, 'Hello Ni\n', 'March 3, 2018'),
(140, 1, 6, 'This is a new one from Niyi', 'March 3, 2018'),
(141, 1, 6, 'ok Rasheed', 'March 3, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `personal_summary`
--

CREATE TABLE `personal_summary` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `summary` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_summary`
--

INSERT INTO `personal_summary` (`id`, `userid`, `linkedin`, `twitter`, `summary`) VALUES
(13, 6, 'http:/linkedin.com/olufemi.oluoje', 'http://twitter.com/olufemi_unique', 'My name is Olufemi...I am an easy going person. I love to meet new people. i am passion about growing daily with people aound me,also mentoring young Nigerians whowant to make in it life'),
(14, 19, 'nop', 'nop', 'I love this website'),
(15, 23, 'www.linkedin.com/abiodunlawal', '', 'My name is Adesokan Rasheed and I am a graduate of Mafoluku Grammar School, Lagos.'),
(16, 24, 'www.linkedin.com/abiodunlawal', 'www.twitter.com/abiodunlawal', 'I am running a test for both Mentor and Mentee. I want to know what happens if I join as a mentor and mentee.');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sec_schools`
--

CREATE TABLE `sec_schools` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_schools`
--

INSERT INTO `sec_schools` (`id`, `name`, `city`, `state`, `type`) VALUES
(1, 'Mafoluku Grammar School', 'Mafoluku', 'Lagos', 'public'),
(2, 'Government College ', 'Ibadan', 'Oyo', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `skills` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(130) NOT NULL,
  `cta` varchar(20) NOT NULL,
  `link` text NOT NULL,
  `classname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `img`, `cta`, `link`, `classname`) VALUES
(5, 'My Career, My Life, My Choice.', 'Whether you desire to study in or out of Nigeria or aspire to become a farmer, doctor or an engineer, we have well researched information that will guide you all the way through your career. Sign up now', 'carousel_1100B.jpg', 'Find out more', '#', 'active'),
(6, 'The Support That Shape Me ', 'My mentor sees more talent and ability within me than I see in myself, and he helps bring it out of me. With the support of my mentor, I now feel confident and in full control of my career. Find out more up', 'carousel_1100A1.jpg', 'Find out more', '#', '');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `link`, `img`, `status`) VALUES
(1, 'Facebook', 'alumnimenitoring', '01followfacebook.png', 1),
(2, 'GooglePlus', '#', '01followgoogle-plus.png', 1),
(3, 'Twitter', '#', '01followtwitter.png', 1),
(4, 'Youtube', '#', '01followyoutube.png', 1),
(5, 'linkedln', '#', '01followlinkedin.png', 1),
(6, 'Instagram', '#', '01followinstagram.png', 1),
(7, 'Tumblr', '#', '01followtumblr.png', 1),
(8, 'WhatsApp', '#', '01followwhatsapp.png', 1),
(9, 'Telegram', '09023445566', '01followtelegram.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `parentid`, `name`, `url`) VALUES
(1, 2, 'Browse Mentor', '/mentors'),
(2, 2, 'Browse Mentees', '/mentees'),
(3, 3, 'Career Guide', '/career_guide'),
(4, 3, 'Course Guide', '/course_guide'),
(5, 5, 'Career Counselling', '#'),
(6, 5, 'Education & School Counselling', '#');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `content`, `type`) VALUES
(1, 'olufemiunique@yahoo.com', 'email'),
(2, '08023584566', 'phone');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `tw` varchar(50) NOT NULL,
  `gplus` varchar(50) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `fb`, `tw`, `gplus`, `img`) VALUES
(1, 'Olufemi Oluoje', 'Web developer', 'http://facebook', 'http://teittwe', 'http://googleplus', ''),
(2, 'Kehinde Adelabu', 'Operation Manager', 'http://facebook', 'http://teittwe', 'http://googleplus', ''),
(3, 'Timi Raymond', 'Marketer', 'http://facebook', 'http://teittwe', 'http://googleplus', ''),
(4, 'Chidi Emeka', 'CEO', 'http://facebook', 'http://teittwe', 'http://googleplus', '');

-- --------------------------------------------------------

--
-- Table structure for table `uni_schools`
--

CREATE TABLE `uni_schools` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uni_schools`
--

INSERT INTO `uni_schools` (`id`, `name`, `city`, `state`, `type`) VALUES
(1, 'Abubakar Tafawa Balewa University', 'Bauchi', 'Bauchi', 'federal'),
(2, 'Ahmadu Bello University', 'Zaria', 'Kaduna', 'federal'),
(3, 'Federal University', ' Birnin Kebbi', 'Kebbi', 'federal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `am_users`
--
ALTER TABLE `am_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couse_guide`
--
ALTER TABLE `couse_guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footermenu`
--
ALTER TABLE `footermenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freecounsel`
--
ALTER TABLE `freecounsel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_cert`
--
ALTER TABLE `membership_cert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor_list`
--
ALTER TABLE `mentor_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_summary`
--
ALTER TABLE `personal_summary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec_schools`
--
ALTER TABLE `sec_schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_schools`
--
ALTER TABLE `uni_schools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `am_users`
--
ALTER TABLE `am_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `couse_guide`
--
ALTER TABLE `couse_guide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `footermenu`
--
ALTER TABLE `footermenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `freecounsel`
--
ALTER TABLE `freecounsel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `membership_cert`
--
ALTER TABLE `membership_cert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mentor_list`
--
ALTER TABLE `mentor_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `personal_summary`
--
ALTER TABLE `personal_summary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `uni_schools`
--
ALTER TABLE `uni_schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

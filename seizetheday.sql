-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2015 at 10:34 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seizetheday`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `choice_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `question_id`, `choice_id`, `user_id`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 2, 1),
(4, 1, 1, 1),
(5, 1, 2, 1),
(6, 1, 2, 1),
(7, 1, 1, 1),
(8, 1, 1, 1),
(9, 1, 1, 1),
(10, 3, 1, 1),
(11, 6, 1, 1),
(12, 1, 2, 1),
(13, 1, 2, 1),
(14, 1, 2, 1),
(15, 1, 2, 1),
(16, 1, 2, 1),
(17, 1, 2, 1),
(18, 1, 1, 1),
(19, 3, 1, 1),
(20, 6, 1, 1),
(21, 2, 4, 1),
(22, 6, 1, 1),
(23, 2, 3, 1),
(24, 1, 1, 1),
(25, 3, 1, 1),
(26, 6, 1, 1),
(27, 2, 4, 1),
(28, 7, 1, 1),
(29, 1, 2, 1),
(30, 1, 1, 1),
(31, 3, 1, 1),
(32, 1, 1, 1),
(33, 1, 1, 1),
(34, 1, 2, 1),
(35, 1, 1, 1),
(36, 3, 2, 1),
(37, 6, 2, 1),
(38, 15, 2, 1),
(39, 3, 2, 1),
(40, 6, 2, 1),
(41, 15, 2, 1),
(42, 3, 2, 1),
(43, 3, 2, 1),
(44, 3, 2, 1),
(45, 3, 2, 1),
(46, 6, 2, 1),
(47, 6, 2, 1),
(48, 6, 2, 1),
(49, 6, 2, 1),
(50, 6, 2, 1),
(51, 6, 2, 1),
(52, 6, 2, 1),
(53, 6, 2, 1),
(54, 6, 2, 1),
(55, 15, 2, 1),
(56, 3, 2, 1),
(57, 3, 2, 1),
(58, 3, 2, 1),
(59, 3, 2, 1),
(60, 3, 2, 1),
(61, 3, 2, 1),
(62, 3, 2, 1),
(63, 3, 2, 1),
(64, 6, 1, 1),
(65, 2, 3, 1),
(66, 12, 2, 1),
(67, 14, 2, 1),
(68, 14, 2, 1),
(69, 14, 2, 1),
(70, 14, 2, 1),
(71, 14, 2, 1),
(72, 14, 2, 1),
(73, 14, 2, 1),
(74, 14, 2, 1),
(75, 1, 2, 1),
(76, 1, 1, 1),
(77, 3, 2, 1),
(78, 6, 2, 1),
(79, 15, 2, 1),
(80, 1, 2, 1),
(81, 1, 1, 1),
(82, 3, 1, 1),
(83, 6, 1, 1),
(84, 2, 3, 1),
(85, 12, 1, 1),
(86, 13, 2, 1),
(87, 10, 1, 1),
(88, 1, 2, 1),
(89, 1, 1, 1),
(90, 3, 2, 1),
(91, 6, 2, 1),
(92, 15, 1, 1),
(93, 16, 2, 1),
(94, 19, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE IF NOT EXISTS `choices` (
  `choice_id` int(11) NOT NULL,
  `choice_text` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`choice_id`, `choice_text`) VALUES
(1, 'Yes'),
(2, 'No'),
(3, 'Male'),
(4, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `faq_id` int(11) NOT NULL,
  `faq_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `faq_question` varchar(1000) NOT NULL,
  `faq_answer` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_timestamp`, `faq_question`, `faq_answer`) VALUES
(1, '2015-08-08 18:48:52', 'How can we cure HIV?', 'HIV stands for human immunodeficiency virus. This is the virus that causes AIDS. There is no cure ye'),
(2, '2015-08-08 18:57:53', 'What is chlamydia?', 'Most people who have chlamydia don''t have any signs or symptoms. Women with symptoms may have abnormal discharge (fluid) from the vagina, burning when they urinate (pee), or pain during sex. Men with symptoms may have abnormal discharge from the penis or burning when they urinate.');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL,
  `question_text` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question_text`) VALUES
(1, 'Are you sexually active?'),
(2, 'Are you a man or a woman?'),
(3, 'Do you sleep with strangers?'),
(4, 'Are you experiencing flu-like symptoms?'),
(5, 'Are you getting sick more often than usual?'),
(6, 'Is peeing painful?'),
(7, 'Is there bleeding between periods?'),
(8, 'Do you have vaginal discharge?'),
(9, 'Is it cloudy and bloody, or clear and yellowish?'),
(10, 'Does it hurt when you have sex?'),
(11, 'Does it itch and smell bad?'),
(12, 'Do your testicles hurt?'),
(13, 'Are your testicles swollen?'),
(14, 'Does your penis itch?'),
(15, 'Is there something wrong with your genitals?'),
(16, 'Do you have a rash down there?'),
(17, 'Is the itching worse at night?'),
(18, 'Is the rash spreading to other parts of your skin?'),
(19, 'Is it releasing white discharge?'),
(20, 'Are there strange growths around your genitals?'),
(21, 'Are they painful?'),
(22, 'Do they look like sores?');

-- --------------------------------------------------------

--
-- Table structure for table `questions_choices`
--

CREATE TABLE IF NOT EXISTS `questions_choices` (
  `question_id` int(11) NOT NULL,
  `choice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_choices`
--

INSERT INTO `questions_choices` (`question_id`, `choice_id`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 2),
(18, 1),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_email` int(11) NOT NULL,
  `user_lat` double NOT NULL,
  `user_lon` double NOT NULL,
  `user_score` int(11) NOT NULL,
  `user_number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`choice_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_number` (`user_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `choice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

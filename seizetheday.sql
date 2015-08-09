-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2015 at 07:07 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

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
(94, 19, 1, 1),
(95, 16, 2, 1),
(96, 1, 2, 1),
(97, 1, 1, 1),
(98, 3, 1, 1),
(99, 6, 1, 1),
(100, 2, 3, 1),
(101, 12, 1, 1),
(102, 13, 1, 1),
(103, 1, 2, 1),
(104, 1, 1, 1),
(105, 3, 1, 1),
(106, 6, 1, 1),
(107, 2, 3, 1),
(108, 12, 1, 1),
(109, 13, 1, 1),
(110, 1, 2, 1),
(111, 1, 1, 1),
(112, 1, 1, 1),
(113, 3, 1, 1),
(114, 6, 2, 1),
(115, 15, 1, 1),
(116, 16, 2, 1),
(117, 19, 2, 1),
(118, 20, 2, 1),
(119, 1, 1, 1),
(120, 3, 2, 1),
(121, 6, 1, 1),
(122, 2, 4, 1),
(123, 7, 2, 1),
(124, 8, 1, 1),
(125, 9, 2, 1),
(126, 11, 1, 1),
(127, 1, 2, 1);

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
  `faq_category` varchar(20) NOT NULL,
  `faq_question` varchar(1000) NOT NULL,
  `faq_answer` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_timestamp`, `faq_category`, `faq_question`, `faq_answer`) VALUES
(1, '2015-08-08 18:48:52', 'STDs', 'How can we cure HIV?', 'HIV stands for human immunodeficiency virus. This is the virus that causes AIDS. There is no cure ye'),
(2, '2015-08-08 18:57:53', 'STDs', 'What is chlamydia?', 'Most people who have chlamydia don''t have any signs or symptoms. Women with symptoms may have abnormal discharge (fluid) from the vagina, burning when they urinate (pee), or pain during sex. Men with symptoms may have abnormal discharge from the penis or burning when they urinate.'),
(3, '2015-08-08 21:01:39', 'STDs', 'What is sexually transmitted disease?', 'Some people that have HIV, hepatitis B, or an STD do not feel sick. Knowing if you have one of these diseases is important. If you do, talk to your doctor about how you can reduce the chance that your baby will become sick. Learn more about STDs.'),
(4, '2015-08-08 21:01:39', 'STDs', 'Is there a cure on sexually transmitted diseases?', 'Yes. These STDs can be cured with medicine if they are treated early. If these STDs aren''t treated, they can cause serious health problems, like making it dangerous or impossible for women to get pregnant. If you have an STD, it''s important to get treatment right away.'),
(5, '2015-08-08 21:03:40', 'STDs', 'What are the symptoms of syphilis?', 'In the first stage, a painless sore appears on the genitals, lips, tongue, or anus. The second stage may include a rash on the palms of the hands and soles of the feet, sores in the throat or mouth, fever, or patchy hair loss. Tell your doctor if you have any of these symptoms of syphilis.'),
(6, '2015-08-08 21:03:40', 'Contraceptives', 'What is a condom?', 'It is safe, effective, and recommended for girls 11 and 12 years of age with a catch-up through age 26 for those who have not yet been vaccinated or completed the vaccine series to protect against the types of HPV that cause most cervical cancers. Use a new condom every time you have anal, vaginal, or oral sex. Correct and consistent use of the male latex condom is highly effective in reducing transmission of sexually transmitted infections. The most reliable way to avoid infection is to not have sex (i.e., anal, vaginal or oral).'),
(7, '2015-08-09 00:26:59', 'Myths/Misconceptions', 'If I have sex while standing, will I get pregnant? Someone told me that the sperms can''t swim upward.', 'No. You will get pregnant. That is a misconception.'),
(8, '2015-08-09 00:26:59', 'STDs', 'What are the home remedies for yeast infection?', 'I have found reducing sugar intake and eating yogurt effective.'),
(9, '2015-08-09 00:26:59', 'Myths/Misconceptions', 'I peed inside a girl''s vagina. Will she get sick?', 'It depends. Urine is sterile, however, if the person urinating carries an STD, it is possible to pass on illnesses like chlamydia and gonorrhea.'),
(10, '2015-08-09 00:26:59', 'Myths/Misconceptions', 'Are two condoms better than one? (At the same time, I mean.)', 'No! The friction between the two condoms greatly increases the chances of them ripping.'),
(11, '2015-08-09 00:26:59', 'Contraceptives', 'Condoms are expensive. Can I wash them with soap and water then reuse them?', 'No. Latex condoms are very fragile, and are often weakened after the first use. Use a new latex condom after each round of sex! ');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL,
  `question_text` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

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
  `user_name` varchar(50) NOT NULL,
  `user_lat` double NOT NULL,
  `user_lon` double NOT NULL,
  `user_number` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_lat`, `user_lon`, `user_number`) VALUES
(1, 'Frank Rayo', 0, 0, ''),
(2, 'Frank Rayo', 0, 0, '639057297409'),
(3, 'Frank Rayo', 0, 0, '639057297409'),
(4, 'Frank Rayo', 0, 0, '9057297409'),
(5, 'Frank Rayo', 0, 0, '9057297409');

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
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `choice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

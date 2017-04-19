-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 11:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newhs-24mar`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_course`
--

CREATE TABLE `t_course` (
  `course_id` int(11) NOT NULL,
  `coursebank_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_progress` int(11) NOT NULL DEFAULT '0',
  `course_grade` varchar(5) NOT NULL DEFAULT 'E'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_coursebank`
--

CREATE TABLE `t_coursebank` (
  `coursebank_id` int(11) NOT NULL,
  `coursebank_name` varchar(255) NOT NULL,
  `coursebank_desc` varchar(255) NOT NULL,
  `coursebank_level` varchar(25) NOT NULL,
  `coursebank_curriculum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_coursebank`
--

INSERT INTO `t_coursebank` (`coursebank_id`, `coursebank_name`, `coursebank_desc`, `coursebank_level`, `coursebank_curriculum`) VALUES
(1, 'Indonesian Civics Education', 'Civics Education focus on builds citizens who can understand and able to do his rights and duties to become a smart, skilled, and good Indonesian citizen that instructed by Pancasila and UUD 1945.', '7', 'Indonesia Equivalent Education');

-- --------------------------------------------------------

--
-- Table structure for table `t_logbook`
--

CREATE TABLE `t_logbook` (
  `log_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `log_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `log_logout` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `log_title` varchar(255) NOT NULL,
  `log_desc` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_news`
--

CREATE TABLE `t_news` (
  `news_id` int(255) NOT NULL,
  `news_title` varchar(255) NOT NULL DEFAULT '',
  `news_photo` varchar(255) NOT NULL DEFAULT 'no photo',
  `news_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_questions`
--

CREATE TABLE `t_questions` (
  `question_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `question_text` longtext NOT NULL,
  `choice_a` longtext NOT NULL,
  `choice_b` longtext NOT NULL,
  `choice_c` longtext NOT NULL,
  `choice_d` longtext NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_quiz`
--

CREATE TABLE `t_quiz` (
  `quiz_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `quiz_desc` varchar(255) DEFAULT NULL,
  `quiz_score` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_quizquest`
--

CREATE TABLE `t_quizquest` (
  `quiz_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `t_res`
--

CREATE TABLE `t_res` (
  `res_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_schedule`
--

CREATE TABLE `t_schedule` (
  `id_sche` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `date_sche` date NOT NULL DEFAULT '0000-00-00',
  `type_sche` varchar(255) NOT NULL,
  `repeat_sche` varchar(255) NOT NULL,
  `title_sche` varchar(255) NOT NULL,
  `desc_sche` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_skillcourse`
--

CREATE TABLE `t_skillcourse` (
  `skill_id` int(11) NOT NULL,
  `coursebank_id` int(11) NOT NULL,
  `skill_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_skillcourse`
--

INSERT INTO `t_skillcourse` (`skill_id`, `coursebank_id`, `skill_desc`) VALUES
(1, 1, 'Applying Live in harmony in difference'),
(2, 1, 'Understanding and aplly live in harmony at home and Nonformal Education Unit area '),
(3, 1, 'Understanding duties as citizen in family and Nonformal Education Unit'),
(4, 1, 'Understanding live in discipline and \"gotong royong\"'),
(5, 1, 'Showing loving and democratic attitude'),
(6, 1, 'Showing honest, discipline, hardwork, and corruption-anti in daily life according to pancasila\'s values.'),
(7, 1, 'Understanding government system, in district level and main level'),
(8, 1, 'Understanding the meaning of Unity in \"Negara kesatuan Republik Indonesia\" , with obey to undang-undang, rules, habits, culture, and respect collective decision'),
(9, 1, 'Understanding and respect the meaning of \"Kejuangan bangsa\" values.'),
(10, 1, 'Understanding relatianship between Indonesia with it\'s neigborhood country and \"luar negeri\" Politics');

-- --------------------------------------------------------

--
-- Table structure for table `t_skillprogress`
--

CREATE TABLE `t_skillprogress` (
  `skillprogress_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `skillcourse_id` int(11) NOT NULL,
  `skillprogress_check` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_student`
--

CREATE TABLE `t_student` (
  `student_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_photo` varchar(255) NOT NULL DEFAULT 'assets/img/student.png',
  `student_religion` varchar(255) NOT NULL,
  `student_curriculum` varchar(255) NOT NULL,
  `student_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_tutor`
--

CREATE TABLE `t_tutor` (
  `tutor_id` int(11) NOT NULL,
  `tutor_name` varchar(255) NOT NULL,
  `tutor_email` varchar(255) NOT NULL,
  `tutor_username` varchar(255) NOT NULL,
  `tutor_photo` varchar(255) NOT NULL DEFAULT 'assets/img/tutor.png',
  `tutor_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_course`
--
ALTER TABLE `t_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `t_coursebank`
--
ALTER TABLE `t_coursebank`
  ADD PRIMARY KEY (`coursebank_id`);

--
-- Indexes for table `t_logbook`
--
ALTER TABLE `t_logbook`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `t_news`
--
ALTER TABLE `t_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `t_questions`
--
ALTER TABLE `t_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `t_quiz`
--
ALTER TABLE `t_quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `t_res`
--
ALTER TABLE `t_res`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `t_schedule`
--
ALTER TABLE `t_schedule`
  ADD PRIMARY KEY (`id_sche`);

--
-- Indexes for table `t_skillcourse`
--
ALTER TABLE `t_skillcourse`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `t_skillprogress`
--
ALTER TABLE `t_skillprogress`
  ADD PRIMARY KEY (`skillprogress_id`);

--
-- Indexes for table `t_student`
--
ALTER TABLE `t_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `t_tutor`
--
ALTER TABLE `t_tutor`
  ADD PRIMARY KEY (`tutor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_course`
--
ALTER TABLE `t_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_coursebank`
--
ALTER TABLE `t_coursebank`
  MODIFY `coursebank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_logbook`
--
ALTER TABLE `t_logbook`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_news`
--
ALTER TABLE `t_news`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_questions`
--
ALTER TABLE `t_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_quiz`
--
ALTER TABLE `t_quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_res`
--
ALTER TABLE `t_res`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_schedule`
--
ALTER TABLE `t_schedule`
  MODIFY `id_sche` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_skillcourse`
--
ALTER TABLE `t_skillcourse`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_skillprogress`
--
ALTER TABLE `t_skillprogress`
  MODIFY `skillprogress_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_student`
--
ALTER TABLE `t_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_tutor`
--
ALTER TABLE `t_tutor`
  MODIFY `tutor_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

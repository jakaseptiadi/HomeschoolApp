-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2017 at 09:34 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

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

CREATE TABLE IF NOT EXISTS `t_course` (
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

CREATE TABLE IF NOT EXISTS `t_coursebank` (
  `coursebank_id` int(11) NOT NULL,
  `coursebank_name` varchar(255) NOT NULL,
  `coursebank_desc` varchar(255) NOT NULL,
  `coursebank_level` varchar(25) NOT NULL,
  `coursebank_curriculum` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_coursebank`
--

INSERT INTO `t_coursebank` (`coursebank_id`, `coursebank_name`, `coursebank_desc`, `coursebank_level`, `coursebank_curriculum`) VALUES
(1, 'Indonesian Civics Education', 'Civics Education focus on builds citizens who can understand and able to do his rights and duties to become a smart, skilled, and good Indonesian citizen that instructed by Pancasila and UUD 1945.', '7', 'Indonesia Equivalent Education');

-- --------------------------------------------------------

--
-- Table structure for table `t_logbook`
--

CREATE TABLE IF NOT EXISTS `t_logbook` (
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

CREATE TABLE IF NOT EXISTS `t_news` (
  `news_id` int(255) NOT NULL,
  `news_title` varchar(255) NOT NULL DEFAULT '',
  `news_photo` varchar(255) NOT NULL DEFAULT 'no photo',
  `news_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_questions`
--

CREATE TABLE IF NOT EXISTS `t_questions` (
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

CREATE TABLE IF NOT EXISTS `t_quiz` (
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

CREATE TABLE IF NOT EXISTS `t_quizquest` (
  `quiz_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_res`
--

CREATE TABLE IF NOT EXISTS `t_res` (
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

CREATE TABLE IF NOT EXISTS `t_schedule` (
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

CREATE TABLE IF NOT EXISTS `t_skillcourse` (
  `skill_id` int(11) NOT NULL,
  `coursebank_id` int(11) NOT NULL,
  `skill_desc` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_skillcourse`
--

INSERT INTO `t_skillcourse` (`skill_id`, `coursebank_id`, `skill_desc`) VALUES
(1, 1, 'Applying Live in harmony in difference'),
(2, 1, 'Understanding and aplly live in harmony at home and Nonformal Education Unit area '),
(3, 1, 'Understanding duties as citizen in family and Nonformal Education Unit'),
(4, 1, 'Understanding live in discipline and "gotong royong"'),
(5, 1, 'Showing loving and democratic attitude'),
(6, 1, 'Showing honest, discipline, hardwork, and corruption-anti in daily life according to pancasila''s values.'),
(7, 1, 'Understanding government system, in district level and main level'),
(8, 1, 'Understanding the meaning of Unity in "Negara kesatuan Republik Indonesia" , with obey to undang-undang, rules, habits, culture, and respect collective decision'),
(9, 1, 'Understanding and respect the meaning of "Kejuangan bangsa" values.'),
(10, 1, 'Understanding relatianship between Indonesia with it''s neigborhood country and "luar negeri" Politics');

-- --------------------------------------------------------

--
-- Table structure for table `t_skillprogress`
--

CREATE TABLE IF NOT EXISTS `t_skillprogress` (
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

CREATE TABLE IF NOT EXISTS `t_student` (
  `student_id` int(11) NOT NULL,
  `type_id` varchar(255) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_photo` varchar(255) NOT NULL DEFAULT 'assets/img/student.png',
  `student_religion` varchar(255) NOT NULL,
  `student_curriculum` varchar(255) NOT NULL,
  `student_year` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_student`
--

INSERT INTO `t_student` (`student_id`, `type_id`, `tutor_id`, `student_name`, `student_email`, `student_username`, `student_password`, `student_photo`, `student_religion`, `student_curriculum`, `student_year`) VALUES
(1, 'idstudent', 1, 'Joko Klepu', 'jakaseptiadi37@gmail.com', 'jokosepti', 'jokosepti', 'assets/img/student.png', 'Moslem', '', ''),
(2, 'idstudent', 7, 'dodi', 'jaka.avengedsevenfold@gmail.com', 'dai', 'jakaseptiadi37', 'assets/img/student.png', 'Moslem', '', ''),
(3, '', 8, 'ipan', 'ipan@gmail.com', 'ipan', 'password', 'assets/img/student.png', 'Moslem', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_tutor`
--

CREATE TABLE IF NOT EXISTS `t_tutor` (
  `tutor_id` int(11) NOT NULL,
  `type_id` varchar(255) NOT NULL,
  `tutor_name` varchar(255) NOT NULL,
  `tutor_email` varchar(255) NOT NULL,
  `tutor_username` varchar(255) NOT NULL,
  `tutor_photo` varchar(255) NOT NULL DEFAULT 'assets/img/tutor.png',
  `tutor_password` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tutor`
--

INSERT INTO `t_tutor` (`tutor_id`, `type_id`, `tutor_name`, `tutor_email`, `tutor_username`, `tutor_photo`, `tutor_password`, `tempat_lahir`, `jenis_kelamin`, `agama`, `alamat`, `pekerjaan`, `foto`) VALUES
(1, 'idtutor', 'Jaka Septiadi', 'jaka.avengedsevenfold@gmail.com', 'jakaseptiadi', 'assets/img/tutor.png', 'jakaseptiadi37', '', '', '', '', '', ''),
(8, 'idtutor', 'Yupa', 'yupa@gmail.com', 'yupa', 'assets/img/tutor.png', 'password', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_z_profile_tutor`
--

CREATE TABLE IF NOT EXISTS `t_z_profile_tutor` (
  `id_profile` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `last_education` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_z_profile_tutor`
--

INSERT INTO `t_z_profile_tutor` (`id_profile`, `tutor_id`, `username`, `gender`, `religion`, `location`, `last_education`, `profession`, `photo`, `about`) VALUES
(4, 1, 'jakaseptiadi', 'male', 'moslem', 'Indonesia', 'Indonesia University of Education', 'Lecture', '', ''),
(5, 8, 'Yupa12', 'Male', 'Budha', 'Argentina', 'UPI', 'Mahasiswa', '', 'coba coba aja');

-- --------------------------------------------------------

--
-- Table structure for table `t_z_relationship`
--

CREATE TABLE IF NOT EXISTS `t_z_relationship` (
  `id_relationship` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `tutor_id2` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_id2` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_z_relationship`
--

INSERT INTO `t_z_relationship` (`id_relationship`, `tutor_id`, `tutor_id2`, `student_id`, `student_id2`) VALUES
(1, 1, 8, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_z_resource`
--

CREATE TABLE IF NOT EXISTS `t_z_resource` (
  `id_resource` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `grades` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_z_resource`
--

INSERT INTO `t_z_resource` (`id_resource`, `tutor_id`, `title`, `description`, `type`, `grades`, `subject`, `file`, `date_create`) VALUES
(4, 1, 'fafasf', 'asfasfsa', 'Tugas', '2nd', 'on', 'mamah_babeh.jpg', '0000-00-00 00:00:00'),
(5, 1, 'Math', 'Hmm', 'Soal Latihan', '2nd', 'math', 'referensi1.jpg', '0000-00-00 00:00:00'),
(6, 1, 'Math', 'Hmm', 'Soal Latihan', '2nd', 'math', 'referensi11.jpg', '0000-00-00 00:00:00'),
(7, 1, 'Math', 'Hmm', 'Soal Latihan', '2nd', 'math', 'referensi12.jpg', '0000-00-00 00:00:00'),
(8, 1, 'ajjajajaja', 'ajjfdhfdgfdgfdg', 'Soal Latihan', '3rd', 'math', 'bbeh.jpg', '0000-00-00 00:00:00'),
(9, 1, 'ajjajajaja', 'ajjfdhfdgfdgfdg', 'Soal Latihan', '3rd', 'math', 'bbeh1.jpg', '0000-00-00 00:00:00'),
(10, 1, 'Coba', 'hahahaha', 'Tugas', '2nd', 'science', 'bbeh2.jpg', '0000-00-00 00:00:00'),
(11, 1, 'Language', 'This resouce', 'Tugas', '3rd', 'math', '16021-16019-1-PB.pdf', '0000-00-00 00:00:00'),
(12, 1, 'PKN', 'kakakakakakakakakakaka', 'Soal Latihan', '3rd', 'arts', '3380-3370-1-PB.pdf', '0000-00-00 00:00:00'),
(13, 1, 'Coba aja heula', 'This for hmmmmm live', 'Soal Latihan', '2nd', 'science', '3380-3370-1-PB1.pdf', '2017-05-06 21:41:43'),
(14, 1, 'Reyhan', 'santai aja', 'Kurikulum', '3rd', 'math', '313-596-1-SM.pdf', '2017-05-06 21:45:21'),
(15, 1, 'Reyhan', 'santai aja', 'Kurikulum', '3rd', 'math', '313-596-1-SM1.pdf', '2017-05-06 21:45:47'),
(16, 1, 'Math', 'nothing', 'Soal Latihan', '3rd', 'math', '16021-16019-1-PB1.pdf', '2017-05-06 21:47:18'),
(17, 1, 'Math', 'nothing', 'Soal Latihan', '3rd', 'math', '16021-16019-1-PB2.pdf', '2017-05-06 21:50:17'),
(18, 1, 'sacscascs', 'ascsacasc', 'Soal Latihan', '3rd', 'arts', '16021-16019-1-PB3.pdf', '2017-05-06 21:51:32'),
(19, 1, 'sacscascs', 'ascsacasc', 'Soal Latihan', '3rd', 'arts', '16021-16019-1-PB4.pdf', '2017-05-06 21:52:55'),
(20, 1, 'wrraas', 'Resource ini merupakan sesuatu yang sangat penting untuk homeschooling', 'Soal Latihan', '3rd', 'arts', '16021-16019-1-PB5.pdf', '2017-05-06 21:54:12'),
(21, 1, 'sacscascs', 'ascsacasc', 'Soal Latihan', '3rd', 'arts', '16021-16019-1-PB6.pdf', '2017-05-06 21:55:30'),
(22, 1, 'Social Science', 'This resource just about........', 'Soal Latihan', '3rd', 'math', 'e-learning.docx', '2017-05-07 20:45:29'),
(23, 1, 'Social Science', 'ini untuk ips', 'Soal Latihan', '4th', 'math', 'bbeh.jpg', '2017-05-09 16:22:07'),
(24, 1, 'Social Science', 'ini untuk ips', 'Soal Latihan', '4th', 'math', 'bbeh1.jpg', '2017-05-09 16:23:50'),
(25, 1, 'Another way to find source code', 'This resource for finding new source for beginners but always there are problem with this source', 'Tugas', '2nd', 'science', 'bbeh2.jpg', '2017-05-10 11:56:36'),
(26, 1, 'Matematika', 'Ini adalah untuk matematika', 'Soal Latihan', '3rd', 'math', 'bbeh3.jpg', '2017-05-12 15:05:48');

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
-- Indexes for table `t_z_profile_tutor`
--
ALTER TABLE `t_z_profile_tutor`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `t_z_relationship`
--
ALTER TABLE `t_z_relationship`
  ADD PRIMARY KEY (`id_relationship`);

--
-- Indexes for table `t_z_resource`
--
ALTER TABLE `t_z_resource`
  ADD PRIMARY KEY (`id_resource`);

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
  MODIFY `coursebank_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_skillprogress`
--
ALTER TABLE `t_skillprogress`
  MODIFY `skillprogress_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_student`
--
ALTER TABLE `t_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_tutor`
--
ALTER TABLE `t_tutor`
  MODIFY `tutor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_z_profile_tutor`
--
ALTER TABLE `t_z_profile_tutor`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_z_relationship`
--
ALTER TABLE `t_z_relationship`
  MODIFY `id_relationship` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_z_resource`
--
ALTER TABLE `t_z_resource`
  MODIFY `id_resource` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

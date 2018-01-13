-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 08:19 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id_answer` int(11) NOT NULL,
  `id_quiz` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `answer` mediumtext NOT NULL,
  `grade` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id_answer`, `id_quiz`, `id_student`, `answer`, `grade`) VALUES
(4, 19, 10006, 'kontroller yang berukuran mikro||mereka saling melengkapi||nodemcu, arduino, raspberry', NULL),
(5, 21, 10003, 'tense that simple||i am studying||tense that past||i was studying', 50);

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id_assignment` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `file` varchar(15) NOT NULL DEFAULT '0',
  `duedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id_assignment`, `id_course`, `deskripsi`, `file`, `duedate`) VALUES
(2, 1, 'AJAX', '1927786722', '2017-12-30'),
(3, 1, 'AJAX', '1513568222', '2017-12-30'),
(9, 9, 'Buat sebuah network sederhana menggunakan NodeMCU', '8389985429.zip', '2017-12-31'),
(10, 10, 'Buat sebuah slide presentasi', '2382264849.zip', '2017-12-29'),
(11, 9, 'presentasikan sebuah module mikrokontroller secara detail', '1127729988.zip', '2017-12-31'),
(12, 6, 'Create a dialog text about 2 guys bargaining in the market!', '1318411742.zip', '2018-01-11'),
(13, 6, 'Find a debate video on the internet and write down the point that makes a successful debate!', '7353915256.zip', '2018-01-17'),
(14, 7, 'Buatlah sebuah naskah pidato untuk didemokan di pertemuan 4', '3235522735.zip', '2017-12-30'),
(15, 8, 'buat jaringan', '7652968112.zip', '2018-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `department` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `id_lecturer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `nama`, `deskripsi`, `department`, `semester`, `id_lecturer`) VALUES
(1, 'Teknologi Web', 'mempelajari teknologi terbaru dalam panegembangan web', 'Teknik Informatika', 7, 2),
(2, 'IMK', 'interaksi manusia dan komputer', 'Teknik Informatika', 7, 2),
(4, 'KWR', 'kewirausahaan', 'Teknik Informatika', 7, 2),
(6, 'Bahasa Inggris 7', 'Mempelajari teknik berbahasa inggris tingkat lanjut', 'Teknik Informatika', 7, 10010),
(7, 'Keterampilan Komunikasi', 'Selain dibekali Hard Skill. Siswa juga dituntut untuk membekali dirinya dengan Soft Skil. Dalam Course ini, akan dibahas dasar dasar teknik komunikasi yang baik', 'Teknik Informatika', 1, 10010),
(8, 'Konsep Jaringan', 'Dalam Course ini dilakukan pembelajaran mengenai seluk beluk dari Jaringan', 'Teknik Informatika', 1, 10010),
(9, 'Mikrokontroller Network', 'Mempelajari dasar teori mikrokontroller dan jaringan.', 'Teknik Komputer', 7, 10011),
(10, 'Bahasa Indonesia 5', 'Mempelajari bahasa Indonesia tingkat menengah', 'Teknik Komputer', 7, 10011),
(11, 'Internet of Thing', 'Mempelajari teknologi Internet of Thing dan implementasinya di dunia nyata', 'Teknik Komputer', 7, 10011),
(12, 'ok', 'its okay', 'Teknik Informatika', 7, 10010);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id_enrollment` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id_enrollment`, `id_course`, `id_student`) VALUES
(8, 11, 10008),
(9, 1, 10002),
(10, 2, 10002),
(11, 4, 10002),
(12, 6, 10002),
(13, 9, 10006),
(14, 7, 10004),
(15, 7, 10005),
(16, 6, 10003),
(17, 1, 10003);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `id_silabus` int(11) NOT NULL,
  `minggu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `deskripsi`, `id_silabus`, `minggu`) VALUES
(1, 'What is FPDF? FPDF is a PHP class which allows to generate PDF files with pure PHP, that is to say without using the PDFlib library. F from FPDF stands for Free: you may use it for any kind of usage and modify it to suit your needs. FPDF has other advantages: high level functions', 1, 1),
(2, 'English is a fun thing to learn', 3, 1),
(3, 'Simple tense is the simplest course here', 3, 2),
(4, 'Pengenalan diri sendiri', 4, 1),
(5, 'pengenalan tentang konsep jaringan. ', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1513246177),
('m130524_201442_init', 1513246184);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id_quiz` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `question` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id_quiz`, `number`, `question`) VALUES
(18, 1, 'Apa itu Ajax?'),
(18, 2, 'Contoh Penggunaan Ajax!'),
(19, 1, 'Apa arti Mikrokontroller?'),
(19, 2, 'Apa hubungannya dengan Network?'),
(19, 3, 'Jelaskan contoh contoh mikrokontroller! (minimal 3)'),
(20, 1, 'Apa perbedaan kalimat aktif dan kalimat pasif?'),
(20, 2, 'Berikan contoh kalimat aktif! (minimal 3)'),
(20, 3, 'Berikan contoh kalimat pasif! (minimal 3)'),
(21, 1, 'What is simple tense?'),
(21, 2, 'Write down the example of simple tense!'),
(21, 3, 'What is past tense?'),
(21, 4, 'Write down the example of past tense!'),
(22, 1, 'Apa pengertian Keterampilan Komunikasi?'),
(22, 2, 'Apa jenis jenis komunikasi?'),
(22, 3, 'Berikan contoh sebuah komunikasi!'),
(23, 1, 'Jelaskan faktor faktor yang mempengaruhi komunikasi!'),
(23, 2, 'Sertakan dan jelaskan satu jurnal yang mendukung teori komunikasi!'),
(24, 1, 'what is past tense?'),
(24, 2, 'what is continouse tense?');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id_quiz` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id_quiz`, `title`, `time`, `duration`, `id_course`) VALUES
(18, 'Quiz Ajax', '2017-12-28 23:50:00', 50, 1),
(19, 'Quick Test 1', '2017-12-29 19:35:00', 120, 9),
(20, 'Tes Pengetahuan Dasar', '2018-01-03 10:35:00', 60, 10),
(21, 'What is Tense', '2017-12-28 19:35:00', 60, 6),
(22, 'Dasar Teori', '2017-12-29 11:55:00', 120, 7),
(23, 'Dasar teori lanjutan', '2017-12-29 23:55:00', 120, 7),
(24, 'quis singkat', '2017-12-29 14:30:00', 20, 6);

-- --------------------------------------------------------

--
-- Table structure for table `silabus`
--

CREATE TABLE `silabus` (
  `id_silabus` int(11) NOT NULL,
  `minggu1` varchar(50) NOT NULL,
  `id_course` int(11) NOT NULL,
  `minggu2` varchar(100) NOT NULL,
  `minggu3` varchar(100) NOT NULL,
  `minggu4` varchar(100) NOT NULL,
  `minggu5` varchar(100) NOT NULL,
  `minggu6` varchar(100) NOT NULL,
  `minggu7` varchar(100) NOT NULL,
  `minggu8` varchar(100) NOT NULL,
  `minggu9` varchar(100) NOT NULL,
  `minggu10` varchar(100) NOT NULL,
  `minggu11` varchar(100) NOT NULL,
  `minggu12` varchar(100) NOT NULL,
  `minggu13` varchar(100) NOT NULL,
  `minggu14` varchar(100) NOT NULL,
  `minggu15` varchar(100) NOT NULL,
  `minggu16` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `silabus`
--

INSERT INTO `silabus` (`id_silabus`, `minggu1`, `id_course`, `minggu2`, `minggu3`, `minggu4`, `minggu5`, `minggu6`, `minggu7`, `minggu8`, `minggu9`, `minggu10`, `minggu11`, `minggu12`, `minggu13`, `minggu14`, `minggu15`, `minggu16`) VALUES
(1, 'FDPF', 1, 'jpGraph', 'CMS', 'RRS', 'jQuery', 'ExtJS', 'CodeIgniter', 'Yii', 'Laravel', 'Web Service - JSON', 'Web Service - SOAP', 'AJAX', 'Web Streaming', 'NodeJS', 'Demo Final Project', 'Demo Final Project'),
(2, 'FDPF', 1, 'jpGraph', 'CMS', 'RRS', 'jQuery', 'ExtJS', 'CodeIgniter', 'Yii', 'Laravel', 'Web Service - JSON', 'Web Service - SOAP', 'AJAX', 'Web Streaming', 'NodeJS', 'Demo Final Project', 'Demo Final Project'),
(3, 'Introduction', 6, 'Simple Tense', 'Past Tense', 'Assignment Day 1', 'Fun Study', 'Future Tense', 'Speaking Time', 'Assignment Day 2', 'Fun Study', 'Present Continuous', 'Past Continuous', 'Assignment Day 3', 'Fun Study', 'Future Continuous', 'Speaking Time', 'Assignment Day 4 (Final)'),
(4, 'Perkenalan', 7, 'Diskusi Ringan', 'Debat', 'Tes 1', 'Teori Pidato', 'Latihan Pidato', 'Tips dan Trick Pidato', 'Tes 2', 'Teori Presentasi', 'Latihan Presentasi', 'Tips dan Trick Presentasi', 'Tes 3', 'Teori Teknik Persuasi', 'Latihan Persuasi', 'Tips dan Trick Persuasi', 'Final Tes'),
(5, 'Teori 1 A', 9, 'Teori 1 B', 'Latihan 1', 'Tes 1', 'Teori 2 A', 'Teori 2 B', 'Latihan 2', 'Tes 2', 'Teori 3 A', 'Teori 3 B', 'Latihan 3', 'Tes 3', 'Teori 4 A', 'Teori 4 B', 'Latihan 4', 'Tes 4'),
(6, 'Perkenalan', 10, 'Kalimat Aktif', 'Kalimat Pasif', 'Tes 1', 'Puisi', 'Prosa', 'Frasa', 'Tes 2', 'Pidato', 'Presentasi', 'Orasi', 'Tes 3', 'Karya Tulis', 'Proposal yang baik', 'Struktur Karya Ilmiah', 'FInal Tes'),
(7, 'materi 1', 8, 'materi 2', 'materi 3', 'materi 4', 'materi 5', 'materi 6', 'materi 7', 'materi 8', 'materi 9', 'materi 10', 'materi 11', 'materi 12', 'materi 13', 'materi 14', 'materi 15', 'materi 16');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `id_submission` int(11) NOT NULL,
  `id_assignment` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `file` varchar(25) NOT NULL,
  `grade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`id_submission`, `id_assignment`, `id_student`, `file`, `grade`) VALUES
(5, 9, 10006, '9-10006.zip', NULL),
(6, 12, 10003, '12-10003.zip', 90);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_induk` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `semester` int(6) NOT NULL,
  `departement` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama`, `no_induk`, `email`, `semester`, `departement`, `alamat`, `role`) VALUES
(2, 'rizal', 'rizal', 'Rizal Rizqullah', 197701202008011010, 'rizal@pens.ac.id', 1, 'Teknik Informatika', 'gebang', 'lecturer'),
(9999, 'admin', 'admin', 'admin', 0, 'admin@localhost', 0, '', '', 'admin'),
(10002, 'aviv', 'aviv', 'Aviv Rusdiyawan Akbar', 2110141042, 'aviv@gmail.com', 7, 'Teknik Informatika', 'Wisma Permai, Surabaya', 'student'),
(10003, 'festy', 'festy', 'Festy Fildia Siswanto', 2110141056, 'festy@gmail.com', 7, 'Teknik Informatika', 'Gebang Kulon, Surabaya', 'student'),
(10004, 'roy', 'roy', 'Roy Marteen', 2110171044, 'roy@gmail.com', 1, 'Teknik Informatika', 'Ketintang, Surabaya', 'student'),
(10005, 'steven', 'steven', 'Steven Willy', 2110151060, 'steven@gmail.com', 1, 'Teknik Informatika', 'Keputih, Surabaya', 'student'),
(10006, 'rizky', 'rizky', 'Rizky Setiawan', 1011141055, 'rizky@gmail.com', 7, 'Teknik Komputer', 'Kenjeran, Surabaya', 'student'),
(10007, 'anggun', 'anggun', 'Anggun Dwi Handayani', 1011141058, 'anggun@gmail.com', 7, 'Teknik Komputer', 'TMB, Surabaya', 'student'),
(10008, 'kiki', 'kiki', 'Kiki Putra', 1011161007, 'kiki@gmail.com', 7, 'Teknik Komputer', 'Pakuwon, Surabaya', 'student'),
(10009, 'endang', 'endang', 'Endang Pratiwi', 1011161010, 'endang@gmail.com', 7, 'Teknik Komputer', 'Keputih, Surabaya', 'student'),
(10010, 'rosita', 'rosita', 'Rosita Devi', 197701202008020456, 'rosita@pens.ac.id', 0, 'Teknik Informatika', 'Perum Dosen blok K, ITS, Surabaya', 'lecturer'),
(10011, 'jenni', 'jenni', 'Jenni Abdulrokhim', 197701202000944544, 'jenni@pens.ac.id', 0, 'Teknik Komputer', 'Pakuwon Regency, Surabaya', 'lecturer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id_answer`),
  ADD KEY `id_quiz` (`id_quiz`),
  ADD KEY `answer_ibfk_2` (`id_student`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id_assignment`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `lecturer` (`id_lecturer`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id_enrollment`),
  ADD KEY `course` (`id_course`),
  ADD KEY `student` (`id_student`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_silabus` (`id_silabus`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD KEY `id_quiz` (`id_quiz`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_quiz`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `silabus`
--
ALTER TABLE `silabus`
  ADD PRIMARY KEY (`id_silabus`),
  ADD KEY `silabus_ibfk_1` (`id_course`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id_submission`),
  ADD KEY `id_assignment` (`id_assignment`),
  ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id_answer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id_assignment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id_enrollment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id_quiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `silabus`
--
ALTER TABLE `silabus`
  MODIFY `id_silabus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `id_submission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10012;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id_quiz`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `lecturer` FOREIGN KEY (`id_lecturer`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `course` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student` FOREIGN KEY (`id_student`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_silabus`) REFERENCES `silabus` (`id_silabus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id_quiz`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `silabus`
--
ALTER TABLE `silabus`
  ADD CONSTRAINT `silabus_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submission`
--
ALTER TABLE `submission`
  ADD CONSTRAINT `submission_ibfk_1` FOREIGN KEY (`id_assignment`) REFERENCES `assignment` (`id_assignment`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submission_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 18, 2024 at 02:49 AM
-- Server version: 5.6.34
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shazliana`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `number`, `profile`, `description`) VALUES
(3, 0, 'Age', '20'),
(4, 0, 'Email', 'shazliana01@gmail.com'),
(6, 0, 'asasa', 'sas');

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `id` int(11) NOT NULL,
  `academic` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`id`, `academic`, `description`) VALUES
(1, 'Johan Lumba Lari', 'around the world');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `activities` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activities`, `description`) VALUES
(4, 'main bola tampar', 'depan rumah');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(25106, 'NURSHAZLIANA', 'PKCOCO', '101010');

-- --------------------------------------------------------

--
-- Table structure for table `akademik`
--

CREATE TABLE `akademik` (
  `id` int(11) NOT NULL,
  `certificate` varchar(50) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akademik`
--

INSERT INTO `akademik` (`id`, `certificate`, `year`) VALUES
(13, 'SIJIL UPKK', 2012),
(14, 'SIJIL PENGHARGAAN SPBT', 2018),
(15, 'SIJIL PERMAINAN LOMPAT TALI', 2018),
(16, 'SIJIL PELAJARAN VOKASIONAL', 2018),
(17, 'SIJIL PERLAWANAN BADMINTON', 2020),
(21, 'SIJIL KEJOHANAN OLAHRAGA', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `information` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `information`, `teacher`, `date`) VALUES
(3, 'Scout meeting at classroom', 'Encik hamid', '25/3/2021'),
(4, 'Fire cadet will meeting at counselling room', 'Pn Hasliana', '25/3/2021'),
(5, 'Sqout meeting in 1 setia Classroom', 'Teacher Hannan', '16/10/2024');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` enum('present','absent') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_name`, `date`, `status`) VALUES
(1, 'akmal', '2024-10-16', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `bi`
--

CREATE TABLE `bi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bi`
--

INSERT INTO `bi` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(8, 'nur maisarah binti nasir', 4, 'Setia', 'Girl', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `blue`
--

CREATE TABLE `blue` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blue`
--

INSERT INTO `blue` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(10, 'Nurhaziqah binti noor', 4, 'Maju', 'Girl', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `green`
--

CREATE TABLE `green` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `green`
--

INSERT INTO `green` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(6, 'Muhd akbar bin manaf', 5, 'Setia', 'Boy', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(5, 'nur zulaika binti manaf', 5, 'Maju', 'Girl', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Anna123', 'Anna321'),
(2, 'Nur', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `mm`
--

CREATE TABLE `mm` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mm`
--

INSERT INTO `mm` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(9, 'Fakrul bin hisham', 4, 'Maju', 'Boy', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `princess`
--

CREATE TABLE `princess` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `princess`
--

INSERT INTO `princess` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(5, 'Nur fazilah binti ahmad', 5, 'Setia', 'Girl', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `red`
--

CREATE TABLE `red` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `red`
--

INSERT INTO `red` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(9, 'Zalikha binti mad nasir', 5, 'Setia', 'Girl', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `redcresent`
--

CREATE TABLE `redcresent` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redcresent`
--

INSERT INTO `redcresent` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(12, 'nur syafiqah binti nazri', '5', 'Jaya', 'Girl', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `email`, `password`) VALUES
(3, 'Shazliana', 'anna', 'anna1@gmail.com', '11111'),
(4, 'fatinshahila', 'fatin', 'fatin01@gmail.com', '1212'),
(13, 'amirul', 'muhd', 'muhd@gmail.com', '1212'),
(16, 'Emir', 'emir12', 'emir12@gmail.com', '1212'),
(17, 'NANA', 'NANA', '', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `registerclub`
--

CREATE TABLE `registerclub` (
  `id` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `phone` int(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `us` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerclub`
--

INSERT INTO `registerclub` (`id`, `Fname`, `Lname`, `age`, `phone`, `Address`, `email`, `experience`, `us`) VALUES
(11, 'shazliana', 'nur', 19, 184711099, '103, Blok 8 , Jalan Cangkul , 19/3, Syeksyen 19,40', 'shazliana01@gmail.com', 'shazliana', 'Member'),
(12, 'muhd', 'emir', 22, 194716161, 'Jalan-jalan', 'emir12@gmail.com', 'memenangi pertandingan pingpong', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `registerfyp`
--

CREATE TABLE `registerfyp` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerfyp`
--

INSERT INTO `registerfyp` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Nur Shazliana', 'anna', 'shazliana01@gmail.com', '1212'),
(2, 'hanna', 'delisha', 'delisha12@yahoo.com', '1313'),
(3, 'hanna', 'delisha', 'delisha12@yahoo.com', '1313'),
(4, 'hanna', 'delisha', 'delisha12@yahoo.com', '1313');

-- --------------------------------------------------------

--
-- Table structure for table `registerwebsite`
--

CREATE TABLE `registerwebsite` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerwebsite`
--

INSERT INTO `registerwebsite` (`id`, `name`, `username`, `password`) VALUES
(1, 'Teacher Hanna', 'Teacher Hanna', '08090809'),
(2, 'HANNA', 'HANA1', 'HANNA1');

-- --------------------------------------------------------

--
-- Table structure for table `sc`
--

CREATE TABLE `sc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc`
--

INSERT INTO `sc` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(6, 'Nur adriana binti asrol', 4, 'Setia', 'Girl', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `scout`
--

CREATE TABLE `scout` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scout`
--

INSERT INTO `scout` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(42, 'MUHAMMAD ALIF BIN ZAINOL', '4', 'Setia', 'Boy', '2024'),
(55, 'NURFARISHA BINTI HARZ', '6', 'Maju', 'Girl', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sname` varchar(50) NOT NULL,
  `scode` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sname`, `scode`) VALUES
('PERTOLONGAN CEMAS', 'CUR2011'),
('E-DAGANG', 'MKB1023'),
('TEKNOLOGI RANGKAIAN', 'MKN1033'),
('INTERNET SECURITY', 'MKN1053'),
('METODOLOGI', 'MKS1043'),
('ASAS PEMBANGUNAN WEB', 'MKS1053'),
('PEMBANGUNAN APLIKASI WEB', 'MKS1063'),
('STRUKTUR DATA &amp; ALGORITHM', 'MKS1083'),
('MULTIMEDIA', 'MMM1023');

-- --------------------------------------------------------

--
-- Table structure for table `teencadet`
--

CREATE TABLE `teencadet` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teencadet`
--

INSERT INTO `teencadet` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(7, 'MOHD AIMAN BIN ZAINI', 6, 'Jaya', 'Boy', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `text_data`
--

CREATE TABLE `text_data` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text_data`
--

INSERT INTO `text_data` (`id`, `content`) VALUES
(1, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `uniform`
--

CREATE TABLE `uniform` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uniform`
--

INSERT INTO `uniform` (`id`, `name`, `level`, `gender`, `classroom`, `year`) VALUES
(1, '10', '4', 'Boy', 'Setia', '2024'),
(2, '11', '5', 'Girl', 'Maju', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `yellow`
--

CREATE TABLE `yellow` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yellow`
--

INSERT INTO `yellow` (`id`, `name`, `level`, `classroom`, `gender`, `year`) VALUES
(9, 'Fasrisha binti zahid', 4, 'Jaya', 'Girl', '2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `akademik`
--
ALTER TABLE `akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bi`
--
ALTER TABLE `bi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blue`
--
ALTER TABLE `blue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `green`
--
ALTER TABLE `green`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm`
--
ALTER TABLE `mm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `princess`
--
ALTER TABLE `princess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `red`
--
ALTER TABLE `red`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redcresent`
--
ALTER TABLE `redcresent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `registerclub`
--
ALTER TABLE `registerclub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerfyp`
--
ALTER TABLE `registerfyp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerwebsite`
--
ALTER TABLE `registerwebsite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sc`
--
ALTER TABLE `sc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scout`
--
ALTER TABLE `scout`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `scout` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`scode`);

--
-- Indexes for table `teencadet`
--
ALTER TABLE `teencadet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_data`
--
ALTER TABLE `text_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uniform`
--
ALTER TABLE `uniform`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `yellow`
--
ALTER TABLE `yellow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25107;

--
-- AUTO_INCREMENT for table `akademik`
--
ALTER TABLE `akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bi`
--
ALTER TABLE `bi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blue`
--
ALTER TABLE `blue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `green`
--
ALTER TABLE `green`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mm`
--
ALTER TABLE `mm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `princess`
--
ALTER TABLE `princess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `red`
--
ALTER TABLE `red`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `redcresent`
--
ALTER TABLE `redcresent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registerclub`
--
ALTER TABLE `registerclub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registerfyp`
--
ALTER TABLE `registerfyp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registerwebsite`
--
ALTER TABLE `registerwebsite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sc`
--
ALTER TABLE `sc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `scout`
--
ALTER TABLE `scout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `teencadet`
--
ALTER TABLE `teencadet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `text_data`
--
ALTER TABLE `text_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uniform`
--
ALTER TABLE `uniform`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `yellow`
--
ALTER TABLE `yellow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

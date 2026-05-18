-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2025 at 11:21 AM
-- Server version: 8.0.44
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `did` int NOT NULL,
  `dname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`did`, `dname`) VALUES
(1, 'Common Cold'),
(2, 'Influenza (Flu)'),
(3, 'Pneumonia'),
(4, 'Diabetes'),
(5, 'Hepatitis'),
(6, 'Kidney Disease'),
(7, 'Urinary Tract Infection'),
(8, 'Arthritis'),
(9, 'Osteoporosis'),
(10, 'Anxiety Disorder'),
(11, 'Multiple Sclerosis'),
(12, 'Endometriosis'),
(13, 'Epilepsy'),
(14, 'Alzheimer\'s Disease'),
(15, 'Parkinson\'s Disease'),
(16, 'Skin Cancer'),
(17, 'Brain Tumor'),
(18, 'COVID-19'),
(19, 'Stroke');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `ID` int NOT NULL,
  `SID` int NOT NULL,
  `DID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ID`, `SID`, `DID`) VALUES
(6, 1, 2),
(13, 1, 3),
(26, 1, 5),
(41, 1, 7),
(101, 1, 18),
(1, 2, 1),
(7, 2, 2),
(102, 2, 18),
(2, 3, 1),
(103, 3, 18),
(8, 4, 2),
(19, 4, 3),
(22, 4, 4),
(32, 4, 5),
(37, 4, 6),
(51, 4, 8),
(60, 4, 10),
(68, 4, 11),
(74, 4, 12),
(104, 4, 18),
(9, 5, 2),
(105, 5, 18),
(3, 6, 1),
(4, 7, 1),
(5, 8, 1),
(10, 9, 2),
(14, 9, 3),
(15, 10, 3),
(16, 11, 3),
(17, 12, 3),
(18, 13, 3),
(39, 13, 6),
(106, 13, 18),
(21, 14, 4),
(65, 14, 11),
(95, 14, 17),
(111, 14, 19),
(27, 15, 5),
(34, 15, 6),
(93, 15, 17),
(28, 16, 5),
(35, 16, 6),
(94, 16, 17),
(29, 17, 5),
(46, 17, 7),
(30, 18, 5),
(31, 19, 5),
(36, 20, 6),
(25, 21, 4),
(38, 21, 6),
(61, 21, 10),
(81, 21, 14),
(23, 22, 4),
(40, 22, 6),
(12, 23, 2),
(20, 23, 3),
(42, 23, 7),
(11, 24, 2),
(43, 24, 7),
(58, 24, 10),
(91, 24, 17),
(108, 24, 18),
(115, 24, 19),
(24, 25, 4),
(44, 25, 7),
(59, 25, 10),
(67, 25, 11),
(113, 25, 19),
(45, 26, 7),
(52, 26, 9),
(33, 27, 5),
(47, 27, 8),
(48, 28, 8),
(88, 28, 15),
(53, 29, 9),
(54, 30, 9),
(55, 31, 9),
(56, 32, 10),
(84, 32, 15),
(57, 33, 10),
(63, 34, 11),
(109, 34, 19),
(64, 35, 11),
(89, 35, 15),
(98, 35, 17),
(114, 35, 19),
(69, 36, 12),
(70, 37, 12),
(71, 38, 12),
(72, 39, 12),
(73, 40, 12),
(75, 41, 13),
(92, 41, 17),
(76, 42, 13),
(116, 42, 19),
(77, 43, 13),
(78, 44, 13),
(79, 45, 14),
(99, 45, 17),
(80, 46, 14),
(62, 47, 10),
(82, 47, 14),
(83, 48, 14),
(85, 49, 15),
(86, 50, 15),
(87, 51, 15),
(49, 52, 8),
(50, 53, 8),
(90, 54, 16),
(66, 55, 11),
(96, 55, 17),
(112, 55, 19),
(97, 56, 17),
(107, 57, 18),
(100, 58, 17),
(110, 58, 19);

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `sid` int NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`sid`, `sname`) VALUES
(1, 'Fever'),
(2, 'Cough'),
(3, 'Sore Throat'),
(4, 'Fatigue'),
(5, 'Body Aches'),
(6, 'Runny or Stuffy Nose'),
(7, 'Sneezing'),
(8, 'Mild Fatigue'),
(9, 'High Fever'),
(10, 'Cough with Phlegm'),
(11, 'Chest Pain'),
(12, 'Breathlessness'),
(13, 'Shortness of Breath'),
(14, 'Blurred Vision'),
(15, 'Nausea'),
(16, 'Vomiting'),
(17, 'Abdominal Pain'),
(18, 'Loss of Appetite'),
(19, 'Dark Urine'),
(20, 'Swelling in Legs/Feet/Face'),
(21, 'Difficulty Concentrating'),
(22, 'Weight Loss'),
(23, 'Fever Chills'),
(24, 'Headache'),
(25, 'Dizziness'),
(26, 'Back Pain'),
(27, 'Joint Pain'),
(28, 'Muscle Stiffness'),
(29, 'Loss of Height'),
(30, 'Stooped Posture'),
(31, 'Bone Fractures'),
(32, 'Tremors'),
(33, 'Psychic Symptoms (Fear, Anxiety)'),
(34, 'Numbness or Weakness in Limbs'),
(35, 'Coordination/Balance Problems'),
(36, 'Pelvic Pain'),
(37, 'Pain During Intercourse'),
(38, 'Painful Bowel Movements'),
(39, 'Excessive Bleeding During Menstruation'),
(40, 'Infertility'),
(41, 'Seizures'),
(42, 'Temporary Confusion'),
(43, 'Uncontrollable Jerking Movements'),
(44, 'Loss of Consciousness'),
(45, 'Memory Loss'),
(46, 'Disorientation'),
(47, 'Mood Swings'),
(48, 'Challenges in Problem-Solving'),
(49, 'Slowed Movement'),
(50, 'Impaired Posture'),
(51, 'Loss of Automatic Movements'),
(52, 'Reduced Range of Motion'),
(53, 'Redness of Skin Around Joint'),
(54, 'Changes in a Mole or Wart'),
(55, 'Loss of Vision'),
(56, 'Loss of Hearing'),
(57, 'Loss of Smell or Taste'),
(58, 'Difficulty Speaking');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`) VALUES
(1, 'junu', '1234'),
(2, 'junu', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `unique_symptom_disease` (`SID`,`DID`),
  ADD KEY `DID` (`DID`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `did` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `sid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `symptoms` (`sid`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`DID`) REFERENCES `diseases` (`did`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

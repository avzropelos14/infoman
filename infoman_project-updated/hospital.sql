-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2025 at 09:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoman`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_birth` varchar(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `medical_record` text NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `registration_date` varchar(255) NOT NULL,
  `doctor_in_charge` text NOT NULL,
  `room_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `date_of_birth`, `gender`, `contact`, `medical_record`, `blood_type`, `registration_date`, `doctor_in_charge`, `room_number`) VALUES
(0, 'wfwfw', '5555-05-05', 'Female', '242342352', '1. Disease:cancer\r\n2. Symptoms: daddwa\r\n3. Treatment:dadwda\r\n4. Allergies:dwad\r\n5. Medication:rtqr\r\n6. Previous Medical History:rw\r\n7. Follow-up:rrwrw\r\n8. Notes:ddadawda\r\n        ', 'B-', '34242-02-04', 'Dr. grgrgd', '4213423'),
(0, 'wfwfw', '5555-05-05', 'Female', '242342352', '1. Disease:cancer\r\n2. Symptoms: daddwa\r\n3. Treatment:dadwda\r\n4. Allergies:dwad\r\n5. Medication:rtqr\r\n6. Previous Medical History:rw\r\n7. Follow-up:rrwrw\r\n8. Notes:ddadawda\r\n        ', 'B-', '34242-02-04', 'Dr. grgrgd', '123213'),
(0, 'wfwfw', '5555-05-05', 'Female', '242342352', '1. Disease:cancer\r\n2. Symptoms: daddwa\r\n3. Treatment:dadwda\r\n4. Allergies:dwad\r\n5. Medication:rtqr\r\n6. Previous Medical History:rw\r\n7. Follow-up:rrwrw\r\n8. Notes:ddadawda\r\n        ', 'B-', '34242-02-04', 'Dr. grgrgd', '321');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 07:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `Car_ID` int(50) NOT NULL,
  `car_type` varchar(20) NOT NULL,
  `car_image` varchar(200) CHARACTER SET latin1 NOT NULL,
  `car_reg_no` varchar(20) NOT NULL,
  `car_seat` int(9) NOT NULL,
  `car_day_rent` int(10) NOT NULL,
  `Start_Date` date DEFAULT NULL,
  `End_Date` date DEFAULT NULL,
  `car_booked` tinyint(1) NOT NULL,
  `car_mileage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`Car_ID`, `car_type`, `car_image`, `car_reg_no`, `car_seat`, `car_day_rent`, `Start_Date`, `End_Date`, `car_booked`, `car_mileage`) VALUES
(1, 'Maruti Suzuki', 'prime1.jpg', 'MH15DE4653', 10, 10000, '2021-06-13', '2021-06-14', 1, 20),
(2, 'Hyundai', 'prime2.jpg\r\n', 'MH02FG3107', 6, 6000, NULL, NULL, 1, 20),
(3, 'Renault', 'prime3.jpg', 'MH07HJ6569', 7, 10000, '2021-06-10', '2021-06-11', 1, 21),
(4, 'Renault', 'prime4.jpg', 'MH15TF8787', 7, 8000, '2021-06-08', '2021-06-09', 1, 22),
(5, 'Mahindra', 'prime5.jpg', 'MH15JH7778', 7, 10000, '2021-06-12', '2021-06-13', 1, 21),
(6, 'Mahindra', 'prime6.jpg', 'MH15UH8856', 7, 10000, NULL, NULL, 0, 23),
(7, 'Maruti Suzuki', 's1.jpg', 'MH15FR3425', 4, 7000, NULL, NULL, 1, 18),
(8, 'Maruti Suzuki', 's2.jpeg', 'MH02GH6453', 6, 5000, NULL, NULL, 1, 18),
(9, 'Ford', 's3.jpg', 'MH02DE5643', 4, 7000, NULL, NULL, 1, 15),
(10, 'Maruti Suzuki', 'i1.jpg', 'MH15FG6234', 6, 3000, NULL, NULL, 1, 14),
(11, 'Nissan', 'i2.jpg', 'MH02YH4231', 4, 3000, '2021-06-06', '2021-06-07', 1, 17),
(12, 'Maruti Suzuki', 'i3.jpg', 'MH05HJ5564', 10, 3000, '2021-06-08', '2021-06-09', 1, 14),
(13, 'Maruti Suzuki', 'i4.jpg', 'MH09YU5678', 6, 3000, '2021-06-08', '2021-06-09', 1, 15),
(14, 'TATA', 'i5.jpg', 'MH15DG5642', 4, 3000, NULL, NULL, 0, 16),
(15, 'Nissan', 'i6.jpg', 'MH05TY5127', 4, 3000, NULL, NULL, 0, 16);

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `id` int(5) NOT NULL,
  `User_ID` int(20) NOT NULL,
  `Car_ID` int(20) NOT NULL,
  `car_reg_no` varchar(15) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Duration` int(15) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`id`, `User_ID`, `Car_ID`, `car_reg_no`, `Location`, `Duration`, `start_date`, `end_date`) VALUES
(50, 2, 5, ' MH15JH7778', 'Pune', 1, NULL, NULL),
(71, 4, 7, ' MH15FR3425', 'Nashik Road', 2, NULL, NULL),
(72, 4, 7, ' MH15FR3425', 'Nashik Road', 2, NULL, NULL),
(73, 4, 7, ' MH15FR3425', 'Nashik Road', 2, NULL, NULL),
(74, 5, 8, ' MH02GH6453', 'Nashik', 1, NULL, NULL),
(75, 5, 10, ' MH15FG6234', 'Nashik', 1, NULL, NULL),
(76, 4, 11, ' MH02YH4231', 'Nashik', 1, NULL, NULL),
(77, 2, 11, ' MH02YH4231', 'Nashik', 1, NULL, NULL),
(78, 2, 9, ' MH02DE5643', 'Nashik', 1, NULL, NULL),
(79, 2, 12, ' MH05HJ5564', 'Nashik', 1, NULL, NULL),
(80, 2, 13, ' MH09YU5678', 'Nashik', 1, NULL, NULL),
(81, 2, 12, ' MH05HJ5564', 'Nashik', 1, NULL, NULL),
(82, 5, 13, ' MH09YU5678', 'Nashik', 1, NULL, NULL),
(83, 5, 3, ' MH07HJ6569', 'Nashik', 1, '2021-06-10', '2021-06-11'),
(84, 6, 4, ' MH15TF8787', 'Nashik', 1, '2021-06-08', '2021-06-09'),
(85, 10, 5, ' MH15JH7778', 'Nashik Road', 1, '2021-06-12', '2021-06-13'),
(86, 10, 11, ' MH02YH4231', 'Nashik Road', 1, '2021-06-06', '2021-06-07'),
(87, 10, 11, ' MH02YH4231', 'Nashik Road', 1, '2021-06-06', '2021-06-07'),
(88, 10, 12, ' MH05HJ5564', 'Nashik', 1, '2021-06-08', '2021-06-09'),
(89, 10, 12, ' MH05HJ5564', 'Nashik', 1, '2021-06-08', '2021-06-09'),
(90, 10, 12, ' MH05HJ5564', 'Nashik', 1, '2021-06-08', '2021-06-09'),
(91, 10, 12, ' MH05HJ5564', 'Nashik', 1, '2021-06-08', '2021-06-09'),
(92, 10, 12, ' MH05HJ5564', 'Nashik', 1, '2021-06-08', '2021-06-09'),
(93, 10, 12, ' MH05HJ5564', 'Nashik', 1, '2021-06-08', '2021-06-09'),
(94, 10, 12, ' MH05HJ5564', 'Nashik', 1, '2021-06-08', '2021-06-09'),
(95, 10, 12, ' MH05HJ5564', 'Nashik', 1, '2021-06-08', '2021-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `User_ID` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_contact` varchar(11) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `repeat_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`User_ID`, `user_name`, `user_email`, `user_contact`, `user_password`, `repeat_password`) VALUES
(1, 'Ankita Patil', 'ankitapatil@gmail.com', '9563285671', 'test', ''),
(2, 'Utkarshaa Godse', 'sai@gmail.com', '9625314784', '$2y$10$WE3/bHk2we8q0ylJ9WJe0eDmXmHe0CTZOyh.XqfT3ZePWcAo77KOW', '$2y$10$FaK1dUaE50VNFcQNHq4zkufyZwDTXLQg6CCDy8D.1FBbRec3W7GRe'),
(3, 'Ankita Patil', 'anku@gmail.com', '3456123456', '$2y$10$WE3/bHk2we8q0ylJ9WJe0eDmXmHe0CTZOyh.XqfT3Ze...', '$2y$10$WE3/bHk2we8q0ylJ9WJe0eDmXmHe0CTZOyh.XqfT3Ze...'),
(4, 'Sunaina Godse', 'sunaina@gmail.com', '9625314784', '$2y$10$VEzHqf9NaLGwuDHS3uUqEuT5AtHGe3Blhg0YIVvxQAbsULrx56Mvi', '$2y$10$r4YciWxTpDCWp8v2Ax34ruSdUUpX9HI2G2OCx55NvWyrIkEdPMZ76'),
(5, 'Ruchita Wagh', 'ruchita@gmail.com', '9874563210', '$2y$10$Xsz7dNJnu4SYi9tpgZhZ1OktTH1S2JSfn12t0t8YljrPXY3MonOSa', '$2y$10$RlrWMKtVUkMiVN6pRRAyleHkaD9SfVzFEn4935qKsmKrMoPoM61dC'),
(6, 'Rekha Patil', 'rekha@gmail.com', '9874563210', '$2y$10$eCHQh5k9nKKZ35WI2jR5KuK05og0aKB2jIJBZNXarP5h5Wgpx2LCS', '$2y$10$/5yzOFIsb0u.OIEdq1wfseooNa4ermX2seSFIu8evRFVBn5yf31Bi'),
(7, 'Ulhas Godse', 'godse24@gmail.com', '8547963210', '$2y$10$jW2S5.YWwJO49tN6ix.7C.Y3A.bG8I3TPmGIZRjzaq3ARokpKOuva', '$2y$10$c1KvYVj9ovqCpE3fvxzGo.k7cDgn5xUXIU.kS5Ds83o.9R6aOOucy'),
(8, 'Shweta Jangam', 'shweta62@gmail.com', '9625314784', '$2y$10$nCXYm6MwMjQ/cTxsdkM2HevZ8rSREYYzjt.AwAzrrv.5l.tWa6tjW', '$2y$10$eIVegEibjnyYsY0u0O7sdutyqHwB3MMLTgf7pH8YqDnHuRHk4iuEi'),
(9, 'Bhavesh Jadhav', 'jadhav_12@gmail.com', '9625314784', '$2y$10$mHcNKcFtzDYLAyZUXjMIs.6fY90NV1mkGahzghkfvworl.JRBHgR2', '$2y$10$WOjv9QJl68HWxxRDMdoe1O9OTuH7.4FmVYCkYD4INGryH3jJIV1ma'),
(10, 'Snehal Godse', 'utkarshaagodse@gmail.com', '7896541230', '$2y$10$w2MHZ3K1gbnZizMezOH/zuL0UcFhTLeBtpAMlYAXDlmZwErEp9t6a', '$2y$10$kLlApNhimbNUDPerik8sBe9zI7.bxsrZ6ZXEZQEgYZy5pEA4KH0Fa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`Car_ID`),
  ADD KEY `Car_ID` (`Car_ID`);

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Car_ID` (`Car_ID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_info`
--
ALTER TABLE `car_info`
  MODIFY `Car_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rides`
--
ALTER TABLE `rides`
  ADD CONSTRAINT `rides_ibfk_1` FOREIGN KEY (`Car_ID`) REFERENCES `car_info` (`Car_ID`),
  ADD CONSTRAINT `rides_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `car_info` (`Car_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

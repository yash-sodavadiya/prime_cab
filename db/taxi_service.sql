-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 05:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxi_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblarea`
--

CREATE TABLE `tblarea` (
  `area_name` varchar(20) NOT NULL,
  `distance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_general_ci;

--
-- Dumping data for table `tblarea`
--

INSERT INTO `tblarea` (`area_name`, `distance`) VALUES
('sarthana', 0),
('kapodra', 3),
('matavadi', 8),
('vesu', 20),
('chowk', 18),
('sarsana', 25),
('kamrej', 8),
('yogi chowk', 5),
('mota varachha', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblbook`
--

CREATE TABLE `tblbook` (
  `Booking_id` int(10) NOT NULL,
  `Passenger_name` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Phone_no` varchar(15) NOT NULL,
  `Pick_up` varchar(40) NOT NULL,
  `Drop_location` varchar(40) NOT NULL,
  `Taxi_name` varchar(20) NOT NULL,
  `Price_km` int(20) NOT NULL,
  `Total_price` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_general_ci;

--
-- Dumping data for table `tblbook`
--

INSERT INTO `tblbook` (`Booking_id`, `Passenger_name`, `Email`, `City`, `Phone_no`, `Pick_up`, `Drop_location`, `Taxi_name`, `Price_km`, `Total_price`, `username`, `Status`) VALUES
(1, 'Yash', 'yash@gmail.com', 'Surat', '9876543210', 'kapodra', 'sarthana', 'Activa', 15, 150, 'Yash', 'Active'),
(2, 'Smit', 'smit@gmail.com', 'Surat', '9876543210', 'kapodra', 'sarthana', 'Activa', 15, 150, 'Smit', 'Active'),
(3, 'Jay', 'jay@gmail.com', 'Surat', '9876543210', 'kapodra', 'sarthana', 'Activa', 15, 150, 'Jay', 'Active'),
(17, 'yash', 'yash@gmail.com', 'surat', '9876543210', 'kapodra', 'sarthana', 'Activa     ', 15, 500, 'Yash', 'Cancle'),
(18, 'kenil', 'kenil@gmail.com', 'surat', '9876543210', 'matavadi', 'sarthana', 'Mercedes S Class', 25, 230, 'kenil', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbltaxi`
--

CREATE TABLE `tbltaxi` (
  `taxi_id` int(10) NOT NULL,
  `taxi_name` varchar(30) NOT NULL,
  `taxi_image` varchar(50) NOT NULL,
  `taxi_description` varchar(200) NOT NULL,
  `price_km` int(10) NOT NULL,
  `passanger` int(1) NOT NULL,
  `luggage` int(2) NOT NULL,
  `car_door` int(11) NOT NULL,
  `heated_seat` int(11) NOT NULL,
  `air_conditioner` varchar(3) NOT NULL,
  `base_rate` int(10) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_general_ci;

--
-- Dumping data for table `tbltaxi`
--

INSERT INTO `tbltaxi` (`taxi_id`, `taxi_name`, `taxi_image`, `taxi_description`, `price_km`, `passanger`, `luggage`, `car_door`, `heated_seat`, `air_conditioner`, `base_rate`, `category`) VALUES
(46, 'Activa     ', 'activa.jpg', 'This is scooty for 1 person.     ', 15, 1, 1, 1, 0, 'NO', 150, 'Bike'),
(48, 'Mercedes S Class', 'mercedes.jpg', 'This is Expansive car.', 25, 4, 4, 4, 4, 'YES', 250, 'Luxury car'),
(49, 'THAR', 'thar.jpg', 'This is good car.', 20, 3, 3, 2, 3, 'YES', 200, 'Car'),
(57, 'Auto-Rikshaw', 'auto-card.jpg', 'this is cheap taxi', 10, 3, 3, 2, 0, 'No', 120, 'Auto'),
(58, 'swift', 'swift.jpg', 'This is little premium taxi ', 20, 4, 4, 4, 4, 'YES', 200, 'Car');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Name`, `email`, `password`) VALUES
(1, 'Yash', 'yash@gmail.com', 'yash123'),
(2, 'jay', 'jay@gmail.com', 'jay'),
(3, 'smit', 'smit@gmail.com', 'smit'),
(5, 'kenil', 'kenil@gmail.com', 'kenil'),
(6, 'zeel', 'zeel@gmail.com', 'zeel'),
(7, 'yash8878', 'ysodavadiya@gmail.co', 'yash'),
(8, 'yash', 'yash@yahoo.com', 'yash@123'),
(9, 'kenil', 'kenil@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbook`
--
ALTER TABLE `tblbook`
  ADD PRIMARY KEY (`Booking_id`);

--
-- Indexes for table `tbltaxi`
--
ALTER TABLE `tbltaxi`
  ADD PRIMARY KEY (`taxi_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbook`
--
ALTER TABLE `tblbook`
  MODIFY `Booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbltaxi`
--
ALTER TABLE `tbltaxi`
  MODIFY `taxi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

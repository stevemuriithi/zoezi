-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2022 at 10:53 PM
-- Server version: 5.6.23-log
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m_misc2022_n0891597`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `Id` int(11) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `Distance` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Id`, `Day`, `Distance`) VALUES
(1, 'Mon', 5000),
(2, 'Tue', 6000),
(3, 'Wed', 2000),
(4, 'Thur', 7456),
(5, 'Fri', 200),
(6, 'Sat', 4000),
(7, 'Sun', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `chest`
--

CREATE TABLE `chest` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Instruction` varchar(10000) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chest`
--

INSERT INTO `chest` (`Id`, `Name`, `Instruction`, `Image`) VALUES
(1, 'Bench press barbell\r\n', '1. Lie flat on the bench holding the barbell within a shoulder width pronated grip.\r\n2. Retaract scapula and have elbows between 45 to 90 degree angle.\r\n3. Lift the bar from the rack and hold above the chest with arms extended.\r\n4. Pause at the bottom, push the bar to the start position while squeezing the chest.', 'bench_press_barbell.jpeg'),
(2, 'Cable crossover', '1. Grab the handles and raise arms to the side and slightly bend your elbows.\r\n2. Bring handles across the chest, squeezing the chest when the hands meet.\r\n3. Return the handles to the starting position and repeat for reps.\r\n', 'cable_cross1.png'),
(3, 'Chest dip', 'Hold body from arms extended above the chest dip bars.\r\nSlowly lower your body leaning forward and elbows out until you feel a stretch in the chest.\r\nfrom this position squeeze the chest and bring the body back upwards.', 'chest_dip.png'),
(5, 'Chest fly machine', '', 'chest_fly.png'),
(6, 'Chest press', '', 'chest_press.png');

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Muscle` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`Id`, `Name`, `Image`, `Muscle`, `type`) VALUES
(1, 'Bench press barbell', 'bench_press_barbell.jpeg', 'chest', 'g'),
(2, 'Cable crossover', 'cable_cross1.png', 'chest', 'g'),
(3, 'Chest dip', 'chest_dip.png', 'chest', 'g'),
(4, 'Chest fly machine', 'chest_fly.png', 'chest', 'g'),
(5, 'Chest press', 'chest_press.png', 'chest', 'g'),
(6, 'Arnold press', 'Arnold.png', 'shoulder', 'g'),
(7, 'Smith machine', 'Overhead-smith_machine.png', 'shoulder', 'g'),
(8, 'Shoulder press', 'Shoulder_press_machine.png', 'shoulder', 'g'),
(9, 'Leg curl', 'Leg_curl.png', 'legs', 'g'),
(10, 'Leg extension', 'Leg_extension.png', 'legs', 'g'),
(11, 'Leg press', 'Leg_press.png', 'legs', 'g'),
(12, 'Front raise band', 'front_raise_band.png', 'shoulder', 'h'),
(13, 'Lateral raise band', 'Lateral_raise_band.png', 'shoulder', 'h'),
(14, 'Upright row dumbbell', 'Upright_row.png', 'shoulder', 'h'),
(15, 'Deadlift band', 'Deadlift_band.png', 'legs', 'h'),
(16, 'Squat', 'Squat.png', 'legs', 'h'),
(17, 'Chest fly band', 'Chest_fly_band.png', 'chest', 'h'),
(18, 'Push up band', 'Pushup_band.png', 'chest', 'h'),
(19, 'Chest dip', 'Chest_dip.png', 'chest', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cal` int(11) NOT NULL,
  `meal` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `cal`, `meal`, `image`) VALUES
(1, 'Banana', 90, 'snack', 'banana.png'),
(2, 'Rice', 130, 'main', 'rice.png'),
(3, 'Eggs', 75, 'breakfast', 'fried-egg.png'),
(4, 'Apple', 51, 'snack', 'apple.png'),
(5, 'Beef steak', 300, 'main', 'meat.png'),
(6, 'Pancakes', 213, 'breakfast', 'pancakes.png '),
(7, 'Burger', 300, 'main', 'burger.png');

-- --------------------------------------------------------

--
-- Table structure for table `football`
--

CREATE TABLE `football` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `football`
--

INSERT INTO `football` (`Id`, `Name`, `Image`) VALUES
(1, 'Leg curl', 'Leg_curl.png'),
(2, 'Smith machine', 'Overhead-smith_machine.png'),
(3, 'Leg press', 'Leg_press.png'),
(4, 'Shoulder press', 'Shoulder_press_machine.png');

-- --------------------------------------------------------

--
-- Table structure for table `legs`
--

CREATE TABLE `legs` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `legs`
--

INSERT INTO `legs` (`Id`, `Name`, `Image`) VALUES
(1, 'Leg curl', 'Leg_curl.png'),
(2, 'Leg extension', 'Leg_extension.png'),
(3, 'Leg press', 'Leg_press.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'member',
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `level`, `age`) VALUES
(1, 'Steve', 'steve1', 'admin', 23),
(2, ' m', 'M1', 'member', 19),
(3, ' Steve ', 'VV', 'member', 32),
(4, 'w', 'w1', 'member', 25),
(5, 'w', 'w1', 'member', 18),
(6, 's', 's1', 'member', 22);

-- --------------------------------------------------------

--
-- Table structure for table `login2`
--

CREATE TABLE `login2` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'user',
  `age` int(11) NOT NULL DEFAULT '18'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login2`
--

INSERT INTO `login2` (`ID`, `username`, `password`, `level`, `age`) VALUES
(1, ' s ', 's1', 'user', 23),
(2, '  s  ', 's1', '', 0),
(6, 'm', 'm1', 'user', 18);

-- --------------------------------------------------------

--
-- Table structure for table `rugby`
--

CREATE TABLE `rugby` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rugby`
--

INSERT INTO `rugby` (`Id`, `Name`, `Image`) VALUES
(1, 'Arnold press', 'Arnold.png'),
(2, 'Bench press barbel', 'bench_press_barbell.jpeg'),
(3, 'Leg curl', 'Leg_curl.png'),
(4, 'Smith machine', 'Overhead-smith_machine.png'),
(5, 'Cable crossover', 'cable_cross1.png');

-- --------------------------------------------------------

--
-- Table structure for table `shoulders`
--

CREATE TABLE `shoulders` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shoulders`
--

INSERT INTO `shoulders` (`Id`, `Name`, `Image`) VALUES
(1, 'Arnold press', 'Arnold.png'),
(2, 'Smith machine', 'Overhead-smith_machine.png'),
(3, 'Shoulder press', 'Shoulder_press_machine.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'book', '', 100.00),
(0, 'chair', '', 300.00),
(1, 'book', '', 100.00),
(0, 'chair', '', 300.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `first_name`, `last_name`, `age`, `height`, `weight`) VALUES
(1, 'Steve', 'muriithi', 23, 186, 73);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `chest`
--
ALTER TABLE `chest`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `football`
--
ALTER TABLE `football`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `legs`
--
ALTER TABLE `legs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login2`
--
ALTER TABLE `login2`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `rugby`
--
ALTER TABLE `rugby`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `shoulders`
--
ALTER TABLE `shoulders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chest`
--
ALTER TABLE `chest`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `football`
--
ALTER TABLE `football`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `legs`
--
ALTER TABLE `legs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login2`
--
ALTER TABLE `login2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rugby`
--
ALTER TABLE `rugby`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shoulders`
--
ALTER TABLE `shoulders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

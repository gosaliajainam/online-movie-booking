-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 03:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_movie`
--

CREATE TABLE `add_movie` (
  `id` int(25) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `directer` varchar(100) NOT NULL,
  `release_date` varchar(100) NOT NULL,
  `categroy` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `you_tube_link` varchar(250) NOT NULL,
  `show` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `decription` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_movie`
--

INSERT INTO `add_movie` (`id`, `movie_name`, `directer`, `release_date`, `categroy`, `language`, `you_tube_link`, `show`, `action`, `decription`, `image`, `status`) VALUES
(9, 'Avengers', 'Kevin Feige', 'April 11, 2012', 'Scince', 'English', 'https://www.youtube.com/embed/eOrNdBpGMv8', '21:00', 'running', '                ', 'aven.jpg', 1),
(10, 'Rampage', 'Brad Peyton', '13 April 2018', 'Adventure ', 'Hindi', '', '', 'upcoming', '                                Jumanji is a 1995 American fantasy adventure film directed by Joe Johnston from a screenplay by Jonathan Hensleigh, Greg Taylor, and Jim Strain. Loosely based on Chris Van Allsburg\'s picture book of the same name, the film is the first installment of the Jumanji franc', 'rampage.jpg', 1),
(13, 'Chaal Jeevi Laiye', 'Vipul Mehta', 'Jan 7, 2019', 'Drama', 'Gujarati', 'https://www.youtube.com/embed/y1NoFZPVTr0', '15:00,18:15', 'running', '                Chaal Jeevi Laiye is a story of a Father-Son’s unplanned journey to escape a workaholic existence. The duo, Aditya Parikh and his father Bipin Chandra Parikh explore the meaning of life as they meet a stranger traveler named Ketki, who takes them on a journey of surprises and realiza', 'chaal-jivi-laiye.jpg', 1),
(14, 'Tanaji', 'Om Raut', '10th January 2020.', ' Historical', 'Hindi', 'https://www.youtube.com/embed/cffAGIYTEHU', '18:00,15:15', 'running', '                Gulshan Kumar, T-Series & Ajay Devgn ffilms Presents official trailer of the most awaited bollywood movie TANHAJI -THE UNSUNG WARRIOR in 3D, Directed by Om Raut, will release on 10th January 2020.\r\nTanhaji- The Unsung Warrior is an Indian biographical period drama film based on the l', 'tanaji.jpeg', 1),
(15, 'Playing With Fire ', 'Andrea Sedlackova', '6 November 2019', 'Comedy', 'English', 'https://www.youtube.com/embed/fd5GlZUpfaM', '21:15', 'running', '                Playing with Fire is a 2019 American family comedy film directed by Andy Fickman from a screenplay by Dan Ewen and Matt Lieberman based on a story by Ewen. The film stars John Cena, Keegan-Michael Key, John Leguizamo, Dennis Haysbert, Brianna Hildebrand and Judy Greer, and follows a ', 'movieposter_en.jpg', 1),
(16, 'Golmaal Again', 'Rohit Shetty', '20 October 2017', 'Action', 'Hindi', 'https://www.youtube.com/embed/VgQUwsUHdqc', '', 'upcoming', 'Five orphan men return to the orphanage they grew up in to attend their mentor\'s funeral. However, they encounter the ghost of their childhood friend, Khushi, and help her attain salvation.', 'golmaal_again.jpg', 1),
(17, 'Shreshaah', 'Vishnuvardhan', '12 August 2021', 'Biographical War', 'Hindi', 'https://www.youtube.com/embed/Q0FTXnefVBA', '', 'upcoming', 'The life of Indian army captain Vikram Batra, awarded with the Param Vir Chakra, India\'s highest award for valour for his actions during the 1999 Kargil War.', 'shershah.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(1, 'Jainam', 'jainmdg@gmail.com', 'admin', '1');


-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `movie` varchar(100) NOT NULL,
  `show_time` varchar(100) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `totalseat` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_number` varchar(25) NOT NULL,
  `ex_date` varchar(100) NOT NULL,
  `cvv` int(5) NOT NULL,
  `custemer_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `uid`, `movie`, `show_time`, `seat`, `totalseat`, `price`, `payment_date`, `booking_date`, `card_name`, `card_number`, `ex_date`, `cvv`, `custemer_id`) VALUES
(1, 1, 'Chaal Jeevi Laiye', '15:00', 'G1,G2,D1,D2', '4', '500', 'Wed-09-21 ', 'Thu-09-21 ', 'pratik d', '7896', '2021-09-30', 789, 1869901767),
(2, 1, 'Tanaji', '15:15', 'F7,F8,E7,E8,A7,A8', '6', '1200', 'Thu-09-21 ', 'Fri-09-21 ', 'pratik d', '145260', '2021-09-30', 349, 1890244096),
(3, 2, 'Chaal Jeevi Laiye', '15:00', 'I5,I6,H5,H6,G5,G6', '6', '600', 'Thu-09-21 ', 'Fri-09-21 ', 'parthiv', '45456845565', '2021-10-23', 455, 560041981),
(4, 3, 'Chaal Jeevi Laiye', '15:00', 'I7,I8', '2', '200', 'Thu-09-21 ', 'Fri-10-21 ', 'rushabh', '545656', '2021-09-29', 545, 447698228),
(5, 3, 'Chaal Jeevi Laiye', '18:15', 'G9', '1', '100', 'Thu-09-21 ', 'Fri-10-21 ', 'rushabh', '565464', '2021-09-10', 655, 2080652377);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massage` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `massage`) VALUES
(1, 'pratik', 'prati@gmail.com', 'Great customer service. Good promotions.'),
(2, 'dipen', 'dipe@gmail.com', 'Book my show is widely use now days.'),
(3, 'shreya', 'shrea@gmail.com', 'you easily choose your sheets.');


-- --------------------------------------------------------

--
-- Table structure for table `theater_show`
--

CREATE TABLE `theater_show` (
  `id` int(25) NOT NULL,
  `show` varchar(100) NOT NULL,
  `theater` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater_show`
--

INSERT INTO `theater_show` (`id`, `show`, `theater`) VALUES
(1, '21:00', '1'),
(2, '15:00', '1'),
(3, '18:00', '1'),
(4, '18:15', '2'),
(5, '15:15', '2'),
(6, '21:15', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `city` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `mobile`, `city`, `password`, `image`) VALUES
(1, 'pratik', 'prati@gmail.com', 4578945612, 'Surendranagar', '4550', ''),
(2, 'parthiv', 'parthi@gmail.com', 2147483647, 'WADHWAN', '78963', ''),
(3, 'rushabh', 'rushab@gmail.com', 1198875215, 'joravarnagar', '147852', ''),
(4, 'hetanshi', 'hetansh@gmail.com', 1234567890, 'fggfrg', '0', ''),
(5, 'dharmin', 'dharm@gmail.com', 2147483647, 'surat', 'hitesh', 'eye candy wallpapers 6 by deadpxl.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_movie`
--
ALTER TABLE `add_movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater_show`
--
ALTER TABLE `theater_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_movie`
--
ALTER TABLE `add_movie`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `theater_show`
--
ALTER TABLE `theater_show`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

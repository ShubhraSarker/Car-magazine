-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2017 at 03:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carmagazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'sarkers209@gmail.com', '1232');

-- --------------------------------------------------------

--
-- Table structure for table `carculture`
--

CREATE TABLE `carculture` (
  `id` int(20) NOT NULL,
  `modelname` varchar(40) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `firstofficialpicture`
--

CREATE TABLE `firstofficialpicture` (
  `id` int(20) NOT NULL,
  `modelname` varchar(40) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `E-mail` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `magazinereviews`
--

CREATE TABLE `magazinereviews` (
  `id` int(20) NOT NULL,
  `modelname` varchar(40) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id` int(20) NOT NULL,
  `title` varchar(40) NOT NULL,
  `model_no` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `title`, `model_no`) VALUES
(1, 'Abarth', 'f5'),
(2, 'Alfa Romeo', 'b2'),
(3, 'Alpine', 'c2'),
(4, 'Ariel', 'd2'),
(5, 'Aston Martin', 'e2'),
(6, 'Audi', 'f2'),
(7, 'Bentley', 'g2'),
(8, 'BMW', 'h2'),
(9, 'Bugatti', 'i2'),
(10, 'Cadillac', 'j2'),
(11, 'Caterham', 'k2'),
(12, 'Chevrolet', 'l2'),
(13, 'Chrysler', 'a2'),
(14, 'Citroen', 'n1'),
(15, 'Dacia', 'b1'),
(16, 'Daihatsu', 'c1'),
(17, 'Dodge', 'd1'),
(18, 'DS', 'e1'),
(19, 'Ferrari', 'f1'),
(20, 'Fiat', 'g1'),
(21, 'Fisker', 'h1'),
(22, 'Ford', 'i1'),
(23, 'Gordon Murray', 'j1'),
(24, 'Honda', 'k1'),
(25, 'Hummer', 'm1'),
(26, 'Hyundai', 'g4'),
(27, 'Infiniti', 'h4'),
(28, 'Jaguar', 'i4'),
(29, 'Jeep', 'j4'),
(30, 'Kia', 'k4'),
(31, 'Lamborghini', 'l4'),
(32, 'Lancia', 'm4'),
(33, 'Land Rover', 'n4'),
(34, 'Lexus', 'o4'),
(35, 'Lotus', 'p4'),
(36, 'Maserati', 'q4'),
(37, 'Maybach', 'r4'),
(38, 'Mazda', 'a5'),
(39, 'McLaren', 'b5'),
(40, 'Mercedes-Benz', 'c5'),
(41, 'MG', 'd5'),
(42, 'Mini', 'e5'),
(43, 'Mitsubishi', 'f4'),
(44, 'Morgan', 'e4'),
(45, 'Nissan', 'd4'),
(46, 'Noble', 'g3'),
(47, 'Pagani', 'f3'),
(48, 'Peugeot', 'e3'),
(49, 'Porsche', 'j3'),
(50, 'Proton', 'd3'),
(51, 'Renault', 'c3'),
(52, 'Rolls-Royce', 'b3'),
(53, 'Seat', 'a3'),
(54, 'Skoda', 'h3'),
(55, 'Smart', 'i3'),
(56, 'Subaru', 'c4'),
(57, 'Suzuki', 'b4'),
(58, 'Tata', 'a4'),
(59, 'Tesla', 'n3'),
(60, 'Toyota', 'm3'),
(61, 'Vauxhall', 'l3'),
(62, 'Volkswagen', 'k3'),
(63, 'Volvo', 'a1');

-- --------------------------------------------------------

--
-- Table structure for table `newcar`
--

CREATE TABLE `newcar` (
  `id` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `detail` varchar(2000) NOT NULL,
  `features` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newcar`
--

INSERT INTO `newcar` (`id`, `model`, `image`, `detail`, `features`) VALUES
(20, 'bugatti', 'bugatti-chiron-11.jpg', 'Driving a Bugatti Veyron is like carrying a 14.6-foot-long open wallet that is spewing 50-dollar bills. ', 'new'),
(21, 'porshe 911', 'new-porsche-911.jpg', 'Porsche cars have a virtually untarnished reputation and are considered among the finest performance vehicles in the world', 'new'),
(22, 'Rolls Royce', '2016_rolls-royce_phantom_sedan.jpg', 'For those who desire sybaritic luxury and a spirited driving experience in the same ultra-pricey motorcar, the Ghost Series II is your answer', 'top10'),
(23, 'Audi', 'audi.jpg', 'Most have petrol and diesel engine options, and some boast the Quattro all-wheel drive system. Models include the A1, A3, A4, A5, A6, A7, A8, Q3, Q5, Q7, TT, R8, RS, and many are available in hatch, sedan, coupe, convertible, or wagon variants.', 'top10'),
(24, 'jaguar', 'jaguar.jpg', 'The 2018 Jaguar XF ranks 11 out of 15 Luxury Midsize Cars.', 'old'),
(25, 'Maruti Suzuki New Swift', 'Maruti-Suzuki-New-Swift-Left-Front-Three-Quarter-88877.jpg', ' It is always a big thing when the auto industryâ€™s strongest product undergoes an update and it is no different this time around with the modern era Maruti Suzuki Swift undergoing its third major update. The car was showcased for the Japanese market towards the end of last year and should arrive in the Indian market by the end of this year with a similar design and underpinnings.', 'front'),
(26, 'Tata Nexon', 'Tata-Nexon-Exterior-103901.jpg', ' With SUVs being the flavour of the season, Tata Motors seems to have picked up the scent and has been busy constructing a compact SUV for our market. Speculations have suggested that this SUV should be ready to hit showrooms in 2017 and if this is anything to go by, we can expect Tata to showcase this compact SUV in its concept stages at the upcoming 2016 Auto Expo in Delhi.', 'front'),
(27, 'Land Rover Range Rover Velar', 'Land-Rover-Range-Rover-Velar-Right-Front-Three-Quarter-92180.jpg', ' Land Rover has raised the curtains from over the new Range Rover Velar. The fourth Rangie on the block will find itself stacked above the Range Rover Evoque and below the Range Rover Sport. Here is all you need to know about the new Range Rover Velar.', 'front'),
(28, 'Hummer H2', 'Hummer H2.jpg', ' The Hummer H2 is an SUV and SUT that was marketed by Hummer and built by AM General from 2002 to 2009.[1] It is a large truck: slimmer than the Hummer H1, while being longer, lighter, and taller, with room for six or seven passengers (including driver). The rearmost part of the H2 SUV was modified to a pickup truck bed for the 2005 H2 SUT (\"sport utility truck\"). ', 'front'),
(29, 'Ferrari GTC4LUSSO', 'Ferrari GTC4LUSSO.jpg', ' Powerful yet sophisticated, sporty yet luxurious, Ferrariâ€™s new 12-cylinder really does make every journey a radically different experience. Whether being driven solo or with all four seats occupied, the latest addition to the Ferrari range puts people at the centre of a whole new world. The GTC4Lusso was designed to deliver different and entirely surprising emotions.', 'front'),
(30, 'Mercedes-Benz SLS', 'Mercedes-Benz SLS.jpg', ' The Mercedes-Benz SLS AMG (C197 / R197) is a front mid-engine, 2-seater luxury, limited production supercar automobile developed by Mercedes-AMG of German automaker Mercedes-Benz and was the first Mercedes-Benz automobile designed in-house by AMG.[2] The car, which has gull-wing doors, was the successor to the Mercedes-Benz SLR McLaren and was described by Mercedes-Benz as a spiritual successor to the Mercedes-Benz 300SL Gullwing.', 'front');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` enum('aministration','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `type`) VALUES
(1, 'shuvro', 'sarkers209@gmail.com', '123456', 'user'),
(2, 'shuvro12', 'shuvrosarkercse091@gmail.com', '123456', 'user'),
(3, 'pangkaj', 'pamngvfvn@gmail.com', '23213', 'user'),
(4, 'pangkaj', 'p@gmail.com', '54321', 'user'),
(5, 'sf', 'f@gmail.com', '1234', 'user'),
(6, 'Shuvro', 'shuvroakash091@gmail.com', '12345', 'aministration'),
(7, 'pankaj', 'pankajdebnath996@gmail.com', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `usedcarfeatures`
--

CREATE TABLE `usedcarfeatures` (
  `id` int(20) NOT NULL,
  `modelname` varchar(40) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `features` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carculture`
--
ALTER TABLE `carculture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firstofficialpicture`
--
ALTER TABLE `firstofficialpicture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazinereviews`
--
ALTER TABLE `magazinereviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newcar`
--
ALTER TABLE `newcar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usedcarfeatures`
--
ALTER TABLE `usedcarfeatures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `carculture`
--
ALTER TABLE `carculture`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `firstofficialpicture`
--
ALTER TABLE `firstofficialpicture`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `magazinereviews`
--
ALTER TABLE `magazinereviews`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `newcar`
--
ALTER TABLE `newcar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usedcarfeatures`
--
ALTER TABLE `usedcarfeatures`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

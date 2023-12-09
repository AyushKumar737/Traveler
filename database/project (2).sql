-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 06:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `add_package`
--

CREATE TABLE `add_package` (
  `Id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `place` varchar(300) NOT NULL,
  `days` varchar(255) NOT NULL,
  `image1` varchar(300) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `image3` varchar(300) NOT NULL,
  `name3` varchar(255) NOT NULL,
  `description3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `name4` varchar(255) NOT NULL,
  `description4` varchar(255) NOT NULL,
  `image5` varchar(300) NOT NULL,
  `name5` varchar(300) NOT NULL,
  `description5` varchar(300) NOT NULL,
  `image6` varchar(300) NOT NULL,
  `name6` varchar(300) NOT NULL,
  `description6` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_package`
--

INSERT INTO `add_package` (`Id`, `pname`, `price`, `image`, `place`, `days`, `image1`, `name1`, `description1`, `image2`, `name2`, `description2`, `image3`, `name3`, `description3`, `image4`, `name4`, `description4`, `image5`, `name5`, `description5`, `image6`, `name6`, `description6`) VALUES
(15, 'Discover amazing places of the Varansi with us', '35000', '1700325623.jpg', 'Varanasi', '9 days', '1700325623.jpg', 'ASSI GHAT', 'Assi Ghat is the southernmost ghat in Varanasi. It is one of the biggest ghats of Varanasi and most popular one.', '1700325623.jpg', 'DASHASHWAMEDH GHAT', 'Dashashwamedh Ghat is a main ghat in Varanasi located on the Ganges River in Uttar Pradesh. It is located close to Vishwanath Temple.', '1700325623.jpg', 'MANIKARNIKA GHAT', 'The Manikarnika Ghat is one of the oldest ghats in Varanasi. It is mentioned in a Gupta inscription of 5th century.', '1700325623.jpg', 'PANCHGANGA GHAT', 'Panchganga ghat is believed to be the meeting point of five rivers Ganga, Yamuna, Saraswati, Kiran, and Dhutapapa.', '1700325623.jpg', 'SARNATH', 'Located only about 70 metres (230 feet) to the southwest of the Dhamek Stupa, this temple is dedicated to Shreyansanatha.', '1700325623.jpg', 'RAMNAGAR-FORT', 'The Ramnagar Fort is a fortification in Ramnagar. It is located near the Ganges on its eastern bank, opposite to the Tulsi Ghat.'),
(16, 'Discover amazing places of the Kedarnath with us', '35000', '1700325795.jpg', 'Kedarnath', '4 days', '1700325795.jpg', 'Sonprayag', 'A tiny hamlet on the confluence banks of rivers Mandakini and Basuki. Devotees take a dip in the holy waters with the faith to attain nirvana.', '1700325795.jpg', 'Shri Bhairavnath Temple', 'A temple dedicated to Bhairavnath, a fierce form of Lord Shiva.', '1700325795.jpg', 'Adi Shankaracharya Samadhi', 'A memorial dedicated to Adi Shankaracharya, a great philosopher and theologian who is credited with the revival of Hinduism in India.', '1700325795.jpg', 'Kedarnath Temple', 'Kedarnath is a town in the Garhwal Himalayas in the state of Uttarakhand, India. It is built around the Kedarnath Temple, one of the most revered Hindu temples in India. The temple is located at an altitude of 3,583 meters above sea level. Kedarnath is on', '', '', '', '', '', ''),
(17, 'Discover amazing places of the Badrinath with us', '35000', '1700327355.jpg', 'Badrinath', '4 days', '1700327355.jpg', 'Charanpaduka', 'Charanpaduka is a sacred rock located in the town of Badrinath in Uttarakhand, India. It is believed to have the footprints of Lord Vishnu, and taking a dip in its hot spring water is considered spiritually rejuvenating. ', '1700327355.jpg', 'Vasudhara Falls', 'A beautiful waterfall located in Mana Village, about 9km from Badrinath.', '1700327355.jpg', 'Tapt Kund', 'Tapt Kund is a natural hot water spring located in close proximity to the Badrinath Temple in Uttarakhand, India. It is considered a sacred and therapeutic site with several legends and beliefs associated with it.', '1700327355.jpg', 'Badrinath Temple', 'The Badrinath Temple is a Hindu temple dedicated to Lord Vishnu and is situated in the town of Badrinath in Uttarakhand, India. It is one of the most important pilgrimage sites in India and is among the four holy places or Char Dham, which are much revere', '', '', '', '', '', ''),
(18, 'Discover amazing places of the Mussoorie with us', '35000', '1700327715.jpg', 'Mussoorie', '6 days', '1700325795.jpg', 'Sonprayag', 'A tiny hamlet on the confluence banks of rivers Mandakini and Basuki. Devotees take a dip in the holy waters with the faith to attain nirvana.', '1700325795.jpg', 'Shri Bhairavnath Temple', 'A temple dedicated to Bhairavnath, a fierce form of Lord Shiva.', '1700325795.jpg', 'Adi Shankaracharya Samadhi', 'A memorial dedicated to Adi Shankaracharya, a great philosopher and theologian who is credited with the revival of Hinduism in India.', '1700325795.jpg', 'Kedarnath Temple', 'Kedarnath is a town in the Garhwal Himalayas in the state of Uttarakhand, India. It is built around the Kedarnath Temple, one of the most revered Hindu temples in India. The temple is located at an altitude of 3,583 meters above sea level. Kedarnath is on', '1700327715.jpg', 'SARNATH', 'Located only about 70 metres (230 feet) to the southwest of the Dhamek Stupa, this temple is dedicated to Shreyansanatha.', '1700327715.jpg', 'Manav', 'The Ramnagar Fort is a fortification in Ramnagar. It is located near the Ganges on its eastern bank, opposite to the Tulsi Ghat.'),
(19, 'Discover amazing places of the Agra with us', '35000', '1700327812.jpg', 'Agra', '2 days', '1700325795.jpg', 'Sonprayag', 'A tiny hamlet on the confluence banks of rivers Mandakini and Basuki. Devotees take a dip in the holy waters with the faith to attain nirvana.', '1700325795.jpg', 'Shri Bhairavnath Temple', 'A temple dedicated to Bhairavnath, a fierce form of Lord Shiva.', '1700325795.jpg', 'Adi Shankaracharya Samadhi', 'A memorial dedicated to Adi Shankaracharya, a great philosopher and theologian who is credited with the revival of Hinduism in India.', '1700325795.jpg', 'Kedarnath Temple', 'Kedarnath is a town in the Garhwal Himalayas in the state of Uttarakhand, India. It is built around the Kedarnath Temple, one of the most revered Hindu temples in India. The temple is located at an altitude of 3,583 meters above sea level. Kedarnath is on', '1700327715.jpg', 'SARNATH', 'Located only about 70 metres (230 feet) to the southwest of the Dhamek Stupa, this temple is dedicated to Shreyansanatha.', '1700327715.jpg', 'Manav', 'The Ramnagar Fort is a fortification in Ramnagar. It is located near the Ganges on its eastern bank, opposite to the Tulsi Ghat.'),
(20, 'Discover amazing places of the Manali with us', '35000', '1700328049.jpg', 'Manali', '6 days', '1700325795.jpg', 'Sonprayag', 'A tiny hamlet on the confluence banks of rivers Mandakini and Basuki. Devotees take a dip in the holy waters with the faith to attain nirvana.', '1700325795.jpg', 'Shri Bhairavnath Temple', 'A temple dedicated to Bhairavnath, a fierce form of Lord Shiva.', '1700325795.jpg', 'Adi Shankaracharya Samadhi', 'A memorial dedicated to Adi Shankaracharya, a great philosopher and theologian who is credited with the revival of Hinduism in India.', '1700325795.jpg', 'Kedarnath Temple', 'Kedarnath is a town in the Garhwal Himalayas in the state of Uttarakhand, India. It is built around the Kedarnath Temple, one of the most revered Hindu temples in India. The temple is located at an altitude of 3,583 meters above sea level. Kedarnath is on', '1700327715.jpg', 'SARNATH', 'Located only about 70 metres (230 feet) to the southwest of the Dhamek Stupa, this temple is dedicated to Shreyansanatha.', '1700327715.jpg', 'Manav', 'The Ramnagar Fort is a fortification in Ramnagar. It is located near the Ganges on its eastern bank, opposite to the Tulsi Ghat.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`) VALUES
(1, 'manav', '877'),
(7, 'manav23', '$2y$10$fgnbg.fyF1fc2V3irZGLKeV'),
(8, 'manav', '9999999999'),
(9, 'manav896', '$2y$10$B5zW2VOeEcleRXeNwDOt4uo'),
(10, 'manav90', '$2y$10$uINNOpDqhXT.vn68P8AU7uh');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `fname`, `email`, `subject`, `message`) VALUES
(4, 'sd', 'dyegdye@gmail.com', 'ccccccccccccccccccccccccccc', 'sssssssssssssssssssssssssss'),
(5, 'ssssss', 'e9rwv9yd@freeml.net', 'ssssssss', 'sssssssssssssss'),
(6, 'manav', 'HII@G.C', 'late response', 'you need to improve your websi'),
(7, 'Ishu', 'ktm@gmail.com', 'additional packages', 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `package_booking`
--

CREATE TABLE `package_booking` (
  `p_id` int(11) NOT NULL,
  `user_id` int(111) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `select_package` varchar(50) NOT NULL,
  `adults` int(30) NOT NULL,
  `child` int(30) NOT NULL,
  `room` varchar(300) NOT NULL,
  `service` varchar(111) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_booking`
--

INSERT INTO `package_booking` (`p_id`, `user_id`, `first_name`, `last_name`, `check_in`, `check_out`, `select_package`, `adults`, `child`, `room`, `service`, `email`, `mobile`) VALUES
(6, 0, 'qq', 'ww', '2023-10-20', '2023-10-11', 'Shimla', 2, 3, '', '', 'manavchauhanmaths@gmail.com', 2147483647),
(7, 0, 'qq', 'ww', '2023-10-20', '2023-10-11', 'Shimla', 2, 3, '', '', 'manavchauhanmaths@gmail.com', 2147483647),
(8, 0, 'name', 'dddddddddddd', '2023-10-05', '2023-10-30', 'Vrindavan', 6, 6, '', '', 'HII@G.C', 11),
(9, 0, 'Ishu', 'Chauhan', '2023-10-17', '2023-10-03', 'Leh', 5, 2, '', '', 'ktm@gmail.com', 2147483647),
(10, 0, 'manav', 'sssss', '2023-10-18', '2023-11-02', 'Leh', 2, 3, '', '', 'jn@g.c', 2147483647),
(11, 0, 'name', 'ww', '2023-10-25', '2023-10-23', 'Vrindavan', 1, 1, '', '', 'e9rwv9yd@freeml.net', 2147483647),
(16, 0, 'manav', 'sssss', '2023-11-23', '2023-11-21', 'Jaipur', 3, 4, '', '', 'huer@gmail.com', 2147483647),
(17, 0, 'manav', 'sssss', '2023-11-29', '2023-12-08', 'Jhodhpur', 2, 1, 'Food & Restaurant', '', 'gyh@gmail.com', 2147483647),
(18, 0, 'manav', 'sssss', '2023-11-30', '2023-11-23', 'Jhodhpur', 2, 2, 'Spa & Fitnesst', '', 'sds@gmail.com', 0),
(19, 0, 'manav', 'sssss', '2023-11-28', '2023-11-08', 'Rishikesh', 2, 0, 'Beachfront', 'Food & Restaurant', 'ssssssssd@gmail.com', 2147483647),
(22, 0, 'manav', 'sssss', '2023-12-08', '2023-12-01', 'Jhodhpur', 2, 2, 'Beachfront', 'Spa & Fitnesst', 'HssII@G.C', 2147483647),
(23, 0, 'dfgfg', 'dddddddddddd', '2023-11-23', '2023-11-08', 'Leh', 2, 2, 'Penthouse Suites', 'Spa & Fitnesst', 'final@gmail.com', 2147483647),
(24, 0, 'manav', 'dfef', '2024-01-05', '2024-01-06', 'Jhodhpur', 1, 2, 'Resort', 'Spa & Fitnesst', 'ewfw@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `querry`
--

CREATE TABLE `querry` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`) VALUES
(1, 'manav', 'manavchauhanmaths@gmail.com', '$2y$10$Ug4rmy1mdpZuBPFhs217h.iqKhy9//7RiFVD.1IZDp8'),
(2, 'manav2', 'manavchauhanbio@gmail.com', '$2y$10$Te104Ey3E35OeYh8wp7PMOUcaER5KA/IacoBLwz96l/'),
(3, 'manav', 'manavchauhan@gmail.com', '$2y$10$XD4liqE0PVbibRaGG03hKupyMKfUJ.YDWr/PmX05u0p'),
(4, 'realmanav', 'manavchauhantry@gmail.com', '$2y$10$shxmhReynhJrM0CBFIIiyuelqeH6Y.6bNksuZDQ5TxE'),
(5, 'name', 'huj@g.c', '$2y$10$DuY7FDzyimpdI4BK4hAsJOnQsDLwBkj3Q9TpZFr5e7g'),
(6, 'final', 'final@gmail.com', '$2y$10$5NTBqVBvrL6nAnAYyJ0IGelQQpc9YbJ2GGC9jIqt5YIotBEy7IfMi'),
(7, 'ishu', 'milindgaba1714@gmail.com', '$2y$10$IHolQ51FRyDTMPPzE15JOuiw1qV67mKhroLQAFWXdZ7WCvLWAukdS'),
(8, 'manav', 'a@g.c', '$2y$10$MleH0UNYBathNtV16r5kae6Trg2nJ0rbwIygBcML.U/lD0oac5N7e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_package`
--
ALTER TABLE `add_package`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `package_booking`
--
ALTER TABLE `package_booking`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `querry`
--
ALTER TABLE `querry`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_package`
--
ALTER TABLE `add_package`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `package_booking`
--
ALTER TABLE `package_booking`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `querry`
--
ALTER TABLE `querry`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

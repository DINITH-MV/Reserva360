-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:40 PM
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
-- Database: `reserva360`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(3) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobileNumber` int(12) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `firstName`, `lastName`, `user_name`, `password`, `email`, `mobileNumber`, `gender`) VALUES
(1, 'Ethen', 'Vanderlan', 'Ethen', 'Admin123', 'IT22884206@my.sliit.lk', 76878454, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL,
  `message` varchar(400) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `name`, `email`, `phoneNumber`, `message`, `userID`) VALUES
(1, 'Aruna', 'IT22884206@my.sliit.lk', '762224443', 'This is Ok', 1),
(2, 'user2', 'IT22884206@my.sliit.lk', '762224443', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `ID` int(11) NOT NULL,
  `hotelName` varchar(200) NOT NULL,
  `image` varchar(20) NOT NULL,
  `location` varchar(200) NOT NULL,
  `deal` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`ID`, `hotelName`, `image`, `location`, `deal`, `description`) VALUES
(1, 'Hotel Grand Turf', 'turf.jpg', 'Lake Gregory, Nuwara Eliya', 'LKR  9,800', 'Located in the Lake Gregory district in Nuwara Eliya, Hotel Grand Turf offers 5-star rooms with free WiFi. Each accommodation at the 5-star hotel has mountain views, and guests can enjoy access to a shared lounge and to a terrace.'),
(2, 'Hotel Cassendra', 'cassendra.jpg', 'Kandy', 'LKR  13,243', 'At the hotel, rooms come with a desk, a flat-screen TV, a private bathroom, bed linen and towels. Rooms are equipped with a safety deposit box, while certain rooms are equipped with a balcony and others also boast garden views.'),
(3, 'Hanthana Boutique Villa by Amaya', 'hanthana.jpg', 'Heerasagala, Kandy', 'LKR 16,653', 'Hanthana Boutique Villa by Amaya offers a highly intimate escape from the confines of daily life, allowing guests to enjoy total seclusion while being surrounded by open nature. '),
(4, 'The Grand Hills', 'hill.jpg', 'Bowala, Kandy', 'LKR 13,003', 'Set within 4.4 km of Ceylon Tea Museum and 5.6 km of Kandy Royal Botanic Gardens in Kandy, The Grand Hills features accommodation with seating area. This bed and breakfast features a private pool, a garden and free private parking'),
(5, 'Galway Heights Hotel', 'galway.jpg', 'Nuwara Eliya', 'LKR 12,343', 'Set in Nuwara Eliya, 2.5 km from Gregory Lake, Galway Heights Hotel offers accommodation with free bikes, free private parking, a garden and a shared lounge. This 4-star hotel offers room service and a concierge service.'),
(6, 'Anara Villa', 'grand.jpg', 'Nuwara Eliya', 'LKR 18,123', 'Located in the Lake Gregory district in Nuwara Eliya, Hotel Grand Turf offers 5-star rooms with free WiFi. Each accommodation at the 5-star hotel has mountain views, and guests can enjoy access to a shared lounge and to a terrace'),
(7, 'Ella Red Rock', 'red.jpg', 'Kirimatiya kitale, Ella', 'LKR  4,873', 'Boasting a shared lounge and views of mountain, Ella Red Rock is a sustainable bed and breakfast set in Ella, 5.9 km from Demodara Nine Arch Bridge. Featuring full-day security, this property also welcomes guests with a family-friendly restaurant and a sun terrace.'),
(8, 'Lucky Star Ella', 'lucky.jpg', 'Medapathana, Ella', 'LKR 14,233', 'Offering a restaurant and a rooftop garden, Lucky Star Ella is located in Ella. Free WiFi access is available in the public areas of this homestay.'),
(9, 'Madushanka Resort', 'madu.jpg', 'Wamullahena, Ella', 'LKR 4,233', 'Madushanka Resort is located in Ella and offers comfortable stay. It provides a 24-hour front desk for the convenience of the guests.'),
(10, 'Heart of Ella', 'heart.jpg', 'Ambagaha pathana, Ella', 'LKR 7,233', 'Situated in Ella, 5.6 km from Demodara Nine Arch Bridge, Heart of Ella features accommodation with a garden, free private parking, a terrace and a restaurant.'),
(11, 'The Westbury Palace', 'west.jpg', 'Nuwara Eliya', 'LKR 6,633', 'Ideally set in the centre of Nuwara Eliya, The Westbury Palace is a sustainable villa, which features free WiFi, an infinity pool and free private parking for guests who drive.');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `ID` int(11) NOT NULL,
  `image` varchar(20) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `depTime` varchar(30) NOT NULL,
  `arrival` varchar(30) NOT NULL,
  `arrTime` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `airline` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`ID`, `image`, `departure`, `depTime`, `arrival`, `arrTime`, `date`, `airline`, `price`, `userID`) VALUES
(1, 'qatar.jpg', 'Colombo', '13h 25m', 'Canbera', '16h 30m', '2023-06-12', 'Quatar', 'LKR 635,528', 1),
(2, 'SL_Airline.png', 'Colombo', '36h 05m', 'Newcastle', '39h 10m', '2023-06-22', 'Sri Lanka Airline', 'LKR 358,477', 1),
(3, 'American.png', 'Colombo', '27h 05m', 'New York', '25h 06m', '2023-06-13', 'American Airlines', '$1,863', 1),
(4, 'British.png', 'Colombo', '13h 15m', 'London', '10h 45m', '2023-06-16', 'British Airways', '$1,890', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `ID` int(4) NOT NULL,
  `Hotel_image` varchar(100) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `Hotel_Name` varchar(30) NOT NULL,
  `Rate` float NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Map` varchar(100) NOT NULL,
  `Link_name` varchar(400) NOT NULL,
  `Link_Map` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`ID`, `Hotel_image`, `Location`, `Hotel_Name`, `Rate`, `Price`, `Map`, `Link_name`, `Link_Map`) VALUES
(1, 'shangri.jpg', 'Colombo', 'Shangri-La Colombo', 4.6, 'LKR 65,474', 'https://www.shangri-la.com/', 'Shangri La ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6287.20275439\r\n0976!2d79.84323054757391!3d6.9276\r\n693185514775!2m3!1f0!2f0!3f0!3m2!\r\n1i1024!2i768!4f13.1!3m3!1m2!1s0x3\r\nae2593b09364c4f%3A0x7dc13fa1f24d5\r\nc16!2sShangri-La%20Colombo!5e0!3m2!1sen!2slk!4v\r\n1686468555964!5m2!1sen!2slk'),
(2, 'Hilton.jpg', 'Colombo', 'Hilton Colombo', 4.6, 'LKR 22,549', 'https://www.hilton.com/en', 'hilton', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.59323777\r\n4325!2d79.83444045378914!3d6.93257\r\n0890000531!2m3!1f0!2f0!3f0!3m2!1i1\r\n024!2i768!4f13.1!3m3!1m2!1s0x3ae25\r\n9132e85493d%3A0x9d5e04ea64814a8!2s\r\nHilton%20Colombo!5e0!3m2!1sen!2slk\r\n!4v1686434334557!5m2!1sen!2slk'),
(3, 'riu.jpg', 'Ahungala', 'RIU Sri Lanka', 4.2, 'LKR 26,400', 'https://www.riu.com/en/hotel/', 'riu', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.650446265\r\n4157!2d80.03323999999999!3d6.30957\r\n!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!\r\n4f13.1!3m3!1m2!1s0x3ae1809faf58479\r\nd%3A0xcf5d53bd20f02c66!2sHotel%20R\r\niu%20Sri%20Lanka!5e0!3m2!1sen!2slk\r\n!4v1683437549782!5m2!1sen!2slk '),
(4, 'Jetwing.jpg', 'Nuwara Eliya', 'Jetwing St. Andrews', 4.7, 'LKR 5,878', '', 'Jetwing St. Andrews', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15841.00503100\r\n249!2d80.75357195379236!3d6.979651\r\n287126725!2m3!1f0!2f0!3f0!3m2!1i10\r\n24!2i768!4f13.1!3m3!1m2!1s0x3ae381\r\nb5749ff329%3A0xd9fda33ad01203aa!2s\r\nJetwing%20St.%20Andrews!5e0!3m2!1s\r\nen!2slk!4v1686435089740!5m2!1sen!2\r\nslk'),
(5, 'navro.jpg', 'Panadura', 'Navro Beach Resort', 3.8, 'LKR 19,587', 'https://sites.google.com/view/\r\nnavro-beach-resort/', 'Navro', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.461166170\r\n803!2d79.9025463!3d6.7134382000000\r\n04!2m3!1f0!2f0!3f0!3m2!1i1024!2i76\r\n8!4f13.1!3m3!1m2!1s0x3ae246141c377\r\nb49%3A0x86fcb57c0f2e4db6!2sNavro%2\r\n0Beach%20Resort!5e0!3m2!1sen!2slk!\r\n4v1686435699137!5m2!1sen!2slk'),
(6, 'Amaranthe.jpg', 'Trincomalee', 'Amaranthé Bay Resort', 4.5, 'LKR 29,995', 'https://amaranthebay.com/', 'Amaranthé Bay', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15779.06578641\r\n6335!2d81.20517295393091!3d8.61840\r\n7178347159!2m3!1f0!2f0!3f0!3m2!1i1\r\n024!2i768!4f13.1!3m3!1m2!1s0x3afbb\r\nc4ee8e8a305%3A0xd192a40dcaf5f1ec!2\r\nsAmaranth%C3%A9%20Bay%20Resort%2\r\n0%26%20Spa!5e0!3m2!1sen!2slk!4v168\r\n6436068458!5m2!1sen!2slk');

-- --------------------------------------------------------

--
-- Table structure for table `reserveroom`
--

CREATE TABLE `reserveroom` (
  `ID` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `noMember` int(11) NOT NULL,
  `noRooms` int(11) NOT NULL,
  `noNights` int(11) NOT NULL,
  `Hid` int(11) NOT NULL,
  `Uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserveroom`
--

INSERT INTO `reserveroom` (`ID`, `startDate`, `endDate`, `noMember`, `noRooms`, `noNights`, `Hid`, `Uid`) VALUES
(23, '2023-06-15', '2023-06-15', 6, 7, 3, 2, 1),
(24, '2023-06-16', '2023-06-16', 7, 6, 6, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `thingstodo`
--

CREATE TABLE `thingstodo` (
  `ID` int(3) NOT NULL,
  `event` varchar(200) NOT NULL,
  `image` varchar(60) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `place` varchar(20) NOT NULL,
  `price` varchar(15) NOT NULL,
  `description` varchar(300) NOT NULL,
  `userId` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thingstodo`
--

INSERT INTO `thingstodo` (`ID`, `event`, `image`, `catagory`, `place`, `price`, `description`, `userId`) VALUES
(1, 'Whale and Dolphin Watching Experience\r\n', 'whale.png', 'Popular with groups', 'Galle', 'US$70', 'Chance to spot whales and dolphins in the calm waters around Mirissa', 19),
(2, 'Bundala National Park Tour', 'Yala.png', 'Popular with couples', 'Yala', 'US$90', 'A nature tour to see an abundance of birdlife and other wildlife', 0),
(3, 'Kandy City Highlights Tour', 'KandyH.png', 'Popular with couples', 'Kandy', 'US$19', 'A tour to explore the main attractions of Kandy city', 0),
(4, 'Full-day Tour of Nuwara Eliya\'s Natural Landmarks', 'NuwaraEliya.png', '', 'Nuwara Eliya', 'US$67.64', 'Nuwara Eliya nature tour with visits to two tea factories and a national park', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pnumber` int(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `username`, `fname`, `lname`, `pnumber`, `password`, `image`) VALUES
(1, 'IT22884206@my.sliit.lk', 'Aruna', 'Royal', 'Kandyan', 762224443, 'User1', 'user2.jpg'),
(2, 'AuthorFern@outlook.com', 'Author', 'Author', 'Fernando', 772341869, 'User2', 'User.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reserveroom`
--
ALTER TABLE `reserveroom`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `thingstodo`
--
ALTER TABLE `thingstodo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reserveroom`
--
ALTER TABLE `reserveroom`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `thingstodo`
--
ALTER TABLE `thingstodo`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

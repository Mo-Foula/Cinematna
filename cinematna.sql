-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 17, 2021 at 01:13 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinematna`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `actor_id` int(11) NOT NULL,
  `actor_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`actor_id`, `actor_name`) VALUES
(1, 'Ryan Reynolds'),
(2, 'Morena Baccarin'),
(4, 'Robert Downey jr'),
(5, 'Alexander Cattly'),
(6, 'Greta Garbo'),
(7, 'Charlize Theron'),
(8, 'Harry Melling'),
(9, 'Kiki Layne');

-- --------------------------------------------------------

--
-- Table structure for table `actor_movie`
--

CREATE TABLE `actor_movie` (
  `actor_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor_movie`
--

INSERT INTO `actor_movie` (`actor_id`, `movie_id`) VALUES
(1, 1),
(2, 1),
(6, 2),
(5, 2),
(7, 3),
(8, 3),
(9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` varchar(10) NOT NULL COMMENT 'admin username',
  `admin_pass` text NOT NULL,
  `cinema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_pass`, `cinema_id`) VALUES
('1251313', '123', 1),
('1111', '123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `cinema_id` int(11) NOT NULL,
  `cinema_name` varchar(20) NOT NULL,
  `cinema_address` text NOT NULL,
  `cinema_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`cinema_id`, `cinema_name`, `cinema_address`, `cinema_location`) VALUES
(1, 'San Stefano Cinema', ' El-Gaish Rd, San Stifano, Qism El-Raml, Alexandria Governorate', ' El-Gaish Rd, San Stifano, Qism El-Raml, Alexandria Governorate'),
(2, 'CINE PLUS', 'العمراوي، قسم المنتزه،، Alexandria Governorate', 'العمراوي، قسم المنتزه،، Alexandria Governorate'),
(3, 'Deeb mall cinema', 'سيدي جابر, 1 Syria, Sidi Gabir, Sidi Gaber, Alexandria Governorate 21311', '');

-- --------------------------------------------------------

--
-- Table structure for table `cinema_review`
--

CREATE TABLE `cinema_review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `review_title` varchar(255) DEFAULT NULL,
  `review_comment` text,
  `cinema_review_stars` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinema_review`
--

INSERT INTO `cinema_review` (`review_id`, `user_id`, `cinema_id`, `review_title`, `review_comment`, `cinema_review_stars`) VALUES
(1, 2, 1, 'Very Good', 'This cinema is perfecto', 10),
(2, 2, 1, 'Good enough', 'bla bla bla', 8);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(3) NOT NULL,
  `genre_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Thriller'),
(2, 'Western '),
(3, 'Rom-com'),
(4, 'Science fiction'),
(5, 'Mystery'),
(6, 'Comedy'),
(7, 'Superhero'),
(8, 'Action'),
(9, 'Adventure'),
(10, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `genre_movie`
--

CREATE TABLE `genre_movie` (
  `movie_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre_movie`
--

INSERT INTO `genre_movie` (`movie_id`, `genre_id`) VALUES
(1, 8),
(1, 9),
(1, 6),
(1, 3),
(1, 4),
(1, 7),
(2, 6),
(2, 3),
(3, 8),
(3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_id` int(11) NOT NULL,
  `hall_name` varchar(25) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `hall_3d` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_id`, `hall_name`, `cinema_id`, `hall_3d`) VALUES
(1, 'Hall B', 1, 1),
(3, 'Hall A', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hall_rows`
--

CREATE TABLE `hall_rows` (
  `row_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL COMMENT 'e7tyaty',
  `row_vacant` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'if it is a hallway'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall_rows`
--

INSERT INTO `hall_rows` (`row_id`, `hall_id`, `cinema_id`, `row_vacant`) VALUES
(1, 3, 1, 1),
(2, 3, 1, 1),
(3, 3, 1, 1),
(4, 3, 1, 1),
(5, 3, 1, 1),
(6, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(20) NOT NULL,
  `movie_des` text NOT NULL,
  `movie_rate` float NOT NULL,
  `movie_poster` text NOT NULL,
  `movie_3d` tinyint(1) NOT NULL,
  `movie_foreign` tinyint(1) NOT NULL,
  `coming_soon` tinyint(1) NOT NULL DEFAULT '0',
  `release_date` varchar(20) NOT NULL,
  `run_time` varchar(5) NOT NULL,
  `trailer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_des`, `movie_rate`, `movie_poster`, `movie_3d`, `movie_foreign`, `coming_soon`, `release_date`, `run_time`, `trailer`) VALUES
(1, 'Deadpool', 'Deadpool is a highly trained assassin and mercenary. He is adept in multiple forms of martial arts, including Savate. Deadpool is an extraordinary athlete, and an expert swordsman and marksman. He is skilled in the use of multiple weapons, including katanas, knives, grenades, and guns.', 8, 'img/Deadpool.jpg', 0, 1, 0, '', '', 'https://www.youtube.com/embed/ONHBaC-pfsk'),
(2, 'The Hurricane Heist', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 7.9, 'img/TheHurricaneHeist.jpg', 1, 1, 0, '', '', 'https://www.youtube.com/embed/56whWF2NJrM'),
(3, 'The Old Guard', 'A covert team of immortal mercenaries is suddenly exposed and must now fight to keep their identity a secret just as an unexpected new member is discovered.', 6.6, 'img/TheOldGuard.jpg', 0, 1, 1, '', '', 'https://www.youtube.com/embed/aK-X2d0lJ_s'),
(4, 'Avatar', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 9, 'img/avatar.jpg', 0, 0, 0, '2019-9-9', '90', 'https://www.youtube.com/embed/5PSNL1qE6VY'),
(5, 'Inception', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 9.1, 'img/inception.jpg', 0, 1, 0, '2010-5-4', '110', 'https://www.youtube.com/embed/YoHD9XEInc0'),
(6, 'A beautiful mind', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 9.5, 'img/abeautifulmind.jpg', 0, 0, 0, '2020-6-2', '80', 'https://www.youtube.com/embed/aS_d0Ayjw4o');

-- --------------------------------------------------------

--
-- Table structure for table `movie_rating`
--

CREATE TABLE `movie_rating` (
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `rating_stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `party_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `party_3d` tinyint(1) NOT NULL,
  `party_time` float NOT NULL,
  `party_price` float NOT NULL,
  `party_start` time NOT NULL,
  `party_end` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`party_id`, `movie_id`, `hall_id`, `cinema_id`, `party_3d`, `party_time`, `party_price`, `party_start`, `party_end`) VALUES
(1, 1, 3, 1, 0, 90, 150, '18:15:23', '20:13:45'),
(2, 2, 1, 1, 0, 90, 150, '12:57:24', '12:56:51'),
(3, 2, 3, 1, 0, 112, 140, '00:08:27', NULL),
(6, 5, 1, 1, 0, 112, 150, '23:21:40', '06:21:40'),
(7, 4, 3, 1, 0, 112, 150, '23:21:40', '06:21:40'),
(8, 6, 1, 1, 0, 112, 150, '23:21:40', '06:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL COMMENT 'e7tyaty',
  `row_id` int(11) NOT NULL,
  `seat_value` int(1) NOT NULL DEFAULT '1' COMMENT '-1 occupied, 0 doesn''t exist, 1 available',
  `hall_id` int(11) NOT NULL COMMENT 'e7tyaty'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `cinema_id`, `row_id`, `seat_value`, `hall_id`) VALUES
(1, 1, 1, 1, 3),
(2, 1, 1, 1, 3),
(3, 1, 1, 1, 3),
(4, 1, 1, 1, 3),
(5, 1, 1, 1, 3),
(6, 1, 2, 1, 3),
(7, 1, 2, 1, 3),
(8, 1, 2, 1, 3),
(9, 1, 2, 1, 3),
(10, 1, 2, 1, 3),
(11, 1, 3, 0, 3),
(12, 1, 3, 0, 3),
(13, 1, 3, 0, 3),
(14, 1, 3, 0, 3),
(15, 1, 3, 0, 3),
(16, 1, 4, 1, 3),
(17, 1, 4, 1, 3),
(18, 1, 4, 1, 3),
(19, 1, 4, 1, 3),
(20, 1, 4, 1, 3),
(21, 1, 5, 1, 3),
(22, 1, 5, 1, 3),
(23, 1, 5, 1, 3),
(24, 1, 5, 1, 3),
(25, 1, 5, 1, 3),
(26, 1, 6, 1, 3),
(27, 1, 6, 1, 3),
(28, 1, 6, 1, 3),
(29, 1, 6, 1, 3),
(30, 1, 6, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `party_id` int(11) NOT NULL,
  `seat_letter_index` varchar(5) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `qr` text NOT NULL,
  `randomInt` int(11) NOT NULL,
  `ticket_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `user_id`, `party_id`, `seat_letter_index`, `seat_id`, `qr`, `randomInt`, `ticket_day`) VALUES
(2, 1, 1, 'B1', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=215466', 215466, '2017-06-01'),
(3, 1, 1, 'B4', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=125353', 125353, '2017-06-01'),
(4, 1, 1, 'C3', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=65076', 65076, '2017-06-01'),
(5, 4, 7, 'A2', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=640453', 640453, '2021-03-31'),
(6, 4, 7, 'B1', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=121644', 121644, '2021-03-31'),
(7, 5, 1, 'A2', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=671159', 671159, '2021-03-31'),
(10, 5, 1, 'B3', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=596611', 596611, '2021-03-31'),
(11, 5, 1, 'C4', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=596611', 596611, '2021-03-31'),
(12, 7, 1, 'A1', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=736335', 736335, '2021-03-31'),
(13, 7, 1, 'C2', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=736335', 736335, '2021-03-31'),
(14, 7, 1, 'A4', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=831840', 831840, '2021-03-31'),
(15, 7, 1, 'B4', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=831840', 831840, '2021-03-31'),
(16, 8, 1, 'B1', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=18803', 18803, '2021-03-17'),
(17, 8, 1, 'B2', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=18803', 18803, '2021-03-17'),
(18, 8, 1, 'A3', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=339654', 339654, '2021-03-17'),
(19, 8, 1, 'B4', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=339654', 339654, '2021-03-17'),
(20, 8, 1, 'C1', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=427130', 427130, '2021-03-17'),
(21, 8, 1, 'C2', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=427130', 427130, '2021-03-17'),
(22, 8, 1, 'A4', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=538797', 538797, '2021-03-24'),
(23, 8, 1, 'A5', 1, 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=538797', 538797, '2021-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Sergi', 'sergi@test.com', 1234),
(2, 'Foula', 'foula@test.com', 1234),
(3, 'sergi', 'sergi@test.com', 1234),
(4, 'foulaa', 'test@example.com', 123),
(5, 'ayman', 'ayman@ayman.ayman', 123),
(6, 'ayman2', 'aym2@aym.aym', 123),
(7, 'samir', 'samir@samir.samir', 123),
(8, 'drsara', 'drsara@test.com', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`actor_id`);

--
-- Indexes for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD KEY `actor_movie_id` (`actor_id`),
  ADD KEY `movie_actor_id` (`movie_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD KEY `cinema_id_admin` (`cinema_id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `cinema_review`
--
ALTER TABLE `cinema_review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id_cinema_review` (`user_id`),
  ADD KEY `cinema_id_review` (`cinema_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD KEY `genre_movie_id` (`genre_id`),
  ADD KEY `movie_genre_id` (`movie_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_id`),
  ADD KEY `cinema_id_Hall` (`cinema_id`);

--
-- Indexes for table `hall_rows`
--
ALTER TABLE `hall_rows`
  ADD PRIMARY KEY (`row_id`),
  ADD KEY `row_cinema_id` (`cinema_id`),
  ADD KEY `row_hall_id` (`hall_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movie_rating`
--
ALTER TABLE `movie_rating`
  ADD KEY `movie_rating_user_id` (`user_id`),
  ADD KEY `rating_movie_id` (`movie_id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`party_id`),
  ADD KEY `movie_party_id` (`movie_id`),
  ADD KEY `cinema_party_id` (`cinema_id`),
  ADD KEY `hall_party_id` (`hall_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`),
  ADD KEY `cinema_seat_id` (`cinema_id`),
  ADD KEY `hall_seat_id` (`hall_id`),
  ADD KEY `row_seat_id` (`row_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `seat_ticket_id` (`seat_id`),
  ADD KEY `party_ticket_id` (`party_id`),
  ADD KEY `user_ticket_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `actor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cinema_review`
--
ALTER TABLE `cinema_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hall_rows`
--
ALTER TABLE `hall_rows`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `party_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD CONSTRAINT `actor_movie_id` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`actor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_actor_id` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `cinema_id_admin` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`);

--
-- Constraints for table `cinema_review`
--
ALTER TABLE `cinema_review`
  ADD CONSTRAINT `cinema_id_review` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`),
  ADD CONSTRAINT `user_id_cinema_review` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD CONSTRAINT `genre_movie_id` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_genre_id` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hall`
--
ALTER TABLE `hall`
  ADD CONSTRAINT `cinema_id_Hall` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hall_rows`
--
ALTER TABLE `hall_rows`
  ADD CONSTRAINT `row_cinema_id` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `row_hall_id` FOREIGN KEY (`hall_id`) REFERENCES `hall` (`hall_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_rating`
--
ALTER TABLE `movie_rating`
  ADD CONSTRAINT `rating_movie_id` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_movie_rating` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `party`
--
ALTER TABLE `party`
  ADD CONSTRAINT `cinema_party_id` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hall_party_id` FOREIGN KEY (`hall_id`) REFERENCES `hall` (`hall_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_party_id` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `cinema_seat_id` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hall_seat_id` FOREIGN KEY (`hall_id`) REFERENCES `hall` (`hall_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `row_seat_id` FOREIGN KEY (`row_id`) REFERENCES `hall_rows` (`row_id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `party_ticket_id` FOREIGN KEY (`party_id`) REFERENCES `party` (`party_id`),
  ADD CONSTRAINT `seat_ticket_id` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`seat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ticket_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

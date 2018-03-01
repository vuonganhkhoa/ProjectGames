-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2018 at 05:07 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `minimum` text NOT NULL,
  `recommended` text NOT NULL,
  `guide` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `genre_id` (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `genre_id`, `title`, `url`, `description`, `content`, `minimum`, `recommended`, `guide`, `image`, `trailer`, `year`, `update_at`) VALUES
(1, 2, 'Call of duty 5', 'call-of-duty-5', '<p>Sau th&agrave;nh c&ocirc;ng qu&aacute; lớn của phi&ecirc;n bản Modern Warfare đầu ti&ecirc;n cũng như sự thắng thế của bối cảnh chiến tranh hiện đại, kh&ocirc;ng ai nghĩ chiến tranh thế giới thứ 2 sẽ l&agrave; yếu tố tạo n&ecirc;n th&agrave;nh c&ocirc;ng cho Call Of Duty: World At War nữa.</p>', '<p>Sau th&agrave;nh c&ocirc;ng qu&aacute; lớn của phi&ecirc;n bản Modern Warfare đầu ti&ecirc;n cũng như sự thắng thế của bối cảnh chiến tranh hiện đại, kh&ocirc;ng ai nghĩ chiến tranh thế giới thứ 2 sẽ l&agrave; yếu tố tạo n&ecirc;n th&agrave;nh c&ocirc;ng cho Call Of Duty: World At War nữa. Tuy nhi&ecirc;n Treyarch đ&atilde; chứng minh rằng m&igrave;nh ho&agrave;n to&agrave;n c&oacute; thể l&agrave;m c&oacute; thể l&agrave;m được những việc tưởng chứng như kh&ocirc;ng thể. D&ugrave; kh&ocirc;ng sở hữu một cốt truyện hấp dẫn như Modern Warfare nhưng World At War cũng trang bị cho m&igrave;nh một d&agrave;n diễn vi&ecirc;n lồng tiếng gồm to&agrave;n những t&ecirc;n tuổi lớn như Kiefer Sutherland v&agrave; Gary Oldman, bối cảnh chiến tranh được chuyển dịch về khu vực Th&aacute;i B&igrave;nh Dương đầy lạ lẫm v&agrave; nhiều bất ngờ cộng với việc đẩy mạnh yếu tố h&agrave;nh động bạo lực l&ecirc;n cao chưa từng thấy trong Call Of Duty. Top 10 tựa game Call of Duty World At War vẫn tạo dựng được một chỗ đứng nhất định trong l&ograve;ng người h&acirc;m mộ, đồng thời khẳng định cho khả năng của h&atilde;ng Treyarch. Nhưng đ&oacute; chưa phải l&agrave; tất cả v&igrave; chế độ chơi mạng mới l&agrave; linh hồn thực sự của tựa game n&agrave;y. Game lần đầu ti&ecirc;n giới thiệu đến người chơi chế độ chơi Zombie v&ocirc; c&ugrave;ng hấp dẫn m&agrave; sau n&agrave;y đ&atilde; được Treyarch &aacute;p dụng th&agrave;nh c&ocirc;ng v&agrave;o c&aacute;c phi&ecirc;n bản Call Of Duty tiếp theo của m&igrave;nh. V&agrave; đ&oacute; l&agrave; phần đầu ti&ecirc;n của bảng xếp hạng top 10 tựa game Call of Duty của ch&uacute;ng t&ocirc;i. N&oacute;i đến đ&acirc;y chắc hẳn nhiều bạn đ&atilde; c&oacute; những suy đo&aacute;n tiếp theo của m&igrave;nh. Vậy theo bạn tựa game Call of Duty sẽ d&agrave;ng được ng&ocirc;i vị qu&aacute;n qu&acirc;n trong bảng xếp hạng n&agrave;y? H&atilde;y cho ch&uacute;ng t&ocirc;i biết những nhận định của bạn trong phần comment b&ecirc;n dưới v&agrave; nhớ tiếp tục theo d&otilde;i phần thứ hai &ndash; cũng l&agrave; phần cuối của bảng xếp hạng n&agrave;y tr&ecirc;n chuy&ecirc;n mục Pc-console của Game4V v&agrave;o ng&agrave;y mai, khi tựa game Call of Duty: Advanced Warfare ch&iacute;nh thức được ra mắt.</p>', 'CPU: Intel Core i3 3225 3.3 GHz or AMD Ryzen 5 1400\r\nCPU SPEED: Info\r\nRAM: 8 GB\r\nOS: Windows 7 64-Bit or later\r\nVIDEO CARD: Nvidia GeForce GTX 660 @ 2 GB / GTX 1050 or ATI Radeon HD 7850 @ 2GB / AMD RX 550\r\nSOUND CARD: Yes\r\nFREE DISK SPACE: 90 GB', 'CPU: Intel Core i3 3225 3.3 GHz or AMD Ryzen 5 1400\r\nCPU SPEED: Info\r\nRAM: 8 GB\r\nOS: Windows 7 64-Bit or later\r\nVIDEO CARD: Nvidia GeForce GTX 660 @ 2 GB / GTX 1050 or ATI Radeon HD 7850 @ 2GB / AMD RX 550\r\nSOUND CARD: Yes\r\nFREE DISK SPACE: 90 GB', 'Cài đặt và chơi', 'call_of_duty.png', 'https://www.youtube.com/watch?v=hpo6L8WRuF4', 2017, '2018-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `game_comments`
--

DROP TABLE IF EXISTS `game_comments`;
CREATE TABLE IF NOT EXISTS `game_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `game_genres`
--

DROP TABLE IF EXISTS `game_genres`;
CREATE TABLE IF NOT EXISTS `game_genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_genres`
--

INSERT INTO `game_genres` (`id`, `name`, `url`, `note`) VALUES
(1, 'Phiêu lưu', 'phieu-luu', ''),
(2, 'Bắn súng', 'ban-sung', '');

-- --------------------------------------------------------

--
-- Table structure for table `game_pictures`
--

DROP TABLE IF EXISTS `game_pictures`;
CREATE TABLE IF NOT EXISTS `game_pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_pictures`
--

INSERT INTO `game_pictures` (`id`, `game_id`, `image`, `note`) VALUES
(3, 1, '1519913736principal-cod-wwii.jpg', 'Không'),
(4, 1, '1519913736sh-overview.jpg', 'Không'),
(8, 1, '1519916348CoD-WWII.png', 'Không');

-- --------------------------------------------------------

--
-- Table structure for table `link_download`
--

DROP TABLE IF EXISTS `link_download`;
CREATE TABLE IF NOT EXISTS `link_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `link_download`
--

INSERT INTO `link_download` (`id`, `game_id`, `link`, `note`, `status`) VALUES
(1, 1, 'https://www.fshare.vn', 'Fshare', 'Còn Sống'),
(2, 1, 'www.megalink.vn', 'Mega', 'Còn Sống');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `view` int(11) NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `game_genres` (`id`);

--
-- Constraints for table `game_comments`
--
ALTER TABLE `game_comments`
  ADD CONSTRAINT `game_comments_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);

--
-- Constraints for table `game_pictures`
--
ALTER TABLE `game_pictures`
  ADD CONSTRAINT `game_pictures_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);

--
-- Constraints for table `link_download`
--
ALTER TABLE `link_download`
  ADD CONSTRAINT `link_download_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

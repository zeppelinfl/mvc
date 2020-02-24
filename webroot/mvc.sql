-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2020 at 09:21 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `loc_num` int(11) NOT NULL DEFAULT '0',
  `awesome_sign` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `loc_num`, `awesome_sign`, `created`, `updated`) VALUES
(1, 'Sport', 5, 'fa-minus', '2020-02-20 10:30:22', '2020-02-20 10:30:22'),
(2, 'Hotel', 16, 'fa-hotel', '2020-02-20 10:30:22', '2020-02-20 10:30:22'),
(3, 'Restaurant', 25, 'fa-plus', '2020-02-20 10:30:22', '2020-02-20 10:30:22'),
(4, 'Shopping', 12, 'fa-shopping-cart', '2020-02-20 10:30:22', '2020-02-20 10:30:22'),
(5, 'Art & Culture', 17, 'fa-ticket', '2020-02-20 10:30:22', '2020-02-20 10:30:22'),
(6, 'Nightlife', 8, 'fa-glass', '2020-02-20 10:30:22', '2020-02-20 10:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `listings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`, `listings`) VALUES
(1, 'Kuala Lumpur', 1, 126),
(3, 'Seremban', 1, 30),
(4, 'Ipoh', 1, 89),
(5, 'Kuantan', 1, 12),
(6, 'Rome', 2, 327),
(7, 'Florence', 2, 74),
(8, 'Venice', 2, 142),
(9, 'Milano', 2, 31),
(10, 'Napoli', 2, 17),
(11, 'Bologna', 2, 10),
(12, 'Torino', 2, 5),
(13, 'Palermo', 2, 2),
(14, 'Paris', 3, 264),
(15, 'Marsilia', 3, 24),
(16, 'Lion', 3, 72),
(17, 'Bordeaux', 3, 11),
(18, 'Toulouse', 3, 37),
(19, 'Nisa', 3, 0),
(20, 'Lille', 3, 5),
(21, 'Strasbourg', 3, 2),
(22, 'Nantes', 3, 7),
(23, 'Rennes', 3, 0),
(24, 'Reims', 3, 0),
(25, 'Dijon', 3, 0),
(26, 'New York', 4, 757),
(27, 'Los Angeles', 4, 1274),
(28, 'Seattle', 4, 263),
(29, 'Chicago', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `name`, `email`, `subject`, `created`, `updated`) VALUES
(1, 3, 'Chiba', 'chiba.andrei@gmail.com', 'test', '2020-02-20 15:34:35', '2020-02-20 15:34:35'),
(2, 0, 'asfasfa', 'aslgfasjugh@kgfaslfka.com', 'test message long test message long test message long test message long test message long test message longtest message long test message long test message long', '2020-02-21 09:24:03', '2020-02-21 09:24:03'),
(3, 0, 'asfasfa', 'aslgfasjugh@kgfaslfka.com', 'test message long test message long test message long test message long test message long test message longtest message long test message long test message long', '2020-02-21 09:24:27', '2020-02-21 09:24:27'),
(4, 0, 'Andrei', 'chiba.andrei@gmail.com', 'Test', '2020-02-21 14:39:53', '2020-02-21 14:39:53'),
(5, 0, 'Test', 'test@test.com', 'test', '2020-02-21 14:40:49', '2020-02-21 14:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Malaysia'),
(2, 'Italy'),
(3, 'France'),
(4, 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date_event` varchar(255) NOT NULL,
  `time_event` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `reviews_count` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date_event`, `time_event`, `name`, `type_id`, `address`, `reviews_count`, `image`, `city_id`, `created`, `updated`) VALUES
(1, '2020/04/10', '18:30', 'Music Festival on Wall', 2, '457 Court St, Brooklyn', 23, '/img/places/hotel1.jpeg', 0, '2020-02-20 11:45:58', '2020-02-20 11:45:58'),
(2, '2020/02/08', '14:00', 'Children World of Adventures Resort', 3, 'London, United Kingdom', 61, '/img/places/hotel5.jpeg', 0, '2020-02-20 11:45:58', '2020-02-20 11:45:58'),
(3, '2020/02/08', '16:00', 'Secret Food Tour', 4, 'Via Mozart 14, Milan', 2, '/img/places/hotel2.jpeg', 0, '2020-02-20 11:45:58', '2020-02-20 11:45:58'),
(4, '2020/02/08', '20:00', 'The Alternative Selection', 2, 'Cockpit Theatre, London', 11, '/img/places/hotel4.jpeg', 0, '2020-02-20 11:45:58', '2020-02-20 11:45:58'),
(5, '2020/02/08', '15:00', 'Dresden Day Trip from Berlin', 4, 'Berlin, Germany', 61, '/img/places/hotel3.jpeg', 0, '2020-02-20 11:45:58', '2020-02-20 11:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `country_id`, `image`, `city_id`, `created`, `updated`) VALUES
(1, 1, '/img/places/hotel2.jpeg', 0, '2020-02-20 11:12:44', '2020-02-20 11:12:44'),
(2, 2, '/img/places/hotel3.jpeg', 0, '2020-02-20 11:12:44', '2020-02-20 11:12:44'),
(3, 3, '/img/places/hotel4.jpeg', 0, '2020-02-20 11:12:44', '2020-02-20 11:12:44'),
(4, 4, '/img/places/hotel5.jpeg', 0, '2020-02-20 11:12:44', '2020-02-20 11:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `created`, `updated`) VALUES
(1, 'Join Our Amazing Community', 'Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam monu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.', '2020-02-20 11:19:51', '2020-02-20 11:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `open` varchar(255) NOT NULL,
  `close` varchar(255) NOT NULL,
  `reviews_count` int(11) NOT NULL DEFAULT '0',
  `reviews_score` float(3,1) NOT NULL DEFAULT '5.0',
  `address` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `subcategory_id`, `name`, `image`, `open`, `close`, `reviews_count`, `reviews_score`, `address`, `city_id`, `created`, `updated`) VALUES
(2, 1, 'Fifteen Restaurant & Cheese Bar', '/img/places/hotel1.jpeg', '08:00', '20:00', 54, 9.3, '1149 3rd St, Santa Monica', 0, '2020-02-20 10:49:33', '2020-02-20 10:49:33'),
(3, 2, 'Frankies 457 Spuntino', '/img/places/hotel2.jpeg', '', '', 54, 9.0, '457 Court St, Brooklyn', 0, '2020-02-20 10:49:33', '2020-02-20 10:49:33'),
(4, 3, 'Hotel Van Gogh', '/img/places/hotel3.jpeg', '08:00', '00:00', 54, 8.5, 'Van de Veldestraat 5, Amsterdam', 0, '2020-02-20 10:49:33', '2020-02-20 10:49:33'),
(5, 2, 'Caffe Pasucci', '/img/places/hotel4.jpeg', '08:00', '20:00', 54, 9.1, 'Piazza della Repubblica, Florence', 0, '2020-02-20 10:49:33', '2020-02-20 10:49:33'),
(6, 4, 'Beautiful City Hoster & Hotel', '/img/places/hotel5.jpeg', '08:00', '20:00', 54, 6.2, '12 rue de latlas, Paris', 0, '2020-02-20 10:49:33', '2020-02-20 10:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `message`, `created`, `updated`) VALUES
(1, 3, 'Sed pretium, ligula sollicitudin laoreet viverra, tortor eu nibh, nullam mollis. Ut justo. Suspendisse potenti.', '2020-02-20 11:18:03', '2020-02-20 11:18:03'),
(2, 3, 'Ut justo suspendisse potenti. Sed vel lacus mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus.', '2020-02-20 11:18:03', '2020-02-20 11:18:03'),
(3, 3, 'Sed vel lacus mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus, Suspendisse ac urna. Etiam pellentesque mauris ut lectus.', '2020-02-20 11:18:03', '2020-02-20 11:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `created`, `updated`) VALUES
(1, 'Restaurant', '2020-02-20 10:37:06', '2020-02-20 10:37:06'),
(2, 'Cafe', '2020-02-20 10:37:06', '2020-02-20 10:37:06'),
(3, 'Hostel', '2020-02-20 10:37:06', '2020-02-20 10:37:06'),
(4, 'Hotel', '2020-02-20 10:37:06', '2020-02-20 10:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(2, 'Music'),
(3, 'Parks'),
(4, 'Tours');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `role`, `image`, `created`, `updated`) VALUES
(3, 'Chiba', 'Andrei', 'chiba.andrei@gmail.com', '$2y$10$rtVwCiYWfhUuhyBnxBVOd.SrVWOsUKCJDG4G7To.Ln/cTA17rPgLe', 1, '', '2020-02-20 09:55:48', '2020-02-20 09:55:48'),
(4, 'Admin', 'Andrei', 'admin@admin.com', '$2y$10$xhkZf7RhrvqiMJvoFbpJf.QHublGUaJn2evd293gWl7m77dtLCG7q', 0, NULL, '2020-02-21 13:47:58', '2020-02-21 13:47:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

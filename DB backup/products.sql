-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 11:33 AM
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
-- Database: `gokul`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`) VALUES
(1, 'Bluetooth Wireless H', 60, 'These headphones offer high-quality sound and are compatible with all Bluetooth-enabled devices. They have a built-in microphone for taking phone calls and an adjustable headband for a comfortable fit.'),
(2, 'Mini Drone with Came', 100, 'This mini drone features a 720p HD camera for taking aerial photos and videos. It has a range of up to 100 meters and can perform 360-degree flips and rolls.'),
(3, 'Portable Phone Charg', 30, 'This portable phone charger can charge your smartphone up to three times on a single charge. It has a compact design that makes it easy to carry in your pocket or purse.'),
(4, 'Electric Toothbrush', 70, 'This electric toothbrush features a rechargeable battery and multiple brush modes for a personalized cleaning experience. It comes with a travel case and a charging dock.'),
(5, 'Wireless Charging Pa', 25, 'This wireless charging pad is compatible with all Qi-enabled devices and can charge your phone up to 1.4 times faster than traditional charging methods. It has a sleek, minimalist design that looks great on any desk or nightstand.'),
(6, 'Smart Thermostat', 200, 'This smart thermostat can learn your preferred temperature settings and automatically adjust to save energy. It can also be controlled remotely via your smartphone or voice commands with Amazon Alexa or Google Assistant.'),
(7, 'Fitness Tracker', 80, 'This fitness tracker can track your steps, calories burned, heart rate, and sleep patterns. It has a large, easy-to-read display and is compatible with most smartphones.'),
(8, 'Digital Camera ', 250, 'This digital camera features a 24-megapixel sensor and a 3-inch LCD display. It can shoot 1080p HD video and has built-in Wi-Fi for easy sharing and uploading of photos.'),
(9, 'Air Fryer', 90, 'This air fryer uses hot air to cook food to crispy perfection without the need for oil. It has a large, non-stick basket and is perfect for cooking everything from French fries to chicken wings.'),
(10, 'Portable Bluetooth S', 40, 'This portable Bluetooth speaker offers high-quality sound and is water-resistant, making it perfect for use at the beach or by the pool. It has a built-in microphone for taking phone calls and a rechargeable battery that provides up to 10 hours of playback time.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

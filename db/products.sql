-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2024 at 04:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `starting_price` decimal(10,2) NOT NULL,
  `buyout_price` decimal(10,2) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `collection_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `user_id`, `product_name`, `category_id`, `subcategory_id`, `description`, `starting_price`, `buyout_price`, `image_url`, `created_at`, `collection_id`) VALUES
(1, NULL, 'Generic Motorcycle', 8, NULL, 'The Generic Motorcycle is a versatile and reliable bike suitable for various riding preferences. With a balanced design, it provides a comfortable and efficient riding experience.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/motorcycle/Generic%20Motorcycle/1.png', '2024-09-26 02:35:36', 1),
(2, NULL, 'Kawasaki Z800', 8, NULL, 'The Kawasaki Z800 is a powerful and agile sportbike known for its striking design and performance. Its equipped with advanced features, making it a favorite among motorcycle enthusiasts.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/motorcycle/Kawasaki%20Z800/1.png', '2024-09-26 02:35:36', 2),
(3, NULL, '300 Touring', 8, NULL, 'The 300 Touring is a stylish and comfortable sedan, known for its luxurious features and smooth performance.', 1000.00, 50000.00, 'https://cdn.dummyjson.com/products/images/vehicle/300%20Touring/6.png', '2024-09-26 02:35:36', 1),
(4, NULL, 'MotoGP CI.H1', 8, NULL, 'The MotoGP CI.H1 is a high-performance motorcycle inspired by MotoGP racing technology. It offers cutting-edge features and precision engineering for an exhilarating riding experience.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/motorcycle/MotoGP%20CI.H1/1.png', '2024-09-26 02:35:36', 1),
(5, NULL, 'Scooter Motorcycle', 8, NULL, 'The Scooter Motorcycle is a practical and fuel-efficient bike ideal for urban commuting. It features a step-through design and user-friendly controls for easy maneuverability.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/motorcycle/Scooter%20Motorcycle/1.png', '2024-09-26 02:35:36', NULL),
(6, NULL, 'Dodge Hornet GT Plus', 8, NULL, 'The Dodge Hornet GT Plus is a compact and agile hatchback, perfect for urban driving with a touch of sportiness.', 1000.00, 40000.00, 'https://cdn.dummyjson.com/products/images/vehicle/Dodge%20Hornet%20GT%20Plus/6.png', '2024-09-26 02:35:36', 2),
(7, NULL, 'Sportbike Motorcycle', 8, NULL, 'The Sportbike Motorcycle is designed for speed and agility, with a sleek and aerodynamic profile. Its suitable for riders looking for a dynamic and thrilling riding experience.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/motorcycle/Sportbike%20Motorcycle/1.png', '2024-09-26 02:35:36', NULL),
(8, NULL, 'Durango SXT RWD', 8, NULL, 'The Durango SXT RWD is a spacious and versatile SUV, known for its strong performance and family-friendly features.', 1000.00, 30000.00, 'https://cdn.dummyjson.com/products/images/vehicle/Durango%20SXT%20RWD/3.png', '2024-09-26 02:35:36', 2),
(9, NULL, 'Annibale Colombo Bed', 2, NULL, 'The Annibale Colombo Bed is a luxurious and elegant bed frame, crafted with high-quality materials for a comfortable and stylish bedroom.', 300.00, 10000.00, 'https://cdn.dummyjson.com/products/images/furniture/Annibale%20Colombo%20Bed/1.png', '2024-09-26 02:35:57', NULL),
(10, NULL, 'Annibale Colombo Sofa', 2, NULL, 'The Annibale Colombo Sofa is a sophisticated and comfortable seating option, featuring exquisite design and premium upholstery for your living room.', 200.00, 5000.00, 'https://cdn.dummyjson.com/products/images/furniture/Annibale%20Colombo%20Sofa/1.png', '2024-09-26 02:35:57', NULL),
(11, NULL, 'Bedside Table African Cherry', 2, NULL, 'The Bedside Table in African Cherry is a stylish and functional addition to your bedroom, providing convenient storage space and a touch of elegance.', 200.00, 5000.00, 'https://cdn.dummyjson.com/products/images/furniture/Bedside%20Table%20African%20Cherry/1.png', '2024-09-26 02:35:57', 1),
(12, NULL, 'Knoll Saarinen Executive Conference Chair', 2, NULL, 'The Knoll Saarinen Executive Conference Chair is a modern and ergonomic chair, perfect for your office or conference room with its timeless design.', 300.00, 9999.00, 'https://cdn.dummyjson.com/products/images/furniture/Knoll%20Saarinen%20Executive%20Conference%20Chair/1.png', '2024-09-26 02:35:57', 1),
(13, NULL, 'Wooden Bathroom Sink With Mirror', 2, NULL, 'he Wooden Bathroom Sink with Mirror is a unique and stylish addition to your bathroom, featuring a wooden sink countertop and a matching mirror.', 100.00, 3333.00, 'https://cdn.dummyjson.com/products/images/furniture/Wooden%20Bathroom%20Sink%20With%20Mirror/1.png', '2024-09-26 02:35:57', NULL),
(14, NULL, 'Green Crystal Earring', 3, NULL, 'The Green Crystal Earring is a dazzling accessory that features a vibrant green crystal. With a classic design, it adds a touch of elegance to your ensemble, perfect for formal or special occasions.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/womens-jewellery/Green%20Crystal%20Earring/1.png', '2024-09-26 02:36:11', NULL),
(15, NULL, 'Green Oval Earring', 3, NULL, 'The Green Oval Earring is a stylish and versatile accessory with a unique oval shape. Whether for casual or dressy occasions, its green hue and contemporary design make it a standout piece.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/womens-jewellery/Green%20Oval%20Earring/1.png', '2024-09-26 02:36:11', NULL),
(16, NULL, 'Tropical Earring', 3, NULL, 'The Tropical Earring is a fun and playful accessory inspired by tropical elements. Featuring vibrant colors and a lively design, its perfect for adding a touch of summer to your look.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/womens-jewellery/Tropical%20Earring/1.png', '2024-09-26 02:36:11', NULL),
(17, NULL, 'Brown Leather Belt Watch', 4, NULL, 'The Brown Leather Belt Watch is a stylish timepiece with a classic design. Featuring a genuine leather strap and a sleek dial, it adds a touch of sophistication to your look', 100.00, 5555.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Brown%20Leather%20Belt%20Watch/1.png', '2024-09-26 02:36:57', NULL),
(18, NULL, 'Longines Master Collection', 4, NULL, 'The Longines Master Collection is an elegant and refined watch known for its precision and craftsmanship. With a timeless design, its a symbol of luxury and sophistication.', 100.00, 5555.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Longines%20Master%20Collection/1.png', '2024-09-26 02:36:57', NULL),
(19, NULL, 'Rolex Cellini Date Black Dial', 4, NULL, 'The Rolex Cellini Date with Black Dial is a classic and prestigious watch. With a black dial and date complication, it exudes sophistication and is a symbol of Rolexs heritage.', 222.00, 77777.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Cellini%20Date%20Black%20Dial/1.png', '2024-09-26 02:36:57', NULL),
(20, NULL, 'Rolex Cellini Moonphase', 4, NULL, 'The Rolex Cellini Moonphase is a masterpiece of horology, featuring a moon phase complication and exquisite design. It reflects Rolexs commitment to precision and elegance.', 222.00, 55555.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Cellini%20Moonphase/1.png\"', '2024-09-26 02:36:57', NULL),
(21, NULL, 'Rolex Datejust', 4, NULL, 'The Rolex Datejust is an iconic and versatile timepiece with a date window. Known for its timeless design and reliability, its a symbol of Rolexs watchmaking excellence.', 222.00, 222222.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Datejust/1.png', '2024-09-26 02:36:57', NULL),
(22, NULL, 'Rolex Submariner Watch', 4, NULL, 'The Rolex Submariner is a legendary dive watch with a rich history. Known for its durability and water resistance, its a symbol of adventure and exploration.', 111.00, 7777.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Submariner%20Watch/1.png', '2024-09-26 02:36:57', NULL),
(23, NULL, 'Black Womens Gown', 5, NULL, 'The Black Womens Gown is an elegant and timeless evening gown. With a sleek black design, its perfect for formal events and special occasions, exuding sophistication and style.', 222.00, 6666.00, 'https://cdn.dummyjson.com/products/images/womens-dresses/Black%20Women\'s%20Gown/1.png', '2024-09-26 02:37:08', NULL),
(24, NULL, 'Corset Leather With Skirt', 5, NULL, 'The Corset Leather With Skirt is a bold and edgy ensemble that combines a stylish corset with a matching skirt. Ideal for fashion-forward individuals, it makes a statement at any event.', 222.00, 6666.00, 'https://cdn.dummyjson.com/products/images/womens-dresses/Corset%20Leather%20With%20Skirt/1.png', '2024-09-26 02:37:08', NULL),
(25, NULL, 'Corset With Black Skirt', 5, NULL, 'The Corset With Black Skirt is a chic and versatile outfit that pairs a fashionable corset with a classic black skirt. It offers a trendy and coordinated look for various occasions.', 222.00, 6666.00, 'https://cdn.dummyjson.com/products/images/womens-dresses/Corset%20With%20Black%20Skirt/1.png', '2024-09-26 02:37:08', NULL),
(26, NULL, 'Dress Pea', 5, NULL, 'The Dress Pea is a stylish and comfortable dress with a pea pattern. Perfect for casual outings, it adds a playful and fun element to your wardrobe, making it a great choice for day-to-day wear.', 100.00, 3000.00, 'https://cdn.dummyjson.com/products/images/womens-dresses/Dress%20Pea/1.png', '2024-09-26 02:37:08', NULL),
(27, NULL, 'Marni Red & Black Suit', 5, NULL, 'The Marni Red & Black Suit is a sophisticated and fashion-forward suit ensemble. With a combination of red and black tones, it showcases a modern design for a bold and confident look.', 400.00, 10000.00, 'https://cdn.dummyjson.com/products/images/womens-dresses/Marni%20Red%20&%20Black%20Suit/1.png', '2024-09-26 02:37:08', NULL),
(28, NULL, 'Blue Women\'s Handbag', 5, NULL, 'The Blue Women\'s Handbag is a stylish and spacious accessory for everyday use. With a vibrant blue color and multiple compartments, it combines fashion and functionality.', 400.00, 20000.00, 'https://cdn.dummyjson.com/products/images/womens-bags/Blue%20Women\'s%20Handbag/1.png', '2024-09-26 02:37:08', NULL),
(29, NULL, 'Heshe Women\'s Leather Bag', 5, NULL, 'The Heshe Women\'s Leather Bag is a luxurious and high-quality leather bag for the sophisticated woman. With a timeless design and durable craftsmanship, it\'s a versatile accessory.', 150.00, 17500.00, 'https://cdn.dummyjson.com/products/images/womens-bags/Heshe%20Women\'s%20Leather%20Bag/1.png', '2024-09-26 02:37:08', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `fk_collection` (`collection_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_collection` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`collection_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

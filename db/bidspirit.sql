-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:8889
-- Thời gian đã tạo: Th10 02, 2024 lúc 01:50 AM
-- Phiên bản máy phục vụ: 5.7.44
-- Phiên bản PHP: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bidspirit`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Auctions`
--

CREATE TABLE `Auctions` (
  `auction_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `current_bid` decimal(10,2) DEFAULT NULL,
  `highest_bidder_id` int(11) DEFAULT NULL,
  `status` enum('open','closed') DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Auctions`
--

INSERT INTO `Auctions` (`auction_id`, `product_id`, `start_time`, `end_time`, `current_bid`, `highest_bidder_id`, `status`) VALUES
(5, 9, '2024-10-01 14:52:21', '2024-10-31 14:50:39', 2000.00, NULL, 'open');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Bids`
--

CREATE TABLE `Bids` (
  `bid_id` int(11) NOT NULL,
  `auction_id` int(11) DEFAULT NULL,
  `bidder_id` int(11) DEFAULT NULL,
  `bid_amount` decimal(10,2) NOT NULL,
  `bid_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `brand_image` text CHARACTER SET utf8mb4
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_image`) VALUES
(1, 'Cartie', 'https://i.imgur.com/PxW44B6.jpeg'),
(2, 'Christofle', 'https://i.imgur.com/BWEZoAB.jpeg'),
(3, 'Hermes', 'https://i.imgur.com/beibRQg.jpeg'),
(4, 'LEGO', 'https://i.imgur.com/KSJsDFs.jpeg'),
(5, 'LV', 'https://i.imgur.com/m5aKVzQ.jpeg'),
(6, 'The Macallan', 'https://i.imgur.com/H5L5a9d.jpeg'),
(7, 'marklin', 'https://i.imgur.com/g8K9tbr.jpeg'),
(8, 'Nikon', 'https://i.imgur.com/nhnrWTt.jpeg'),
(9, 'OMEGA', 'https://i.imgur.com/Tjl9B3f.jpeg'),
(10, 'pokemon', 'https://i.imgur.com/6S1Vqjm.jpeg'),
(11, 'Porscher', 'https://i.imgur.com/eHlywOD.jpeg'),
(12, 'ROLEX', 'https://i.imgur.com/WU0mJsU.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` text,
  `image_url` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `description`, `image_url`) VALUES
(1, 'Art', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/Art.jpg?raw=true'),
(2, 'Interiors', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/Interiors.jpg?raw=true'),
(3, 'Jewellery', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/jewellery.jpg?raw=true'),
(4, 'Watches', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/watches.jpg?raw=true'),
(5, 'Fashion', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/fashion.jpg?raw=true'),
(6, 'Coins & Stamps', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/Coin.jpg?raw=true'),
(7, 'Comics', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/Comic.jpg?raw=true'),
(8, 'Cars & Bikes', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/Motor.jpg?raw=true'),
(9, 'Wine & Whisky', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/Wine.png?raw=true'),
(10, 'Asia & Tribal', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/AsianandTribal.jpg?raw=true'),
(11, 'Trading cards', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/tradingcard.jpg?raw=true'),
(12, 'Toys & Models', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/Toys.jpg?raw=true'),
(13, 'Archaeology', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/Archaeology.jpg?raw=true'),
(14, 'Sports', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/sport.jpg?raw=true'),
(15, 'Music, Movie & Cameras', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/musicmovie.jpg?raw=true'),
(16, 'Books & History', NULL, 'https://github.com/vuonglq1993/ePRJ1/blob/main/images/Categories/Books.jpg?raw=true');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collections`
--

CREATE TABLE `collections` (
  `collection_id` int(11) NOT NULL,
  `collection_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `collection_desc` text CHARACTER SET utf8mb4,
  `images` text CHARACTER SET utf8mb4
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `collections`
--

INSERT INTO `collections` (`collection_id`, `collection_name`, `collection_desc`, `images`) VALUES
(3, 'I love collection', 'skibidi', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `description` text,
  `starting_price` decimal(10,2) NOT NULL,
  `buyout_price` decimal(10,2) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `collection_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `user_id`, `product_name`, `category_id`, `subcategory_id`, `description`, `starting_price`, `buyout_price`, `image_url`, `created_at`, `collection_id`) VALUES
(1, NULL, 'Generic Motorcycle', 8, NULL, 'The Generic Motorcycle is a versatile and reliable bike suitable for various riding preferences. With a balanced design, it provides a comfortable and efficient riding experience.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/motorcycle/Generic%20Motorcycle/1.png', '2024-09-25 15:46:37', NULL),
(2, NULL, 'Kawasaki Z800', 8, NULL, 'The Kawasaki Z800 is a powerful and agile sportbike known for its striking design and performance. Its equipped with advanced features, making it a favorite among motorcycle enthusiasts.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/motorcycle/Kawasaki%20Z800/1.png', '2024-09-25 15:46:37', NULL),
(3, NULL, '300 Touring', 8, NULL, 'The 300 Touring is a stylish and comfortable sedan, known for its luxurious features and smooth performance.', 1000.00, 50000.00, 'https://cdn.dummyjson.com/products/images/vehicle/300%20Touring/6.png', '2024-09-25 15:46:37', NULL),
(4, NULL, 'MotoGP CI.H1', 8, NULL, 'The MotoGP CI.H1 is a high-performance motorcycle inspired by MotoGP racing technology. It offers cutting-edge features and precision engineering for an exhilarating riding experience.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/motorcycle/MotoGP%20CI.H1/1.png', '2024-09-25 15:46:37', NULL),
(5, NULL, 'Scooter Motorcycle', 8, NULL, 'The Scooter Motorcycle is a practical and fuel-efficient bike ideal for urban commuting. It features a step-through design and user-friendly controls for easy maneuverability.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/motorcycle/Scooter%20Motorcycle/1.png', '2024-09-25 15:46:37', NULL),
(6, NULL, 'Dodge Hornet GT Plus', 8, NULL, 'The Dodge Hornet GT Plus is a compact and agile hatchback, perfect for urban driving with a touch of sportiness.', 1000.00, 40000.00, 'https://cdn.dummyjson.com/products/images/vehicle/Dodge%20Hornet%20GT%20Plus/6.png', '2024-09-25 15:46:37', NULL),
(7, NULL, 'Sportbike Motorcycle', 8, NULL, 'The Sportbike Motorcycle is designed for speed and agility, with a sleek and aerodynamic profile. Its suitable for riders looking for a dynamic and thrilling riding experience.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/motorcycle/Sportbike%20Motorcycle/1.png', '2024-09-25 15:46:37', NULL),
(8, NULL, 'Durango SXT RWD', 8, NULL, 'The Durango SXT RWD is a spacious and versatile SUV, known for its strong performance and family-friendly features.', 1000.00, 30000.00, 'https://cdn.dummyjson.com/products/images/vehicle/Durango%20SXT%20RWD/3.png', '2024-09-25 15:46:37', NULL),
(9, NULL, 'Annibale Colombo Bed', 2, NULL, 'The Annibale Colombo Bed is a luxurious and elegant bed frame, crafted with high-quality materials for a comfortable and stylish bedroom.', 300.00, 10000.00, 'https://cdn.dummyjson.com/products/images/furniture/Annibale%20Colombo%20Bed/1.png', '2024-09-25 15:58:04', NULL),
(10, NULL, 'Annibale Colombo Sofa', 2, NULL, 'The Annibale Colombo Sofa is a sophisticated and comfortable seating option, featuring exquisite design and premium upholstery for your living room.', 200.00, 5000.00, 'https://cdn.dummyjson.com/products/images/furniture/Annibale%20Colombo%20Sofa/1.png', '2024-09-25 15:58:04', NULL),
(11, NULL, 'Bedside Table African Cherry', 2, NULL, 'The Bedside Table in African Cherry is a stylish and functional addition to your bedroom, providing convenient storage space and a touch of elegance.', 200.00, 5000.00, 'https://cdn.dummyjson.com/products/images/furniture/Bedside%20Table%20African%20Cherry/1.png', '2024-09-25 15:58:04', NULL),
(12, NULL, 'Knoll Saarinen Executive Conference Chair', 2, NULL, 'The Knoll Saarinen Executive Conference Chair is a modern and ergonomic chair, perfect for your office or conference room with its timeless design.', 300.00, 9999.00, 'https://cdn.dummyjson.com/products/images/furniture/Knoll%20Saarinen%20Executive%20Conference%20Chair/1.png', '2024-09-25 15:58:04', NULL),
(13, NULL, 'Wooden Bathroom Sink With Mirror', 2, NULL, 'he Wooden Bathroom Sink with Mirror is a unique and stylish addition to your bathroom, featuring a wooden sink countertop and a matching mirror.', 100.00, 3333.00, 'https://cdn.dummyjson.com/products/images/furniture/Wooden%20Bathroom%20Sink%20With%20Mirror/1.png', '2024-09-25 15:58:04', NULL),
(14, NULL, 'Green Crystal Earring', 3, NULL, 'The Green Crystal Earring is a dazzling accessory that features a vibrant green crystal. With a classic design, it adds a touch of elegance to your ensemble, perfect for formal or special occasions.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/womens-jewellery/Green%20Crystal%20Earring/1.png', '2024-09-25 16:03:52', NULL),
(15, NULL, 'Green Oval Earring', 3, NULL, 'The Green Oval Earring is a stylish and versatile accessory with a unique oval shape. Whether for casual or dressy occasions, its green hue and contemporary design make it a standout piece.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/womens-jewellery/Green%20Oval%20Earring/1.png', '2024-09-25 16:03:52', NULL),
(16, NULL, 'Tropical Earring', 3, NULL, 'The Tropical Earring is a fun and playful accessory inspired by tropical elements. Featuring vibrant colors and a lively design, its perfect for adding a touch of summer to your look.', 1000.00, 20000.00, 'https://cdn.dummyjson.com/products/images/womens-jewellery/Tropical%20Earring/1.png', '2024-09-25 16:03:52', NULL),
(35, NULL, 'Brown Leather Belt Watch', 4, NULL, 'The Brown Leather Belt Watch is a stylish timepiece with a classic design. Featuring a genuine leather strap and a sleek dial, it adds a touch of sophistication to your look', 100.00, 5555.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Brown%20Leather%20Belt%20Watch/1.png', '2024-09-25 16:13:32', NULL),
(36, NULL, 'Longines Master Collection', 4, NULL, 'The Longines Master Collection is an elegant and refined watch known for its precision and craftsmanship. With a timeless design, its a symbol of luxury and sophistication.', 100.00, 5555.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Longines%20Master%20Collection/1.png', '2024-09-25 16:13:32', NULL),
(37, NULL, 'Rolex Cellini Date Black Dial', 4, NULL, 'The Rolex Cellini Date with Black Dial is a classic and prestigious watch. With a black dial and date complication, it exudes sophistication and is a symbol of Rolexs heritage.', 222.00, 7777.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Cellini%20Date%20Black%20Dial/1.png', '2024-09-25 16:13:32', NULL),
(38, NULL, 'Rolex Cellini Moonphase', 4, NULL, 'The Rolex Cellini Moonphase is a masterpiece of horology, featuring a moon phase complication and exquisite design. It reflects Rolexs commitment to precision and elegance.', 222.00, 55555.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Cellini%20Moonphase/1.png\"', '2024-09-25 16:13:32', NULL),
(39, NULL, 'Rolex Datejust', 4, NULL, 'The Rolex Datejust is an iconic and versatile timepiece with a date window. Known for its timeless design and reliability, its a symbol of Rolexs watchmaking excellence.', 222.00, 222222.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Datejust/1.png', '2024-09-25 16:13:32', NULL),
(40, NULL, 'Rolex Submariner Watch', 4, NULL, 'The Rolex Submariner is a legendary dive watch with a rich history. Known for its durability and water resistance, its a symbol of adventure and exploration.', 111.00, 7777.00, 'https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Submariner%20Watch/1.png', '2024-09-25 16:13:32', NULL),
(41, NULL, 'Black Womens Gown', 5, NULL, 'The Black Womens Gown is an elegant and timeless evening gown. With a sleek black design, its perfect for formal events and special occasions, exuding sophistication and style.', 222.00, 6666.00, 'https://cdn.dummyjson.com/products/images/womens-dresses/Black%20Women\'s%20Gown/1.png', '2024-09-25 16:34:55', NULL),
(42, NULL, 'Corset Leather With Skirt', 5, NULL, 'The Corset Leather With Skirt is a bold and edgy ensemble that combines a stylish corset with a matching skirt. Ideal for fashion-forward individuals, it makes a statement at any event.', 222.00, 6666.00, 'https://cdn.dummyjson.com/products/images/womens-dresses/Corset%20Leather%20With%20Skirt/1.png', '2024-09-25 16:34:55', NULL),
(43, NULL, 'Corset With Black Skirt', 5, NULL, 'The Corset With Black Skirt is a chic and versatile outfit that pairs a fashionable corset with a classic black skirt. It offers a trendy and coordinated look for various occasions.', 222.00, 6666.00, 'https://cdn.dummyjson.com/products/images/womens-dresses/Corset%20With%20Black%20Skirt/1.png', '2024-09-25 16:34:55', NULL),
(44, NULL, 'Dress Pea', 5, NULL, 'The Dress Pea is a stylish and comfortable dress with a pea pattern. Perfect for casual outings, it adds a playful and fun element to your wardrobe, making it a great choice for day-to-day wear.', 100.00, 3000.00, 'https://cdn.dummyjson.com/products/images/womens-dresses/Dress%20Pea/1.png', '2024-09-25 16:34:55', NULL),
(45, NULL, 'Marni Red & Black Suit', 5, NULL, 'The Marni Red & Black Suit is a sophisticated and fashion-forward suit ensemble. With a combination of red and black tones, it showcases a modern design for a bold and confident look.', 400.00, 10000.00, 'https://cdn.dummyjson.com/products/images/womens-dresses/Marni%20Red%20&%20Black%20Suit/1.png', '2024-09-25 16:34:55', NULL),
(46, NULL, 'Blue Women\'s Handbag', 5, NULL, 'The Blue Women\'s Handbag is a stylish and spacious accessory for everyday use. With a vibrant blue color and multiple compartments, it combines fashion and functionality.', 400.00, 20000.00, 'https://cdn.dummyjson.com/products/images/womens-bags/Blue%20Women\'s%20Handbag/1.png', '2024-09-25 16:34:55', NULL),
(47, NULL, 'Heshe Women\'s Leather Bag', 5, NULL, 'The Heshe Women\'s Leather Bag is a luxurious and high-quality leather bag for the sophisticated woman. With a timeless design and durable craftsmanship, it\'s a versatile accessory.', 150.00, 17500.00, 'https://cdn.dummyjson.com/products/images/womens-bags/Heshe%20Women\'s%20Leather%20Bag/1.png', '2024-09-25 16:34:55', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Reviews`
--

CREATE TABLE `Reviews` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `review_text` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcategories`
--

CREATE TABLE `subcategories` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Transactions`
--

CREATE TABLE `Transactions` (
  `transaction_id` int(11) NOT NULL,
  `auction_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `transaction_amount` decimal(10,2) NOT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_likes`
--

CREATE TABLE `user_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `liked_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Auctions`
--
ALTER TABLE `Auctions`
  ADD PRIMARY KEY (`auction_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `highest_bidder_id` (`highest_bidder_id`);

--
-- Chỉ mục cho bảng `Bids`
--
ALTER TABLE `Bids`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `auction_id` (`auction_id`),
  ADD KEY `bidder_id` (`bidder_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`collection_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `fk_collection` (`collection_id`);

--
-- Chỉ mục cho bảng `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `Transactions`
--
ALTER TABLE `Transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `auction_id` (`auction_id`),
  ADD KEY `buyer_id` (`buyer_id`);

--
-- Chỉ mục cho bảng `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `user_likes`
--
ALTER TABLE `user_likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Auctions`
--
ALTER TABLE `Auctions`
  MODIFY `auction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `Bids`
--
ALTER TABLE `Bids`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `collections`
--
ALTER TABLE `collections`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `Transactions`
--
ALTER TABLE `Transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_likes`
--
ALTER TABLE `user_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `Auctions`
--
ALTER TABLE `Auctions`
  ADD CONSTRAINT `auctions_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `Products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auctions_ibfk_2` FOREIGN KEY (`highest_bidder_id`) REFERENCES `Users` (`user_id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `Bids`
--
ALTER TABLE `Bids`
  ADD CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`auction_id`) REFERENCES `Auctions` (`auction_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bids_ibfk_2` FOREIGN KEY (`bidder_id`) REFERENCES `Users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_collection` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`collection_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `Reviews`
--
ALTER TABLE `Reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `Products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Các ràng buộc cho bảng `Transactions`
--
ALTER TABLE `Transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`auction_id`) REFERENCES `Auctions` (`auction_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`buyer_id`) REFERENCES `Users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user_likes`
--
ALTER TABLE `user_likes`
  ADD CONSTRAINT `user_likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`),
  ADD CONSTRAINT `user_likes_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `Products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

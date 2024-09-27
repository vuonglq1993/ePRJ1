
-- Create Users table
CREATE TABLE Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create categories table
CREATE TABLE categories (
    category_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(255) NOT NULL
);

-- Create subcategories table
CREATE TABLE subcategories (
    subcategory_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    subcategory_name VARCHAR(255) NOT NULL,
    category_id INTEGER,
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);

CREATE TABLE Products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT, -- Người đăng sản phẩm
    product_name VARCHAR(100) NOT NULL,
    category_id INTEGER,
    subcategory_id INTEGER,
    description TEXT,
    starting_price DECIMAL(10, 2) NOT NULL,
    buyout_price DECIMAL(10, 2), -- Giá mua ngay
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE,
    FOREIGN KEY (category_id) REFERENCES categories(category_id) ON DELETE CASCADE,
    FOREIGN KEY (category_id) REFERENCES categories(category_id) ON DELETE CASCADE
);

CREATE TABLE Auctions (
    auction_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    start_time TIMESTAMP NOT NULL,
    end_time TIMESTAMP NOT NULL,
    current_bid DECIMAL(10, 2), -- Giá hiện tại cao nhất
    highest_bidder_id INT, -- Người đấu giá cao nhất hiện tại
    status ENUM('open', 'closed') DEFAULT 'open',
    FOREIGN KEY (product_id) REFERENCES Products(product_id) ON DELETE CASCADE,
    FOREIGN KEY (highest_bidder_id) REFERENCES Users(user_id) ON DELETE SET NULL
);

CREATE TABLE Bids (
    bid_id INT AUTO_INCREMENT PRIMARY KEY,
    auction_id INT,
    bidder_id INT,
    bid_amount DECIMAL(10, 2) NOT NULL,
    bid_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (auction_id) REFERENCES Auctions(auction_id) ON DELETE CASCADE,
    FOREIGN KEY (bidder_id) REFERENCES Users(user_id) ON DELETE CASCADE
);

CREATE TABLE Transactions (
    transaction_id INT AUTO_INCREMENT PRIMARY KEY,
    auction_id INT,
    buyer_id INT,
    transaction_amount DECIMAL(10, 2) NOT NULL,
    transaction_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (auction_id) REFERENCES Auctions(auction_id) ON DELETE CASCADE,
    FOREIGN KEY (buyer_id) REFERENCES Users(user_id) ON DELETE CASCADE
);

CREATE TABLE Reviews (
    review_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    user_id INT, -- Người đánh giá
    rating INT CHECK (rating BETWEEN 1 AND 5),
    review_text TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES Products(product_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE
);


Tạo bảng user_likes
CREATE TABLE user_likes (
    id SERIAL PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    liked_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id),
    UNIQUE (user_id, product_id) 
);

dữ liệu cho bảng categories:
INSERT INTO categories (category_name)
VALUES
    ('Art'),
    ('Interiors'),
    ('Jewellery'),
    ('Watches'),
    ('Fashion'),
    ('Coins & Stamps'),
    ('Comics'),
    ('Cars & Bikes'),
    ('Wine & Whisky'),
    ('Asia & Tribal'),
    ('Trading cards'),
    ('Toys & Models'),
    ('Archaeology'),
    ('Sports'),
    ('Music, Movie & Cameras'),
    ('Books & History');

dữ liệu cho bảng products - category Bikes & Cars:
INSERT INTO `Products`(`product_name`, `category_id`, `description`, `starting_price`, `buyout_price`, `image_url`) 
VALUES 
('Generic Motorcycle','8','The Generic Motorcycle is a versatile and reliable bike suitable for various riding preferences. With a balanced design, it provides a comfortable and efficient riding experience.','1000','20000','https://cdn.dummyjson.com/products/images/motorcycle/Generic%20Motorcycle/1.png'),
('Kawasaki Z800','8','The Kawasaki Z800 is a powerful and agile sportbike known for its striking design and performance. Its equipped with advanced features, making it a favorite among motorcycle enthusiasts.','1000','20000','https://cdn.dummyjson.com/products/images/motorcycle/Kawasaki%20Z800/1.png'),
('300 Touring','8','The 300 Touring is a stylish and comfortable sedan, known for its luxurious features and smooth performance.','1000','50000','https://cdn.dummyjson.com/products/images/vehicle/300%20Touring/6.png'),
('MotoGP CI.H1','8','The MotoGP CI.H1 is a high-performance motorcycle inspired by MotoGP racing technology. It offers cutting-edge features and precision engineering for an exhilarating riding experience.','1000','20000','https://cdn.dummyjson.com/products/images/motorcycle/MotoGP%20CI.H1/1.png'),
('Scooter Motorcycle','8','The Scooter Motorcycle is a practical and fuel-efficient bike ideal for urban commuting. It features a step-through design and user-friendly controls for easy maneuverability.','1000','20000','https://cdn.dummyjson.com/products/images/motorcycle/Scooter%20Motorcycle/1.png'),
('Dodge Hornet GT Plus','8','The Dodge Hornet GT Plus is a compact and agile hatchback, perfect for urban driving with a touch of sportiness.','1000','40000','https://cdn.dummyjson.com/products/images/vehicle/Dodge%20Hornet%20GT%20Plus/6.png'),
('Sportbike Motorcycle','8','The Sportbike Motorcycle is designed for speed and agility, with a sleek and aerodynamic profile. Its suitable for riders looking for a dynamic and thrilling riding experience.','1000','20000','https://cdn.dummyjson.com/products/images/motorcycle/Sportbike%20Motorcycle/1.png'),
('Durango SXT RWD','8','The Durango SXT RWD is a spacious and versatile SUV, known for its strong performance and family-friendly features.','1000','30000','https://cdn.dummyjson.com/products/images/vehicle/Durango%20SXT%20RWD/3.png')

dữ liệu category Interiors:
INSERT INTO `Products`(`product_name`, `category_id`, `description`, `starting_price`, `buyout_price`, `image_url`) 
VALUES 
('Annibale Colombo Bed','2','The Annibale Colombo Bed is a luxurious and elegant bed frame, crafted with high-quality materials for a comfortable and stylish bedroom.','300','10000','https://cdn.dummyjson.com/products/images/furniture/Annibale%20Colombo%20Bed/1.png'),
('Annibale Colombo Sofa','2','The Annibale Colombo Sofa is a sophisticated and comfortable seating option, featuring exquisite design and premium upholstery for your living room.','200','5000','https://cdn.dummyjson.com/products/images/furniture/Annibale%20Colombo%20Sofa/1.png'),
('Bedside Table African Cherry','2','The Bedside Table in African Cherry is a stylish and functional addition to your bedroom, providing convenient storage space and a touch of elegance.','200','5000','https://cdn.dummyjson.com/products/images/furniture/Bedside%20Table%20African%20Cherry/1.png'),
('Knoll Saarinen Executive Conference Chair','2','The Knoll Saarinen Executive Conference Chair is a modern and ergonomic chair, perfect for your office or conference room with its timeless design.','300','9999','https://cdn.dummyjson.com/products/images/furniture/Knoll%20Saarinen%20Executive%20Conference%20Chair/1.png'),
('Wooden Bathroom Sink With Mirror','2','he Wooden Bathroom Sink with Mirror is a unique and stylish addition to your bathroom, featuring a wooden sink countertop and a matching mirror.','100','3333','https://cdn.dummyjson.com/products/images/furniture/Wooden%20Bathroom%20Sink%20With%20Mirror/1.png')

dữ liệu category Jewellery:
INSERT INTO `Products`(`product_name`, `category_id`, `description`, `starting_price`, `buyout_price`, `image_url`) 
 VALUES 
 ('Green Crystal Earring','3','The Green Crystal Earring is a dazzling accessory that features a vibrant green crystal. With a classic design, it adds a touch of elegance to your ensemble, perfect for formal or special occasions.','1000','20000','https://cdn.dummyjson.com/products/images/womens-jewellery/Green%20Crystal%20Earring/1.png'),
  ('Green Oval Earring','3','The Green Oval Earring is a stylish and versatile accessory with a unique oval shape. Whether for casual or dressy occasions, its green hue and contemporary design make it a standout piece.','1000','20000','https://cdn.dummyjson.com/products/images/womens-jewellery/Green%20Oval%20Earring/1.png'),
   ('Tropical Earring','3','The Tropical Earring is a fun and playful accessory inspired by tropical elements. Featuring vibrant colors and a lively design, its perfect for adding a touch of summer to your look.','1000','20000','https://cdn.dummyjson.com/products/images/womens-jewellery/Tropical%20Earring/1.png')

dữ liệu category Watches:
INSERT INTO `Products`(`product_name`, `category_id`, `description`, `starting_price`, `buyout_price`, `image_url`) 
 VALUES 
 
 ('Brown Leather Belt Watch','4','The Brown Leather Belt Watch is a stylish timepiece with a classic design. Featuring a genuine leather strap and a sleek dial, it adds a touch of sophistication to your look','100','5555','https://cdn.dummyjson.com/products/images/mens-watches/Brown%20Leather%20Belt%20Watch/1.png'),
  ('Longines Master Collection','4','The Longines Master Collection is an elegant and refined watch known for its precision and craftsmanship. With a timeless design, its a symbol of luxury and sophistication.','100','5555','https://cdn.dummyjson.com/products/images/mens-watches/Longines%20Master%20Collection/1.png'),
   ('Rolex Cellini Date Black Dial','4','The Rolex Cellini Date with Black Dial is a classic and prestigious watch. With a black dial and date complication, it exudes sophistication and is a symbol of Rolexs heritage.','222','77777','https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Cellini%20Date%20Black%20Dial/1.png'),
    ('Rolex Cellini Moonphase','4','The Rolex Cellini Moonphase is a masterpiece of horology, featuring a moon phase complication and exquisite design. It reflects Rolexs commitment to precision and elegance.','222','55555','https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Cellini%20Moonphase/1.png"'),
     ('Rolex Datejust','4','The Rolex Datejust is an iconic and versatile timepiece with a date window. Known for its timeless design and reliability, its a symbol of Rolexs watchmaking excellence.','222','222222','https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Datejust/1.png'),
      ('Rolex Submariner Watch','4','The Rolex Submariner is a legendary dive watch with a rich history. Known for its durability and water resistance, its a symbol of adventure and exploration.','111','7777','https://cdn.dummyjson.com/products/images/mens-watches/Rolex%20Submariner%20Watch/1.png')

dữ liệu category Fashion:
INSERT INTO `Products`(`product_name`, `category_id`, `description`, `starting_price`, `buyout_price`, `image_url`) 

VALUES 
('Black Womens Gown','5',"The Black Womens Gown is an elegant and timeless evening gown. With a sleek black design, its perfect for formal events and special occasions, exuding sophistication and style.",'222','6666',"https://cdn.dummyjson.com/products/images/womens-dresses/Black%20Women's%20Gown/1.png"),
('Corset Leather With Skirt','5',"The Corset Leather With Skirt is a bold and edgy ensemble that combines a stylish corset with a matching skirt. Ideal for fashion-forward individuals, it makes a statement at any event.",'222','6666','https://cdn.dummyjson.com/products/images/womens-dresses/Corset%20Leather%20With%20Skirt/1.png'),
("Corset With Black Skirt",'5',"The Corset With Black Skirt is a chic and versatile outfit that pairs a fashionable corset with a classic black skirt. It offers a trendy and coordinated look for various occasions.",'222','6666',"https://cdn.dummyjson.com/products/images/womens-dresses/Corset%20With%20Black%20Skirt/1.png"),
("Dress Pea",'5',"The Dress Pea is a stylish and comfortable dress with a pea pattern. Perfect for casual outings, it adds a playful and fun element to your wardrobe, making it a great choice for day-to-day wear.",'100','3000',"https://cdn.dummyjson.com/products/images/womens-dresses/Dress%20Pea/1.png"),
("Marni Red & Black Suit",'5',"The Marni Red & Black Suit is a sophisticated and fashion-forward suit ensemble. With a combination of red and black tones, it showcases a modern design for a bold and confident look.",'400','10000',"https://cdn.dummyjson.com/products/images/womens-dresses/Marni%20Red%20&%20Black%20Suit/1.png"),
("Blue Women's Handbag",'5',"The Blue Women's Handbag is a stylish and spacious accessory for everyday use. With a vibrant blue color and multiple compartments, it combines fashion and functionality.",'400','20000',"https://cdn.dummyjson.com/products/images/womens-bags/Blue%20Women's%20Handbag/1.png"),
("Heshe Women's Leather Bag",'5',"The Heshe Women's Leather Bag is a luxurious and high-quality leather bag for the sophisticated woman. With a timeless design and durable craftsmanship, it's a versatile accessory.",'150','17500',"https://cdn.dummyjson.com/products/images/womens-bags/Heshe%20Women's%20Leather%20Bag/1.png")



ALTER TABLE `products` ADD `product_detail` TEXT NOT NULL AFTER `collection_id`;
ALTER TABLE `products` CHANGE `product_detail` `product_detail` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;

INSERT INTO products (category_id, image_url, product_name, product_detail, description, starting_price, buyout_price)
VALUES
(6, 'https://i.ebayimg.com/images/g/4aQAAOSw86hm8Z6p/s-l1600.jpg', 'Silver Quarters Lot of 65 Coins all pre 1965 plus Bonus', 'Year: 1964\nComposition: Silver\nCountry/Region of Manufacture: United States', '65 1964 and prior mostly Washington quarters with a bonus Mercury dime. All pre-1965 silver.', 1000, 15000),
(6, 'https://i.ebayimg.com/images/g/uwoAAOSwfVdm9UsR/s-l1600.jpg', 'RARE Antique James Buchanan $1 Dollar Coin 1857', 'Shape: Round\nAlignment: Coin (180°)\nWeight (Grams): 1', NULL, 500, 8000),
(6, 'https://i.ebayimg.com/images/g/eA8AAOSwjXVazI9n/s-l1600.jpg', 'US 1899 Year Gold Banknote US 1 2 5 Dollar Notes', NULL, 'Name: US 1899 Year Gold Banknote US 1 2 5 Dollar Notes. These notes are special...', 200, 2500),
(6, 'https://cdn11.bigcommerce.com/s-9xwo1raw7u/images/stencil/1280x1280/products/34625/36507/200px-Us-Scott-Washington-Series-1902-1-Green-197__44267.1638975276.jpg', '1922 1c Washington, green', NULL, 'This is one of the rarest 20th-century US stamps...', 750, 10000),
(6, 'https://cdn11.bigcommerce.com/s-9xwo1raw7u/images/stencil/1280x1280/products/5655/2022-Flags.jpg', '5655 - 2022 First-Class Forever Stamp - Flags', 'Stamp Category: Definitive\nSet: 2022 US Flags Collection', 'History the stamp represents: A woman named Grace created the original flag design...', 50, 10000);
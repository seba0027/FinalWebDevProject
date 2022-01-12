-- Database: `project` and php web application user
CREATE DATABASE project;
GRANT USAGE ON *.* TO 'appuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON project.* TO 'appuser'@'localhost';
FLUSH PRIVILEGES;

USE project;
--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) NOT NULL,
 `imagePath` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `rating` int (1) NOT NULL,
  `description` varchar(255) NOT NULL,
  CONSTRAINT pk_id PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO products (id, productName,imagePath, price, rating, description)
VALUES
(1, 'Burger','./images/burger.jpg', '8', '3', 'Our Burger is made with a grass-fed burger patty and adds signature bacons, 
						smoky BBQ sauce tossed pickles, and golden buns. Savour each bite of this jumbo burger 
						that is perfect for any night of the week!'),
(2, 'Pizza', './images/pizza.jpg', '13', '4', 'Slather them with dark BBQ sauce, topped with slivered onion and slices of 
						chicken tender with pineapple and smoky-sweet seasonings. Contrast comes courtesy 
						of refreshing coriander.'),
(3, 'Pasta', './images/pasta.jpg', '16', '5', 'Our spaghetti and shrimps tastes just like heaven, but only takes a fraction of 
						the time! The secret to these beef strips is marinating in secret sauce pairing 
						with a homemade tomato sauce that keeps the dish flavorful'),
(4, 'Hotpot', './images/hotpot.jpg', '12', '4', 'The spicy soup full of Asian flavors and the tender and springy angel red prawns
						are simply addictive!'),
(5, 'Bibimbap', './images/bibimbap.png', '15', '3', 'The main ingredient of this dish is rice, topped with namul and Kochuchang chili 
						sauce or broccoli. Additional ingredients are eggs and meat. It can be served cold or hot.'),
(6, 'Kimchi', './images/kimchi.jpg', '10', '2', 'It is a traditional dish of pickled and fermented vegetables, such as napa cabbage 
						and Korean radish, prepared with a variety of seasoning options including gochugaru 
						(paprika), scallions, and garlic.'),
(7, 'Pork Rice', './images/rice.jpg', '19', '1', 'Minced pork rice is a rice dish that is commonly seen throughout Taiwan. Ground 
						pork marinated and boiled in soy sauce served on top of steamed rice. It is a type of 
						dish that puts the rice on the bottom.'),
(8, 'Noodles', './images/noodles.jpg', '23', '2', 'Plain noodles refer to a kind of noodles or noodles with almost no side dishes, 
						usually only with lard and seasoning'),
(9, 'Banh Can', './images/banh-can.png', '25', '3', 'Banh Can is a "baked" type of rice flour. It is served with raw leafy vegetables 
						and often served with green mango, sour star fruit, and cucumber.'),
(10, 'Com Tam', './images/com-tam.jpg', '17', '4', 'Com tam is made from rice with fractured rice grains. tam refers to the broken rice 
						grains, while Com refers to cooked rice. Although there are varied names, the main 
						ingredients remain the same for most cases.'),
(11, 'Boba Tea', './images/boba.png', '9', '5', 'Boba tea is a tea-based drink that originated in Taiwan in the early 1980s. It most 
						commonly consists of tea accompanied by chewy tapioca balls, but it can be made with 
						other toppings as well.'),
(12, 'Banana Milkshake', './images/Banana-milk.png', '6', '5', 'A  Banana milkshake is a sweet drink made by blending milk, ice cream, bananas, 
						and flavorings. It may also be made using a base made from non-dairy products, including 
						plant milks such as almond milk, coconut milk, or soy milk.');


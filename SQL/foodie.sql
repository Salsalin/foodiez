-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 03:40 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `price` varchar(64) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `photo`, `type_id`, `restaurant_id`, `price`, `rating`) VALUES
(86, 'Chicken Gizzard', '52a3f632-d23d-ca0e-1af0-08d54f542b14_340x272.jpg', 1, 40, 'TK 50.00', 0),
(88, 'Bhuna Khichuri', '', 1, 40, 'TK 130.00', 0),
(89, 'Mutton Tehari', '', 1, 40, 'TK 140.00', 0),
(90, 'Shobji ( Special)', '', 1, 40, 'TK 30.00', 0),
(91, 'Ruti/Parata', '', 1, 40, 'TK 8.00', 0),
(92, 'Moglai Paratha', '', 2, 40, 'TK 70.00', 0),
(93, 'Special Naan', '', 2, 40, 'TK 16.00', 0),
(95, 'Chicken Jhal fry', '', 3, 40, 'TK 130.00', 0),
(96, 'Chicken Full Roast', '', 3, 40, 'TK 300.00', 0),
(97, 'Kachchi Biriyani with Egg (half)', '', 4, 40, 'TK 110.00', 0),
(98, 'Chicken Biriyani with Egg (Full)', '', 4, 40, 'TK 110.00', 0),
(99, 'Beef Sezzling', '../img/beef sezzling.jpg', 5, 41, 'TK 380.00', 0),
(115, 'Special Fish', '../img/Fish.jpg', 11, 41, 'TK 140.00', 0),
(116, 'Fish Masala', '../img/Fish masala.jpg', 11, 41, 'TK 120.00-240.00', 0),
(122, 'Mixed Vegetable', '../img/mixed vege.jpg', 14, 41, 'tk 160.00-230.00', 0),
(123, 'Beef Vegetable', '../img/Beef vege.jpg', 14, 41, 'TK 120.00-240.00', 0),
(131, 'Chicken Chap', '', 16, 42, 'TK 100.00', 0),
(132, 'Beef Kabab', '', 17, 42, 'TK 100.00', 0),
(133, 'Shik Kabab', '', 17, 42, 'Tk 80.00', 0),
(134, 'Chicken  Grill', '', 18, 42, 'Tk  120.00-240.00', 0),
(136, 'Pizza Burger', '../img/Pizza-Burger-683x460.jpeg', 15, 32, 'TK 300.00', 0),
(138, 'Pizza Cone', '../img/Recipe Video â€“ Make Delicious Pizza Cone at Home .jpg', 15, 32, 'Tk 180.00', 0),
(139, 'Pizza Mimosa', '../img/150884919659ef362cd3ddf_59ef362ada47e0.50157385-image(1200x1200).jpeg', 15, 32, 'TK 290.00', 0),
(140, 'Fried Rice', '../img/Chinese_Shrimp_Fried_Rice_IMG_8133-thumb-960x541-270654.jpg', 6, 39, 'TK 260.00', 0),
(141, 'Prawn Fried Rice', '../img/prawn.fried_.rice_.jpg', 6, 39, 'TK 140.00', 0),
(142, 'Thai Fried Rice', '../img/file.jpg', 6, 39, 'TK 130.00-260.00', 0),
(143, 'Thai Soup', '../img/chickensoup640-5849b4365f9b58dccc02248d.jpg', 7, 39, 'TK 140.00-280.00', 0),
(144, 'Chicken Corn Soup', '../img/chicken-and-corn-soup-61687-1.jpeg', 7, 39, 'TK 120.00-240.00', 0),
(146, 'Mango Shake', '../img/download.jpg', 9, 39, 'TK 100.00', 0),
(147, 'Chocolate Milk Shake', '../img/26148_chocolate-malted-milkshake.jpg', 9, 39, 'TK 110.00', 0),
(148, 'Cold Coffee', '../img/maxresdefault (1).jpg', 10, 39, 'Tk 80.00', 0),
(149, 'Iced Lemon Tea', '../img/lemon-iced-tea-recipe.jpg', 10, 39, 'TK 60.00', 0),
(150, 'Papaya Shake', '../img/maxresdefault.jpg', 9, 39, 'TK 100.00', 0),
(152, 'Cold Coffee', '../img/cold-coffee.jpg', 10, 42, 'TK 100.00', 0),
(153, 'BBQ Chicken Pizza', '../img/barbecue-chicken-pizza.jpg', 15, 32, 'TK 500.00', 0),
(154, 'Chicken Fried Rice', '../img/Mexican-Subway.jpg', 19, 41, '130-260 /=', 0),
(155, 'Prawn Fried Rice', '../img/prawn.fried_.rice_.jpg', 19, 41, '120-240 /=', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`member_id`, `firstname`, `lastname`, `email`, `password`) VALUES
(10, 'Afroza', 'Islam', 'afroza@gmail.com', '456'),
(13, 'Farhana', 'Riya', 'riya@gmail.com', '903'),
(14, 'Tania', 'Akhter', 'tania@gmail.com', '555'),
(16, 'Rakhi', 'Banik', 'rakhibaju@gmail.com', 'rakhi'),
(17, 'Salsalin', 'Akhter', 'salsalin@gmail.com', '2345'),
(19, 'Mehedee', 'Alam', 'mehedee@gmail.com', 'maa');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `title` varchar(64) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `item_id`, `date`, `title`, `content`) VALUES
(10, 14, 88, '2018-01-24 08:47:51', 'good', 'i like it'),
(11, 16, 98, '2018-01-26 07:03:49', 'Tasty', 'The chicken was very steady and perfect. the curry is slightly sour which provides more cravings for the purpose. i would love to go there again.'),
(12, 17, 89, '2018-01-27 12:49:54', 'Not bad', 'The served time is too late,but the  tehari was tasty..'),
(13, 17, 126, '2018-01-29 11:19:09', 'Best in Comilla', 'Good service'),
(14, 13, 134, '2018-01-29 11:51:51', 'Not bad', 'Average test'),
(15, 17, 101, '2018-01-29 12:08:16', 'Testy :)', 'Satisfied with their service..'),
(16, 13, 118, '2018-01-29 12:18:41', 'Great deal', 'Chicken noddles ahaa <3 :) ... what else do i need...tummy happpy so i am happy :D'),
(17, 10, 117, '2018-01-29 12:30:45', 'Good entrance..', 'Price wise it is little costly as compare to others but worth..\r\nGood service and cleanness to.');

-- --------------------------------------------------------

--
-- Table structure for table `seperate_restaurant`
--

CREATE TABLE `seperate_restaurant` (
  `id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `coverphoto` varchar(200) NOT NULL,
  `restaurant_name` varchar(40) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `address` varchar(150) NOT NULL,
  `time` varchar(100) NOT NULL,
  `cuisine` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seperate_restaurant`
--

INSERT INTO `seperate_restaurant` (`id`, `photo`, `coverphoto`, `restaurant_name`, `email`, `password`, `address`, `time`, `cuisine`, `mobile`) VALUES
(32, '../img/18033811_1850861208485279_8081897472506878664_n.jpg', '../img/23783571_1941457199425679_6725384642993975618_o.jpg', 'Pizza Dot', 'pizzadot@gmail.com', '123', 'Dr Akhtar Hameed Khan Rd, Comilla', '10.00AM-10.00PM', 'Pizza', '01782-003344'),
(39, '../img/14910382_325645514480739_8293985993164626312_n.jpg', '../img/27624792_543441949367760_40043399678662720_o.jpg', 'Coffee Buzz', 'coffeebuzz@gmail.com', '123', 'Police line', '10.00AM-10.00PM', 'Thai', '01931564321'),
(40, '../img/13516320_1073367939400403_4397581083792029806_n.jpg', '../img/ww-grilled-jalapeno-chicken-249502_15511.jpg', 'Kingfisher', 'Kingfisher@gmail.com', '123', 'Jhawtola,Comilla', '11.00AM-10.00PM', 'Breakfast and Dinner', '01677080410'),
(41, '../img/10372541_483629728438338_2957764887076841115_n.jpg', '../img/pexels-photo-461198.jpeg', 'Silver Spoon', 'silverspoon@gmail.com', '123', 'Badurtala,Comilla', '10 .00AM -11.00PM', 'Chinese', '01819115310'),
(42, '../img/12803297_1732509746962272_2780875045391230748_n.jpg', '../img/food-breakfast-egg-milk.jpg', 'PC restora', 'pcrestora@gmail.com', '123', 'Fouzdaree Road,Comilla', '10.00AM-10.00PM', 'Grill, Chap', '01656349870');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `demo_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `restaurant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`demo_id`, `id`, `name`, `restaurant_id`) VALUES
(16, 1, 'Breakfast', 40),
(17, 2, 'Snakes', 40),
(18, 3, 'Lunch', 40),
(19, 4, 'Biriyani', 40),
(20, 5, 'Special Chinies', 41),
(21, 6, 'Rice', 39),
(22, 7, 'Soup', 39),
(24, 9, 'Shakes', 39),
(25, 10, 'Coffee & Tea', 39),
(26, 11, 'Fish', 41),
(29, 14, 'Vegetable', 41),
(30, 15, 'Pizza', 32),
(31, 16, 'Chap', 42),
(32, 17, 'Kabab', 42),
(33, 18, 'Grill', 42),
(35, 10, 'Coffee & Tea', 42),
(36, 19, 'Fried Rice', 41);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seperate_restaurant`
--
ALTER TABLE `seperate_restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`demo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seperate_restaurant`
--
ALTER TABLE `seperate_restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `demo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

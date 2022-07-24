-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 08:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bar1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-order`
--

CREATE TABLE `admin-order` (
  `Admin_Order_id` int(11) NOT NULL,
  `Login_id` int(11) NOT NULL,
  `Book_id` int(11) NOT NULL,
  `Distributor_id` int(11) NOT NULL,
  `Order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin-reply`
--

CREATE TABLE `admin-reply` (
  `rep_id` int(11) NOT NULL,
  `cm_id` int(11) NOT NULL,
  `content` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin-reply`
--

INSERT INTO `admin-reply` (`rep_id`, `cm_id`, `content`, `time`, `Status`) VALUES
(15, 13, 'qqqqqqqqqq', '2022-07-03 07:10:57', 1),
(16, 16, 'qwd', '2022-07-03 07:21:53', 1),
(17, 16, 'zxzx', '2022-07-03 07:24:02', 1),
(18, 17, 'hvhgvgvhvgh', '2022-07-03 07:27:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book-type`
--

CREATE TABLE `book-type` (
  `Type_id` int(11) NOT NULL,
  `Type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book-type`
--

INSERT INTO `book-type` (`Type_id`, `Type_name`) VALUES
(1, 'FICTION'),
(2, 'HORROR'),
(3, 'ROMANTIC'),
(4, 'ACTION'),
(5, 'COMEDY'),
(6, 'SCIENCE'),
(7, 'THRILLER'),
(8, 'FANTASY'),
(9, 'NOVELS'),
(10, 'DRAMA'),
(38, 'EMOTIONAL');

-- --------------------------------------------------------

--
-- Table structure for table `bookrent`
--

CREATE TABLE `bookrent` (
  `rent_id` int(11) NOT NULL,
  `Book_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `rentam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Book_id` int(11) NOT NULL,
  `Book_name` varchar(20) NOT NULL,
  `Type_id` int(11) NOT NULL,
  `Edition` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `Image` varchar(45) NOT NULL,
  `Status` varchar(11) NOT NULL,
  `Author_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_id`, `Book_name`, `Type_id`, `Edition`, `Price`, `description`, `Image`, `Status`, `Author_name`) VALUES
(3, 'THE DRAGON TALES', 1, '(2015)', 899, 'A innocent Dragon Lost in the Human world', 'jom.jpg', 'YES', 'Sutherland'),
(4, 'THE HARRY POTTER', 8, '(2018)', 399, 'Chronicle the lives of a young wizard, Harry Potter', 'harry.jpg', 'YES', 'J.K Rowling'),
(6, 'THE 12th CHILD', 9, '(2016)', 599, 'Set in Shenadoah Valley, revolving around TRUST,LOVE and FRIENDSHIP', '12thchild.jpg', 'YES', 'Brette Lee'),
(7, 'THE BEST', 6, '(2017)', 499, 'Set in the Environment of Scientific things', 'im455.jpg', 'YES', 'Tina Turner'),
(9, 'THE KING OF DRUGS', 8, '(2015)', 455, 'In the 1970s, a petty smuggler in Busan joins the illicit drug trade and rises to the top of the Japanese narcotics trade', 'nora barett.jpg', 'YES', 'Nora Benett'),
(10, 'SIN EATER', 9, '(2016)', 599, 'A DARK and THRILLING PAGE TURNER', 'SM.jpg', 'YES', 'Megan Campisi'),
(11, 'GRAVITY OF US', 6, '(2014)', 749, 'Tells you about the discovery of great things', 'the gravity to us.jpg', 'YES', 'Phil Stamper'),
(12, 'HOUSE OF SECRETS', 2, '(2016)', 599, 'When the world crumbles around you how does it feel?', 'hos.jpg', 'YES', 'Maria Ramsey'),
(13, 'THE RITUAL', 2, '(2019)', 599, 'There are Some things worse than Deaths', 'ritual.jpg', 'YES', 'Adam Nevill'),
(14, 'SUNSET KISS', 3, '(2018)', 999, 'The DAY that Forever Changed their LIVES', 'sunset.jpg', 'YES', 'Anna Bright'),
(15, 'BLACK THUNDER', 4, '(2013)', 799, 'Story of a Unsung HERO', 'thunder.jpg', 'YES', 'Riley Peyton'),
(16, 'SEVENTEEN', 5, '(2021)', 589, 'A previously Uncut Comedy', 'seventeen.jpg', 'YES', 'Brian Robert Smith'),
(17, 'SECRET CLIENT', 7, '(2013)', 499, 'Describes the story of Undercover Agent', 'client.jpg', 'YES', 'Taylor Palacio'),
(18, 'FROST EASTER', 8, '(2016)', 466, 'The Magic Eater Trilogy Book', 'frost.png', 'YES', 'Carol Beth'),
(19, 'DECEPTION', 10, '(2018)', 799, 'Story of Lady Thief', 'deception.jpg', 'YES', 'Harley Austin'),
(20, 'HEALING', 38, '(2017)', 399, 'How to Put Yourself Back Again', 'emo.jpg', 'YES', 'HARRY BARRY'),
(21, 'MEMORY', 1, '(2017)', 455, 'In Purgatory, He has to piece together his jumbled MEMORIES ', 'memory.jpg', 'YES', 'Angelina Aludo'),
(27, 'WORLD WHISPERER', 1, '(2016)', 499, 'Story of a Wonder Women', 'World-Whisperer.jpg', 'YES', 'Rachael Devenish');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `Book_name` varchar(20) NOT NULL,
  `Book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `comp_id` int(11) NOT NULL,
  `Login_id` int(11) NOT NULL,
  `Content` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `comp_stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`comp_id`, `Login_id`, `Content`, `time`, `comp_stat`) VALUES
(16, 7, 'bad quality of the book', '2022-07-03 07:12:32', 1),
(17, 17, 'ashisgh', '2022-07-03 07:27:35', 1),
(18, 17, 'uhfidhuid', '2022-07-03 07:53:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `Dealer_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Login_id` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `License_no` bigint(11) NOT NULL,
  `License_Upload` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`Dealer_id`, `Name`, `Mobile`, `Email`, `Login_id`, `Address`, `License_no`, `License_Upload`) VALUES
(4, 'Jomeesh Jose', '9074875924', 'jomeesh111@gmail.com', 31, 'Mecheryll House Ondyangadi Wayanad', 554812811715, 'WIN_20220227_12_27_57_Pro.jpg'),
(7, 'Tom Joseph', '8078352073', 'tomjoseph11042000@gmail.com', 38, 'Kattapana Vandanmed', 332254811115, 'photo_2022-04-04_22-03-55.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboy`
--

CREATE TABLE `deliveryboy` (
  `Delivery_boy_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Login_id` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Aadhaar_no` int(11) NOT NULL,
  `Aadhaar_Upload` varchar(60) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryboy`
--

INSERT INTO `deliveryboy` (`Delivery_boy_id`, `Name`, `Mobile`, `Email`, `Login_id`, `Address`, `Rating`, `Aadhaar_no`, `Aadhaar_Upload`, `Status`) VALUES
(2, 'Shane Watson', '9985562325', 'traintest31@gmail.com', 28, 'Kottayam', 0, 2147483647, '12034WVdJLkyZuvVHerWM.jpg', 1),
(3, 'Alex Thomas', '8547242942', 'alex.t149@gmail.com', 39, 'Changanaserry', 0, 2147483647, '12623.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `Distributor_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Login_id` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Rating` int(11) NOT NULL,
  `License_no` int(11) NOT NULL,
  `Upload_License` varchar(60) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`Distributor_id`, `Name`, `Mobile`, `Email`, `Login_id`, `Address`, `Rating`, `License_no`, `Upload_License`, `Status`) VALUES
(1, 'Victor Valdes', '9986532333', 'valdes99@gmail.com', 27, 'Belgium', 0, 2147483647, '3-Figure2-1.png', 0),
(2, 'Jamie Jackson', '9983516555', 'jam3@gmail.com', 29, 'Delhi', 0, 2147483647, '12621.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_id` int(11) NOT NULL,
  `Login_id` int(11) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Review` varchar(50) NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Login_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Role` varchar(11) NOT NULL,
  `Status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Login_id`, `username`, `password`, `Role`, `Status`) VALUES
(1, 'admin', 'admin', '1', 'ACCEPTED'),
(7, 'vij89', 'vij888', '0', 'ACCEPTED'),
(15, 'akshay99', 'aks678', '0', 'BLOCKED'),
(17, 'ils88', 'ils888', '0', 'ACCEPTED'),
(18, 'kgf66', 'kgf666', '0', 'ACCEPTED'),
(20, 'alex9', 'alex999', '0', 'ADMINREJECT'),
(21, 'dua88', 'dua888', '0', 'BLOCKED'),
(22, 'david88', 'david88', '0', 'REJECTED'),
(23, 'abi88', 'abi888', '0', 'ADMINREJECT'),
(27, 'vic5', 'vic555', 'distributor', 'ACCEPTED'),
(28, 'watson88', 'atson88', 'delivery', 'ACCEPTED'),
(29, 'jam8', 'jam88', 'distributor', 'ACCEPTED'),
(30, 'anilectjose', 'akshay12', '0', 'ADMINREJECT'),
(31, 'jome6', 'jomee666', 'Dealer', 'ACCEPTED'),
(35, 'khatana77', 'khatana777', '0', 'REJECTED'),
(37, '', 'd41d8cd98f00b204e980', '0', ''),
(38, 'tom99', 'tom999', 'Dealer', 'ACCEPTED'),
(39, 'alex99', 'alex999', 'delivery', 'BLOCKED');

-- --------------------------------------------------------

--
-- Table structure for table `order-delivery`
--

CREATE TABLE `order-delivery` (
  `Delivery_id` int(11) NOT NULL,
  `User_order_id` int(11) NOT NULL,
  `Delivery_boy_id` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order-delivery`
--

INSERT INTO `order-delivery` (`Delivery_id`, `User_order_id`, `Delivery_boy_id`, `Status`) VALUES
(1, 8, 28, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `pay_status` varchar(20) NOT NULL,
  `pay_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `cust_id`, `order_id`, `paid_amount`, `pay_status`, `pay_date`) VALUES
(1, 7, 23, 4794, 'paid', '2022-07-06 16:03:31'),
(2, 7, 24, 5593, 'paid', '2022-07-06 18:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `place_order`
--

CREATE TABLE `place_order` (
  `plo_id` int(11) NOT NULL,
  `User_Order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place_order`
--

INSERT INTO `place_order` (`plo_id`, `User_Order_id`, `book_id`, `book_name`, `quantity`) VALUES
(20, 8, 20, 'HEALING ', 3),
(21, 8, 21, 'MEMORY ', 3),
(33, 16, 15, 'BLACK THUNDER ', 1),
(34, 17, 15, 'BLACK THUNDER ', 5),
(35, 18, 15, 'BLACK THUNDER ', 5),
(36, 18, 19, 'DECEPTION ', 4),
(37, 21, 15, 'BLACK THUNDER ', 3),
(38, 21, 19, 'DECEPTION ', 4),
(39, 22, 10, 'SIN EATER ', 1),
(40, 23, 15, 'BLACK THUNDER ', 5),
(41, 23, 19, 'DECEPTION ', 1),
(42, 24, 15, 'BLACK THUNDER ', 3),
(43, 24, 19, 'DECEPTION ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `reg_id` int(11) NOT NULL,
  `Login_id` int(11) NOT NULL,
  `Fullname` varchar(20) NOT NULL,
  `Mobile_no` varchar(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `D.O.B` date NOT NULL,
  `Aadhaar_no` varchar(12) NOT NULL,
  `Aadhaar_Upload` varchar(50) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`reg_id`, `Login_id`, `Fullname`, `Mobile_no`, `Email`, `Address`, `D.O.B`, `Aadhaar_no`, `Aadhaar_Upload`, `type`) VALUES
(4, 7, 'AmalVijayan', '7902429601', 'ursownamal@gmail.com', 'Idukki', '1999-09-14', '123655988789', 'WIN_20220227_12_27_5', 0),
(12, 15, 'Akshaymurali', '9983516825', 'akshay@gmail.com', 'Delhi', '2022-05-28', '132356565555', 'IMG_20220407_142305.jpg', 0),
(14, 17, 'Ashishwilson', '7878484844', 'ils@gmail.com', 'Kannur', '2000-06-08', '555555555555', 'nora barett.jpg', 0),
(15, 18, 'Rockybhai', '9895623212', 'eldorado@gmail.com', 'Karnataka', '2022-05-04', '548488888888', 'code.jpg', 0),
(16, 20, 'Alexthomas', '8547242592', 'alexu@gmail.com', 'Changanaserry', '1999-08-02', '999999999898', 'code.jpg', 0),
(17, 21, 'Muskandua', '9998221256', 'akshaymukund1999@gmail.com', 'Uttarpradesh', '2009-12-24', '786554444444', 'nora barett.jpg', 0),
(18, 22, 'Davidbeckham', '8966666666', 'dav@gmail.com', 'London wellington street', '2007-01-18', '888888999999', 'jom.jpg', 0),
(19, 23, 'Abishavinod', '8989898989', 'abisha@gmail.com', 'Puthupally house', '1999-04-19', '156149848918', 'WhatsApp Image 2022-02-25 at 0', 0),
(20, 30, 'Anilectjose', '9658754123', 'anilect12@gmail.com', 'Wayanad house', '0000-00-00', '987989594994', 'DELIVERY.jpg', 0),
(24, 35, 'Aman Khatana', '9982455451', 'akshaymukund1999@gmail.com', 'Delhi', '0000-00-00', '651511111111', 'IMG_20220407_142305.jpg', 0),
(25, 37, '', '', '', '', '0000-00-00', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `Book_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_id`, `Book_id`, `stock`, `dealer_id`) VALUES
(5, 15, 16, 4),
(6, 19, 1, 7),
(7, 18, 20, 4),
(8, 11, 38, 4),
(9, 4, 13, 7),
(10, 20, 14, 4),
(11, 12, 23, 7),
(12, 21, 21, 4),
(13, 17, 17, 7),
(14, 16, 15, 4),
(15, 10, 18, 7),
(16, 14, 14, 4),
(17, 6, 14, 7),
(18, 7, 15, 4),
(19, 9, 12, 7),
(20, 13, 17, 4),
(21, 27, 22, 7),
(24, 3, 71, 4),
(37, 31, 29, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Login_id` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Rating` int(11) NOT NULL,
  `D.O.B` varchar(20) NOT NULL,
  `Aadhaar_no` int(11) NOT NULL,
  `Aadhaar_upload` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Name`, `Mobile`, `Email`, `Login_id`, `Address`, `Rating`, `D.O.B`, `Aadhaar_no`, `Aadhaar_upload`) VALUES
(4, 'AmalVijayan', '7902429602', 'yourownamal@gmail.com', 7, 'VandanMed', 0, '1999-09-14', 2147483647, 'WIN_20220227_12_27_57_Pro.jpg'),
(12, 'Akshaymurali', '9983516825', 'akshay@gmail.com', 15, 'Delhi', 0, '2022-05-28', 2147483647, 'IMG_20220407_142305.jpg'),
(14, 'Ashishwilson', '7878484844', 'ashishwhere@gmail.com', 17, 'Kannur', 0, '2000-06-08', 2147483647, 'nora barett.jpg'),
(15, 'Rockybhai', '9895623212', 'eldorado@gmail.com', 18, 'Karnataka', 0, '2022-05-04', 2147483647, 'code.jpg'),
(16, 'Alexthomas', '8547242592', 'alexu@gmail.com', 20, 'Changanaserry', 0, '1999-08-02', 2147483647, 'code.jpg'),
(17, 'Muskandua', '9998221256', 'muskan33@gmail.com', 21, 'Uttarpradesh', 0, '2009-12-24', 2147483647, 'nora barett.jpg'),
(18, 'Davidbeckham', '8966666666', 'dav@gmail.com', 22, 'London wellington street', 0, '2007-01-18', 2147483647, 'jom.jpg'),
(19, 'Abishavinod', '8989898989', 'abisha@gmail.com', 23, 'Puthupally house', 0, '1999-04-19', 2147483647, 'WhatsApp Image 2022-02-25 at 00.15.10.jpeg'),
(20, 'Anilectjose', '9658754123', 'anilect12@gmail.com', 30, 'Wayanad house', 0, '0000-00-00', 2147483647, 'DELIVERY.jpg'),
(24, 'Aman Khatana', '9982455451', 'akshaymukund1999@gmail.com', 35, 'Delhi', 0, '08/12/1999', 2147483647, 'IMG_20220407_142305.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user-order`
--

CREATE TABLE `user-order` (
  `User_Order_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_price` float NOT NULL,
  `total_qty` int(11) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `paysts` varchar(20) NOT NULL,
  `Dealer_id` int(11) NOT NULL,
  `deliboy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-order`
--

INSERT INTO `user-order` (`User_Order_id`, `User_id`, `Order_date`, `total_price`, `total_qty`, `Status`, `paysts`, `Dealer_id`, `deliboy_id`) VALUES
(8, 7, '2022-07-06 18:20:17', 2562, 6, 'Delivered', 'PAID', 31, 28),
(21, 17, '2022-07-05 17:37:52', 5593, 7, 'Shipped', 'PAID', 31, 39),
(23, 7, '2022-07-06 15:53:06', 4794, 6, 'Started', 'PAID', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user-req`
--

CREATE TABLE `user-req` (
  `User_req_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Book_id` int(11) NOT NULL,
  `Request_content` varchar(50) NOT NULL,
  `Reply` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(11) NOT NULL,
  `Book_id` int(11) NOT NULL,
  `Login_id` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-order`
--
ALTER TABLE `admin-order`
  ADD PRIMARY KEY (`Admin_Order_id`);

--
-- Indexes for table `admin-reply`
--
ALTER TABLE `admin-reply`
  ADD PRIMARY KEY (`rep_id`);

--
-- Indexes for table `book-type`
--
ALTER TABLE `book-type`
  ADD PRIMARY KEY (`Type_id`);

--
-- Indexes for table `bookrent`
--
ALTER TABLE `bookrent`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `Book_id` (`Book_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `Login_id` (`Login_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`Dealer_id`);

--
-- Indexes for table `deliveryboy`
--
ALTER TABLE `deliveryboy`
  ADD PRIMARY KEY (`Delivery_boy_id`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`Distributor_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Login_id`);

--
-- Indexes for table `order-delivery`
--
ALTER TABLE `order-delivery`
  ADD PRIMARY KEY (`Delivery_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `place_order`
--
ALTER TABLE `place_order`
  ADD PRIMARY KEY (`plo_id`),
  ADD KEY `User_Order_id` (`User_Order_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `Book_id` (`Book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `user-order`
--
ALTER TABLE `user-order`
  ADD PRIMARY KEY (`User_Order_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `user-req`
--
ALTER TABLE `user-req`
  ADD PRIMARY KEY (`User_req_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`),
  ADD KEY `Book_id` (`Book_id`),
  ADD KEY `Login_id` (`Login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-order`
--
ALTER TABLE `admin-order`
  MODIFY `Admin_Order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin-reply`
--
ALTER TABLE `admin-reply`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `book-type`
--
ALTER TABLE `book-type`
  MODIFY `Type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `bookrent`
--
ALTER TABLE `bookrent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `Dealer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `deliveryboy`
--
ALTER TABLE `deliveryboy`
  MODIFY `Delivery_boy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `Distributor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `order-delivery`
--
ALTER TABLE `order-delivery`
  MODIFY `Delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `place_order`
--
ALTER TABLE `place_order`
  MODIFY `plo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user-order`
--
ALTER TABLE `user-order`
  MODIFY `User_Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user-req`
--
ALTER TABLE `user-req`
  MODIFY `User_req_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookrent`
--
ALTER TABLE `bookrent`
  ADD CONSTRAINT `bookrent_ibfk_1` FOREIGN KEY (`Book_id`) REFERENCES `books` (`Book_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Login_id`) REFERENCES `login` (`Login_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `login` (`Login_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `user-order` (`User_Order_id`);

--
-- Constraints for table `place_order`
--
ALTER TABLE `place_order`
  ADD CONSTRAINT `place_order_ibfk_1` FOREIGN KEY (`User_Order_id`) REFERENCES `user-order` (`User_Order_id`);

--
-- Constraints for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD CONSTRAINT `tbl_stock_ibfk_1` FOREIGN KEY (`Book_id`) REFERENCES `books` (`Book_id`);

--
-- Constraints for table `user-order`
--
ALTER TABLE `user-order`
  ADD CONSTRAINT `user-order_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `login` (`Login_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`Book_id`) REFERENCES `books` (`Book_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`Login_id`) REFERENCES `login` (`Login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

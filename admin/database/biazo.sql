-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 08:35 AM
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
-- Database: `biazo`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `users_id` varchar(255) NOT NULL,
  `content` varchar(500) NOT NULL,
  `is_read` int(11) NOT NULL,
  `is_reply` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `is_from` int(11) NOT NULL,
  `is_like` int(11) NOT NULL,
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`) VALUES
(1, 'gucci man'),
(3, 'Men Shoe'),
(4, 'Female Blouse');

-- --------------------------------------------------------

--
-- Table structure for table `cashout`
--

CREATE TABLE `cashout` (
  `id` int(11) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `exp_amount` varchar(255) NOT NULL,
  `exp_description` varchar(255) NOT NULL,
  `is_debit` int(11) NOT NULL,
  `is_credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashout`
--

INSERT INTO `cashout` (`id`, `exp_date`, `exp_amount`, `exp_description`, `is_debit`, `is_credit`) VALUES
(1, '2022-10-26', '8000', 'Tax', 0, 1),
(2, '2022-10-01', '100000', 'Rent Payments', 0, 1),
(3, '2022-10-05', '5000', 'Management Use', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`) VALUES
(4, 'Female Blouse'),
(5, 'shoes'),
(7, 'Babys Dress'),
(8, 'Female Blouse'),
(12, 'Men Shoe'),
(13, 'lulus');

-- --------------------------------------------------------

--
-- Table structure for table `creditors`
--

CREATE TABLE `creditors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `prd_name` varchar(255) NOT NULL,
  `image` mediumblob NOT NULL,
  `date_taken` varchar(255) NOT NULL,
  `Cost` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creditors`
--

INSERT INTO `creditors` (`id`, `name`, `address`, `phone`, `prd_name`, `image`, `date_taken`, `Cost`, `paid`, `balance`, `description`, `others`) VALUES
(13, 'Ayuk Hastings Ayuk', 'SW Region, Ombe', '653766939', 'Sandals', 0x306263363264356233353332613466323265623564616666346235336366643237353533613733632d4d792057656420496e7669746174696f6e20736f66742e6a7067, 'Tuesday 25 Oct 2022', '550', '550', '0', 'dsddf', ''),
(16, 'Sama Yanick', 'Douala', '653766939', 'Blazer Jacket', 0x653935646239646662303762336166613337313335353662326439366231643666393133303666622d39342d3934303434355f677265656e2d7469636b2d636c69706172742d68642d706e672d646f776e6c6f61642e706e67, 'Tuesday 25 Oct 2022', '80000', '61100', '18900', 'Very nice, used for wedding photoshots', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_dob` varchar(255) NOT NULL,
  `c_country` varchar(255) NOT NULL,
  `c_gender` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_telephone` varchar(255) NOT NULL,
  `c_occupation` varchar(255) NOT NULL,
  `c_picture` mediumblob NOT NULL,
  `is_debtor` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_img` mediumblob NOT NULL,
  `date_taken` date NOT NULL,
  `amount_paid` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `others` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `c_name`, `c_dob`, `c_country`, `c_gender`, `c_address`, `c_telephone`, `c_occupation`, `c_picture`, `is_debtor`, `item_name`, `item_img`, `date_taken`, `amount_paid`, `balance`, `others`) VALUES
(10, 'Sama Yanick Ndasi', '2022-10-14', 'Barbados', 'Male', 'Mile 4', '653766939', 'Business', '', '0', '', '', '0000-00-00', '', '', ''),
(12, 'Ayuk Hastings Sama', '2022-11-04', 'Cameroon', 'Male', 'ddd', '653766939', 'Pastor', '', '0', '', '', '0000-00-00', '', '', ''),
(13, 'Ndip Jervis', '', 'Cameroon', 'Male', 'Limbe\r\nMile 2', '671824509', 'Business', '', '0', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `debtors`
--

CREATE TABLE `debtors` (
  `id` int(11) NOT NULL,
  `debtor_id` varchar(255) NOT NULL,
  `credit_sales_transactionid` varchar(255) NOT NULL,
  `installment` varchar(255) NOT NULL,
  `fist_instalment_date` varchar(255) NOT NULL,
  `last_instalment_date` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debtors`
--

INSERT INTO `debtors` (`id`, `debtor_id`, `credit_sales_transactionid`, `installment`, `fist_instalment_date`, `last_instalment_date`, `balance`) VALUES
(5, '10', 'CR392014', '40150', '2022-10-17', '2022-10-29', '0'),
(6, '12', 'CR475979', '2550000', '2022-10-17', '2022-09-17', '0'),
(7, '13', 'CR248370', '3065000', '2022-10-17', '2022-10-27', '0'),
(8, '10', 'CR509709', '40050', '2022-10-17', '2022-10-16', '0'),
(9, '10', 'CR143914', '65050', '2022-10-18', '2022-10-19', '0'),
(10, '13', 'CR543774', '3095351', '2022-10-18', '2022-10-20', '0'),
(11, '13', 'CR205608', '875', '2022-10-19', '2022-10-20', '0'),
(12, '10', 'CR581056', '18500', '2022-10-19', '2022-10-21', '0'),
(13, '10', 'CR581056', '18500', '2022-10-19', '2022-10-21', '0'),
(14, '10', 'CR581056', '18500', '2022-10-19', '2022-10-21', '0'),
(15, '10', 'CR581056', '18500', '2022-10-19', '2022-10-21', '0'),
(16, '12', 'CR450767', '18000', '2022-10-19', '2022-10-30', '0'),
(17, '12', 'CR450767', '18000', '2022-10-19', '2022-10-30', '0'),
(18, '12', 'CR450767', '18000', '2022-10-19', '2022-10-30', '0'),
(19, '12', 'CR450767', '18000', '2022-10-19', '2022-10-30', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petit_cash`
--

CREATE TABLE `petit_cash` (
  `id` int(11) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `exp_amount` varchar(255) NOT NULL,
  `exp_description` varchar(400) NOT NULL,
  `is_debit` varchar(10) NOT NULL,
  `is_credit` varchar(10) NOT NULL,
  `balance` varchar(400) NOT NULL,
  `others` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petit_cash`
--

INSERT INTO `petit_cash` (`id`, `exp_date`, `exp_amount`, `exp_description`, `is_debit`, `is_credit`, `balance`, `others`) VALUES
(2, '2022-10-15', '300', 'Used to buy Rappens', '0', '1', '', ''),
(3, '2022-10-15', '20000', 'Used for bill payment', '0', '1', '', ''),
(4, '2022-10-15', '80000', 'Cash Deposit from main cashier', '1', '0', '', ''),
(5, '2022-10-15', '7900', 'testing balance', '0', '1', '', ''),
(6, '2022-10-15', '1800', 'hmmm', '0', '1', '', ''),
(7, '2022-10-15', '45000', 'balance should be 5000', '0', '1', '', ''),
(8, '2022-10-15', '5000', 'wwrwer', '0', '1', '', ''),
(9, '2022-10-15', '10000', 'eeeerv', '0', '1', '', ''),
(10, '2022-10-15', '12500', 'asdasdasdf', '1', '0', '', ''),
(11, '', '500', 'testing', '0', '1', '', ''),
(12, '2022-10-25', '500', 'dasfdasfd', '0', '1', '', ''),
(13, '2022-10-21', '250', 'ssdffdfdsfvdf', '0', '1', '', ''),
(14, '2022-10-25', '200', 'Petit Cash', '1', '0', '', ''),
(15, '2022-10-26', '15', 'Petit Cash', '1', '0', '', ''),
(16, '2022-10-26', '8', 'Petit Cash', '1', '0', '', ''),
(17, '2022-10-31', '100000', 'Petit Cash Deposit', '1', '0', '', ''),
(18, '2022-10-29', '80000', 'for chewing gums', '0', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand_id` varchar(255) NOT NULL,
  `date_create` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `purchase_price` varchar(255) NOT NULL,
  `sales_price` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `prd_description` varchar(255) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `sub_imge` mediumblob NOT NULL,
  `main_image` mediumblob NOT NULL,
  `is_cart` varchar(255) NOT NULL,
  `is_sold` varchar(255) NOT NULL,
  `is_credit` varchar(255) NOT NULL,
  `is_complete` int(11) NOT NULL,
  `sold_amount` varchar(255) NOT NULL,
  `profit` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `cash_transaction_id` varchar(255) NOT NULL,
  `cash_sales_date` varchar(255) NOT NULL,
  `debtor_id` varchar(255) NOT NULL,
  `credit_sales_transactionid` varchar(255) NOT NULL,
  `fist_instalment_date` varchar(255) NOT NULL,
  `last_instalment_date` varchar(255) NOT NULL,
  `stock_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `brand_id`, `date_create`, `created_by`, `size`, `purchase_price`, `sales_price`, `supplier`, `sku`, `prd_description`, `exp_date`, `sub_imge`, `main_image`, `is_cart`, `is_sold`, `is_credit`, `is_complete`, `sold_amount`, `profit`, `customer_phone`, `cash_transaction_id`, `cash_sales_date`, `debtor_id`, `credit_sales_transactionid`, `fist_instalment_date`, `last_instalment_date`, `stock_count`) VALUES
(3, 'Sama Yanick likes dresing good', 'Babys Dress', 'Baby\'s Dress', '2022-10-03', 'Sama Yanick Ndasi', 'XXL', '100', '4000', 'Afor Nanova', '1670208749', 'ssvsdvs', '2022-10-03', 0x343831363936613035343939373039376531653863333630306465316334386434653335646533632d43464b58393931372e4a5047, 0x333436373863333733386663643535323865393632306663623865653666613738346136316164632d43464b58393931372e4a5047, '0', '1', '0', 0, '5000', '4900', '653766939', 'DR293164', '2022-10-18', '10', 'CR392014', '', '2022-10-29', 0),
(7, 'Pinl Exotic ladies blouse for ladies who are under 30years', 'Female Blouse', 'Men Shoe', '2022-10-03', 'Sama Yanick Ndasi', 'XXL', '12500', '25000', 'Sama Yanick', '1738399483', 'this dress is very good with top quality', '2022-10-03', 0x383837653731303965383261656563623730636131376261663035386638646532663536623161362d41646f626553746f636b5f3236303033363936342d7363616c65642e6a706567, 0x386630613262326433343235623866656131333531393932393231326434323062656235303262352d41646f626553746f636b5f3236303033363936342d7363616c65642e6a706567, '0', '1', '1', 0, '25000', '12500', '', '0', '', '10', 'CR143914', '2022-10-18', '2022-10-19', 0),
(8, 'GG double-breasted wool blazer', 'Men Shoe', 'Female Blouse', '2022-10-11', 'Sama Yanick Ndasi', 'L', '2000000', '2500000', 'Sama Yanick', '1914962241', 'Gucci devotees will adore the signature GG pattern that lends this blazer its statement finish. Sharply tailored from wool, this double-breasted design features notched lapels and flap pockets.', '2022-10-11', 0x373864396130336563323337323461366664646166646636623135333962313665386537613465622d323032322d31302d31312030305f31395f32372d57696e646f772e706e67, 0x363862613838666661373838633531303336376562313533366137346438373265373230303937632d323032322d31302d31312030305f31395f32372d57696e646f772e706e67, '0', '1', '0', 0, '2500000', '500000', '653766939', 'DR75465', 'Tuesday 25 Oct 2022', '12', 'CR475979', '2022-10-17', '2022-11-12', 0),
(9, 'Gucci Blondie canvas shoulder bag', 'Female Blouse', 'Female Blouse', '2022-10-11', 'Sama Yanick Ndasi', '44', '200000', '350000', 'Omotola Jalade', '629126608', 'The Gucci Blondie shoulder bag is the kind of companion you won\'t want to leave the house without. It\'s made from brand-signature canvas with a Web stripe strap and a tonal leather strap. Note the gleaming GG logo insignia.', '2022-10-11', 0x373763323130366235616438366438383763656133396261653038626235326232313333356634642d5030303637353538335f62312e6a7067, 0x393831313039393834373363383631356134376238656366653730343337326434386565313731612d5030303637353538335f62312e6a7067, '0', '0', '0', 0, '3000000', '2800000', '', '0', '2022-10-13', '13', 'CR248370', '', '2022-10-27', 0),
(10, 'Ndole Clothes', 'shoes', 'gucci man', '2022-10-17', 'Sama Yanick Ndasi', 'XXL', '25', '100', 'Sama Yanick', '2141474008', 'Good dress', '2022-10-17', 0x376439373338643338316439383834623964326263333063346463373436613232353433633430622d332e6a7067, 0x333833343934393531316163643532303764306162346363303631356232363333656532336563652d332e6a7067, '0', '1', '1', 0, '875', '850', '653766939', 'DR758199', '', '13', 'CR205608', '2022-10-19', '2022-10-20', 0),
(11, 'Glampy Bone Square Toe Knee High Boots', 'shoes', 'Men Shoe', '2022-10-17', 'Sama Yanick Ndasi', '39', '12000', '18000', 'Omotola Jalade', '473462352', '', '2022-10-17', 0x333833343934393531316163643532303764306162346363303631356232363333656532336563652d3330353936323133395f353837343439343932393331303635315f363231393031383832363731383631343230305f6e2e6a7067, 0x386338306235663536343162363663336532636439656665313235303739623336613763656366652d3330353936323133395f353837343439343932393331303635315f363231393031383832363731383631343230305f6e2e6a7067, '0', '1', '1', 0, '18000', '6000', '', '', '', '12', 'CR450767', '2022-10-19', '2022-10-30', 0),
(12, 'Living On the Edge Taupe Moto Jacket', 'lulus', 'gucci man', '2022-10-17', 'Sama Yanick Ndasi', '39', '50000', '65000', 'Afor Nanova', '305724735', '', '2022-10-17', 0x333833343934393531316163643532303764306162346363303631356232363333656532336563652d3330353936323133395f353837343439343932393331303635315f363231393031383832363731383631343230305f6e2e6a7067, 0x396336643564633165653764613432623933653666366264383864336431306237613763343038332d3330353936323133395f353837343439343932393331303635315f363231393031383832363731383631343230305f6e2e6a7067, '0', '0', '0', 0, '65000', '15000', '', '', '', '13', 'CR248370', '2022-10-17', '2022-10-27', 0),
(13, 'Fearless Energy Drink', 'shoes', 'gucci man', '2022-11-17', 'Sama Yanick Ndasi', 'XXL', '20000', '25500', 'Sama Yanick', '1783031784', 'Awesome dress', '2022-11-17', 0x613832616335386166353934316561636466613362643264623933306266373530386565626432652d696d6167652e6a7067, 0x613038623163613739643730386230646135356136623865393266313531343839633565386338372d696d6167652e6a7067, '0', '0', '', 0, '25500', '5500', '', '', '', '', '', '', '', 0),
(14, 'Main fearless Energy Drink', 'Men Shoe', 'Female Blouse', '2022-11-17', 'Sama Yanick Ndasi', 'Small', '300', '500', 'Omotola Jalade', '458439694', 'Energy drink ', '2022-11-17', 0x313537356463633739666665393939646266386565313231323832663637353066656134643637302d696d6167652e6a7067, 0x353731636532323234636265646231393564306335663233333064623936616530343835376664382d696d6167652e6a7067, '0', '0', '', 0, '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `trans_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `users_id`, `amount`, `date`, `type`, `trans_id`) VALUES
(1, 13, '150', '2022-10-18', 'Repay', 'CR543774'),
(2, 10, '150', '2022-10-18', 'Repay', 'CR392014'),
(3, 13, '14850', '2022-10-18', 'Repay', 'CR543774'),
(4, 653766939, '', '2022-10-19', 'Cash Sales', ''),
(5, 653766939, '725', '2022-10-19', 'Cash Sales', 'DR758199'),
(6, 13, '75', '2022-10-19', 'Credit Sales', 'CR205608'),
(7, 10, '500', '2022-10-19', 'Credit Sales', 'CR581056'),
(8, 12, '17000', '2022-10-19', 'Credit Sales', 'CR450767'),
(9, 13, '800', '2022-10-19', 'Repay', 'CR205608'),
(10, 10, '18000', '2022-10-19', 'Repay', 'CR581056'),
(11, 12, '500', '2022-10-19', 'Repay', 'CR450767'),
(12, 12, '475', '2022-10-19', 'Repay', 'CR450767'),
(13, 12, '5', '2022-10-19', 'Repay', 'CR450767'),
(14, 12, '20', '2022-10-19', 'Repay', 'CR450767'),
(15, 653766939, '2500000', 'Tuesday 25 Oct 2022', 'Cash Sales', 'DR75465');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `id_no` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `code` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` mediumblob NOT NULL,
  `employee_id` mediumblob NOT NULL,
  `employee_application` varchar(255) NOT NULL,
  `surety_name` varchar(255) NOT NULL,
  `surety_occupation` varchar(255) NOT NULL,
  `surety_phone` varchar(50) NOT NULL,
  `surety_id` varchar(255) NOT NULL,
  `surety_relationship` varchar(50) NOT NULL,
  `surety_address` varchar(50) NOT NULL,
  `surety_agreement` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `isUser` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `member_name`, `position`, `dob`, `country`, `gender`, `address`, `hobbies`, `id_no`, `start_date`, `code`, `phone`, `image`, `employee_id`, `employee_application`, `surety_name`, `surety_occupation`, `surety_phone`, `surety_id`, `surety_relationship`, `surety_address`, `surety_agreement`, `username`, `password`, `other`, `isUser`) VALUES
(37, 'Sama Y', 'Sales Person', '2000-01-01', 'Cameroon', 'Male', 'SW Region, OmbeOmbe', 'Praying, Singing, youtube, sleeping', '112219914', '2022-10-03', '#U7928', '653766939', 0x663764373637313866373265613237323331346437383930366238363838366665393835656539622d494d475f323734382e4a5047, '', '', 'Ayuk Hastings Ayuk', 'Pastor', '653766939', '1145000000', 'Spiritual Father', 'SW Region, Ombe', '', 'admin', 'dcddb75469b4b4875094e14561e573d8', '', 1),
(39, 'Sama Yanick Ndasi', 'Sales Person', '1990-09-02', 'Cameroon', 'Male', 'SW Region, OmbeOmbe', 'singing, dancing, shouting, spitting', '5252745', '2022-11-17', '#U7934', '653766939', 0x643065383333363132306338343262393935393966346231356137653334353266646266663163362d494d475f323732342e4a5047, '', '', 'Ayuk Hastings Ayuk', 'Pastor', '653766939', '1145000000000000000000', 'Spiritual Father', 'SW Region, Ombe', '', 'sama0074', '4a7d1ed414474e4033ac29ccb8653d9b', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashout`
--
ALTER TABLE `cashout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creditors`
--
ALTER TABLE `creditors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debtors`
--
ALTER TABLE `debtors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petit_cash`
--
ALTER TABLE `petit_cash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cashout`
--
ALTER TABLE `cashout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `creditors`
--
ALTER TABLE `creditors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `debtors`
--
ALTER TABLE `debtors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `petit_cash`
--
ALTER TABLE `petit_cash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

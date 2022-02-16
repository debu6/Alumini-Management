-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 04:28 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_nexus`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `create_account` (
  `slno` int(255) NOT NULL,
  `registration_num` bigint(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`slno`, `registration_num`, `password`) VALUES
(29, 0, '$2y$10$oxxWivgpvwTTZsgdrctz3eNtfE2FbD0VnwKXRDDqes.9EuTeGgwcm'),
(38, 12, '$2y$10$Fdmj4h4x3D2pF6pPN6C21ebSZe2AWxsuD6pqSZXOfcYDBVPrj0Bia'),
(39, 45, '$2y$10$Pfz01KfqMms8LVY1URHI3ux3BEswaJZRqLCBTbkWEpy5BA9JPqBDS'),
(40, 123, '$2y$10$isRyug6HNf9Ikb6ws7r6AO38KMu4NxTdtKGO4twscxMyPiIJ/WIS6'),
(35, 2081, '$2y$10$3VdhRit7JZQZ7gX66lVlh.VOjwJrweQXDpuaRNr4u0.nZfwczHDvW'),
(42, 7780, '$2y$10$BoVF0dTcWfNrA2msAB6ziui3seIJUhv/cM389b8rvGxW0jF8xH7Ye'),
(41, 7890, '$2y$10$APrPy8zqn.HeYHhSbZRZHu7uxHC0.Y/jsU0IWzBq/vtRvSnXQ2QOC'),
(37, 8585, '$2y$10$pnOy2dvBqz.UC9oyp6O1oO9kt.Mpl4F2lZenyaaaGBF1NdMwePsiW'),
(56, 111000, '$2y$10$JDfBmaQVbwuiHktZf5Y8OeoqW1Z5.3o5Trf.yR9dCghofwXt6r7vW'),
(54, 121233, '$2y$10$V2g1d4Rosc528eeIWCXCu.fsLOfyD5iZ3T3QUiejhNfdTu5FUWT6O'),
(6, 123456, '$2y$10$DQ.Yp6Mbs0qZHmToYi2Cs.tXPv0qbmwffC0.2zHdKqrBoVM3B8kHq'),
(57, 784784, '$2y$10$8q2l7wlQ.p6P.eJSUpA/nOpwbiixi5iYWITgRqaqZCqN2LCrlxPs6'),
(58, 789789, '$2y$10$Yz1C1w1.8trzLA8dlksFq.EyeKq5gZmjL.woWn9fjyc6oGF46d3Ye'),
(16, 1222222, '$2y$10$pTsCApmvpF1mNPHDyZG1VuiydUBm2PXZ.Amvob2NIJ./BMLqBZKtC'),
(53, 1223444, '$2y$10$KhL3lpuUi4/b9B4XMcbJTeKcN6UGnpjrIBvBlPT5ce3XzJdM.woyq'),
(49, 1234567, '$2y$10$D0g8MaeONzQmArhpDagDDODXKdmEIAyh2mB1JjkK2fKHkU5sZMP1m'),
(52, 11111234, '$2y$10$jl889s94LqBtcKPGj5k90.YTuEy61.OKiTzvLaAEcYBt0fnvuukXm'),
(44, 75867586, '$2y$10$hodx2bYxVaikJBfOWKYTFOvS5FWn6O4cqS.hB7MauhVnjaY7NYlUO'),
(45, 111111890, '$2y$10$IiQkDl3d5Z3zfygkCtc6i.sTosHS1I9GCcQPQTm.AnLOjEFwpYKfu'),
(43, 123437890, '$2y$10$TJUnObsZt9Nk3lVG7fJPZeZq8IzCcED7mNdbw0a8eqQLE3QiV910.'),
(51, 123451234, '$2y$10$qEh1HpGEaNnnC.ahNmG68.GQ6cMK4Mpno.sZtFkbmCn.lUdvHE49q'),
(17, 987654321, '$2y$10$lMxaSitwhLe5wCUdYlmmV.8AJRkMp1YwLaJV3wVYKzp/4msT6xSxu'),
(12, 1233456789, '$2y$10$K0nkQzvkTGw5rqKoWwFAneTv4s1C.G2Wme5muVBXgFT7AYhXNpyX6'),
(11, 1234567899, '$2y$10$/rYeBewvpCDAkCgdavkTb.UZd3Pyp0KlPbuQTL8MzdNrtvabcYJYC'),
(18, 9876543211, '$2y$10$iZ2AKUfG3MBlGLJiTexWcebnGzCJ9YNA.iLSJfnn.X5Z/Zvbb8JJy'),
(22, 9876543212, '$2y$10$HxxhNki62sAcet01aCPiXeWouFW7w25Vdtg67.8A6XuEeuGzdalt6'),
(24, 12345678900, '$2y$10$dA5bH9CJc7EoV4Xm7rnsFeusKI5QDP3h0DtyRam8gy2tpgIyb/FIa'),
(10, 12345678901, '$2y$10$tOI5i9AFkN9G8RBH04uEkeOGDRw7yh8U6xUoi6hH7OJMEoUY6JKCu'),
(20, 12345678909, '$2y$10$FQmyMYi1UW2o/Btbijqhtubvyx9537fRzC0PaBeRan.u2oJWNIsXO'),
(15, 12345678910, '$2y$10$otNUa7rzNizMvxhQdYvxe.oIrqXFiwGNTD.uuDXr0fYGWyMvlBKne'),
(13, 12345678999, '$2y$10$yVJf17ma2Jjer0Z1pwNCbeiMLfnm.AUCqH2dorLjYNSz3PjHZBdxW'),
(19, 98765432111, '$2y$10$rWPpFEBYUtNqyyxSK6jZ1ebk7j3xl.DJvOvqiDf6R512lC689NYxe'),
(47, 111111967867, '$2y$10$azRLQxupdR3d/YiDjdvV5.H41QvHBM2e4UrlqJq3EE9ugD5Oz7TFO'),
(27, 123456789000, '$2y$10$S0GhIWpZGcTSoWcHuuX5tOb2Gzy1uqyJY0FpLswARyJ.2uNDO4656'),
(21, 123456789090, '$2y$10$HweqHOZjkgMGb0f7sM7DIuXnuBvDEnGZ.zG5rQDPD6YTxiRVpMJQe'),
(14, 123456789990, '$2y$10$EsA9rf/cPMJSG9yOGEb.Me4zQmn92h5NXl1r/By.E31THlBCo9a8O'),
(26, 1234567899990, '$2y$10$UMA05zhDvca9KGTJ/7XrcuAAKEwSsGo4OtAaaI2O3x48w1ORkwLSG'),
(28, 2080907030008, '$2y$10$HvNx2SK.w9ZVHEIQUBnTUOTIhKW3jpwKDX4NNz7aogBfTeOn4eJZm'),
(30, 2080907031118, '$2y$10$7KfFV.VamLIHsrIjDYqcxOYURZEl2iZV13ejkL8cMc1bcjgiEutiq'),
(31, 2080907031238, '$2y$10$akkp33WLhlegTleCRic8Au4DE.YLlNZRPlyMfI/TF9Of6NsCHaeXi'),
(33, 2080907032228, '$2y$10$EwoQgMbEVoA3DqERx1xRluLigh7R1n8fNm3MNHTiyqgdPNOtbK8uy'),
(34, 2080907033338, '$2y$10$5YTMv.hjKjaS8JykCh8jMuoC.DCGukIClALRLPu0Aa.TCvP4YrB/.'),
(36, 2080907034448, '$2y$10$nS8GGj4aI/UZot/yqHPIR.PFxPVL6jAf9ZFsbzvfZHhdVOOMiIuJm'),
(32, 2081907031118, '$2y$10$y2532uNlyuQDVN5ehOQ6guXLcpmPNoG.yHrZgBJ1RNOGXRGQgsRj6'),
(1, 10000001012890, '$2y$10$RcWehIEXHVHpFqtuX0wdS.uZNUmlubh/uHeE6vXMPPisCodUPUqMe'),
(3, 10000001012891, '$2y$10$Xwmi.NHcWayu8ZY2FGYu1eQjk/1/fMLJhBSahglZgtXt/.sn/fYbK'),
(4, 10000001012892, '$2y$10$6s3hjv5Gu1me0FsxdrkwJOzWvCMR8q/KOaaS0kvECnYcvATRqQpRa'),
(5, 10000001012893, '$2y$10$9.4QJDkwEaSIQc4JNsZPxe9SyPdzkUxnw50bY8bI6KBF1KcP3VDlK'),
(2, 10000001012899, '$2y$10$dJwpiLh3yednAFHzhgb7L.k0yslJUl6mbY.a0kCT2NkekdDPqezki'),
(7, 10000001012900, '$2y$10$.BvVOL.Ypx8xYRJR.dIOnu4S0kaosY8bCwYQawVXFIUTvjsbSBDGW'),
(8, 10000001012901, '$2y$10$QewvgFBdZA7vcsGRCpt5UeAjPu7AgvUNredKF.b/KPmbKAAL1ZapC'),
(9, 10000001012905, '$2y$10$1ldTpQGbD/xFOHYBWtFf5.oveqZgB3odrdsUCumzlXL.nlOpUX/jq'),
(25, 10000001012911, '$2y$10$O2VJRVNXppKmu12H4ozehuyloBOMjDfoBl8PjH86NXpDbEkxhwVdG'),
(55, 12345678901112, '$2y$10$abPSJMdrB1PzlmRk2raKNOjTvN/NIHZwUEM6neIQmV5JmjyDHE43G'),
(46, 12534549999999, '$2y$10$42oXQ98dxRFQzfB9LpXkQOa5lEAQuZMLhCVWFBDMNB5VUv7iqOsWq');

-- --------------------------------------------------------

--
-- Table structure for table `create_admin_account`
--

CREATE TABLE `create_admin_account` (
  `id_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `designation` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_admin_account`
--

INSERT INTO `create_admin_account` (`id_num`, `email`, `designation`, `password`, `cpassword`) VALUES
('11111', 'kamtipriya30797@gmail.com', 'Priya', '$2y$10$d.Oxr3aLpoNKkl870Bo3w.S98F2Pg8iGzCqXPQQXYtMOlZDl91Xa.', ''),
('12', 'a@a.com', 'abcd', '$2y$10$9aOLzN33kssKQB/bqF8RpOJp5O33Pc2QspnMHX32uV4rn3Z9oA5F2', ''),
('123456789010', 'a@agmai.com', 'po', '$2y$10$LnsWP5.w0oSPeNbdH2tu2OYYGMhVfpWgsXUJJP2F.bNd8leU1OUKe', ''),
('20819070300082', 'akashmohanta217@gmail.com', 'Professor', '$2y$10$6VqptxOr.X.5qXKycNkhM.wWKltSxKjY9pdAM1BSlxkV91mvyPsiW', ''),
('2081907031118', 'abc@gmail.com', 'abcd', '$2y$10$CNBbn/24jKTII3AYRUURxuOngSY7JaGbJzv4Zna.V81murkUZ0KaK', ''),
('2081907031128', 'abc@gmail.com', 'abcd', '$2y$10$7m/x.BuSgYsqK3SRFnNapOSz1v3KiJnU2E04QecGdBJ3gAT.9wQ9K', ''),
('454545', '454545@gmail.com', 'Accountant', '$2y$10$tsVj0FexIBSQcvqR6bo8COtIU8vRHfw.axRw8ZLavmwzU.w5Nx3Pu', ''),
('7890', 'a@a.com', 'po', '$2y$10$.8ROo3hxLy3h9H2JakeABOzvmzZ8J/6eBRpLOQI/SgF0uwPAlOM0O', ''),
('8888', '8888@gmail.com', 'Accountant', '$2y$10$k63RJTG.LZVfKPYifNl84eUDgAXU7gpZdF.v0Ls15KBbnuTq686bq', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `slno` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(12) NOT NULL,
  `religious` varchar(100) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg_no` bigint(255) NOT NULL,
  `passout_year` varchar(20) NOT NULL,
  `qualification` varchar(150) NOT NULL,
  `current_country` varchar(100) NOT NULL,
  `current_state` varchar(100) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `cur_pincode` int(10) NOT NULL,
  `per-country` varchar(100) NOT NULL,
  `per-state` varchar(100) NOT NULL,
  `per-city` varchar(100) NOT NULL,
  `per-pincode` int(10) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL,
  `achiv` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`slno`, `first_name`, `middle_name`, `last_name`, `DOB`, `gender`, `religious`, `caste`, `phone_no`, `email`, `reg_no`, `passout_year`, `qualification`, `current_country`, `current_state`, `current_city`, `cur_pincode`, `per-country`, `per-state`, `per-city`, `per-pincode`, `job_description`, `profession`, `salary`, `achiv`, `image`) VALUES
(46, 's', '', 'D', '2022-01-01', 'male', 'hindu', 'Other', 2147483647, 'we@gmail.com', 111000, '2014', '', 'India', 'West Bengal', 'burma', 789745, 'India', 'West Bengal', 'burma', 789745, 'IT', 'hr', 3, '', 'uploaded_Images/try paint.png'),
(44, 'hjh', 'kjhk', 'kju', '2022-01-13', 'male', 'HIndu', 'SC', 2147483647, 'kam978@gmail.com', 121233, '1111', '', 'India', 'West Bengal', 'Jalpaiguri', 735207, 'India', 'West Bengal', 'Jalpaiguri', 735207, 'ACADEMIC', 'Doctor', 12, '', 'uploaded_Images/IMG_20211230_091606.jpg'),
(47, 's', '', 'd', '2022-01-07', 'male', 'hindu', 'Other', 2147483647, 'erwq@gmail.com', 784784, '2014', 'M.tech', 'India', 'West Bengal', 'up', 745745, 'India', 'West Bengal', 'up', 745745, 'IT', 'hr', 6, '', 'uploaded_Images/try paint.png'),
(43, 'Soni', '', 'Kamti', '2022-01-27', 'female', 'HIndu', 'OBC', 2147483647, 'kamtipriya30797@gmail.com', 1223444, '1111', '', 'India', 'West Bengal', 'Jalpaiguri', 735207, 'India', 'West Bengal', 'Jalpaiguri', 735207, 'IT', 'Doctor', 12, '', 'uploaded_Images/IMG_20211228_234234_LL (2).jpg'),
(42, 'barfi', '', 'lama', '2022-01-21', 'female', 'HIndu', 'OBC', 2147483647, 'kamtipriya30797@gmail.com', 11111234, '2222', '', 'India', 'West Bengal', 'Jalpaiguri', 735207, 'India', 'West Bengal', 'Jalpaiguri', 735207, 'IT', 'Doctor', 12, '', 'uploaded_Images/IMG_20211228_234234_LL (1).jpg'),
(41, 'Sonia', '', 'Sharma', '2022-01-27', 'female', 'HIndu', 'OBC', 2147483647, 'kamtipriya30797@gmail.com', 123451234, '1111', '', 'India', 'West Bengal', 'Jalpaiguri', 735207, 'India', 'West Bengal', 'Jalpaiguri', 735207, 'ACADEMIC', 'Doctor', 12, '', 'uploaded_Images/IMG_20211228_234234_LL (1).jpg'),
(10, 'priya', 'kumari', 'chaw', '2021-12-28', 'female', '', '', 2147483647, '', 3435435454, '1112', '', 'India', 'Karnataka', 'noida', 56566, 'India', 'Karnataka', 'siliguri', 56566, '', 'doctor', 0, '', ''),
(21, 'Koyal', 'Mishra', 'roy', '2021-12-10', 'female', '', '', 2147483647, '', 3473246536, '1112', '', 'India', 'Chhattisgarh', 'siliguri', 89669, 'India', 'Chhattisgarh', 'siliguri', 89669, '', 'analyst', 0, '', 'uploaded_Images/C.jpg'),
(6, 'Sabnam', '', 'Sharma', '2021-11-30', 'female', '', '', 1234567890, '', 3647346544, '1221', '', 'India', 'Goa', 'siliguri', 896697, 'India', 'Goa', 'siliguri', 896697, '', 'doctor', 0, '', 'A.jpeg'),
(3, 'Sabit', 'SHRI', 'roy', '2018-02-25', 'male', '', '', 1234567899, 'Sabit@gmail.com', 9876543211, '1999', 'phd', 'India', 'West Bengal', 'siliguri', 896697, 'India', 'West Bengal', 'siliguri', 896697, '', 'data scientist', 0, 'highhhhhhh', 'IMG_20191206_153739.jpg'),
(30, 'Amna', '', 'khan', '2021-12-16', 'female', '', '', 2147483647, 'Amna@gmail.com', 9876543212, '1112', '', 'India', 'Assam', 'bakura', 535346, 'India', 'Assam', 'bakura', 535346, '', 'senior developer', 0, '', 'uploaded_Images/favicon_io.zip'),
(1, 'Sonia', '', 'Kamntii', '2021-11-03', 'female', '', '', 1234567789, 'SoniaKamti@gmail', 12345678900, '1998', 'mtch', 'India', 'West Bengal', 'siliguri', 896697, 'India', 'West Bengal', 'siliguri', 896697, '', 'Data scientist', 0, '', 'IMG_20191206_153515.jpg'),
(28, 'nisha', '', 'roy', '2021-12-17', 'female', '', '', 2147483647, '', 12345678909, '', '', 'select', '', '', 0, 'select', '', '', 0, '', '', 0, '', 'uploaded_Images/'),
(22, 'Daisy', '', 'Lakra', '2021-12-24', 'female', '', '', 1234353422, '', 54365653654, '1112', '', 'India', 'Haryana', 'siliguri', 89669, 'India', 'Haryana', 'siliguri', 89669, '', 'akash', 0, '', 'uploaded_Images/B.jpeg'),
(23, 'Priya', 'kumar', 'Kamti', '2021-12-16', 'female', '', '', 1234567890, '', 98765432111, '1123', '', 'India', 'Assam', 'siliguri', 896697, 'India', 'Assam', 'siliguri', 896697, '', 'data scientist', 0, '', 'uploaded_Images/nbu.jpg'),
(36, 'akash', 'kr', 'mohanta', '1997-11-20', 'SC', 'hindu', '', 2147483647, '', 123456789000, '2019', 'mtech', 'India', 'West Bengal', 'COOCHBEHAR', 736170, 'India', 'West Bengal', 'COOCHBEHAR', 736170, 'IT', 'doctor', 12000000, 'metch', 'uploaded_Images/akash1.jpg'),
(29, 'Rani', '', 'Sah', '2021-12-14', 'female', '', '', 987654321, '', 123456789090, '1123', '', 'India', 'Bihar', 'siliguri', 89669, 'India', 'Bihar', 'siliguri', 89669, '', 'senior developer', 0, '', 'uploaded_Images/nbu.jpg'),
(35, 'akash', 'kr', 'mohanta', '1989-01-30', 'SC', 'hindu', '', 2147483647, '', 1234567899990, '', '', 'select', 'West Bengal', 'COOCHBEHAR', 736170, 'select', '', '', 0, 'gender', '', 0, '', 'uploaded_Images/'),
(37, 'AKASH', '', 'MOHANTA', '1997-11-20', 'male', '', '', 2147483647, '', 2080907030008, '2022', 'M.TECH', 'India', 'West Bengal', 'COOCHBEHAR', 736170, 'India', 'West Bengal', 'COOCHBEHAR', 736170, '', 'data scientist', 0, 'Petents', 'uploaded_Images/akash1.jpg'),
(13, 'nisha', 'kumar', 'chaw', '2021-12-24', 'female', '', '', 1362462354, '', 4574875647856, '1112', '', 'India', 'Arunachal Pradesh', 'siliguri', 896697, 'India', 'Arunachal Pradesh', 'siliguri', 896697, '', 'doctor', 0, '', 'Array'),
(7, 'reshmi', '', 'sarkar', '1996-02-02', 'female', '', '', 2147483647, '', 10000001012900, '2020', 'phd', 'India', 'West Bengal', 'siliguri', 736101, 'India', 'West Bengal', 'siliguri', 736101, '', 'doctor', 0, 'post doc', 'DSC_0067.JPG'),
(8, 'abhi', 'kumar', 'saha', '1995-02-04', 'male', '', '', 2147483647, '', 10000001012901, '2005', 'mtech', 'India', 'Manipur', 'hellia', 836888, 'India', 'Manipur', 'hellia', 836888, '', 'analyst', 0, 'journels', 'DSC_0382.JPG'),
(9, 'raji', 'kumari', 'roy', '1998-02-18', 'female', '', '', 2147483647, '', 10000001012905, '2000', 'phd', 'India', 'West Bengal', 'bakura', 535346, 'India', 'West Bengal', 'bakura', 535346, '', 'senior developer', 0, 'GSOCC', 'IMG_20191206_153717.jpg'),
(34, 'sourav', 'kumar', 'chaw', '2009-02-18', 'female', '', '', 2147483647, '', 10000001012911, '2011', 'blaahbalah', 'India', 'West Bengal', 'siliguri', 896697, 'India', 'West Bengal', 'siliguri', 896697, '', 'analyst', 0, 'nai', 'uploaded_Images/Screenshot (1).png'),
(45, 'ard', 'kr', 'mondal', '2002-03-01', 'male', 'hindu', 'SC', 2147483647, 'a@gmail.com', 12345678901112, '2020', 'mtech', 'India', 'West Bengal', 'Jalpaiguri', 735207, 'India', 'West Bengal', 'Jalpaiguri', 735207, 'IT', 'Doctor', 12000000, 'phd', 'uploaded_Images/Dipak Prasad.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_account`
--
ALTER TABLE `create_account`
  ADD PRIMARY KEY (`registration_num`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- Indexes for table `create_admin_account`
--
ALTER TABLE `create_admin_account`
  ADD PRIMARY KEY (`id_num`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_no`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_account`
--
ALTER TABLE `create_account`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

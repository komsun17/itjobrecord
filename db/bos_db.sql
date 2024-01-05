-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 11:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_members`
--

CREATE TABLE `tb_members` (
  `m_id` int(11) NOT NULL,
  `emp_id` varchar(25) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_section` varchar(20) NOT NULL,
  `emp_position` varchar(50) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_members`
--

INSERT INTO `tb_members` (`m_id`, `emp_id`, `emp_name`, `emp_email`, `emp_section`, `emp_position`, `remark`) VALUES
(1, '202022324', 'Ajchara Chomphuphuen', 'ajchara@thaisinto.co.th', 'Engineer', 'Control ', ''),
(2, '172011106', 'Akihiko Shibuya', 'shibuya1@thaisinto.co.th', 'Advisor', 'Service Team', ''),
(3, '292021222', 'Amondej Mekprayoon', 'amondej@thaisinto.co.th', 'Assistant Manager', 'Control ', ''),
(4, '202017410', 'Anuwat Sanguansit', 'anuwat@thaisinto.co.th', 'Facility', 'Administration', ''),
(5, '252011304', 'Apichart Srikumpung', 'apichart@thaisinto.co.th', 'Leader', 'Production', ''),
(6, '272023379', 'Ariya Smerchau', 'ariya@thaisinto.co.th', 'Engineer', 'Production', ''),
(7, '272013411', 'Arton Siritham', 'arton@thaisinto.co.trh', 'Foreman', 'Production', ''),
(8, '282016313', 'Atthapon Maungsrichan', 'atthapon@thaisinto.co.th', 'Engineer', 'Engineering', ''),
(9, '262021445', 'Chaiwat Rotrueanrit', 'chaiwat@thaisinto.co.th', 'Foreman', 'Service Team', ''),
(10, '272016333', 'Chonticha Suwannachu', 'chonticha@thaisinto.co.th', 'Engineer', 'Engineering', ''),
(11, '262017439', 'Damrong Petsukhum', 'damrong@thaisinto.co.th', 'Service', 'Service Team', ''),
(12, '242021320', 'Dolpaphat Longpan', 'dolpaphat@thaisinto.co.th', 'Officer', 'Administration', ''),
(13, '202019318', 'Dumrongkiat  Khonnarong', 'dumrongkiat @thaisinto.co.th', 'Engineering', 'Control ', ''),
(14, '172021172', 'Hirochika Shirai', 'shirai@thaisinto.co.th', 'Advisor', 'Production', ''),
(15, '292013305', 'Jantiwa Yooum', 'jantiwa@thaisinto.co.th', 'Administration', 'Sales', ''),
(16, '202022340', 'Jeerawan  Thongklay', 'jeerwan@thaisinto.co.th', 'Planning Engineer', 'Purchasing', ''),
(17, '202017307', 'Jiraporn Raumboon', 'jiraporn@thaisinto.co.th', 'Safety', 'Administration', ''),
(18, '252015319', 'Kamoltip Kamjadphai', 'kamoltip@thaisinto.co.th', 'Section Shifts', 'Sales', ''),
(19, '112007103', 'Keng Chaiyadhiroj', 'ken@thaisinto.co.th', 'Director / Senior Ma', 'Board of Directors', ''),
(20, '242017212', 'Komsan Klaykhayay', 'komsan@thaisinto.co.th', 'Assistant Manager', 'IT', ''),
(21, '282015212', 'Kriengkrai Kongkoon', 'kriengkrai@thaisinto.co.th', 'Assistant Manager', 'Service Team', ''),
(22, '252021372', 'Kritnarong Chaisila', 'kritnarong@thaisinto.co.th', 'Engineer', 'Service Team', ''),
(23, '242015211', 'Kwanta Poosomsang', 'kwanta@thaisinto.co.th', 'Assistant Manager', 'Administration', ''),
(24, '262021447', 'Leamchon Bunjan', 'leamchon@thaisinto.co.th', 'Foreman', 'Service Team', ''),
(25, '262015331', 'Luckwarin Pinchaimoon', 'luckwarin@thaisinto.co.th', 'Officer', 'Purchasing', ''),
(26, '252010203', 'Maliwan Kumthanet', 'maliwan@thaisinto.co.th', 'Section Chief', 'Purchasing', ''),
(27, '232019312', 'Marisa Sommuang', 'marisa@thaisinto.co.th', 'Officer', 'Accounting', ''),
(28, '252014416', 'Marut Wanichrugee', 'marut@thaisinto.co.th', 'Document', 'Sales', ''),
(29, '192018135', 'Masafumi Mitsuhashi', 'mitsuhashi@thaisinto.co.th', '', 'Service Team', ''),
(30, '292020358', 'Metinee Boonmee', 'metinee@thaisinto.co.th', 'Officer', 'Sales', ''),
(31, '182022121', 'Motoaki Ishiguro', 'ishiguro@thaisinto.co.th', 'Supervisor', 'Engineering', ''),
(32, '262004303', 'Naluemon Saenthep', 'naluemon1@thaisinto.co.th', 'Assistant Manager', 'Service Team', ''),
(33, '242013105', 'Napaporn Supanukanon', 'napaporn@thaisinto.co.th', 'Manager', 'Administration', ''),
(34, '292022369', 'Nat-anong Chunlabutbunnak', 'nat-anong@thaisinto.co.th', 'Section Shifts', 'Sales', ''),
(35, '292020359', 'Nattaporn Fonglai', 'nattaporn@thaisinto.co.th', 'Officer', 'Sales', ''),
(36, '292023371', 'Nichaporn Puttririt', 'nichaporn@thaisinto.co.th', 'Officer', 'Sales', ''),
(37, '272021173', 'Niimi Tadahiko', 'niimi@thaisinto.co.th', 'Production Manager', 'Production', ''),
(38, '282015311', 'Nipawan Yonmanka', 'nipawan@thaisinto.co.th', 'Document Control', 'Engineering', ''),
(39, '242020319', 'Nisarat Kampivpan', 'nisarat@thaisinto.co.th', 'Graphic Design', 'IT', ''),
(40, '252023341', 'Nuchanad Samart', 'nuchanad@thaisinto.co.th', 'Officer', 'Purchasing', ''),
(41, '242012304', 'Nunthiya  Pantha', 'nunthiya@thaisinto.co.th', 'Administration', 'Control ', ''),
(42, '272014418', 'Pakdee Seehanavee', 'pakdee@thaisinto.co.th', 'Foreman', 'Production', ''),
(43, '252016324', 'Panutda Khakhai', 'panutda@thaisinto.co.th', 'Planning', 'Control ', ''),
(44, '292013306', 'Pathomporn Bathcharee', 'pathomporn@thaisinto.co.th', 'Leader', 'Sales', ''),
(45, '252021371', 'Phongphet Kerdmee', 'phongphet@thaisinto.co.th', 'Engineer', 'Service Team', ''),
(46, '262018442', 'Phonthep Subinta', 'phonthep@thaisinto.co.th', 'Service', 'Service Team', ''),
(47, '292023272', 'Phornphan Saengsawat', 'phornphan@thaisinto.co.th', 'Section Shifts', 'Sales', ''),
(48, '292017326', 'Kwanta Poosomsang', 'phreaopiraya@thaisinto.co.th', 'Secretary / Marketin', 'Sales', ''),
(49, '262023375', 'Pisut Tosom', 'pisut@thaisinto.co.th', 'Engineer', 'Service Team', ''),
(50, '282015310', 'Ploymeesri Boonthong', 'ploymeesri@thaisinto.co.th', 'Section Chief', 'Engineering', ''),
(51, '272022276', 'Pornjak Laptawan', 'pornjak@thaisinto.co.th', 'Assistant Manager', 'Production', ''),
(52, '262018340', 'Ratthammanoon Puakdee', 'ratthammanoon@thaisinto.co.th', 'Electric Engineer', 'Service Team', ''),
(53, '252013213', 'Renu Inprasert', 'renu@thaisinto.co.th', 'Manager', 'Control ', ''),
(54, '252001401', 'Rungthip Khuakul', 'rungthip@thaisinto.co.th', 'Leader', 'Sales', ''),
(55, '282019317', 'Sanae Plaeyaw', 'sanae@thaisinto.co.th', 'Engineer', 'Engineering', ''),
(56, '262021446', 'Sarawut Chanphong', 'sarawut.c@thaisinto.co.th', 'Foreman', 'Service Team', ''),
(57, '272013412', 'Sarawut Romsai', 'sarawut_s@thaisinto.co.th', 'Foreman', 'Production', ''),
(58, '222012303', 'Seree Ploykaew', 'seree@thaisinto.co.th', 'Assistant Manager', 'Administration', ''),
(59, '192023168', 'Shunsuke Furutani', 'furutani@thaisinto.co.th', 'Advisor', 'Sales', ''),
(60, '282016314', 'Sinvarasan Tongchoy', 'sinvarasan@thaisinto.co.th', 'Engineer', 'Engineering', ''),
(61, '262023374', 'Sitthichai Maharuenlap', 'sitthichai@thaisinto.co.th', 'Engineer', 'Service Team', ''),
(62, '282006301', 'Sompon Taeprasartsit', 'sompon@thaisinto.co.th', 'Specialists', 'Engineering', ''),
(63, '232019314', 'Somruedee Imsuwan', 'somruedee@thaisinto.co.th', 'Officer', 'Accounting', ''),
(64, '292022367', 'Suparoek Chatchawanpreecha', 'suparoek@thaisinto.co.th', 'Sales', 'Sales', ''),
(65, '252011405', 'Supattra Konpha', 'supattra@thaisinto.co.th', 'Section Chief', 'Service Team', ''),
(66, '242011303', 'Supida Karnsomnet', 'supida@thaisinto.co.th', 'Human Resource/Admin', 'Administration', ''),
(67, '202020421', 'Suthichai Sangiamjit', 'suthichai@thaisinto.co.th', 'Foreman', 'Control ', ''),
(68, '292019154', 'Taichi Koyama', 'koyama@thaisinto.co.th', 'Maintenance Coordina', 'Service Team', ''),
(69, '262017436', 'Taivivat Boonrueangyossiri', 'taivivat@thaisinto.co.th', 'Service', 'Service Team', ''),
(70, '272021370', 'Teerapong Chakkum', 'teerapong@thaisinto.co.th', 'Engineer', 'Production', ''),
(71, '292021363', 'Teerawat Wongyuttanapong', 'teerawat@thaisinto.co.th', 'Sales Machine', 'Sales', ''),
(72, '292023128', 'Tospon Hearunyakij', 'tospon@thaisinto.co.th', 'Project Sales Manage', 'Sales', ''),
(73, '282022320', 'Tossaporn Kiriya', 'tossaporn@thaisinto.co.th', 'Engineer', 'Engineering', ''),
(74, '272016429', 'Uthen Srithi', 'uthen@thaisinto.co.th', 'Electric Leader', 'Production', ''),
(75, '252015323', 'Wannakorn Sukchot', 'wannakorn@thaisinto.co.th', 'Manager', 'Sales', ''),
(76, '232001101', 'Waraporn Sriaiemchan', 'waraporn@thaisinto.co.th', 'Manager', 'Accounting', ''),
(77, '232016208', 'Warisara Songsawadwong', 'warisara@thaisinto.co.th', 'Section Chief', 'Accounting', ''),
(78, '292022370', 'Watcharin Boonyarit', 'watcharin@thaisinto.co.th', 'Officer', 'Sales', ''),
(79, '202018311', 'Wattana Prasawang', 'wattana@thaisinto.co.th', 'Engineer', 'Control ', ''),
(80, '252021373', 'Wiwis Muangkaew', 'wiwis@thaisinto.co.th', 'Engineer', 'Service Team', ''),
(81, '182022119', 'Hiroyuki Yoshida', 'yoshida@thaisinto.co.th', 'Supervisor', 'Engineering', ''),
(82, '252023343', 'Yuwadee Suknaun', 'yuwadee@thaisinto.co.th', 'Officer', 'Purchasing', ''),
(83, '262023476', 'Nantawat Phonok', 'nantawat@thaisinto.co.th', 'Foreman', 'Service Team', ''),
(84, '252023345', 'Phansa Tongjit', 'phansa@thaisinto.co.th', 'Officer', 'Purchasing', ''),
(85, '272023380', 'Anon Taiyansom', 'anon@thaisinto.co.th', 'Officer', 'Production', ''),
(86, '232022319', 'Yaowaluk Pota', 'yaowaluk@thaisinto.co.th', 'Officer', 'Accounting', ''),
(87, '252023246', 'Prapassorn Yangfueang', 'prapassorn@thaisinto.co.th', 'Section Chief', 'Purchasing', ''),
(88, '252023247', 'Nootjanad Phoepanpun', 'nootjanad@thaisinto.co.th', 'Manager', 'Purchasing', ''),
(89, '232023320', 'Naruemon Pakkrajang', 'naruemon@thaisinto.co.th', 'Officer', 'Accounting', ''),
(90, '292023373', 'Litapat Thammatornwiroj', 'litapat@thaisinto.co.th', 'Officer', 'Sales', ''),
(91, '192023177', 'Yuki Ichiba', 'ichiba@thaisinto.co.th', 'Advisor', 'Service Team', ''),
(92, '292023374', 'Khrisana Phulkhlai', 'khrisana@thaisinto.co.th', 'Engineer', 'Sales', ''),
(93, '272023381', 'Ketwadee Boonsiri', 'ketwadee@thaisinto.co.th', 'Officer', 'Production', ''),
(94, '262023278', 'Natapong Bunluehan', 'natapong@thaisinto.co.th', 'Assistant Manager', 'Service Team', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('superadmin','admin') NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `firstname`, `lastname`, `username`, `email`, `password`, `image`, `status`, `updated_at`, `created_at`) VALUES
(2, 'Komsan', 'Klaykhayay', 'admin', 'komsan@thaisinto.co.th', '$2y$10$xRVC8tT.wmPFMsLO6/kawe1XSZiR0A8w.H9rHPkrWoIMj7ZFvckWC', '', 'superadmin', '2023-12-15 12:58:37', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_members`
--
ALTER TABLE `tb_members`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_members`
--
ALTER TABLE `tb_members`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

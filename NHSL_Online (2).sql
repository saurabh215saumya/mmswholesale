-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2026 at 09:28 AM
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
-- Database: `NHSL_Online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `full_name` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `profile_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'noimage.png',
  `activation_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL COMMENT 'Active = 1 , Deactive = 2 , Not approved = 0',
  `addedOn` bigint(20) NOT NULL,
  `updatedOn` bigint(20) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 - Deleted, 0 - Not Deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `full_name`, `email`, `password`, `profile_image`, `activation_key`, `status`, `addedOn`, `updatedOn`, `is_deleted`) VALUES
(1, 'admin', 'NHSL', 'admin@sandeep.com', 'e10adc3949ba59abbe56e057f20f883e', '155872464810.png', '5nQDtz7Vr0', 1, 1520343933, 1559845069, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banners`
--

CREATE TABLE `tbl_banners` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1' COMMENT '''0''=>''Inactive'', ''1''=>''Active''',
  `meta_heading` longtext NOT NULL,
  `meta_title` text NOT NULL,
  `meta_description` text NOT NULL,
  `og_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `robots` varchar(255) NOT NULL,
  `revisit_after` varchar(255) NOT NULL,
  `og_local` varchar(255) NOT NULL,
  `og_type` varchar(255) NOT NULL,
  `og_image` varchar(255) NOT NULL,
  `og_tag` varchar(255) NOT NULL,
  `og_title` varchar(255) NOT NULL,
  `og_url` text NOT NULL,
  `og_site_name` varchar(255) NOT NULL,
  `canonical` varchar(255) NOT NULL,
  `geo_region` varchar(255) NOT NULL,
  `geo_place_name` varchar(255) NOT NULL,
  `geo_position` varchar(255) NOT NULL,
  `icbm` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `page_url` text NOT NULL,
  `is_deleted` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not Deleted'', ''1''=>''Deleted''',
  `addedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_banners`
--

INSERT INTO `tbl_banners` (`id`, `title`, `image`, `status`, `meta_heading`, `meta_title`, `meta_description`, `og_description`, `meta_keywords`, `robots`, `revisit_after`, `og_local`, `og_type`, `og_image`, `og_tag`, `og_title`, `og_url`, `og_site_name`, `canonical`, `geo_region`, `geo_place_name`, `geo_position`, `icbm`, `author`, `page_url`, `is_deleted`, `addedOn`) VALUES
(2, 'First Banner', 'slide2.jpg1778222586.jpg', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '2026-04-26 14:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE `tbl_brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_slug` varchar(255) DEFAULT NULL,
  `brand_slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `h1_tag` varchar(255) DEFAULT NULL,
  `h2_tag` varchar(255) DEFAULT NULL,
  `h3_tag` varchar(255) DEFAULT NULL,
  `image_alt_1` varchar(255) DEFAULT NULL,
  `image_alt_2` varchar(255) DEFAULT NULL,
  `image_alt_3` varchar(255) DEFAULT NULL,
  `image_alt_4` varchar(255) DEFAULT NULL,
  `image_alt_5` varchar(255) DEFAULT NULL,
  `robots` varchar(50) DEFAULT NULL,
  `revisit_after` varchar(50) DEFAULT NULL,
  `og_local` varchar(255) DEFAULT NULL,
  `og_type` varchar(100) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `og_tag` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_url` varchar(255) DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_site_name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `geo_region` varchar(100) DEFAULT NULL,
  `geo_place_name` varchar(255) DEFAULT NULL,
  `geo_position` varchar(100) DEFAULT NULL,
  `icbm` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `is_deleted` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not Deleted'', ''1''=>''Deleted''',
  `addedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_brands`
--

INSERT INTO `tbl_brands` (`id`, `brand_name`, `page_title`, `page_slug`, `brand_slug`, `description`, `image`, `banner_image`, `meta_title`, `meta_description`, `meta_keywords`, `h1_tag`, `h2_tag`, `h3_tag`, `image_alt_1`, `image_alt_2`, `image_alt_3`, `image_alt_4`, `image_alt_5`, `robots`, `revisit_after`, `og_local`, `og_type`, `og_image`, `og_tag`, `og_title`, `og_url`, `og_description`, `og_site_name`, `author`, `canonical`, `geo_region`, `geo_place_name`, `geo_position`, `icbm`, `status`, `is_deleted`, `addedOn`) VALUES
(1, 'Duracell', 'Duracell', 'Duracell', 'duracell', 'Duracell', 'brand3.png1777658514.png', 'brand5.png1777658514.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-05-01 23:23:56'),
(2, 'Swan', 'Swan', 'Swan', 'swan', 'Swan', 'brand5.png1777658514.png1777726045.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-05-02 18:17:25'),
(3, 'Vapouron', 'Vapouron', 'Vapouron', 'vapouron', 'Vapouron', 'brand2.png1777726111.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-05-02 18:17:47'),
(4, 'Elements', 'Elements', 'Elements', 'elements', 'Elements', 'brand5.png1777726133.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-05-02 18:18:53'),
(5, 'OCB', 'OCB', 'OCB', 'ocb', 'OCB', 'brand3.png1777726156.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-05-02 18:19:16'),
(6, 'Clipper', 'Clipper', 'Clipper', 'clipper', 'Clipper', 'brand4.png1777726176.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-05-02 18:19:36'),
(7, 'Durex', 'Durex', 'Durex', 'durex', 'Durex', 'brand4.png1777726200.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-05-02 18:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` float(9,2) NOT NULL,
  `cod_amount` float(9,2) NOT NULL,
  `addedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `user_id`, `sub_cat_id`, `product_id`, `quantity`, `amount`, `cod_amount`, `addedOn`) VALUES
(6, 1, 2, 13, 6, 5.34, 6.54, '2020-03-04 01:19:52'),
(7, 1, 2, 14, 12, 10.68, 13.08, '2020-03-04 01:19:57'),
(8, 1, 2, 15, 15, 13.35, 16.35, '2020-03-04 01:20:02'),
(9, 1, 2, 10, 12, 10.68, 13.08, '2020-03-04 01:20:10'),
(10, 1, 2, 11, 11, 9.79, 11.99, '2020-03-04 01:20:14'),
(11, 8, 2, 12, 1, 0.89, 1.09, '2020-07-07 08:57:55'),
(12, 8, 1, 16, 1, 0.59, 0.69, '2020-07-07 08:57:55'),
(13, 8, 1, 18, 1, 0.59, 0.69, '2020-07-07 08:57:57'),
(28, 9, 1, 18, 6, 3.54, 4.14, '2020-07-28 05:57:51'),
(29, 9, 1, 23, 5, 2.95, 3.45, '2020-07-28 06:00:49'),
(30, 9, 1, 21, 6, 3.54, 4.14, '2020-07-28 06:00:52'),
(31, 9, 1, 24, 5, 2.95, 3.45, '2020-07-28 06:00:55'),
(32, 9, 1, 19, 6, 3.54, 4.14, '2020-07-28 06:01:02'),
(33, 9, 1, 20, 6, 3.54, 4.14, '2020-07-28 06:01:08'),
(34, 9, 1, 16, 6, 3.54, 4.14, '2020-07-28 06:01:14'),
(35, 9, 1, 17, 6, 3.54, 4.14, '2020-07-28 06:01:23'),
(36, 9, 2, 14, 6, 5.34, 6.54, '2020-07-28 06:01:49'),
(37, 9, 2, 13, 6, 5.34, 6.54, '2020-07-28 06:01:54'),
(38, 9, 2, 15, 3, 2.67, 3.27, '2020-07-28 06:01:58'),
(39, 9, 2, 10, 7, 6.23, 7.63, '2020-07-28 06:02:04'),
(40, 9, 2, 11, 12, 10.68, 13.08, '2020-07-28 06:02:08'),
(41, 9, 2, 12, 9, 8.01, 9.81, '2020-07-28 06:02:12'),
(42, 9, 2, 7, 10, 5.50, 6.50, '2020-07-28 06:02:18'),
(43, 9, 2, 8, 3, 1.65, 1.95, '2020-07-28 06:02:23'),
(44, 9, 2, 9, 15, 8.25, 9.75, '2020-07-28 06:02:28'),
(45, 5, 2, 25, 2, 20.00, 0.00, '2020-12-04 12:49:07'),
(46, 5, 2, 24, 1, 0.59, 0.69, '2020-12-04 12:49:15'),
(47, 5, 2, 23, 1, 0.59, 0.69, '2020-12-04 03:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_slug` varchar(255) DEFAULT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `h1_tag` varchar(255) DEFAULT NULL,
  `h2_tag` varchar(255) DEFAULT NULL,
  `h3_tag` varchar(255) DEFAULT NULL,
  `image_alt_1` varchar(255) DEFAULT NULL,
  `image_alt_2` varchar(255) DEFAULT NULL,
  `image_alt_3` varchar(255) DEFAULT NULL,
  `image_alt_4` varchar(255) DEFAULT NULL,
  `image_alt_5` varchar(255) DEFAULT NULL,
  `robots` varchar(50) DEFAULT NULL,
  `revisit_after` varchar(50) DEFAULT NULL,
  `og_local` varchar(255) DEFAULT NULL,
  `og_type` varchar(100) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `og_tag` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_url` varchar(255) DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_site_name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `geo_region` varchar(100) DEFAULT NULL,
  `geo_place_name` varchar(255) DEFAULT NULL,
  `geo_position` varchar(100) DEFAULT NULL,
  `icbm` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `is_deleted` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not Deleted'', ''1''=>''Deleted''',
  `addedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `page_title`, `page_slug`, `category_slug`, `description`, `image`, `banner_image`, `meta_title`, `meta_description`, `meta_keywords`, `h1_tag`, `h2_tag`, `h3_tag`, `image_alt_1`, `image_alt_2`, `image_alt_3`, `image_alt_4`, `image_alt_5`, `robots`, `revisit_after`, `og_local`, `og_type`, `og_image`, `og_tag`, `og_title`, `og_url`, `og_description`, `og_site_name`, `author`, `canonical`, `geo_region`, `geo_place_name`, `geo_position`, `icbm`, `status`, `is_deleted`, `addedOn`) VALUES
(4, 'Agarbatti/Arome', 'Agarbatti/Arome', 'agarbatti-arome', 'agarbatti-arome', 'agarbatti-arome', '3d_6d.jpg1577733368.jpg1777369075.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-04-28 15:07:55'),
(5, 'Baggy', 'Baggy', 'baggy', 'baggy', 'Baggy', 'product1.jpg1777369118.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-04-28 15:08:38'),
(6, 'Smoking Paper', 'Smoking Paper', 'smoking-paper', 'smoking-paper', 'Smoking Paper', 'product1.jpg1777369163.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-04-28 15:09:23'),
(7, 'Stationary', 'stationary', 'Stationary', 'stationary', 'Stationary', 'product1.jpg1777369187.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-04-28 15:09:47'),
(8, 'Electronics', 'Electronics', 'electronics', 'electronics', 'Electronics', 'product3.jpg1777369215.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-04-28 15:10:15'),
(9, 'Lighter', 'Lighter', 'lighter', 'lighter', 'Lighter', 'product4.jpg1777369234.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-04-28 15:10:34'),
(10, 'Brand', 'Brand', 'brand', 'brand', 'Brand', 'product3.jpg1777369259.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-04-28 15:10:59'),
(11, 'Smoking Accessories', 'Smoking Accessories', 'Smoking-Accessories', 'smoking-accessories', 'Smoking Accessories', 'product3.jpg1777369297.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0', '2026-04-28 15:11:37'),
(13, 'Test Category', 'Test Category', 'Test Category', 'Test-Category', 'Test Category', 'bg1.jpg1777478675.jpg', 'slide2.png1777478651.png', 'Meta Title', 'Meta Description', 'Meta Keywords', 'H1 Tag', 'H2 Tag', 'H3 Tag', 'Image Alt-1 Tag', 'Image Alt-2 Tag', 'Image Alt-3 Tag', 'Image Alt-4 Tag', 'Image Alt-5 Tag', 'Robots', 'Revisit After', 'Og Locale', 'Og Type', 'Og Image', 'Og Tag', 'Og Title', 'Og Url', 'Og Description', 'Og Site Name', 'Author', 'Canonical', 'Geo Region', 'Geo Place Name', 'Geo Position', 'ICBM', 1, '1', '2026-04-29 21:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_testimonial`
--

CREATE TABLE `tbl_client_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `is_deleted` varchar(1) NOT NULL DEFAULT '0',
  `addedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_client_testimonial`
--

INSERT INTO `tbl_client_testimonial` (`id`, `name`, `designation`, `description`, `image`, `status`, `is_deleted`, `addedOn`) VALUES
(2, 'Saurabh Kumar Gurgaon', 'SSE', 'Test Content Here!!!', 'brand5.png1777666441.png', '1', '0', '2026-05-02 01:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) DEFAULT 0,
  `flag_32` varchar(255) DEFAULT 'noimage.png',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 - Enable, 0 - Disable',
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 - Deleted, 0 - Not Deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `sortname`, `name`, `phonecode`, `flag_32`, `status`, `is_deleted`) VALUES
(1, 'AF', 'Afghanistan', 93, 'AF-32.png', 1, 0),
(2, 'AL', 'Albania', 355, 'AL-32.png', 1, 0),
(3, 'DZ', 'Algeria', 213, 'DZ-32.png', 1, 0),
(4, 'AS', 'American Samoa', 1684, 'AS-32.png', 1, 0),
(5, 'AD', 'Andorra', 376, 'AD-32.png', 1, 0),
(6, 'AO', 'Angola', 244, 'AO-32.png', 1, 0),
(7, 'AI', 'Anguilla', 1264, 'AI-32.png', 1, 0),
(8, 'AQ', 'Antarctica', 0, 'AQ-32.png', 1, 0),
(9, 'AG', 'Antigua And Barbuda', 1268, 'AG-32.png', 1, 0),
(10, 'AR', 'Argentina', 54, 'AR-32.png', 1, 0),
(11, 'AM', 'Armenia', 374, 'AM-32.png', 1, 0),
(12, 'AW', 'Aruba', 297, 'AW-32.png', 1, 0),
(13, 'AU', 'Australia', 61, 'AU-32.png', 1, 0),
(14, 'AT', 'Austria', 43, 'AT-32.png', 1, 0),
(15, 'AZ', 'Azerbaijan', 994, 'AZ-32.png', 1, 0),
(16, 'BS', 'Bahamas', 1242, 'BS-32.png', 1, 0),
(17, 'BH', 'Bahrain', 973, 'BH-32.png', 1, 0),
(18, 'BD', 'Bangladesh', 880, 'BD-32.png', 1, 0),
(19, 'BB', 'Barbados', 1246, 'BB-32.png', 1, 0),
(20, 'BY', 'Belarus', 375, 'BY-32.png', 1, 0),
(21, 'BE', 'Belgium', 32, 'BE-32.png', 1, 0),
(22, 'BZ', 'Belize', 501, 'BZ-32.png', 1, 0),
(23, 'BJ', 'Benin', 229, 'BJ-32.png', 1, 0),
(24, 'BM', 'Bermuda', 1441, 'BM-32.png', 1, 0),
(25, 'BT', 'Bhutan', 975, 'BT-32.png', 1, 0),
(26, 'BO', 'Bolivia', 591, 'BO-32.png', 1, 0),
(27, 'BA', 'Bosnia and Herzegovina', 387, 'BA-32.png', 1, 0),
(28, 'BW', 'Botswana', 267, 'BW-32.png', 1, 0),
(29, 'BV', 'Bouvet Island', 0, 'BV-32.png', 1, 0),
(30, 'BR', 'Brazil', 55, 'BR-32.png', 1, 0),
(31, 'IO', 'British Indian Ocean Territory', 246, 'IO-32.png', 1, 0),
(32, 'BN', 'Brunei', 673, 'BN-32.png', 1, 0),
(33, 'BG', 'Bulgaria', 359, 'BG-32.png', 1, 0),
(34, 'BF', 'Burkina Faso', 226, 'BF-32.png', 1, 0),
(35, 'BI', 'Burundi', 257, 'BI-32.png', 1, 0),
(36, 'KH', 'Cambodia', 855, 'KH-32.png', 1, 0),
(37, 'CM', 'Cameroon', 237, 'CM-32.png', 1, 0),
(38, 'CA', 'Canada', 1, 'CA-32.png', 1, 0),
(39, 'CV', 'Cabo Verde', 238, 'CV-32.png', 1, 0),
(40, 'KY', 'Cayman Islands', 1345, 'KY-32.png', 1, 0),
(41, 'CF', 'Central African Republic', 236, 'CF-32.png', 1, 0),
(42, 'TD', 'Chad', 235, 'TD-32.png', 1, 0),
(43, 'CL', 'Chile', 56, 'CL-32.png', 1, 0),
(44, 'CN', 'China', 86, 'CN-32.png', 1, 0),
(45, 'CX', 'Christmas Island', 61, 'CX-32.png', 1, 0),
(46, 'CC', 'Cocos (Keeling) Islands', 672, 'CC-32.png', 1, 0),
(47, 'CO', 'Colombia', 57, 'CO-32.png', 1, 0),
(48, 'KM', 'Comoros', 269, 'KM-32.png', 1, 0),
(49, 'CG', 'Congo', 242, 'CG-32.png', 1, 0),
(50, 'CD', 'Democratic Republic of the Congo', 242, 'CD-32.png', 1, 0),
(51, 'CK', 'Cook Islands', 682, 'CK-32.png', 1, 0),
(52, 'CR', 'Costa Rica', 506, 'CR-32.png', 1, 0),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225, 'CI-32.png', 1, 0),
(54, 'HR', 'Croatia (Hrvatska)', 385, 'HR-32.png', 1, 0),
(55, 'CU', 'Cuba', 53, 'CU-32.png', 1, 0),
(56, 'CY', 'Cyprus', 357, 'CY-32.png', 1, 0),
(57, 'CZ', 'Czech Republic', 420, 'CZ-32.png', 1, 0),
(58, 'DK', 'Denmark', 45, 'DK-32.png', 1, 0),
(59, 'DJ', 'Djibouti', 253, 'DJ-32.png', 1, 0),
(60, 'DM', 'Dominica', 1767, 'DM-32.png', 1, 0),
(61, 'DO', 'Dominican Republic', 1809, 'DO-32.png', 1, 0),
(62, 'TP', 'East Timor', 670, 'noimage.png', 1, 0),
(63, 'EC', 'Ecuador', 593, 'EC-32.png', 1, 0),
(64, 'EG', 'Egypt', 20, 'EG-32.png', 1, 0),
(65, 'SV', 'El Salvador', 503, 'SV-32.png', 1, 0),
(66, 'GQ', 'Equatorial Guinea', 240, 'GQ-32.png', 1, 0),
(67, 'ER', 'Eritrea', 291, 'ER-32.png', 1, 0),
(68, 'EE', 'Estonia', 372, 'EE-32.png', 1, 0),
(69, 'ET', 'Ethiopia', 251, 'ET-32.png', 1, 0),
(70, 'XA', 'External Territories of Australia', 61, 'noimage.png', 1, 0),
(71, 'FK', 'Falkland Islands (Malvinas)', 500, 'FK-32.png', 1, 0),
(72, 'FO', 'Faroe Islands', 298, 'FO-32.png', 1, 0),
(73, 'FJ', 'Fiji Islands', 679, 'FJ-32.png', 1, 0),
(74, 'FI', 'Finland', 358, 'FI-32.png', 1, 0),
(75, 'FR', 'France', 33, 'FR-32.png', 1, 0),
(76, 'GF', 'French Guiana', 594, 'GF-32.png', 1, 0),
(77, 'PF', 'French Polynesia', 689, 'PF-32.png', 1, 0),
(78, 'TF', 'French Southern Territories', 0, 'TF-32.png', 1, 0),
(79, 'GA', 'Gabon', 241, 'GA-32.png', 1, 0),
(80, 'GM', 'The Gambia', 220, 'GM-32.png', 1, 0),
(81, 'GE', 'Georgia', 995, 'GE-32.png', 1, 0),
(82, 'DE', 'Germany', 49, 'DE-32.png', 1, 0),
(83, 'GH', 'Ghana', 233, 'GH-32.png', 1, 0),
(84, 'GI', 'Gibraltar', 350, 'GI-32.png', 1, 0),
(85, 'GR', 'Greece', 30, 'GR-32.png', 1, 0),
(86, 'GL', 'Greenland', 299, 'GL-32.png', 1, 0),
(87, 'GD', 'Grenada', 1473, 'GD-32.png', 1, 0),
(88, 'GP', 'Guadeloupe', 590, 'GP-32.png', 1, 0),
(89, 'GU', 'Guam', 1671, 'GU-32.png', 1, 0),
(90, 'GT', 'Guatemala', 502, 'GT-32.png', 1, 0),
(91, 'XU', 'Guernsey and Alderney', 44, 'noimage.png', 1, 0),
(92, 'GN', 'Guinea', 224, 'GN-32.png', 1, 0),
(93, 'GW', 'Guinea-Bissau', 245, 'GW-32.png', 1, 0),
(94, 'GY', 'Guyana', 592, 'GY-32.png', 1, 0),
(95, 'HT', 'Haiti', 509, 'HT-32.png', 1, 0),
(96, 'HM', 'Heard and McDonald Islands', 0, 'HM-32.png', 1, 0),
(97, 'HN', 'Honduras', 504, 'HN-32.png', 1, 0),
(98, 'HK', 'Hong Kong S.A.R.', 852, 'HK-32.png', 1, 0),
(99, 'HU', 'Hungary', 36, 'HU-32.png', 1, 0),
(100, 'IS', 'Iceland', 354, 'IS-32.png', 1, 0),
(101, 'IN', 'India', 91, 'IN-32.png', 1, 0),
(102, 'ID', 'Indonesia', 62, 'ID-32.png', 1, 0),
(103, 'IR', 'Iran', 98, 'IR-32.png', 1, 0),
(104, 'IQ', 'Iraq', 964, 'IQ-32.png', 1, 0),
(105, 'IE', 'Ireland', 353, 'IE-32.png', 1, 0),
(106, 'IL', 'Israel', 972, 'IL-32.png', 1, 0),
(107, 'IT', 'Italy', 39, 'IT-32.png', 1, 0),
(108, 'JM', 'Jamaica', 1876, 'JM-32.png', 1, 0),
(109, 'JP', 'Japan', 81, 'JP-32.png', 1, 0),
(110, 'XJ', 'Jersey', 44, 'noimage.png', 1, 0),
(111, 'JO', 'Jordan', 962, 'JO-32.png', 1, 0),
(112, 'KZ', 'Kazakhstan', 7, 'KZ-32.png', 1, 0),
(113, 'KE', 'Kenya', 254, 'KE-32.png', 1, 0),
(114, 'KI', 'Kiribati', 686, 'KI-32.png', 1, 0),
(115, 'KP', 'North Korea', 850, 'KP-32.png', 1, 0),
(116, 'KR', 'South Korea', 82, 'KR-32.png', 1, 0),
(117, 'KW', 'Kuwait', 965, 'KW-32.png', 1, 0),
(118, 'KG', 'Kyrgyzstan', 996, 'KG-32.png', 1, 0),
(119, 'LA', 'Laos', 856, 'LA-32.png', 1, 0),
(120, 'LV', 'Latvia', 371, 'LV-32.png', 1, 0),
(121, 'LB', 'Lebanon', 961, 'LB-32.png', 1, 0),
(122, 'LS', 'Lesotho', 266, 'LS-32.png', 1, 0),
(123, 'LR', 'Liberia', 231, 'LR-32.png', 1, 0),
(124, 'LY', 'Libya', 218, 'LY-32.png', 1, 0),
(125, 'LI', 'Liechtenstein', 423, 'LI-32.png', 1, 0),
(126, 'LT', 'Lithuania', 370, 'LT-32.png', 1, 0),
(127, 'LU', 'Luxembourg', 352, 'LU-32.png', 1, 0),
(128, 'MO', 'Macau S.A.R.', 853, 'MO-32.png', 1, 0),
(129, 'MK', 'Macedonia', 389, 'MK-32.png', 1, 0),
(130, 'MG', 'Madagascar', 261, 'MG-32.png', 1, 0),
(131, 'MW', 'Malawi', 265, 'MW-32.png', 1, 0),
(132, 'MY', 'Malaysia', 60, 'MY-32.png', 1, 0),
(133, 'MV', 'Maldives', 960, 'MV-32.png', 1, 0),
(134, 'ML', 'Mali', 223, 'ML-32.png', 1, 0),
(135, 'MT', 'Malta', 356, 'MT-32.png', 1, 0),
(136, 'XM', 'Man (Isle of)', 44, 'noimage.png', 1, 0),
(137, 'MH', 'Marshall Islands', 692, 'MH-32.png', 1, 0),
(138, 'MQ', 'Martinique', 596, 'MQ-32.png', 1, 0),
(139, 'MR', 'Mauritania', 222, 'MR-32.png', 1, 0),
(140, 'MU', 'Mauritius', 230, 'MU-32.png', 1, 0),
(141, 'YT', 'Mayotte', 269, 'YT-32.png', 1, 0),
(142, 'MX', 'Mexico', 52, 'MX-32.png', 1, 0),
(143, 'FM', 'Micronesia', 691, 'FM-32.png', 1, 0),
(144, 'MD', 'Moldova', 373, 'MD-32.png', 1, 0),
(145, 'MC', 'Monaco', 377, 'MC-32.png', 1, 0),
(146, 'MN', 'Mongolia', 976, 'MN-32.png', 1, 0),
(147, 'MS', 'Montserrat', 1664, 'MS-32.png', 1, 0),
(148, 'MA', 'Morocco', 212, 'MA-32.png', 1, 0),
(149, 'MZ', 'Mozambique', 258, 'MZ-32.png', 1, 0),
(150, 'MM', 'Myanmar', 95, 'MM-32.png', 1, 0),
(151, 'NA', 'Namibia', 264, 'NA-32.png', 1, 0),
(152, 'NR', 'Nauru', 674, 'NR-32.png', 1, 0),
(153, 'NP', 'Nepal', 977, 'NP-32.png', 1, 0),
(154, 'AN', 'Netherlands Antilles', 599, 'noimage.png', 1, 0),
(155, 'NL', 'Netherlands The', 31, 'NL-32.png', 1, 0),
(156, 'NC', 'New Caledonia', 687, 'NC-32.png', 1, 0),
(157, 'NZ', 'New Zealand', 64, 'NZ-32.png', 1, 0),
(158, 'NI', 'Nicaragua', 505, 'NI-32.png', 1, 0),
(159, 'NE', 'Niger', 227, 'NE-32.png', 1, 0),
(160, 'NG', 'Nigeria', 234, 'NG-32.png', 1, 0),
(161, 'NU', 'Niue', 683, 'NU-32.png', 1, 0),
(162, 'NF', 'Norfolk Island', 672, 'NF-32.png', 1, 0),
(163, 'MP', 'Northern Mariana Islands', 1670, 'MP-32.png', 1, 0),
(164, 'NO', 'Norway', 47, 'NO-32.png', 1, 0),
(165, 'OM', 'Oman', 968, 'OM-32.png', 1, 0),
(166, 'PK', 'Pakistan', 92, 'PK-32.png', 1, 0),
(167, 'PW', 'Palau', 680, 'PW-32.png', 1, 0),
(168, 'PS', 'Palestinian Territory Occupied', 970, 'PS-32.png', 1, 0),
(169, 'PA', 'Panama', 507, 'PA-32.png', 1, 0),
(170, 'PG', 'Papua new Guinea', 675, 'PG-32.png', 1, 0),
(171, 'PY', 'Paraguay', 595, 'PY-32.png', 1, 0),
(172, 'PE', 'Peru', 51, 'PE-32.png', 1, 0),
(173, 'PH', 'Philippines', 63, 'PH-32.png', 1, 0),
(174, 'PN', 'Pitcairn Island', 0, 'PN-32.png', 1, 0),
(175, 'PL', 'Poland', 48, 'PL-32.png', 1, 0),
(176, 'PT', 'Portugal', 351, 'PT-32.png', 1, 0),
(177, 'PR', 'Puerto Rico', 1787, 'PR-32.png', 1, 0),
(178, 'QA', 'Qatar', 974, 'QA-32.png', 1, 0),
(179, 'RE', 'Reunion', 262, 'RE-32.png', 1, 0),
(180, 'RO', 'Romania', 40, 'RO-32.png', 1, 0),
(181, 'RU', 'Russia', 70, 'RU-32.png', 1, 0),
(182, 'RW', 'Rwanda', 250, 'RW-32.png', 1, 0),
(183, 'SH', 'Saint Helena', 290, 'SH-32.png', 1, 0),
(184, 'KN', 'Saint Kitts And Nevis', 1869, 'KN-32.png', 1, 0),
(185, 'LC', 'Saint Lucia', 1758, 'LC-32.png', 1, 0),
(186, 'PM', 'Saint Pierre and Miquelon', 508, 'PM-32.png', 1, 0),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784, 'VC-32.png', 1, 0),
(188, 'WS', 'Samoa', 684, 'WS-32.png', 1, 0),
(189, 'SM', 'San Marino', 378, 'SM-32.png', 1, 0),
(190, 'ST', 'Sao Tome and Principe', 239, 'ST-32.png', 1, 0),
(191, 'SA', 'Saudi Arabia', 966, 'SA-32.png', 1, 0),
(192, 'SN', 'Senegal', 221, 'SN-32.png', 1, 0),
(193, 'RS', 'Serbia', 381, 'RS-32.png', 1, 0),
(194, 'SC', 'Seychelles', 248, 'SC-32.png', 1, 0),
(195, 'SL', 'Sierra Leone', 232, 'SL-32.png', 1, 0),
(196, 'SG', 'Singapore', 65, 'SG-32.png', 1, 0),
(197, 'SK', 'Slovakia', 421, 'SK-32.png', 1, 0),
(198, 'SI', 'Slovenia', 386, 'SI-32.png', 1, 0),
(199, 'XG', 'Smaller Territories of the UK', 44, 'noimage.png', 1, 0),
(200, 'SB', 'Solomon Islands', 677, 'SB-32.png', 1, 0),
(201, 'SO', 'Somalia', 252, 'SO-32.png', 1, 0),
(202, 'ZA', 'South Africa', 27, 'ZA-32.png', 1, 0),
(203, 'GS', 'South Georgia', 0, 'GS-32.png', 1, 0),
(204, 'SS', 'South Sudan', 211, 'SS-32.png', 1, 0),
(205, 'ES', 'Spain', 34, 'ES-32.png', 1, 0),
(206, 'LK', 'Sri Lanka', 94, 'LK-32.png', 1, 0),
(207, 'SD', 'Sudan', 249, 'SD-32.png', 1, 0),
(208, 'SR', 'Suriname', 597, 'SR-32.png', 1, 0),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47, 'SJ-32.png', 1, 0),
(210, 'SZ', 'Swaziland', 268, 'SZ-32.png', 1, 0),
(211, 'SE', 'Sweden', 46, 'SE-32.png', 1, 0),
(212, 'CH', 'Switzerland', 41, 'CH-32.png', 1, 0),
(213, 'SY', 'Syria', 963, 'SY-32.png', 1, 0),
(214, 'TW', 'Taiwan', 886, 'TW-32.png', 1, 0),
(215, 'TJ', 'Tajikistan', 992, 'TJ-32.png', 1, 0),
(216, 'TZ', 'Tanzania', 255, 'TZ-32.png', 1, 0),
(217, 'TH', 'Thailand', 66, 'TH-32.png', 1, 0),
(218, 'TG', 'Togo', 228, 'TG-32.png', 1, 0),
(219, 'TK', 'Tokelau', 690, 'TK-32.png', 1, 0),
(220, 'TO', 'Tonga', 676, 'TO-32.png', 1, 0),
(221, 'TT', 'Trinidad And Tobago', 1868, 'TT-32.png', 1, 0),
(222, 'TN', 'Tunisia', 216, 'TN-32.png', 1, 0),
(223, 'TR', 'Turkey', 90, 'TR-32.png', 1, 0),
(224, 'TM', 'Turkmenistan', 7370, 'TM-32.png', 1, 0),
(225, 'TC', 'Turks And Caicos Islands', 1649, 'TC-32.png', 1, 0),
(226, 'TV', 'Tuvalu', 688, 'TV-32.png', 1, 0),
(227, 'UG', 'Uganda', 256, 'UG-32.png', 1, 0),
(228, 'UA', 'Ukraine', 380, 'UA-32.png', 1, 0),
(229, 'AE', 'United Arab Emirates', 971, 'AE-32.png', 1, 0),
(230, 'GB', 'United Kingdom', 44, 'GB-32.png', 1, 0),
(231, 'US', 'United States', 1, 'US-32.png', 1, 0),
(232, 'UM', 'United States Minor Outlying Islands', 1, 'UM-32.png', 1, 0),
(233, 'UY', 'Uruguay', 598, 'UY-32.png', 1, 0),
(234, 'UZ', 'Uzbekistan', 998, 'UZ-32.png', 1, 0),
(235, 'VU', 'Vanuatu', 678, 'VU-32.png', 1, 0),
(236, 'VA', 'Vatican City State (Holy See)', 39, 'VA-32.png', 1, 0),
(237, 'VE', 'Venezuela', 58, 'VE-32.png', 1, 0),
(238, 'VN', 'Vietnam', 84, 'VN-32.png', 1, 0),
(239, 'VG', 'Virgin Islands (British)', 1284, 'VG-32.png', 1, 0),
(240, 'VI', 'Virgin Islands (US)', 1340, 'VI-32.png', 1, 0),
(241, 'WF', 'Wallis And Futuna Islands', 681, 'WF-32.png', 1, 0),
(242, 'EH', 'Western Sahara', 212, 'EH-32.png', 1, 0),
(243, 'YE', 'Yemen', 967, 'YE-32.png', 1, 0),
(244, 'YU', 'Yugoslavia', 38, 'YU-32.png', 1, 0),
(245, 'ZM', 'Zambia', 260, 'ZM-32.png', 1, 0),
(246, 'ZW', 'Zimbabwe', 263, 'ZW-32.png', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_template`
--

CREATE TABLE `tbl_email_template` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1 - Enable, 0 - Disable',
  `addedOn` bigint(20) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_deleted` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_email_template`
--

INSERT INTO `tbl_email_template` (`id`, `name`, `subject`, `description`, `status`, `addedOn`, `comment`, `is_deleted`) VALUES
(1, 'user_veryfication_code', 'User Verification Code', '<table border=\"1px\" style=\"height:329px; width:625px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:615px\">\r\n			<table style=\"height:309px; width:608px\">\r\n				<tbody>\r\n					<tr>\r\n						<td style=\"height:47px; width:598px\">\r\n						<!-- <p><img alt=\"logo\" src=\"{{email_logo_url}}\" style=\"height:98%; width:60%\" /></p> -->\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"height:147px; width:598px\">\r\n						<p>Dear {{contact_person}},</p>\r\n\r\n						<p>Thanks for register with onlineshopsupplier, use below details for login.</p>\r\n\r\n						<p>Email : <strong>{{email}}</strong></p>\r\n						<p>Password : <strong>{{password}}</strong></p>\r\n\r\n						<p>Thanks,</p>\r\n						Team Onlineshopsupplier\r\n\r\n						<table border=\"1px\" style=\"height:36px; width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td style=\"width:544px\">copyright &copy; {{site_name}} {{year}}. All right reserved</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<p><br />\r\n						<br />\r\n						&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, 1510818560, 'This Email content send to the Admin. when he want to reset own password', '0'),
(2, 'forgot_password_user', 'Reset password code', '<table border=\"1px\" style=\"height:329px; width:625px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:615px\">\r\n			<table style=\"height:309px; width:608px\">\r\n				<tbody>\r\n					<tr>\r\n						<td style=\"height:47px; width:598px\">\r\n						<p><img alt=\"logo\" src=\"{{email_logo_url}}\" style=\"height:98%; width:60%\" /></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"height:147px; width:598px\">\r\n						<p>Dear {{contact_person}},</p>\r\n\r\n						<p>Please user the below OTP to validate your account :</p>\r\n\r\n						<p>Your verification OTP is : <strong>{{activation_code}}</strong></p>\r\n\r\n						<p>Thanks,</p>\r\n						Team Likeaati\r\n\r\n						<table border=\"1px\" style=\"height:36px; width:100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td style=\"width:544px\">copyright &copy; {{site_name}} {{year}}. All right reserved</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<p><br />\r\n						<br />\r\n						&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, 1510847275, 'This Email content send to the user when he forgot own password', '0'),
(3, 'send_admin_order', 'Admin Order Item', '<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\"utf-8\">\r\n<title></title>\r\n</head>\r\n\r\n<body style=\"font-family:Arial, Helvetica, sans-serif; padding:0; margin:0; color:#000;\">\r\n    <table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"padding:20px; border:1px solid #ddd;\">\r\n        <tr>\r\n            <td align=\"left\" valign=\"top\">\r\n                <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\r\n                    <tr>\r\n                        <td colspan=\"1\" align=\"left\" valign=\"top\" width=\"100px\">\r\n                            <table width=\"100%\" style=\"margin-right:115px;\">\r\n                                <tr><td><strong>Company Details</strong></td></tr>\r\n                                <tr><td>Onlineshopsupplier.com</td></tr>\r\n                                <tr><td>mdfoods@hotmail.co.uk</td></tr>\r\n                                <tr><td>+44 (0)208 577 8898</td></tr>\r\n                                <tr><td>Unit 12, 142 Johnson Street Southall, London UB2 5FD</td></tr>\r\n                            </table>\r\n                        </td>\r\n                        <td colspan=\"1\" align=\"center\" valign=\"top\"><img src=\"{{email_logo_url}}\"></br>\r\n                          <!-- <span>Invoice No : <?php echo str_pad($order_details[\'transaction_no\'], 4, \"0\", STR_PAD_LEFT); ?></span></br> -->\r\n                          <span>Invoice No : {{invoice_number}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n                          <span>Order Date : {{order_date}}</span></td>\r\n                        <td colspan=\"3\" align=\"right\" valign=\"top\">\r\n                            <table width=\"100%\">\r\n                                <tr><td style=\"text-align: right;\"><strong>Billing Details</strong></td></tr>\r\n                                <tr><td style=\"text-align: right;\">{{billing_user_name}}</td></tr>\r\n                                <tr><td style=\"text-align: right;\">{{billing_user_email}}</td></tr>\r\n                                <tr><td style=\"text-align: right;\">{{billing_user_contact}}</td></tr>\r\n                                <tr><td style=\"text-align: right;\">{{billing_user_address}}</td></tr>\r\n                            </table>\r\n                        </td>\r\n                    </tr>\r\n\r\n                    <tr><td colspan=\"4\">&nbsp;</td></tr>\r\n\r\n                    <table width=\"100%\">\r\n                        <tr>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">Product Code</th>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">Product Name</th>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">RRP Price</th>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">Price(Per Unit)</th>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">Quantity</th>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">Total Amount</th>\r\n                        </tr>\r\n                        \r\n                        {{order_details}}\r\n\r\n                        <tr>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">Amount</th>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">{{pay_amount}}</th>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">Shipping Charge</th>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">{{shipping_charge}}</th>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">Grand Total</th>\r\n                            <th align=\"center\" style=\"padding:5px; font-size:14px;background:#cfd0cd;\">{{total_amount}}</th>\r\n                        </tr>\r\n                    </table>\r\n\r\n                    <tr>\r\n                        <td colspan=\"4\" align=\"center\">Thanks for your online business please let others know to save independant convienient shop industry</td>\r\n                    </tr>\r\n                </table>\r\n            </td>\r\n        </tr>\r\n    </table>\r\n\r\n</body>\r\n</html>\r\n', 1, 1510847275, 'This Email content send to the user when he forgot own password', '0'),
(4, 'send_user_order', 'User Order Item', '<div style=\"width:100%\">\r\n<table width=\"100%\" border=\"0\" cellpadding=\"8\" cellspacing=\"0\" align=\"center\" style=\"font-size:15px; font-family:arial; background-color:#fff; border:2px solid #00346f;\">\r\n	<tr>\r\n		<td width=\"33%\" align=\"center\" valign=\"center\" style=\"border-bottom:1px dashed #47d344;\"><strong>Company Details</strong><br/><br/> <span style=\"font-size:12px; font-family:arial;\"><a style=\"color:#000000\">Onlineshopsupplier.com</a></span><br/><span style=\"font-size:12px; font-family:arial;\"><a style=\"color:#000000\" href=\"tel:+44 (0)208 577 8898\">+44 (0)208 577 8898</a></span><br/><span style=\"font-size:12px; font-family:arial;\"><a style=\"color:#000000\" href=\"mailto:order@onlineshopsupplier.com\">order@onlineshopsupplier.com</a></span><br/><span style=\"font-size:12px; font-family:arial;\">Unit 12, 142 Johnson Street Southall, London UB2 5FD</span></td>\r\n		<td width=\"33%\" align=\"center\" valign=\"center\" style=\"border-bottom:1px dashed #47d344;\"><img src=\"{{email_logo_url}}\" alt=\"logo\"></td>\r\n		<td width=\"33%\" align=\"center\" valign=\"center\" style=\"border-bottom:1px dashed #47d344;\"><strong>Billing Details</strong><br/><br/> <span style=\"font-size:12px; font-family:arial;\"><a style=\"color:#000000\">{{billing_user_name}}</a></span><br/><span style=\"font-size:12px; font-family:arial;\">{{billing_user_email}}<br/><span style=\"font-size:12px; font-family:arial;\">{{billing_user_contact}}<br/><span style=\"font-size:12px; font-family:arial;\">{{billing_user_address}}</span></td>\r\n	</tr> \r\n	<tr> \r\n		<td colspan=\"6\"> \r\n			<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"> \r\n				<tr> \r\n					<td style=\"font-size:14px; border-right:1px dashed #47d344; border-bottom:1px dashed #47d344; padding:15px 10px;\"><h3 style=\"text-transform:uppercase;\">Thanks for your interesting in this product.</h3>Your order has been <font style=\"color: #00346f;font-weight: normal;\">“Completed”</font> successfully. Your order summary is below. Thank you again for your business.</td> \r\n					<td style=\"font-size:14px; border-bottom:1px dashed #47d344; padding:15px 10px;\"><strong>Invoice No :</strong> <span style=\"font-size:12px; font-family:arial;\">{{invoice_number}}</span><br/> <strong>Order Date :</strong> <span style=\"font-size:12px; font-family:arial;\">{{order_date}}</span> </td> \r\n				</tr> \r\n			</table> \r\n		</td> \r\n	</tr> \r\n	<tr> \r\n		<td colspan=\"12\" align=\"center\"><h3 style=\"color: #1a589d;font-weight: normal;\">Your order : #{{txn_number}} </h3><h3 style=\"color: #00346f;font-weight: normal;\">Order Status : “Completed”</h3><!-- <span style=\"font-size:12px;\">Placed on {{order_date}}</span><br/><br/> --></td>\r\n	</tr>\r\n\r\n	<tr>\r\n		<td colspan=\"6\" style=\"text-transform:uppercase;color:#000\">\r\n			<table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" style=\"background-color:#336aa8; font-size:14px; font-family:arial; font-weight:bold;\">\r\n				<tr>\r\n					<td align=\"center\" width=\"15%\">Product Code</td>\r\n					<td align=\"center\" width=\"15%\">Product Name</td>\r\n					<td align=\"center\" width=\"15%\">RRP Price</td>					\r\n					<td align=\"center\" width=\"15%\">Price(Per Unit)</td>\r\n					<td align=\"center\" width=\"15%\">Quantity</td>					\r\n					<td align=\"center\" width=\"15%\">Total Amount</td>\r\n				</tr>	\r\n\r\n{{order_details}}\r\n\r\n			</table>\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n	<td colspan=\"6\" style=\"background:#80a2c9; border-top:1px solid #80a2c9;border-bottom:1px solid #80a2c9;\">\r\n		<table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" style=\"font-size:14px; font-family:arial; font-weight:bold;\">\r\n			<tr>\r\n	            <!-- <th colspan=\"2\" style=\"background-color: #FFFDE5;\">Transaction No : #{{order_number}}</th> -->\r\n	            \r\n	            <th colspan=\"2\" style=\"background-color: #FFFDE5;\">Total Amount : {{pay_amount}}</th>\r\n	            \r\n	            <th colspan=\"2\" style=\"background-color: #FFFDE5;\">Shipping Charge : {{shipping_charge}}</th>\r\n	            \r\n	            <th colspan=\"2\" style=\"background-color: #FFFDE5;\">Grand Total : {{total_amount}}</th>\r\n	        </tr>\r\n			<!-- <tr>\r\n				<td align=\"right\" colspan=\"3\">Total Amount</td>\r\n				<td align=\"right\" colspan=\"2\">$ {{item_price}}</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" colspan=\"3\">Shipping Charge</td>\r\n				<td align=\"right\" colspan=\"2\">$ {{shipping_charge}}</td>\r\n			</tr>\r\n			<tr>\r\n				<td align=\"right\" width=\"70%\" colspan=\"3\">Grand Total</td>\r\n				<td align=\"right\" colspan=\"2\">$ {{grand_total}}</td>\r\n			</tr> -->\r\n		</table>\r\n	</td>\r\n</tr>\r\n</table><br/>\r\n<h3 style=\"color:#00346f; text-transform:uppercase;\" align=\"center\">Thank you, Onlineshopsupplier!</h3><br/><br/></div>', 1, 1510847275, 'This Email content send to the user when he forgot own password', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `addedOn` datetime NOT NULL,
  `is_deleted` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keywords`
--

CREATE TABLE `tbl_keywords` (
  `id` int(11) NOT NULL,
  `keyword_name` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_slug` varchar(255) DEFAULT NULL,
  `keyword_slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `h1_tag` varchar(255) DEFAULT NULL,
  `h2_tag` varchar(255) DEFAULT NULL,
  `h3_tag` varchar(255) DEFAULT NULL,
  `image_alt_1` varchar(255) DEFAULT NULL,
  `image_alt_2` varchar(255) DEFAULT NULL,
  `image_alt_3` varchar(255) DEFAULT NULL,
  `image_alt_4` varchar(255) DEFAULT NULL,
  `image_alt_5` varchar(255) DEFAULT NULL,
  `robots` varchar(50) DEFAULT NULL,
  `revisit_after` varchar(50) DEFAULT NULL,
  `og_local` varchar(255) DEFAULT NULL,
  `og_type` varchar(100) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `og_tag` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_url` varchar(255) DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_site_name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `geo_region` varchar(100) DEFAULT NULL,
  `geo_place_name` varchar(255) DEFAULT NULL,
  `geo_position` varchar(100) DEFAULT NULL,
  `icbm` varchar(100) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `coverage` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `distribution` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `geography` varchar(255) NOT NULL,
  `cache_control` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter_description` int(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter_site` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `is_deleted` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not Deleted'', ''1''=>''Deleted''',
  `addedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_keywords`
--

INSERT INTO `tbl_keywords` (`id`, `keyword_name`, `page_title`, `page_slug`, `keyword_slug`, `description`, `image`, `banner_image`, `meta_title`, `meta_description`, `meta_keywords`, `h1_tag`, `h2_tag`, `h3_tag`, `image_alt_1`, `image_alt_2`, `image_alt_3`, `image_alt_4`, `image_alt_5`, `robots`, `revisit_after`, `og_local`, `og_type`, `og_image`, `og_tag`, `og_title`, `og_url`, `og_description`, `og_site_name`, `author`, `canonical`, `geo_region`, `geo_place_name`, `geo_position`, `icbm`, `subject`, `owner`, `coverage`, `language`, `distribution`, `country`, `geography`, `cache_control`, `instagram`, `twitter_description`, `facebook`, `twitter_site`, `youtube`, `status`, `is_deleted`, `addedOn`) VALUES
(1, 'Test', 'Test Category', 'Slug Title', 'test', 'tets', 'brand1.png1777667237.png', 'brand3.png1777667237.png', 'Meta Title', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 1, '0', '2026-05-02 01:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locations`
--

CREATE TABLE `tbl_locations` (
  `id` int(11) NOT NULL,
  `location_name` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_slug` varchar(255) DEFAULT NULL,
  `location_slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `h1_tag` varchar(255) DEFAULT NULL,
  `h2_tag` varchar(255) DEFAULT NULL,
  `h3_tag` varchar(255) DEFAULT NULL,
  `image_alt_1` varchar(255) DEFAULT NULL,
  `image_alt_2` varchar(255) DEFAULT NULL,
  `image_alt_3` varchar(255) DEFAULT NULL,
  `image_alt_4` varchar(255) DEFAULT NULL,
  `image_alt_5` varchar(255) DEFAULT NULL,
  `robots` varchar(50) DEFAULT NULL,
  `revisit_after` varchar(50) DEFAULT NULL,
  `og_local` varchar(255) DEFAULT NULL,
  `og_type` varchar(100) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `og_tag` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_url` varchar(255) DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_site_name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `geo_region` varchar(100) DEFAULT NULL,
  `geo_place_name` varchar(255) DEFAULT NULL,
  `geo_position` varchar(100) DEFAULT NULL,
  `icbm` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `is_deleted` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not Deleted'', ''1''=>''Deleted''',
  `addedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_locations`
--

INSERT INTO `tbl_locations` (`id`, `location_name`, `page_title`, `page_slug`, `location_slug`, `description`, `image`, `banner_image`, `meta_title`, `meta_description`, `meta_keywords`, `h1_tag`, `h2_tag`, `h3_tag`, `image_alt_1`, `image_alt_2`, `image_alt_3`, `image_alt_4`, `image_alt_5`, `robots`, `revisit_after`, `og_local`, `og_type`, `og_image`, `og_tag`, `og_title`, `og_url`, `og_description`, `og_site_name`, `author`, `canonical`, `geo_region`, `geo_place_name`, `geo_position`, `icbm`, `status`, `is_deleted`, `addedOn`) VALUES
(1, 'London1', NULL, NULL, 'london1', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '0', '2026-05-02 00:52:36'),
(2, 'London', 'London', 'London', 'london', 'London Test', 'brand2.png1777664329.png', 'brand5.png1777664329.png', 'Meta Title', 'Meta Description', 'Meta Keywords', 'H1 Tag', 'H2 Tag', 'H3 Tag', 'Image Alt-1 Tag', 'Image Alt-2 Tag', 'Image Alt-3 Tag', 'Image Alt-4 Tag', 'Image Alt-5 Tag', 'Robots', 'Revisit After', 'Og Locale', 'Og Type', 'Og Image', 'Og Tag', 'Og Title', 'Og Url', 'Og Description', 'Og Site Name', 'Author', 'Canonical', 'Geo Region', 'Geo Place Name', 'Geo Position', 'ICBM', 1, '0', '2026-05-02 01:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_no` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=>''Processing'', 1=>''Complete'', 2=>''Cancel''',
  `pay_amount` double(9,2) NOT NULL,
  `shipping_charge` double(9,2) NOT NULL,
  `total_amount` float(9,2) DEFAULT NULL,
  `payment_method` enum('1','2','3','4') DEFAULT NULL COMMENT '''1''=>''Check Payment'',''2''=>''Cash On Delivery'',''3''=>''Paypal'',''4''=>''Direct Bank Transfer''',
  `billing_address_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `addedOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `user_id`, `transaction_no`, `status`, `pay_amount`, `shipping_charge`, `total_amount`, `payment_method`, `billing_address_id`, `comment`, `addedOn`, `updatedOn`) VALUES
(1, 1, 'KE5QSOA7PT', 0, 0.00, 0.00, 17.11, '2', 1, '', '2020-03-04 01:10:11', '2020-03-04 01:10:11'),
(2, 2, 'MOOAK7J804', 0, 0.00, 0.00, 71.04, '2', 2, '', '2020-03-04 09:06:06', '2020-03-04 09:06:06'),
(3, 2, '4ZVD0Z4AIY', 0, 0.00, 0.00, 51.33, '2', 2, '', '2020-03-05 04:27:29', '2020-03-05 04:27:29'),
(4, 2, 'C9LNEWPM2R', 0, 0.00, 0.00, 17.70, '2', 3, '', '2020-03-05 05:20:22', '2020-03-05 05:20:22'),
(5, 3, '94JO5DK8W9', 0, 0.00, 0.00, 0.59, '2', 4, '', '2020-03-06 11:10:08', '2020-03-06 11:10:08'),
(6, 2, 'O9NWZRSNX6', 0, 0.00, 0.00, 60.18, '2', 2, '', '2020-03-08 05:20:46', '2020-03-08 05:20:46'),
(7, 3, '9AFCDKB45A', 0, 53.99, 10.00, 63.99, '2', 4, '', '2020-03-09 04:01:35', '2020-03-09 04:01:35'),
(8, 2, 'JAC696X8U2', 0, 55.46, 10.00, 65.46, '2', 2, '', '2020-03-10 05:20:51', '2020-03-10 05:20:51'),
(9, 2, 'BNMA3B5YM0', 0, 31.61, 0.00, 31.61, '4', 2, '', '2020-03-10 05:28:12', '2020-03-10 05:28:12'),
(10, 2, 'YR6FE9B0C2', 0, 132.48, 10.00, 142.48, '4', 2, '', '2020-03-11 09:25:54', '2020-03-11 09:25:54'),
(11, 2, 'EBY83ULEH5', 0, 10.03, 0.00, 10.03, '2', 2, '', '2020-03-11 09:32:25', '2020-03-11 09:32:25'),
(12, 2, 'T0E5UYE5PS', 0, 55.40, 10.00, 65.40, '2', 3, '', '2020-03-12 04:37:15', '2020-03-12 04:37:15'),
(13, 2, 'HUXMWUD5X4', 0, 15.93, 0.00, 15.93, '2', 2, '', '2020-03-13 04:48:01', '2020-03-13 04:48:01'),
(14, 2, 'OLLOX991FO', 0, 73.12, 10.00, 83.12, '2', 2, '', '2020-03-13 04:53:11', '2020-03-13 04:53:11'),
(15, 2, 'TX8XDB2X3P', 0, 140.11, 0.00, 140.11, '2', 2, '', '2020-03-13 05:05:58', '2020-03-13 05:05:58'),
(16, 5, 'JF3BITX282', 0, 7.12, 10.00, 17.12, '2', 7, '', '2020-03-13 05:53:58', '2020-03-13 05:53:58'),
(17, 2, '43QDD8NJ84', 0, 14.16, 10.00, 24.16, '4', 2, '', '2020-03-14 02:59:02', '2020-03-14 02:59:02'),
(18, 2, '8CSO57BDGO', 0, 67.62, 0.00, 67.62, '2', 2, '', '2020-03-15 08:42:03', '2020-03-15 08:42:03'),
(19, 2, '9DTFUH1141', 0, 50.37, 0.00, 50.37, '2', 2, '', '2020-03-15 08:58:38', '2020-03-15 08:58:38'),
(20, 2, 'PMKH8QMQCT', 0, 8.97, 10.00, 18.97, '2', 2, '', '2020-03-16 11:30:02', '2020-03-16 11:30:02'),
(21, 5, '2FI18NFRSD', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 12:23:21', '2020-03-17 12:23:21'),
(22, 5, 'CMO79HKTDF', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 01:13:35', '2020-03-17 01:13:35'),
(23, 5, '01IH672QYN', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 01:15:18', '2020-03-17 01:15:18'),
(24, 5, 'FI531J82P4', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 01:17:00', '2020-03-17 01:17:00'),
(25, 5, 'GETURN8J1R', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 01:19:30', '2020-03-17 01:19:30'),
(26, 5, '9PMUSALLWG', 0, 0.69, 10.00, 10.69, '2', 7, '', '2020-03-17 10:42:52', '2020-03-17 10:42:52'),
(27, 5, 'DKOO19OLFM', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 10:45:15', '2020-03-17 10:45:15'),
(28, 5, 'L5Q1ZXH94G', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:03:52', '2020-03-17 11:03:52'),
(29, 5, '71BRHNOYST', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:13:03', '2020-03-17 11:13:03'),
(30, 5, 'QFF0R8OIXO', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:14:21', '2020-03-17 11:14:21'),
(31, 5, 'Y7VOX5T41L', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:16:06', '2020-03-17 11:16:06'),
(32, 5, 'QTNQRHD6A0', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:16:47', '2020-03-17 11:16:47'),
(33, 5, 'FP8ICMA38M', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:17:59', '2020-03-17 11:17:59'),
(34, 5, 'H7BVEBQ0MV', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:19:29', '2020-03-17 11:19:29'),
(35, 5, 'PJY6QX1HRO', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:21:15', '2020-03-17 11:21:15'),
(36, 5, '9AALFNVSBI', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:23:07', '2020-03-17 11:23:07'),
(37, 5, 'HAZ91ED4G9', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:24:44', '2020-03-17 11:24:44'),
(38, 5, 'IWEIRGBMSN', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:25:57', '2020-03-17 11:25:57'),
(39, 5, '29O4LF3CNS', 0, 1.09, 10.00, 11.09, '2', 7, '', '2020-03-17 11:32:15', '2020-03-17 11:32:15'),
(40, 5, 'T5LND9WHOJ', 0, 0.69, 10.00, 10.69, '2', 7, '', '2020-03-17 11:33:24', '2020-03-17 11:33:24'),
(41, 5, 'OS8U2H9KOB', 0, 0.69, 10.00, 10.69, '2', 7, '', '2020-03-17 11:35:37', '2020-03-17 11:35:37'),
(42, 5, '1QLHA7LDV8', 0, 0.69, 10.00, 10.69, '2', 7, '', '2020-03-17 11:38:04', '2020-03-17 11:38:04'),
(43, 5, 'MIAVQ8G1YP', 0, 3.27, 10.00, 13.27, '2', 7, '', '2020-03-17 11:39:49', '2020-03-17 11:39:49'),
(44, 5, 'ZI07WAL4XA', 0, 3.16, 10.00, 13.16, '2', 7, '', '2020-03-17 11:48:03', '2020-03-17 11:48:03'),
(45, 5, 'XC7YJYD3IX', 0, 3.56, 10.00, 13.56, '2', 7, '', '2020-03-17 11:57:36', '2020-03-17 11:57:36'),
(46, 5, 'JI8KM9GFIT', 0, 0.69, 10.00, 10.69, '2', 7, '', '2020-03-18 12:08:14', '2020-03-18 12:08:14'),
(47, 2, '9TQBTAK4D1', 0, 52.06, 0.00, 52.06, '4', 2, '', '2020-03-22 06:52:29', '2020-03-22 06:52:29'),
(48, 2, '3NKG8GZSLB', 0, 29.67, 10.00, 39.67, '2', 2, '', '2020-03-22 07:06:52', '2020-03-22 07:06:52'),
(49, 2, 'WTU2GK1YWS', 0, 67.61, 0.00, 67.61, '4', 2, '', '2020-03-22 08:39:54', '2020-03-22 08:39:54'),
(50, 5, '3WVRQNIKMC', 0, 14.87, 10.00, 24.87, '2', 7, '', '2020-03-23 12:19:44', '2020-03-23 12:19:44'),
(51, 5, '1375YU7BDG', 0, 3.56, 10.00, 13.56, '4', 7, '', '2020-03-23 12:44:10', '2020-03-23 12:44:10'),
(52, 5, '183WC3KI6P', 0, 39.73, 10.00, 49.73, '2', 7, '', '2020-07-16 04:17:40', '2020-07-16 04:17:40'),
(53, 10, 'JZ3WKY9DOR', 0, 37.28, 10.00, 47.28, '2', 13, '', '2020-08-13 03:42:35', '2020-08-13 03:42:35'),
(54, 10, 'J2CRWTPWR6', 0, 5.52, 10.00, 15.52, '2', 13, '', '2020-08-13 04:04:39', '2020-08-13 04:04:39'),
(55, 5, '49FOJUJ8PF', 0, 0.69, 10.00, 10.69, '2', 7, '', '2020-08-13 05:39:27', '2020-08-13 05:39:27'),
(56, 12, 'FY5U367YNT', 0, 1.09, 10.00, 11.09, '2', 15, '', '2020-09-11 12:45:21', '2020-09-11 12:45:21'),
(57, 12, 'ZF405VJC79', 0, 0.69, 10.00, 10.69, '2', 15, '', '2020-09-11 01:28:10', '2020-09-11 01:28:10'),
(58, 13, 'D0GJPM5GSQ', 0, 3.27, 10.00, 13.27, '2', 16, '', '2020-10-14 05:31:47', '2020-10-14 05:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` float(9,2) NOT NULL,
  `addedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`id`, `sub_cat_id`, `product_id`, `order_id`, `user_id`, `quantity`, `amount`, `addedOn`) VALUES
(1, 1, 19, 1, 1, 6, 3.54, '2020-03-04 01:10:11'),
(2, 2, 11, 2, 2, 9, 8.01, '2020-03-04 09:06:06'),
(3, 1, 20, 3, 2, 16, 9.44, '2020-03-05 04:27:29'),
(4, 1, 16, 4, 2, 12, 7.08, '2020-03-05 05:20:22'),
(5, 1, 18, 5, 3, 1, 0.59, '2020-03-06 11:10:08'),
(6, 1, 16, 6, 2, 30, 17.70, '2020-03-08 05:20:46'),
(7, 2, 14, 7, 3, 9, 8.01, '2020-03-09 04:01:35'),
(8, 2, 13, 7, 3, 51, 45.39, '2020-03-09 04:01:35'),
(9, 1, 20, 7, 3, 1, 0.59, '2020-03-09 04:01:35'),
(10, 1, 17, 8, 2, 17, 10.03, '2020-03-10 05:20:51'),
(11, 1, 16, 8, 2, 16, 9.44, '2020-03-10 05:20:51'),
(12, 1, 20, 8, 2, 8, 4.72, '2020-03-10 05:20:51'),
(13, 1, 19, 8, 2, 9, 5.31, '2020-03-10 05:20:51'),
(14, 1, 18, 8, 2, 10, 5.90, '2020-03-10 05:20:51'),
(15, 1, 24, 8, 2, 10, 5.90, '2020-03-10 05:20:51'),
(16, 1, 21, 8, 2, 16, 9.44, '2020-03-10 05:20:51'),
(17, 1, 23, 8, 2, 8, 4.72, '2020-03-10 05:20:51'),
(18, 2, 10, 9, 2, 4, 4.36, '2020-03-10 05:28:12'),
(19, 2, 13, 9, 2, 11, 11.99, '2020-03-10 05:28:12'),
(20, 2, 14, 9, 2, 3, 3.27, '2020-03-10 05:28:12'),
(21, 2, 15, 9, 2, 11, 11.99, '2020-03-10 05:28:12'),
(22, 1, 17, 10, 2, 19, 13.11, '2020-03-11 09:25:54'),
(23, 1, 20, 10, 2, 18, 12.42, '2020-03-11 09:25:54'),
(24, 1, 19, 10, 2, 20, 13.80, '2020-03-11 09:25:54'),
(25, 1, 24, 10, 2, 17, 11.73, '2020-03-11 09:25:54'),
(26, 1, 16, 10, 2, 27, 18.63, '2020-03-11 09:25:54'),
(27, 1, 18, 10, 2, 23, 15.87, '2020-03-11 09:25:54'),
(28, 1, 21, 10, 2, 41, 28.29, '2020-03-11 09:25:54'),
(29, 1, 23, 10, 2, 27, 18.63, '2020-03-11 09:25:54'),
(30, 1, 18, 11, 2, 17, 10.03, '2020-03-11 09:32:25'),
(31, 1, 23, 12, 2, 8, 4.72, '2020-03-12 04:37:15'),
(32, 2, 12, 12, 2, 47, 41.83, '2020-03-12 04:37:15'),
(33, 1, 21, 12, 2, 15, 8.85, '2020-03-12 04:37:15'),
(34, 1, 19, 13, 2, 8, 4.72, '2020-03-13 04:48:01'),
(35, 1, 18, 13, 2, 6, 3.54, '2020-03-13 04:48:01'),
(36, 1, 21, 13, 2, 8, 4.72, '2020-03-13 04:48:01'),
(37, 1, 23, 13, 2, 5, 2.95, '2020-03-13 04:48:01'),
(38, 2, 11, 14, 2, 14, 12.46, '2020-03-13 04:53:11'),
(39, 2, 10, 14, 2, 8, 7.12, '2020-03-13 04:53:11'),
(40, 2, 15, 14, 2, 11, 9.79, '2020-03-13 04:53:12'),
(41, 2, 14, 14, 2, 10, 8.90, '2020-03-13 04:53:12'),
(42, 2, 13, 14, 2, 8, 7.12, '2020-03-13 04:53:12'),
(43, 1, 19, 14, 2, 17, 10.03, '2020-03-13 04:53:12'),
(44, 1, 18, 14, 2, 7, 4.13, '2020-03-13 04:53:12'),
(45, 1, 24, 14, 2, 9, 5.31, '2020-03-13 04:53:12'),
(46, 1, 23, 14, 2, 7, 4.13, '2020-03-13 04:53:12'),
(47, 1, 21, 14, 2, 7, 4.13, '2020-03-13 04:53:12'),
(48, 2, 1, 15, 2, 9, 4.50, '2020-03-13 05:05:58'),
(49, 2, 2, 15, 2, 9, 4.95, '2020-03-13 05:05:58'),
(50, 2, 5, 15, 2, 9, 4.95, '2020-03-13 05:05:58'),
(51, 2, 4, 15, 2, 9, 4.95, '2020-03-13 05:05:58'),
(52, 2, 8, 15, 2, 8, 4.40, '2020-03-13 05:05:58'),
(53, 2, 7, 15, 2, 9, 4.95, '2020-03-13 05:05:58'),
(54, 2, 12, 15, 2, 13, 11.57, '2020-03-13 05:05:58'),
(55, 2, 11, 15, 2, 10, 8.90, '2020-03-13 05:05:58'),
(56, 2, 10, 15, 2, 8, 7.12, '2020-03-13 05:05:58'),
(57, 2, 15, 15, 2, 9, 8.01, '2020-03-13 05:05:58'),
(58, 2, 13, 15, 2, 11, 9.79, '2020-03-13 05:05:58'),
(59, 2, 14, 15, 2, 9, 8.01, '2020-03-13 05:05:58'),
(60, 1, 17, 15, 2, 9, 5.31, '2020-03-13 05:05:58'),
(61, 1, 16, 15, 2, 8, 4.72, '2020-03-13 05:05:58'),
(62, 1, 20, 15, 2, 6, 3.54, '2020-03-13 05:05:58'),
(63, 1, 19, 15, 2, 7, 4.13, '2020-03-13 05:05:58'),
(64, 1, 18, 15, 2, 8, 4.72, '2020-03-13 05:05:58'),
(65, 1, 24, 15, 2, 8, 4.72, '2020-03-13 05:05:58'),
(66, 1, 23, 15, 2, 6, 3.54, '2020-03-13 05:05:58'),
(67, 1, 21, 15, 2, 7, 4.13, '2020-03-13 05:05:58'),
(68, 2, 13, 16, 5, 4, 3.56, '2020-03-13 05:53:58'),
(69, 1, 16, 16, 5, 4, 2.36, '2020-03-13 05:53:58'),
(70, 1, 18, 17, 2, 8, 4.72, '2020-03-14 02:59:02'),
(71, 1, 21, 17, 2, 8, 4.72, '2020-03-14 02:59:02'),
(72, 1, 23, 17, 2, 8, 4.72, '2020-03-14 02:59:02'),
(73, 1, 17, 18, 2, 17, 11.73, '2020-03-15 08:42:03'),
(74, 1, 16, 18, 2, 7, 4.83, '2020-03-15 08:42:03'),
(75, 1, 19, 18, 2, 8, 5.52, '2020-03-15 08:42:03'),
(76, 1, 18, 18, 2, 23, 15.87, '2020-03-15 08:42:03'),
(77, 1, 24, 18, 2, 20, 13.80, '2020-03-15 08:42:03'),
(78, 1, 23, 18, 2, 8, 5.52, '2020-03-15 08:42:03'),
(79, 1, 21, 18, 2, 15, 10.35, '2020-03-15 08:42:03'),
(80, 1, 21, 19, 2, 9, 6.21, '2020-03-15 08:58:38'),
(81, 1, 20, 19, 2, 9, 6.21, '2020-03-15 08:58:38'),
(82, 1, 17, 19, 2, 8, 5.52, '2020-03-15 08:58:38'),
(83, 1, 24, 19, 2, 9, 6.21, '2020-03-15 08:58:38'),
(84, 1, 16, 19, 2, 7, 4.83, '2020-03-15 08:58:38'),
(85, 1, 19, 19, 2, 16, 11.04, '2020-03-15 08:58:38'),
(86, 1, 23, 19, 2, 8, 5.52, '2020-03-15 08:58:38'),
(87, 1, 18, 19, 2, 7, 4.83, '2020-03-15 08:58:38'),
(88, 1, 16, 20, 2, 7, 4.83, '2020-03-16 11:30:02'),
(89, 1, 23, 20, 2, 6, 4.14, '2020-03-16 11:30:02'),
(90, 2, 14, 21, 5, 1, 1.09, '2020-03-17 12:23:21'),
(91, 2, 14, 22, 5, 1, 1.09, '2020-03-17 01:13:35'),
(92, 2, 13, 23, 5, 1, 1.09, '2020-03-17 01:15:18'),
(93, 2, 13, 24, 5, 1, 1.09, '2020-03-17 01:17:00'),
(94, 2, 13, 25, 5, 1, 1.09, '2020-03-17 01:19:30'),
(95, 1, 20, 26, 5, 1, 0.69, '2020-03-17 10:42:52'),
(96, 2, 13, 27, 5, 1, 1.09, '2020-03-17 10:45:15'),
(97, 2, 13, 28, 5, 1, 1.09, '2020-03-17 11:03:52'),
(98, 2, 13, 29, 5, 1, 1.09, '2020-03-17 11:13:03'),
(99, 2, 13, 30, 5, 1, 1.09, '2020-03-17 11:14:21'),
(100, 2, 13, 31, 5, 1, 1.09, '2020-03-17 11:16:06'),
(101, 2, 13, 32, 5, 1, 1.09, '2020-03-17 11:16:47'),
(102, 2, 13, 33, 5, 1, 1.09, '2020-03-17 11:17:59'),
(103, 2, 13, 34, 5, 1, 1.09, '2020-03-17 11:19:29'),
(104, 2, 13, 35, 5, 1, 1.09, '2020-03-17 11:21:15'),
(105, 2, 13, 36, 5, 1, 1.09, '2020-03-17 11:23:07'),
(106, 2, 13, 37, 5, 1, 1.09, '2020-03-17 11:24:44'),
(107, 2, 11, 38, 5, 1, 1.09, '2020-03-17 11:25:57'),
(108, 2, 10, 39, 5, 1, 1.09, '2020-03-17 11:32:15'),
(109, 1, 21, 40, 5, 1, 0.69, '2020-03-17 11:33:24'),
(110, 1, 24, 41, 5, 1, 0.69, '2020-03-17 11:35:37'),
(111, 1, 21, 42, 5, 1, 0.69, '2020-03-17 11:38:04'),
(112, 2, 14, 43, 5, 2, 2.18, '2020-03-17 11:39:49'),
(113, 2, 13, 43, 5, 1, 1.09, '2020-03-17 11:39:49'),
(114, 1, 19, 44, 5, 1, 0.69, '2020-03-17 11:48:03'),
(115, 1, 18, 44, 5, 2, 1.38, '2020-03-17 11:48:03'),
(116, 2, 10, 44, 5, 1, 1.09, '2020-03-17 11:48:03'),
(117, 1, 23, 45, 5, 2, 1.38, '2020-03-17 11:57:36'),
(118, 2, 15, 45, 5, 1, 1.09, '2020-03-17 11:57:36'),
(119, 2, 13, 45, 5, 1, 1.09, '2020-03-17 11:57:36'),
(120, 1, 16, 46, 5, 1, 0.69, '2020-03-18 12:08:14'),
(121, 2, 11, 47, 2, 6, 5.34, '2020-03-22 06:52:29'),
(122, 2, 12, 47, 2, 4, 3.56, '2020-03-22 06:52:29'),
(123, 2, 15, 47, 2, 3, 2.67, '2020-03-22 06:52:29'),
(124, 2, 14, 47, 2, 6, 5.34, '2020-03-22 06:52:29'),
(125, 2, 13, 47, 2, 9, 8.01, '2020-03-22 06:52:29'),
(126, 1, 19, 47, 2, 10, 5.90, '2020-03-22 06:52:29'),
(127, 1, 18, 47, 2, 14, 8.26, '2020-03-22 06:52:29'),
(128, 1, 24, 47, 2, 7, 4.13, '2020-03-22 06:52:29'),
(129, 1, 21, 47, 2, 8, 4.72, '2020-03-22 06:52:29'),
(130, 1, 23, 47, 2, 7, 4.13, '2020-03-22 06:52:29'),
(131, 1, 19, 48, 2, 4, 2.76, '2020-03-22 07:06:52'),
(132, 1, 20, 48, 2, 4, 2.76, '2020-03-22 07:06:52'),
(133, 1, 17, 48, 2, 6, 4.14, '2020-03-22 07:06:52'),
(134, 1, 16, 48, 2, 5, 3.45, '2020-03-22 07:06:52'),
(135, 1, 18, 48, 2, 4, 2.76, '2020-03-22 07:06:52'),
(136, 1, 24, 48, 2, 7, 4.83, '2020-03-22 07:06:52'),
(137, 1, 23, 48, 2, 7, 4.83, '2020-03-22 07:06:52'),
(138, 1, 21, 48, 2, 6, 4.14, '2020-03-22 07:06:52'),
(139, 2, 12, 49, 2, 7, 6.23, '2020-03-22 08:39:54'),
(140, 2, 11, 49, 2, 6, 5.34, '2020-03-22 08:39:54'),
(141, 2, 15, 49, 2, 7, 6.23, '2020-03-22 08:39:54'),
(142, 2, 10, 49, 2, 5, 4.45, '2020-03-22 08:39:54'),
(143, 2, 9, 49, 2, 7, 3.85, '2020-03-22 08:39:54'),
(144, 2, 7, 49, 2, 5, 2.75, '2020-03-22 08:39:54'),
(145, 2, 8, 49, 2, 6, 3.30, '2020-03-22 08:39:54'),
(146, 2, 14, 49, 2, 6, 5.34, '2020-03-22 08:39:54'),
(147, 2, 13, 49, 2, 6, 5.34, '2020-03-22 08:39:54'),
(148, 1, 17, 49, 2, 5, 2.95, '2020-03-22 08:39:54'),
(149, 1, 16, 49, 2, 6, 3.54, '2020-03-22 08:39:54'),
(150, 1, 19, 49, 2, 6, 3.54, '2020-03-22 08:39:54'),
(151, 1, 18, 49, 2, 5, 2.95, '2020-03-22 08:39:54'),
(152, 1, 24, 49, 2, 7, 4.13, '2020-03-22 08:39:54'),
(153, 1, 23, 49, 2, 6, 3.54, '2020-03-22 08:39:54'),
(154, 1, 21, 49, 2, 7, 4.13, '2020-03-22 08:39:54'),
(155, 2, 4, 50, 5, 1, 0.65, '2020-03-23 12:19:44'),
(156, 2, 5, 50, 5, 1, 0.65, '2020-03-23 12:19:44'),
(157, 2, 6, 50, 5, 1, 0.65, '2020-03-23 12:19:44'),
(158, 2, 7, 50, 5, 1, 0.65, '2020-03-23 12:19:44'),
(159, 2, 8, 50, 5, 1, 0.65, '2020-03-23 12:19:44'),
(160, 2, 9, 50, 5, 1, 0.65, '2020-03-23 12:19:44'),
(161, 2, 10, 50, 5, 1, 1.09, '2020-03-23 12:19:44'),
(162, 2, 11, 50, 5, 1, 1.09, '2020-03-23 12:19:44'),
(163, 2, 12, 50, 5, 1, 1.09, '2020-03-23 12:19:44'),
(164, 2, 13, 50, 5, 1, 1.09, '2020-03-23 12:19:44'),
(165, 2, 15, 50, 5, 1, 1.09, '2020-03-23 12:19:44'),
(166, 1, 17, 50, 5, 1, 0.69, '2020-03-23 12:19:44'),
(167, 1, 16, 50, 5, 1, 0.69, '2020-03-23 12:19:44'),
(168, 1, 20, 50, 5, 1, 0.69, '2020-03-23 12:19:44'),
(169, 1, 19, 50, 5, 1, 0.69, '2020-03-23 12:19:44'),
(170, 1, 18, 50, 5, 1, 0.69, '2020-03-23 12:19:44'),
(171, 1, 21, 50, 5, 1, 0.69, '2020-03-23 12:19:44'),
(172, 1, 23, 50, 5, 1, 0.69, '2020-03-23 12:19:44'),
(173, 1, 24, 50, 5, 1, 0.69, '2020-03-23 12:19:44'),
(174, 2, 12, 51, 5, 1, 0.89, '2020-03-23 12:44:10'),
(175, 2, 13, 51, 5, 1, 0.89, '2020-03-23 12:44:10'),
(176, 2, 14, 51, 5, 1, 0.89, '2020-03-23 12:44:10'),
(177, 2, 15, 51, 5, 1, 0.89, '2020-03-23 12:44:10'),
(178, 1, 20, 52, 5, 11, 7.59, '2020-07-16 04:17:40'),
(179, 1, 19, 52, 5, 5, 3.45, '2020-07-16 04:17:40'),
(180, 1, 18, 52, 5, 6, 4.14, '2020-07-16 04:17:40'),
(181, 1, 24, 52, 5, 5, 3.45, '2020-07-16 04:17:40'),
(182, 1, 23, 52, 5, 13, 8.97, '2020-07-16 04:17:40'),
(183, 1, 21, 52, 5, 15, 10.35, '2020-07-16 04:17:40'),
(184, 1, 16, 52, 5, 1, 0.69, '2020-07-16 04:17:40'),
(185, 2, 12, 52, 5, 1, 1.09, '2020-07-16 04:17:40'),
(186, 1, 18, 53, 10, 5, 3.45, '2020-08-13 03:42:35'),
(187, 1, 17, 53, 10, 5, 3.45, '2020-08-13 03:42:35'),
(188, 1, 16, 53, 10, 4, 2.76, '2020-08-13 03:42:35'),
(189, 1, 19, 53, 10, 6, 4.14, '2020-08-13 03:42:35'),
(190, 1, 20, 53, 10, 4, 2.76, '2020-08-13 03:42:35'),
(191, 1, 21, 53, 10, 5, 3.45, '2020-08-13 03:42:35'),
(192, 1, 24, 53, 10, 5, 3.45, '2020-08-13 03:42:35'),
(193, 1, 23, 53, 10, 4, 2.76, '2020-08-13 03:42:35'),
(194, 1, 22, 53, 10, 5, 3.45, '2020-08-13 03:42:35'),
(195, 2, 12, 53, 10, 4, 4.36, '2020-08-13 03:42:35'),
(196, 2, 9, 53, 10, 2, 1.30, '2020-08-13 03:42:35'),
(197, 2, 7, 53, 10, 3, 1.95, '2020-08-13 03:42:35'),
(198, 1, 23, 54, 10, 4, 2.76, '2020-08-13 04:04:39'),
(199, 1, 18, 54, 10, 4, 2.76, '2020-08-13 04:04:39'),
(200, 1, 18, 55, 5, 1, 0.69, '2020-08-13 05:39:27'),
(201, 2, 14, 56, 12, 1, 1.09, '2020-09-11 12:45:21'),
(202, 1, 23, 57, 12, 1, 0.69, '2020-09-11 01:28:10'),
(203, 2, 14, 58, 13, 1, 1.09, '2020-10-14 05:31:47'),
(204, 2, 12, 58, 13, 2, 2.18, '2020-10-14 05:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `image_5` text NOT NULL,
  `barcode_image` text NOT NULL,
  `old_price` double(9,2) NOT NULL,
  `price` double(9,2) NOT NULL,
  `wholesale_price` double(9,2) NOT NULL,
  `retailer_price` double(9,2) NOT NULL,
  `check_cor` varchar(1) NOT NULL DEFAULT '0',
  `product_margin_price` double(9,2) NOT NULL,
  `product_margin_percent` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sell_quantity` int(11) NOT NULL,
  `product_life` varchar(255) NOT NULL,
  `product_life_end` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `long_description` text NOT NULL,
  `special_offer` text NOT NULL,
  `meta_heading` longtext NOT NULL,
  `meta_title` text NOT NULL,
  `meta_description` text NOT NULL,
  `og_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `h1_tag` text NOT NULL,
  `h2_tag` text NOT NULL,
  `h3_tag` text NOT NULL,
  `image_alt_1` varchar(255) NOT NULL,
  `image_alt_2` varchar(255) NOT NULL,
  `image_alt_3` varchar(255) NOT NULL,
  `image_alt_4` varchar(255) NOT NULL,
  `image_alt_5` varchar(255) NOT NULL,
  `robots` varchar(255) NOT NULL,
  `revisit_after` varchar(255) NOT NULL,
  `og_local` varchar(255) NOT NULL,
  `og_type` varchar(255) NOT NULL,
  `og_image` varchar(255) NOT NULL,
  `og_tag` varchar(255) NOT NULL,
  `og_title` varchar(255) NOT NULL,
  `og_url` text NOT NULL,
  `og_site_name` varchar(255) NOT NULL,
  `canonical` varchar(255) NOT NULL,
  `geo_region` varchar(255) NOT NULL,
  `geo_place_name` varchar(255) NOT NULL,
  `geo_position` varchar(255) NOT NULL,
  `icbm` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `today_deal` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not Today Deal'', ''1''=>''Today Deal''',
  `new_product` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not New Product'', ''1''=>''New Product''',
  `best_seller` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not Best Seller'', ''1''=>''Best Seller''',
  `status` varchar(1) NOT NULL DEFAULT '1' COMMENT '''0''=>''Inactive'', ''1''=>''Active''',
  `addedOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL,
  `is_deleted` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not Deleted'', ''1''=>''Deleted'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `sub_cat_id`, `category_id`, `product_code`, `product_name`, `page_title`, `page_slug`, `product_slug`, `image`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `barcode_image`, `old_price`, `price`, `wholesale_price`, `retailer_price`, `check_cor`, `product_margin_price`, `product_margin_percent`, `quantity`, `sell_quantity`, `product_life`, `product_life_end`, `description`, `long_description`, `special_offer`, `meta_heading`, `meta_title`, `meta_description`, `og_description`, `meta_keywords`, `h1_tag`, `h2_tag`, `h3_tag`, `image_alt_1`, `image_alt_2`, `image_alt_3`, `image_alt_4`, `image_alt_5`, `robots`, `revisit_after`, `og_local`, `og_type`, `og_image`, `og_tag`, `og_title`, `og_url`, `og_site_name`, `canonical`, `geo_region`, `geo_place_name`, `geo_position`, `icbm`, `author`, `page_url`, `today_deal`, `new_product`, `best_seller`, `status`, `addedOn`, `updatedOn`, `is_deleted`) VALUES
(26, 6, 5, 'AR001-Baggy', 'Arome-01-Baggy', 'Arome-01-Baggy', 'Arome-01-Baggy', 'Arome-01-Baggy', 'baggy.jpg1777899898.jpg', 'menu_cat.png1778243967.png', '', 'item1.png1778244170.png', 'slide2.png1778244170.png', '', '', 125.00, 140.00, 100.00, 120.00, '0', 0.00, '', 60, 0, '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<ul>\r\n	<li>Simple, Configurable (e.g. size, color, etc.), Bundled and Grouped Products</li>\r\n	<li>Downloadable/Digital Products, Virtual Products</li>\r\n	<li>Inventory Management with Backordered items</li>\r\n	<li>Customer Personalized Products - upload text for embroidery, monogramming, etc.</li>\r\n	<li>Create Store-specific attributes on the fly</li>\r\n	<li>Advanced Pricing Rules and support for Special Prices</li>\r\n	<li>Tax Rates per location, customer group and product type</li>\r\n</ul>\r\n', '', '', 'Meta Title-Baggy', 'Meta Description-Baggy', 'Og Description-Baggy', 'Meta Keywords-Baggy', 'H1 Tag-Baggy', 'H2 Tag-Baggy', 'H3 Tag-Baggy', '', '', '', '', '', 'Robots-Baggy', 'Revisit After-Baggy', 'Og Locale-Baggy', 'Og Type-Baggy', 'Og Image-Baggy', 'Og Tag-Baggy', 'Og Title-Baggy', 'Og Url-Baggy', 'Og Site Name-Baggy', 'Canonical-Baggy', 'Geo Region-Baggy', 'Geo Place Name-Baggy', 'Geo Position-Baggy', 'ICBM-Baggy', 'Author-Baggy', '', '0', '0', '0', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_gallery`
--

CREATE TABLE `tbl_product_gallery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `is_deleted` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not Deleted'', ''1''=>''Deleted''',
  `addedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product_gallery`
--

INSERT INTO `tbl_product_gallery` (`id`, `product_id`, `image`, `status`, `is_deleted`, `addedOn`) VALUES
(1, 1, 'PORK_SAUSAGE_ROLL_VAN.png1582557870.png', '1', '0', '0000-00-00 00:00:00'),
(2, 2, 'ST_CHEESE_ONION_.jpg1582371744.jpg', '1', '0', '0000-00-00 00:00:00'),
(3, 3, '', '1', '0', '0000-00-00 00:00:00'),
(4, 4, 'ST_CHICKEN_MUSHROOM.jpg1582372034.jpg', '1', '0', '0000-00-00 00:00:00'),
(5, 5, 'ST_CHICKEN_BALTI.jpg1582372153.jpg', '1', '0', '0000-00-00 00:00:00'),
(6, 6, 'ST_HAM_AND_CHEESE.jpg1582372241.jpg', '1', '0', '0000-00-00 00:00:00'),
(7, 7, 'SERIOUSLY_TESTY_PIES_TEST_.jpg1582372390.jpg', '1', '0', '0000-00-00 00:00:00'),
(8, 8, 'ST_STEAK_AND_KIDNEY.jpg1582372456.jpg', '1', '0', '0000-00-00 00:00:00'),
(9, 9, '', '1', '0', '0000-00-00 00:00:00'),
(10, 10, 'LST__CHICKEN_TIKAA.jpg1582372610.jpg', '1', '0', '0000-00-00 00:00:00'),
(11, 11, 'LST_CHICKEN_MUSHROOM.jpg1582372677.jpg', '1', '0', '0000-00-00 00:00:00'),
(12, 12, '', '1', '0', '0000-00-00 00:00:00'),
(13, 13, '', '1', '0', '0000-00-00 00:00:00'),
(14, 14, 'LST_PEPPERED_STEAK.jpg1582372996.jpg', '1', '0', '0000-00-00 00:00:00'),
(15, 15, 'BEFF___VEGETABLE_NEW_VAN.png1582560000.png', '1', '0', '0000-00-00 00:00:00'),
(16, 16, 'PET_SAUSAGE_ROLL.png1582560817.png', '1', '0', '0000-00-00 00:00:00'),
(17, 17, 'PETER_GREEN_CHICKEN_TIKKA_SLICE_.jpg1582562589.jpg', '1', '0', '0000-00-00 00:00:00'),
(18, 18, 'CHICKEN___BACON_VAN.png1582560254.png', '1', '0', '0000-00-00 00:00:00'),
(19, 19, 'GREEN_CHEESY_BEANS_AND_SAUSAGE.png1582549772.png', '1', '0', '0000-00-00 00:00:00'),
(20, 20, 'GREEN_HAM___CHEESE.png1582549625.png', '1', '0', '0000-00-00 00:00:00'),
(21, 21, 'GREEN_STEAK.png1582549073.png', '1', '0', '0000-00-00 00:00:00'),
(22, 22, '', '1', '0', '0000-00-00 00:00:00'),
(23, 23, '', '1', '0', '0000-00-00 00:00:00'),
(24, 24, '', '1', '0', '0000-00-00 00:00:00'),
(25, 25, 'joint_care.jpg1607060173.jpg', '1', '0', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_rating`
--

CREATE TABLE `tbl_product_rating` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `addedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_media`
--

CREATE TABLE `tbl_social_media` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `social_link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `addedOn` datetime NOT NULL,
  `is_deleted` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staticpages`
--

CREATE TABLE `tbl_staticpages` (
  `id` int(11) NOT NULL,
  `default_images` varchar(255) DEFAULT NULL,
  `default_thumbnail` varchar(255) DEFAULT NULL,
  `meta_heading` longtext DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `h1_tag` varchar(255) NOT NULL,
  `h2_tag` varchar(255) NOT NULL,
  `h3_tag` varchar(255) NOT NULL,
  `image_alt_1` varchar(255) NOT NULL,
  `image_alt_2` varchar(255) NOT NULL,
  `image_alt_3` varchar(255) NOT NULL,
  `image_alt_4` varchar(255) NOT NULL,
  `image_alt_5` varchar(255) NOT NULL,
  `robots` varchar(255) DEFAULT NULL,
  `revisit_after` varchar(225) DEFAULT NULL,
  `og_local` varchar(255) DEFAULT NULL,
  `og_type` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `og_tag` varchar(255) NOT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_url` text DEFAULT NULL,
  `og_site_name` varchar(255) DEFAULT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `geo_region` varchar(255) DEFAULT NULL,
  `geo_place_name` varchar(255) DEFAULT NULL,
  `geo_position` varchar(255) DEFAULT NULL,
  `icbm` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `identifire` varchar(225) NOT NULL,
  `page_name` varchar(225) NOT NULL,
  `page_url` text NOT NULL,
  `content` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `addedOn` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 - Deleted, 0 - Not Deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_staticpages`
--

INSERT INTO `tbl_staticpages` (`id`, `default_images`, `default_thumbnail`, `meta_heading`, `meta_title`, `meta_description`, `og_description`, `meta_keywords`, `h1_tag`, `h2_tag`, `h3_tag`, `image_alt_1`, `image_alt_2`, `image_alt_3`, `image_alt_4`, `image_alt_5`, `robots`, `revisit_after`, `og_local`, `og_type`, `og_image`, `og_tag`, `og_title`, `og_url`, `og_site_name`, `canonical`, `geo_region`, `geo_place_name`, `geo_position`, `icbm`, `author`, `identifire`, `page_name`, `page_url`, `content`, `status`, `addedOn`, `updated_at`, `is_deleted`) VALUES
(1, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'privacy_policy', 'Privacy Policy', '', '<p>Taraherbal take your privacy very seriously and treat all your personal information as confidential. To find out more scroll below.</p>\r\n\r\n<p id=\"link-your-information\"><strong>Your Information</strong></p>\r\n\r\n<p>We will only use information about you in accordance with this Privacy Policy. By using our site, you consent to such processing.</p>\r\n\r\n<p id=\"link-information-collected\"><strong>Information Collected</strong></p>\r\n\r\n<p>When setting up an account, you will be asked to provide us with your name, billing address and delivery address details, your email address, telephone number and a password. We will also require your credit/debit card details, when you are placing an order.</p>\r\n\r\n<p>We may also collect information about you such as your name, address and contact details where you enter a competition or prize-draw we are operating.</p>\r\n\r\n<p>We may obtain information about your usage of our site to help us develop and improve it further</p>\r\n\r\n<p id=\"link-what-do-we-use-your-information-for\"><strong>What Do We Use Your Information For?</strong></p>\r\n\r\n<p>We use your information for the following purposes:</p>\r\n\r\n<ul>\r\n	<li>To serve website content to you</li>\r\n	<li>To handle orders, deliver products, process payments and refunds and provide statements</li>\r\n	<li>To communicate with you about your orders</li>\r\n	<li>To provide your e-receipt to you</li>\r\n	<li>To update our records and generally maintain your account with us</li>\r\n	<li>If you contact us, we may keep a record of that correspondence and your contact details</li>\r\n	<li>For our statistical or survey purposes to improve our site and our services to you.</li>\r\n	<li>To prevent or detect fraud or abuses of our site and enable third parties to carry out technical, logistical or other functions on our behalf</li>\r\n	<li>To contact you by email, post, or telephone, to ask you for feedback and comments on our services</li>\r\n	<li>If you consent, to notify you by email of Group products, promotions, competitions and special offers that may be of interest to you.</li>\r\n	<li>For our statistical, survey and customer service purposes to improve our site and blog and our services to you and other customers.</li>\r\n</ul>\r\n\r\n<p id=\"link-disclosure-of-your-information\"><strong>Disclosure Of Your Information</strong></p>\r\n\r\n<p>We may disclose your information to members of our Group for the purposes listed above.</p>\r\n\r\n<p><strong>We do not store customer credit card</strong>&nbsp;<strong>details nor do we share customer details with any 3rd parties</strong></p>\r\n\r\n<p>We may disclose your personal information to carefully selected service providers and agents who operate elements of our web site service and process data on our behalf. These may include businesses who provide technology services such as hosting for our servers and email distribution and business partners who provide delivery fulfillment services.</p>\r\n\r\n<p>From time to time we may also provide your information to carefully selected customer service agencies for research and analysis purposes, on our behalf, so that we can monitor and improve the services we provide for you and other customers.</p>\r\n\r\n<p>Where such disclosures are made, this will be under contractual arrangements with us and carried out in accordance with the requirements of the Act.</p>\r\n\r\n<p>We may also use aggregate information and statistics for the purposes of monitoring website usage in order to help us develop the website and our services and may provide such aggregate information to third parties. These statistics will not include information that can be used to identify any individual</p>\r\n\r\n<p>In assessing your request for goods or services, we may use your information for the purposes of the prevention and detection of fraud.</p>\r\n\r\n<p>We may also disclose your personal information to our subsidiaries and affiliated companies and any successors in title to our business.</p>\r\n\r\n<p>We do not hold your credit card details. Financial transactions take place directly and securely with our payment handling provider.</p>\r\n\r\n<p>If you believe your details are incorrect you can amend your details by logging onto your &lsquo;My Account&rsquo; on our site.</p>\r\n\r\n<p id=\"link-third-party-services\"><strong>Third Party Services</strong></p>\r\n\r\n<p>We may from time to time make available through our site certain services provided by third parties. To gain access to these services, you must register with these third parties and deal with them direct. Please note that these websites have their own privacy policies and that we do not accept any responsibility or liability for these policies. Please check these policies before you submit any personal data to these websites.</p>\r\n\r\n<h3><strong>Your rights</strong></h3>\r\n\r\n<p>You can check, supplement and update the information you have provided by accessing your &ldquo;Settings&rdquo; section of your account. You may also close your Taraherbal account by contacting us using the methods provided below.</p>\r\n\r\n<p>If you decide to close your account, we will deactivate it, and remove your personal data. Remember that once your account is closed, you will no longer be able to login, access your personal information. You can however, open a new account at any time.</p>\r\n\r\n<p>We may offer members the option to save information related to method and choice of payment on our Website. If you save such payment details in your account on Taraherbal, you will be able to add, delete or modify that information at any time during which your account remains open in Account Settings.</p>\r\n\r\n<p>You can change your marketing preferences at any time during which your account remains open through the Subscriptions page in your member account.</p>\r\n\r\n<p>In accordance with applicable law, you may have the right of access, the right of rectification, the right to erasure, the right to restrict processing, the right to data portability and the right to object. Please find below more details and information on how and when you can exercise your rights. We will respond to your request within one month, but have the right to extend this period with two months.</p>\r\n\r\n<p>In accordance with applicable law, you may have the following rights with regard to your personal data:</p>\r\n\r\n<ul>\r\n	<li>The right to request access to your personal data. This enables you to receive a copy of the personal data we hold about you and to check that we are lawfully processing it.</li>\r\n	<li>The right to request to correct your personal data if it is inaccurate. You may also supplement any incomplete personal data we have, taking into account the purposes of the processing.</li>\r\n	<li>The right to request deletion of your personal data if:\r\n	<ul>\r\n		<li>your personal data is no longer necessary for the purposes for which we collected or processed them; or</li>\r\n		<li>you withdraw your consent if the processing of your personal data is based on consent and no other legal ground exists; or</li>\r\n		<li>you object to the processing of your personal data and we do not have an overriding legitimate ground for processing; or</li>\r\n		<li>your personal data is unlawfully processed; or</li>\r\n		<li>your personal data has to be deleted for compliance with a legal obligation.</li>\r\n	</ul>\r\n	</li>\r\n	<li>The right to object to the processing of your personal data. We will comply with your request, unless we have a compelling overriding legitimate interest for processing or we need to continue processing your personal data to establish, exercise or defend a legal claim.</li>\r\n	<li>The right to restrict the processing of personal data, if:\r\n	<ul>\r\n		<li>the accuracy of your personal data is contested by you, for the period in which we have to verify the accuracy of the personal data; or</li>\r\n		<li>the processing is unlawful and you oppose the deletion of your personal data and request restriction; or</li>\r\n		<li>we no longer need your personal data for the purposes of processing, but your personal data is required by you for legal claims; or</li>\r\n		<li>you have objected to the processing, for the period in which we have to verify overriding legitimate grounds.</li>\r\n	</ul>\r\n	</li>\r\n	<li>The right to data portability. You may request us to receive the personal data that concern you. You may also request us to send this personal data to a third party, where feasible. You only have this right if it regards personal data you have provided us, the processing is based on consent or necessary for the performance of a contract between you and us, and the processing is done by automated means.</li>\r\n</ul>\r\n\r\n<p>You can exercise several of your rights through the personal information section of your account. To exercise your other rights you can file a request by email to&nbsp;contact@taraherbal.co.uk</p>\r\n\r\n<p>You will not have to pay a fee to access your personal data (or to exercise any of the other rights described in this Privacy Policy). However, we may charge a reasonable fee if your request is clearly unfounded, repetitive or excessive.</p>\r\n\r\n<p>We may need to request specific information from you to help us confirm your identity and ensure your right to access your personal data (or to exercise any of your other rights). This is a security measure to ensure that personal data is not disclosed to any person who has no right to receive it. In an effort to speed up our response, we may also contact you to ask you for further information in relation to your request.</p>\r\n\r\n<h2>Transfers outside of the European Economic Area</h2>\r\n\r\n<p>The information which we collect about you may be transferred outside the European Economic Area. In the event of such transfer, we will ensure the adequate standard of security is in place for example by incorporating the European Commission approved clauses into our agreements with such third parties to ensure the security of your personal data.</p>\r\n', 1, '2019-06-15 11:37:48', '2019-06-15 18:07:48', 0),
(2, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'terms_and_condition', 'Terms & Conditions', '', '<p>&nbsp;</p>\r\n\r\n<h2 style=\"font-style:italic;\">We accept payment via Paypal provided service and with Bank Transfer.</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If you use the Site, purchase a Product or upload any material onto the Site, you are confirming to us that you agree to the then current T&amp;Cs. They are legally binding on us both.</p>\r\n\r\n<p>So, please read them if you like.Contact us if you have any questions about them.</p>\r\n\r\n<p>The T&amp;Cs go hand in hand with some other documents which contain other important information:</p>\r\n\r\n<ul>\r\n	<li>our&nbsp;Privacy Policy, where we tell you what information we collect about you and how we use and disclose it (&ldquo;Privacy Policy&rdquo;);</li>\r\n	<li>our&nbsp;Delivery Policy, where we tell you about delivery options for a Product and any restrictions on where we can deliver or extra charges (&ldquo;Delivery Policy&rdquo;);</li>\r\n</ul>\r\n\r\n<p><strong>How our Contract works</strong></p>\r\n\r\n<p>When we sell a Product to you, just like all purchases, there&rsquo;s a contract in place for that sale. This section of our T&amp;Cs explains how that works.</p>\r\n\r\n<p>Your order via the Site or email for a Product is an offer to buy that Product from us. When we get your order, we will send you an order confirmation email listing each Product you have requested to buy and an estimated delivery date.</p>\r\n\r\n<p>This order confirmation email is acceptance of your offer by us. At that point a contract will be made between us for you to buy, and for us to sell, the Product that you have requested to buy.</p>\r\n\r\n<p>You&rsquo;ll know when we have dispatched a Product, because we will send you an email letting you know.</p>\r\n\r\n<p><strong>Prices and Payments</strong></p>\r\n\r\n<p>The price of any Products will be as quoted on our Site from time to time or by email, except in cases of obvious error. These prices exclude delivery costs, which will be added to the total amount due. See our&nbsp;Delivery Policy&nbsp;for more information on this.</p>\r\n\r\n<p>If we have quoted you prices for products these price can change and we shall notify you in advance. Once prices are changed the previous quotes will no longer be valid.</p>\r\n\r\n<p>Our Site contains a large number of Products and it is always possible that, despite our best efforts, some of the Products listed on our Site may be incorrectly priced. We will normally verify prices as part of our dispatch process so that, where a Product&rsquo;s correct price is less than our stated price, we will charge the lower amount when dispatching the Product to you. If a Product&rsquo;s correct price is higher than the price stated on our Site or quote, we may either contact you and ask you if you would like to proceed with the order at the correct price, or we may contact you to tell you that we have cancelled your order (and you will then need to place a new order if you still wish to buy the Product).</p>\r\n\r\n<p>By placing an order on the Site, you confirm that the payment details provided by you are valid and that when your order is accepted and processed by us, payment will be made in full.</p>\r\n\r\n<p id=\"link-availability-and-delivery-of-products\"><strong>Availability And Delivery Of Products</strong></p>\r\n\r\n<p>Delivery dates are estimated and are not guaranteed. Subject to stock availability, we aim to dispatch a Product ordered before 3.00pm on the same working day.</p>\r\n\r\n<p>We will always try to fulfill orders, but our only responsibility to you where a Product is no longer available, or if we are unable to supply a particular Product for whatever reason, is to make sure we do not charge you for the Product.</p>\r\n\r\n<p>Our standard UK delivery service is free. If you select any other delivery method there will be a delivery charge.</p>\r\n\r\n<p>There may also be some places we cannot deliver to. If we are unable to deliver to your location, you will receive full refund including any shipping charges.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p id=\"link-problems-with-your-order\"><strong>Problems With Your Order</strong></p>\r\n\r\n<p>It is important that each Product&rsquo;s use and care instructions are followed properly.</p>\r\n\r\n<p>It is your responsibility to take reasonable care of the Product you have bought. We are not responsible to you to the extent that the problem with your Product is caused by your incorrect use or care.</p>\r\n\r\n<p>But we also understand that sometimes things don&rsquo;t go according to plan. If there is a problem with your Product, just get in touch as described below and we&rsquo;ll try and help you.</p>\r\n\r\n<h4>&ldquo;I have received a faulty Product&rdquo;</h4>\r\n\r\n<p>If you think the Product you received is faulty, please contact our customer service team. The team will tell you how to proceed. Please include as many details as possible about the fault.</p>\r\n\r\n<h4>&ldquo;I have received an incorrect Product in my order&rdquo;</h4>\r\n\r\n<p>If you have received an incorrect Product in your order, please contact our customer service team. We will then advise on how to proceed with the return. Please include as many details as possible about the incorrect item.</p>\r\n\r\n<h4>&ldquo;A Product is missing from my order&rdquo;</h4>\r\n\r\n<p>Sometimes we don&rsquo;t send everything you&rsquo;ve ordered at the same time, so please check your packing note and despatch emails to see if any of your items will be arriving separately.</p>\r\n\r\n<p>If the packing note states an item should be in your parcel but it is not, please contact our customer service team , who will try to rectify the mistake as quickly as possible.</p>\r\n\r\n<p id=\"link-our-responsibility-to-you\"><strong>Our Responsibility To You</strong></p>\r\n\r\n<p>We have taken every care in the preparation of the material on our Site. However, the material displayed on our Site is provided without any guarantees, conditions or warranties as to its accuracy or suitability for any particular purpose. If you notice a problem, feel free to let us know and we&rsquo;ll see if we can try and fix it.</p>\r\n\r\n<p>If the need arises, we may suspend access to our Site to carry out routine or emergency work. We will not be responsible if for any reason our Site is unavailable. We will not be responsible to you for any errors or omissions, or any technical problems you may experience, or any use you make of the material on the Site, any websites linked to it or any materials posted on it.</p>\r\n\r\n<p>If we are in breach of these T&amp;Cs, we will only be responsible for any losses that you suffer as a result to the extent that they are a foreseeable consequence to both of us at the time you order the relevant Product or the time you otherwise use the Site.</p>\r\n\r\n<p>Our total responsibility to you in relation to an order placed by you for a Product will be limited to the amount paid by you for the Product.</p>\r\n\r\n<p>These limitations and exclusions do not affect your statutory rights and only apply to the extent permitted by applicable law. Nothing in these T&amp;Cs shall limit our liability for personal injury or death caused by our negligence.</p>\r\n\r\n<p>Because we sell Products for personal use only our responsibility to you shall not for any reason include any business losses such as lost data, lost profits, lost sales or business interruption.</p>\r\n\r\n<p id=\"link-viruses-hacking-scraping\"><strong>Viruses, Hacking, Scraping</strong></p>\r\n\r\n<p>You must not misuse our Site by knowingly introducing viruses, Trojans, worms, logic bombs, keystroke loggers, spyware, adware or other material which is malicious or technologically harmful. You must not attempt to gain unauthorized access to our Site, the server on which our Site is stored, or any server, computer or database connected to our Site. You must not attack our Site via a denial-of-service attack or a distributed denial-of service attack.</p>\r\n\r\n<p>By breaching this provision, you may commit a criminal offence under the Computer Misuse Act 1990. We will report any such breach to the relevant law enforcement authorities and we will co-operate with those authorities by disclosing your identity to them. In the event of such a breach, your right to use our Site will cease immediately.</p>\r\n\r\n<p id=\"link-general\"><strong>General</strong></p>\r\n\r\n<h4>Third party services</h4>\r\n\r\n<p>We may from time to time make available through our Site certain services provided by third parties. To gain access to these services, you must register with these third parties and deal with them direct.</p>\r\n\r\n<p>We have no control over the content of those third party sites or the performance of these services. Accordingly, you use these services at your own risk and we accept no responsibility for them or for any loss or damage that may arise from your use of them.</p>\r\n\r\n<h4>Events outside our control</h4>\r\n\r\n<p>We will not be responsible for any failure to perform, or delay in performance of, any of our obligations towards you that is caused by events outside our reasonable control including Acts of God, fire, flood, severe weather, explosion, war, act of terrorism, industrial dispute, or acts of local or central Government or other competent authorities.</p>\r\n\r\n<h4>Severability</h4>\r\n\r\n<p>If any of these terms and conditions is held to be invalid, the remaining terms and conditions shall continue to be valid to the fullest extent permitted by law.</p>\r\n\r\n<h4>Entire agreement</h4>\r\n\r\n<p>These T&amp;Cs contain the whole agreement between us and you relating to the supply of Products and/or your use of our Site. No additional terms or conditions requested or communicated in any way by you will form part of our contract whether accepted or not by an employee of ours.</p>\r\n\r\n<h4>Our right to vary these T&amp;Cs</h4>\r\n\r\n<p>We may revise and amend these T&amp;Cs from time to time. You will be subject to the terms and conditions in force at the time that you order Products from us or otherwise use the Site.</p>\r\n\r\n<h4>Law and jurisdiction</h4>\r\n\r\n<p>These T&amp;Cs are subject to English law. We will try to solve any disagreements quickly and efficiently. If you are not happy with the way we deal with any disagreement and you want to take court proceedings, you must do so in England, Scotland, Wales or Northern Ireland.</p>\r\n\r\n<p id=\"link-your-legal-rights\"><strong>Your Legal Rights</strong></p>\r\n\r\n<p>We are under a legal duty to supply products that comply with the contract for the sale of products between you and us. We want you to be completely happy with your purchase so if your goods are faulty we will refund you or replace them for up to a 30 days from purchase in most cases, just contact our customer service team.</p>\r\n\r\n<p>See below for a summary of your key legal rights in relation to the product. Nothing in our terms will affect your legal rights.</p>\r\n\r\n<p><b>Summary of your key legal rights</b></p>\r\n\r\n<p>The Consumer Rights Act 2015 says goods must be as described, fit for purpose and of satisfactory quality. During the expected life of your product your legal rights entitle you to the following:</p>\r\n\r\n<ul>\r\n	<li>Complaints Policy</li>\r\n</ul>\r\n\r\n<p>If you are not satisfied with your purchase you can cancel the order with in 24 hours.&nbsp;it in accordance with our&nbsp;policy. If you are not happy with the response you receive or anything else about your experience with delivery you can contact our customer services team.</p>\r\n\r\n<p>Once our customer services team have received your complaint we will acknowledge it by email within 24 working hours, so if we receive your complaint at 5pm on a Friday you will receive an acknowledgement by 5pm the following Monday.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2020-01-27 10:03:41', '2020-01-27 16:33:41', 0),
(3, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'popular_product_area', 'Popular Product Area', '', '<div class=\"row justify-content-center text-center\">\r\n<div class=\"col-6\">\r\n<h5>&nbsp;</h5>\r\n</div>\r\n</div>\r\n', 1, '2020-01-27 09:53:19', '2020-01-27 16:23:19', 0),
(4, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'contact_us', 'Contact', '', '<div class=\"col-12 col-md-6\">\r\n<h2>Central Office</h2>\r\n\r\n<p>Get in touch</p>\r\n\r\n<div class=\"contact_details\">\r\n<h5><i class=\"fas fa-map-marker-alt\"></i>New Health Supplies Ltd, Unit 5 Archdale Business Center, Brember Road, Harrow, Ha2 8dj</h5>\r\n\r\n<h5><i class=\"fas fa-mobile-alt\"></i>07939845276</h5>\r\n\r\n<h5><i class=\"fas fa-at\"></i>order@nhsl.online</h5>\r\n</div>\r\n</div>\r\n', 1, '2020-12-04 01:12:18', '2020-12-03 19:42:18', 0),
(5, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'about_us', 'about us', '', '<p>About us &ndash; Online shop supplier began 2018. we are one of the largest online platform to give lot more to the shop owners, what you getting from the van sales supplier van sale supplier do give you sale and return, But we give you the cost price which van sales driver pay the importer &amp; wholesaler. you can have full margin and play on the product freely you dont have the over charge to your own customers what van sale driver force to mark up there price. so now direct from manufacturer to your door shop. you can look after your existing and new client being online shop supplier customers&nbsp;</p>\r\n\r\n<ul>\r\n	<li>&raquo; Established in 2018</li>\r\n	<li>&raquo; Lowest price on the internet</li>\r\n	<li>&raquo; Safe and discreet packaging</li>\r\n	<li>&raquo; UK based Head office.</li>\r\n</ul>\r\n\r\n<p><b>online shop supplier&nbsp;</b>has been delivering results since we opened in&nbsp;<strong>2018</strong>. Our goal is to provide both a superior customer experience and tremendous value for our customers.</p>\r\n\r\n<p><strong>Our Mission</strong></p>\r\n\r\n<ul>\r\n	<li>To deliver products at lowest prices and to provide best in manufacturer price.</li>\r\n</ul>\r\n\r\n<p><strong>Our guarantee</strong></p>\r\n\r\n<ul>\r\n	<li>Everything you buy from us online through our website is sent out to you immediately . Package are shipped from our warehouse generally within a few hours of the order arriving. If we do run out of stock, we will notify you, cancel the order and initiate a full refund within 2 business days.</li>\r\n</ul>\r\n\r\n<p><strong>Thank you for giving us this opportunity to serve you</strong></p>\r\n\r\n<ul>\r\n	<li>As we are a very new online web store, we thank you very much for giving us this chance to serve you. We assure you that from the time of placing your order online with us, to the time of receiving delivery of your package, you will find our process easy to use and managed in a professional way.</li>\r\n</ul>\r\n\r\n<h2>Customer Loyalty</h2>\r\n\r\n<p>When it comes to rewarding our loyal customers, we focus on offering them the best advice and solution we can. its Rewards programme in mid 2020. With over thousands of members in the UK, the programme is free for customers to sign up to and offers &nbsp;points for spent in shopping.</p>\r\n\r\n<p>(shopkepper are eligible for our rewards to the discounts offered to them. )</p>\r\n\r\n<p>We love our customers and welcome your feedback and suggestions. Use our&nbsp;<a href=\"https://taraherbal.co.uk/contact/?v=989173909475\" title=\"Contact Us\">Contact Us</a>&nbsp;page to tell us what we&rsquo;re doing right or what we can improve on.</p>\r\n\r\n<h5>&nbsp;</h5>\r\n', 1, '2026-05-02 01:12:46', '2026-05-01 19:42:46', 0),
(6, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'footer_left_area', 'Footer Left Area', '', '<div class=\"col-12 col-md-4 footer_links\">\r\n<h4>About us</h4>\r\n\r\n<p><strong>Addres:</strong> Unit 12, 142 Johnson Street Southall, London UB2 5FD</p>\r\n\r\n<p><strong>Phone:</strong> +44 (0)208 577 8898</p>\r\n\r\n<p><strong>Order Line:</strong> +44 (0)7944 615511</p>\r\n\r\n<p><strong>Email:</strong> md-foods@hotmail.co.uk</p>\r\n</div>\r\n', 1, '2020-01-27 10:36:43', '2020-01-27 17:06:43', 0),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'left_social_area', 'Left Social Area', '', '<div class=\"left_social_bar\"><span class=\"phone_number\">+44 (0)208 577 8898</span>\r\n\r\n<div class=\"social_links mt-5\"><a class=\"facebook\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a> <a class=\"twitter\" href=\"\"><i class=\"fab fa-twitter\"></i></a> <a class=\"linkedin\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a></div>\r\n</div>\r\n', 1, '0000-00-00 00:00:00', '2019-06-03 06:01:13', 0),
(8, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'refund_policy', 'Delivery Policy', '', '<p>Delivery&nbsp; policy very seriously and treat all your personal information as confidential. To find out more scroll below.</p>\r\n\r\n<p id=\"link-your-information\"><strong>Your Information</strong></p>\r\n\r\n<p>We will only use information about you in accordance with this Privacy Policy. By using our site, you consent to such processing.</p>\r\n\r\n<p id=\"link-information-collected\"><strong>Information Collected</strong></p>\r\n\r\n<p>When setting up an account, you will be asked to provide us with your name, billing address and delivery address details, your email address, telephone number and a password. We will also require your credit/debit card details, when you are placing an order.</p>\r\n\r\n<p>We may also collect information about you such as your name, address and contact details where you enter a offers&nbsp;&nbsp;we are operating.</p>\r\n\r\n<p>We may obtain information about your usage of our site to help us develop and improve it further</p>\r\n\r\n<p id=\"link-what-do-we-use-your-information-for\"><strong>What Do We Use Your Information For?</strong></p>\r\n\r\n<p>We use your information for the following purposes:</p>\r\n\r\n<ul>\r\n	<li>To serve website content to you</li>\r\n	<li>To handle orders, deliver products, process payments and refunds and provide statements</li>\r\n	<li>To communicate with you about your orders</li>\r\n	<li>To provide your e-receipt to you</li>\r\n	<li>To update our records and generally maintain your account with us</li>\r\n	<li>If you contact us, we may keep a record of that correspondence and your contact details</li>\r\n	<li>For our statistical or survey purposes to improve our site and our services to you.</li>\r\n	<li>To prevent or detect fraud or abuses of our site and enable third parties to carry out technical, logistical or other functions on our behalf</li>\r\n	<li>To contact you by email, post, or telephone, to ask you for feedback and comments on our services</li>\r\n	<li>If you consent, to notify you by email of Group products, promotions, competitions and special offers that may be of interest to you.</li>\r\n	<li>For our statistical, survey and customer service purposes to improve our site and blog and our services to you and other customers.</li>\r\n</ul>\r\n\r\n<p id=\"link-disclosure-of-your-information\"><strong>Disclosure Of Your Information</strong></p>\r\n\r\n<p>We may disclose your information to members of our Group for the purposes listed above.</p>\r\n\r\n<p><strong>We do not store customer credit card</strong>&nbsp;<strong>details nor do we share customer details with any 3rd parties</strong></p>\r\n\r\n<p>We may disclose your personal information to carefully selected service providers and agents who operate elements of our web site service and process data on our behalf. These may include businesses who provide technology services such as hosting for our servers and email distribution and business partners who provide delivery fulfillment services.</p>\r\n\r\n<p>From time to time we may also provide your information to carefully selected customer service agencies for research and analysis purposes, on our behalf, so that we can monitor and improve the services we provide for you and other customers.</p>\r\n\r\n<p>Where such disclosures are made, this will be under contractual arrangements with us and carried out in accordance with the requirements of the Act.</p>\r\n\r\n<p>We may also use aggregate information and statistics for the purposes of monitoring website usage in order to help us develop the website and our services and may provide such aggregate information to third parties. These statistics will not include information that can be used to identify any individual</p>\r\n\r\n<p>In assessing your request for goods or services, we may use your information for the purposes of the prevention and detection of fraud.</p>\r\n\r\n<p>We may also disclose your personal information to our subsidiaries and affiliated companies and any successors in title to our business.</p>\r\n\r\n<p>We do not hold your credit card details. Financial transactions take place directly and securely with our payment handling provider.</p>\r\n\r\n<p>If you believe your details are incorrect you can amend your details by logging onto your &lsquo;My Account&rsquo; on our site.</p>\r\n\r\n<p id=\"link-third-party-services\"><strong>Third Party Services</strong></p>\r\n\r\n<p>We may from time to time make available through our site certain services provided by third parties. To gain access to these services, you must register with these third parties and deal with them direct. Please note that these websites have their own privacy policies and that we do not accept any responsibility or liability for these policies. Please check these policies before you submit any personal data to these websites.</p>\r\n\r\n<h3><strong>Your rights</strong></h3>\r\n\r\n<p>If you decide to close your account, we will deactivate it, and remove your personal data. Remember that once your account is closed, you will no longer be able to login, access your personal information. You can however, open a new account at any time.</p>\r\n\r\n<p>We may offer members the option to save information related to method and choice of payment on our Website. If you save such payment details in your account on online shop supplier , you will be able to add, delete or modify that information at any time during which your account remains open in Account Settings.</p>\r\n\r\n<p>You can change your marketing preferences at any time during which your account remains open through the Subscriptions page in your member account.</p>\r\n\r\n<p>In accordance with applicable law, you may have the right of access, the right of rectification, the right to erasure, the right to restrict processing, the right to data portability and the right to object. Please find below more details and information on how and when you can exercise your rights. We will respond to your request within one month, but have the right to extend this period with two months.</p>\r\n\r\n<p>In accordance with applicable law, you may have the following rights with regard to your personal data:</p>\r\n\r\n<ul>\r\n	<li>The right to request access to your personal data. This enables you to receive a copy of the personal data we hold about you and to check that we are lawfully processing it.</li>\r\n	<li>The right to request to correct your personal data if it is inaccurate. You may also supplement any incomplete personal data we have, taking into account the purposes of the processing.</li>\r\n	<li>The right to request deletion of your personal data if:\r\n	<ul>\r\n		<li>your personal data is no longer necessary for the purposes for which we collected or processed them; or</li>\r\n		<li>you withdraw your consent if the processing of your personal data is based on consent and no other legal ground exists; or</li>\r\n		<li>you object to the processing of your personal data and we do not have an overriding legitimate ground for processing; or</li>\r\n		<li>your personal data is unlawfully processed; or</li>\r\n		<li>your personal data has to be deleted for compliance with a legal obligation.</li>\r\n	</ul>\r\n	</li>\r\n	<li>The right to object to the processing of your personal data. We will comply with your request, unless we have a compelling overriding legitimate interest for processing or we need to continue processing your personal data to establish, exercise or defend a legal claim.</li>\r\n	<li>The right to restrict the processing of personal data, if:\r\n	<ul>\r\n		<li>the accuracy of your personal data is contested by you, for the period in which we have to verify the accuracy of the personal data; or</li>\r\n		<li>the processing is unlawful and you oppose the deletion of your personal data and request restriction; or</li>\r\n		<li>we no longer need your personal data for the purposes of processing, but your personal data is required by you for legal claims; or</li>\r\n		<li>you have objected to the processing, for the period in which we have to verify overriding legitimate grounds.</li>\r\n	</ul>\r\n	</li>\r\n	<li>The right to data portability. You may request us to receive the personal data that concern you. You may also request us to send this personal data to a third party, where feasible. You only have this right if it regards personal data you have provided us, the processing is based on consent or necessary for the performance of a contract between you and us, and the processing is done by automated means.</li>\r\n</ul>\r\n\r\n<p>You can exercise several of your rights through the personal information section of your account. To exercise your other rights you can file a request by email to&nbsp;contact@taraherbal.co.uk</p>\r\n\r\n<p>You will not have to pay a fee to access your personal data (or to exercise any of the other rights described in this Privacy Policy). However, we may charge a reasonable fee if your request is clearly unfounded, repetitive or excessive.</p>\r\n\r\n<p>We may need to request specific information from you to help us confirm your identity and ensure your right to access your personal data (or to exercise any of your other rights). This is a security measure to ensure that personal data is not disclosed to any person who has no right to receive it. In an effort to speed up our response, we may also contact you to ask you for further information in relation to your request.</p>\r\n\r\n<h2>Transfers outside of the European Economic Area</h2>\r\n\r\n<p>The information which we collect about you may be transferred outside the European Economic Area. In the event of such transfer, we will ensure the adequate standard of security is in place for example by incorporating the European Commission approved clauses into our agreements with such third parties to ensure the security of your personal data.</p>\r\n', 1, '2020-01-27 09:42:21', '2020-01-27 16:12:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `sub_category_name` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `sub_category_slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_heading` longtext NOT NULL,
  `meta_title` text NOT NULL,
  `meta_description` text NOT NULL,
  `og_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `h1_tag` varchar(255) NOT NULL,
  `h2_tag` varchar(255) NOT NULL,
  `h3_tag` varchar(255) NOT NULL,
  `robots` varchar(255) NOT NULL,
  `revisit_after` varchar(255) NOT NULL,
  `og_local` varchar(255) NOT NULL,
  `og_type` varchar(255) NOT NULL,
  `og_image` varchar(255) NOT NULL,
  `og_tag` varchar(255) NOT NULL,
  `og_title` varchar(255) NOT NULL,
  `og_url` text NOT NULL,
  `og_site_name` varchar(255) NOT NULL,
  `canonical` varchar(255) NOT NULL,
  `geo_region` varchar(255) NOT NULL,
  `geo_place_name` varchar(255) NOT NULL,
  `geo_position` varchar(255) NOT NULL,
  `icbm` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1' COMMENT '''0''=>''Inactive'', ''1''=>''Active''',
  `is_deleted` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not Deleted'', ''1''=>''Deleted''',
  `addedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`id`, `category_id`, `sub_category_name`, `page_title`, `page_slug`, `sub_category_slug`, `description`, `image`, `meta_heading`, `meta_title`, `meta_description`, `og_description`, `meta_keywords`, `h1_tag`, `h2_tag`, `h3_tag`, `robots`, `revisit_after`, `og_local`, `og_type`, `og_image`, `og_tag`, `og_title`, `og_url`, `og_site_name`, `canonical`, `geo_region`, `geo_place_name`, `geo_position`, `icbm`, `author`, `page_url`, `status`, `is_deleted`, `addedOn`) VALUES
(1, 4, 'Staya Agarbatti', 'Staya Agarbatti', 'Staya Agarbatti', 'Staya-Agarbatti', 'Staya Agarbatti', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(2, 4, 'SGK Agarbatti', 'SGK Agarbatti', 'SGK Agarbatti', 'SGK-Agarbatti', 'SGK Agarbatti', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(3, 4, 'Tridev Agarbatti', 'Tridev Agarbatti', 'Tridev Agarbatti', 'Tridev-Agarbatti', 'Tridev Agarbatti', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(4, 4, 'Air Freshner', 'Air Freshner', 'Air Freshner', 'Air-Freshner', 'Air Freshner', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(5, 4, 'Perfume', 'Perfume', 'Perfume', 'Perfume', 'Perfume', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(6, 5, 'Clear Zipper', 'Clear Zipper', 'Clear Zipper', 'Clear-Zipper', 'Clear Zipper', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(7, 5, 'Color Zipper', 'Color Zipper', 'Color Zipper', 'Color-Zipper', 'Color Zipper', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(8, 5, 'Foil Baggy', 'Foil Baggy', 'Foil Baggy', 'Foil Baggy', 'Foil Baggy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(9, 5, 'Print Baggy', 'Print Baggy', 'Print Baggy', 'Print-Baggy', 'Print Baggy', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(10, 6, 'Smoking Tips', 'Smoking Tips', 'Smoking Tips', 'Smoking-Tips', 'Smoking Tips', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(11, 6, 'Rolling Paper', 'Rolling Paper', 'Rolling Paper', 'Rolling-Paper', 'Rolling Paper', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(12, 6, 'Smoking Cones', 'Smoking Cones', 'Smoking Cones', 'Smoking-Cones', 'Smoking Cones', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(13, 6, 'Smoking Blunts', 'Smoking Blunts', 'Smoking Blunts', 'Smoking-Blunts', 'Smoking Blunts', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(14, 7, 'Super Glue', 'Super Glue', 'Super Glue', 'Super-Glue', 'Super Glue', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(15, 7, 'Balloons', 'Balloons', 'Balloons', 'Balloons', 'Balloons', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(16, 7, 'Money Tins', 'Money Tins', 'Money Tins', 'Money-ins', 'Money Tins', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(17, 7, 'Tape', 'Tape', 'Tape', 'Tape', 'Tape', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(18, 7, 'Till Roll', 'Till Roll', 'Till Roll', 'Till-Roll', 'Till Roll', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(19, 7, 'Kitchen Scale', 'Kitchen Scale', 'Kitchen Scale', 'Kitchen-Scale', 'Kitchen Scale', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(20, 7, 'Nail Clipper', 'Nail Clipper', 'Nail Clipper', 'Nail-Clipper', 'Nail Clipper', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(21, 8, 'Earphone', 'Earphone', 'Earphone', 'Earphone', 'Earphone', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(22, 8, 'Headphone', 'Headphone', 'Headphone', 'Headphone', 'Headphone', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(23, 8, 'Mobile Stand', 'Mobile Stand', 'Mobile Stand', 'Mobile Stand', 'Mobile-Stand', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(24, 8, 'FM/Transmitter', 'FM/Transmitter', 'FM/Transmitter', 'FM-Transmitter', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(25, 8, 'Watch Battery', 'Watch Battery', 'Watch Battery', 'Watch-Battery', 'Watch Battery', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(26, 8, 'Button Battery', 'Button Battery', 'Button Battery', 'Button-Battery', 'Button Battery', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(27, 8, 'AA/AAA Battery', 'AA/AAA Battery', 'AA/AAA Battery', 'AA-AAA-Battery', 'AA/AAA Battery', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(28, 8, 'Audio Visual', 'Audio Visual', 'Audio Visual', 'Audio-Visual', 'Audio Visual', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(29, 8, 'Mixed Cables', 'Mixed Cables', 'Mixed Cables', 'Mixed-Cables', 'Mixed Cables', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(30, 8, 'Ethernet Cables', 'Ethernet Cables', 'Ethernet Cables', 'Ethernet-Cables', 'Ethernet Cables', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(31, 8, 'Car Charger', 'Car Charger', 'Car Charger', 'Car-Charger', 'Car Charger', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(32, 8, 'Home Charger', 'Home Charger', 'Home Charger', 'Home-Charger', 'Home Charger', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(33, 8, 'Power Bank', 'Power Bank', 'Power Bank', 'Power-Bank', 'Power Bank', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(34, 8, 'Charging Cable', 'Charging Cable', 'Charging Cable', 'Charging-Cable', 'Charging Cable', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(35, 8, 'Panel Light', 'Panel Light', 'Panel Light', 'Panel-Light', 'Panel Light', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(36, 8, 'Tube Light', 'Tube Light', 'Tube Light', 'Tube-Light', 'Tube Light', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(37, 8, 'Led Strips', 'Led Strips', 'Led Strips', 'Led-Strips', 'Led Strips', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(38, 8, 'Outdoor Lighting', 'Outdoor Lighting', 'Outdoor Lighting', 'Outdoor-Lighting', 'Outdoor Lighting', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(39, 8, 'Speakers', 'Speakers', 'Speakers', 'Speakers', 'Speakers', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(40, 8, 'Radio', 'Radio', 'Radio', 'Radio', 'Radio', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(41, 9, 'Electronic Pack 50', 'Electronic Pack 50', 'Electronic Pack 50', 'Electronic-Pack-50', 'Electronic Pack 50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(42, 9, 'Electronic Pack 25', 'Electronic Pack 25', 'Electronic Pack 25', 'Electronic-Pack-25', 'Electronic Pack 25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(43, 9, 'Electronic Pack 4/5', 'Electronic Pack 4/5', 'Electronic Pack 4/5', 'Electronic-Pack-4/5', 'Electronic Pack 4/5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(44, 9, 'Wind Proof Pack 50', 'Wind Proof Pack 50', 'Wind Proof Pack 50', 'Wind-Proof-Pack-50', 'Wind Proof Pack 50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(45, 9, 'Wind Proof Pack 25', 'Wind Proof Pack 25', 'Wind Proof Pack 25', 'Wind-Proof-Pack-25', 'Wind Proof Pack 25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(46, 9, 'Wind Proof Pack 4/5', 'Wind Proof Pack 4/5', 'Wind Proof Pack 4/5', 'Wind-Proof-Pack-4/5', 'Wind Proof Pack 4/5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(47, 11, 'Ashtray Glass', 'Ashtray Glass', 'Ashtray Glass', 'Ashtray-Glass', 'Ashtray Glass', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(48, 11, 'Ashtray Plastic', 'Ashtray Plastic', 'Ashtray Plastic', 'Ashtray-Plastic', 'Ashtray Plastic', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(49, 11, 'Ashtray Wood', 'Ashtray Wood', 'Ashtray Wood', 'Ashtray-Wood', 'Ashtray Wood', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(50, 11, 'Ashtray Metal', 'Ashtray Metal', 'Ashtray Metal', 'Ashtray-Metal', 'Ashtray Metal', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(51, 11, 'Glass Bongs', 'Glass Bongs', 'Glass Bongs', 'Glass-Bongs', 'Glass Bongs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(52, 11, 'Acrylic/Plastic Bongs', 'Acrylic/Plastic Bongs', 'Acrylic/Plastic Bongs', 'Acrylic-Plastic-Bongs', 'Acrylic/Plastic Bongs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(53, 11, 'Grinder Metal', 'Grinder Metal', 'Grinder Metal', 'Grinder-Metal', 'Grinder Metal', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(54, 11, 'Grinder Plastic', 'Grinder Plastic', 'Grinder Plastic', 'Grinder-Plastic', 'Grinder Plastic', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(55, 11, 'Rolling Machine', 'Rolling Machine', 'Rolling Machine', 'Rolling-Machine', 'Rolling Machine', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(56, 11, 'Gift Set', 'Gift Set', 'Gift Set', 'Gift-Set', 'Gift Set', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(57, 11, 'Cone Holder', 'Cone Holder', 'Cone Holder', 'Cone-Holder', 'Cone Holder', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(58, 11, 'Wooden Box', 'Wooden Box', 'Wooden Box', 'Wooden-Box', 'Wooden Box', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(59, 11, 'Scale', 'Scale', 'Scale', 'Scale', 'Scale', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00'),
(60, 10, 'Duracell', 'Duracell', 'Duracell', 'Duracell', 'Duracell', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_today_deals`
--

CREATE TABLE `tbl_today_deals` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `addedOn` datetime NOT NULL,
  `expiredOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_today_deals`
--

INSERT INTO `tbl_today_deals` (`id`, `product_id`, `status`, `addedOn`, `expiredOn`) VALUES
(1, 24, '1', '2020-11-20 07:30:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_type` enum('business','person') NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `mobile` varchar(20) NOT NULL DEFAULT '0',
  `company_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL DEFAULT 'noimage.png',
  `business_type` varchar(255) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `brochures_offers` varchar(255) NOT NULL,
  `mobile_1` varchar(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Active , 0 = Not Active ',
  `is_deleted` varchar(1) NOT NULL DEFAULT '0' COMMENT '''0''=>''Not Deleted'', ''1''=>''Deleted''',
  `addedOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_type`, `first_name`, `last_name`, `email`, `mobile`, `company_name`, `password`, `profile_image`, `business_type`, `postal_code`, `brochures_offers`, `mobile_1`, `country`, `city`, `address_1`, `address_2`, `status`, `is_deleted`, `addedOn`, `updatedOn`) VALUES
(1, 'business', 'Saurabh', 'Kumar', 'saurabh.kumar@gmail.com', '9717472452', '', '6c1e121286c974773703c06754a3f01f', 'noimage.png', '', '804408', '', '', '', 'Jehanabad', 'Naya Tola', 'Jehanabad', 1, '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_billing`
--

CREATE TABLE `tbl_user_billing` (
  `id` int(11) NOT NULL,
  `type` varchar(1) NOT NULL DEFAULT '1' COMMENT '''1''=>''Home Address'', ''2''=>''Office Address''',
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `addedOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user_billing`
--

INSERT INTO `tbl_user_billing` (`id`, `type`, `user_id`, `first_name`, `last_name`, `company_name`, `address_1`, `address_2`, `postal_code`, `city`, `country`, `email`, `contact`, `status`, `addedOn`, `updatedOn`) VALUES
(1, '1', 1, 'sandeep', 'kumar', 'Mr', '66,A WELLINGTON ROAD NORTH, HOUNSLOW', '56', 'TW47AA', 'LONDON', 0, '', '07447446059', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '1', 2, 'sandy', 'singh', 'zippy food off license ', ' johnson street', '12', 'ub13ha', 'london', 0, '', '07447446059', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '1', 2, 'jay ', 'singh', 'goodys basket', 'wellington road', '4 goddys', 'tw47aa', 'london', 0, '', '07898789878', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '1', 3, 'Saurabh', 'Kumar', 'Mdfoods', 'Eros Sampoornam', 'Y2-801', '201306', 'Grater Noida', 0, '', '09717472452', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '1', 3, 'Saumya', 'Singh', 'Mdfoods', 'Eros Sampoornam', 'Y2-802', '201301', 'Noida', 0, '', '09717472452', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '1', 5, 'Saurabh', 'Kumar', 'Onlineshopsupplier', 'Eros Sampoornam', 'Y2-801', '201306', 'Grater Noida', 0, '', '09717472452', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '1', 5, 'Saumya', 'Singh', 'Onlineshopsupplier', 'B-93', 'Sector-67', '201301', 'Noida', 0, '', '09717472452', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '1', 6, 'sandy', 'raj', 'a one star marketing ltd', 'johnson street', 'unit1', 'tw47aa', 'southall', 0, '', '07447446059', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '1', 7, 'hare', 'krishna', '', '12', '12', 'UC4WE3', '45', 0, '', '12345678945', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '1', 8, 'jay', 'singh', 'mdfoods', 'unit-12, 142- johnson street', '12', 'UB25FD ', 'middlesex', 0, '', '07961919191', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '1', 9, 'jay singh', 'mdfoods ', 'mdfoods ', '144,GROVE ROAD', '2323', 'TW33PT', 'LONDON', 0, '', '07440091983', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '1', 10, 'jay', 'Singh', 'Dhillons Food Ltd.', '142 Johnson Street', '02085716669', 'UB2 5FD', 'Southall', 0, '', '07961919191', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '1', 11, 'ee', 'ee', '', 'ee', '11', '143002', 'ASR', 0, '', '35848444482', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '1', 12, 'Francoise', 'Rautenstrauch', '', '2335 Canton Hwy #6', '23', 'N8N 3N2', 'paris', 0, '', '98159947111', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '1', 13, 'Shahid', 'shafeq', '', '16  Ealing', '145', 'W1456', 'London', 0, '', '07996524681', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(0, '1', 1, 'Saurabh', 'Kumar', '', 'Naya Tola', 'Jehanabad', '804408', 'Jehanabad', 0, 'saurabh.kumar@gmail.com', '9717472452', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist_product`
--

CREATE TABLE `tbl_wishlist_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `addedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client_testimonial`
--
ALTER TABLE `tbl_client_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_email_template`
--
ALTER TABLE `tbl_email_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_keywords`
--
ALTER TABLE `tbl_keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_client_testimonial`
--
ALTER TABLE `tbl_client_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_keywords`
--
ALTER TABLE `tbl_keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2021 lúc 05:26 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `reviewfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `avatar`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Thanh Tung', 'thanhtung@gmail.com', '$2y$10$XA17.VbdeabzoUGEfcgIR.UwXIY6dpDnn..Wh/D2dVebkLZ27ZMEi', NULL, NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `areas`
--

CREATE TABLE `areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ar_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `areas`
--

INSERT INTO `areas` (`id`, `ar_name`, `ar_slug`, `ar_desc`, `created_at`, `updated_at`, `ar_active`) VALUES
(1, 'TP. HCM', 'tp-hcm', 'Khu vực thành phố hồ chí minh', '2020-02-06 10:34:45', '2020-02-06 10:34:45', 1),
(2, 'Hà Nội', 'ha-noi', 'Khu vực thành phố hà nội', '2020-02-06 10:36:01', '2020-02-06 10:36:01', 1),
(3, 'Đà Nẵng', 'da-nang', 'Khu vực thành phố đà nẵng', '2020-02-06 10:37:09', '2020-02-06 11:25:36', 1),
(5, 'Cần Thơ', 'can-tho', 'Cần Thơ', '2020-02-06 22:16:58', '2020-02-06 22:16:58', 1),
(6, 'Khánh Hòa', 'khanh-hoa', 'Khánh Hòa', '2020-02-06 22:17:08', '2020-02-06 22:17:08', 1),
(7, 'Vũng Tàu', 'vung-tau', 'Vũng Tàu', '2020-02-06 22:17:56', '2020-02-06 22:17:56', 1),
(8, 'Hải Phòng', 'hai-phong', 'Hải Phòng', '2020-02-06 22:18:06', '2020-02-06 22:18:06', 1),
(9, 'Bình Thuận', 'binh-thuan', 'Bình Thuận', '2020-02-06 22:18:13', '2020-02-06 22:18:13', 1),
(10, 'Lâm Đồng', 'lam-dong', 'Lâm Đồng', '2020-02-06 22:22:35', '2020-02-06 22:22:35', 1),
(11, 'Đồng Nai', 'dong-nai', 'Đồng Nai', '2020-02-06 22:22:41', '2020-02-06 22:22:41', 1),
(12, 'Quảng Ninh', 'quang-ninh', 'Quảng Ninh', '2020-02-06 22:22:46', '2020-02-06 22:22:46', 1),
(13, 'Huế', 'hue', 'Huế', '2020-02-06 22:22:53', '2020-02-06 22:22:53', 1),
(14, 'Bình Dương', 'binh-duong', 'Bình Dương', '2020-02-06 22:23:16', '2020-02-06 22:23:16', 1),
(15, 'Hải Dương', 'hai-duong', 'Hải Dương', '2020-02-06 22:23:20', '2020-02-06 22:23:20', 1),
(16, 'Ninh Thuận', 'ninh-thuan', 'Ninh Thuận', '2020-02-06 22:23:25', '2020-02-06 22:23:25', 1),
(17, 'Nam Định', 'nam-dinh', 'Nam Định', '2020-02-06 22:23:29', '2020-02-06 22:23:29', 1),
(18, 'Tiền Giang', 'tien-giang', 'Tiền Giang', '2020-02-06 22:23:34', '2020-02-06 22:23:34', 1),
(19, 'Phú Quốc', 'phu-quoc', 'Phú Quốc', '2020-02-06 22:23:38', '2020-02-06 22:23:38', 1),
(20, 'Kon Tum', 'kon-tum', 'Kon Tum', '2020-02-06 22:23:43', '2020-02-06 22:23:43', 1),
(21, 'Quảng Nam', 'quang-nam', 'Quảng Nam', '2020-02-06 22:23:47', '2020-02-06 22:23:47', 1),
(22, 'Lào Cai', 'lao-cai', 'Lào Cai', '2020-02-06 22:23:52', '2020-02-06 22:23:52', 1),
(23, 'Nghệ An', 'nghe-an', 'Nghệ An', '2020-02-06 22:23:57', '2020-02-06 22:23:57', 1),
(24, 'Long An', 'long-an', 'Long An', '2020-02-06 22:24:03', '2020-02-06 22:24:03', 1),
(25, 'Bình Định', 'binh-dinh', 'Bình Định', '2020-02-06 22:24:08', '2020-02-06 22:24:08', 1),
(26, 'Phú Yên', 'phu-yen', 'Phú Yên', '2020-02-06 22:24:12', '2020-02-06 22:24:12', 1),
(27, 'Đắk Lắk', 'dak-lak', 'Đắk Lắk', '2020-02-06 22:24:17', '2020-02-06 22:24:17', 1),
(28, 'An Giang', 'an-giang', 'An Giang', '2020-02-06 22:24:22', '2020-02-06 22:24:22', 1),
(29, 'Thanh Hóa', 'thanh-hoa', 'Thanh Hóa', '2020-02-06 22:24:27', '2020-02-06 22:24:27', 1),
(30, 'Kiên Giang', 'kien-giang', 'Kiên Giang', '2020-02-06 22:24:32', '2020-02-06 22:24:32', 1),
(31, 'Quảng Ngãi', 'quang-ngai', 'Quảng Ngãi', '2020-02-06 22:24:37', '2020-02-06 22:24:37', 1),
(32, 'Tây Ninh', 'tay-ninh', 'Tây Ninh', '2020-02-06 22:24:42', '2020-02-06 22:24:42', 1),
(33, 'Gia Lai', 'gia-lai', 'Gia Lai', '2020-02-06 22:24:46', '2020-02-06 22:24:46', 1),
(34, 'Vĩnh Long', 'vinh-long', 'Vĩnh Long', '2020-02-06 22:24:50', '2020-02-06 22:24:50', 1),
(35, 'Bắc Ninh', 'bac-ninh', 'Bắc Ninh', '2020-02-06 22:24:54', '2020-02-06 22:24:54', 1),
(36, 'Cà Mau', 'ca-mau', 'Cà Mau', '2020-02-06 22:24:59', '2020-02-06 22:24:59', 1),
(37, 'Thái Nguyên', 'thai-nguyen', 'Thái Nguyên', '2020-02-06 22:25:05', '2020-02-06 22:25:05', 1),
(38, 'Đồng Tháp', 'dong-thap', 'Đồng Tháp', '2020-02-06 22:25:11', '2020-02-06 22:25:11', 1),
(39, 'Quảng Bình', 'quang-binh', 'Quảng Bình', '2020-02-06 22:25:15', '2020-02-06 22:25:15', 1),
(40, 'Bến Tre', 'ben-tre', 'Bến Tre', '2020-02-06 22:25:21', '2020-02-06 22:25:21', 1),
(41, 'Quảng Trị', 'quang-tri', 'Quảng Trị', '2020-02-06 22:25:26', '2020-02-06 22:25:26', 1),
(42, 'Bình Phước', 'binh-phuoc', 'Bình Phước', '2020-02-06 22:25:33', '2020-02-06 22:25:33', 1),
(43, 'Sóc Trăng', 'soc-trang', 'Sóc Trăng', '2020-02-06 22:25:43', '2020-02-06 22:25:43', 1),
(44, 'Vĩnh Phúc', 'vinh-phuc', 'Vĩnh Phúc', '2020-02-06 22:25:48', '2020-02-06 22:25:48', 1),
(45, 'Trà Vinh', 'tra-vinh', 'Trà Vinh', '2020-02-06 22:25:52', '2020-02-06 22:25:52', 1),
(46, 'Ninh Bình', 'ninh-binh', 'Ninh Bình', '2020-02-06 22:25:57', '2020-02-06 22:25:57', 1),
(47, 'Bạc Liêu', 'bac-lieu', 'Bạc Liêu', '2020-02-06 22:26:03', '2020-02-06 22:26:03', 1),
(48, 'Hà Tĩnh', 'ha-tinh', 'Hà Tĩnh', '2020-02-06 22:26:08', '2020-02-06 22:26:08', 1),
(49, 'Bắc Giang', 'bac-giang', 'Bắc Giang', '2020-02-06 22:26:12', '2020-02-06 22:26:12', 1),
(50, 'Phú Thọ', 'phu-tho', 'Phú Thọ', '2020-02-06 22:26:17', '2020-02-06 22:26:17', 1),
(51, 'Hậu Giang', 'hau-giang', 'Hậu Giang', '2020-02-06 22:26:22', '2020-02-06 22:26:22', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `c_total_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `c_title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_desc_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_icon`, `c_avatar`, `c_active`, `c_total_product`, `c_title_seo`, `c_desc_seo`, `c_keyword_seo`, `created_at`, `updated_at`) VALUES
(1, 'Ăn uống', 'an-uong', '', NULL, '1', '0', 'ăn uống 24 giờ', 'Những món ăn khắp cả các tỉnh thành', NULL, '2021-10-06 04:40:47', '2021-10-06 04:40:47'),
(2, 'Du lịch', 'du-lich', '', NULL, '1', '0', 'du lịch', 'Những địa điểm du lịch khắp các tỉnh thành', NULL, '2020-02-06 04:41:38', '2020-02-06 04:41:38'),
(3, 'Cưới hỏi', 'cuoi-hoi', '', NULL, '1', '0', 'wedding', 'Những địa điểm tổ chức tiệc cưới, chụp hình', NULL, '2020-02-06 04:42:21', '2020-02-06 04:42:21'),
(5, 'Giải trí', 'giai-tri', '', NULL, '1', '0', 'relax', 'Những loại hình giải trí trong cả nước', NULL, '2020-02-06 04:44:02', '2020-02-06 04:44:02'),
(6, 'Mua sắm', 'mua-sam', '', NULL, '1', '0', 'shopping', 'Những địa điểm mua sắm trong cả nước', NULL, '2020-02-06 04:44:34', '2020-02-06 04:44:34'),
(8, 'Dịch vụ', 'dich-vu', '', NULL, '1', '0', 'Dịch vụ', 'Những loại hình dịch vụ diễn ra trong cả nước', NULL, '2020-02-06 04:45:52', '2020-02-06 21:19:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2020_02_02_170537_create_categories_table', 1),
(26, '2020_02_05_083249_create_products_table', 1),
(27, '2020_02_05_170242_create_areas_table', 1),
(28, '2020_02_05_170304_create_type_cooks_table', 1),
(29, '2020_02_05_170317_create_type_products_table', 1),
(30, '2020_02_06_095409_create_stores_table', 1),
(31, '2020_02_06_110821_create_type_qualitys_table', 1),
(42, '2020_02_19_160125_create_transactions_table', 2),
(43, '2020_02_19_160146_create_orders_table', 2),
(44, '2020_02_21_163849_create_ratings_table', 3),
(45, '2020_02_21_164650_alter_column_rating_in_table_stores', 4),
(46, '2020_04_17_145742_create_admins_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `or_transaction_id` int(11) NOT NULL DEFAULT 0,
  `or_product_id` int(11) NOT NULL DEFAULT 0,
  `or_qty` tinyint(4) NOT NULL DEFAULT 0,
  `or_price` int(11) NOT NULL DEFAULT 0,
  `or_sale` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `or_transaction_id`, `or_product_id`, `or_qty`, `or_price`, `or_sale`, `created_at`, `updated_at`) VALUES
(4, 3, 32, 1, 40000, 0, '2021-11-13 08:24:25', '2021-11-13 08:24:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` int(11) NOT NULL DEFAULT 0,
  `pro_sale` tinyint(4) NOT NULL DEFAULT 0,
  `pro_active` tinyint(4) NOT NULL DEFAULT 1,
  `pro_view` int(11) NOT NULL DEFAULT 0,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_typeStore_id` int(11) NOT NULL DEFAULT 0,
  `pro_desc_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_price`, `pro_sale`, `pro_active`, `pro_view`, `pro_hot`, `pro_avatar`, `pro_typeStore_id`, `pro_desc_seo`, `pro_keyword_seo`, `created_at`, `updated_at`, `pro_count`) VALUES
(32, 'Trà dứa hồng hạc', 'tra-dua-hong-hac', 40000, 0, 1, 0, 0, '2021-11-13__2f4759ab-2711-4ff8-b369-9c6388434cbb.png', 24, 'Trà dứa hồng hạc', 'trà dứa', '2021-11-13 08:23:08', '2021-11-13 08:23:08', 20),
(33, 'Cơm gà sốt thái', 'com-ga-sot-thai', 25000, 0, 1, 0, 0, '2021-11-14__sotthai.png', 25, 'Cơm gà sốt thái', 'cơm gà', '2021-11-14 05:49:57', '2021-11-14 05:49:57', 50),
(34, 'Cơm gà nướng tiêu xanh', 'com-ga-nuong-tieu-xanh', 25000, 0, 1, 0, 0, '2021-11-14__tieuxanh.png', 25, 'Cơm gà nướng tiêu xanh', 'cơm gà', '2021-11-14 05:50:40', '2021-11-14 05:50:40', 50),
(35, 'Cơm gà chiên xù', 'com-ga-chien-xu', 25000, 0, 1, 0, 0, '2021-11-14__chienxu.png', 25, 'Cơm gà chiên xù', 'cơm gà', '2021-11-14 05:51:07', '2021-11-14 05:51:07', 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `ra_store_id` int(11) NOT NULL DEFAULT 0,
  `ra_number_space` tinyint(4) NOT NULL DEFAULT 0,
  `ra_number_position` tinyint(4) NOT NULL DEFAULT 0,
  `ra_number_serve` tinyint(4) NOT NULL DEFAULT 0,
  `ra_number_quality` tinyint(4) NOT NULL DEFAULT 0,
  `ra_number_price` tinyint(4) NOT NULL DEFAULT 0,
  `ra_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ra_user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`id`, `ra_store_id`, `ra_number_space`, `ra_number_position`, `ra_number_serve`, `ra_number_quality`, `ra_number_price`, `ra_content`, `ra_user_id`, `created_at`, `updated_at`) VALUES
(1, 6, 9, 9, 10, 8, 10, 'san pham rat tot', 1, '2020-02-21 17:00:00', '2020-02-21 17:00:00'),
(2, 7, 8, 8, 5, 5, 6, 'Luôn ủng hộ chủ quán', 1, '2020-02-21 17:00:00', '2020-02-21 17:00:00'),
(3, 6, 7, 9, 7, 6, 8, 'Cửa hàng quá tốt', 5, '2020-02-21 11:10:03', '2020-02-21 11:10:03'),
(4, 6, 1, 2, 3, 4, 3, 'không hài lòng lắm', 1, '2020-02-21 17:10:37', '2020-02-21 17:10:37'),
(5, 7, 9, 9, 6, 9, 7, 'Quá tuyệt vời. Cần mở thêm chi nhánh', 6, '2020-02-21 18:16:12', '2020-02-21 18:16:12'),
(6, 22, 10, 10, 10, 10, 10, 'Quán có cô chủ quá đẹp =)) Triệu like ^^', 6, '2020-02-21 18:20:44', '2020-02-21 18:20:44'),
(7, 6, 10, 10, 10, 10, 10, 'Quá tuyệt vời', 6, '2020-02-21 20:37:48', '2020-02-21 20:37:48'),
(8, 6, 9, 9, 9, 9, 8, 'Ố la la món ăn quá ngon', 6, '2020-02-22 03:44:02', '2020-02-22 03:44:02'),
(9, 8, 9, 10, 10, 10, 10, 'Rất hài lòng với cách phục vụ và các món ăn rất ngon. See you later ^^', 6, '2020-02-22 00:23:59', '2020-02-22 00:23:59'),
(10, 8, 10, 10, 10, 10, 10, 'Quá tuyệt vời', 6, '2020-02-22 07:26:28', '2020-02-22 07:26:28'),
(11, 6, 10, 9, 10, 9, 9, 'Tuyệt vời', 6, '2020-02-22 07:28:42', '2020-02-22 07:28:42'),
(12, 6, 10, 10, 10, 10, 10, 'Ahiihihh', 6, '2020-02-22 07:32:00', '2020-02-22 07:32:00'),
(13, 11, 0, 0, 0, 0, 0, 'Test đánh giá rồi hay chưa nè', 6, '2020-02-23 16:21:43', '2020-02-23 16:21:43'),
(14, 14, 0, 0, 0, 0, 0, 'Test đánh giá rồi hay chưa nè', 6, '2020-02-23 16:24:08', '2020-02-23 16:24:08'),
(15, 19, 0, 0, 0, 0, 0, 'Test đánh giá rồi hay chưa nè', 6, '2020-02-23 16:26:28', '2020-02-23 16:26:28'),
(16, 19, 8, 8, 9, 9, 9, 'Test đánh giá rồi hay chưa nè', 6, '2020-02-23 16:26:44', '2020-02-23 16:26:44'),
(17, 19, 0, 0, 0, 0, 0, 'hello nè', 6, '2020-02-23 16:37:58', '2020-02-23 16:37:58'),
(18, 17, 3, 3, 3, 3, 4, 'bánh testttttttttttttttttt', 6, '2020-02-23 16:44:45', '2020-02-23 16:44:45'),
(19, 4, 6, 7, 8, 8, 8, 'Quá ngon', 1, '2020-03-19 15:39:02', '2020-03-19 15:39:02'),
(20, 20, 10, 10, 9, 8, 9, 'quan ngon re', 9, '2021-11-09 12:48:07', '2021-11-09 12:48:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stores`
--

CREATE TABLE `stores` (
  `id` int(10) UNSIGNED NOT NULL,
  `st_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `st_sale` tinyint(4) NOT NULL DEFAULT 0,
  `st_timeOpen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_active` tinyint(4) NOT NULL DEFAULT 1,
  `st_lat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_hot` tinyint(4) NOT NULL DEFAULT 0,
  `st_activeOpen` tinyint(4) NOT NULL DEFAULT 0,
  `st_category_id` int(11) NOT NULL DEFAULT 0,
  `st_typeQuality_id` int(11) DEFAULT 0,
  `st_area_id` int(11) NOT NULL DEFAULT 0,
  `st_typeCook_id` int(11) DEFAULT 0,
  `st_typeProduct_id` int(11) DEFAULT 0,
  `st_desc_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_lng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `st_phone` int(11) DEFAULT 0,
  `st_total_rating` int(11) NOT NULL DEFAULT 0,
  `st_total_number` int(11) NOT NULL DEFAULT 0,
  `st_total_space` int(11) NOT NULL DEFAULT 0,
  `st_total_position` int(11) NOT NULL DEFAULT 0,
  `st_total_serve` int(11) NOT NULL DEFAULT 0,
  `st_total_quality` int(11) NOT NULL DEFAULT 0,
  `st_total_price` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `stores`
--

INSERT INTO `stores` (`id`, `st_name`, `st_slug`, `st_price`, `st_sale`, `st_timeOpen`, `st_address`, `st_active`, `st_lat`, `st_avatar`, `st_hot`, `st_activeOpen`, `st_category_id`, `st_typeQuality_id`, `st_area_id`, `st_typeCook_id`, `st_typeProduct_id`, `st_desc_seo`, `st_lng`, `created_at`, `updated_at`, `st_phone`, `st_total_rating`, `st_total_number`, `st_total_space`, `st_total_position`, `st_total_serve`, `st_total_quality`, `st_total_price`) VALUES
(23, 'Bún Bò Đất Thánh - Shop Online', 'bun-bo-dat-thanh-shop-online', '15.000-50.000', 0, '6:00-23:00', '221/16 Đất Thánh, P. 6, Tân Bình, TP. HCM', 1, NULL, '2021-11-10__foody-upload-api-foody-mobile-hmzz-200421103141.png', 0, 0, 1, 7, 1, 1, 1, 'Bún Bò Đất Thánh - Shop Online', NULL, '2021-11-09 22:54:58', '2021-11-09 22:54:58', NULL, 0, 0, 0, 0, 0, 0, 0),
(24, 'Tocotoco Bubble Tea - Vườn Lài', 'tocotoco-bubble-tea-vuon-lai', '30,000 - 65,000', 0, '09:00 - 22:15', '346 Vườn Lài, P. Phú Thọ Hòa, Tân Phú, TP. HCM', 1, NULL, '2021-11-13__foody-upload-api-foody-mobile-toco-191016150937.png', 0, 0, 1, 15, 1, 1, 2, 'Tocotoco Bubble Tea - Vườn Lài', NULL, '2021-11-13 08:20:45', '2021-11-13 08:20:45', NULL, 0, 0, 0, 0, 0, 0, 0),
(25, 'Cơm Gà Lê Trang - Đường 3 Tháng 2', 'com-ga-le-trang-duong-3-thang-2', '25,000 - 35,000', 0, '7:00-21:00', '55 Đường 3 Tháng 2, P. Xuân Khánh, Quận Ninh Kiều, Cần Thơ', 1, NULL, '2021-11-14__image-d40780c0-211102091220.png', 0, 0, 1, 13, 5, 1, 1, 'Cơm Gà Lê Trang - Đường 3 Tháng 2', NULL, '2021-11-14 05:48:15', '2021-11-14 05:48:15', NULL, 0, 0, 0, 0, 0, 0, 0),
(26, 'Nước Mía Mỹ Tho MT68', 'nuoc-mia-my-tho-mt68', '10,000 - 20,000', 0, '9:00-23:00', '41 Mạc Thiên Tích, P. Xuân Khánh, Quận Ninh Kiều, Cần Thơ', 1, '105.774243', '2021-11-14__nuocmia.png', 0, 0, 1, 4, 5, 1, 2, 'Nước Mía Mỹ Tho MT68', '10.028828', '2021-11-14 06:09:34', '2021-11-14 06:09:34', NULL, 0, 0, 0, 0, 0, 0, 0),
(27, 'Pizza Candle - Đường 3 Tháng 2', 'pizza-candle-duong-3-thang-2', '50,000 - 100,000', 0, '7:00-21:00', '138 Đường 3 Tháng 2, P. Xuân Khánh, Quận Ninh Kiều, Cần Thơ', 1, '105.77179277409098', '2021-11-14__foody-upload-api-foody-mobile-foody-mobile-ghgh-jp-190918102102.png', 0, 0, 1, 7, 5, 7, 1, 'Pizza Candle - Đường 3 Tháng 2', '10.02929836903846', '2021-11-14 06:24:12', '2021-11-14 06:25:17', NULL, 0, 0, 0, 0, 0, 0, 0),
(28, 'Lotteria - Vincom Xuân Khánh', 'lotteria-vincom-xuan-khanh', '20.000đ - 35.000đ', 0, '9:00-21:30', '209 Đường 30 Tháng 4,  Quận Ninh Kiều, Cần Thơ', 1, '105.774106', '2021-11-14__lotte.png', 1, 0, 1, 3, 5, 1, 7, 'Lotteria - Vincom Xuân Khánh', '10.024810', '2021-11-14 06:30:36', '2021-11-14 06:32:57', NULL, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tr_user_id` int(11) NOT NULL DEFAULT 0,
  `tr_total` int(11) NOT NULL DEFAULT 0,
  `tr_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `transactions`
--

INSERT INTO `transactions` (`id`, `tr_user_id`, `tr_total`, `tr_note`, `tr_address`, `tr_phone`, `tr_status`, `created_at`, `updated_at`) VALUES
(3, 9, 40000, NULL, 'Trần Nam Phú, An Khánh, Ninh Kiều, Cần Thơ', '123456789', 0, '2021-11-13 08:24:25', '2021-11-13 08:24:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_cooks`
--

CREATE TABLE `type_cooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `tc_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tc_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tc_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tc_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_cooks`
--

INSERT INTO `type_cooks` (`id`, `tc_name`, `tc_slug`, `tc_desc`, `created_at`, `updated_at`, `tc_active`) VALUES
(1, 'Món Việt', 'mon-viet', 'Những món ăn của người việt nam', '2020-02-06 17:58:32', '2020-02-06 17:59:00', 1),
(2, 'Món Bắc', 'mon-bac', 'Những món ăn của riêng người bắc', '2020-02-06 18:49:53', '2020-02-06 18:49:53', 1),
(3, 'Món Trung Hoa', 'mon-trung-hoa', 'Những món ăn của người trung khựa', '2020-02-06 18:50:26', '2020-02-06 18:50:26', 1),
(4, 'Món Miền Trung', 'mon-mien-trung', 'Món Miền Trung', '2020-02-06 18:50:37', '2020-02-06 18:50:37', 1),
(5, 'Món Miền Nam', 'mon-mien-nam', 'Món Miền Nam', '2020-02-06 18:50:47', '2020-02-06 18:50:47', 1),
(6, 'Món Thái', 'mon-thai', 'Món Thái', '2020-02-06 18:51:00', '2020-02-06 18:51:00', 1),
(7, 'Món Ý', 'mon-y', 'Món Ý', '2020-02-06 18:51:12', '2020-02-06 18:51:12', 1),
(8, 'Món Nhật', 'mon-nhat', 'Món Nhật', '2020-02-06 18:51:23', '2020-02-06 18:51:23', 1),
(9, 'Món Hàn', 'mon-han', 'Món hàn', '2020-02-06 18:51:33', '2020-02-06 18:52:56', 1),
(10, 'Món Chay', 'mon-chay', 'Món Chay', '2020-02-06 18:51:48', '2020-02-06 18:51:48', 1),
(11, 'Hải Sản', 'hai-san', 'Hải Sản', '2020-02-06 18:51:55', '2020-02-06 18:51:55', 1),
(12, 'Beer/Bar', 'beerbar', 'Beer/Bar', '2020-02-06 18:52:09', '2020-02-06 18:52:09', 1),
(13, 'Bánh', 'banh', 'Bánh', '2020-02-06 18:52:17', '2020-02-06 18:52:17', 1),
(14, 'Kem', 'kem', 'Kem', '2020-02-06 18:52:23', '2020-02-06 18:52:23', 1),
(15, 'Món Pháp', 'mon-phap', 'Món Pháp', '2020-02-06 18:52:36', '2020-02-06 18:52:36', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `tp_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tp_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tp_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `tp_name`, `tp_slug`, `tp_desc`, `created_at`, `updated_at`, `tp_active`) VALUES
(1, 'Đồ ăn', 'do-an', 'những loại sản phẩm liên quan đến món ăn', '2020-02-06 19:29:53', '2021-11-13 08:13:26', 1),
(2, 'Đồ uống', 'do-uong', 'những loại sản phẩm liên quan đến thức uống', '2020-02-06 19:32:19', '2021-11-13 08:13:39', 1),
(4, 'Bánh', 'banh', 'những loại sản phẩm liên quan đến bánh', '2020-02-06 19:36:40', '2021-11-13 08:13:53', 1),
(7, 'Thức ăn nhanh', 'thuc-an-nhanh', 'những loại sản phẩm liên quan đến món ăn đường phố', '2020-02-06 19:38:28', '2021-11-13 08:14:45', 1),
(8, 'Pizza/Burger', 'pizzaburger', 'Pizza/Burger', '2020-02-06 19:39:46', '2020-02-06 19:39:46', 1),
(9, 'Lẩu', 'lau', 'những loại sản phẩm liên quan đến lẩu', '2020-02-06 19:40:16', '2021-11-13 08:14:20', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_qualitys`
--

CREATE TABLE `type_qualitys` (
  `id` int(10) UNSIGNED NOT NULL,
  `tq_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tq_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tq_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tq_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_qualitys`
--

INSERT INTO `type_qualitys` (`id`, `tq_name`, `tq_slug`, `tq_desc`, `created_at`, `updated_at`, `tq_active`) VALUES
(1, 'Sang trọng', 'sang-trong', 'những địa điểm được đánh giá sang trọng', '2020-02-06 19:53:32', '2020-02-06 19:53:56', 1),
(2, 'Buffet', 'buffet', 'những địa điểm ăn buffet', '2020-02-06 21:00:32', '2020-02-06 21:00:32', 1),
(3, 'Nhà hàng', 'nha-hang', 'những địa điểm nhà hàng trong cả nước', '2020-02-06 21:00:57', '2020-02-06 21:00:57', 1),
(4, 'Ăn vặt/vỉa hè', 'an-vatvia-he', 'Ăn vặt/vỉa hè', '2020-02-06 21:01:33', '2020-02-06 21:01:33', 1),
(5, 'Ăn chay', 'an-chay', 'Ăn chay', '2020-02-06 21:01:58', '2020-02-06 22:11:15', 1),
(7, 'Quán ăn', 'quan-an', 'Quán ăn', '2020-02-06 22:13:57', '2020-02-06 22:13:57', 1),
(9, 'Quán nhậu', 'quan-nhau', 'Quán nhậu', '2020-02-06 22:15:15', '2020-02-06 22:15:15', 1),
(11, 'Tiệm bánh', 'tiem-banh', 'Tiệm bánh', '2020-02-06 22:15:40', '2020-02-06 22:15:40', 1),
(13, 'Shop online', 'shop-online', 'Shop online', '2020-02-06 22:16:04', '2020-02-06 22:16:04', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `avatar`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'tung le', 'thanhtung12121212@gmail.com', '$2y$10$hZJXajjoHbomCDAyT/og.eb84VOO0vGbXltw.tRDeOaSjJBrXjLmq', '123456789', NULL, 1, 'XeqRADjz5kCMceTRUDZLbTe24qVBmRSSS5U7OGTe', '2021-11-08 07:45:24', '2021-11-08 07:45:24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_active_index` (`active`);

--
-- Chỉ mục cho bảng `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_ar_slug_index` (`ar_slug`),
  ADD KEY `areas_ar_active_index` (`ar_active`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_name_unique` (`c_name`),
  ADD KEY `categories_c_slug_index` (`c_slug`),
  ADD KEY `categories_c_active_index` (`c_active`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_or_transaction_id_index` (`or_transaction_id`),
  ADD KEY `orders_or_product_id_index` (`or_product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_pro_slug_index` (`pro_slug`),
  ADD KEY `products_pro_active_index` (`pro_active`),
  ADD KEY `products_pro_typestore_id_index` (`pro_typeStore_id`),
  ADD KEY `products_pro_count_index` (`pro_count`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_ra_store_id_index` (`ra_store_id`),
  ADD KEY `ratings_ra_user_id_index` (`ra_user_id`);

--
-- Chỉ mục cho bảng `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_st_slug_index` (`st_slug`),
  ADD KEY `stores_st_active_index` (`st_active`),
  ADD KEY `stores_st_category_id_index` (`st_category_id`),
  ADD KEY `stores_st_typequality_id_index` (`st_typeQuality_id`),
  ADD KEY `stores_st_area_id_index` (`st_area_id`),
  ADD KEY `stores_st_typecook_id_index` (`st_typeCook_id`),
  ADD KEY `stores_st_typeproduct_id_index` (`st_typeProduct_id`);

--
-- Chỉ mục cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tr_user_id_index` (`tr_user_id`),
  ADD KEY `transactions_tr_status_index` (`tr_status`);

--
-- Chỉ mục cho bảng `type_cooks`
--
ALTER TABLE `type_cooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_cooks_tc_slug_index` (`tc_slug`),
  ADD KEY `type_cooks_tc_active_index` (`tc_active`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_products_tp_slug_index` (`tp_slug`),
  ADD KEY `type_products_tp_active_index` (`tp_active`);

--
-- Chỉ mục cho bảng `type_qualitys`
--
ALTER TABLE `type_qualitys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_qualitys_tq_slug_index` (`tq_slug`),
  ADD KEY `type_qualitys_tq_active_index` (`tq_active`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_active_index` (`active`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `type_cooks`
--
ALTER TABLE `type_cooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `type_qualitys`
--
ALTER TABLE `type_qualitys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 03, 2023 lúc 07:31 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_bqao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `name` varchar(128) NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `name`, `gender`, `birth_date`) VALUES
(1, 'td@gmail.com', '123456', 'Nguyễn Thùy Dương', 2, '2004-04-08'),
(2, 'qa@gmail.com', '123456', 'Nguyễn Quỳnh Anh', 2, '2013-04-17'),
(3, 'longdp21@gmail.com', '123456', 'Đỗ Phi Long', 1, '2001-01-10'),
(11, 'boc120@gmail.com', '123456', 'Đỗ Phi Long', 1, '2011-06-10'),
(110, 'qa16@gmail.com', '123456', 'Đỗ Phi Long', 1, '2023-01-05'),
(112, 'longdp01@gmail.com', '123456', 'Long', 1, '2023-02-02'),
(332, 'duongdoof@gmail.com', '123678', 'Đỗ Phi Long', 1, '2023-01-12'),
(333, 'duongcute123@gmail.com', '123654', 'Đỗ Phi Long', 1, '2023-02-16'),
(443, 'tla106666@gmail.com', '123456', 'Nguyễn Quỳnh Anh', 2, '2023-05-03'),
(1277, 'qa123@gmail.com', '123456', 'Nguyễn Quỳnh Anh', 2, '2023-05-03'),
(2234, 'qanh1662001@gmail.com', '123456', 'Nguyễn Quỳnh Anh', 2, '2023-05-03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_user` int(255) NOT NULL,
  `id_product` int(255) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_user`, `id_product`, `amount`, `qty`, `color`, `size`, `price`, `date`) VALUES
(1, 212, NULL, 1, 'black', '38', 19200000, '2023-05-03 00:21:30'),
(1, 223, NULL, 1, 'white', '37', 4096000, '2023-05-03 00:26:12'),
(2, 217, NULL, 2, 'white', 'S', 4736000, '2023-05-03 22:21:11'),
(3, 222, NULL, 1, 'white', 'Free Size', 2400000, '2023-05-03 22:36:44'),
(6, 216, NULL, 4, 'white', 'S', 18544000, '2023-05-03 22:44:40'),
(7, 223, NULL, 1, 'white', '36', 4096000, '2023-05-03 22:48:11'),
(8, 217, NULL, 4, 'rosybrown', 'XS', 4736000, '2023-05-03 22:57:48'),
(9, 212, NULL, 3, 'black', '36', 19200000, '2023-05-03 23:01:35'),
(10, 2, NULL, 3, 'lightblue', 'S', 10000000, '2023-05-03 23:04:03'),
(10, 217, NULL, 3, 'white', 'S', 4736000, '2023-05-03 23:04:17'),
(11, 223, NULL, 2, 'white', '37', 4096000, '2023-05-03 23:21:37'),
(11, 217, NULL, 2, 'white', 'S', 4736000, '2023-05-03 23:21:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id_catalog` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `name`) VALUES
(1, 'Quần áo'),
(2, 'Giày'),
(3, 'Túi xách'),
(4, 'Phụ kiện'),
(6, 'Váy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_catalog`
--

CREATE TABLE `detail_catalog` (
  `id_dtcatalog` int(11) NOT NULL,
  `name_dcatalog` varchar(130) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_catalog`
--

INSERT INTO `detail_catalog` (`id_dtcatalog`, `name_dcatalog`, `parent_id`) VALUES
(1, 'Áo & Sơ mi', 1),
(2, 'Váy đầm', 1),
(3, 'Quần', 1),
(4, 'Áo khoác & Blazer', 1),
(11, 'Giày & Dép', 2),
(12, 'Giày thể thao', 2),
(13, 'Bốt', 2),
(21, 'Túi đeo vai', 3),
(22, 'Túi quai chéo', 3),
(23, 'Túi tote', 3),
(24, 'Túi thắt lưng & Balo', 3),
(31, 'Ví', 4),
(32, 'Trang sức', 4),
(33, 'Đồng hồ', 4),
(34, 'Kính mắt', 4),
(35, 'Khăn & lụa', 4),
(36, 'Thắt lưng', 4),
(37, 'Mũ & Găng tay', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_order`
--

CREATE TABLE `detail_order` (
  `id_order` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `detail_amount` int(11) DEFAULT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_order`
--

INSERT INTO `detail_order` (`id_order`, `product_id`, `qty`, `detail_amount`, `color`, `size`, `status`) VALUES
(19, 216, 1, 18544000, 'rosybrown', 'XL', '2'),
(20, 219, 1, 17008000, 'rosybrown', 'S', '1'),
(23, 219, 1, 17008000, 'rosybrown', 'S', '1'),
(23, 223, 3, 59184000, 'Đỏ', '36', '1'),
(25, 217, 1, 4736000, 'black', 'S', '1'),
(34, 216, 2, 37088000, 'white', 'M', '1'),
(34, 219, 2, 34016000, 'rosybrown', '41', '1'),
(53, 223, 1, 4096000, 'white', '36', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_product`
--

CREATE TABLE `detail_product` (
  `id_product` int(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `color1` varchar(100) NOT NULL,
  `color2` varchar(100) NOT NULL,
  `color3` varchar(100) NOT NULL,
  `color4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_product`
--

INSERT INTO `detail_product` (`id_product`, `img1`, `img2`, `img3`, `color1`, `color2`, `color3`, `color4`) VALUES
(216, 'summer1.avif', 'summer1_1.avif', 'summer1_2.avif', 'black', 'white', 'rosybrown', ''),
(222, 'flora1.avif', 'flora1_1.avif', 'flora1_2.avif', 'black', 'white', 'rosybrown', ''),
(220, 'flora.avif', 'flora_1.avif', 'flora_2.avif', 'black', 'white', 'rosybrown', ''),
(221, 'flora4.avif', 'flora4_1.avif', 'flora4_2.avif', 'black', 'white', 'rosybrown', ''),
(223, 'flora5.avif', 'flora5_1.avif', 'flora5_2.avif', 'black', 'white', 'rosybrown', ''),
(217, 'summer2.avif', 'summer2_1.avif', 'summer2_2.avif', 'black', 'white', 'rosybrown', ''),
(218, 'summer3.avif', 'summer3_1.avif', 'summer3_2.avif', 'black', 'white', 'rosybrown', ''),
(219, 'summer5.avif\r\n', 'summer5_1.avif', 'summer5_2.avif', 'black', 'white', 'rosybrown', ''),
(1, 'a1.avif', 'a2.avif', 'a3.avif', 'black', 'black', 'lightyellow\r\n', ''),
(2, 'a4.avif', 'a41.avif', 'a42.avif', 'black', 'black', 'lightblue', ''),
(3, 'v1.avif', 'v12.avif', 'v13.avif', 'black', 'black', 'lightyellow', ''),
(4, 'q1.avif', 'q12.avif', 'q13.avif', 'black', 'black', 'brown', ''),
(11, 'a21.avif', 'a22.avif', 'a23.avif', 'black', 'black', '', ''),
(111, 't1.avif', 't11.avif', 't12.avif', 'black', '', '', ''),
(212, 'g1.avif', 'g11.avif', 'g12.avif', 'black', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_order` int(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `created` date DEFAULT current_timestamp(),
  `id_admin` int(11) DEFAULT NULL,
  `address_order` varchar(500) NOT NULL,
  `pay` varchar(100) NOT NULL,
  `ship` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id_order`, `status`, `user_id`, `amount`, `created`, `id_admin`, `address_order`, `pay`, `ship`) VALUES
(19, 2, 1, 35552000, NULL, NULL, 'Hải Dương', 'Thẻ tín dụng/ Ghi nợ', 'Giao hàng nhanh'),
(20, 2, 1, 17008000, NULL, NULL, 'Hải Dương', 'Thanh toán khi nhận hàng', 'Giao hàng nhanh'),
(23, 2, 1, 76192000, NULL, NULL, 'Hải Dương', 'Thẻ tín dụng/ Ghi nợ', 'Giao hàng nhanh'),
(25, 2, 1, 4736000, NULL, NULL, 'Hải Dương', 'Thanh toán khi nhận hàng', 'Giao hàng nhanh'),
(34, 2, 1, 71104000, '2023-04-15', NULL, 'Hải Dương', 'Thẻ tín dụng/ Ghi nợ', 'Giao hàng nhanh'),
(53, 2, 7, 4096000, '2023-05-03', NULL, 'Hà Nội', 'Thanh toán khi nhận hàng', 'Giao hàng nhanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(255) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `name_product` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `discount` int(11) NOT NULL,
  `img` text NOT NULL,
  `created` date DEFAULT current_timestamp(),
  `quantity` int(10) DEFAULT NULL,
  `import_price` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `catalog_id`, `name_product`, `price`, `content`, `discount`, `img`, `created`, `quantity`, `import_price`, `status`, `event`) VALUES
(1, 4, 'Linen canvas jacket', 40000000, 'Bộ sưu tập Xuân Hè 2023 xem xét khái niệm may đo theo một lăng kính mới. Những kiểu dáng cổ điển được diễn giải lại, kết hợp áo khoác tối giản với những dấu hiệu từ những năm 1990, bao gồm cả cảm hứng nội y, để tạo nên sự cập nhật sáng tạo cho tủ quần áo. Chiếc áo khoác bất đối xứng này được trình bày bằng vải lanh trắng nhạt, nổi bật hơn bằng đường viền tương phản và thắt lưng da.\r\n+ Vải lanh trắng\r\n+ Trang trí đường ống Lurex\r\n+ Nút tông vàng\r\n+ Không cổ áo\r\n+ Áo dài tay\r\n+ Vành đai có thể tháo rời\r\n+ Chiều dài: 23,6\", dựa trên cỡ 40 (CNTT)\r\n+ Sản xuất tại Ý\r\n+ Dây da rời: Da bò.\r\n+ Vải: 100% lanh.\r\n+ Lớp lót túi: 100% Viscose.\r\n+ Cắt tỉa: 66% Viscose, 22% Sợi kim loại, 12% Cotton.', 0, 'a1.avif', '2023-04-09', 137, 5000000, 'Đang bán', '0'),
(2, 1, 'Oxford cotton shirt with pleats', 10000000, 'Chất liệu vải cotton Oxford màu xanh nhạt cổ điển với các nếp gấp ở phía trước tạo thành một chi tiết thiết kế đặc biệt xuất hiện trong BST Xuân Hè 2023. Cổ áo nhọn và các nút tự đóng hoàn thiện thiết kế, phù hợp với cảm giác thanh lịch của câu chuyện Ngôi nhà.\r\n+ Bông Oxford màu xanh nhạt\r\n+Nút tự che\r\n+Cổ áo điểm\r\n+Xếp nếp phía trước\r\n+Chiều dài: 28\" dựa trên cỡ 40 (CNTT)\r\n+Sản xuất tại Ý\r\n+ Vải: 100% Cotton.\r\n+ Vải: 100% Lụa.\r\n+ Hình thêu: 100% Polyester.', 0, 'a4.avif\r\n', '2023-04-09', 300, 3000000, 'Đang bán', '0'),
(3, 2, 'Retro tweed dress with chain belt', 25000000, 'Trong một cuộc khám phá sâu sắc về di sản của Gucci, niềm đam mê về quá khứ tiếp tục thấm nhuần các bộ sưu tập của Ngôi nhà. Lấy cảm hứng từ thiết kế cổ điển, bộ sưu tập Xuân Hè 2023 xác định một ý tưởng mới về sự thanh lịch thông qua chất liệu vải tweed. Chiếc váy có cấu trúc này được trình bày bằng vải tuýt cổ điển màu trắng nhạt, nổi bật hơn với đường viền ruy băng tương phản và dây đai có thể tháo rời.\r\n+ Off trắng tweed retro\r\n+ Viền ruy băng màu xanh đậm\r\n+ Nút neo tông vàng\r\n+ Bản vá thêu chữ G lồng vào nhau tròn lót\r\n+ Cổ thuyền\r\n+ Tay áo ngắn\r\n+ Đai xích có thể tháo rời với Khóa liên động G\r\n+ Hai túi phía trước\r\n+ Đóng nút\r\n+ Chiều dài: 33,4\", dựa trên cỡ 40 (CNTT)\r\n+ Sản xuất tại Ý\r\n+ Sản phẩm hiển thị trong hình ảnh này có kích thước 40 (CNTT)\r\n+ Chất liệu vải: 86% Len, 14% Polyamit.\r\n+ Lớp lót: 100% Viscose.\r\n+ Chi tiết: 97% Acetate, 3% Polyester.\r\n+ Ứng dụng: 100% Polyester.', 0, 'v1.avif\r\n', '2023-04-09', 10, 12000000, 'Đang bán', '0'),
(4, 3, 'Leather jogging pant', 15000000, 'Sự pha trộn giữa các thiết kế và chất liệu bất ngờ đã tạo nên những món đồ may sẵn xuyên suốt bộ sưu tập Xuân Hè 2023. Được chế tác từ da nâu, chiếc quần này có cạp chun co giãn với dây rút, một chi tiết gợi nhớ đến các thiết kế lấy cảm hứng từ thể thao.\r\n+ Da nâu\r\n+ Thắt lưng đàn hồi với dây rút\r\n+ Túi hai bên\r\n+ Hai túi zip phía sau\r\n+ Còng đàn hồi\r\n+ Sản xuất tại Ý\r\n+ Da thật: Da cừu.\r\n+ Lớp lót: 100% Viscose.', 0, 'q1.avif\r\n', '2023-04-09', 15, 5000000, 'Đang bán', '0'),
(11, 4, 'Soft wool silk jacket', 12000000, 'Tiếp tục khám phá trang phục trang trọng bằng cách tiếp cận độc đáo, bộ sưu tập Xuân Hè 2023 xem xét khái niệm may đo theo một lăng kính mới. The House diễn giải lại những hình bóng cổ điển, kết hợp những chiếc áo khoác tối giản với những dấu hiệu từ những năm 1990, bao gồm cả những cảm hứng về nội y, để tạo ra một bản cập nhật sáng tạo cho tủ quần áo. Chiếc áo khoác lụa có cấu trúc này được trình bày bằng vải lụa len mềm mại, đặc trưng bởi thắt lưng da có thể tháo rời với khóa kim loại tương phản.\r\n+ Len lụa mềm màu đen\r\n+ Cổ tròn\r\n+ Tay áo ngắn với còng bật lên\r\n+ Bốn túi phía trước\r\n+ Thắt lưng da có thể tháo rời với khóa kim loại\r\n+ Lỗ thông hơi phía sau\r\n+ Sản xuất tại Ý\r\n+ Dây da rời: Da bò.\r\n+ Chất liệu vải: 75% Len, 25% Lụa.\r\n+ Lớp lót: 100% Lụa.\r\n+ Lớp lót túi: 100% Viscose.', 0, 'a21.avif\r\n', '2023-04-09', 20, 3000000, 'Đang bán', '0'),
(111, 21, 'Gucci Blondie top handle bag', 23000000, 'Round Interlocking G đặc trưng cho dòng Gucci Blondie bắt nguồn từ kho lưu trữ của House. Những món đồ đặc trưng như chiếc túi đeo vai và đeo chéo Gucci Blondie có tay cầm phía trên này tái hiện biểu tượng như một chi tiết vá da tinh tế hơn.\r\n+ Da đen\r\n+ Miếng dán da Round Interlocking G\r\n+ Tay cầm trên cùng với độ rơi 3,1\"\r\n+ Dây đeo vai có thể điều chỉnh với độ rơi 20,5\"\r\n+ Khóa kéo đôi với Round Interlocking G\r\n6,7\"Rộng x 5,9\"H x 3,5\"Sâu\r\n+ Sản xuất tại Ý\r\n', 0, 't1.avif\r\n', '2023-04-09', 30, 7000000, 'Đang bán', '0'),
(165, 3, 'Quần đùi', 12000000, 'Đẹp', 0, 'loai3.png', '2023-05-03', 12, 7500000, 'Đang bán', ''),
(177, 2, 'Váy ', 12000000, 'Đẹp', 0, 'logo.png', '2023-05-03', 12, 7500000, 'Đang bán', ''),
(212, 12, 'Women\'s GG sneaker', 19200000, 'Được sử dụng lần đầu tiên vào những năm 1970, logo GG là sự phát triển của thiết kế hình thoi nguyên bản của Gucci từ những năm 1930, và từ đó nó trở thành biểu tượng lâu đời cho di sản của Ngôi nhà. Ở đây, mẫu xác định đôi giày thể thao này có màu sắc rực rỡ. Làm sâu sắc thêm mối liên hệ với di sản của các thương hiệu, logo G lồng vào nhau được in xuất hiện ở phía sau.\r\n+ Da trắng\r\n+ Vải GG thêu nhiều màu của phụ nữ\r\n+ Logo Interlocking G được in ở mặt sau\r\n+ Đế cao su\r\n+ Đi kèm thêm cặp dây buộc đóng cửa ren\r\ngót giữa\r\n+ Chiều cao 2,2\"\r\n+ Sản xuất tại Ý\r\n', 0, 'g1.avif\r\n', '2023-04-09', 45, 4200000, 'Đang bán', '0'),
(216, 4, 'Áo khoác len crepe', 18544000, 'Tiếp tục khám phá trang phục trang trọng bằng cách tiếp cận độc đáo, bộ sưu tập Xuân Hè 2023 xem xét khái niệm may đo theo một lăng kính mới. Ngôi nhà diễn giải lại những hình bóng cổ điển, kết hợp những chiếc áo khoác tối giản với những dấu hiệu từ những năm 1990 để tạo nên một bản cập nhật sáng tạo cho tủ quần áo. Chiếc áo khoác len crêpe này có khóa G hình chữ nhật đậm.\r\n+Len crepe màu ngà\r\n+Nút GG có tông vàng\r\n+Cổ áo có thể tháo rời\r\n+Thắt lưng tự buộc có thể tháo rời với khóa G hình chữ nhật đậm\r\n+Hai túi phía trước\r\n+Chiều dài: 71cm, dựa trên cỡ 40 (CNTT)\r\n+Sản xuất tại Ý\r\n+Sản phẩm hiển thị trong hình ảnh này có kích thước 40 (CNTT)\r\n+Dây da rời: Da bò.\r\n+Vải: 100% Len.\r\n+Lớp lót: 100% Viscose.', 0, 'summer1.avif', '2023-04-13', -19, 8000000, 'Đang bán', 'summer2023'),
(217, 1, 'Áo sơ mi vải bông', 4736000, 'Thể hiện phong cách ready-to-wear cổ điển. Chiếc áo sơ mi bằng cotton poplin màu đen này có cổ áo nhọn và chi tiết cầu vai. Một nút đóng hoàn thành thiết kế.<br>\r\n\r\n+Poplin bông màu đen <br>\r\n+Cổ áo điểm <br>\r\n+Đóng nút <br>\r\n+Chiều dài: 35cm dựa trên cỡ 40 (CNTT)<br>\r\n+Sản xuất tại Ý <br>\r\n+Sản phẩm hiển thị trong hình ảnh này có kích thước 40 (CNTT) <br>\r\n+Vải: 100% Cotton. <br>\r\n+Các chi tiết có thể tháo rời: 100% Silk.', 0, 'summer2.avif', '2023-04-13', 0, 3315200, 'Đang bán', 'summer2023'),
(218, 4, 'Áo khoác len lụa mềm mại', 19728000, 'Tiếp tục khám phá trang phục trang trọng bằng cách tiếp cận độc đáo, bộ sưu tập Xuân Hè 2023 xem xét khái niệm may đo theo một lăng kính mới. The House diễn giải lại những hình bóng cổ điển, kết hợp những chiếc áo khoác tối giản với những dấu hiệu từ những năm 1990, bao gồm cả những cảm hứng về nội y, để tạo ra một bản cập nhật sáng tạo cho tủ quần áo. Chiếc áo khoác lụa có cấu trúc này được trình bày bằng vải lụa len mềm mại, đặc trưng bởi thắt lưng da có thể tháo rời với khóa kim loại tương phản.\r\n+Len lụa mềm màu đen\r\n+cổ tròn\r\n+Tay áo ngắn với còng bật lên\r\n+Bốn túi phía trước\r\n+Thắt lưng da có thể tháo rời với khóa kim loại\r\n+Lỗ thông hơi phía sau\r\n+Chiều dài: 72cm, dựa trên cỡ 38 (CNTT)\r\n+Sản xuất tại Ý\r\n+Sản phẩm hiển thị trong hình ảnh này có kích thước 38 (CNTT)\r\n+Dây da rời: Da bò.\r\n+Chất liệu vải: 75% Len, 25% Lụa.\r\n+Lớp lót: 100% Lụa.\r\n+Lớp lót túi: 100% Viscose.', 0, 'summer3.avif', '2023-04-13', 7, 10809600, 'Đang bán', 'summer2023'),
(219, 21, 'Túi đeo vai nhỏ Gucci Deco', 17008000, 'Bị cuốn hút bởi quá khứ, Gucci tiếp tục mở rộng tầm nhìn của mình bằng cách xem lại những kiểu dáng cổ điển và chất liệu tinh tế. Với thiết kế chần bông, những chiếc túi mới làm nổi bật các biểu tượng tiêu biểu từ kho lưu trữ để tạo cảm giác cổ điển, chẳng hạn như phần cứng G lồng vào nhau trên nắp đóng, viền da lấy cảm hứng từ thập niên 70 và dây đeo vai dạng chuỗi, giống như chiếc túi đeo vai này.\r\n\r\n+Da chần bông màu trắng\r\n+Phần cứng tông vàng\r\n+Lót da\r\n+Chi tiết G lồng vào nhau\r\n+Nội thất: 1 túi khóa kéo\r\n+Dây đeo xích trượt có thể được đeo như một dây đeo vai với độ rơi 47,5 cm hoặc có thể đeo như một tay cầm trên cùng với độ rơi 26 cm\r\n+Trọng lượng: xấp xỉ .9kg\r\n+Kích thước trung bình: W25cm x H19.5cm x D8cm\r\n+Sản xuất tại Ý', 0, 'summer5.avif', '2023-04-13', 0, 11809600, 'Đang bán', 'summer2023'),
(220, 35, 'Khăn lụa in hình GG Flora', 2704000, 'Các thiết kế lưu trữ tiếp tục là nguồn cảm hứng cho các bộ sưu tập mới. Các họa tiết thực vật phức tạp đã được tái sử dụng qua lăng kính hiện đại, nở rộ trên nền chữ lồng GG.\r\n+GG Flora in hoa hồng và lụa ngà\r\n+W90cm x H90cm\r\n+Sản xuất tại Ý\r\n+100% lụa', 0, 'flora.avif', '2023-04-13', 130, 1304000, 'Đang bán', 'flora2023'),
(221, 23, 'Túi tote lớn Ophidia GG Flora', 9424000, 'Được thiết kế lần đầu vào những năm 1960 bởi nghệ sĩ Vittorio Accornero, họa tiết Flora lịch sử tiếp tục phát triển cho đến ngày nay. Họa tiết hoa giờ đây làm phong phú thêm các loại hành lý này với tính chất lãng mạn, xuất hiện dưới dạng một bản in nhiều màu trên họa tiết GG. Một sọc Web màu xanh lá cây và đỏ hoàn thành phong cách.\r\n\r\n+Nhiều màu GG Supreme Flora in canvas\r\n+Sọc xanh và đỏ\r\n+Bên trong: 1 túi zip\r\n+Xử lý với độ rơi 8,3\"\r\n+Trọng lượng: 760gr. khoảng\r\n+15,7\"W x 13\"H x 7,5\"D\r\n+Sản xuất tại Ý', 0, 'flora4.avif', '2023-04-13', 23, 3315200, NULL, 'flora2023'),
(222, 31, 'Ví đựng thẻ Ophidia GG Flora', 2400000, 'Ban đầu được tạo ra vào những năm 1960 bởi nghệ sĩ Vittorio Accornero, họa tiết Flora lịch sử đã tiếp tục phát triển qua nhiều thập kỷ. Tại đây, nó làm phong phú thêm loạt sản phẩm da nhỏ mới nhất của Gucci với tính chất lãng mạn, xuất hiện dưới dạng một bản in nhiều màu trên họa tiết GG.\r\n\r\n+Nhiều màu GG Supreme Flora in canvas\r\n+Phần cứng tông vàng\r\n+Sọc xanh và đỏ\r\n+Năm khe cắm thẻ\r\n+Một ngăn hóa đơn\r\n+Túi dây kéo bên trong\r\n+Đóng nút chụp\r\n+Mở: W11cm x H17,5cm\r\n+Đã đóng: W11cm x H8.5cm x D3cm\r\n+Sản xuất tại Ý', 0, 'flora1.avif', '2023-04-13', 34, 600000, 'Đang bán', 'flora2023'),
(223, 11, 'Giày lười Gucci Jordaan Flora', 4096000, 'Họa tiết Flora lịch sử từ những năm 1960 được thiết kế bởi nghệ sĩ Vittorio Accornero. Họa tiết hoa làm phong phú thêm vẻ lãng mạn cho đôi giày lười này, xuất hiện dưới dạng một bản in nhiều màu trên họa tiết GG.\r\n+Phần cứng tông vàng\r\n+Viền da màu xanh đậm\r\n+Da duy nhất\r\n+Phẳng\r\n+Chiều cao gót 10 mm\r\n+Sản xuất tại Ý', 0, 'flora5.avif', '2023-04-13', 21, 1796000, 'Đang bán', 'flora2023'),
(421, 1, 'Áo', 122, 'sâsas', 0, 'a1.avif', '2023-04-15', 12, 12, 'Đang bán', ''),
(12345, 3, 'Quần ngắn', 12000000, 'Đẹp', 0, 'iconbuon.jpg', '2023-05-03', 12, 7600000, 'Đang bán', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `name_user` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(128) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created` date NOT NULL,
  `date_birth` date NOT NULL,
  `gender_user` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `email`, `phone`, `address`, `password`, `created`, `date_birth`, `gender_user`) VALUES
(1, 'Nguyễn Thị Ngọc Bích', 'b@gmail.com', '0965412236', 'Hải Dương', '123654', '2023-04-09', '2001-02-28', 2),
(2, 'Nguyễn Quỳnh Anh ', 'qa1662001@gmail.com', '9374627473', 'Thanh Hoá', 'Qa1662001', '0000-00-00', '2023-05-03', 2),
(3, 'Nguyễn Quỳnh Anh ', 'qanh@gmail.com', '9374627473', 'Hà Nội', '123456', '0000-00-00', '2023-05-03', 2),
(4, 'Nguyễn Quỳnh Anh ', 'tuanb1806', '9374627473', 'Hà Nội', 'd', '0000-00-00', '2023-05-03', 2),
(5, 'Nguyễn Quỳnh Anh ', 'qa166@gmail.com', '9374627473', 'Hà Nội', '123456', '0000-00-00', '2023-05-03', 2),
(6, 'Nguyễn Quỳnh Anh ', 'qa2001@gmail.com', '9374627473', 'Hà Nội', '123456', '0000-00-00', '2023-05-03', 2),
(7, 'Nguyễn Quỳnh Anh ', 'qa1234@gmail.com', '9374627473', 'Hà Nội', '123456', '0000-00-00', '2023-05-03', 1),
(8, 'Nguyễn Quỳnh Anh ', 'quynhanh@gmail.com', '9374627473', 'Hà Nội', '123456', '0000-00-00', '2023-05-03', 2),
(9, 'Nguyễn Quỳnh Anh ', 'quynhanh123@gmail.com', '9374627473', 'Hà Nội', '123456', '0000-00-00', '2023-05-03', 2),
(10, 'Nguyễn Quỳnh Anh ', 'qanh123456@gmail.com', '9374627473', 'Hà Nội', '123456', '0000-00-00', '2023-05-03', 2),
(11, 'Nguyễn Quỳnh Anh ', 'qa4321@gmail.com', '9374627473', 'Hà Nội', '123456', '0000-00-00', '2023-05-03', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- Chỉ mục cho bảng `detail_catalog`
--
ALTER TABLE `detail_catalog`
  ADD PRIMARY KEY (`id_dtcatalog`),
  ADD KEY `detail_catalog_ibfk_1` (`parent_id`);

--
-- Chỉ mục cho bảng `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_order`,`product_id`,`color`,`size`) USING BTREE,
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `detail_product`
--
ALTER TABLE `detail_product`
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `catalog_id` (`catalog_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2235;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `detail_catalog`
--
ALTER TABLE `detail_catalog`
  MODIFY `id_dtcatalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `detail_catalog`
--
ALTER TABLE `detail_catalog`
  ADD CONSTRAINT `detail_catalog_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `catalog` (`id_catalog`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `detail_product`
--
ALTER TABLE `detail_product`
  ADD CONSTRAINT `detail_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`catalog_id`) REFERENCES `detail_catalog` (`id_dtcatalog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

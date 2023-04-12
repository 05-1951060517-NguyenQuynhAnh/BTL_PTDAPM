-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 03:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wb_banquanao`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
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
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `name`, `gender`, `birth_date`) VALUES
(1, 'td@gmail.com', '123456', 'Nguyễn Thùy Dương', 0, '2004-04-08'),
(2, 'qa@gmail.com', '123456', 'Nguyễn Quỳnh Anh', 0, '2013-04-17'),
(3, 'longdp21@gmail.com', '123456', 'Đỗ Phi Long', 1, '2001-01-10'),
(11, 'boc120@gmail.com', '123456', 'Đỗ Phi Long', 1, '2011-06-10'),
(110, 'qa16@gmail.com', '123456', 'Đỗ Phi Long', 1, '2023-01-05'),
(112, 'longdp01@gmail.com', '123456', 'Long', 1, '2023-02-02'),
(332, 'duongdoof@gmail.com', '123678', 'Đỗ Phi Long', 1, '2023-01-12'),
(333, 'duongcute123@gmail.com', '123654', 'Đỗ Phi Long', 1, '2023-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_user` int(255) NOT NULL,
  `id_product` int(255) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id_catalog` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `name`) VALUES
(1, 'Quần áo'),
(2, 'Giày'),
(3, 'Túi xách'),
(4, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `detail_catalog`
--

CREATE TABLE `detail_catalog` (
  `id_dtcatalog` int(11) NOT NULL,
  `name_dcatalog` varchar(130) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detail_catalog`
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
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_order` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `amount` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id_order`, `product_id`, `qty`, `amount`, `status`) VALUES
(1, 111, 12, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  `address_order` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `status`, `user_id`, `amount`, `created`, `id_admin`, `address_order`) VALUES
(1, 0, 1, 1, '2023-04-11', 3, 'Ha noi');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(255) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `name_product` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `discount` int(11) NOT NULL,
  `image_list` text NOT NULL,
  `created` date DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `import_price` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `catalog_id`, `name_product`, `price`, `content`, `discount`, `image_list`, `created`, `quantity`, `import_price`, `status`) VALUES
(1, 4, 'Linen canvas jacket', 4000, 'Bộ sưu tập Xuân Hè 2023 xem xét khái niệm may đo theo một lăng kính mới. Những kiểu dáng cổ điển được diễn giải lại, kết hợp áo khoác tối giản với những dấu hiệu từ những năm 1990, bao gồm cả cảm hứng nội y, để tạo nên sự cập nhật sáng tạo cho tủ quần áo. Chiếc áo khoác bất đối xứng này được trình bày bằng vải lanh trắng nhạt, nổi bật hơn bằng đường viền tương phản và thắt lưng da.\r\n+ Vải lanh trắng\r\n+ Trang trí đường ống Lurex\r\n+ Nút tông vàng\r\n+ Không cổ áo\r\n+ Áo dài tay\r\n+ Vành đai có thể tháo rời\r\n+ Chiều dài: 23,6\", dựa trên cỡ 40 (CNTT)\r\n+ Sản xuất tại Ý\r\n+ Dây da rời: Da bò.\r\n+ Vải: 100% lanh.\r\n+ Lớp lót túi: 100% Viscose.\r\n+ Cắt tỉa: 66% Viscose, 22% Sợi kim loại, 12% Cotton.', 0, 'a1.avif', '2023-04-09', 137, 3000, 'Đang bán'),
(2, 1, 'Oxford cotton shirt with pleats', 1000, 'Chất liệu vải cotton Oxford màu xanh nhạt cổ điển với các nếp gấp ở phía trước tạo thành một chi tiết thiết kế đặc biệt xuất hiện trong BST Xuân Hè 2023. Cổ áo nhọn và các nút tự đóng hoàn thiện thiết kế, phù hợp với cảm giác thanh lịch của câu chuyện Ngôi nhà.\r\n+ Bông Oxford màu xanh nhạt\r\n+Nút tự che\r\n+Cổ áo điểm\r\n+Xếp nếp phía trước\r\n+Chiều dài: 28\" dựa trên cỡ 40 (CNTT)\r\n+Sản xuất tại Ý\r\n+ Vải: 100% Cotton.\r\n+ Vải: 100% Lụa.\r\n+ Hình thêu: 100% Polyester.', 0, 'a4.avif\r\n', '2023-04-09', 300, 600, 'Đang bán'),
(3, 2, 'Retro tweed dress with chain belt', 2500, 'Trong một cuộc khám phá sâu sắc về di sản của Gucci, niềm đam mê về quá khứ tiếp tục thấm nhuần các bộ sưu tập của Ngôi nhà. Lấy cảm hứng từ thiết kế cổ điển, bộ sưu tập Xuân Hè 2023 xác định một ý tưởng mới về sự thanh lịch thông qua chất liệu vải tweed. Chiếc váy có cấu trúc này được trình bày bằng vải tuýt cổ điển màu trắng nhạt, nổi bật hơn với đường viền ruy băng tương phản và dây đai có thể tháo rời.\r\n+ Off trắng tweed retro\r\n+ Viền ruy băng màu xanh đậm\r\n+ Nút neo tông vàng\r\n+ Bản vá thêu chữ G lồng vào nhau tròn lót\r\n+ Cổ thuyền\r\n+ Tay áo ngắn\r\n+ Đai xích có thể tháo rời với Khóa liên động G\r\n+ Hai túi phía trước\r\n+ Đóng nút\r\n+ Chiều dài: 33,4\", dựa trên cỡ 40 (CNTT)\r\n+ Sản xuất tại Ý\r\n+ Sản phẩm hiển thị trong hình ảnh này có kích thước 40 (CNTT)\r\n+ Chất liệu vải: 86% Len, 14% Polyamit.\r\n+ Lớp lót: 100% Viscose.\r\n+ Chi tiết: 97% Acetate, 3% Polyester.\r\n+ Ứng dụng: 100% Polyester.', 0, 'v1.avif\r\nv12.avif\r\nv13.avif', '2023-04-09', 10, 2200, 'Đang bán'),
(4, 3, 'Leather jogging pant', 1500, 'Sự pha trộn giữa các thiết kế và chất liệu bất ngờ đã tạo nên những món đồ may sẵn xuyên suốt bộ sưu tập Xuân Hè 2023. Được chế tác từ da nâu, chiếc quần này có cạp chun co giãn với dây rút, một chi tiết gợi nhớ đến các thiết kế lấy cảm hứng từ thể thao.\r\n+ Da nâu\r\n+ Thắt lưng đàn hồi với dây rút\r\n+ Túi hai bên\r\n+ Hai túi zip phía sau\r\n+ Còng đàn hồi\r\n+ Sản xuất tại Ý\r\n+ Da thật: Da cừu.\r\n+ Lớp lót: 100% Viscose.', 0, 'q1.avif\r\nq12.avif\r\nq13.avif', '2023-04-09', 15, 1200, 'Đang bán'),
(11, 4, 'Soft wool silk jacket', 1200, 'Tiếp tục khám phá trang phục trang trọng bằng cách tiếp cận độc đáo, bộ sưu tập Xuân Hè 2023 xem xét khái niệm may đo theo một lăng kính mới. The House diễn giải lại những hình bóng cổ điển, kết hợp những chiếc áo khoác tối giản với những dấu hiệu từ những năm 1990, bao gồm cả những cảm hứng về nội y, để tạo ra một bản cập nhật sáng tạo cho tủ quần áo. Chiếc áo khoác lụa có cấu trúc này được trình bày bằng vải lụa len mềm mại, đặc trưng bởi thắt lưng da có thể tháo rời với khóa kim loại tương phản.\r\n+ Len lụa mềm màu đen\r\n+ Cổ tròn\r\n+ Tay áo ngắn với còng bật lên\r\n+ Bốn túi phía trước\r\n+ Thắt lưng da có thể tháo rời với khóa kim loại\r\n+ Lỗ thông hơi phía sau\r\n+ Sản xuất tại Ý\r\n+ Dây da rời: Da bò.\r\n+ Chất liệu vải: 75% Len, 25% Lụa.\r\n+ Lớp lót: 100% Lụa.\r\n+ Lớp lót túi: 100% Viscose.', 0, 'a21.avif\r\na22.avif\r\na23.avif', '2023-04-09', 20, 1000, 'Đang bán'),
(111, 21, 'Gucci Blondie top handle bag', 2300, 'Round Interlocking G đặc trưng cho dòng Gucci Blondie bắt nguồn từ kho lưu trữ của House. Những món đồ đặc trưng như chiếc túi đeo vai và đeo chéo Gucci Blondie có tay cầm phía trên này tái hiện biểu tượng như một chi tiết vá da tinh tế hơn.\r\n+ Da đen\r\n+ Miếng dán da Round Interlocking G\r\n+ Tay cầm trên cùng với độ rơi 3,1\"\r\n+ Dây đeo vai có thể điều chỉnh với độ rơi 20,5\"\r\n+ Khóa kéo đôi với Round Interlocking G\r\n6,7\"Rộng x 5,9\"H x 3,5\"Sâu\r\n+ Sản xuất tại Ý\r\n', 0, 't1.avif\r\nt11.avif\r\nt12.avif', '2023-04-09', 30, 2100, 'Đang bán'),
(212, 12, 'Women\'s GG sneaker', 1920, 'Được sử dụng lần đầu tiên vào những năm 1970, logo GG là sự phát triển của thiết kế hình thoi nguyên bản của Gucci từ những năm 1930, và từ đó nó trở thành biểu tượng lâu đời cho di sản của Ngôi nhà. Ở đây, mẫu xác định đôi giày thể thao này có màu sắc rực rỡ. Làm sâu sắc thêm mối liên hệ với di sản của các thương hiệu, logo G lồng vào nhau được in xuất hiện ở phía sau.\r\n+ Da trắng\r\n+ Vải GG thêu nhiều màu của phụ nữ\r\n+ Logo Interlocking G được in ở mặt sau\r\n+ Đế cao su\r\n+ Đi kèm thêm cặp dây buộc đóng cửa ren\r\ngót giữa\r\n+ Chiều cao 2,2\"\r\n+ Sản xuất tại Ý\r\n', 0, 'g1.avif\r\ng11.avif\r\ng12.avif', '2023-04-09', 1000, 1800, 'Đang bán');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `email`, `phone`, `address`, `password`, `created`, `date_birth`, `gender_user`) VALUES
(1, 'Nguyễn Thị Ngọc Bích', 'b@gmail.com', '0965412236', 'Hải Dương', '123654', '2023-04-09', '2001-02-28', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- Indexes for table `detail_catalog`
--
ALTER TABLE `detail_catalog`
  ADD PRIMARY KEY (`id_dtcatalog`),
  ADD KEY `detail_catalog_ibfk_1` (`parent_id`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_order`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `catalog_id` (`catalog_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_catalog`
--
ALTER TABLE `detail_catalog`
  MODIFY `id_dtcatalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `detail_catalog`
--
ALTER TABLE `detail_catalog`
  ADD CONSTRAINT `detail_catalog_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `catalog` (`id_catalog`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`catalog_id`) REFERENCES `detail_catalog` (`id_dtcatalog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

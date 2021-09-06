-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 06, 2020 lúc 10:58 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `medicom`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `service` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `username`, `password`, `service`) VALUES
(1, 'Nguyễn Nam Hồng', 'admin', '$2y$10$RlgAMYjKYtSh3AecucEJXO.d71.mQlAqf3eWHHFkDUmWhnui3wSXm', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `id_skill` int(11) NOT NULL,
  `name_skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id_skill`, `name_skill`) VALUES
(2, 'Cường Minh'),
(1, 'Medicom'),
(4, 'Minh Quang'),
(3, 'Vạn Hoa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `name_post` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `description_n` varchar(225) NOT NULL,
  `description` longtext NOT NULL,
  `category` int(1) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id_post`, `name_post`, `avatar`, `description_n`, `description`, `category`, `date`) VALUES
(2, 'Nguyễn Nam Hồng', 'views/assets/img/post/20200326072034.png', 'Nguyễn Nam Hồng', '<p>Nguyễn Nam Hồng</p><p><img src=\"views/assets/img/post/eecca5b6365d9607ee5a9d336962c534.jpg\" data-filename=\"hinh-anh-hot-girl-xinh-de-thuong-1\" style=\"width: 640px;\"><br></p>', 0, '03/26/2020'),
(4, 'Tác dụng & cách sử dụng mật ong rừng với sức khỏe', 'views/assets/img/post/20200326081542.png', 'Tác dụng & cách sử dụng mật ong rừng với sức khỏe', '<p>Website thời nay trở thành bộ mặt của doanh nghiệp, là thứ không thể thiếu khi nói về thông tin của một doanh nghiệp hay tổ chức. Trong các năm gần đây, có một loại trang web được trở nên phổ biến rộng rãi, đó là Landing page - một loại trang web chỉ sử dụng front end (bao gồm HTML, CSS). Chỉ với Landing page, một website giới thiệu cho một doanh nghiệp nhỏ có thể được hoàn thành, hay một trang website đơn giản để bày bán sản phẩm cũng chỉ cần sử dụng Landing Page, và đặc biệt các học viên có thể làm một bản hồ sơ năng lực online chỉ bằng Landing page. Tại Khóa học, chúng tôi dạy cho bạn các kiến thức về front end mà sản phẩm đầu ra chính là một Landing page và cách thiết kế blog cá nhân cho từng học viên.</p><p><br></p><table class=\"table table-bordered\"><tbody><tr><td>Độ rộng</td><td>10 m</td></tr><tr><td>Độ cao</td><td>20 m</td></tr><tr><td>Độ cận</td><td>0 độ</td></tr></tbody></table><p><img src=\"views/assets/img/post/0e65972dce68dad4d52d063967f0a705.jpg\" data-filename=\"21505\" style=\"width: 1101px;\"><br></p>', 0, '03/26/2020'),
(5, 'Nguyễn Nam Hồng 1', 'views/assets/img/post/20200326102631.png', 'Tôn trọng và tin cậy, Chuyên nghiệp và liêm chính, Tận tâm và nhiệt tình.', '<p>Tôn trọng và tin cậy, Chuyên nghiệp và liêm chính, Tận tâm và nhiệt tình.<br></p>', 0, '03/26/2020'),
(7, 'Nguyễn Nam Hồng', 'views/assets/img/post/20200403181312.png', 'get_company_update', '<p>get_company_update<br></p>', 2, '04/03/2020'),
(8, 'Nguyễn Nam Hồng', 'views/assets/img/post/20200403182327.png', 'Nguyễn Nam Hồng', '<p>Nguyễn Nam Hồng<br></p>', 2, '04/03/2020');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_company`
--

CREATE TABLE `post_company` (
  `id_teacher` int(11) NOT NULL,
  `name_skill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `post_company`
--

INSERT INTO `post_company` (`id_teacher`, `name_skill`) VALUES
(8, 'Cường Minh'),
(7, 'Vạn Hoa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_top`
--

CREATE TABLE `post_top` (
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `post_top`
--

INSERT INTO `post_top` (`id_post`) VALUES
(5),
(4),
(2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register`
--

CREATE TABLE `register` (
  `id_register_course` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `course` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_skill`),
  ADD UNIQUE KEY `name_skill` (`name_skill`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Chỉ mục cho bảng `post_company`
--
ALTER TABLE `post_company`
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Chỉ mục cho bảng `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_register_course`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `register`
--
ALTER TABLE `register`
  MODIFY `id_register_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

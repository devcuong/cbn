-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 17, 2020 lúc 07:36 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cbn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `review` int(11) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `reply`
--

INSERT INTO `reply` (`id`, `school`, `review`, `data`) VALUES
(1, 3, 1, '[{\"replyer\":\"Ẩn danh\",\"member\":\"0\",\"reaction\":\"LIKE\",\"noidung\":\"Bác nói đúng vãi, tặng 1 like\",\"thoigian\":\"2020-03-01 15:59:41\"},{\"replyer\":\"Ẩn danh\",\"member\":\"0\",\"reaction\":\"LIKE\",\"noidung\":\"Review nhảm nhí, dislike\",\"thoigian\":\"2020-03-01 16:10:56\"}]'),
(13, 3, 2, '[{\"replyer\":\"Khách\",\"member\":\"0\",\"reaction\":\"LIKE\",\"noidung\":\"Khởi tố vụ án chiếm đoạt tài liệu bí mật nhà nước\",\"thoigian\":\"2020-07-17 02:25:46\"},{\"replyer\":\"Khách\",\"member\":\"0\",\"reaction\":\"HATE\",\"noidung\":\"Thúy Nga Chửi Rủa Trấn Thành Xối Xả Vì Dám Nói Minh Ế Thâm Niên | Hài Trấn Thành 2018\",\"thoigian\":\"2020-07-17 02:57:45\"},{\"replyer\":\"Khách\",\"member\":\"0\",\"reaction\":\"DELETE\",\"noidung\":\"Bằng ĐẠI HỌC có quan trọng không anh? | Nguyễn Hữu Trí | Đài tiếng nói ông Quéo #1\",\"thoigian\":\"2020-07-17 02:59:12\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` int(100) NOT NULL,
  `reviewer` varchar(100) NOT NULL,
  `member` int(11) NOT NULL,
  `about` varchar(100) NOT NULL,
  `sao` int(1) NOT NULL,
  `noidung` text NOT NULL,
  `school` int(11) NOT NULL,
  `thoigian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`id`, `reviewer`, `member`, `about`, `sao`, `noidung`, `school`, `thoigian`) VALUES
(1, 'Ẩn Danh', 0, 'Đang học', 4, 'mình mới pv tuần trước. chưa biết kq thế nào nhưng thấy tác phong đón tiếp cũng chuyên nghiệp, có hai vòng , vòng 1 là technical, vòng 2 pv với nhân sự, kq hai vòng là độc lập và sẽ được đánh giá chung thành thang điểm dựa trên 10 tiêu chí, từ đó được đưa vào hệ thống đánh giá rank lương cho ứng viên và ko phụ thuộc về mặt con người\r\n', 3, '2020-07-13 22:09:22'),
(2, 'Khách', 0, 'Tìm hiểu trường', 3, 'Trường mọi thứ đều ok', 3, '2020-07-16 21:54:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `tenschool` varchar(100) NOT NULL,
  `slugschool` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `slugcategory` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `luotdanhgia` int(11) NOT NULL,
  `tongsao` int(11) NOT NULL,
  `rate` float NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `thoigian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `school`
--

INSERT INTO `school` (`id`, `tenschool`, `slugschool`, `category`, `slugcategory`, `logo`, `website`, `luotdanhgia`, `tongsao`, `rate`, `diachi`, `thoigian`) VALUES
(3, 'Bách Khoa - ĐHQG TP.HCM', 'bach-khoa-dhqg-tphcm', 'Đại học', 'dai-hoc', 'dhbk-dhqg.png', 'https://www.hcmut.edu.vn/vi', 2, 7, 3.5, '268 Lý Thường Kiệt, Phường 14, Quận 10, TP HCM', '2020-07-16 21:54:44'),
(4, 'Newsky', 'newsky', 'Trung Tâm Tiếng Anh', 'trung-tam-tieng-anh', 'newsky.png', 'http://newsky.edu.vn/', 0, 0, 0, '292 Âu Cơ, Phường 10, Q.Tân Bình, Tp.HCM  Vui lòng giữ nguồn: http://newsky.edu.vn/lien-he/', '2020-07-17 23:19:34'),
(5, 'kanata', 'kanata', 'Trung Tâm Tiếng Hàn', 'trung-tam-tieng-han', 'katana.png', 'kanata.edu.vn', 0, 0, 0, '384/19 Nam Kỳ Khởi Nghĩa, Phường 8, Quận 3, TP.HCM', '2020-07-17 23:30:59'),
(6, 'SHZ', 'shz', 'Trung Tâm Tiếng Trung', 'trung-tam-tieng-trung', 'shz.png', 'https://hoavanshz.com/', 0, 0, 0, '247 Nguyễn Thị Minh Khai, P Nguyễn Cư Trinh, Quận 1', '2020-07-17 23:36:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(0, 'viettxt@gmail.com', '9ffe76c47d51bbe9faee835b9b04ddba');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

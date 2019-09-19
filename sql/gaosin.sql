-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2018 lúc 05:24 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gaosin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `fullname_admin` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `phone_admin` varchar(11) NOT NULL,
  `add_admin` varchar(100) NOT NULL,
  `is_block_admin` tinyint(4) NOT NULL,
  `permission_admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`, `fullname_admin`, `email_admin`, `phone_admin`, `add_admin`, `is_block_admin`, `permission_admin`) VALUES
(1, 'admin', 'admin', 'ADMIN', 'ADMIN@ADMIN.COM', '9876543210', 'ADMIN_ADDRESS', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muahang`
--

CREATE TABLE `muahang` (
  `id_mh` int(11) NOT NULL,
  `tensp_mh` varchar(100) NOT NULL,
  `bao_mh` varchar(50) NOT NULL,
  `solg_mh` int(11) NOT NULL,
  `dg_mh` int(11) NOT NULL,
  `sum_mh` int(11) NOT NULL,
  `comment_mh` text NOT NULL,
  `ngmua_mh` varchar(100) NOT NULL,
  `ngaymua_mh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `muahang`
--

INSERT INTO `muahang` (`id_mh`, `tensp_mh`, `bao_mh`, `solg_mh`, `dg_mh`, `sum_mh`, `comment_mh`, `ngmua_mh`, `ngaymua_mh`) VALUES
(1, 'Gạo Tấm', 'Bao Thường', 0, 20000, 0, '', 'a', '0000-00-00'),
(2, 'Gạo Tấm', 'Bao Thường', 0, 20000, 0, '', 'a', '0000-00-00'),
(3, 'Gạo Tấm', 'Bao Thường', 0, 20000, 0, '', '0', '0000-00-00'),
(4, 'Gạo Tấm', 'Bao Thường', 3, 20000, 0, '', '0', '0000-00-00'),
(5, 'Gạo Thơm Mỹ ĐB', 'Bao Thường', 24, 32000, 480000, '', 'a', '0000-00-00'),
(6, ' Gạo Công Nghiệp', 'Bao Đẹp', 1123123, 10000, 2147483647, 'Gạo không được mốc', '0', '2017-10-10'),
(7, ' Gạo Công Nghiệp', 'Bao Đẹp', 1000, 10000, 20000000, 'Yêu cầu thêm', 'a', '2017-10-10'),
(8, 'Gạo Tấm', 'Bao Thường', 12, 20000, 240000, '', '0', '2017-10-10'),
(10, 'Gạo Tấm', 'Bao Thường', 0, 20000, 0, '', 'b', '2017-10-10'),
(11, 'Gạo Tấm', 'Bao Thường', 0, 20000, 0, '', '0', '2017-10-10'),
(12, '$1', '$1', 0, 0, 0, '$1', 'b', '2017-10-10'),
(22, 'Gạo Tấm', 'Bao Thường', 2, 20000, 40000, '', 'khanh', '2017-10-12'),
(23, 'Gạo Tiêu Chuẩn', 'Bao Thường', 0, 18000, 0, '', 'Fullname Admin', '2018-03-31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(100) NOT NULL,
  `loai_sp` varchar(255) NOT NULL,
  `img_sp` text NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `dt_sp` text NOT NULL,
  `mota_sp` text NOT NULL,
  `nguoitao_sp` varchar(100) NOT NULL,
  `ngaytao_sp` date NOT NULL,
  `ngaysua_sp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `loai_sp`, `img_sp`, `gia_sp`, `dt_sp`, `mota_sp`, `nguoitao_sp`, `ngaytao_sp`, `ngaysua_sp`) VALUES
(4, 'Gạo Tấm', 'Gạo Nếp', 'gao1.png', 20000, 'Nở Xốp, Nguội Mềm Cơm.Tên SP: Gạo Từ Thiện Trọng Lượng: 10kg – 20kg – 50kg Đặc Tính: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, có màu trắng trong và hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 tháng Vùng Trồng: ĐBSCL Tình Trạng: ', '<p>Nở Xốp, Nguội Mềm Cơm.T&ecirc;n SP: Gạo Từ Thiện Trọng Lượng: 10kg &ndash; 20kg &ndash; 50kg Đặc T&iacute;nh: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, c&oacute; m&agrave;u trắng trong v&agrave; hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 th&aacute;ng V&ugrave;ng Trồng: ĐBSCL T&igrave;nh Trạng:&nbsp;Nở Xốp, Nguội Mềm Cơm.T&ecirc;n SP: Gạo Từ Thiện Trọng Lượng: 10kg &ndash; 20kg &ndash; 50kg Đặc T&iacute;nh: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, c&oacute; m&agrave;u trắng trong v&agrave; hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 th&aacute;ng V&ugrave;ng Trồng: ĐBSCL T&igrave;nh Trạng:&nbsp;Nở Xốp, Nguội Mềm Cơm.T&ecirc;n SP: Gạo Từ Thiện Trọng Lượng: 10kg &ndash; 20kg &ndash; 50kg Đặc T&iacute;nh: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, c&oacute; m&agrave;u trắng trong v&agrave; hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 th&aacute;ng V&ugrave;ng Trồng: ĐBSCL T&igrave;nh Trạng:&nbsp;</p>\r\n', '', '2017-10-08', '2017-10-16'),
(5, 'Gạo Công Nghiệp', 'Gạo Nếp', 'gao3.png', 10000, 'Nở Xốp, Nguội Mềm Cơm.Tên SP: Gạo Từ Thiện Trọng Lượng: 10kg – 20kg – 50kg Đặc Tính: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, có màu trắng trong và hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 tháng Vùng Trồng: ĐBSCL Tình Trạng: Còn rất nhiều Cách Nấu: Đong gạo theo nhu cầu, vo gạo vài lần bằng nước sạch(nước ấm càng tốt) Chế nước theo tỉ lệ: 1 kg gạo/ 1,2 lít nước Không ', '<p>T&ecirc;n SP: Gạo Từ Thiện Trọng Lượng: 10kg &ndash; 20kg &ndash; 50kg Đặc T&iacute;nh: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, c&oacute; m&agrave;u trắng trong v&agrave; hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 th&aacute;ng V&ugrave;ng Trồng: ĐBSCL T&igrave;nh Trạng: C&ograve;n rất nhiều C&aacute;ch Nấu: Đong gạo theo nhu cầu, vo gạo v&agrave;i lần bằng nước sạch(nước ấm c&agrave;ng tốt) Chế nước theo tỉ lệ: 1 kg gạo/ 1,2 l&iacute;t nước Kh&ocirc;ng mở nắp nồi trong l&uacute;c nấu cho đến khi cơm s&ocirc;i khoảng 15p l&agrave; c&oacute; thể d&ugrave;ng bữa. D&ugrave;ng đũa xới cơm khi đ&atilde; nấu ch&iacute;n Nhận X&eacute;t: Gạo hương vị tự nhi&ecirc;n, thơm m&aacute;t, mềm, cơm ngon sau khi để nguội. Gạo ph&ugrave; hợp cho c&aacute;c gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, cơm văn ph&ograve;ng. Bảo Quản: Bảo quản nơi kh&ocirc; r&aacute;o v&agrave; tho&aacute;ng m&aacute;t, sạch sẽ, tr&aacute;nh &aacute;nh nắng mặt trời. Đậy k&iacute;n sau khi mở bao, tr&aacute;nh c&ocirc;n tr&ugrave;ng v&agrave; m&ugrave;i lạ x&acirc;m nhập. Ch&uacute;c qu&yacute; kh&aacute;ch ngon miệng.</p>\r\n', 'Nông Văn Khánh', '2017-10-08', '2017-10-16'),
(6, 'Gạo Tiêu Chuẩn', 'Gạo Nếp', 'gao4.png', 18000, 'Ngon, dẻo, thơm...Nở Xốp, Nguội Mềm Cơm.Tên SP: Gạo Từ Thiện Trọng Lượng: 10kg – 20kg – 50kg Đặc Tính: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, có màu trắng trong và hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 tháng Vùng Trồng: ĐBSCL Tình Trạng: ', '<p>T&ecirc;n SP: Gạo Từ Thiện Trọng Lượng: 10kg &ndash; 20kg &ndash; 50kg Đặc T&iacute;nh: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, c&oacute; m&agrave;u trắng trong v&agrave; hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 th&aacute;ng V&ugrave;ng Trồng: ĐBSCL T&igrave;nh Trạng: C&ograve;n rất nhiều C&aacute;ch Nấu: Đong gạo theo nhu cầu, vo gạo v&agrave;i lần bằng nước sạch(nước ấm c&agrave;ng tốt) Chế nước theo tỉ lệ: 1 kg gạo/ 1,2 l&iacute;t nước Kh&ocirc;ng mở nắp nồi trong l&uacute;c nấu cho đến khi cơm s&ocirc;i khoảng 15p l&agrave; c&oacute; thể d&ugrave;ng bữa. D&ugrave;ng đũa xới cơm khi đ&atilde; nấu ch&iacute;n Nhận X&eacute;t: Gạo hương vị tự nhi&ecirc;n, thơm m&aacute;t, mềm, cơm ngon sau khi để nguội. Gạo ph&ugrave; hợp cho c&aacute;c gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, cơm văn ph&ograve;ng. Bảo Quản: Bảo quản nơi kh&ocirc; r&aacute;o v&agrave; tho&aacute;ng m&aacute;t, sạch sẽ, tr&aacute;nh &aacute;nh nắng mặt trời. Đậy k&iacute;n sau khi mở bao, tr&aacute;nh c&ocirc;n tr&ugrave;ng v&agrave; m&ugrave;i lạ x&acirc;m nhập. Ch&uacute;c qu&yacute; kh&aacute;ch ngon miệng.</p>\r\n', 'Nông Văn Khánh', '2017-10-08', '2017-10-16'),
(7, 'Gạo Thơm Mỹ ĐB', 'Gạo Tẻ', 'gao4.png', 32000, 'Gạo hương vị tự nhiênNở Xốp, Nguội Mềm Cơm.Tên SP: Gạo Từ Thiện Trọng Lượng: 10kg – 20kg – 50kg Đặc Tính: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, có màu trắng trong và hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 tháng Vùng Trồng: ĐBSCL Tình Trạng: ', '<p>Gạo hương vị tự nhi&ecirc;n, thơm m&aacute;t, mềm, cơm ngon sau khi để nguội. Gạo ph&ugrave; hợp cho c&aacute;c gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, cơm văn ph&ograve;ng. Gạo hương vị tự nhi&ecirc;n, thơm m&aacute;t, mềm, cơm ngon sau khi để nguội. Gạo ph&ugrave; hợp cho c&aacute;c gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, cơm văn ph&ograve;ng. Gạo hương vị tự nhi&ecirc;n, thơm m&aacute;t, mềm, cơm ngon sau khi để nguội. Gạo ph&ugrave; hợp cho c&aacute;c gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, cơm văn ph&ograve;ng.</p>\r\n', 'Nông Văn Khánh', '2017-10-08', '2017-10-16'),
(10, ' Gạo Công Nghiệp', 'Gạo Tẻ', 'gao4.png', 10000, 'Nở Xốp, Nguội Mềm Cơm.Nở Xốp, Nguội Mềm Cơm.Tên SP: Gạo Từ Thiện Trọng Lượng: 10kg – 20kg – 50kg Đặc Tính: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, có màu trắng trong và hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 tháng Vùng Trồng: ĐBSCL Tình Trạng: ', '<p>T&ecirc;n SP: Gạo Từ Thiện Trọng Lượng: 10kg &ndash; 20kg &ndash; 50kg Đặc T&iacute;nh: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, c&oacute; m&agrave;u trắng trong v&agrave; hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 th&aacute;ng V&ugrave;ng Trồng: ĐBSCL T&igrave;nh Trạng: C&ograve;n rất nhiều C&aacute;ch Nấu: Đong gạo theo nhu cầu, vo gạo v&agrave;i lần bằng nước sạch(nước ấm c&agrave;ng tốt) Chế nước theo tỉ lệ: 1 kg gạo/ 1,2 l&iacute;t nước Kh&ocirc;ng mở nắp nồi trong l&uacute;c nấu cho đến khi cơm s&ocirc;i khoảng 15p l&agrave; c&oacute; thể d&ugrave;ng bữa. D&ugrave;ng đũa xới cơm khi đ&atilde; nấu ch&iacute;n Nhận X&eacute;t: Gạo hương vị tự nhi&ecirc;n, thơm m&aacute;t, mềm, cơm ngon sau khi để nguội. Gạo ph&ugrave; hợp cho c&aacute;c gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, cơm văn ph&ograve;ng. Bảo Quản: Bảo quản nơi kh&ocirc; r&aacute;o v&agrave; tho&aacute;ng m&aacute;t, sạch sẽ, tr&aacute;nh &aacute;nh nắng mặt trời. Đậy k&iacute;n sau khi mở bao, tr&aacute;nh c&ocirc;n tr&ugrave;ng v&agrave; m&ugrave;i lạ x&acirc;m nhập. Ch&uacute;c qu&yacute; kh&aacute;ch ngon miệng.</p>\r\n', 'Nông Văn Khánh', '2017-10-08', '2017-10-16'),
(11, 'Gạo Tiêu Chuẩn', 'Gạo Nếp', 'gao4.png', 18000, 'Ngon, dẻo, thơm...Nở Xốp, Nguội Mềm Cơm.Tên SP: Gạo Từ Thiện Trọng Lượng: 10kg – 20kg – 50kg Đặc Tính: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, có màu trắng trong và hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 tháng Vùng Trồng: ĐBSCL Tình Trạng: ', '<p>T&ecirc;n SP: Gạo Từ Thiện Trọng Lượng: 10kg &ndash; 20kg &ndash; 50kg Đặc T&iacute;nh: Nở Xốp, Nguội Mềm Cơm. Đặc Điểm: Hạt gạo to, c&oacute; m&agrave;u trắng trong v&agrave; hơi bạc ở giữa hạt gạo. Thời Gian Sinh Trưởng: 3 th&aacute;ng V&ugrave;ng Trồng: ĐBSCL T&igrave;nh Trạng: C&ograve;n rất nhiều C&aacute;ch Nấu: Đong gạo theo nhu cầu, vo gạo v&agrave;i lần bằng nước sạch(nước ấm c&agrave;ng tốt) Chế nước theo tỉ lệ: 1 kg gạo/ 1,2 l&iacute;t nước Kh&ocirc;ng mở nắp nồi trong l&uacute;c nấu cho đến khi cơm s&ocirc;i khoảng 15p l&agrave; c&oacute; thể d&ugrave;ng bữa. D&ugrave;ng đũa xới cơm khi đ&atilde; nấu ch&iacute;n Nhận X&eacute;t: Gạo hương vị tự nhi&ecirc;n, thơm m&aacute;t, mềm, cơm ngon sau khi để nguội. Gạo ph&ugrave; hợp cho c&aacute;c gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, cơm văn ph&ograve;ng. Bảo Quản: Bảo quản nơi kh&ocirc; r&aacute;o v&agrave; tho&aacute;ng m&aacute;t, sạch sẽ, tr&aacute;nh &aacute;nh nắng mặt trời. Đậy k&iacute;n sau khi mở bao, tr&aacute;nh c&ocirc;n tr&ugrave;ng v&agrave; m&ugrave;i lạ x&acirc;m nhập. Ch&uacute;c qu&yacute; kh&aacute;ch ngon miệng.</p>\r\n', 'Nông Văn Khánh', '2017-10-08', '2017-10-16'),
(15, 'Gạo CK', 'Gạo Tẻ', 'gao4.png', 65000, 'Béo Ngậy Thơm Ngon', '<h1><strong>M&ocirc; Tả Sản Phẩm</strong></h1>\n\n<p><strong>T&ecirc;n SP:</strong>&nbsp;Gạo Từ Thiện<br />\n<strong>Trọng Lượng:&nbsp;</strong>10kg &ndash; 20kg &ndash; 50kg<br />\n<strong>Đặc T&iacute;nh:</strong>&nbsp;Nở Xốp, Nguội Mềm Cơm.<br />\n<strong>Đặc Điểm:&nbsp;</strong>Hạt gạo to, c&oacute; m&agrave;u trắng trong v&agrave; hơi bạc ở giữa hạt gạo.<br />\n<strong>Thời Gian Sinh Trưởng:</strong>&nbsp;3 th&aacute;ng<br />\n<strong>V&ugrave;ng Trồng:&nbsp;</strong>ĐBSCL<br />\n<strong>T&igrave;nh Trạng:</strong>&nbsp;C&ograve;n rất nhiều<br />\n<br />\n<strong>C&aacute;ch Nấu:</strong><br />\nĐong gạo theo nhu cầu, vo gạo v&agrave;i lần bằng nước sạch(nước ấm c&agrave;ng tốt)<br />\nChế nước theo tỉ lệ: 1 kg gạo/ 1,2 l&iacute;t nước<br />\nKh&ocirc;ng mở nắp nồi trong l&uacute;c nấu cho đến khi cơm s&ocirc;i khoảng 15p l&agrave; c&oacute; thể d&ugrave;ng bữa.<br />\nD&ugrave;ng đũa xới cơm khi đ&atilde; nấu ch&iacute;n<br />\n<br />\n<strong>Nhận X&eacute;t:</strong><br />\nGạo hương vị tự nhi&ecirc;n, thơm m&aacute;t, mềm, cơm ngon sau khi để nguội.<br />\nGạo ph&ugrave; hợp cho c&aacute;c gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, cơm văn ph&ograve;ng.<br />\n<br />\n<strong>Bảo Quản:</strong><br />\nBảo quản nơi kh&ocirc; r&aacute;o v&agrave; tho&aacute;ng m&aacute;t, sạch sẽ, tr&aacute;nh &aacute;nh nắng mặt trời.<br />\nĐậy k&iacute;n sau khi mở bao, tr&aacute;nh c&ocirc;n tr&ugrave;ng v&agrave; m&ugrave;i lạ x&acirc;m nhập.<br />\n<strong>Ch&uacute;c qu&yacute; kh&aacute;ch ngon miệng.</strong></p>\n', 'Nông Văn Khánh', '2017-10-09', '0000-00-00'),
(18, 'Gạo Tám Thơm', 'Gạo Tẻ', 'gao-thai-gay.jpeg', 23100, 'Cực kỳ thơm ngon hơn tất cả các loại khác.', '<h1><strong>Cực kỳ thơm ngon hơn tất cả c&aacute;c loại kh&aacute;c.</strong></h1>\r\n\r\n<h2><strong>Cực kỳ thơm ngon hơn tất cả c&aacute;c loại kh&aacute;c.</strong></h2>\r\n\r\n<h2><strong>Cực kỳ thơm ngon hơn tất cả c&aacute;c loại kh&aacute;c.</strong></h2>\r\n\r\n<pre>\r\n<strong>Cực kỳ thơm ngon hơn tất cả c&aacute;c loại kh&aacute;c.</strong></pre>\r\n', 'Nguyễn Ngọc Hiệp', '2017-10-11', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id_tt` int(11) NOT NULL,
  `tensp_tt` varchar(100) NOT NULL,
  `bao_tt` varchar(50) NOT NULL,
  `solg_tt` int(11) NOT NULL,
  `dg_tt` int(11) NOT NULL,
  `sum_tt` int(11) NOT NULL,
  `comment_tt` text NOT NULL,
  `diachi_tt` text NOT NULL,
  `sdt_tt` varchar(11) NOT NULL,
  `ngmua_tt` varchar(100) NOT NULL,
  `ngaymua_tt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`id_tt`, `tensp_tt`, `bao_tt`, `solg_tt`, `dg_tt`, `sum_tt`, `comment_tt`, `diachi_tt`, `sdt_tt`, `ngmua_tt`, `ngaymua_tt`) VALUES
(21, 'Gạo Tấm', 'Bao Thường', 234, 20000, 4680000, '', 'Văn Quan - Lạng Sơn', '01644444900', 'Nông Văn Khánh - ADMIN', '2017-10-13'),
(22, 'Gạo Tấm', 'Bao Thường', 32, 20000, 640000, '', 'Văn Quan - Lạng Sơn', '01644444900', 'Nông Văn Khánh - ADMIN', '2017-10-14'),
(23, ' Gạo Công Nghiệp', 'Bao Thường', 1231, 10000, 12310000, '', 'Address Admin', '0868868868', 'Fullname Admin', '2017-10-16'),
(24, 'Gạo Công Nghiệp', 'Bao Thường', 12, 10000, 120000, '', 'Address Admin', '0868868868', 'Fullname Admin', '2017-10-18'),
(25, 'Gạo Công Nghiệp', 'Bao Thường', 123, 10000, 1230000, '', 'Dia Chi Khach Hanh', '0123456789', 'Khach Hang', '2017-10-19'),
(26, 'Gạo Công Nghiệp', 'Bao Đẹp', 11, 10000, 110000, '', 'Văn Quan - Lạng Sơn', '01644444900', 'Nông Văn Khánh - ADMIN', '2017-10-24'),
(27, 'Gạo Tấm', 'Bao Đẹp', 25, 20000, 500000, '', 'Address Admin', '0868868868', 'Fullname Admin', '2018-01-26'),
(28, 'Gạo Tấm', 'Bao Đẹp', 6, 20000, 120000, 'toi muon fishisodhadoadso', 'Address Admin', '0868868868', 'Fullname Admin', '2018-01-26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `fullname_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `phone_user` varchar(11) NOT NULL,
  `add_user` varchar(100) NOT NULL,
  `is_block_user` tinyint(4) NOT NULL,
  `permision_user` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `username_user`, `password_user`, `fullname_user`, `email_user`, `phone_user`, `add_user`, `is_block_user`, `permision_user`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Fullname Admin', 'admin@admin.admin', '0868868868', 'Address Admin', 0, 2),
(33, 'khachhang', 'b9bc4dd06b7d2d49cb9fb3d8d9fba6c1', 'Khach Hang', 'khachhang@khachhang.com', '0123456789', 'Dia Chi Khach Hang', 0, 0),
(88, 'huyhuy', 'cc0d45bc2f499fc4666d09691485a0f9', '', 'huy@huy.huy', '6757567576', 'Âm phủ', 0, 0),
(120, 'taikhoan', 'ad3b2ae6d0890519c1deb599600919a6', '', 'taikhoan@taikhoan.com', '12313131', 'taikhoan', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `muahang`
--
ALTER TABLE `muahang`
  ADD PRIMARY KEY (`id_mh`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id_tt`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username_user` (`username_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `muahang`
--
ALTER TABLE `muahang`
  MODIFY `id_mh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

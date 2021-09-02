-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2020 lúc 05:30 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thucpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ma` int(11) NOT NULL,
  `ten` varchar(250) NOT NULL,
  `tendnadmin` varchar(250) NOT NULL,
  `matkhau` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ma`, `ten`, `tendnadmin`, `matkhau`) VALUES
(1, 'Nguyễn Văn Hưng', 'admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_don_dat_hang`
--

CREATE TABLE `ct_don_dat_hang` (
  `ma_dh` varchar(50) NOT NULL,
  `ma_thucpham` int(11) NOT NULL,
  `gia_ban` int(11) DEFAULT NULL,
  `sl_dat` int(11) DEFAULT NULL,
  `tonggia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_dat_hang`
--

CREATE TABLE `don_dat_hang` (
  `ma_dh` varchar(50) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ngay_dh` datetime NOT NULL,
  `diachi_giao` varchar(100) DEFAULT NULL,
  `tenkh` varchar(50) DEFAULT NULL,
  `tongtien` varchar(50) DEFAULT NULL,
  `Tinh_trang` varchar(50) DEFAULT NULL,
  `sdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `don_dat_hang`
--

INSERT INTO `don_dat_hang` (`ma_dh`, `ma_kh`, `ngay_dh`, `diachi_giao`, `tenkh`, `tongtien`, `Tinh_trang`, `sdt`) VALUES
('$ma', 98, '0000-00-00 00:00:00', '$address', '$username', '$totalorder', '$trangthai', 8),
('2228', 5, '0000-00-00 00:00:00', 'Hoài Đức', 'Nguyễn Văn Hiếu', '45000', 'Chưa giao hàng', 977982449),
('321', 5, '2020-06-19 09:16:08', 'Hoài Đức', 'Nguyễn Văn Hiếu', '4365000', 'Chưa giao hàng', 977982449),
('383', 77, '2020-06-18 23:40:11', '$address', '$username', '$totalorder', '$trangthai', 99),
('545', 5, '2020-06-18 23:41:47', 'Hoài Đức', 'Nguyễn Văn Hiếu', '45000', 'Chưa giao hàng', 800000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(50) NOT NULL,
  `hovaten_kh` varchar(50) DEFAULT NULL,
  `dia_chi` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gioi_tinh` varchar(50) DEFAULT NULL,
  `ten_dn` varchar(50) DEFAULT NULL,
  `matkhau` varchar(50) DEFAULT NULL,
  `sdt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `hovaten_kh`, `dia_chi`, `email`, `gioi_tinh`, `ten_dn`, `matkhau`, `sdt`) VALUES
('1', 'Nguyen Van Hieu', 'Hoài Đức', 'hieuvan201111@gmail.com', 'Nam', 'hieuaaaa', '12345678', '0372778808'),
('2', '$ten', '$diachi', '$mail', '$gt', '$dn', '$pw', '0482839908'),
('3', 'Nguyen Van Hieu', 'Hoài Đức', 'nthao155203@gmail.com', 'Nam', 'hieuaaaa', '12345678', '0982436601'),
('4', 'Nguyen Van Hieu', 'Hoài Đức', 'hieuvan201111@gmail.com', 'Nam', 'hieu222', '123', '0347438483'),
('5', 'hhaha', 'Hoài Đức', 'nthao155203@gmail.com', 'Nam', 'anhtoi', '1234', '094763746384');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `ma_lh` int(50) NOT NULL,
  `ten_nguoi_lh` varchar(50) DEFAULT NULL,
  `emai_nguoi_lh` varchar(50) DEFAULT NULL,
  `diachi__nguoi_lh` varchar(50) DEFAULT NULL,
  `ngay_lh` datetime DEFAULT NULL,
  `noidung` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lien_he`
--

INSERT INTO `lien_he` (`ma_lh`, `ten_nguoi_lh`, `emai_nguoi_lh`, `diachi__nguoi_lh`, `ngay_lh`, `noidung`) VALUES
(1, '$ten', '$email', '$diachi', NULL, '$noidung'),
(2, '$ten', '$email', '$diachi', '2020-06-18 22:55:37', '$noidung'),
(3, 'dkdl', 'hie@gmail.com', 'kfdl', '2020-06-18 22:56:02', 'gnfkj'),
(4, 'jvklvlkd', 'vhihdlk@gmail.com', 'fjkdfj', '2020-06-18 22:56:13', 'djdlkf'),
(5, 'ffff', 'hie@gmail.com', 'kdkd;', '2020-06-19 09:04:39', 'dlddm;đm;m');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tp`
--

CREATE TABLE `loai_tp` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_tp`
--

INSERT INTO `loai_tp` (`ma_loai`, `ten_loai`) VALUES
(1, 'Sản phẩm khuyến mãi'),
(2, 'Rau củ quả'),
(3, 'Thực phẩm tươi sống'),
(4, 'Thực phẩm khô'),
(5, 'Thực phẩm bổ dưỡng'),
(6, 'Gia vị'),
(7, 'Đồ uống'),
(8, 'Sữa - Kem & sản phẩm từ sữa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtintaikhoan`
--

CREATE TABLE `thongtintaikhoan` (
  `id` int(11) NOT NULL,
  `ho` varchar(100) DEFAULT NULL,
  `ten` varchar(50) DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `avatar` text DEFAULT NULL,
  `diachi` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tp`
--

CREATE TABLE `tp` (
  `ma` int(11) NOT NULL,
  `ma_loai` int(11) DEFAULT NULL,
  `ten_tp` varchar(100) DEFAULT NULL,
  `gia` varchar(50) NOT NULL,
  `anh` text DEFAULT NULL,
  `mo_ta` varchar(250) DEFAULT NULL,
  `trang_thai` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tp`
--

INSERT INTO `tp` (`ma`, `ma_loai`, `ten_tp`, `gia`, `anh`, `mo_ta`, `trang_thai`) VALUES
(13, 1, 'Cà rốt', '39000', 'Cà-rốt-Đà-Lạt-loại-1-260x260.jpg', '', NULL),
(14, 1, 'Củ cải trắng', '33000', 'Củ-cải-trắng-1-260x260.jpeg', '', NULL),
(15, 1, 'Củ dền', '29000', 'Củ-dền-260x260.jpg', '', NULL),
(16, 1, 'Củ gừng tươi', '13000', 'Củ-Gừng-Tươi-VietRAT-Gói-100g-1-260x260.png', '', NULL),
(23, 1, 'Bầu sao', '22000', 'Bau-Phuoc-An-260x260.jpg', '', NULL),
(24, 1, 'Khổ qua', '32000', 'Khổ-qua-VietRat-260x260.jpg', '', NULL),
(25, 1, 'Mướp hương', '25000', 'Muop-huong-Phuoc-An-260x260.jpg', '', NULL),
(26, 1, 'Chanh không hạt', '32000', 'Chanh-Không-Hạt-VietRAT-Túi-1kg-260x260.png', '', NULL),
(27, 1, 'Cần tây', '75000', 'Rau-cần-tây-VietGap-260x260.png', '', NULL),
(28, 1, 'Ngò ri', '15000', 'Rau-Ngò-Rí-Gói-100g-260x260.png', '', NULL),
(29, 3, 'Ba chỉ bò ÚC', '195000', 'Ba-chỉ-Bò-NK-Úc-260x260.png', '', NULL),
(30, 3, 'Ba rọi heo', '235000', 'Ba-roi-heo-rut-suon-Vietgap-An-Ha-260x260.jpg', '', NULL),
(31, 3, 'Chân gà', '98000', 'Chan-Ga-Vietgap-Pham-Ton-260x260.jpg', '', NULL),
(32, 3, 'Thịt đùi dê', '205000', 'Đùi-dê-260x260.jpg', '', NULL),
(33, 3, 'Đùi tỏi gà', '82000', 'Đùi-gà-tỏi-Ba-Huân-260x260.png', '', NULL),
(34, 3, 'Đùi nguyên', '58000', 'Đùi-gà-Ba-Huân-260x260.png', '', NULL),
(35, 3, 'Đùi bò ', '320000', 'Dui-bo-Tay-Ninh-260x260.jpg', '', NULL),
(36, 3, 'Gà Ác', '32000', 'Ga-Ac-260x260.jpg', '', NULL),
(37, 3, 'Gà nguyên bỏ đầu', '65000', 'gà-công-nghiệp-Ba-Huân-không-đầu-chân-260x260.png', '', NULL),
(38, 3, 'Thăn bò', '175000', 'Diem-than-bo-Tay-Ninh-260x260.jpg', '', NULL),
(39, 4, 'Bánh đa cua ', '7000', 'Bánh-đa-cua-ăn-liền-Bích-Chi-gói-60g.1.jpg', '', NULL),
(40, 4, 'Bánh đa cua Hoàng Gia', '12000', 'Bánh-đa-cua-Hoàng-Gia-gói-120g-260x260.jpg', '', NULL),
(41, 4, 'bánh đa tôm', '45000', 'Bánh-đa-tôm-mè-Hương-Nam-gói-454g-260x260.jpg', '', NULL),
(42, 4, 'Bánh phở khô', '36000', 'Bánh-phở-khô-Bông-Lúa-Vàng-Vifon-gói-400g-260x260.jpg', '', NULL),
(43, 4, 'Bánh phồng Sa Giang', '15000', 'Bánh-phồng-đặc-sản-Sa-Giang-hộp-200g.1-260x260.jpg', '', NULL),
(44, 4, 'BÁnh phồng Mực', '9.000', 'Bánh-phồng-mực-Bích-Chi-hộp-200g-260x260.jpg', '', NULL),
(45, 4, 'Bánh phồng tôm', '5.000', 'Bánh-phồng-tôm-Bích-Chi-gói-100g-260x260.jpg', '', NULL),
(46, 4, 'Bột bánh loc', '21.000', 'Bot-Banh-Bot-Loc-300x300.jpg', '', NULL),
(47, 4, 'Bột bánh xèo', '21.000', 'Bột-Bánh-Xèo-Ottogi-Gói-500g-260x260.png', '', NULL),
(48, 4, 'Ại-Quick bột chiên gà giòn', '24.000', 'Bot-Chien-Ga-Gion-Aji-Quick-300x300.jpg', '', NULL),
(49, 6, 'Bột canh nấm hương Cholimex', '198.000', 'Bot-Canh-Nam-Huong-Cholimex-Goi-180g-260x260.jpg', '', NULL),
(50, 6, 'Bột canmh hương vị tôm', '5.000', 'Bot-Canh-Huong-Vi-Tom-A-One-Goi-200g-260x260.jpg', '', NULL),
(51, 6, 'Bột chuối hữu cơ', '120.000', 'Bột-Chuối-Hữu-Cơ-Mỹ-OneLife-Hộp-50gr-260x260.png', '', NULL),
(52, 6, 'Bột điều', '13.000', 'Bột-điều-Thành-Lộc-hộp-50g-260x260.jpg', '', NULL),
(53, 6, 'Bột ngọt Ajinomoto  1.8kg', '128.000', 'Bot-Ngot-Ajinomoto-Goi-1.8kg.jpg', '', NULL),
(54, 6, 'Bột ớt cựa gà', '155.000', 'Bột-Ớt-Cựa-Gà-Vị-Khói-McCormick-chai-37g-260x260.png', '', NULL),
(55, 6, 'Bột tiêu đen', '21.000', 'Bột-tiêu-đen-Thành-Lộc-hộp-50g-260x260.jpg', '', NULL),
(56, 6, 'Bột tỏi ', '13.000', 'Bột-tỏi-Thành-Lộc-hộp-50g-260x260.jpg', '', NULL),
(57, 6, 'Cà ri xanh', '60.000', 'Cà-ri-xanh-Regal-Thai-lọ-235g-260x260.jpg', '', NULL),
(58, 6, 'Dầu ăn Neptune 2L', '102.000', 'Dầu-ăn-thượng-hạng-Neptune-Gold-chai-2L.1-260x260.jpg', '', NULL),
(59, 7, 'Bia Heineken Lốc', '97.000', 'Bia-Heineken-Loc-300x300.jpg', '', NULL),
(60, 7, 'Bia Heineken Lon', '17.000', 'Bia-Heineken-Lon-300x300.jpg', '', NULL),
(61, 7, 'Bia Tiger Crystal Lon', '15.000', 'Bia-Tiger-Crystal-Lon-300x300.jpg', '', NULL),
(62, 7, 'Bia Tiger Crystal  Thùng', '340.000', 'Bia-Tiger-Crystal-Thung-300x300.jpg', '', NULL),
(63, 7, 'Cà phê Cappuccino Mocha G7 Trung Nguyên', '52.000', 'Cà-Phê-Cappuccino-Mocha-G7-Trung-Nguyên-Hộp-216g-260x260.jpg', '', NULL),
(64, 7, 'Cà Phê Hòa Tan Gold Original 3In1', '40.000', 'Cà-phê-hòa-tan-3-trong-1-Nescafé-hộp-255g-260x260.jpg', '', NULL),
(65, 7, 'Cà Phê Uống Liền Nescafé Latte lon 180ml', '12.000', 'Cà-phê-uống-liền-Nescafé-Latte-lon-180ml.jpg', '', NULL),
(66, 7, 'Cafe Việt Đen Uống Liền Nescafe Lon 170ml', '17.000', 'Cafe-việt-đen-uống-liền-nescafe-lon-170ml-260x260.png', '', NULL),
(67, 7, 'Hồng Trà Cozy Hộp 50g', '33.000', 'Hồng-trà-Cozy-hộp-50g-260x260.jpg', '', NULL),
(68, 7, 'Nước Cam Ép 10% Twister Chai 350ml', '11.000', 'Nước-cam-ép-10-Twister-Pepsico-chai-350ml-260x260.jpg', '', NULL),
(69, 8, 'Bơ Mặn Président Gói 125g', '55.000', 'Bơ-mặn-Président-gói-125g-260x260.jpg', '', NULL),
(70, 8, 'Bơ Mặn Président Hộp 250g', '132.000', 'Bơ-mặn-Président-hộp-250g-260x260.jpg', '', NULL),
(71, 8, 'Bơ Thực Vật Meizan Hộp 200g', '12.000', 'bơ-thực-vật-meizan-hộp-200gram-260x260.png', '', NULL),
(72, 8, 'Bơ Thực Vật Meizan Hộp 800g', '42.000', 'Bơ-thực-vật-meizan-hộp-800g-260x260.png', '', NULL),
(73, 8, 'Kem Đặc Có Đường Dutch Lady Lon 380g', '22.000', 'Kem-đặc-có-đường-Dutch-Lady-lon-380g-260x260.jpg', '', NULL),
(74, 8, 'Kem Đặc Có Đường Ngôi Sao Phương Nam', '59.000', 'Kem-Dac-Co-Duong-Ngoi-Sao-Phuong-Nam-300x300.jpg', '', NULL),
(75, 8, 'Phô Mai Con Bò Cười Light Hộp 120g', '46.000', 'Phô-mai-Con-Bò-Cười-Light-hộp-120g-260x260.jpg', '', NULL),
(76, 8, 'Phô Mai Lát Light Con Bò Cười Gói 200g', '52.000', 'Phô-mai-lát-Light-Con-Bò-Cười-gói-200g-260x260.jpg', '', NULL),
(77, 8, 'Phô Mai Lát Président Gói 200g', '73.000', 'Phô-mai-lát-Président-gói-200g-260x260.jpg', '', NULL),
(78, 8, 'Sữa Bột Diecerna Vinamilk Lon 400g', '249.000', 'Sữa-bột-Diecerna-Vinamilk-lon-400g-260x260.jpg', '', NULL),
(80, 5, 'Cao hồng xâm', '1400000', 'Cao-Hồng-Sâm-Hàn-Quốc-KGS-240g-x-2-Lọ-260x260.png', '', NULL),
(81, 5, 'Hồng huyết', '8000000', 'Hồng-huyết-tinh-chế-Hòn-Ngọc-Việt-hộp-100g-260x260.jpg', '', NULL),
(82, 5, 'Đông trùng hạ thảo', '1400000', 'Đông-Trùng-Hạ-Thảo-Hàn-Quốc-Hộp-Gỗ-Loại-60-Viên-260x260.png', '', NULL),
(83, 2, 'Củ dền', '29000', 'Củ-dền-260x260.jpg', '', NULL),
(84, 2, 'Hành tây', '25000', 'Củ-Hành-Tây-Đà-Lạt-GAP-Túi-500g-260x260.png', '', NULL),
(85, 2, 'Dưa lưới', '62500', 'Dưa-lưới-Justin-Thái-Lan....-260x260.png', '', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ct_don_dat_hang`
--
ALTER TABLE `ct_don_dat_hang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `ma_thucpham` (`ma_thucpham`);

--
-- Chỉ mục cho bảng `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  ADD PRIMARY KEY (`ma_dh`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`ma_lh`);

--
-- Chỉ mục cho bảng `loai_tp`
--
ALTER TABLE `loai_tp`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `thongtintaikhoan`
--
ALTER TABLE `thongtintaikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tp`
--
ALTER TABLE `tp`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `ma_lh` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tp`
--
ALTER TABLE `tp`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ct_don_dat_hang`
--
ALTER TABLE `ct_don_dat_hang`
  ADD CONSTRAINT `ct_don_dat_hang_ibfk_1` FOREIGN KEY (`ma_dh`) REFERENCES `don_dat_hang` (`ma_dh`),
  ADD CONSTRAINT `ct_don_dat_hang_ibfk_2` FOREIGN KEY (`ma_thucpham`) REFERENCES `tp` (`ma`);

--
-- Các ràng buộc cho bảng `tp`
--
ALTER TABLE `tp`
  ADD CONSTRAINT `tp_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_tp` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 5 月 19 日 01:27
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `shop`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `history`
--

CREATE TABLE `history` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(20) NOT NULL,
  `item_image` mediumblob NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_category` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_category`, `item_price`, `item_image`) VALUES
(1, 'ASUS', 'RTX2060', 'gpu', 20000.00, 'RTX3060-01.jpg'),
(2, 'Intel', 'Core i5-11400F', 'cpu', 21980.00, 'inteli5-10.jpg'),
(3, 'Intel', 'Core i7-10700', 'cpu', 33980.00, 'inteli7-01.jpg'),
(4, 'Intel', 'Core i5-11400F', 'cpu', 21980.00, 'inteli5-10.jpg'),
(5, 'Intel', 'Core i5-11400F', 'cpu', 21980.00, 'inteli5-10.jpg'),
(6, 'Intel', 'Core i5-11400', 'cpu', 25800.00, 'inteli5-10.jpg'),
(7, 'Intel', 'Core i5-11600K', 'cpu', 37800.00, 'inteli5-10.jpg'),
(8, 'Intel', 'Core i5-10400', 'cpu', 19308.00, 'inteli5-03.jpg'),
(9, 'Intel', 'Core i5-10600K', 'cpu', 24981.00, 'inteli5-11.jpg'),
(10, 'Intel', 'Core i7-11700', 'cpu', 45980.00, 'inteli7-04.jpg'),
(11, 'Intel', 'Core i7-11700F', 'cpu', 41980.00, 'inteli7-04.jpg'),
(12, 'Intel', 'Core i7-11700F', 'cpu', 41980.00, 'inteli7-04.jpg'),
(13, 'Intel', 'Core i7-10700', 'cpu', 33980.00, 'inteli7-01.jpg'),
(14, 'Intel', 'Core i7-11700K', 'cpu', 56980.00, 'inteli7-01.jpg'),
(15, 'Intel', 'Core i9-11900', 'cpu', 60980.00, 'inteli9-01.jpg'),
(16, 'ASUS', 'GeForce RTX 3060 GAMING X 12G', 'gpu', 84700.00, 'RTX3060-01.jpg'),
(17, 'ASUS', 'TUF-RTX3060-O12G-GAMING', 'gpu', 74800.00, 'RTX3060-02.jpg'),
(18, 'ASUS', 'GV-N3060GAMING OC-12GD', 'gpu', 74800.00, 'RTX3060-04.jpg'),
(19, 'ASUS', 'ZTRTX3090TRINITY-24GBGDR6', 'gpu', 335500.00, 'RTX3090-01.jpg'),
(20, 'ASUS', 'ROG-STRIX-RTX3090-O24G-GAMING', 'gpu', 322800.00, 'RTX3090-02.jpg'),
(21, 'ASUS', 'GV-N3090GAMING OC-24GD', 'gpu', 269500.00, 'RTX3090-03.jpg'),
(22, 'GIGABYTE', 'GV-N3090VISION OC-24GD', 'gpu', 272800.00, 'RTX3090-04.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `Name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`user_id`, `Name`, `email`, `password`) VALUES
(1, '伊良夢', 'iramsekelli@gmail.com', 'iram1999'),
(4, '水口　あきと', 'akito@gmail.com', 'akito2001'),
(5, '水口　あきと', 'akito@gmail.com', 'akito2001'),
(6, '水口秋斗', 'akito@gmail.com', 'mizugich2001');

-- --------------------------------------------------------

--
-- テーブルの構造 `wishlist`
--

CREATE TABLE `wishlist` (
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `wishlist`
--

INSERT INTO `wishlist` (`user_id`, `item_id`) VALUES
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 3),
(1, 2);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- テーブルのインデックス `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`user_id`);

--
-- テーブルのインデックス `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`purchase_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- テーブルの AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- テーブルの制約 `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD CONSTRAINT `purchase_detail_ibfk_1` FOREIGN KEY (`purchase_id`) REFERENCES `purchase` (`id`),
  ADD CONSTRAINT `purchase_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`item_id`);

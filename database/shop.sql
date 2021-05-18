-- -- phpMyAdmin SQL Dump
-- -- version 4.9.7
-- -- https://www.phpmyadmin.net/
-- --
-- -- ホスト: localhost:3306
-- -- 生成日時: 2021 年 5 月 18 日 14:30
-- -- サーバのバージョン： 5.7.32
-- -- PHP のバージョン: 7.4.12

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET time_zone = "+00:00";

-- --
-- -- データベース: `shop`
-- --

-- -- --------------------------------------------------------

-- --
-- -- テーブルの構造 `product`
-- --

-- CREATE TABLE `product` (
--   `item_id` int(11) NOT NULL,
--   `item_brand` varchar(200) NOT NULL,
--   `item_name` varchar(255) NOT NULL,
--   `item_category` varchar(255) NOT NULL,
--   `item_price` double(10,2) NOT NULL,
--   `item_image` varchar(255) NOT NULL,
--   `item_register` datetime DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --
-- -- テーブルのデータのダンプ `product`
-- --

-- INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_category`, `item_price`, `item_image`, `item_register`) VALUES
-- (1, 'ASUS', 'RTX2060', 'gpu', 20000.00, 'RTX3060-01.jpg', '2021-05-12 00:00:00'),
-- (2, 'ASUS', 'Core i5-11400F', 'gpu', 21980.00, 'RTX-01.jpg', NULL);

-- --
-- -- ダンプしたテーブルのインデックス
-- --

-- --
-- -- テーブルのインデックス `product`
-- --
-- ALTER TABLE `product`
--   ADD PRIMARY KEY (`item_id`);

-- --
-- -- ダンプしたテーブルの AUTO_INCREMENT
-- --

-- --
-- -- テーブルの AUTO_INCREMENT `product`
-- --
-- ALTER TABLE `product`
--   MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


-- INSERT INTO `product` (`item_brand`, `item_name`, `item_category`, `item_price`, `item_image`) VALUES
-- ('ASUS', 'GeForce RTX 3060 GAMING X 12G', 'gpu', 84700.00, 'RTX3060-01.jpg');
-- ('ASUS', 'TUF-RTX3060-O12G-GAMING', 'gpu', 74800.00, 'RTX3060-02.jpg');
-- ('ASUS', 'GV-N3060GAMING OC-12GD', 'gpu', 74800.00, 'RTX3060-04.jpg');
-- ('ASUS', 'ZTRTX3090TRINITY-24GBGDR6/ZT-A30900D-10P', 'gpu', 335500.00, 'RTX3090-01.jpg');
-- ('ASUS', 'ROG-STRIX-RTX3090-O24G-GAMING', 'gpu', 322800.00, 'RTX3090-02.jpg');
-- ('ASUS', 'GV-N3090GAMING OC-24GD', 'gpu', 269500.00, 'RTX-04.jpg');
-- ('ASUS', 'Core i7-11700F', 'gpu', 41980.00, 'RTX-04.jpg');
-- ('ASUS', 'Core i7-10700', 'gpu', 33980.00, 'RTX-01.jpg');
-- ('ASUS', 'Core i7-11700K', 'gpu', 56980.00, 'RTX-01.jpg');
-- ('ASUS', 'Core i9-11900', 'gpu', 60980.00, 'RTX-01.jpg');


-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-20 08:40:23
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- 資料表結構 `bulletin`
--

DROP TABLE IF EXISTS `bulletin`;
CREATE TABLE `bulletin` (
  `bid` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1.系上公告 2.招生訊息 3.企業徵才',
  `title` varchar(200) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `bulletin`
--

INSERT INTO `bulletin` (`bid`, `type`, `title`, `content`, `time`) VALUES
(1, 1, '109-1專題發表事宜(大四重修生)', '1.發表日期為12/29 (二)早上，時程再行公布。\r\n2.欲發表的各組(大四重修生)請於12/11(五)前將專題名稱、指導老師、班級、組員、及專題類別（如系統、多媒體、管理等）mail到 oscar870524@gmail.com 。', '2020-11-17'),
(2, 2, '110學年度身心障礙學生升學大專校院甄試招生入學', '一、招生網頁：https://cis.ncu.edu.tw/EnableSys/home/schedule\r\n二、簡章下載：https://cis.ncu.edu.tw/EnableSys/home/readExamInfoFile?examInfoId=405&row=0', '2020-11-16'),
(3, 3, '緯創軟體股份有限公司-招募短期助理工程師', '職務說明如下\r\n工作地點：新竹科學園區\r\n需求人數：8人，負責 Wins系統升級', '2020-10-28'),
(4, 2, '109學年度第二學期轉學生招生入學', '一、招生網頁：http://webs.must.edu.tw/ocmust104/index.php\r\n二、簡章下載：http://webs.must.edu.tw/ocmust104/index.php/2018-03-04-15-19-32', '2020-11-13'),
(5, 3, '佳世達科技股份有限公司-誠徵系統測試人員', '9/21-12月底(依專案測試需求排班制，見紅休)\r\n08:30-17:30(加班以勞基法加班費計算)\r\n最晚加班至19:30', '2020-09-11');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` varchar(40) NOT NULL,
  `pwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `pwd`) VALUES
('john', 'john1234'),
('mary', 'mary1234'),
('tony', 'tony1234'),
('alice', 'alice1234');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`bid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

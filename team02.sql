-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3308
-- 產生時間：
-- 伺服器版本： 8.0.18
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `team02`
--

-- --------------------------------------------------------

--
-- 資料表結構 `addresses`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `A_ID` tinyint(3) UNSIGNED NOT NULL COMMENT '編號(主鍵)',
  `Address` varchar(255) NOT NULL COMMENT '住址',
  `B_ID` varchar(10) NOT NULL COMMENT '棟名(外部鍵)',
  `phone` varchar(20) NOT NULL COMMENT '聯絡電話',
  `Add_time` datetime DEFAULT NULL COMMENT '建立時間',
  `Edit_time` datetime DEFAULT NULL COMMENT '編輯時間',
  `Del_time` datetime DEFAULT NULL COMMENT '刪除時間',
  PRIMARY KEY (`A_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `addresses`
--

INSERT INTO `address` (`A_ID`, `Address`, `B_ID`, `phone`, `Add_time`, `Edit_time`, `Del_time`) VALUES
(1, 'A01室\r\n', '1', '03-3265901', NULL, NULL, NULL),
(2, 'A02室\r\n', '1', '03-3245878', NULL, NULL, NULL),
(3, 'B01室\r\n', '1', '03-3255486', NULL, NULL, NULL),
(4, 'B02室\r\n', '1', '03-3265954', NULL, NULL, NULL),
(5, 'C01室\r\n', '1', '03-3269874', NULL, NULL, NULL),
(6, 'C02室\r\n', '1', '03-3265415', NULL, NULL, NULL),
(7, 'D01室\r\n', '1', '03-3263222', NULL, NULL, NULL),
(8, 'D02室\r\n', '1', '03-6558665', NULL, NULL, NULL),
(9, 'E01室\r\n', '1', '03-6558665', NULL, NULL, NULL),
(10, 'E02室\r\n', '1', '03-9594641', NULL, NULL, NULL),
(11, 'F01室\r\n', '1', '03-6598421', NULL, NULL, NULL),
(12, 'F02室\r\n', '1', '03-3298541', NULL, NULL, NULL),
(13, 'A01室\r\n', '2', '03-9852147', NULL, NULL, NULL),
(14, 'A02室', '2', '03-9875462', NULL, NULL, NULL),
(15, 'B01室\r\n', '2', '03-5621234', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `building`
--

DROP TABLE IF EXISTS `building`;
CREATE TABLE IF NOT EXISTS `building` (
  `B_ID` tinyint(3) UNSIGNED NOT NULL COMMENT '棟編號(主鍵)',
  `B_name` varchar(20) NOT NULL COMMENT '棟名',
  `Add_time` datetime DEFAULT NULL COMMENT '建立時間',
  `Edit_time` datetime DEFAULT NULL COMMENT '編輯時間',
  `Del_time` datetime DEFAULT NULL COMMENT '刪除時間',
  PRIMARY KEY (`B_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `building`
--

INSERT INTO `building` (`B_ID`, `B_name`, `Add_time`, `Edit_time`, `Del_time`) VALUES
(1, '甲', '2020-05-29 14:50:00', NULL, NULL),
(2, '乙', '2020-05-29 14:50:00', NULL, NULL),
(3, '丙', '2020-05-29 14:55:00', NULL, NULL),
(4, '丁', '2020-05-29 14:55:00', NULL, NULL),
(5, '戊', '2020-05-29 14:58:00', NULL, NULL),
(6, '己', '2020-05-29 16:00:00', NULL, NULL),
(7, '庚', '2020-05-29 16:00:00', NULL, NULL),
(8, '辛', '2020-05-29 16:00:00', NULL, NULL),
(9, '壬', '2020-05-29 16:00:00', NULL, NULL),
(10, '葵', '2020-05-29 16:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `parcels`
--

DROP TABLE IF EXISTS `parcel`;
CREATE TABLE IF NOT EXISTS `parcel` (
  `P_ID` tinyint(3) UNSIGNED NOT NULL COMMENT '包裹編號(主鍵)',
  `A_ID` tinyint(3) UNSIGNED NOT NULL COMMENT '住址(外部鍵）',
  `Sign` tinyint(1) NOT NULL COMMENT '簽收與否',
  `Sign_time` datetime DEFAULT NULL COMMENT '簽收時間',
  `Sign_proof` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT '簽收憑證',
  `Add_time` datetime DEFAULT NULL COMMENT '建立時間',
  `Edit_time` datetime DEFAULT NULL COMMENT '編輯時間',
  `Del_time` datetime DEFAULT NULL COMMENT '刪除時間',
  PRIMARY KEY (`P_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `parcels`
--

INSERT INTO `parcel` (`P_ID`, `A_ID`, `Sign`, `Sign_time`, `Sign_proof`, `Add_time`, `Edit_time`, `Del_time`) VALUES
(1, 1, 1, '2020-05-11 10:00:00', '許小偉\r\n', NULL, NULL, NULL),
(2, 1, 1, '2020-05-12 10:00:00', '許小偉\r\n', NULL, NULL, NULL),
(3, 2, 1, '2020-05-13 10:00:00', '趙大偉\r\n', NULL, NULL, NULL),
(4, 3, 1, '2020-05-13 11:00:00', '朱小名\r\n', NULL, NULL, NULL),
(5, 3, 1, '2020-05-15 10:00:00', '朱小名\r\n', NULL, NULL, NULL),
(6, 3, 1, '2020-05-15 18:00:00', '朱小名\r\n\r\n', NULL, NULL, NULL),
(7, 5, 0, NULL, NULL, NULL, NULL, NULL),
(8, 5, 0, NULL, NULL, NULL, NULL, NULL),
(9, 5, 0, NULL, NULL, NULL, NULL, NULL),
(10, 7, 0, NULL, NULL, NULL, NULL, NULL),
(11, 7, 0, NULL, NULL, NULL, NULL, NULL),
(12, 8, 0, NULL, NULL, NULL, NULL, NULL),
(13, 8, 0, NULL, NULL, NULL, NULL, NULL),
(14, 8, 0, NULL, NULL, NULL, NULL, NULL),
(15, 8, 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `tenants`
--

DROP TABLE IF EXISTS `tenants`;
CREATE TABLE IF NOT EXISTS `tenants` (
  `t_ID` tinyint(3) UNSIGNED NOT NULL COMMENT '編號(主鍵)',
  `T_name` varchar(25) NOT NULL COMMENT '住戶姓名',
  `phone` varchar(25) NOT NULL COMMENT '連絡電話',
  `D_ID` tinyint(3) UNSIGNED NOT NULL COMMENT '住址(外部鍵)',
  `Add_time` datetime DEFAULT NULL COMMENT '建立時間',
  `Edit_time` datetime DEFAULT NULL COMMENT '編輯時間',
  `Del_time` datetime DEFAULT NULL COMMENT '刪除時間',
  PRIMARY KEY (`t_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `tenants`
--

INSERT INTO `tenants` (`t_ID`, `T_name`, `phone`, `D_ID`, `Add_time`, `Edit_time`, `Del_time`) VALUES
(1, '許小偉', '03-3265901', 1, '2020-05-29 16:00:00', NULL, NULL),
(2, '趙大偉', '03-3245878', 2, '2020-05-29 16:00:00', NULL, NULL),
(3, '朱小名', '03-3255486', 3, '2020-05-29 16:00:00', NULL, NULL),
(4, '吳大名', '03-3265954', 4, '2020-05-29 16:00:00', NULL, NULL),
(5, '陳龍', '03-3269874', 5, '2020-05-29 16:00:00', NULL, NULL),
(6, '簡豬', '03-3265415', 6, '2020-05-29 16:00:00', NULL, NULL),
(7, '楊曉華', '03-3265412', 7, '2020-05-29 16:00:00', NULL, NULL),
(8, '顏瑞涵', '03-3263222', 8, '2020-05-29 16:00:00', NULL, NULL),
(9, '李國隆', '03-6558665', 9, '2020-05-29 16:00:00', NULL, NULL),
(10, '劉銘傳', '03-9594641', 10, '2020-05-29 16:00:00', NULL, NULL),
(11, '陳小春', '03-6598421', 11, '2020-05-29 16:00:00', NULL, NULL),
(12, '彭連', '03-3298541', 0, '2020-05-29 16:00:00', NULL, NULL),
(13, '連戰', '03-9852147', 13, '2020-05-29 16:00:00', NULL, NULL),
(14, '王淑華', '03-9875462', 14, '2020-05-29 16:00:00', NULL, NULL),
(15, '葉問', '03-5621234', 15, '2020-05-29 16:00:00', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

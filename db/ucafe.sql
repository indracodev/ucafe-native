-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2025 at 02:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(2) NOT NULL,
  `sku` int(5) DEFAULT NULL,
  `collection` varchar(25) DEFAULT NULL,
  `variants` varchar(50) DEFAULT NULL,
  `weight` varchar(5) DEFAULT NULL,
  `description_en` varchar(200) DEFAULT NULL,
  `description_id` varchar(200) DEFAULT NULL,
  `ingredients_en` varchar(360) DEFAULT NULL,
  `ingredients_id` varchar(360) DEFAULT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `image3` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `link_lazada_id` varchar(250) DEFAULT NULL,
  `link_shopee_id` varchar(250) DEFAULT NULL,
  `link_tokopedia_id` varchar(250) DEFAULT NULL,
  `link_blibli_id` varchar(250) DEFAULT NULL,
  `link_jd_id` varchar(250) DEFAULT NULL,
  `link_lazada_sg` varchar(250) DEFAULT NULL,
  `link_shopee_sg` varchar(250) DEFAULT NULL,
  `link_tokopedia_sg` varchar(250) DEFAULT NULL,
  `link_blibli_sg` varchar(250) DEFAULT NULL,
  `link_jd_sg` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `sku`, `collection`, `variants`, `weight`, `description_en`, `description_id`, `ingredients_en`, `ingredients_id`, `image1`, `image2`, `image3`, `color`, `link_lazada_id`, `link_shopee_id`, `link_tokopedia_id`, `link_blibli_id`, `link_jd_id`, `link_lazada_sg`, `link_shopee_sg`, `link_tokopedia_sg`, `link_blibli_sg`, `link_jd_sg`) VALUES
(1, NULL, 'instant', 'cappuccino', '25', 'instant coffee drink cappuccino flavor with chocolate granule', 'minuman kopi instan cappuccino dengan serbuk coklat', 'sugar, non dairy creamer, maltodextrin, instant coffee, chocolate granule, salt, milk powder, cocoa powder, synthetic cappuccino flavor', 'gula, krimer nabati, maltodekstrin, kopi instan, cokelat granul, garam, susu bubuk, kakao bubuk, perisa sintetik cappuccino', 'assets/img/instant-cappuccino-1.png', 'assets/img/instant-cappuccino-2.png', 'assets/img/instant-cappuccino-3.png', '#8a6958', 'https://www.lazada.co.id//products/i3665894208-s6133822930.html?spm=a2o7h.10604829.0.0.27f21e13hQQD6e&urlFlag=true&mp=2', 'https://shopee.co.id/product/283021328/6258722827/', 'https://www.tokopedia.com/indracoofficial/ucafe-cappuccino-r10-10-sachets-25gr', 'https://www.blibli.com/p/ucafe-cappuccino-r10-10-sachets-25gr/ps--INT-60044-00067', 'https://www.jd.id/product/ucafe-cappuccino-r10-10-sachets-25gr_620388693/620388694.html', 'https://www.lazada.sg/products/ucafe-cappuccino-3-in-1-instant-coffee-10-sachets-i2042952249-s11179014101.html?spm=a2o42.seller.list.11.69d056946T9SU1&mp=1', 'https://shopee.sg/UCAFE-Cappuccino-3-in-1-Instant-Coffee-(10-sachets)-i.572571069.11264669379?sp_atk=6da392ec-0834-4141-9d04-4d86aab1baed', NULL, NULL, NULL),
(2, NULL, 'instant', 'original', '20', 'instant coffee drink original flavor', 'minuman kopi instan rasa original', 'sugar, non dairy creamer, instant coffee, maltodextrin, salt, cocoa powder, milk powder', 'gula, krimer nabati, kopi instan, maltodekstrin, garam, kakao bubuk, susu bubuk', 'assets/img/instant-original-1.png', 'assets/img/instant-original-2.png', 'assets/img/instant-original-3.png', '#995f5d', 'https://www.lazada.co.id//products/i3668294840-s6136102797.html?spm=a2o7h.10604829.0.0.27f21e13hQQD6e&urlFlag=true&mp=2', 'https://shopee.co.id/product/283021328/6358727813/', 'https://www.tokopedia.com/indracoofficial/ucafe-original-r10-10-sachets-20gr', 'https://www.blibli.com/p/ucafe-original-r10-10-sachets-20gr/ps--INT-60044-00068', 'https://www.jd.id/product/ucafe-original-r10-10-sachets-20gr_620390935/620391208.html', 'https://www.lazada.sg/products/ucafe-original-3-in-1-instant-coffee-10-sachets-i2042878894-s11179036689.html?spm=a2o42.seller.list.17.69d056946T9SU1&mp=1', 'https://shopee.sg/UCAFE-Original-3-in-1-Instant-Coffee-(10-sachets)-i.572571069.12137533758?sp_atk=3747e5a9-6706-48fc-b38f-fe9101aa07b2', NULL, NULL, NULL),
(3, NULL, 'instant', 'hazelnut', '20', 'instant coffee drink hazelnut flavor', 'minuman kopi instan rasa hazelnut', 'sugar, non dairy creamer, instant coffee, maltodextrin, cocoa powder, salt, milk powder, synthetic hazelnut flavor', 'gula, krimer nabati, kopi instan, maltodekstrin, kakao bubuk, garam, susu bubuk, perisa sintetik hazelnut', 'assets/img/instant-hazelnut-1.png', 'assets/img/instant-hazelnut-2.png', 'assets/img/instant-hazelnut-3.png', '#675552', 'https://www.lazada.co.id//products/i3669606403-s6137396085.html?spm=a2o7h.10604829.0.0.27f21e13hQQD6e&urlFlag=true&mp=2', 'https://shopee.co.id/product/283021328/6858728796/', 'https://www.tokopedia.com/indracoofficial/ucafe-hazelnut-r10-10-sachets-20gr', 'https://www.blibli.com/p/ucafe-hazelnut-r10-10-sachets-20gr/ps--INT-60044-00069', 'https://www.jd.id/product/ucafe-hazelnut-r10-10-sachets-20gr_620391287/620391288.html', 'https://www.lazada.sg/products/ucafe-hazelnut-3-in-1-instant-coffee-10-sachets-i2042913931-s11179314983.html?spm=a2o42.seller.list.15.69d056946T9SU1&mp=1', 'https://shopee.sg/UCAFE-Hazelnut-3-in-1-Instant-Coffee-(10-sachets)-i.572571069.13437535286?sp_atk=518447a0-907a-4213-86a0-1c92f9cd167b', NULL, NULL, NULL),
(4, NULL, 'instant', 'mochaccino', '20', 'instant coffee drink mochaccino flavor', 'minuman kopi instan rasa mochaccino', 'sugar, non dairy creamer, instant coffee, cocoa powder, maltodextrin, milk powder, salt, synthetic mochaccino flavor', 'gula, krimer nabati, kopi instan, kakao bubuk, maltodekstrin, susu bubuk, garam, perisa sintetik mochaccino', 'assets/img/instant-mochaccino-1.png', 'assets/img/instant-mochaccino-2.png', 'assets/img/instant-mochaccino-3.png', '#99585e', 'https://www.lazada.co.id//products/i3670772598-s6138388731.html?spm=a2o7h.10604829.0.0.27f21e13hQQD6e&urlFlag=true&mp=2', 'https://shopee.co.id/product/283021328/5758729486/', 'https://www.tokopedia.com/indracoofficial/ucafe-mochacinno-r10-10-sachets-20gr', 'https://www.blibli.com/p/ucafe-mochacinno-r10-10-sachets-20gr/ps--INT-60044-00070', 'https://www.jd.id/product/ucafe-mochacinno-r10-10-sachets-20gr_620392034/620391314.html', 'https://www.lazada.sg/products/ucafe-mochaccino-3-in-1-instant-coffee-10-sachets-i2042970665-s11179380495.html?spm=a2o42.seller.list.9.69d056946T9SU1&mp=1', 'https://shopee.sg/UCAFE-Mochaccino-3-in-1-Instant-Coffee-(10-sachets)-i.572571069.11064685812?sp_atk=49beb310-7478-4626-8d79-4be7df1ff21d', NULL, NULL, NULL),
(5, NULL, 'instant', 'vanilla latte', '20', 'instant coffee drink vanilla latte flavor', 'minuman kopi instan rasa vanilla latte', 'sugar, non dairy creamer, instant coffee, maltodextrin, milk powder, cocoa powder, salt, synthetic vanilla flavor', 'gula, krimer nabati, kopi instan, maltodekstrin, susu bubuk, kakao bubuk, garam, perisa sintetik vanilla', 'assets/img/instant-vanilla-latte-1.png', 'assets/img/instant-vanilla-latte-2.png', 'assets/img/instant-vanilla-latte-3.png', '#73695d', 'https://www.lazada.co.id//products/i3671858071-s6139174339.html?spm=a2o7h.10604829.0.0.27f21e13v5NefK&urlFlag=true&mp=2', 'https://shopee.co.id/product/283021328/7258751372/', 'https://www.tokopedia.com/indracoofficial/ucafe-vanilla-latte-r10-10-sachets-20gr', 'https://www.blibli.com/p/ucafe-vanilla-latte-r10-10-sachets-20gr/ps--INT-60044-00071', 'https://www.jd.id/product/ucafe-vanilla-latte-r10-10-sachets-20gr_620391538/620392260.html', 'https://www.lazada.sg/products/ucafe-vanilla-latte-3-in-1-instant-coffee-10-sachets-i2042939890-s11179433799.html?spm=a2o42.seller.list.13.69d056946T9SU1&mp=1', 'https://shopee.sg/UCAFE-Vanilla-Latte-3-in-1-Instant-Coffee-(10-sachets)-i.572571069.13737533501?sp_atk=52958c89-4ea9-4356-902d-718be213edb5', NULL, NULL, NULL),
(6, NULL, 'nosugar', 'coffee & creamer', '12', ' instant coffee drink mochaccino flavor ', 'minuman kopi instan rasa mochaccino', 'sugar, non dairy creamer, instant coffee, maltodextrin, milk powder, cocoa powder, salt, synthetic vanilla flavor ', 'gula, krimer nabati, kopi instan, maltodekstrin, susu bubuk, kakao bubuk, garam, perisa sintetik vanilla', 'assets/img/nosugar-creamer-1.png', 'assets/img/nosugar-creamer-2.png', 'assets/img/nosugar-creamer-3.png', '#00a5e3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 'nosugar', 'cappuccino', '12', ' instant coffee drink mochaccino flavor ', 'minuman kopi instan rasa mochaccino', 'sugar, non dairy creamer, instant coffee, maltodextrin, milk powder, cocoa powder, salt, synthetic vanilla flavor ', 'gula, krimer nabati, kopi instan, maltodekstrin, susu bubuk, kakao bubuk, garam, perisa sintetik vanilla', 'assets/img/nosugar-cappuccino-1.png', 'assets/img/nosugar-cappuccino-2.png', 'assets/img/nosugar-cappuccino-3.png', '#76543c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, 'pure', 'special', '7', 'special coffee', 'kopi spesial', '100% pure coffee', '100% kopi murni', 'assets/img/pure-renceng-1.png', 'assets/img/pure-renceng-2.png', 'assets/img/pure-renceng-3.png', '#252525', NULL, NULL, '', '', '', '', '', NULL, NULL, NULL),
(9, NULL, 'pure', 'special', '150', 'special coffee', 'kopi spesial', '100% pure coffee', '100% kopi murni', 'assets/img/pure-gusset-1.png', 'assets/img/pure-gusset-2.png', 'assets/img/pure-gusset-3.png', '#252525', NULL, NULL, '', '', '', '', '', NULL, NULL, NULL),
(10, NULL, 'pure', 'special', '140', 'special coffee', 'kopi spesial', '100% pure coffee', '100% kopi murni', 'assets/img/pure-bag-1.png', 'assets/img/pure-bag-2.png', 'assets/img/pure-bag-3.png', '#252525', NULL, NULL, '', '', '', '', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

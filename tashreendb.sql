-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2026 at 07:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tashreendb`
--
CREATE DATABASE IF NOT EXISTS `tashreendb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tashreendb`;

-- --------------------------------------------------------

--
-- Table structure for table `customers_vioce`
--
-- Creation: Jan 01, 2026 at 06:31 AM
-- Last update: Jan 01, 2026 at 06:33 AM
--

DROP TABLE IF EXISTS `customers_vioce`;
CREATE TABLE IF NOT EXISTS `customers_vioce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_customer` varchar(100) NOT NULL,
  `voice` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` text NOT NULL,
  `place` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `customers_vioce`:
--

--
-- Truncate table before insert `customers_vioce`
--

TRUNCATE TABLE `customers_vioce`;
--
-- Dumping data for table `customers_vioce`
--

INSERT DELAYED IGNORE INTO `customers_vioce` (`id`, `name_customer`, `voice`, `date`, `img`, `place`) VALUES
(1, 'سامي الحسن', 'تجربة مريحة جدًا. الغرف نظيفة ومرتبة، والموقع ممتاز وقريب من كل الخدمات. بالتأكيد سأعود مرة أخرى.', '2026-01-01 06:22:01', 'pexels-ahcapture-29560418.jpg', 'صنعاء'),
(2, 'نور قاسم', 'لإقامة كانت هادئة وممتعة. طاقم العمل ودود ومتعاون ويهتم بأدق التفاصيل.', '2026-01-01 06:22:39', 'pexels-anthonyshkraba-production-8973506.jpg', 'الحديدة'),
(3, 'أحمد خليل', 'فندق أنيق بأسعار مناسبة. النظافة عالية والخدمة سريعة، شعرت براحة من أول يوم.', '2026-01-01 06:23:06', 'pexels-cottonbro-8718350.jpg', 'بيت الفقيه'),
(4, 'ريم الدرويش', 'أعجبني تصميم الفندق والأجواء العامة. مكان مثالي للراحة سواء للعمل أو السياحة.', '2026-01-01 06:23:31', 'pexels-italo-melo-881954-2379005.jpg', 'أبين'),
(5, 'مروان الأسعد', 'استقبال راقٍ وخدمة ممتازة. الفندق منظم ويعطي إحساسًا بالاهتمام والاحترافية.', '2026-01-01 06:23:56', 'pexels-jordan-bergendahl-2628960-10402659.jpg', 'تعز'),
(6, 'خالد نبهان', 'فندق عملي ومريح. كل شيء كان متوفرًا وسهلًا، والخدمة على مستوى جيد جدًا.', '2026-01-01 06:24:21', 'pexels-moh-adbelghaffar-14267039.jpg', 'عدن'),
(7, 'هبة شريف', 'تجربة لطيفة بكل المقاييس. المكان نظيف والجو العام مريح ويبعث على الاسترخاء.', '2026-01-01 06:24:47', 'pexels-ron-lach-9604304.jpg', 'المكلا'),
(8, 'لينا مراد', 'إقامة جميلة وتجربة إيجابية. الهدوء والنظافة أكثر ما لفت انتباهي.', '2026-01-01 06:25:17', 'pexels-ron-lach-10412892.jpg', 'ريمة');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--
-- Creation: Dec 30, 2025 at 05:57 PM
-- Last update: Dec 30, 2025 at 06:04 PM
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_room` varchar(300) NOT NULL,
  `beds` int(11) NOT NULL,
  `persons` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `rooms`:
--

--
-- Truncate table before insert `rooms`
--

TRUNCATE TABLE `rooms`;
--
-- Dumping data for table `rooms`
--

INSERT DELAYED IGNORE INTO `rooms` (`id`, `name_room`, `beds`, `persons`, `description`, `price`, `img`) VALUES
(1, 'غرفة 203 المطلة على الشاطئ', 2, 2, ' الغرفة رقم 203 غرفة مكيفة ومطلة على الشاطئ ببلكونة مصممة باناقة ومليئة بالكتب الثقافية والمزهريات الطبيعية والهواء الطلق. رومنسية للغاية', 120, 'pexels-asphotography-97083.jpg'),
(3, 'غرفة 129', 1, 1, 'غرفة مكتبية مناسبة للعمل الفردي مع التمتع بالهدوء والتكيف المصمم باحتراف, مع بلاستيشن ولابتوب ماكبوك وتلفاز مفتوح نت فلكس والقنوات الرياضية', 100, 'pexels-fotoaibe-1743231.jpg'),
(5, 'جناح 3', 0, 22, 'جناح خاص بالاجتماعات الهامة الخاصة بالعمل والسياسة مع طاولة انيقة تتسع ل22 شخص مع كراسي جلد راقية ومايكات ومزودة بكاميرات وادوات تقنية للبث والتلفزة مع التكيف والتغذية ', 1200, 'pexels-karlsolano-2883048.jpg'),
(6, 'جناح رقم 19', 12, 12, 'جناح عائلي خاص مصمم بادق التفاصيل ومزود بارقى الادوات والتقنيات المفيدة والممتعة', 230, 'pexels-pixabay-164595 (1).jpg'),
(7, 'غرفة 31', 4, 4, 'غرفة زوجية مع صالة اطفال مجهزة بالكافل مكيفات وشاشات وبلاستيشن ومطبخ وحمام', 132, 'pexels-pixabay-237371.jpg'),
(8, 'غرفة 42', 2, 2, 'غرفة مجهزة بالكامل 4 في 4 بالاضافة الى مطبخ وحمام وصالة صغيرة', 95, 'pexels-pixabay-271619.jpg'),
(9, 'غرفة 34 استوديو', 2, 2, 'استوديو صناعة محتوى مرئي مجهز بالكامل من كاميرات وملقنات ومايكات احترافية بالاضافة الى اضاءة و كمبيوتر لللمونتاج متوفر فيه جميع البرامج مدفوعة .. اعمل من هنا!', 80, 'pexels-asphotography-97083.jpg'),
(10, 'غرفة 34', 2, 2, 'غرفة متوسطة الحجم في الدور الثالث مجهزة بالكامل وبسعر رمزي', 80, 'pexels-pixabay-164595.jpg'),
(11, 'جناح شهر العسل', 2, 2, 'افخم جناح تم تصميمه بارقى الطرق الهندسية , وداعا للعزوبية مع جناح مخصص بالكامل راقي جدا ورومنسي باعلى درجة', 432, 'pexels-pixabay-161758.jpg');


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table customers_vioce
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table rooms
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for database tashreendb
--

--
-- Truncate table before insert `pma__bookmark`
--

TRUNCATE TABLE `pma__bookmark`;
--
-- Truncate table before insert `pma__relation`
--

TRUNCATE TABLE `pma__relation`;
--
-- Truncate table before insert `pma__savedsearches`
--

TRUNCATE TABLE `pma__savedsearches`;
--
-- Truncate table before insert `pma__central_columns`
--

TRUNCATE TABLE `pma__central_columns`;SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

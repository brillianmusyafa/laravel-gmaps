/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : laravel_gis

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2018-07-23 23:56:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kategories
-- ----------------------------
DROP TABLE IF EXISTS `kategories`;
CREATE TABLE `kategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kategories
-- ----------------------------
INSERT INTO `kategories` VALUES ('1', 'Polsek', 'icon-polsek.png', '2017-12-24 11:39:42', '2017-12-24 11:39:42');
INSERT INTO `kategories` VALUES ('2', 'Penginapan', 'icon-penginapan.png', '2017-12-24 11:40:18', '2017-12-24 11:40:18');
INSERT INTO `kategories` VALUES ('3', 'Rumah makan', 'icon-rumah-makan.png', '2017-12-10 12:54:46', '2017-12-10 12:54:46');
INSERT INTO `kategories` VALUES ('4', 'Transportasi', 'icon-transportasi.png', '2017-12-24 11:40:33', '2017-12-24 11:40:33');
INSERT INTO `kategories` VALUES ('5', 'Pemerintahan', 'icon-gov.png', '2017-12-24 11:40:48', '2017-12-24 11:40:48');
INSERT INTO `kategories` VALUES ('6', 'Ibadah', 'icon_masjid.png', '2017-12-10 12:54:40', '2017-12-24 11:40:57');
INSERT INTO `kategories` VALUES ('7', 'Sekolah', 'icon-sekolah.png', '2017-12-10 13:49:38', '2017-12-10 13:49:38');

-- ----------------------------
-- Table structure for maps
-- ----------------------------
DROP TABLE IF EXISTS `maps`;
CREATE TABLE `maps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategory_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `no_telp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of maps
-- ----------------------------
INSERT INTO `maps` VALUES ('2', '1', 'Salim An Nur', 'Berada di perumahan tiara asri 2', null, '-6.992306441395298', '109.12265360355377', null, '2017-12-10 13:16:01', '2017-12-10 13:16:01');
INSERT INTO `maps` VALUES ('3', '2', 'Warteg Raswi', 'Warteg yang enak murah dan maknyus', null, '-6.98287129634877', '109.13669764995575', null, '2017-12-10 13:21:59', '2017-12-10 13:21:59');
INSERT INTO `maps` VALUES ('4', '1', 'Masjid Baru Jadi', 'Ini masjid Agung Alun Alun Slawi baru jadi', null, '-6.993403291270522', '109.12687540054321', null, '2017-12-10 13:47:58', '2017-12-10 13:47:58');
INSERT INTO `maps` VALUES ('5', '1', 'Masjid Agung Slawi', 'Lah ini masjid agung yang udah lama', null, '-6.97456480345622', '109.13895606994629', null, '2017-12-10 13:48:34', '2017-12-10 13:48:34');
INSERT INTO `maps` VALUES ('6', '2', 'Rumah Makan Padang', 'Disini ada rumah makan padangnya.', null, '-6.942082873660563', '109.13618803024292', null, '2017-12-10 13:49:04', '2017-12-10 13:49:04');
INSERT INTO `maps` VALUES ('7', '3', 'SMA N 1 Slawi', 'Sekolah gw inih. yang favorit', null, '-6.983936220671733', '109.13458943367004', null, '2017-12-10 13:51:10', '2017-12-10 13:51:10');
INSERT INTO `maps` VALUES ('8', '1', 'KANTOR POLRES NGANJUK', 'JL. GATOT SUBROTO 116, KEL. RINGINANOM ', '-', '-7.591175', '111.8899024', null, null, null);
INSERT INTO `maps` VALUES ('9', '1', 'KANTOR SAMSAT', 'JL. ANJUK LADANG KOTAK POS 7 ', '(0358) 323335', '-7.6240631', '111.8971059', null, null, null);
INSERT INTO `maps` VALUES ('10', '1', 'POLSEK KERTOSONO', 'JL. PANG. SUDIRMAN NO. 20 KEL. PELEM, KEC. KERTOSONO ', '(0358) 551110', '-7.6001864', '111.9699815', null, null, null);
INSERT INTO `maps` VALUES ('11', '1', 'POLSEK PATIANROWO', 'JL. ROWOSARO 5 DS. ROWOMARTO, KEC. PATIANROWO ', '(0358) 551453', '-7.5376691', '112.1108486', null, null, null);
INSERT INTO `maps` VALUES ('12', '1', 'POLSEK JATIKALEN', 'JL. RAYA JATIKALEN NO. 96, DS. / KEC. JATIKALEN ', '(0358) 7606814', '-7.506302', '112.129197', null, null, null);
INSERT INTO `maps` VALUES ('13', '1', 'POLSEK LENGKONG', 'JL. MERDEKA SELATAN NO. 20, DS. / KEC. LENGKONG ', '(0358) 552938', '-7.5356518', '112.0749965', null, null, null);
INSERT INTO `maps` VALUES ('14', '1', 'POLSEK BARON', 'JL. RAYA NGANJUK-SURABAYA, DS. / KEC. BARON ', '(0358) 771200', '-7.6021511', '112.0403482', null, null, null);
INSERT INTO `maps` VALUES ('15', '1', 'POLSEK GONDANG', 'JL. RAYA GONDANG, DS. GONDANG KULON, KEC. GONDANG ', '(0358) 611735', '-7.5265994', '111.9516384', null, null, null);
INSERT INTO `maps` VALUES ('16', '1', 'POLSEK REJOSO', 'JL. BOJONEGORO 2, DS. / KEC. REJOSO ', '(0358) 611670', '-7.5272276', '111.9057021', null, null, null);
INSERT INTO `maps` VALUES ('17', '1', 'POLSEK WARUJAYENG', 'JL. A. YANI 19, KEL. WARUJAYENG, KEC. TANJUNGANOM ', '(0358) 771110', '-7.6323454', '112.0176997', null, null, null);
INSERT INTO `maps` VALUES ('18', '1', 'POLSEK PRAMBON', 'JL. RAYA NO. 10 DS. / KEC. PRAMBON ', '(0358) 791110', '-7.6695256', '112.014564', null, null, null);
INSERT INTO `maps` VALUES ('19', '1', 'POLSEK PACE', 'JL. RAYA KEDIRI NO. 53, DS. PACE KULON, KEC. PACE ', '(03580 323834', '-7.6480565', '111.8955772', null, null, null);
INSERT INTO `maps` VALUES ('20', '1', 'POLSEK SUKOMORO', 'JL. RAYA NGANJUK-SURABAYA, DS. / KEC. SUKOMORO ', '(0358) 323836', '-7.6017058', '111.9372341', null, null, null);
INSERT INTO `maps` VALUES ('21', '1', 'POLSEK LOCERET', 'JL. RAYA KEDIRI NO. 143, DS. / KEC. LOCERET ', '(0358) 323832', '-7.6480565', '111.8955772', null, null, null);
INSERT INTO `maps` VALUES ('22', '1', 'POLSEK BERBEK', 'JL. MAYJEND SOEPENO 196, DS. KACANGAN, KEC. BERBEK ', '(0358) 323833', '-7.6604972', '111.8631817', null, null, null);
INSERT INTO `maps` VALUES ('23', '1', 'POLSEK NGETOS', 'JL. PANG. SUDIRMAN NO. 02, DS. / KEC. NGETOS ', '(0358) 7629667', '-7.6908086', '111.8433329', null, null, null);
INSERT INTO `maps` VALUES ('24', '1', 'POLSEK SAWAHAN', 'JL. SEDUDO 90, DS. / KEC. SAWAHAN ', '(0358) 324669', '-7.5499472', '111.5444015', null, null, null);
INSERT INTO `maps` VALUES ('25', '1', 'POLSEK NGANJUK KOTA', 'JL. PRAMUKA NO. 01, KEL. MANGUNDIKARAN ', '(0358) 328807', '-7.6017689', '111.9006503', null, null, null);
INSERT INTO `maps` VALUES ('26', '1', 'POLSEK BAGOR', 'JL. RAYA NGANJUK-MADIUN NO. 71, DS. PETAK, KEC. BAGOR ', '(0358) 323831', '-7.5689847', '111.8496', null, null, null);
INSERT INTO `maps` VALUES ('27', '1', 'POLSEK WILANGAN', 'JL. RAYA WILANGAN NO. 01, DS. / KEC. WILANGAN ', '(0358) 7629671', '-7.5591539', '111.8023598', null, null, null);
INSERT INTO `maps` VALUES ('28', '1', 'POLSEK NGRONGGOT', 'JL. RAYA NGRONGGOT, DS. / KEC. NGRONGGOT ', '(0358) 771719', '-7.6833853', '112.0544648', null, null, null);
INSERT INTO `maps` VALUES ('29', '1', 'POLSEK NGLUYU', 'JL. RAYA DSN. NGLIDAH, DS. GAMPENG, KEC. NGLUYU ', '(0358) 611768', '-7.4297456', '111.9691126', null, null, null);
INSERT INTO `maps` VALUES ('30', '2', 'Djaya Hotel', 'Jl. RA. Kartini No. 19, Mangun Dikaran, Nganjuk, Mangun Dikaran, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64419', 'Telepon: (0358) 323202', '-7.6013027', '111.9028066', null, null, null);
INSERT INTO `maps` VALUES ('31', '2', 'Hotel Mataram', 'Jalan RA Kartini No.32, Mangun Dikaran, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64412', 'Telepon: (0358) 321453', '-7.6017544', '111.9049809', null, null, null);
INSERT INTO `maps` VALUES ('32', '2', 'Nirwana Hotel & Restaurant', 'Jl. Gatot Subroto No. 2A, Kauman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64411', 'Telepon: (0358) 321222', '-7.5946676', '111.894876', null, null, null);
INSERT INTO `maps` VALUES ('33', '2', 'Hotel Istana Nganjuk', 'Kedondong, Bagor, Kabupaten Nganjuk, Jawa Timur 64461', 'Telepon: (0358) 323572', '-7.5895127', '111.8873392', null, null, null);
INSERT INTO `maps` VALUES ('34', '2', 'Wisma Gerung Hotel', 'Jl. Raya Madiun - Surabaya No.48, Pehserut, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64481', 'Telepon: (0358) 322144', '-7.6012142', '111.9305922', null, null, null);
INSERT INTO `maps` VALUES ('35', '2', 'Hotel Wilis Indah', 'Jl. Jend. Gatot Subroto No. 97/99, Kauman, Mangun Dikaran, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64411', 'Telepon: (0358) 323808', '-7.5921477', '111.8914065', null, null, null);
INSERT INTO `maps` VALUES ('36', '3', 'Rumah Makan Mayar', 'Jl. Jend. Sudirman No.43, Mangun Dikaran, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64419', 'Telepon: (0358) 321272', '-7.599299', '111.9042381', null, null, null);
INSERT INTO `maps` VALUES ('37', '3', 'Nirwana Rumah Makan', 'Jl. Gatot Subroto No.2A, Kauman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64411', 'Telepon: (0358) 321430', '-7.5947365', '111.8949464', null, null, null);
INSERT INTO `maps` VALUES ('38', '3', 'Dapur Kota Angin', 'Jl. Yos Sudarso No.20, Payaman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64418', 'Telepon: (0358) 324487', '-7.6069494', '111.9025768', null, null, null);
INSERT INTO `maps` VALUES ('39', '3', 'Rumah Makan Cita Rasa', 'Jl. PB. Sudirman No.284, Mangun Dikaran, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64419', 'Telepon: (0358) 322032', '-7.6004128', '111.919269', null, null, null);
INSERT INTO `maps` VALUES ('40', '3', 'Gudeg Plus Rumah Makan', 'Jalan Gondo Wardoyo No. 20, Payaman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64418', 'Telepon: (0358) 321686', '-7.6064563', '111.9019468', null, null, null);
INSERT INTO `maps` VALUES ('41', '3', 'Nasi Becek & Sate Kambing - Makanan Khas Nganjuk', 'Jl. DR. Soetomo, Payaman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64418', '', '-7.6060116', '111.8999232', null, null, null);
INSERT INTO `maps` VALUES ('42', '4', 'Stasiun Nganjuk', 'JL. Jenderal Sudirman, Mangundikaran, 64412 Nganjuk, Indonesia, 64416, Jawa Timur', '', '-7.5992877', '111.9028326', null, null, null);
INSERT INTO `maps` VALUES ('43', '4', 'Terminal BUS \"ANJUK LADANG\" Nganjuk', 'Ringinanom, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64419', '', '-7.592122', '111.891477', null, null, null);
INSERT INTO `maps` VALUES ('44', '5', 'KANTOR BUPATI', 'Jl. Basuki Rachmat No.1, Mangun Dikaran, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64419', '(0358) 232001', '-7.6023607', '111.9015994', null, null, null);
INSERT INTO `maps` VALUES ('45', '5', 'Dinas Kebudayaan & Pariwisata Pemerintah Kabupaten Nganjuk', 'Jl. Mastrip No.7, Ganung Kidul, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64419', '(0358) 321793', '-7.6031044', '111.9086621', null, null, null);
INSERT INTO `maps` VALUES ('46', '6', 'Pura Kerta Bhuwana Giri Wilis', 'Bajulan, Loceret, Kabupaten Nganjuk, Jawa Timur 64471', '0852-5874-7491', '-7.7635417', '111.8541925', null, null, null);
INSERT INTO `maps` VALUES ('47', '6', 'Vihara Poo San Sie', 'Jl. Letnan Jenderal Suprapto No.27, Kudu, Kertosono, Kabupaten Nganjuk, Jawa Timur 64315', '', '-7.5900944', '112.110649', null, null, null);
INSERT INTO `maps` VALUES ('48', '6', 'Gereja Bethel Indonesia Bethany', 'JL. KH Achmad Dahlan 5, Nganjuk, 64411, Payaman, Nganjuk Sub-District, Nganjuk Regency, East Java 64411', '', '-7.6072798', '111.9035103', null, null, null);
INSERT INTO `maps` VALUES ('49', '6', 'Gereja Katolik St Paulus Nganjuk', 'JL Diponegoro, No. 63-65, Ganung Kidul, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64419', '', '-7.6031336', '111.9045712', null, null, null);
INSERT INTO `maps` VALUES ('50', '6', 'Masjid Agung Baitussalam Kabupaten Nganjuk', 'Jl. Supriyadi, Kauman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64411', '', '-7.6026333', '111.9004238', null, null, null);
INSERT INTO `maps` VALUES ('51', '6', 'Masjid', null, null, '-7.571924492727193', '111.88958651328699', null, '2018-04-04 01:25:35', '2018-04-04 01:25:35');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_12_05_172327_create_aplikasis_table', '1');
INSERT INTO `migrations` VALUES ('4', '2017_12_05_180506_create_videos_table', '2');
INSERT INTO `migrations` VALUES ('5', '2017_12_10_181534_create_maps_table', '3');
INSERT INTO `migrations` VALUES ('6', '2017_12_10_195308_create_kategories_table', '3');
INSERT INTO `migrations` VALUES ('7', '2017_12_27_071426_create_settings_table', '4');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', 'app_name', 'Brillian Marker', '2017-12-27 01:34:03', '2018-01-06 12:13:29');
INSERT INTO `settings` VALUES ('2', 'set_zoom', '12', '2017-12-27 01:34:11', '2018-01-06 12:13:29');
INSERT INTO `settings` VALUES ('3', 'latitude_centre', '-7.5812427', '2017-12-27 01:34:34', '2018-01-06 12:13:29');
INSERT INTO `settings` VALUES ('4', 'longitude_centre', '111.9081293', '2017-12-27 01:34:43', '2018-01-06 12:13:29');
INSERT INTO `settings` VALUES ('5', 'gmaps_api_key', 'AIzaSyB1RD7zebqdO7CqN3mGAJuOwD9gN0P8dfI', '2017-12-27 01:34:43', '2018-01-06 12:13:29');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin@aplikasi.com', 'admin@aplikasi.com', '$2y$10$28RXxj6TiykdcT99pKgl1O3BCUUiL1McAYShA1mj4n1PFFhXoVJCO', 'sXX59eskACLt5EL30t8xYrDtDggscRZWaPeNvGAghEIVfkaXqGFWjIYBnhxW', '2017-12-24 12:36:41', '2017-12-24 12:36:41', '1');

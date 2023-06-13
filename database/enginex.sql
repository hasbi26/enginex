/*
 Navicat Premium Data Transfer

 Source Server         : sekolah
 Source Server Type    : MySQL
 Source Server Version : 80031
 Source Host           : localhost:3306
 Source Schema         : enginex

 Target Server Type    : MySQL
 Target Server Version : 80031
 File Encoding         : 65001

 Date: 12/06/2023 15:19:59
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_aksesoris
-- ----------------------------
DROP TABLE IF EXISTS `t_aksesoris`;
CREATE TABLE `t_aksesoris`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `namaItem` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `harga` decimal(10, 2) NULL DEFAULT NULL,
  `foto1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `foto2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `foto3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `keterangan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `jenis` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `merk` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_aksesoris
-- ----------------------------
INSERT INTO `t_aksesoris` VALUES (4, 'Baju Toyoda', 12, 120000.00, 'Baju_Toyoda_foto.jpg', 'Baju_Toyoda_foto1.jpg', 'Baju_Toyoda_foto2.jpg', 'Deskripsi', 'Warna Hitam', 'Baju', 'Iforce');
INSERT INTO `t_aksesoris` VALUES (5, 'Miniatur Vantrend', 20, 450000.00, 'miniatur_Vantrend_foto.jpg', 'miniatur_Vantrend_foto1.jpg', 'miniatur_Vantrend_foto2.jpg', 'deskripsi', 'keterangan', 'Miniatur', 'RideLine');

-- ----------------------------
-- Table structure for t_mobil
-- ----------------------------
DROP TABLE IF EXISTS `t_mobil`;
CREATE TABLE `t_mobil`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `namaItem` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `merk` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `model` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `volume_mesin` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `transmisi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `bahanbakar` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `warna` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tahun` int NULL DEFAULT NULL,
  `nopol` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `kilometer` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `ac` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `powersteering` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `powerwindow` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `centrallock` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `alarm` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotodepan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotokanan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotokiri` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotobelakang` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotodalam1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotodalam2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotomesin1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotomesin2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `kondisi` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `harga` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_mobil
-- ----------------------------
INSERT INTO `t_mobil` VALUES (17, 'Inova', 'SUV', 'Toyota', 'Baru', '1200CC', 'Manual Transmision', 'Solar', 'Putih', 2019, 'B 1244 DK', '200', 'Ada', 'Ada', 'Rusak', 'Ada', 'Ada', 'B_1244_DK_foto3.jpg', 'B_1244_DK_foto4.jpg', 'B_1244_DK_foto5.jpg', 'B_1244_DK_foto.jpg', 'B_1244_DK_foto1.jpg', 'B_1244_DK_foto2.jpg', 'B_1244_DK_foto6.jpg', 'B_1244_DK_foto7.jpg', 'Bagus Mulus', '120000000', 'Hidup', 'Deskripsi nya begitu begini');
INSERT INTO `t_mobil` VALUES (18, 'Sx4', 'Hatchback', 'Suzuky', 'Sedan', '3000cc', 'Automatic Transmision', 'Bensin', 'Abu Abu', 2017, 'D 6765 AS', '150', 'Rusak', 'Rusak', 'Ada', 'Tidak Ada', 'Tidak Ada', 'D_6765_AS_foto3.jpg', 'D_6765_AS_foto4.jpg', 'D_6765_AS_foto5.jpg', 'D_6765_AS_foto.jpg', 'D_6765_AS_foto1.jpg', 'D_6765_AS_foto2.jpg', 'D_6765_AS_foto6.jpg', 'D_6765_AS_foto7.jpg', 'Lecet Belakang', '150000000', 'STNK Only', 'Deskripsi');
INSERT INTO `t_mobil` VALUES (19, 'Freed', 'citycar', 'Honda', 'Model ', '15000cc', 'Automatic Transmision', 'Listrik', 'Putih', 2017, 'R 3345 FD', '8900', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'R_3345_FD_foto3.jpg', 'R_3345_FD_foto4.jpg', 'R_3345_FD_foto5.jpg', 'R_3345_FD_foto.jpg', 'R_3345_FD_foto1.jpg', 'R_3345_FD_foto2.jpg', 'R_3345_FD_foto6.jpg', 'R_3345_FD_foto7.jpg', 'Bagus Banget', '130000000', 'Status', 'Deskripsi');
INSERT INTO `t_mobil` VALUES (20, 'Corolla', 'Sedan', 'Toyota', 'Lama', '1000cc', 'Manual Transmision', 'Bensin', 'Biru Metalic', 1998, 'D 7877 DF', '100', 'Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'D_7877_DF_foto3.jpg', 'D_7877_DF_foto4.jpg', 'D_7877_DF_foto5.jpg', 'D_7877_DF_foto.jpg', 'D_7877_DF_foto1.jpg', 'D_7877_DF_foto2.jpg', 'D_7877_DF_foto6.jpg', 'D_7877_DF_foto7.jpg', 'bagus mulpis', '40000000', 'Kepemilikan', 'ini Deskripsi');
INSERT INTO `t_mobil` VALUES (21, 'Vios HG', 'Hatchback', 'Toyota', 'Lama', '15000cc', 'Manual Transmision', 'Bensin', 'Kuning Tua', 2002, 'E 3453 SD', '1200', 'Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Ada', 'E_3453_SD_foto3.jpg', 'E_3453_SD_foto4.jpg', 'E_3453_SD_foto5.jpg', 'E_3453_SD_foto.jpg', 'E_3453_SD_foto1.jpg', 'E_3453_SD_foto2.jpg', 'E_3453_SD_foto6.jpg', 'E_3453_SD_foto7.jpg', 'Baik', '50000000', 'Pajak On', 'Deskripsi');
INSERT INTO `t_mobil` VALUES (22, 'Brio', 'Hatchback', 'Honda', 'Baru', '1300cc', 'Manual Transmision', 'Bensin', 'Putih', 2015, 'F 2345 FF', '500', 'Ada', 'Tidak Ada', 'Tidak Ada', 'Ada', 'Ada', 'F_2345_FF_foto3.jpg', 'F_2345_FF_foto4.jpg', 'F_2345_FF_foto5.jpg', 'F_2345_FF_foto.jpg', 'F_2345_FF_foto1.jpg', 'F_2345_FF_foto2.jpg', 'F_2345_FF_foto6.jpg', 'F_2345_FF_foto7.jpg', 'bagus mulpis', '70000000', 'Pajak Off', 'Deskripsi');

-- ----------------------------
-- Table structure for t_motor
-- ----------------------------
DROP TABLE IF EXISTS `t_motor`;
CREATE TABLE `t_motor`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `namaItem` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `merk` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tahun` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `volume_mesin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `pajak` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `warna` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `nopol` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `model` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotodepan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotobelakang` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotokiri` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotokanan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fotolain` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `harga` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `kilometer` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_motor
-- ----------------------------
INSERT INTO `t_motor` VALUES (35, 'Supra Z', 'Honda', '2009', '1200cc', NULL, 'Hitam Belank', 'Desk', 'D 1209 DS', 'Bebek', 'D_1209_DS_foto.jpg', 'D_1209_DS_foto1.jpg', 'D_1209_DS_foto3.jpg', 'D_1209_DS_foto2.jpg', 'D_1209_DS_foto4.jpg', '10000', '1200');
INSERT INTO `t_motor` VALUES (36, 'Vario', 'Honda', '2019', '1000cc', NULL, 'putih', 'Deskripsi', 'F 1234 DS', 'Matic', 'F_1234_DS_foto.jpg', 'F_1234_DS_foto1.jpg', 'F_1234_DS_foto3.jpg', 'F_1234_DS_foto2.jpg', 'F_1234_DS_foto4.jpg', '2000000', '2000');
INSERT INTO `t_motor` VALUES (37, 'Scoopy', 'Honda', '2019', '100cc', 'Mati', 'Merah', 'Deskripso', 'K 1234 AS', 'Bebek', 'K_1234_AS_foto.jpg', 'K_1234_AS_foto1.jpg', 'K_1234_AS_foto3.jpg', 'K_1234_AS_foto2.jpg', 'K_1234_AS_foto4.jpg', '200000', '100');

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `last_login` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES (1, 'hasbi', 'hasbi', NULL);
INSERT INTO `t_user` VALUES (2, 'haskuy', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a', '2023-06-01 08:07:42.000000');

SET FOREIGN_KEY_CHECKS = 1;

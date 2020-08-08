/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 100131
 Source Host           : 127.0.0.1:3306
 Source Schema         : epermit

 Target Server Type    : MySQL
 Target Server Version : 100131
 File Encoding         : 65001

 Date: 06/08/2020 14:37:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for m_gi
-- ----------------------------
DROP TABLE IF EXISTS `m_gi`;
CREATE TABLE `m_gi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_gi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_utlg` int(50) NULL DEFAULT NULL,
  `status` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_gi
-- ----------------------------
INSERT INTO `m_gi` VALUES (1, 'GI Wonosobo 1', 1, NULL);

-- ----------------------------
-- Table structure for m_induk
-- ----------------------------
DROP TABLE IF EXISTS `m_induk`;
CREATE TABLE `m_induk`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_induk
-- ----------------------------
INSERT INTO `m_induk` VALUES (2, 'UT Jawa Bali', NULL);

-- ----------------------------
-- Table structure for m_jalur
-- ----------------------------
DROP TABLE IF EXISTS `m_jalur`;
CREATE TABLE `m_jalur`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jalur` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_gi` int(30) NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_jalur
-- ----------------------------
INSERT INTO `m_jalur` VALUES (1, 'By Wnsb  to PWT', 1, NULL, NULL);

-- ----------------------------
-- Table structure for m_kondisi
-- ----------------------------
DROP TABLE IF EXISTS `m_kondisi`;
CREATE TABLE `m_kondisi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kondisi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_kondisi
-- ----------------------------
INSERT INTO `m_kondisi` VALUES (2, 'Hotspot pada klem', NULL);

-- ----------------------------
-- Table structure for m_kondisi_param
-- ----------------------------
DROP TABLE IF EXISTS `m_kondisi_param`;
CREATE TABLE `m_kondisi_param`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kondisi` int(30) NULL DEFAULT NULL,
  `parameter` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_kondisi_param
-- ----------------------------
INSERT INTO `m_kondisi_param` VALUES (1, 2, 'jalur');
INSERT INTO `m_kondisi_param` VALUES (2, 2, 'titik');
INSERT INTO `m_kondisi_param` VALUES (3, 2, 'nilai');

-- ----------------------------
-- Table structure for m_upt
-- ----------------------------
DROP TABLE IF EXISTS `m_upt`;
CREATE TABLE `m_upt`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_upt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_induk` int(30) NULL DEFAULT NULL,
  `status` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_upt
-- ----------------------------
INSERT INTO `m_upt` VALUES (1, 'UPT Purwokerto', 0, NULL);

-- ----------------------------
-- Table structure for m_user
-- ----------------------------
DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_level` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_user
-- ----------------------------
INSERT INTO `m_user` VALUES (2, 'admin', 'admin', 1);
INSERT INTO `m_user` VALUES (3, 'upt', 'upt', 2);
INSERT INTO `m_user` VALUES (4, 'utlg', 'utlg', 3);
INSERT INTO `m_user` VALUES (5, 'gi', 'gi', 4);

-- ----------------------------
-- Table structure for m_utlg
-- ----------------------------
DROP TABLE IF EXISTS `m_utlg`;
CREATE TABLE `m_utlg`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_utlg` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_upt` int(100) NULL DEFAULT NULL,
  `status` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_utlg
-- ----------------------------
INSERT INTO `m_utlg` VALUES (1, 'UTLG KV 200 Wonosobo', 1, NULL);

-- ----------------------------
-- Table structure for t_checking
-- ----------------------------
DROP TABLE IF EXISTS `t_checking`;
CREATE TABLE `t_checking`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pelaksanaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `catatan` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qr` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_checking
-- ----------------------------
INSERT INTO `t_checking` VALUES (1, '2020-07-25', 'dddddddddd', '1c5f91_WhatsApp Image 2020-07-12 at 20.18.44(1).jpeg', '1c5f91');

-- ----------------------------
-- Table structure for t_kondisi
-- ----------------------------
DROP TABLE IF EXISTS `t_kondisi`;
CREATE TABLE `t_kondisi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kondisi` int(40) NULL DEFAULT NULL,
  `tgl_input` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_input` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_utlg` int(11) NULL DEFAULT NULL,
  `id_gi` int(11) NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT NULL,
  `qr` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_kondisi` int(40) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_kondisi
-- ----------------------------
INSERT INTO `t_kondisi` VALUES (1, 2, '24/07/2020 15:12:41', NULL, NULL, 1, 3, '1c5f91', 2);
INSERT INTO `t_kondisi` VALUES (2, 2, '25/07/2020 00:42:44', NULL, NULL, 1, 1, '6476a3', 2);
INSERT INTO `t_kondisi` VALUES (3, 2, '25/07/2020 00:44:30', NULL, NULL, 1, 1, 'fd5290', 2);
INSERT INTO `t_kondisi` VALUES (4, 2, '25/07/2020 00:48:38', NULL, NULL, 1, 1, 'f9b4c6', 2);
INSERT INTO `t_kondisi` VALUES (5, 2, '25/07/2020 00:50:19', NULL, NULL, 1, 1, '0ab616', 2);
INSERT INTO `t_kondisi` VALUES (6, 2, '25/07/2020 00:53:24', NULL, NULL, 1, 1, '78c722', 1);
INSERT INTO `t_kondisi` VALUES (7, 2, '25/07/2020 00:54:03', NULL, NULL, 1, 1, 'e09cdc', 2);
INSERT INTO `t_kondisi` VALUES (8, 2, '03/08/2020 09:19:58', NULL, NULL, 1, 1, '46ebf0', 1);

-- ----------------------------
-- Table structure for t_kondisi_detail
-- ----------------------------
DROP TABLE IF EXISTS `t_kondisi_detail`;
CREATE TABLE `t_kondisi_detail`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kondisi` int(20) NULL DEFAULT NULL,
  `qr` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nilai` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_input` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `file` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `t_kondisi_detail_ibfk_1`(`id_kondisi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_kondisi_detail
-- ----------------------------
INSERT INTO `t_kondisi_detail` VALUES (1, 2, '1c5f91', '2', '2.5', '2020/07/24 15:12:41', '12_WhatsApp Image 2020-07-12 at 20.18.50.jpeg');
INSERT INTO `t_kondisi_detail` VALUES (2, 2, '6476a3', 'By 239 Coe', '2', '2020/07/25 00:42:44', '12_WhatsApp Image 2020-07-12 at 20.18.35(2).jpeg');
INSERT INTO `t_kondisi_detail` VALUES (3, 2, 'fd5290', 'By 239 Coetr', '2.31', '2020/07/25 00:44:30', '12_WhatsApp Image 2020-07-12 at 20.18.37(2).jpeg');
INSERT INTO `t_kondisi_detail` VALUES (4, 2, 'f9b4c6', '2', '2.5', '2020/07/25 00:48:39', '12_WhatsApp Image 2020-07-12 at 20.18.38(1).jpeg');
INSERT INTO `t_kondisi_detail` VALUES (5, 2, '0ab616', 'By 239 Coe', '2', '2020/07/25 00:50:19', '');
INSERT INTO `t_kondisi_detail` VALUES (6, 2, '78c722', '', '', '2020/07/25 00:53:24', '');
INSERT INTO `t_kondisi_detail` VALUES (7, 2, 'e09cdc', '2', '2.31', '2020/07/25 00:54:03', '');
INSERT INTO `t_kondisi_detail` VALUES (8, 2, '46ebf0', '', '', '2020/08/03 09:19:58', '');

-- ----------------------------
-- Table structure for t_rencana
-- ----------------------------
DROP TABLE IF EXISTS `t_rencana`;
CREATE TABLE `t_rencana`  (
  `tgl_awal_kerja` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_akhir_kerja` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rab` float(255, 0) NULL DEFAULT NULL,
  `material` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qr` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_rencana
-- ----------------------------
INSERT INTO `t_rencana` VALUES ('2020-07-24', '2020-07-25', 1000000, 'we', '1c5f91');

-- ----------------------------
-- Table structure for t_tracking_history
-- ----------------------------
DROP TABLE IF EXISTS `t_tracking_history`;
CREATE TABLE `t_tracking_history`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `qr` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_input` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_tracking_history
-- ----------------------------
INSERT INTO `t_tracking_history` VALUES (1, '1c5f91', '24/07/2020 15:12:41', '1', 'Laporan Dikirim');
INSERT INTO `t_tracking_history` VALUES (2, '1c5f91', '24/07/2020 15:15:19', '2', 'Laporan Terverifikasi');
INSERT INTO `t_tracking_history` VALUES (3, '1c5f91', '24/07/2020 15:17:47', '3', 'Selesai');
INSERT INTO `t_tracking_history` VALUES (4, '6476a3', '25/07/2020 00:42:44', '1', 'Laporan diKirim');
INSERT INTO `t_tracking_history` VALUES (5, 'fd5290', '25/07/2020 00:44:30', '1', 'Laporan diKirim');
INSERT INTO `t_tracking_history` VALUES (6, 'f9b4c6', '25/07/2020 00:48:38', '1', 'Laporan diKirim');
INSERT INTO `t_tracking_history` VALUES (7, '0ab616', '25/07/2020 00:50:19', '1', 'Laporan diKirim');
INSERT INTO `t_tracking_history` VALUES (8, '78c722', '25/07/2020 00:53:24', '1', 'Laporan diKirim');
INSERT INTO `t_tracking_history` VALUES (9, 'e09cdc', '25/07/2020 00:54:03', '1', 'Laporan diKirim');
INSERT INTO `t_tracking_history` VALUES (10, '46ebf0', '03/08/2020 09:19:58', '1', 'Laporan diKirim');

SET FOREIGN_KEY_CHECKS = 1;

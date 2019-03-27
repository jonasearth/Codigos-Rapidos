/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : forca

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 24/03/2019 21:26:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES (1, 'animais');
INSERT INTO `categoria` VALUES (2, 'nomes');
INSERT INTO `categoria` VALUES (3, 'cidades');

-- ----------------------------
-- Table structure for games
-- ----------------------------
DROP TABLE IF EXISTS `games`;
CREATE TABLE `games`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `palavra` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `acertadas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `erros` int(11) NOT NULL DEFAULT 0,
  `dica` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `erros_c` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 101 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of games
-- ----------------------------
INSERT INTO `games` VALUES (81, 'herbert', '1', 1, 'Produtor de cinema Brasileiro', '5c97a109eebcd5c97a109eebd15c97a109eebd2', 0);
INSERT INTO `games` VALUES (82, 'coala', '2', 0, 'Presente apenas na Austrália, vive a maior parte do tempo em árvores  ', '5c97a157c0e615c97a157c0e645c97a157c0e65', 0);
INSERT INTO `games` VALUES (83, 'cachorro', '3', 0, 'Mamífero carnívoro da família dos canídeos', '5c97a18e52e185c97a18e52e1b5c97a18e52e1c', 0);
INSERT INTO `games` VALUES (84, 'Gato', '1', 1, 'Animal de estimação da família dos felinos', '5c97a1d433c765c97a1d433c7c5c97a1d433c7d', 0);
INSERT INTO `games` VALUES (85, 'whindersson', '2', 0, 'Famoso comediante de Standup', '5c97a24775c835c97a24775c865c97a24775c87', 0);
INSERT INTO `games` VALUES (86, 'whindersson', '11', 0, 'Famoso comediante de Standup', '5c97a26f47f875c97a26f47f8b5c97a26f47f8c', 0);
INSERT INTO `games` VALUES (87, 'pestalozzi', '1', 0, 'pedagogista suíço  e educador pioneiro da reforma educacional', '5c97a2fe8bf975c97a2fe8bf9a5c97a2fe8bf9b', 0);
INSERT INTO `games` VALUES (88, 'orangotango', '3', 0, 'Mamífero presente em florestas tropicais, e um dos grandes Primatas', '5c97a34619cd45c97a34619cd85c97a34619cd9', 0);
INSERT INTO `games` VALUES (89, 'cacatua', '3', 0, 'Geralmente possui uma crista amarela', '5c97a38a1cd2c5c97a38a1cd2f5c97a38a1cd30', 0);
INSERT INTO `games` VALUES (90, 'cachorro', '8', 0, 'Mamífero carnívoro da família dos canídeos', '5c97a3d6300fc5c97a3d6301035c97a3d630105', 0);
INSERT INTO `games` VALUES (91, 'gaivota', '7', 3, 'Pássaro presente no filme Procurando Nemo', '5c97a3f2eb7565c97a3f2eb75a5c97a3f2eb75b', 0);
INSERT INTO `games` VALUES (92, 'roma', '4', 1, 'Cidade com uma das 7 maravilhas do mundo', '5c981c512b0f95c981c512b1015c981c512b106', 0);
INSERT INTO `games` VALUES (93, 'cacatua', '', 0, 'Geralmente possui uma crista amarela', '5c981c8db8e1b5c981c8db8e1f5c981c8db8e21', 0);
INSERT INTO `games` VALUES (94, 'pestalozzi', '', 0, 'pedagogista suíço  e educador pioneiro da reforma educacional', '5c981cd37966f5c981cd3796725c981cd379673', 0);
INSERT INTO `games` VALUES (95, 'salvador', '', 0, 'Capital da Bahia', '5c981ce992ad65c981ce992ada5c981ce992adb', 0);
INSERT INTO `games` VALUES (96, 'shakespeare', '', 0, 'Famoso poeta do Reino Unido ', '5c981d0c3a3475c981d0c3a34a5c981d0c3a34b', 0);
INSERT INTO `games` VALUES (97, 'salvador', '', 0, 'Capital da Bahia', '5c981d1d50a8b5c981d1d50a8f5c981d1d50a90', 0);
INSERT INTO `games` VALUES (98, 'coala', '', 0, 'Presente apenas na Austrália, vive a maior parte do tempo em árvores  ', '5c981d65d05075c981d65d050a5c981d65d050b', 0);
INSERT INTO `games` VALUES (99, 'cacatua', '7', 0, 'Geralmente possui uma crista amarela', '5c981d72c38fc5c981d72c39005c981d72c3901', 0);
INSERT INTO `games` VALUES (100, 'salvador', '8', 3, 'Capital da Bahia', '5c981e058169a5c981e058169e5c981e058169f', 0);

-- ----------------------------
-- Table structure for palavras
-- ----------------------------
DROP TABLE IF EXISTS `palavras`;
CREATE TABLE `palavras`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `categoria` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dica` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of palavras
-- ----------------------------
INSERT INTO `palavras` VALUES (1, 'cachorro', 'animais', 'Mamífero carnívoro da família dos canídeos');
INSERT INTO `palavras` VALUES (2, 'Gato', 'animais', 'Animal de estimação da família dos felinos');
INSERT INTO `palavras` VALUES (3, 'cacatua', 'animais', 'Geralmente possui uma crista amarela');
INSERT INTO `palavras` VALUES (4, 'capivara', 'animais', 'É o maior roedor do mundo');
INSERT INTO `palavras` VALUES (5, 'coala', 'animais', 'Presente apenas na Austrália, vive a maior parte do tempo em árvores  ');
INSERT INTO `palavras` VALUES (6, 'orangotango', 'animais', 'Mamífero presente em florestas tropicais, e um dos grandes Primatas');
INSERT INTO `palavras` VALUES (7, 'crocodilo', 'animais', 'Réptil que pode pesar até 1,5 toneladas ');
INSERT INTO `palavras` VALUES (8, 'gaivota', 'animais', 'Pássaro presente no filme Procurando Nemo');
INSERT INTO `palavras` VALUES (9, 'alice', 'nomes', 'Nome presente em um filme \"maravilha\"');
INSERT INTO `palavras` VALUES (10, 'herbert', 'nomes', 'Produtor de cinema Brasileiro');
INSERT INTO `palavras` VALUES (11, 'whindersson', 'nomes', 'Famoso comediante de Standup');
INSERT INTO `palavras` VALUES (12, 'shakespeare', 'nomes', 'Famoso poeta do Reino Unido ');
INSERT INTO `palavras` VALUES (13, 'pestalozzi', 'nomes', 'pedagogista suíço  e educador pioneiro da reforma educacional');
INSERT INTO `palavras` VALUES (15, 'salvador', 'cidades', 'Capital da Bahia');
INSERT INTO `palavras` VALUES (16, 'washington', 'cidades', 'Capital da maior potência mundial');
INSERT INTO `palavras` VALUES (18, 'roma', 'cidades', 'Cidade com uma das 7 maravilhas do mundo');

SET FOREIGN_KEY_CHECKS = 1;

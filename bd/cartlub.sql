/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50153
Source Host           : localhost:3306
Source Database       : cartlub

Target Server Type    : MYSQL
Target Server Version : 50153
File Encoding         : 65001

Date: 2017-05-29 14:05:25
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `planta`
-- ----------------------------
DROP TABLE IF EXISTS `planta`;
CREATE TABLE `planta` (
  `CODPLANTA` int(11) NOT NULL AUTO_INCREMENT,
  `NOMPLANTA` varchar(100) DEFAULT NULL,
  `CODIGOEMPRESA` varchar(20) DEFAULT NULL,
  `CONSECUTIVO` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`CODPLANTA`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of planta
-- ----------------------------
INSERT INTO PLANTA VALUES ('1', 'Complejo Petroquimico el Tablazo', '1CPT', '100');
INSERT INTO PLANTA VALUES ('2', 'Planta de Aromaticos el Palito', '1BTX', '101');
INSERT INTO PLANTA VALUES ('3', 'Complejo Petroquimico Moron', '1CPM', '102');
INSERT INTO PLANTA VALUES ('4', 'Complejo Petroquimico Jose', '1CPJ', '103');

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `IDUSUARIO` bigint(10) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(255) DEFAULT NULL,
  `USUARIO` varchar(255) DEFAULT NULL,
  `CONTRASENA` varchar(255) DEFAULT NULL,
  `PERMISO` varchar(255) DEFAULT NULL,
  `ACTIVO` varchar(255) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`IDUSUARIO`),
  KEY `INDEX1` (`USUARIO`),
  KEY `INDEX6` (`IDUSUARIO`,`USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO usuario VALUES ('1', null, 'admin', 'b02625c03bc863c5f755c6998f3200bf0e7f4405', '1', 'Y', '2013-05-09');

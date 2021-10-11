/*
Navicat MySQL Data Transfer

Source Server         : php
Source Server Version : 50542
Source Host           : localhost:3306
Source Database       : vivienda

Target Server Type    : MYSQL
Target Server Version : 50542
File Encoding         : 65001

Date: 2019-07-25 06:41:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dg_usuario`
-- ----------------------------
DROP TABLE IF EXISTS `dg_usuario`;
CREATE TABLE `dg_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `cargo` varchar(15) NOT NULL,
  `condicion` varchar(20) NOT NULL,
  `correo` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dg_usuario
-- ----------------------------
INSERT INTO `dg_usuario` VALUES ('1', 'wfaria', 'w9798140', 'Wilmer', 'Faria', 'COORDINADOR', 'ADMINISTRADOR', 'wfaria1969@gmail.com');
INSERT INTO `dg_usuario` VALUES ('2', 'gpana', 'g20290', 'Grecia', 'Pana', 'COORDINADORA', 'ADMINISTRADOR', 'gpana@vflufkin.net.');

-- ----------------------------
-- Table structure for `proy_ano`
-- ----------------------------
DROP TABLE IF EXISTS `proy_ano`;
CREATE TABLE `proy_ano` (
  `nom` varchar(4) NOT NULL DEFAULT '',
  `ano` decimal(4,0) DEFAULT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_ano
-- ----------------------------
INSERT INTO `proy_ano` VALUES ('anos', '2019');

-- ----------------------------
-- Table structure for `proy_cm`
-- ----------------------------
DROP TABLE IF EXISTS `proy_cm`;
CREATE TABLE `proy_cm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_cont` varchar(3) NOT NULL,
  `proy_pais` varchar(3) NOT NULL,
  `proy_region` varchar(60) NOT NULL,
  `cm_mes` varchar(15) NOT NULL,
  `cm_latitud` decimal(10,2) NOT NULL,
  `cm_declinacion` decimal(10,2) NOT NULL,
  `cm_hlocal_hsolar` decimal(10,2) NOT NULL,
  `cm_tmin` decimal(10,2) NOT NULL,
  `cm_tmin_alos` decimal(10,0) NOT NULL,
  `cm_tmax` decimal(10,2) NOT NULL,
  `cm_tmas_alos` decimal(10,0) NOT NULL,
  `cm_norte` decimal(10,2) NOT NULL,
  `cm_norte_alos` decimal(10,0) NOT NULL,
  `cm_sur` decimal(10,2) NOT NULL,
  `cm_sur_alos` decimal(10,0) NOT NULL,
  `cm_este` decimal(10,2) NOT NULL,
  `cdm_este_alos` decimal(10,0) NOT NULL,
  `cm_oeste` decimal(10,2) NOT NULL,
  `cm_oeste_alos` decimal(10,0) NOT NULL,
  `cm_techo` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_cm
-- ----------------------------
INSERT INTO `proy_cm` VALUES ('1', '02', '37', 'Maracaibo', 'Enero', '10.65', '20.14', '-57.60', '299.20', '450', '304.90', '810', '163.29', '750', '507.43', '810', '462.77', '630', '581.25', '990', '749.10');
INSERT INTO `proy_cm` VALUES ('2', '02', '37', 'Maracaibo', 'Febrero', '10.65', '-11.58', '-60.60', '299.62', '450', '304.69', '710', '218.70', '750', '416.93', '810', '401.53', '630', '538.38', '990', '767.10');
INSERT INTO `proy_cm` VALUES ('3', '02', '37', 'Maracaibo', 'Marzo', '10.65', '-0.40', '-54.00', '299.64', '390', '305.13', '870', '231.75', '750', '338.13', '610', '441.86', '630', '635.32', '990', '860.60');
INSERT INTO `proy_cm` VALUES ('4', '02', '37', 'Maracaibo', 'Abril', '10.65', '10.51', '-45.60', '299.91', '390', '314.64', '870', '260.49', '750', '261.28', '990', '393.50', '630', '530.69', '990', '759.40');
INSERT INTO `proy_cm` VALUES ('5', '02', '37', 'Maracaibo', 'Mayo', '10.65', '20.14', '-42.60', '300.11', '390', '305.64', '870', '287.17', '810', '224.93', '810', '340.16', '630', '402.05', '630', '672.30');
INSERT INTO `proy_cm` VALUES ('6', '02', '37', 'Maracaibo', 'Junio', '10.65', '23.45', '-48.00', '300.54', '330', '307.32', '810', '317.60', '750', '241.43', '750', '313.17', '570', '367.61', '930', '680.30');
INSERT INTO `proy_cm` VALUES ('7', '02', '37', 'Maracaibo', 'Julio', '10.65', '19.82', '-52.80', '300.84', '390', '307.81', '810', '286.60', '810', '189.83', '810', '425.23', '570', '513.36', '990', '802.80');
INSERT INTO `proy_cm` VALUES ('8', '02', '37', 'Maracaibo', 'Agosto', '10.65', '9.97', '-47.40', '301.53', '390', '308.37', '870', '221.65', '810', '226.34', '810', '461.40', '630', '524.77', '990', '809.50');
INSERT INTO `proy_cm` VALUES ('9', '02', '37', 'Maracaibo', 'Septiembre', '10.65', '266.59', '365.24', '672.40', '99', '631.20', '63', '-47.40', '0', '809.50', '0', '0.00', '0', '9.00', '0', '369.48');
INSERT INTO `proy_cm` VALUES ('10', '02', '37', 'Maracaibo', 'Octubre', '10.65', '266.59', '365.24', '672.40', '99', '631.20', '63', '-47.40', '0', '809.50', '0', '0.00', '0', '9.00', '0', '369.48');
INSERT INTO `proy_cm` VALUES ('11', '02', '37', 'Maracaibo', 'Noviembre', '10.65', '-20.64', '-33.60', '301.04', '390', '306.77', '870', '198.34', '750', '504.93', '750', '425.97', '570', '499.71', '990', '750.90');
INSERT INTO `proy_cm` VALUES ('12', '02', '37', 'Maracaibo', 'Diciembre', '10.65', '-23.44', '-45.60', '299.73', '390', '305.52', '810', '181.05', '810', '455.33', '750', '392.44', '630', '434.38', '990', '636.90');

-- ----------------------------
-- Table structure for `proy_cm_sim`
-- ----------------------------
DROP TABLE IF EXISTS `proy_cm_sim`;
CREATE TABLE `proy_cm_sim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_cm_cod` varchar(14) NOT NULL,
  `proy_cm_nubosidad` decimal(10,2) NOT NULL,
  `proy_cm_cambioaire` decimal(10,2) NOT NULL,
  `proy_cm_hum_relativa` decimal(10,2) NOT NULL,
  `proy_cm_veloc_aire` decimal(10,2) NOT NULL,
  `proy_cm_mes` varchar(15) NOT NULL,
  `proy_cm_latitud` decimal(10,2) NOT NULL,
  `proy_cm_declinacion` decimal(10,2) NOT NULL,
  `proy_cm_hlocal_hsolar` decimal(10,2) NOT NULL,
  `proy_cm_tmin` decimal(10,2) NOT NULL,
  `proy_cm_tmin_alos` decimal(10,0) NOT NULL,
  `proy_cm_tmax` decimal(10,2) NOT NULL,
  `proy_cm_tmas_alos` decimal(10,0) NOT NULL,
  `proy_cm_norte` decimal(10,2) NOT NULL,
  `proy_cm_norte_alos` decimal(10,0) NOT NULL,
  `proy_cm_sur` decimal(10,2) NOT NULL,
  `proy_cm_sur_alos` decimal(10,0) NOT NULL,
  `proy_cm_este` decimal(10,2) NOT NULL,
  `proy_cm_este_alos` decimal(10,0) NOT NULL,
  `proy_cm_oeste` decimal(10,2) NOT NULL,
  `proy_cm_oeste_alos` decimal(10,0) NOT NULL,
  `proy_cm_techo` decimal(10,2) NOT NULL,
  `capn_cb` varchar(1) DEFAULT NULL,
  `capn_cr` decimal(10,2) DEFAULT NULL,
  `caps_cb` varchar(1) DEFAULT NULL,
  `caps_cr` decimal(10,2) DEFAULT NULL,
  `cape_cb` varchar(1) DEFAULT NULL,
  `cape_cr` decimal(10,2) DEFAULT NULL,
  `capo_cb` varchar(1) DEFAULT NULL,
  `capo_cr` decimal(10,2) DEFAULT NULL,
  `catpl_cb` varchar(1) DEFAULT NULL,
  `catpl_cr` decimal(10,2) DEFAULT NULL,
  `capta_cr` decimal(10,2) DEFAULT NULL,
  `cavna_cr` decimal(10,2) DEFAULT NULL,
  `monitoreo` varchar(1) DEFAULT NULL,
  `monit_I` decimal(10,2) DEFAULT NULL,
  `monit_J` decimal(10,2) DEFAULT NULL,
  `monit_K` decimal(10,2) DEFAULT NULL,
  `velocidad_uvw` varchar(1) DEFAULT NULL,
  `presion` varchar(1) DEFAULT NULL,
  `temperatura` varchar(1) DEFAULT NULL,
  `vuvw_fr` decimal(10,2) DEFAULT NULL,
  `presion_fr` decimal(10,2) DEFAULT NULL,
  `temperatura_fr` decimal(10,2) DEFAULT NULL,
  `EMIP1V` decimal(10,2) DEFAULT NULL,
  `EMITE` decimal(10,2) DEFAULT NULL,
  `EMIP3V` decimal(10,2) DEFAULT NULL,
  `EMIP4V` decimal(10,2) DEFAULT NULL,
  `EMIP5V` decimal(10,2) DEFAULT NULL,
  `EMIV` decimal(10,2) DEFAULT NULL,
  `EMIPU` decimal(10,2) DEFAULT NULL,
  `nodo_i` decimal(10,2) DEFAULT NULL,
  `nodo_j` decimal(10,2) DEFAULT NULL,
  `nodo_k` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`,`proy_cm_cod`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_cm_sim
-- ----------------------------
INSERT INTO `proy_cm_sim` VALUES ('125', 'PROY-19-07-001', '1.00', '0.00', '65.00', '1.50', 'Agosto', '10.65', '9.97', '-47.40', '301.53', '390', '308.37', '870', '221.65', '810', '226.34', '810', '461.40', '630', '524.77', '990', '809.50', '2', '0.80', '2', '0.80', '2', '0.80', '2', '0.80', '2', '0.80', '0.80', '0.80', '1', '0.00', '0.00', '0.00', '1', '1', '1', '0.50', '0.20', '0.50', '0.90', '0.90', '0.90', '0.90', '0.90', '0.90', '0.90', '9.00', '13.00', '6.00');
INSERT INTO `proy_cm_sim` VALUES ('126', 'PROY-19-07-002', '1.00', '0.00', '65.00', '1.50', 'Agosto', '10.65', '9.97', '-47.40', '301.53', '390', '308.37', '870', '221.65', '810', '226.34', '810', '461.40', '630', '524.77', '990', '809.50', '2', '0.80', '2', '0.80', '2', '0.80', '2', '0.80', '2', '0.80', '0.80', '0.80', '1', '0.00', '0.00', '0.00', '1', '1', '1', '0.50', '0.20', '0.50', '0.90', '0.90', '0.90', '0.90', '0.90', '0.90', '0.90', '9.00', '13.00', '6.00');

-- ----------------------------
-- Table structure for `proy_componentes`
-- ----------------------------
DROP TABLE IF EXISTS `proy_componentes`;
CREATE TABLE `proy_componentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_modelo` varchar(10) DEFAULT NULL,
  `proy_cont` varchar(3) DEFAULT NULL,
  `proy_pais` varchar(3) DEFAULT NULL,
  `proy_region` varchar(60) DEFAULT NULL,
  `proy_ncapas` decimal(3,0) DEFAULT NULL,
  `proy_descripcion` varchar(2000) DEFAULT NULL,
  `proy_tipo_bloque` varchar(500) DEFAULT NULL,
  `proy_dimensiones` char(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_componentes
-- ----------------------------
INSERT INTO `proy_componentes` VALUES ('76', 'COMP-000', '00', '00', 'Maracaibo', '0', 'Ninguno', '0', '0');
INSERT INTO `proy_componentes` VALUES ('77', 'COMP-001', '02', '37', 'Maracaibo', '3', 'BLOQUE ALIGERADO DE 8 CM  DE ESPESOR CON 3 CAVIDADES  Y FRISO  EN AMBAS CARAS', 'ALIGERADO 3H', '8*20*40');
INSERT INTO `proy_componentes` VALUES ('78', 'COMP-002', '02', '37', 'Maracaibo', '3', 'BLOQUE ALIGERADO DE 10 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', 'ALIGERADO 3H', '10*20*40');
INSERT INTO `proy_componentes` VALUES ('79', 'COMP-003', '02', '37', 'Maracaibo', '3', 'BLOQUE ALIGERADO JUMBO DE 10 CM  DE ESPESOR CON 3 CAVIDADES FRISO  EN AMBAS CARAS', 'ALIGERADO 3H', '10*20*50');
INSERT INTO `proy_componentes` VALUES ('80', 'COMP-004', '02', '37', 'Maracaibo', '3', 'BLOQUE ALIGERADO DE 12 CM DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', 'ALIGERADO 3H', '12*20*40');
INSERT INTO `proy_componentes` VALUES ('81', 'COMP-005', '02', '37', 'Maracaibo', '3', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', 'ALIGERADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('82', 'COMP-006', '02', '37', 'Maracaibo', '3', 'BLOQUE ALIGERADO DE 20 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', 'ALIGERADO 3H', '20*20*40');
INSERT INTO `proy_componentes` VALUES ('83', 'COMP-007', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA DE 10 CM  DE ESPESOR CON 9 CAVIDADES Y FRISO  EN AMBAS CARAS', 'ARCILLA 9H', '10*20*30');
INSERT INTO `proy_componentes` VALUES ('84', 'COMP-008', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA DE 12 CM  DE ESPESOR CON 14 CAVIDADES Y FRISO  EN AMBAS CARAS', 'ARCILLA 14H', '12*20*30');
INSERT INTO `proy_componentes` VALUES ('85', 'COMP-009', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA DE 15 CM  DE ESPESOR CON 9 CAVIDADES Y FRISO  EN AMBAS CARAS', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_componentes` VALUES ('86', 'COMP-010', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA DE 15 CM  DE ESPESOR CON 9 CAVIDADES Y FRISO  EN AMBAS CARAS', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_componentes` VALUES ('87', 'COMP-011', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA DE 20 CM  DE ESPESOR CON 12 CAVIDADES Y FRISO  EN AMBAS CARAS', 'ARCILLA 12H', '20*20*30');
INSERT INTO `proy_componentes` VALUES ('88', 'COMP-012', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA DE 20 CM  DE ESPESOR CON 9 CAVIDADES Y FRISO  EN AMBAS CARAS', 'ARCILLA 9H', '20*20*30');
INSERT INTO `proy_componentes` VALUES ('89', 'COMP-013', '02', '37', 'Maracaibo', '3', 'BLOQUE DE CONCRETO PESADO DE 10 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO  EN AMBAS CARAS', 'CONCRETO PESADO 3H', '10*20*40');
INSERT INTO `proy_componentes` VALUES ('90', 'COMP-014', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO OBRA LIMPIA DE 10 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO INTERIOR', 'CONCRETO PESADO OBRA LIMPIA 3H', '10*20*40');
INSERT INTO `proy_componentes` VALUES ('91', 'COMP-015', '02', '37', 'Maracaibo', '3', 'BLOQUE DE CONCRETO PESADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO  EN AMBAS CARAS', 'CONCRETO PESADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('92', 'COMP-016', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO PESADO OBRA LIMPIA DE 15 CM DE ESPESOR CON 3 CAVIDADES Y FRISO INTERIOR', 'CONCRETO PESADO OBRA LIMPIA 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('93', 'COMP-017', '02', '37', 'Maracaibo', '3', 'BLOQUE DE CONCRETO ALIGERADO MULTICELDA DE 15 CM  DE ESPESOR CON 8 CAVIDADES Y FRISO  EN AMBAS CARAS', 'ALIGERADO MULTICELDA 8H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('94', 'COMP-018', '02', '37', 'Maracaibo', '3', 'BLOQUE DE POLIESTIRENO 15 CM  DE ESPESOR CON RELLENO DE CONCRETO PESADO 7 CM Y FRISO  EN AMBAS CARAS (INTERNO CON YESO).', 'POLIESTIRENO', '15*30*120');
INSERT INTO `proy_componentes` VALUES ('95', 'COMP-019', '02', '37', 'Maracaibo', '1', 'CONCRETO ARMADO PESADO DE 10 CM  DE ESPESOR', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_componentes` VALUES ('96', 'COMP-020', '02', '37', 'Maracaibo', '1', 'CONCRETO ARMADO PESADO DE 15 CM  DE ESPESOR', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_componentes` VALUES ('97', 'COMP-021', '02', '37', 'Maracaibo', '1', 'CONCRETO ARMADO PESADO DE 20 CM  DE ESPESOR', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_componentes` VALUES ('98', 'COMP-022', '02', '37', 'Maracaibo', '3', 'LADRILLO DE 3 CAVIDADES DE 10 CM  DE ESPESOR CON FRISO EN AMBAS CARAS', 'LADRILLO 3H', '10*6*20');
INSERT INTO `proy_componentes` VALUES ('99', 'COMP-023', '02', '37', 'Maracaibo', '3', 'LADRILLO MACIZO CON PEGO Y FRISO  EN AMBAS CARAS', 'LADRILLO MACIZO', '10*6*20');
INSERT INTO `proy_componentes` VALUES ('100', 'COMP-024', '02', '37', 'Maracaibo', '1', 'LADRILLO MACIZO CON PEGO DE 10 CM  DE ESPESOR SIN FRISAR', 'LADRILLO MACIZO', '10*6*20');
INSERT INTO `proy_componentes` VALUES ('101', 'COMP-025', '02', '37', 'Maracaibo', '6', 'DOBLE BLOQUE DE ARCILLA CON CAMARA DE AIRE DE 5 CM Y FRISO  EN AMBAS CARAS.CON ABSORTIVIDAD MENOR 0.5', 'ARCILLA', '(15+10)*20*30');
INSERT INTO `proy_componentes` VALUES ('102', 'COMP-026', '02', '37', 'Maracaibo', '4', 'DOBLE BLOQUE DE ARCILLA DE ( 15 + 20 CM )  DE ESPESOR SIN CAMARA DE AIRE Y FRISO  EN AMBAS CARAS', 'ARCILLA', '(20+15)*20*30');
INSERT INTO `proy_componentes` VALUES ('103', 'COMP-027', '02', '37', 'Maracaibo', '4', 'DOBLE BLOQUE DE CONCRETO PESADO CON CAMARA DE AIRE DE 5 CM Y  FRISO INTERIOR DE YESO.CON ABSORTIVIDAD MENOR 0.5', 'CONCRETO PESADO', '(15+10)*20*40');
INSERT INTO `proy_componentes` VALUES ('104', 'COMP-028', '02', '37', 'Maracaibo', '4', 'DOBLE BLOQUE DE CONCRETO PESADO SIN CAMARA DE AIRE Y FRISO EN AMBAS CARAS', 'CONCRETO PESADO', '(15+10)*20*40');
INSERT INTO `proy_componentes` VALUES ('105', 'COMP-029', '02', '37', 'Maracaibo', '6', 'BLOQUE DE CONCRETO PESADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES , POLIESTIRENO, CAMARA DE AIRE , LAMINA LIVIANA DE FIBROCEMENTO  Y  FRISO  EN AMBAS CARAS. CON ABSORTIVIDAD MENOR  0.5', 'CONCRETO PESADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('106', 'COMP-030', '02', '37', 'Maracaibo', '6', 'BLOQUE DE CONCRETO PESADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES , POLIESTIRENO, CAMARA DE AIRE , LAMINA LIVIANA DE MADERA Y  FRISO EXTERIOR. CON ABSORTIVIDAD MENOR 0.5', 'CONCRETO PESADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('107', 'COMP-031', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA DE 12 CM  DE ESPESOR Y  FRISO INTERIOR', 'ARCILLA', '12*20*30');
INSERT INTO `proy_componentes` VALUES ('108', 'COMP-032', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA DE 12 CM  DE ESPESOR Y  FRISO INTERIOR DE YESO', 'ARCILLA', '12*20*30');
INSERT INTO `proy_componentes` VALUES ('109', 'COMP-033', '02', '37', 'Maracaibo', '5', 'MDOS PSM50 2.5 CM DE CONCRETO PESADO + 5 CM DE POLIESTIRENO + 2.5 CM CONCRETO PESADO Y FRISO INTERNO DE YESO.', 'POLIESTIRENO', '5*110*256');
INSERT INTO `proy_componentes` VALUES ('110', 'COMP-034', '02', '37', 'Maracaibo', '5', '(MDOS PSM60) ENCAMISADO INTERNO CON YESO 3 CM DE CONCRETO PESADO + 6 CM DE POLIESTIRENO + 3 CM CONCRETO PESADO.', 'POLIESTIRENO', '6*110*256');
INSERT INTO `proy_componentes` VALUES ('111', 'COMP-035', '02', '37', 'Maracaibo', '5', '(MDOS PSM80) 3 CM DE CONCRETO PESADO + 8 CM DE POLIESTIRENO + 3 CM CONCRETO PESADO Y FRISO INTERNO DE YESO.', 'POLIESTIRENO', '8*110*256');
INSERT INTO `proy_componentes` VALUES ('112', 'COMP-036', '02', '37', 'Maracaibo', '5', '(MDOS PSM809 4 CM DE CONCRETO PESADO + 8 CM DE POLIESTIRENO + 4 CM CONCRETO PESADO Y FRISO INTERNO DE YESO.', 'POLIESTIRENO', '8*110*256');
INSERT INTO `proy_componentes` VALUES ('113', 'COMP-037', '02', '37', 'Maracaibo', '3', 'BLOQUE ALIGERADO DE 8 CM  DE ESPESOR CON 3 CAVIDADES  Y FRISO EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'ALIGERADO 3H', '8*20*30');
INSERT INTO `proy_componentes` VALUES ('114', 'COMP-038', '02', '37', 'Maracaibo', '3', 'BLOQUE ALIGERADO DE 10 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'ALIGERADO 3H', '10*20*40');
INSERT INTO `proy_componentes` VALUES ('115', 'COMP-039', '02', '37', 'Maracaibo', '3', 'BLOQUE ALIGERADO DE 12 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'ALIGERADO 3H', '12*20*40');
INSERT INTO `proy_componentes` VALUES ('116', 'COMP-040', '02', '37', 'Maracaibo', '3', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'ALIGERADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('117', 'COMP-041', '02', '37', 'Maracaibo', '3', 'BLOQUE ALIGERADO DE 20 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'ALIGERADO 3H', '20*20*40');
INSERT INTO `proy_componentes` VALUES ('118', 'COMP-042', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA DE 10 CM  DE ESPESOR CON 9 CAVIDADES Y FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'ARCILLA 9H', '10*20*30');
INSERT INTO `proy_componentes` VALUES ('119', 'COMP-043', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA DE 12 CM  DE ESPESOR CON 14 CAVIDADES Y  FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'ARCILLA 14H', '12*20*30');
INSERT INTO `proy_componentes` VALUES ('120', 'COMP-044', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA DE 15 CM  DE ESPESOR CON 9 CAVIDADES Y  FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_componentes` VALUES ('121', 'COMP-045', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA DE 20 CM  DE ESPESOR CON 12 CAVIDADES Y  FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'ARCILLA 12H', '20*20*30');
INSERT INTO `proy_componentes` VALUES ('122', 'COMP-046', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA DE 20 CM  DE ESPESOR CON 9 CAVIDADES Y  FRISO EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'ARCILLA 9H', '20*20*30');
INSERT INTO `proy_componentes` VALUES ('123', 'COMP-047', '02', '37', 'Maracaibo', '3', 'BLOQUE DE CONCRETO PESADO DE 10 CM  DE ESPESOR CON 3 CAVIDADES Y  FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'CONCRETO PESADO 3H', '10*20*40');
INSERT INTO `proy_componentes` VALUES ('124', 'COMP-048', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO PESADO OBRA LIMPIA DE 10 CM DE ESPESOR CON 3 CAVIDADES Y  FRISO INTERIOR DE YESO', 'CONCRETO PESADO OBRA LIMPIA 3H', '10*20*40');
INSERT INTO `proy_componentes` VALUES ('125', 'COMP-049', '02', '37', 'Maracaibo', '3', 'BLOQUE DE CONCRETO PESADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES  Y  FRISO EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO', 'CONCRETO PESADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('126', 'COMP-050', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO PESADO OBRA LIMPIA DE 15 CM DE ESPESOR CON 3 CAVIDADES Y  FRISO INTERIOR DE YESO', 'CONCRETO PESADO OBRA LIMPIA 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('127', 'COMP-051', '02', '37', 'Maracaibo', '3', 'BLOQUE DE CONCRETOALIGERADO MULTICELDA DE 15 CM  DE ESPESOR CON 8 CAVIDADES Y  FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON YESO.', 'ALIGERADO MULTICELDA 8H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('128', 'COMP-052', '02', '37', 'Maracaibo', '3', 'BLOQUE ISOTEX DE 20 CM  DE ESPESOR CON RELLENO DE CONCRETO PESDADO 10 CM  Y  FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON YESO.', 'POLIESTIRENO', '15*30*120');
INSERT INTO `proy_componentes` VALUES ('129', 'COMP-053', '02', '37', 'Maracaibo', '3', 'LADRILLO DE 3 CAVIDADES DE 10 CM  DE ESPESOR CON  FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON YESO.', 'LADRILLO 3H', '10*6*20');
INSERT INTO `proy_componentes` VALUES ('130', 'COMP-054', '02', '37', 'Maracaibo', '3', 'LADRILLO DE ARCILLA MACIZO  DE ESPESOR CON PEGO Y  FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON YESO.', 'LADRILLO MACIZO', '10*6*20');
INSERT INTO `proy_componentes` VALUES ('131', 'COMP-055', '02', '37', 'Maracaibo', '5', 'DOBLE BLOQUE DE ARCILLA CON CAMARA DE AIRE Y  FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON YESO. CON ABSORTIVIDAD MENOR 0.5', 'ARCILLA', '(15+10)*20*30');
INSERT INTO `proy_componentes` VALUES ('132', 'COMP-056', '02', '37', 'Maracaibo', '4', 'DOBLE BLOQUE DE ARCILLA DE ( 15 + 20 CM ) DE ESPESOR  SIN CAMARA DE AIRE Y  FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON YESO.', 'ARCILLA', '(20+15)*20*30');
INSERT INTO `proy_componentes` VALUES ('133', 'COMP-057', '02', '37', 'Maracaibo', '4', 'DOBLE BLOQUE DE CONCRETO PESADO DE ( 15 + 10 CM ) DE ESPESOR  CON CAMARA DE AIRE Y  FRISO INTERIOR DE YESO. CON ABSORTIVIDAD MENOR 0.5', 'CONCRETO PESADO', '(15+10)*20*40');
INSERT INTO `proy_componentes` VALUES ('134', 'COMP-058', '02', '37', 'Maracaibo', '5', 'DOBLE BLOQUE DE CONCRETO PESADO DE ( 15 + 10 CM ) DE ESPESOR  CON CAMARA DE AIRE Y  FRISO  EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON YESO.CON ABSORTIVIDAD MENOR 0.5', 'CONCRETO PESADO', '(15+10)*20*40');
INSERT INTO `proy_componentes` VALUES ('135', 'COMP-059', '02', '37', 'Maracaibo', '6', 'BLOQUE DE CONCRETO PESADO DE 3 CAVIDADES CON CAMARA DE AIRE Y LAMINA LIVIANA; Y FRISOS EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON FRISO DE YESO. CON ABSORTIVIDAD MENOR  0.5', 'CONCRETO PESADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('136', 'COMP-060', '02', '37', 'Maracaibo', '6', 'BLOQUE DE CONCRETO PESADO DE 3 CAVIDADES CON CAMARA DE AIRE Y LAMINA LIVIANA; Y FRISOS EN AMBAS CARAS, EXTERIOR A BASE DE CAL E INTERIOR CON MORTERO DE YESO. CON ABSORTIVIDAD MENOR  0.5', 'CONCRETO PESADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('137', 'COMP-061', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO DE 10 CM  DE ESPESOR CON 3 CAVIDADES ACABADO OBRA LIMPIA POR AMBAS CARAS', 'CONCRETO PESADO 3H', '10*20*40');
INSERT INTO `proy_componentes` VALUES ('138', 'COMP-062', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES ACABADO OBRA LIMPIA POR AMBAS CARAS', 'CONCRETO PESADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('139', 'COMP-063', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO ALIGERADO MULTICELDA DE 15 CM  DE ESPESOR CON 8 CAVIDADES ACABADO OBRA LIMPIA POR AMBAS CARAS.', 'ALIGERADO MULTICELDA 8H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('140', 'COMP-064', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO MULTICELDA DE 15 CM  DE ESPESOR CON 8 CAVIDADES ACABADO OBRA LIMPIA Y FRISO INTERIOR.', 'ALIGERADO MULTICELDA 8H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('141', 'COMP-065', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO MULTICELDA DE 15 CM  DE ESPESOR CON 8 CAVIDADES ACABADO OBRA LIMPIA Y FRISO INTERIOR DE YESO.', 'ALIGERADO MULTICELDA 8H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('142', 'COMP-066', '02', '37', 'Maracaibo', '3', 'BLOQUE DE POLIESTIRENO DE 20 CM DE ESPESOR CON RELLENO INTERNO DE CONCRETO PESADO 10 CM Y FRISO  EN AMBAS CARAS', 'POLIESTIRENO', '20*30*120');
INSERT INTO `proy_componentes` VALUES ('143', 'COMP-067', '02', '37', 'Maracaibo', '3', 'BLOQUE DE POLIESTIRENO DE 20 CM DE ESPESOR CON RELLENO DE CONCRETO PESADO 10 CM  Y FRISO  EN AMBAS CARAS', 'POLIESTIRENO', '20*30*120');
INSERT INTO `proy_componentes` VALUES ('144', 'COMP-068', '02', '37', 'Maracaibo', '6', 'DOBLE BLOQUE DE ARCILLA CON CAMARA DE AIRE DE 5CM Y FRISO EN AMBAS CARAS. CON ABSORTIVIDAD MAYOR 0 IGUAL 0.5', 'ARCILLA', '(15+10)*20*30');
INSERT INTO `proy_componentes` VALUES ('145', 'COMP-069', '02', '37', 'Maracaibo', '4', 'DOBLE BLOQUE CONCRETO PESADO CON CAMARA DE AIRE Y FRISO INTERIOR. CON ABSORTIVIDAD MAYOR O IGUAL 0.5', 'CONCRETO PESADO', '(15+20)*20*40');
INSERT INTO `proy_componentes` VALUES ('146', 'COMP-070', '02', '37', 'Maracaibo', '6', 'BLOQUE DE CONCRETO PESADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES , POLIESTIRENO, CAMARA DE AIRE , LAMINA LIVIANA DE FIBROCEMENTO  Y  FRISO  EN AMBAS CARAS. CON ABSORTIVIDAD MAYOR O IGUAL 0.5', 'CONCRETO PESADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('147', 'COMP-071', '02', '37', 'Maracaibo', '6', 'BLOQUE DE CONCRETO PESADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES , POLIESTILENO, CAMARA DE AIRE , LAMINA LIVIANA DE MADERA Y  FRISO  EN AMBAS CARAS. CON ABSORTIVIDAD MAYOR O IGUAL 0.5', 'CONCRETO PESADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('148', 'COMP-072', '02', '37', 'Maracaibo', '5', 'DOBLE BLOQUE DE ARCILLA CON CAMARA DE AIRE Y FRISO EN AMBAS CARAS. EXTERIOR BASE DE CAL E INTERIOR DE YESO. CON ABSORTIVIDAD MAYOR 0 IGUAL 0.5', 'ARCILLA', '(15+10)*20*30');
INSERT INTO `proy_componentes` VALUES ('149', 'COMP-073', '02', '37', 'Maracaibo', '4', 'DOBLE BLOQUE CONCRETO PESADO (15+10) DE ESPESOR CON CAMARA DE AIRE Y FRISO INTERNO DE YESO. CON ABSORTIVIDAD MAYOR 0 IGUAL 0.5', 'CONCRETO PESADO', '(15+10)*20*40');
INSERT INTO `proy_componentes` VALUES ('150', 'COMP-074', '02', '37', 'Maracaibo', '5', 'DOBLE BLOQUE CONCRETO PESADO CON CAMARA DE AIRE Y FRISO EN AMBAS CARAS. EXTERIOR A BASE DE CAL E INTERIOR DE YESO. CON ABSORTIVIDAD MAYOR O IGUAL 0.5', 'CONCRETO PESADO', '(15+10)*20*40');
INSERT INTO `proy_componentes` VALUES ('151', 'COMP-075', '02', '37', 'Maracaibo', '6', 'BLOQUE DE CONCRETO PESADO 3 CAV CON CAMARA DE AIRE Y LAMINA LIVIANA DE FIBROCEMENTO, FRISO EN AMBAS CARAS. EXTERIOR A BASE DE CAL E INTERIOR DE YESO. CON ABSORTIVIDAD MAYOR O IGUAL 0.5', 'CONCRETO PESADO 3H', '15*20*40');
INSERT INTO `proy_componentes` VALUES ('152', 'COMP-076', '02', '37', 'Maracaibo', '6', 'BLOQUE DE CONCRETO PESADO 3 CAV CON CAMARA DE AIRE Y LAMINA LIVIANA DE MADERA. FRISO EN AMBAS CARAS. EXTERIOR A BASE DE CAL E INTERIOR DE YESO. CON ABSORTIVIDAD MAYOR O IGUAL 0.5', 'CONCRETO PESADO 3H', '15*20*40');

-- ----------------------------
-- Table structure for `proy_cont`
-- ----------------------------
DROP TABLE IF EXISTS `proy_cont`;
CREATE TABLE `proy_cont` (
  `accion` varchar(8) NOT NULL DEFAULT '',
  `conteo` decimal(3,0) DEFAULT NULL,
  PRIMARY KEY (`accion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_cont
-- ----------------------------
INSERT INTO `proy_cont` VALUES ('CONAC', '2');

-- ----------------------------
-- Table structure for `proy_matcomp`
-- ----------------------------
DROP TABLE IF EXISTS `proy_matcomp`;
CREATE TABLE `proy_matcomp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_cod_ens` varchar(10) DEFAULT NULL,
  `proy_cod_comp` varchar(10) DEFAULT NULL,
  `proy_cont` varchar(3) DEFAULT NULL,
  `proy_pais` varchar(3) DEFAULT NULL,
  `proy_region` varchar(40) DEFAULT NULL,
  `proy_posicion` varchar(3) DEFAULT NULL,
  `proy_desc_capa` varchar(2000) DEFAULT NULL,
  `proy_espesor` decimal(10,2) DEFAULT NULL,
  `proy_densidad` decimal(10,2) DEFAULT NULL,
  `proy_conductividad` decimal(10,2) DEFAULT NULL,
  `proy_calorespecifico` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_matcomp
-- ----------------------------
INSERT INTO `proy_matcomp` VALUES ('1', 'ENSAM-001', 'COMP-001', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('2', 'ENSAM-001', 'COMP-001', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO 3H', '0.08', '676.40', '0.48', '0.84');
INSERT INTO `proy_matcomp` VALUES ('3', 'ENSAM-001', 'COMP-001', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('4', 'ENSAM-002', 'COMP-002', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('5', 'ENSAM-002', 'COMP-002', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO 3H', '0.10', '676.40', '0.54', '0.76');
INSERT INTO `proy_matcomp` VALUES ('6', 'ENSAM-002', 'COMP-002', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('7', 'ENSAM-003', 'COMP-003', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('8', 'ENSAM-003', 'COMP-003', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO JUMBO 3H', '0.10', '782.48', '0.26', '0.62');
INSERT INTO `proy_matcomp` VALUES ('9', 'ENSAM-003', 'COMP-003', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('10', 'ENSAM-004', 'COMP-004', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('11', 'ENSAM-004', 'COMP-004', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO 3H', '0.12', '631.30', '0.60', '0.75');
INSERT INTO `proy_matcomp` VALUES ('12', 'ENSAM-004', 'COMP-004', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('13', 'ENSAM-005', 'COMP-005', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('14', 'ENSAM-005', 'COMP-005', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO 3H', '0.15', '604.25', '0.70', '0.72');
INSERT INTO `proy_matcomp` VALUES ('15', 'ENSAM-005', 'COMP-005', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('16', 'ENSAM-006', 'COMP-006', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('17', 'ENSAM-006', 'COMP-006', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO  ALIGERADO 3H', '0.20', '568.17', '0.88', '0.70');
INSERT INTO `proy_matcomp` VALUES ('18', 'ENSAM-006', 'COMP-006', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('19', 'ENSAM-007', 'COMP-007', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('20', 'ENSAM-007', 'COMP-007', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 9H', '0.10', '745.50', '0.59', '0.85');
INSERT INTO `proy_matcomp` VALUES ('21', 'ENSAM-007', 'COMP-007', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('22', 'ENSAM-008', 'COMP-008', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('23', 'ENSAM-008', 'COMP-008', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 14H', '0.12', '717.09', '0.58', '0.83');
INSERT INTO `proy_matcomp` VALUES ('24', 'ENSAM-008', 'COMP-008', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('25', 'ENSAM-009', 'COMP-009', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('26', 'ENSAM-009', 'COMP-009', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 9H', '0.15', '622.39', '0.56', '0.73');
INSERT INTO `proy_matcomp` VALUES ('27', 'ENSAM-009', 'COMP-009', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('28', 'ENSAM-010', 'COMP-010', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('29', 'ENSAM-010', 'COMP-010', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 9H', '0.15', '622.39', '0.56', '0.73');
INSERT INTO `proy_matcomp` VALUES ('30', 'ENSAM-010', 'COMP-010', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('31', 'ENSAM-011', 'COMP-011', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('32', 'ENSAM-011', 'COMP-011', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 12H', '0.20', '504.02', '0.68', '0.88');
INSERT INTO `proy_matcomp` VALUES ('33', 'ENSAM-011', 'COMP-011', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('34', 'ENSAM-012', 'COMP-012', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('35', 'ENSAM-012', 'COMP-012', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 9H', '0.20', '447.20', '0.63', '0.93');
INSERT INTO `proy_matcomp` VALUES ('36', 'ENSAM-012', 'COMP-012', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('37', 'ENSAM-013', 'COMP-013', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('38', 'ENSAM-013', 'COMP-013', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('39', 'ENSAM-013', 'COMP-013', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('40', 'ENSAM-014', 'COMP-014', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('41', 'ENSAM-014', 'COMP-014', '02', '37', 'Maracaibo', '2', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('42', 'ENSAM-015', 'COMP-015', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('43', 'ENSAM-015', 'COMP-015', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('44', 'ENSAM-015', 'COMP-015', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('45', 'ENSAM-016', 'COMP-016', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('46', 'ENSAM-016', 'COMP-016', '02', '37', 'Maracaibo', '2', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('47', 'ENSAM-017', 'COMP-017', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('48', 'ENSAM-017', 'COMP-017', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO MULTICELDA 8H', '0.15', '604.25', '0.50', '0.88');
INSERT INTO `proy_matcomp` VALUES ('49', 'ENSAM-017', 'COMP-017', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('50', 'ENSAM-018', 'COMP-018', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('51', 'ENSAM-018', 'COMP-018', '02', '37', 'Maracaibo', '2', 'BLOQUE DE POLIESTIRENO', '0.15', '902.37', '0.04', '0.91');
INSERT INTO `proy_matcomp` VALUES ('52', 'ENSAM-018', 'COMP-018', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('53', 'ENSAM-019', 'COMP-019', '02', '37', 'Maracaibo', '1', 'CONCRETO ARMADO PESADO', '0.10', '2300.00', '1.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('54', 'ENSAM-020', 'COMP-020', '02', '37', 'Maracaibo', '1', 'CONCRETO ARMADO PESADO', '0.15', '2300.00', '1.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('55', 'ENSAM-021', 'COMP-021', '02', '37', 'Maracaibo', '1', 'CONCRETO ARMADO PESADO', '0.20', '2300.00', '1.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('56', 'ENSAM-022', 'COMP-022', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('57', 'ENSAM-022', 'COMP-022', '02', '37', 'Maracaibo', '2', 'LADRILLO DE ARCILLA 3H', '0.10', '1741.18', '0.86', '0.51');
INSERT INTO `proy_matcomp` VALUES ('58', 'ENSAM-022', 'COMP-022', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('59', 'ENSAM-023', 'COMP-023', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('60', 'ENSAM-023', 'COMP-023', '02', '37', 'Maracaibo', '2', 'LADRILLO DE ARCILLA MACIZO', '0.10', '3048.00', '1.09', '0.89');
INSERT INTO `proy_matcomp` VALUES ('61', 'ENSAM-023', 'COMP-023', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('62', 'ENSAM-024', 'COMP-024', '02', '37', 'Maracaibo', '1', 'LADRILLO DE ARCILLA MACIZO', '0.10', '3048.00', '1.09', '0.89');
INSERT INTO `proy_matcomp` VALUES ('63', 'ENSAM-025', 'COMP-025', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('64', 'ENSAM-025', 'COMP-025', '02', '37', 'Maracaibo', '2', 'LAMINA DE FIBROCEMENTO', '0.01', '1099.00', '0.20', '1.01');
INSERT INTO `proy_matcomp` VALUES ('65', 'ENSAM-025', 'COMP-025', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.07', '1.06');
INSERT INTO `proy_matcomp` VALUES ('66', 'ENSAM-025', 'COMP-025', '02', '37', 'Maracaibo', '4', 'BLOQUE DE ARCILLA 9H', '0.15', '622.39', '0.56', '0.73');
INSERT INTO `proy_matcomp` VALUES ('67', 'ENSAM-025', 'COMP-025', '02', '37', 'Maracaibo', '5', 'BLOQUE DE ARCILLA 9H', '0.10', '745.50', '0.59', '0.85');
INSERT INTO `proy_matcomp` VALUES ('68', 'ENSAM-025', 'COMP-025', '02', '37', 'Maracaibo', '6', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('69', 'ENSAM-026', 'COMP-026', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('70', 'ENSAM-026', 'COMP-026', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 9H', '0.20', '447.20', '0.63', '0.93');
INSERT INTO `proy_matcomp` VALUES ('71', 'ENSAM-026', 'COMP-026', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA 9H', '0.15', '622.39', '0.56', '0.73');
INSERT INTO `proy_matcomp` VALUES ('72', 'ENSAM-026', 'COMP-026', '02', '37', 'Maracaibo', '4', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('73', 'ENSAM-027', 'COMP-027', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('74', 'ENSAM-027', 'COMP-027', '02', '37', 'Maracaibo', '2', 'CAMARA DE AIRE', '0.05', '1.22', '0.07', '1.06');
INSERT INTO `proy_matcomp` VALUES ('75', 'ENSAM-027', 'COMP-027', '02', '37', 'Maracaibo', '3', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('76', 'ENSAM-027', 'COMP-027', '02', '37', 'Maracaibo', '4', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('77', 'ENSAM-028', 'COMP-028', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('78', 'ENSAM-028', 'COMP-028', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('79', 'ENSAM-028', 'COMP-028', '02', '37', 'Maracaibo', '3', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('80', 'ENSAM-028', 'COMP-028', '02', '37', 'Maracaibo', '4', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('81', 'ENSAM-029', 'COMP-029', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('82', 'ENSAM-029', 'COMP-029', '02', '37', 'Maracaibo', '2', 'LAMINA LIVIANA FIBROCEMENTO', '0.01', '1099.00', '0.20', '1.01');
INSERT INTO `proy_matcomp` VALUES ('83', 'ENSAM-029', 'COMP-029', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.07', '1.06');
INSERT INTO `proy_matcomp` VALUES ('84', 'ENSAM-029', 'COMP-029', '02', '37', 'Maracaibo', '4', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('85', 'ENSAM-029', 'COMP-029', '02', '37', 'Maracaibo', '5', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('86', 'ENSAM-029', 'COMP-029', '02', '37', 'Maracaibo', '6', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('87', 'ENSAM-030', 'COMP-030', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('88', 'ENSAM-030', 'COMP-030', '02', '37', 'Maracaibo', '2', 'LAMINA LIVIANA DE MADERA', '0.01', '593.00', '0.12', '2.51');
INSERT INTO `proy_matcomp` VALUES ('89', 'ENSAM-030', 'COMP-030', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.07', '1.06');
INSERT INTO `proy_matcomp` VALUES ('90', 'ENSAM-030', 'COMP-030', '02', '37', 'Maracaibo', '4', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('91', 'ENSAM-030', 'COMP-030', '02', '37', 'Maracaibo', '5', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('92', 'ENSAM-030', 'COMP-030', '02', '37', 'Maracaibo', '6', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('93', 'ENSAM-031', 'COMP-031', '02', '37', 'Maracaibo', '1', 'BLOQUE DE ARCILLA 14H', '0.12', '717.09', '0.58', '0.83');
INSERT INTO `proy_matcomp` VALUES ('94', 'ENSAM-031', 'COMP-031', '02', '37', 'Maracaibo', '2', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('95', 'ENSAM-032', 'COMP-032', '02', '37', 'Maracaibo', '1', 'BLOQUE DE ARCILLA 14H', '0.12', '717.09', '0.58', '0.83');
INSERT INTO `proy_matcomp` VALUES ('96', 'ENSAM-032', 'COMP-032', '02', '37', 'Maracaibo', '2', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('97', 'ENSAM-033', 'COMP-033', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('98', 'ENSAM-033', 'COMP-033', '02', '37', 'Maracaibo', '2', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_matcomp` VALUES ('99', 'ENSAM-033', 'COMP-033', '02', '37', 'Maracaibo', '3', 'POLIESTIRENO', '0.05', '15.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('100', 'ENSAM-033', 'COMP-033', '02', '37', 'Maracaibo', '4', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_matcomp` VALUES ('101', 'ENSAM-033', 'COMP-033', '02', '37', 'Maracaibo', '5', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('102', 'ENSAM-034', 'COMP-034', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('103', 'ENSAM-034', 'COMP-034', '02', '37', 'Maracaibo', '2', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_matcomp` VALUES ('104', 'ENSAM-034', 'COMP-034', '02', '37', 'Maracaibo', '3', 'POLIESTIRENO', '0.06', '15.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('105', 'ENSAM-034', 'COMP-034', '02', '37', 'Maracaibo', '4', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_matcomp` VALUES ('106', 'ENSAM-034', 'COMP-034', '02', '37', 'Maracaibo', '5', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('107', 'ENSAM-035', 'COMP-035', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('108', 'ENSAM-035', 'COMP-035', '02', '37', 'Maracaibo', '2', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_matcomp` VALUES ('109', 'ENSAM-035', 'COMP-035', '02', '37', 'Maracaibo', '3', 'POLIESTIRENO', '0.08', '15.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('110', 'ENSAM-035', 'COMP-035', '02', '37', 'Maracaibo', '4', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_matcomp` VALUES ('111', 'ENSAM-035', 'COMP-035', '02', '37', 'Maracaibo', '5', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('112', 'ENSAM-036', 'COMP-036', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('113', 'ENSAM-036', 'COMP-036', '02', '37', 'Maracaibo', '2', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_matcomp` VALUES ('114', 'ENSAM-036', 'COMP-036', '02', '37', 'Maracaibo', '3', 'POLIESTIRENO', '0.08', '15.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('115', 'ENSAM-036', 'COMP-036', '02', '37', 'Maracaibo', '4', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_matcomp` VALUES ('116', 'ENSAM-036', 'COMP-036', '02', '37', 'Maracaibo', '5', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('117', 'ENSAM-037', 'COMP-037', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('118', 'ENSAM-037', 'COMP-037', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO 3H', '0.08', '676.40', '0.48', '0.84');
INSERT INTO `proy_matcomp` VALUES ('119', 'ENSAM-037', 'COMP-037', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('120', 'ENSAM-038', 'COMP-038', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('121', 'ENSAM-038', 'COMP-038', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO 3H', '0.10', '676.40', '0.54', '0.76');
INSERT INTO `proy_matcomp` VALUES ('122', 'ENSAM-038', 'COMP-038', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('123', 'ENSAM-039', 'COMP-039', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('124', 'ENSAM-039', 'COMP-039', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO 3H', '0.12', '631.30', '0.60', '0.75');
INSERT INTO `proy_matcomp` VALUES ('125', 'ENSAM-039', 'COMP-039', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('126', 'ENSAM-040', 'COMP-040', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('127', 'ENSAM-040', 'COMP-040', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO 3H', '0.15', '604.25', '0.70', '0.72');
INSERT INTO `proy_matcomp` VALUES ('128', 'ENSAM-040', 'COMP-040', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('129', 'ENSAM-041', 'COMP-041', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('130', 'ENSAM-041', 'COMP-041', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO  ALIGERADO 3H', '0.20', '568.17', '0.88', '0.70');
INSERT INTO `proy_matcomp` VALUES ('131', 'ENSAM-041', 'COMP-041', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('132', 'ENSAM-042', 'COMP-042', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('133', 'ENSAM-042', 'COMP-042', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 9H', '0.10', '745.50', '0.59', '0.85');
INSERT INTO `proy_matcomp` VALUES ('134', 'ENSAM-042', 'COMP-042', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('135', 'ENSAM-043', 'COMP-043', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('136', 'ENSAM-043', 'COMP-043', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 14H', '0.12', '717.09', '0.58', '0.83');
INSERT INTO `proy_matcomp` VALUES ('137', 'ENSAM-043', 'COMP-043', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('138', 'ENSAM-044', 'COMP-044', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('139', 'ENSAM-044', 'COMP-044', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 9H', '0.15', '622.39', '0.56', '0.73');
INSERT INTO `proy_matcomp` VALUES ('140', 'ENSAM-044', 'COMP-044', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('141', 'ENSAM-045', 'COMP-045', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('142', 'ENSAM-045', 'COMP-045', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 12H', '0.20', '504.02', '0.68', '0.88');
INSERT INTO `proy_matcomp` VALUES ('143', 'ENSAM-045', 'COMP-045', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('144', 'ENSAM-046', 'COMP-046', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('145', 'ENSAM-046', 'COMP-046', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 9H', '0.20', '447.20', '0.63', '0.93');
INSERT INTO `proy_matcomp` VALUES ('146', 'ENSAM-046', 'COMP-046', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('147', 'ENSAM-047', 'COMP-047', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('148', 'ENSAM-047', 'COMP-047', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('149', 'ENSAM-047', 'COMP-047', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('150', 'ENSAM-048', 'COMP-048', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('151', 'ENSAM-048', 'COMP-048', '02', '37', 'Maracaibo', '2', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('152', 'ENSAM-049', 'COMP-049', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('153', 'ENSAM-049', 'COMP-049', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('154', 'ENSAM-049', 'COMP-049', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('155', 'ENSAM-050', 'COMP-050', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('156', 'ENSAM-050', 'COMP-050', '02', '37', 'Maracaibo', '2', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('157', 'ENSAM-051', 'COMP-051', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('158', 'ENSAM-051', 'COMP-051', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO ALIGERADO MULTICELDA 8H', '0.15', '604.25', '0.50', '0.88');
INSERT INTO `proy_matcomp` VALUES ('159', 'ENSAM-051', 'COMP-051', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('160', 'ENSAM-052', 'COMP-052', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('161', 'ENSAM-052', 'COMP-052', '02', '37', 'Maracaibo', '2', 'BLOQUE DE POLIESTIRENO', '0.20', '965.04', '0.05', '0.90');
INSERT INTO `proy_matcomp` VALUES ('162', 'ENSAM-052', 'COMP-052', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('163', 'ENSAM-053', 'COMP-053', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('164', 'ENSAM-053', 'COMP-053', '02', '37', 'Maracaibo', '2', 'LADRILLO DE ARCILLA 3H', '0.10', '1741.18', '0.86', '0.51');
INSERT INTO `proy_matcomp` VALUES ('165', 'ENSAM-053', 'COMP-053', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('166', 'ENSAM-054', 'COMP-054', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('167', 'ENSAM-054', 'COMP-054', '02', '37', 'Maracaibo', '2', 'LADRILLO DE ARCILLA MACIZO', '0.10', '3048.00', '1.09', '0.89');
INSERT INTO `proy_matcomp` VALUES ('168', 'ENSAM-054', 'COMP-054', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('169', 'ENSAM-055', 'COMP-055', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('170', 'ENSAM-055', 'COMP-055', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 9H', '0.15', '622.39', '0.56', '0.73');
INSERT INTO `proy_matcomp` VALUES ('171', 'ENSAM-055', 'COMP-055', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.07', '1.06');
INSERT INTO `proy_matcomp` VALUES ('172', 'ENSAM-055', 'COMP-055', '02', '37', 'Maracaibo', '4', 'BLOQUE DE ARCILLA 9H', '0.10', '745.50', '0.59', '0.85');
INSERT INTO `proy_matcomp` VALUES ('173', 'ENSAM-055', 'COMP-055', '02', '37', 'Maracaibo', '5', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('174', 'ENSAM-056', 'COMP-056', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CON MORTERO A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('175', 'ENSAM-056', 'COMP-056', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 9H', '0.20', '447.20', '0.63', '0.93');
INSERT INTO `proy_matcomp` VALUES ('176', 'ENSAM-056', 'COMP-056', '02', '37', 'Maracaibo', '3', 'BLOQUE DE ARCILLA 9H', '0.15', '622.39', '0.56', '0.73');
INSERT INTO `proy_matcomp` VALUES ('177', 'ENSAM-056', 'COMP-056', '02', '37', 'Maracaibo', '4', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('178', 'ENSAM-057', 'COMP-057', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('179', 'ENSAM-057', 'COMP-057', '02', '37', 'Maracaibo', '2', 'CAMARA DE AIRE', '0.05', '1.22', '0.07', '1.06');
INSERT INTO `proy_matcomp` VALUES ('180', 'ENSAM-057', 'COMP-057', '02', '37', 'Maracaibo', '3', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('181', 'ENSAM-057', 'COMP-057', '02', '37', 'Maracaibo', '4', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('182', 'ENSAM-058', 'COMP-058', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('183', 'ENSAM-058', 'COMP-058', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('184', 'ENSAM-058', 'COMP-058', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.07', '1.06');
INSERT INTO `proy_matcomp` VALUES ('185', 'ENSAM-058', 'COMP-058', '02', '37', 'Maracaibo', '4', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('186', 'ENSAM-058', 'COMP-058', '02', '37', 'Maracaibo', '5', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('187', 'ENSAM-059', 'COMP-059', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('188', 'ENSAM-059', 'COMP-059', '02', '37', 'Maracaibo', '2', 'LAMINA LIVIANA DE FIBROCEMENTO', '0.01', '1099.00', '0.20', '1.01');
INSERT INTO `proy_matcomp` VALUES ('189', 'ENSAM-059', 'COMP-059', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.07', '1.06');
INSERT INTO `proy_matcomp` VALUES ('190', 'ENSAM-059', 'COMP-059', '02', '37', 'Maracaibo', '4', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('191', 'ENSAM-059', 'COMP-059', '02', '37', 'Maracaibo', '5', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('192', 'ENSAM-059', 'COMP-059', '02', '37', 'Maracaibo', '6', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('193', 'ENSAM-060', 'COMP-060', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('194', 'ENSAM-060', 'COMP-060', '02', '37', 'Maracaibo', '2', 'LAMINA LIVIANA DE MADERA', '0.01', '593.00', '0.12', '2.51');
INSERT INTO `proy_matcomp` VALUES ('195', 'ENSAM-060', 'COMP-060', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.07', '1.06');
INSERT INTO `proy_matcomp` VALUES ('196', 'ENSAM-060', 'COMP-060', '02', '37', 'Maracaibo', '4', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('197', 'ENSAM-060', 'COMP-060', '02', '37', 'Maracaibo', '5', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('198', 'ENSAM-060', 'COMP-060', '02', '37', 'Maracaibo', '6', 'FRISO INTERIOR  DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('199', 'ENSAM-061', 'COMP-061', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('200', 'ENSAM-062', 'COMP-062', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('201', 'ENSAM-063', 'COMP-063', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO ALIGERADO MULTICELDA 8H', '0.15', '604.25', '0.50', '0.88');
INSERT INTO `proy_matcomp` VALUES ('202', 'ENSAM-064', 'COMP-064', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO ALIGERADO MULTICELDA 8H', '0.15', '604.25', '0.50', '0.88');
INSERT INTO `proy_matcomp` VALUES ('203', 'ENSAM-064', 'COMP-064', '02', '37', 'Maracaibo', '2', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('204', 'ENSAM-065', 'COMP-065', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO ALIGERADO MULTICELDA 8H', '0.15', '604.25', '0.50', '0.88');
INSERT INTO `proy_matcomp` VALUES ('205', 'ENSAM-065', 'COMP-065', '02', '37', 'Maracaibo', '2', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('206', 'ENSAM-066', 'COMP-066', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('207', 'ENSAM-066', 'COMP-066', '02', '37', 'Maracaibo', '2', 'BLOQUE DE POLIESTIRENO', '0.20', '965.04', '0.05', '0.90');
INSERT INTO `proy_matcomp` VALUES ('208', 'ENSAM-066', 'COMP-066', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('209', 'ENSAM-067', 'COMP-067', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR  A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('210', 'ENSAM-067', 'COMP-067', '02', '37', 'Maracaibo', '2', 'BLOQUE DE POLIESTIRENO', '0.20', '965.04', '0.05', '0.90');
INSERT INTO `proy_matcomp` VALUES ('211', 'ENSAM-067', 'COMP-067', '02', '37', 'Maracaibo', '3', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('212', 'ENSAM-068', 'COMP-068', '02', '37', 'Maracaibo', '1', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('213', 'ENSAM-068', 'COMP-068', '02', '37', 'Maracaibo', '2', 'LAMINA LIVIANA FIBROCEMENTO', '0.01', '1099.00', '0.20', '1.01');
INSERT INTO `proy_matcomp` VALUES ('214', 'ENSAM-068', 'COMP-068', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.57', '1603.00');
INSERT INTO `proy_matcomp` VALUES ('215', 'ENSAM-068', 'COMP-068', '02', '37', 'Maracaibo', '4', 'BLOQUE DE ARCILLA 9H', '0.15', '622.39', '0.56', '0.73');
INSERT INTO `proy_matcomp` VALUES ('216', 'ENSAM-068', 'COMP-068', '02', '37', 'Maracaibo', '5', 'BLOQUE DE ARCILLA 9H', '0.10', '745.50', '0.59', '0.85');
INSERT INTO `proy_matcomp` VALUES ('217', 'ENSAM-068', 'COMP-068', '02', '37', 'Maracaibo', '6', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('218', 'ENSAM-069', 'COMP-069', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('219', 'ENSAM-069', 'COMP-069', '02', '37', 'Maracaibo', '2', 'CAMARA DE AIRE', '0.05', '1.22', '0.57', '1603.00');
INSERT INTO `proy_matcomp` VALUES ('220', 'ENSAM-069', 'COMP-069', '02', '37', 'Maracaibo', '3', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('221', 'ENSAM-069', 'COMP-069', '02', '37', 'Maracaibo', '4', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('222', 'ENSAM-070', 'COMP-070', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('223', 'ENSAM-070', 'COMP-070', '02', '37', 'Maracaibo', '2', 'LAMINA LIVIANA FIBROCEMENTO', '0.01', '1099.00', '0.20', '1.01');
INSERT INTO `proy_matcomp` VALUES ('224', 'ENSAM-070', 'COMP-070', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.57', '1603.00');
INSERT INTO `proy_matcomp` VALUES ('225', 'ENSAM-070', 'COMP-070', '02', '37', 'Maracaibo', '4', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('226', 'ENSAM-070', 'COMP-070', '02', '37', 'Maracaibo', '5', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('227', 'ENSAM-070', 'COMP-070', '02', '37', 'Maracaibo', '6', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('228', 'ENSAM-071', 'COMP-071', '02', '37', 'Maracaibo', '1', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('229', 'ENSAM-071', 'COMP-071', '02', '37', 'Maracaibo', '2', 'LAMINA LIVIANA MADERA', '0.01', '593.00', '0.12', '2.51');
INSERT INTO `proy_matcomp` VALUES ('230', 'ENSAM-071', 'COMP-071', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.57', '1603.00');
INSERT INTO `proy_matcomp` VALUES ('231', 'ENSAM-071', 'COMP-071', '02', '37', 'Maracaibo', '4', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('232', 'ENSAM-071', 'COMP-071', '02', '37', 'Maracaibo', '5', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('233', 'ENSAM-071', 'COMP-071', '02', '37', 'Maracaibo', '6', 'FRISO INTERIOR CEMENTO Y ARENA', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_matcomp` VALUES ('234', 'ENSAM-072', 'COMP-072', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('235', 'ENSAM-072', 'COMP-072', '02', '37', 'Maracaibo', '2', 'BLOQUE DE ARCILLA 9H', '0.15', '622.39', '0.56', '0.73');
INSERT INTO `proy_matcomp` VALUES ('236', 'ENSAM-072', 'COMP-072', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.57', '1603.00');
INSERT INTO `proy_matcomp` VALUES ('237', 'ENSAM-072', 'COMP-072', '02', '37', 'Maracaibo', '4', 'BLOQUE DE ARCILLA 9H', '0.10', '745.50', '0.59', '0.85');
INSERT INTO `proy_matcomp` VALUES ('238', 'ENSAM-072', 'COMP-072', '02', '37', 'Maracaibo', '5', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('239', 'ENSAM-073', 'COMP-073', '02', '37', 'Maracaibo', '1', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('240', 'ENSAM-073', 'COMP-073', '02', '37', 'Maracaibo', '2', 'CAMARA DE AIRE', '0.05', '1.22', '0.57', '1603.00');
INSERT INTO `proy_matcomp` VALUES ('241', 'ENSAM-073', 'COMP-073', '02', '37', 'Maracaibo', '3', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('242', 'ENSAM-073', 'COMP-073', '02', '37', 'Maracaibo', '4', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('243', 'ENSAM-074', 'COMP-074', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('244', 'ENSAM-074', 'COMP-074', '02', '37', 'Maracaibo', '2', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('245', 'ENSAM-074', 'COMP-074', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.57', '1603.00');
INSERT INTO `proy_matcomp` VALUES ('246', 'ENSAM-074', 'COMP-074', '02', '37', 'Maracaibo', '4', 'BLOQUE DE CONCRETO PESADO 3H', '0.10', '1217.52', '0.89', '0.94');
INSERT INTO `proy_matcomp` VALUES ('247', 'ENSAM-074', 'COMP-074', '02', '37', 'Maracaibo', '5', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('248', 'ENSAM-075', 'COMP-075', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('249', 'ENSAM-075', 'COMP-075', '02', '37', 'Maracaibo', '2', 'LAMINA LIVIANA FIBROCEMENTO', '0.01', '1099.00', '0.20', '1.01');
INSERT INTO `proy_matcomp` VALUES ('250', 'ENSAM-075', 'COMP-075', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.57', '1603.00');
INSERT INTO `proy_matcomp` VALUES ('251', 'ENSAM-075', 'COMP-075', '02', '37', 'Maracaibo', '4', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('252', 'ENSAM-075', 'COMP-075', '02', '37', 'Maracaibo', '5', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('253', 'ENSAM-075', 'COMP-075', '02', '37', 'Maracaibo', '6', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_matcomp` VALUES ('254', 'ENSAM-076', 'COMP-076', '02', '37', 'Maracaibo', '1', 'FRISO EXTERIOR A BASE DE CAL', '0.02', '600.00', '0.16', '1.01');
INSERT INTO `proy_matcomp` VALUES ('255', 'ENSAM-076', 'COMP-076', '02', '37', 'Maracaibo', '2', 'LAMINA LIVIANA MADERA', '0.01', '593.00', '0.12', '2.51');
INSERT INTO `proy_matcomp` VALUES ('256', 'ENSAM-076', 'COMP-076', '02', '37', 'Maracaibo', '3', 'CAMARA DE AIRE', '0.05', '1.22', '0.57', '1603.00');
INSERT INTO `proy_matcomp` VALUES ('257', 'ENSAM-076', 'COMP-076', '02', '37', 'Maracaibo', '4', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_matcomp` VALUES ('258', 'ENSAM-076', 'COMP-076', '02', '37', 'Maracaibo', '5', 'BLOQUE DE CONCRETO PESADO 3H', '0.15', '1001.07', '1.01', '0.93');
INSERT INTO `proy_matcomp` VALUES ('259', 'ENSAM-076', 'COMP-076', '02', '37', 'Maracaibo', '6', 'FRISO INTERIOR DE YESO', '0.02', '1602.00', '0.73', '0.84');

-- ----------------------------
-- Table structure for `proy_orientacion`
-- ----------------------------
DROP TABLE IF EXISTS `proy_orientacion`;
CREATE TABLE `proy_orientacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_orient_desc` varchar(15) NOT NULL,
  `proy_orient_img` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_orientacion
-- ----------------------------
INSERT INTO `proy_orientacion` VALUES ('1', 'Norte (N)', '../img/Norte.png');
INSERT INTO `proy_orientacion` VALUES ('2', 'NorEste (NE)', '../img/NorEste.png');
INSERT INTO `proy_orientacion` VALUES ('3', 'Este (E)', '../img/Este.png');
INSERT INTO `proy_orientacion` VALUES ('4', 'SurEste (SE)', '../img/SurEste.png');
INSERT INTO `proy_orientacion` VALUES ('5', 'Sur (S)', '../img/Sur.png');
INSERT INTO `proy_orientacion` VALUES ('6', 'SurOeste (SO)', '../img/SurOeste.png');
INSERT INTO `proy_orientacion` VALUES ('7', 'Oeste (O)', '../img/Oeste.png');
INSERT INTO `proy_orientacion` VALUES ('8', 'NorOeste(NO)', '../img/NorOeste.png');

-- ----------------------------
-- Table structure for `proy_pais`
-- ----------------------------
DROP TABLE IF EXISTS `proy_pais`;
CREATE TABLE `proy_pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cont` varchar(3) NOT NULL,
  `cod_pais` varchar(3) NOT NULL,
  `continente` varchar(30) NOT NULL,
  `pais` varchar(60) NOT NULL,
  `capital` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=902 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_pais
-- ----------------------------
INSERT INTO `proy_pais` VALUES ('703', '01', '01', 'AFRICA', 'ANGOLA', 'LUANDA');
INSERT INTO `proy_pais` VALUES ('704', '01', '02', 'AFRICA', 'ARGELIA', 'ARGEL');
INSERT INTO `proy_pais` VALUES ('705', '01', '03', 'AFRICA', 'BENIN', 'PORTO-NOVO');
INSERT INTO `proy_pais` VALUES ('706', '01', '04', 'AFRICA', 'BOTSUANA', 'GABERONES');
INSERT INTO `proy_pais` VALUES ('707', '01', '05', 'AFRICA', 'BURKINA FASO', 'UAGADUGU');
INSERT INTO `proy_pais` VALUES ('708', '01', '06', 'AFRICA', 'BURUNDI', 'BUYUMBURA');
INSERT INTO `proy_pais` VALUES ('709', '01', '07', 'AFRICA', 'CABO VERDE', 'PRAIA');
INSERT INTO `proy_pais` VALUES ('710', '01', '08', 'AFRICA', 'CAMERUN', 'YAUNDE');
INSERT INTO `proy_pais` VALUES ('711', '01', '09', 'AFRICA', 'CHAD', 'YAMENA');
INSERT INTO `proy_pais` VALUES ('712', '01', '10', 'AFRICA', 'COMORAS', 'MORONI');
INSERT INTO `proy_pais` VALUES ('713', '01', '11', 'AFRICA', 'COSTA DE MARFIL', 'YAMUSUKRO, ABIYAN');
INSERT INTO `proy_pais` VALUES ('714', '01', '12', 'AFRICA', 'EGIPTO', 'EL CAIRO');
INSERT INTO `proy_pais` VALUES ('715', '01', '13', 'AFRICA', 'ERITREA', 'ASMARA');
INSERT INTO `proy_pais` VALUES ('716', '01', '14', 'AFRICA', 'ETIOPIA', 'ADIS ABEBA');
INSERT INTO `proy_pais` VALUES ('717', '01', '15', 'AFRICA', 'GABON', 'LIBREVILLE');
INSERT INTO `proy_pais` VALUES ('718', '01', '16', 'AFRICA', 'GAMBIA', 'BANJUL');
INSERT INTO `proy_pais` VALUES ('719', '01', '17', 'AFRICA', 'GHANA', 'ACCRA');
INSERT INTO `proy_pais` VALUES ('720', '01', '18', 'AFRICA', 'GUINEA', 'CONAKRY');
INSERT INTO `proy_pais` VALUES ('721', '01', '19', 'AFRICA', 'GUINEA ECUATORIAL', 'MALABO');
INSERT INTO `proy_pais` VALUES ('722', '01', '20', 'AFRICA', 'GUINEA-BISSAU', 'BISSAU');
INSERT INTO `proy_pais` VALUES ('723', '01', '21', 'AFRICA', 'KENIA', 'NAIROBI');
INSERT INTO `proy_pais` VALUES ('724', '01', '22', 'AFRICA', 'LESOTO', 'MASERU');
INSERT INTO `proy_pais` VALUES ('725', '01', '23', 'AFRICA', 'LIBERIA', 'MONROVIA');
INSERT INTO `proy_pais` VALUES ('726', '01', '24', 'AFRICA', 'LIBIA', 'TRIPOLI');
INSERT INTO `proy_pais` VALUES ('727', '01', '25', 'AFRICA', 'MADAGASCAR', 'ANTANANARIVO');
INSERT INTO `proy_pais` VALUES ('728', '01', '26', 'AFRICA', 'MALAUI', 'LILONGÜE');
INSERT INTO `proy_pais` VALUES ('729', '01', '27', 'AFRICA', 'MALI', 'BAMAKO');
INSERT INTO `proy_pais` VALUES ('730', '01', '28', 'AFRICA', 'MARRUECOS', 'RABAT');
INSERT INTO `proy_pais` VALUES ('731', '01', '29', 'AFRICA', 'MAURICIO', 'PORT LOUIS');
INSERT INTO `proy_pais` VALUES ('732', '01', '30', 'AFRICA', 'MAURITANIA', 'NUAKCHOT');
INSERT INTO `proy_pais` VALUES ('733', '01', '31', 'AFRICA', 'MOZAMBIQUE', 'MAPUTO');
INSERT INTO `proy_pais` VALUES ('734', '01', '32', 'AFRICA', 'NAMIBIA', 'WINDHOEK');
INSERT INTO `proy_pais` VALUES ('735', '01', '33', 'AFRICA', 'NIGER', 'NIAMEY');
INSERT INTO `proy_pais` VALUES ('736', '01', '34', 'AFRICA', 'NIGERIA', 'ABUYA');
INSERT INTO `proy_pais` VALUES ('737', '01', '35', 'AFRICA', 'REPUBLICA CENTROAFRICANA', 'BANGUI');
INSERT INTO `proy_pais` VALUES ('738', '01', '36', 'AFRICA', 'REPUBLICA DEL CONGO', 'BRAZZAVILLE');
INSERT INTO `proy_pais` VALUES ('739', '01', '37', 'AFRICA', 'REPUBLICA DEMOCRATICA DEL CONGO', 'KINSHASA');
INSERT INTO `proy_pais` VALUES ('740', '01', '38', 'AFRICA', 'REPUBLICA SAHARAUI', 'EL AAIUN');
INSERT INTO `proy_pais` VALUES ('741', '01', '39', 'AFRICA', 'RUANDA', 'KIGALI');
INSERT INTO `proy_pais` VALUES ('742', '01', '40', 'AFRICA', 'SANTO TOME Y PRINCIPE', 'SANTO TOME');
INSERT INTO `proy_pais` VALUES ('743', '01', '41', 'AFRICA', 'SENEGAL', 'DAKAR');
INSERT INTO `proy_pais` VALUES ('744', '01', '42', 'AFRICA', 'SEYCHELLES', 'VICTORIA');
INSERT INTO `proy_pais` VALUES ('745', '01', '43', 'AFRICA', 'SIERRA LEONA', 'FREETOWN');
INSERT INTO `proy_pais` VALUES ('746', '01', '44', 'AFRICA', 'SOMALIA', 'MOGADISCIO');
INSERT INTO `proy_pais` VALUES ('747', '01', '45', 'AFRICA', 'SUAZILANDIA', 'MBABANE');
INSERT INTO `proy_pais` VALUES ('748', '01', '46', 'AFRICA', 'SUDAFRICA', 'PRETORIA, CIUDAD DEL CABO, BLOEMFONTEIN');
INSERT INTO `proy_pais` VALUES ('749', '01', '47', 'AFRICA', 'SUDAN DEL NORTE', 'JARTUM');
INSERT INTO `proy_pais` VALUES ('750', '01', '48', 'AFRICA', 'SUDAN DEL SUR', 'YUBA');
INSERT INTO `proy_pais` VALUES ('751', '01', '49', 'AFRICA', 'TANZANIA', 'DODOMA');
INSERT INTO `proy_pais` VALUES ('752', '01', '50', 'AFRICA', 'TOGO', 'LOME');
INSERT INTO `proy_pais` VALUES ('753', '01', '51', 'AFRICA', 'TUNEZ', 'TUNEZ');
INSERT INTO `proy_pais` VALUES ('754', '01', '52', 'AFRICA', 'UGANDA', 'KAMPALA');
INSERT INTO `proy_pais` VALUES ('755', '01', '53', 'AFRICA', 'YIBUTI', 'YIBUTI');
INSERT INTO `proy_pais` VALUES ('756', '01', '54', 'AFRICA', 'ZAMBIA', 'LUSAKA');
INSERT INTO `proy_pais` VALUES ('757', '01', '55', 'AFRICA', 'ZIMBABUE', 'HARARE');
INSERT INTO `proy_pais` VALUES ('758', '02', '01', 'AMERICA', 'ANTIGUA Y BARBUDA', 'SAINT JOHNS');
INSERT INTO `proy_pais` VALUES ('759', '02', '02', 'AMERICA', 'ARGENTINA', 'BUENOS AIRES');
INSERT INTO `proy_pais` VALUES ('760', '02', '03', 'AMERICA', 'BAHAMAS', 'NASSAU');
INSERT INTO `proy_pais` VALUES ('761', '02', '04', 'AMERICA', 'BARBADOS', 'BRIDGETOWN');
INSERT INTO `proy_pais` VALUES ('762', '02', '05', 'AMERICA', 'BELICE', 'BELMOPAN');
INSERT INTO `proy_pais` VALUES ('763', '02', '06', 'AMERICA', 'BOLIVIA', 'SUCRE, LA PAZ');
INSERT INTO `proy_pais` VALUES ('764', '02', '07', 'AMERICA', 'BRASIL', 'BRASILIA');
INSERT INTO `proy_pais` VALUES ('765', '02', '08', 'AMERICA', 'CANADA', 'OTTAWA');
INSERT INTO `proy_pais` VALUES ('766', '02', '09', 'AMERICA', 'CHILE', 'SANTIAGO DE CHILE');
INSERT INTO `proy_pais` VALUES ('767', '02', '10', 'AMERICA', 'COLOMBIA', 'BOGOTA');
INSERT INTO `proy_pais` VALUES ('768', '02', '11', 'AMERICA', 'COSTA RICA', 'SAN JOSE');
INSERT INTO `proy_pais` VALUES ('769', '02', '12', 'AMERICA', 'CUBA', 'LA HABANA');
INSERT INTO `proy_pais` VALUES ('770', '02', '13', 'AMERICA', 'DOMINICA', 'ROSEAU');
INSERT INTO `proy_pais` VALUES ('771', '02', '14', 'AMERICA', 'ECUADOR', 'QUITO');
INSERT INTO `proy_pais` VALUES ('772', '02', '15', 'AMERICA', 'EL SALVADOR', 'SAN SALVADOR');
INSERT INTO `proy_pais` VALUES ('773', '02', '16', 'AMERICA', 'ESTADOS UNIDOS', 'WASHINGTON D. C.');
INSERT INTO `proy_pais` VALUES ('774', '02', '17', 'AMERICA', 'GRANADA', 'SAINT GEORGES');
INSERT INTO `proy_pais` VALUES ('775', '02', '18', 'AMERICA', 'GUATEMALA', 'CIUDAD DE GUATEMALA');
INSERT INTO `proy_pais` VALUES ('776', '02', '19', 'AMERICA', 'GUYANA', 'GEORGETOWN');
INSERT INTO `proy_pais` VALUES ('777', '02', '20', 'AMERICA', 'HAITI', 'PUERTO PRINCIPE');
INSERT INTO `proy_pais` VALUES ('778', '02', '21', 'AMERICA', 'HONDURAS', 'TEGUCIGALPA');
INSERT INTO `proy_pais` VALUES ('779', '02', '22', 'AMERICA', 'JAMAICA', 'KINGSTON');
INSERT INTO `proy_pais` VALUES ('780', '02', '23', 'AMERICA', 'MEXICO', 'MEXICO D. F.');
INSERT INTO `proy_pais` VALUES ('781', '02', '24', 'AMERICA', 'NICARAGUA', 'MANAGUA');
INSERT INTO `proy_pais` VALUES ('782', '02', '25', 'AMERICA', 'PANAMA', 'CIUDAD DE PANAMA');
INSERT INTO `proy_pais` VALUES ('783', '02', '26', 'AMERICA', 'PARAGUAY', 'ASUNCION');
INSERT INTO `proy_pais` VALUES ('784', '02', '27', 'AMERICA', 'PERU', 'LIMA');
INSERT INTO `proy_pais` VALUES ('785', '02', '28', 'AMERICA', 'PUERTO RICO', 'SAN JUAN');
INSERT INTO `proy_pais` VALUES ('786', '02', '29', 'AMERICA', 'REPUBLICA DOMINICANA', 'SANTO DOMINGO');
INSERT INTO `proy_pais` VALUES ('787', '02', '30', 'AMERICA', 'SAN CRISTOBAL Y NIEVES', 'BASSETERRE');
INSERT INTO `proy_pais` VALUES ('788', '02', '31', 'AMERICA', 'SAN VICENTE Y LAS GRANADINAS', 'KINGSTOWN');
INSERT INTO `proy_pais` VALUES ('789', '02', '32', 'AMERICA', 'SANTA LUCIA', 'CASTRIES');
INSERT INTO `proy_pais` VALUES ('790', '02', '33', 'AMERICA', 'SURINAM', 'PARAMARIBO');
INSERT INTO `proy_pais` VALUES ('791', '02', '34', 'AMERICA', 'TRINIDAD Y TOBAGO', 'PUERTO ESPAÑA');
INSERT INTO `proy_pais` VALUES ('792', '02', '35', 'AMERICA', 'URUGUAY', 'MONTEVIDEO');
INSERT INTO `proy_pais` VALUES ('793', '02', '36', 'AMERICA', 'VENEZUELA', 'CARACAS');
INSERT INTO `proy_pais` VALUES ('794', '02', '37', 'AMERICA', 'VENEZUELA', 'MARACAIBO');
INSERT INTO `proy_pais` VALUES ('795', '03', '01', 'ASIA', 'AFGANISTAN', 'KABUL');
INSERT INTO `proy_pais` VALUES ('796', '03', '02', 'ASIA', 'ARABIA SAUDITA', 'RIAD');
INSERT INTO `proy_pais` VALUES ('797', '03', '03', 'ASIA', 'BANGLADES', 'DACA');
INSERT INTO `proy_pais` VALUES ('798', '03', '04', 'ASIA', 'BAREIN', 'MANAMA');
INSERT INTO `proy_pais` VALUES ('799', '03', '05', 'ASIA', 'BRUNEI', 'BANDAR SERI BEGAWAN');
INSERT INTO `proy_pais` VALUES ('800', '03', '06', 'ASIA', 'BUTAN', 'TIMBU');
INSERT INTO `proy_pais` VALUES ('801', '03', '07', 'ASIA', 'CAMBOYA', 'PNON PEHN');
INSERT INTO `proy_pais` VALUES ('802', '03', '08', 'ASIA', 'CATAR', 'DOHA');
INSERT INTO `proy_pais` VALUES ('803', '03', '09', 'ASIA', 'CHINA', 'PEKIN');
INSERT INTO `proy_pais` VALUES ('804', '03', '10', 'ASIA', 'CHIPRE', 'NICOSIA');
INSERT INTO `proy_pais` VALUES ('805', '03', '11', 'ASIA', 'COREA DEL NORTE', 'PYONGYANG');
INSERT INTO `proy_pais` VALUES ('806', '03', '12', 'ASIA', 'COREA DEL SUR', 'SEUL');
INSERT INTO `proy_pais` VALUES ('807', '03', '13', 'ASIA', 'EMIRATOS ARABES UNIDOS', 'ABU DABI');
INSERT INTO `proy_pais` VALUES ('808', '03', '14', 'ASIA', 'FILIPINAS', 'MANILA');
INSERT INTO `proy_pais` VALUES ('809', '03', '15', 'ASIA', 'INDIA', 'NUEVA DELHI');
INSERT INTO `proy_pais` VALUES ('810', '03', '16', 'ASIA', 'INDONESIA', 'YAKARTA');
INSERT INTO `proy_pais` VALUES ('811', '03', '17', 'ASIA', 'IRAN', 'TEHERAN');
INSERT INTO `proy_pais` VALUES ('812', '03', '18', 'ASIA', 'IRAQ', 'BAGDAD');
INSERT INTO `proy_pais` VALUES ('813', '03', '19', 'ASIA', 'ISRAEL', 'JERUSALEN');
INSERT INTO `proy_pais` VALUES ('814', '03', '20', 'ASIA', 'JAPON', 'TOKIO');
INSERT INTO `proy_pais` VALUES ('815', '03', '21', 'ASIA', 'JORDANIA', 'AMMAN');
INSERT INTO `proy_pais` VALUES ('816', '03', '22', 'ASIA', 'KAZAJISTAN', 'ASTANA');
INSERT INTO `proy_pais` VALUES ('817', '03', '23', 'ASIA', 'KIRGUISTAN', 'BISKEK');
INSERT INTO `proy_pais` VALUES ('818', '03', '24', 'ASIA', 'KUWAIT', 'CIUDAD DE KUWAIT');
INSERT INTO `proy_pais` VALUES ('819', '03', '25', 'ASIA', 'LAOS', 'VIENTIAN');
INSERT INTO `proy_pais` VALUES ('820', '03', '26', 'ASIA', 'LIBANO', 'BEIRUT');
INSERT INTO `proy_pais` VALUES ('821', '03', '27', 'ASIA', 'MALASIA', 'KUALA LUMPUR');
INSERT INTO `proy_pais` VALUES ('822', '03', '28', 'ASIA', 'MALDIVAS', 'MALE');
INSERT INTO `proy_pais` VALUES ('823', '03', '29', 'ASIA', 'MONGOLIA', 'ULAN BATOR');
INSERT INTO `proy_pais` VALUES ('824', '03', '30', 'ASIA', 'MYANMAR (BIRMANIA)', 'NAYPYIDAW');
INSERT INTO `proy_pais` VALUES ('825', '03', '31', 'ASIA', 'NEPAL', 'KATMANDU');
INSERT INTO `proy_pais` VALUES ('826', '03', '32', 'ASIA', 'OMAN', 'MASCATE');
INSERT INTO `proy_pais` VALUES ('827', '03', '33', 'ASIA', 'PAKISTAN', 'ISLAMABAD');
INSERT INTO `proy_pais` VALUES ('828', '03', '34', 'ASIA', 'PALESTINA', 'RAMALA');
INSERT INTO `proy_pais` VALUES ('829', '03', '35', 'ASIA', 'SINGAPUR', 'SINGAPUR');
INSERT INTO `proy_pais` VALUES ('830', '03', '36', 'ASIA', 'SIRIA', 'DAMASCO');
INSERT INTO `proy_pais` VALUES ('831', '03', '37', 'ASIA', 'SRI LANKA', 'COLOMBO');
INSERT INTO `proy_pais` VALUES ('832', '03', '38', 'ASIA', 'TAILANDIA', 'BANGKOK');
INSERT INTO `proy_pais` VALUES ('833', '03', '39', 'ASIA', 'TAIWAN', 'TAIPEH');
INSERT INTO `proy_pais` VALUES ('834', '03', '40', 'ASIA', 'TAYIKISTAN', 'DUSAMBE');
INSERT INTO `proy_pais` VALUES ('835', '03', '41', 'ASIA', 'TIMOR ORIENTAL', 'DILI');
INSERT INTO `proy_pais` VALUES ('836', '03', '42', 'ASIA', 'TURKMENISTAN', 'ASJABAD');
INSERT INTO `proy_pais` VALUES ('837', '03', '43', 'ASIA', 'TURQUIA', 'ANKARA');
INSERT INTO `proy_pais` VALUES ('838', '03', '44', 'ASIA', 'UZBEKISTAN', 'TASHKENT');
INSERT INTO `proy_pais` VALUES ('839', '03', '45', 'ASIA', 'VIETNAM', 'HANOI');
INSERT INTO `proy_pais` VALUES ('840', '03', '46', 'ASIA', 'YEMEN', 'SANA');
INSERT INTO `proy_pais` VALUES ('841', '04', '01', 'EUROPA', 'ALBANIA', 'TIRANA');
INSERT INTO `proy_pais` VALUES ('842', '04', '02', 'EUROPA', 'ALEMANIA', 'BERLIN');
INSERT INTO `proy_pais` VALUES ('843', '04', '03', 'EUROPA', 'ANDORRA', 'ANDORRA LA VIEJA');
INSERT INTO `proy_pais` VALUES ('844', '04', '04', 'EUROPA', 'ARMENIA', 'EREVAN');
INSERT INTO `proy_pais` VALUES ('845', '04', '05', 'EUROPA', 'AUSTRIA', 'VIENA');
INSERT INTO `proy_pais` VALUES ('846', '04', '06', 'EUROPA', 'AZERBAIYAN', 'BAKU');
INSERT INTO `proy_pais` VALUES ('847', '04', '07', 'EUROPA', 'BELGICA', 'BRUSELAS');
INSERT INTO `proy_pais` VALUES ('848', '04', '08', 'EUROPA', 'BIELORRUSIA', 'MINSK');
INSERT INTO `proy_pais` VALUES ('849', '04', '09', 'EUROPA', 'BOSNIA Y HERZEGOVINA', 'SARAJEVO');
INSERT INTO `proy_pais` VALUES ('850', '04', '10', 'EUROPA', 'BULGARIA', 'SOFIA');
INSERT INTO `proy_pais` VALUES ('851', '04', '11', 'EUROPA', 'CROACIA', 'ZAGREB');
INSERT INTO `proy_pais` VALUES ('852', '04', '12', 'EUROPA', 'DINAMARCA', 'COPENHAGUE');
INSERT INTO `proy_pais` VALUES ('853', '04', '13', 'EUROPA', 'ESLOVAQUIA', 'BRATISLAVA');
INSERT INTO `proy_pais` VALUES ('854', '04', '14', 'EUROPA', 'ESLOVENIA', 'LUBLIJANA');
INSERT INTO `proy_pais` VALUES ('855', '04', '15', 'EUROPA', 'ESPAÑA', 'MADRID');
INSERT INTO `proy_pais` VALUES ('856', '04', '16', 'EUROPA', 'ESTONIA', 'TALLIN');
INSERT INTO `proy_pais` VALUES ('857', '04', '17', 'EUROPA', 'FINLANDIA', 'HELSINKI');
INSERT INTO `proy_pais` VALUES ('858', '04', '18', 'EUROPA', 'FRANCIA', 'PARIS');
INSERT INTO `proy_pais` VALUES ('859', '04', '19', 'EUROPA', 'GEORGIA', 'TIFLIS');
INSERT INTO `proy_pais` VALUES ('860', '04', '20', 'EUROPA', 'GRECIA', 'ATENAS');
INSERT INTO `proy_pais` VALUES ('861', '04', '21', 'EUROPA', 'HUNGRIA', 'BUDAPEST');
INSERT INTO `proy_pais` VALUES ('862', '04', '22', 'EUROPA', 'IRLANDA', 'DUBLIN');
INSERT INTO `proy_pais` VALUES ('863', '04', '23', 'EUROPA', 'ISLANDIA', 'REIKIAVIK');
INSERT INTO `proy_pais` VALUES ('864', '04', '24', 'EUROPA', 'ITALIA', 'ROMA');
INSERT INTO `proy_pais` VALUES ('865', '04', '25', 'EUROPA', 'LETONIA', 'RIGA');
INSERT INTO `proy_pais` VALUES ('866', '04', '26', 'EUROPA', 'LIECHTENSTEIN', 'VADUZ');
INSERT INTO `proy_pais` VALUES ('867', '04', '27', 'EUROPA', 'LITUANIA', 'VILNA');
INSERT INTO `proy_pais` VALUES ('868', '04', '28', 'EUROPA', 'LUXEMBURGO', 'LUXEMBURGO');
INSERT INTO `proy_pais` VALUES ('869', '04', '29', 'EUROPA', 'MALTA', 'LA VALETA');
INSERT INTO `proy_pais` VALUES ('870', '04', '30', 'EUROPA', 'MOLDAVIA', 'CHISINAU');
INSERT INTO `proy_pais` VALUES ('871', '04', '31', 'EUROPA', 'MONACO', 'MONACO');
INSERT INTO `proy_pais` VALUES ('872', '04', '32', 'EUROPA', 'MONTENEGRO', 'PODGORICA');
INSERT INTO `proy_pais` VALUES ('873', '04', '33', 'EUROPA', 'NORUEGA', 'OSLO');
INSERT INTO `proy_pais` VALUES ('874', '04', '34', 'EUROPA', 'PAISES BAJOS', 'AMSTERDAM');
INSERT INTO `proy_pais` VALUES ('875', '04', '35', 'EUROPA', 'POLONIA', 'VARSOVIA');
INSERT INTO `proy_pais` VALUES ('876', '04', '36', 'EUROPA', 'PORTUGAL', 'LISBOA');
INSERT INTO `proy_pais` VALUES ('877', '04', '37', 'EUROPA', 'REINO UNIDO', 'LONDRES');
INSERT INTO `proy_pais` VALUES ('878', '04', '38', 'EUROPA', 'REPUBLICA CHECA', 'PRAGA');
INSERT INTO `proy_pais` VALUES ('879', '04', '39', 'EUROPA', 'REPUBLICA DE MACEDONIA', 'SKOPJE');
INSERT INTO `proy_pais` VALUES ('880', '04', '40', 'EUROPA', 'RUMANIA', 'BUCAREST');
INSERT INTO `proy_pais` VALUES ('881', '04', '41', 'EUROPA', 'RUSIA', 'MOSCU');
INSERT INTO `proy_pais` VALUES ('882', '04', '42', 'EUROPA', 'SAN MARINO', 'CIUDAD DE SAN MARINO');
INSERT INTO `proy_pais` VALUES ('883', '04', '43', 'EUROPA', 'SERBIA', 'BELGRADO');
INSERT INTO `proy_pais` VALUES ('884', '04', '44', 'EUROPA', 'SUECIA', 'ESTOCOLMO');
INSERT INTO `proy_pais` VALUES ('885', '04', '45', 'EUROPA', 'SUIZA', 'BERNA');
INSERT INTO `proy_pais` VALUES ('886', '04', '46', 'EUROPA', 'UCRANIA', 'KIEV');
INSERT INTO `proy_pais` VALUES ('887', '04', '47', 'EUROPA', 'VATICANO', 'CIUDAD DEL VATICANO');
INSERT INTO `proy_pais` VALUES ('888', '05', '01', 'OCEANIA', 'AUSTRALIA', 'CANBERRA');
INSERT INTO `proy_pais` VALUES ('889', '05', '02', 'OCEANIA', 'FIYI', 'SUVA');
INSERT INTO `proy_pais` VALUES ('890', '05', '03', 'OCEANIA', 'ISLAS MARSHALL', 'MAJURO');
INSERT INTO `proy_pais` VALUES ('891', '05', '04', 'OCEANIA', 'ISLAS SALOMON', 'HONIARA');
INSERT INTO `proy_pais` VALUES ('892', '05', '05', 'OCEANIA', 'KIRIBATI', 'TARAWA');
INSERT INTO `proy_pais` VALUES ('893', '05', '06', 'OCEANIA', 'MICRONESIA', 'PALIKIR');
INSERT INTO `proy_pais` VALUES ('894', '05', '07', 'OCEANIA', 'NAURU', 'YAREN');
INSERT INTO `proy_pais` VALUES ('895', '05', '08', 'OCEANIA', 'NUEVA ZELANDA', 'WELLINGTON');
INSERT INTO `proy_pais` VALUES ('896', '05', '09', 'OCEANIA', 'PALAOS', 'MELEKEOK');
INSERT INTO `proy_pais` VALUES ('897', '05', '10', 'OCEANIA', 'PAPUA NUEVA GUINEA', 'PORT MORESBY');
INSERT INTO `proy_pais` VALUES ('898', '05', '11', 'OCEANIA', 'SAMOA', 'APIA');
INSERT INTO `proy_pais` VALUES ('899', '05', '12', 'OCEANIA', 'TONGA', 'NUKU ALOFA');
INSERT INTO `proy_pais` VALUES ('900', '05', '13', 'OCEANIA', 'TUVALU', 'FUNAFUTI');
INSERT INTO `proy_pais` VALUES ('901', '05', '14', 'OCEANIA', 'VANUATU', 'PORT VILA');

-- ----------------------------
-- Table structure for `proy_paredes`
-- ----------------------------
DROP TABLE IF EXISTS `proy_paredes`;
CREATE TABLE `proy_paredes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_descripcion` varchar(60) NOT NULL,
  `proy_espesor` decimal(10,2) NOT NULL,
  `proy_densidad` decimal(10,2) NOT NULL,
  `proy_conductividad` decimal(10,2) NOT NULL,
  `proy_calorespecifico` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_paredes
-- ----------------------------
INSERT INTO `proy_paredes` VALUES ('15', 'Bloque Común 100 mm.', '0.10', '1922.00', '0.73', '0.84');
INSERT INTO `proy_paredes` VALUES ('16', 'Bloque Común 200 mm.', '0.20', '1922.00', '0.27', '0.84');
INSERT INTO `proy_paredes` VALUES ('17', 'bloque de arcilla 10cm', '0.10', '159.09', '0.58', '0.10');
INSERT INTO `proy_paredes` VALUES ('18', 'Bloque pared arcilla 10 cm', '0.10', '700.00', '0.58', '0.81');
INSERT INTO `proy_paredes` VALUES ('19', 'Bloque pared arcilla 15 cm', '0.15', '555.56', '0.54', '0.65');
INSERT INTO `proy_paredes` VALUES ('20', 'Bloque pared concreto 10 cm ', '0.15', '1217.52', '0.89', '0.95');
INSERT INTO `proy_paredes` VALUES ('21', 'Bloque pared concreto 15 cm ', '0.15', '1001.07', '10534.00', '0.95');
INSERT INTO `proy_paredes` VALUES ('22', 'Bloque tabelón 8 cm', '0.08', '804.69', '0.77', '0.89');
INSERT INTO `proy_paredes` VALUES ('23', 'Bloque de hormigon (190mmX140mm) ', '0.10', '2000.00', '0.92', '0.92');
INSERT INTO `proy_paredes` VALUES ('24', 'Bloque de hormigon (190mmX190mm)', '0.10', '2000.00', '1015.00', '0.92');
INSERT INTO `proy_paredes` VALUES ('25', 'Ladrillo arcilla 10 cm hueco', '0.01', '2083.33', '0.94', '0.40');
INSERT INTO `proy_paredes` VALUES ('26', 'Ladrillo arcilla 10 cm macizo', '0.01', '4000.00', '0.94', '0.31');
INSERT INTO `proy_paredes` VALUES ('27', 'Panel losa nervada Monoplac', '0.19', '2400.00', '0.01', '0.92');

-- ----------------------------
-- Table structure for `proy_proyecto`
-- ----------------------------
DROP TABLE IF EXISTS `proy_proyecto`;
CREATE TABLE `proy_proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_cod` varchar(14) DEFAULT NULL,
  `proy_desc` varchar(100) DEFAULT NULL,
  `proy_fecha` varchar(10) DEFAULT NULL,
  `proy_codtech` varchar(3) DEFAULT NULL,
  `proy_tech_desc` varchar(20) DEFAULT NULL,
  `proy_estatu` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_proyecto
-- ----------------------------
INSERT INTO `proy_proyecto` VALUES ('73', 'PROY-19-07-001', 'Caso CCPTA', '', '002', 'Techo Plano', 'Abierto');
INSERT INTO `proy_proyecto` VALUES ('74', 'PROY-19-07-002', 'Caso XX', '', '002', 'Techo Plano', 'Abierto');

-- ----------------------------
-- Table structure for `proy_puertas`
-- ----------------------------
DROP TABLE IF EXISTS `proy_puertas`;
CREATE TABLE `proy_puertas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_cont` varchar(3) DEFAULT NULL,
  `proy_pais` varchar(3) DEFAULT NULL,
  `proy_region` varchar(60) DEFAULT NULL,
  `proy_descripcion` varchar(60) NOT NULL,
  `proy_espesor` decimal(10,2) NOT NULL,
  `proy_densidad` decimal(10,2) NOT NULL,
  `proy_conductividad` decimal(10,2) NOT NULL,
  `proy_calorespecifico` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_puertas
-- ----------------------------
INSERT INTO `proy_puertas` VALUES ('10', '02', '37', 'Maracaibo', 'Ninguno', '0.00', '0.00', '0.00', '0.00');
INSERT INTO `proy_puertas` VALUES ('11', '02', '37', 'Maracaibo', 'Madera entamborada Maciza', '0.02', '600.00', '1.32', '0.13');
INSERT INTO `proy_puertas` VALUES ('12', '02', '37', 'Maracaibo', 'Madera entamborada lisa', '0.02', '600.00', '0.80', '1.30');
INSERT INTO `proy_puertas` VALUES ('13', '02', '37', 'Maracaibo', 'Linoleo', '0.02', '1200.00', '0.19', '0.84');
INSERT INTO `proy_puertas` VALUES ('14', '02', '37', 'Maracaibo', 'Madera alamo', '0.02', '380.00', '0.09', '1759.00');
INSERT INTO `proy_puertas` VALUES ('15', '02', '37', 'Maracaibo', 'Madera lingue', '0.02', '640.00', '0.14', '1759.00');
INSERT INTO `proy_puertas` VALUES ('16', '02', '37', 'Maracaibo', 'Madera pino insigne', '0.02', '410.00', '0.10', '2805.00');
INSERT INTO `proy_puertas` VALUES ('17', '02', '37', 'Maracaibo', 'Madera roble', '0.02', '800.00', '0.16', '1759.00');
INSERT INTO `proy_puertas` VALUES ('18', '02', '37', 'Maracaibo', 'Corcho Comprimido', '0.02', '450.00', '0.10', '1.56');
INSERT INTO `proy_puertas` VALUES ('19', '02', '37', 'Maracaibo', 'Tablero contrachapado', '0.02', '800.00', '0.24', '1.60');

-- ----------------------------
-- Table structure for `proy_recubrimiento`
-- ----------------------------
DROP TABLE IF EXISTS `proy_recubrimiento`;
CREATE TABLE `proy_recubrimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_descripcion` varchar(60) NOT NULL,
  `proy_espesor` decimal(10,2) NOT NULL,
  `proy_densidad` decimal(10,2) NOT NULL,
  `proy_conductividad` decimal(10,2) NOT NULL,
  `proy_calorespecifico` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_recubrimiento
-- ----------------------------
INSERT INTO `proy_recubrimiento` VALUES ('27', 'Cemento-arena-capa', '0.02', '1570.00', '0.53', '1.00');
INSERT INTO `proy_recubrimiento` VALUES ('28', 'Corcho comprimido', '0.02', '540.00', '0.09', '2.00');
INSERT INTO `proy_recubrimiento` VALUES ('29', 'Cubierta asfáltica', '0.02', '1100.00', '0.11', '1.51');
INSERT INTO `proy_recubrimiento` VALUES ('30', 'Fibra de vidrio', '0.02', '450.00', '0.06', '0.80');
INSERT INTO `proy_recubrimiento` VALUES ('31', 'Fibras de yeso (enyesadas)', '0.02', '600.00', '0.25', '0.80');
INSERT INTO `proy_recubrimiento` VALUES ('32', 'Frescasa fibra de vidrio', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_recubrimiento` VALUES ('33', 'Friso de cemento y arena', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_recubrimiento` VALUES ('34', 'Friso o yeso 20 mm.', '0.02', '1602.00', '0.73', '0.84');
INSERT INTO `proy_recubrimiento` VALUES ('35', 'Lámina asfáltica', '0.02', '2325.00', '1.15', '1.00');
INSERT INTO `proy_recubrimiento` VALUES ('36', 'Lámina fibrocemento 11mm', '0.02', '1099.00', '0.20', '1.01');
INSERT INTO `proy_recubrimiento` VALUES ('37', 'Lámina galvanizada 4.6mm', '0.02', '7850.00', '60.00', '0.49');
INSERT INTO `proy_recubrimiento` VALUES ('38', 'Manto asfáltico', '0.02', '2325.00', '1.15', '1.01');
INSERT INTO `proy_recubrimiento` VALUES ('39', 'Teja arcilla 15 x 7 cm', '0.08', '1121.00', '1.14', '0.84');
INSERT INTO `proy_recubrimiento` VALUES ('40', 'Teja de arcilla peq den 281', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_recubrimiento` VALUES ('41', 'Yeso corriente', '0.02', '875.00', '0.35', '0.80');
INSERT INTO `proy_recubrimiento` VALUES ('42', 'Yeso-capa', '0.02', '1120.00', '0.38', '1.00');
INSERT INTO `proy_recubrimiento` VALUES ('43', 'Espuma de polietileno', '0.02', '70.00', '0.05', '2.30');
INSERT INTO `proy_recubrimiento` VALUES ('44', 'Espuma de poliuretano', '0.02', '70.00', '0.05', '1.50');
INSERT INTO `proy_recubrimiento` VALUES ('45', 'Espuma de silicona', '0.02', '750.00', '0.12', '1.00');
INSERT INTO `proy_recubrimiento` VALUES ('46', 'Asfalto', '0.02', '2100.00', '0.70', '1.00');
INSERT INTO `proy_recubrimiento` VALUES ('47', 'Mortero de cemento o cal para albañilería', '0.02', '2100.00', '1.80', '1.00');
INSERT INTO `proy_recubrimiento` VALUES ('48', 'Mortero de yeso', '0.02', '1500.00', '0.80', '1.00');
INSERT INTO `proy_recubrimiento` VALUES ('49', 'Teja cerámica-porcelana', '0.02', '2300.00', '1.30', '0.84');
INSERT INTO `proy_recubrimiento` VALUES ('50', 'Teja de arcilla cocida', '0.02', '2000.00', '1.00', '0.80');
INSERT INTO `proy_recubrimiento` VALUES ('51', 'EPS Poliestireno Expandido', '0.02', '30.00', '0.04', '1.00');
INSERT INTO `proy_recubrimiento` VALUES ('52', 'MW Lana mineral', '0.02', '40.00', '0.04', '1.00');

-- ----------------------------
-- Table structure for `proy_simulacion`
-- ----------------------------
DROP TABLE IF EXISTS `proy_simulacion`;
CREATE TABLE `proy_simulacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_cod` varchar(14) NOT NULL,
  `proy_sim_titulo` varchar(60) NOT NULL,
  `proy_sim_ttsim` decimal(10,2) NOT NULL,
  `proy_sim_or_desc` varchar(15) NOT NULL,
  `proy_sim_or_img` varchar(30) NOT NULL,
  `proy_sim_carpeta` varchar(200) NOT NULL,
  `proy_sim_archtec` varchar(20) NOT NULL,
  `proy_sim_archdat1` varchar(20) NOT NULL,
  `proy_sim_archdat2` varchar(20) NOT NULL,
  PRIMARY KEY (`id`,`proy_cod`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_simulacion
-- ----------------------------
INSERT INTO `proy_simulacion` VALUES ('87', 'PROY-19-07-001', 'Caso CCPTA', '1440.00', 'Norte (N)', '../img/Norte.png', 'Caso CCPTA', 'grafico.tec', 'nodales.dat', 'propiedad.dat');
INSERT INTO `proy_simulacion` VALUES ('88', 'PROY-19-07-002', 'Caso CCPTA', '1440.00', 'Norte (N)', '../img/Norte.png', 'Caso CCPTA', 'grafico.tec', 'nodales.dat', 'propiedad.dat');

-- ----------------------------
-- Table structure for `proy_techo`
-- ----------------------------
DROP TABLE IF EXISTS `proy_techo`;
CREATE TABLE `proy_techo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_cod` varchar(10) DEFAULT NULL,
  `proy_cont` varchar(3) DEFAULT NULL,
  `proy_pais` varchar(3) DEFAULT NULL,
  `proy_region` varchar(60) DEFAULT NULL,
  `proy_capas` varchar(3) DEFAULT NULL,
  `proy_descripcion` varchar(2000) DEFAULT NULL,
  `proy_tipo_bloque` varchar(60) DEFAULT NULL,
  `proy_dimensiones` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_techo
-- ----------------------------
INSERT INTO `proy_techo` VALUES ('14', 'TECH-001', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAVIDADES Y 15 CM DE ESPESOR, IMPERMEABILIZADA', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_techo` VALUES ('15', 'TECH-002', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAV Y 15 CM DE ESPESOR, IMPERMEABILIZADA, CON CIELO RASO DE YESO  1 CM.CON ABSORTIVIDAD MENOR  0.5', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_techo` VALUES ('16', 'TECH-003', '02', '37', 'Maracaibo', '3', 'CONCRETO ARMADO 10 CM DE ESPESOR, SIN IMPERMEABILIZANTE.', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('17', 'TECH-004', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAV Y 15 CM DE ESPESOR, IMPERMEABILIZADA, CON CIELO RASO  DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MENOR  0.5', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_techo` VALUES ('18', 'TECH-005', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAV Y 15 CM DE ESPESOR, IMPERMEABILIZADA, CON CIELO RASO DE POLIESTIRENO 2.54 CM. CON ABSORTIVIDAD MENOR 0.5', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_techo` VALUES ('19', 'TECH-006', '02', '37', 'Maracaibo', '5', 'LOSA PLAFACIL 6 CM, IMPERMEABILIZADA, CON 5 CM DE AISLAMIENTO Y 2.5 CM DE CONCRETO LIGERO.', 'PLAFACIL', '6*70');
INSERT INTO `proy_techo` VALUES ('20', 'TECH-007', '02', '37', 'Maracaibo', '5', 'LOSA PLAFACIL 6 CM,  IMPERMEABILIZADO, CON 2.54 CM DE AISLAMIENTO Y 2.5 CM DE CONCRETO LIGERO.', 'PLAFACIL', '6*70');
INSERT INTO `proy_techo` VALUES ('21', 'TECH-008', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAV Y 15 CM DE ESPESOR, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON  5 CM POLIESTIRENO Y 2.5 CM CONCRETO LIGERO.', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_techo` VALUES ('22', 'TECH-009', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAV Y 15 CM DE ESPESOR, IMPERMEABILIZADA, CON 5 CM DE AISLANTE INFERIOR DE POLIESTIRENO.', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_techo` VALUES ('23', 'TECH-010', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAV Y 15 CM DE ESPESOR, IMPERMEABILIZADA, CON 2.5 CM DE AISLANTE INFERIOR  DE POLIESTIRENO.', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_techo` VALUES ('24', 'TECH-011', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAV Y 15 CM DE ESPESOR, IMPERMEABILIZADA,  AISLADO EXTERIORMENTE CON 2.5 CM POLIESTIRENO MAS 2.5 CM CONCRETO LIGERO.', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_techo` VALUES ('25', 'TECH-012', '02', '37', 'Maracaibo', '3', 'LOSACERO, IMPERMEABILIZADO.', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('26', 'TECH-013', '02', '37', 'Maracaibo', '5', 'LOSACERO, IMPERMEABILIZADO, CON AISLANTE EXTERIOR DE 2.54 CM  Y 2.5 CM  DE CONCRETO LIGERO.', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('27', 'TECH-014', '02', '37', 'Maracaibo', '5', 'LOSACERO, IMPERMEABILIZADO, CON CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MENOR  0.5', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('28', 'TECH-015', '02', '37', 'Maracaibo', '5', 'LOSACERO, IMPERMEABILIZADO, CON CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MENOR   0.5', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('29', 'TECH-016', '02', '37', 'Maracaibo', '4', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 801), IMPERMEABILIZADO.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('30', 'TECH-017', '02', '37', 'Maracaibo', '4', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 60), IMPERMEABILIZADO.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('31', 'TECH-018', '02', '37', 'Maracaibo', '4', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 50), IMPERMEABILIZADO.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('32', 'TECH-019', '02', '37', 'Maracaibo', '5', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 50), IMPERMEABILIZADO, CON 2.5 CM DE CAPA DE NIVELACION DE CONCRETO LIGERO.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('33', 'TECH-020', '02', '37', 'Maracaibo', '4', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 802), IMPERMEABILIZADO.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('34', 'TECH-021', '02', '37', 'Maracaibo', '3', 'CONCRETO ARMADO 10 CM DE ESPESOR, IMPERMEABILIZADO.', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('35', 'TECH-022', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA DE ARCILLA 18 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA DE ARCILLA 18H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('36', 'TECH-023', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA DE ARCILLA 23 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA DE ARCILLA 23H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('37', 'TECH-024', '02', '37', 'Maracaibo', '7', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 10 CM, IMPERMEABILIZADA  CON DECLIVE 2.5 CM DE CONCRETO LIGERO, CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD MENOR 0.5', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('38', 'TECH-025', '02', '37', 'Maracaibo', '7', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 8 CM, IMPERMEABILIZADA  CON DECLIVE 2.5 CM DE CONCRETO LIGERO, CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD MENOR  0.5', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('39', 'TECH-026', '02', '37', 'Maracaibo', '7', 'LOSA TABELON DE ARCILLA 8 CM PERFIL 10 CM, IMPERMEABILIZADA  CON DECLIVE 2.5 CM DE CONCRETO LIGERO, CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM.CON ABSORTIVIDAD MENOR  0.5', 'TABELON', '8*20*80');
INSERT INTO `proy_techo` VALUES ('40', 'TECH-027', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 3 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 3H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('41', 'TECH-028', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 23 CAVIDADES Y 15 CM DE ESPESOR, IMPERMEABILIZADA, CON 5 CM DE CONCRETO PESADO.', 'PIÑATA DE ARCILLA 23H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('42', 'TECH-029', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  23 CAV Y ESPESOR DE 15 CM, IMPERMEABILIZADA, CON 2.5 CM DE AISLANTE EXTERIOR  Y 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 23H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('43', 'TECH-030', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 15 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON 5 CM DE CONCRETO PESADO.', 'PIÑATA DE ARCILLA 15H', '20*20*40');
INSERT INTO `proy_techo` VALUES ('44', 'TECH-031', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  15 CAVIDADES Y ESPESOR  20 CM, IMPERMEABILIZADA, CON 2.5 CM AISLANTE EXTERIOR  Y 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 15H', '20*20*40');
INSERT INTO `proy_techo` VALUES ('45', 'TECH-032', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 14 CAVIDADES Y ESPESOR 10 CM, IMPERMEABILIZADA, CON 5 CM DE CONCRETO PESADO.', 'PIÑATA DE ARCILLA 14H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('46', 'TECH-033', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  14 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON POLIESTIRENO DE 2.5 CM  CM MAS 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 14H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('47', 'TECH-034', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  14 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON 5 CM DE CONCRETO PESADO,  CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MENOR 0.5', 'PIÑATA DE ARCILLA 14H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('48', 'TECH-035', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 18 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON 5 CM DE CONCRETO PESADO.', 'PIÑATA DE ARCILLA 18H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('49', 'TECH-036', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  18 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON 2.5 CM AISLANTE EXTERIOR  DE POLIESTIRENO Y 2.5 CM CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 18H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('50', 'TECH-037', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  18 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON 5 CM DE CONCRETO PESADO, CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA DE ARCILLA 18H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('51', 'TECH-038', '02', '37', 'Maracaibo', '5', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 60), IMPERMEABILIZADO, CON 2.5 CM DE CAPA DE NIVELACION DE CONCRETO LIGERO.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('52', 'TECH-039', '02', '37', 'Maracaibo', '5', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 801), IMPERMEABILIZADO, CON 2.5 CM DE CAPA DE NIVELACION DE CONCRETO LIGERO.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('53', 'TECH-040', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 15 CM, IMPERMEABILIZADA.', 'ARCILLA', '15*20*40');
INSERT INTO `proy_techo` VALUES ('54', 'TECH-041', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA  CON BLOQUES DE 15 CM, IMPERMEABILIZADA,  AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO  MAS 2.5 CM DE CONCRETO LIGERO.', 'ARCILLA', '15*20*40');
INSERT INTO `proy_techo` VALUES ('55', 'TECH-042', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 20 CM, IMPERMEABILIZADA.', 'ARCILLA', '20*20*40');
INSERT INTO `proy_techo` VALUES ('56', 'TECH-043', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 20 CM, IMPERMEABILIZADA,  AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'ARCILLA', '20*20*40');
INSERT INTO `proy_techo` VALUES ('57', 'TECH-044', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 25 CM, IMPERMEABILIZADA.', 'ARCILLA', '25*20*40');
INSERT INTO `proy_techo` VALUES ('58', 'TECH-045', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 25 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO  MAS 2.5 CM DE CONCRETO LIGERO.', 'ARCILLA', '25*20*40');
INSERT INTO `proy_techo` VALUES ('59', 'TECH-046', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON 5 CM DE CONCRETO PESADO .', 'PIÑATA ALIGERADA 4H', '10*20*40');
INSERT INTO `proy_techo` VALUES ('60', 'TECH-047', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA,  AISLADO EXTERIORMENTE CON  2.54 CM  DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 4H', '10*20*40');
INSERT INTO `proy_techo` VALUES ('61', 'TECH-048', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, MAS 5 CM DE CONCRETO PESADO, CON CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 4H', '10*20*40');
INSERT INTO `proy_techo` VALUES ('62', 'TECH-049', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES  Y ESPESOR DE 10 CM, IMPERMEABILIZADA, MAS 5 CM DE CONCRETO PESADO, CON CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 4H', '10*20*40');
INSERT INTO `proy_techo` VALUES ('63', 'TECH-050', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, MAS 5 CM DE CONCRETO PESADO.', 'PIÑATA ALIGERADA 4H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('64', 'TECH-051', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA,  AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 4H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('65', 'TECH-052', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, MAS 5 CM DE CONCRETO PESADO, CON CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 4H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('66', 'TECH-053', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PREFABRICADA PÌÑATA ALIGERADA 3 CAVIDADES Y ESPESOR DE 25 CM, IMPERMEABILIZADA, MAS 5 CM DE CONCRETO PESADO.', 'PIÑATA ALIGERADA 3H', '25*20*40');
INSERT INTO `proy_techo` VALUES ('67', 'TECH-054', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 25 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '25*20*40');
INSERT INTO `proy_techo` VALUES ('68', 'TECH-055', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, MAS 5 CM DE CONCRETO PESADO.', 'PIÑATA ALIGERADA 3H', '20*20*40');
INSERT INTO `proy_techo` VALUES ('69', 'TECH-056', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '20*20*40');
INSERT INTO `proy_techo` VALUES ('70', 'TECH-057', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, MAS 5 CM DE CONCRETO PESADO.', 'PIÑATA ALIGERADA 3H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('71', 'TECH-058', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('72', 'TECH-059', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, MAS 5 CM DE CONCRETO PESADO, CON CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 3H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('73', 'TECH-060', '02', '37', 'Maracaibo', '4', 'MACHIHEMBRADO, IMPERMEABILIZADO, AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO,  SIN CONCRETO.', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('74', 'TECH-061', '02', '37', 'Maracaibo', '5', 'MACHIHEMBRADO, IMPERMEABILIZADO, AISLADO EXTERIORMENTE CON 2.5 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO Y CON TEJAS DE ARCILLA ROJA.', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('75', 'TECH-062', '02', '37', 'Maracaibo', '5', 'MACHIHEMBRADO, IMPERMEABILIZADO, AISLADO EXTERIORMENTE  CON 5 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO Y TEJAS DE ARCILLA ROJA.', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('76', 'TECH-063', '02', '37', 'Maracaibo', '5', 'MACHIHEMBRADO, IMPERMEABILIZADO, AISLADO EXTERIORMENTE  CON 2.54 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO Y TEJAS DE ARCILLA ROJA.', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('77', 'TECH-064', '02', '37', 'Maracaibo', '5', 'MACHIHEMBRADO, IMPERMEABILIZADO, CON TEJAS DE ARCILLA ROJA Y CIELO RASO DE POLIESTIRENO 1.59 CM. CON ABSORTIVIDAD MENOR  0.5', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('78', 'TECH-065', '02', '37', 'Maracaibo', '5', 'MACHIHEMBRADO, IMPERMEABILIZADO, CON TEJAS DE ARCILLA ROJA Y CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MENOR  0.5', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('79', 'TECH-066', '02', '37', 'Maracaibo', '5', 'MACHIHEMBRADO, IMPERMEABILIZADO, CON TEJAS DE ARCILLA ROJA Y CIELO RASO DE POLIESTIRENO 2.54 CM. CON ABSORTIVIDAD MENOR  0.5', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('80', 'TECH-067', '02', '37', 'Maracaibo', '3', 'MACHIHEMBRADO, IMPERMEABILIZADO, CON TEJAS ASFALTICA ROJA.', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('81', 'TECH-068', '02', '37', 'Maracaibo', '3', 'MACHIHEMBRADO, IMPERMEABILIZADO, CON TEJAS ASFALTICA ROJA Y  AISLADO  EXTERIORMENTE CON 2.5 CM DE POLIESTIRENO.', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('82', 'TECH-069', '02', '37', 'Maracaibo', '4', 'MACHIHEMBRADO, IMPERMEABILIZADO, CON TEJAS ASFALTICA ROJA, AISLADO EXTERIORMENTE CON 5 CM DE POLIESTIRENO Y 2.5  CM DE CONCRETO LIGERO.', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('83', 'TECH-070', '02', '37', 'Maracaibo', '3', 'MACHIHEMBRADO, IMPERMEABILIZADO, CON TEJAS DE ARCILLA ROJA.', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('84', 'TECH-071', '02', '37', 'Maracaibo', '3', 'MACHIHEMBRADO, IMPERMEABILIZADO, CON TEJAS DE ARCILLA PEQUEÑA.', 'MACHIHEMBRADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('85', 'TECH-072', '02', '37', 'Maracaibo', '2', 'LAMINA ASFALTICA', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('86', 'TECH-073', '02', '37', 'Maracaibo', '3', 'LAMINA ASFALTICA AISLADO CON 5.O8 CM  DE POLIESTIRENO.', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('87', 'TECH-074', '02', '37', 'Maracaibo', '4', 'CONCRETO ARMADO 15 CM DE ESPESOR, IMPERMEABILIZADO CON 2.5 CM CAPA DE NIVELACION DE CONCRETO LIGERO.', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('88', 'TECH-075', '02', '37', 'Maracaibo', '5', 'CONCRETO ARMADO 15 CM DE ESPESOR, IMPERMEABILIZADO CON CIELO RASO DE YESO 1 CM, MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD MENOR  0.5', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('89', 'TECH-076', '02', '37', 'Maracaibo', '4', 'CONCRETO ARMADO 20 CM DE ESPESOR, IMPERMEABILIZADO CON 2.5 CAPA DE NIVELACION DE CONCRETO LIGERO,FRISADO.', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('90', 'TECH-077', '02', '37', 'Maracaibo', '4', 'CONCRETO ARMADO 10 CM DE ESPESOR, IMPERMEABILIZADO CON 2.5 CM  CAPA DE NIVELACION DE CONCRETO LIGERO, FRISADO', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('91', 'TECH-078', '02', '37', 'Maracaibo', '5', 'CONCRETO ARMADO 10 CM DE ESPESOR, IMPERMEABILIZADO CON CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD MENOR  0.5', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('92', 'TECH-079', '02', '37', 'Maracaibo', '5', 'CONCRETO ARMADO 10 CM DE ESPESOR, IMPERMEABILIZADO CON CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MENOR  0.5', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('93', 'TECH-080', '02', '37', 'Maracaibo', '5', 'CONCRETO ARMADO 10 CM DE ESPESOR, IMPERMEABILIZADO CON CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MENOR  0.5', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('94', 'TECH-081', '02', '37', 'Maracaibo', '4', 'CONCRETO ARMADO 10 CM DE ESPESOR, IMPERMEABILIZADO CON TEJAS DE ARCILLA ROJA.', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('95', 'TECH-082', '02', '37', 'Maracaibo', '5', 'CONCRETO ARMADO 10 CM DE ESPESOR, IMPERMEABILIZADO CON 2.54 CM AISLANTE EXTERIOR Y 2.5 CM CONCRETO LIGERO, FRISADO.', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('96', 'TECH-083', '02', '37', 'Maracaibo', '5', 'CONCRETO ARMADO 10 CM DE ESPESOR, IMPERMEABILIZADO CON 2.54 CM AISLANTE EXTERIOR Y 5 CM CONCRETO LIGERO, FRISADO.', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('97', 'TECH-084', '02', '37', 'Maracaibo', '5', 'CONCRETO ARMADO 10 CM DE ESPESOR, IMPERMEABILIZADO CON 5 CM AISLANTE EXTERIOR Y 2.5 CM CONCRETO LIGERO, SIN FRISO.', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('98', 'TECH-085', '02', '37', 'Maracaibo', '3', 'CONCRETO ARMADO 15 CM DE ESPESOR, IMPERMEABILIZADO.', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('99', 'TECH-086', '02', '37', 'Maracaibo', '3', 'CONCRETO ARMADO 15 CM DE ESPESOR, SIN IMPERMEABILIZANTE.', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('100', 'TECH-087', '02', '37', 'Maracaibo', '3', 'CONCRETO ARMADO 20 CM DE ESPESOR, SIN IMPERMEABILIZANTE.', 'CONCRETO ARMADO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('101', 'TECH-088', '02', '37', 'Maracaibo', '4', 'LOSACERO, IMPERMEABILIZADO CON 2.5 CM CAPA DE NIVELACION DE CONCRETO LIGERO.', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('102', 'TECH-089', '02', '37', 'Maracaibo', '5', 'LOSACERO, IMPERMEABILIZADO CON 2.54 DE AISLANTE EXTERIOR Y 5 CM DE CONCRETO LIGERO.', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('103', 'TECH-090', '02', '37', 'Maracaibo', '5', 'LOSACERO, IMPERMEABILIZADO CON 5 CM DE AISLANTE EXTERIOR Y 2.5 CM DE CONCRETO LIGERO.', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('104', 'TECH-091', '02', '37', 'Maracaibo', '5', 'LOSACERO, IMPERMEABILIZADO CON CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD MENOR  0.5', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('105', 'TECH-092', '02', '37', 'Maracaibo', '4', 'LOSACERO, IMPERMEABILIZADO CON TEJAS DE ARCILLA ROJA.', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('106', 'TECH-093', '02', '37', 'Maracaibo', '6', 'LOSACERO, IMPERMEABILIZADO CON CIELO RASO DE YESO 1 CM, MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD MENOR  0.5', 'ACERO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('107', 'TECH-094', '02', '37', 'Maracaibo', '4', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 10CM, IMPERMEABILIZADO CON DECLIVE 2.5 CM DE CONCRETO LIGERO.', 'TABELON', '6* 20 * 80');
INSERT INTO `proy_techo` VALUES ('108', 'TECH-095', '02', '37', 'Maracaibo', '5', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 802), IMPERMEABILIZADO, CON 2.5 CM DE CAPA DE NIVELACION DE CONCRETO LIGERO.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('109', 'TECH-096', '02', '37', 'Maracaibo', '5', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 50), IMPERMEABILIZADO, CON TEJAS DE ARCILLA ROJA.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('110', 'TECH-097', '02', '37', 'Maracaibo', '5', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 60), IMPERMEABILIZADO, CON TEJAS DE ARCILLA ROJA.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('111', 'TECH-098', '02', '37', 'Maracaibo', '5', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 801), IMPERMEABILIZADO, CON TEJAS DE ARCILLA ROJA.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('112', 'TECH-099', '02', '37', 'Maracaibo', '5', 'SANDWICH DE POLIESTIRENO Y CONCRETO (MDOS PSM 802), IMPERMEABILIZADO, CON TEJAS DE ARCILLA ROJA.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('113', 'TECH-101', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  14 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA,  AISLADO EXTERIORMENTE CON  2.5 CM POLIESTIRENO MAS 5 CM CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 14H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('114', 'TECH-102', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 14 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 5 CM POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 14H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('115', 'TECH-103', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  18 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.5 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 18H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('116', 'TECH-104', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  18 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 5 CM DE POLIESTIRENO MAS 2.5 CM  DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 18H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('117', 'TECH-105', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  23 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.5 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 23H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('118', 'TECH-106', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  23 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 5 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 23H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('119', 'TECH-107', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  15 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.5 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 15H', '20*20*50');
INSERT INTO `proy_techo` VALUES ('120', 'TECH-108', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  15 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 5 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 15H', '20*20*50');
INSERT INTO `proy_techo` VALUES ('121', 'TECH-109', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.54 CM  DE POLIESTIRENO MAS 2.5 CM  DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('122', 'TECH-110', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR 10 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 5 CM DE POLIESTIRENO MAS 2.5 CM  DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('123', 'TECH-111', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA,  CON 2.5 CM CAPA  NIVELACION DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('124', 'TECH-112', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, CON CIELO RASO FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 3H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('125', 'TECH-113', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 3H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('126', 'TECH-114', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, CON TEJAS  DE ARCILLA ROJA.', 'PIÑATA ALIGERADA 3H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('127', 'TECH-115', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA,  AISLADO EXTERIORMENTE CON 2.54 CM  DE POLIESTIRENO MAS 2.5 CM DE  CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '20*20*50');
INSERT INTO `proy_techo` VALUES ('128', 'TECH-116', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON 2.5 CM DE CAPA DE NIVELACION DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '20*20*50');
INSERT INTO `proy_techo` VALUES ('129', 'TECH-117', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 3H', '20*20*50');
INSERT INTO `proy_techo` VALUES ('130', 'TECH-118', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON CIELO RASO  DE YESO 1 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 3H', '20*20*50');
INSERT INTO `proy_techo` VALUES ('131', 'TECH-119', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON  TEJAS DE ARCILLA ROJA.', 'PIÑATA ALIGERADA 3H', '20*20*50');
INSERT INTO `proy_techo` VALUES ('132', 'TECH-120', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON  CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 3H', '20*20*50');
INSERT INTO `proy_techo` VALUES ('133', 'TECH-121', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA PÌÑATA ALIGERADA 3 CAVIDADES Y ESPESOR DE 25 CM, IMPERMEABILIZADA, CON 2.5 CM DE CAPA DE  NIVELACION DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '25*20*40');
INSERT INTO `proy_techo` VALUES ('134', 'TECH-122', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PÌÑATA ALIGERADA 3 CAVIDADES Y ESPESOR DE 25 CM, IMPERMEABILIZADA, CON CIELO RASO DE FIBRA DE VIDRIO 1.5 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 3H', '25*20*40');
INSERT INTO `proy_techo` VALUES ('135', 'TECH-123', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PÌÑATA ALIGERADA 3 CAVIDADES Y ESPESOR DE 25 CM, IMPERMEABILIZADA, CON  CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 3H', '25*20*40');
INSERT INTO `proy_techo` VALUES ('136', 'TECH-124', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PÌÑATA ALIGERADA 3 CAVIDADES Y ESPESOR DE 25 CM, IMPERMEABILIZADA, CON  CIELO RASO  DE YESO 1 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 3H', '25*20*40');
INSERT INTO `proy_techo` VALUES ('137', 'TECH-125', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA ALIGERADA DE 3 CAVIDADES Y ESPESOR DE 25 CM, IMPERMEABILIZADA,  CON TEJAS DE ARCILLA ROJA.', 'PIÑATA ALIGERADA 3H', '25*20*40');
INSERT INTO `proy_techo` VALUES ('138', 'TECH-126', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PÌÑATA ALIGERADA 3 CAVIDADES Y ESPESOR DE 25 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '25*20*50');
INSERT INTO `proy_techo` VALUES ('139', 'TECH-127', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PÌÑATA ALIGERADA 3 CAVIDADES Y ESPESOR DE 25 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE  CON 2.54 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '25*20*50');
INSERT INTO `proy_techo` VALUES ('140', 'TECH-128', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PÌÑATA ALIGERADA 3 CAVIDADES Y ESPESOR DE 25 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 5 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 3H', '25*20*50');
INSERT INTO `proy_techo` VALUES ('141', 'TECH-129', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 4H', '10*20*40');
INSERT INTO `proy_techo` VALUES ('142', 'TECH-130', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 5 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 4H', '10*20*40');
INSERT INTO `proy_techo` VALUES ('143', 'TECH-131', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 4H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('144', 'TECH-132', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 5 CM DE POLIESTIRENO MAS 2.5 CM  DE CONCRETO LIGERO', 'PIÑATA ALIGERADA 4H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('145', 'TECH-133', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON TEJAS DE ARCILLA ROJA.', 'PIÑATA ALIGERADA 4H', '10*20*40');
INSERT INTO `proy_techo` VALUES ('146', 'TECH-134', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON 2.5 CM DE CAPA DE NIVELACION DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 4H', '10*20*40');
INSERT INTO `proy_techo` VALUES ('147', 'TECH-135', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON  CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 4H', '10*20*40');
INSERT INTO `proy_techo` VALUES ('148', 'TECH-136', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON  CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 4H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('149', 'TECH-137', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON  CIELO RASO  DE YESO 1 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA ALIGERADA 4H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('150', 'TECH-138', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON 2.5 CM DE CAPA DE NIVELACION DE CONCRETO LIGERO.', 'PIÑATA ALIGERADA 4H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('151', 'TECH-139', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON  TEJAS DE ARCILLA ROJA.', 'PIÑATA ALIGERADA 4H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('152', 'TECH-140', '02', '37', 'Maracaibo', '6', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 10 CM, IMPERMEABILIZADO CON DECLIVE 2.5 CM CONCRETO LIGERO, CON CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MENOR  0.5', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('153', 'TECH-141', '02', '37', 'Maracaibo', '6', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 10CM, IMPERMEABILIZADO CON DECLIVE 2.5 CM DE CONCRETO LIGERO, CON CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MENOR  0.5', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('154', 'TECH-142', '02', '37', 'Maracaibo', '6', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 10CM, IMPERMEABILIZADO CON DECLIVE 2.5 CM DE CONCRETO LIGERO, CON CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD MENOR  0.5', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('155', 'TECH-143', '02', '37', 'Maracaibo', '4', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 10 CM, IM`PERMEABILIZADO CON TEJAS DE ARCILLA ROJA.', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('156', 'TECH-144', '02', '37', 'Maracaibo', '5', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 10 CM, IMPERMEABILIZADO, CON AISLANTE EXTERIOR 2.54 CM MAS 2.5 CM DE CONCRETO LIGERO.', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('157', 'TECH-145', '02', '37', 'Maracaibo', '5', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 10 CM, IMPERMEABILIZADO, CON AISLANTE EXTERIOR 5 CM MAS 2.5 CM DE CONCRETO LIGERO.', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('158', 'TECH-146', '02', '37', 'Maracaibo', '5', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 10 CM, IMPERMEABILIZADO, CON AISLANTE EXTERIOR 2.5 CM MAS 5 CM DE CONCRETO LIGERO.', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('159', 'TECH-147', '02', '37', 'Maracaibo', '4', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 8 CM, IMPERMEABILIZADO CON DECLIVE 2.5 CM DE CONCRETO LIGERO.', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('160', 'TECH-148', '02', '37', 'Maracaibo', '6', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 8 CM, IMPERMEABILIZADO CON DECLIVE 2.5 CM DE CONCRETO LIGERO, CON CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MENOR  0.5', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('161', 'TECH-149', '02', '37', 'Maracaibo', '6', 'LOSA TABELON DE ARCILLA 6 CM  PERFIL 8 CM, IMPERMEABILIZADO CON DECLIVE 2.5 CM DE CONCRETO LIGERO, CON CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MENOR  0.5', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('162', 'TECH-150', '02', '37', 'Maracaibo', '6', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 8 CM, IMPERMEABILIZADO CON DECLIVE 2.5 CM DE CONCRETO LIGERO, CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD MENOR  0.5', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('163', 'TECH-151', '02', '37', 'Maracaibo', '4', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 8 CM, IMPERMEABILIZADO CON TEJAS DE ARCILLA ROJA.', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('164', 'TECH-152', '02', '37', 'Maracaibo', '5', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 8 CM, IMPERMEABILIZADO, CON AISLANTE EXTERIOR 2.54 CM MAS 2.5 CM DE CONCRETO LIGERO.', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('165', 'TECH-153', '02', '37', 'Maracaibo', '5', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 8 CM, IMPERMEABILIZADO, CON AISLANTE EXTERIOR 5 CM MAS 2.5 CM DE CONCRETO LIGERO.', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('166', 'TECH-154', '02', '37', 'Maracaibo', '5', 'LOSA TABELON DE ARCILLA 6 CM PERFIL 8 CM, IMPERMEABILIZADO, CON AISLANTE EXTERIOR 2.54 CM MAS 5 CM DE CONCRETO LIGERO.', 'TABELON', '6*20*80');
INSERT INTO `proy_techo` VALUES ('167', 'TECH-155', '02', '37', 'Maracaibo', '4', 'LOSA TABELON DE ARCILLA 8 CM PERFIL 10 CM, IMPERMEABILIZADO CON DECLIVE 2.5 CM DE CONCRETO LIGERO.', 'TABELON', '8*20*80');
INSERT INTO `proy_techo` VALUES ('168', 'TECH-156', '02', '37', 'Maracaibo', '6', 'LOSA TABELON DE ARCILLA 8 CM PERFIL 10 CM, IMPERMEABILIZADO, CON DECLIVE 2.5 CM CONCRETO LIGERO, CIELO RASO DE FIBRA DE VIDRIO. CON ABSORTIVIDAD MENOR  0.5', 'TABELON', '8*20*80');
INSERT INTO `proy_techo` VALUES ('169', 'TECH-157', '02', '37', 'Maracaibo', '6', 'LOSA TABELON DE ARCILLA 8 CM PERFIL 10CM, IMPERMEABILIZADO, CON DECLIVE 2.5 CM DE CONCRETO LIGERO, CIELO RASO DE MADERA O.95 CM. CON ABSORTIVIDAD MENOR  0.5', 'TABELON', '8*20*80');
INSERT INTO `proy_techo` VALUES ('170', 'TECH-158', '02', '37', 'Maracaibo', '6', 'LOSA TABELON DE ARCILLA 8 CM PERFIL 10 CM, IMPERMEABILIZADO CON DECLIVE 2.5 CM CONCRETO LIGERO, CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD MENOR  0.5', 'TABELON', '8*20*80');
INSERT INTO `proy_techo` VALUES ('171', 'TECH-159', '02', '37', 'Maracaibo', '4', 'LOSA TABELON DE ARCILLA 8 CM PERFIL 10 CM, IMPERMEABILIZADO CON TEJAS DE ARCILLA ROJA.', 'TABELON', '8*20*80');
INSERT INTO `proy_techo` VALUES ('172', 'TECH-160', '02', '37', 'Maracaibo', '5', 'LOSA TABELON DE ARCILLA 8 CM PERFIL 10 CM, IMPERMEABILIZADO, CON AISLANTE EXTERIOR 2.54 CM MAS 2.5 CM DE CONCRETO LIGERO.', 'TABELON', '8*20*80');
INSERT INTO `proy_techo` VALUES ('173', 'TECH-161', '02', '37', 'Maracaibo', '5', 'LOSA TABELON DE ARCILLA 8 CM PERFIL 10 CM, IMPERMEABILIZADO, CON AISLANTE EXTERIOR 5 CM MAS 2.5 CM DE CONCRETO LIGERO.', 'TABELON', '8*20*80');
INSERT INTO `proy_techo` VALUES ('174', 'TECH-162', '02', '37', 'Maracaibo', '5', 'LOSA TABELON DE ARCILLA 8 CM PERFIL 10 CM, IMPERMEABILIZADO, CON AISLANTE EXTERIOR 2.54 CM MAS 5 CM DE CONCRETO LIGERO.', 'TABELON', '8*20*80');
INSERT INTO `proy_techo` VALUES ('175', 'TECH-163', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA  14 CAVIDADES Y ESPESOR DE 10 CM, CON 5 CM DE CONCRETO PESADO,  CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MAYOR  O IGUAL 0.5', 'PIÑATA DE ARCILLA 14H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('176', 'TECH-164', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 14 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON 5 CM DE CONCRETO PESADO,  CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'PIÑATA DE ARCILLA 14H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('177', 'TECH-165', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 14 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON TEJAS DE ARCILLA ROJA.', 'PIÑATA DE ARCILLA 14H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('178', 'TECH-166', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 14 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON 2.5 CM  CAPA DE NIVELACION DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 14H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('179', 'TECH-167', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 15 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON 2.5 CM CAPA DE NIVELACION DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 15H', '20*20*40');
INSERT INTO `proy_techo` VALUES ('180', 'TECH-168', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 15 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON 5 CM DE CONCRETO PESADO, CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MAYOR 0.5', 'PIÑATA DE ARCILLA 15H', '20*20*40');
INSERT INTO `proy_techo` VALUES ('181', 'TECH-169', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 15 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON 5 CM DE CONCRETO PESADO,  CIELO RASO DE MADERA 0.95 CM. CON ASORTIVIDAD MAYOR  O IGUAL 0.5', 'PIÑATA DE ARCILLA 15H', '20*20*40');
INSERT INTO `proy_techo` VALUES ('182', 'TECH-170', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 15 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON 5 CM DE CONCRETO PESADO, CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD MAYOR  O IGUAL 0.5', 'PIÑATA DE ARCILLA 15H', '20*20*40');
INSERT INTO `proy_techo` VALUES ('183', 'TECH-171', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 15 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA,  CON TEJAS DE ARCILLA ROJA.', 'PIÑATA DE ARCILLA 15H', '20*20*40');
INSERT INTO `proy_techo` VALUES ('184', 'TECH-172', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 18 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON 2.5 CM  CAPA DE NIVELACION DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 18H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('185', 'TECH-173', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 18 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD MENOR 0.5', 'PIÑATA DE ARCILLA 18H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('186', 'TECH-174', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 18 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD MENOR  0.5', 'PIÑATA DE ARCILLA 18H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('187', 'TECH-175', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 18 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON TEJAS DE ARCILLA ROJA.', 'PIÑATA DE ARCILLA 18H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('188', 'TECH-176', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 23 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, CON 2.5 CM DE CAPA  NIVELACION DE CONCRETO LIGERO.', 'PIÑATA DE ARCILLA 23H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('189', 'TECH-177', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 23 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, CON CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'PIÑATA DE ARCILLA 23H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('190', 'TECH-178', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 23 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, CON CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'PIÑATA DE ARCILLA 23H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('191', 'TECH-179', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 23 CAVIDADES Y ESPESOR DE 15 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM.CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'PIÑATA DE ARCILLA 23H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('192', 'TECH-180', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PREFABRICADA  PIÑATA DE ARCILLA 23 CAVIDADES Y ESPESOR DE15 CM, IMPERMEABILIZADA,  CON TEJAS DE ARCILLA ROJA.', 'PIÑATA DE ARCILLA 23H', '15*20*50');
INSERT INTO `proy_techo` VALUES ('193', 'TECH-181', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAVIDADES Y 20 CM DE ESPESOR, IMPERMEABILIZADA, CON 2.5 CM CAPA DE NIVELACION DE CONCRETO LIGERO.', 'ARCILLA 9H', '20*20*30');
INSERT INTO `proy_techo` VALUES ('194', 'TECH-182', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAVIDADES Y 20 CM DE ESPESOR, IMPERMEABILIZADA, CON CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'ARCILLA 9H', '20*20*30');
INSERT INTO `proy_techo` VALUES ('195', 'TECH-183', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAVIDADES Y 20 CM DE ESPESOR, IMPERMEABILIZADA, CON TEJAS DE ARCILLA ROJA.', 'ARCILLA 9H', '20*20*30');
INSERT INTO `proy_techo` VALUES ('196', 'TECH-184', '02', '37', 'Maracaibo', '7', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAVIDADES Y 20 CM DE ESPESOR, IMPERMEABILIZADA, CON TEJAS DE ARCILLA ROJA  Y CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD MAYOR  O IGUAL 0.5', 'ARCILLA 9H', '20*20*30');
INSERT INTO `proy_techo` VALUES ('197', 'TECH-185', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAV Y 20 CM DE ESPESOR, IMPERMEABILIZADA, CON 2.5 CM DE AISLANTE EXTERIOR MAS  5 CM DE CONCRETO LIGERO.', 'ARCILLA 9H', '20*20*30');
INSERT INTO `proy_techo` VALUES ('198', 'TECH-186', '02', '37', 'Maracaibo', '4', 'LOSA PLAFACIL 6 CM, IMPERMEABILIZADA, CON 2.5 CM DE CONCRETO LIGERO.', 'PLAFACIL', '6*70');
INSERT INTO `proy_techo` VALUES ('199', 'TECH-187', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA DE ARCILLA 14 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'PIÑATA DE ARCILLA 14H', '10*20*30');
INSERT INTO `proy_techo` VALUES ('200', 'TECH-188', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA DE ARCILLA 15 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'PIÑATA DE ARCILLA 15H', '20*20*30');
INSERT INTO `proy_techo` VALUES ('201', 'TECH-189', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA  DE ARCILLA CON BLOQUES DE 15 CM, IMPERMEABILIZADA, CON CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'ARCILLA', '15*20*30');
INSERT INTO `proy_techo` VALUES ('202', 'TECH-190', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA  DE ARCILLA CON BLOQUES 15 CM, IMPERMEABILIZADA, CON CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD MAYOR  O IGUAL 0.5', 'ARCILLA', '15*20*30');
INSERT INTO `proy_techo` VALUES ('203', 'TECH-191', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA  DE ARCILLA CON BLOQUES DE 15 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'ARCILLA', '15*20*30');
INSERT INTO `proy_techo` VALUES ('204', 'TECH-192', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 15 CM, IMPERMEABILIZADA, CON 2.5 CM DE CAPA DE  NIVELACION DE CONCRETO LIGERO.', 'ARCILLA', '15*20*30');
INSERT INTO `proy_techo` VALUES ('205', 'TECH-193', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 15 CM, IMPERMEABILIZADA, CON TEJAS DE ARCILLA ROJA.', 'ARCILLA', '15*20*30');
INSERT INTO `proy_techo` VALUES ('206', 'TECH-194', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 15 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 5 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'ARCILLA', '15*20*30');
INSERT INTO `proy_techo` VALUES ('207', 'TECH-195', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 15 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO.', 'ARCILLA', '15*20*30');
INSERT INTO `proy_techo` VALUES ('208', 'TECH-196', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 20 CM, IMPERMEABILIZADA, CON 2.5 CM DE CAPA DE NIVELACION DE CONCRETO LIGERO.', 'ARCILLA', '20*20*30');
INSERT INTO `proy_techo` VALUES ('209', 'TECH-197', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 20 CM, IMPERMEABILIZADA, CON CIELO RASO DE FIBRA DE  VIDRIO 1.59 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'ARCILLA', '20*20*30');
INSERT INTO `proy_techo` VALUES ('210', 'TECH-198', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 20 CM, IMPERMEABILIZADA, CON CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'ARCILLA', '20*20*30');
INSERT INTO `proy_techo` VALUES ('211', 'TECH-199', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 20 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'ARCILLA', '20*20*30');
INSERT INTO `proy_techo` VALUES ('212', 'TECH-200', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 20 CM, IMPERMEABILIZADA, CON TEJAS DE ARCILLA ROJA.', 'ARCILLA', '20*20*30');
INSERT INTO `proy_techo` VALUES ('213', 'TECH-201', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA  DE ARCILLA CON BLOQUES DE 20 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO.', 'ARCILLA', '20*20*30');
INSERT INTO `proy_techo` VALUES ('214', 'TECH-202', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 20 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 5 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'ARCILLA', '20*20*30');
INSERT INTO `proy_techo` VALUES ('215', 'TECH-203', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 25 CM, IMPERMEABILIZADA, CON CIELO RASO DE FIBRA DE VIDRIO 1.59 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'ARCILLA', '25*20*30');
INSERT INTO `proy_techo` VALUES ('216', 'TECH-204', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 25 CM, IMPERMEABILIZADA, CON CIELO RASO DE MADERA 0.95 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'ARCILLA', '25*20*30');
INSERT INTO `proy_techo` VALUES ('217', 'TECH-205', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 25 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'ARCILLA', '25*20*30');
INSERT INTO `proy_techo` VALUES ('218', 'TECH-206', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 25 CM, IMPERMEABILIZADA, CON TEJAS DE ARCILLA ROJA.', 'ARCILLA', '25*20*30');
INSERT INTO `proy_techo` VALUES ('219', 'TECH-207', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 25 CM, IMPERMEABILIZADA, CON 2.5 CM DE CAPA DE NIVELACION DE CONCRETO PESADO.', 'ARCILLA', '25*20*30');
INSERT INTO `proy_techo` VALUES ('220', 'TECH-208', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 25 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 2.54 CM DE POLIESTIRENO MAS 5 CM DE CONCRETO LIGERO.', 'ARCILLA', '25*20*30');
INSERT INTO `proy_techo` VALUES ('221', 'TECH-209', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 25 CM, IMPERMEABILIZADA, AISLADO EXTERIORMENTE CON 5 CM DE POLIESTIRENO MAS 2.5 CM DE CONCRETO LIGERO.', 'ARCILLA', '25*20*30');
INSERT INTO `proy_techo` VALUES ('222', 'TECH-210', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAVIDADES Y 15 CM DE ESPESOR, IMPERMEABILIZADA CON CIELO RASO DE YESO 1 CM, MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_techo` VALUES ('223', 'TECH-211', '02', '37', 'Maracaibo', '7', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAVIDADES Y 15 CM DE ESPESOR, IMPERMEABILIZADA CON TEJAS DE ARCILLA ROJA, CIELO RASO DE YESO 1 CM, MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD MAYOR  O IGUAL 0.5', 'ARCILLA 9H', '15*20*30');
INSERT INTO `proy_techo` VALUES ('224', 'TECH-212', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 3 CAVIDADES Y ESPESOR DE 20 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'PIÑATA ALIGERADA 3H', '20*20*50');
INSERT INTO `proy_techo` VALUES ('225', 'TECH-213', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 3 CAVIDADES Y ESPESOR DE 25 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'PIÑATA ALIGERADA 3H', '25*20*40');
INSERT INTO `proy_techo` VALUES ('226', 'TECH-214', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'PIÑATA ALIGERADA 4H', '10*20*50');
INSERT INTO `proy_techo` VALUES ('227', 'TECH-215', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PREFABRICADA PIÑATA ALIGERADA 4 CAVIDADES Y ESPESOR DE 10 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'PIÑATA ALIGERADA 4H', '10*20*40');
INSERT INTO `proy_techo` VALUES ('228', 'TECH-216', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 15 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD MAYOR  O IGUAL 0.5', 'ARCILLA', '15*20*40');
INSERT INTO `proy_techo` VALUES ('229', 'TECH-217', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 20 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD  MAYOR  O IGUAL 0.5', 'ARCILLA', '20*20*40');
INSERT INTO `proy_techo` VALUES ('230', 'TECH-218', '02', '37', 'Maracaibo', '6', 'LOSA NERVADA PLATABANDA DE ARCILLA CON BLOQUES DE 25 CM, IMPERMEABILIZADA, CON CIELO RASO DE YESO 1 CM MAS FRESCASA 8.9 CM. CON ABSORTIVIDAD MAYOR  O IGUAL 0.5', 'ARCILLA', '25*20*40');
INSERT INTO `proy_techo` VALUES ('231', 'TECH-228', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PLATABANDA CON BLOQUES DE POLIESTIRENO.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('232', 'TECH-229', '02', '37', 'Maracaibo', '4', 'LOSA NERVADA PLATABANDA CON BLOQUES DE POLIESTIRENO.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('233', 'TECH-230', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PLATABANDA CON BLOQUES DE POLIESTIRENO CON TEJA DE ARCILLA GRANDE.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('234', 'TECH-231', '02', '37', 'Maracaibo', '2', 'FIBROCEMENTO', 'FIBROCEMENTO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('235', 'TECH-232', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PLATABANDA CON BLOQUES DE POLIESTIRENO CON TEJA DE ARCILLA GRANDE.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('236', 'TECH-233', '02', '37', 'Maracaibo', '2', 'FIBROCEMENTO', 'FIBROCEMENTO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('237', 'TECH-234', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PLATABANDA CON BLOQUES DE POLIESTIRENO CON 2.5 CM DE CAPA DE NIVELACION', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('238', 'TECH-235', '02', '37', 'Maracaibo', '5', 'LOSA NERVADA PLATABANDA CON BLOQUES DE POLIESTIRENO CON NIVELACION.', 'POLIESTIRENO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('239', 'TECH-237', '02', '37', 'Maracaibo', '4', 'FIBROCEMENTO', 'FIBROCEMENTO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('240', 'TECH-238', '02', '37', 'Maracaibo', '3', 'FIBROCEMENTO', 'FIBROCEMENTO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('241', 'TECH-239', '02', '37', 'Maracaibo', '3', 'FIBROCEMENTO', 'FIBROCEMENTO', 'SIN DIMENSIONES');
INSERT INTO `proy_techo` VALUES ('242', 'TECH-240', '02', '37', 'Maracaibo', '3', 'FIBROCEMENTO', 'FIBROCEMENTO', 'SIN DIMENSIONES');

-- ----------------------------
-- Table structure for `proy_techo_capas`
-- ----------------------------
DROP TABLE IF EXISTS `proy_techo_capas`;
CREATE TABLE `proy_techo_capas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_cod_capa` varchar(10) DEFAULT NULL,
  `proy_cont` varchar(3) DEFAULT NULL,
  `proy_pais` varchar(3) DEFAULT NULL,
  `proy_region` varchar(60) DEFAULT NULL,
  `proy_descripcion` varchar(2000) DEFAULT NULL,
  `proy_espesor` decimal(10,2) DEFAULT NULL,
  `proy_densidad` decimal(10,2) DEFAULT NULL,
  `proy_conductividad` decimal(10,2) DEFAULT NULL,
  `proy_calorespecifico` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1198 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_techo_capas
-- ----------------------------
INSERT INTO `proy_techo_capas` VALUES ('14', 'TECH-001', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('15', 'TECH-001', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('16', 'TECH-001', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.15', '991.67', '0.84', '0.70');
INSERT INTO `proy_techo_capas` VALUES ('17', 'TECH-001', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('18', 'TECH-002', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('19', 'TECH-002', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('20', 'TECH-002', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.15', '991.67', '0.84', '0.70');
INSERT INTO `proy_techo_capas` VALUES ('21', 'TECH-002', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('22', 'TECH-002', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('23', 'TECH-002', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('24', 'TECH-003', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('25', 'TECH-003', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.10', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('26', 'TECH-003', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('27', 'TECH-004', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('28', 'TECH-004', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('29', 'TECH-004', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.15', '991.67', '0.84', '0.70');
INSERT INTO `proy_techo_capas` VALUES ('30', 'TECH-004', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('31', 'TECH-004', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('32', 'TECH-004', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('33', 'TECH-005', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('34', 'TECH-005', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('35', 'TECH-005', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.15', '991.67', '0.84', '0.70');
INSERT INTO `proy_techo_capas` VALUES ('36', 'TECH-005', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('37', 'TECH-005', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('38', 'TECH-005', '02', '37', 'Maracaibo', 'CIELO RASO DE POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('39', 'TECH-006', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('40', 'TECH-006', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('41', 'TECH-006', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('42', 'TECH-006', '02', '37', 'Maracaibo', 'LOSA (CP + PLAFACIL)', '0.06', '964.47', '0.69', '0.97');
INSERT INTO `proy_techo_capas` VALUES ('43', 'TECH-006', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('44', 'TECH-007', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('45', 'TECH-007', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('46', 'TECH-007', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('47', 'TECH-007', '02', '37', 'Maracaibo', 'LOSA (CP + PLAFACIL)', '0.06', '964.47', '0.69', '0.97');
INSERT INTO `proy_techo_capas` VALUES ('48', 'TECH-007', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('49', 'TECH-008', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('50', 'TECH-008', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('51', 'TECH-008', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('52', 'TECH-008', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('53', 'TECH-008', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.15', '991.67', '0.84', '0.70');
INSERT INTO `proy_techo_capas` VALUES ('54', 'TECH-008', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('55', 'TECH-009', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('56', 'TECH-009', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('57', 'TECH-009', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.15', '991.67', '0.84', '0.70');
INSERT INTO `proy_techo_capas` VALUES ('58', 'TECH-009', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('59', 'TECH-009', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('60', 'TECH-010', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('61', 'TECH-010', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('62', 'TECH-010', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.15', '991.67', '0.84', '0.70');
INSERT INTO `proy_techo_capas` VALUES ('63', 'TECH-010', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('64', 'TECH-010', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('65', 'TECH-011', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('66', 'TECH-011', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('67', 'TECH-011', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('68', 'TECH-011', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('69', 'TECH-011', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.15', '991.67', '0.84', '0.70');
INSERT INTO `proy_techo_capas` VALUES ('70', 'TECH-011', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('71', 'TECH-012', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('72', 'TECH-012', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.08', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('73', 'TECH-012', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('74', 'TECH-013', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('75', 'TECH-013', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('76', 'TECH-013', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('77', 'TECH-013', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.08', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('78', 'TECH-013', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('79', 'TECH-014', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('80', 'TECH-014', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.08', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('81', 'TECH-014', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('82', 'TECH-014', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('83', 'TECH-014', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('84', 'TECH-015', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('85', 'TECH-015', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.08', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('86', 'TECH-015', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('87', 'TECH-015', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('88', 'TECH-015', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('89', 'TECH-016', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('90', 'TECH-016', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('91', 'TECH-016', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.08', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('92', 'TECH-016', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('93', 'TECH-017', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('94', 'TECH-017', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('95', 'TECH-017', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.06', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('96', 'TECH-017', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('97', 'TECH-018', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('98', 'TECH-018', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('99', 'TECH-018', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('100', 'TECH-018', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('101', 'TECH-019', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('102', 'TECH-019', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('103', 'TECH-019', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('104', 'TECH-019', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('105', 'TECH-019', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('106', 'TECH-020', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('107', 'TECH-020', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('108', 'TECH-020', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.08', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('109', 'TECH-020', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('110', 'TECH-021', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('111', 'TECH-021', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.10', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('112', 'TECH-021', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('113', 'TECH-022', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('114', 'TECH-022', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('115', 'TECH-022', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA,18H)', '0.10', '970.10', '0.79', '0.88');
INSERT INTO `proy_techo_capas` VALUES ('116', 'TECH-022', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('117', 'TECH-022', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('118', 'TECH-022', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('119', 'TECH-023', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('120', 'TECH-023', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('121', 'TECH-023', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 23H)', '0.15', '849.20', '0.82', '0.98');
INSERT INTO `proy_techo_capas` VALUES ('122', 'TECH-023', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('123', 'TECH-023', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('124', 'TECH-023', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('125', 'TECH-024', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('126', 'TECH-024', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('127', 'TECH-024', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('128', 'TECH-024', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3807.57', '1.14', '0.32');
INSERT INTO `proy_techo_capas` VALUES ('129', 'TECH-024', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('130', 'TECH-024', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('131', 'TECH-024', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('132', 'TECH-025', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('133', 'TECH-025', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('134', 'TECH-025', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('135', 'TECH-025', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3593.08', '1.06', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('136', 'TECH-025', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('137', 'TECH-025', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('138', 'TECH-025', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('139', 'TECH-026', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('140', 'TECH-026', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('141', 'TECH-026', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('142', 'TECH-026', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.08', '3255.07', '1.15', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('143', 'TECH-026', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('144', 'TECH-026', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('145', 'TECH-026', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('146', 'TECH-027', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('147', 'TECH-027', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('148', 'TECH-027', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.15', '821.51', '0.92', '0.72');
INSERT INTO `proy_techo_capas` VALUES ('149', 'TECH-027', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('150', 'TECH-027', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('151', 'TECH-027', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('152', 'TECH-028', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('153', 'TECH-028', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('154', 'TECH-028', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 23H)', '0.15', '849.20', '0.82', '0.98');
INSERT INTO `proy_techo_capas` VALUES ('155', 'TECH-028', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('156', 'TECH-029', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('157', 'TECH-029', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('158', 'TECH-029', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('159', 'TECH-029', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('160', 'TECH-029', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 23H)', '0.15', '849.20', '0.82', '0.98');
INSERT INTO `proy_techo_capas` VALUES ('161', 'TECH-029', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('162', 'TECH-030', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('163', 'TECH-030', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('164', 'TECH-030', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 15H)', '0.20', '939.83', '0.83', '0.69');
INSERT INTO `proy_techo_capas` VALUES ('165', 'TECH-030', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('166', 'TECH-031', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('167', 'TECH-031', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('168', 'TECH-031', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('169', 'TECH-031', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('170', 'TECH-031', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 15H)', '0.20', '939.83', '0.83', '0.69');
INSERT INTO `proy_techo_capas` VALUES ('171', 'TECH-031', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('172', 'TECH-032', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('173', 'TECH-032', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('174', 'TECH-032', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 14H)', '0.10', '970.10', '0.82', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('175', 'TECH-032', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('176', 'TECH-033', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('177', 'TECH-033', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('178', 'TECH-033', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('179', 'TECH-033', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('180', 'TECH-033', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 14H)', '0.10', '970.10', '0.82', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('181', 'TECH-033', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('182', 'TECH-034', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('183', 'TECH-034', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('184', 'TECH-034', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 14H)', '0.10', '970.10', '0.82', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('185', 'TECH-034', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('186', 'TECH-034', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('187', 'TECH-034', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('188', 'TECH-035', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('189', 'TECH-035', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('190', 'TECH-035', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA,18H)', '0.10', '970.10', '0.79', '0.88');
INSERT INTO `proy_techo_capas` VALUES ('191', 'TECH-035', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('192', 'TECH-036', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('193', 'TECH-036', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('194', 'TECH-036', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('195', 'TECH-036', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('196', 'TECH-036', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA,18H)', '0.10', '970.10', '0.79', '0.88');
INSERT INTO `proy_techo_capas` VALUES ('197', 'TECH-036', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('198', 'TECH-037', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('199', 'TECH-037', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('200', 'TECH-037', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA,18H)', '0.10', '970.10', '0.79', '0.88');
INSERT INTO `proy_techo_capas` VALUES ('201', 'TECH-037', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('202', 'TECH-037', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('203', 'TECH-037', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('204', 'TECH-038', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('205', 'TECH-038', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('206', 'TECH-038', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('207', 'TECH-038', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.06', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('208', 'TECH-038', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('209', 'TECH-039', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('210', 'TECH-039', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('211', 'TECH-039', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('212', 'TECH-039', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.08', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('213', 'TECH-039', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('214', 'TECH-040', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('215', 'TECH-040', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('216', 'TECH-040', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.15', '926.66', '0.87', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('217', 'TECH-040', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('218', 'TECH-041', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('219', 'TECH-041', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('220', 'TECH-041', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('221', 'TECH-041', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('222', 'TECH-041', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.15', '926.66', '0.87', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('223', 'TECH-041', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('224', 'TECH-042', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('225', 'TECH-042', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('226', 'TECH-042', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE  DE ARCILLA)', '0.20', '950.00', '0.83', '0.67');
INSERT INTO `proy_techo_capas` VALUES ('227', 'TECH-042', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('228', 'TECH-043', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('229', 'TECH-043', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('230', 'TECH-043', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('231', 'TECH-043', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('232', 'TECH-043', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE  DE ARCILLA)', '0.20', '950.00', '0.83', '0.67');
INSERT INTO `proy_techo_capas` VALUES ('233', 'TECH-043', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('234', 'TECH-044', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('235', 'TECH-044', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('236', 'TECH-044', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE  DE ARCILLA)', '0.25', '932.00', '0.62', '0.73');
INSERT INTO `proy_techo_capas` VALUES ('237', 'TECH-044', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('238', 'TECH-045', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('239', 'TECH-045', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('240', 'TECH-045', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('241', 'TECH-045', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('242', 'TECH-045', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE  DE ARCILLA)', '0.25', '932.00', '0.62', '0.73');
INSERT INTO `proy_techo_capas` VALUES ('243', 'TECH-045', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('244', 'TECH-046', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('245', 'TECH-046', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('246', 'TECH-046', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '1035.58', '0.81', '0.74');
INSERT INTO `proy_techo_capas` VALUES ('247', 'TECH-046', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('248', 'TECH-047', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('249', 'TECH-047', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('250', 'TECH-047', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('251', 'TECH-047', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('252', 'TECH-047', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '1035.58', '0.81', '0.74');
INSERT INTO `proy_techo_capas` VALUES ('253', 'TECH-047', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('254', 'TECH-048', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('255', 'TECH-048', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('256', 'TECH-048', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '1035.58', '0.81', '0.74');
INSERT INTO `proy_techo_capas` VALUES ('257', 'TECH-048', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('258', 'TECH-048', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('259', 'TECH-048', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('260', 'TECH-049', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('261', 'TECH-049', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('262', 'TECH-049', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '1035.58', '0.81', '0.74');
INSERT INTO `proy_techo_capas` VALUES ('263', 'TECH-049', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('264', 'TECH-049', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('265', 'TECH-049', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('266', 'TECH-050', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('267', 'TECH-050', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('268', 'TECH-050', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '929.00', '0.76', '0.75');
INSERT INTO `proy_techo_capas` VALUES ('269', 'TECH-050', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('270', 'TECH-051', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('271', 'TECH-051', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('272', 'TECH-051', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('273', 'TECH-051', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('274', 'TECH-051', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '929.00', '0.76', '0.75');
INSERT INTO `proy_techo_capas` VALUES ('275', 'TECH-051', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('276', 'TECH-052', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('277', 'TECH-052', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('278', 'TECH-052', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '929.00', '0.76', '0.75');
INSERT INTO `proy_techo_capas` VALUES ('279', 'TECH-052', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('280', 'TECH-052', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('281', 'TECH-052', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('282', 'TECH-053', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('283', 'TECH-053', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('284', 'TECH-053', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.25', '816.63', '1.27', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('285', 'TECH-053', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('286', 'TECH-054', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('287', 'TECH-054', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('288', 'TECH-054', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('289', 'TECH-054', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('290', 'TECH-054', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.25', '816.63', '1.27', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('291', 'TECH-054', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('292', 'TECH-055', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('293', 'TECH-055', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('294', 'TECH-055', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.20', '747.58', '1.09', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('295', 'TECH-055', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('296', 'TECH-056', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('297', 'TECH-056', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('298', 'TECH-056', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('299', 'TECH-056', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('300', 'TECH-056', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.20', '747.58', '1.09', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('301', 'TECH-056', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('302', 'TECH-057', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('303', 'TECH-057', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('304', 'TECH-057', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.15', '821.51', '0.92', '0.72');
INSERT INTO `proy_techo_capas` VALUES ('305', 'TECH-057', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('306', 'TECH-058', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('307', 'TECH-058', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('308', 'TECH-058', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('309', 'TECH-058', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('310', 'TECH-058', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.15', '821.51', '0.92', '0.72');
INSERT INTO `proy_techo_capas` VALUES ('311', 'TECH-058', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('312', 'TECH-059', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('313', 'TECH-059', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('314', 'TECH-059', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.15', '821.51', '0.92', '0.72');
INSERT INTO `proy_techo_capas` VALUES ('315', 'TECH-059', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('316', 'TECH-059', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('317', 'TECH-059', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('318', 'TECH-060', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('319', 'TECH-060', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('320', 'TECH-060', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('321', 'TECH-060', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('322', 'TECH-061', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('323', 'TECH-061', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('324', 'TECH-061', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('325', 'TECH-061', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('326', 'TECH-061', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('327', 'TECH-062', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('328', 'TECH-062', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('329', 'TECH-062', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('330', 'TECH-062', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('331', 'TECH-062', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('332', 'TECH-063', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('333', 'TECH-063', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('334', 'TECH-063', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('335', 'TECH-063', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('336', 'TECH-063', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('337', 'TECH-064', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('338', 'TECH-064', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('339', 'TECH-064', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('340', 'TECH-064', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('341', 'TECH-064', '02', '37', 'Maracaibo', 'CIELO RASO DE POLIESTIRENO', '0.02', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('342', 'TECH-065', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('343', 'TECH-065', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('344', 'TECH-065', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('345', 'TECH-065', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('346', 'TECH-065', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.42', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('347', 'TECH-066', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('348', 'TECH-066', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('349', 'TECH-066', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('350', 'TECH-066', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('351', 'TECH-066', '02', '37', 'Maracaibo', 'CIELO RASO DE POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('352', 'TECH-067', '02', '37', 'Maracaibo', 'TEJA ASFALTICA', '0.00', '2325.00', '1.15', '1.00');
INSERT INTO `proy_techo_capas` VALUES ('353', 'TECH-067', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('354', 'TECH-067', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('355', 'TECH-068', '02', '37', 'Maracaibo', 'TEJA ASFALTICA', '0.00', '2325.00', '1.15', '1.00');
INSERT INTO `proy_techo_capas` VALUES ('356', 'TECH-068', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('357', 'TECH-068', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('358', 'TECH-069', '02', '37', 'Maracaibo', 'TEJA ASFALTICA', '0.00', '2325.00', '1.15', '1.00');
INSERT INTO `proy_techo_capas` VALUES ('359', 'TECH-069', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('360', 'TECH-069', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('361', 'TECH-069', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('362', 'TECH-070', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('363', 'TECH-070', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('364', 'TECH-070', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('365', 'TECH-071', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.10', '385.20', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('366', 'TECH-071', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('367', 'TECH-071', '02', '37', 'Maracaibo', 'MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('368', 'TECH-072', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('369', 'TECH-072', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('370', 'TECH-073', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('371', 'TECH-073', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '25.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('372', 'TECH-073', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('373', 'TECH-074', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('374', 'TECH-074', '02', '37', 'Maracaibo', 'CONCRETO  LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('375', 'TECH-074', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.15', '2300.00', '1.78', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('376', 'TECH-074', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('377', 'TECH-075', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('378', 'TECH-075', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.15', '2300.00', '1.78', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('379', 'TECH-075', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('380', 'TECH-075', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('381', 'TECH-075', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('382', 'TECH-076', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('383', 'TECH-076', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('384', 'TECH-076', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.20', '2300.00', '1.78', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('385', 'TECH-076', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('386', 'TECH-077', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('387', 'TECH-077', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('388', 'TECH-077', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.10', '2300.00', '1.73', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('389', 'TECH-077', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('390', 'TECH-078', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('391', 'TECH-078', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.10', '2300.00', '1.73', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('392', 'TECH-078', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('393', 'TECH-078', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('394', 'TECH-078', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('395', 'TECH-079', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('396', 'TECH-079', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.10', '2300.00', '1.73', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('397', 'TECH-079', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('398', 'TECH-079', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('399', 'TECH-079', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('400', 'TECH-080', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('401', 'TECH-080', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.10', '2300.00', '1.73', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('402', 'TECH-080', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('403', 'TECH-080', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('404', 'TECH-080', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('405', 'TECH-081', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('406', 'TECH-081', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('407', 'TECH-081', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.10', '2300.00', '1.73', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('408', 'TECH-081', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('409', 'TECH-082', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('410', 'TECH-082', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('411', 'TECH-082', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('412', 'TECH-082', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.10', '2300.00', '1.73', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('413', 'TECH-082', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('414', 'TECH-083', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('415', 'TECH-083', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('416', 'TECH-083', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('417', 'TECH-083', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.10', '2300.00', '1.73', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('418', 'TECH-083', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('419', 'TECH-084', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('420', 'TECH-084', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('421', 'TECH-084', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('422', 'TECH-084', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.10', '2300.00', '1.73', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('423', 'TECH-085', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('424', 'TECH-085', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.15', '2300.00', '1.73', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('425', 'TECH-085', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('426', 'TECH-086', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('427', 'TECH-086', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.15', '2300.00', '1.73', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('428', 'TECH-086', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('429', 'TECH-087', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('430', 'TECH-087', '02', '37', 'Maracaibo', 'CONCRETO ARMADO', '0.20', '2300.00', '1.73', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('431', 'TECH-087', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('432', 'TECH-088', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('433', 'TECH-088', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('434', 'TECH-088', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.08', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('435', 'TECH-088', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('436', 'TECH-089', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('437', 'TECH-089', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('438', 'TECH-089', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('439', 'TECH-089', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.08', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('440', 'TECH-089', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('441', 'TECH-090', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('442', 'TECH-090', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('443', 'TECH-090', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('444', 'TECH-090', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.08', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('445', 'TECH-090', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('446', 'TECH-091', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('447', 'TECH-091', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.08', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('448', 'TECH-091', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('449', 'TECH-091', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('450', 'TECH-091', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('451', 'TECH-092', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('452', 'TECH-092', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('453', 'TECH-092', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.08', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('454', 'TECH-092', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('455', 'TECH-093', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('456', 'TECH-093', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.08', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('457', 'TECH-093', '02', '37', 'Maracaibo', 'LAMINA GALVANIZADA', '0.00', '7850.00', '60.00', '0.49');
INSERT INTO `proy_techo_capas` VALUES ('458', 'TECH-093', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('459', 'TECH-093', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('460', 'TECH-093', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('461', 'TECH-094', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('462', 'TECH-094', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('463', 'TECH-094', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('464', 'TECH-094', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3807.57', '1.14', '0.32');
INSERT INTO `proy_techo_capas` VALUES ('465', 'TECH-095', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('466', 'TECH-095', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('467', 'TECH-095', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('468', 'TECH-095', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.08', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('469', 'TECH-095', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('470', 'TECH-096', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('471', 'TECH-096', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('472', 'TECH-096', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('473', 'TECH-096', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('474', 'TECH-096', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('475', 'TECH-097', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('476', 'TECH-097', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('477', 'TECH-097', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('478', 'TECH-097', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.06', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('479', 'TECH-097', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('480', 'TECH-098', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('481', 'TECH-098', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('482', 'TECH-098', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('483', 'TECH-098', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.08', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('484', 'TECH-098', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.03', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('485', 'TECH-099', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('486', 'TECH-099', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('487', 'TECH-099', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('488', 'TECH-099', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.08', '15.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('489', 'TECH-099', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('490', 'TECH-101', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('491', 'TECH-101', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('492', 'TECH-101', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('493', 'TECH-101', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('494', 'TECH-101', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 14H)', '0.10', '970.10', '0.82', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('495', 'TECH-101', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('496', 'TECH-102', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('497', 'TECH-102', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('498', 'TECH-102', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('499', 'TECH-102', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('500', 'TECH-102', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 14H)', '0.10', '970.10', '0.82', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('501', 'TECH-102', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('502', 'TECH-103', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('503', 'TECH-103', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('504', 'TECH-103', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('505', 'TECH-103', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('506', 'TECH-103', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA,18H)', '0.10', '970.10', '0.79', '0.88');
INSERT INTO `proy_techo_capas` VALUES ('507', 'TECH-103', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('508', 'TECH-104', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('509', 'TECH-104', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('510', 'TECH-104', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('511', 'TECH-104', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('512', 'TECH-104', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA,18H)', '0.10', '970.10', '0.79', '0.88');
INSERT INTO `proy_techo_capas` VALUES ('513', 'TECH-104', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('514', 'TECH-105', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('515', 'TECH-105', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('516', 'TECH-105', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('517', 'TECH-105', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('518', 'TECH-105', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 23H)', '0.15', '849.20', '0.82', '0.98');
INSERT INTO `proy_techo_capas` VALUES ('519', 'TECH-105', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('520', 'TECH-106', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('521', 'TECH-106', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('522', 'TECH-106', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('523', 'TECH-106', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('524', 'TECH-106', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 23H)', '0.15', '849.20', '0.82', '0.98');
INSERT INTO `proy_techo_capas` VALUES ('525', 'TECH-106', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('526', 'TECH-107', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('527', 'TECH-107', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('528', 'TECH-107', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('529', 'TECH-107', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('530', 'TECH-107', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 15H)', '0.20', '939.83', '0.83', '0.69');
INSERT INTO `proy_techo_capas` VALUES ('531', 'TECH-107', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('532', 'TECH-108', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('533', 'TECH-108', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('534', 'TECH-108', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('535', 'TECH-108', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('536', 'TECH-108', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 15H)', '0.20', '939.83', '0.83', '0.69');
INSERT INTO `proy_techo_capas` VALUES ('537', 'TECH-108', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('538', 'TECH-109', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('539', 'TECH-109', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('540', 'TECH-109', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('541', 'TECH-109', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('542', 'TECH-109', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.15', '821.51', '0.92', '0.72');
INSERT INTO `proy_techo_capas` VALUES ('543', 'TECH-109', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('544', 'TECH-110', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('545', 'TECH-110', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('546', 'TECH-110', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('547', 'TECH-110', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('548', 'TECH-110', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.15', '821.51', '0.92', '0.72');
INSERT INTO `proy_techo_capas` VALUES ('549', 'TECH-110', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('550', 'TECH-111', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('551', 'TECH-111', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('552', 'TECH-111', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('553', 'TECH-111', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.15', '821.51', '0.92', '0.72');
INSERT INTO `proy_techo_capas` VALUES ('554', 'TECH-111', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('555', 'TECH-112', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('556', 'TECH-112', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('557', 'TECH-112', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.15', '821.51', '0.92', '0.72');
INSERT INTO `proy_techo_capas` VALUES ('558', 'TECH-112', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('559', 'TECH-112', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('560', 'TECH-112', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('561', 'TECH-113', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('562', 'TECH-113', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('563', 'TECH-113', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.15', '821.51', '0.92', '0.72');
INSERT INTO `proy_techo_capas` VALUES ('564', 'TECH-113', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('565', 'TECH-113', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('566', 'TECH-113', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('567', 'TECH-114', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('568', 'TECH-114', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('569', 'TECH-114', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('570', 'TECH-114', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.15', '821.51', '0.92', '0.72');
INSERT INTO `proy_techo_capas` VALUES ('571', 'TECH-114', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('572', 'TECH-115', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('573', 'TECH-115', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('574', 'TECH-115', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('575', 'TECH-115', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('576', 'TECH-115', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.20', '747.58', '1.09', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('577', 'TECH-115', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('578', 'TECH-116', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('579', 'TECH-116', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('580', 'TECH-116', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('581', 'TECH-116', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.20', '747.58', '1.09', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('582', 'TECH-116', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('583', 'TECH-117', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('584', 'TECH-117', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('585', 'TECH-117', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.20', '747.58', '1.09', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('586', 'TECH-117', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('587', 'TECH-117', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('588', 'TECH-117', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('589', 'TECH-118', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('590', 'TECH-118', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('591', 'TECH-118', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.20', '747.75', '1.09', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('592', 'TECH-118', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('593', 'TECH-118', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('594', 'TECH-118', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('595', 'TECH-119', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('596', 'TECH-119', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('597', 'TECH-119', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('598', 'TECH-119', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.20', '747.58', '1.09', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('599', 'TECH-119', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('600', 'TECH-120', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('601', 'TECH-120', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '375.00', '0.93', '0.72');
INSERT INTO `proy_techo_capas` VALUES ('602', 'TECH-120', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.20', '747.58', '1.09', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('603', 'TECH-120', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('604', 'TECH-120', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('605', 'TECH-120', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('606', 'TECH-121', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('607', 'TECH-121', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('608', 'TECH-121', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('609', 'TECH-121', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.25', '816.63', '1.27', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('610', 'TECH-121', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('611', 'TECH-122', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('612', 'TECH-122', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('613', 'TECH-122', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.25', '816.63', '1.27', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('614', 'TECH-122', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('615', 'TECH-122', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('616', 'TECH-122', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('617', 'TECH-123', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('618', 'TECH-123', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('619', 'TECH-123', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.25', '816.63', '1.27', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('620', 'TECH-123', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('621', 'TECH-123', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('622', 'TECH-123', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('623', 'TECH-124', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('624', 'TECH-124', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('625', 'TECH-124', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.25', '816.63', '1.27', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('626', 'TECH-124', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('627', 'TECH-124', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('628', 'TECH-124', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('629', 'TECH-125', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('630', 'TECH-125', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('631', 'TECH-125', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('632', 'TECH-125', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.25', '816.63', '1.27', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('633', 'TECH-125', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('634', 'TECH-126', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('635', 'TECH-126', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('636', 'TECH-126', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('637', 'TECH-126', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('638', 'TECH-126', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.25', '816.63', '1.27', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('639', 'TECH-126', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('640', 'TECH-127', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('641', 'TECH-127', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('642', 'TECH-127', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('643', 'TECH-127', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('644', 'TECH-127', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.25', '816.63', '1.27', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('645', 'TECH-127', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('646', 'TECH-128', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('647', 'TECH-128', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('648', 'TECH-128', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('649', 'TECH-128', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('650', 'TECH-128', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.25', '816.63', '1.27', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('651', 'TECH-128', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('652', 'TECH-129', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('653', 'TECH-129', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('654', 'TECH-129', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('655', 'TECH-129', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('656', 'TECH-129', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '1035.58', '0.81', '0.74');
INSERT INTO `proy_techo_capas` VALUES ('657', 'TECH-129', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('658', 'TECH-130', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('659', 'TECH-130', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('660', 'TECH-130', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('661', 'TECH-130', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('662', 'TECH-130', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '1035.58', '0.81', '0.74');
INSERT INTO `proy_techo_capas` VALUES ('663', 'TECH-130', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('664', 'TECH-131', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('665', 'TECH-131', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('666', 'TECH-131', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('667', 'TECH-131', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('668', 'TECH-131', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '929.00', '0.76', '0.75');
INSERT INTO `proy_techo_capas` VALUES ('669', 'TECH-131', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('670', 'TECH-132', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('671', 'TECH-132', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('672', 'TECH-132', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('673', 'TECH-132', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('674', 'TECH-132', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '929.00', '0.76', '0.75');
INSERT INTO `proy_techo_capas` VALUES ('675', 'TECH-132', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('676', 'TECH-133', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('677', 'TECH-133', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('678', 'TECH-133', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('679', 'TECH-133', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '1035.58', '0.81', '0.74');
INSERT INTO `proy_techo_capas` VALUES ('680', 'TECH-133', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('681', 'TECH-134', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('682', 'TECH-134', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('683', 'TECH-134', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('684', 'TECH-134', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '1035.58', '0.81', '0.74');
INSERT INTO `proy_techo_capas` VALUES ('685', 'TECH-134', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('686', 'TECH-135', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('687', 'TECH-135', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('688', 'TECH-135', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '1035.58', '0.81', '0.74');
INSERT INTO `proy_techo_capas` VALUES ('689', 'TECH-135', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('690', 'TECH-135', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('691', 'TECH-135', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('692', 'TECH-136', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('693', 'TECH-136', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('694', 'TECH-136', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '929.00', '0.76', '0.75');
INSERT INTO `proy_techo_capas` VALUES ('695', 'TECH-136', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('696', 'TECH-136', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('697', 'TECH-136', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('698', 'TECH-137', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('699', 'TECH-137', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('700', 'TECH-137', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '929.00', '0.76', '0.75');
INSERT INTO `proy_techo_capas` VALUES ('701', 'TECH-137', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('702', 'TECH-137', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('703', 'TECH-137', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('704', 'TECH-138', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('705', 'TECH-138', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('706', 'TECH-138', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('707', 'TECH-138', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '929.00', '0.76', '0.75');
INSERT INTO `proy_techo_capas` VALUES ('708', 'TECH-138', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('709', 'TECH-139', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('710', 'TECH-139', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('711', 'TECH-139', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('712', 'TECH-139', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '929.00', '0.76', '0.75');
INSERT INTO `proy_techo_capas` VALUES ('713', 'TECH-139', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('714', 'TECH-140', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('715', 'TECH-140', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('716', 'TECH-140', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('717', 'TECH-140', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3807.57', '1.14', '0.32');
INSERT INTO `proy_techo_capas` VALUES ('718', 'TECH-140', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('719', 'TECH-140', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('720', 'TECH-141', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('721', 'TECH-141', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('722', 'TECH-141', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('723', 'TECH-141', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3807.57', '1.14', '0.32');
INSERT INTO `proy_techo_capas` VALUES ('724', 'TECH-141', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('725', 'TECH-141', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('726', 'TECH-142', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('727', 'TECH-142', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('728', 'TECH-142', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('729', 'TECH-142', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3807.57', '1.14', '0.32');
INSERT INTO `proy_techo_capas` VALUES ('730', 'TECH-142', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('731', 'TECH-142', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('732', 'TECH-143', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('733', 'TECH-143', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('734', 'TECH-143', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('735', 'TECH-143', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3807.57', '1.14', '0.32');
INSERT INTO `proy_techo_capas` VALUES ('736', 'TECH-144', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('737', 'TECH-144', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('738', 'TECH-144', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('739', 'TECH-144', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('740', 'TECH-144', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3807.57', '1.14', '0.32');
INSERT INTO `proy_techo_capas` VALUES ('741', 'TECH-145', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('742', 'TECH-145', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('743', 'TECH-145', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('744', 'TECH-145', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('745', 'TECH-145', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3807.57', '1.14', '0.32');
INSERT INTO `proy_techo_capas` VALUES ('746', 'TECH-146', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('747', 'TECH-146', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('748', 'TECH-146', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('749', 'TECH-146', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('750', 'TECH-146', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3807.57', '1.14', '0.32');
INSERT INTO `proy_techo_capas` VALUES ('751', 'TECH-147', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('752', 'TECH-147', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('753', 'TECH-147', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('754', 'TECH-147', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3593.08', '1.06', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('755', 'TECH-148', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('756', 'TECH-148', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('757', 'TECH-148', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('758', 'TECH-148', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3593.08', '1.06', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('759', 'TECH-148', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('760', 'TECH-148', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('761', 'TECH-149', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('762', 'TECH-149', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('763', 'TECH-149', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('764', 'TECH-149', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3593.08', '1.06', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('765', 'TECH-149', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('766', 'TECH-149', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('767', 'TECH-150', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('768', 'TECH-150', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('769', 'TECH-150', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('770', 'TECH-150', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3593.08', '1.06', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('771', 'TECH-150', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('772', 'TECH-150', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('773', 'TECH-151', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('774', 'TECH-151', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('775', 'TECH-151', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('776', 'TECH-151', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3593.08', '1.06', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('777', 'TECH-152', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('778', 'TECH-152', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('779', 'TECH-152', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('780', 'TECH-152', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('781', 'TECH-152', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3593.08', '1.06', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('782', 'TECH-153', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('783', 'TECH-153', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('784', 'TECH-153', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('785', 'TECH-153', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('786', 'TECH-153', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3593.08', '1.06', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('787', 'TECH-154', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('788', 'TECH-154', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('789', 'TECH-154', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('790', 'TECH-154', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.04', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('791', 'TECH-154', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.06', '3593.08', '1.06', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('792', 'TECH-155', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('793', 'TECH-155', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('794', 'TECH-155', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('795', 'TECH-155', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.08', '3255.07', '1.15', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('796', 'TECH-156', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('797', 'TECH-156', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('798', 'TECH-156', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('799', 'TECH-156', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.08', '3255.07', '1.15', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('800', 'TECH-156', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('801', 'TECH-156', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('802', 'TECH-157', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('803', 'TECH-157', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('804', 'TECH-157', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('805', 'TECH-157', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.08', '3255.07', '1.15', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('806', 'TECH-157', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('807', 'TECH-157', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('808', 'TECH-158', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('809', 'TECH-158', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('810', 'TECH-158', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('811', 'TECH-158', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.08', '3255.07', '1.15', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('812', 'TECH-158', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('813', 'TECH-158', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '1.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('814', 'TECH-159', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('815', 'TECH-159', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('816', 'TECH-159', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('817', 'TECH-159', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.08', '3255.07', '1.15', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('818', 'TECH-160', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('819', 'TECH-160', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('820', 'TECH-160', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('821', 'TECH-160', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('822', 'TECH-160', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.08', '3255.07', '1.15', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('823', 'TECH-161', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('824', 'TECH-161', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('825', 'TECH-161', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('826', 'TECH-161', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('827', 'TECH-161', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.08', '3255.07', '1.15', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('828', 'TECH-162', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('829', 'TECH-162', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('830', 'TECH-162', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('831', 'TECH-162', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('832', 'TECH-162', '02', '37', 'Maracaibo', 'LOSA (PERFIL METALICO+CP+TABELON)', '0.08', '3255.07', '1.15', '0.34');
INSERT INTO `proy_techo_capas` VALUES ('833', 'TECH-163', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('834', 'TECH-163', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('835', 'TECH-163', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 14H)', '0.10', '970.10', '0.82', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('836', 'TECH-163', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('837', 'TECH-163', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('838', 'TECH-163', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('839', 'TECH-164', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('840', 'TECH-164', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('841', 'TECH-164', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 14H)', '0.10', '970.10', '0.82', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('842', 'TECH-164', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('843', 'TECH-164', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('844', 'TECH-164', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '1.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('845', 'TECH-165', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('846', 'TECH-165', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.03', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('847', 'TECH-165', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('848', 'TECH-165', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 14H)', '0.10', '970.10', '0.82', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('849', 'TECH-165', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('850', 'TECH-166', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('851', 'TECH-166', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('852', 'TECH-166', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('853', 'TECH-166', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 14H)', '0.10', '970.10', '0.82', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('854', 'TECH-166', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('855', 'TECH-167', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('856', 'TECH-167', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('857', 'TECH-167', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('858', 'TECH-167', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 15H)', '0.20', '939.83', '0.83', '0.69');
INSERT INTO `proy_techo_capas` VALUES ('859', 'TECH-167', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('860', 'TECH-168', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('861', 'TECH-168', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('862', 'TECH-168', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 15H)', '0.20', '939.83', '0.83', '0.69');
INSERT INTO `proy_techo_capas` VALUES ('863', 'TECH-168', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('864', 'TECH-168', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('865', 'TECH-168', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('866', 'TECH-169', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('867', 'TECH-169', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('868', 'TECH-169', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 15H)', '0.20', '939.83', '0.83', '0.69');
INSERT INTO `proy_techo_capas` VALUES ('869', 'TECH-169', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('870', 'TECH-169', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('871', 'TECH-169', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('872', 'TECH-170', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('873', 'TECH-170', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('874', 'TECH-170', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 15H)', '0.20', '939.83', '0.83', '0.69');
INSERT INTO `proy_techo_capas` VALUES ('875', 'TECH-170', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('876', 'TECH-170', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('877', 'TECH-170', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '1.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('878', 'TECH-171', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('879', 'TECH-171', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('880', 'TECH-171', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('881', 'TECH-171', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 15H)', '0.20', '939.83', '0.83', '0.69');
INSERT INTO `proy_techo_capas` VALUES ('882', 'TECH-171', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('883', 'TECH-172', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('884', 'TECH-172', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('885', 'TECH-172', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('886', 'TECH-172', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA,18H)', '0.10', '970.10', '0.79', '0.88');
INSERT INTO `proy_techo_capas` VALUES ('887', 'TECH-172', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('888', 'TECH-173', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('889', 'TECH-173', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('890', 'TECH-173', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA,18H)', '0.10', '970.10', '0.79', '0.88');
INSERT INTO `proy_techo_capas` VALUES ('891', 'TECH-173', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('892', 'TECH-173', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('893', 'TECH-173', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('894', 'TECH-174', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('895', 'TECH-174', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('896', 'TECH-174', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA,18H)', '0.10', '970.10', '0.79', '0.88');
INSERT INTO `proy_techo_capas` VALUES ('897', 'TECH-174', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('898', 'TECH-174', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.08', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('899', 'TECH-174', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '1.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('900', 'TECH-175', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('901', 'TECH-175', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('902', 'TECH-175', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('903', 'TECH-175', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA,18H)', '0.10', '970.10', '0.79', '0.88');
INSERT INTO `proy_techo_capas` VALUES ('904', 'TECH-175', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('905', 'TECH-176', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('906', 'TECH-176', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1525.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('907', 'TECH-176', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('908', 'TECH-176', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 23H)', '0.15', '849.20', '0.82', '0.98');
INSERT INTO `proy_techo_capas` VALUES ('909', 'TECH-176', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('910', 'TECH-177', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('911', 'TECH-177', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('912', 'TECH-177', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 23H)', '0.15', '849.20', '0.82', '0.98');
INSERT INTO `proy_techo_capas` VALUES ('913', 'TECH-177', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('914', 'TECH-177', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('915', 'TECH-177', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '500.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('916', 'TECH-178', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('917', 'TECH-178', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('918', 'TECH-178', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 23H)', '0.15', '849.20', '0.82', '0.98');
INSERT INTO `proy_techo_capas` VALUES ('919', 'TECH-178', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('920', 'TECH-178', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('921', 'TECH-178', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('922', 'TECH-179', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('923', 'TECH-179', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('924', 'TECH-179', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 23H)', '0.15', '849.20', '0.82', '0.98');
INSERT INTO `proy_techo_capas` VALUES ('925', 'TECH-179', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('926', 'TECH-179', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('927', 'TECH-179', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '1.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('928', 'TECH-180', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('929', 'TECH-180', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('930', 'TECH-180', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('931', 'TECH-180', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 23H)', '0.15', '849.20', '0.82', '0.98');
INSERT INTO `proy_techo_capas` VALUES ('932', 'TECH-180', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('933', 'TECH-181', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('934', 'TECH-181', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('935', 'TECH-181', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('936', 'TECH-181', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.20', '837.50', '0.90', '0.89');
INSERT INTO `proy_techo_capas` VALUES ('937', 'TECH-181', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('938', 'TECH-182', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('939', 'TECH-182', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('940', 'TECH-182', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.20', '837.50', '0.90', '0.89');
INSERT INTO `proy_techo_capas` VALUES ('941', 'TECH-182', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('942', 'TECH-182', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('943', 'TECH-182', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('944', 'TECH-183', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('945', 'TECH-183', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('946', 'TECH-183', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('947', 'TECH-183', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.20', '837.50', '0.90', '0.89');
INSERT INTO `proy_techo_capas` VALUES ('948', 'TECH-183', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('949', 'TECH-184', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('950', 'TECH-184', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('951', 'TECH-184', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('952', 'TECH-184', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.20', '837.50', '0.90', '0.89');
INSERT INTO `proy_techo_capas` VALUES ('953', 'TECH-184', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('954', 'TECH-184', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('955', 'TECH-184', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '1.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('956', 'TECH-185', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('957', 'TECH-185', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('958', 'TECH-185', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('959', 'TECH-185', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('960', 'TECH-185', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.20', '837.50', '0.90', '0.89');
INSERT INTO `proy_techo_capas` VALUES ('961', 'TECH-185', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('962', 'TECH-186', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('963', 'TECH-186', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('964', 'TECH-186', '02', '37', 'Maracaibo', 'LOSA (CP + PLAFACIL)', '0.06', '964.47', '0.69', '0.97');
INSERT INTO `proy_techo_capas` VALUES ('965', 'TECH-186', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('966', 'TECH-187', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('967', 'TECH-187', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('968', 'TECH-187', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 14H)', '0.10', '970.10', '0.82', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('969', 'TECH-187', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('970', 'TECH-187', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('971', 'TECH-187', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('972', 'TECH-188', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('973', 'TECH-188', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('974', 'TECH-188', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ARCILLA, 15H)', '0.20', '939.83', '0.83', '0.69');
INSERT INTO `proy_techo_capas` VALUES ('975', 'TECH-188', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('976', 'TECH-188', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('977', 'TECH-188', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('978', 'TECH-189', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('979', 'TECH-189', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('980', 'TECH-189', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.15', '926.66', '0.87', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('981', 'TECH-189', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('982', 'TECH-189', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('983', 'TECH-189', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('984', 'TECH-190', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('985', 'TECH-190', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('986', 'TECH-190', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.15', '926.66', '0.87', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('987', 'TECH-190', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('988', 'TECH-190', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('989', 'TECH-190', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('990', 'TECH-191', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('991', 'TECH-191', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('992', 'TECH-191', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.15', '926.66', '0.87', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('993', 'TECH-191', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('994', 'TECH-191', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('995', 'TECH-191', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '1.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('996', 'TECH-192', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('997', 'TECH-192', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('998', 'TECH-192', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('999', 'TECH-192', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.15', '926.66', '0.87', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('1000', 'TECH-192', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1001', 'TECH-193', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('1002', 'TECH-193', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1003', 'TECH-193', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1004', 'TECH-193', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.15', '926.66', '0.87', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('1005', 'TECH-193', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1006', 'TECH-194', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1007', 'TECH-194', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1008', 'TECH-194', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('1009', 'TECH-194', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1010', 'TECH-194', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.15', '926.66', '0.87', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('1011', 'TECH-194', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1012', 'TECH-195', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1013', 'TECH-195', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1014', 'TECH-195', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('1015', 'TECH-195', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1016', 'TECH-195', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.15', '926.66', '0.87', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('1017', 'TECH-195', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1018', 'TECH-196', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1019', 'TECH-196', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1020', 'TECH-196', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1021', 'TECH-196', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.20', '950.00', '0.83', '0.67');
INSERT INTO `proy_techo_capas` VALUES ('1022', 'TECH-196', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1023', 'TECH-197', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1024', 'TECH-197', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1025', 'TECH-197', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.20', '950.00', '0.83', '0.67');
INSERT INTO `proy_techo_capas` VALUES ('1026', 'TECH-197', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1027', 'TECH-197', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1028', 'TECH-197', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1029', 'TECH-198', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1030', 'TECH-198', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1031', 'TECH-198', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.20', '950.00', '0.83', '0.67');
INSERT INTO `proy_techo_capas` VALUES ('1032', 'TECH-198', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1033', 'TECH-198', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1034', 'TECH-198', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('1035', 'TECH-199', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1036', 'TECH-199', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1037', 'TECH-199', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.20', '950.00', '0.83', '0.67');
INSERT INTO `proy_techo_capas` VALUES ('1038', 'TECH-199', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1039', 'TECH-199', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1040', 'TECH-199', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '1.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1041', 'TECH-200', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('1042', 'TECH-200', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1043', 'TECH-200', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1044', 'TECH-200', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.20', '950.00', '0.83', '0.67');
INSERT INTO `proy_techo_capas` VALUES ('1045', 'TECH-200', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1046', 'TECH-201', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1047', 'TECH-201', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1048', 'TECH-201', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('1049', 'TECH-201', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1050', 'TECH-201', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.20', '950.00', '0.83', '0.67');
INSERT INTO `proy_techo_capas` VALUES ('1051', 'TECH-201', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1052', 'TECH-202', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1053', 'TECH-202', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1054', 'TECH-202', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('1055', 'TECH-202', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1056', 'TECH-202', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.20', '950.00', '0.83', '0.67');
INSERT INTO `proy_techo_capas` VALUES ('1057', 'TECH-202', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1058', 'TECH-203', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1059', 'TECH-203', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1060', 'TECH-203', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.25', '932.00', '0.62', '0.73');
INSERT INTO `proy_techo_capas` VALUES ('1061', 'TECH-203', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1062', 'TECH-203', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1063', 'TECH-203', '02', '37', 'Maracaibo', 'CIELO RASO DE FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1064', 'TECH-204', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1065', 'TECH-204', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1066', 'TECH-204', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.25', '932.00', '0.62', '0.73');
INSERT INTO `proy_techo_capas` VALUES ('1067', 'TECH-204', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1068', 'TECH-204', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1069', 'TECH-204', '02', '37', 'Maracaibo', 'CIELO RASO DE MADERA', '0.01', '800.00', '0.15', '1.25');
INSERT INTO `proy_techo_capas` VALUES ('1070', 'TECH-205', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1071', 'TECH-205', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1072', 'TECH-205', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.25', '932.00', '0.62', '0.73');
INSERT INTO `proy_techo_capas` VALUES ('1073', 'TECH-205', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1074', 'TECH-205', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1075', 'TECH-205', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '1.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1076', 'TECH-206', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('1077', 'TECH-206', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1078', 'TECH-206', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1079', 'TECH-206', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.25', '932.00', '0.62', '0.73');
INSERT INTO `proy_techo_capas` VALUES ('1080', 'TECH-206', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1081', 'TECH-207', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1082', 'TECH-207', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1083', 'TECH-207', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1084', 'TECH-207', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.25', '932.00', '0.62', '0.73');
INSERT INTO `proy_techo_capas` VALUES ('1085', 'TECH-207', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1086', 'TECH-208', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1087', 'TECH-208', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.05', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1088', 'TECH-208', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('1089', 'TECH-208', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1090', 'TECH-208', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.25', '932.00', '0.62', '0.73');
INSERT INTO `proy_techo_capas` VALUES ('1091', 'TECH-208', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1092', 'TECH-209', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1093', 'TECH-209', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1094', 'TECH-209', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.05', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('1095', 'TECH-209', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1096', 'TECH-209', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.25', '932.00', '0.62', '0.73');
INSERT INTO `proy_techo_capas` VALUES ('1097', 'TECH-209', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1098', 'TECH-210', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1099', 'TECH-210', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1100', 'TECH-210', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.15', '991.67', '0.84', '0.70');
INSERT INTO `proy_techo_capas` VALUES ('1101', 'TECH-210', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('1102', 'TECH-210', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1103', 'TECH-210', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1104', 'TECH-211', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('1105', 'TECH-211', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1106', 'TECH-211', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1107', 'TECH-211', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA 9H)', '0.15', '991.67', '0.84', '0.70');
INSERT INTO `proy_techo_capas` VALUES ('1108', 'TECH-211', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('1109', 'TECH-211', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1603.00');
INSERT INTO `proy_techo_capas` VALUES ('1110', 'TECH-211', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1111', 'TECH-212', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1112', 'TECH-212', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1113', 'TECH-212', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.20', '747.58', '1.09', '0.76');
INSERT INTO `proy_techo_capas` VALUES ('1114', 'TECH-212', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('1115', 'TECH-212', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1116', 'TECH-212', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1117', 'TECH-213', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1118', 'TECH-213', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1119', 'TECH-213', '02', '37', 'Maracaibo', 'LOSA (CP + PIÑATA DE ALIVEN,3H)', '0.25', '816.63', '1.27', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('1120', 'TECH-213', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('1121', 'TECH-213', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1122', 'TECH-213', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1123', 'TECH-214', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1124', 'TECH-214', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1125', 'TECH-214', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '929.00', '0.76', '0.75');
INSERT INTO `proy_techo_capas` VALUES ('1126', 'TECH-214', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('1127', 'TECH-214', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1128', 'TECH-214', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1129', 'TECH-215', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1130', 'TECH-215', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1131', 'TECH-215', '02', '37', 'Maracaibo', 'LOSA( CP + PIÑATA DE ALIVEN 4H)', '0.10', '1035.58', '0.81', '0.74');
INSERT INTO `proy_techo_capas` VALUES ('1132', 'TECH-215', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('1133', 'TECH-215', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1134', 'TECH-215', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1135', 'TECH-216', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1136', 'TECH-216', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1137', 'TECH-216', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.15', '926.66', '0.87', '0.77');
INSERT INTO `proy_techo_capas` VALUES ('1138', 'TECH-216', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('1139', 'TECH-216', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1140', 'TECH-216', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1141', 'TECH-217', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1142', 'TECH-217', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1143', 'TECH-217', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.20', '950.00', '0.98', '0.67');
INSERT INTO `proy_techo_capas` VALUES ('1144', 'TECH-217', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('1145', 'TECH-217', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1146', 'TECH-217', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1147', 'TECH-218', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1148', 'TECH-218', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1149', 'TECH-218', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE ARCILLA)', '0.25', '932.00', '0.62', '0.73');
INSERT INTO `proy_techo_capas` VALUES ('1150', 'TECH-218', '02', '37', 'Maracaibo', 'FRESCASA', '0.09', '25.00', '0.04', '0.96');
INSERT INTO `proy_techo_capas` VALUES ('1151', 'TECH-218', '02', '37', 'Maracaibo', 'CAMARA DE AIRE', '0.10', '1.22', '0.33', '1.06');
INSERT INTO `proy_techo_capas` VALUES ('1152', 'TECH-218', '02', '37', 'Maracaibo', 'CIELO RASO DE YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1153', 'TECH-228', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1154', 'TECH-228', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1155', 'TECH-228', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE POLIESTIRENO)', '0.15', '1181.90', '0.38', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1156', 'TECH-228', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1157', 'TECH-229', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1158', 'TECH-229', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1159', 'TECH-229', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE POLIESTIRENO)', '0.20', '1132.03', '0.39', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1160', 'TECH-229', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1161', 'TECH-230', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('1162', 'TECH-230', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1163', 'TECH-230', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1164', 'TECH-230', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE POLIESTIRENO)', '0.20', '1132.03', '0.39', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1165', 'TECH-230', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1166', 'TECH-231', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1167', 'TECH-231', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('1168', 'TECH-232', '02', '37', 'Maracaibo', 'TEJAS DE ARCILLA', '0.08', '281.00', '1.14', '0.84');
INSERT INTO `proy_techo_capas` VALUES ('1169', 'TECH-232', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1170', 'TECH-232', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1171', 'TECH-232', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE POLIESTIRENO)', '0.15', '1181.90', '0.38', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1172', 'TECH-232', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1173', 'TECH-233', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1174', 'TECH-233', '02', '37', 'Maracaibo', 'FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1175', 'TECH-234', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1176', 'TECH-234', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1177', 'TECH-234', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1178', 'TECH-234', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE POLIESTIRENO)', '0.15', '1181.90', '0.38', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1179', 'TECH-234', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1180', 'TECH-235', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1181', 'TECH-235', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1182', 'TECH-235', '02', '37', 'Maracaibo', 'CONCRETO PESADO', '0.05', '2300.00', '1.75', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1183', 'TECH-235', '02', '37', 'Maracaibo', 'LOSA (CP + BLOQUE DE POLIESTIRENO)', '0.20', '1132.03', '0.39', '0.90');
INSERT INTO `proy_techo_capas` VALUES ('1184', 'TECH-235', '02', '37', 'Maracaibo', 'FRISO', '0.02', '1008.00', '0.70', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1185', 'TECH-237', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1186', 'TECH-237', '02', '37', 'Maracaibo', 'CONCRETO LIGERO', '0.03', '1570.00', '0.53', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1187', 'TECH-237', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('1188', 'TECH-237', '02', '37', 'Maracaibo', 'FIBROCEMENTO', '0.01', '1099.00', '0.20', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1189', 'TECH-238', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1190', 'TECH-238', '02', '37', 'Maracaibo', 'FIBROCEMENTO', '0.01', '1099.00', '0.20', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1191', 'TECH-238', '02', '37', 'Maracaibo', 'POLIESTIRENO', '0.03', '41.00', '0.04', '1.40');
INSERT INTO `proy_techo_capas` VALUES ('1192', 'TECH-239', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1193', 'TECH-239', '02', '37', 'Maracaibo', 'FIBRA DE VIDRIO', '0.02', '95.00', '0.04', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1194', 'TECH-239', '02', '37', 'Maracaibo', 'FIBROCEMENTO', '0.01', '1099.00', '0.20', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1195', 'TECH-240', '02', '37', 'Maracaibo', 'MANTO ASFALTICO', '0.00', '2325.00', '1.15', '1.01');
INSERT INTO `proy_techo_capas` VALUES ('1196', 'TECH-240', '02', '37', 'Maracaibo', 'YESO', '0.01', '600.00', '0.25', '0.80');
INSERT INTO `proy_techo_capas` VALUES ('1197', 'TECH-240', '02', '37', 'Maracaibo', 'FIBROCEMENTO', '0.01', '1099.00', '0.20', '1.01');

-- ----------------------------
-- Table structure for `proy_tech_incl`
-- ----------------------------
DROP TABLE IF EXISTS `proy_tech_incl`;
CREATE TABLE `proy_tech_incl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_proy` varchar(14) NOT NULL DEFAULT '',
  `desc_proy` varchar(100) DEFAULT NULL,
  `pns_long` decimal(10,2) DEFAULT NULL,
  `peo_long` decimal(10,2) DEFAULT NULL,
  `pn_modelo` varchar(10) DEFAULT NULL,
  `pn_desc` varchar(1000) DEFAULT NULL,
  `pn_capas` decimal(3,0) DEFAULT NULL,
  `pn_tip_bloque` varchar(500) DEFAULT NULL,
  `pn_dimension` char(40) DEFAULT NULL,
  `pn_esp` decimal(10,2) DEFAULT NULL,
  `pn_densidad` decimal(10,2) DEFAULT NULL,
  `pn_conductividad` decimal(10,2) DEFAULT NULL,
  `pn_cal_esp` decimal(10,2) DEFAULT NULL,
  `ps_modelo` varchar(10) DEFAULT NULL,
  `ps_desc` varchar(1000) DEFAULT NULL,
  `ps_capas` decimal(3,0) DEFAULT NULL,
  `ps_tip_bloque` varchar(500) DEFAULT NULL,
  `ps_dimension` char(40) DEFAULT NULL,
  `ps_esp` decimal(10,2) DEFAULT NULL,
  `ps_densidad` decimal(10,2) DEFAULT NULL,
  `ps_conductividad` decimal(10,2) DEFAULT NULL,
  `ps_cal_esp` decimal(10,2) DEFAULT NULL,
  `pe_modelo` varchar(10) DEFAULT NULL,
  `pe_desc` varchar(1000) DEFAULT NULL,
  `pe_capas` decimal(3,0) DEFAULT NULL,
  `pe_tip_bloque` varchar(500) DEFAULT NULL,
  `pe_dimension` char(40) DEFAULT NULL,
  `pe_esp` decimal(10,2) DEFAULT NULL,
  `pe_densidad` decimal(10,2) DEFAULT NULL,
  `pe_conductividad` decimal(10,2) DEFAULT NULL,
  `pe_cal_esp` decimal(10,2) DEFAULT NULL,
  `po_modelo` varchar(10) DEFAULT NULL,
  `po_desc` varchar(1000) DEFAULT NULL,
  `po_capas` decimal(3,0) DEFAULT NULL,
  `po_tip_bloque` varchar(500) DEFAULT NULL,
  `po_dimension` char(40) DEFAULT NULL,
  `po_esp` decimal(10,2) DEFAULT NULL,
  `po_densidad` decimal(10,2) DEFAULT NULL,
  `po_conductividad` decimal(10,2) DEFAULT NULL,
  `po_cal_esp` decimal(10,2) DEFAULT NULL,
  `alt_yxz1` decimal(10,2) DEFAULT NULL,
  `alt_yxz2` decimal(10,2) DEFAULT NULL,
  `alt_yxz3` decimal(10,2) DEFAULT NULL,
  `pi_modelo` varchar(10) DEFAULT NULL,
  `pi_desc` varchar(1000) DEFAULT NULL,
  `pi_capas` decimal(3,0) DEFAULT NULL,
  `pi_tip_bloque` varchar(500) DEFAULT NULL,
  `pi_dimension` char(40) DEFAULT NULL,
  `pi_esp` decimal(10,2) DEFAULT NULL,
  `pi_dens` decimal(10,2) DEFAULT NULL,
  `pi_cond` decimal(10,2) DEFAULT NULL,
  `pi_cal_esp` decimal(10,2) DEFAULT NULL,
  `ti_modelo` varchar(10) DEFAULT NULL,
  `ti_desc` varchar(1000) DEFAULT NULL,
  `ti_capas` decimal(3,0) DEFAULT NULL,
  `ti_bloque` varchar(500) DEFAULT NULL,
  `ti_dims` char(40) DEFAULT NULL,
  `ti_esp` decimal(10,2) DEFAULT NULL,
  `ti_dens` decimal(10,2) DEFAULT NULL,
  `ti_cond` decimal(10,2) DEFAULT NULL,
  `ti_cal_esp` decimal(10,2) DEFAULT NULL,
  `pta_n_a` decimal(10,2) DEFAULT NULL,
  `pta_n_w` decimal(10,2) DEFAULT NULL,
  `pta_n_h` decimal(10,2) DEFAULT NULL,
  `pta_n_desc` varchar(1000) DEFAULT NULL,
  `pta_n_esp` decimal(10,2) DEFAULT NULL,
  `pta_n_dens` decimal(10,2) DEFAULT NULL,
  `pta_n_cond` decimal(10,2) DEFAULT NULL,
  `pta_n_calesp` decimal(10,2) DEFAULT NULL,
  `pta_s_a` decimal(10,2) DEFAULT NULL,
  `pta_s_w` decimal(10,2) DEFAULT NULL,
  `pta_s_h` decimal(10,2) DEFAULT NULL,
  `pta_s_desc` varchar(1000) DEFAULT NULL,
  `pta_s_esp` decimal(10,2) DEFAULT NULL,
  `pta_s_dens` decimal(10,2) DEFAULT NULL,
  `pta_s_cond` decimal(10,2) DEFAULT NULL,
  `pta_s_calesp` decimal(10,2) DEFAULT NULL,
  `pta_e_a` decimal(10,2) DEFAULT NULL,
  `pta_e_w` decimal(10,2) DEFAULT NULL,
  `pta_e_h` decimal(10,2) DEFAULT NULL,
  `pta_e_desc` varchar(1000) DEFAULT NULL,
  `pta_e_esp` decimal(10,2) DEFAULT NULL,
  `pta_e_dens` decimal(10,2) DEFAULT NULL,
  `pta_e_cond` decimal(10,2) DEFAULT NULL,
  `pta_e_calesp` decimal(10,2) DEFAULT NULL,
  `pta_o_a` decimal(10,2) DEFAULT NULL,
  `pta_o_w` decimal(10,2) DEFAULT NULL,
  `pta_o_h` decimal(10,2) DEFAULT NULL,
  `pta_o_desc` varchar(1000) DEFAULT NULL,
  `pta_o_esp` decimal(10,2) DEFAULT NULL,
  `pta_o_dens` decimal(10,2) DEFAULT NULL,
  `pta_o_cond` decimal(10,2) DEFAULT NULL,
  `pta_o_calesp` decimal(10,2) DEFAULT NULL,
  `vtna_n_a` decimal(10,2) DEFAULT NULL,
  `vtna_n_b` decimal(10,2) DEFAULT NULL,
  `vtna_n_w` decimal(10,2) DEFAULT NULL,
  `vtna_n_h` decimal(10,2) DEFAULT NULL,
  `vtna_n_desc` varchar(1000) DEFAULT NULL,
  `vtna_n_esp` decimal(10,2) DEFAULT NULL,
  `vtna_n_dens` decimal(10,2) DEFAULT NULL,
  `vtna_n_cond` decimal(10,2) DEFAULT NULL,
  `vtna_n_calesp` decimal(10,2) DEFAULT NULL,
  `vtna_s_a` decimal(10,2) DEFAULT NULL,
  `vtna_s_b` decimal(10,2) DEFAULT NULL,
  `vtna_s_w` decimal(10,2) DEFAULT NULL,
  `vtna_s_h` decimal(10,2) DEFAULT NULL,
  `vtna_s_desc` varchar(1000) DEFAULT NULL,
  `vtna_s_esp` decimal(10,2) DEFAULT NULL,
  `vtna_s_dens` decimal(10,2) DEFAULT NULL,
  `vtna_s_cond` decimal(10,2) DEFAULT NULL,
  `vtna_s_calesp` decimal(10,2) DEFAULT NULL,
  `vtna_e_a` decimal(10,2) DEFAULT NULL,
  `vtna_e_b` decimal(10,2) DEFAULT NULL,
  `vtna_e_w` decimal(10,2) DEFAULT NULL,
  `vtna_e_h` decimal(10,2) DEFAULT NULL,
  `vtna_e_desc` varchar(1000) DEFAULT NULL,
  `vtna_e_esp` decimal(10,2) DEFAULT NULL,
  `vtna_e_dens` decimal(10,2) DEFAULT NULL,
  `vtna_e_cond` decimal(10,2) DEFAULT NULL,
  `vtna_e_calesp` decimal(10,2) DEFAULT NULL,
  `vtna_o_a` decimal(10,2) DEFAULT NULL,
  `vtna_o_b` decimal(10,2) DEFAULT NULL,
  `vtna_o_w` decimal(10,2) DEFAULT NULL,
  `vtna_o_h` decimal(10,2) DEFAULT NULL,
  `vtna_o_desc` varchar(1000) DEFAULT NULL,
  `vtna_o_esp` decimal(10,2) DEFAULT NULL,
  `vtna_o_dens` decimal(10,2) DEFAULT NULL,
  `vtna_o_cond` decimal(10,2) DEFAULT NULL,
  `vtna_o_calesp` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`,`cod_proy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_tech_incl
-- ----------------------------

-- ----------------------------
-- Table structure for `proy_tech_plan`
-- ----------------------------
DROP TABLE IF EXISTS `proy_tech_plan`;
CREATE TABLE `proy_tech_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_proy` varchar(14) NOT NULL DEFAULT '',
  `desc_proy` varchar(100) DEFAULT NULL,
  `pns_long` decimal(10,2) DEFAULT NULL,
  `peo_long` decimal(10,2) DEFAULT NULL,
  `pn_modelo` varchar(10) DEFAULT NULL,
  `pn_desc` varchar(1000) DEFAULT NULL,
  `pn_capas` decimal(3,0) DEFAULT NULL,
  `pn_bloques` varchar(500) DEFAULT NULL,
  `pn_dimensiones` char(40) DEFAULT NULL,
  `pn_esp` decimal(10,2) DEFAULT NULL,
  `pn_dens` decimal(10,2) DEFAULT NULL,
  `pn_cond` decimal(10,2) DEFAULT NULL,
  `pn_calesp` decimal(10,2) DEFAULT NULL,
  `ps_modelo` varchar(10) DEFAULT NULL,
  `ps_desc` varchar(1000) DEFAULT NULL,
  `ps_capas` decimal(3,0) DEFAULT NULL,
  `ps_bloques` varchar(500) DEFAULT NULL,
  `ps_dimensiones` char(40) DEFAULT NULL,
  `ps_esp` decimal(10,2) DEFAULT NULL,
  `ps_dens` decimal(10,2) DEFAULT NULL,
  `ps_cond` decimal(10,2) DEFAULT NULL,
  `ps_calesp` decimal(10,2) DEFAULT NULL,
  `pe_modelo` varchar(10) DEFAULT NULL,
  `pe_desc` varchar(1000) DEFAULT NULL,
  `pe_capas` decimal(3,0) DEFAULT NULL,
  `pe_bloques` varchar(500) DEFAULT NULL,
  `pe_dimensiones` char(40) DEFAULT NULL,
  `pe_esp` decimal(10,2) DEFAULT NULL,
  `pe_dens` decimal(10,2) DEFAULT NULL,
  `pe_cond` decimal(10,2) DEFAULT NULL,
  `pe_calesp` decimal(10,2) DEFAULT NULL,
  `po_modelo` varchar(10) DEFAULT NULL,
  `po_desc` varchar(1000) DEFAULT NULL,
  `po_capas` decimal(3,0) DEFAULT NULL,
  `po_bloques` varchar(500) DEFAULT NULL,
  `po_dimensiones` char(40) DEFAULT NULL,
  `po_esp` decimal(10,2) DEFAULT NULL,
  `po_dens` decimal(10,2) DEFAULT NULL,
  `po_cond` decimal(10,2) DEFAULT NULL,
  `po_calesp` decimal(10,2) DEFAULT NULL,
  `alt_yz` decimal(10,2) DEFAULT NULL,
  `alt_yyz` decimal(10,2) DEFAULT NULL,
  `alt_xz` decimal(10,2) DEFAULT NULL,
  `alt_xxz` decimal(10,2) DEFAULT NULL,
  `pix` decimal(10,2) DEFAULT NULL,
  `piy` decimal(10,2) DEFAULT NULL,
  `pi_orientacion` varchar(20) DEFAULT NULL,
  `pi_long` decimal(10,2) DEFAULT NULL,
  `pi_alt` decimal(10,2) DEFAULT NULL,
  `pi_sep` decimal(10,2) DEFAULT NULL,
  `pi_modelo` varchar(10) DEFAULT NULL,
  `pi_desc` varchar(1000) DEFAULT NULL,
  `pi_capas` decimal(3,0) DEFAULT NULL,
  `pi_bloques` varchar(500) DEFAULT NULL,
  `pi_dimensiones` char(40) DEFAULT NULL,
  `pi_esp` decimal(10,2) DEFAULT NULL,
  `pi_dens` decimal(10,2) DEFAULT NULL,
  `pi_cond` decimal(10,2) DEFAULT NULL,
  `pi_calesp` decimal(10,2) DEFAULT NULL,
  `tpl_modelo` varchar(10) DEFAULT NULL,
  `tpl_desc` varchar(1000) DEFAULT NULL,
  `tpl_capas` decimal(3,0) DEFAULT NULL,
  `tpl_bloques` varchar(500) DEFAULT NULL,
  `tpl_dimensiones` char(40) DEFAULT NULL,
  `tpl_esp` decimal(10,2) DEFAULT NULL,
  `tpl_dens` decimal(10,2) DEFAULT NULL,
  `tpl_cond` decimal(10,2) DEFAULT NULL,
  `tpl_calesp` decimal(10,2) DEFAULT NULL,
  `pta_i_n` decimal(10,2) DEFAULT NULL,
  `pta_e_n` decimal(10,2) DEFAULT NULL,
  `pta_h_n` decimal(10,2) DEFAULT NULL,
  `pta_desc_n` varchar(1000) DEFAULT NULL,
  `pta_esp_n` decimal(10,2) DEFAULT NULL,
  `pta_dens_n` decimal(10,2) DEFAULT NULL,
  `pta_cond_n` decimal(10,2) DEFAULT NULL,
  `pta_calesp_n` decimal(10,2) DEFAULT NULL,
  `pta_i_s` decimal(10,2) DEFAULT NULL,
  `pta_e_s` decimal(10,2) DEFAULT NULL,
  `pta_h_s` decimal(10,2) DEFAULT NULL,
  `pta_desc_s` varchar(1000) DEFAULT NULL,
  `pta_esp_s` decimal(10,2) DEFAULT NULL,
  `pta_dens_s` decimal(10,2) DEFAULT NULL,
  `pta_cond_s` decimal(10,2) DEFAULT NULL,
  `pta_calesp_s` decimal(10,2) DEFAULT NULL,
  `pta_i_e` decimal(10,2) DEFAULT NULL,
  `pta_e_e` decimal(10,2) DEFAULT NULL,
  `pta_h_e` decimal(10,2) DEFAULT NULL,
  `pta_desc_e` varchar(1000) DEFAULT NULL,
  `pta_esp_e` decimal(10,2) DEFAULT NULL,
  `pta_dens_e` decimal(10,2) DEFAULT NULL,
  `pta_cond_e` decimal(10,2) DEFAULT NULL,
  `pta_calesp_e` decimal(10,2) DEFAULT NULL,
  `pta_i_o` decimal(10,2) DEFAULT NULL,
  `pta_e_o` decimal(10,2) DEFAULT NULL,
  `pta_h_o` decimal(10,2) DEFAULT NULL,
  `pta_desc_o` varchar(1000) DEFAULT NULL,
  `pta_esp_o` decimal(10,2) DEFAULT NULL,
  `pta_dens_o` decimal(10,2) DEFAULT NULL,
  `pta_cond_o` decimal(10,2) DEFAULT NULL,
  `pta_calesp_o` decimal(10,2) DEFAULT NULL,
  `vna_a_n` decimal(10,2) DEFAULT NULL,
  `vna_b_n` decimal(10,2) DEFAULT NULL,
  `vna_w_n` decimal(10,2) DEFAULT NULL,
  `vna_h_n` decimal(10,2) DEFAULT NULL,
  `vna_desc_n` varchar(1000) DEFAULT NULL,
  `vna_esp_n` decimal(10,2) DEFAULT NULL,
  `vna_dens_n` decimal(10,2) DEFAULT NULL,
  `vna_cond_n` decimal(10,2) DEFAULT NULL,
  `vna_calesp_n` decimal(10,2) DEFAULT NULL,
  `vna_a_s` decimal(10,2) DEFAULT NULL,
  `vna_b_s` decimal(10,2) DEFAULT NULL,
  `vna_w_s` decimal(10,2) DEFAULT NULL,
  `vna_h_s` decimal(10,2) DEFAULT NULL,
  `vna_desc_s` varchar(1000) DEFAULT NULL,
  `vna_esp_s` decimal(10,2) DEFAULT NULL,
  `vna_dens_s` decimal(10,2) DEFAULT NULL,
  `vna_cond_s` decimal(10,2) DEFAULT NULL,
  `vna_calesp_s` decimal(10,2) DEFAULT NULL,
  `vna_a_e` decimal(10,2) DEFAULT NULL,
  `vna_b_e` decimal(10,2) DEFAULT NULL,
  `vna_w_e` decimal(10,2) DEFAULT NULL,
  `vna_h_e` decimal(10,2) DEFAULT NULL,
  `vna_desc_e` varchar(1000) DEFAULT NULL,
  `vna_esp_e` decimal(10,2) DEFAULT NULL,
  `vna_dens_e` decimal(10,2) DEFAULT NULL,
  `vna_cond_e` decimal(10,2) DEFAULT NULL,
  `vna_calesp_e` decimal(10,2) DEFAULT NULL,
  `vna_a_o` decimal(10,2) DEFAULT NULL,
  `vna_b_o` decimal(10,2) DEFAULT NULL,
  `vna_w_o` decimal(10,2) DEFAULT NULL,
  `vna_h_o` decimal(10,2) DEFAULT NULL,
  `vna_desc_o` varchar(1000) DEFAULT NULL,
  `vna_esp_o` decimal(10,2) DEFAULT NULL,
  `vna_dens_o` decimal(10,2) DEFAULT NULL,
  `vna_cond_o` decimal(10,2) DEFAULT NULL,
  `vna_calesp_o` decimal(10,2) DEFAULT NULL,
  `pn` varchar(1) DEFAULT NULL,
  `ps` varchar(1) DEFAULT NULL,
  `pe` varchar(1) DEFAULT NULL,
  `po` varchar(1) DEFAULT NULL,
  `pins` varchar(1) DEFAULT NULL,
  `pieo` varchar(1) DEFAULT NULL,
  `tech` varchar(1) DEFAULT NULL,
  `pis` varchar(1) DEFAULT NULL,
  `ptan` varchar(1) DEFAULT NULL,
  `ptas` varchar(1) DEFAULT NULL,
  `ptae` varchar(1) DEFAULT NULL,
  `ptao` varchar(1) DEFAULT NULL,
  `vnan` varchar(1) DEFAULT NULL,
  `vnas` varchar(1) DEFAULT NULL,
  `vnae` varchar(1) DEFAULT NULL,
  `vnao` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`,`cod_proy`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_tech_plan
-- ----------------------------
INSERT INTO `proy_tech_plan` VALUES ('69', 'PROY-19-07-001', 'Caso CCPTA', '6.00', '10.00', 'COMP-005', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', '3', 'ALIGERADO 3H', '15*20*40', '0.02', '1008.00', '0.70', '1.01', 'COMP-005', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', '3', 'ALIGERADO 3H', '15*20*40', '0.02', '1008.00', '0.70', '1.01', 'COMP-005', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', '3', 'ALIGERADO 3H', '15*20*40', '0.02', '1008.00', '0.70', '1.01', 'COMP-005', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', '3', 'ALIGERADO 3H', '15*20*40', '0.02', '1008.00', '0.70', '1.01', '3.00', '3.00', '0.00', '0.00', '1.70', '1.70', 'Este - Oeste', '10.00', '0.00', '1.70', 'COMP-005', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', '3', 'ALIGERADO 3H', '15*20*40', '0.02', '1008.00', '0.70', '1.01', 'TECH-001', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAVIDADES Y 15 CM DE ESPESOR, IMPERMEABILIZADA', '4', 'ARCILLA 9H', '15*20*30', '0.02', '1008.00', '0.70', '1.01', '1.00', '0.70', '1.90', 'Madera entamborada Maciza', '0.02', '600.00', '1.32', '0.13', '1.00', '0.70', '1.90', 'Madera entamborada Maciza', '0.02', '600.00', '1.32', '0.13', '1.00', '0.70', '1.90', 'Madera entamborada Maciza', '0.02', '600.00', '1.32', '0.13', '1.00', '0.70', '1.90', 'Madera entamborada Maciza', '0.02', '600.00', '1.32', '0.13', '2.50', '1.50', '1.20', '1.00', 'Vidrio monolitico', '0.05', '2600.00', '100.00', '0.72', '2.50', '1.50', '1.20', '1.00', 'Vidrio monolitico', '0.05', '2600.00', '100.00', '0.72', '2.50', '1.50', '1.20', '1.00', 'Vidrio monolitico', '0.05', '2600.00', '100.00', '0.72', '2.50', '1.50', '1.20', '1.00', 'Vidrio monolitico', '0.05', '2600.00', '100.00', '0.72', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `proy_tech_plan` VALUES ('70', 'PROY-19-07-002', 'Caso XX', '6.00', '10.00', 'COMP-005', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', '3', 'ALIGERADO 3H', '15*20*40', '0.02', '1008.00', '0.70', '1.01', 'COMP-005', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', '3', 'ALIGERADO 3H', '15*20*40', '0.02', '1008.00', '0.70', '1.01', 'COMP-005', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', '3', 'ALIGERADO 3H', '15*20*40', '0.02', '1008.00', '0.70', '1.01', 'COMP-005', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', '3', 'ALIGERADO 3H', '15*20*40', '0.02', '1008.00', '0.70', '1.01', '3.00', '3.00', '0.00', '0.00', '1.70', '1.70', 'Este - Oeste', '10.00', '0.00', '1.70', 'COMP-005', 'BLOQUE ALIGERADO DE 15 CM  DE ESPESOR CON 3 CAVIDADES Y FRISO EN AMBAS CARAS', '3', 'ALIGERADO 3H', '15*20*40', '0.02', '1008.00', '0.70', '1.01', 'TECH-001', 'LOSA NERVADA TRADICIONAL CON BLOQUE DE ARCILLA 9 CAVIDADES Y 15 CM DE ESPESOR, IMPERMEABILIZADA', '4', 'ARCILLA 9H', '15*20*30', '0.02', '1008.00', '0.70', '1.01', '1.00', '0.70', '1.90', 'Madera entamborada Maciza', '0.02', '600.00', '1.32', '0.13', '1.00', '0.70', '1.90', 'Madera entamborada Maciza', '0.02', '600.00', '1.32', '0.13', '1.00', '0.70', '1.90', 'Madera entamborada Maciza', '0.02', '600.00', '1.32', '0.13', '1.00', '0.70', '1.90', 'Madera entamborada Maciza', '0.02', '600.00', '1.32', '0.13', '2.50', '1.50', '1.20', '1.00', 'Vidrio monolitico', '0.05', '2600.00', '100.00', '0.72', '2.50', '1.50', '1.20', '1.00', 'Vidrio monolitico', '0.05', '2600.00', '100.00', '0.72', '2.50', '1.50', '1.20', '1.00', 'Vidrio monolitico', '0.05', '2600.00', '100.00', '0.72', '2.50', '1.50', '1.20', '1.00', 'Vidrio monolitico', '0.05', '2600.00', '100.00', '0.72', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for `proy_ventanas`
-- ----------------------------
DROP TABLE IF EXISTS `proy_ventanas`;
CREATE TABLE `proy_ventanas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proy_cont` varchar(3) DEFAULT NULL,
  `proy_pais` varchar(3) DEFAULT NULL,
  `proy_region` varchar(60) DEFAULT NULL,
  `proy_descripcion` varchar(60) NOT NULL,
  `proy_espesor` decimal(10,2) NOT NULL,
  `proy_densidad` decimal(10,2) NOT NULL,
  `proy_conductividad` decimal(10,2) NOT NULL,
  `proy_calorespecifico` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proy_ventanas
-- ----------------------------
INSERT INTO `proy_ventanas` VALUES ('7', '02', '37', 'Maracaibo', 'Ninguno', '0.00', '0.00', '0.00', '0.00');
INSERT INTO `proy_ventanas` VALUES ('8', '02', '37', 'Maracaibo', 'Vidrio monolitico', '0.05', '2600.00', '100.00', '0.72');
INSERT INTO `proy_ventanas` VALUES ('9', '02', '37', 'Maracaibo', 'Vidrio monolitico Oscuro', '0.05', '2500.00', '0.03', '0.75');
INSERT INTO `proy_ventanas` VALUES ('10', '02', '37', 'Maracaibo', 'Vidrio doble', '0.05', '2500.00', '0.01', '0.75');
INSERT INTO `proy_ventanas` VALUES ('11', '02', '37', 'Maracaibo', 'Vidrio Sodocálcico', '0.02', '2500.00', '100.00', '0.75');
INSERT INTO `proy_ventanas` VALUES ('12', '02', '37', 'Maracaibo', 'Vidrio prensado', '0.02', '2000.00', '1.20', '0.75');
INSERT INTO `proy_ventanas` VALUES ('13', '02', '37', 'Maracaibo', 'Acrilico', '0.02', '1050.00', '0.20', '1.50');

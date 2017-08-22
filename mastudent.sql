/*
Navicat MySQL Data Transfer

Source Server         : connect
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : db

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2015-11-11 21:14:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `mastudent`
-- ----------------------------
DROP TABLE IF EXISTS `mastudent`;
CREATE TABLE `mastudent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `stunumber` int(20) DEFAULT NULL,
  `myid` varchar(225) CHARACTER SET gb2312 DEFAULT NULL,
  `xueyuan` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `major` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `sex` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `usualscore` int(11) DEFAULT NULL,
  `allscore` int(11) DEFAULT NULL,
  `machscore` int(11) DEFAULT NULL,
  `page` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `teachermassage` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mastudent
-- ----------------------------
INSERT INTO `mastudent` VALUES ('1', '张三', '1111111111', '440903199908192987', '数学与计算科学学院', '信计', '男', '80', '80', '80', null, 'uploadimg/1445766921.jpg', null);
INSERT INTO `mastudent` VALUES ('2', '李四', '222222', '44093199908192987', '数学与计算科学学院', '信计', '女', null, '80', '80', null, 'uploadimg/1445904568.jpg', null);
INSERT INTO `mastudent` VALUES ('3', '王五', '888888888', '440903199908192987', '数学与计算科学学院', '信计', '女', null, null, '80', null, 'uploadimg/1445904568.jpg', null);
INSERT INTO `mastudent` VALUES ('4', '啪啪啪', '2014234111', '2147483647', '数学与计算科学学院', '信计', '女', null, null, '80', null, 'uploadimg/1445904568.jpg', null);
INSERT INTO `mastudent` VALUES ('5', '啪啪啪', '2014234111', '2147483647', '数学与计算科学学院', '信计', '男', null, null, '80', null, 'uploadimg/1445904568.jpg', null);
INSERT INTO `mastudent` VALUES ('6', '王五  ', '2013234135', '440903199908192987', '数学与计算科学学院', '信计', '男', null, null, '80', null, 'uploadimg/1446731307.jpg', null);
INSERT INTO `mastudent` VALUES ('7', '马六 ', '2013234109', '440903199908192987', '数学与计算科学学院', '统计', '男', null, null, '80', null, 'uploadimg/1445904568.jpg', null);
INSERT INTO `mastudent` VALUES ('10', '发发发 ', '9999999', '440903199908192987', '数学与计算科学学院', '统计', '女', null, null, '80', null, 'uploadimg/1445904568.jpg', null);
INSERT INTO `mastudent` VALUES ('14', '品牌', '2013234120', '440903199908192987', '数学与计算科学学院', '统计', '男', null, null, '80', null, 'uploadimg/1445904568.jpg', null);
INSERT INTO `mastudent` VALUES ('16', '水水水', '2013234109', '44090199938327', '体科院', '篮球', '女', null, null, '80', null, 'uploadimg/1446731307.jpg', null);
INSERT INTO `mastudent` VALUES ('17', '可了解了客户', '2147483647', '440903199908192987', '数学与计算科学学院', '统计', '男', null, null, '80', null, 'uploadimg/1446731307.jpg', null);
INSERT INTO `mastudent` VALUES ('18', '啥的花费', '2013234123', '440903199908192987', '数学与计算科学学院', '信计', '男', null, null, '80', null, 'uploadimg/1446731307.jpg', null);
INSERT INTO `mastudent` VALUES ('19', '考看', '2013234123', '440903199908192987', '数学与计算科学学院', '信计', '男', null, null, '80', null, 'uploadimg/1446731307.jpg', null);

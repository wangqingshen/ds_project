/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : deshang

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2016-05-18 22:41:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dh_posts
-- ----------------------------
DROP TABLE IF EXISTS `dh_posts`;
CREATE TABLE `dh_posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned DEFAULT '0' COMMENT '发表者id',
  `post_keywords` varchar(150) NOT NULL COMMENT 'seo keywords',
  `post_source` varchar(150) DEFAULT NULL COMMENT '转载文章的来源',
  `post_date` datetime DEFAULT '2000-01-01 00:00:00' COMMENT 'post创建日期，永久不变，一般不显示给用户',
  `post_content` longtext COMMENT 'post内容',
  `post_title` text COMMENT 'post标题',
  `post_excerpt` text COMMENT 'post摘要',
  `post_status` int(2) DEFAULT '1' COMMENT 'post状态，1已审核，0未审核',
  `comment_status` int(2) DEFAULT '1' COMMENT '评论状态，1允许，0不允许',
  `post_modified` datetime DEFAULT '2000-01-01 00:00:00' COMMENT 'post更新时间，可在前台修改，显示给用户',
  `post_content_filtered` longtext,
  `post_parent` bigint(20) unsigned DEFAULT '0' COMMENT 'post的父级post id,表示post层级关系',
  `post_type` int(2) DEFAULT NULL,
  `post_mime_type` varchar(100) DEFAULT '',
  `comment_count` bigint(20) DEFAULT '0',
  `smeta` text COMMENT 'post的扩展字段，保存相关扩展属性，如缩略图；格式为json',
  `post_hits` int(11) DEFAULT '0' COMMENT 'post点击数，查看数',
  `post_like` int(11) DEFAULT '0' COMMENT 'post赞数',
  `istop` tinyint(1) NOT NULL DEFAULT '0' COMMENT '置顶 1置顶； 0不置顶',
  `recommended` tinyint(1) NOT NULL DEFAULT '0' COMMENT '推荐 1推荐 0不推荐',
  `post_link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`id`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`),
  KEY `post_date` (`post_date`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='Portal文章表';

-- ----------------------------
-- Records of dh_posts
-- ----------------------------
INSERT INTO `dh_posts` VALUES ('1', '1', '123', '', '2016-04-11 19:52:35', '<p>的撒的撒打算</p>', '测试1', '大的撒大大', '1', '1', '2016-04-11 19:52:09', null, '0', null, '', '0', '{\"thumb\":\"\"}', '1', '0', '0', '0', null);
INSERT INTO `dh_posts` VALUES ('7', '1', '', null, '2016-05-18 20:03:22', 'dafdsfdgdsgfdsgdgdfgfdgfdgfd', '测试案例2', null, '1', '1', '2000-01-01 00:00:00', null, '0', null, '', '0', '{\"thumb\":\"20160518\\/573c59d8e1131.png\"}', '3', '0', '0', '0', null);
INSERT INTO `dh_posts` VALUES ('8', '1', '', null, '2016-05-18 20:53:41', '反对党是梵蒂冈的复合弓 的士大夫的', 'www.qq.com', null, '1', '1', '2000-01-01 00:00:00', null, '0', null, '', '0', '{\"thumb\":\"20160518\\/573c65d305ed4.png\"}', '0', '0', '0', '0', null);
INSERT INTO `dh_posts` VALUES ('9', '1', '', null, '2016-05-18 20:54:08', 'fdhgfhfghfgghfd', 'www.qq.com', null, '1', '1', '2000-01-01 00:00:00', null, '0', null, '', '0', '{\"thumb\":\"20160518\\/573c65eee95e2.png\"}', '0', '0', '0', '0', null);
INSERT INTO `dh_posts` VALUES ('10', '1', '', null, '2016-05-18 20:54:25', 'dgvfdgfgfdgfd', 'sadasd ', null, '1', '1', '2000-01-01 00:00:00', null, '0', null, '', '0', '{\"thumb\":\"20160518\\/573c65ffd4da2.png\"}', '0', '0', '0', '0', null);
INSERT INTO `dh_posts` VALUES ('11', '1', '', null, '2016-05-18 20:54:40', 'fdgfdgfdgfdgfdgfd', 'www.baidu.com', null, '1', '1', '2000-01-01 00:00:00', null, '0', null, '', '0', '{\"thumb\":\"20160518\\/573c660ed87ac.png\"}', '0', '0', '0', '0', null);
INSERT INTO `dh_posts` VALUES ('12', '1', '', null, '2016-05-18 22:40:11', '测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6', 'www.qq.com', null, '1', '1', '2000-01-01 00:00:00', null, '0', null, '', '0', '{\"thumb\":\"20160518\\/573c7ec9077e8.png\"}', '0', '0', '0', '0', null);
INSERT INTO `dh_posts` VALUES ('13', '1', '', null, '2016-05-18 22:40:40', '测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6测试投资案例6', '测试投资案例7', null, '1', '1', '2000-01-01 00:00:00', null, '0', null, '', '0', '{\"thumb\":\"20160518\\/573c7ee66f6bb.png\"}', '0', '0', '0', '0', 'www.nao.com');

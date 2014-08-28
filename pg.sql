-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014-08-28 10:05:48
-- 服务器版本: 5.1.50-community-log
-- PHP 版本: 5.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `pg`
--

-- --------------------------------------------------------

--
-- 表的结构 `pg_field`
--

CREATE TABLE IF NOT EXISTS `pg_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(100) NOT NULL COMMENT '名称',
  `length` int(11) NOT NULL COMMENT '长度',
  `comment` varchar(255) NOT NULL COMMENT '注释',
  `type` varchar(100) NOT NULL COMMENT '类型',
  `default` varchar(255) NOT NULL COMMENT '默认值',
  `model_id` int(11) NOT NULL COMMENT '模型ID',
  `form_id` int(11) NOT NULL COMMENT '表单类型ID',
  `validate` varchar(255) NOT NULL COMMENT '验证规则',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pg_form`
--

CREATE TABLE IF NOT EXISTS `pg_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(100) NOT NULL COMMENT '名称',
  `html` varchar(255) NOT NULL COMMENT '模板路径',
  `php` varchar(255) NOT NULL COMMENT '代码片断路径',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `pg_form`
--

INSERT INTO `pg_form` (`id`, `name`, `html`, `php`) VALUES
(1, '文本框', 'input.html', 'input.php');

-- --------------------------------------------------------

--
-- 表的结构 `pg_model`
--

CREATE TABLE IF NOT EXISTS `pg_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(100) NOT NULL COMMENT '表名',
  `comment` varchar(255) NOT NULL COMMENT '注释',
  `parent` int(11) NOT NULL COMMENT '父节点',
  `status` int(11) NOT NULL COMMENT '状态/*安装||卸载=>1||0*/',
  `time` int(11) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

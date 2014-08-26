CREATE TABLE IF NOT EXISTS `pg_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(100) DEFAULT NULL COMMENT '名称',
  `action` varchar(100) DEFAULT NULL COMMENT '动作',
  `icon` varchar(50) DEFAULT NULL COMMENT '图标',
  `parent` int(11) NOT NULL DEFAULT '0' COMMENT '父节点ID',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '导航/*1||0=>是||否*/',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='栏目系统' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(100) DEFAULT NULL COMMENT '组名称',
  `menu` varchar(500) DEFAULT NULL COMMENT '栏目ID集合/*serialize序列化*/',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='权限组' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(255) DEFAULT NULL COMMENT '名称',
  `alias` varchar(50) DEFAULT NULL COMMENT '别名',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `group` varchar(255) DEFAULT NULL COMMENT '权限ID/*serialize序列化*/',
  `random` varchar(50) DEFAULT NULL COMMENT '随机串/*用于MD5加密*/',
  `attribute` text DEFAULT NULL COMMENT '属性/*serialize序列化*/',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户系统' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `alias` varchar(50) DEFAULT NULL COMMENT '别名',
  `key` varchar(50) DEFAULT NULL COMMENT '键名',
  `attribute` text DEFAULT NULL COMMENT '属性/*serialize序列化*/',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='系统配置' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `intro` varchar(500) DEFAULT NULL COMMENT '简介',
  `picture` varchar(100) DEFAULT NULL COMMENT '图片',
  `module` varchar(20) DEFAULT NULL COMMENT '模块名称/*article||video…*/',
  `join_id` int(11) DEFAULT '0' COMMENT '关联ID',
  `soft` int(11) DEFAULT '0' COMMENT '排序',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='相册系统' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `intro` varchar(500) DEFAULT NULL COMMENT '简介',
  `picture` varchar(100) DEFAULT NULL COMMENT '图片',
  `a_tpl` varchar(255) DEFAULT NULL COMMENT '列表模板',
  `b_tpl` varchar(255) DEFAULT NULL COMMENT '详细模板',
  `parent` int(11) DEFAULT '0' COMMENT '父节点',
  `attribute` text DEFAULT NULL COMMENT '属性/*serialize序列化*/',
  `user` int(11) DEFAULT '0' COMMENT '用户ID',
  `soft` int(11) DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='分类管理' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `intro` varchar(500) DEFAULT NULL COMMENT '简介',
  `picture` varchar(100) DEFAULT NULL COMMENT '图片',
  `category` int(11) DEFAULT '0' COMMENT '分类ID',
  `content` text DEFAULT NULL COMMENT '内容',
  `photo` int(11) DEFAULT '0' COMMENT '相册ID',
  `click` int(11) DEFAULT '0' COMMENT '点击量',
  `user`int(11) DEFAULT '0' COMMENT '用户ID',
  `soft` int(11) DEFAULT '0' COMMENT '排序',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章系统' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `intro` varchar(500) DEFAULT NULL COMMENT '简介',
  `picture` varchar(100) DEFAULT NULL COMMENT '图片',
  `category` int(11) DEFAULT '0' COMMENT '分类ID',
  `size` varchar(50) DEFAULT NULL COMMENT '大小',
  `duration` varchar(50) DEFAULT NULL COMMENT '时长',
  `click` int(11) DEFAULT '0' COMMENT '点击量',
  `user` int(11) DEFAULT '0' COMMENT '用户ID',
  `file` varchar(255) DEFAULT NULL COMMENT '文件地址/*需处理本地或远程*/',
  `soft` int(11) DEFAULT '0' COMMENT '排序',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='视频系统' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `intro` varchar(500) DEFAULT NULL COMMENT '简介',
  `picture` varchar(100) DEFAULT NULL COMMENT '图片',
  `content` text DEFAULT NULL COMMENT '内容',
  `click` int(11) DEFAULT '0' COMMENT '点击量',
  `user` int(11) DEFAULT '0' COMMENT '用户ID',
  `soft` int(11) DEFAULT '0' COMMENT '排序',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='单页系统' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `intro` varchar(500) DEFAULT NULL COMMENT '简介',
  `file` text DEFAULT NULL COMMENT '文件地址集合/*serialize序列化*/',
  `style` int(11) DEFAULT '0' COMMENT '样式',
  `click` int(11) DEFAULT '0' COMMENT '点击量',
  `user` int(11) DEFAULT '0' COMMENT '用户ID',
  `soft` int(11) DEFAULT '0' COMMENT '排序',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='广告系统' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `intro` varchar(500) DEFAULT NULL COMMENT '简介',
  `content` text DEFAULT NULL COMMENT '内容',
  `place` varchar(50) DEFAULT NULL COMMENT '职位',
  `number` varchar(50) DEFAULT NULL COMMENT '人数',
  `address` varchar(100) DEFAULT NULL COMMENT '地点',
  `money` varchar(50) DEFAULT NULL COMMENT '待遇',
  `edu` varchar(50) DEFAULT NULL COMMENT '学历',
  `age` varchar(50) DEFAULT NULL COMMENT '年龄',
  `start_time` datetime NOT NULL COMMENT '开始时间',
  `end_time` datetime NOT NULL COMMENT '结束时间',
  `user` int(11) DEFAULT '0' COMMENT '用户ID',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='招聘系统' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(50) DEFAULT NULL COMMENT '留言者',
  `parent` int(11) DEFAULT '0' COMMENT '父节点',
  `content` text DEFAULT NULL COMMENT '内容',
  `module` varchar(20) DEFAULT NULL COMMENT '模块名称/*article||video…*/',
  `a_click` int(11) DEFAULT '0' COMMENT '顶',
  `b_click` int(11) DEFAULT '0' COMMENT '踩',
  `join_id` int(11) DEFAULT '0' COMMENT '关联ID',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言系统' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `intro` varchar(500) DEFAULT NULL COMMENT '简介',
  `content` text DEFAULT NULL COMMENT '内容',
  `type` int(1) DEFAULT '0' COMMENT '类型/*0||1=>单选||多选*/',
  `robot` int(1) DEFAULT '0' COMMENT '投票验证/*0||1=>不验证||验证IP*/',
  `interval` varchar(100) DEFAULT '86400000' COMMENT '同IP允许投票时间间隔/*默认一天86400000，毫秒为单位*/',
  `user` int(11) DEFAULT '0' COMMENT '用户ID',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='投票系统' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_vote_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `vote` int(11) DEFAULT '0' COMMENT '投票ID',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='投票选项' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_vote_ip` (
  `vote_item` int(11) DEFAULT '0' COMMENT '投票选项ID',
  `ip` varchar(255) DEFAULT NULL COMMENT 'IP',
  `time` datetime NOT NULL COMMENT '创建时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='IP记录' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `lng` varchar(200) DEFAULT NULL COMMENT '坐标',
  `lat` varchar(200) DEFAULT NULL COMMENT '坐标',
  `user` int(11) DEFAULT '0' COMMENT '用户ID',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='地图标注' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `logo` varchar(100) DEFAULT NULL COMMENT '商标',
  `url` varchar(200) DEFAULT NULL COMMENT '链接',
  `user` int(11) DEFAULT '0' COMMENT '用户ID',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='友情链接' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `intro` varchar(500) DEFAULT NULL COMMENT '简介',
  `picture` varchar(100) DEFAULT NULL COMMENT '图片',
  `category` int(11) DEFAULT '0' COMMENT '分类ID',
  `content` text DEFAULT NULL COMMENT '内容',
  `size` varchar(20) DEFAULT NULL COMMENT '大小',
  `a_click` int(11) DEFAULT '0' COMMENT '点击量',
  `b_click` int(11) DEFAULT '0' COMMENT '下载量',
  `file` varchar(200) DEFAULT NULL COMMENT '文件地址',
  `user` int(11) DEFAULT '0' COMMENT '用户ID',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='下载中心' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `file` varchar(200) DEFAULT NULL COMMENT '文件地址',
  `user` int(11) DEFAULT '0' COMMENT '用户ID',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='数据备份' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pg_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `event` varchar(255) DEFAULT NULL COMMENT '事件',
  `intro` varchar(500) DEFAULT NULL COMMENT '简介',
  `sql` text DEFAULT NULL COMMENT 'SQL语句',
  `user` int(11) DEFAULT '0' COMMENT '用户ID',
  `time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='系统日志' AUTO_INCREMENT=1 ;

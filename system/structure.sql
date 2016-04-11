-- Create syntax for TABLE 'action'
CREATE TABLE `action` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `page` text,
  `section` int(11) DEFAULT NULL,
  `step` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `mouse` text,
  `subsection` int(11) DEFAULT NULL,
  `substep` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'learning'
CREATE TABLE `learning` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `section` int(11) DEFAULT NULL,
  `subsection` int(11) DEFAULT NULL,
  `step` int(11) DEFAULT NULL,
  `substep` int(11) DEFAULT NULL,
  `answer` text,
  `correct_answer` text,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'post_test'
CREATE TABLE `post_test` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `nasa_1` int(11) DEFAULT NULL,
  `nasa_2` int(11) DEFAULT NULL,
  `nasa_3` int(11) DEFAULT NULL,
  `nasa_4` int(11) DEFAULT NULL,
  `nasa_5` int(11) DEFAULT NULL,
  `age` text,
  `gender` text,
  `program` text,
  `program_type` text,
  `bachelor` text,
  `awareness` text,
  `software` text,
  `comment` text,
  `software_list` text,
  `living_chicago` text,
  `chicago` text,
  `crimedata` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'test'
CREATE TABLE `test` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `section` int(11) DEFAULT NULL,
  `sm_1` int(11) DEFAULT NULL,
  `sm_g_1` int(11) DEFAULT NULL,
  `sm_2` int(11) DEFAULT NULL,
  `sm_g_2` int(11) DEFAULT NULL,
  `sm_3` int(11) DEFAULT NULL,
  `sm_g_3` int(11) DEFAULT NULL,
  `sm_4` int(11) DEFAULT NULL,
  `sm_g_4` int(11) DEFAULT NULL,
  `sm_5` int(11) DEFAULT NULL,
  `sm_g_5` int(11) DEFAULT NULL,
  `sm_6` int(11) DEFAULT NULL,
  `sm_g_6` int(11) DEFAULT NULL,
  `sm_7` int(11) DEFAULT NULL,
  `sm_g_7` int(11) DEFAULT NULL,
  `sm_8` int(11) DEFAULT NULL,
  `sm_g_8` int(11) DEFAULT NULL,
  `sm_9` int(11) DEFAULT NULL,
  `sm_g_9` int(11) DEFAULT NULL,
  `sm_10` int(11) DEFAULT NULL,
  `sm_g_10` int(11) DEFAULT NULL,
  `sm_11` int(11) DEFAULT NULL,
  `sm_g_11` int(11) DEFAULT NULL,
  `sm_12` int(11) DEFAULT NULL,
  `sm_g_12` int(11) DEFAULT NULL,
  `sm_13` int(11) DEFAULT NULL,
  `sm_g_13` int(11) DEFAULT NULL,
  `sm_14` int(11) DEFAULT NULL,
  `sm_g_14` int(11) DEFAULT NULL,
  `sm_15` int(11) DEFAULT NULL,
  `sm_g_15` int(11) DEFAULT NULL,
  `sm_16` int(11) DEFAULT NULL,
  `sm_g_16` int(11) DEFAULT NULL,
  `sm_17` int(11) DEFAULT NULL,
  `sm_g_17` int(11) DEFAULT NULL,
  `sm_18` int(11) DEFAULT NULL,
  `sm_g_18` int(11) DEFAULT NULL,
  `interactions` text,
  `why_time` int(11) DEFAULT NULL,
  `why_space` int(11) DEFAULT NULL,
  `why_desc` int(11) DEFAULT NULL,
  `why_no` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `t_section` int(11) DEFAULT NULL,
  `perspectivechange` text,
  `group` text,
  `subgroup` int(11) DEFAULT NULL,
  `candidate` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'user'
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group` tinytext,
  `tag` text,
  `subgroup` int(1) DEFAULT NULL,
  `done` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
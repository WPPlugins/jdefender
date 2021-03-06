CREATE TABLE IF NOT EXISTS `#__activity_node` (
 `actid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `uid` int(10) unsigned NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `ip` double unsigned DEFAULT '0',
 `sessionid` varchar(200) NOT NULL,
 `secure` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `ctyid` int(10) unsigned NOT NULL DEFAULT '0',
 `referer` varchar(254) NOT NULL,
 `browser` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `os` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `space` smallint(5) unsigned NOT NULL DEFAULT '1',
 `duration` int(11) NOT NULL DEFAULT '0',
 `blocked` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `returning` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `mobile` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `returningcount` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `robot` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `osversion` varchar(20) NOT NULL,
 `browserversion` varchar(10) NOT NULL,
 `newuser` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `nonemobile` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `login` tinyint(3) unsigned NOT NULL DEFAULT '5',
 PRIMARY KEY (`actid`),
 KEY `IX_activity_node_ip` (`ip`),
 KEY `IX_activity_node_created` (`created`),
 KEY `IX_activity_node_ctyid` (`ctyid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;
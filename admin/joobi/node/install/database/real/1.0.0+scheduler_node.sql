CREATE TABLE IF NOT EXISTS `#__scheduler_node` (
 `schid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `nextdate` int(10) unsigned NOT NULL DEFAULT '0',
 `frequency` int(10) unsigned NOT NULL DEFAULT '0',
 `priority` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `lastdate` int(10) unsigned NOT NULL DEFAULT '0',
 `publish` tinyint(4) NOT NULL DEFAULT '1',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `params` text NOT NULL,
 `cron` varchar(50) NOT NULL,
 `ptype` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `wid` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `namekey` varchar(50) NOT NULL,
 `core` tinyint(4) NOT NULL DEFAULT '0',
 `report` text NOT NULL,
 `maxtime` int(10) unsigned NOT NULL DEFAULT '5',
 `maxprocess` smallint(5) unsigned NOT NULL DEFAULT '1',
 `viewname` varchar(50) NOT NULL,
 PRIMARY KEY (`schid`),
 UNIQUE KEY `UK_namekey_scheduler_node` (`namekey`),
 KEY `IX_scheduler_node_wid` (`wid`),
 KEY `IX_scheduler_node_publish_priority_nextdate` (`publish`,`nextdate`,`priority`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;
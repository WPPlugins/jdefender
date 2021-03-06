CREATE TABLE IF NOT EXISTS `#__ip_blocked` (
 `ipblid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `uid` int(10) unsigned NOT NULL DEFAULT '0',
 `publish` tinyint(4) NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `ip` double unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `startdate` int(10) unsigned NOT NULL DEFAULT '0',
 `enddate` int(10) unsigned NOT NULL DEFAULT '0',
 `reason` text NOT NULL,
 `space` smallint(5) unsigned NOT NULL DEFAULT '0',
 `attempt` int(10) unsigned NOT NULL DEFAULT '0',
 `ctyid` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `reasontype` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `username` varchar(254) NOT NULL,
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `message` text NOT NULL,
 `blockedpage` tinyint(3) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`ipblid`),
 KEY `IX_ip_blocked_ip` (`ip`),
 KEY `IX_ip_blocked_username` (`username`),
 KEY `IX_ip_blocked_ctyid` (`ctyid`),
 KEY `IX_ip_blocked_rolid` (`rolid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;
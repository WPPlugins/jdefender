CREATE TABLE IF NOT EXISTS `#__model_node` (
 `sid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
 `namekey` varchar(255) NOT NULL,
 `dbtid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `folder` varchar(255) NOT NULL,
 `path` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `level` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `publish` tinyint(4) NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `params` text NOT NULL,
 `alias` varchar(255) NOT NULL,
 `ordering` smallint(5) unsigned NOT NULL DEFAULT '0',
 `extstid` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `fields` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `checkout` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `trash` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `audit` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `totalcustom` smallint(5) unsigned NOT NULL DEFAULT '0',
 `reload` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `core` tinyint(4) NOT NULL DEFAULT '0',
 `faicon` varchar(50) NOT NULL,
 `pnamekey` varchar(50) NOT NULL,
 `import` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `export` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `outgoing` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `incoming` tinyint(3) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`sid`),
 UNIQUE KEY `UK_model_node_namekey` (`namekey`(100)),
 KEY `IX_model_node_publish_prefix_level` (`publish`,`level`),
 KEY `IX_model_node_dbtid` (`dbtid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;
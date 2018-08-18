--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provinces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statecode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('110000',	'北京',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('120000',	'天津',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('130000',	'河北省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('140000',	'山西省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('150000',	'内蒙古自治区',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('210000',	'辽宁省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('220000',	'吉林省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('230000',	'黑龙江省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('310000',	'上海',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('320000',	'江苏省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('330000',	'浙江省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('340000',	'安徽省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('350000',	'福建省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('360000',	'江西省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('370000',	'山东省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('410000',	'河南省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('420000',	'湖北省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('430000',	'湖南省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('440000',	'广东省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('450000',	'广西壮族自治区',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('460000',	'海南省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('500000',	'重庆',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('510000',	'四川省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('520000',	'贵州省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('530000',	'云南省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('540000',	'西藏自治区',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('610000',	'陕西省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('620000',	'甘肃省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('630000',	'青海省',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('640000',	'宁夏回族自治区',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('650000',	'新疆维吾尔自治区',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('710000',	'台湾',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('810000',	'香港特别行政区',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('820000',	'澳门特别行政区',	'100000');
INSERT INTO `provinces` (`code`, `name`, `statecode`) VALUES ('900000',	'钓鱼岛',	'100000');

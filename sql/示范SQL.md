# 获取省份
SELECT * FROM `areas` WHERE `level` = 1;
# 获取市区
SELECT * FROM `areas` WHERE `level` = 2;
# 获取县城
SELECT * FROM `areas` WHERE `level` = 3;

# 获取某个城市
SELECT * FROM `areas` WHERE `name` = '赣州市';
SELECT `parentId` FROM `areas` WHERE `name` = '赣州市';

# 获取某市所属省份
SELECT * FROM `areas` WHERE `code` = (SELECT `parentId` FROM `areas` WHERE `name` = '赣州市');
# 获取某市下属县城
SELECT * FROM `areas` WHERE `parentId` = (SELECT `code` FROM `areas` WHERE `name` = '赣州市');

# 获取表中所有中学
SELECT * FROM `schools`;
# 获取某区域所有的中学
SELECT * FROM `schools` WHERE `areaId` = 360000;
# 获取某中学所有班级
SELECT * FROM `classes` WHERE `schoolId` = 31231;
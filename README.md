# db-tables通用数据表

> 为什么要开这个项目？因为有这样的需求啊，苦于找商城系统表的设计，用户表的通用设计，IP库的查找，省市县三级联动甚至加乡村五级联动，这里都有。

> 至于为什么使用Laravel框架做，因为Laravel的Eloquent和Migrate/Seed用了后设计数据库表真的不要太爽。

> 本项目中还会给出相应的示例代码和前端界面，实现关于设计表的RESTful资源全套操作。


#### Article辅助开发流程

```
表结构
1. 测试数据库链接是否正常: php artisan migrate:rollback
2. 生成表文件: php artisan make:migration create_area_table
3. 生成所有表结构: php artisan migrate
4. 撤回所有生成表: php artisan migrate:reset
5. 撤回最近一次生成表: php artisan migrate:rollback
6. 撤回最近一张表: php artisan migrate:rollback --step=1
7. (重建数据库)回滚所有数据表并迁移: php artisan migrate:refresh
8. 重建数据库并填充数据: php artisan migrate:refresh --seed

数据生成
1. php artisan make:seeder AreasTableSeeder
2. 
逆向Seed生成器iseed
1. 生成AreasTableSeeder: php artisan iseed areas
2. 参数: --force  --max --exclude=xxx,yyy

控制器操作


模型操作


转换器操作


```
#### 省市县乡村五级联动/三级同理

```
国家统计局: http://www.stats.gov.cn/tjsj/tjbz/tjyqhdmhcxhfdm/
```
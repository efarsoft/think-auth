# think-auth 适合用于ThinkPHP6的Auth权限拓展

### 比RBAC更好的权限认证方式（Auth类认证），[详情(Thinkphp.cn)](http://www.thinkphp.cn/topic/4029.html)

### 从[ThinkPHP3 Auth](https://github.com/liu21st/extend/blob/master/Extend/Library/ORG/Util/Auth.class.php)迁移,调整和优化了部分功能使之更高效便捷
---

### 安装

##### 第一步：安装扩展
Composer 运行扩展安装命令
```
composer require yupoxiong/region
```

##### 第二步：创建数据表
复制`vendor/yupoxiong/region/database/migrations`目录下的数据库迁移文件到TP迁移目录(一般是 `/database/migrations/` )，然后运行TP自带迁移命令创建表。
```
php think region:migrate
```


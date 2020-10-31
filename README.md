# Laravel管理后台

后台管理快速构建模板
- 基于laravel-admin构建，参考[laravel-admin](https://laravel-admin.org/docs/zh)文档

## 安装配置
> 复制本项目创建一个新的项目。

#### 1. 配置.env

参考.env.example

#### 2. 安裝

```bash

# 开发环境安装
./devel.sh install
# 启动开发服务器
./devel.sh

# 正式环境安装
/opt/bin/laravel-install.sh

``` 

#### 3. 访问

打开浏览器，访问[http://localhost:8000/admin](http://localhost:8000/admin)，初始密码admin, letmein2019。


#### 4. 可选

```bash

# 集成中台服务
php artisan zhuitech:service

``` 
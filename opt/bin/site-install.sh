#!/usr/bin/env bash

# 安装后台模块
php artisan zhuitech:admin

# 生成API密钥
php artisan zhuitech:passport

# 链接中台
php artisan zhuitech:service

echo "Install finish."
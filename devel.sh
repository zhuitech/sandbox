#!/usr/bin/env bash

git pull

# 构建
cd src

# 安装依赖包
composer install

# 链接本地模块
if [[ -d ../../../github/boot-laravel && -d ../../../github/boot-admin ]]; then
  rm -rf vendor/zhuitech/boot-admin
  ../mkl.bat vendor\\zhuitech\\boot-admin ..\\..\\..\\..\\..\\github\\boot-admin

  rm -rf vendor/zhuitech/boot-laravel
  ../mkl.bat vendor\\zhuitech\\boot-laravel ..\\..\\..\\..\\..\\github\\boot-laravel
fi

# 发布vendor资源
php artisan vendor:publish --force --tag=public

# 更新数据库
php artisan migrate --force

# 安装
if [[ "$1" == "install" ]]; then
    php artisan storage:link
    chmod -R 777 storage bootstrap/cache

    source ../opt/bin/site-install.sh
fi

# 智能提示
php artisan ide-helper:generate
php artisan ide-helper:meta
php artisan ide-helper:models -W -R --dir=packages

# 启动
php artisan serve --port=8000
#!/usr/bin/env bash

# 加密混淆
obfuscates=(
    src/app/Http/Controllers \
)

cd src
# 安装依赖包
composer install --no-dev
# 发布vendor资源
php artisan vendor:publish --force --tag=public
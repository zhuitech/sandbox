#+++++++++++++++++++++++++++++++++++++++
# Dockerfile for laravel
#            -- Andrew --
#+++++++++++++++++++++++++++++++++++++++

FROM registry-vpc.cn-hangzhou.aliyuncs.com/zhuitech/laravel:1.0

# 复制目录
COPY src ${DOCUMENT_ROOT}
COPY opt /opt
COPY tmp/obfuscates/src ${DOCUMENT_ROOT}

# 编译
RUN /opt/bin/laravel-build.sh
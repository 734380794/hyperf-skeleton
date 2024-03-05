# 介绍

hyperf-skeleton项目

 项目入门

# 文档

[https://hyperf.wiki/](https://hyperf.wiki/)

## Docker运行环境
- window11中使用Docker Desk工具运行hyper
- Dockerfile 文件为配置信息
- docker-compose.yaml 配置mysql、redis、hyperf端口号、镜像、挂载目录

```shell
Docker启动流程如下：
当前项目目录下运行cmd命令
1. 拉取镜像文件 docker pull hyperf/hyperf:8.2-alpine-v3.18-swoole-slim
2. 构建本地镜像 docker compose bulid
3. 运行镜像    docker compose up -d  

```

## 运行hyperf
- 查看运行的容器 docker ps -a
- cmd命令窗口进入指定容器 docker exec -it 容器id bash
- 该文件挂载在/opt/www/*目录下
- 启动hyperf命令 php bin/hyperf.php start
```shell
启动成功输入如下：
[INFO] HTTP Coroutine Server listening at 0.0.0.0:9501
```

## hyperf常用命令
```shell
php bin/hyperf.php gen:model  生成并更新model文件
php bin/hyperf.php gen:controller TestContrller 生成Controller文件

composer require hyperf/database 引入hyperf/database
composer cs
```
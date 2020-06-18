### composer tp扩展
> 先拿到thinkPHP的核心代码
 ```json
"require" : {
   "php": ">=7.1.0",
   "topthink/framework": "6.0.2"
}
```
> 如果如要写入配置文件到config
```json
"extra": {
    "think": {
        "config": "src/config/test1.php",
        "services": [
          "aibayanyu\\jwt\\Service"
        ]
    }
}
```
> config 为生成配置文件到tp目录下面的config下
> services 配置一些tp中的常用指令和其他的一些操作
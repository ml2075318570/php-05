<?php
#php中可以通过 define 函数定义 一个常量
#常量的特点就是；定以后不能修改，也是临时存放数据的容器
//什么时候用常量；一般程序的配置信息（不会再运行过程中修改）都会在常量中定义
//what why how where when
//变量或函数都是采用 snake_case（小写字母加下划线）命名规则
//常量是 SNAKE_CASE 命名规则
//第一个参数 常量名称
//第二个参数 常量的值
//第三个参数 常量名称是否忽略大小写 默认为false 不忽略
define('SYSTEM_NAME','阿里百秀');
//定义公共配置信息
//便于维护       公共使用
//css 中有 import  导入文件
//类似css的import
//require 可以用于在当前脚本中再让一个别的脚本文件
//在每一次调用时都会载入对应的文件
require 'config.php';
//require_once====如果之前载入过 不在执行（只执行一次）
//由于类似于 定义常量 定义函数 这种操作不能执行多次
//所以require_once 更加适合载入这种文件
require_once 'config.php';

//require特点；一旦被载入的文件不存在就会抱一个致命的错误，当前文件不在执行
//include特点；载入文件不存在不会报错（会有警告，警告不用管），当前文件继续执行


//不设置action 默认是当前页面
//不设置method 默认是get




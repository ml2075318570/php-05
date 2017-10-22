<?php
//php中可以通过 dedfine 函数定义 一个常量
//常量的特点就是；定义完后不能被修改，也是临时存放数据的容器
//什么时候用常量；一般程序的配置信息（不会再运行中修改)都会在常量中定义

//变量或函数都是采用 snakes_case (小写字母加下划线)命名规则
//常量 是 SNAKES_CASE  命名规则
//第一个参数是常量名称
//第二个参数是常量的值
 
 define('SYSTEM_NAME','阿里百秀')；
 //第三个参数是常量名称是否忽略大小写 默认为false 不忽略
 define('SYSTEM_VERSION','1.0'，true);
 echo SYSTEM_NAME;
 echo SYSTEM_VERSION;
<?php
//通过代码设置时区
date_default_timezone_set('PRC');

//time()  获取到的是 以 秒数为单位的 时间戳
//格式化一个时间戳
//第一个参数是  时间格式
//第二个参数是  时间戳
//默认时间戳获取的就是格林威治时间
$str = '2017-11-23 13:23:34';
// 对已有时间做格式化
// strtotime 可以用来将一个有格式的时间字符串 转换为一个 时间戳
$timestamp = strtotime($str);

echo date('Y年m月d日<b\r>H:i:s', $timestamp);
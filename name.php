<?php
//将文本文件中的内容呈现到一个表格中

//1.读取文件内容  =>高寒文本内容的字符串数据
$contents = file_get_contents("names.txt");
//2.按照一个特定的规则解析文件内容   =>数组
// $data = array();

$lines =  explode("\n",$contents);
// var_dump($lines);
// 遍历每一行分别解析每一行中的数据
foreach($lines as $item) {
    // if ($item === '') continue;
    if (!$item) continue;
    // $cols = explode('|',$item);
    // $data[] = $cols;
    $data[] = explode('|',$item);
}
// var_dump($data);
//3.通过混编的方式将数据呈现到表格中
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
        <thead>
           <tr>
               <td>编号</td>
               <td>姓名</td>
               <td>年龄</td>
               <td>邮箱</td>
               <td>网址</td>
           </tr>
        </thead>
        <tbody>
           <?php foreach ($data as $line ): ?>
              <tr>
                  <?php foreach ($line as $col): ?>
                    <!-- $col => ' http://XEP.VC' -->
                    <?php $col = trim($col); ?>
                    <!-- $col => 'http://XEP.VC' -->
                    <!-- 判断这里的数据是不是一个网址（看看是否是 http://） -->
                    <?php if (strpos($col, 'http://') === 0): ?>
                    <td><a href="<?php echo strtolower($col); ?>"><?php echo substr($col, 7); ?></a></td>
                    <?php else: ?>
                    <td><?php echo $col; ?></td>
                    <?php endif ?>
                    <?php endforeach ?>
              </tr>
              <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
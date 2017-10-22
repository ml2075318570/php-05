<?php
// echo '姓名：'.$_REQUEST['username']."<br/>\n";
// echo '年龄：'.$_REQUEST['userage']."<br/>\n";
// echo '邮箱：'.$_REQUEST['useremail']."<br/>\n";
// echo '网址：'.$_REQUEST['userwangzhi']."<br/>\n";

$name[] = $_REQUEST['username'];
var_dump($name);
$age[] = $_REQUEST['userage'];
$email[] = $_REQUEST['useremail'];
$wangzhi[] = $_REQUEST['userwangzhi'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>全部人员信息表</title>
</head>
<body>
  <h1>全部人员信息表</h1>
  <table>
    <thead>
      <tr>
        <th>编号</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>邮箱</th>
        <th>网址</th>
      </tr>
    </thead>
    <tbody>

      <tr>
      <td><?php echo '1' ?></td>
     
    
      <td><?php echo $name[0] ?></td>
      
      
      <td><?php echo $age[0] ?></td>
     
     
      <td><?php echo $email[0] ?></td>
   
    
      <td><?php echo $wangzhi[0] ?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>
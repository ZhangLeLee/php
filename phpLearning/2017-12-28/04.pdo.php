<?php 
# 使用预处理语句来批量插入 操作数据库
include_once 'database.php';

/*  //不建议使用
$sql = "insert into users(name,pass) values('红','111')";
$sql1 = "insert into users(name,pass) values('橙','111')";
$pdo->exec($sql);
$pdo->exec($sql1);
*/


# 使用预处理的方式操作

# ?:表示占位  问号式
/*
$sql = "insert into users(name,pass) values(?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['红','111']);
$stmt->execute(['橙','111']);
*/

# 参数绑定 别名式 (一般使用别名式比较多，看实际情况)
$sql = "insert into users(name,pass) values(:name,:pass)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name',$name);  //用于绑定参数
$stmt->bindParam(':pass',$pass);  //用于绑定参数
$name = '黄';
$pass = '111';
$stmt->execute();
// 如果要插入的字段过少，可以考虑问号式
// 如果要插入的字段过多，可以考虑别名式



 ?>


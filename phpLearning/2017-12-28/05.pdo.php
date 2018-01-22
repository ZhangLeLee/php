<?php 
// 链接数据库
include_once 'database.php';
$sql = 'select * from users';
// 执行sql语句
$stmt = $pdo->query($sql);
// 从结果集中取出所有记录
$rows = $stmt->fetchAll();

# 统计上次语句执行结果受影响的记录数
echo count($rows);
echo $stmt->rowCount();  //查询 -- 使用rowCount记录受影响的结果

echo "<pre>";
// var_dump($rows);

/*
$rows1 = $stmt->fetch();
$rows2 = $stmt->fetch();
$rows3 = $stmt->fetch();
var_dump($rows1);
var_dump($rows2);
var_dump($rows3);
*/


# fetch 获取一条记录   fetchAll 获取所有记录
# 如果获取一条记录 一位数组 fetch
# 如果获取多条记录 二维数组 fetchAll

 ?>





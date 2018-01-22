<?php 
try{
	$dsn = 'mysql:dbname=user;host=localhost';
	$user = 'root';
	$pass = '';
	$pdo = new PDO($dsn,$user,$pass);
	# 设置属性
	# PDO::ATTR_DEFAULT_FETCH_MOOE 设置提取模式
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC); 
} catch(PDOException $e){
	echo "数据库的链接失败 ".$e->getMessage();
}

# insert 增   update 改   delete 删   exec  来执行
# select 查 	                         query 来执行

// 实现查询
$pdo->query("set names utf8");
$stmt = $pdo->query('select * from users');
$rows = $stmt->fetchAll();
echo "<pre>";
print_r($rows);

// 实现改
/*
$pdo->query('set names utf8');
$stmt = $pdo->exec("update users set name='dedee' where id=9");
var_dump($stmt);
*/
// 实现插
/*
$pdo->query('set names utf8');
$stmt = $pdo->exec("insert into users values(null,'谷歌','111')");
var_dump($stmt);
*/
// 实现删
/*
$pdo->query('set names utf8');
$stmt = $pdo->exec("delete from users where id=12");
var_dump($stmt);
*/

 ?>





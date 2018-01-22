<?php 
try{
	$dsn = 'mysql:dbname=user;host=localhost';
	$user = 'root';
	$pwd = '';
	$pdo = new PDO($dsn,$user,$pwd);
	$pdo->query("set names utf8");
	// 设置提取出来的数据是 索引数组 or 关联数组 or 混合数组
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,2); 
}catch(PDOException $e){
	echo "数据库链接失败 ".$e->getMessage();
}


 ?>





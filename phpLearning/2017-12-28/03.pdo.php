<?php 
# pdo 事物处理 一件事情发生 要么全部成功 要么全部失败
# pdo 来做事物处理
/*
注意事项：
	1.mysql表引擎 必须是 innodb 类型 myisam
	2.关闭当前的自动提交改为手动提交
	3.开启事物
	4.回滚
	5.提交
	如果没有提交，在提交之前的任何一个步骤都可以回滚，提交之后就不能回滚
*/

try{
	$psd = 'mysql:dbname=user;host=localhost';
	$user = 'root';
	$pass = '';
	$pdo = new PDO($psd,$user,$pass);
	# PDO::ATTR_DEFAULT_FETCH_MOOE 设置提取模式
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC); 
	# 关闭自动提交的功能 0:关闭 1:开启
	$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
}catch(PDOException $e){
	echo "数据库链接失败".$e->getMessage();
}

try{
	# 开启一个事物
	$pdo->beginTransaction();
	# 准备sql语句 转账开始 把张三的钱减少100
	$sql = "update salary set money=money-100 where id=1";
	$n = $pdo->exec($sql);
	// $n 如果>0 true 执行成功 否则失败
	if(!$n){
		// 转账失败
		throw new PDOException('张三转账失败');
	}
	# 准备sql语句 转账开始 把李四的钱增加400
	$sql = "update salary set money=money+100 where id=2";
	$n = $pdo->exec($sql);
	// $n 如果>0 true 执行成功 否则失败
	if(!$n){
		// 转账失败
		throw new PDOException('李四转入失败');
	}
	// 最终提交
	$pdo->commit();
	echo "提交成功!";
}catch(PDOException $e){
	// 回滚 回到最初
	// 代码回滚执行到此处，说明在交易过程中有任何一个环节出现问题，就要回滚
	$pdo->rollBack();
	echo $e->getMessage();
}


 ?>




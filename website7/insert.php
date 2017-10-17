<?php 
	/*
		操作数据库
		1.链接数据库
		2.执行sql语句
		3.获取数据并使用
		4.关闭数据库/断开连接
	*/

	# 准备sql语句
	$sql = "INSERT INTO customers(name,email,address,state) VALUES('肉肉','肉肉@email.com','北京','昌平区')";

	insertData($sql);

	function insertData($sql){
		# 链接数据库
		$mysqli = new mysqli("localhost","root","","people");

		# 测试是否链接成功
		if($mysqli->connect_errno){  //0表示成功
			die($mysqli->connect_error);
		}
	
		# 设置utf8
		$mysqli->query("set names utf8");

		# 执行sql语句
		$result = $mysqli->query($sql);
		if($result){
			echo "插入成功!";
		} else {
			echo "插入失败!";
		}

		# 断开连接
		$mysqli->close();
	}

?>










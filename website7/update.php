<?php 
	# 准备sql语句
	$sql = "UPDATE customers SET name='帅',email='帅@email.com' WHERE id=5";

	updateData($sql);

	function updateData($sql){
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
			echo "更新成功!";
		} else {
			echo "更新失败!";
		}

		# 断开连接
		$mysqli->close();
	}
?>
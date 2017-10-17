<?php 
	// echo "Hello world!";

	// if (isset($_GET['name'])) {
	// 	echo "你的名字是: ".$_GET['name'];
	// }

	# 1.链接数据库
	// 面向过程的方法
	$conn = mysqli_connect("localhost","root","","ajaxtest");
	# mysqli_query -- 对数据库执行一次查询
	mysqli_query($conn,"set names utf8");   // 解决乱码

	if (isset($_POST['name'])) {
		// echo "你的名字是: ".$_POST['name'];
		$name = $_POST['name'];

		$query = "INSERT INTO users(name) VALUES('$name')";
		$result = mysqli_query($conn,$query);

		if ($result) {
			echo "数据插入成功!";
		} else {
			echo "数据插入失败!".mysqli_error($conn);
		}
	}


?>










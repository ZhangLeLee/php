<?php 

	# 链接数据库
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	# 判断是否链接成功
	if(mysqli_connect_errno()){   // 0 表示链接成功
		echo "数据库链接失败".mysqli_connect_error();
	}

	
?>
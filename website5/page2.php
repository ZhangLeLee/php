<?php 
	# 重新赋值
	setcookie('username',"Franch",time() + 86400);
	# 删除cookie
	// setcookie('username','fdsa',time() - 3600);

	# 打印出当前有多少cookie
	if(count($_COOKIE) > 0){
		echo "一共有 ".count($_COOKIE)."个 COOKIE";
	}

	echo "<br>";
	if (isset($_COOKIE['username'])) {
		echo "你的用户名是: ".$_COOKIE['username'];
	} else {
		echo "你的用户名不存在";
	}
?>


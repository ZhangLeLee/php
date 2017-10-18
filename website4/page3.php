<?php
	session_start();

	# 改变SESSION存储的值 
	// $_SESSION['name'] = "Hemish";

	# 获取SESSION存储的值
	$name = isset($_SESSION['name'])? $_SESSION['name']:'name 属性不存在' ;
	$name = isset($_SESSION['email'])? $_SESSION['email']:'email 属性不存在' ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>page3</title>
</head>
<body>
	<h2><?php echo $name; ?></h2>
</body>
</html>
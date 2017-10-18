<?php
	session_start();

	$name = isset($_SESSION['name'])? $_SESSION['name']:'name 属性不存在' ;
	$name = isset($_SESSION['email'])? $_SESSION['email']:'email 属性不存在' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>page2</title>
</head>
<body>
	<h2>你的名字是: <?php echo $name; ?></h2>
	<a href="page3.php">Go to page3</a>
</body>
</html>
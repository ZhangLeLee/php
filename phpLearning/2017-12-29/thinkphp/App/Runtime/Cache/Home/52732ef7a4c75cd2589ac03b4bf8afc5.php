<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?php echo ($name); ?></h1>
	<h1><?php echo ($age); ?></h1>
	
	<?php echo ($_GET['id']); ?>
	<?php echo ($_GET['x']); ?>
</body>
</html>
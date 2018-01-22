<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>我是User控制器下的register模板文件</div>
	<form action="/phpLearning/2017-12-29/thinkphp/index.php/Home/User/registerAction" method="post">
		用户名: <input type="text" name="username">
		密码: <input type="text" name="password">
		<input type="submit" value="注册">
	</form>
	<?php echo ($name); echo ($age); ?>
</body>
</html>
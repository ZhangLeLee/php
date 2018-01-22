<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传</title>
</head>
<body>
	<form action="/phpLearning/2018-01-03/thinkphp/index.php/Home/Index/upload" enctype="multipart/form-data" method="post" >
		<input type="text" name="name" /><br>
		<input type="file" name="photo" /><br>
		<input type="submit" value="提交" >
	</form>
</body>
</html>
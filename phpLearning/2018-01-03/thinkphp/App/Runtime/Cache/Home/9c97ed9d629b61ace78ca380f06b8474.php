<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/phpLearning/2018-01-03/thinkphp/index.php/Home/Index/regAction" method="post">
		验证码:<input type="text" name="code">
		<img id="ver" src="/phpLearning/2018-01-03/thinkphp/index.php/Home/Index/myVerify" alt="" onclick="changeV()">
		<a href="javascript:changeV()">看不清?换一张</a>
		<br>
		<input type="submit" value="提交">
	</form>
	
</body>
<script>
	var ver = document.getElementById('ver');
	function changeV(){
		ver.style.cursor = 'pointer';
		ver.src = ver.src;
	}
</script>
</html>
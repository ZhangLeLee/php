<?php 
	session_start();

	# 将服务器中的SESSION['name']值清除
	// unset($_SESSION['name']);

	# 将所有的SESSION值全部清除
	session_destroy();
?>
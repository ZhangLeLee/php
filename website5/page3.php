<?php 
	$users = ["name" => "Henry","email" => "Henry@email.com","age" => 20];
	$users = serialize($users);
	setcookie('users',$users,time()+86400);

	$users = unserialize($_COOKIE['users']);
	print_r($users);
?>
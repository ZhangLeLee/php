<?php 
	# array: 数组(有效的控制资源) -- 存储一堆数据的集合
	/*
		下标数组: 下标以0开始
		关联数组: 关联以第一个名字开头
	*/

	# 下标数组
	$people = array("Kevin","Henry","Happy");
	echo $people[1];  // echo只能打印单个变量
	echo $people[3];  // 报错(数组越界)
	echo "<br>";

	$ids = [23,65,43];
	echo $ids[2];
	echo "<br>";

	$cars = ["BYD","Honda","Toyota"];
	$cars[3] = "BWM";
	echo $cars[3]."<br>";
	echo count($cars)."<br>";  //打印数组个数

	# 打印数组的方法
	print_r($cars);
	echo "<br>";

	# 万能打印方法
	var_dump($cars);
	echo "<hr>";


	# 关联数组
	$People = array("Henry"=>35,"Bukcy"=>25,"Emily"=>20);
	echo $People["Emily"]."<br>";

	$ids = [22=>"Henry",25=>"Bukcy"];
	echo $ids[22]."<br>";

	$ids[35] = "Emily";
	echo $ids[35]."<br>";

	print_r($ids);
	echo "<hr>";


	# 观察
	$cars[] = "Bence";
	print_r($cars);
	echo "<br>";

	$ids[] = "John";
	print_r($ids);
	echo "<br>";

	$People[] = 55;
	print_r($People);
	print_r($People[0]);
	echo "<hr>";


	# 多维数组
	$cars = array(
		array("Honda",20,10),
		array("VW",20,20),
		array("Ford",15,10)
	);
	echo $cars[2][1]."<br>";
	print_r($cars);
 ?>











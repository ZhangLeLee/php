<?php	
	# 计算数组个数 count
	$cars = array("Volvo","BMW","Toyota");
	echo count($cars)."<hr>";

	# ** 将数组开头的单元移出数组 array_shift
	/* 删除数组中的第一个元素（red），并返回被删除元素的值： */
	$colors = array("a"=>"red","b"=>"green","c"=>"blue");
	echo array_shift($colors)."&nbsp;&nbsp;";
	print_r ($colors);
	echo "<br>";

	# 在数组开头插入一个或多个单元 array_unshift
	$colors = array("a"=>"red","b"=>"green","c"=>"yellow");
	echo array_unshift($colors,"blue")."&nbsp;&nbsp;&nbsp;";  // 4
	print_r($colors);
	echo "<br>";

	# ** 将一个或多个单元压入数组的末尾（入栈）array_push
	$colors = array("1"=>"red","2"=>"green");
	echo array_push($colors,"orange")."&nbsp;&nbsp;&nbsp;";   // 3
	print_r($colors);
	echo "<br>";

	# 弹出数组最后一个单元（出栈） array_pop
	$colors = array("1"=>"red","2"=>"green","3"=>"yellow");
	array_pop($colors);
	print_r($colors);
	echo "<hr>";
	
	# 数组排序 sort
	$nums = [10,3,6,15,9,20,17,"abcd"];
	sort($nums);
	print_r($nums);
	echo "<hr>";
	
	# 数组转字符串 implode
	$arrToStr = array("I","Love","Beijing");
	echo implode(" ",$arrToStr)."<br>";  // 根据间隔符" "的形式转

	# 字符串转数组 explode
	$strToArr = "I Love Beijing";
	print_r(explode(" ", $strToArr));  // 根据间隔符" "的形式转
	echo "<br>";
	
?>
<!-- <h1>
	<?php 
		// echo "Hello World!";
 	?>
</h1> -->

<!-- 
<?php 
	// echo "Hello";
 ?>
<?php 
	// echo "Hello EveryBody!";
 ?>
	可以有多个php语句
-->

<?php 
	// echo "Hello World";
	// 单行注释 快捷键: command + /
	# 单行注释 快捷键: shift + 3
	/*
		多行注释 快捷键:alt + command + /
	*/


	# variable 变量
	// $output = "Hello World!";
	/*
		- 前缀 $
		- 以字母/ 数字/ 下划线组成
		- 数字不能开头
		- 大小写敏感
		- 驼峰命名法
	*/
	// echo $output;  //syntax error(拼写错误,符号错误,分号没写)


	# 数据类型
	/*
		String Integer Float Boolean Array Object Resource(函数)
	*/

	// $num = 22;
	// $float = 22.33;   //打印出的结果为22.33
	// $boolean = true;  //打印出的结果为1
	// echo $boolean;
	// $boolean = false;  //打印出的结果不显示
	// echo $boolean;


	# 运算符
	// $num1 = 1;
	// $num2 = 2;
	// $sum = $num1 + $num2;
	// echo $sum;


	# 字符串拼接
	$string1 = "Hello";
	$string2 = "World";
	// $greeting = $string1 + $string2;
	// 在PHP中 +号就是加号,没有拼接功能

	$greeting1 = $string1." ".$string2."!";
	// echo $greeting1;


	#php中引号的区别
	$greeting2 = '$string1 $string2';  // 打印出的是字符串 $string1 $string2
	$greeting3 = "$string1 $string2";  // 打印出的是 Hello World
	// echo $greeting3;
	/*
		单引号中的变量是单纯的字符串
		双引号中的变量可以正常被解析
	*/


	# 转义字符
	$string3 = 'They\'re here';
	$string4 = "They're here";
	// echo $string3,$string4;  // ,号可以打印多个变量
	echo $string3."<br>".$string4;
	// printf($string4); // echo速度比printf快,echo不是一个方法

	/* php中必须有分号 */

	echo "<hr>";


	# 常量
	// define(name, value)
	define("GREETING", "WhatEver"); //name必须大写
	// 常量的第三个参数为bool,true为不分大小写
	define("GREETING", "What  Ever",true);
	// echo GREETING;  // 打印出WhatEver
	var_dump(greeting);


 ?>










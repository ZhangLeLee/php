<?php 
	# loops: 循环 -- 让项目制作的更高效
	# 根据某个条件重复执行某段代码
	/* 
		- For
		- While
		- Do...While
		- Foreach
	*/

	# for 循环 
	# @params - init, condition, inc(自增)  初始化条件
		for ($i = 0; $i < 10; $i++) { 
			echo ($i+1)."<br>";
		}
		echo $i;  // 输出结果为10
		echo "<hr>";

	# while 循环
	# @params - condition
		$i = 0;
		while ($i < 10) {
			echo $i."<br>";
			$i++;
		}
		echo "<hr>";

	// 查重时,外层循环使用for,内层循环使用while

	# do...while 循环
	# @params - condition
		$i = 0;
		do{
			echo $i."<br>";
			$i++;
		} while ($i < 10);
		echo "<hr>";

	# foreach 循环 遍历下标数组
		$people = array("Henry","Happy","Emily");
		foreach ($people as $person) {     //as - 关键字
			echo $person."<br>";
		}
		echo "<hr>";
	# foreach 循环 关联数组
		$people = array(
			"Henry"=>"Henry@email.com",
			"Happy"=>"Happy@email.com",
			"Emily"=>"Emily@email.com",
		);
		foreach ($people as $person => $email) {
			echo $person.":".$email."<br>";
		}
?>
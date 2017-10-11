<?php 
	# FUNCTION: 函数 -- 具有某一功能的代码块
	/*
		命名规则 
		Camel Case - myFunation()
		Lower Case - my_function()
		Pascal Case - MyFunction()
	*/
	
	# 定义函数 (函数在未调用时,在内存中是不存在的)
	# 无参数 无返回值
		function SimpleFunction(){
			echo "Cherish!"."<br>";
		}
	# 调用函数
		SIMPLEFUNCTION();  // 函数名大小写不敏感

	# 有参数 无返回值
		function buy($maney="20元"){
			echo $maney."给了,但没买东西!"."<br>";
		}
		buy("30元");

	# 多参 有返回值
		function sumValue($num1,$num2){
			$sum = $num1 + $num2;
			return $sum;
		}
		$result = sumValue(5,10);
		echo $result."<br>";

	# 无参数 有返回值
		function buyDrink(){
			return "饭后饮料!";
		}
		echo buyDrink()."<br>";

	# 函数传引用
		$myNum = 10;
		function addFive(&$num){  // &取地址符 拿到了myNum的引用,改变了内存中那个的数值,所以是15
			// echo $num + 5;
			$num += 5;
		}
		addFive($myNum)."<br>";
		echo $myNum;

?>
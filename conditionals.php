<?php 
	header('content-type:text/html;charset=utf-8'); 

	// 分支
	# if & switch
	
	# 关系运算符
	/* >  <  ==  !=  <=  >=  ===  !== */

	# if
	$num = 6;
	if($num <= 4) 
		echo "num的值一定小于或等于4";
	echo "Hello!";

	echo "<br>";

	
	# if else
	$num = 2;
	if($num >= 4){
		echo "true";
	} else {
		echo "false";
	}
	echo "<br>";

	# nesting if
	$num = 4;
	if($num >= 4){
		if($num <= 10){
			echo "num的值一定是在4~10之间";
		} else {
			echo "num的值一定大于10";
		}
	} else {
		echo "num的值一定小于4";
	}

	echo "<br>";


	# 逻辑运算符
	/* 
		逻辑与 && AND
		逻辑或 || OR
		逻辑非 !
		逻辑异或 XOR
	 */
	$num = 11;
	if($num > 3 XOR $num < 10){
		echo "num 是大于3 并且小于 10";
	}
	/* 
		AND : 一假即假
		OR : 一真即真
		XOR : 只有一个为真结果为真
	*/
	echo "<br>";


	# switch   js中case判断的是 === ;
	$favColor = "1";
	switch ($favColor) {
		case 'red':
			echo "angry";
			break;
		case 'yellow':
			echo "happy";
			break;
		case '1':
			echo "slience";
			break;
		case 'green':
			echo "forgive";
			break;		
		default:
			echo "GUN";
			break;
	}

	

 ?>











<div class="container">
	<?php
		# Filter:  过滤器函数

		# 检查是否存在data的name属性
		/*
		if(filter_has_var(INPUT_POST, "data")){
			// echo "data存在";

			$email = $_POST["data"];
			// echo $email;

			# 过滤掉不合法的字符
			$email = filter_var($email,FILTER_SANITIZE_EMAIL);
			echo $email;

			# 验证是否是一个有效的邮箱
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "邮箱合法!";
			} else {
				echo "邮箱不合法!";
			}
		} else{
			echo "data不存在";
		}
		*/

		/*
			审核
			FILTER_SANITIZE_EMAIL
			FILTER_SANITIZE_ENCODED
			FILTER_SANITIZE_MAGIC_QUOTES
			FILTER_SANITIZE_NUMBER_FLOAT
			FILTER_SANITIZE_NUMBER_INT
			FILTER_SANITIZE_SPECIAL_CHARS
			FILTER_SANITIZE_FULL_SPECIAL_CHARS
			FILTER_SANITIZE_STRING
			FILTER_SANITIZE_STRIPPED
			FILTER_SANITIZE_URL
			FILTER_UNSAFE_RAW
			
			验证
			FILTER_VALIDATE_BOOLEAN
			FILTER_VALIDATE_EMAIL
			FILTER_VALIDATE_FLOAT
			FILTER_VALIDATE_INT
			FILTER_VALIDATE_IP
			FILTER_VALIDATE_MAC
			FILTER_VALIDATE_REGEXP
			FILTER_VALIDATE_URL
		*/

		# 练习: 验证一个变量中的值是否是合法的整型
		/*
		echo "<br>";
		$num = "12";
		if(filter_var($num, FILTER_VALIDATE_INT)){
			echo "合法的整型";
		} else {
			echo "不合法的整型";
		}
		*/

		# 获取字符串中所有的数值
		/*
		$var = "j478dfh63jd93kf84jrf84";
		var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
		*/

		# 特殊字符
		/*
		$var = "<script>alert(1)</script>";
		// echo $var;
		echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);
		*/

		# 验证数组中每个元素
		/*
		$filters = array(
			"data" => FILTER_VALIDATE_EMAIL,
			"data2" => array(
				'filter' => FILTER_VALIDATE_INT,
				'options' => array(
					'min_range' => 1,
					'max_range' => 100
				)
			)
		);
		print_r(filter_input_array(INPUT_POST,$filters));
		*/

		# 验证form表单中input的内容,第一个input一定是email,第二个input一定是数值,并且数值不能小于1大于150
		/*
		if(filter_has_var(INPUT_POST, "data")){  // 判断是否输入内容
			$email = $_POST["data"];
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "邮箱合法";
			} else {
				echo "邮箱不合法";
			}
		}
		echo "<br>";
		if (filter_has_var(INPUT_POST, "data2")) {
			$number = $_POST["data2"];
			if(filter_var($number, FILTER_VALIDATE_INT)){
				echo "年龄合法"."&nbsp;&nbsp;";
				if($number > 1 && $number < 150){
					echo $number;
				} else {
					echo "数值超出范围";
				}
			} else {
				echo "年龄不合法";
			}
		}
		*/

		# 验证数组变量中的内容
		$arr = array(
			"name" => "hanry",
			"age" => "130",
			"email" => "hanry@123.com"
		);
		$filters = array(
			"name" => array(
				"filter" => FILTER_CALLBACK,
				"options" => "ucwords"   // 调用首字母大写字符串函数
			),
			"age" => array(
				"filter" => FILTER_VALIDATE_INT,
				"options" => array(
					'min_range' => 1,
					'max_range' => 100
				)
			),
			"email" => FILTER_VALIDATE_EMAIL
		);
		print_r(filter_var_array($arr,$filters));


	 ?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filters / 过滤器</title>
	<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
</head>
<body>
	<br>
	<div class="container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="data" class="form-control"> <br>
			<input type="text" name="data2" class="form-control"> <br>
			<button class="btn btn-primary btn-block" type="submit">提交</button>
		</form>
	</div>
</body>
</html>
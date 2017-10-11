<?php 
	# string functions: 处理字符串的函数
	
	$output = "HelloWorld";
	# 返回字符串的一部分  substr(string, start [,length])	
	$output = substr($output, 1);
	echo $output."&nbsp;&nbsp;&nbsp;";	
	echo substr($output, 1, 2)."<br>";
	
	# 返回给定的字符串string的长度   int strlen(string $string)
	echo strlen($output)."<br>";  

	# 查找字符串首次出现的位置 strpos
	$output = "HelloWorld";
	echo strpos($output, "e")."<br>"; 
	
	# 计算指定字符串在目标字符串中最后一次出现的位置 
	# strrpos(对大小写敏感)
	echo strrpos("You love PHP, I love php too!","PHP")."&nbsp;&nbsp;&nbsp;";  //9
	# strripos(对大小写不敏感)
	echo strripos("You love php, I love php too!","PHP")."<br>"; // 21

	# 去除首尾空格trim
	$output = "   HelloWorld    ";
	echo strlen($output)."&nbsp;&nbsp;&nbsp;";  // 17
	$newString = trim($output);
	echo strlen($newString)."&nbsp;&nbsp;&nbsp;";  //10

	echo trim("Hello World","Hed!")."<br>"; // llo Worl

	# 将字符串转为大写 strtoupper
	echo strtoupper("Hello WORLD!")."<br>";
	
	# 将字符串转为小写 strtolower
	echo strtolower("Hello World!")."<br>";
	
	# 将每个单词首字母大写 ucwords
	echo ucwords("hello world!")."<br>";
	
	# 替换所有匹配的内容  str_replace
	echo str_replace("World", "Everybody", "Hello World!")."&nbsp;&nbsp;&nbsp;";
	echo str_replace("a", "A", "hfandiafjda")."<br>";
	
	# 判断是否是字符串  is_string
	$str = true;
	if(is_string($str)){
		echo "是字符串"."<br>";
	} else {
		echo "不是字符串"."<br>";
	}
	
	# 过滤掉数组中非字符串的值
	$values = array(true,false,"hello",32,"23",23.4,'',' ',0,'0');
	foreach ($values as $values) {
		# 判断是否是字符串,若是,输出
		if(is_string($values)){
			echo $values."&nbsp;&nbsp;"."is a string!<br>";
		}
	}

	# 压缩字符串  gzcompress
	$string = "I love and cherish you!";
	$compressed = gzcompress($string);
	echo $compressed."<br>";
	
	# 解压字符串
	$unCompressed = gzuncompress($compressed);
	echo $unCompressed."<br>";
?>
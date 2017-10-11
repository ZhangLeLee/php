<?php 
	# date: php中的日期函数

	# date
	// echo date();  # 至少要给一个参数

	# day
	echo date("d")."<br>"; // 一个月中的第几天(01 ~ 31)
	echo date("j")."<br>"; // 一个月中的第几天(1 ~ 31)
	echo date("t")."<hr>"; // 给定月份中包含的天数

	# month
	echo date("m")."<br>"; // 月的数字表示(01 ~ 12)
	echo date("M")."<br>"; // 月的文本(前三个字母)表示
	echo date("n")."<br>"; // 月的数字表示(1 ~ 12)
	echo date("F")."<hr>"; // 月份的完整的文本表示（January[一月份] 到 December[十二月份]）

	# year
	echo date("y")."<hr>"; // 年份2位数表示
	echo date("Y")."<br>"; // 年份4位数表示
	echo date("o")."<br>"; // ISO-8601 标准下的年份数字
	
	# day of week
	echo date("l")."<br>"; // 星期几的文本(完整)表示
	echo date("D")."<br>"; // 星期几的文本表示（用三个字母表示）
	echo date("N")."<hr>"; // 星期几的 ISO-8601 数字格式表示（1表示Monday[星期一]，7表示Sunday[星期日]

	# 格式化输出年月日
	echo date("Y/m/d")."<br>";
	
	# 格式化输出日月年
	echo date("d-m-Y")."<hr>"; 

	# 时分秒
	# hour
	echo date('h')."<br>";

	# minute
	echo date('i')."<br>";

	# seconds
	echo date('s')."<br>";

	# AM or PM
	echo date('a')."<hr>";

	# 设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date('h:i:sa')."<hr>";
	
	# 时间戳  mktime
	$timestamp = mktime(07,00,12,1,24,1988);
	echo $timestamp."<hr>";

	# 完整的时间
	echo date("m/d/Y h:i:sa")."<br>";
	echo date("m/d/Y h:i:sa",$timestamp)."<hr>";
	
	# 字符串转时间
	$timestamp2 = strtotime("7:00pm March 22 2016");
	$timestamp3 = strtotime("tomorrow");
	$timestamp4 = strtotime("next sunday");
	$timestamp5 = strtotime("+2 Days");
	echo date("m/d/Y h:i:sa",$timestamp2)."<br>";
	echo date("m/d/Y h:i:sa",$timestamp3)."<br>";
	echo date("m/d/Y h:i:sa",$timestamp4)."<br>";
	echo date("m/d/Y h:i:sa",$timestamp5)."<br>";
	
?>
<?php 
function test1(){
	$n = 0;
	echo $n;
	$n++;
}

// 重复初始化
test1();  //0
test1();  //0
test1();  //0

echo "<hr>";


// 防止重复初始化
function test2(){
	static $n = 0;
	echo $n;
	$n++;
}
test2();
test2();
test2();
test2();

 ?>







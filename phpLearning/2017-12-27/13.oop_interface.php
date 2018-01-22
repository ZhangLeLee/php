<?php 
# php是单继承的,不支持多继承,为了解决这个问题, 引入了接口的概念
# 接口的思想是 实现该接口的类 必须实现的一系列方法
# 接口更多是为了定义规范
# interface

// 定义接口  接口也属于抽象类的一种  第10-13行
# 接口内部的方法必须全部为抽象方法 省略abstract关键字  第15-18行
/*
interface Usb{
	abstract function test1();
	abstract function test2();
}
*/
interface Usb1{
	function test1();
	function test2();
}
# implements 实现(继承的含义)
# 普通类实现接口 意味着需要实现接口里的所有方法
class Machine implements Usb1{
	public function test1(){
		echo "test1<br>";
	}
	public function test2(){
		echo "test2<br>";
	}
	# Machine类中可以有自己的方法
	public function test3(){
		echo "test3<br>";
	}
}
$m = new Machine();
$m->test1();
$m->test2();
$m->test3();

 ?>






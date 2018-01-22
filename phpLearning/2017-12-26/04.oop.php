<?php 
/*
	魔术方法 -- php独有的, 其他编程语言没有的, 封装好的一些具有固定功能的方法
	魔术方法网址: http://php.net/manual/zh/language.oop5.magic.php
	特点: 1.php面向对象中,所有的魔术方法 __ 下划线开头
	特点: 2.魔术方法在满足某种特定条件下, 将会被自动调用
*/

class Person{
	# 构造方法(函数) 在类被实例化的时候 在对象被创建的时候被调用(构造方法自动执行)
	
	public function __construct($name){
		$this->name = $name."我是对象";
	}

	# 跟类名重名的方法, 也是构造方法(当对象被创建的时候, 也会自动调用)
	public function Person(){
		echo "我会被调用的!";
	}

	# 析构方法(函数) 对象销毁前被自动调用
	public function __destruct(){
		echo "我是对象被销毁前自动来调用的!"."<br>";
	}


}

$p = new Person('dede');
echo $p->name;

echo "<br>";


class Car{
	public function __construct($age){
		$this->age = $age."年龄";
	}
}
$car = new Car(18);
echo $car->age;


 ?>







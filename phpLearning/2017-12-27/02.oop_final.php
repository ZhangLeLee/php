<?php 
/*
final 最终 -- 修饰类 和 成员方法
	1.如果类不希望被别人继承 在类名前加修饰词 final 
	2.如果不希望类中某个方法被继承 在该方法前加 final
	3.不能用来修饰类中的成员属性  可使用const来定义常量

	目的: 安全 没有必要
*/
class Person{
	public $name = 'zhangsan';
	protected $age = 18;
	private $money = '100';
	final public function test(){
		echo "test";
	}
}
class Student extends Person{
	public $car = 'has';
	public function test(){
		echo "testStudent";
	}
}
$s = new Student();
// echo $s->name;
$s->test();


 ?>







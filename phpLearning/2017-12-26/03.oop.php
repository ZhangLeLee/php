<?php 
# 定义一个类 抽象一个类
# 成员属性: 常用修饰符 public protected private static
# 成员方法: 常用修饰符 public protected private static abstract(抽象) final(最终)
# $this
class Person{
	public $name = '小明';
	# public $n = 7+1;  // 定义成员属性不可以有表达式
	/* 
	定义成员属性
		4个标量 String Boolean int float
		两种符合类型
		两种特殊类型
	*/
	public $arr = ['a','b','c'];

	public function show(){
		return $this->name;
	}
}
$p = new Person();
echo $p->show();

echo "<br>";

// 在类外对类中的属性赋值

$p1 = new Person();
$p1->name = 'dede';
echo $p1->show();

echo "<br>";

$p2 = new Person();
$p2->name = 'titit';
echo $p2->show();

 ?>


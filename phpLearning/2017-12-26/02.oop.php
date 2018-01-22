<?php 
# 如何定义(抽象)一个类
# 1.面向对象的思想
# 2.面向对象的语法(更好的取理解面向对象)


$name = '小明';

function fun($str='hello'){
	return $str;
}

class Person{
	# 1.成员属性 变量
	public $name = '小明';
	protected $age = 18;
	private $money = 100;

	# 2.成员方法 函数
	# 3.修饰符 public 公有  private 私有  protected 受保护
	function speak($words='hello'){
		return 'i can speak '.$words.'!';
	}

	protected function job(){
		return '我的工作比较保密!';
	}

	private function myCar(){
		return 'i have a car!';
	}

}

# 类的实例化 继承 封装
$p = new Person();
echo $p->name; //访问类中属性是不加 $ 符号, 在类外可以直接访问类中的公有属性
echo "<br>";
# echo $p->age;   //不能访问受保护成员属性
# echo $p->money; //不能访问私有的成员属性

echo $p->speak();   //可以访问公有的方法
echo "<br>";
# echo $p->job();   //不能访问受保护的方法
# echo $p->mycar(); //不能访问私有的方法


/*
除了公有的属性和方法可以在类外被访问,私有的,受保护的方法在类外不能被访问
*/


echo "<br>";

class Car{
	public $size = '小轿车';
	protected $number = '大众';
	private $money = '20万';

	public function carFn($info='this is my car'){
		return $info.$this->number.$this->money;
	}

	public function fun(){
		// return $this->addr();
		return $this->privateFn();
	}

	protected function addr(){
		return '我是在北京买的大众车!';
	}

	private function privateFn(){
		return '我是私有的方法';
	}

}

$car = new Car();
echo $car->carFn();
echo "<br>";
echo $car->fun();

/* 在类外访问公有的方法, 在公有的方法内访问类内私有的属性 */
/* 如果做封装, 类中至少应有一个公有的方法, 以便于我们可以通过访问此方法来达到访问类中某个 受保护/私有 的 属性/方法 */

 ?>









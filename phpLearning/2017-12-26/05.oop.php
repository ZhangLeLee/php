<?php 
# 封装补充
# 魔术方法 __set __get 
# 在类外, 对类中受保护/私有属性赋值
class Person{
	public $name;
	protected $age;
	protected $sex;
	private $money;

	public function setAge($age){
		$this->age = $age;
		return '我的年龄: '.$this->age;
	}

	public function setName($name){
		$this->name = $name;
		return '我的名字: '.$this->name;
	}


}
$p = new Person();
echo $p->setAge(18);
echo "<br>";
echo $p->setName('dedee');
echo "<br>";

# __set __get
class Car{
	public $name;
	protected $size;
	protected $auto;
	private $displacement;

	function __set($k,$v){
		echo $k;
		echo $v;
		echo "<br>";
		echo $k.'=>'.$v;
		echo "<br>";
		// echo "当你在类外对类中受保护的成员属性赋值, 我将会被调用!";
	}

	function __get($name){
		echo $name.'<br>';
		// echo "在类外获取,访问类中私有,受保护的属性的时候, 会被调用!";
	}

}
$car = new Car();

# 在类外对类中受保护的属性不能直接赋值,通过一个公有的方法达到在类外对类中受保护属性的赋值

$car->size = "小";   // 对类中受保护的成员属性赋值
$car->auto = "自动";

echo "<br>";
echo $car->size;   //在类外 调用 类中受保护的属性
echo $car->displacement; //在类外 调用 类中私有的属性



 ?>






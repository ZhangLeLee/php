<?php 
# 魔术方法 __isset __unset

# isset() 判断变量是否存在 是否被定义 检测变量的存在
$name = '小明';
if(isset($name)){
	echo $name;
} else {
	echo "变量不存在!";
}

echo "<br>";

# unset 销毁一个变量
unset($name);
if(isset($name)){
	echo $name;
} else {
	echo "变量不存在!";
}

echo "<hr>";



class Person{
	public $name = 'dedee';
	protected $age = 21;
	private $sex = 'nv';
}
$p = new Person();

// 在类外判断类内的属性是否存在
var_dump(isset($p->name));  // 判断公有的属性  bool(true) 
echo "<br>";
var_dump(isset($p->age));   // 判断受保护的属性  bool(false) 
echo "<br>";
var_dump(isset($p->sex));   // 判断私有的属性  bool(false) 



echo "<hr>";

class Car{
	public $name = 'BYD';
	protected $displacement = '大排量';
	private $color = 'red';

	// 类外, 用isset方法来判断类中私有/受保护的属性存在的时候 调用此方法
	public function __isset($name){
		echo $name;
		if(isset($this->$name)){  //$this->age
			return true;
		} else {
			return false;
		}
	}

	// 类外, 对类中的私有/受保护的属性销毁的时候, 会自动执行__unset魔术方法
	public function __unset($name){
		echo "销毁";
	}

}
$car = new Car();
var_dump(isset($car->displacement)); 
echo "<br>";
var_dump(isset($car->color)); 

echo "<br>";

unset($car->color);
var_dump(isset($car->color)); 


 ?>







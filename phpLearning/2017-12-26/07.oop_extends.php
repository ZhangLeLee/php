<?php 

class Person{
	public $name = '张三';
	protected $age = 18;
	private $money = 100;

	public function speak(){
		// return 'i can speak!';
		return 'i can speak!'.'我的年龄是: '.$this->age.'Mymoney:'.$this->money;
	}
}
$p = new Person();

# extends 继承 关键字
class Teacher extends Person{
	public $sex = '男';
	public function run(){
		echo "i can run!".'我的年龄是: '.$this->money;
	}
}
# 子类继承父类 就拥有了一切父类的属性和方法
$t = new Teacher();
echo "<pre>";
echo $t->run();
echo "<br>";
echo $t->speak();

/*

			private    protected   public(默认)
在同一个类中  	  yes         yes         yes
类的子类中	  no          yes         yes
其他外部类中    no          no          yes

*/

 ?>







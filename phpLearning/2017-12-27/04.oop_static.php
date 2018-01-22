<?php 
class A{
	public $count = 0;
	public function __construct(){
		$this->count++;
	}
	public function getCount(){
		echo $this->count;
	}
}
$a = new A();
$a->getCount();  // 1
$a1 = new A();
$a1->getCount();  // 1

echo "<hr>";

# static 为了放置重复初始化
class B{
	public static $count = 0;
	public function __construct(){
		# 访问类中的静态属性 或者静态方法 self::
		# 访问普通属性 或者普通方法 $this->
		self::$count++;
	}
	public function getCount(){
		echo self::$count;
	}
}
$b = new B();
$b->getCount();
$b2 = new B();
$b2->getCount();
$b3 = new B();
$b3->getCount();

 ?>






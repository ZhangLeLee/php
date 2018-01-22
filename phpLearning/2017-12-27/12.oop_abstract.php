<?php 
// 抽象类 抽象方法
// 类中至少有一个抽象方法的类 成为抽象类，抽象类不能实例化
// 有抽象方法的类，必须是抽象类；抽象类不一定必须有抽象方法
abstract class A{
	// 普通类 普通方法
	public function test(){
		echo "i am a test method";
	}
	// 1.abstract 修饰的方法是抽象方法  2.没有花括号 没有方法体
	public abstract function abstractFn1();
	public abstract function abstractFn2();
	public abstract function abstractFn3();
}


// 抽象类可以继承
abstract class B extends A{
	// 继承抽象类的同时要重写抽象类中的抽象方法
	public function abstractFn1(){
		echo "i am abstractFn1";
	}
	public function abstractFn2(){
		echo "i am abstractFn2";
	}
	public abstract function abstractFn4();
}
// $b = new B();
// $b->test();

// 当一个类继承另一个抽象类的时候就必须全部实现抽象类中的抽象方法
// $b->abstractFn1();
// $b->abstractFn2();


class C extends B{
	public abstract function abstractFn1(){

	}
	public abstract function abstractFn2(){

	}
	public abstract function abstractFn3(){

	}
	public abstract function abstractFn4(){

	}
}




 ?>

<!-- 我的应用 -->
<?php 
abstract class A{
	public function test(){
		echo "test";
	}
	public abstract function test1();
}

abstract class B extends A {
	// public function test1(){
	// 	echo "test1";
	// }
	public abstract function test2();
}


class C extends B{
	public function test1(){
		echo "test1";
	}
	public function test2(){
		echo "test2";
	}
}

$c = new C();
$c->test1();
// $c->test2();


 ?>


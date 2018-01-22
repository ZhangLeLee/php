<?php 
# instanceof 检测当前对象实例 是否属于某一个类的类型
# toString  快速的获取对象字符串


class A{

}
class B{

}
class C extends A{

}

$a = new A();
$b = new B();
$c = new C();

// $a对象 是否属于 A类
var_dump($a instanceof A);  // bool(true)
// $a对象 是否属于 B类
var_dump($b instanceof A);  // bool(false)
// $c对象 是否属于 A类
var_dump($c instanceof A);  // bool(true)
var_dump($a instanceof C);  // bool(false)

# 一个对象一定属于自己的类本身 一个对象还属于本类的父类


echo "<hr>";


# toString  快速的获取对象字符串 当我们直接去输出一个对象的时候 会自动调用
class D{
	# toString方法的返回值一定是字符串 
	public function __toString(){
		# 解释说明类的用法
		return '此类是作为方便大家来调用使用的,用来解释说明此类的作用,编写文档';
	}
}
$d = new D();
// 类外直接输出对象
echo $d;  // 当有人直接 echo $d 对象时 调用 toString方法


 ?>






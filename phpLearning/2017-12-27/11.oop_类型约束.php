<?php 
# 类型约束
class Person{
	/*
	public function test($obj){
		echo $obj->a();
	}
	*/
	# 类型约束 只运行约束的类的所属对象才可以传递
	public function test(Student $obj){
		echo $obj->a();
	}
}
class Student{
	public function a(){
		return 'Student/a';
	}
}
class Teacher{
	public function a(){
		return 'Teacher/a';
	}
}

// 创建student对象 通过student对象访问student类中的a()方法
// $s = new Student();
// echo $s->a();

// 不直接调用 Student 方法
$s = new Student();
$p = new Person();
$t = new Teacher();
// 调用一个方法传递参数为普通变量
// 调用一个方法 传递是对象
$p->test($s);
echo "<br>";
// $p->test($t);




 ?>






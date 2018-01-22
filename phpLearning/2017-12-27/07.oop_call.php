<?php 
# call 处理错误是调用
# 当试图调用一个类中不存在的方法, 就会报错,如果此时有__call 会自动调用此方法
class A{
	public function test($str){
		echo $str;
	}
	# $name 访问的不存在的方法名
	# $arguments 调用方法时的参数列表
	public function __call($name,$arguments){
		// echo "当类外调用不存在的方法会被自动调用<br>";
		echo '您访问的 '.$name.' 方法不存在<br>';
		// print_r($arguments);
		foreach($arguments as $val){
			echo $val;
		}
	}
}
$a = new A();
$a->test('hello');
echo "<br>";
$a->test1('1','2');   // test1方法不存在, 会调用 __call方法



 ?>





<?php 
# serialization 对象的串行化(序列化)
# serialize() 串行化
# unserialize() 反串行化
/*
对象什么时候需要串行化
1.对象需要在网络中传输 将对象串行化 二进制
2.对象需要持久化保存 将对象串行化后写入到文件或数据库(以字符串的形式)
*/
class Person{
	public $name = 'dedee';
	public $age = 19;
	public $sex = '男';

	public function speak(){
		echo "我的名字是: ".$this->name.' 我的年龄是: '.$this->age.' 我的性别是: '.$this->sex;
	}
}

/*
$p = new Person();
// $p->speak();
// 对象的串行化
$str = serialize($p);
var_dump($str);
# file_put_contents 向文件中写入内容 以字符串的形式
file_put_contents('file.txt',$str);
*/

 ?>






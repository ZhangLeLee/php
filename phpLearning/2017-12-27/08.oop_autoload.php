<?php 
# __autoload 自动加载类
# 作用: 当new一个不存在的类的时候 会自动调用 唯一一个写在类外的魔术方法

# 类文件的命名格式 -- 类名.class.php
/*
include_once 'one.class.php';
$one = new One();
$one->a();

include_once 'two.class.php';
$two = new Two();
$two->a();

include_once 'three.class.php';
$three = new Three();
$three->a();
*/

echo "<br>";

function __autoload($name){
	$name = strtolower($name); // 将$name的值转变为小写
	// echo $name;
	if(file_exists($name.'.class.php')){  // 判断文件是否存在
		include_once $name.'.class.php';
	} else {
		die($name.'.class.php文件不存在');
	}
}
// new 一个不存在的类的时候 会自动调用
$one = new One();   // one/a
$one->a();
echo "<br>";

$two = new Two();   // two/a
$two->a();
echo "<br>";

$three = new Three();  // three/a
$three->a();
echo "<br>";
// $four = new Four();   // four.class.php文件不存在
// $four->a();
 ?>






<?php 
session_start();  //开启session 存 取 销毁

// 1.php介绍  写后台和写接口
// 2.变量命名 以字母 下划线 开头 包含字母 数字 下划线
$a = 1;  //int
$b = 'hello';  //string
$b = 1;  //int

// 3.php的数组  php->mysql  黄金搭档 CMS  wordpress  一位数组 二维数组
$arr = ['a','b','c'];  // 一位数组 索引数组
echo $arr[0];

$brr = ['name'=>'小明','age'=>18];  //键值对 关联数组
echo $brr['name'];

$crr = [['a','b','c'],['e','f','g']];
echo $crr[1][2];

$drr = [['name'=>'小明','age'=>18],['name'=>'titi','age'=>21]];

echo '</br>';

# foreach 遍历数组中的所有记录
foreach ($arr as $val) {
	echo $val;
}

echo "<br>";

foreach ($arr as $key=>$val){
	echo $key.'=>'.$val.'&nbsp;&nbsp;';
}

echo "<br>";

foreach ($drr as $val){
	echo $val['name'];
}

echo "<br>";
foreach ($drr as $key=>$val){
	echo $key.'名字:'.$val['name'].';年龄:'.$val['age'].'&nbsp;&nbsp;';
}

# 超全局变量 超全局数组
# 超全局变量 在全部作用域中始终可以使用的内置变量
echo "<pre>";
print_r($_SERVER);

# cookie 保存地址 本地  session 服务器
// set_cookie();

// 文件上传

// thinkphp  php框架

 ?>

<form action="action.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" value="上传">
</form>







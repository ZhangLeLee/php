<?php 
include_once '09.oop_serialization.php';
# 反串行化 反序列化
# 不用再重新创建对象
# 获取file.txt中的内容
$str = file_get_contents('file.txt');
// echo $str;
$obj = unserialize($str);
var_dump($obj);
// $p->speak();

 ?>






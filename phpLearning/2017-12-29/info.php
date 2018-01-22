<?php 	
/*

thinkphp url 访问的方式
http://localhost/CCPHP/thinkphp/thinkphp1/index.php/模块/控制器/方法

http://localhost/CCPHP/thinkphp/thinkphp1/index.php/Home/Index/index


http://localhost/phpLearning/2017-12-29/thinkphp/index.php/Admin/User/register

也可通过以下方式访问
http://localhost/phpLearning/2017-12-29/thinkphp/index.php?m=Admin&c=User&a=register


url传参:
http://localhost/phpLearning/2017-12-29/thinkphp/index.php/模块/控制器/方法/名字/值/名字/值...
http://localhost/phpLearning/2017-12-29/thinkphp/index.php/Admin/User/register/id/1/name/zhangsan


*/
 ?>

兼容模式 url中不需要有index.php接口文件 也可以正常访问  url路径如下:
http://localhost/phpLearning/2017-12-29/thinkphp/Admin/User/register
参考文献网址: http://document.thinkphp.cn/manual_3_2.html#url

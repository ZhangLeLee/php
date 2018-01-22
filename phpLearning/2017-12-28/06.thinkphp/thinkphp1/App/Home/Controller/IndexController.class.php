<?php
// 命名空间  告诉我们现在所处的位置在哪里
namespace Home\Controller;
// use 引入我们想要继承的controller文件
use Think\Controller;
class IndexController extends Controller {
	// 访问该方法  http://localhost/CCPHP/thinkphp/thinkphp1/index.php/Home/Index/index
    public function index(){
    	echo "Hello world!";
    }
    // 访问该方法  http://localhost/CCPHP/thinkphp/thinkphp1/index.php/Home/Index/test
    public function test(){
    	echo "This is test!";
    }
}

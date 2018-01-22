<?php
// 命名空间  告诉我们现在所处的位置在哪里
namespace Admin\Controller;
// use 引入我们想要继承的controller文件
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	echo "后台的首页!";
    }
    public function test(){
    	echo "后台的测试!";
    }
}

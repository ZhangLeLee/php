<?php
// 命名空间  告诉我们现在所处的位置在哪里
namespace Home\Controller;
// use 引入我们想要继承的controller文件
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	// echo "前台的首页!";
        $this->display();
    }
    public function register(){
        $this->display();
    }
    /*# M V C
    public function test(){
    	// echo "前台的测试!";
    	// 调用模板 v view
        // $this->display();
    	$this->display('demo');
    }
    public function demo(){
    	echo "demo";
    	$this->display();
    }
    */
}

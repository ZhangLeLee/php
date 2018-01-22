<?php 
/*
	编写代码过程中 严格区分大写写  linux操作系统
	所有的目录名称 大写字母开头 
*/
namespace Home\Controller;
use Think\Controller;
# 创建了一个属于自己的控制器
class UserController extends Controller{
	public function test(){
		// 测试 学习模板调用  Home/User/test -- 调用模板

		# 获取get传值参数  http://localhost/phpLearning/2017-12-29/thinkphp/Home/User/test/id/1/x/thisx
		/*
		$id = $_GET['id'];
		$id = $_GET['x'];
		// echo $id;
		$this->assign('id',$id);
		$this->assign('x',$x);
		*/

		$name = 'dedee';
		$age = 18;
		$this->assign('name',$name);
		$this->assign('age',$age);
		# 调用那个模板 值传到那个模板
		$this->display();
		// $this->display('register');
	}
	# 注册页面
	public function register(){
		// 编写php代码
	    /*	
		echo "<html>";
		echo "</html>";
		echo "这是注册的模板";
	    */
		$this->display();
	}
	# 注册处理程序
	public function registerAction(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		echo $username."&nbsp;&nbsp;".$password;
		echo "我是注册的处理程序";
	}
	public function login(){
		echo "我是登录的页面<br>";
		# 以下知识点参考网址: http://document.thinkphp.cn/manual_3_2.html#const_reference 中的系统常量
		echo __ROOT__."&nbsp;&nbsp;&nbsp; __ROOT__ <br>";
		echo __APP__."&nbsp;&nbsp;&nbsp; __APP__ <br>";
		echo __MODULE__."&nbsp;&nbsp;&nbsp; __MODULE__ <br>";
		echo __CONTROLLER__."&nbsp;&nbsp;&nbsp; __CONTROLLER__ <br>";
		echo __ACTION__."&nbsp;&nbsp;&nbsp; __ACTION__ <br>";
		echo __SELF__."&nbsp;&nbsp;&nbsp; __SELF__ <br>";
		echo __INFO__."&nbsp;&nbsp;&nbsp; __INFO__ <br>";
	}
}


 ?>





<?php 
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller{
	public function index(){
		// echo "如果控制器不存在, 一定会执行empty这个控制器, 也就是说一定会执行index方法";
		$this->display('Public/no');
		
	}
	public function _empty($name){
		// echo "当跳转到不存在的方法时, 执行_empty方法";
		$this->display('Public/no');
	}
}


 ?>





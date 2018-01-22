<?php 
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{
	public function _empty($name){
		// echo "当跳转到不存在的方法时, 执行_empty方法";
		$this->display('Public/no');
	}
}


 ?>




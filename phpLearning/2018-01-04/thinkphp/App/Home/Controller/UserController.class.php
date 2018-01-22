<?php 
namespace Home\Controller;
// use Think\Controller;
class UserController extends EmptyController{
	# 如果在别的控制器中访问了不存在的方法
	public function index(){
		echo "UserController/index... ";
	}

	# 接口地址 登录接口
	public function loginApi(){
		$name = I('post.name');
		$pass = I('post.pass');
		$arr = compact('name','pass');
		$id = M('Users')->where($arr)->find();
		if($id>0){
			$data['status'] = '1';
			$data['msg'] = 'success';
		}else{
			$data['status'] = '-1';
			$data['msg'] = 'fail';
		}
		$this->ajaxReturn($data);


	}
}

 ?>





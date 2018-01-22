<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	# CURD
    	/*
			C create
			U update
			R read
			D delete
    	*/
    	# 实例化表对象
    	$users = M('Users');

    	# find() 获取一条数据   	
    	// $row = $users->where('id = 1')->find();
      // $row = $users->find(8);
		  // print_r($row);
		
    	# select() 获取所有记录
    	$rows = $users->select();
    	// $rows1 = $users->where('id>1')->select();
    	// print_r($rows);
    	// print_r($rows1);
    	$this->assign('rows',$rows);


		# 写入数据
		/*
		$data['name'] = '大明';
		$data['pass'] = '1111';
		$users->add($data);
		*/


		# 删除数据
		// $users->delete(14);   //delete括号后的id必须是主键的id
		// $users->where('id=13')->delete();


		# 修改数据
		/*
		$data['name'] = '大红';
		$data['pass'] = '12';
		$users->where('id=2')->save($data);
		*/

       	$this->display();
    }

   
    # 添加页面
   	public function add(){
        // echo "add";
        $this->display();
   	}

   	# 添加处理程序
   	public function addAction(){
   		// $name = trim($_POST['name']);
   		$name = I('post.name');
   		$pass = I('post.pass');
   		$age = I('post.age');
   		$sex = I('post.sex');
   		$data = compact('name','pass','age','sex');
   		// var_dump($data);
   		$users = M('Users');
   		$id = $users->add($data);
   		// var_dump($id);
   		if($id>0){
   			$this->success('会员添加成功','index',3);
   		} else {
   			$this->error('会员添加失败','index',3);
   		}
   	}


   	# 删除
   	public function del(){
   		$id = I('get.id');
   		$users = M('Users');
   		$n = $users->delete($id);
   		if($n > 0){
   			// 删除成功  n: 代表删除了一条记录
   			$data['status'] = 1;
   			$data['msg'] = '删除成功';
   			// json_encode 将数组转成json格式
   			// echo json_encode($data);
        // $this->ajaxReturn($data);
   		} else {
   			// 删除失败
        $data['status'] = 1;
        $data['msg'] = '删除失败';
        // $this->ajaxReturn($data);
   		}
      $this->ajaxReturn($data);

   	}


    # 编辑页面
    public function edit(){
      # 得到id
      $id = I('get.id');
      # 实例化对象
      $users = M('Users');
      # 查询记录
      $row = $users->find($id);
      # 模板赋值
      $this->assign('row',$row);
      // $this->assign('id',$id);
      # 调用模板
      $this->display();
    }

    # 编辑的处理程序
    public function editAction(){
      $id = I('post.id');
      $name = I('post.name');
      $sex = I('post.sex');
      $age = I('post.age');
      $users = M('Users');
      $data = compact('name','sex','age');
      $n = $users->where(['id'=>$id])->save($data);
      if($n>0){
        $this->success('会员修改成功','index',3);
      } else {
        $this->error('会员修改失败','edit',3);
      }
    }


    public function test(){
      # D 实例化 model类
      $users = D('Users');
      /*  # 获取表格数据
      $arr = $users->getAll();
      dump($arr);
      */
      /*  # 获取单条记录
      $row = $users->getOne(22);
      dump($row);
      */  

      # 获取单条记录名称
      $name = $users->getOne(22);
      // echo $name;
      $this->assign('name',$name);
      $this->display();

    }

}




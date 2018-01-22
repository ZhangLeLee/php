<?php 
namespace Home\Model;
use Think\Model;
/* UsersModel 类名中的Users对象数据库中的表 users */
class UsersModel extends Model{
	public function getAll(){
		return $this->select();
	}
	# 获取单条记录
	public function getOne($id){
		$row = $this->find($id);
		return $row['name'];
	}
}


 ?>







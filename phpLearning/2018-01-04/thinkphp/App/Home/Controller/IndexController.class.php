<?php
namespace Home\Controller;
// use Think\Controller;
class IndexController extends EmptyController {
	 # 当访问不存在的方法时, 会自动加载_empty方法
    // public function _empty($name){
    // 	// echo $name;
    // 	// echo "您访问了不存在的方法... ".'方法名为: '.$name;
    // 	$this->display('no');
    // }

    public function index(){
       	# 实例化表对象
    	$m = M('Users');

    	# 查询方式
    	/*
    	$rows = $m->select();
    	dump($rows);
    	*/

    	/*
    	$users = $m->where('age=18 and sex=1')->select();
    	dump($users);
    	*/

    	/*  # 运行速度快 更安全
    	$condition['age'] = 18;
    	$condition['sex'] = 1;
    	$condition['_logic'] = 'OR';
    	$users = $m->where($condition)->select();
    	dump($users);
    	*/


    	# 表达式查询
    	# 年龄等于18
    	// $map['age'] = ['eq',18];

    	# 年龄不等于18
    	// $map['age'] = ['neq',18];

    	# 年龄大于18
    	// $map['age'] = ['gt',18];

    	// $users = $m->where($map)->select();
    	// dump($users);


    	# 模糊查询

    	# 查询以m开头的
    	// $map['name'] = ['like','m%'];

    	# 查询以v结尾的
    	// $map['name'] = ['like','%v'];

    	# 要么m开头 要么v结尾
    	// $map['name'] = ['like',['m%','%v'],'OR'];

    	# 以m开头和以v结尾
    	// $map['name'] = ['like',['m%','%v'],'AND'];

    	# 除了以m开头和以v结尾
    	// $map['name'] = ['notlike',['m%','%v'],'AND'];

    	# 年龄在[18,20]之间
    	// $map['age'] = ['between','18,20'];

    	# 年龄不在[19,46]之间
    	// $map['age'] = ['notbetween','19,46'];

    	# 年龄在18,19,20之间
    	// $map['age'] = ['in','18,19,20'];

    	# 年龄不在18,19,20之间
    	// $map['age'] = ['notin','18,19,20'];

    	# age>18, age<20
    	// $map['age'] = [['gt','18'],['lt','20']];

    	// $users = $m->where($map)->select();
    	// dump($users);


    	# 当tp满足不了需求时, 自己写查询语句
    	// $rows = $users->query("select * from users where id=1");
    	// dump($rows);

    }


}
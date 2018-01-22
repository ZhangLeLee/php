<?php 
/*
Exception 异常
处理用于在指定的错误发生时改变脚本的正常流程
try...catch 异常处理
*/

# 异常处理的格式
try{
	# 使用try去包含可能发生异常的代码
	# 一旦出现异常try进行捕获异常
	# catch (异常对象参数) 只要抛出异常 catch里的代码执行 不抛异常catch里的代码不执行
	$error = '一直会抛出的这个异常';
	throw new Exception();  // throw 对象(异常)
	echo "一旦异常被抛出,此处代码不执行";
}catch(Exception $e){
	# 获取到异常后 相应处理
	echo $e->getMessage();
}
// echo "hello";


# try...catch  demo
try{
	$a = 10;
	$b = 0;
	if($b != 0){
		echo $c = $a/$b;
	} else {
		$error = "分母不能为0";
		throw new Exception($error);
	}
	echo $c;
} catch (Exception $e){
	echo $e->getMessage();
}


 ?>





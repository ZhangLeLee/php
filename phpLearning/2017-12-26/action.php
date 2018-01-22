<?php 
$file = $_FILES['file'];
print_r($file);

$error = $file['error'];
switch ($error) {
	case 0:
		$msg = '上传没有问题';
		break;
	case 4:
		$msg = '没有任何文件被上传';
		break;
	default:
		break;
}
echo $msg;
$bool = move_uploaded_file($file['tmp_name'],'./1.jpg');
if($bool){
	echo "success";
} else {
	echo "fail";
}

 ?>

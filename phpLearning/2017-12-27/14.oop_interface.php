<?php 
# 多态
# const  用const关键字修饰的成员属性叫做常量

/* //常量一经定义, 不能修改
define("APPNAME",'app');
echo APPNAME;
*/
// 定义一个Usb接口 让每个USB设备都必须遵守这个规范
interface Usb{
	// public $width = '1cm';
	const WIDTH = '1cm';
	const HEIGHT=  '2cm';
	function run();  // 抽象方法 等待被实现的类 来重写此方法
}
class Computer{
	function useUsb($usb){
		$usb->run();
	}
}
// 鼠标来实现接口(鼠标插入接口)
class Mouse implements Usb{
	public function run(){
		echo "鼠标插入成功, 可以正常运行!<br>";
	}
}
class Udisk implements Usb{
	public function run(){
		echo "U盘插入成功, 可以正常运行!<br>";
	}
}
$c = new Computer();
$mouse = new Mouse();
$c->useUsb($mouse);

$udisk = new Udisk();
$c->useUsb($udisk);

 ?>





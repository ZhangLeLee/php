<?php 
# 单例模式 单态模式
# 应用场景: php的一个主要的应用就是应用程序与数据库打交道, 在一个应用中会存在大量的数据库操作,针对数据库句柄链接数据库的行为,使用单例模式可避免大量的new操作,因为每一次操作都会消耗系统和内存的资源.
# 一个类只能有一个实例对象存在
# 为了让类只能实例化一次 前提是让类不能实例化 是不能以 new 的方式去实例化

class Db{
	private static $obj = null;

	// 1.构造方法私有化
	private function __construct(){
		echo "数据库链接成功<br>";
	}

	public static function getInstance(){
		// 通过静态方法类实例化 产生对象
		if(is_null(self::$obj)){
			// 如果self::$obj == null
			// 类内部去实例化
			self::$obj = new Db();
		}
		return self::$obj;
	}

	public static function run(){
		echo "我的run方法<br>";
	}
}

/*
// 不能在类外实例化
$db = new Db();
$db1 = new Db();
$db2 = new Db();
 */

# 类外访问静态的方法 类名::静态方法名
$db = Db::getInstance();
$db1 = Db::getInstance();
$db2 = Db::getInstance();
// $dbRun = Db::run();

 ?>







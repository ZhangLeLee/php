<?php 
// 继承
class Person{
	public function a(){
		echo 'Person/a';
	}

	protected function b(){
		echo "Person/b";
	}

	private function c(){
		echo "Person/c";
	}

}

class Student extends Person{
	public function a(){
		// 子类方法中同时调用父类的方法
		parent::a();
		echo "Student-a";
	}

	public function b(){
		parent::b();
		echo "Student/b";
	}

	public function test(){
		$this->b();
	}

	private function c(){
		// parent::c();
		echo "Student-c";
	}

	// private function a(){
	// 	parent::a();
	// 	echo "Student-a";
	// }
}
$s = new Student();
// $s->a();
// $s->b();

// 在PHP中允许子类重写覆盖父类的方法
// 如果子类中出现了与父类重名的方法，我们称之为重写

// public 宽松   protected 中间   private 严格
// $s->a();
// $s->test();
// 如果子类重写父类，子类只能比父类宽松，不能比父类严格
$s->c();

/*

父类           	子类
public     		public
protected		protected    public
private 		private      protected    public

*/
?>



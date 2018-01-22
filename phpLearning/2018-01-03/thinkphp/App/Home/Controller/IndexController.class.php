<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
use Think\Verify;
use Think\Upload;
use Think\Image;

class IndexController extends Controller {
    public function index(){
        echo "学习php";
        $m = M();
        // $salary = M('Salary');
        # table 里面是完整的表名 加上前缀
     	// $rows = $m->table('Users')->order('age asc')->select();
     	$rows = $m->table('Users')->order('id desc')->limit(2)->select();
     	dump($rows);

     	$this->display();
    }

    # session 赋值
    public function setSession(){
    	echo "session 赋值";
    	// $_SESSION['name'] = 'dedee';
    	session('name1','dedee');
    	session('name2','titii');
    }

    # session 获取
    public function getSession(){
    	echo "session 获取";
    	/*
    	$name1 = session('name1');
    	$name2 = session('name2');
    	dump($name1);
    	dump($name2);
    	*/
    	$value = session();
    	dump($value);
    }

    # session 销毁
    public function unsetSession(){
    	echo "session 销毁";
    	session('name1',null);
    	session('name2',null);
    }


    // 随机插入数据
    public function randInsertData(){
    	$m = M('Users');
    	$str = 'abcdefghighlmnopqrstuvwxyz1234567890';
    	for($i = 0; $i < 99; $i++){
    		// 随机打乱字符串
    		$str = str_shuffle($str);
    		$name = substr($str,0,6);
    		$pass = substr($str,6,3);
    		$age = mt_rand(18,50);
    		$sex = mt_rand(1,2);
    		$data = compact('name','pass','age','sex');
    		// dump($data);
    		$m->add($data);
    	}
    }

    # 分页
    public function userList(){
    	# 实例化表对象
    	$m = M('Users');

    	# 组装页码
    	$totalNums = $m->count();  // 获取总记录数
    	$pageSize = 10;  // 每页记录数
    	$page = new Page($totalNums,$pageSize);  // 实例化page对象
    	# 分页配置
    	$page->setConfig('first','首页');
    	$page->setConfig('last','尾页');
    	$page->setConfig('prev','上一页');
    	$page->setConfig('next','下一页');
    	$page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');

    	$show = $page->show();  // 调用show方法,返回组装好的分页代码
    	// echo $show;

    	# 根据当前其实位置和每页条数 获取每页记录
    	$rows = $m->order('id asc')->limit($page->firstRow,$page->listRows)->select();  // 根据页码 根据其实记录 获取我们需要的记录
    	// dump($rows);

    	$this->assign('rows',$rows);  // 数据模板赋值
    	$this->assign('show',$show);  // 分页 页码模板赋值
    	$this->display();  // 调用模板

    	/*
    	每次点击下一页, 其实都是访问的本方法, 只不过传递了一个p(页码)而已, 因为传递的页码不同, 导致取数据的起始位置不同, 因此给人以翻页的感觉
    	*/

    }

    // 页码
    public function pageTest(){
    	echo "分页";
    	# 1.总记录数
    	# 2.每页条数
    	# 3.计算一共多少页 ceil(总记录数/每页条数)  向上取整

    	// 总记录数
    	$totalNums = 307;
    	// 每页条数
    	$pageSize = 10;
    	// 共多少页
    	// $totalPates = ceil($totalNums/$pageSize);
    	// $page = new\Think\Page($totalNums,$pageSize);
    	$page = new Page($totalNums,$pageSize);
    	$show = $page->show();
    	// echo $show;

    	/*
		SELECT * FROM 'users' ORDER BY id asc limit 0,2;  1  (1-1)*2
		SELECT * FROM 'users' ORDER BY id asc limit 2,2;  2  (2-1)*2
		SELECT * FROM 'users' ORDER BY id asc limit 4,2;  3  (3-1)*2
		开始位置 跟页码关系 (当前页码-1)*每页显示的行数
    	*/

    }


    # 验证码
    public function myVerify(){
    	$config = [
    		// 'fontSize'=>20,
    		// 'length'=>4,
    		// 'useNoise'=>false,
    		// 'imageW'=>150,
    		// 'imageH'=>50,

    		# 设置纯数字
    		'codeSet'=>'0123456789',

    		# 中文验证码必须要配合中文字体来使用
    		// 'useZh'=>true,
    		// 'fontttf'=>'caomei.ttf',
    	];
    	$verify = new Verify($config);
    	// $verify->entry(1);
    	$verify->entry(2);
    }
    # 验证码使用
    # 不需要知道存到session里的验证码是什么
    # 验证码一旦验证通过 验证码失效 session中会清除
    public function reg(){
    	$this->display();
    }
    public function regAction(){
    	$code = I('post.code');
    	if($this->checkV($code,2)){
    		echo "验证码正确";
    	} else {
    		echo "验证码错误";
    	}
    }
    # 验证验证码的正确性
    public function checkV($code){
    	$verify = new Verify();
    	return $verify->check($code);
    }



    # 文件上传 利用框架自身的文件上传类来实现文件上传
    public function myUpload(){
        $this->display();
    }
    # 文件上传的处理程序
    public function upload(){
        # 借助于文件上传类实现文件的上传
        $upload = new Upload();
        $upload->maxSize = '3145728';  // 上传文件大小 不超过3MB
        // $upload->exts = ['jpg','gif','png','jpeg'];  // 设置文件上传类型
        // $upload->savePath = './Public/uploads/'; // 上传成功
        $upload->rootPath = './Public/uploads/';  // 在Public文件夹下创建uploads文件夹, 设置文件夹权限为读与写 方可上传
        $upload->saveName = 'time';

        # 上传
        $info = $upload->uploadOne($_FILES['photo']);
        if($info){
            echo "上传成功";
        }else{
            echo "上传失败 ".$this->error($upload->getError());
        }

    }


    # 在xyz方法中调用fun方法
    public function fun(){
        return 1;
    }
    public function xyz(){
        /*$res = $this->fun();
        echo $res;*/
        $res = funfun();
        echo $res;
    }

/*

    # 如果调用的是UserController.class.php中的方法, 借助App/Common/Common/function.php文件(文件名必须是function.php)实现
    # function.php中的文件所有的方法, 所有控制器都可以调用用
    # 实现方法 如下:
        $value = funfun();  //直接调用
        echo $value;

*/   

    # 图像处理
    public function image(){
        # 实例化图像对象
        $image = new Image();
        # 打开图片
        $image->open('./1.jpg');

        // $image = new \Think\Image(\Think\Image::IMAGE_GD,'./1.jpg'); // GD库

        $width = $image->width();
        $height = $image->height();
        $type = $image->type();
        $size = $image->size();
        echo '图片宽为: '.$width.';<br>图片高为: '.$height.'<br>图片类型: '.$type;

        # 图片裁剪
        // $image->crop(200,230,50,50)->save('./crop2.jpg');
        # 生成缩略图  只能变小 不能变大
        // $image->thumb(150, 150)->save('./thumb.jpg');
        # 添加图片水印
        // $image->water('./1.jpg')->save('./water.jpg');
    }




}
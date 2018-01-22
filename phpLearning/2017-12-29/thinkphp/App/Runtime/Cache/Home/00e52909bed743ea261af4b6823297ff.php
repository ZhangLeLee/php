<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="/phpLearning/2017-12-29/thinkphp/Public/css/animate.min.css"/>
		<style type="text/css">
		    /* 标签样式初始化 */
            body,html{
            	margin:0;padding:0;
            background:#fff;
            	font-size:14px;
            	font-family:Arial,Helvetica,'STHeiti','Microsoft YaHei','sans-serif'
            }
            form,ul,li,p,h1,h2,h3,h4,h5,h6{
            	margin:0;padding:0;
            }
            img{border:0;}
            ul,li{list-style-type:none;}
            a{color:#00007F;text-decoration:none;}
            a:hover{text-decoration:none;}
            
            div{
			background-attachment:fixed;
            }
            .div1{
            	height:1098px;
            	position: relative;
            }
            .div2,.div4,.div6{
            	height:600px;
            }
            .div3,.div5{
            	height: 585px;
            }
            .div7{
            height:587px;
            }
            .img1{
			background-image:url(/phpLearning/2017-12-29/thinkphp/Public/img/b.jpg);
		    }
		    .img2{
			background-image:url(/phpLearning/2017-12-29/thinkphp/Public/img/a.jpg);
		    }
		    .img3{
			background-image:url(/phpLearning/2017-12-29/thinkphp/Public/img/cc.jpg) ;
		    }
            .top{
            	background: rgb(29,136,229);
            	width: 100%;
            	height: 775px;
            	position: relative;
            }
            .cool{
            	width:1200px;
            	height: 75px;
            	/*border: 1px solid red;*/
            	margin: 0 auto;
            }
            .logo{
            	margin-top: 15px;
            	display: inline-block;
            }
            .shou{
            	/*border: 1px solid blue;*/
            	width: 270px;
            	margin-top: -63px;
            	margin-left: 150px;
            }
            .shou a{
            	display: inline-block;
            	color: white;
            	font-size: 20px;
            	padding: 25px 20px;
            }
            .xia,.dongtai{
            	margin-left: 10px;
            }
            .shou a:hover{
            	background: rgb(0,168,244);
            }   
           .zhuce{
           	width: 95px;
           	height: 39px;
           	margin-top: -55px;
            	margin-left: 850px;
            	background: url(/phpLearning/2017-12-29/thinkphp/Public/img/download-1.png) 0 -244px;
            	cursor: pointer;
           }
           .zhuce:hover{
           	background: url(/phpLearning/2017-12-29/thinkphp/Public/img/download-1.png) 0 -284px;
           }
            .ul1,.ul2{
            	/*border: 1px solid yellow;*/
            	width: 200px;
            	display: flex;
            	float: right;
            	margin-right: 15px;
            	justify-content: space-between;            	
            }
            .ul1{
            	margin-top: -40px;
            }
            .li_content{
            	color: white;
            }
            
            .li_content:hover{
            	color: rgb(0,168,244);
            }
            .ul2{
            	margin-top:-15px;
            }
            .top_last{
            	background: white;
            	height: 280px; 
            	text-align: center;           	
            }
            .cool2{
            	/*border: 1px solid blue;*/
            	width: 1200px;
            	margin: 0 auto;
            	height: 650px;
            	position: relative;
            	/*display: none;*/
            }
            .cool2_img1{
            	margin-top: 150px;
            	margin-left: 40px;
            }
            .liji{
            	/*border: 1px solid ;*/
            	width: 385px;
            	height: 75px;
            	margin-top: 50px;
            	margin-left: 35px;
            	cursor: pointer;
            }
            .down17{
            	position: absolute;
            	left: 500px;
            	top: 100px;
            }
            .lun1{
            	position: absolute;
            	left: 900px;
            }
            .an1{
            	/*border: 1px solid ;*/
            	width: 13px;
            text-align: center;
            }
            .an2{
            	/*border: 1px solid ;*/
            	width: 13px;
            position: absolute;
            top: -2px;
            text-align: center;
            display: none;
            }
            .lun2{
            	position: absolute;
            	left: 920px;
            }           
            .an3{
            	/*border: 1px solid ;*/
            	width: 13px;
            text-align: center;
            display: none;
            }
            .an4{
            	/*border: 1px solid ;*/
            	width: 13px;
            position: absolute;
            top: -2px;
            text-align: center;
            }
            .gou,.tong,.xing{
            	/*border: 1px solid green;*/
            	margin: 0 auto ;
            	width:1100px;
            	position: relative;
            	height: 585px;
            }
            .img_1,.img_xing1{
            	position:absolute;
            bottom:0;           
            }
            .img_2{
            	position: absolute;
            	right:50px;
            	top: 120px;
            }
            .gou_3{
            	/*border: 1px solid;*/
            	position: absolute;
            	right: 50px;
            	top: 250px;
            	text-align:right;
            	letter-spacing:4px;
            }
            .gou_3 p,.tong_3 p{
            	font-size:17px;
            	color: rgb(144,144,144);
            	line-height: 25px;
            }
            .geng{
            	/*border: 1px solid ;*/
            	position: absolute;
            	right: 50px;
            	top: 320px;
            }
            .geng2 a,.tong2 a{
            	color: rgb(91,203,248);
            	font-size:17px;
            }
            .geng2{
            	position: absolute;
            	right: 50px;
            	top: 320px;
            }
            .gou_4{
            	/*border:1px solid ;*/
            	width:350px;
            	text-align:center;
            	position:absolute;
            	right:50px;
            	top:400px;
            }
            .ul3{
            	width: 310px;
            	display: flex;
            	float: right;
            	margin-right: 25px;
            	justify-content: space-between;
            }
            .li_content2{
            	margin-top: 15px;
            	color: rgb(144,144,144) ;
            }
            .shu{
            	border-left: 1px solid rgb(228,228,228);
            	height: 85px;
            	display: inline-block;
            }
            .shu1{
            	position: absolute;
            	left: 130px;
            	top: 0px;
            }
            .shu2{
            	position: absolute;
            	left: 240px;
            	top: 0px;
            }
            .shu3{
            	position:absolute;
            	left: 230px;
            	top: 0px;
            }
            .img_tong2{
            	position: absolute;
            	right: -5px;
            	top: 150px;
            }
            .tong1{
            	position: absolute;
            left: 30px;
            	top: 110px;
            }
            .tong_3{
            	position: absolute;
            	left: 30px;
            	top: 250px;
            	letter-spacing:4px;
            }
            .tong2{
            	position: absolute;
            	left: 30px;
            	top: 320px;
            }
            .geng_4{
            	width: 350px;
            	text-align: center;
            	position: absolute;
            	left: 30px;
            	top: 400px;
            }
            .ul4{
            	width: 280px;
            	display: flex;
            	float: right;
            	margin-right: 25px;
            	justify-content: space-between;
            }
            .ul5{
            	width: 270px;
            	display: flex;
            	float: right;
            	margin-right:35px;
            	justify-content: space-between;
            }
            .img_xing1{
             left: 150px;     
            }
            .x1{
            	position: absolute;
            	top: 300px;
            	left: 60px;         
            }
            .x2{
            	position: absolute;
            	top: 300px;
            	left: 250px;           
            }
            .x3{
            	position: absolute;
            	top: 300px; 
            	left: 440px;       
            }
            .jiao{
            	background:rgb(31,31,31);
            	height:380px;
            	width: 100%;          
            }
            .foot{
            	/*border: 1px solid purple;*/
            	margin: 0 auto ;
            	width:1100px;
            	position: relative;
            	height: 377px;
            }
            .footp{
            	color: rgb(83,83,83);
            	position: absolute;
            top: 35px;
            left: 100px;
            }
            .ding{
            	/*border: 1px solid red;*/
            	width: 80px;
            	height: 50px;
            	display: inline-block;
            	position: absolute;
            	top: 80px;
            	cursor: pointer;
            }
            .ding1{
            	left: 100px;
            	background:url(/phpLearning/2017-12-29/thinkphp/Public/img/dingwei.png);
            }
            .ding1:hover{
            	background:url(/phpLearning/2017-12-29/thinkphp/Public/img/dingwei.png) 0 -93px;
            }
            .ding1:hover~.dingp1,.ding2:hover~.dingp2,.ding3:hover~.dingp3,.ding4:hover~.dingp4{
            	color: rgb(0,168,244);   
            }
            .ding2{
            	left: 210px;
            	background:url(/phpLearning/2017-12-29/thinkphp/Public/img/dingwei.png) -105px 0 no-repeat;
            }
            .ding2:hover{
            	background:url(/phpLearning/2017-12-29/thinkphp/Public/img/dingwei.png) -105px -93px no-repeat;
            }
            .ding3{
            	left: 320px;
            	background:url(/phpLearning/2017-12-29/thinkphp/Public/img/dingwei.png) -215px 0 no-repeat;
            }
            .ding3:hover{
            	background:url(/phpLearning/2017-12-29/thinkphp/Public/img/dingwei.png) -215px -93px no-repeat;
            }
            .ding4{
            	left: 430px;
            	background:url(/phpLearning/2017-12-29/thinkphp/Public/img/dingwei.png) -325px 0 no-repeat;
            }
            .ding4:hover{
            	background:url(/phpLearning/2017-12-29/thinkphp/Public/img/dingwei.png) -325px -93px no-repeat;
            }
            .dingp{
            	color: rgb(133,133,133);
            	position: absolute;
            	top: 145px;
            }
            .dingp1{
            	left: 105px;
            }
            .dingp2{
            	left: 225px;
            }
            .dingp3{
            	left: 330px;
            }
            .dingp4{
            	left: 437px;
            }
            .foot_right{
            	/*border: 1px solid antiquewhite;*/
            	width: 440px;
            	height: 200px;
            	position: absolute;
            	right: 55px; 
            	top: 32px;           	            
            	}
            	.column{
            		columns: 3 75px;
            		column-gap:6em;
            	}
            	.column p{
            		color: rgb(83,83,83);
            		line-height: 20px;          		
            	}            
            	.column a{
            		color: rgb(133,133,133);
            		display: inline-block;
            		font-size:12px;
            	}
            	.column a:hover{
            		color: whitesmoke;
            	}
            	.bor1{
            		border-top:1px solid rgb(83,83,83);            		
            		width: 950px;
            		height: 1px;
            		position: absolute;
            		bottom: 145px;
            		left: 90px;
            	}
            	.lastp1{
            		color: rgb(83,83,83);
            		text-align: center;
            		position: absolute;
            		bottom: 106px;
            		left: 420px;
            		font-size: 12px;
            	}
		</style>
	</head>
	<body>
		<div class="div1">
		<div class="top">
			<div class="cool">
				<img class="logo" src="/phpLearning/2017-12-29/thinkphp/Public/img/download-20.png"/>
				<div class="shou">
					<a class="ye" href="">首页</a>
					<a class="xia" href="">下载</a>
					<a class="dongtai" href="">动态</a>					
				</div>
				<div class="zhuce">					
				</div>
				
				<ul class="ul1">
					<!-- <li class="li_content">QQ会员</li> -->
					<!-- <li class="li_content">QQ安全</li> -->
					<li class="li_content">登录</li>
					<li class="li_content"><a href="/phpLearning/2017-12-29/thinkphp/index.php/Home/Index/register">Index注册</a></li>
                    <li class="li_content"><a href="/phpLearning/2017-12-29/thinkphp/index.php/Home/User/register">User注册</a></li>
				</ul>
				<ul class="ul1 ul2">
					<li class="li_content li_content3">当前在线人数:266,520,183</li>
				</ul>
				
				<div style="clear: both;"></div>
			</div>
			<div class="cool2">
				<img class="cool2_img1" src="/phpLearning/2017-12-29/thinkphp/Public/img/download-18.png"/>
				<div class="liji">
					<img src="/phpLearning/2017-12-29/thinkphp/Public/img/download-16.png"/>
				</div>
				<img class="down17" src="/phpLearning/2017-12-29/thinkphp/Public/img/download-17.png"/>
            </div>
            
            <div class="lun1">
            <div class="an1"> 	   
				<img class="anniu1" src="/phpLearning/2017-12-29/thinkphp/Public/img/download-4.png"/>
			</div>
			<div class="an2">
			    <img class="anniu2" src="/phpLearning/2017-12-29/thinkphp/Public/img/download-3.png"/>
			</div>
			</div>
			
			<div class="lun2">
            <div class="an3"> 	   
				<img class="anniu1" src="/phpLearning/2017-12-29/thinkphp/Public/img/download-4.png"/>
			</div>
			<div class="an4">
			    <img class="anniu2" src="/phpLearning/2017-12-29/thinkphp/Public/img/download-3.png"/>
			</div>
			</div>
			
		</div>
		    <div class="top_last">
				<img  src="/phpLearning/2017-12-29/thinkphp/Public/img/download.png"/>
		    </div>
		</div>
		<div class="div2 img1"></div>
		     
        <div class="div3">
        	    <div class="gou">
        	    	    <img class="img_1" src="/phpLearning/2017-12-29/thinkphp/Public/img/gou1.png"/>
        	    	    <img class="img_2" src="/phpLearning/2017-12-29/thinkphp/Public/img/gou2.png"/>
        	    	    <div class="gou_3">
        	    	    	    <p>无论何时何地,你都能自由享受QQ在各类终端<br />上带来的高清通话,与好友一起想聊多久聊多久</p>
        	    	    </div>
        	    	    <div class="geng2">
        	    	    	    <a href="">了解更多&nbsp;&nbsp;></a>
        	    	    </div>
        	    	    <div class="gou_4">
        	    	    	<img src="/phpLearning/2017-12-29/thinkphp/Public/img/gou3.png"/>
        	    	    	<ul class="ul3">
					<li class="li_content2">两人,多人通话</li>
					<li class="li_content2">群组通话</li>
					<li class="li_content2">屏幕分享</li>
				</ul>
				<div class="shu shu1"></div>
				<div class="shu shu2"></div>
        	    	    </div>
        	    </div>
        </div>
        <div class="div4 img2"></div>
        <div class="div5">       	    
        	    <div class="tong">
        	    	    <img class="tong1" src="/phpLearning/2017-12-29/thinkphp/Public/img/tong1.png"/>
        	    	    <img class=" img_tong2" src="/phpLearning/2017-12-29/thinkphp/Public/img/tong2.png"/>
        	    	    <div class="tong_3">
        	    	    	    <p>通过QQ,电脑和手机上的文件都能收发自如，<br />
更有手机在线查阅，轻松你的工作和生活。</p>
        	    	    </div>
        	    	    <div class="tong2">
        	    	    	    <a href="">了解更多&nbsp;&nbsp;></a>
        	    	    </div>
        	    	    <div class="geng_4">
        	    	    	<img src="/phpLearning/2017-12-29/thinkphp/Public/img/geng4.png"/>
        	    	    	<ul class="ul4">
					<li class="li_content2">文件漫游</li>
					<li class="li_content2">多端互传</li>
					<li class="li_content2">在线预览</li>
				</ul>
				<div class="shu shu1"></div>
				<div class="shu shu2"></div>
        	    	    </div>
        	    </div>
        </div>
        <div class="div6 img3"></div>
        <div class="div7">
        	    <div class="xing">
        	    	<img class="img_xing1" src="/phpLearning/2017-12-29/thinkphp/Public/img/xing1.png"/>
        	    	    <img class="img_2" src="/phpLearning/2017-12-29/thinkphp/Public/img/xing2.png"/>
        	    	    <div class="gou_3">
        	    	    	    <p>即使世界很大，你也不会孤单，在兴趣部落 <br />有和你一样的人，期待着和你一起发现精彩</p>
        	    	    </div>
        	    	    <div class="geng2">
        	    	    	    <a href="">了解更多&nbsp;&nbsp;></a>
        	    	    </div>
        	    	    <div class="gou_4">
        	    	    	<img src="/phpLearning/2017-12-29/thinkphp/Public/img/xing3.png"/>
        	    	    	<ul class="ul5">
					<li class="li_content2">兴趣社区</li>
					<li class="li_content2">附近热点</li>
					<li class="li_content2">精彩图集</li>
				</ul>
				<div class="shu shu1"></div>
				<div class="shu shu3"></div>
        	    	    </div>
        	    	    
        	    	    <img class="wow bounceInLeft x1" src="/phpLearning/2017-12-29/thinkphp/Public/img/xblue.png"/>
        	    	    <img class="wow bounceInLeft x2" src="/phpLearning/2017-12-29/thinkphp/Public/img/xgreen.png"/>
        	    	    <img class="wow bounceInLeft x3" src="/phpLearning/2017-12-29/thinkphp/Public/img/xyellow.png"/>
        	    </div>        	            	   
        </div>
         <div class="jiao">
        	    	 <div class="foot">
        	    	 	<div class="footp"><p>了解热门产品</p></div>        	    	 	
        	    	 	<div class="ding ding1"></div>
        	    	 	<div class="dingp dingp1"><p>QQ 手机版</p></div>        	    	 	
        	    	 	<div class="ding ding2"></div>
        	    	 	<div class="dingp dingp2"><p>QQ PC版</p></div>
        	    	 	<div class="ding ding3"></div>
        	    	 	<div class="dingp dingp3"><p>QQ Mac版</p></div>
        	    	 	<div class="ding ding4"></div>
        	    	 	<div class="dingp dingp4"><p>QQ Pad版</p></div>
        	    	 	<div class="foot_right">
        	    	 		<div class="column">
        	    	 		<p>QQ安全 <br />
        	    	 			<a href="">QQ安全</a>
        	    	 			<a href="">安全中心</a>
        	    	 			<a href="">冻结帐号</a> 
        	    	 			<a href="">举报恶意行为</a> 
        	    	 			<a href="">恢复好友和群</a> 
        	    	 			<br /><br /><br /><br />
        	    	 		</p>
        	    	 		<p>帮助反馈 <br />
        	    	 			<a href="">帮助反馈</a> 
        	    	 			<a href="">腾讯客服</a> 
        	    	 			<a href="">反馈问题</a>
        	    	 			<a href="">腾讯微博</a> 
        	    	 			<a href="">新浪微博</a>
        	    	 			<br /><br /><br /><br />
        	    	 		</p>
        	    	 		<p>友情链接 <br />
        	    	 			<a href="">兴趣部落</a><br />
        	    	 			<a href="">QQ群</a><br />
        	    	 			<a href="">QQ音乐</a><br />
        	    	 			<a href="">QQ浏览器</a><br />
        	    	 			<a href="">来电</a><br />
        	    	 			<a href="">腾讯视频</a>
        	    	 			<a href="">腾讯体验中心</a>
        	    	 			<a href="">腾讯电脑管家</a>       	    	 			
        	    	 		</p>
        	    	 		</div>
        	    	 	</div>        	    	 	
        	    	 	<div class="bor1"></div>
        	    	 	<p class="lastp1">Copyright © 1998-2017 Tencent. All Rights Reserved. <br />腾讯公司 版权所有</p>
        	    	 </div>   
        	 </div>
	</body>
</html>
<script type="text/javascript" src="/phpLearning/2017-12-29/thinkphp/Public/js/wow.min.js">	
</script>
<script type="text/javascript">
	new WOW().init();
</script>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文本</title>
	<link rel="stylesheet" href="/wenbentp/Public/wenbenCss/wenben.css">
	<link rel="stylesheet" href="/wenbentp/Public/jQuerycxColor/css/jquery.cxcolor.css">
	<link rel="stylesheet" href="/wenbentp/Public/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wenben clearfix">
		<!-- 左部分 -->
		<div class="wb-left">
			<div class="wb-active clearfix"></div>
			<!-- 基础组件 -->
			<div class="basicComponents">
				<p class="wb-bc">基础组件</p>
				<div class="wb-btn">
					<p class="wenben-btn">文本</p>
				</div>
			</div>
		</div>
		<!-- 右部分 -->
		<div class="wb-right">
			<!-- 文本编辑 -->
			<div class="wb-edit">
				<div class="tri"></div>
				<p class="wb-bc">文本</p>
				<div class="wb-line"></div>
				<!-- 编辑内容 -->
				<div class="wb-con">
					<div class="wb-con-text">
						<label><i>* </i>文本:</label>
						<textarea name="wb-con-textWrap" id="textWrap" cols="37" rows="2" placeholder="请输入要说明的文字, 最多100字"></textarea>
					</div>
					<div class="wb-con-size">
						<label>字体大小:</label>
						<input class="size-lg" type="radio" name="ra"> <span>大</span>
						<input class="size-md" type="radio" name="ra" checked> <span>中</span>
						<input class="size-sm" type="radio" name="ra"> <span>小</span>
					</div>
					<div class="wb-con-textColor">
						<label>文本颜色:</label>
						<span class="textColor-span"><input type="text" id="inp-textColor" class="input_cxcolor" readonly value="#000000"></span>
						<span class="textColor-reset">重置</span>
					</div>
					<div class="wb-con-bgColor">
						<label>背景颜色:</label>
						<span class="textColor-span"><input type="text" id="inp-bgColor" class="input_cxcolor" readonly value="#ffffff"></span>
						<span class="bgColor-reset">重置</span>
						
					</div>
					<div class="wb-con-displayPosition">
						<label>显示位置:</label>
						<input class="dp-left" type="radio" name="dp" checked> <span> 居左</span>
						<input class="dp-center" type="radio" name="dp"> <span> 居中</span>
						<input class="dp-right" type="radio" name="dp"> <span> 居右</span>
					</div>
					<div class="wb-con-link clearfix">
						<label class="label-address">链接:</label>
						<div class="wb-con-link-address">
							<p class="p-address">设置链接到的页面地址 <i class="fa fa-angle-down"></i> </p>
							<div class="div-address">
								<p class="goods-classification">商品及分类</p>
								<p class="xcx-microPage">小程序微页面</p>
								<p class="xcx-path">小程序路径</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
<script src="/wenbentp/Public/js/jquery-3.2.1.min.js"></script>
<script src="/wenbentp/Public/js/wenben.js"></script>
<script src="/wenbentp/Public/jQuerycxColor/js/jquery.cxcolor.min.js"></script>
</html>
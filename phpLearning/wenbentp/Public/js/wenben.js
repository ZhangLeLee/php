$(".wb-edit").hide();
$(".wenben-btn").click(function(){
	addWenben();
	$(".wb-edit").show();
})

// 创建新文本
function addWenben(){
	// 创建新的div
	createElement("p",$(".wb-active"),"addWenbenWrap");
	// 获取文字内容
	$("#textWrap").keyup(function(e){
		var addCon = e.target.value;
		$(".addWenbenWrap").html(addCon);
		$(".addWenbenWrap").css({"fontSize":"16px"});
	})
	// 设置文字大小
	$(".size-lg").click(function(){
		$(".addWenbenWrap").css({"fontSize":"25px"});
	})
	$(".size-md").click(function(){
		$(".addWenbenWrap").css({"fontSize":"16px"});
	})
	$(".size-sm").click(function(){
		$(".addWenbenWrap").css({"fontSize":"10px"});
	})
	// 设置文本字体颜色
	$("#inp-textColor").cxColor();
	$("#inp-textColor").bind("change",function(){
		$(".addWenbenWrap").css("color",this.value);
	})
	$(".textColor-reset").click(function(){
		$(".addWenbenWrap").css("color","#000000");
		$("#inp-textColor").css("background","#000000");
	})
	// 设置背景颜色
	$("#inp-bgColor").cxColor();
	$("#inp-bgColor").bind("change",function(){
		$(".addWenbenWrap").css("background",this.value);
	})
	$(".bgColor-reset").click(function(){
		$(".addWenbenWrap").css("background","#ffffff");
		$("#inp-bgColor").css("background","#ffffff");
	})
	// 设置文字居左/中/右
	$(".dp-left").click(function(){
		$(".addWenbenWrap").addClass("tl").removeClass("tc").removeClass("tr");
	})
	$(".dp-center").click(function(){
		$(".addWenbenWrap").addClass("tc").removeClass("tl").removeClass("tr");
	})
	$(".dp-right").click(function(){
		$(".addWenbenWrap").addClass("tr").removeClass("tc").removeClass("tl");
	})
	// 文本链接
	$(".p-address").click(function(){
		if($(".div-address").css('display') == 'none'){
			$(".p-address i").removeClass("fa-angle-down").addClass("fa-angle-up");
			$(".div-address").css("display","block");
		} else {
			$(".p-address i").removeClass("fa-angle-up").addClass("fa-angle-down");
			$(".div-address").css("display","none");
		}
		
	})
}

// jquery创建元素
function createElement(name,father,cStyle){
	var w = $("<"+name+">").appendTo(father);
	w.addClass(cStyle);
	return w;
}

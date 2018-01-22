<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<h1>会员列表</h1>
	<b><a href="/phpLearning/2018-01-02/thinkphp/index.php/Home/Index/add">添加会员</a></b>
	<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<td>编号</td>
			<td>用户名</td>
			<td>密码</td>
			<td>性别</td>
			<td>年龄</td>
			<td>操作</td>
		</tr>
		<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="id_<?php echo ($vo["id"]); ?>">
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["name"]); ?></td>
				<td><?php echo ($vo["pass"]); ?></td>
				<td>
					<?php echo ($vo['sex'] == 1?'男':'女'); ?>
				</td>
				<td><?php echo ($vo["age"]); ?></td>
				<td> <a href="/phpLearning/2018-01-02/thinkphp/index.php/Home/Index/edit/id/<?php echo ($vo["id"]); ?>">编辑</a>| <a href="javascript:del(<?php echo ($vo["id"]); ?>);">删除</a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</body>
<script>
	function del(id){
		var bool = confirm('您确定要删除吗?');
		if(bool){
			// 执行删除
			$.get('/phpLearning/2018-01-02/thinkphp/index.php/Home/Index/del',{id:id},function(data){
				// 回调函数
				// alert(data.status);
				if(data.status == 1){
					alert(data.msg);
					// 删除元素
					$('#id_'+id).remove();
				} else {
					alert(data.msg);
				}
			},'json')
		}
	}
</script>
</html>
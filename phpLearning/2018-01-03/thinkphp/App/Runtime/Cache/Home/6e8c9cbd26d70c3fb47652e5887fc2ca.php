<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>userList</title>
</head>
<body>
	我是模板页面
	<table border="1" cellspacing="0" cellpadding="0">
		<tr>
			<td>编号</td>
			<td>用户名</td>
			<td>密码</td>
			<td>性别</td>
			<td>年龄</td>
		</tr>
		<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["name"]); ?></td>
				<td><?php echo ($vo["pass"]); ?></td>
				<td><?php echo ($vo['sex'] == 1?'男':'女'); ?></td>
				<td><?php echo ($vo["age"]); ?></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<tr>
			<td colspan="5"><?php echo ($show); ?></td>
		</tr>
	</table>
</body>


</html>
<?php 
	$loggedIn = false;
	$names = ["Henry","Bucky","Emily"]
	/*
	if($loggedIn){
		echo "U r Logged In";
	} else {
		echo "U r NOT Logged In";
	}
	echo "<br>";

	# 三目运算符
	echo ($loggedIn) ? "U r Logged In":"U r NOT Logged In";
	echo "<br>";

	# 简写得到 true 或者 false
	$isRegistered = ($loggedIn == true) ? true : false;
	echo $isRegistered."<br>";

	#  三目嵌套
	$age = 18;
	$score = 80;
	echo "Your score is ".($score > 70 ? ($age < 20 ? "优秀" : "良好") : ($age < 20 ? "一般" : "差等"));
	echo "<br>";
	*/
?>


<!-- html + php 嵌套语法糖 -->
<div>
	<?php if($loggedIn){ ?>
	<p>Welcome to Beijing!</p>
	<?php } else {?>
	<p>Welcome to HongKong!</p>
	<?php } ?>
</div>

<!-- 优化 -->
<div>
	<?php if($loggedIn): ?>
	<p>Welcome to Beijing!</p>
	<?php else: ?>
	<p>Welcome to HongKong!</p>
	<?php endif; ?>
</div>

<!-- 遍历数组 foreach -->
<div>
	<?php foreach($names as $val): ?>
		<p><?php echo $val; ?></p>
	<?php endforeach; ?>
</div>

<!-- 遍历数组 for循环 -->
<div>
	<?php for($i = 0; $i < count($names); $i++): ?>
		<?php echo ($names[$i]); ?>
	<?php endfor; ?>
</div>

